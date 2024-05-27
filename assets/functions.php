<?php

//Koneksi ke database

function koneksi()
{
     return mysqli_connect("localhost", "root", "", "pw2024_tubes_233040034");
}


function querry($query) 
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    $rows = [];
    
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }

    return $rows;
}
//     global $conn;
//     $result = mysqli_query($conn, $query);
//     $rows = [];
//     while( $row = mysqli_fetch_assoc($result)) {
//         $rows[] = $row;
//     }
// }


// function registrasi($data) {
//     global $conn;

//     $username = strtolower(stripslashes($data["username"]));
//     $password = mysqli_real_escape_string($conn, $data["password"]);
//     $password2 = mysqli_real_escape_string($conn, $data["password2"]);

//     // cek username
//     $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

//     if(mysqli_fetch_assoc($result)) {
//         echo "<script>
//                 alert('username sudah terdaftar!')
//               </script>";
//         return false;
//     }
//     // Cek konfirmasi password
//     if( $password !== $password2) {
//         echo "<script>
//                 alert('Konfirmasi Password Tidak Sesuai!');
//               </script>";
//         return false;
//     }

//     // enkripsi password
//     $password = password_hash($password, PASSWORD_DEFAULT);

//     // tambahkan userbaru ke database
//     mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

//     return mysqli_affected_rows($conn);

// }

?>