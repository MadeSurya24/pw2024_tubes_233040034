<?php 
require 'assets/functions.php';

if(isset($_POST['registrasi']))

{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $no_telpon = $_POST['telepon'];
    $alamat_pelanggan = $_POST['alamat'];

    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];

    move_uploaded_file($lokasi_foto, "./foto_pelanggan/" .$nama_foto);

    $ambil = koneksi()->query("SELECT * FROM user WHERE email='$email'");
    $ada_email = $ambil->num_rows;
    if($ada_email==1)
    {
      echo "<script>alert('Registrasi gagal, email sudah tersedia');</script>";
      echo "<script>location='registrasi.php';</script>";
    }
    else
    {
      koneksi()->query("INSERT INTO user(username, email, password, no_telpon, alamat_pelanggan, foto_pelanggan)
        VALUES('$username', '$email', '$password', '$no_telpon', '$alamat_pelanggan', '$nama_foto')");

      echo "<script>alert('Registrasi berhasil');</script>";
      echo "<script>location='login.php';</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Style CSS -->
<link rel="stylesheet" href="css/registerlogin.css">


    <title>Halaman Registrasi</title>

<body>
 <div class="container">
 <form action="" method="POST" class="mx-auto" enctype="multipart/form-data">
    <h4 class="text-center">Register</h4>

      <!-- <div class="mb-3 mt-5">
        <label>Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
      </div> -->
    
      <div class="mb-3">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username Anda" required>
      </div>

      <div class="mb-3">
        <label for="username">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email" required>
      </div>

      <div class="mb-3">  
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password" required>
      </div>

      <div class="mb-3">
        <label for="no_telpon">Nomor Telepon</label>
        <input type="number" name="telepon" id="telepon" class="form-control" placeholder="Masukan No Hp" required>
      </div>

      <div class="mb-3">
        <label for="no_telpon">Alamat</label>
        <textarea type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat Lengkap" required> </textarea>
      </div>

      <div class="mb-3">
        <label for="no_telpon">Foto</label>
        <input type="file" name="foto" id="foto" required>
      </div>

      <div class="mb-3 form-check">
        <p class="login-register-text mt-3">
            Have an Account?
            <a href="login.php" class="text-decoration-none">Log In</a>
        </p>
      </div>
      <div>
        <button type="submit" name="registrasi" class="btn btn-primary">Register</button>
      </div>
</form>
</div>
</body>
</html>