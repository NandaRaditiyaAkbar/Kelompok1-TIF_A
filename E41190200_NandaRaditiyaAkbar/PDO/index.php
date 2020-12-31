<?php 
include('proses.php');
$lib = new proses();
$data_pegawai = $lib->show();
 
if(isset($_GET['hapus_pegawai']))
{
    $kd_pegawai = $_GET['hapus_pegawai'];
    $hapus = $lib->delete($kd_pegawai);
    if($hapus)
    {
        header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
    </head>
    <center>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Pegawai Bakso Viral</h3>
            </div>
            <div class="card-body">
                <a href="tambah_data.php" class="btn btn-success tmb">Tambah</a>
                <hr/>
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Pilihan</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_pegawai as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_pegawai']."</td>";
                        echo "<td>".$row['umur']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        echo "<td><a class='btn btn-info' href='edit.php?kd_pegawai=".$row['kd_pegawai']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?hapus_pegawai=".$row['kd_pegawai']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
                </center>
</html>