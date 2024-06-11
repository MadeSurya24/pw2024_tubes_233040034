<?php 


$id_user = $_SESSION['user']['id_user'];

if(isset($_POST['update']))
{
    $pass_lama = sha1($_POST['pass_lama']);
    $pass_baru = sha1($_POST['pass_baru']);

    $ambil = koneksi()->query("SELECT * FROM user
        WHERE password = '$pass_lama'");
    $pass = $ambil->num_rows;
    if($pass==1)
    {
        koneksi()->query("UPDATE user SET password='$pass_baru'
            WHERE id_user='$id_user'");
             echo "<script>alert('Password berhasil diubah');</script>";
             echo "<script>location='../login.php';</script>";
    }else{
             echo "<script>alert('Password salah');</script>";
             echo "<script>location='index.php?page=ubah_password';</script>";
    }
}

    



?>


<div class="shadow p-3 mb-3 rounded">
    <h4>Ubah Password</h4>
</div>

<div class="shadow p-3 mb-3 rounded">
    <form action="" method="POST">

       

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Password Lama :</label>
            <div class="col-sm-9">
                <input type="password" name="pass_lama" class="form-control" placeholder="Masukan Password Lama Anda">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Password Baru :</label>
            <div class="col-sm-9">
                <input type="password" name="pass_baru" class="form-control" placeholder="Masukan Password Lama Anda">
            </div>
        </div>


        
        <div class="form-group row">
            <label class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9 mt-2">
               <button name="update" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
</div>