		 <div class="col-sm-12" style="background:#f3f3f3;padding:0" id="slider-nav"> 
        <div class="col-sm-3 categories-slider">
					<div class="left-sidebar">                              
						<div class="alternate-slider panel-group category-products" id="accordian"><!--category-productsr-->  
            
   					  	<div class="panel panel-default">
  								<div class="panel-heading" style="background: #cd0101;border-radius: 0;cursor:pointer" id="start" onclick="this.style.display = 'none';document.getElementById('stop').style.display='block'">
  									<h4 class="panel-title" style="margin: 10px 0 10px 0">
  										<a  style="font-size:15px;background: transparent;color:white;" > 
  											<i class="fa fa-list pull-right"></i>
  										  Kategorie
  										</a> 
  									</h4> 
                    
  								</div> 
  								<div class="panel-heading" style="background: #cd0101;border-radius: 0;cursor:pointer;display:none" id="stop" onclick="this.style.display = 'none';document.getElementById('start').style.display='block'">
  									<h4 class="panel-title" style="margin: 10px 0 10px 0">
  										<a  style="font-size:15px;background: transparent;color:white;" > 
  											<i class="fa fa-angle-up pull-right"></i>
  										  Kategorie
  										</a>     
  									</h4>                    
  								</div>   
  								<div class="cat-slide" id="slide-category"> 
                  <?php 
                 $query_kats = $mysqli->query("select count(jmeno_kategorie) from kategorie where sparovaneid is null");    
                 $row_kats = $query_kats->fetch_assoc();                
                 $height=($row_kats['count(jmeno_kategorie)']*37.6)."px"; 
                  
                  ?>               
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
                    <script>              
                    $(document).ready(function(){   
                        $("#start").click(function(){ 
                            $("#slide-category").animate({height: '<?php echo $height;?>'}, 300); 
                        }); 
                        $("#stop").click(function(){ 
                            $("#slide-category").animate({height: '0  '}, 300); 
                        });                         
                    });
                    </script>                                                                 
                <?php
                  $cislo_1 = 1;
                 $query = $mysqli->query("select * from kategorie where sparovaneid is null");    
                 while ($row = $query->fetch_assoc()) { 
                 if ($cislo_1 == 1){
                  $color = "#f3f3f380"; 
                 } 
                 else{
                  $color = "#f3f3f333";
                  $cislo_1 = $cislo_1+2;
                 }
                 $id = rtrim($row['jmeno_kategorie'],"/");     
                  echo '
   					  	<div class="panel panel-default" style="padding: 5px 0;background:'.$color.';">
  								<div class="panel-heading" style="background-color: transparent">
  									<h4 class="panel-title">
  										<a data-toggle="collapse" data-parent="#accordian" href="#'.$id.'">
  											<span class="pull-right"><i style="font-weight:normal;font-style:normal;font-size:14px;">+</i></span>
  											'.$row['nazev'].'
  										</a>
  									</h4> 
  								</div>
  								<div id="'.$id.'" class="panel-collapse collapse">
  									<div class="panel-body">
  										<ul>
  								';
                   $query2 = $mysqli->query("select root.jmeno_kategorie as root_name, down1.jmeno_kategorie, down1.nazev 
                                             from kategorie as root
                                             left outer
                                              join kategorie as down1 on down1.sparovaneid = root.jmeno_kategorie                                          
                                             where root.jmeno_kategorie = '".$row['jmeno_kategorie']."'");    
                   while ($row2 = $query2->fetch_assoc()) {          
                   echo '<li><a href="?p='.$row2['jmeno_kategorie'].'">'.$row2['nazev'].' </a></li>';
                   }      
                   echo '<li><a href="?p='.$row['jmeno_kategorie'].'"><b>Zobrazit vše </b></a></li>';             
                  echo '			
  										</ul>
  									</div>
  								</div>
  				  			</div>  
                  ';   
                  $cislo_1--; 
                 }                    
                ?> 
  								</div>
  				  			</div>                 
						</div><!--/category-products--> 
						<!--
						<div class="shipping text-center"> 
							<img src="images/home/shipping.jpg" alt="" />
						</div> 
					  -->
					</div>
				</div>                
                <?php  
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;             
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {     
                               $cena = ceil($values["item_price"]);    
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }   
                          }                    
                echo '<div class="col-sm-7" style="padding-top: 16px;padding-bottom:10px">';
                if ($typ_stranky==4){
                echo '<a href="index.php" class="home-cats"><i class="fa fa-home"></i></a>';   
                  echo '<i class="fa fa-next"></i> <a style="color:black;text-decoration:none;font-weight:300;">Hledat</a>';  
                  echo '<i class="fa fa-next"></i> <a style="color:black;text-decoration:none;font-weight:300;">asfs</a>';    
                  echo "</div>";   
                  echo '<div class="col-sm-2" style="padding-right:0px">';
                  echo '<a href="?p=Kosik"><button class="kosik"><i class="fa fa-shopping-cart"></i>Košík<br>'.$pocet_polozek.' ks / '.ceil($total).' Kč</button></a>';  
                  echo '</div>';    
                  echo '</div>';                 
                }
                else{
                  if ($typ_stranky==6){
                    echo '<a href="index.php" class="home-cats"><i class="fa fa-home"></i></a>';   
                      echo '<i class="fa fa-next"></i> <a style="color:black;text-decoration:none;font-weight:300;">Košík</a>';  
                      echo '<i class="fa fa-next"></i> <a style="color:black;text-decoration:none;font-weight:300;">Objednávka</a>';    
                      echo "</div>";   
                      echo '<div class="col-sm-2" style="padding-right:0px">';
                      echo '<a href="?p=Kosik"><button class="kosik"><i class="fa fa-shopping-cart"></i>Košík<br>'.$pocet_polozek.' ks / '.ceil($total).' Kč</button></a>'; 
                      echo '</div>';    
                      echo '</div>';                      
                  }
                  else{
                    if ($typ_stranky==2){
                        echo '<a href="index.php" class="home-cats"><i class="fa fa-home"></i></a>';  
                      $stranka = $page;  
                      $number = substr_count($stranka, '/'); 
                        $limit = 16; 
                        $p=0;      
                        $string_join = "";  
                        $string_join2 = "";
                        $string_join3 = "";
                        $string_join4 = ""; 
                        for ($g=1;$g<$number;$g++){
                          if ($g==1){  
                            $string_join3 = $string_join3." left outer join kategorie as up$g on up$g.jmeno_kategorie = node.sparovaneid";
                          }
                          else{ 
                            $string_join3 = $string_join3." left outer join kategorie as up$g on up$g.jmeno_kategorie = up".($g-1).".sparovaneid ";
                          }            
                        $string_join4 = $string_join4.", up$g.nazev as up".$g."_name, up$g.jmeno_kategorie as up".$g."_kat";                   
                        }    
                        $query_bkckat = $mysqli->query("select node.nazev as node_names, node.jmeno_kategorie as node_name 
                                                        $string_join4
                                                          from kategorie as node
                                                        $string_join3 
                                                            where node.jmeno_kategorie = '".$stranka."';    
                                                        ");                                  
                        $g=$number-1;   
                        while ($row_bkckat = $query_bkckat->fetch_assoc()) {  
                          for ($p=1;$p<$number;$p++){       
                          if (is_null($row_bkckat['up'.$g.'_kat'])){   
                             $g--;
                          }
                          else{  
                            echo '<i class="fa fa-next"></i> <a href="?p='.$row_bkckat['up'.$g.'_kat'].'" style="color:black;text-decoration:underline;font-weight:300;">'.$row_bkckat['up'.$g.'_name']."</a>";  
                            $g--;  
                            }
                          }   
                        $last_kat_url = $row_bkckat['node_name'];  
                        $last_kat = $row_bkckat['node_names'];  
                        echo '<i class="fa fa-next"></i> <a   style="color:black;text-decoration:none;font-weight:300;">'.$row_bkckat['node_names']."</a>";    
                        echo "</div>";   
                        echo '<div class="col-sm-2" style="padding-right:0px">';
                        echo '<a href="?p=Kosik"><button class="kosik"><i class="fa fa-shopping-cart"></i>Košík<br>'.$pocet_polozek.' ks / '.ceil($total).' Kč</button></a>'; 
                        echo '</div>';    
                        echo '</div>'; 
                        }                       
                    }
                    else{
                        echo '<a href="index.php" class="home-cats"><i class="fa fa-home"></i></a>';  
                        $query = $mysqli->query("SELECT * from produkt where url = '$page'");    
                        $row = $query->fetch_assoc();                              
                      $stranka = $row['kategorie'];  
                      $number = substr_count($stranka, '/'); 
                        $limit = 16; 
                        $p=0;      
                        $string_join = "";  
                        $string_join2 = "";
                        $string_join3 = "";
                        $string_join4 = ""; 
                        for ($g=1;$g<$number;$g++){
                          if ($g==1){  
                            $string_join3 = $string_join3." left outer join kategorie as up$g on up$g.jmeno_kategorie = node.sparovaneid";
                          }
                          else{ 
                            $string_join3 = $string_join3." left outer join kategorie as up$g on up$g.jmeno_kategorie = up".($g-1).".sparovaneid ";
                          }            
                        $string_join4 = $string_join4.", up$g.nazev as up".$g."_name, up$g.jmeno_kategorie as up".$g."_kat";                   
                        }    
                        $query_bkckat = $mysqli->query("select node.nazev as node_names, node.jmeno_kategorie as node_name 
                                                        $string_join4
                                                          from kategorie as node
                                                        $string_join3 
                                                            where node.jmeno_kategorie = '".$stranka."';    
                                                        ");                                  
                        $g=$number-1;   
                        while ($row_bkckat = $query_bkckat->fetch_assoc()) {  
                          for ($p=1;$p<$number;$p++){       
                          if (is_null($row_bkckat['up'.$g.'_kat'])){   
                             $g--;
                          }
                          else{  
                            echo '<i class="fa fa-next"></i> <a href="?p='.$row_bkckat['up'.$g.'_kat'].'" style="color:black;text-decoration:underline;font-weight:300;">'.$row_bkckat['up'.$g.'_name']."</a>";  
                            $g--;  
                            }
                          }   
                        $last_kat_url = $row_bkckat['node_name'];  
                        $last_kat = $row_bkckat['node_names'];  
                        echo '<i class="fa fa-next"></i> <a href="?p='.$row_bkckat['node_name'].'" style="color:black;text-decoration:underline;font-weight:300;">'.$row_bkckat['node_names']."</a>";                                     
                        echo '<i class="fa fa-next"></i> <a   style="color:black;text-decoration:none;font-weight:300;">'.$row['jmeno_produkt']."</a>"; 
                        echo "</div>";   
                        echo '<div class="col-sm-2" style="padding-right:0px">';
                        echo '<a href="?p=Kosik" id="kos"><button class="kosik"><i class="fa fa-shopping-cart"></i>Košík<br>'.$pocet_polozek.' ks / '.ceil($total).' Kč</button></a>'; 
                        echo '</div>';    
                        echo '</div>'; 
                        }                     
                    }
                 
                  }

                }     