<?php
  session_start();
  include("admin/conf/db_conf.php");

  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $phone = $_POST['ph'];

  mysqli_query($conn,"INSERT INTO orders (name, address, phone, email, created_date, modified_date, status) VALUES ('$name', '$address', '$phone', '$email', now(), now(), 0)");

  $order_id = mysqli_insert_id($conn);
  foreach($_SESSION['cart'] as $funi_id => $qty){
    mysqli_query($conn,"INSERT INTO order_items (orders_id,furniture_id,qty) VALUES ('$order_id','$funi_id','$qty')");
  };

  if(isset($_SESSION['user'])){
    foreach($_SESSION['user'] as $id){
      mysqli_query($conn,"INSERT INTO user_info (user_id,order_id,created_date,modified_date) VALUES ('$id','$order_id',now(),now())");
    }
  };

  unset($_SESSION['cart']);

  // echo "<srcipt>window.alert('အမှာစာပေးပို့မှုအောင်မြင်ပါသည်။')</script>";
  // header("location:index.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>SR Project</title>
    <link rel="icon" href="img/logo008.png" type="image/x-icon">
    <link rel="stylesheet" href="show.css">

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/"> -->

    

    <!-- Bootstrap core CSS -->
<link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
    </style> -->

    
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>
<body>
  <!-- <script>
    alert("အမှာစာပေးပို့မှုအောင်မြင်ပါသည်။");
  </script>
  <a href="index.php">home</a> -->

  <div class="container align-content-center justify-content-center border border-danger border-5 mt-5 bg-dark">
    <div class="row">
      <div class="col border border-danger border-5 justify-content-center ps-5">
        <p class="text-info fs-3 fw-bolder border-bottom"> You have sent the order message.</p><hr>
        <p class="text-warning fs-4 fw-bolder">Thanks you so much... We hope it for!</p>

        <?php
          if(isset($_SESSION['user'])):
            foreach($_SESSION['user'] as $id){
              $user_id = $id;
            }
        ?>
        <a href="user_interface.php?id=<?php echo $user_id ?>" class="btn btn-outline-light fs-5 fw-bolder mb-4">Get It</a>
        <?php endif ?>
        
      </div>
    </div>
  </div>


  <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>