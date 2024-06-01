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

function registrasi($data) {
    $conn = koneksi();

    $username = htmlspecialchars($data["username"]);
    $password1 = mysqli_real_escape_string($data["password1"]);
    var_dump($password1);
}
?>