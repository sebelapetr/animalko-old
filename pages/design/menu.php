  					<div class="left-sidebar x700">                              
						<div class="alternate-slider panel-group category-products" id="accordian"><!--category-productsr-->   
   					  	<div class="panel panel-default">
  								<div class="panel-heading" style="background: linear-gradient(to top,#a00,#cd0101 57%);border-radius: 0;cursor:pointer" id="start" onmouseover="document.getElementById('bubble').style.display = 'block';"  onmouseout="document.getElementById('bubble').style.display = 'none';">
  									<h4 class="panel-title" style="margin: 10px 0 10px 0">
  										<a  style="font-size:15px;background: transparent;color:white;" > 
  											<i class="fa fa-angle-down pull-right"></i>
  										  Vyberte kategorii
  										</a> 
  									</h4> 
                    
  								</div>  
  				  
  				  			</div>                 
						</div><!--/category-products--> 
						<!--
						<div class="shipping text-center"> 
							<img src="images/home/shipping.jpg" alt="" />
						</div> 
					  --> 
            </div> 
            <div id="bubble" style="display:none;z-index:1000" onmouseover="document.getElementById('bubble').style.display = 'block';"  onmouseout="document.getElementById('bubble').style.display = 'none';">
            
            <a href="?p=Veterinarni-vybaveni" style="color:black"><div  id="sk_1_def" style="background:#f3f3f3;padding:15px;font-size:14px;font-weight:300" onmouseover="document.getElementById('sk_1').style.display = 'block';document.getElementById('sk_1_def').style.backgroundColor = '#e9e9e9';"  onmouseout="document.getElementById('sk_1').style.display = 'none';document.getElementById('sk_1_def').style.backgroundColor = '#f3f3f3';"><i class="fa fa-angle-right pull-right"></i>Veterinární vybavení</div></a>
            
        <hr style="margin:0;border-top:1px solid #d7cdcd">    
            
            <a href="?p=Chovatelske-vybaveni" style="color:black"><div  id="sk_2_def" style="background:#f3f3f3;padding:15px;font-size:14px;font-weight:300" onmouseover="document.getElementById('sk_2').style.display = 'block';document.getElementById('sk_2_def').style.backgroundColor = '#e9e9e9';"  onmouseout="document.getElementById('sk_2').style.display = 'none';document.getElementById('sk_2_def').style.backgroundColor = '#f3f3f3';"><i class="fa fa-angle-right pull-right"></i>Chovatelské vybavení</div></a>
        
            </div>
            <div id="sk_1" style="width:250px;display: none;position:absolute;top:49px;left:284px;z-index:1000;background:#e4e4e4" onmouseover="document.getElementById('sk_1').style.display = 'block';document.getElementById('sk_1_def').style.backgroundColor = '#e4e4e4';document.getElementById('bubble').style.display = 'block';" onmouseout="document.getElementById('sk_1').style.display = 'none';document.getElementById('sk_1_def').style.backgroundColor = '#f3f3f3';"> 
           
              <?php 
              $d=0;
                 $query = $mysqli->query("select * from kategorie where skupina = 1 order by vaha desc limit 12");    
                 while ($row = $query->fetch_assoc()) {
                 ?>               
                <a style="color:black" href="?p=<?php echo $row['jmeno_kategorie'];?>">
                  <div id="sk_1_def_<?php echo $d;?>" style='background:#e4e4e4;padding:15px;font-size:14px;font-weight:300' onmouseover="document.getElementById('sk_1_<?php echo $d;?>').style.display = 'block';document.getElementById('sk_1_def_<?php echo $d;?>').style.backgroundColor = '#dbdbdb';document.getElementById('bubble').style.display = 'block';" onmouseout="document.getElementById('sk_1_<?php echo $d;?>').style.display = 'none';document.getElementById('sk_1_def_<?php echo $d;?>').style.backgroundColor = '#e4e4e4';">
                    <i class='fa fa-angle-right pull-right'></i><?php echo $row['nazev'];?></a>  
                  <?php
                  $query2 = $mysqli->query("select * from kategorie where sparovaneid = '".$row['jmeno_kategorie']."' order by vaha desc");         
                  ?>
                  <div id="sk_1_<?php echo $d;?>" style="width:250px;display: none;position:absolute;top:<?php echo ($d)."px"; ?>;left:250px;z-index:1000;background:#dbdbdb" onmouseover="document.getElementById('sk_1').style.display = 'block';document.getElementById('sk_1_def').style.backgroundColor = '#e4e4e4';document.getElementById('bubble').style.display = 'block';" onmouseout="document.getElementById('sk_1').style.display = 'none';document.getElementById('sk_1_def_<?php echo $d;?>').style.backgroundColor = '#e4e4e4';">                   
                  <?php
                  while ($row2 = $query2->fetch_assoc()) {   
                  echo "<a style='color:black' href='?p=".$row2['jmeno_kategorie']."'><div style='background:#dbdbdb;padding:15px;font-size:14px;font-weight:300'>".$row2['nazev']."";  
  echo "</div></a><hr style='margin:0;border-top:1px solid #d7cdcd'> ";                      
                  }    echo "</div>"; 
                  echo "</div><hr style='margin:0;border-top:1px solid #d7cdcd'> "; 
                  $d=$d+51;
                 }   
                
                  echo "<a href='?p=Veterinarni-vybaveni' style='color:black'><div style='background:#e4e4e4;padding:15px;font-size:14px;font-weight:500'><i class='fa fa-angle-right pull-right'></i>Zobrazit všechny kategorie</div></a>";                     
              ?>
            </div>
            <div id="sk_2" style="width:250px;display: none;position:absolute;top:50px;left:275px;z-index:1000;background:#e4e4e4" onmouseover="document.getElementById('sk_2').style.display = 'block';document.getElementById('sk_2_def').style.backgroundColor = '#e4e4e4';document.getElementById('bubble').style.display = 'block';" onmouseout="document.getElementById('sk_2').style.display = 'none';document.getElementById('sk_2_def').style.backgroundColor = '#f3f3f3';"> 
           
              <?php  
                 $p=0;
                 $query = $mysqli->query("select * from kategorie where skupina = 2 order by vaha desc");    
                 while ($row = $query->fetch_assoc()) {               
                 ?>               
                <a style="color:black" href="?p=<?php echo $row['jmeno_kategorie'];?>"><div id="sk_2_def_<?php echo $p;?>" style='background:#e4e4e4;padding:15px;font-size:14px;font-weight:300' onmouseover="document.getElementById('sk_2_<?php echo $p;?>').style.display = 'block';document.getElementById('sk_2_def_<?php echo $p;?>').style.backgroundColor = '#dbdbdb';document.getElementById('bubble').style.display = 'block';" onmouseout="document.getElementById('sk_2_<?php echo $p;?>').style.display = 'none';document.getElementById('sk_2_def_<?php echo $p;?>').style.backgroundColor = '#e4e4e4';"><i class='fa fa-angle-right pull-right'></i><?php echo $row['nazev'];?> 
                  <?php
                  $query2 = $mysqli->query("select * from kategorie where sparovaneid = '".$row['jmeno_kategorie']."' order by vaha desc limit 7");         
                  ?>
            <div id="sk_2_<?php echo $p;?>" style="width:250px;display: none;position:absolute;top:<?php echo ($p)."px"; ?>;left:250px;z-index:1000;background:#dbdbdb" onmouseover="document.getElementById('sk_2').style.display = 'block';document.getElementById('sk_2_def').style.backgroundColor = '#e4e4e4';document.getElementById('bubble').style.display = 'block';" onmouseout="document.getElementById('sk_2').style.display = 'none';document.getElementById('sk_2_def_<?php echo $p;?>').style.backgroundColor = '#e4e4e4';">                   
                  <?php
                  while ($row2 = $query2->fetch_assoc()) {   
                  echo "<a style='color:black' href='?p=".$row2['jmeno_kategorie']."'><div style='background:#dbdbdb;padding:15px;font-size:14px;font-weight:300'>".$row2['nazev']."";  
  echo "</div></a> <hr style='margin:0;border-top:1px solid #d7cdcd'> ";                      
                  }       
                  if($row['vaha']==3){               
                  echo "<a href='?p=Chovatelske-pomucky/' style='color:black'><div style='background:#dbdbdb ;padding:15px;font-size:14px;font-weight:500'><i class='fa fa-angle-right pull-right'></i>Zobrazit všechny kategorie</div></a>";}
                  echo "</div>"; 
                  echo "</div><hr style='margin:0;border-top:1px solid #d7cdcd'> "; 
                  $p=$p+51;  
                 }   
                 
              ?>
            </div> 
            
  					<div class="left-sidebar x290 x490">                              
						<div class="alternate-slider panel-group category-products" id="accordian"><!--category-productsr-->   
   					  	<div class="panel panel-default">
  								<div class="panel-heading" style="background: linear-gradient(to top,#a00,#cd0101 57%);border-radius: 0;cursor:pointer" data-toggle="collapse" data-target=".navbar-collapse2">
  									<h4 class="panel-title" style="margin: 10px 0 10px 0">
  										<a  style="font-size:15px;background: transparent;color:white;" > 
  											<i class="fa fa-angle-down pull-right"></i>
  										  Vyberte kategorii
  										</a> 
  									</h4> 
                    
  								</div>  
            <div class="navbar-collapse2" style="height:0;overflow:hidden;z-index:1000;border:1px solid #ccc">
            
            <a href="?p=Veterinarni-vybaveni" style="color:black"><div  id="sk_1_def" style="background:#f3f3f3;padding:15px;font-size:14px;font-weight:300"><i class="fa fa-angle-right pull-right"></i>Veterinární vybavení</div></a>
            
        <hr style="margin:0;border-top:1px solid #d7cdcd">    
            
            <a href="?p=Chovatelske-vybaveni" style="color:black"><div  id="sk_2_def" style="background:#f3f3f3;padding:15px;font-size:14px;font-weight:300"><i class="fa fa-angle-right pull-right"></i>Chovatelské vybavení</div></a>
        
            </div>				  
  				  			</div>                 
						</div><!--/category-products--> 
						<!--
						<div class="shipping text-center"> 
							<img src="images/home/shipping.jpg" alt="" />
						</div> 
					  --> 
            </div>             
           