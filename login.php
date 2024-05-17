<?php 

require 'functions.php';

if( isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
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


    <?php if( isset($error)) : ?>
        <p style="color: red; font-style:italic;">Email / Password Salah</p>
    <?php endif; ?>

    <div class="container">
 <form class="mx-auto">
    <h4 class="text-center">Login</h4>
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
  <div class="mb-3 form-check">
    <p class="login-register-text mt-3">
       Don't Have an Account?
        <a href="registrasi.php">Register</a>
    </p>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>

    <!-- <form action="" method="post">
        <ul>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="text" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
            <p class="login-register">Don't Have an Account?
                <a href="registrasi.php">Register</a>
            </p>
        </ul>
    </form> -->
</body>
</html>