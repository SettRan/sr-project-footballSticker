<?php
  $hostname = "localhost";
  $password = "";
  $user = "root";
  $database_name = "sr_football_sticker";

// the parameter in mysqli_connect() will have to be consequence.
  $conn = mysqli_connect($hostname,$user,$password);
  mysqli_select_db($conn,$database_name);
?>