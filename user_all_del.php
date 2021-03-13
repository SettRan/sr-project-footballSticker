<?php
  include("admin/conf/db_conf.php");

  $id = $_GET['id'];

  mysqli_query($conn,"DELETE FROM user_info WHERE user_id=$id");
  header("location:user_interface.php?id=$id");

?>