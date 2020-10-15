<?php
// nazev: ./scripst/auth.php
// ucel: obsluha autentizace v aplikaci

// revize:
// 1.0 - 9.3.2017 8:24:42 [sebela] - zalozeni skriptu

$PHP_logged = isset($_SESSION['logged'])?$_SESSION['logged']:false; // je jiz uzivatel prihlasen ?

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{ // jiz vlozen login a heslo
  $jmeno_hrac_text = $_SERVER['PHP_AUTH_USER']; // login z dialogu prihlaseni
  $heslo_text = ($_SERVER['PHP_AUTH_PW']); // heslo z dialogu prihlaseni
  $query = $mysqli->query("SELECT * 
                           FROM hrac
                           WHERE jmeno_hrac ='".$mysqli->real_escape_string($jmeno_hrac_text)."' AND
                                 heslo ='".$mysqli->real_escape_string($heslo_text)."'");
  if ($mysqli->errno)
  { // chyba v SQL query
  	require 'pages/design/head.php'; // pripojeni head stranky
	  require 'pages/design/header.php'; // pripojeni headeru stranky
	  require 'pages/design/menu.php'; // pripojeni menu stranky
    echo '<div id="body"><h1>Chyba autentizace!</h1>';
    if ($PHP_debug)
      echo 'Chyba SQL dotazu: '.$mysqli->errno.': '.$mysqli->error; 
    echo '</div>';
	  require 'pages/design/footer.php'; // pripojeni footer stranky
    exit;  
  } // END OF: chyba v SQL query
  
  if ($query->num_rows)
  { // predame si informace o prihlasenem uzivateli 
    $PHP_user = $query->fetch_assoc();
  } // END OF: predame si informace o prihlasenem uzivateli 

  if ($query->num_rows &&
      $_SERVER['PHP_AUTH_USER'] == $PHP_user['jmeno_hrac'] && 
      ($_SERVER['PHP_AUTH_PW']) == $PHP_user['heslo'] && 
      !isset($_GET['logout']) && 
      !$PHP_logged)
  { // login a heslo spravne
    $_SESSION['logged'] = true;
    $PHP_logged = true;
  } // END OF: login a heslo spravne
  else
  { // chybny login nebo heslo
    $_SESSION['logged'] = false;
    unset($_SESSION['logged']);
    session_destroy();                                                                                                                                                                              
  } // END OF: chybny login nebo heslo
} // END OF: jiz vlozen login a heslo}

if ($login && !isset($_SESSION['logged']) || isset($_GET['logout']))
{ // jeste nejsme prihlaseni => zobraz prihlasovaci dialog
  header('HTTP/1.1 401 Unauthorized');                 
  header('WWW-Authenticate: Basic realm="Zadej prihlasovaci udaje do projektu Skola"');
  	require 'pages/design/head.php'; // pripojeni head stranky
	  require 'pages/design/header.php'; // pripojeni headeru stranky
	  require 'pages/design/menu.php'; // pripojeni menu stranky
    echo '                               
   <div id="body">
    <div style="box-shadow: inset 0px -0px 40px 3px rgba(130,130,130,0.5), 5px 5px 20px 0px black;box-shadow;padding:15px;width:500px;margin: 0 auto;height:200px;vertical-aling:center;text-align: center;line-height: 90px;">
      <h1 style="color:white;">Uživatel nepřihlášen</h1>
      <a style="color:white;font-size:18px;">Pro přístup se musíte </a><a href="index.php?login" style="color:white;font-size:18px;">Přihlásit</a><a style="color:white;font-size:18px;"> jinak se vraťte </a><a href="index.php" style="color:white;font-size:18px;">zpět</a>. 
    </div>
  </div>
    ';
	  require 'pages/design/footer.php'; // pripojeni footer stranky
    exit;
} // END OF: jeste nejsme prihlaseni => zobraz prihlasovaci dialog  



?>