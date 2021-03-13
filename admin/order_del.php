<?php 
include("conf/db_conf.php");

$order_id = $_GET['order_id'];

mysqli_query($conn,"DELETE FROM orders WHERE order_id=$order_id");
mysqli_query($conn,"DELETE FROM order_items WHERE orders_id=$order_id"); 

header("location:order_list.php");
?>