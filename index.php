<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start(); 
}  
// nazev: index.php
// ucel: zakladni sklript pro stranku - rozcestnik
// revize:
// 1.0 - 9.2.2017 9:07:30 [sebela] - zalozeni skriptu
// 1.1 - 9.2.2017 9:07:55 [sebela] - oprava HTML
// 1.2 - 30. 3. 2017 9:06:25 [sebela] - doplnení switche o karty a administrace, doplneni revizi
// 2.0 - 15. 5. 2017 21:45:38 [sebela] - doknceni, kontrola syntaxu, pridani case
 // budu pouzivat sessiony pro autentizaci 

/*
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo url;
$handle = curl_init($url);
curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
 
$response = curl_exec($handle); 
$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
if($httpCode == 404) {
   require 'pages/404.php';
}

curl_close($handle);
*/
$ip =
md5(
    $_SERVER['REMOTE_ADDR'] .
    $_SERVER['HTTP_USER_AGENT']
);   
$typ_stranky='uvodni-strana'; 
require 'conf/config.php'; // zakladni konfigurace webu
require 'conf/db.php'; // nastaveni pripojeni k databazi
require 'scripts/db_connect.php'; // pripojeni k DB serveru
require 'pages/kosik.php';   
$page = (isset($_GET['p'])?trim($_GET['p']):'null'); // predani aktivni stranky      
$login = (isset($_GET['login'])?true:false); // pokua o prihlaseni 
require 'scripts/auth.php'; // skript obsluhujici autentizaci uzivatele 
  $query = $mysqli->query("SELECT jmeno_kategorie FROM kategorie");   
  while ($row = $query->fetch_assoc()) {  
    switch($page){  
        case $row['jmeno_kategorie']:
          require 'pages/kategorie.php';
        break;
        
    }    
  }  
    switch($page){  
      case 'Kontakt':  
        require 'pages/kontakt.php';  
      break;  
      case 'Chovatelske-vybaveni':  
        require 'pages/kategorie_chovatelske_vybaveni.php';
      break;  
      case 'Veterinarni-vybaveni': 
        require 'pages/kategorie_veterinarske_vybaveni.php';
      break;        
      case 'Doprava-a-platba':
        require 'pages/doprava_platba.php';
      break;  
      case 'Online-podpora':
        require 'pages/podpora.php';
      break;                
      case 'Kosik':
        require 'pages/kosik_objednavka.php';
      break;        
      case 'Hledat':
        require 'pages/vyhledavani.php';
      break; 
      /*
      case 'Znacka':
        require 'pages/brand.php';
      break;  
        
      case '404':
        require 'pages/404.php';
      break;   
      */                        
      case 'null': // hodnota null
    	  require 'pages/design/head.php'; // pripojeni head stranky 
        require 'pages/design/header.php'; // pripojeni headeru stranky     
    	  require 'pages/design/body.php'; // pripojeni body stranky 
    	  require 'pages/design/footer.php'; // pripojeni footer stranky  echo '</div>';  
    	break;
    }         
require 'url.php';                 
?>          
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '745aa8bc16ac584b588c8b8c108a0013873fa857';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

