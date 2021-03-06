<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['email'])){
    header('Location: signup.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: signup.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="design.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">RedWings</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="topnav-right">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
              </li>
      <li class="nav-item">
                <a class="nav-link" href="about1.php">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Donors
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="why1.php">Why Donate Blood</a>
                  <a class="dropdown-item" href="donreg1.php">Donor Registration</a>
                  
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blood Banks
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="regist1.php">Registered BloodBanks</a>
                  <a class="dropdown-item" href="newbb1.php">New Registration</a>
                  <a class="dropdown-item" href="find.php">Required BloodBanks</a>
                </div>
              </li>
     
     
        <li class="nav-item">
                    <a class="nav-link" href="search1.php">Search Blood</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
          <li class="nav-item">
                    <a class="nav-link"><form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form></a>
                  </li>
                  
      </ul>
    </div>
      </div>
      </div>
      </nav>
      
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>
                It's not just Blood</h5>
      <p>
        IT'S LIQUID LIFE<br>Donate today!!<br>Save a Life!!</p>
      </div>
      </div>
      <div class="carousel-item">
            <img class="d-block w-100" src="img2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>
                You???re somebody???s type</h5>
      <p>
     Donate Blood,Save Lives!!</p>
      </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img4.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>
           Donate your blood for a reason</h5>
  <p>
    Let the reason be Life.Share your Invaluable gift with others.</p>
  </div>
  </div>
      <div class="carousel-item">
            <img class="d-block w-100" src="img5.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>
                Every drop counts</h5>
      <p>
      One Pint of Blood can save upto THREE lives.</p>
      </div>
      </div>
      
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
         
</body>
</html>
