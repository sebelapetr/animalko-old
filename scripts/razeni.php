<?php
     $razeni=0;
     if (strlen($value['info'])>100){
      $razeni=$razeni+50;   
     }
     else{
      if (strlen($value['info'])>50){
        $razeni=$razeni+30; 
      }
      else{
        if (strlen($value['info'])>10){
          $razeni=$razeni+10;  
        }
        else{
          if (strlen($value['info'])>0){
            $razeni=$razeni+2; 
          }
          else{ 
          }         
        }         
      } 
     } 
     if (!$value['foto'] == NULL){
      $razeni=$razeni+50;
     } 
     $razeni = $razeni+$value['zakoupen'];
?>