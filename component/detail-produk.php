<!-- ======= Menu Section ======= -->
<?php

$id = $_GET['id'];

$sql = "SELECT * FROM produk WHERE id_produk = '$id'";
$ambil = $koneksi->query($sql);
foreach ($ambil as $pecah) {
    $id_produk = $pecah['id_produk'];
    $nama_produk = $pecah['nama_produk'];
    $harga_produk = $pecah['harga_produk'];
    $berat_produk = $pecah['berat_produk'];
    $deskripsi_produk = $pecah['deskripsi_produk'];
    $foto_produk = $pecah['foto_produk'];
    $stok_produk = $pecah['stok_produk'];
    $id_kategori = $pecah['id_kategori'];
}

$kontak = "SELECT * FROM kontak where id = 1";
$ambil_kontak = $koneksi->query($kontak);
foreach ($ambil_kontak as $pecah_kontak) {
    $telpon = $pecah_kontak['telpon'];
    $email = $pecah_kontak['email'];
    $alamat = $pecah_kontak['alamat'];
}

$pesan = "Saya ingin membeli produk : *".$nama_produk."* ,Apakah masih tersedia ?"

?>


<section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>Produk Kami</h2> -->
          <p>Detail <span> Produk</span></p>
        </div>


        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">
        
          <div class="row">
            <div class="col-sm-6">
                <img src="foto_produk/<?= $foto_produk?>" class="img-thumbnail" alt="" width="100%">
            </div>
            <div class="col-sm-6">
                <h1><?= $nama_produk?></h1>
                <hr>
                <p>Deskripsi :</p>
                <?= $deskripsi_produk?>
                <hr>
                <p>Harga : Rp. <?= number_format($harga_produk)?></p>
                <p>Berat : <?= $berat_produk?> gr</p>
                <p>Stok : <?= $stok_produk?></p>
                <hr>
                <a href="https://api.whatsapp.com/send/?phone=<?= $telpon ?>&text=<?= $pesan ?>" class="btn btn-success" target="_blank"><i class="fa-brands fa-whatsapp"></i> PESAN SEKARANG</a>
            </div>
          </div>

          </div>
        </div>

      </div>
    </section><!-- End Menu Section -->
