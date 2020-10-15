<?php    
require '../../conf/config_feed.php';  
require '../../conf/db.php'; 
require '../../scripts/db_connect.php'; 
require '../../scripts/msgs.php';    
  $pole = file_get_contents('../info.xml');  
  $array_data = json_decode(json_encode(simplexml_load_string($pole)), true);   
  foreach ($array_data['product'] as $value){     
      if (is_array($value['info'])){$value['info']="";}       
      if ($value['foto']=="null"){$value['foto'] = null;}
      $query = $mysqli->query('UPDATE produkt SET obrazek = "'.$value['foto'].'", popis = "'.$value['info'].'" WHERE id_produkt = '.$value['productInternalId'].';');  
      //echo 'UPDATE produkt SET obrazek = "'.$value['foto'].'", popis = "'.$value['info'].'" WHERE id_produkt = '.$value['productInternalId'].';'; 
      if ($mysqli->errno != 0)
      {   
       echo 'Chyba SQL dotazu: '.$mysqli->errno.': '.$mysqli->error."<br>"; 
      }   
      else
      {}   
  }     
?> 