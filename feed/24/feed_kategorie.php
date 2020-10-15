<?php   
  
$jmeno_kategorie="";         
function replace($string){     
global $jmeno_kategorie;
$jmeno_kategorie = str_replace(['<', '>', '"', "'", ' ', 'ě', 'š', 'č', 'ř', 'ž', 'ý', 'á', 'í', 'é', '(', ')', 'ů', 'ú', 'ň', 'Ň', 'Ě', 'Š', 'Č', 'Ř', 'Ž', 'Ý', 'Á', 'Í', 'É', 'Ů', 'Ú',',',', '], ['', '', '', '' , '-', 'e', 's', 'c', 'r', 'z', 'y', 'a', 'i', 'e', '', '', 'u', 'u', 'n', 'N', 'E', 'S', 'C', 'R', 'Z', 'Y', 'A', 'I', 'E', 'U', 'U','',''], $string);
return $jmeno_kategorie;
}        

/*--------------------------------------------------------------------*/
require '../../conf/config_feed.php'; // zakladni konfigurace webu
require '../../conf/db.php'; // nastaveni pripojeni k databazi
require '../../scripts/db_connect.php'; // pripojeni k DB serveru
require '../../scripts/msgs.php'; // pripojeni k DB serveru
/*--------------------------------------------------------------------*/

$xml=simplexml_load_file("../../xml/data.xml");   
$arr = json_decode(json_encode($xml), true);
foreach ($arr['product'] as $value){    
  $pole = str_replace(["/neurčeno", "/neurčeno"], ["", ""], $value['categoryLabel']);
  $pole = trim($pole);
  $pole = explode( '/',  $pole);  
  for ($i=0;$i<count($pole);$i++){           
    if ($i<1){
      $jmeno_kategorie_bf="NULL";   
      $lomitko ='';  
      replace($pole[($i)]); 
      $jmeno_kategorie2 = $jmeno_kategorie;   
    }                                 
    else{     
      $lomitko = '/';  
      if ($i<2){          
        replace($pole[($i)]);
        $jmeno_kategorie2 = $jmeno_kategorie2.'/'.$jmeno_kategorie;  
      }
      else{         
        replace($pole[($i)]);
        $jmeno_kategorie2 = $jmeno_kategorie2.'/'.$jmeno_kategorie;    
      }    
      $jmeno_kategorie_bf = "'".$jmeno_kategorie_bf.$lomitko."'";                 
    }        
     $query = $mysqli->query("INSERT IGNORE INTO kategorie(jmeno_kategorie, sparovaneid, nazev) VALUES('$jmeno_kategorie2/', $jmeno_kategorie_bf, '".$pole[($i)]."')");  
      if ($mysqli->errno != 0)
      {   
       echo 'Chyba SQL dotazu: '.$mysqli->errno.': '.$mysqli->error."<br>"; 
      }           
     $jmeno_kategorie_bf = $jmeno_kategorie2;
  }                             
  $i++; 
} 
?>