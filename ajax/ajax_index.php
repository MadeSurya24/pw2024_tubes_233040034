<?php
require '../assets/functions.php';

$produk = cari($_GET['keyword']);
?>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <?php foreach ($produk as $key => $value): ?>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/<?php echo $value['foto_produk']; ?>" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title"><?php echo $value['nama_produk'] ?></h6>
              <p class="card-text">$<?php echo number_format($value['harga_produk']);   ?></p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>