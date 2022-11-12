<?php
include('component/header.php');
include('component/navbar.php');
?>
<br>
<?php

include('config/koneksi.php');

if ($_GET['page'] == 'tentang') {
    include('component/tentang.php');

  } elseif ($_GET['page'] == 'home') {

    include('component/home.php');
    include('component/produk.php');

  } elseif ($_GET['page'] == 'produk') {

      include('component/semua-produk.php');

  } elseif ($_GET['page'] == 'kontak') {

      include('component/kontak.php');

  } elseif ($_GET['page'] == 'detail') {

      include('component/detail-produk.php');

  } else {

      include('component/home.php');
      include('component/produk.php');
      
  }

?>
<?php
include('component/footer.php');
?>
  