<?php
class proses
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_crud";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function tambah_data($nama_pegawai, $umur, $alamat)
    {
        $data = $this->db->prepare('INSERT INTO tb_pegawai (nama_pegawai,umur,alamat) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $nama_pegawai);
        $data->bindParam(2, $umur);
        $data->bindParam(3, $alamat);

        
        $data->execute();
        var_dump($data);
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM tb_pegawai");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
 
    public function get_by_id($kd_pegawai){
        $query = $this->db->prepare("SELECT * FROM tb_pegawai where kd_pegawai=?");
        $query->bindParam(1, $kd_pegawai);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($kd_pegawai,$nama_pegawai,$umur,$alamat){
        $query = $this->db->prepare('UPDATE tb_pegawai set nama_pegawai=?,umur=?,alamat=? where kd_pegawai=?');
        
        $query->bindParam(1, $nama_pegawai);
        $query->bindParam(2, $umur);
        $query->bindParam(3, $alamat);
        $query->bindParam(4, $kd_pegawai);
 
        $query->execute();
        return $query->rowCount();
    }
 
    public function delete($kd_pegawai)
    {
        $query = $this->db->prepare("DELETE FROM tb_pegawai where kd_pegawai=?");
 
        $query->bindParam(1, $kd_pegawai);
 
        $query->execute();
        return $query->rowCount();
    }
 
}
?>