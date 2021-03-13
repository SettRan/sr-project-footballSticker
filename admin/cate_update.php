<?php
  include("conf/db_conf.php");

  $cate_id = $_POST['cate_id'];
  $cate_name = $_POST['category_name'];
  $picture = $_FILES['picture']['name'];
  $tmp = $_FILES['picture']['tmp_name'];

  if($picture){
    move_uploaded_file($tmp,"cate_pic/$picture");

    mysqli_query($conn,"UPDATE categories SET category_name = '$cate_name', modified_date = now(),cate_pic = '$picture' WHERE id=$cate_id ");
  }else{
    mysqli_query($conn,"UPDATE categories SET category_name = '$cate_name', modified_date = now() WHERE id=$cate_id ");
  }

  header("location:category_new.php?number=2&#cate_inner_link");
?>