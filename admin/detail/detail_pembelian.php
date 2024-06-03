<?php

// memanggil pembelian join user
$id_pembelian = $_GET['id'];

$ambil = koneksi()->query("SELECT * FROM pembelian JOIN user
    ON pembelian.id_user=user.id_user
    WHERE pembelian.id_pembelian='$id_pembelian'");

    $detail = $ambil->fetch_assoc();

// memanggil pembelian_produk
$pp = array();
$ambil = koneksi()->query("SELECT * FROM pembelian_produk JOIN produk
    ON pembelian_produk.id_produk=produk.id_produk
    WHERE pembelian_produk.id_pembelian='$id_pembelian'");
while($pecah = $ambil->fetch_assoc())
{
    $pp[] = $pecah;
}

?>

<div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Detail Pembelian</b></h5>
</div>


<div class="row">

    <div class="col-md-4">
        <div class="card shadow bg-white">
            <div class="card-header">
                <strong>Data Pelanggan</strong>
            </div>
            <div class="card-body row">
                <!--  -->
                <label class="col-md-4 col-form-label">
                    Nama :
                </label>
                <label class="col-md-8 col-form-label">
                    <?php echo $detail['username']; ?>
                </label>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow bg-white">
            <div class="card-header">
                <strong>Data Pembelian</strong>
            </div>
            <div class="card-body row">

                <!--tanggal pembelian-->
                <label class="col-md-4 col-form-label">
                    Tanggal :
                </label>
                <label class="col-md-8 col-form-label">
                    <?php echo date("d Y F", strtotime($detail['tanggal_pembelian'])); ?>
                </label>
            
            </div>
        </div>
    </div>

</div>

<div class="card shadow bg-white mt-3">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped" id="tables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pp as $key => $value): ?>
                <?php $subtotal = $value['harga_produk']*$value['jumlah']; ?>
                <tr>
                    <td width="50"><?php echo $key+1; ?></td>
                    <td><?php echo $value['nama_produk']; ?></td>
                    <td>$<?php echo number_format($value['harga_produk']); ?></td>
                    <td><?php echo $value['jumlah']; ?></td>
                    <td>$<?php echo number_format($subtotal); ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>