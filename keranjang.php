<?php
session_start();
require 'assets/functions.php';


if(empty($_SESSION['keranjang_belanja']) OR !isset($_SESSION['keranjang_belanja']))
{
    echo "<script>alert('Keranjang kosong, silahkan belanja');</script>";
    echo "<script>location='produk.php';</script>";
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

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

     <!-- Custom styles for this page -->
     <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">



</head>
<body>
<!-- Navbar -->
    <?php 
    include 'include/navbar.php'; 
    ?>
<!-- Akhir Navbar -->


<section class="page-keranjang mt-3">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php" class="link-secondary" style="text-decoration: none;">Home</a></li>
            <li>Keranjang Belanja</li>
        </ul>

        <div class="card box">
            <div class="card-body">
                <h2>Keranjang Belanja</h2>
                <p>
                    Anda Memiliki 4 Produk Di Dalam Keranjang
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-hover table-striped" id="tables">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach ($_SESSION['keranjang_belanja'] as $id_produk => $jumlah): 
                        
                        $ambil = koneksi()->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                        $pecah = $ambil->fetch_assoc();
                        $subtotal = $pecah['harga_produk']*$jumlah;
                        
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td>
                                    <img src="img/<?php echo $pecah['foto_produk']; ?>" width="50" alt="">
                                </td>
                                <td><?php echo $pecah['nama_produk']; ?></td>
                                <td><?php echo $jumlah; ?></td>
                                <td>$<?php echo number_format($pecah['harga_produk']) ; ?></td>
                                <td>$<?php echo number_format($subtotal) ; ?></td>
                                <td>
                                    <a href="hapus_keranjang.php?idproduk=<?php echo $pecah['id_produk']; ?>" class="btn btn-danger btn-sn">
                                        <i class='bx bx-trash-alt'></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <a href="produk.php" class="btn btn-primary btn-sm">
                            Kembali Belanja
                        </a>
                    </div>
                    <div class="col-md-1 text-right">
                        <a href=""  class="btn btn-success">
                            Checkout
                        </a>
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

 <!-- Bootstrap core JavaScript-->
 <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
    
</body>
</html>