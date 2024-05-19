<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RCB</title>

<!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!-- CSS -->
<link rel="stylesheet" href="css/style.css">


  </head>
  <body>
  <nav class="navbar navbar-expand-lg" style="background:rgb(220, 0, 0)">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo&slide/logo.png" alt="RCB" width="250" height="50">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
    <form class="d-flex mx-auto"  role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">
      <i class='bx bx-search' style="color:palevioletred;"></i>
      </button>
    </form>
      <ul class="navbar-nav ms-auto column-gap-3">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#"><i class='bx bx-cart fs-3'></i></a>
        </li>
        <li class="nav-item d-grid gap-.5 d-md-flex justify-content-md-end">
            <button class="btn me-md-2 btn-light" type="button">
                <a href="#" class="text-decoration-none text-dark">REGISTRASI</a>
            </button>
               
            <button class="btn btn-light" type="button">
                <a href="#" class="text-decoration-none text-dark">LOGIN</a>
            </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-slide">
  <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/logo&slide/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/logo&slide/slide2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/logo&slide/slide3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/logo&slide/slide4.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


  </body>
</html>