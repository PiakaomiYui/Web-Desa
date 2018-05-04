-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2018 pada 13.15
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_desa`
--

CREATE TABLE `artikel_desa` (
  `id` int(200) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `pembuat` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` varchar(20000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel_desa`
--

INSERT INTO `artikel_desa` (`id`, `judul`, `tanggal`, `pembuat`, `gambar`, `isi`) VALUES
(12, 'Desa Parakancanggah', '2018-04-28 06:51:05', 'Wasi Aspirawan', 'no_image.jpg', 'Desa Parakancanggah adalah salah satu wilayah kelurahan yang ada di Kecamatan Banjarnegara, dimana pada jaman pemerintahan Belanda, ditunjuk yang memangku jabatan kepala Desa adalah KH. Hamzah melalui beslite (SK penunjukan) Pemerintahan di zaman Belanda.\r\n\r\nMakna PARAKAN antara lain ditemukan adalah tempat yang banyak ikannya dimana banyak orang mencari ikan (parak iwak) sebagai mata pencaharian saat itu. Ada juga makam Alm. Mbah Canggah di sebelah utara makam JAGABELA. Saat sekarang dengan berjalannya waktu, wilayah Kelurahan Parakancanggah telah berkembang menjadi 11 RW dan 42 RT, dengan penduduk yang multi etnis, bermacam suku, beragam agama dan bermacam mata pencaharian dan profesinya.\r\n\r\nWilayah Parakancanggah sebelah selatan berbatasan dengan Desa Ampelsari, wilayah barat kelurahan Semarang dan Krandegan, wilayah utara adalah kelurahan Kenteng, dan sebelah timur berbatasan dengan Sokanandi. Wilayah ujung selatan dikenal sebagai Dusun Sayer (Sayah Ngayer-Ngayer) yang mempunyai makna menunggu lama, wilayah selatan bagian timur dikenal dengan sebutan Kalisemi, kalinya bersemi dan berkembang, mampu mengaliri tanaman palawijaya, dan buah-buahan. Wilayah utara sebelah barat adalah TRETEK yang berbatasan dengan kelurahan Krandegan, sebelah timurnya dikenal dengan Dusun Larangan yang sebelah utaranya ada Makam Makmur dan Makam Jagabela.'),
(13, 'Peresmian Web Desa Parakancanggah', '2018-04-28 06:52:41', 'Wasi Aspirawan', 'no_image.jpg', 'Web ini diresmikan tanggal dd/mm/yyyy oleh Wasi Aspirawan selaku Developer Web ini dan Bapak Kepala Desa selaku Kepala Desa.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_admin`
--

CREATE TABLE `pesan_admin` (
  `id` bigint(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `isi` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan_admin`
--

INSERT INTO `pesan_admin` (`id`, `judul`, `pengirim`, `tanggal`, `isi`) VALUES
(5, 'Jalan Di Sekitar Daerah X Sering Tergenang Air', 'Piakaomi Yui', '2018-04-28 06:56:50', 'Jalan disekitar daerah x sering tergenang air hujan, sehingga menyebabkan jalan tersebut licin dan seringkali ada pengendara motor yang terpeleset saat berbelok di jalan tersebut. Solusi yang saya sarankan yaitu membuat saluran air di sekitar daerah tersebut.\r\n\r\nSemoga pesan saya membantu perkembangan desa ini, Terima Kasih.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_desa`
--

CREATE TABLE `user_desa` (
  `id` bigint(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_desa`
--

INSERT INTO `user_desa` (`id`, `nama`, `email`, `password`, `jabatan`) VALUES
(1, 'Wasi Aspirawan', 'piakaomiyui24@gmail.com', 'piakaomiyui24', 'Admin'),
(8, 'Piakaomi Yui', 'blackneko@gmail.com', 'bnco', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel_desa`
--
ALTER TABLE `artikel_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan_admin`
--
ALTER TABLE `pesan_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_desa`
--
ALTER TABLE `user_desa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel_desa`
--
ALTER TABLE `artikel_desa`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pesan_admin`
--
ALTER TABLE `pesan_admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_desa`
--
ALTER TABLE `user_desa`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
