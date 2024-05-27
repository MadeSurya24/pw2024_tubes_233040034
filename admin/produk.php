<?php

$produk = array();
$ambil = koneksi()->query("SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori");
while($pecah = $ambil->fetch_assoc())
{
    $produk[] = $pecah;
}


?>



<div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Produk</b></h5>
</div>

<div class="card shadow bg-white p-5">
    <table class="table table-boardered table-hover table-striped" id="tables">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Deskripsi</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produk as $key => $value): ?>
            <tr>
                <td width="50"><?php echo $key+1; ?></td>
                <td><?php echo $value['nama_kategori']; ?></td>
                <td><?php echo $value['nama_produk']; ?></td>
                <td><?php echo $value['harga_produk']; ?></td>
                <td><?php echo $value['foto_produk']; ?></td>
                <td><?php echo $value['deskripsi_produk']; ?></td>
                <td class="text-center" width="150">
                    <a href="" class="btn btn-sm btn-primary">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>