<?php
  session_start();
  
  
  // $link = $_GET['link']; //to go back to where site come from
  
  $id = $_GET['id'];
  
  $_SESSION['cart'][$id]++;  
  // id က index ကိုရွေးတာမဟုတ်။ index ထဲက တန်ဖိုးကိုသတ်မှတ်။
  //$_SESSION['cart] = Array("index" => num, "index" => num);
  //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
  
  
  header("location:view_cat.php"); //no mark to go back where coming site from. **
?>