<?php
  include("conf/db_conf.php");

  $id = $_GET['id'];
  mysqli_query($conn,"DELETE FROM user_info WHERE order_id = $id");
  mysqli_query($conn,"DELETE FROM user_log WHERE id = $id");
  header("location:user_list.php");
?>