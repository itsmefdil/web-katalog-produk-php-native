<?php 
$sql = "SELECT * FROM tentang WHERE id='1'";
$result = $koneksi->query($sql);
foreach ($result as $tentang) {
  $nama = $tentang['nama_toko'];
  $foto1 = $tentang['foto'];
}

?>
<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="?page=home" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><?= $nama ?><span></span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="?page=home">Beranda</a></li>
          <li><a href="?page=produk">Produk</a></li>
          <li><a href="?page=tentang">Tentang</a></li>
          
          <!-- <li><a href="?page=kontak">Kontak</a></li> -->
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="?page=kontak">Kontak</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

