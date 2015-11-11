<?php
$conn = mysqli_connect('localhost', 'root' ,'',"winestore");
if($conn->connect_error){
	die("Connection failed!" .$conn->connect_error);
}
else{

   $sql = "SELECT * FROM `products` WHERE `SKU ID` = 3";
   $result = $conn->query($sql);
   if($result->num_rows > 0){//sucess
     $row = $result->fetch_assoc();
      $authno=$row['REGION'];
      echo $authno;
   }
 }
    ?>
