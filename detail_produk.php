<?php 

require 'assets/functions.php';

$id_produk = $_GET['idproduk'];

$ambil = koneksi()->query("SELECT * FROM produk
                          WHERE id_produk='$id_produk' ");
$detailproduk = $ambil->fetch_assoc();

$foto_produk = array();
$ambil = koneksi()->query("SELECT * FROM foto_produk WHERE id_produk='$id_produk'");
while($tiap = $ambil->fetch_assoc())
{
    $foto_produk[]=$tiap;
}
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

    <link rel="stylesheet" href="css/index.css">

</head>
<body>
<!-- Navbar -->
    <?php 
    include 'include/navbar.php'; 
    ?>
<!-- Akhir Navbar -->


<section class="detail-produk">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php" class="link-secondary" style="text-decoration: none;">Home</a></li>
            <li>Detail Produk</li>
        </ul>

        <div class="row">

            <div class="col-md-3">
               <?php include 'include/sidebar.php' ?>
            </div>

            <div class="col-md-9 detail-produk">

            <div class="row">
                <div id="carouselExampleDark" class="carousel carousel-dark slide m-2" style="width:25rem;">
              
                    <div class="carousel-inner" style="width:26rem;">
                    <?php foreach ($foto_produk as $key => $value): ?>
                        <div class="carousel-item active" style="width: 25rem;">
                            <img src="img/<?php echo $value['nama_foto_produk'] ?>" class="card" style="width:25rem;" alt="...">
                        </div>
                        <?php endforeach ?>  
                    </div>

                    <button class="carousel-control-prev"  type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="col-6 m-1 p-7 detail-form">
                    <form action="" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <h3><?php echo $detailproduk['nama_produk']; ?></h3>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-sm-3 col-form-label">
                                       Jumlah : 
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="number" name="jumlah" class="form-control" placeholder="Masukan Jumlah">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-sm-3 col-form-label">
                                       Stok : 
                                    </label>
                                    <div class="col-sm-10">
                                        <input disabled type="number" name="Stok" class="form-control" value="<?php echo $detailproduk['stok_produk']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga" class="col-sm-3 col-form-label">
                                       Harga
                                    </label>
                                    <h5>Rp.<?php echo number_format($detailproduk['harga_produk']); ?></h5>
                                </div>
                            </div>
                            <!-- <div class="card-footer text-right">
                                <button name="beli" class="btn btn-success">
                                    <i class='bx bx-cart'></i>
                                </button>
                            </div> -->
                        </div>
                    </form>
                </div>

            </div>

            <div class="card">
                <div class="card-body">
                    <h2 class="fs-3">Detail Produk</h2>
                    <p class="fs-6 fw-normal">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim accusamus animi nobis exercitationem nam soluta minima nihil consectetur recusandae magnam beatae optio voluptas itaque esse molestias quos dolore, in officia.
                    </p>
                </div>
            </div>

            </div>

        </div>

    </div>
</section>

<!-- Footer -->
<?php 
include 'include/footer.php';
?>
<!-- Akhir Footer -->

<script scr="js/main.js"></script>
</body>
</html>