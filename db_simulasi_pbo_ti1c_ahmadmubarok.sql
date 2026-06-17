-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2026 at 02:59 AM
-- Server version: 8.0.45
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simulasi_pbo_ti1c_ahmadmubarok`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` decimal(10,2) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(50) DEFAULT NULL,
  `lokasi_kampus` varchar(50) DEFAULT NULL,
  `jenis_prestasi` varchar(50) DEFAULT NULL,
  `tingkat_prestasi` varchar(50) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(50) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Budi Santoso', 'SMA 1 Jakarta', '85.50', '200000.00', 'Reguler', 'Teknik Informatika', 'Jakarta', NULL, NULL, NULL, NULL),
(2, 'Siti Aminah', 'SMA 2 Bandung', '88.00', '200000.00', 'Reguler', 'Sistem Informasi', 'Bandung', NULL, NULL, NULL, NULL),
(3, 'Agus Wijaya', 'SMA 3 Surabaya', '79.50', '200000.00', 'Reguler', 'Teknik Industri', 'Surabaya', NULL, NULL, NULL, NULL),
(4, 'Dewi Lestari', 'SMA 1 Medan', '91.00', '200000.00', 'Reguler', 'Teknik Elektro', 'Medan', NULL, NULL, NULL, NULL),
(5, 'Eko Prasetyo', 'SMA 4 Yogyakarta', '82.00', '200000.00', 'Reguler', 'Sistem Informasi', 'Yogyakarta', NULL, NULL, NULL, NULL),
(6, 'Fajar Hidayat', 'SMA 1 Semarang', '86.50', '200000.00', 'Reguler', 'Teknik Informatika', 'Semarang', NULL, NULL, NULL, NULL),
(7, 'Gita Permata', 'SMA 2 Makassar', '90.00', '200000.00', 'Reguler', 'Teknik Industri', 'Makassar', NULL, NULL, NULL, NULL),
(8, 'Hendra Gunawan', 'SMA 5 Malang', '92.50', '150000.00', 'Prestasi', 'Teknik Informatika', 'Malang', 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(9, 'Indah Sari', 'SMA 1 Bali', '95.00', '150000.00', 'Prestasi', 'Sistem Informasi', 'Bali', 'Lomba Karya Tulis', 'Internasional', NULL, NULL),
(10, 'Joko Anwar', 'SMA 2 Palembang', '89.00', '150000.00', 'Prestasi', 'Teknik Elektro', 'Palembang', 'Kejuaraan Renang', 'Provinsi', NULL, NULL),
(11, 'Kartika Putri', 'SMA 1 Solo', '93.50', '150000.00', 'Prestasi', 'Teknik Industri', 'Solo', 'Olimpiade Fisika', 'Nasional', NULL, NULL),
(12, 'Lutfi Hakim', 'SMA 3 Banjarmasin', '91.50', '150000.00', 'Prestasi', 'Teknik Informatika', 'Banjarmasin', 'Lomba Robotik', 'Nasional', NULL, NULL),
(13, 'Maya Safitri', 'SMA 1 Lampung', '94.00', '150000.00', 'Prestasi', 'Sistem Informasi', 'Lampung', 'Juara Debat', 'Provinsi', NULL, NULL),
(14, 'Nanda Pratama', 'SMA 8 Jakarta', '88.50', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KDN-001', 'Kemenhub'),
(15, 'Oscar Wijaya', 'SMA 1 Padang', '90.50', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KDN-002', 'BSSN'),
(16, 'Putri Cantika', 'SMA 2 Balikpapan', '87.00', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KDN-003', 'BMKG'),
(17, 'Qori Aisyah', 'SMA 1 Manado', '92.00', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KDN-004', 'Kemenkeu'),
(18, 'Rian Hidayat', 'SMA 5 Bandung', '89.50', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KDN-005', 'BPS'),
(19, 'Siska Amelia', 'SMA 2 Pontianak', '91.00', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KDN-006', 'Kemenkumham'),
(20, 'Taufik Ismail', 'SMA 1 Ambon', '86.00', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KDN-007', 'Kemenhub');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
