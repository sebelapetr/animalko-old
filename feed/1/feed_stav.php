<?php   
/*--------------------------------------------------------------------*/
require '../../conf/config_feed.php'; // zakladni konfigurace webu
require '../../conf/db.php'; // nastaveni pripojeni k databazi
require '../../scripts/db_connect.php'; // pripojeni k DB serveru
require '../../scripts/msgs.php'; // pripojeni k DB serveru
/*--------------------------------------------------------------------*/

$xml=simplexml_load_file("../../xml/sklad.xml");   
$arr = json_decode(json_encode($xml), true);
$i=1;
foreach ($arr['productStav'] as $value){   
     $query = $mysqli->query('SELECT sklad_pocet FROM produkt WHERE id_produkt = '.$value['productId'].''); 
     if($query->num_rows>0){
       $row = $query->fetch_assoc();  
        if($row['sklad_pocet']==$value['minStockLevel'])
        {  
        }    
        else
        {
         $query2 = $mysqli->query("UPDATE produkt SET sklad_pocet=".$value['minStockLevel']." WHERE id_produkt = ".$value['productId']."");  
          if ($mysqli->errno != 0)
          {   
           echo 'Chyba SQL dotazu: '.$mysqli->errno.': '.$mysqli->error."<br>"; 
          }   
          else
          {  
          }      
          $i++;   
        }     
     } 
     else
     {
      echo "Chyba dotazu u id: ".$value['productId'];
     }

              
} 
?>