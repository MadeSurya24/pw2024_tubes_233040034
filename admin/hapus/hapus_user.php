<?php 

$id_user = $_GET['iduser'];

$ambil = koneksi()->query("SELECT * FROM user WHERE id_user='$id_user'");
$pecah = $ambil->fetch_assoc();

$hapus_foto = $pecah['foto_pelanggan'];

koneksi()->query("DELETE FROM user WHERE id_user='$id_user'");

echo "<script>alert('user berhasil dihapus');</script>";
echo "<script>location='admin.php?halaman=user';</script>";
?>