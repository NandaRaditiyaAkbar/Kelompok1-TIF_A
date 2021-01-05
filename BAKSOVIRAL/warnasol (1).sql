-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2021 pada 23.28
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warnasol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kode` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `session` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id_cart`, `tanggal`, `kode`, `nama`, `harga`, `qty`, `jumlah`, `session`) VALUES
('20180206152934', '2018-02-06 15:29:34', '58', 'Oseng Kacan', '6000', '1', '6000', '20170820071826'),
('20201224083816', '2020-12-24 08:38:16', '5', 'Bakso Positif', '10000', '1', '10000', '20201216113137'),
('20201224083829', '2020-12-24 08:38:29', '8', 'Es Teh', '3000', '1', '3000', '20201216113137');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `kd_cus` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`kd_cus`, `nama`, `alamat`, `no_telp`, `username`, `password`, `gambar`) VALUES
('20170820071826', 'hakko', 'hakko', 'hakko', 'hakko', '12345', '../admin/gambar_customer/images.jpg'),
('20180205073805', 'niqoweb', 'niqoweb', 'niqoweb', 'niqoweb', '6414e69bf25357d8d63353f469b35a7416963ab1', ''),
('20201223165913', 'Mita', 'asdff', '1232131', 'mita', '2d10151a363fa2f042c93a06902bb3cea5019452', ''),
('20201225234326', 'Vina', 'Kalisat', '082230071932', 'Vin', 'bda1f7ce004368cbf3b542b02dc078cc7ccbc88c', '../admin/gambar_customer/profil.jpg'),
('20201228184231', 'Bayu ganteng', 'Mojokerjo', '08223445566', 'Bayu', 'fecaf64185bf90d5affe8c60d1915c0d558ebb16', '../admin/gambar_customer/IMG_20201117_173023.jpg'),
('20201230215202', 'asaad', 'asasada', '098765', 'coha', '7f73f1930059f522f6f830e8317e8bd7cb25fce5', ''),
('20201231182210', 'Helmi', 'Pasuruan', '082919131999', 'Hel', '3617b3d66d38049664288366ce2ef9f8b9747883', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_kon` int(6) NOT NULL,
  `nopo` varchar(20) NOT NULL,
  `kd_cus` varchar(20) NOT NULL,
  `bayar_via` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(10) NOT NULL,
  `bukti_transfer` varchar(50) NOT NULL,
  `status` enum('Bayar','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_kon`, `nopo`, `kd_cus`, `bayar_via`, `tanggal`, `jumlah`, `bukti_transfer`, `status`) VALUES
(20, '20180205073805', '20180205073805', '0', '2018-02-05 07:38:37', 26000, '0', 'Belum'),
(22, '20170820071826', '20170820071826', 'Cash On Delivery (CO', '2018-02-05 09:44:53', 21000, '0', 'Belum'),
(23, '20201216113137', '20201216113137', 'Cash On Delivery (COD)', '2020-12-17 08:45:44', 18000, '0', 'Belum'),
(24, '20201223165913', '20201223165913', 'Cash On Delivery (COD)', '2020-12-23 17:00:39', 24000, '0', 'Belum'),
(25, '20201223165913', '20201223165913', 'Cash On Delivery (COD)', '2020-12-23 20:37:06', 5000, '0', 'Belum'),
(26, '20201223165913', '20201223165913', 'Cash On Delivery (COD)', '2020-12-30 21:52:33', 63000, '0', 'Belum'),
(27, '20201223165913', '20201223165913', 'Cash On Delivery (COD)', '2020-12-31 12:13:48', 8000, '0', 'Belum'),
(28, '20201225234326', '20201225234326', 'Cash On Delivery (COD)', '2020-12-31 13:29:13', 19000, '0', 'Belum'),
(29, '20201225234326', '20201225234326', 'Cash On Delivery (COD)', '2020-12-31 18:12:44', 11000, '0', 'Belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `po`
--

CREATE TABLE `po` (
  `nopo` varchar(20) NOT NULL,
  `tanggalkirim` date NOT NULL,
  `status` enum('Proses','Selesai','Terkirim','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `po_terima`
--

CREATE TABLE `po_terima` (
  `id` int(10) NOT NULL,
  `nopo` varchar(20) NOT NULL,
  `kd_cus` varchar(20) NOT NULL,
  `kode` int(4) NOT NULL,
  `tanggal` datetime NOT NULL,
  `qty` int(8) NOT NULL,
  `total` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `po_terima`
--

INSERT INTO `po_terima` (`id`, `nopo`, `kd_cus`, `kode`, `tanggal`, `qty`, `total`) VALUES
(38, '20180205073805', '20180205073805', 17, '2018-02-05 07:38:23', 2, 26000),
(39, '20170820071826', '20170820071826', 57, '2018-02-05 09:44:15', 1, 6000),
(40, '20170820071826', '20170820071826', 54, '2018-02-05 09:44:19', 1, 15000),
(41, '20201216113137', '20201216113137', 59, '2020-12-17 08:44:34', 1, 12000),
(42, '20201216113137', '20201216113137', 58, '2020-12-17 08:44:48', 1, 6000),
(44, '20201223165913', '20201223165913', 59, '2020-12-23 17:00:22', 2, 24000),
(45, '20201223165913', '20201223165913', 60, '2020-12-23 20:36:54', 1, 5000),
(46, '20201223165913', '20201223165913', 2, '2020-12-28 19:05:51', 2, 16000),
(47, '20201223165913', '20201223165913', 6, '2020-12-28 19:06:51', 1, 10000),
(48, '20201223165913', '20201223165913', 2, '2020-12-30 11:55:36', 1, 16000),
(49, '20201223165913', '20201223165913', 8, '2020-12-30 11:55:58', 1, 3000),
(50, '20201223165913', '20201223165913', 7, '2020-12-30 11:56:02', 1, 10000),
(51, '20201223165913', '20201223165913', 2, '2020-12-30 21:52:28', 1, 8000),
(52, '20201223165913', '20201223165913', 2, '2020-12-31 12:13:43', 1, 8000),
(53, '20201225234326', '20201225234326', 1, '2020-12-31 13:29:05', 1, 6000),
(54, '20201225234326', '20201225234326', 2, '2020-12-31 13:29:08', 1, 8000),
(55, '20201225234326', '20201225234326', 3, '2020-12-31 13:29:10', 1, 5000),
(56, '20201225234326', '20201225234326', 2, '2020-12-31 18:11:43', 1, 8000),
(57, '20201225234326', '20201225234326', 9, '2020-12-31 18:11:47', 1, 3000);

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
(1, 'Bakso Alus', 'Makanan', 6000, 'Bakso daging sapi yang memiliki tekstur permukaan yang halus dan tekstur yang lembut terdapat berbagai ukuran yang dapat membuat orang ketagihan', 22, 'gambar_produk/alus.jpg'),
(2, 'Bakso Telur', 'Makanan', 8000, 'Bakso daging sapi yang gurih dan nikmat berkolaborasi dengan telur didalamnya yang membuat rasanya semakin luar biasa enak\r\n', 23, 'gambar_produk/telur.jpeg'),
(3, 'Bakso Judes', 'Makanan', 5000, 'Bakso daging sapi yang nikmat dipadukan dengan potongan cabai yang membuat merem melek karena rasa hotnya yang ga nahan\r\n', 28, 'gambar_produk/juudes.jpeg'),
(4, 'Bakso Masker', 'Makanan', 10000, 'Bakso daging sapi yang enak diselimuti dengan masker telur yang tebal membuat BAKSO BER-MASKER ini jadi endul', 29, 'gambar_produk/masker.jpeg'),
(5, 'Bakso Positif', 'Makanan', 10000, 'Bakso daging sapi yang besar dan didalamnya masih ada bakso kecil yang sama enaknya. Jadi Bakso Positif Hamil nih pasti bikin kenyang banget.', 28, 'gambar_produk/positif.jpeg'),
(6, 'Bakso Swab', 'Makanan', 10000, 'Bakso daging sapi yang didalamnya terkandung keju mozarela yang lumer dan creamy banget. BAKSO SWAB yang nikmat cocok banget dicolab bareng sambel yang nampol', 27, 'gambar_produk/swab.jpeg'),
(7, 'Bakso Corona', 'Makanan', 10000, 'Bakso daging sapi yang dilapisi kriuknya mie, digoreng dan menghasilkan bakso corona yang kriuk diluar dan kenyal didalam\r\n', 29, 'gambar_produk/corona.jpeg'),
(8, 'Es Teh', 'Minuman', 3000, 'Teh dengan aroma khas diolah menjadi minuman yang menyegarkan apa lagi dengan es yang dapat membuat siapapun haus melihatnya.', 28, 'gambar_produk/esteh.jpg'),
(9, 'Es Jeruk', 'minuman', 3000, 'Es jeruk yang memiliki rasa manis dan masam yang berasal dari rasa buah jeruk yang segar dipadukan dengan es yang dapat membuat pelepas haus.', 28, 'gambar_produk/esjeruk.png'),
(10, 'Lemon Tea', 'minuman', 5000, 'Lemon Tea adalah perpaduan rasa dari teh yang dicampur dengan buah lemon sehingga memiliki cita rasa yang khas, minuman masa kini yang sedang mengikuti tren', 30, 'gambar_produk/lemontea.jpg'),
(11, 'Milo Ice', 'minuman', 5000, 'Milo Ice adalah minuman coklat segar yang rasanya yang enak. Coklat juga dapat mengembalikan mood yang buruk loh. siapa nih yang suka moody minum aja Milo Ice.', 30, 'gambar_produk/esmilo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_po_terima`
--

CREATE TABLE `tmp_po_terima` (
  `id` int(10) NOT NULL,
  `nopo` varchar(10) NOT NULL,
  `kd_cus` varchar(10) NOT NULL,
  `kode` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `qty` int(8) NOT NULL,
  `total` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`, `gambar`) VALUES
(1, 'user', 'user', 'Hakko Bio Richard', 'gambar_admin/hakkoblogs.jpg'),
(2, 'didin', 'didin123', 'didin mubarok', ''),
(3, 'radit', 'radit', 'Raditya', 'gambar_admin/a.jpg'),
(4, 'asdf', 'asdf', 'LIGA', 'gambar_admin/fb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kd_cus`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_kon`);

--
-- Indeks untuk tabel `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`nopo`);

--
-- Indeks untuk tabel `po_terima`
--
ALTER TABLE `po_terima`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tmp_po_terima`
--
ALTER TABLE `tmp_po_terima`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_kon` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `po_terima`
--
ALTER TABLE `po_terima`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tmp_po_terima`
--
ALTER TABLE `tmp_po_terima`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
