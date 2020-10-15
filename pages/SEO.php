<?php

$stranka = $page;   

switch($typ_stranky){

  case 'podpora':
    $kratky_popis = "";               
    $kratky_popis = "";    
    $meta_description = "";  
    $title="Online podpora | Animalko"; 
    $key_word="platba, doprava, Animalko"; 
    $seo_url = "http://www.Animalko.cz/index.php?p=Doprava-a-platba";     
    $seo_img = "http://www.Animalko.cz/images/proces/balik.png";                          
  break;
  
  case 'kontakt':
    $kratky_popis = "";               
    $kratky_popis = "";    
    $meta_description = "";  
    $title="Kontakt | Animalko"; 
    $key_word="kontakt, adresa, Animalko"; 
    $seo_url = "http://www.Animalko.cz/index.php?p=Kontakt";     
    $seo_img = "http://www.Animalko.cz/images/proces/balik.png";    
  break;
  
  case 'doprava-platba':
    $kratky_popis = "";               
    $kratky_popis = "";    
    $meta_description = "";  
    $title="Doprava a platba | Animalko"; 
    $key_word="platba, doprava, Animalko"; 
    $seo_url = "http://www.Animalko.cz/index.php?p=Doprava-a-platba";     
    $seo_img = "http://www.Animalko.cz/images/proces/balik.png";      
  break;
  
  case 'kosik':
    $kratky_popis = "";               
    $kratky_popis = "";    
    $meta_description = "";  
    $title="Objednávka | Animalko"; 
    $key_word="košík, objednávka, Animalko"; 
    $seo_url = "http://www.Animalko.cz/index.php?p=Kosik";     
    $seo_img = "http://www.Animalko.cz/products/photo/kosik";     
  break;
  
  case 'vyhledavani':
    $kratky_popis = "";               
    $kratky_popis = "";    
    $meta_description = "";  
    $title=$_GET['text']." | Animalko"; 
    $key_word="hledat, Animalko"; 
    $seo_url = "http://www.Animalko.cz/index.php?p=".$page;     
    $seo_img = "http://www.Animalko.cz/products/photo/hledat";  
  break;
  
  case 'produkt':
    $query8 = $mysqli->query("select tag_title, meta_keyword, meta_description, obrazek from produkt where url = '$stranka'");  
    $row8 = $query8->fetch_assoc();                      
    $kratky_popis = explode(".", strip_tags($row8['meta_description']));               
    $kratky_popis = strip_tags($kratky_popis[0]).".";     
    $meta_description = $kratky_popis;  
    $title=$row8['tag_title']." | Animalko"; 
    $key_word=$row8['meta_keyword'].", Animalko"; 
    $seo_url = "http://www.Animalko.cz/index.php?p=".$page;     
    $seo_img = "http://www.Animalko.cz/products/photo/".$row8['obrazek'];     
  break;
  
  case 'kategorie':
    $query8 = $mysqli->query("select meta_keyword, nazev, obrazek, popis, jmeno_kategorie from kategorie where jmeno_kategorie = '$stranka'");  
    $row8 = $query8->fetch_assoc();   
    $podkat = explode("/", $row8['jmeno_kategorie']);   
    $count_podkat = count($podkat);  
    $stringos=""; 
    for ($i=0;$i<=($count_podkat-3);$i++){     
    $stringos = $stringos.$podkat[$i]."/"; 
    }
    $stringos = rtrim($stringos, "/"); 
    $stringos = $stringos."/"; 
    $cislo = ($count_podkat-3);    
    $kratky_popis = explode(".", $row8['popis']);               
    $kratky_popis = strip_tags($kratky_popis[0]).".";    
    $meta_description = $kratky_popis;                                        
    $query9 = $mysqli->query("select nazev from kategorie where jmeno_kategorie='".$stringos."'"); 
    $row9 = $query9->fetch_assoc();  
    if ($query9->num_rows>0){                   
      $title=$row8['nazev']." (".$row9['nazev'].") | Animalko"; 
    }
    else{
      $title=$row8['nazev']." | Animalko"; 
    }
    $key_word=$row8['meta_keyword'].", Animalko"; 
    $seo_url = "http://www.Animalko.cz/index.php?p=".$page;     
    $seo_img = "http://www.Animalko.cz/products/photo/".$row8['obrazek'];    
  break;

  case 'uvodni-strana':  
    $kratky_popis = "";                
    $meta_description = $kratky_popis;  
    $title= "Animalko - veterinární a chovatelské vybavení"; 
    $key_word="Animalko"; 
    $seo_url = "http://www.Animalko.cz/";     
    $seo_img = "http://www.Animalko.cz/products/photo/index.png";    
  break;  
      
}  

?>