<?php
if (isset($_POST['update'])){
	$id = 1;
	$email = $_POST['email'];
	$telpon = $_POST['telpon'];
	$waktu = $_POST['waktu'];
	$maps = $_POST['maps'];
	$logo = $_FILES['logo']['name'];
	$logo_old   = $_POST['logo_old'];
	$tmp = $_FILES['logo']['tmp_name'];
	$logo_save = rand().$_FILES['logo']['name'];
	if ($logo != $logo_old) {
		unlink('uploads/'.$logo_old);
		move_uploaded_file($tmp, 'uploads/'.$logo_save);
	}
	$sql = "UPDATE kontak SET email = '$email',telpon = '$telpon',waktu = '$waktu', maps = '$maps',logo = '$logo_save' WHERE id='1'";
	$query = mysqli_query($koneksi,$sql);
	if($query){
		echo '<script>alert("Data Berhasil Diubah");window.location.href="index.php?halaman=kontak"</script>';
	}else{
		echo 'Gagal';
	}
} else {
	$sql = "SELECT * FROM kontak WHERE id='1'";
	$result = $koneksi->query($sql);
	foreach ($result as $kontak) {

}

?>

<h2>KONTAK</h2>
<hr>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
	<div class="row">
		<div class="col-sm-1">
		<label for="">Email</label>
		</div>
		<div class="col-sm-11">
		<input type="text" class="form-control" name="email" value="<?= $kontak['email']?>">
		</div>
	</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-1">
		<label for="">Whatsapp</label>
		</div>
		<div class="col-sm-11">
		<input type="text" class="form-control" name="telpon" value="<?= $kontak['telpon']?>">
		</div>
	</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-1">
		<label for="">Waktu Buka</label>
		</div>
		<div class="col-sm-11">
		<input type="text" class="form-control" name="waktu" value="<?= $kontak['waktu']?>">
		</div>
	</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-1">
		<label for="">Maps Url</label>
		</div>
		<div class="col-sm-11">
		<textarea class="form-control" name="maps" id="" cols="10" rows="5"><?= $kontak['maps']?></textarea>
		</div>
	</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-1">
		<label for="">Logo</label>
		</div>
		<div class="col-sm-11">
		<input type="file" class="form-control" name="logo" value="">
		<input type="hidden" class="form-control" name="logo_old" value="<?= $kontak['logo']?>">
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

<?php






?>