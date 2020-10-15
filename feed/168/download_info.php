<?php       
require '../../conf/config_feed.php';  
require '../../conf/db.php'; 
require '../../scripts/db_connect.php'; 
require '../../scripts/msgs.php';      
$arrFrom = array("&",'"',"<",">","‘","’","“","”","'");
$arrTo = array("&amp;","&quot;","&lt;","&gt;","&lsquo;","&rsquo;","&ldquo;","&rdquo;","&apos;");   
define('UPLOAD_DIR', '../../products/photo/');
$fp = fopen("../../xml/info.xml", "r+");    
fputs($fp, '<?xml version="1.0" encoding="UTF-8" standalone="yes"?'.'>');   
fputs($fp, '<productList>'); 

$query = $mysqli->query('SELECT id_produkt FROM produkt WHERE obrazek is null');  
while ($value = $query->fetch_assoc()) { 
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);       
  curl_setopt($ch, CURLOPT_USERPWD, "16203/SEBELA:vichr");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_URL, "https://www.hs-online.cz:8081/restapi/b2b/zbozi/".$value['id_produkt']."/foto"); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);  
  curl_setopt($ch, CURLOPT_HEADER, FALSE);      
  
  if (curl_errno($ch)) {
    print "Error: " . curl_error($ch);
  } 
  else {   
    $response = curl_exec($ch);    
    curl_close($ch);     
    $array_data = json_decode(json_encode(simplexml_load_string($response)), true);  
    
    if (!array_key_exists("info",$array_data)){$array_data['info']="";}
     
    if(isset($array_data['foto'])){
    	$img = $array_data['foto'];
    	$img = str_replace('data:image/png;base64,', '', $img);
    	$img = str_replace(' ', '+', $img);
    	$data = base64_decode($img); 
    	$file = UPLOAD_DIR.$value['id_produkt'].'.png'; 
      $file2 = $value['id_produkt'].'.png';
    	$success = file_put_contents($file, $data); 
     }
     else{
      $file2="null";
     }   
     fputs($fp, "
      <product> 
        <productInternalId>".$value['id_produkt']."</productInternalId> 
        <info>".htmlspecialchars(str_replace($arrFrom, $arrTo, $array_data['info']))."</info> 
        <foto>".$file2."</foto>
      </product>");        
    }    
              
  }  
  fputs($fp, '</productList>');            
  fclose($fp);    
?>                    