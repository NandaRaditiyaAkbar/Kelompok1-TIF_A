<?php
    include 'koneksi.php';
    $query = $db->prepare("SELECT * FROM menu");
    $query->execute();
    $data = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PDO</title>
</head>
<body>
    <h2>List Menu</h2>
    <table border = 1>
    <tr>
        <td>Kode</td>
        <td>Nama Menu</td>
        <td>stok</td>
        <td>harga</td>
        <td><a href="tambah.php">Tambah</a></td>
    </tr>
    <?php foreach ($data as $value): ?>
    <tr>
        <td><?php echo $value['kode']?></td>
        <td><?php echo $value['nama']?></td>
        <td><?php echo $value['stok']?></td>
        <td><?php echo $value['harga']?></td>
        <td>
        <a href="edit.php?kode=<?php echo $value['kode']?>">Ubah</a>
        <a href="hapus.php?kode=<?php echo $value['kode']?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>