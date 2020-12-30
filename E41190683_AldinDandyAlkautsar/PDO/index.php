<?php 
include('library.php');
$lib = new Library();
$data_siswa = $lib->show();
 
if(isset($_GET['hapus_siswa']))
{
    $kd_siswa = $_GET['hapus_siswa'];
    $status_hapus = $lib->delete($kd_siswa);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header"style="background-color:#434a4a">
                <center><h3 style="color:#ffffff">Data Pribadi Siswa</h3></center>
            </div>
            <div class="card-body">
                <a href="form_add.php" class="btn btn-success">Tambah</a>
                <hr/>
                <table class="table table-bordered" width="60%" style="background-color:#434a4a">
                    <tr>
                        <th style="color:#ffffff">No</th>
                        <th style="color:#ffffff">Nama</th>
                        <th style="color:#ffffff">Kelas</th>
                        <th style="color:#ffffff">Alamat</th>
                        <th style="color:#ffffff">Action</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_siswa as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_siswa']."</td>";
                        echo "<td>".$row['kelas']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        echo "<td><a class='btn btn-info' href='form_edit.php?kd_siswa=".$row['kd_siswa']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?hapus_siswa=".$row['kd_siswa']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>