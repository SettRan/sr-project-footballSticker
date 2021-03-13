<?php
  include("admin/conf/db_conf.php");
  
  
  $id = $_POST['id'];
  $pw = $_POST['password'];

  mysqli_query($conn,"UPDATE user_log SET password='$pw' WHERE id=$id");

  
  header("location:user_interface.php?id=$id");
?>