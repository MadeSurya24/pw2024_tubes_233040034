<?php 
session_start();

// if(!isset($_SESSION['login'])) {
//   header("Location: login.php");
//   exit;
// }

require 'assets/functions.php';
$produk = array();
$ambil = koneksi()->query("SELECT * FROM produk JOIN kategori
                           ON produk.id_kategori=kategori.id_kategori LIMIT 12 ");

while($pecah = $ambil->fetch_assoc())
{
  $produk[]=$pecah;
}

if(isset($_POST['cari'])){
  $produk = cari($_POST['keyword']);
}

?>


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
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<!-- Main.js -->
    <script src="main.js"></script>


  </head>


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
          <li><a href="logout.php">Logout</a></li>

        </ul>
      </div>

    </div>
  </div>
</div>

<!-- Navbar -->
<?php include 'include/navbar.php'; ?>
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






<!-- Produk -->
<?php 
include 'include/produk.php';
?>
<!-- Akhir Produk -->

<!-- Contact Us -->
<?php 
include 'include/kontak.php';
?>

<!-- Footer -->

<?php 
include 'include/footer.php';
?>

<!-- Akhir Footer -->

<script src="js/script2.js"></script>
<script scr="js/main.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  </body>
</html>