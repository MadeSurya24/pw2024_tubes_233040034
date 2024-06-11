<!-- Navbar -->
<nav class="navbar navbar-expand-lg mt-2 sticky-top" style="background:rgb(220, 0, 0)">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo&slide/logo.png" alt="RCB" width="200" height="50">
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <form action="produk.php" method="GET" class="d-flex mx-auto"  role="search">
      <input class="form-control me-2 keyword" type="search" id="search-box" name="keyword" placeholder="Search" autocomplete="off" autofocus aria-label="Search">
      <button class="btn btn-outline-light " type="submit">
      <i class='bx bx-search' style="color:palevioletred;"></i>
      </button>
    </form>
      <ul class="navbar-nav ms-auto column-gap-3">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="produk.php">PRODUCT</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-light" href="keranjang.php"><i class='bx bx-cart fs-3'></i></a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-light" href="user/index.php" id="btn-user">
            <i class='bx bxs-user' style="font-size: 30px;"></i>
          </a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>