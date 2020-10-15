<?php
   $typ_stranky= 'podpora';
	  require 'pages/design/head.php'; // pripojeni head stranky 
	  require 'pages/design/header.php'; // pripojeni headeru stranky   

?>  
	<section>
		<div class="container">
			<div class="row">
        <div class="col-sm-12 proces">
          <h3>Email</h3>
          <p style="font-weight:300">V případě potřeby nás neváhejte kontaktovat!</p>
          <table class="doprava">
            <tr><td>Pomoc s nákupem</td><td>nakup@animalko.cz</td></tr>
            <tr><td>Pomoc s objednávkou / zbožím</td><td>podpora@animalko.cz</td></tr> 
            <tr><td>Obchod a partnerství</td><td>sebela@animalko.cz</td></tr>
          </table>
        </div>   
        <div class="col-sm-12 proces">
          <h3>Výdejna</h3>
          <p style="font-weight:300">Nebo nás přijďte navštívit osobně.</p> 
          <table class="doprava" style="margin:0">
            <tr class="neviditelne"><td colspan="3">T O P Servis s.r.o.</td></tr>
            <tr class="neviditelne"><td colspan="3">Bayerova 29</td></tr>
            <tr class="neviditelne"><td colspan="3">602 00 Brno - střed</td></tr>                
            <tr class="radek1"><td>Den</td><td>Od</td><td>Do</td></tr>
            <tr><td>Pondělí</td><td>8:00</td><td>16:00</td></tr>
            <tr><td>Úterý</td><td>8:00</td><td>16:00</td></tr>
            <tr><td>Středa</td><td>8:00</td><td>16:00</td></tr>
            <tr><td>Čtvrtek</td><td>8:00</td><td>16:00</td></tr>
            <tr><td>Pátek</td><td>8:00</td><td>16:00</td></tr> 
          </table>             
             	<div id="mapa" class="col-sm-12"></div>
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
        </div>         
        <div class="col-sm-12 proces">
          <h3>Chat</h3>
          <p style="font-weight:300">Pokud jsme online odpověd trvá maximálně pár minut. V případě, že zrovna nejsme k zastižení Vám odpovíme na email.</p>
          <p style="font-weight:300">Online chat najdete v pravém dolním rohu.</p>          
          <div class="col-sm-6">
            <img src="images/podpora/chat1.png" style="width:50%;border:1px solid #f003;margin-top:15px"> 
          </div>
          <div class="col-sm-6">
            <img src="images/podpora/chat2.png" style="width:100%;border:1px solid #f003;margin-top:15px"> 
          </div>  
        </div>
        <div class="col-sm-12 proces"> 
            <h3>Formulář</h3>
            <p style="font-weight:300">Pokud Vám vyhovuje spíše forma kontaktního formuláře naleznete ho v <a href="?p=Kontakt#formular">Kontaktu</a></p>   
            <img src="images/podpora/dotaznik.png" style="width:75%;border:1px solid #f003;margin-top:15px">     
        </div> 
      </div>
     </div>
  </section>
  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php
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