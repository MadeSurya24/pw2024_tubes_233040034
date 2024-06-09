<?php
require 'assets/functions.php';


if(isset($_GET['idkategori']))
{
    $id_kategori = $_GET['idkategori'];

    $kategori_produk = array();
    $ambil = koneksi()->query("SELECT * FROM produk JOIN kategori
                            ON produk.id_kategori=kategori.id_kategori WHERE produk.id_kategori='$id_kategori' LIMIT 9 ");

    while($pecah = $ambil->fetch_assoc())
    {
    $kategori_produk[]=$pecah;
    }
}else
{
    $produk = array();
    $ambil = koneksi()->query("SELECT * FROM produk JOIN kategori
                               ON produk.id_kategori=kategori.id_kategori LIMIT 9 ");
    
    while($pecah = $ambil->fetch_assoc())
    {
      $produk[]=$pecah;
    }
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


<section class="page-produk">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php" class="link-secondary" style="text-decoration: none;">Home</a></li>
            <li>Product</li>
        </ul>

        <div class="row">

            <div class="col-md-3">
                <?php include 'include/sidebar.php' ?>
            </div>

            <div class="col-md-9">
                <div class="card box">
                    <div class="card-body fs-3">
                        <h4>Produk Kami</h4>
                        <p class="fs-6 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quo deleniti totam, rem esse eos. Ex nemo ea dolorem laboriosam dicta impedit minus, dignissimos facere, unde, nesciunt aliquam nisi assumenda!</p>
                    </div>
                </div>

                <div class="row">

                    <?php if(isset($_GET['idkategori'])): ?>
                        
                        <?php foreach ($kategori_produk as $key => $value): ?>
                            <div class="col-md-4 card-produk">
                                <div class="card text-center">
                                <img src="img/<?php echo $value['foto_produk']; ?>" class="card-img-top mt-2" alt="...">
                                    <div class="card-body ">
                                    <h6 class="card-title"><?php echo $value['nama_produk'] ?></h6>
                                    <p class="card-text">
                                        $<?php echo number_format($value['harga_produk']);   ?>
                                    </p>
                                    <a href="beli.php?idproduk=<?php echo $value['id_produk']; ?>
                                    " class="btn " style="background-color:rgb(220, 0, 0); color:white;">
                                        <i class='bx bx-cart'></i>
                                    </a>
                                    <a href="detail_produk.php?idproduk=<?php echo $value['id_produk']; ?>" class="btn btn-primary">
                                        Detail
                                    </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                    
                    <?php else: ?>

                    <?php foreach ($produk as $key => $value): ?>
                        <div class="col-md-4 card-produk">
                            <div class="card text-center">
                            <img src="img/<?php echo $value['foto_produk']; ?>" class="card-img-top mt-2" alt="...">
                                <div class="card-body ">
                                <h6 class="card-title"><?php echo $value['nama_produk'] ?></h6>
                                <p class="card-text">
                                    $<?php echo number_format($value['harga_produk']);   ?>
                                </p>
                                <a href="beli.php?idproduk=<?php echo $value['id_produk']; ?>" class="btn " style="background-color:rgb(220, 0, 0); color:white;">
                                    <i class='bx bx-cart'></i>
                                </a>
                                <a href="detail_produk.php?idproduk=<?php echo $value['id_produk']; ?>" class="btn btn-primary">
                                    Detail
                                </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                    <?php endif; ?>

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
    
</body>
</html>