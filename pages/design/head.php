<?php
// nazev: ./pages/design/head.php
// ucel: HTML <head> stranky 
// revize:
// 1.0 - 9.2.2017 9:33:31 [sebela] - zalozeni skriptu
// 2.0 - 13. 5. 2017 19:16:11 [sebela] - dokonceni, kontrola syntaxu
// 2.1 - 15. 5. 2017 21:22:36 [sebela] - doplneni js  
require 'pages/SEO.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="cs" lang="cs" prefix="og: http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">      
    <title><?php echo $title; ?></title> 
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="author" content="Petr Šebela">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta id="contentLanguage" http-equiv="Content-Language" content="cs-CZ" /> 
    <meta name="keywords" content="<?php echo $key_word; ?>">
    <meta name="msapplication-TileColor" content="#FFFFFF" /><meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />  
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:site_name" content="Animalko.cz">
    <meta property="og:url" content="<?php echo $seo_url; ?>">
    <meta property="og:image" content="<?php echo $seo_img; ?>">
    <meta property="og:type" content="product">                  
    <meta name="copyright" content="Petr Šebela" />   
    <meta name="robots" content="index,follow" />      
    <!--<base href="http://animalko.cz/" />-->                          
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	  <link href="css/main.css" rel="stylesheet">
	  <link href="css/responsive.css" rel="stylesheet">   
    <link href="css/responsive_menu.css" rel="stylesheet">   
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
  
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>        
    <![endif]-->       
    <link rel="shortcut icon" href="images/shop/icon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <script>
    window.addEventListener("load", function(){
    	var load_screen = document.getElementById("load_screen");
    	document.body.removeChild(load_screen);
    });
    </script>
    <script src="https://api.mapy.cz/loader.js"></script>     
	  <script>Loader.load()</script>    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script src="https://www.googletagmanager.com/gtag/js?id=UA-110969892-1" async></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
      
        gtag('config', 'UA-110969892-1');
      </script>
          
</head><!--/head-->   
<body> 
  
<!--<div id="load_screen"><div id="loading"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/585d0331234507.564a1d239ac5e.gif" width="60" border="0"></div></div>-->
<?php  
 if ($ip != "92280300626121d325685981ba6f084e"){
  if ($ip !="5901dba4b59e37f517b0345f29024f90"){
?>  
<!--
<div id="upozorneni">
  <div class="col-sm-12">
    <img src="images/logo.png" alt="logo.png, 33kB" title="logo" border="0" style="width:40%">
  </div>
  <div class="col-sm-12">
    <p style="width:30%;margin:auto;font-size:20px">Pracujeme na dokončení eshopu. Našim cílem je spustit obchod již v polovině července. Přihlaste se k odběru novinek a buďte informovaní o dění!</p>
  </div>
  <div class="col-sm-12" style="margin-top:30px">
    <form method="POST" style="font-size:20px">
      <input type="email" name="email" placeholder="priklad@email.cz">
      <input type="submit" name="odeslat" value="Přihlásit k odběru">
    </form>
    <?php  
      if (isset($_POST['odeslat'])){  
        $query = $mysqli->query("INSERT INTO odber (email,aktivni) VALUES ('".$_POST['email']."',1)"); 
        if ($mysqli->errno != 0){echo '<a style="color:red;">Chyba SQL dotazu: '.$mysqli->errno.': '.$mysqli->error."</a><br>";}
        else{echo "Úspěšně přihlášen k odběru";} 
      }
    ?>
  </div> 
  <div class="col-sm-12 proces">
      <table class="doprava" style="margin:auto"> 
        <tr><td>Objednávky přes email a informace</td><td>podpora@animalko.cz</td></tr> 
        <tr><td>Obchod a partnerství</td><td>sebela@animalko.cz</td></tr>
        <tr><td>Objednávky přes mobil a informace</td><td><a href="tel:+420605200686">+420 605 200 686</a></td></tr>
      </table>  
  </div>   
   
</div> 
-->  
<?php
}
}
?>