<?php
  include("admin/conf/db_conf.php");
  session_start();
  if(isset($_POST['name']) and isset($_POST['password'])){
    $name = $_POST['name'];
    $pw = $_POST['password'];

  $user = mysqli_query($conn,"SELECT * FROM user_log ");
  while($row = mysqli_fetch_assoc($user)){
    $row_name = $row['name'];
    $row_pw = $row['password'];
    $row_id = $row['id'];
    if($name == $row_name and $pw == $row_pw){
      //can't use like: $_SESSION['user']['$row_id]. don't kown why!!
      $_SESSION['user'] = [$row_id];
      header("location:index.php");
    }else{
      header("location:user_login.php?error=true");
    }
  }
};
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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">

<?php if($_GET['corrected']) : ?>
  <div class="alert alert-info">Success! Pelease Log In</div>
<?php endif ?>

<?php if($_GET['error']) : ?>
  <div class="alert alert-warning">Something went wrong.</div>
<?php endif ?>

  <form method="post">
    <img class="mb-4" src="img/logo006.png" alt="" width="100" height="57">
    <h1 class="h3 mb-3 fw-normal fw-bolder border-bottom p-2">Log in</h1>
    <label for="inputEmail" class="visually-hidden">Login</label>
    <input name="name" type="name" id="inputEmail" class="form-control" placeholder="User Name" required autofocus>
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input name="password" type="password" id="inputPassword" class="form-control mt-3" placeholder="Password" required>
    <div class="checkbox mb-3">
      <a href="user_signup.php" class="text-success fw-bolder text-decoration-none">If you have any account<span class="fw-bolder text-dark"> Sign up</span></a>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021 <span class="text-danger fw-bolder fs-3">SR </span><span class="fw-bolder text-dark">project</span></p>
  </form>
</main>


<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>

