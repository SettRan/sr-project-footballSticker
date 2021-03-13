<?php 
include("conf/admin_auth.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors"> -->
    <!-- <meta name="generator" content="Hugo 0.79.0"> -->
    <title>SR Project Dashboard</title>
    <link rel="stylesheet" href="css/cate_style.css">

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/"> -->
    <link rel="icon" href="../img/logo008.png" type="image/x-icon" >
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <style>
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
      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img class=" float-end d-none d-md-inline-block" src="../img/logo10.png" alt="" width="100px"></a>
  <button class=" navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <ul class="navbar-nav mt-5 px-3">
    <li class="nav-item text-nowrap">
    <a class="text-white fw-bolder fs-5 nav-link" href="logout.php">ထွက်မယ်</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column cate_dash">
        <!-- covered By logo so cannt see it. -->
          <li class="nav-item text-dark">
            <a class="active fs-6 fw-bolder" aria-current="page" href="dashbord.php">
            <img src="../img/svg/border-style.svg" alt="" class="me-3">
              <span data-feather="home"></span>
              ထိန်းချုပ်သူမျက်နှာပြင်
            </a>
          </li><hr>
          <li class="nav-item mt-2">
            <a class=" fw-bolder fs-6 " href="category_new.php?number=2">
              <span data-feather="file"></span>
              <img src="../img/svg/tags-fill.svg" alt="" class="me-3">
              အမျိုးအစားများ 
            </a>
          </li>
          <li class="nav-item mt-4">
            <a class="fw-bolder fs-6" href="funi_show.php?number=1000">
              <span data-feather="shopping-cart"></span>
              <img src="../img/svg/life-preserver.svg" alt="" class="me-3">
              ကုန်ပစ္စည်းများ 
            </a>
          </li>
          <li class="nav-item mt-4">
            <a class="fw-bolder fs-6" href="">
              <span data-feather="users"></span>
              <img src="../img/svg/basket-fill.svg" alt="" class="me-3">
              အမှာစာများ 
            </a>
          </li>
          <li class="nav-item mt-4">
            <a class="fw-bolder fs-6 btn btn-outline-dark border-3 text-danger fw-bold bg-white" href="user_list.php">
              Users 
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li> -->
        </ul>

        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul> -->
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">အမှာစာ</h1><img src="../img/svg/bullseye.svg" alt="" class="me-3">
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div> -->
      </div>

      
      <?php 
          // for furniture name
          include("conf/db_conf.php");
          $id = $_GET['id'];
          $funi_name = mysqli_query($conn,"SELECT order_items.*, funiture_products.funi_item FROM order_items LEFT JOIN funiture_products ON order_items.furniture_id=funiture_products.funi_id WHERE order_items.orders_id=$id");
            // for order name
          $orders = mysqli_query($conn,"SELECT * FROM orders WHERE order_id=$id");

          while($row_sec = mysqli_fetch_assoc($orders)) :
      ?>
      
      <div class="container shadow-lg p-3 mb-5 bg-dark rounded">
        <div class="row">
          <div class="col-12 text-white">
            <p class=" fs-4 fw-bolder border-bottom pb-2">အမှာစာပို့သူ အချက်အလက်များ</p>
          </div>
          <div class="col-6 text-white">
            <p class=" text-warning fw-bolder fs-5">အမည် 
              <span class="text-info"><?php echo $row_sec['name'] ?></span></p>
            <p class=" text-warning fw-bolder fs-5">နေရပ်လိပ်စာ <span class="text-info"><?php echo $row_sec['address'] ?></span></p>
            <p class=" text-warning fw-bolder fs-5">အီးမေး <span class="text-info"><?php echo $row_sec['email'] ?></p>
            <p class=" text-warning fw-bolder fs-5">ဆက်သွယ်ရန်ဖုန်းနံပါတ် <span class="text-info"><?php echo $row_sec['phone'] ?></span></p>
                  <?php endwhile; ?>
          </div>
          <div class="col-6 ">
          <!-- for looping items -->
          <?php while($row_fs = mysqli_fetch_assoc($funi_name)) : ?>
            <div class="border-start ps-4 border-5 border-danger">
            <p class="text-warning fw-bolder fs-5">မှာယူသည့်ပစ္စည်း - <span class="text-info"><?php echo $row_fs['funi_item'] ?></span></p>
            <p class="text-warning fw-bolder fs-5">အရေအတွက် <span class="text-info">(<?php echo $row_fs['qty'] ?>)</span></p>
            </div>
                  <?php endwhile; ?>
          </div>
          <a href="order_list.php" class="mt-5 btn btn-outline-light fw-bolder" type="button">ထွက်မယ်</a>
        </div>
      </div>
      
      
      <div class="d-grid gap-2">
      
</div>
    </main>
  </div>
</div>

    
      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <!-- <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              
            </tr>
            -->



<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

  </body>
</html>
