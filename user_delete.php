<?php
  include("admin/conf/db_conf.php");

  $user = $_GET['user'];
  $id = $_GET['id'];
  mysqli_query($conn,"DELETE FROM user_info WHERE order_id = $id");
  header("location:user_interface.php?id=$user");
?>