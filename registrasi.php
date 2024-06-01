<?php 
require 'assets/functions.php';

if (isset($_POST["registrasi"])) {
  if(registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan, silahkan login!');
            document.location.href = 'login.php'
        </script>";
  }else{
    echo mysqli_error($conn);
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
 <form action="" method="POST" class="mx-auto">
    <h4 class="text-center">Register</h4>

      <!-- <div class="mb-3 mt-5">
        <label>Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
      </div> -->
    <ul>
      <li class="mb-3">
        <label for="username">Username</label>
        <input type="username" name="username" id="username" class="form-control" required>
      </li>

      <li class="mb-3">
        <label for="password1">Password</label>
        <input type="password" name="password1" id="password1" class="form-control" required>
      </li>

      <li class="mb-3">
        <label for="password2">Konfirmasi Password</label>
        <input type="password" name="password2" id="password2" class="form-control" required>
      </li>

      <li class="mb-3 form-check">
        <p class="login-register-text mt-3">
            Have an Account?
            <a href="login.php" class="text-decoration-none">Log In</a>
        </p>
      </li>
      <li>
        <button type="submit" name="register" class="btn btn-primary">Register</button>
      </li>
      </ul>
</form>
</div>
</body>
</html>