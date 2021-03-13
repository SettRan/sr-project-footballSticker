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
    <link rel="icon" href="../img/logo008.png" type="image/x-icon">
    <!-- Bootstrap core CSS -->
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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img class=" d-none d-md-inline-block float-end" src="../img/logo10.png" alt="" width="100px"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
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
              ထုတ်ကုန်များ စီမံရန်
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

    <main class="col-md-9 mb-5 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">ထုတ်ကုန်များ စီမံရန်</h1><img src="../img/svg/diagram-3-fill.svg" alt="" class="me-3">
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

      <!-- to mention detail all of by covered. -->
      <!-- <div class="containter">
        <div class="row">
          <div class=" border-bottom col-sm-11 col-md-3 bg-warning pt-4 pb-4 ms-4 rounded-3 mt-sm-3">
            <p class=" fs-lg-4 fw-bolder ">အမျိုးအစားများ</p>
          </div>
          <div class=" border-bottom col-sm-11 col-md-3 bg-warning pt-4 pb-4 ms-4 rounded-3  mt-sm-3">
            <p class=" fs-lg-4 fw-bolder ">ထုတ်ကုန်များ</p>
          </div>
          <div class=" border-bottom col-sm-11 col-md-3 bg-warning pt-4 pb-4 ms-4 rounded-3  mt-sm-3">
            <p class=" fs-lg-4 fw-bolder ">အမှာစာများ</p>
          </div>
        </div>
      </div> -->

      <!-- funiture input box -->
      <div class="container funi_product">
        <form action="funi_add.php" enctype="multipart/form-data" method="post">
        <p class="fs-5 fw-bolder">ကုန်ပစ္စည်းသစ်များ ဖန်တီးလိုက်ပါ</p><hr>
        
          <div class="row mt-5">
            <div class="col-sm-12 col-md-6">
              <div class="input-group mb-3">
                <span class="bg-primary text-white fw-bold input-group-text" id="inputGroup-sizing-default">အမည်</span>
                <input name="funi_item" type="text" class=" form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="input-group mb-3">
                <span class="bg-danger fw-bold text-white input-group-text" id="inputGroup-sizing-default">စျေးနှုန်း</span>
                <input name="funi_pz" type="text" class=" form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                <!-- <span class="bg-danger fw-bold text-white input-group-text" id="inputGroup-sizing-default">
                  <select name="" id="">
                  <option value="" selected disabled> ယူနစ်</option>
                    <option value=""> MMK</option>
                    <option value=""> US</option>
                    <option value=""> EU</option>
                  </select>
                </span> -->
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-sm-12 col-md-6">
              <div class="input-group mb-3">
                <div class="bg-primary text-white fw-bold btn btn-outline-secondary " >အမျိုးအစား</div>
                <!-- <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul> -->
                <!-- <input type="text" class="form-control" aria-label="Text input with dropdown button"> -->
                <select class="form-control" name="cate_name" id="">
                  <optgroup>
                  <option class="fw-boder fs-5 border-bottom" value="" selected disabled>ရွေးချယ်ရန် ... </option>
                  <?php
                  include("conf/db_conf.php");
                  $cate_name_list = mysqli_query($conn,"SELECT * FROM categories");
                  while ($row = mysqli_fetch_assoc($cate_name_list)) :
                  ?>
                  <option value="<?php echo $row['id'] ?>"><?php echo $row["category_name"] ?></option>
                  <?php endwhile; ?>
                  </optgroup>
                </select>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="input-group mb-3">
                <span class="input-group-text bg-danger text-white fw-bold" id="inputGroup-sizing-default ">ထုတ်လုပ်သူ</span>
                <input name="funi_country" type="text" class=" form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
          </div>

          <div class=" row mt-3 fun_add_button bg-success">
            <div class="bg-danger col-md-6 col-sm-12 fun_add_button">
              <div class="mb-3">
                <label for="formFile" class="form-label ">.....ဓါတ်ပုံရွေးချယ်ရန်.....</label>
                <input name="pic" class="form-control" type="file" id="formFile">
              </div>
            </div>
            <div class="col-md-6 col-sm-12 fun_add_button_qty bg-primary pb-3">
                <label for="qty">အရေအတွက်</label>
                <input name="funi_num" id="qty" class="form-control" type="text" placeholder="ကုန်စည် အရေအတွက် ရိုက်ထည့်ပါ" aria-label="default input example">
            </div>
          </div>

          <div class="form-floating mt-5 mb-5">
            <center>
            <p class="mt-5 fs-6 fw-bolder">
              ထုတ်ကုန်ဆိုင်ရာ အချက်အလက်များ  <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
                <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              </svg>
            </p><hr>
            </center>
            <textarea name="funi_comment" class="text-dark form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">မှတ်ချက်များရေးသွင်းရန်</label>
          </div>

          <div class="form_margin d-grid gap-2 mt-5 mb-2">
            <button class="fs-6 fw-bolder btn btn-success" type="submit"> ဖြည့်သွင်းမယ်</button>
            <!-- use <a> instead of <button> -->
            <a href="funi_show.php?number=1000" class="fs-6 fw-bolder btn btn-outline-success">
            ဖြည့်သွင်းထားသည်များကိုကြည့်မယ်
            </a>
          </div>

        </form>
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


  <!-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script> -->
  </body>
</html>
