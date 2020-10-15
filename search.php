<?php 
include 'connect.php';
$timkiem= isset($_GET['timkiem']) ? $_GET['timkiem'] : 0;
$search=mysqli_query($conn, "select *from product");
header ('location: product.php');

?>

