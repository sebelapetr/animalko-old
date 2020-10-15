<?php        
require '../../conf/config_feed.php';  
require '../../conf/db.php'; 
require '../../scripts/db_connect.php'; 
require '../../scripts/msgs.php'; 
$xml=simplexml_load_file("../../xml/data.xml");   
$arr = json_decode(json_encode($xml), true); 
foreach ($arr['product'] as $value){ 
  $pole[] = $value['productInternalId']; 
}   
$query = $mysqli->query("select id_produkt from produkt");  
while ($row = $query->fetch_assoc()) { 
  $pole_databaze[] = $row['id_produkt'];
}      
$string = implode(',', $pole_databaze);
file_put_contents("../id.txt", $string);                   
?>
 
