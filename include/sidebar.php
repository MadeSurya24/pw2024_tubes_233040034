<?php 

$kategori = array();
$ambil = koneksi()->query("SELECT * FROM kategori");
while($pecah = $ambil->fetch_assoc())
{
    $kategori[]=$pecah;
}

?>


<div class="card">
    <div class="card-header text-center ">Kategori Produk</div>
        <div class="card-body">
            <ul class="nav navpills flex-column text-center">
                <?php foreach ($kategori as $key => $value): ?>
                <li class="nav-item">
                    <a href="produk.php?idkategori=<?php echo $value['id_kategori']; ?>" class="nav-link link-secondary">
                        <?php echo $value['nama_kategori']; ?>
                    </a>
                </li>
                <?php endforeach ?>
                <li class="nav-item">
                    <a href="produk.php" class="nav-link link-secondary">
                        SEMUA PRODUK
                    </a>
                </li>
            </ul>
        </div>
</div>