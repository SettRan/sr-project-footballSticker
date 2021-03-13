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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3 mb-5">
      
            <?php
                include("conf/db_conf.php");
                $sql = mysqli_query($conn,"SELECT * FROM orders");
                $record = mysqli_num_rows($sql);
              ?>

      <!-- order list -->
      <center class="fs-2 fw-bolder border-bottom pb-2 mt-5 border-secondary justify-content-center border-top bg-warning border-3 text-dark">အမှာစာများ</center>
      <table id="orderlist" class="pt-5 table table-dark table-striped border shadow-lg p-3 mb-5 bg-white rounded">
        <tr class="fw-bolder fs-5 table-success border">
          <th>မှာယူသည့်ပစ္စည်း</th>
          <th>မှာယူသူ</th>
          <th colspan="2">လုပ်ဆောင်ချက်
          <span class="ms-4 border-2 bg-primary text-white ps-1 pe-1 border-dark border border-white">
            <?php
            echo $record;
            ?>
          </span>
          </th>
        </tr>
        <?php 
          // for furniture name
          $funi_name = mysqli_query($conn,"SELECT order_items.*, funiture_products.funi_item FROM order_items LEFT JOIN funiture_products ON order_items.furniture_id=funiture_products.funi_id");
            // for order name
          $orders = mysqli_query($conn,"SELECT * FROM orders");

          while($row_fs = mysqli_fetch_assoc($funi_name)) :
          while($row_sec = mysqli_fetch_assoc($orders)) :
        ?>
        <tr>
          <?php if($row_sec['status']) :?>
            <td class="text-decoration-line-through text-danger"><a title="ကြည့်ရန်" href="order_detail.php?id=<?php echo $row_sec['order_id'] ?>" class=" text-decoration-none text-warning "><?php echo $row_fs['funi_item']?></a></td>
            <td class="text-decoration-line-through text-danger"><a title="ကြည့်ရန်" href="order_detail.php?id=<?php echo $row_sec['order_id'] ?>" class=" text-warning text-decoration-none"><?php echo $row_sec['name']?></a></td>
          <?php else : ?>
            
            <td><a title="ကြည့်ရန်" href="order_detail.php?id=<?php echo $row_sec['order_id'] ?>" class=" text-decoration-none text-white fw-bolder"><?php echo $row_fs['funi_item']?></a></td>
            <td><a title="ကြည့်ရန်" href="order_detail.php?id=<?php echo $row_sec['order_id'] ?>" class=" text-decoration-none text-white fw-bolder" ><?php echo $row_sec['name']?></a></td>
          <?php endif;?>

          <?php if($row_sec['status']) : ?>
            <td class="">
            <a  class="text-white fw-bolder" title="မှန်သားခြင်းကိုဖယ်ရှား" href="order_status.php?order_id=<?php echo 
            $row_sec['order_id']?>&status=0 ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-white ms-3 bi bi-check2-all" viewBox="0 0 16 16">
              <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7l-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
              <path d="M5.354 7.146l.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
            </svg>
            </a>

            </td>
          <?php else : ?>
            <td>
            <a class="text-white fw-bolder" title="ပို့ပြီးအဖြစ်သတ်မှတ်" href="order_status.php?order_id=<?php echo 
            $row_sec['order_id']?>&status=1 ">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="ms-4 bi bi-truck" viewBox="0 0 16 16">
            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>
            </a>
            </td>
          <?php endif ?>
            
            <td>
            <a class="text-white fw-bolder" title="ဖျက်မယ်" href="order_del.php?order_id=<?php echo $row_sec['order_id']?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ms-5 bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
          </svg>
            </a>
            </td>
        </tr>
        <?php endwhile; ?>
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
