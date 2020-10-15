<?php
$typ_stranky='produkt';             
require 'pages/design/head.php'; 
require 'pages/design/header.php';  
?>
	
	<section>                                                                                                                                                             
		<div class="container">
			<div class="row"> 
				<div class="col-sm-12" style="margin-top: 40px;">
          <?php
            require "pages/design/cesta.php";
          ?>
        </div>
				<div class="col-sm-12"> 
          </div></div> 
          <?php 
          if (isset($_POST['odeslat_recenzi'])){
          echo '<div class="col-sm-12" style="background:#00cb00;padding:5px;">'; 
              echo '<a style="color:white;padding:5px;">Recenze byla úspěšně odeslána. Nyní čeká na schválení.</a>'; 
          echo '</div>'; 
          }
          else{}
           if (isset($_POST['odeslat_dotaz'])){
          echo '<div class="col-sm-12" style="background:#00cb00;padding:5px;">'; 
              echo '<a style="color:white;padding:5px;">Dotaz byl odeslán. Na email Vám přijde odpověd.</a>'; 
          echo '</div>'; 
          }
          else{}         
          ?>
					<div class="product-details"><!--product-details-->
						<div class="col-sm-7">
							<div class="view-product">
                <?php
                $query = $mysqli->query("SELECT * from produkt where url = '$page'");    
                $row = $query->fetch_assoc();    
                 
                ?>                
								<img src="products/photo/<?php echo $row['obrazek']; ?>" alt="" onerror="this.src='products/photo/bez_obrazku.jpg'" style="object-fit: none;cursor:pointer;" data-toggle="modal" data-target="#imgModal"/>  
<!-- Modal -->
<div class="modal fade" id="imgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:75%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['jmeno_produkt'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="products/photo/<?php echo $row['obrazek']; ?>" class="modal-img" alt="" onerror="this.src='products/photo/bez_obrazku.jpg'" style="height: auto;"/> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button> 
      </div>
    </div>
  </div>
</div>                
							</div>    

						</div>
						<div class="col-sm-5">
							<div class="product-information"><!--/product-information--> 
								<h2><?php echo $row['jmeno_produkt']; ?></h2>
								<p>ID: <?php echo $row['id_produkt']; ?></p>
                <p><b>Značka: </b><?php echo $row['jmeno_znacka']; ?></p>
                <?php  
                $query = $mysqli->query("SELECT jmeno_kategorie, nazev from kategorie where jmeno_kategorie = '".$row['kategorie']."'");    
                $row2 = $query->fetch_assoc();    
                ?>
                <p><b>Kategorie: </b><a href="?p=<?php echo $row2['jmeno_kategorie']; ?>" style="font-weight:300;color:black;text-decoration:underline"><?php echo $row2['nazev']; ?></a></p>   
                <br>
								<span class="number-wrapper" style="margin-bottom:0">
									<a style="color:black;font-size:30px;font-weight:500"><?php echo ceil($row['katalog_cena_DPH']); ?> Kč </a><a style="color:black;font-weight:300;">včetně DPH</a> 
                 <?php if ($row['doporucena_cena']>$row['katalog_cena_DPH']){ ?>
                  <br> 
                  <a style="font-weight:300;color:black;font-size:14px;">Maloobchodní cena: <s><?php echo ceil($row['doporucena_cena']);?> Kč</s> Ušetříte <?php echo (ceil($row['doporucena_cena'])-ceil($row['katalog_cena_DPH']));?> Kč</a> 
                 <?php }else{} ?> 
                  <br>
                  <?php 
                  $query3 = $mysqli->query("SELECT skladem, info_sklad,sklad_pocet from produkt where id_produkt='".$row['id_produkt']."'");       
                    $vysledek = $query3->num_rows;   
                    $today = getdate();
                    $day = $today['mday']+3;
                    $month = $today['mon'];   
                    if ($day>30){
                      $day=1;
                      $month=$month+1;
                    } 
                    while ($row3 = $query3->fetch_assoc()) {      
                     if ($row3['skladem'] == 'true'){
                    switch($row3['info_sklad']){
                      case 0:
                        $stringos = 'Skladem < 3 ks Ihned k odeslání<br><p style="color:black">Doručíme do '.$day.".".$month.'</p>';
                      break;
                      case 3:
                        $stringos = 'Skladem 3-9 ks Ihned k odeslání<br><p style="color:black">Doručíme do '.$day.".".$month.'</p>';
                      break;
                      case 10:
                        $stringos = 'Skladem > 9 ks Ihned k odeslání<br><p style="color:black">Doručíme do '.$day.".".$month.'</p>';
                      break;                                    
                    }  
                    }      
                    else{
                      $stringos =  '<a style="color:red;font-size:16px">Zboží není skladem</a>'; 
                    }   
                    }                 
                  ?>
                  <br>
                  <p style="font-weight:300;color:green;font-size:16px"><?php echo $stringos;?></p>    
                  <iframe name="formDestination" style="display:none"></iframe>
                     
                  <?php              
                  echo'
                  <form method="post" action="?p='.$page.'?action=add&id='.$row["id_produkt"].'" target="formDestination" style="margin-top:20px">     
                             
                            <input type="hidden" name="photo" value="'.$row["obrazek"].'" />  
                            <input type="hidden" name="hidden_name" value="'.$row["jmeno_produkt"].'" />   
                            <input type="hidden" name="hidden_price" value="'.$row["katalog_cena_DPH"].'" /> 
                            <div class="col-sm-2" style="padding:0">
                            <input type="number" name="quantity" value="1" min="1" style="height:50px;font-size:25px;color:black;" />    
                            </div>
                            <div class="col-sm-10" style="padding-right:0;text-align:right">  
                            ';           
                                         if(isset($_SESSION["shopping_cart"])){                                                                                                            
                                         $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");   
                                         if(!in_array($row["id_produkt"], $item_array_id))  
                                         {                           
                                         ?>                          
                                          <button type="submit" id="add_cart" name="add_to_cart" style="width: 100%;margin-left:0px;padding: 14px 10px;border-radius: 0" class="btn btn-default add-to-cart cart add-t-c" value="" onclick="getElementById('add_cart').style.display='none';getElementById('go_cart').style.display='block';document.getElementById('kos').innerHTML = 'Paragraph changed!'; "><i class="fa fa-shopping-cart"></i>Přidat do košíku</button>
                                          <button type="submit" id="go_cart" name="go-to-cart" style="display:none;width: 100%;margin-left:0px;padding: 14px 10px;border-radius: 0;background:linear-gradient(to top,#13aa00,#06cd01 57%);" class="btn btn-default add-to-cart cart" value=""  onclick="location.href='?p=Kosik'"><i class="fa fa-check"></i>Zboží čeká v košíku</button>
                                         <?php
                                         }  
                                         else  
                                         {  
                                         ?>
                                         <button type="submit" name="go-to-cart" style="width: 100%;margin-left:0px;padding: 14px 10px;border-radius: 0;background:linear-gradient(to top,#13aa00,#06cd01 57%);" class="btn btn-default add-to-cart cart" value=""  onclick="location.href='?p=Kosik'"><i class="fa fa-check"></i>Zboží čeká v košíku</button>  
                                         <?php
                                         }   
                                         } 
                                         else{
                                         ?>
                                          <button type="submit" id="add_cart" name="add_to_cart" style="width: 100%;margin-left:0px;padding: 14px 10px;border-radius: 0" class="btn btn-default add-to-cart cart add-t-c" value="" onclick="getElementById('add_cart').style.display='none';getElementById('go_cart').style.display='block';document.getElementById('kos').innerHTML = 'Paragraph changed!'; "><i class="fa fa-shopping-cart"></i>Přidat do košíku</button>
                                          <button type="submit" id="go_cart" name="go-to-cart" style="display:none;width: 100%;margin-left:0px;padding: 14px 10px;border-radius: 0;background:linear-gradient(to top,#13aa00,#06cd01 57%);" class="btn btn-default add-to-cart cart" value=""  onclick="location.href='?p=Kosik'"><i class="fa fa-check"></i>Zboží čeká v košíku</button>
                                         <?php
                                         }     
                    echo '
                            </div>
                            </form>';                 
                  ?>      
								</span>  
              </div> 
						</div> 
					</div><!--/product-details-->  
          <div class="col-sm-12" style="margin-top:40px">
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs" style="border:1px solid #0003;padding-bottom:1Px">
              <?php  
              $active1="";
              $active2="";
              if ($row['popis']=="Array" or $row['popis']=="A" or $row['popis']=="null"){
                $active2="active in";  
                echo '<li  class="active"style="text-align:center !important; width: 50%;background:white"><a href="#companyprofile" data-toggle="tab">Máte dotaz?</a></li>
                      <li style="text-align:center !important;width: 50%;background:white"><a href="#reviews" data-toggle="tab">Hodnocení</a></li>';
                 }
              else{ 
                echo '<li class="active" style="text-align:center !important;background:white"><a href="#details" data-toggle="tab">Popis</a></li>
                      <li style="text-align:center !important;background:white"><a href="#companyprofile" data-toggle="tab">Máte dotaz?</a></li>
                      <li style="text-align:center !important;background:white"><a href="#reviews" data-toggle="tab">Hodnocení</a></li>';             
                $active1="active in"; 
              }  
              ?>  
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade <?php echo $active1; ?>" id="details" > 
                <p><?php echo htmlspecialchars_decode($row['popis']);?></p>
							</div>
							
							<div class="tab-pane fade <?php echo $active2; ?>" id="companyprofile" >
              <p>Potřebujete poradit? Využijte náš <b>Online chat v pravém dolním rohu</b>. Pokud zrovna nejsme online můžete použít <b>formulář</b> pod textem, nebo nám napsat <b>email</b> na <b>info@animalko.cz</b></p>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="dotaz_jmeno" class="form-control" required="required" placeholder="Jméno">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="dotaz_email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="dotaz_predmet" class="form-control" required="required" placeholder="Předmět" Value="<?php echo $row['jmeno_produkt'];?>">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="dotaz_zprava" class="form-control" rows="8" placeholder="Vaše zpráva"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="odeslat_dotaz" class="btn btn-primary pull-right" value="Odeslat dotaz">
				            </div>
				        </form>
                <?php   
                  if (isset($_POST['odeslat_dotaz'])){
                    $query_recenze_vlozit = $mysqli->query("INSERT INTO dotaz (jmeno,email,predmet,dotaz,id_produkt) VALUES ('".$_POST['dotaz_jmeno']."','".$_POST['dotaz_email']."','".$_POST['dotaz_predmet']."','".$_POST['dotaz_zprava']."','".$row['id_produkt']."')"); 
                    echo "INSERT INTO dotaz (jmeno,email,predmet,dotaz,id_produkt) VALUES ('".$_POST['dotaz_jmeno']."','".$_POST['dotaz_email']."','".$_POST['dotaz_predmet']."','".$_POST['dotaz_zprava']."','".$row['id_produkt']."";
                  }
                ?>                    
							</div> 
							
							<div class="tab-pane fade" id="reviews" >  
              <?php 
                 $query_recenze = $mysqli->query("SELECT * FROM recenze WHERE id_produkt = '".$row['id_produkt']."' AND schvaleno=1");    
                 if ($query_recenze->num_rows>0){
                 while ($row_recenze = $query_recenze->fetch_assoc()) {              
              ?>     
									<ul>
										<li><a href=""><i class="fa fa-user"></i><?php echo $row_recenze['jmeno']; ?></a></li>
										<li><a href=""><i class="fa fa-clock-o"></i><?php echo $row_recenze['cas']; ?></a></li>
										<!--<li><a href=""><i class="fa fa-calendar-o"></i><?php echo $row_recenze['cas']; ?></a></li>-->
									</ul>
                  <div class="col-md-12">
									<p><?php echo $row_recenze['obsah']; ?></p>
                  </div>
                  <div class="col-md-6">
                    <a style="color:black">+</a> 
                    <p><?php echo $row_recenze['klady']; ?></p>
                  </div>
                  <div>
                    <a style="color:black">-</a> 
                    <p><?php echo $row_recenze['zapory']; ?></p>
                  </div>
									<hr>
              <?php
                }
                }
                else{
                echo "<p style='margin-top:15px'>K tomuto produktu dosud nebyla přidělena žádná recenze. Budte první! Napište svoji recenzi k produktu ".$row['jmeno_produkt']."</p><hr>";
                }
              ?>  
                	<p><b>Napište vaši recenzi</b></p>  
              <p>Po odeslání recenze vyčkejte až správci schváí vaši recenzi.</p>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="jmeno" class="form-control" required="required" placeholder="Jméno">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div> 
				            <div class="form-group col-md-12">
				                <textarea name="obsah" id="message" class="form-control" rows="8" placeholder="Obsah"></textarea>
				            </div>    
				            <div class="form-group col-md-6">
				                <textarea name="klady" id="message" class="form-control" rows="8" placeholder="Klady"></textarea>
				            </div>  
				            <div class="form-group col-md-6">
				                <textarea name="zapory" id="message" class="form-control" rows="8" placeholder="Zápory"></textarea>
				            </div>                                                              
				            <div class="form-group col-md-12">
				                <input type="submit" name="odeslat_recenzi" class="btn btn-primary pull-right" value="Přidat recenzi">
				            </div>
				        </form>  
                <?php   
                  if (isset($_POST['odeslat_recenzi'])){
                    $query_recenze_vlozit = $mysqli->query("INSERT INTO recenze (jmeno,email,obsah,klady,zapory,id_produkt,schvaleno) VALUES ('".$_POST['jmeno']."','".$_POST['email']."','".$_POST['obsah']."','".$_POST['klady']."','".$_POST['zapory']."','".$row['id_produkt']."',0)");              
                  }
                ?>                   
							</div>
							
						</div>
					</div><!--/category-tab-->          
          </div>
					<div class="col-sm-12 recommended_items"><!--recommended_items-->
						<h2 class="text-center" style="font-weight:300;font-size:24px">Související produkty</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
                <?php 
                  $check=1;
                  $active = 'active';
                  $query3 = $mysqli->query("SELECT skladem, info_sklad,sklad_pocet, id_produkt, katalog_cena_DPH, doporucena_cena, obrazek, jmeno_produkt, url, popis from produkt where kategorie = '".$row['kategorie']."' ORDER BY zakoupen LIMIT 9");   
                  $nb=1;
                  while ($row3 = $query3->fetch_assoc()){  
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
                        $stringos = '<p class="sklad">Skladem < 3 ks Ihned k odeslání</p>';
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
                    if ($check==1){       
                      echo '<div class="item '.$active.'">	 
                      ';  
                      $active = '';
                    }
                    else{          
                    } 
                    echo '  <iframe name="formDestination" style="display:none"></iframe>               
                              <form method="post" action="?p='.$page.'?action=add&id='.$row3["id_produkt"].'" target="formDestination">      
                    						<div class="col-sm-4 product">
                    							<div class="product-image-wrapper"> 
                                  <a href="?p='.$row3['url'].'">
                    								<div class="single-products">
                    									<div class="productinfo text-left">';
                                      ?>
                    										<img src="products/photo/<?php echo $row3['obrazek']; ?>" alt="" onerror="this.src='products/photo/bez_obrazku.jpg'" width="250" height="250" style="object-fit: contain;"/> 
                                 <?php
                                echo ' 
                                  </a>    
                                  <hr style="margin:8px;">
                    											<p>
                                          <a href="?p='.$row3['url'].'">'.$row3['jmeno_produkt'].'</a> 
                                          <h2>'.$cena.' Kč</h2>     
                                          '.$stringos.' 
                                            <p class="popis">'.$kratky_popis[0].'</p>
                                          </p>  
                                        <input type="text" name="quantity" class="form-control" value="1" size="2" style="display:none;"/> 
                                        <input type="hidden" name="photo" value="'.$row3["obrazek"].'" />  
                                        <input type="hidden" name="hidden_name" value="'.$row3["jmeno_produkt"].'" />   
                                        <input type="hidden" name="hidden_price" value="'.$row3["katalog_cena_DPH"].'" />     
                                        ';   
                                         $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
                                         if(!in_array($row3["id_produkt"], $item_array_id))  
                                         {   
                                         ?>
                                          <button type="submit" id="<?php echo 'add_cart'.$nb;?>" name="add_to_cart" style="border-radius:0;margin-top:5px;width: 60%;margin-left:10px;" class="btn btn-default add-to-cart cart add-t-c" value="" onclick="getElementById('add_cart<?php echo $nb;?>').style.display='none';getElementById('go_cart<?php echo $nb;?>').style.display='block'"><i class="fa fa-shopping-cart"></i>Přidat do košíku</button> 
                                          <button type="submit" id="<?php echo 'go_cart'.$nb;?>" name="go-to-cart" style="display:none;border-radius:0;margin-top:5px;width: 60%;margin-left:10px;background:linear-gradient(to top,#13aa00,#06cd01 57%)" class="btn btn-default add-to-cart cart" value="" onclick="location.href='?p=Kosik'"><i class="fa fa-check"></i>Zboží čeká v košíku</button>
                                         <?php
                                         }  
                                         else  
                                         {  
                                         ?>
                                            <button type="submit" name="go-to-cart" style="border-radius:0;margin-top:5px;width: 60%;margin-left:10px;background:linear-gradient(to top,#13aa00,#06cd01 57%)" class="btn btn-default add-to-cart cart" value="" onclick="location.href='?p=Kosik'"><i class="fa fa-check"></i>Zboží čeká v košíku</button> 
                                         <?php
                                         }           
                    echo '								
                                    	</div> 
                    								</div>   
                    							</div> 
                    						</div>     
                              </form>                       
                    ';     
                     if ($check==3){
                        echo '
                            </div>';   
                                $check = 0;                    
                      }
                      else{}    
                      $check++;  
                      $nb++;                             
                  }                 
                ?> 
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
<?php require 'pages/design/footer.php'; ?>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>   
    <script src="js/bootstrap3-typeahead.min.js"></script>  
</body>
</html>