<?php 

$id_produk = $_GET['id'];

$ambil = koneksi()->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$oecah = $ambil->fetch_assoc();

$hapus_foto = $pecah['foto_produk'];

koneksi()->query("DELETE FROM produk WHERE id_produk='$id_produk'");

echo "<script>alert('produk berhasil dihapus');</script>";
echo "<script>location='admin.php?halaman=produk';</script>";
?>