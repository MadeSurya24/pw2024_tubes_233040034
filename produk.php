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
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <?php endforeach ?>
    <!-- <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/sp500.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">SP500</h6>
              <p class="card-text">FROM $198.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/SP522.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">SP522</h6>
              <p class="card-text">FROM $289.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/VD-black.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">VD SERIES</h6>
              <p class="card-text">FROM $433.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/S2LINE.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">S2 LINE</h6>
              <p class="card-text">FROM $139.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/VR.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">VR SERIES</h6>
              <p class="card-text">FROM $619.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/S3-Series-red.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">S3 SERIES</h6>
              <p class="card-text">FROM $101.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/r1-red.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">R1 SERIES</h6>
              <p class="card-text">FROM $99.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/S1-Masterbrakepump-red.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">S1 MASTER BREAK</h6>
              <p class="card-text">FROM $98.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/RS1SINGLE.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">RS 1 SINGLE</h6>
              <p class="card-text">FROM $199.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/S1FULLSET.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">S1 FULL SET</h6>
              <p class="card-text">FROM $199.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="img/S2V2SINGLE.png" class="card-img-top mt-2" alt="...">
            <div class="card-body ">
              <h6 class="card-title">S2 V2 SINGLE</h6>
              <p class="card-text">FROM $99.00</p>
              <a href="#" class="btn d-grid" style="background-color:rgb(220, 0, 0); color:white;">BUY</a>
            </div>
        </div>
    </div>
  </div>
</div> -->

