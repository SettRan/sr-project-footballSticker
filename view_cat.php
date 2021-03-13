<?php
  include("admin/conf/db_conf.php");
  session_start();
//redirect to another link
  if(!isset($_SESSION['cart'])){
    header("location:view_cat_empty.php");
    exit();
  };

  $cart_list = 0;
  if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $qty){
      $cart_list += $qty;
    }
  }

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
    <a class=" text-decoration-none fw-bolder fs-5 d-none d-md-inline-block pt-5" href="index.php">Browsing</a>
    <a class=" text-decoration-none fw-bolder fs-5 py-2 d-none d-md-inline-block pt-5" href="products.php?number=10000">Market</a>
    <!-- <a class="py-2 d-none d-md-inline-block" href="#">Features</a> -->
    <!-- <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a> -->
    <a class=" text-decoration-none fw-bolder fs-5 py-2 d-none d-md-inline-block pt-5" href="project.php">Project</a>
    <a title="Cart" class="ms-5 ps-5 py-2 d-none d-md-inline-block pt-4" href="#"><span class="p3 ps-1 pe-1 rounded-pill bg-danger text-light"><?php echo $cart_list ?></span><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
    </svg></a>
    <?php
      if(isset($_SESSION['user'])):
        foreach($_SESSION['user'] as $id){
          $user_id = $id;
        }
    ?>
    <a title="Login" class=" py-2 d-none d-md-inline-block pt-4" href="user_interface.php?id=<?php echo $user_id ?>">
      My Dashbord
    </a>
    <?php else: ?>
    <a title="Login" class=" py-2 d-none d-md-inline-block pt-4" href="user_signup.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
      <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
    </svg></a>
    <?php endif; ?>
  </nav>

  <div class = "d-md-none mb-2 justify-content-between">
      <a class="btn btn-sm btn-outline-light fs-6 ms-2" href="index.php">Browsing</a>
      <a class="btn btn-sm btn-outline-light fs-6" href="products.php?number=1000">Market</a>
      <!-- <a class="py-2 d-none d-md-inline-block" href="#">Features</a> -->
      <!-- <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a> -->
      <a class="btn btn-sm btn-outline-light fs-6" href="project.php">Project</a>
      <a title="Cart" href="view_cat.php"  class="ms-3" ><span class="p3 ps-1 pe-1 rounded-pill bg-info text-dark"><?php echo $cart_list ?></span><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
      </svg></a>

      <?php
        if(isset($_SESSION['user'])):
          foreach($_SESSION['user'] as $id){
            $user_id = $id;
          }
      ?>
      <a title="Login" class="ms-2 d-block py-2 pt-4" href="user_interface.php?id=<?php echo $user_id ?>">
        My Dashbord
      </a>
      <?php else: ?>
      <a title="Login" class="ms-2 py-2 pt-4" href="user_signup.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
      </svg></a>
      <?php endif; ?>
    </div>
</header>


<main class="mb-5" > 
  <!-- <?php 
  echo print_r($_SESSION, TRUE);
  ?> -->
  <p class="fs-3 fw-bolder border-bottom pb-2 ps-3">Card list of items</p>
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded">
      <table class="table table-striped">
        <tr>
          <th>Category</th>
          <th>Name</th>
          <th>Qty</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
        <?php
          $total = 0;
          foreach($_SESSION['cart'] as $id => $qty) :
            $sql = mysqli_query($conn,"SELECT * FROM funiture_products WHERE funi_id=$id");
            $sql_result = mysqli_fetch_assoc($sql);
            $total += $sql_result['price'] * $qty;
        ?>
        <tr>
          <td><img class="img-fluid w-50" src="admin/funiture_pic/<?php echo $sql_result['picture'] ?>" alt=""></td>
          <td><?php echo $sql_result['funi_item'] ?></td>
          <td><?php echo $qty ?></td>
          <td><?php echo $sql_result['price'] * $qty ?></td>
          <td>
            <a title="ကြည့်မယ်" class="fw-bolder btn d-inline-block btn-outline-success" href="detail_viewcart.php?funi_id=<?php echo $sql_result['funi_id'] ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>
            </a>
            <a title="ဖျက်မယ်" href="cart_delete.php?id=<?php echo $sql_result['funi_id'] ?>" class="fw-bolder btn-outline-danger btn d-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2" viewBox="0 0 16 16">
              <path d="M14 3a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2zM3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5c-1.954 0-3.69-.311-4.785-.793z"/>
            </svg>
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
        <tr>
        <th colspan="3">Total</th>
        <th colspan="2" align="center"><?php echo $total ?></th>
        </tr>
      </table>
      </div>

      <div class="col-md-3 col-sm-12">

      <div class="shadow-lg p-3 mb-5 bg-white rounded">
          <p class="border-bottom fs-6 text-primary text-danger fw-bolder">SR <sub class="text-dark fw-bolder">Project </sub> </p>
          
          <a href="index.php" class="btn mt-3 fw-bolder btn-outline-primary ">Continue <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" ms-3 bi bi-arrow-right-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
          </svg></a>
          <small><a href="cart_delete.php" class="btn mt-3 fw-bolder btn-outline-danger">Delete All <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" ms-3 bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg></a></small>
      </div>
    </div>
  </div>
  <!-- order -->
  <div class="d-grid gap-2">
  <a href="order_form.php" class="btn btn-warning fw-bolder pt-2 pb-2 fs-5" type="button">Order Message</a>
  </div>
</main>

<footer class="container-fluid bg-dark text-white py-5">
  <div class="row">
    <div class="col-12 col-md">
      <a href="">
      <img src="img/logo10.png" width="100" height="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></img>
      </a>
      <span class="text-info fw-bold">All right reserved.</span><small class="d-block mb-3 text-warning fw-bold">&copy; 2021</small>
    </div>
    <div class="col-6 col-md fw-bolder">
    <a href="index.php" class=" text-decoration-none fs-4 fw-bolder text-white">Feature</a><br><br>
      <?php
      include("admin/conf/db_conf.php");
      $category = mysqli_query($conn,"SELECT * FROM categories 
      ORDER BY categories.modified_date DESC");
      while($row = mysqli_fetch_assoc($category)):
      ?>
    <a href="shopping.php?id=<?php echo $row['id'] ?>" class="text-white "><?php echo $row['category_name'] ?></a><br>
      <?php endwhile; ?>
    </div>
    <div class="col-6 col-md fw-bolder">
      <a href="products.php?number=10000" class=" text-decoration-none fs-4 fw-bolder text-white">Market</a>
    </div>
    <div class="col-6 col-md fw-bolder">
      <a href="project.php" class=" text-decoration-none fs-4 fw-bolder text-white">Project</a>
    </div>
    <div class="col-6 col-md d-md-none d-sm-inline-block fw-bolder">
    <a href="#" title="အပေါ်သို့">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-up-square-fill text-white" viewBox="0 0 16 16">
      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 9h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5A.5.5 0 0 0 4 11z"/>
    </svg>
    </a>
    </div>
  </div>
</footer>


<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

      
  </body>
</html>
