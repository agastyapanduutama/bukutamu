-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 09, 2020 at 05:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `individu`
--

CREATE TABLE `individu` (
  `id_individu` int(11) NOT NULL,
  `no_kunjungan` varchar(20) NOT NULL,
  `status_keanggotaan` tinyint(1) NOT NULL,
  `nama_pengunjung` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(11) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `alamat_instansi` text NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `tanggal_kunjungan` timestamp NOT NULL DEFAULT current_timestamp(),
  `jenis_layanan` varchar(100) NOT NULL,
  `sub_lokasi` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL DEFAULT current_timestamp(),
  `no_telp_indi` varchar(30) DEFAULT NULL,
  `email_indi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individu`
--

INSERT INTO `individu` (`id_individu`, `no_kunjungan`, `status_keanggotaan`, `nama_pengunjung`, `alamat`, `pekerjaan`, `pendidikan_terakhir`, `instansi`, `alamat_instansi`, `jenis_kelamin`, `wilayah`, `tanggal_kunjungan`, `jenis_layanan`, `sub_lokasi`, `tanggal_input`, `no_telp_indi`, `email_indi`) VALUES
(1, 'INDV0809200001', 0, 'pandu', 'Cibiru', 'Mahasiswa', 'SMA', 'STMIK Bandung', 'Cikutra', 1, '2', '2020-09-08 09:45:35', 'Layanan CO-Working Space', '14', '2020-09-08', '123123', 'emal');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_buku_tamu`
--

CREATE TABLE `lokasi_buku_tamu` (
  `id_lokasi` int(11) NOT NULL,
  `kepustakaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi_buku_tamu`
--

INSERT INTO `lokasi_buku_tamu` (`id_lokasi`, `kepustakaan`) VALUES
(1, 'Kepustakaan Kawasan Bandung'),
(2, 'Kepustakaan Kawasan Jakarta'),
(3, 'Kepustakaan Kawasan Cibinong'),
(4, 'Kepustakaan Kawasan Bogor'),
(5, 'Kepustakaan Kawasan Serpong');

-- --------------------------------------------------------

--
-- Table structure for table `rombongan`
--

CREATE TABLE `rombongan` (
  `id_rombongan` int(11) NOT NULL,
  `nama_ketua` varchar(50) NOT NULL,
  `nomor_ketua` varchar(25) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `alamat_instansi` text NOT NULL,
  `nomor_instansi` varchar(25) NOT NULL,
  `email_instansi` varchar(30) NOT NULL,
  `jumlah_personil_instansi` int(11) NOT NULL,
  `pria` int(11) NOT NULL,
  `wanita` int(11) NOT NULL,
  `pns` int(11) DEFAULT NULL,
  `swasta` int(11) DEFAULT NULL,
  `peneliti` int(11) DEFAULT NULL,
  `guru` int(11) DEFAULT NULL,
  `dosen` int(11) DEFAULT NULL,
  `pensiunan` int(11) DEFAULT NULL,
  `tni` int(11) DEFAULT NULL,
  `wiraswasta` int(11) DEFAULT NULL,
  `pelajar` int(11) DEFAULT NULL,
  `mahasiswa` int(11) DEFAULT NULL,
  `lainnya` int(11) DEFAULT NULL,
  `sd` int(11) DEFAULT NULL,
  `smp` int(11) DEFAULT NULL,
  `sma` int(11) DEFAULT NULL,
  `d1` int(11) DEFAULT NULL,
  `d2` int(11) DEFAULT NULL,
  `d3` int(11) DEFAULT NULL,
  `s1` int(11) DEFAULT NULL,
  `s2` int(11) DEFAULT NULL,
  `s3` int(11) DEFAULT NULL,
  `wilayah` int(11) NOT NULL,
  `tanggal_kunjungan` timestamp NOT NULL DEFAULT current_timestamp(),
  `jenis_layanan` varchar(100) NOT NULL,
  `no_kunjungan` varchar(20) NOT NULL,
  `sub_lokasi` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL DEFAULT current_timestamp(),
  `no_telp` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rombongan`
--

INSERT INTO `rombongan` (`id_rombongan`, `nama_ketua`, `nomor_ketua`, `nama_instansi`, `alamat_instansi`, `nomor_instansi`, `email_instansi`, `jumlah_personil_instansi`, `pria`, `wanita`, `pns`, `swasta`, `peneliti`, `guru`, `dosen`, `pensiunan`, `tni`, `wiraswasta`, `pelajar`, `mahasiswa`, `lainnya`, `sd`, `smp`, `sma`, `d1`, `d2`, `d3`, `s1`, `s2`, `s3`, `wilayah`, `tanggal_kunjungan`, `jenis_layanan`, `no_kunjungan`, `sub_lokasi`, `tanggal_input`, `no_telp`, `email`) VALUES
(1, 'Pandu', '21312', 'STMIK Bandung', 'Cikutra', '000', 'agastypandu@gmail.com', 10, 10, 10, 8, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 10, 0, 0, 1, '2020-09-09 02:35:53', 'Layanan Data Ilmiah - Pendampingan RIN', 'RMBG0909200002', '', '2020-09-09', '1231239', 'awdjkabwdaw');

-- --------------------------------------------------------

--
-- Table structure for table `sub_lokasi`
--

CREATE TABLE `sub_lokasi` (
  `id_sub_lokasi` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `nama_sub_lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_lokasi`
--

INSERT INTO `sub_lokasi` (`id_sub_lokasi`, `id_lokasi`, `nama_sub_lokasi`) VALUES
(1, 3, 'Zoologi'),
(2, 3, 'Bootani'),
(3, 3, 'Bioteknologi'),
(4, 3, 'Limnologi'),
(5, 3, 'Biomaterial'),
(11, 3, ''),
(12, 2, ''),
(13, 10, 'IPSK'),
(14, 2, 'Oseanografi'),
(15, 2, 'PDDI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `lokasi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `level`, `lokasi`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'PDDI LIPI', '2', ''),
(3, 'helloworld', 'c20c45fd9cdc571d06f801c5b01548c55b30506a', 'Administrator Utama', '3', ''),
(4, 'bandung', 'c6b40899ed3bb40608b798305216bdf9eefdc29c', 'Kepustakaan Kawasan Bandung', '1', 'bandung'),
(8, 'bandung2', 'e79cb96e8d51ac64d32ce30f0664757b84557ae6', 'Kepustakaan Kawasan bandung 2', '1', NULL),
(9, 'jakarta', '632a86021c4b0c02a6bb86b2194417c586054b3e', 'Kepustakaan Kawasan Jakarta', '1', NULL),
(10, 'serpong', '809fcdc4c8215bb730183d91576f1f47057673dd', 'Kepustakaan Kawasan Serpong', '1', NULL),
(11, 'bogor', '6e84b91a756d83b0c16e8b1797bbd29e1babb53d', 'Kepustakaan Kawasan Bogor', '1', NULL),
(12, 'cibinong', 'bc065b819c0f67172db92d3f09225385b5096e5c', 'Kepustakaan Kawasan Cibinong', '1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `individu`
--
ALTER TABLE `individu`
  ADD PRIMARY KEY (`id_individu`);

--
-- Indexes for table `lokasi_buku_tamu`
--
ALTER TABLE `lokasi_buku_tamu`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `rombongan`
--
ALTER TABLE `rombongan`
  ADD PRIMARY KEY (`id_rombongan`);

--
-- Indexes for table `sub_lokasi`
--
ALTER TABLE `sub_lokasi`
  ADD PRIMARY KEY (`id_sub_lokasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `individu`
--
ALTER TABLE `individu`
  MODIFY `id_individu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lokasi_buku_tamu`
--
ALTER TABLE `lokasi_buku_tamu`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rombongan`
--
ALTER TABLE `rombongan`
  MODIFY `id_rombongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_lokasi`
--
ALTER TABLE `sub_lokasi`
  MODIFY `id_sub_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
