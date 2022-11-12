<?php
$id_produk = $_GET['id'];

$ambil = $koneksi->query("SELECT * FROM produk LEFT JOIN kategori ON produk.id_kategori=kategori.id_kategori WHERE id_produk='$id_produk'");
$detailproduk = $ambil->fetch_assoc();

$fotoproduk = array();
$ambilfoto = $koneksi->query("SELECT * FROM produk_foto WHERE id_produk='$id_produk'");
while($tiap = $ambilfoto->fetch_assoc()){
  $fotoproduk[] = $tiap;
}

// echo "<pre>";
// print_r($detailproduk);
// print_r($fotoproduk);
// echo "</pre>";

?>
<br><br>
<img src="../foto_produk/<?= $detailproduk['foto_produk']; ?>" class="img-thumbnail" width="10%" alt="">
<br><br>
<table class="table" class="table" border="1">
  <tr>
    <th>Produk</th>
    <td><?= $detailproduk['nama_produk']; ?></td>
  </tr>
  <tr>
    <th>Kategori</th>
    <td><?= $detailproduk['nama_kategori']; ?></td>
  </tr>
  <tr>
    <th>Harga</th>
    <td>Rp. <?= number_format($detailproduk['harga_produk']) ?>,-</td>
  </tr>
  <tr>
    <th>Berat</th>
    <td><?= $detailproduk['berat_produk']; ?></td>
  </tr>
  <tr>
    <th>Deskripsi</th>
    <td><?= $detailproduk['deskripsi_produk']; ?></td>
  </tr>
  <tr>
    <th>Stok</th>
    <td><?= $detailproduk['stok_produk']; ?></td>
  </tr>
</table>

<a href="index.php?halaman=produk" class="btn btn-primary">Kembali</a>




<?php
if(isset($_POST['simpan'])){
  $lokasifoto = $_FILES['produk_foto']['tmp_name'];
  $namafoto = $_FILES['produk_foto']['name'];
  $namafoto = date('YmdHis') . $namafoto;

  // Upload ke folder foto_produk
  move_uploaded_file($lokasifoto, '../foto_produk/' . $namafoto);

  // Memasukkan nama foto ke tabel produk_foto
  $koneksi->query("INSERT INTO produk_foto(id_produk, nama_produk_foto) VALUES('$id_produk', '$namafoto')");

  echo "<script>alert('Foto produk berhasil ditambahkan');</script>";
  echo "<script>location='index.php?halaman=detailproduk&id=$id_produk';</script>";
}

?>