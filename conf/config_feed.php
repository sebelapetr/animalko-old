<?php 
// nazev: ./conf/config.php
// ucel: zakladni konfiguracni skript
//       vsechny promenne zacinaji $PHP_ !!  

// revize:
// 1.0 - 9.2.2017 9:13:32 [sebela] - zalozeni skritpu

$PHP_logged = false; // uzivatel neprihlasen

$PHP_debug = false; // debugovani projektu vypnuto

$PHP_errors = array(); // obsahuje vsechny chybove hlasky skriptu
$PHP_nfos   = array(); // obsahuje vsechny nechybove hlasky skriptu

$PHP_user = array(); // info o prihlasenem uzivateli
// !! MUSI  ZUSTAT NA KONCI TOHOTO SKRIPTU 
require '../../conf/config_user.php'; // prepis uzivaletskych zmen nastaveni 