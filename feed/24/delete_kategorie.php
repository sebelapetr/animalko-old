<?php     
$jmeno_kategorie="";         
function replace($string){     
global $jmeno_kategorie;
$string = rtrim($string);
$jmeno_kategorie = str_replace(['<', '>', '"', "'", ' ', 'ě', 'š', 'č', 'ř', 'ž', 'ý', 'á', 'í', 'é', '(', ')', 'ů', 'ú', 'ň', 'Ň', 'Ě', 'Š', 'Č', 'Ř', 'Ž', 'Ý', 'Á', 'Í', 'É', 'Ů', 'Ú',',',', ', '&amp'], ['', '', '', '' , '-', 'e', 's', 'c', 'r', 'z', 'y', 'a', 'i', 'e', '', '', 'u', 'u', 'n', 'N', 'E', 'S', 'C', 'R', 'Z', 'Y', 'A', 'I', 'E', 'U', 'U','','', '&'], $string);
return $jmeno_kategorie;
}      
require '../../conf/config_feed.php';  
require '../../conf/db.php'; 
require '../../scripts/db_connect.php'; 
require '../../scripts/msgs.php'; 
$xml=simplexml_load_file("../../xml/data.xml");   
$arr = json_decode(json_encode($xml), true); 
foreach ($arr['product'] as $value){ 
  $value['categoryLabel'] = str_replace(["/neurčeno", "/neurčeno"], ["", ""], $value['categoryLabel']); 
  $value['categoryLabel'] = replace($value['categoryLabel']);       
  $pole[] = $value['categoryLabel']."/";  
}                                    
$query = $mysqli->query("select i.jmeno_kategorie from kategorie as i, produkt as y where i.jmeno_kategorie = y.kategorie group by i.jmeno_kategorie;");  
while ($row = $query->fetch_assoc()) { 
  $pole_databaze[] = $row['jmeno_kategorie'];
}       
$query = $mysqli->query("SET FOREIGN_KEY_CHECKS=0;"); 
if (isset($pole_databaze)<1){ 
    $query = $mysqli->query("DELETE FROM kategorie");
    if ($mysqli->errno != 0)
    {   
     echo 'Chyba SQL dotazu: '.$mysqli->errno.': '.$mysqli->error."<br>"; 
    }   
    else
    {        
  } 
}
else{
  $result = array_diff($pole, $pole_databaze);   
    
  foreach ($result as $value){
    $query = $mysqli->query("DELETE FROM kategorie WHERE jmeno_kategorie = '$value'");
    if ($mysqli->errno != 0)
    {   
     echo 'Chyba SQL dotazu: '.$mysqli->errno.': '.$mysqli->error."<br>"; 
    }   
    else
    {  
    }       
  }    
} 
$query = $mysqli->query("SET FOREIGN_KEY_CHECKS=1;");                       
?>

 
