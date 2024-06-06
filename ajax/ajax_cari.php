<?php
require '../assets/functions.php';

$produk = cari($_GET['keyword']);
?>

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
                <td class="text-center">
                    <img width="150" src="../img/<?php echo $value['foto_produk'] ?>" alt="foto_produk">
                </td>
                <td><?php echo $value['deskripsi_produk']; ?></td>
                <td class="text-center" width="200">
                    <a href="admin.php?halaman=edit_produk&id=<?php echo $value['id_produk']; ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="admin.php?halaman=hapus_produk&id=<?php echo $value['id_produk']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="admin.php?halaman=detail_produk&id=<?php echo $value['id_produk']; ?>" class="btn btn-sm btn-info">Detail</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>