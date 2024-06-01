<?php 
// session_start();

// if(isset($_SESSION['login'])) {
//   header("Location: index.php");
//   exit;
// }

require 'assets/functions.php';

if( isset($_POST["login"])) {
  $login = login($_POST);
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
          <p style="color: red; font-style:italic;">Email / Password Salah</p>
      <?php endif; ?>

        <form action="" method="POST" class="mx-auto">
            <h4 class="text-center">Login</h4>

              <!-- <div class="mb-3 mt-5">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div> -->

              <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="username" name="username" class="form-control" id="exampleInputUsername">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>

              <div class="mb-3 form-check">
                <p class="login-register-text mt-3">
                  Don't Have an Account?
                    <a href="registrasi.php"  class="text-decoration-none">Register</a>
                </p>
              </div>

              <div>
                <button type="submit" name="login" class="btn btn-primary" >Login</button>
              </div>
              
        </form>
</body>
</html>