<?php 

$id_produk = $_GET['id'];

$ambil = koneksi()->query("SELECT * FROM produk JOIN kategori 
                          ON produk.id_kategori=kategori.id_kategori 
                          WHERE id_produk='$id_produk' ");
$detailproduk = $ambil->fetch_assoc();

$foto_produk = array();
$ambil = koneksi()->query("SELECT * FROM foto_produk WHERE id_produk='$id_produk'");
while($tiap = $ambil->fetch_assoc())
{
    $foto_produk[]=$tiap;
}
?>

<div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Detail Produk</b></h5>
</div>

<div class="card shadow bg-white">
    <div class="card-header">
        <strong>Data Produk</strong>
    </div>
    <div class="card-body">

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Kategori :</label>
            <div class="col-sm-9">
                <input disabled class="form-control" placeholder="<?php echo $detailproduk['nama_kategori'];?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Produk :</label>
            <div class="col-sm-9">
                <input disabled class="form-control" placeholder="<?php echo $detailproduk['nama_produk'];?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Harga Produk :</label>
            <div class="col-sm-9">
                <input disabled class="form-control" placeholder="<?php echo $detailproduk['harga_produk'];?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Deskripsi Produk :</label>
            <div class="col-sm-9">
                <textarea disabled class="form-control" placeholder="<?php echo $detailproduk['deskripsi_produk'];?>"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Stok Produk :</label>
            <div class="col-sm-9">
                <input disabled class="form-control" placeholder="<?php echo $detailproduk['stok_produk'];?>">
            </div>
        </div>

    </div>
</div>

<div class="row">
    <?php foreach ($foto_produk as $key => $value): ?>
    <div class="col-4">
        <div class="card" style="width: 21rem;">
            <img src="../img/<?php echo $value['nama_foto_produk'];?>" alt="" class="img-thumbnail">
        </div>
    </div>
    <?php endforeach ?>
</div>
