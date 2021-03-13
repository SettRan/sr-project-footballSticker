<?php
  include("conf/db_conf.php");

  $name = $_POST['admin_name'];
  $pw = $_POST['admin_pw'];

  mysqli_query($conn,"UPDATE admin_login SET name='$name', password='$pw', modified_date=now() WHERE id=1");

  header("location:dashbord.php");
?>