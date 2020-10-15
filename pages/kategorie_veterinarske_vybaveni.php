<?php
// nazev: ./pages/cards/covert_card.php
// ucel: karta Covert
// revize:
// 1.0 - 11.2.2017 19:12:02 [sebela] - zalozeni skriptu
// 1.1 - 12.2.2017 14:46:14 [sebela] - automatizace názvu, ceny, počtu otevření a výpisu zbraní z kolekce
// 1.2 - 11. 5. 2017 12:11:52 [sebela] - doplneni prodeje zbrane, uprava grafiky
// 2.0 - 14. 5. 2017 13:15:48 [sebela] - dokonceni
    $typ_stranky = 2;
    $stranka_aktual = 1;
    $ktg_check = 1;
    $page = "Veterinarni-vybaveni";
    $kategorie = trim($page, "?p=");
    $min = isset($_GET['min'])?($_GET['min']):0;
    $max = isset($_GET['max'])?($_GET['max']):1000000;
    $znacka = isset($_GET['znacka'])?($_GET['znacka']):"";
    $strana_limit = isset($_GET['strana'])?($_GET['strana']):'';
    if ($strana_limit==""){
    $strana_limit=1;
    }
    $razeni = isset($_GET['razeni'])?($_GET['razeni']):'';
    $serazeni = "";
    switch($razeni){
      case "nejlevnejsi":
        $serazeni = "katalog_cena_DPH ASC";
        $selected1 = "";
        $selected2 = "text-decoration:none;color:black;";
        $selected3 = "";
        $selected4 = "";
        $selected5 = "";
        $selected1s = "";
        $selected2s = "background: #f3f3f3;border-bottom:1px solid #0003";
        $selected3s = "";
        $selected4s = "";
        $selected5s = "";
      break;
      case "nejdrazsi":
        $serazeni = "katalog_cena_DPH DESC";
        $selected1 = "";
        $selected2 = "";
        $selected3 = "text-decoration:none;color:black;";
        $selected4 = "";
        $selected5 = "";
        $selected1s = "";
        $selected2s = "";
        $selected3s = "background: #f3f3f3;border-bottom:1px solid #0003";
        $selected4s = "";
        $selected5s = "";
      break;
      case "nejprodavanejsi":
        $serazeni = "zakoupen DESC";
        $selected1 = "";
        $selected2 = "";
        $selected3 = "";
        $selected4 = "text-decoration:none;color:black;";
        $selected5 = "";
        $selected1s = "";
        $selected2s = "";
        $selected3s = "";
        $selected4s = "background: #f3f3f3;border-bottom:1px solid #0003";
        $selected5s = "";
      break;
      case "abecedne":
        $serazeni = "jmeno_produkt";
        $selected1 = "";
        $selected2 = "";
        $selected3 = "";
        $selected4 = "";
        $selected5 = "text-decoration:none;color:black;";
        $selected1s = "";
        $selected2s = "";
        $selected3s = "";
        $selected4s = "";
        $selected5s = "background: #f3f3f3;border-bottom:1px solid #0003";
      break;
      case "doporucene":
        $serazeni = "razeni";
        $selected1 = "text-decoration:none;color:black;";
        $selected2 = "";
        $selected3 = "";
        $selected4 = "";
        $selected5 = "";
        $selected1s = "background: #f3f3f3;border-bottom:1px solid #0003";
        $selected2s = "";
        $selected3s = "";
        $selected4s = "";
        $selected5s = "";
      break;
       default:
        $serazeni = "razeni";
        $selected1 = "text-decoration:none;color:black;";
        $selected2 = "";
        $selected3 = "";
        $selected4 = "";
        $selected5 = "";
        $selected1s = "background: #f3f3f3;border-bottom:1px solid #0003";
        $selected2s = "";
        $selected3s = "";
        $selected4s = "";
        $selected5s = "";
      break;
    }
   switch($min){
      case 1:
        $var1 = "background: #f3f3f3;";
        $var2 = "";
        $var3 = "";
        $var4 = "";
        $var5 = "";
        $var6 = "";
        $var7 = "";
        $var8 = "";
        $var_t1 = "color:black;";
        $var_t2 = "";
        $var_t3 = "";
        $var_t4 = "";
        $var_t5 = "";
        $var_t6 = "";
        $var_t7 = "";
        $var_t8 = "";
      break;
      case 150: ;
        $var1 = "";
        $var2 = "background: #f3f3f3";
        $var3 = "";
        $var4 = "";
        $var5 = "";
        $var6 = "";
        $var7 = "";
        $var8 = "";
        $var_t1 = "";
        $var_t2 = "color:black;";
        $var_t3 = "";
        $var_t4 = "";
        $var_t5 = "";
        $var_t6 = "";
        $var_t7 = "";
        $var_t8 = "";
      break;
      case 400:
        $var1 = "";
        $var2 = "";
        $var3 = "background: #f3f3f3";
        $var4 = "";
        $var5 = "";
        $var6 = "";
        $var7 = "";
        $var8 = "";
        $var_t1 = "";
        $var_t2 = "";
        $var_t3 = "color:black;";
        $var_t4 = "";
        $var_t5 = "";
        $var_t6 = "";
        $var_t7 = "";
        $var_t8 = "";
      break;
      case 900:
        $var1 = "";
        $var2 = "";
        $var3 = "";
        $var4 = "background: #f3f3f3";
        $var5 = "";
        $var6 = "";
        $var7 = "";
        $var8 = "";
        $var_t1 = "";
        $var_t2 = "";
        $var_t3 = "";
        $var_t4 = "color:black;";
        $var_t5 = "";
        $var_t6 = "";
        $var_t7 = "";
        $var_t8 = "";
      break;
      case 1900:
        $var1 = "";
        $var2 = "";
        $var3 = "";
        $var4 = "";
        $var5 = "background: #f3f3f3";
        $var6 = "";
        $var7 = "";
        $var8 = "";
        $var_t1 = "";
        $var_t2 = "";
        $var_t3 = "";
        $var_t4 = "";
        $var_t5 = "color:black;";
        $var_t6 = "";
        $var_t7 = "";
        $var_t8 = "";
      break;
      case 4900:
        $var1 = "";
        $var2 = "";
        $var3 = "";
        $var4 = "";
        $var5 = "";
        $var6 = "background: #f3f3f3";
        $var7 = "";
        $var8 = "";
        $var_t1 = "";
        $var_t2 = "";
        $var_t3 = "";
        $var_t4 = "";
        $var_t5 = "";
        $var_t6 = "color:black;";
        $var_t7 = "";
        $var_t8 = "";
      break;
      case 9900:
        $var1 = "";
        $var2 = "";
        $var3 = "";
        $var4 = "";
        $var5 = "";
        $var6 = "";
        $var7 = "background: #f3f3f3";
        $var8 = "";
        $var_t1 = "";
        $var_t2 = "";
        $var_t3 = "";
        $var_t4 = "";
        $var_t5 = "";
        $var_t6 = "";
        $var_t7 = "color:black;";
        $var_t8 = "";
      break;
      case 0:
        $var1 = "";
        $var2 = "";
        $var3 = "";
        $var4 = "";
        $var5 = "";
        $var6 = "";
        $var7 = "";
        $var8 = "background: #f3f3f3";
        $var_t1 = "";
        $var_t2 = "";
        $var_t3 = "";
        $var_t4 = "";
        $var_t5 = "";
        $var_t6 = "";
        $var_t7 = "";
        $var_t8 = "color:black;";
      break;
       default:
        $var1 = "";
        $var2 = "";
        $var3 = "";
        $var4 = "";
        $var5 = "";
        $var6 = "";
        $var7 = "";
        $var8 = "background: #f3f3f3";
        $var_t1 = "";
        $var_t2 = "";
        $var_t3 = "";
        $var_t4 = "";
        $var_t5 = "";
        $var_t6 = "";
        $var_t7 = "";
        $var_t8 = "color:black;";
      break;
      }
	  require 'pages/design/head.php'; // pripojeni head stranky
	  require 'pages/design/header.php'; // pripojeni headeru stranky
?>
  <section>
	<section id="advertisement">
		<div class="container">
			<img style="border:1px solid #0003" src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
      <div class="col-sm-3">
        <div class="col-sm-12" style="padding:0;margin-bottom:15px;border:1px solid #0003">
                <?php
                $query_length = $mysqli->query("select jmeno_kategorie, nazev from kategorie where skupina = 1");
                echo '<div class="col-sm-12" style="background:#f3f3f3">    
                        <a href="?p=Veterinarni-vybaveni">
                              <h3 style="color:black;text-decoration:;font-weight:400;font-size:18px;margin:15px 0;">Veterinární vybavení</i></h3>   
                           </a>  
                      </div>';
                      $string_kata="";
                while ($row_length = $query_length->fetch_assoc()) {
                          echo '<div class="col-sm-12" style="background:transparent;">   
                                  <a href="?p='.$row_length['jmeno_kategorie'].'">
                                        <h3 style="color:black;font-weight:300;font-size:14px;margin:15px 0;margin-left:20px">'.$row_length['nazev'].'</i></h3>
                                  </a>
                                </div>';
                $string_kata = $string_kata."OR kategorie like '%".$row_length['jmeno_kategorie']."%'";
                }

                ?>
        </div>
        <!--
        <div class="col-sm-12" style="border:1px solid #0003;padding:0;margin-bottom:10px">
        <?php
                          echo '<div class="col-sm-12" style="background:#f3f3f3;margin:0">   
                                        <h3 style="color:black;font-weight:400;font-size:15px;margin:15px 0;">Oblíbené značky<i class="fa fa-star pull-right"></i></h3>   
                                </div>';
                $query_length = $mysqli->query("select distinct zakoupen,jmeno_znacka from produkt where kategorie like 'Veterinarn%' ".$string_kata." and aktivni = 1 order by zakoupen desc limit 5");
                while ($row_length = $query_length->fetch_assoc()) {
                          if($row_length['jmeno_znacka'] == $znacka){
                            $styl="background:#f5f5f5;";
                          }
                            else{
                              $styl="";
                          }
                          echo '<div class="col-sm-12" style="'.$styl.'">  
                                    <a href="?p='.$page.'&amp;razeni='.$razeni.'&amp;min='.$min.'&amp;max='.$max.'&amp;znacka='.$row_length['jmeno_znacka'].'">  
                                        <h3 style="color:black;text-decoration:;font-weight:300;font-size:14px;margin:15px 0;">'.$row_length['jmeno_znacka'].' <i class="fa fa-next pull-right"></i></h3>  
                                    </a> 
                                </div>';
                }
                           if($znacka==""){
                              $styl="background:#f5f5f5;";
                            }
                            else{
                              $styl="";
                            }
                          echo '<div class="col-sm-12" style="'.$styl.'">  
                                    <a href="?p='.$page.'&amp;razeni='.$razeni.'&amp;min='.$min.'&amp;max='.$max.'&amp;znacka="">  
                                        <h3 style="color:black;text-decoration:;font-weight:300;font-size:14px;margin:15px 0;">Všechny značky<i class="fa fa-next pull-right"></i></h3>  
                                    </a> 
                                </div>';
        ?>
        </div>
        -->
						<!--
						<div class="shipping text-center">
							<img src="images/home/shipping.jpg" alt="" />
						</div>
					  -->
      </div>

      <div class="col-sm-9">
       <!--
       <div class="col-sm-3" style="margin-top:15px;padding-left:0px;padding-right:0px;">
						<div class="brands_products" style="width:89%">brands_products
							<div class="brands-name">
                <div class="panel-heading" style="background: #f3f3f3;border-radius: 0;padding:1x 20px;">
  									<h4 class="panel-title">
  										<a  style="font-size:15px;background: transparent;color:black;font-weight: normal;" >
  											<i class="fa fa-star pull-right"></i>
  										  Oblíbené značky
  										</a>
  									</h4>
  								</div>
								<ul class="nav nav-pills nav-stacked">
                <?php
                 $query = $mysqli->query("SELECT DISTINCT jmeno_znacka, zakoupen FROM produkt WHERE kategorie LIKE 'Veterinarni%' ".$string_kata." and aktivni = 1 order by zakoupen desc limit 10;");
                 while ($row = $query->fetch_assoc()) {
                  $query2 = $mysqli->query('SELECT COUNT(id_produkt) FROM produkt WHERE jmeno_znacka = "'.$row['jmeno_znacka'].'" and aktivni = 1');
                  $row2 = $query2->fetch_assoc();
                    echo '<li><a href="#"> <span class="pull-right">('.$row2['COUNT(id_produkt)'].')</span>'.$row['jmeno_znacka'].'</a></li>';
                 }
                 echo '<li><a href="#">Zobrazit všechny značky</a></li>';
                ?>
								</ul>
							</div>
						</div>
						<div class="brands_products" style="width:89%;margin-top:10px">
							<div class="brands-name">
                <div class="panel-heading" style="background: #f3f3f3;border-radius: 0;padding:1x 20px;">
  									<h4 class="panel-title">
  										<a  style="font-size:15px;background: transparent;color:black;font-weight: normal;" >
  											<i class="fa fa-filter pull-right"></i>
  										  Filtrování
  										</a>
  									</h4>
  								</div>
                  <ul class="nav nav-pills nav-stacked">
                    <li><input type="checkbox">Skladem<br></li>
                  </ul>
							</div>
						</div>/brands_products

						<div class="price-range">
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div>/price-range
       </div>-->
          <div class="col-sm-12" style="padding:10px 0;border-bottom:1px solid #f5f5f5">
          <?php
            echo '<a href="index.php"><i class="fa fa-home" style="color:black"></i></a>';
            echo '<a style="color:black;text-decoration:none;font-weight:300;"><i class="fa fa-next"></i></a>';
            echo '<a href="?p=Veterinarni-vybaveni" style="color:black;text-decoration:none;font-weight:300;">Veterinární vybavení</a>';
          ?>
          </div>
				<div class="col-sm-12" style="padding-right:0px;padding-left:0px;">

					<div class="features_items"><!--features_items-->
                <?php
                $limit = 15;
                $number=0;
                $p=0;
                $query_length = $mysqli->query("select nazev,jmeno_kategorie from kategorie where skupina = 1");
                echo '<div class="col-sm-12"  style="padding-right:0px;padding-left:0px;"><h3 style="font-weight:300;margin-bottom:10px">Veterinární vybavení</h3></div>';
                while ($row_length = $query_length->fetch_assoc()) {
                          echo '<div class="col-sm-5" style="background:#f3f3f3;margin:2px;width:auto;border:1px solid #0003;padding:0 20px;">  
                                    <a href="?p='.$row_length['jmeno_kategorie'].'"> 
                                        <h3 style="color:black;text-decoration:;font-weight:300;font-size:14px;margin:15px 0;">'.$row_length['nazev'].' <i class="fa fa-next"></i></h3>  
                                    </a> 
                                </div>';
                }
                ?>
                <?php
                $limit = 15;
                $number=0;
                $p=0;
                $query_length = $mysqli->query("select jmeno_kategorie from kategorie where jmeno_kategorie like '$kategorie%'");
                while ($row_length = $query_length->fetch_assoc()) {
                  $count = substr_count($row_length['jmeno_kategorie'], '/');
                  if ($count>$p){
                    $number=$count;
                  }
                  else{}
                  $p = $count;
                }
                $string_join = "";
                $string_join2 = "";
                $string_join3 = "";
                $string_join4 = "";
                for ($g=1;$g<$number;$g++){
                  if ($g==1){
                    $string_join2 = $string_join2." left outer join kategorie as down$g on down$g.sparovaneid = root.jmeno_kategorie ";
                    $string_join3 = $string_join3." left outer join kategorie as up$g on up$g.jmeno_kategorie = node.sparovaneid  ";
                  }
                  else{
                    $string_join2 = $string_join2." left outer join kategorie as down$g on down$g.sparovaneid = down".($g-1).".jmeno_kategorie ";
                    $string_join3 = $string_join3." left outer join kategorie as up$g on up$g.jmeno_kategorie = up".($g-1).".sparovaneid ";
                  }
                $string_join = $string_join.", down$g.jmeno_kategorie as down".$g."_name";
                $string_join4 = $string_join4.", up$g.nazev as up".$g."_name, up$g.jmeno_kategorie as up".$g."_kat";
                }
                /*
                $query_name = $mysqli->query("select nazev from kategorie where jmeno_kategorie = '$kategorie'");
                while ($row_name = $query_name->fetch_assoc()) {
                  echo '<div class="col-sm-12 cat-title"><h2 class="title text-center">'.$row_name['nazev'].'</h2></div>';
                }
                */
                $row_nadpis['nazev']="Veterinární vybavení";
                $row_nadpis['jmeno_kategorie']= "Veterinarni-vybaveni";

                echo '
    						<div class="col-sm-12" style="margin-bottom:10px;padding:0">';
                    $query_kat = $mysqli->query("select root.jmeno_kategorie, root.nazev   as root_name
                                                                   , down1.jmeno_kategorie, down1.obrazek, down1.nazev as down1_name 
                                                                from kategorie as root
                                                              left outer
                                                                join kategorie as down1
                                                                  on down1.sparovaneid = root.jmeno_kategorie                                                                            
                                                                  where root.jmeno_kategorie = '$kategorie'
                                                          ");
                    while ($row_kat = $query_kat->fetch_assoc()) {
                      if($vysledek=1){
                        if(!$row_kat['jmeno_kategorie'] == NULL){
                        /*
                          echo '<div class="col-sm-4" style="background:#f3f3f3;padding:0px;margin:2px;width:32%">
                                    <a href="?p='.$row_kat['jmeno_kategorie'].'">
                                      <div class="col-sm-4" style="padding:0">
                                        <img src="products/categorie/photo/'.$row_kat['obrazek'].'" alt="'.$row_kat['obrazek'].', 13kB" title="5a3aeb2f88fb7" border="0" height="60" width="75" style="object-fit: contain;">
                                      </div>
                                      <div class="col-sm-8" style="padding:0">
                                        <h3 style="color:black;text-decoration:underline;font-weight:300;font-size:14px">'.$row_kat['down1_name'].' <i class="fa fa-next"></i></h3>
                                      </div>
                                    </a>
                                </div>';
                          */
                          echo '<div class="col-sm-5" style="background:#f3f3f3;margin:2px;width:auto !important;border:1px solid #0003;padding:0 20px">  
                                    <a href="?p='.$row_kat['jmeno_kategorie'].'"> 
                                        <h3 style="color:black;text-decoration:;font-weight:300;font-size:14px;margin:15px 0;">'.$row_kat['down1_name'].' <i class="fa fa-next"></i></h3>  
                                    </a> 
                                </div>';
                        }
                        else{}
                      }
                      else{
                      /*
                        echo '<li class= "katgr">
                                <a href="?p='.$row_kat['jmeno_kategorie'].'">
                                  <img src="products/photo/5a3aeb2f88fb7.png" alt="5a3aeb2f88fb7.png, 13kB" title="5a3aeb2f88fb7" border="0">
                                  <h3>'.$row_kat['down1_name'].' <i class="fa fa-next"></i></h3>
                                </a>
                              </li>';
                      */
                      }
                    }
                    echo '    
    						</div>    
                    ';
                //echo $string_join2;
                $query = $mysqli->query("select root.jmeno_kategorie  as root_name
                                         $string_join                                                                                                                                                     
                                            from kategorie as root 
                                         $string_join2                                                                                                                                                                                                      
                                              where root.jmeno_kategorie = '$kategorie'; 
                                      ");
                $offset=($strana_limit-1)*15;
                if ($offset>0){

                }
                else{
                  $offset=0;
                }
                $it = new AppendIterator;
                $string="";
                while ($row = $query->fetch_assoc()) {
                for ($p=1;$p<$number;$p++){
                  if (is_null($row['down1_name'])){
                  }
                  else{
                        $string=$string."'".$row['down'.$p.'_name']."'".",";
                      //$string=$string."'".$row['down1_name']."'".","."'".$row['down2_name']."'".","."'".$row['down3_name']."'".",";
                      }
                    }
                  }

                $string = $string."'".$kategorie."'";
                //echo $string."<br>";
                //echo "SELECT id_produkt, katalog_cena_DPH, obrazek, jmeno_produkt, url from produkt where kategorie in ($string) LIMIT $limit OFFSET $offset<br>";
                  $query3 = $mysqli->query("SELECT skladem, info_sklad,sklad_pocet, id_produkt, katalog_cena_DPH, obrazek, jmeno_produkt, url, popis from produkt where kategorie  LIKE 'Veterinarni%' ".$string_kata." and jmeno_znacka like '%$znacka%' and aktivni = 1 ORDER BY $serazeni LIMIT $limit OFFSET $offset");
                  $query_nmb = $mysqli->query("SELECT COUNT(id_produkt) from produkt where kategorie  LIKE 'Veterinarni%' ".$string_kata." and jmeno_znacka like '%$znacka%' and aktivni = 1");

                  $vysledek = $query_nmb->fetch_assoc();
                  echo '
                    <div class="col-sm-12" style="border: 1px solid #0003;margin-bottom:20px;padding:0;">
                    <ul class="nav nav-tabs filtr">
                    ';
                    if (substr($kategorie, 0, 6) == "Krmivo"){
                    echo'
                      <li style="'.$selected1s.'"><a href="?p='.$row_nadpis['jmeno_kategorie'].'&amp;razeni=doporucene&amp;min='.$min.'&amp;max='.$max.'&amp;znacka='.$znacka.'" style="color:black;text-decoration:none;font-weight:300;'.$selected1.'">Doporučené</a></li>
                      <li style="'.$selected2s.'"><a href="?p='.$row_nadpis['jmeno_kategorie'].'&amp;razeni=nejlevnejsi&amp;min='.$min.'&amp;max='.$max.'&amp;znacka='.$znacka.'" style="color:black;text-decoration:none;font-weight:300;'.$selected2.'">Nejlevnější</a></li>
                      <li style="'.$selected3s.'"><a href="?p='.$row_nadpis['jmeno_kategorie'].'&amp;razeni=nejdrazsi&amp;min='.$min.'&amp;max='.$max.'&amp;znacka='.$znacka.'" style="color:black;text-decoration:none;font-weight:300;'.$selected3.'">Nejdražší</a></li>
                      <li style="'.$selected4s.'"><a href="?p='.$row_nadpis['jmeno_kategorie'].'&amp;razeni=nejprodavanejsi&amp;min='.$min.'&amp;max='.$max.'&amp;znacka='.$znacka.'" style="color:black;text-decoration:none;font-weight:300;'.$selected4.'">Nejprodávanější</a></li>
                      <li style="'.$selected5s.'"><a href="?p='.$row_nadpis['jmeno_kategorie'].'&amp;razeni=abecedne&amp;min='.$min.'&amp;max='.$max.'&amp;znacka='.$znacka.'" style="color:black;text-decoration:none;font-weight:300;'.$selected5.'">Abecedně</a></li>          
                      <li style="float:right;font-weight:300">'.$vysledek['COUNT(id_produkt)'].' produktů celkem</li>     
                      ';
                    }
                    else{
                    echo '
                      <li style="'.$selected1s.'"><a href="?p='.$row_nadpis['jmeno_kategorie'].'&amp;razeni=doporucene&amp;znacka='.$znacka.'" style="color:black;text-decoration:none;font-weight:300;'.$selected1.'">Doporučené</a></li>
                      <li style="'.$selected2s.'"><a href="?p='.$row_nadpis['jmeno_kategorie'].'&amp;razeni=nejlevnejsi&amp;znacka='.$znacka.'" style="color:black;text-decoration:none;font-weight:300;'.$selected2.'">Nejlevnější</a></li>
                      <li style="'.$selected3s.'"><a href="?p='.$row_nadpis['jmeno_kategorie'].'&amp;razeni=nejdrazsi&amp;znacka='.$znacka.'" style="color:black;text-decoration:none;font-weight:300;'.$selected3.'">Nejdražší</a></li>
                      <li style="'.$selected4s.'"><a href="?p='.$row_nadpis['jmeno_kategorie'].'&amp;razeni=nejprodavanejsi&amp;znacka='.$znacka.'" style="color:black;text-decoration:none;font-weight:300;'.$selected4.'">Nejprodávanější</a></li>
                      <li style="'.$selected5s.'"><a href="?p='.$row_nadpis['jmeno_kategorie'].'&amp;razeni=abecedne&amp;znacka='.$znacka.'" style="color:black;text-decoration:none;font-weight:300;'.$selected5.'">Abecedně</a></li>          
                      <li style="float:right">'.$vysledek['COUNT(id_produkt)'].' produktů celkem</li>                    
                    ';
                    }

                   echo ' 
                    </ul>
                    </div>                  
                  ';
                    if($vysledek['COUNT(id_produkt)']==0){
                    echo '<div class="col-sm-12" style="text-align:center;">
                            <h1 style="font-size:25px;font-weight:300">V této kombinaci nyní nejsou k dispozici žádné produkty :(</h1>
                            <a href="?p='.$kategorie.'">
                              <div style="background:#f3f3f3;width:200px;margin:0 auto;">
                                <p style="padding:10px;color:black;"><i class="fa fa-angle-left"></i>Zpět do kategorie</p>
                              </div>
                            </a>
                          </div>';
                    }
                    $nb=1;
                    while ($row3 = $query3->fetch_assoc()) {
                    $cena = ceil($row3['katalog_cena_DPH']);
                    $kratky_popis = $row3['popis'];
                    $kratky_popis = htmlspecialchars_decode($kratky_popis);
                    $kratky_popis = strip_tags($kratky_popis);
                    $kratky_popis = html_entity_decode($kratky_popis);
                    $kratky_popis = explode(".", $kratky_popis);
                    if ($kratky_popis[0]=="Array" or $kratky_popis[0]=="A" or $kratky_popis[0]=="."){
                      $kratky_popis[0]="";
                    }
                    else{
                      if (strlen($kratky_popis[0])>200){
                        $delka = strlen($kratky_popis[0]);
                        $zkratit = ($delka-200);
                        $kratky_popis[0] = substr($kratky_popis[0], 0, -$zkratit)."...";
                      }
                      else{
                        $kratky_popis[0] = $kratky_popis[0];
                      }
                    }
                    $stringos="";
                     if ($row3['skladem'] == 'true'){
                    switch($row3['info_sklad']){
                      case 0:
                        $stringos = '<p class="sklad" style="color: orange">Skladem < 3 ks Ihned k odeslání</p>';
                      break;
                      case 3:
                        $stringos = '<p class="sklad">Skladem 3-9 ks Ihned k odeslání</p>';
                      break;
                      case 10:
                        $stringos = '<p class="sklad">Skladem > 9 ks Ihned k odeslání</p>';
                      break;
                    }
                    }
                    else{
                      $stringos =  '<p class="sklad" style="color:red">Zboží není skladem</p>';
                    }
                    echo'   
                  <iframe name="formDestination" style="display:none"></iframe>               
                  <form method="post" action="?p='.$page.'?action=add&id='.$row3["id_produkt"].'" target="formDestination">      
        						<div class="col-sm-4 product">
        							<div class="product-image-wrapper"> 
                      <a href="?p='.$row3['url'].'">
        								<div class="single-products">
        									<div class="productinfo text-left">';
                          ?>
        										<img src="products/photo/<?php echo $row3['obrazek']; ?>" alt="" onerror="this.src='products/photo/bez_obrazku.jpg'"  width="250" height="250" style="object-fit: contain;"/>
                          <?php
                   echo'
                     </a>    
                      <hr style="margin:8px;">
        											<p>
                              <a href="?p='.$row3['url'].'">'.$row3['jmeno_produkt'].'</a>
                              <h2 class="moc"><strike>'.$cena.' Kč</strike></h2> 
                              <h2>'.$cena.' Kč</h2>     
                              '.$stringos.' 
                                <p class="popis">'.$kratky_popis[0].'</p>
                              </p>  
                            <input type="text" name="quantity" class="form-control" value="1" size="2" style="display:none;"/> 
                            <input type="hidden" name="photo" value="'.$row3["obrazek"].'" />  
                            <input type="hidden" name="hidden_name" value="'.$row3["jmeno_produkt"].'" />   
                            <input type="hidden" name="hidden_price" value="'.$row3["katalog_cena_DPH"].'" />     
                            ';
                            if(isset($_SESSION["shopping_cart"])){
                             $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
                             if(!in_array($row3["id_produkt"], $item_array_id))
                             {
                             ?>
                              <button type="submit" id="<?php echo 'add_cart'.$nb;?>" name="add_to_cart" style="border-radius:0;margin-top:5px;width: 70%;margin-left:10px;" class="btn btn-default add-to-cart cart add-t-c" value="" onclick="getElementById('add_cart<?php echo $nb;?>').style.display='none';getElementById('go_cart<?php echo $nb;?>').style.display='block'"><i class="fa fa-shopping-cart"></i>Přidat do košíku</button>
                              <button type="submit" id="<?php echo 'go_cart'.$nb;?>" name="go-to-cart" style="display:none;border-radius:0;margin-top:5px;width: 70%;margin-left:10px;background:linear-gradient(to top,#13aa00,#06cd01 57%)" class="btn btn-default add-to-cart cart" value="" onclick="location.href='?p=Kosik'"><i class="fa fa-check"></i>Zboží čeká v košíku</button>
                             <?php
                             }
                             else
                             {
                             ?>
                                <button type="submit" name="go-to-cart" style="border-radius:0;margin-top:5px;width: 70%;margin-left:10px;background:linear-gradient(to top,#13aa00,#06cd01 57%)" class="btn btn-default add-to-cart cart" value="" onclick="location.href='?p=Kosik'"><i class="fa fa-check"></i>Zboží čeká v košíku</button>
                             <?php
                             }
                             }
                             else{
                             ?>
                              <button type="submit" id="<?php echo 'add_cart'.$nb;?>" name="add_to_cart" style="border-radius:0;margin-top:5px;width: 70%;margin-left:10px;" class="btn btn-default add-to-cart cart add-t-c" value="" onclick="getElementById('add_cart<?php echo $nb;?>').style.display='none';getElementById('go_cart<?php echo $nb;?>').style.display='block'"><i class="fa fa-shopping-cart"></i>Přidat do košíku</button>
                              <button type="submit" id="<?php echo 'go_cart'.$nb;?>" name="go-to-cart" style="display:none;border-radius:0;margin-top:5px;width: 70%;margin-left:10px;background:linear-gradient(to top,#13aa00,#06cd01 57%)" class="btn btn-default add-to-cart cart" value="" onclick="location.href='?p=Kosik'"><i class="fa fa-check"></i>Zboží čeká v košíku</button>
                             <?php
                             }
                             echo'                                                       
        									</div> 
        								</div>   
        							</div> 
        						</div>     
                  </form>  
                    ';
                    $nb++;
                  }
                ?>
            <div class="col-sm-12">
						<ul class="pagination" style="padding:0">
              <?php
              if($vysledek['COUNT(id_produkt)']>0){
              if (substr($kategorie, 0, 6) == "Krmivo"){
                $min_s = $min;
                $max_s = $max;
                $query_nb = $mysqli->query("SELECT COUNT(id_produkt) FROM produkt WHERE kategorie  LIKE 'Veterinarni%' ".$string_kata." and vaha < $max_s and vaha > $min_s and jmeno_znacka like '%$znacka%' and aktivni = 1");
                $row_nb = $query_nb->fetch_assoc();
              $produktu = $row_nb['COUNT(id_produkt)'];
              $pocet_pr1 = $produktu/15;
              $pocet_pr = ceil($produktu/15);
              $strana = $strana_limit;

              switch($pocet_pr){

                case $pocet_pr>3:
              if ($strana_limit==1){

                }
                else{
                  echo '
                  <li class="page_btn">
                    <a href="?p='.$page.'&amp;strana='.($strana_limit-1).'&amp;razeni='.$razeni.'&amp;min='.$min_s.'&amp;max='.$max_s.'&amp;znacka='.$znacka.'" style="margin:0"><</a> 
                  </li>                  
                  ';

                }
              if ($strana_limit==$pocet_pr){
              }
              else{
                if($strana_limit>5){
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana=1&amp;razeni='.$razeni.'&amp;min='.$min_s.'&amp;max='.$max_s.'"&amp;znacka='.$znacka.' style="margin:0">1</a> 
                  </li>                  
                  ';
                  echo ' 
                  <li class="page_btn"> 
                    <a style="background:transparent" class="no_hover">...</a> 
                  </li>                  
                  ';
                  }
                for ($d=($strana_limit-2);$d<=($strana_limit+2);$d++){
                  if ($d==$strana_limit){
                  echo '  
                  <li class="page_btn active"> 
                    <a style="margin:0">'.$d.'</a>   
                  </li>
                  ';
                  }
                  else{
                  if($d>0 and $d<($pocet_pr)){
                  echo '    
                  <li class="page_btn">
                    <a href="?p='.$page.'&amp;strana='.$d.'&amp;razeni='.$razeni.'&amp;min='.$min_s.'&amp;max='.$max_s.'&amp;znacka='.$znacka.'" style="margin:0">'.$d.'</a> 
                  </li>             
                  ';
                  }
                  }
                  $strana++;
                }
              }
              if ($strana_limit==$pocet_pr){
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana=1&amp;razeni='.$razeni.'&amp;min='.$min_s.'&amp;max='.$max_s.'&amp;znacka='.$znacka.'" style="margin:0">1</a> 
                  </li>                  
                  ';
                  echo ' 
                  <li class="page_btn"> 
                    <a style="background:transparent" class="no_hover">...</a> 
                  </li>                  
                  ';
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana='.($strana-2).'&amp;razeni='.$razeni.'&amp;min='.$min_s.'&amp;max='.$max_s.'&amp;znacka='.$znacka.'" style="margin:0">'.($strana-2).'</a> 
                  </li>                  
                  ';
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana='.($strana-1).'&amp;razeni='.$razeni.'&amp;min='.$min_s.'&amp;max='.$max_s.'&amp;znacka='.$znacka.'" style="margin:0">'.($strana-1).'</a> 
                  </li>                  
                  ';
                  echo '  
                  <li class="page_btn active"> 
                    <a style="margin:0">'.$strana.'</a>   
                  </li>
                  ';
              }
              else{
                if($strana<($pocet_pr+2)){
                  echo ' 
                  <li class="page_btn"> 
                    <a style="background:transparent" class="no_hover">...</a> 
                  </li>                  
                  ';
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana='.$pocet_pr.'&amp;razeni='.$razeni.'&amp;min='.$min_s.'&amp;max='.$max_s.'&amp;znacka='.$znacka.'" style="margin:0">'.$pocet_pr.'</a> 
                  </li>                  
                  ';
                  echo '
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana='.($strana_limit+1).'&amp;razeni='.$razeni.'&amp;min='.$min_s.'&amp;max='.$max_s.'&amp;znacka='.$znacka.'" style="margin:0">></a> 
                  </li>                  
                  ';
                 }
                 else{
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana='.$pocet_pr.'&amp;razeni='.$razeni.'&amp;min='.$min_s.'&amp;max='.$max_s.'&amp;znacka='.$znacka.'" style="margin:0">'.$pocet_pr.'</a> 
                  </li>                  
                  ';
                 }
              }
               break;

               case $pocet_pr>1:
                for ($d=($strana_limit-2);$d<=($strana_limit+2);$d++){
                  if ($d==$strana_limit){
                  echo '  
                  <li class="page_btn active"> 
                    <a style="margin:0">'.$d.'</a>   
                  </li>
                  ';
                  }
                  else{
                  if($d>0 and $d<=($pocet_pr)){
                  echo '    
                  <li class="page_btn">
                    <a href="?p='.$page.'&amp;strana='.$d.'&amp;razeni='.$razeni.'&amp;min='.$min_s.'&amp;max='.$max_s.'&amp;znacka='.$znacka.'" style="margin:0">'.$d.'</a> 
                  </li>             
                  ';
                  }
                  }
                  $strana++;
                }
               break;

                case $pocet_pr==1:
                  echo '  
                    <li class="page_btn active"> 
                      <a style="margin:0">1</a>   
                    </li>
                    ';
                break;

              }
              }
              else{
                $query_nb = $mysqli->query("SELECT COUNT(id_produkt) FROM produkt WHERE kategorie  LIKE 'Veterinarni%' ".$string_kata." and jmeno_znacka like '%$znacka%' and aktivni = 1");
      $row_nb = $query_nb->fetch_assoc();
              $produktu = $row_nb['COUNT(id_produkt)'];
              $pocet_pr1 = $produktu/15;
              $pocet_pr = ceil($produktu/15);
              $strana = $strana_limit;

              switch($pocet_pr){

                case $pocet_pr>3:
              if ($strana_limit==1){

                }
                else{
                  echo '
                  <li class="page_btn">
                    <a href="?p='.$page.'&amp;strana='.($strana_limit-1).'" style="margin:0"><</a> 
                  </li>                  
                  ';

                }
              if ($strana_limit==$pocet_pr){
              }
              else{
                if($strana_limit>5){
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana=1&amp;razeni='.$razeni.'&amp;znacka='.$znacka.'" style="margin:0">1</a> 
                  </li>                  
                  ';
                  echo ' 
                  <li class="page_btn"> 
                    <a style="background:transparent" class="no_hover">...</a> 
                  </li>                  
                  ';
                  }
                for ($d=($strana_limit-2);$d<=($strana_limit+2);$d++){
                  if ($d==$strana_limit){
                  echo '  
                  <li class="page_btn active"> 
                    <a style="margin:0">'.$d.'</a>   
                  </li>
                  ';
                  }
                  else{
                  if($d>0 and $d<($pocet_pr)){
                  echo '    
                  <li class="page_btn">
                    <a href="?p='.$page.'&amp;strana='.$d.'&amp;razeni='.$razeni.'&amp;znacka='.$znacka.'" style="margin:0">'.$d.'</a> 
                  </li>             
                  ';
                  }
                  }
                  $strana++;
                }
              }
              if ($strana_limit==$pocet_pr){
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana=1&amp;razeni='.$razeni.'&amp;znacka='.$znacka.'" style="margin:0">1</a> 
                  </li>                  
                  ';
                  echo ' 
                  <li class="page_btn"> 
                    <a style="background:transparent" class="no_hover">...</a> 
                  </li>                  
                  ';
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana='.($strana-2).'&amp;razeni='.$razeni.'&amp;znacka='.$znacka.'" style="margin:0">'.($strana-2).'</a> 
                  </li>                  
                  ';
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana='.($strana-1).'&amp;razeni='.$razeni.'&amp;znacka='.$znacka.'" style="margin:0">'.($strana-1).'</a> 
                  </li>                  
                  ';
                  echo '  
                  <li class="page_btn active"> 
                    <a style="margin:0">'.$strana.'</a>   
                  </li>
                  ';
              }
              else{
                if($strana<($pocet_pr+2)){
                  echo ' 
                  <li class="page_btn"> 
                    <a style="background:transparent" class="no_hover">...</a> 
                  </li>                  
                  ';
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana='.$pocet_pr.'&amp;razeni='.$razeni.'&amp;znacka='.$znacka.'" style="margin:0">'.$pocet_pr.'</a> 
                  </li>                  
                  ';
                  echo '
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana='.($strana_limit+1).'&amp;razeni='.$razeni.'&amp;znacka='.$znacka.'" style="margin:0">></a> 
                  </li>                  
                  ';
                 }
                 else{
                  echo ' 
                  <li class="page_btn"> 
                    <a href="?p='.$page.'&amp;strana='.$pocet_pr.'&amp;razeni='.$razeni.'&amp;znacka='.$znacka.'" style="margin:0">'.$pocet_pr.'</a> 
                  </li>                  
                  ';
                 }
              }
               break;

               case $pocet_pr>1:
                for ($d=($strana_limit-2);$d<=($strana_limit+2);$d++){
                  if ($d==$strana_limit){
                  echo '  
                  <li class="page_btn active"> 
                    <a style="margin:0">'.$d.'</a>   
                  </li>
                  ';
                  }
                  else{
                  if($d>0 and $d<=($pocet_pr)){
                  echo '    
                  <li class="page_btn">
                    <a href="?p='.$page.'&amp;strana='.$d.'&amp;razeni='.$razeni.'&amp;znacka='.$znacka.'" style="margin:0">'.$d.'</a> 
                  </li>             
                  ';
                  }
                  }
                  $strana++;
                }
               break;

                case $pocet_pr==1:
                  echo '  
                    <li class="page_btn active"> 
                      <a style="margin:0">1</a>   
                    </li>
                    ';
                break;

              }
              }
              }

              //-------------------------------------

              //---------------------------------------------

              ?>
						</ul>
            </div>
					</div><!--features_items-->
				</div>
			</div>
      </div>
		</div>
	</section>
<?php
require 'pages/design/footer.php'; // pripojeni footer stranky
?>
