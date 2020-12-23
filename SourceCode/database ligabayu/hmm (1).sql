-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2020 pada 19.10
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode`, `nama`, `jenis`, `harga`, `keterangan`, `stok`, `gambar`) VALUES
(1, 'Bakso Alus', 'Makanan', 6000, 'Bakso daging sapi yang memiliki tekstur permukaan yang halus dan tekstur yang lembut terdapat berbagai ukuran yang dapat membuat orang ketagihan', 23, 'gambar_produk/alus.jpg'),
(2, 'Bakso Telur', 'Makanan', 8000, 'Bakso daging sapi yang gurih dan nikmat berkolaborasi dengan telur didalamnya yang membuat rasanya semakin luar biasa enak\r\n', 30, 'gambar_produk/telur.jpeg'),
(3, 'Bakso Judes', 'Makanan', 5000, 'Bakso daging sapi yang nikmat dipadukan dengan potongan cabai yang membuat merem melek karena rasa hotnya yang ga nahan\r\n', 29, 'gambar_produk/juudes.jpeg'),
(4, 'Bakso Masker', 'Makanan', 10000, 'Bakso daging sapi yang enak diselimuti dengan masker telur yang tebal membuat BAKSO BER-MASKER ini jadi endul', 29, 'gambar_produk/masker.jpeg'),
(5, 'Bakso Positif', 'Makanan', 10000, 'Bakso daging sapi yang besar dan didalamnya masih ada bakso kecil yang sama enaknya. Jadi Bakso Positif Hamil nih pasti bikin kenyang banget.', 29, 'gambar_produk/positif.jpeg'),
(6, 'Bakso Swab', 'Makanan', 10000, 'Bakso daging sapi yang didalamnya terkandung keju mozarela yang lumer dan creamy banget. BAKSO SWAB yang nikmat cocok banget dicolab bareng sambel yang nampol', 28, 'gambar_produk/swab.jpeg'),
(7, 'Bakso Corona', 'Makanan', 10000, 'Bakso daging sapi yang dilapisi kriuknya mie, digoreng dan menghasilkan bakso corona yang kriuk diluar dan kenyal didalam\r\n', 30, 'gambar_produk/corona.jpeg'),
(8, 'Es Teh', 'Minuman', 3000, 'Teh dengan aroma khas diolah menjadi minuman yang menyegarkan apa lagi dengan es yang dapat membuat siapapun haus melihatnya.', 30, 'gambar_produk/esteh.jpg'),
(9, 'Es Jeruk', 'minuman', 3000, 'Es jeruk yang memiliki rasa manis dan masam yang berasal dari rasa buah jeruk yang segar dipadukan dengan es yang dapat membuat pelepas haus.', 29, 'gambar_produk/esjeruk.png'),
(10, 'Lemon Tea', 'minuman', 5000, 'Lemon Tea adalah perpaduan rasa dari teh yang dicampur dengan buah lemon sehingga memiliki cita rasa yang khas, minuman masa kini yang sedang mengikuti tren', 30, 'gambar_produk/lemontea.jpg'),
(11, 'Milo Ice', 'minuman', 5000, 'Milo Ice adalah minuman coklat segar yang rasanya yang enak. Coklat juga dapat mengembalikan mood yang buruk loh. siapa nih yang suka moody minum aja Milo Ice.', 30, 'gambar_produk/esmilo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
