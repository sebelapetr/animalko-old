<?php     
$jmeno_kategorie="";         
function replace($string){     
global $jmeno_kategorie;
$string = rtrim($string);
$jmeno_kategorie = str_replace(['<', '>', '"', "'", ' ', 'ě', 'š', 'č', 'ř', 'ž', 'ý', 'á', 'í', 'é', '(', ')', 'ů', 'ú', 'ň', 'Ň', 'Ě', 'Š', 'Č', 'Ř', 'Ž', 'Ý', 'Á', 'Í', 'É', 'Ů', 'Ú',',',', ', '&amp'], ['', '', '', '' , '-', 'e', 's', 'c', 'r', 'z', 'y', 'a', 'i', 'e', '', '', 'u', 'u', 'n', 'N', 'E', 'S', 'C', 'R', 'Z', 'Y', 'A', 'I', 'E', 'U', 'U','','', '&'], $string);
return $jmeno_kategorie;
}   
$jmeno_produktu="";         
function replace2($string){     
global $jmeno_produktu;
$string = rtrim($string);
$jmeno_produktu = str_replace([' ','ě', 'š', 'č', 'ř', 'ž', 'ý', 'á', 'í', 'é', '(', ')', 'ů', 'ú', 'ň', 'Ň', 'Ě', 'Š', 'Č', 'Ř', 'Ž', 'Ý', 'Á', 'Í', 'É', 'Ů', 'Ú',',',', '], ['-','e', 's', 'c', 'r', 'z', 'y', 'a', 'i', 'e', '', '', 'u', 'u', 'n', 'N', 'E', 'S', 'C', 'R', 'Z', 'Y', 'A', 'I', 'E', 'U', 'U','',''], $string);
return $jmeno_produktu;
}   
$arrFrom = array("&",'"',"<",">","‘","’","“","”","'");
$arrTo = array("&amp;","&quot;","&lt;","&gt;","&lsquo;","&rsquo;","&ldquo;","&rdquo;","&apos;");      

require '../../conf/config_feed.php';  
require '../../conf/db.php'; 
require '../../scripts/db_connect.php'; 
require '../../scripts/msgs.php'; 
$xml=simplexml_load_file("../../xml/data.xml");   
$arr = json_decode(json_encode($xml), true); 
$i=1; 
$id = 1;
foreach ($arr['product'] as $value){  

    $kat_full = $value['categoryLabel'];   
    $kat_full_rplc = str_replace(["/neurčeno", "/neurčeno"], ["", ""], $kat_full);   
    $pole = explode( '/', $kat_full_rplc ); 
        for ($i=0;$i<count($pole);$i++){           
          if ($i<1){
            $jmeno_kategorie_bf="NULL";   
            $lomitko ='';  
            replace($pole[($i)]); 
            $jmeno_kategorie2 = $jmeno_kategorie;   
          }                                          
          else{     
            $lomitko = '/';   
            replace($pole[($i)]);
            $jmeno_kategorie2 = $jmeno_kategorie2.'/'.$jmeno_kategorie;     
            $jmeno_kategorie_bf = '"'.$jmeno_kategorie_bf.$lomitko.'"';                 
          }         
          replace($pole[$i]);      
           $jmeno_kategorie_bf = $jmeno_kategorie2;         
        }       
    if ($value['catalogPriceVAT']>0){
    $aktivni=1;
    }
    else{
    $aktivni=0;
    }  
    //require 'scripts/razeni.php'; 
    $razeni=0;          
    $zakoupen=0;    
    
    if (!array_key_exists("productSuplierID",$value)){$value['productSuplierID']="";}
    if (!array_key_exists("weight",$value)){$value['weight']=0;}
    if (!array_key_exists("suklID",$value)){$value['suklID']="";}
    if (!array_key_exists("pdkID",$value)){$value['pdkID']="";}
    if (!array_key_exists("ean",$value)){$value['ean']="";}
    if (!array_key_exists("restrictions",$value)){$value['restrictions']="";}
    if (!array_key_exists("brandName",$value)){$value['brandName']="";} 
    
    $value['productName'] = htmlspecialchars(str_replace($arrFrom, $arrTo, $value['productName']));
    $value['priceList'] = htmlspecialchars(str_replace($arrFrom, $arrTo, $value['priceList']));
    $value['vendorName'] = htmlspecialchars(str_replace($arrFrom, $arrTo, $value['vendorName']));
    $value['brandName'] = htmlspecialchars(str_replace($arrFrom, $arrTo, $value['brandName']));  
    $jmeno_produktu =  replace2($value['productName']);
    /* 
    $query3 = $mysqli->query('INSERT IGNORE INTO produkt(id_produkt, 
                                                  jmeno_produkt,  
                                                  jmeno_znacka, 
                                                  dodavatel,  
                                                  id_dodavatel, 
                                                  kategorie,  
                                                  katalog,  
                                                  ean, 
                                                  klient_cena, 
                                                  klient_cena_DPH, 
                                                  katalog_cena, 
                                                  katalog_cena_DPH, 
                                                  DPH, 
                                                  skladem, 
                                                  sklad_pocet, 
                                                  info_sklad,  
                                                  vaha, 
                                                  vyrobce, 
                                                  vyrobce_id, 
                                                  recept, 
                                                  na_objednani,  
                                                  zaruka, 
                                                  novinka, 
                                                  tip, 
                                                  akce, 
                                                  aktivni, 
                                                  url,  
                                                  tag_title, 
                                                  meta_keyword,  
                                                  zakoupen,
                                                  sukl,
                                                  pdk,                
                                                  omezeni,
                                                  razeni)                                                             
                                           VALUES("'.$value['productInternalId'].'",        
                                           "'.$value['productName'].'", 
                                           "'.$value['brandName'].'",  
                                           "Henry Schein", 
                                           "'.$value['productSuplierID'].'", 
                                           "'.$jmeno_kategorie2.'/",  
                                           "'.$value['priceList'].'", 
                                           "'.$value['ean'].'",    
                                           "'.$value['clientPrice'].'",   
                                           "'.$value['clientPriceVAT'].'",  
                                           "'.$value['catalogPrice'].'",       
                                           "'.$value['catalogPriceVAT'].'",                            
                                           "'.$value['VAT'].'",  
                                           "'.$value['inStock'].'",   
                                           "'.$value['minStockLevel'].'",  
                                           "'.$value['stockLevel'].'",   
                                           '.$value['weight'].', 
                                           "'.$value['vendorName'].'",
                                           "'.$value['vendorInternalId'].'",   
                                           "'.$value['recept'].'",   
                                           "'.$value['toOrder'].'",     
                                           "24",
                                           "0",
                                           "0",
                                           "0",
                                           "'.$aktivni.'",  
                                           "'.$jmeno_kategorie2."/".$jmeno_produktu.'",
                                           "'.$value['productName'].'",
                                           "'.$value['productName'].", ".$value['brandName'].", ".str_replace([ '/', '&amp;'], [', ', '&'], $value['categoryLabel']).", ".$value['priceList'].", ".$value['vendorName'].'",
                                           "'.$zakoupen.'",
                                           "'.$value['suklID'].'",
                                           "'.$value['pdkID'].'", 
                                           "'.$value['restrictions'].'",
                                           "'.$razeni.'"
                                           )');  
    */
    $query3 = $mysqli->query('UPDATE produkt set url = "'.$jmeno_kategorie2."/".$jmeno_produktu.'" where id_produkt =  "'.$value['productInternalId'].'"');                                                               
    if ($mysqli->errno != 0){echo '<a style="color:red;">Chyba SQL dotazu: '.$mysqli->errno.': '.$mysqli->error."</a><br>";}else{}   

  $i++;
}         

?>