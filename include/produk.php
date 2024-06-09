<div class="container-kategori mt-5">
  <div class="kategori" style="background-color:rgb(220, 0, 0); padding:5px 10px;">
    <h5 class="text-center" style="margin-top:5px;">PRODUCT RECOMMENDATION</h5>
  </div>
</div>

<div class="container-produk m-4">
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <?php foreach ($produk as $key => $value): ?>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/<?php echo $value['foto_produk']; ?>" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title"><?php echo $value['nama_produk'] ?></h6>
              <p class="card-text">$<?php echo number_format($value['harga_produk']);   ?></p>
              <a href="beli.php?idproduk=<?php echo $value['id_produk']; ?>" class="btn " style="background-color:rgb(220, 0, 0); color:white;" >
                  <i class='bx bx-cart'></i>
              </a>
              <a href="detail_produk.php?idproduk=<?php echo $value['id_produk']; ?>" class="btn btn-primary">
                  Detail
              </a>
            </div>
        </div>
    </div>
    <?php endforeach ?>
  </div>
</div>
   
