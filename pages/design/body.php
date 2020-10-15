<?php
// nazev: ./pages/design/body.php
// ucel: stred stranky,domovska stranka s prehledem balicku

// revize:
// 1.0 - 9.2.2017 13:03:25 [sebela] - zalozeni skriptu
// 1.1 - 12.2.2017 12:59:48 [sebela] - pripojeni k DB  
// 1.2 - 30. 3. 2017 8:49:05 [sebela] - dokončení kodu pro automaticke vypsani vsech karet z DB
// 2.0 - 13. 5. 2017 19:21:57 [sebela] - dokonceni, kontrola syntaxu
// 2.1 - 15. 5. 2017 12:17:12 [sebela] - razeni  
?>
<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Braun</span> Omnifix</h1> 
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <table class="banner_table">
                  <tr><td>50ml LL</td><td> 100ks</td><td> 2098kč s DPH</td></tr>
                  <tr><td>20ml LL</td><td> 100ks</td><td> 1182kč s DPH</td></tr> 
                  <tr><td>10ml LL</td><td> 100ks</td><td> 817kč s DPH</td></tr>
                  <tr><td> 3ml LL</td><td> 100ks</td><td> 557kč s DPH</td></tr>  
                  </table>
									<button type="button" class="btn btn-default get">Koupit</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" /> 
								</div>
							</div>
              <!--
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
              --> 
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div> 
			</div>
		</div>
	</section><!--/slider-->
	<section>
		<div class="container">
			<div class="row">     
				<div class="col-sm-12">
          <div class="proces" style="border:1px solid #cccc"><!--recommended_items-->
            <div class="col-sm-12" style="background:#f3f3f3;border-bottom:1px solid #cccc">
						  <h3 class="text-center" style="padding:0px;margin:15px;border:none">Akce</h3>
						</div>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">  
                <?php   
                 $query = $mysqli->query("SELECT COUNT(id) FROM akce"); 
                 $row = $query->fetch_assoc(); 
                 $products = $row['COUNT(id)'];   
                 $number=1;      
                 $offset=0;   
                 for ($i=0;$i<($products/3);$i++){
                  if ($number==1){
                    echo '<div class="active item">	';
                  } 
                  else{
                    echo '<div class="item">	';
                  }
                   $query = $mysqli->query("SELECT i.*, z.popis,z.skladem,z.id_produkt,z.jmeno_produkt, z.katalog_cena_DPH, z.url, z.obrazek FROM akce AS i, produkt AS z WHERE i.id_produktu = z.id_produkt LIMIT 3 OFFSET $offset");    
                   $nb=1;
               while ($row = $query->fetch_assoc()) {                                   
                    $cena = ceil($row['katalog_cena_DPH']);     
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
                     if ($row['skladem'] == 'true'){
                    switch($row['info_sklad']){
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
                    echo'   
                  <iframe name="formDestination" style="display:none"></iframe>               
                  <form method="post" action="?p='.$page.'?action=add&id='.$row["id_produkt"].'" target="formDestination">      
        						<div class="col-sm-4 product">
        							<div class="product-image-wrapper"> 
                      <a href="?p='.$row['url'].'">
        								<div class="single-products">
        									<div class="productinfo text-left">';
                          ?>
        										<img src="products/photo/<?php echo $row['obrazek']; ?>" alt="" onerror="this.src='products/photo/bez_obrazku.jpg'"  width="250" height="250" style="object-fit: contain;"/> 
                          <?php
                   echo'
                     </a>    
                      <hr style="margin:8px;">
        											<p>
                              <a href="?p='.$row['url'].'">'.$row['jmeno_produkt'].'</a> 
                              <h2>'.$cena.' Kč</h2>     
                              '.$stringos.' 
                                <p class="popis">'.$kratky_popis[0].'</p>
                              </p>  
                            <input type="text" name="quantity" class="form-control" value="1" size="2" style="display:none;"/> 
                            <input type="hidden" name="photo" value="'.$row["obrazek"].'" />  
                            <input type="hidden" name="hidden_name" value="'.$row["jmeno_produkt"].'" />   
                            <input type="hidden" name="hidden_price" value="'.$row["katalog_cena_DPH"].'" />     
                            ';   
                            if(isset($_SESSION["shopping_cart"])){ 
                             $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
                             if(!in_array($row["id_produkt"], $item_array_id))  
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
                   echo ' </div>';          
                   $offset=$offset+3;
                   $number=0;  
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
          <div class="proces" style="border:1px solid #cccc"><!--recommended_items-->
            <div class="col-sm-12" style="background:#f3f3f3;border-bottom:1px solid #cccc">
						  <h3 class="text-center" style="padding:0px;margin:15px;border:none">Doporučujeme</h3>
						</div>
						<div id="recommended-item-carousel2" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner"> 
              <?php   
                 $query = $mysqli->query("SELECT COUNT(id) FROM doporucujeme"); 
                 $row = $query->fetch_assoc(); 
                 $products = $row['COUNT(id)'];   
                 $number=1;      
                 $offset=0;   
                 for ($i=0;$i<($products/3);$i++){
                  if ($number==1){
                    echo '<div class="active item">	';
                  } 
                  else{
                    echo '<div class="item">	';
                  }
                   $query = $mysqli->query("SELECT i.*, z.jmeno_produkt, z.popis, z.skladem, z.id_produkt, z.info_sklad, z.katalog_cena_DPH, z.url, z.obrazek FROM doporucujeme AS i, produkt AS z WHERE i.id_produktu = z.id_produkt LIMIT 3 OFFSET $offset");    
                   while ($row = $query->fetch_assoc()) {                                   
                    $cena = ceil($row['katalog_cena_DPH']);     
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
                     if ($row['skladem'] == 'true'){
                    switch($row['info_sklad']){
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
                    echo'   
                  <iframe name="formDestination" style="display:none"></iframe>               
                  <form method="post" action="?p='.$page.'?action=add&id='.$row["id_produkt"].'" target="formDestination">      
        						<div class="col-sm-4 product">
        							<div class="product-image-wrapper"> 
                      <a href="?p='.$row['url'].'">
        								<div class="single-products">
        									<div class="productinfo text-left">';
                          ?>
        										<img src="products/photo/<?php echo $row['obrazek']; ?>" alt="" onerror="this.src='products/photo/bez_obrazku.jpg'"  width="250" height="250" style="object-fit: contain;"/> 
                          <?php
                   echo'
                     </a>    
                      <hr style="margin:8px;">
        											<p>
                              <a href="?p='.$row['url'].'">'.$row['jmeno_produkt'].'</a> 
                              <h2>'.$cena.' Kč</h2>     
                              '.$stringos.' 
                                <p class="popis">'.$kratky_popis[0].'</p>
                              </p>  
                            <input type="text" name="quantity" class="form-control" value="1" size="2" style="display:none;"/> 
                            <input type="hidden" name="photo" value="'.$row["obrazek"].'" />  
                            <input type="hidden" name="hidden_name" value="'.$row["jmeno_produkt"].'" />   
                            <input type="hidden" name="hidden_price" value="'.$row["katalog_cena_DPH"].'" />     
                            ';   
                            if(isset($_SESSION["shopping_cart"])){ 
                             $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
                             if(!in_array($row["id_produkt"], $item_array_id))  
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
                   echo ' </div>';          
                   $offset=$offset+3;
                   $number=0;  
                 }                                                    

                ?>    							 
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel2" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel2" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>            
					</div><!--/recommended_items-->   
               			
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
                <?php
                $first=1;

                $query = $mysqli->query("SELECT * from tab");    
                while ($row = $query->fetch_assoc()) {   
                if ($first==1){
                  echo '<li class="active"><a href="#'.$row['jmeno_tabulky'].'" data-toggle="tab">'.$row['jmeno'].'</a></li>';
                }  
                else{
                  echo '<li><a href="#'.$row['jmeno_tabulky'].'" data-toggle="tab">'.$row['jmeno'].'</a></li>';
                }
                $first=0;    
                }                  
                ?> 
							</ul>
						</div>
            
            <div class="tab-content">
            <?php          
            $query = $mysqli->query("SELECT * from tab"); 
            $first = 1;
            while ($row = $query->fetch_assoc()) {   
            if ($first==1){
              echo '<div class="tab-pane fade active in" id="'.$row['jmeno_tabulky'].'" > ';
            }
            else{
              echo '<div class="tab-pane fade" id="'.$row['jmeno_tabulky'].'" > ';
            }  
                      
              $query2 = $mysqli->query("SELECT i.*, z.jmeno_produkt, z.katalog_cena_DPH, z.url, z.obrazek FROM ".$row['jmeno_tabulky']." AS i, produkt AS z WHERE i.id_produktu = z.id_produkt");    
              while ($row2 = $query2->fetch_assoc()) {   
              $cena = ceil($row2['katalog_cena_DPH']);
              echo '
								<div class="col-sm-3">
                <a href="'.$row2['url'].'">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="products/photo/'.$row2['obrazek'].'" alt="" width="162" height="184" style="object-fit: contain;"/>
												<h2>'.$cena.' Kč</h2>
												<p>'.$row2['jmeno_produkt'].'</p>
                         </a>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div> 
								</div>               
              ';
              }  
              echo '</div>';
              $first = 0;
             }            
            ?>  
							</div>  
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	