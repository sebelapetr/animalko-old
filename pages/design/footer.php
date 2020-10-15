<?php
// nazev: ./pages/design/footer.php
// ucel: footer stranky

// revize:
// 1.0 - 9.2.2017 13:04:52 [sebela] - zalozeni skriptu
// 1.1 - 30. 3. 2017 8:54:13 [sebela] - upraveni textu ve footeru
// 1.2 - 11. 5. 2017 13:39:08 [sebela] - pridani statistik    
// 2.0 - 13. 5. 2017 18:22:04 [sebela] - dokonceni, uprava designu, pridani datumu vygenerovani stranky
?>
	<footer id="footer" style="margin-top:40px"><!--Footer-->
  <!--
    <div class="col-sm-12" style="border: 1px solid #CCCC;background:#f6f6f6;text-align:center;height:150px">
      <form class=" " name="contact-form" method="post"> 
	      <input type="email" name="email" class="form-control" required="required" placeholder="Email" style="width:35%;display:inline;font-size:20px;margin-top:50px;"> 
        <input type="submit" name="prihlasit" value="Přihlásit odběr" style="padding:8px;border:none;display:inline;font-size:20px;margin-top:50px;background:linear-gradient(to top,#a00,#cd0101 57%);color:white"> 
    </div>
    -->
		<div class="footer-top">
			<div class="container">
				<div class="row"> 
					<div class="col-sm-2">
						<div class="companyinfo" style="margin-top:30px;">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
							<!--<p>Specializovaný internetový obchod veterinárního a chovatelského vybavení se širokou nabídkou nejlepších značek. </p>-->
						</div>                                                                                                                       
					</div>
					<div class="col-sm-10"> 
					<div class="col-sm-3">
            <div class="video-gallery text-center">
              <a href="#" id="chat2">
							 <div class="video-gallery text-center">  
										<i class="fa fa-comments-o" style="color:#696763"></i> 
							   <p>Online chat</p> 
							 </div>
              </a>  
            </div>
					</div>
	  <div id="chatModal2" class="modal">
  
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close"><i class="fa fa-times"></i></span>
      <p>Chat naleznete v pravém dolním rohu obrazovky.</p>
    </div>

</div>  
<script> 
var modal = document.getElementById('chatModal2');
 
var btn = document.getElementById("chat2");
 
var span = document.getElementsByClassName("close")[0];
 
btn.onclick = function() {
    modal.style.display = "block";
}
 
span.onclick = function() {
    modal.style.display = "none";
}
 
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 
</script> 					
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="?p=Kontakt#formular"> 
										<i class="fa fa-pencil-square-o" style="color:#696763"></i> 
                 	<p>Formulář</p>   
								</a>
							 
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="mailto:info@animalko.cz" target="__blank"> 
										<i class="fa fa-envelope" style="color:#696763"></i> 
                    <p>info@animalko.cz</p> 
								</a>
								
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a style="color:#696763" target="__blank" href="https://www.google.com/maps/place/Bayerova+798%2F29,+602+00+Brno-st%C5%99ed-Veve%C5%99%C3%AD/@49.2081311,16.5986039,17z/data=!3m1!4b1!4m5!3m4!1s0x4712946a0e9df0ab:0x59851113415ad283!8m2!3d49.2081311!4d16.6007926"> 
										<i class="fa fa-map-marker" style="color:#696763"></i>   
								    <p>Bayerova 29, Brno 602 00  
                </a>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>  
    <!--
		<div class="footer-top">
			<div class="container">
				<div class="row"> 
					<div class="col-sm-12">
          
						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>      
						<div class="col-sm-2">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>                   
					</div> 
				</div>
			</div>
		</div>  -->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Služby</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="?p=Online-podpora">Online podpora</a></li>
								<li><a href="?p=Kontakt">Kontaktujte Nás</a></li>
                <!--
								<li><a href="#">Stav Objednávky</a></li> 
								<li><a href="#">FAQ</a></li>        
                -->
							</ul>
						</div>
					</div>
          <!--
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
          -->
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Nákup</h2>
							<ul class="nav nav-pills nav-stacked">
                <li><a href="?p=Doprava-a-platba">Doprava a platba</a></li> 
								<li><a href="#">Obchodní podmínky</a></li>
								<li><a href="#">Reklamace</a></li> 
								<li><a href="#">Ochrana osobních údajů</a></li>
							</ul>
						</div>
					</div>
          <!--
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Newsletter</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>   
					</div>
          -->
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Newsletter</h2>
							<form method="POST" class="searchform">
								<input type="email" style="width:75%;height:40px;color:black;" name="mail" placeholder="Emailová adresa" />
								<button type="submit" name="prihlasit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Získejte jako první informace o novinkách, akcí, slevách a dalším!</p>
							</form>
						</div>
          <?php 
          if (isset($_POST['prihlasit'])){
          echo '<div class="col-sm-12" style="background:#00cb00;padding:5px;">'; 
              echo '<a style="color:white;padding:5px;">Přihlášení k odběru novinek proběhlo úspěšně.</a>'; 
          echo '</div>'; 
          }       
          ?>     
					</div> 
                <?php   
                  if (isset($_POST['prihlasit'])){
                    $query_recenze_vlozit = $mysqli->query("INSERT INTO odber (email,aktivni) VALUES ('".$_POST['mail']."',1)");   
                  }
                ?>            
    	<div id="mapa" class="col-sm-4"></div>
      	<script type="text/javascript">
      		var stred = SMap.Coords.fromWGS84(16.6008514, 49.2081519);
      		var mapa = new SMap(JAK.gel("mapa"), stred, 17);  
          
          mapa.addDefaultLayer(SMap.DEF_OPHOTO);
          mapa.addDefaultLayer(SMap.DEF_OPHOTO0203);
          mapa.addDefaultLayer(SMap.DEF_OPHOTO0406);
          mapa.addDefaultLayer(SMap.DEF_TURIST);
          mapa.addDefaultLayer(SMap.DEF_HISTORIC);
          mapa.addDefaultLayer(SMap.DEF_BASE);
          mapa.addDefaultLayer(SMap.DEF_SMART_BASE).enable();
      		mapa.addDefaultControls();
          mapa.addControl(new SMap.Control.Orientation({mode:"ccw"}), {left:"5px",top:"5px"});
          mapa.addControl(new SMap.Control.Orientation({mode:"cw"}), {left:"35px",top:"5px"});
 
          var layerSwitch = new SMap.Control.Layer();
          layerSwitch.addDefaultLayer(SMap.DEF_BASE);
          layerSwitch.addDefaultLayer(SMap.DEF_OPHOTO);
          layerSwitch.addDefaultLayer(SMap.DEF_TURIST);
          layerSwitch.addDefaultLayer(SMap.DEF_OPHOTO0406);
          layerSwitch.addDefaultLayer(SMap.DEF_OPHOTO0203);
          layerSwitch.addDefaultLayer(SMap.DEF_HISTORIC); 
          
          var l = new SMap.Layer.Marker();
          mapa.addLayer(l).enable();
      
          var card = new SMap.Card();              
          card.getHeader().innerHTML = "<strong>ANIMALKO</strong><br>T O P Servis s.r.o";
          card.getBody().innerHTML = "Preslova 26, 602 00 Brno - střed"; 
             
          var marker = new SMap.Marker(stred); 
          marker.decorate(SMap.Marker.Feature.Card, card);
          l.addMarker(marker);  
       
          // cerveny ukazatel
          var pointer2 = new SMap.Control.Pointer({
              type: SMap.Control.Pointer.TYPES.RED, // dva typy, defaultni je modra
          	  snapHUDtoScreen: 20 // snapovani HUD prvku k okrajum obrazovky [px]
          });
          mapa.addControl(pointer2);
          pointer2.setCoords(SMap.Coords.fromWGS84(16.6007875, 49.2081311))
            
      	</script> 
        <!--  
        <div class="panorama" style="margin-top:20px;width:550px; height:350px;"></div> 
        
        <script type="text/javascript">Loader.load(null, {pano: true});</script>
        <script>
          var stred = SMap.Coords.fromWGS84(16.6008514, 49.2081519);
          var panoramaScene = new SMap.Pano.Scene(document.querySelector(".panorama"));
          var PANORAMA_ID = 57108747; 
          // zobrazime panorama dle ID
          SMap.Pano.get(PANORAMA_ID).then(function(place) {
              panoramaScene.show(place);
          }, function() {
              alert("Panorama se nepodařilo zobrazit !");
          });        
        </script>            
        --> 
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<a href="mailto:sebela@animalko.cz" style="color:black"><p class="pull-left">&copy; <?php echo date("Y"); ?> Petr Šebela</p></a>  
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap3-typeahead.min.js"></script>   
</html>