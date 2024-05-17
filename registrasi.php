<?php 
require 'functions.php';

if( isset($_POST["register"])) {

    if(registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil!');
              </script>";
    } else {
        echo mysqli_error($conn);
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


    <title>Halaman Registrasi</title>
</head>
<body>
 <div class="container">
 <form class="mx-auto">
    <h4 class="text-center">Register</h4>
  <div class="mb-3 mt-5">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">Username</label>
    <input type="username" class="form-control" id="exampleInputUsername">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Konfirmasi Password</label>
    <input type="password2" class="form-control" id="exampleInputPassword2">
  </div>
  <div class="mb-3 form-check">
    <p class="login-register-text mt-3">
        Have an Account?
        <a href="login.php" class="text-decoration-none">Log In</a>
    </p>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</body>
</html>