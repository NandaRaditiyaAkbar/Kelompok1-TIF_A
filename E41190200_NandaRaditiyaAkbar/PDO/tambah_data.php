<?php 
include('proses.php');
$lib = new proses();
if(isset($_POST['tambah_data'])){
    $nama_pegawai = $_POST['nama_pegawai'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
 
    $tambah_data = $lib->tambah_data($nama_pegawai, $umur, $alamat);
    if($tambah_data){
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
                <h3>Tambah Data Pegawai Bakso Viral</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
            <table class="table table-bordered" width="60%">
                <div class="form-group row">
                    <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                    <input type="text" name="umur" class="form-control" id="umur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tambah_data" class="btn btn-primary" value="Tambah">
                    </div>
                </div>
            </form>
            </table>
            </div>
        </div>
    </div>
    </body>
</center>
</html>