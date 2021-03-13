<?php
  include("conf/db_conf.php");
  include("conf/admin_auth.php");

  $number = $_GET['number'];

  if(isset($_GET['selection_cate'])) {
    $selec_cate = $_GET['selection_cate'];
    $funiture_table = mysqli_query($conn,"SELECT funiture_products.*, categories.category_name FROM funiture_products LEFT JOIN categories ON funiture_products.category_id = categories.id WHERE funiture_products.category_id = $selec_cate ORDER BY funiture_products.modified_date DESC 
    LIMIT $number");
  }else{
    $funiture_table = mysqli_query($conn,"SELECT funiture_products.*, categories.category_name FROM funiture_products LEFT JOIN categories ON funiture_products.category_id = categories.id ORDER BY funiture_products.modified_date DESC LIMIT $number");
  };

  $cate_result = mysqli_query($conn,"SELECT * FROM categories");
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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img 
  class=" d-none d-md-inline-block float-end" src="../img/logo10.png" alt="" width="100px"></a>
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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">ကုန်စည်များ</h1><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cast" viewBox="0 0 16 16">
          <path d="M7.646 9.354l-3.792 3.792a.5.5 0 0 0 .353.854h7.586a.5.5 0 0 0 .354-.854L8.354 9.354a.5.5 0 0 0-.708 0z"/>
          <path d="M11.414 11H14.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-13a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h3.086l-1 1H1.5A1.5 1.5 0 0 1 0 10.5v-7A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v7a1.5 1.5 0 0 1-1.5 1.5h-2.086l-1-1z"/>
        </svg>
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
  <div class="container mt-5">
      <div class="row">
        <div class="col-md-4 col-sm-6 mt-2">
          <table class="table table-dark table-striped">
              <!-- Example split danger button -->
            <div class="btn-group cate_limit">
                <button type="button" class="btn btn-primary">စာရင်းပြသမှု</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <!-- <li><a class="dropdown-item" href="category_new.php?number=0" > စာရင်း မပြရန်</a></li> -->
                  <li><a class="dropdown-item" href="funi_show.php?number=3" >စာရင်း ၃ မျိုးထိ</a></li>
                  <li><a class="dropdown-item" href="funi_show.php?number=6"> စာရင်း ၆ မျိုးထိ</a></li>
                  <li><a class="dropdown-item" href="funi_show.php?number=9"> စာရင်း ၉ မျိုးထိ</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="funi_show.php?number=1000">စာရင်းအားလုံး</a></li>
                </ul>
              </div>
            </table>
        </div>

        <!-- <div class="col-4">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div> -->

        
            <?php
              // include("conf/db_conf.php");
              // $sql = mysqli_query($conn,"SELECT * FROM categories");
              // $row = mysqli_fetch_assoc($sql);
            ?>
        <div class="col-md-4 col-sm-6 d-inline-block">
              <!-- ရွေးချယ်ရာတွင် categories ရဲ့ id ကိုထုတ်ထား။ categories ရဲ့ id ကိုနဲ့ funiture_products တို့ id ကို ညှိကာ funiture_products records များကိုယူ။  -->
              <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="fw-bolder fs-6">အမျိုးအစားလိုက်ကြည့်ရအောင်</p>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="funi_show.php?number=<?php echo $number ?>">.........အားလုံးကြည့်မယ်.........</a></li>
                  <?php while ($row = mysqli_fetch_assoc($cate_result)) : ?>
                  <li><a class="dropdown-item" href="funi_show.php?selection_cate=<?php echo $row['id'] ?>&number=<?php echo $number ?>"><?php echo $row['category_name'] ?></a></li>
                  <?php endwhile; ?>
                </ul>
              </div>
        </div>
        <div class="col-md-4 col-sm-12 d-inline-block mt-2">
        <button type="button" class="btn fw-bolder btn-success border"><a class=" text-decoration-none text-light"href="funiture_new.php">အသစ်ထည့်မယ် </a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16"><path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
        </svg></button>
        </div>
      </div>
      </div><hr>
      
      <!-- for funiture list -->
      <div class="album py-5 bg-light mt-1">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <!-- categories and funiture_products table နှစ်ခုလုံးကိုယူထား -->
              <?php
              // $number = $_GET['number'];
              // include("conf/db_conf.php");

              // if(isset($_GET['selection_cate'])) {
              //   $selec_cate = $_GET['selection_cate'];
              //   $funiture_table = mysqli_query($conn,"SELECT funiture_products.*, categories.category_name FROM funiture_products LEFT JOIN categories ON funiture_products.category_id = categories.id WHERE funiture_products.category_id = $selec_cate ORDER BY funiture_products.modified_date DESC ");
              // }else{
              //   $funiture_table = mysqli_query($conn,"SELECT funiture_products.*, categories.category_name FROM funiture_products LEFT JOIN categories ON funiture_products.category_id = categories.id ORDER BY funiture_products.modified_date DESC ");
              // };

              while ($row = mysqli_fetch_assoc($funiture_table)):
              ?>
            <div class="col">
              
              <div class="card shadow-sm">
                <center class="mb-0 mt-3">
                <img src="funiture_pic/<?php echo $row['picture'] ?>" class="img-thumbnail" alt="..." width="220px" height="100px">
                </center>
                
                <div class="card-body mt-0">
                <p class="fs-6 pt-3 text-center pb-3 text-white fw-bolder bg-dark rounded-3 ps-3"><?php echo $row['funi_item']?></p>
                  <p class="card-text">
                    <small class="d-block "><span class="fw-bolder text-primary">အမျိုးအစား --- </span><span class="fw-bolder text-danger"><?php echo $row['category_name'] ?></span>  
                    <span style="margin-left: 5px;" class="border bg-success p-1 text-white fw-bolder">
                    <?php echo $row['numbers'] ?>
                    </span>
                    </small>
                  <p class="border p-3 rounded-3"><?php echo $row['comment'] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="funi_view.php?id=<?php echo $row['funi_id'] ?>" type="button" class="btn btn-sm btn-outline-primary fw-bolder">တည်းဖြတ်မည်</a>
                      <a href="funi_delete.php?id=<?php echo $row['funi_id'] ?>" type="button" class="btn btn-sm btn-outline-danger fw-bolder">ဖျက်ပစ်မယ်</a>
                    </div>
                    <small class=" fw-bolder text-success">
                      <?php echo $row['price'] ?> <small class="text-dark">(MMK)</small>
                    </small>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>

            <!-- <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between      align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small> -->
                  <!-- </div>
                </div>
              </div>
            </div> -->
            

            <!-- <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div> -->
            
          </div>
        </div>
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
