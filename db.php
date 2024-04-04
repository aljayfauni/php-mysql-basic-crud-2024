<?php
$dbhost ="localhost";
$dbusername="root";
$dbpass="";
$dbname="phpcrud_2024";

$conn = new mysqli($dbhost,$dbusername,$dbpass,$dbname);

if($conn->connect_error){
   die("failed connected!".$conn->connect_errors);
}
else{
  echo "<script>console.log('connected!');</script>";
}
?>