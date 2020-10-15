        <?php    
        $email = isset($_POST['email'])?trim($_POST['email']):''; 
        $zakaznik_jmeno = isset($_POST['zakaznik_jmeno'])?trim($_POST['zakaznik_jmeno']):''; 
        $telefon = isset($_POST['telefon'])?trim($_POST['telefon']):''; 
        $zakaznik_adresa = isset($_POST['zakaznik_adresa'])?trim($_POST['zakaznik_adresa']):''; 
        $zakaznik_mesto = isset($_POST['zakaznik_mesto'])?trim($_POST['zakaznik_mesto']):''; 
        $zakaznik_psc = isset($_POST['zakaznik_psc'])?trim($_POST['zakaznik_psc']):'';      
        $zakaznik_spolecnost = isset($_POST['zakaznik_spolecnost'])?trim($_POST['zakaznik_spolecnost']):'';
        $zakaznik_ic = isset($_POST['zakaznik_ic'])?trim($_POST['zakaznik_ic']):'';
        $zakaznik_dic = isset($_POST['zakaznik_dic'])?trim($_POST['zakaznik_dic']):''; 
        $fakturace_jmeno = isset($_POST['fakturace_jmeno'])?trim($_POST['fakturace_jmeno']):'';  
        $fakturace_adresa = isset($_POST['fakturace_adresa'])?trim($_POST['fakturace_adresa']):''; 
        $fakturace_mesto = isset($_POST['fakturace_mesto'])?trim($_POST['fakturace_mesto']):''; 
        $fakturace_psc = isset($_POST['fakturace_psc'])?trim($_POST['fakturace_psc']):'';      
        $fakturace_spolecnost = isset($_POST['fakturace_spolecnost'])?trim($_POST['fakturace_spolecnost']):'';  
        $poznamka = isset($_POST['message'])?trim($_POST['message']):'';        
        $doprava = isset($_POST['doprava'])?trim($_POST['doprava']):'';  
        $platba = isset($_POST['platba'])?trim($_POST['platba']):'';   
        ?>
					<div class="col-sm-6 clearfix">
						<div class="bill-to">            
							<p style="font-size:15px">Osobní informace</p>
							<div class="form-one" style="float:none"> 
									<input class="form-control" type="text" name="email" placeholder="Email*" onchange="document.getElementById('3_step').style.background = 'linear-gradient(to top,#a00,#cd0101 57%)';document.getElementById('3_step').style.borderColor = 'white';">  
							</div> 
						</div>
						<div class="bill-to">
							<p style="font-size:15px">Fakturační údaje</p>
							<div class="form-one" id="#contact-page" style="width:100%"> 
									<input class="form-control" type="text" name="zakaznik_jmeno" placeholder="Jméno a příjmení"> 
									<input class="form-control" type="text" name="telefon" placeholder="Telefon">
									<input class="form-control" type="text" name="zakaznik_adresa" placeholder="Ulice a číslo domu">
									<input class="form-control" type="text" name="zakaznik_mesto" placeholder="Město">
									<input class="form-control" type="text" name="zakaznik_psc" placeholder="PSČ"> 
                  <label><input type="checkbox" onchange="handleChange(this);"> Nakupuji na firmu</label>
                  <br>
                  <script>
                  function handleChange(checkbox) {  
                      if(checkbox.checked == true){
                          document.getElementById("hidden-firma").style.display = "block";
                      }else{
                          document.getElementById("hidden-firma").style.display = "none";
                     }
                  }                  
                  </script> 
								<div id="hidden-firma" style="display:none"> 
									<input class="form-control" type="text" name="zakaznik_spolecnost" placeholder="Název společnosti">
									<input class="form-control" type="text" name="zakaznik_ic" placeholder="IČ">
									<input class="form-control" type="text" name="zakaznik_dic" placeholder="DIČ">
								</div>
                <label><input type="checkbox" onchange="handleChange2(this);"> Doporučit na jinou adresu</label>
                  <script>
                  function handleChange2(checkbox) {  
                      if(checkbox.checked == true){
                          document.getElementById("hidden-adresa").style.display = "block";
                      }else{
                          document.getElementById("hidden-adresa").style.display = "none";
                     }
                  }                  
                  </script>                
								<div id="hidden-adresa" style="display:none;">
									<input class="form-control" type="text" name="faktruace_jmeno" placeholder="Jméno a příjmení">  
									<input class="form-control" type="text" name="fakturace_adresa" placeholder="Ulice a číslo domu">
									<input class="form-control" type="text" name="fakturace_mesto" placeholder="Město">
									<input class="form-control" type="text" name="fakturace_psc" placeholder="PSČ"> 
                  <input class="form-control" type="text" name="fakturace_spolecnost" placeholder="Název společnosti">  
                  
								</div> 
                <br>  
                <label><input type="checkbox" onchange="handleChange3(this);"> Zadat poznámku pro prodejce</label> 
                  <script>
                  function handleChange3(checkbox) {  
                      if(checkbox.checked == true){
                          document.getElementById("hidden-poznamka").style.display = "block";
                      }else{
                          document.getElementById("hidden-poznamka").style.display = "none";
                     }
                  }                  
                  </script>                  
    						<div class="order-message" id="hidden-poznamka" style="display:none;">
    							<p>Poznámka</p>
    							<textarea class="form-control" name="message"  placeholder="Napište poznámku pro prodejce..." rows="16"></textarea>
    						</div>	 	                                 
							</div> 
						</div>   
					</div>