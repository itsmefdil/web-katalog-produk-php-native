<?php
session_start();
//koneksi ke database
include '../config/koneksi.php';

if(!isset($_SESSION['admin'])){
	// echo "<script>location='login.php';</script>";
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Halaman Admin</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet"/>
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet"/>
        <!-- MORRIS CHART STYLES-->
        <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet"/>
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet"/>
        <!-- GOOGLE FONTS-->
        <link
            href='http://fonts.googleapis.com/css?family=Open+Sans'
            rel='stylesheet'
            type='text/css'/>
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- summernote -->
        <link href="assets/summernote/summernote.css" rel="stylesheet">
        <script src="assets/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script
            src="assets/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>

		<!-- data tables  -->
		<link rel="stylesheet" type="text/css" href="assets/datatables/jquery.dataTables.min.css"/>
		<script type="text/javascript" src="assets/datatables/jquery.dataTables.min.js"></script>
    </head>
    <body></body>

    <div id="wrapper">
        <nav
            class="navbar navbar-default navbar-cls-top "
            role="navigation"
            style="margin-bottom: 0">
            <div class="navbar-header">
                <button
                    type="button"
                    class="navbar-toggle"
                    data-toggle="collapse"
                    data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../" target="_blank">ADMIN</a>
            </div>
            <div
                style="color: white;
		padding: 15px 50px 5px 50px;
		float: right;
		font-size: 16px;">
                &nbsp;
                <a href="index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>

        <!-- /. NAV TOP -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a href="index.php">
                            <i class="fa fa-dashboard"></i>Home</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=produk">
                            <i class="fa fa-cube"></i>
                            Produk</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=kategori">
                            <i class="fa fa-tags"></i>
                            Kategori</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=tentang">
                            <i class="fa fa-user"></i>Tentang</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=kontak">
                            <i class="fa fa-file"></i>Kontak</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=logout">
                            <i class="fa fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE -->

        <!-- konten -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="" style="padding-left:50px; padding-right:50px;">
                <?php
					if(isset($_GET["halaman"])){
						if($_GET["halaman"] == "produk"){
							include 'produk.php';
						}
						elseif($_GET["halaman"] == "kategori"){
							include 'kategori.php';
						}
						elseif($_GET["halaman"] == "tentang"){
							include 'tentang.php';
						}
						elseif($_GET["halaman"] == "pelanggan"){
							include 'pelanggan.php';
						}
						elseif($_GET["halaman"] == "detail"){
							include 'detail.php';
						}
						elseif($_GET["halaman"] == "tambahproduk"){
							include 'tambahproduk.php';
						}
						elseif($_GET["halaman"] == "hapusproduk"){
							include 'hapusproduk.php';
						}
						elseif($_GET["halaman"] == "ubahproduk"){
							include 'ubahproduk.php';
						}
						elseif($_GET["halaman"] == "detailproduk"){
							include 'detailproduk.php';
						}
						elseif($_GET["halaman"] == "hapusfotoproduk"){
							include 'hapusfotoproduk.php';
						}
						elseif($_GET["halaman"] == "pembayaran"){
							include 'pembayaran.php';
						}
						elseif($_GET["halaman"] == "kontak"){
							include 'kontak.php';
						}
						elseif($_GET["halaman"] == "ubahtentang"){
							include 'ubahtentang.php';
						}
						elseif($_GET["halaman"] == "logout"){
							include 'logout.php';
						}

					}
					else{
						include 'home.php';
					}
				?>
                </div>
            </div>
        </div>
        <!-- akhir konten -->

    </div>
    <!-- /. WRAPPER -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- summernote -->
    <script src="assets/summernote/summernote.js"></script>
    <script>
        $(document).ready(function () {
            $('#summernote').summernote();
        });
    </script>
	<script>
		$(document).ready(function () {
			$('#datatables').DataTable();
		});
	</script>
</body>
</html>