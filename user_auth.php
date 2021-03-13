<?php
  include("admin/conf/db_conf.php");

  $name = $_POST["name"];
  $pw = $_POST["password"];

  $user = mysqli_query($conn,"SELECT * FROM user_log WHERE password=$pw");
  $row = mysqli_fetch_assoc($user);
      $_SESSION['user'] = true;
      header("location:index.php");
?>