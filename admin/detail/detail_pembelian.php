<?php

$id_pembelian = $_GET['id'];

$ambil = koneksi()->query("SELECT * FROM pembelian JOIN user
    ON pembelian.id_user=user.id_user
    WHERE pembelian.id_pemebelian='$id_pembelian'");

    $detail = $ambil->fetch_assoc();

?>


<div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Detail Pembelian</b></h5>
</div>