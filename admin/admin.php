<?php

session_start();
include '../assets/functions.php';

if(!isset($_SESSION['admin']))
{
    echo "<script>alert('anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}

if(isset($_POST['cari'])){
    $produk = cari($_POST['keyword']);
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RCB</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

     <!-- Custom styles for this page -->
     <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color:rgb(220,0,0) ;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon" style=" width:100px; margin-right: 430px; ">
                    <img src="../img/logo&slide/logo.png" alt="logo">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="admin.php?halaman=kategori">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Kategori</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="admin.php?halaman=produk">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Produk</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="admin.php?halaman=pembelian">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pembelian</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="admin.php?halaman=user">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="admin.php?halaman=logout">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Logout</span></a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form action="" method="POST" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="keyword" class="keyword form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button type="submit" name="cari" class="tombol-cari btn" style="background-color: rgb(220,0,0); color:white;" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                        <?php 
                        
                        if(isset($_GET['halaman']))
                        {
                            // halaman kategori
                            if($_GET['halaman']=="kategori")
                            {
                                include 'kategori.php';
                            }

                            // halaman tambah kategori
                            elseif($_GET['halaman']=="tambah_kategori")
                            {
                                include 'tambah/tambah_kategori.php';
                            }

                            // halaman edit kategori
                             elseif($_GET['halaman']=="edit_kategori")
                             {
                                 include 'edit/edit_kategori.php';
                             }
                            
                            // halaman hapus kategori
                             elseif($_GET['halaman']=="hapus_kategori")
                             {
                                 include 'hapus/hapus_kategori.php';
                             }


                            // halaman produk
                            elseif($_GET['halaman']=="produk")
                            {
                                include 'produk.php';
                            }

                             // halaman tambah produk
                             elseif($_GET['halaman']=="tambah_produk")
                             {
                                 include 'tambah/tambah_produk.php';
                             }

                              // halaman edit produk
                              elseif($_GET['halaman']=="edit_produk")
                              {
                                  include 'edit/edit_produk.php';
                              }
                            
                             // halaman hapus produk
                             elseif($_GET['halaman']=="hapus_produk")
                             {
                                 include 'hapus/hapus_produk.php';
                             }

                            //  halaman detail produk
                             elseif($_GET['halaman']=="detail_produk")
                             {
                                 include 'detail/detail_produk.php';
                             }                             

                            // halaman pembelian
                            elseif($_GET['halaman']=="pembelian")
                            {
                                include 'pembelian.php';
                            }

                             // halaman detail pembelian
                             elseif($_GET['halaman']=="detail_pembelian")
                             {
                                 include 'detail/detail_pembelian.php';
                             }

                            // halaman user
                            elseif($_GET['halaman']=="user")
                            {
                                include 'user.php';
                            }

                            // halaman logout
                            elseif($_GET['halaman']=="logout")
                            {
                                include 'logout.php';
                            }


                           
                        }
                        else
                        {
                            include 'dashboard.php';
                        }
                        
                        ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/script.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>

    <script>
        $(document).ready(function(){
            $(".btn-tambah").on("click", function(){
                $(".input-foto").append("<input type='file' name='foto[]' class='form-control'> ");
            })
        })
    </script>

</body>
</html>