<?php
   $typ_stranky='doprava-platba';
	  require 'pages/design/head.php'; // pripojeni head stranky 
	  require 'pages/design/header.php'; // pripojeni headeru stranky   

?>  

	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12"> 
            <div class="col-sm-12" >
              <table class="doprava">    
                <caption>Doprava</caption>
                <tr class="radek1"><td style="border:none;background:transparent;"></td><td colspan="3" style="text-align:center">do 1400 kč</td><td style="text-align:center">od 1400 kč</td><!--<td style="border:none;background:transparent;"></td>--></tr> 
                <tr class="radek2"><td style="border:none;background:transparent;"></td><td>do 2 kg</td><td>do 10 kg</td><td> do 50 kg</td><td>do 50 kg</td><!--<td style="border:none;background:transparent;"></td>--></tr>
                <tr <!--class="doporucujeme"-->><td>GEIS</td><td>85 kč</td><td>95 kč</td><td>105 kč</td><td>ZDARMA</td><!--<td>Nejlepší poměr cena / kvalita!</td>--></tr>
                <!--
                <tr><td>Česká pošta balík do ruky</td><td>98 kč</td><td>108 kč</td><td>148 kč</td><td>ZDARMA</td><td style="border:none;background:transparent;"></td></tr>
                <tr><td>Česká pošta balík na poštu</td><td>88 kč</td><td>98 kč</td><td>138 kč</td><td>ZDARMA</td><td style="border:none;background:transparent;"></td></tr> 
                <tr><td>DPD</td><td>92 kč</td><td>114 kč</td><td>155 kč</td><td>ZDARMA</td><td style="border:none;background:transparent;"></td></tr>
                <tr><td>Uloženka doručení na adresu</td><td>72 kč</td><td>84 kč</td><td>108 kč</td><td>ZDARMA</td><td style="border:none;background:transparent;"></td></tr>
                <tr class="doporucujeme"><td>Uloženka doručení na výdejní místo</td><td>54 kč</td><td>65 kč</td><td>90 kč</td><td>ZDARMA</td><td>Nejlepší cena!</td></tr>
                -->
                <tr><td>Osobní odběr</td><td>ZDARMA</td><td>ZDARMA</td><td>ZDARMA</td><td>ZDARMA</td><td style="border:none;background:transparent;"></td></tr>
                <tr class="neviditelne"><td colspan="6">Při nákupu nad 1400 kč je doprava zdarma při platbě bankovním převodem. Při platbě na dobírku je účtována částka 30 kč.</td></tr>
                <tr class="neviditelne"><td colspan="6">Stav objednávky můžete sledovat pomocí sledování zásilky u zvoleného dopravce. Odkaz na sledování zásilky Vám bude odeslán na email.</td></tr>
              </table>  
              
              <table class="doprava"> 
                <caption>Platba</caption>    
                <tr <!--class="doporucujeme"-->><td>Bankovní převod</td><td>ZDARMA</td><!--<td>Nejlepší cena!</td>--></tr>
                <tr><td>Dobírka</td><td>30 kč</td><!--<td style="border:none;background:transparent;"></td>--></tr>  
                <tr class="neviditelne"><td colspan="4">Informace k platbě Vám budou odeslány na email.</td></tr>
                <table class="doprava" style="margin:0">
                  <tr class="neviditelne"><td colspan="2">Fio banka a.s.</td></tr>
                  <tr class="neviditelne"><td>Číslo účtu:</td><td>2001461035/2010</td></tr>
                  <!--<tr class="neviditelne"><td>Specifický symbol:</td><td>0000</td></tr>-->
                  <tr class="neviditelne"><td>Variabilní symbol:</td><td colspan="3">Číslo objednávky, které Vám bude odesláno na email.</td></tr>
                </table>    
              </table>                              
            </div> 
            <div class="col-sm-12 proces">
              <h3>Osobní odběr</h3>
              <div class="col-sm-6">
                <table class="doprava" style="margin:0">
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
              <div class="col-sm-6" style="text-align:center">
                <!--<img src="images/contact/provozovna.png" height="300"> -->
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
            </div>            
            <!--
            <div class="col-sm-12 proces"> 
              <h3>Proces doručení zásilky</h3>
              <div class="col-sm-12"><img src="images/proces/proces.png" style="width:100%"></div> 
            </div>      
            -->
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