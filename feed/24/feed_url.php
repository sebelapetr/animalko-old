<?php  
require '../../conf/db.php'; 
require '../../scripts/db_connect.php';  
$query_url = $mysqli->query("SELECT url FROM produkt");  
$pole[] = '<?php switch($page){';
while ($row_url = $query_url->fetch_assoc()) {      
  $pole[] = "case '".($row_url['url'])."':require 'pages/product.php';break;"; 
}                 
$pole[] = '}?>';
file_put_contents("../../url.php", $pole);   
?>