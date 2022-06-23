<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Remedic - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/our.css">

  </head>

  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
<!-- logo wmg -->
      <a class="navbar-brand" href="index.html"><i class="flaticon-pharmacy"></i><img style="width: 6em;" src="logo/logo.png"></a>
<!-- logo wmg end -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
<!-- nav bar homes -->
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="equipments.php" class="nav-link">Equipments</a></li>
          <li class="nav-item"><a href="brands.php" class="nav-link">Brands</a></li>
          <li class="nav-item"><a href="faculties.php" class="nav-link">our clients </a></li>
          <li class="nav-item"><a href="technecians.php" class="nav-link"><span>our technecians</span></a></li>
       <?php
          if (isset($_SESSION['username']) ) {
          echo '
            <li class="nav-item"><a href="admin_pages/logged-page.php" class="nav-link">control page</a></li>      
         

            <form style="color: aqua; " action="admin_pages/php/login/logout-inc.php" method="POST"  class="subscribe-form">
                    <div style="background-color: #6de1bb!important;" class="form-group d-flex">
                     
                        <input style="background-color: #167ce9!important; border-radius: 5em;" name="submit" type="submit" value="Logout" class="submit px-3">
                    </div>    
            </form>  
            '
          ;}
          else{
            echo '
          <form style="color: aqua; " action="admin_pages/php/login/login-inc.php" method="POST"  class="subscribe-form">
                    <div style="background-color: #6de1bb!important;" class="form-group d-flex">
                      <input name="username" style="border-color: antiqewhite!important; background-color: #64d7bf!important;" type="text" class="form-control" placeholder="UserName">
                    <input name="password" style="border-color: #6de1bb!important; background-color: #6de1bb!important;" type="password" class="form-control" placeholder="Password">
                        <input style="background-color: #167ce9!important; border-radius: 5em;" name="submit" type="submit" value="Login..." class="submit px-3">
                    </div>    
            </form>  
            ';
          }?>   
<!--  -->   
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->