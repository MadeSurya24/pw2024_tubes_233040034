<?php 

$id_produk = $_GET['id'];

$kategori = array();
$ambil = koneksi()->query("SELECT * FROM kategori");
while($pecah = $ambil->fetch_assoc())
{
    $kategori[] = $pecah;
}

$ambil = koneksi()->query("SELECT * FROM produk JOIN kategori
                           ON produk.id_kategori=kategori.id_kategori WHERE id_produk='$id_produk'");
$edit = $ambil->fetch_assoc();


if(isset($_POST['simpan']))
{
    $id_kategori = $_POST['id_kategori'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];

    // Jika foto produk diubah
    if(!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto[0], "../img/" . $namafoto[0]);

        koneksi()->query("UPDATE produk SET
                          id_kategori = '$id_kategori',
                          nama_produk = '$nama',
                          harga_produk = '$harga',
                          foto_produk = '$namafoto[0]',
                          deskripsi_produk = '$deskripsi',
                          stok_produk = '$stok'
                          WHERE id_produk = '$id_produk'");
    }

    // Jika foto produk tidak diubah
    else
    {
        koneksi()->query("UPDATE produk SET
                          id_kategori = '$id_kategori',
                          nama_produk = '$nama',
                          harga_produk = '$harga',
                          deskripsi_produk = '$deskripsi',
                          stok_produk = '$stok'
                          WHERE id_produk = '$id_produk'");
    }

    // $namafotoproduk = $_FILES['foto']['name'];
    // $lokasifotoproduk = $_FILES['foto']['tmp_name'];

    // move_uploaded_file($lokasifotoproduk[0], "../img/" . $namafotoproduk[0]);
    // koneksi()->query("INSERT INTO foto_produk (nama_foto_produk)
    //                   VALUES ('$namafotoproduk[0]'");
    
    echo "<script>alert('produk berhasil diupdate');</script>";
    echo "<script>location='admin.php?halaman=produk';</script>";

}

?>


<div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Produk</b></h5>
</div>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="card shadow bg-white">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Kategori :</label>
                <div class="col-sm-9">
                    <select name="id_kategori" class="form-control">

                        <option value="<?php echo $edit['id_kategori'];?>">
                            <?php echo $edit['nama_kategori']; ?>
                        </option>

                        <?php foreach ($kategori as $key => $value): ?>
                        <option value="<?php echo $value['$id_kategori'];?>">
                            <?php echo $value['nama_kategori'];?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Produk :</label>
                <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control"  value="<?php echo $edit['nama_produk'];?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Harga Produk :</label>
                <div class="col-sm-9">
                    <input type="text" name="harga" class="form-control"  value="<?php echo $edit['nama_produk'];?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Foto Produk :</label>
                <div class="col-sm-9">
                    <img src="../img/<?php echo $edit['foto_produk'];?>" width="150">
                    <input type="file" name="foto[]" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Deskripsi Produk :</label>
                <div class="col-sm-9">
                    <textarea type="text" name="deskripsi" class="form-control">value="<?php echo $edit['deskripsi_produk'];?>"</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Stok Produk :</label>
                <div class="col-sm-9">
                    <input type="text" name="stok" class="form-control"  value="<?php echo $edit['stok_produk'];?>">
                </div>
            </div>

        </div>

        <div class="card-footer">
                <div class="row">
                    <div class="col-md-11">
                        <button name="simpan" class="btn btn-sm btn-success">Simpan</button>
                    </div>
                    <div class="col-md-1 text-right">
                        <a href="admin.php?halaman=produk" class="btn btn-sm btn-danger">Kembali</a>
                    </div>
                </div>
        </div>

    </div>
</form>

