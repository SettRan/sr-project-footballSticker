<?php
  include("conf/db_conf.php");

  $cate_id = $_GET['del_id'];

  mysqli_query($conn,"DELETE FROM categories WHERE id=$cate_id");
// i insert query string after url location so that to make a decision how many categoly item  would be appear in the category list.
  header("location:category_new.php?number=2&#cate_inner_link");
?>
