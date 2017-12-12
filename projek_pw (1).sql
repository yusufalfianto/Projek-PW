-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 05:11 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_shooting`
--

CREATE TABLE `alat_shooting` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesifikasi` text NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alat_shooting`
--

INSERT INTO `alat_shooting` (`id`, `nama`, `spesifikasi`, `id_kategori`) VALUES
(1, 'DJI Ronin-M', 'Ronin-M adalah 3-axis camera stabilization gimbal yang mampu mengangkut atau memboyong berbagai jenis kamera profesional demi mengoptimalkan hasil gambar yang lebih smooth, stabil, membuat pengambil gambar atau video bergerak lebih leluasa. Berbeda dengan Ronin versi reguler, Ronin-M memiliki keunggulan dari segi berat yang lebih ringan, bentuk yang lebih praktis, sehingga semakin memudahkan pengambilan gambar atau video di lokasi yang memiliki keterbatasan ruang. Produk ini didedikasikan untuk para creator dan seniman yang menginginkan kestabilan kelas dunia yang ditawarkan DJI dalam bentuk yang lebih praktis dan ringan.\r\n', 3),
(2, 'Nikkon D7200', 'Nikon D7200 menggunakan sensor buatan Sony yang dipakai di D5300 dan banyak dipuji karena kualitas gambar yang dihasilkannya. Chip prosesor D7200 juga akan mengandalkan EXPEED 4 yang diklaim 30% lebih cepat dibandingkan D7100. Rentang ISO yang bisa dipakai adalah 100 sampai 25600. Buffer di D7200 juga mampu menampung 18 file RAW 14-bit atau 27 file RAW 12-bit (compress) atau 100 foto JPEG sekaligus. Buffer yang besar ini akan sangat berguna dalam memotret satwa atau olahraga, mengingat D7200 mampu memotret 6 foto per detik.\r\n', 1),
(3, 'Canon 5D', '\"EOS 5D Mark III menampilkan fitur sistem Fokus Otomatis (AF) generasi berikutnya yang mendukung 61 titik AF retikuler kepadatan tinggi (41 titik tipe silang) yang menawarkan cakupan fokus otomatis yang lebar pada presisi tinggi serta kemampuan pelacakan subjek yang ditingkatkan. Juga menawarkan AF area luas beberapa zona untuk pelacakan yang lebih baik, memiliki 5 titik tengah tipe silang ganda (f/2.8 diagonal), 21 titik tengah tipe silang (f/5.6 horizontal & vertikal) dan 20 titik luar tipe silang (f/4.0 horizontal) serta sensitif dalam situasi cahaya redup (EV-2 untuk titik tengah dengan lensa f/2.8).\r\n\"\r\n', 1),
(4, 'The VideoMic GO', 'The VideoMic GO di Depan Kamera Shotgun Microphone dari Rode adalah mikrofon ringan yang menambahkan rekaman audio berkualitas tinggi untuk camcorder dan DSLR kamera kecil Anda. Memiliki berat hanya 2,6 ons, mikrofon sangat ringan, sehingga ideal untuk pemotretan genggam. Ini terintegrasi dengan fitur Rycote Lyre shock mount untuk isolasi dari gundukan dan getaran, dan menawarkan operasi bebas baterai, menggunakan kekuatan plug-in dari 3.5mm input mikrofon kamera Anda. Harap dicatat bahwa mikrofon tidak akan bekerja dengan kamera yang tidak menyediakan plug-in listrik ke jack input audio 3.5mm mereka (contoh: Nikon D7000).\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `isi` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `katagori`
--

CREATE TABLE `katagori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `katagori`
--

INSERT INTO `katagori` (`id`, `nama`) VALUES
(1, 'Kamera'),
(2, 'Audio'),
(3, 'Perlengkapan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_shooting`
--
ALTER TABLE `alat_shooting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_alat_shooting` (`id_kategori`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katagori`
--
ALTER TABLE `katagori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_shooting`
--
ALTER TABLE `alat_shooting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `katagori`
--
ALTER TABLE `katagori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alat_shooting`
--
ALTER TABLE `alat_shooting`
  ADD CONSTRAINT `fk_alat_shooting` FOREIGN KEY (`id_kategori`) REFERENCES `katagori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
