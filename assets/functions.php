<?php

//Koneksi ke database

function koneksi()
{
     return mysqli_connect("localhost", "root", "", "pw2024_tubes_233040034");
}


function query($query) 
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    $rows = [];
    
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }

    return $rows;
}

function registrasi($data)
{
    // $conn = koneksi();

    // $username = htmlspecialchars($data["username"]);
    // $password = htmlspecialchars($data["password"]);
    // $id_role = 1;
  

    // $query = "INSERT INTO user  VALUES (null, '$username', '$password', '$id_role')";
    // mysqli_query($conn, $query) or die (mysqli_error($conn));
    
    // return mysqli_affected_rows($conn);
{
  $conn = koneksi();


  $username = htmlspecialchars(strtolower($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  //jika username / password kosong
  if (empty($username) || empty($password) || empty($password2)) {
    echo "<script>
          alert('username / password tidak boleh  kosong!');
          document.location.href = 'registrasi.php';
          </script>";

    return false;
  }

  //jika username sudah aada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
    alert('username sudah terdaftar!');
    document.location.href = 'registrasi.php';
    </script>";

    return false;
  }
  //jika konfirmasi password tidak sesuai
  if ($password !== $password2) {
    echo "<script>
    alert('konfirmasi password tidak sesuai!');
    document.location.href = 'registrasi.php';
    </script>";

    return false;
  }

  // jika password <5 digit
  if (strlen($password) < 5) {
    echo "<script>
    alert('password terlalu pendek!');
    document.location.href = 'registrasi.php';
    </script>";

    return false;
  }

  //jika username dan password sudah sesuai
  //enkripsi password
  $password_baru = password_hash($password, PASSWORD_DEFAULT);
  //Inser ke table user
  $query = "INSERT INTO user 
              VALUES
              (null, '$username', '$password_baru')
              ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
}

function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $user = query("SELECT * FROM user WHERE username = '$username'");
// Cek dulu username
    if ($user) {
        //Cek password
        if (($password == $user[0]['password'])){
            //set session
            $_SESSION['login'] = true;

            header("Location: index.php");
            exit;
        }      
    }
    return [
        'error' => true,    
        'pesan' => 'Username / Password Salah!'
    ];
}

function cari($keyword)
{
    $conn = koneksi();
    $query = "SELECT * FROM produk JOIN kategori WHERE nama_produk LIKE '%$keyword%' OR nama_kategori LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}
?>