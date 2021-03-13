<?php
  include("conf/db_conf.php");

  $id = $_POST['edit_id'];
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

    $qty = "UPDATE funiture_products SET category_id='$cate',funi_item='$name', price='$pz', maker='$country', numbers='$num', picture='$pic', comment='$comment', modified_date=now() WHERE funi_id=$id";
  }else{
    $qty = "UPDATE funiture_products SET category_id='$cate',  funi_item='$name', price='$pz', maker='$country', numbers='$num', comment='$comment', modified_date=now() WHERE funi_id=$id";
  }
  
  mysqli_query($conn,$qty);
  header('location:funi_show.php?number=1000');
?>