<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
    $kode = htmlentities($_POST['kode']);
    $nama = htmlentities($_POST['nama']);
    $stok = htmlentities($_POST['stok']);
    $harga = htmlentities($_POST['harga']);
    $query = $db->prepare("INSERT INTO `menu` (`kode`, `nama`, `stok`, `harga`)
    VALUES (:kode, :nama, :stok, :harga)");
    $query->bindParam(":kode", $kode);
    $query->bindParam(":nama", $nama);
    $query->bindParam(":stok", $stok);
    $query->bindParam(":harga", $harga);
    $query->execute();
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PDO</title>
</head>
<body>
    <h2>Tambah data</h2>
    <form method="post">
    <table>
        <tr>
            <td>Kode</td>
            <td><input type="text" name="kode"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="text" name="stok"></td>
        </tr>
        <tr>
            <td>harga</td>
            <td><input type="text" name="harga"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="tambah" name="submit"></td>        </tr>
        </tr>
    </table>
    </form>
</body>
</html>