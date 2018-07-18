<?php 

include "connection.php";

   @$manufacturer = $_POST["manufacturer"];
   @$manufact_cmp = $_POST["manu_cmpny"];
   @$model = $_POST["model"];
    // echo $_POST["manufacZturer"];exit();
if(isset($_POST["manufacturer"])){
   @$query =  "INSERT INTO `car_manufacture`( `manufacture_cmpny`) VALUES ('$manufacturer')";
   if(mysqli_query($con, $query))
   {
   	echo "Succeessfully Added Manufacturer";
   }else{echo "no";}

}elseif (isset($_POST["manu_cmpny"]) && isset($_POST["model"])){

	@$query1 =  "INSERT INTO `car_model`( manufac_cmp, model) VALUES ('$manufact_cmp','$model')";
	if(mysqli_query($con, $query1))
   {
   	echo "Succeessfully Added Manufacturer";
   }else{echo "no";}
 }



?>