<?php
// nazev: ./scripts/db_connect.php
// ucel: pripojeni k databazi

// revize:
// 1.0 - 9.2.2017 13:14:20 [sebela] - zalozeni skriptu


$mysqli = @new mysqli($PHP_mysql_server,
                      $PHP_mysql_login, 
                      $PHP_mysql_pass,  
                      $PHP_mysql_db);
if ($mysqli->connect_errno)
{ // chyba pripojeni k DB
  die('Chyba pripojeni k databazi: '.$mysqli->connect_errno.
      ': '.$mysqli->connect_error);
} // END OF: chyba pripojeni k DB
else
{ // nastaveni znakove sady pro propojeni Db s WEBem
  $mysqli->query("SET CHARACTER SET $PHP_mysql_charset");
  if ($mysqli->errno)
  { // chyba pripojeni k DB
    die('Chyba nastaveni znakove sady: '.$mysqli->errno.
        ': '.$mysqli->error);
  } // END OF: chyba pripojeni k DB  
} // END OF: nastaveni znakove sady pro propojeni Db s WEBem
                          