<?php 
include 'db.php';

$userId = $_GET['id'];

$sql = "delete from contact where id ='$userId'";
$result = $conn->query($sql);

header("location:index.php");



?>