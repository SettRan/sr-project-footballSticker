<?php
include("admin/conf/db_conf.php");

$name = $_POST['name'];
$pw = $_POST['password'];

mysqli_query($conn,"INSERT INTO user_log (name,password,created_date,modified_date) VALUES ('$name','$pw',now(),now() )");

header("location:user_login.php?corrected=true");
?>