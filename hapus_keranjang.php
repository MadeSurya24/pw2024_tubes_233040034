<?php 

session_start();

$id_produk = $_GET['idproduk'];

unset($_SESSION['keranjang_belanja'][$id_produk]);

echo "<script>alert('produk berhasil dihapus dari keranjang');</script>";
echo "<script>location='keranjang.php';</script>";

?>