-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 10.51
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
-- Database: `bakso_viral`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `ID_CUST` varchar(4) NOT NULL,
  `NAMA_CUSTOMER` varchar(20) DEFAULT NULL,
  `NO_TELEPON` varchar(13) DEFAULT NULL,
  `ALAMAT` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`ID_CUST`, `NAMA_CUSTOMER`, `NO_TELEPON`, `ALAMAT`) VALUES
('C01', 'Radit', '081234567890', 'JL. Kelapa Muda NO. 24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `KD_MENU` varchar(4) NOT NULL,
  `KD_PESANAN` varchar(4) NOT NULL,
  `QYT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_menu`
--

CREATE TABLE `jenis_menu` (
  `KD_JENIS` varchar(4) NOT NULL,
  `JENIS_MENU` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_menu`
--

INSERT INTO `jenis_menu` (`KD_JENIS`, `JENIS_MENU`) VALUES
('J01', 'makanan'),
('J02', 'minuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `KD_MENU` varchar(4) NOT NULL,
  `KD_JENIS` varchar(4) DEFAULT NULL,
  `NAMA_MENU` varchar(20) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`KD_MENU`, `KD_JENIS`, `NAMA_MENU`, `HARGA`) VALUES
('MK01', 'J01', 'Bakso Judes', 8000),
('MK02', 'J01', 'Bakso Telur', 8000),
('MK03', 'J01', 'Bakso Masker', 10000),
('MK04', 'J01', 'Bakso Positif', 10000),
('MK05', 'J01', 'Bakso Corona', 10000),
('MN01', 'J02', 'Es Teh', 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `ID_PEGAWAI` varchar(4) NOT NULL,
  `NAMA_PEGAWAI` varchar(20) DEFAULT NULL,
  `NO_TELEPON` varchar(13) DEFAULT NULL,
  `ALAMAT` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`ID_PEGAWAI`, `NAMA_PEGAWAI`, `NO_TELEPON`, `ALAMAT`) VALUES
('P01', 'Nanda', '083886079678', 'JL. Mawar 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `KD_PESANAN` varchar(4) NOT NULL,
  `ID_PEGAWAI` varchar(4) DEFAULT NULL,
  `ID_CUST` varchar(4) DEFAULT NULL,
  `TGL_ORDER` datetime DEFAULT NULL,
  `TOTAL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_CUST`);

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD KEY `FK_DETAIL2` (`KD_PESANAN`),
  ADD KEY `KD_MENU` (`KD_MENU`),
  ADD KEY `KD_MENU_2` (`KD_MENU`) USING BTREE;

--
-- Indeks untuk tabel `jenis_menu`
--
ALTER TABLE `jenis_menu`
  ADD PRIMARY KEY (`KD_JENIS`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`KD_MENU`),
  ADD KEY `FK_TERDAPAT` (`KD_JENIS`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID_PEGAWAI`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`KD_PESANAN`),
  ADD KEY `FK_MELAKUKAN` (`ID_CUST`),
  ADD KEY `FK_MENERIMA` (`ID_PEGAWAI`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `FK_DETAIL` FOREIGN KEY (`KD_MENU`) REFERENCES `menu` (`KD_MENU`),
  ADD CONSTRAINT `FK_DETAIL2` FOREIGN KEY (`KD_PESANAN`) REFERENCES `pesanan` (`KD_PESANAN`);

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `FK_TERDAPAT` FOREIGN KEY (`KD_JENIS`) REFERENCES `jenis_menu` (`KD_JENIS`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `FK_MELAKUKAN` FOREIGN KEY (`ID_CUST`) REFERENCES `customer` (`ID_CUST`),
  ADD CONSTRAINT `FK_MENERIMA` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
