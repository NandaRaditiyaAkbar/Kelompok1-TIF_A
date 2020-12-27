<?php
include 'koneksi.php';
if(!isset($_GET['kode'])){
    die("Error: Kode tidak dimasukkan");
}
$query = $db->prepare("SELECT * FROM `menu` WHERE kode = :kode");
$query->bindParam(":kode", $_GET['kode']);
$query->execute();
if($query->rowCount()==0){
    die("Error : kode tidak ditemukan");
} else {
    $data = $query->fetch();
}
if(isset($_POST['submit'])){
    $nama = htmlentities($_POST['nama']);
    $stok = htmlentities($_POST['stok']);
    $harga = htmlentities($_POST['harga']);
    $query = $db->prepare("UPDATE `menu` SET `nama`=:nama, `stok`=:stok, `harga`=:harga WHERE kode=:kode");
    $query->bindParam(":nama", $nama);
    $query->bindParam(":stok", $stok);
    $query->bindParam(":harga", $harga);
    $query->bindParam(":kode", $_GET['kode']);
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
    <h2>Ubah data</h2>
    <form method="post">
       <table>
           <tr>
               <td>Kode</td>
               <td><input type="text" name="kode" value="<?php echo $data['kode']?>" readonly="readonly"></td>
           </tr>
           <tr>
               <td>Nama</td>
               <td><input type="text" name="nama" value="<?php echo $data['nama']?>"></td>
           </tr>
           <tr>
               <td>stok</td>
               <td><input type="text" name="stok" value="<?php echo $data['stok']?>"></td>
           </tr>
           <tr>
               <td>Harga</td>
               <td><input type="text" name="harga" value="<?php echo $data['harga']?>"></td>
           </tr>
           <tr>
               <td></td>
               <td><input type="submit" value="ubah" name="submit"></td>
           </tr>
       </table>
    </form>
</body>
</html>