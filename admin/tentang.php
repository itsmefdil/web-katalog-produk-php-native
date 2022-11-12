<?php
if (isset($_POST['update'])){
	$id = 1;
	$nama = $_POST['nama_toko'];
	$deskripsi = $_POST['deskripsi'];
	$logo = $_FILES['logo']['name'];
	$logo_old   = $_POST['logo_old'];
	$tmp = $_FILES['logo']['tmp_name'];
	$logo_save = rand().$_FILES['logo']['name'];
	if ($logo != $logo_old) {
		unlink('uploads/'.$logo_old);
		move_uploaded_file($tmp, 'uploads/'.$logo_save);
	}
	$sql = "UPDATE tentang SET nama_toko = '$nama',deskripsi = '$deskripsi',logo = '$logo_save' WHERE id='1'";
	$query = mysqli_query($koneksi,$sql);
	if($query){
		echo '<script>alert("Data Berhasil Diubah");window.location.href="index.php?halaman=tentang"</script>';
	}else{
		echo 'Gagal';
	}
} else {
	$sql = "SELECT * FROM tentang WHERE id='1'";
	$result = $koneksi->query($sql);
	foreach ($result as $tentang) {

}
?>
<h2>TENTANG <small><?= $tentang['nama_toko']?></small></h2> 
<hr>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
	<div class="row">
		<div class="col-sm-1">
		<label for="">Nama Toko</label>
		</div>
		<div class="col-sm-11">
		<input type="text" class="form-control" name="nama_toko" value="<?= $tentang['nama_toko']?>">
		</div>
	</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-1">
		<label for="">Deskripsi</label>
		</div>
		<div class="col-sm-11">
		<textarea class="form-control" name="deskripsi" id="" cols="10" rows="10"><?= $tentang['deskripsi']?></textarea>
		</div>
	</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-1">
		<label for="">Foto</label>
		</div>
		<div class="col-sm-11">
		<input type="file" class="form-control" name="logo" value="">
		<input type="hidden" class="form-control" name="logo_old" value="<?= $tentang['foto']?>">
		</div>
	</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-1">
		<label for="">Aksi</label>
		</div>
		<div class="col-sm-11">
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
		</div>
	</div>
</div>
</form>
<?php }?>