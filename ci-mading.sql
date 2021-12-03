-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 10:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-mading`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `teks` text NOT NULL,
  `tgl` date NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `teks`, `tgl`, `image`) VALUES
(1, 'SMK Telkom Malang, Sekolah Swasta Favorit & Terbaik Untuk Anak', 'SMK Telkom Malang adalah Sekolah Menengah Kejuruan yang berbasis Teknologi dan Teknologi Informasi di Kabupaten Malang, berlokasi di kawasan Malang Technoplex sejak tahun 2013 SMK Telkom Malang telah terakreditasi dan memiliki standar kualitas ISO.\r\n\r\nBagi Anda yang masih bingung ingin memasukkan anaknya ke sekolah mana setelah lulus dari Sekolah Menengah Pertama, maka sekolah ini bisa menjadi pilihan terbaik, karena memang menjadi salah satu sekolah favorit di Malang untuk kategori SMA sederajat.', '2021-12-03', '1638519429.jpg'),
(2, 'Profil SMK Swasta Telkom Sandhy Putra Malang, Masuk Daftar SMK Terbaik Jatim Versi Nilai UTBK 2020', 'Berikut adalah profil SMK Sandhy Putra Malang yang masuk daftar SMK terbaik di Jawa Timur berdasarkan nilai UTBK 2020. \r\nSMK Sandhy Putra merupakan SMK swasta yang juga sering disebut sebagai SMK Telkom Malang. \r\nSMK Swasta Telkom Sandhy Putra Malang berlokasi di Jl. Danau Ranau No.01, Sawojajar, Kec. Kedungkandang, Kota Malang, Jawa Timur 65139. ', '2021-12-03', '1638519638.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `teks` text NOT NULL,
  `tgl` date NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `teks`, `tgl`, `image`) VALUES
(4, 'Kunjungan Kerja Bapak Erick Thohir di Kandang Sapi Komunal Digital karya Siswa SMK Telkom Malang', 'Sabtu, 27 Nivember 2021 Bapak H. Erick Thohir, B.A, M.B.A, Menteri BUMN beserta Bapak DRS. H. M. Sanusi selaku Bupati Kabupaten Malang dan Bapak Edy Witjara selaku direktur Telkom Indonesia melakukan kunjungan kerja di kandang sapi komunal  digital karya siswa - siswi SMK Telkom Malang. Karya Mokleters ini menerapkan Internet of Thing (IOT) yang secara berkala memantau perkembangan ternak sapi yang ada di Desa Panggungrejo, Gondanglegi, Kab. Malang. Selanjutnya karya Mokleters ini diberi nama TEDI (Ternak Digital) oleh Pak Erick Thohir. ', '2021-12-03', '1638519061.png'),
(5, 'PAT Online, Siswa SMK Telkom Malang Ditantang Integritasnya', 'Siswa SMK Telkom Sandhy Putra Malang sedang melaksanakan PAT (Penilaian Akhir Tahun) secara online sejak Senin (4/5/2020) sampai minggu depan. Mereka menggunakan aplikasi Ujian Online (UOL) Moklet yang diikuti 1022 siswa.\r\n\r\nAplikasi ini dibuat oleh tim guru IT. Ini aplikasi ujian yang menerapkan konsep paperless yang relevan dengan tantangan revolusi industri 4.0 saat ini, jelas Agoes Windarto, Kepala SMK Telkom pada suryamalang.com, Rabu (6/5/2020).\r\n\r\nUntuk itu, sekolah menerbitkan pakta intergitas dan surat pernyataan orang tua yang berisi tiga hal, yaitu kejujuran, kesiapan, dan kesedian siswa beserta orangtua mereka masing-masing. Dikatakan, dengan ujian online, orangtua dituntut untuk bisa jujur, siap, dan bersedia mendampingi dan memantau putra/putrinya di rumah agar tepat waktu dalam mengerjakan soal-soal ujian.\r\n', '2021-12-03', '1638519224.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `teks` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `teks`, `tgl`) VALUES
(1, 'Pengumuman Tentang Hari Sumpah Pemuda', 'Dalam rangka peringatan hari Sumpah Pemuda, akan segera diadakan beberapa kegiatan. Berbagai acara yang akan diadakan mencerminkan ketangguhan pemuda Indonesia dalam menghadapi tantangan zaman. Datang dan juga jadikanlah sejarah dengan mengunjungi Gedung Pemuda pada:', '2021-12-03'),
(2, 'Pengumuman Tentang Hari Kebangkitan Nasional', 'Diberitahukan kepada seluruh siswa Kelas VII untuk dapat hadir pada peringatan hari Kebangkitan nasional pada:\r\n \r\nhari      : Rabu\r\ntanggal : 23 Mei 2007\r\nwaktu    : pukul 8.00 WIB\r\ntempat   : Lapangan Timur Sekolah\r\n\r\nMengingat pentingnya acara tersebut, semua siswa-siswa diharapkan agar hadir tepat pada waktunya. Terimakasih atas perhatian teman-teman sekalian.', '2021-12-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
