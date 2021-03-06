<?php
  session_start();
  include('includes\connection.php');
  if (isset($_SESSION['custId'])) {
    header('Location:customer/');
  }
  if (isset($_SESSION['adminId'])) {
    header('Location:admin/');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>PIZZERIA HOME</title>
    <style>
      body, html {
        height: 100%;
      }
      .bg {
      /* The image used */
      background-image: url("https://i.ibb.co/TgDc2zr/Index-bg4.jpg");

      /* Full height */
      height: 100%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      }
      .custpos {
        position: absolute;
        bottom: 15%;
        right: 13%;
      }
      .adminpos {
        position: absolute;
        bottom: 7%;
        right: 13.7%;
      }
  </style>
  
</head>
<body>
    <div class="bg">
        <div class="custpos">
            <a href="customer/login.php" class="btn btn-primary">Customer</a>
        </div>
        <div class="adminpos">
            <a href="admin/login.php" class="btn btn-warning">Admin</a>
        </div>
    </div>
</body></html>