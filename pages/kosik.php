    <?php     
    $page = (isset($_GET['p'])?trim($_GET['p']):'null'); // predani aktivni stranky   
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"],
                     'item_photo'          =>     $_POST["photo"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Zboží již bylo přidáno do košíku.")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"],
                'item_photo'          =>     $_POST["photo"]   
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }   
 }  

 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);   
                }  
           }  
      }  
      if($_GET["action"] == "add")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     $_SESSION["shopping_cart"][$keys]['item_quantity']++;   
                }  
           }  
      }  
      if($_GET["action"] == "remove")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     $_SESSION["shopping_cart"][$keys]['item_quantity']--;  
                }  
           }  
      }              
 }  
 if(!empty($_SESSION["shopping_cart"])){
 $pocet_polozek = count($_SESSION["shopping_cart"]); 
 }          
 else{
 $pocet_polozek = 0;
 $total = 0;
 }
 ?>    