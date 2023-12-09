-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 01:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(19, 'contohhh', '20231201023638.jpg'),
(23, 'contoh 2', '20231201030138.jpg'),
(29, 'contohhh', '20231201034642.jpg'),
(33, 'Contoh', '20231204065457.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Bahasa Jawa'),
(6, 'Sejarah'),
(13, 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'KOLMAP', 'wde', 'https://www.instagram.com/xlyml__/', '', 'ulyaamelia123@gmail.com', 'Gulunan, Kaliboto, Mojogedang, Karanganyar', '085801389795');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `youtube` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`, `youtube`) VALUES
(29, 'Tradisi Dodol Dawet', 'Dari berbagai jenis sajian khas Jawa, Dawet menjadi salah satu sajian yang sampai sekarang masih bisa ditemukan dengan mudah. Sajian dalam bentuk minuman ini mudah sekali dikenali. Hadir dengan cita rasa yang manis, lengkap dengan isian berupa cendol, menjadikan dawet memiliki tempat tersendiri bagi penikmatnya.\r\n\r\nDawet bisa dengan mudah ditemukan di Jawa.  Penjual dawet biasanya menjajakan dagangannya di sepanjang jalan dengan menggunakan gerobak. Di balik gerobak tersebut, kalian akan menemukan hidangan dengan rasa yang sangat khas. Sangat pas manakala diteguk saat cuaca sedang terik. Bagi orang Jawa, dawet bukan hanya menjadi pelepas dahaga saja. Lebih dari itu, dawet juga menjadi bagian penting dalam ritual pernikahan Jawa.\r\n\r\nDodol dawet. Orang Jawa menyebutnya. Bisa diartikan dengan berjualan dawet. Ritual ini sudah berlangsung bertahun-tahun. Di tempat tinggal saya, dodol dawet masih menjadi salah satu bagian terpenting yang tidak boleh terlewatkan dalam prosesi pernikahan. Unik memang.\r\n\r\nBeberapa masyarakat kerap menantikan prosesi ini. Khususnya anak-anak. Saya termasuk salah satu orang yang menunggu-nunggu ritual ini. Bukan karena gratis, melainkan kesan uniknya yang membuat orang tertarik untuk ikut serta.\r\n\r\nSebelum ritual digelar, pemilik rumah dibantu para tetangga akan menyiapkan dawet lengkap dengan cendol sebagai isiannya. Proses pembuatan dawetnya juga sama seperti membuat dawet pada umumnya.\r\n\r\nYang membedakan hanya jumlah porsinya saja. Lebih banyak. Mengingat minuman ini akan dibagikan kepada para tetangga dan juga tamu yang hadir. Setelah semuanya siap, pemilik hajat segera menjajakan dawetnya di hadapan para tetangga dan juga tamu undangan.\r\n', '20231201134831.jpg', 'Tradisi-Dodol-Dawet', '1', '2023-12-01', 'admin', 'https://youtu.be/eBe7HMk-HFI?si=HKWdmR-S0nt-WhQy'),
(31, 'Proklamasi Kemerdekaan Indonesia ', 'Proklamasi adalah sebuah pernyataan resmi yang mengumumkan atau menyatakan suatu keputusan atau peristiwa penting. Salah satu proklamasi yang sangat terkenal dalam sejarah Indonesia adalah Proklamasi Kemerdekaan Indonesia yang terjadi pada tanggal 17 Agustus 1945. Proklamasi ini merupakan titik awal bagi Indonesia untuk meraih kemerdekaannya dari penjajahan Belanda.\r\n\r\nBerikut adalah kronologi singkat sejarah Proklamasi Kemerdekaan Indonesia:\r\n\r\nJepang Menduduki Indonesia (1942-1945): Selama Perang Dunia II, Jepang menduduki Indonesia setelah berhasil mengalahkan Belanda. Selama pendudukan Jepang, muncul semangat nasionalisme di kalangan masyarakat Indonesia.\r\n\r\nPembentukan PPKI (Panitia Persiapan Kemerdekaan Indonesia): Setelah Jepang menyerah pada bulan Agustus 1945, muncul kesempatan bagi Indonesia untuk menyatakan kemerdekaannya. Sebagai persiapan, dibentuklah Panitia Persiapan Kemerdekaan Indonesia (PPKI) yang terdiri dari pemimpin nasionalis Indonesia.\r\n\r\nSidang PPKI dan Persiapan Proklamasi: Pada tanggal 16 Agustus 1945, PPKI mengadakan sidang di Jakarta untuk membahas kemerdekaan Indonesia. Dalam sidang tersebut, diputuskan untuk menyatakan kemerdekaan pada tanggal 17 Agustus 1945. Sehari sebelumnya, Soekarno dan Mohammad Hatta telah dipilih sebagai Presiden dan Wakil Presiden Indonesia.\r\n\r\nProklamasi Kemerdekaan (17 Agustus 1945): Pada pukul 10 pagi tanggal 17 Agustus 1945, Soekarno dan Hatta menyampaikan proklamasi kemerdekaan di depan rumah Soekarno di Jalan Pegangsaan Timur 56, Jakarta. Proklamasi ini dibacakan oleh Soekarno dan ditandatangani oleh Soekarno, Hatta, dan Dr. Radjiman Wediodiningrat (anggota PPKI). Proklamasi ini menandai berdirinya negara Indonesia yang merdeka.\r\n\r\nPertempuran dan Pengakuan Kemerdekaan: Meskipun proklamasi telah dibacakan, Indonesia masih menghadapi tantangan dari pihak Belanda yang mencoba menguasai kembali wilayah tersebut. Perjuangan fisik dan diplomatis terus berlanjut hingga akhirnya pada tahun 1949, Belanda mengakui kedaulatan Indonesia.\r\n\r\nProklamasi Kemerdekaan Indonesia menjadi tonggak bersejarah yang menandai awal dari perjuangan panjang untuk meraih dan mempertahankan kemerdekaan. Setiap tahun, tanggal 17 Agustus dirayakan sebagai Hari Kemerdekaan Indonesia.', '20231204053253.jpg', 'Proklamasi-Kemerdekaan-Indonesia-', '6', '2023-12-04', 'admin', 'https://youtu.be/7B2RlWt1sNo?si=BANVkpjHfstGtSJw'),
(32, 'Kemerdekaan Indonesia', 'indonesia telah merdeka', '20231204072145.jpg', 'Kemerdekaan-Indonesia', '6', '2023-12-04', 'admin', 'https://youtu.be/zz_q_4-p190?si=S2qCQkfKcSWQh7jb');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(9, 'admin', 'ulyaa', '202cb962ac59075b964b07152d234b70', 'Admin'),
(12, 'gajah', 'Ulya', '202cb962ac59075b964b07152d234b70', 'Kontributor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
