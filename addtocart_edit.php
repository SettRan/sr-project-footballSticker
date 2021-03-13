<?php
  session_start();

  $id_num = $_GET['funi_id'];
  $edit_number = $_GET['edit_num'];
// actually no need to give index. just a index value(var):[$id_num].
  $_SESSION['cart'][$id_num] = $edit_number;

  header("location:view_cat.php");
?>