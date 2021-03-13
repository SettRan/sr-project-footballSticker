<?php
  include("admin/conf/db_conf.php");

  
  $id = $_GET['id'];
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
    
<header class="site-header sticky-top py-1">
  <nav class="nav_header container d-flex flex-column flex-md-row justify-content-between" id="up">
    <a class=" mt-2 py-2" href="admin/admin_home.php" aria-label="Product">
      <img src="img/logo10.png" width="100" height="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></img>
    </a>
    <a class=" text-decoration-none fw-bolder fs-5 d-none d-md-inline-block pt-5" href="index.php">Borwsing</a>
    <a class=" text-decoration-none fw-bolder fs-5 py-2 d-none d-md-inline-block pt-5" href="products.php?number=1000">Market</a>
    <!-- <a class="py-2 d-none d-md-inline-block" href="#">Features</a> -->
    <!-- <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a> -->
    <a class=" text-decoration-none fw-bolder fs-5 py-2 d-none d-md-inline-block pt-5" href="project.php">Project</a>
    
    <a title="Login" class=" py-2 d-none d-md-inline-block pt-4" href="user_logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
      <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
    </svg><small> Log out</small></a>
  </nav>

  <div class = "d-md-none mb-2 justify-content-between">
      <a title="Login" class="d-block me-5 ms-2 py-2 d-sm-inline-block d-md-none pt-4" href="user_logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
      <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
    </svg><small> Log out</small></a>
      <a class="btn btn-sm btn-outline-light fs-6 ms-2" href="index.php">Browsing</a>
      <a class="btn btn-sm btn-outline-light fs-6" href="products.php?number=1000">Market</a>
      <!-- <a class="py-2 d-none d-md-inline-block" href="#">Features</a> -->
      <!-- <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a> -->
      <a class="btn btn-sm btn-outline-light fs-6" href="project.php">Project</a>
    </div>
</header>

<body class="bg-dark">
        <?php
          include("admin/conf/db_conf.php");

          $user = mysqli_query($conn,"SELECT * FROM user_log WHERE id=$id");
          $row = mysqli_fetch_assoc($user);
        ?>
  <div class="container-fluid">
    <div class="row text-white">
      <div class="col bg-success p-4 fs-3 fw-bolder">
        <span class="ps-4 text-warning">User Name - </span><span class=""><?php echo $row['name'] ?></span>
      </div>
    </div>
  </div>
  <hr class="border-bottom border-5">
          <div class="container-fluid mt-3 bg-secondary" >
                <a href="user_set.php?id=<?php echo $id ?>" class="d-inline-block btn btn-info fw-bolder ms-md-2 btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench" viewBox="0 0 16 16">
                <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019l.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z"/>
                </svg> Security</a>
                <a onClick="alert('You can\'t get back the data.Will be delete forever')" href="user_all_del.php?id=<?php echo $id ?>" class="btn-sm d-inline-block btn btn-warning fw-bolder ms-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-x" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg> Delete All</a>
                <a href="index.php" class="btn-sm d-inline-block btn btn-light fw-bolder ms-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                </svg> Continue</a>
          </div><hr class="border-bottom border-5">

  <div class="container text-white">
    <div class="row">
      <div class="card shadow-sm shadow-lg bg-dark border-5 mt-3 rounded-3 fs-6 p-3">

          <?php
            $user_info = mysqli_query($conn,"SELECT * FROM user_info WHERE user_id=$id ORDER BY created_date DESC");
            while($row_info = mysqli_fetch_assoc($user_info)) :
            $orders_id = $row_info['order_id'];
            
            $item_result = mysqli_query($conn,"SELECT * FROM order_items WHERE orders_id=$orders_id");
            while($item_row = mysqli_fetch_assoc($item_result)) :
              $item_funi = $item_row['orders_id'];

            $funi_name = mysqli_query($conn,"SELECT order_items.*, funiture_products.funi_item FROM order_items LEFT JOIN funiture_products ON order_items.furniture_id=funiture_products.funi_id WHERE order_items.orders_id=$item_funi");
          ?>
        <div class="mt-4 fw-bolder" >
          
          <?php $funi_row = mysqli_fetch_assoc($funi_name) ?>
          <span class="text-warning">Order Items - </span><span> <?php echo $funi_row['funi_item'] ?></span><br>

          
          <span class="text-warning">Qty - </span><span> <?php echo $item_row['qty'] ?></span>
          <?php endwhile; ?>
        </div><br>
        
          <?php
            $order = mysqli_query($conn,"SELECT * FROM orders WHERE order_id = $orders_id");
            $order_row = mysqli_fetch_assoc($order);
          ?><span class="d-inline-block fs-5" style="color: pink;">( Ordered Detail )</span>
          <span class=" float-end text-warning">Date - <span class="border-bottom pb-1 border-info"> <?php echo $row_info['created_date'] ?></span></span>
          
          <span class="text-warning d-block">email - <span class="text-white"><?php echo $order_row['email'] ?></span></span>
          <span class="text-warning" >Name - </span><span><?php echo $order_row['name'] ?></span><br>
          <span class="text-warning">Phone - </span><span><?php echo $order_row['phone'] ?></span><br>
          <span class="text-warning">Address - </span><span><?php echo $order_row['address'] ?></span>
          <a onClick="alert('Will be delete forever')" href="user_delete.php?id=<?php echo $row_info['order_id'] ?>&user=<?php echo $id ?>" class="text-decoration-none text-danger fw-bolder float-end pb-3"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
        </svg></a>
        <hr class="border-bottom border-5">
        <?php endwhile; ?>
      </div>
    </div>
  </div>

<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

      
  </body>
</html>
