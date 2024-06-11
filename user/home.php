<?php 


$id_user = $_SESSION['user']['id_user'];

$ambil = koneksi()->query("SELECT * FROM user WHERE id_user='$id_user'");
$pecah = $ambil->fetch_assoc();


?>

<div class="shadow p-3 mb-3 rounded">
    <h4>Selamat Datang <strong><?php echo $_SESSION['user']['username']; ?></strong></h4>
</div>

<div class="shadow p-3 mb-3 rounded">
    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama :</label>
            <div class="col-sm-9">
                <input type="text" name="username" class="form-control" value="<?php echo $pecah['username']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Email :</label>
            <div class="col-sm-9">
                <input type="text" name="email" class="form-control" value="<?php echo $pecah['email']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">No Hp :</label>
            <div class="col-sm-9">
                <input type="text" name="telepon" class="form-control" value="<?php echo $pecah['no_telpon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Alamat :</label>
            <div class="col-sm-9">
                <textarea type="text" name="alamat" class="form-control" readonly><?php echo $pecah['alamat_pelanggan']; ?></textarea>
            </div>
        </div>

    </form>
</div>