<?php          
echo '<a href="index.php"><i class="fa fa-home" style="color:black"></i></a>';  
$stranka = $page;  
if ($typ_stranky==3){
  $query_roz = $mysqli->query("SELECT kategorie,jmeno_produkt from produkt where url = '$page'");
  $query_roz = $query_roz->fetch_assoc(); 
  $stranka = $query_roz['kategorie']; 
}
$number = substr_count($stranka, '/'); 

  $limit = 16; 
  $p=0;      
  $string_join = "";  
  $string_join2 = "";
  $string_join3 = "";
  $string_join4 = ""; 
  for ($g=1;$g<$number;$g++){
    if ($g==1){  
      $string_join3 = $string_join3." left outer join kategorie as up$g on up$g.jmeno_kategorie = node.sparovaneid";
    }
    else{ 
      $string_join3 = $string_join3." left outer join kategorie as up$g on up$g.jmeno_kategorie = up".($g-1).".sparovaneid ";
    }            
  $string_join4 = $string_join4.", up$g.nazev as up".$g."_name, up$g.jmeno_kategorie as up".$g."_kat";                   
  }    
  $query_bkckat = $mysqli->query("select node.nazev as node_names, node.jmeno_kategorie as node_name 
                                  $string_join4
                                    from kategorie as node
                                  $string_join3 
                                      where node.jmeno_kategorie = '".$stranka."';    
                                  ");                                  
  $g=$number-1;   
  while ($row_bkckat = $query_bkckat->fetch_assoc()) {  
    for ($p=1;$p<$number;$p++){       
    if (is_null($row_bkckat['up'.$g.'_kat'])){   
       $g--;
    }
    else{  
      echo '<i class="fa fa-next"></i> <a href="?p='.$row_bkckat['up'.$g.'_kat'].'" style="color:black;text-decoration:underline;font-weight:300;">'.$row_bkckat['up'.$g.'_name']."</a>";  
      $g--;  
      }
    }   
  $last_kat_url = $row_bkckat['node_name'];  
  $last_kat = $row_bkckat['node_names'];  
  if ($typ_stranky==3){
    echo '<i class="fa fa-next"></i> <a href="?p='.$row_bkckat['node_name'].'"   style="color:black;text-decoration:underline;font-weight:300;">'.$row_bkckat['node_names']."</a>";  
    echo '<i class="fa fa-next"></i> <a style="color:black;text-decoration:none;font-weight:300;">'.$query_roz['jmeno_produkt']."</a>";
  }
  else{
    echo '<i class="fa fa-next"></i> <a style="color:black;text-decoration:none;font-weight:300;">'.$row_bkckat['node_names']."</a>";  
  } 
  }    
?>
                    