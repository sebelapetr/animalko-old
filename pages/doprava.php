        	<div class="cart-buy" style="padding:10px 0 10px 0;border:none;"><!--/product-information-->   
                <span class="head-title" style="text-align:center;">
                <h3 style="padding:6px">1. krok - Zvolte dopravu <i class="fa fa-shipping-fast"></i></h3>
                </span>           
                <span class="fast-buy" style="padding:6px">         
                    <table style="width: 100%;">
                    <?php 
                      $query_doprava = $mysqli->query("select * from doprava where viditelnost = 1 order by razeni");                                                                                                                               
                      $i=1;
                      while ($row_doprava = $query_doprava->fetch_assoc()) {
                      ?>
                        <tr>
                          <td style="width:50px"><input type="radio" value="<?php echo $row_doprava['jmeno'];?>" name="doprava" id="<?php echo $i;?>" onchange="getElementById('doprava').innerHTML = '<?php echo $row_doprava['katalogova_cena']?>';var x = +getElementById('celkem').innerHTML;x=x+<?php echo $row_doprava['katalogova_cena']?>;getElementById('celkem').innerHTML = x;document.getElementById('1_step').style.background= 'linear-gradient(to top,#a00,#cd0101 57%)';document.getElementById('1_step').style.borderColor = 'white';"></td>
                          <td style="width:60px"><img src="images/doprava/<?php echo $row_doprava['obrazek'];?>" alt="geis.png, 8,4kB" title="geis" border="0" height="40"></td>
                          <td ><label for="ceska-posta"><?php echo $row_doprava['jmeno'];?></label></td>
                          <td style="text-align:right"><label for="ceska-posta" id="cena"><?php echo $row_doprava['katalogova_cena'];?> Kč</label></td>
                        </tr>
                      <?php
                        $i++;
                      } //document.getElementById("doprava").innerHTML = "block";
                    ?>      
                    </table>
                  </span>
                <span class="head-title" style="text-align:center;">
                <h3 style="padding:6px">2. krok - Zvolte platbu <i class="far fa-money-bill-alt"></i></h3>
                </span>                        
                  <span class="fast-buy">  
                    <table style="width: 100%;">                                                   
                    <?php 
                      $query_platba = $mysqli->query("select * from platba order by razeni");           
                      while ($row_platba = $query_platba->fetch_assoc()) { 
                      ?> 
                        <tr>
                          <td style="width:50px"><input type="radio" value="<?php echo $row_platba['jmeno'];?>" name="doprava" id="<?php echo $i;?>" onchange="getElementById('doprava').innerHTML = '<?php echo $row_platba['katalog_cena']?>';var x = +getElementById('celkem').innerHTML;x=x+<?php echo $row_platba['katalog_cena']?>;getElementById('celkem').innerHTML = x;document.getElementById('2_step').style.background = 'linear-gradient(to top,#a00,#cd0101 57%)';document.getElementById('2_step').style.borderColor = 'white';"></td>
                          <td style="width:60px"><img src="images/doprava/<?php echo $row_platba['obrazek'];?>" alt="geis.png, 8,4kB" title="geis" border="0" height="40"></td>
                          <td><label for="ceska-posta"><?php echo $row_platba['jmeno'];?></label></td>
                          <td style="text-align:right"><label for="ceska-posta" id="cena"><?php echo $row_platba['katalog_cena'];?> Kč</label></td>                  
                        </tr>                                                                                                                                                          
                      <?php  
                        $i++; 
                      } //document.getElementById("doprava").innerHTML = "block";        
                    ?>
                        <!--
                        <tr>
                          <td><input disabled="true" type="radio" value="<?php echo $row_platba['jmeno'];?>" name="doprava" id="<?php echo $i;?>" onchange="getElementById('doprava').innerHTML = '<?php echo $row_platba['katalog_cena']?>';var x = +getElementById('celkem').innerHTML;x=x+<?php echo $row_platba['katalog_cena']?>;getElementById('celkem').innerHTML = x;document.getElementById('2_step').style.background = 'linear-gradient(to top,#a00,#cd0101 57%)';document.getElementById('2_step').style.borderColor = 'white';"></td>
                          <td><img src="images/doprava/dobirka.png" alt="geis.png, 8,4kB" title="geis" border="0" height="40"></td>
                          <td><label for="ceska-posta" style="color:grey !important">Hotově</label></td>
                          <td style="text-align:right"><label style="color:grey !important" for="ceska-posta" id="cena"><?php echo $row_platba['katalog_cena'];?> 0 kč</label></td>                  
                        </tr>
                        -->
                    </table> 
                  </span>
                  <input id="cena" type="text" value="<?php echo ceil($row['katalog_cena_DPH']); ?>" style="display:none;">
                  <input id="sklad" type="text" value="<?php echo $row['sklad_pocet']; ?>" style="display:none;">   
        </div>    
                  <script>                  
                  document.getElementById("pocet").addEventListener("keyup", prepocitat_cenu); 
                  function prepocitat_cenu() {
                      var x = document.getElementById("pocet").value;
                      var y = document.getElementById("cena").value; 
                      var z = document.getElementById("sklad").value;       
                        document.getElementById("celkova_cena").innerHTML = y*x+" kč";  
                        alert('a'); 
                  } 
                  </script>                         