<?php
// nazev: msgs.php
// ucel: skript se stara o vypis chybovych a notifikacnich hlaseni

// revize:
// 1.0 - 16.2.2017 14:16:25 [sebela] - zalozeni skriptu

  if (count($PHP_errors)) // vypiseme chybove hlasky - jsou-li
  echo '<div class="dulezite">
      <h3>Chybové hlášky:</h3>';
  foreach ($PHP_errors as $key=>$value) {
    echo $value."<br>\n";	
  } // END OF: foreach ($PHP_errors as $key=>$value)    
  echo "    
    </div>\n";

  if (count($PHP_nfos)) // vypiseme nechybove hlasky - jsou-li
  echo '<div class="nfo">
      <h3>Informace:</h3>';
  foreach ($PHP_nfos as $key=>$value) {
    echo $value."<br>\n";	
  } // END OF: foreach ($PHP_nfos as $key=>$value)    
  echo "    
    </div>\n";

?>  