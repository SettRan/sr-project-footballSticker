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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img class="d-none d-md-inline-block float-end" src="../img/logo10.png" alt="" width="100px"></a>
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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-0">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">အမျိုးအစားများကိုစီမံပါ</h1><img src="../img/svg/tags-fill.svg" alt="" class="me-3">
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
      <!-- category add and update -->
    <div class="cate_css container mt-5 mb-5">
      <div class="row">
        <div class="col-12 border-bottom ">
        <p class=" fs-5 text-white fw-bolder">အမျိုးအစား အသစ်ဖန်တီးရန်<!--<img class="" src="../img/svg/inbox.svg" alt="" srcset="" class=" ps-3" width="40px">--> </p> 
        </div>
        
        <form action="cate_add.php" method="post" enctype="multipart/form-data">
          <div class="input-group input-group-lg mt-5">
            <span class=" fw-bold input-group-text" id="inputGroup-sizing-lg ">အသစ်ထည့်မယ်</span>
            <input name="category_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
          </div>
              <div class="mb-3 mt-3">
                <label for="formFile" class="text-light form-label ">.....ဓါတ်ပုံရွေးချယ်ရန်.....</label>
                <input name="cate_pic" class="form-control" type="file" id="formFile">
              </div>
          <div class="d-grid gap-2 mt-5 mb-5 cate_btn">
            <button onclick="myFunction"  class="btn btn-danger fw-bolder" type="submit">ပေါင်းထည့်မယ် </button>
            <!-- if button tag, will action to form -->
            <a href="category_new.php?number=2&#cate_inner_link"  href="" class="btn btn-primary fw-bolder" >စာရင်းများ ကြည့်မယ်</a>
          </div>
        </form>
        

      </div>
    </div>

    <!-- showing category list -->
        <table class=" table-striped table table-dark table-hover cate_list_overview" style="font-size: 20px;">
                  <!-- id = "cate_inner_link" is for going down to list -->
        <div class="container"  id="cate_inner_link">
          <div class="row">
            <div class="col-9">
            <p class="mt-5 fs-2 border-bottom">စာရင်းများ</p>
            </div>

            <!-- <div class="col-6 mt-5">
              <form action="">
              <div class="form-check d-inline-block">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  နာမည်စဉ်လိုက်
                </label>
              </div>  
              <div class="form-check d-inline-block">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  ရက်အလိုက်
                </label>
              </div>
              <input type="submit" value="ပြောင်းရန်">
              </form>
            </div> -->
            
            <div class="col-3 mt-5">
              <!-- Example split danger button -->
              <div class="btn-group cate_limit">
                <button type="button" class="btn btn-danger">စာရင်းပြသမှု</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="category_new.php?number=0" > စာရင်း မပြရန်</a></li>
                  <!-- <li><a class="dropdown-item" href="category_new.php?number=5" > စာရင်း ၅ ခု</a></li>
                  <li><a class="dropdown-item" href="category_new.php?number=10"> စာရင်း ၁၀ ခု</a></li>
                  <li><a class="dropdown-item" href="category_new.php?number=15">စာရင်း ၁၅ ခု</a></li> -->
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="category_new.php?number=100&#cate_inner_link">စာရင်းအားလုံး</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
          <tr class=" table-success">
            <th class=" col-9">အမျိုးအစား အမည်</th>
            <th class="ps-3 col-3">လုပ်ဆောင်ချက်များ</th>
          </tr>
          <!-- retrieving data form db -->
          <?php
          //စာရင်းအရေအတွက်ပြခြင်းကို ကိုကိုယ်တိုင်သတ်မှတ်ရန်
              $number = $_GET['number'];
              
              include('conf/db_conf.php');
              $categories_list = mysqli_query($conn,"SELECT * FROM categories
              ORDER BY modified_date DESC
              LIMIT $number");
              while ($row = mysqli_fetch_assoc($categories_list)) :
            ?>
          <tr>
            <td>
              <?php echo $row['category_name'] ?>
            </td>
            <td>
              <!-- for delete -->
              <a title="Delete" class="ms-5 text-white fw-bolder" href="cate_del.php?del_id=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash2" viewBox="0 0 16 16">
              <path d="M14 3a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2zM3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5c-1.954 0-3.69-.311-4.785-.793z"/>
              </svg></a> 
              <!-- for edit -->
              <a name="" title="Edit" class="ms-5 text-white fw-bolder" href="cate_edit.php?edit_id=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
              <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/></svg></a>
            </td>
          </tr>
          <?php
            endwhile;
          ?>
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


  <script>
    function myFunction(){
      alert("lkkjk");
    }
  </script>

<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>


  <!-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script> -->
  </body>
</html>
