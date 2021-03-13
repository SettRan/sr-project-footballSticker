<?php
        include("conf/db_conf.php");
        include("conf/admin_auth.php");
        
        if(isset($_POST['comform_pw'])){
          $pw = $_POST['comform_pw'];

        $query = mysqli_query($conn,"SELECT admin_login.password FROM admin_login");
        $row = mysqli_fetch_assoc($query);

        if($row['password'] == $pw){
          header("location:login_create.php");
        }else{
          header("location:login_edit.php");
        }
        }///if have not a $_POST var, will work continue below code.
        

        
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
            <a class="fw-bolder fs-6" href="order_list.php">
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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3 mb-5">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">ထိန်းချုပ်သူမျက်နှာပြင်</h1><img src="../img/svg/bullseye.svg" alt="" class="me-3">
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


      <!-- configuration login interface -->
      <p class="fs-3 fw-bolder border-top border-bottom pb-3 mt-5 pt-3 bg-dark ps-5 text-warning border-5 ">အက်မင် ပြင်ဆင်သတ်မှတ်ချက်... <span class=" float-end pt-0"></span></p>
      <form class="shadow-lg p-3 mb-5 bg-white rounded container mt-5 border border-dark border-5 mb-4" action="login_edit.php" method="post" >
        <!-- <div class="mb-3" onsubmit="return adminPw(this)">
          <label for="exampleFormControlInput1" class="form-label fw-bolder text-dark">Name</label>
          <input name="admin_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="အက်မင်နာမည်ရိုက်ထည့်ပါ">
        </div>
          <label for="exampleFormControlInput1" class="form-label fw-bolder text-dark">Password</label>
          <input name="admin_pw" type="password" class="form-control" id="exampleFormControlInput1" placeholder="စကားဝှတ်ထည့်ရန်"> -->
          <label for="exampleFormControlInput1" class="form-label fw-bolder text-danger">Currently password</label>
          <input id="pw" name="comform_pw" type="password" class="form-control" id="exampleFormControlInput1" placeholder="လက်ရှိ စကားဝှတ်ကိုအတည်ပြုရန်"><br>

          <input type="submit" class="btn btn-outline-primary fw-bolder" value="အတည်ပြုမယ်">
    </form> 
    
    </main>
  </div>
</div>

    
  <?php 
    $query = mysqli_query($conn,"SELECT admin_login.password FROM admin_login");
    $row = mysqli_fetch_assoc($query);
  ?>



    
  <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>
