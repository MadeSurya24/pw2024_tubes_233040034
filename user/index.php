<?php
session_start();

require '../assets/functions.php';

$id_user = $_SESSION['user'];
$ambil = koneksi()->query("SELECT * FROM user WHERE id_user='$id_user'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../css/index.css">

</head>
<body>
<!-- Navbar -->
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg mt-2 sticky-top" style="background:rgb(220, 0, 0)">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../img/logo&slide/logo.png" alt="RCB" width="200" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <form action="" method="POST" class="d-flex mx-auto"  role="search">
      <input class="form-control me-2 keyword" type="text" name="keyword" placeholder="Search" autocomplete="off" autofocus aria-label="Search">
      <button class="btn btn-outline-light tombol-cari" type="submit">
      <i class='bx bx-search' style="color:palevioletred;"></i>
      </button>
    </form>
      <ul class="navbar-nav ms-auto column-gap-3">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="../index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="../produk.php">PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="../keranjang.php"><i class='bx bx-cart fs-3'></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php" id="btn-user">
            <i class='bx bxs-user' style="font-size: 30px;"></i>
          </a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->


<section class="page-produk">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="../index.php" class="link-secondary" style="text-decoration: none;">Home</a></li>
            <li>Profile</li>
        </ul>

        <div class="row">

            <div class="col-md-3">

                <div class="card">
                    <div class="card-header">
                        <div class="img">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-9">
                
            </div>

        </div>

    </div>
</section>

<!-- Footer -->
<div id="footer" style="width:100%;">
    <div class="container-footer" >
        <div class="row">

            <div class="col-md-4">
                <h4><strong>Quick Links</strong></h4>
                <ul class="menu">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../produk.php">Produk</a></li>
                    <li><a href="../keranjang.php">Keranjang</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="index.php">Akun Saya</a></li>
                </ul>
                <hr>
                <h4><strong>Pelanggan</strong></h4>
                <ul>
                    <li><a href="../login.php">Login</a></li>
                    <li><a href="../registrasi.php">Register</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4><strong>PRODUCT CATEGORY</strong></h4>
                <ul>
                    <li><a href="#">Rim and Accessories</a></li>
                    <li><a href="#">Suspensions</a></li>
                    <li><a href="#">Brakes System</a></li>
                    <li><a href="#">Foot controls</a></li>
                    <li><a href="#">Hand controls</a></li>
                    <li><a href="#">Drive chain system</a></li>
                    <li><a href="#">Body Part</a></li>
                    <li><a href="#">Apparel</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4><strong>ABOUT US</strong></h4>
                <p>
                    <strong>RCB</strong>
                    <br>Jl. Setiabudhi
                    <br>Kecamatan Sukasari
                    <br>Kota Bandung
                    <br>083117085497
                    <br>made@gmail.com
                    <br>
                    <strong>Made Surya</strong>
                </p>
                <hr>
                <h4><strong>Follow Us</strong></h4>
                <p class="sosmed">
                    <a href="https://web.facebook.com/racingboy.global"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.tiktok.com/@rcb.global"><i class='bx bxl-tiktok' ></i></a>
                    <a href="https://www.instagram.com/rcb.global"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://www.youtube.com/c/RacingBoyTVOfficial"><i class='bx bxl-youtube' ></i></a>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="copyright" style="width:100%; color:white;">
    <div class="container-copyright">
        <div class="row">
            <div class="col">
                <p class="text-light bg-dark" >COPYRIGHT 2024 &copy; MadeSurya</p>
            </div>

        </div>
    </div>
</div>
<!-- Akhir Footer -->
    
</body>
</html>