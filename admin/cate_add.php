<?php
  include("conf/db_conf.php");

  $category_name = $_POST['category_name'];
  $pic = $_FILES['cate_pic']['name'];
  $tmp = $_FILES['cate_pic']['tmp_name'];

  if($pic){
    move_uploaded_file($tmp,"cate_pic/$pic");
  }

  $sql = "INSERT INTO categories (category_name, cate_pic, created_date, modified_date) VALUES ('$category_name', '$pic', now(), now())";
  
  mysqli_query($conn,$sql);

  header('location:category_new.php?number=1000');
?>

