<?php 
	$koneksi = mysqli_connect("localhost","root","","ratu_katering");

	if (mysqli_connect_error()) {
		# code...
		echo "Koneksi database gagal :".mysqli_connect_error();
	}
 ?>