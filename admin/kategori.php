<?php
include '../config/koneksi.php';

if(isset($_POST['tambah'])){
  $nama_kategori = $_POST['nama_kategori'];

  $sql = "INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')";
  $koneksi->query($sql);
  if ($koneksi->query($sql) === TRUE) {
    echo '<script>alert("Data Berhasil Ditambah");window.location.href="index.php?halaman=kategori"</script>';
  } else {
      echo "Error: " . $sql . "<br>" . $koneksi->error;
  }
}elseif(isset($_POST['update'])){
  $nama_kategori = $_POST['nama_kategori'];
  $id_kategori = $_POST['id_kategori'];

  $sql = "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'";
  $koneksi->query($sql);
  if ($koneksi->query($sql) === TRUE) {       
    echo '<script>alert("Data Berhasil Diubah");window.location.href="index.php?halaman=kategori"</script>';
  } else {
      echo "Error: " . $sql . "<br>" . $koneksi->error;
  }
}elseif(isset($_GET['hapus'])){
  $id_kategori = $_GET['hapus'];

  $sql = "DELETE FROM kategori WHERE id_kategori='$id_kategori'";
  $koneksi->query($sql);
  if ($koneksi->query($sql) === TRUE) {
    echo '<script>alert("Data Berhasil Dihapus");window.location.href="index.php?halaman=kategori"</script>';
  } else {
      echo "Error: " . $sql . "<br>" . $koneksi->error;
  }
}else{
  $semuadata = [];
  $ambil = $koneksi->query("SELECT * FROM kategori");
  while($tiap = $ambil->fetch_assoc()){
    $semuadata[] = $tiap;
  }
}
?>


<h3>Data Kategori</h3>
<hr>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Kategori</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($semuadata as $key => $value): ?>
    <tr>
      <td><?= $key+1; ?>.</td>
      <td><?= $value['nama_kategori']; ?></td>
      <td>
        <a href=""  data-toggle="modal" data-target="#edit<?= $value['id_kategori']; ?>" class="btn btn-warning btn-xs">Ubah</a>
        <a href="kategori.php?hapus=<?= $value['id_kategori']?>" onclick="return confirm('Apakah ingin menghapus kategori ini ?');" class="btn btn-danger btn-xs">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="#" data-toggle="modal" data-target="#tambah"class="btn btn-primary">Tambah Data</a>



<!-- Modal Tambah Kategori -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Kategori</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" class="form-control" id="nama" name="nama_kategori" placeholder="Nama Kategori">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>


<?php foreach($semuadata as $key => $value): ?>
<!-- Edit Kategori -->
<div class="modal fade" id="edit<?= $value['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Kategori</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" class="form-control" id="nama" name="nama_kategori" value="<?= $value['nama_kategori']; ?>">
            <input type="hidden" name="id_kategori" value="<?= $value['id_kategori']; ?>">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
        <button type="submit" name="update" class="btn btn-primary">Perbahrui</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>


<?php 





?>