<?php  
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);       
curl_setopt($ch, CURLOPT_USERPWD, "16203/SEBELA:vichr");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, "https://www.hs-online.cz:8081/restapi/b2b/zbozi/stav"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);  
curl_setopt($ch, CURLOPT_HEADER, FALSE);      
if (curl_errno($ch)) {
  print "Error: " . curl_error($ch);
} 
else {   
  $response = curl_exec($ch);    
  curl_close($ch); 
  file_put_contents("../../xml/sklad.xml", $response);
}   
?> 