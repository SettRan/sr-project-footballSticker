<?php
  session_start();
  include("admin/conf/db_conf.php");


  unset($_SESSION['user']);
  header("location:index.php");
?>