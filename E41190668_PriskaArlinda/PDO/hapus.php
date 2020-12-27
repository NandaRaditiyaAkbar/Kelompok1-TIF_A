<?php
include 'koneksi.php';

if(isset($_GET["kode"])){
    $query = $db->prepare("DELETE FROM `menu` WHERE kode=:kode");
    $query->bindParam(":kode", $_GET["kode"]);
    $query->execute();
    header("location: index.php");
}
?>