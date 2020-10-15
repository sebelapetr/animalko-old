<?php 
$connect = mysqli_connect("localhost", "root", "Petrsebel10", "animalko2"); 
$request = mysqli_real_escape_string($connect, $_POST["query"]);
$query = "SELECT jmeno_produkt, obrazek FROM produkt WHERE jmeno_produkt LIKE '%".$request."%'";

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["jmeno_produkt"]."<img href='".$row['obrazek']."'/>";
 }
 echo json_encode($data);
}

?>