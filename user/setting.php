<?php 


$id_user = $_SESSION['user']['id_user'];

$ambil = koneksi()->query("SELECT * FROM user WHERE id_user='$id_user'");
$pecah = $ambil->fetch_assoc();

if(isset($_POST['simpan']))
{
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $no_telpon = $_POST['no_telpon'];
    $alamat_pelanggan = $_POST['alamat_pelanggan'];

    $nama_foto = $_FILES['foto_pelanggan']['name'];
    $lokasi_foto = $_FILES['foto_pelanggan']['tmp_name'];

    move_uploaded_file($lokasi_foto, "../foto_pelanggan/" . $nama_foto);

    if(!empty($lokasi_foto))
    {
        koneksi()->query("UPDATE user SET
            username = '$username',
            password = '$password',
            no_telpon = '$no_telpon',
            alamat_pelanggan = '$alamat_pelanggan',
            foto_pelanggan = '$nama_foto'
            WHERE id_user='$id_user'");
    }else
    {
        koneksi()->query("UPDATE user SET
            username = '$username',
            no_telpon = '$no_telpon',
            alamat_pelanggan = '$alamat_pelanggan'
            WHERE id_user='$id_user'");
    }
    echo "<script>alert('Profil berhasil diubah');</script>";
    echo "<script>location='index.php';</script>";

}

?>


<div class="shadow p-3 mb-3 rounded">
    <h4>Edit Profile</h4>
</div>

<div class="shadow p-3 mb-3 rounded">
    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama :</label>
            <div class="col-sm-9">
                <input type="text" name="username" class="form-control" value="<?php echo $pecah['username']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Password :</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" value="<?php echo $pecah['password']; ?>" readonly>
                <a href="index.php?page=ubah_password" class="btn btn-primary btn-sm mt-3 mb-3">Ubah Password</a>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">No Hp :</label>
            <div class="col-sm-9">
                <input type="text" name="no_telpon" class="form-control" value="<?php echo $pecah['no_telpon']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Alamat :</label>
            <div class="col-sm-9">
                <textarea type="text" name="alamat_pelanggan" class="form-control"><?php echo $pecah['alamat_pelanggan']; ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Foto :</label>
            <div class="col-sm-9 mt-2">
                <img src="../foto_pelanggan/<?php echo $pecah['foto_pelanggan'];?>" width="150">
                <input type="file" name="foto_pelanggan" class="form-control mt-2">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9 mt-2">
               <button name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </div>

    </form>
</div>