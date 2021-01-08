<?php

	require_once "../conn.php";

	$id_kon = $_GET["id_kon"];
	$sql = "UPDATE konfirmasi set status='Bayar' where id_kon='$id_kon'";
	$query = mysqli_query($koneksi, $sql);

	if($query){
		header("Location: konfirmasi.php");
	}

?>