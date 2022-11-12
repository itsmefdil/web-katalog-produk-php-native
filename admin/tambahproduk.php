<?php
$datakategori = [];
$ambil = $koneksi->query("SELECT * FROM kategori");
while($tiap = $ambil->fetch_assoc()){
	$datakategori[] = $tiap;
}

// echo "<pre>";
// print_r($datakategori);
// echo "</pre>";

?>


<h2>Tambah Produk</h2>

<div class="row">
	<div class="col-md-8">
		<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div class="form-group">
					<label>Kategori</label>
					<select name="id_kategori" id="" class="form-control">
						<option value="">-Pilih kategori-</option>
						<?php foreach($datakategori as $key => $value): ?>
						<option value="<?= $value['id_kategori'] ?>"><?= $value['nama_kategori']; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label>Harga (Rp)</label>
					<input type="number" name="harga" class="form-control">
				</div>
				<div class="form-group">
					<label>Berat (gr)</label>
					<input type="number" name="berat" class="form-control">
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea type="text" id="summernote" name="deskripsi" class="form-control" rows="6"></textarea>
				</div>
				<div class="form-group">
					<label>Foto</label>
					<div class="letak-input" style="margin-bottom: 5px;">
						<input type="file" name="foto[]" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label>Stok</label>
					<input type="number" name="stok" class="form-control">
				</div>
			<button name="submit" name="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
</div>

<?php  
if(isset($_POST["submit"])){
	
	$namanamafoto = $_FILES["foto"]["name"];
	$lokasilokasifoto = $_FILES["foto"]["tmp_name"];
	move_uploaded_file($lokasilokasifoto[0], "../foto_produk/".$namanamafoto);

	$nama_produk = $_POST["nama"];
	$harga_produk = $_POST["harga"];
	$berat_produk = $_POST["berat"];
	$deskripsi_produk = $_POST["deskripsi"];
	$stok_produk = $_POST["stok"];
	$id_kategori = $_POST["id_kategori"];

	$koneksi->query("INSERT INTO produk (nama_produk, harga_produk, berat_produk, deskripsi_produk, stok_produk, id_kategori, foto_produk) VALUES ('$nama_produk', '$harga_produk', '$berat_produk', '$deskripsi_produk', '$stok_produk', '$id_kategori', '$namanamafoto')");
	if ($koneksi->affected_rows > 0) {
		echo "<script>alert('Data berhasil disimpan');</script>";
		echo "<script>location='index.php?halaman=produk';</script>";
	}else {
		echo "<script>alert('Data gagal disimpan');</script>";
		echo "<script>location='index.php?halaman=produk';</script>";
	}
}
?>


<script>
	$(document).ready(function(){
		$(".btn-tambah").on("click", function(){
			$(".letak-input").append("<input type='file' name='foto[]' class='form-control'>");
		})
	})
</script>



















 