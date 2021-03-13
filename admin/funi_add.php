<?php
  include("conf/db_conf.php");

  $name = $_POST['funi_item'];
  $pz = $_POST['funi_pz'];
  $cate = $_POST['cate_name'];
  $country = $_POST['funi_country'];
  $num = $_POST['funi_num'];
  $comment = $_POST['funi_comment'];
  $pic = $_FILES["pic"]["name"];
  $tmp = $_FILES["pic"]["tmp_name"];

  if($pic){
    move_uploaded_file($tmp,"funiture_pic/$pic");
  }
  
  $qty = "INSERT INTO funiture_products (category_id, funi_item, price, maker, numbers, picture, comment, created_date, modified_date) VALUES ('$cate', '$name', '$pz', '$country', '$num', '$pic', '$comment', now(), now())";

  mysqli_query($conn,$qty);

  header('location:funi_show.php?number=1000');
?>