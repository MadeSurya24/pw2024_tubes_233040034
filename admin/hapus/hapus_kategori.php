<?php 


$id_kategori = $_GET['id'];

koneksi()->query("DELETE FROM kategori WHERE id_kategori='$id_kategori'");


// koneksi()->query("DELETE FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori WHERE id_kategori='$id_kategori' ");
echo "<script>alert('kategori berhasil dihapus');</script>";
echo "<script>location='admin.php?halaman=kategori';</script>";
?>


<!-- <div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Hapus Kategori</b></h5>
</div> -->