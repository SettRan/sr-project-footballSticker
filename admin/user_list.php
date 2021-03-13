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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
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

      <center class="mb-4 mt-2 fs-3 fw-bolder"><span class="text-danger"> User </span> အချက်အလက်များ</center>
      <!-- to mention detail all of covered. -->
        <table id="orderlist" class="pt-5 table table-dark table-striped border shadow-lg p-3 mb-5 bg-white rounded">

        <tr class="fw-bolder fs-5 table-success border">
          <th>User Name</th>
          <th>User Id</th>
          <th>Sign up Date</th>
          <th></th>
        </tr>
        <?php
        include("conf/db_conf.php");
        $result = mysqli_query($conn,"SELECT * FROM user_log");
        while($row = mysqli_fetch_assoc($result)) :
        ?>
        <tr>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['created_date'] ?></td>
          <td>
            <a href="user_detail.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars-fill" viewBox="0 0 16 16">
            <path d="M4.5 1A1.5 1.5 0 0 0 3 2.5V3h4v-.5A1.5 1.5 0 0 0 5.5 1h-1zM7 4v1h2V4h4v.882a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V13H9v-1.5a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5V13H1V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V4h4zM1 14v.5A1.5 1.5 0 0 0 2.5 16h3A1.5 1.5 0 0 0 7 14.5V14H1zm8 0v.5a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5V14H9zm4-11H9v-.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5V3z"/>
            
            </svg></a>
              <a href="user_delete.php?id=<?php echo $row['id']?>" class="btn btn-outline-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg></a>
          </td>
        </tr>
        <?php endwhile; ?>
        </table>

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
