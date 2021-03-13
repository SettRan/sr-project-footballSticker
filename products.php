<?php
  include("admin/conf/db_conf.php");
  session_start();

  $cart_list = 0;
  if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $qty){
      $cart_list += $qty;
    }
  }

  $number = $_GET['number'];

  if(isset($_GET['selection_cate'])) {
    $selec_cate = $_GET['selection_cate'];
    $funiture_table = mysqli_query($conn,"SELECT funiture_products.*, categories.category_name FROM funiture_products LEFT JOIN categories ON funiture_products.category_id = categories.id WHERE funiture_products.category_id = $selec_cate ORDER BY funiture_products.modified_date DESC 
    LIMIT $number
    ");
  }else{
    $funiture_table = mysqli_query($conn,"SELECT funiture_products.*, categories.category_name FROM funiture_products LEFT JOIN categories ON funiture_products.category_id = categories.id ORDER BY funiture_products.modified_date DESC
    LIMIT $number");
  };

  $cate_result = mysqli_query($conn,"SELECT * FROM categories");
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
    <a class=" text-decoration-none fw-bolder fs-5 py-2 d-none d-md-inline-block pt-5" href="products.php?number=<?php echo $number ?>">Market</a>
    <!-- <a class="py-2 d-none d-md-inline-block" href="#">Features</a> -->
    <!-- <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a> -->
    <a class=" text-decoration-none fw-bolder fs-5 py-2 d-none d-md-inline-block pt-5" href="project.php">Project</a>
    <a title="Cart" class="ms-5 ps-5 py-2 d-none d-md-inline-block pt-4"  href="view_cat.php" ><span class="p3 ps-1 pe-1 rounded-pill bg-danger text-light"><?php echo $cart_list ?></span><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
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


<main>

<div class="container mt-5">
  <div class="row">
    <div class="col-5">
              <div class="btn-group cate_limit">
                <button type="button" class=" fw-bolder btn btn-primary">Show</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <!-- <li><a class="dropdown-item" href="category_new.php?number=0" > စာရင်း မပြရန်</a></li> -->
                  <li><a class="dropdown-item" href="products.php?number=3" >3-items</a></li>
                  <li><a class="dropdown-item" href="products.php?number=6"> 6-items</a></li>
                  <li><a class="dropdown-item" href="products.php?number=9"> 9-items</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="products.php?number=1000">All</a></li>
                </ul>
              </div>
    </div>

    <div class="col-5">
            <!-- relative dropdown
            <input type="text" id="search" list="states" placeholder="ပြသရန် ကုန်ပစ္စည်းအရေအတွက်">
            <datalist id="states">
              <option value='၃ မျိုး'>
            </datalist> -->
            <div class="dropdown">
            <a class=" btn btn-warning fw-bolder dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
        
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a href="products.php?number=<?php echo $number ?>" class="bg-dark text-white fw-bolder dropdown-item border-bottom" type="button">
                    Veiw All
                  </a></li>
                <?php
                  while($row = mysqli_fetch_assoc($cate_result)) :
                ?>
                <li><a href="products.php?selection_cate=<?php echo $row['id'] ?>&number=<?php echo $number ?>" class="bg-success border-bottom text-white dropdown-item" type="button">
                  <?php echo $row['category_name'] ?>
                </a></li>
              <?php endwhile; ?>
            </ul>
      </div>
    </div>

        <div class="col-2">
              <small class="text-secondary fw-bolder d-none d-md-inline-block">Qty </small>
              <span class="p-1 border border-3 border-warning fw-bolder text-white bg-success rounded-circle">
              <?php
              // ယူခွင့်ရှိတဲ့ row အရေအတွက်ကိုပဲပြ
              $qty = mysqli_num_rows($funiture_table);
              echo $qty; 
              ?>
              </span>
        </div>
  </div>
</div>


  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
          <?php 
            while($funi_row = mysqli_fetch_assoc($funiture_table)) :
          ?>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card shadow-sm shadow-lg p-3 mb-5 bg-white rounded">
              <a title="အသေးစိတ်ကြည့်မယ်" href="detail_for_product.php?funi_id=<?php echo $funi_row['funi_id'] ?>&number=<?php echo $number?>" class="text-decoration-none">
              <img src="admin/funiture_pic/<?php echo $funi_row['picture'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Sr Project</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"><span class="text-dark"><?php echo $funi_row['funi_item'] ?></span><span class="ms-5 fs-6 fw-bold">By</span><div class="mt-2 text-secondary"><?php echo $funi_row['maker'] ?></div></text></img>
              </a>

            <div class="card-body">
              <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              <div class="mt-3 d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <!-- for cart session -->
                    <a href="addtocard.php?id=<?php echo $funi_row['funi_id'] ?>" type="button" class="btn btn-sm btn-outline-dark fw-bolder">Add to Card <svg class="ms-1 fw-bolder" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                      <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                      <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg></a>
                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                  </div>
                  <small class="text-success fw-bolder"><?php echo $funi_row['price'] ?> <span class="text-dark fw-bolder">(kyats)</span>
                  </small>
                </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
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


<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

      
  </body>
</html>
