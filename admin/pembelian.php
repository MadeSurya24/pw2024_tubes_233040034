<?php 

$pembelian = array();
$ambil = koneksi()->query("SELECT * FROM pembelian JOIN user 
    ON pembelian.id_user=user.id_user");
while($pecah = $ambil->fetch_assoc()) 
{
    $pembelian[] = $pecah;
}


?>

<div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Pembelian</b></h5>
</div>

<div class="card shadow bg-white">
    <div class="card-body">
        <table class="table table-boardered table-hover table-striped" id="tables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pembelian as $key => $value): ?>
                <td width="50"><?php echo $key+1; ?></td>
                <td><?php echo $value['username']; ?></td>
                <td><?php echo date("d F Y", strtotime($value['tanggal_pembelian'])); ?></td>
                <td>Rp.<?php echo number_format($value['total_pembelian']); ?></td>
                <td class="text-center" width="150">
                    <a href="admin.php?halaman=detail_pembelian&id=<?php echo $value['id_pembelian']; ?>" class="btn btn-sm btn-info">Detail</a>
                </td>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>