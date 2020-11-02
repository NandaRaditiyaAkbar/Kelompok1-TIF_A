<?php
echo "membuat fungsi php <br>";
function berhasil($nilai){
    echo "SELAMAT ANDA BERHASIL dengan nilai ".$nilai;
}
function gagal($nilai){
    echo "MAAF ANDA GAGAL".$nilai."<br>";
}
$nilai = 90;
if ($nilai>=75){
    berhasil($nilai);
} else {
    gagal($nilai);
}
echo "<br>";
echo "FUNGSI DENGAN PARAMETER<br>";
function jumlah($a, $b) //fungsi dengan 2 parameter
{return $a+$b;} //nilai kembali (return value)
$nilai1=10;
$nilai2=15;
echo jumlah($nilai1,$nilai2); //passing parameter
echo "<br>";
echo "FUNGSI BAWAAN <br>";
$sekarang = getdate();
print_r($sekarang); //hasilnya berupa array
echo "<br>"; //ambil elemen untuk menampilkan tanggal
echo "sekarang tanggal: " .$sekarang["mday"];
?>