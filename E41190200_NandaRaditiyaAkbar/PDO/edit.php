<?php 
include('proses.php');
$lib = new proses();
if(isset($_GET['kd_pegawai'])){
    $kd_pegawai = $_GET['kd_pegawai']; 
    $data_pegawai = $lib->get_by_id($kd_pegawai);
}
else
{
    header('Location: index.php');
}
 
if(isset($_POST['tombol_update'])){
    $kd_pegawai = $_POST['kd_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat']; 
    $status_update = $lib->update($kd_pegawai,$nama_pegawai,$umur,$alamat);
    if($status_update)
    {
        header('Location:index.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Update Data Pegawai Bakso Viral Jember</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="kd_pegawai" value="<?php echo $data_pegawai['kd_pegawai']; ?>"/>
                <div class="form-group row">
                    <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="<?php echo $data_pegawai['nama_pegawai']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_pegawai['umur']; ?>" name="umur" class="form-control" id="umur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat"><?php echo $data_pegawai['alamat']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</center>
</html>