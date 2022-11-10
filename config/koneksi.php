<?php 
 
$koneksi = mysqli_connect("localhost","hari","hari123","hari");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>