<?php
// nazev: ./pages/design/header.php
// ucel: zahlavi stranky, prihlaseni,logo a volba jazyku 
// revize:
// 1.0 - 9.2.2017 9:35:31 [sebela] - zalozeni skriptu
// 1.1 - 26. 3. 2017 17:05:22 [sebela] - vytvoreni PHP pro login 
// 1.2 - 30. 3. 2017 8:57:58 [sebela] - upravení syntaxu pro zobrazení stavu účtu  
// 2.0 - 13. 5. 2017 19:13:29 [sebela] - dokonceni, kontrola syntaxu   
// 2.1 -  14. 5. 2017 17:34:45 [sebela] - pridani VIP oznaceni                   
?>     
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<!--<li><a href="#"><i class="fa fa-phone"></i> +420 605 200 686</a></li>-->
                <li><a href="#" id="chat"><i class="fa fa-comments-o"></i> Online chat</a></li>
                <li><a href="?p=Kontakt#formular"><i class="fa fa-pencil-square-o"></i> Formulář</a></li>
                <li><a target="__blank" href="mailto:info@animalko.cz"><i class="fa fa-envelope"></i> info@animalko.cz</a></li>
								<li><a target="__blank" href="https://www.google.com/maps/place/Bayerova+798%2F29,+602+00+Brno-st%C5%99ed-Veve%C5%99%C3%AD/@49.2081311,16.5986039,17z/data=!3m1!4b1!4m5!3m4!1s0x4712946a0e9df0ab:0x59851113415ad283!8m2!3d49.2081311!4d16.6007926"><i class="fa fa-map-marker"></i> Bayerova 29, Brno - střed 602 00</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a target="__blank" href="https://www.facebook.com/animalko.cz/"><i class="fa fa-facebook"></i></a></li>
                <li><a target="__blank" href="https://www.instagram.com/animalko.cz/"><i class="fa fa-instagram"></i></a></li>
								<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
          <div class="col-sm-12" style="padding-left:0;padding-right:0;">
						<div class="navbar-header logo pull-left" style="width:60%;float:left;">
							<button type="button" class="navbar-toggle pull-left" style="margin-right:10px;" data-toggle="collapse" data-target=".navbar-collapse">
								<i class="fa fa-bars"></i>
							</button>
              <div class="x290">
                <a href="index.php" class="pull-left" style="background:transparent;padding-right:0;padding-left:0;"><img src="images/home/logo_mobil.png" alt="" /></a>
              </div>
              <div class="x490">
                <a href="index.php" class="pull-left" style="background:transparent;padding-right:0;padding-left:0;"><img src="images/home/logo_mobil.png" alt="" /></a>
              </div>
              <div class="x700">
                <a href="index.php" class="pull-left"><img src="images/home/logo.png" alt="" /></a>
              </div>
						</div>
						<div class="logo pull-left" style="width:40%;float:left;">
							<button type="button" onclick="window.location = '?p=Kosik'" class="navbar-toggle pull-right" style="margin-left:5px;background:linear-gradient(to top,#a00,#cd0101 57%);color:white;">
								<i class="fa fa-shopping-cart"></i>
							</button>
							<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-collapse3">
								<i class="fa fa-search"></i>
							</button>
						</div>
          </div>
            <!--
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									ČR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">SK</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									KČ
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">EUR</a></li>
								</ul>
							</div>
						</div>
            -->
					</div>
					<div class="col-sm-8">
          <!--
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Účet</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Uložené</a></li>
								<li><a href="<?php echo '?p=Kosik'; ?>"><i class="fa fa-shopping-cart"></i> Košík</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Přihlásit</a></li>
							</ul>
						</div>
            -->
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom header-menu"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li style="background:white;padding:10px;"><a href="index.php" style="color:black" <?php if($page == "null"){echo 'class="active"';} ?>>Úvodní strana</a></li>
								<!--<li><a href="404.html">Proč Animalko?</a></li>-->
                <li style="background:white;padding:10px;"><a href="?p=Doprava-a-platba" style="color:black"  <?php if($page == "Doprava-a-platba"){echo 'class="active"';} ?>>Doprava a platba</a></li>
								<!--<li><a href="checkout.html">Obchodní podmínky</a></li>-->
                <li  style="background:white;padding:10px;"><a href="404.html" style="color:black"  <?php if($page == ""){echo 'class="active"';} ?>>Reklamace</a></li>
                <li style="background:white;padding:10px;"><a href="?p=Online-podpora" style="color:black"  <?php if($page == "Online-podpora"){echo 'class="active"';} ?>>Online podpora</a></li>
								<li style="background:white;padding:10px;"><a href="<?php echo '?p=Kontakt'; ?>" style="color:black"  <?php if($page == "Kontakt"){echo 'class="active"';} ?>>Kontakt</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->

		<div class="header-navi"><!--header-navi-->
			<div class="container">
				<div class="row">
        <div class="col-sm-12">
          <div class="navbar-collapse3 x290 x490" style="overflow:hidden;height:0;margin-bottom:20px">
  						<div class="search_box">
              <form method="post">
                <div class="col-sm-12" style="padding-right:10px">
                  <input type="text" class="auto" name="text2" id="country2" autocomplete="off" placeholder="Zadejte hledaný produkt..." style="width:65% !important" required>
                  <script>
                  $(document).ready(function(){

                   $('#country2').typeahead({
                    source: function(query, result)
                    {
                     $.ajax({
                      url:"fetch.php",
                      method:"POST",
                      data:{query:query},
                      dataType:"json",
                      success:function(data)
                      {
                       result($.map(data, function(item){
                        return item;
                       }));
                      }
                     })
                    }
                   });

                  });
                  </script>
                  <input type="submit" name="find" value="Hledat" style="width:30% !important">
                </div>
              </form>
                <?php
                $find = isset($_POST['find'])?true:false;
                if ($find){
                  if (strlen(trim($_POST['text2'], ""))>1){
                    $vyhledani = $_POST['text2'];
                    ?>
                    <script>window.location = "?p=Hledat&text=<?php echo $_POST['text2'];?>"</script>
                    <?php
                  }
                }
                ?>
  						</div>
  					</div>
          <div class="col-sm-3" style="padding:0">
            <?php require 'pages/design/menu.php'; ?>
          </div>
					<div class="col-sm-7 x700">
						<div class="search_box">
            <form method="post">
              <div class="col-sm-9" style="padding-right:10px">
                <input type="text" class="auto" name="text2" id="country" autocomplete="off" placeholder="Zadejte hledaný produkt..." style="width:100% !important" required>
                <script>
                $(document).ready(function(){

                 $('#country').typeahead({
                  source: function(query, result)
                  {
                   $.ajax({
                    url:"fetch.php",
                    method:"POST",
                    data:{query:query},
                    dataType:"json",
                    success:function(data)
                    {
                     result($.map(data, function(item){
                      return item;
                     }));
                    }
                   })
                  }
                 });

                });
                </script>
              </div>
              <div class="col-sm-3" style="padding-left:10px">
                <input type="submit" name="find" value="Hledat" style="width:100% !important">
              </div>
            </form>
              <?php
              $find = isset($_POST['find'])?true:false;
              if ($find){
                if (strlen(trim($_POST['text2'], ""))>1){
                  $vyhledani = $_POST['text2'];
                  ?>
                  <script>window.location = "?p=Hledat&text=<?php echo $_POST['text2'];?>"</script>
                  <?php
                }
              }
              ?>
						</div>
					</div>
          <div class="col-sm-2 x700" style="padding:0">
          <?php
          /*
          if(!empty($_SESSION["shopping_cart"]))
          {
               $total = 0;
               foreach($_SESSION["shopping_cart"] as $keys => $values)
               {
               $cena = ceil($values["item_price"]);
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
               }
          echo '<a href="?p=Kosik"><button class="kosik"><i class="fa fa-shopping-cart"></i>Košík</button></a>';
          }
          else{
          echo '<a href="?p=Kosik"><button class="kosik"><i class="fa fa-shopping-cart"></i>Košík<br>0 Kč</button></a>';
          }
          */
          echo '<a href="?p=Kosik"><button class="kosik"><i class="fa fa-shopping-cart"></i>Košík</button></a>';
          ?>
          </div>
				</div>
        <!--
        <div class="col-sm-12" style="margin-top:20px">
          <div class="col-sm-4" style="font-weight:300;width:32.7%;padding:12px;text-align:center;background:#f3f3f3;border:1px solid #0003;margin-right:5px;">
            Doprava nad 900 kč zdarma
          </div>
          <div class="col-sm-4" style="font-weight:300;width:32.7%;padding:12px;text-align:center;background:#f3f3f3;border:1px solid #0003;margin-right:5px;margin-left:5px;">
            Expedice do 24 hodin
          </div>
          <div class="col-sm-4" style="font-weight:300;width:32.7%;padding:12px;text-align:center;background:#f3f3f3;border:1px solid #0003;margin-left:5px;">
            Osobní odběr v Brně
          </div>
        </div>
        -->
        </div>
			</div>
	</header><!--/header-->

  <div id="chatModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <p>Chat naleznete v pravém dolním rohu obrazovky.</p>
    </div>

</div>
<script>
var modal = document.getElementById('chatModal');

var btn = document.getElementById("chat");

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
