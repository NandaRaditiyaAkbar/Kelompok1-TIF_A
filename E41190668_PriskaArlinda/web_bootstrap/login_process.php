<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($koneksi, "select * from user where username = '$username'");
$data = mysqli_fetch_array($query);
if($username == $data['username']){
	if($password == $data['password']) {
    $_SESSION['username'] = $username;
    header("location:index.php?pesan=berhasil");
	}
} else {
    header("location:login.php?pesan=gagal");
}
?>

