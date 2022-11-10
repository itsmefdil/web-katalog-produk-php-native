<?php
$ambil = $koneksi->query("SELECT * FROM tentang WHERE id_tentang = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$datakategori = [];
$ambil = $koneksi->query("SELECT * FROM kategori");
while($tiap = $ambil->fetch_assoc()){
  $datakategori[] = $tiap;
}


if(isset($_POST['ubah'])){
  $link_whatsapp = $_POST['link_whatsapp'];
  $deskripsi_tentang = $_POST['deskripsi_tentang'];

  // jika foto dirubah
  if(!empty($deskripsi_tentang)){

    $koneksi->query("UPDATE tentang SET link_whatsapp='$_POST[link_whatsapp]', deskripsi_tentang='$_POST[deskripsi_tentang]'WHERE id_tentang='$_GET[id]'");
  }
  else{
    $koneksi->query("UPDATE tentang SET link_whatsapp='$_POST[link_whatsapp]' WHERE id_tentang='$_GET[id]'");
  }

  echo "<script>alert('Data berhasil diubah');</script>";
  echo "<script>location='index.php?halaman=ubahtentang';</script>";


?>

<h2>Ubah Tentang</h2>

<div class="row">
	<div class="col-md-8">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Link WhatsApp</label>
        <input type="text" name="link_whatsapp" class="form-control" value="<?= $pecah['link_whatsapp']; ?>">
      </div>
      <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="10">
          <?= $pecah['deskripsi_tentang']; ?>
        </textarea>
      </div>
      <button name="ubah" class="btn btn-primary">Ubah</button>
    </form>
  </div>
</div>