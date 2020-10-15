<?php      
require '../../conf/config_feed.php';  
require '../../conf/db.php'; 
require '../../scripts/db_connect.php'; 
require '../../scripts/msgs.php';      
$pole = file_get_contents('../id.txt');
$pole = explode(",", $pole); 
$query = $mysqli->query("select id_produkt from produkt");  
while ($row = $query->fetch_assoc()) { 
  $pole_databaze[] = $row['id_produkt'];
}      
$result = array_diff($pole_databaze, $pole);  
foreach ($result as $value){
  $query = $mysqli->query("DELETE FROM produkt WHERE id_produkt = $value");
  if ($mysqli->errno != 0)
  {   
   echo 'Chyba SQL dotazu: '.$mysqli->errno.': '.$mysqli->error."<br>"; 
  }   
  else
  {      
  }       
}                          
?>