<?php        
    $typ_stranky = 'kontakt'; 
	  require 'pages/design/head.php'; // pripojeni head stranky 
	  require 'pages/design/header.php'; // pripojeni headeru stranky 
    
?>                               
	 <div id="contact-page" class="container">
   <div class="col-sm-6">
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
      <h3>Výdejní místo</h3>   
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
    </div>
    <div class="col-sm-12 proces">
      <h3>Bankovní spojení</h3>
      <table class="doprava" style="margin:0">
        <tr class="neviditelne"><td colspan="2">Fio banka a.s.</td></tr>
        <tr class="neviditelne"><td>Číslo účtu:</td><td>2001461035/2010</td></tr>
        <!--<tr class="neviditelne"><td>Specifický symbol:</td><td>0000</td></tr>-->
      </table>       
    </div>
    <div class="col-sm-12 proces">
      <h3>Fakturační adresa</h3>
      <table class="doprava" style="margin:0">
        <tr class="neviditelne"><td>Petr Šebela</td></tr>
        <tr class="neviditelne"><td>Na Větřáku 691</td></tr>
        <tr class="neviditelne"><td>679 06 Jedovnice</td></tr>
        <tr class="neviditelne"><td>IČ: 06364896</td></tr>
      </table>       
    </div>
    </div>
    <div class="col-sm-6">
      <div class="col-sm-12 proces">
        <h3 id="formular">Formulář</h3>       
	    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
	            <div class="form-group col-md-6">
	                <input type="text" name="name" class="form-control" required="required" placeholder="Jméno">
	            </div>
	            <div class="form-group col-md-6">
	                <input type="text" name="name_2" class="form-control" required="required" placeholder="Příjmení">
	            </div>              
	            <div class="form-group col-md-12">
	                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
	            </div>
	            <div class="form-group col-md-12">
	                <input type="text" name="phone" class="form-control" required="required" placeholder="Telefon">
	            </div>              
	            <div class="form-group col-md-12">
	                <input type="text" name="subject" class="form-control" required="required" placeholder="Předmět">
	            </div>
	            <div class="form-group col-md-12">
	                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Vaše zpráva"></textarea>
	            </div>                        
	            <div class="form-group col-md-12">
	                <input type="submit" name="submit" class="btn btn-primary" value="Odeslat" style="width:150px;padding:10px;margin-top:5px;color:black;background:#f3f3f3;border:1px solid #e003">
	            </div>
	        </form>
			</div>    
      <div class="col-sm-12 proces">
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
  
    </div><!--/#contact-page--> 
<?php
require 'pages/design/footer.php'; // pripojeni footer stranky  
?>	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>