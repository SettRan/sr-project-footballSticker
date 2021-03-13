<?php
  include("conf/db_conf.php");

  $id = $_GET['id'];

  mysqli_query($conn,"DELETE FROM funiture_products WHERE funi_id=$id");
  header("location:funi_show.php?number=1000");
?>