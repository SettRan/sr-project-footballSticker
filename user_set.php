<?php
  include("admin/conf/db_conf.php");

  $id = $_GET['id'];

  $result = mysqli_query($conn,"SELECT * FROM user_log WHERE id=$id");
  $row = mysqli_fetch_assoc($result);
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
  <form action="user_change.php" method="post">
    <img class="mb-4" src="img/logo006.png" alt="" width="100" height="57">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <h4 class="mb-3 fw-normal fw-bolder border-bottom pb-1"> Changing Password</h4>
    <p class="text-primary fw-bolder">Current Password<span class="text-dark fw-bolder"> ~ <?php echo $row['password'] ?> </span></p>
    <label for="inputPassword" class="visually-hidden">New one</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="New one" required>
    <div class="checkbox mb-3">
      <a href="user_interface.php?id=<?php echo $id ?>" class="text-decoration-none text-danger fw-bolder">Back </a>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" onClick="alert('You password will be change')">Change</button>
    <p class="mt-5 mb-3 text-muted fw-bolder">&copy; 2021</p>
  </form>
</main>


<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>
