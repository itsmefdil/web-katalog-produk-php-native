<?php 
 
$koneksi = mysqli_connect("localhost","hari","d5rhby26SheaLG2N","hari");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>