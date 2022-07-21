<?php 
$koneksi = mysqli_connect("localhost","root","","db_uas");

//jika berhasil terhubung tampilkan tulisan "berhasil terkoneksi" 
//echo "berhasil terkoneksi" ;

// jika gagal
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}



?>