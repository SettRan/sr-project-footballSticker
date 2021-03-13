<?php 
  include("conf/db_conf.php");

  $order_id = $_GET['order_id'];
  $status = $_GET['status'];

  mysqli_query($conn,"UPDATE orders SET status=$status, modified_date=now() WHERE order_id=$order_id");

  header("location:order_list.php");
?>