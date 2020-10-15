<?php
   $typ_stranky='kosik';
	  require 'pages/design/head.php'; // pripojeni head stranky 
	  require 'pages/design/header.php'; // pripojeni headeru stranky  
  $send = isset($_POST['check'])?true:false; // stiksnuto tlacitko send
  $odeslat = isset($_POST['send'])?true:false; // stiksnuto tlacitko send  

?>  
	<section>
		<div class="container" id="cart_items">
			<div class="row"> 
      <!-- 
        <div class="col-sm-12" style="margin-top:40px;margin-bottom:30px;">
          <div style="width:25%;float:left;"><div style="height:30px;width:30px;border:1px dashed black;border-radius:20px;float:left;" id="1_step"></div><div style="font-weight:300;font-size:16px;padding:4px;margin-left:5px;float:left">1. Zvolit typ dopravy</div></div>
          <div style="width:25%;float:left;"><div style="height:30px;width:30px;border:1px dashed black;border-radius:20px;float:left;" id="2_step"></div><div style="font-weight:300;font-size:16px;padding:4px;margin-left:5px;float:left">2. Zvolit typ platby</div></div>
          <div style="width:25%;float:left;"><div style="height:30px;width:30px;border:1px dashed black;border-radius:20px;float:left;" id="3_step"></div><div style="font-weight:300;font-size:16px;padding:4px;margin-left:5px;float:left">3. Zadat fakturačni udaje</div></div>
          <div style="width:25%;float:left;"><div style="height:30px;width:30px;border:1px dashed black;border-radius:20px;float:left;" id="4_step"></div><div style="font-weight:300;font-size:16px;padding:4px;margin-left:5px;float:left">4. Odeslat objednavku</div></div>                               
        </div>  
        -->                                                          
				<div class="col-sm-12">
				<div class="col-sm-6" style="padding-left:0">      
        	<div class="cart-buy" style="padding:10px 0 10px 0;border:none;"><!--/product-information-->   
                <span class="head-title">
                <h3 style="padding:6px">Rekapitulace objednávky</h3>
                </span>           
                <span class="fast-buy" >  
<table class="table table-condensed">    
          <?php                            
         // print_r($_SESSION["shopping_cart"]);          
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;             
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {     
                               $cena = ceil($values["item_price"]*$values["item_quantity"]);   
                          ?>    
                          <tr>
                            <td>
                              <a href=""><img src="products/photo/<?php echo $values["item_photo"]; ?>" alt="" height="75" width="75" style="object-fit: contain;"></a>
                            </td>
                            <td>
                              <?php
                                $query = $mysqli->query("select url from produkt where id_produkt = '".$values["item_id"]."'"); 
                                $row = $query->fetch_assoc();
                              ?>
              								<h4 style="font-size: 14px;">
                                <a href="?p=<?php echo $row['url'];?>" target="_blank" style="color:black;font-weight:400">
                                  <p style="font-size:15px;"><?php echo  $values["item_name"];?></p>
                                  <p style="color:black;font-weight:300;margin-top:8px">
                                    <?php echo $values["item_quantity"];?> ks 
                                      
                                    <?php 
                                       
                                    ?>
                                    <a href="?p=Kosik&amp;action=add&amp;id=<?php echo $values["item_id"];?>" style="border: 1px solid #0003;background: #f3f3f3;font-weight: 300;padding: 0px 7px;color: black;">+</a>   
                                    <?php 
                                    
                                    ?>    
                                                                 
                                    <?php
                                    if ($values["item_quantity"]>1){ 
                                    ?>
                                    <a href="?p=Kosik&amp;action=remove&amp;id=<?php echo $values["item_id"];?>" style="border: 1px solid #0003;background: #f3f3f3;font-weight: 300;padding: 0px 7px;color: black;">-</a>
                                    <?php 
                                    } 
                                    ?>    
                                  </p> 
                                </a> 
                              </h4> 
                            </td>                                                            
                            <td style="text-align:right"> 
                              <p style="color:black;margin:10px 0;font-size:14px"><?php echo $cena; ?> Kč<a class="cart_quantity_delete" href="?p=Kosik&amp;action=delete&amp;id=<?php echo $values["item_id"]; ?>"><i style="color:black;margin-left:8px" class="fa fa-times"></i></a></p>
                            </td> 
                          </tr>       
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);                                                                                                 
                               }   
                          }  
            ?>       
				</table> 
					<div class="total_area">
						<ul style="padding:0;color:black;font-size:15px">
							<li style="background:white;font-size:15px !important">Cena zboží s DPH: <span style="font-size:15px !important"><?php echo ceil($total); ?> Kč</span></li> 
              <hr>
							<li style="background:white;font-size:15px !important">Cena dopravy: <span style="font-size:15px !important">+ <a id="doprava" style="color:black">0</a> kč</span></li>            
              <hr>
              <li style="background:white;font-size:15px !important">Cena platby: <span style="font-size:15px !important">+ <a id="platba" style="color:black">0</a> kč</span></li>       
              <hr>
							<li style="font-size:17px !important;background:white;color:black;">K úhradě s DPH: <span style="color:#be0101;font-size:18px !important;"><a id="celkem" style="color:#be0101"><?php echo ceil($total); ?></a> Kč</span></li>
              <hr>
						</ul>  
				</div>  </div> 
        </div>            
      <div class="col-sm-6" style="padding-right:0">
      <form method="post">
        <?php require 'pages/doprava.php'; ?>
        	<div class="cart-buy" style="padding:10px 0 10px 0;border:none;"><!--/product-information-->   
                <span class="head-title">
                <h3 style="padding:6px">3. krok - Zadejte fakturační údaje</h3>
                </span>           
                <span class="fast-buy" style="margin-top:15px">
                  <?php require 'pages/udaje.php';?>
              <div class="col-sm-5" style="font-weight:300"> 
                <h3 style="font-weight:300;font-size:20px;">Potřebujete poradit?</h3>   
                    <p style="display:block"><i class="fa fa-comments-o"></i> Online chat</p>
                    <p style="display:block"><a style="color:black" href="?p=Kontakt"><i class="fa fa-pencil-square-o"></i> Formulář</a></p>
                    <p style="display:block"><a style="color:black" target="__blank" href="mailto:podpora@animalko.cz"><i class="fa fa-envelope"></i>  podpora@animalko.cz</a></p>
                    <p style="display:block"><a style="color:black" target="__blank" href="https://www.google.com/maps/place/czmegashop.cz/@49.2081311,16.5986039,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x4712946a0e9df0ab:0x59851113415ad283!2zQmF5ZXJvdmEgNzk4LzI5LCA2MDIgMDAgQnJuby1zdMWZZWQtVmV2ZcWZw60!3b1!8m2!3d49.2081311!4d16.6007926!3m4!1s0x4712946a0e9df0ab:0x8926285eceb9fc8!8m2!3d49.2081311!4d16.6007926"><i class="fa fa-map-marker"></i> Bayerova 29, Brno 602 00</a></p>                
                         
								</span>    
         
        </div>               
        </div>         <div class="col-sm-4" style="padding:0">
        <!--
					<button type="button" class="btn btn-fefault cart" style="background:#e2e2e2;color:black;margin:0 0 0px 0;height:40px;">       
						<i class="fa fa"></i>
						 < Zpět
					</button>   -->
        </div>  
        <div class="col-sm-12" style="padding:0">    
					<button type="submit" name="send" class="btn btn-fefault cart" style="width:100%;margin:0 0 10px 0;height:50px;">       
						<i class="fa fa"></i>
							Odeslat objednávku >
					</button>   
          </form>
        </div>            
      </div> 
 
                                               
				</span>   
        
        </div>    
    </div>      
    </div></div></div>  
	</section> <!--/#cart_items--> 
<?php 
if ($odeslat){ 
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip2 = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip2 = $forward;
    }
    else
    {
        $ip2 = $remote;
    }

    return $ip2;
} 
$ip = getUserIP();   
$platba="";
$stav="";
$faktura=55653;
$doklad=3333;
$zbozi=5; 
$uniqid = uniqid(); 
           $query_objednavka = $mysqli->query('INSERT INTO objednavka(id_objednavka, email,telefon,ip,zakaznik_jmeno,zakaznik_ulice,zakaznik_mesto,zakaznik_psc,zakaznik_spolecnost, zakaznik_ic,zakaznik_dic,fakturace_jmeno,fakturace_ulice,fakturace_mesto,fakturace_psc,fakturace_spolecnost,doprava,platba,stav,cena,faktura,doklad,zbozi,poznamka) 
                                   VALUES( 
                                   "'.$uniqid.'",
                                   "'.$email.'",
                                   "'.$telefon.'",
                                   "'.$ip.'",
                                   "'.$zakaznik_jmeno.'",
                                   "'.$zakaznik_adresa.'",
                                   "'.$zakaznik_mesto.'",
                                   "'.$zakaznik_psc.'",
                                   "'.$zakaznik_spolecnost.'", 
                                   "'.$zakaznik_ic.'",
                                   "'.$zakaznik_dic.'",
                                   "'.$fakturace_jmeno.'",
                                   "'.$fakturace_adresa.'",
                                   "'.$fakturace_mesto.'",
                                   "'.$fakturace_psc.'",
                                   "'.$fakturace_spolecnost.'", 
                                   "'.$doprava.'",
                                   "'.$platba.'",
                                   "'.$stav.'",
                                   "'.ceil($total).'",
                                   "'.$faktura.'",
                                   "'.$doklad.'",
                                   "'.$zbozi.'",
                                   "'.$poznamka.'" 
                                   )') or die(mysqli_error($mysqli));   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;             
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {                                             
                               $query_objednavka_zbozi = $mysqli->query('INSERT INTO objednavka_zbozi(uid_objednavka,id_zbozi,mnozstvi) 
                                   VALUES( 
                                   "'.$uniqid.'",
                                   "'.$values["item_id"].'",
                                   "'.$values["item_quantity"].'" 
                                   )') or die(mysqli_error($mysqli));         
                               }   
                          }                                               
}
require 'pages/design/footer.php'; // pripojeni footer stranky  
?>	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>   