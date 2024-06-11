<?php 
session_start();

// if(isset($_SESSION['login'])) {
//   header("Location: index.php");
//   exit;
// }

require 'assets/functions.php';

if(isset($_POST['login']))

{
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    // $username = $_POST['username'];
    // $password = sha1($_POST['password']);

    $ambil = koneksi()->query("SELECT * FROM user
                               WHERE email='$email' AND password='$password'");
    // $ambil = koneksi()->query("SELECT * FROM admin
    //                            WHERE username='$username' AND password='$password'");

    $akun = $ambil->num_rows;

    if($akun==1)
    {
        $_SESSION['user'] = $ambil->fetch_assoc();
        echo "<script>alert('login berhasil');</script>";
        echo "<script>location='index.php';</script>";
    }
    else
    {
        echo "<script>alert('login gagal');</script>";
        echo "<script>location='login.php';</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Style CSS -->
<link rel="stylesheet" href="css/registerlogin.css">



    <title>Halaman Login</title>
</head>
<body>
    <!-- <h1>Halaman Login</h1> -->

    <div class="container">
      <?php if( isset($login['error'])) : ?>
          <p style="color: red; font-style:italic;">Username / Password Salah</p>
      <?php endif; ?>

        <form action="" method="POST" class="mx-auto">
            <h4 class="text-center">Login</h4>

              <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail" placeholder="Masukan Email" required>
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password" required>
              </div>

              <div class="mb-3 form-check">
                <p class="login-register-text mt-3">
                  Don't Have an Account?
                    <a href="registrasi.php"  class="text-decoration-none">Register</a>
                </p>
              </div>

              <div>
                <button type="submit" name="login" class="btn btn-primary">Login</button>
              </div>
              
        </form>
</body>
</html>