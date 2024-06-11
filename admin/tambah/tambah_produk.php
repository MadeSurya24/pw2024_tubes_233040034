<?php 

$kategori = array();
$ambil = koneksi()->query("SELECT * FROM kategori");
while($pecah = $ambil->fetch_assoc())
{
    $kategori[]=$pecah;
}


if(isset($_POST['simpan']))
{

    $id_kategori = $_POST['id_kategori'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];

    move_uploaded_file($lokasi_foto[0], "../img/" . $nama_foto[0]);
    koneksi()->query("INSERT INTO produk (id_kategori,nama_produk,harga_produk,foto_produk,deskripsi_produk,stok_produk)
    VALUES ('$id_kategori','$nama','$harga','$nama_foto[0]','$deskripsi','$stok')");

    $id_baru = koneksi()->insert_id;

    foreach ($nama_foto as $key => $tiap_nama)
    {
        $tiap_lokasi = $lokasi_foto[$key];
        move_uploaded_file($tiap_lokasi, "../img/" . $tiap_nama);

        koneksi()->query("INSERT INTO foto_produk (id_produk, nama_foto_produk)
        VALUES('$id_baru','$tiap_nama')");
    }

    // echo "<pre>";
    // print_r($_FILES['foto']);
    // echo"</pre>";

    echo "<script>alert('data berhasil disimpan');</script>";
    echo "<script>location='admin.php?halaman=produk';</script>";
}

?>



<div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Tambah Produk</b></h5>
</div>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="card shadow bg-white">
        <div class="card_body">

            <div class="form-group row mt-2 ml-2">
                <label class="col-sm-3 col-form-label">Nama Kategori</label>
                <div class="col-sm-8">
                    <select name="id_kategori" class="form-control">
                        <option selected disableb>Pilih Nama Kategori</option>
                            <?php foreach ($kategori as $key => $value): ?>
                                <option value="<?php echo $value['id_kategori']; ?>">
                                    <?php echo $value['nama_kategori']; ?>
                                </option>
                            <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="form-group row mt-2 ml-2">
                <label class="col-sm-3 col-form-label">Nama Produk :</label>
                <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Produk" >
                </div>
            </div>

            <div class="form-group row mt-2 ml-2">
                <label class="col-sm-3 col-form-label">Harga Produk :</label>
                <div class="col-sm-8">
                    <input type="number" name="harga" class="form-control" placeholder="Masukan Harga Produk" >
                </div>
            </div>

            <div class="form-group row mt-2 ml-2">
                <label class="col-sm-3 col-form-label">Foto Produk :</label>
                <div class="col-sm-8">
                    <div class="input-foto">
                     <input type="file" name="foto[]" class="form-control" required>
                    </div>
                    <span class="btn btn-sm btn-success btn-tambah mt-3">
                        <i class="fas fa-plus"></i>
                    </span>
                </div>
            </div>

            <div class="form-group row mt-2 ml-2">
                <label class="col-sm-3 col-form-label">Deskripsi Produk :</label>
                <div class="col-sm-8">
                    <textarea type="text" name="deskripsi" class="form-control" placeholder="Masukan Deskripsi Produk"></textarea>
                </div>
            </div>

            <div class="form-group row mt-2 ml-2">
                <label class="col-sm-3 col-form-label">Stok Produk :</label>
                <div class="col-sm-8">
                    <input type="number" name="stok" class="form-control" placeholder="Masukan Stok Produk" >
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