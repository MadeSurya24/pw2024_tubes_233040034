<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RCB</title>

<!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="css/index.css">

<!-- Owl  carousel CSS-->
    <link rel="stylesheet" href="assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl.theme.default.min.css">

<!-- Owl carousel js -->
    <script src="assets/owl.carousel.min.js"></script>

<!-- Main.js -->
    <script src="main.js"></script>


  </head>

  <>

<!-- Top bar -->
<div id="top-bar">
  <div class="container">
    <div class="row">

      <div class="col-md-6 top-left">
        <p>Wellcome</p>
      </div>

      <div class="col-md-6 top-right column-gap-3">
        <ul class="top-menu">
          <li><a href="registrasi.php">Registrasi</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="profile.php">Profile</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>

<!-- Navbar -->
  <nav class="navbar navbar-expand-lg mt-2" style="background:rgb(220, 0, 0)">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo&slide/logo.png" alt="RCB" width="250" height="50">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
    <form class="d-flex mx-auto"  role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">
      <i class='bx bx-search' style="color:palevioletred;"></i>
      </button>
    </form>
      <ul class="navbar-nav ms-auto column-gap-3">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#"><i class='bx bx-cart fs-3'></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

<!-- Slide -->
<div class="container-slide">
  <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/logo&slide/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/logo&slide/slide2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/logo&slide/slide3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/logo&slide/slide4.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- Akhir Slide -->

<!-- Kategori -->
<div class="container-kategori mt-5">
  <div class="kategori" style="background-color:rgb(220, 0, 0); padding:5px 10px;">
    <h5 class="text-center" style="margin-top:5px;">KATEGORI</h5>
  </div>
</div>


<!-- Produk -->
<div class="container-kategori mt-5">
  <div class="kategori" style="background-color:rgb(220, 0, 0); padding:5px 10px;">
    <h5 class="text-center" style="margin-top:5px;">PRODUK</h5>
  </div>
</div>

<div class="container-produk mt-4">
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/rim/cr55 carbon.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">CR55 CARBON RIM</h6>
              <p class="card-text">FROM $2,199.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/rim/sp500.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">SP500</h6>
              <p class="card-text">FROM $198.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/rim/SP522.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">SP522</h6>
              <p class="card-text">FROM $289.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/suspensions/VD-black.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">VD SERIES</h6>
              <p class="card-text">FROM $433.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/suspensions/S2LINE.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">S2 LINE</h6>
              <p class="card-text">FROM $139.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/suspensions/VR.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">VR SERIES</h6>
              <p class="card-text">FROM $619.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/brakes/S3-Series-red.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">S3 SERIES</h6>
              <p class="card-text">FROM $101.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/brakes/r1-red.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">R1 SERIES</h6>
              <p class="card-text">FROM $99.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/brakes/S1-Masterbrakepump-red.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">S1 MASTER BREAK</h6>
              <p class="card-text">FROM $98.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/footcontrols/RS1SINGLE.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">RS 1 SINGLE</h6>
              <p class="card-text">FROM $199.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/footcontrols/S1FULLSET.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">S1 FULL SET</h6>
              <p class="card-text">FROM $199.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/footcontrols/S2V2SINGLE.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">S2 V2 SINGLE</h6>
              <p class="card-text">FROM $99.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- Akhir Produk -->


<!-- Footer -->

<?php 
include 'footer.php';
?>

<!-- Akhir Footer -->
  </body>
</html>