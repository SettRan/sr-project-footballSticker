<?php
        session_start();
        include("conf/db_conf.php");
        
        if(isset($_POST['admin_name']) and $_POST['admin_pw']){
          $name = $_POST['admin_name'];
          $pw = $_POST['admin_pw'];

          $query = mysqli_query($conn,"SELECT * FROM admin_login");
          $row = mysqli_fetch_assoc($query);

          if($name == $row['name'] and $pw == $row['password']){
            $_SESSION['admin'] = true;
            header("location:dashbord.php");
          }
        }
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


  <p class="fs-3 fw-bolder border-top border-bottom pb-3 mt-5 pt-3 bg-success ps-5 text-warning border-5 ">Admin Manager<span class=" float-end pt-0 d-none d-md-inline-block"><a href="../index.php" class=" text-decoration-none"><img src="../img/logo10.png" alt="" width="100px"></a></span></p>
  <form class="shadow-lg p-3 mb-5 bg-white rounded container mt-5 border border-primary border-5" action="admin_home.php" method="post">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label fw-bolder text-success">Name</label>
      <input name="admin_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
    </div>
    <label for="exampleFormControlInput1" class="form-label fw-bolder text-success">password</label>
      <input name="admin_pw" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password"><br>
      <a href="../index.php" class = "btn btn-success fw-bolder">&laquo; Back</a>
      <input type="submit" class="btn btn-outline-danger fw-bolder" value="OK">
    </form>
  </div>


<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
