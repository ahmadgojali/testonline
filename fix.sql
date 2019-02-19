-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2019 at 03:11 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tesonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Ali', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_tes1`
--

CREATE TABLE IF NOT EXISTS `jawaban_tes1` (
  `no` int(11) NOT NULL auto_increment,
  `id_user` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `jawaban_tes1`
--

INSERT INTO `jawaban_tes1` (`no`, `id_user`, `id_soal`, `jawaban`) VALUES
(1, 1, 1, '1'),
(2, 1, 2, '3'),
(3, 1, 3, '4'),
(4, 1, 4, ''),
(5, 1, 5, ''),
(6, 1, 6, ''),
(7, 1, 7, ''),
(8, 1, 8, ''),
(9, 1, 9, ''),
(10, 1, 10, ''),
(11, 1, 11, ''),
(12, 1, 12, ''),
(13, 1, 13, ''),
(14, 1, 14, ''),
(15, 1, 15, ''),
(16, 1, 16, ''),
(17, 1, 17, ''),
(18, 1, 18, ''),
(19, 1, 19, ''),
(20, 1, 20, ''),
(21, 1, 21, ''),
(22, 8, 1, '67'),
(23, 8, 2, '8'),
(24, 8, 3, '1/6'),
(25, 8, 4, '1/6'),
(26, 8, 5, '5/6'),
(27, 8, 6, '3/2'),
(28, 8, 7, '6'),
(29, 8, 8, '5'),
(30, 8, 9, '30000'),
(31, 8, 10, '285'),
(32, 8, 11, '0'),
(33, 8, 12, ''),
(34, 8, 13, '35000'),
(35, 8, 14, '80'),
(36, 8, 15, ''),
(37, 8, 16, ''),
(38, 8, 17, ''),
(39, 8, 18, ''),
(40, 8, 19, ''),
(41, 8, 20, '1500'),
(42, 8, 21, '');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_tes2`
--

CREATE TABLE IF NOT EXISTS `jawaban_tes2` (
  `no` int(11) NOT NULL auto_increment,
  `id_user` varchar(255) NOT NULL,
  `id_soal` varchar(255) NOT NULL,
  `jawaban` varchar(255) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `jawaban_tes2`
--

INSERT INTO `jawaban_tes2` (`no`, `id_user`, `id_soal`, `jawaban`) VALUES
(1, '1', '1', 'B'),
(2, '1', '2', 'C'),
(3, '1', '3', 'D'),
(4, '1', '4', 'D'),
(5, '1', '5', 'B'),
(6, '1', '6', ''),
(7, '1', '7', ''),
(8, '1', '8', ''),
(9, '1', '9', ''),
(10, '1', '10', ''),
(11, '1', '11', ''),
(12, '1', '12', ''),
(13, '1', '13', ''),
(14, '1', '14', ''),
(15, '1', '15', ''),
(16, '1', '16', ''),
(17, '1', '17', ''),
(18, '1', '18', ''),
(19, '1', '19', ''),
(20, '1', '20', ''),
(21, '1', '21', ''),
(22, '1', '22', ''),
(23, '1', '23', ''),
(24, '1', '24', ''),
(25, '1', '25', ''),
(26, '1', '26', ''),
(27, '1', '27', ''),
(28, '1', '28', ''),
(29, '1', '29', ''),
(30, '1', '30', ''),
(31, '1', '31', ''),
(32, '1', '32', ''),
(33, '1', '33', ''),
(34, '1', '34', ''),
(35, '1', '35', ''),
(36, '1', '36', ''),
(37, '1', '37', ''),
(38, '1', '38', ''),
(39, '1', '39', ''),
(40, '1', '40', ''),
(41, '1', '41', ''),
(42, '1', '42', ''),
(43, '1', '43', ''),
(44, '1', '44', ''),
(45, '1', '45', ''),
(46, '8', '1', 'A'),
(47, '8', '2', 'C'),
(48, '8', '3', 'B'),
(49, '8', '4', 'D'),
(50, '8', '5', 'B'),
(51, '8', '6', 'D'),
(52, '8', '7', 'B'),
(53, '8', '8', 'B'),
(54, '8', '9', 'B'),
(55, '8', '10', 'A'),
(56, '8', '11', 'A'),
(57, '8', '12', 'A'),
(58, '8', '13', 'B'),
(59, '8', '14', 'A'),
(60, '8', '15', 'D'),
(61, '8', '16', 'C'),
(62, '8', '17', 'B'),
(63, '8', '18', 'A'),
(64, '8', '19', 'C'),
(65, '8', '20', 'C'),
(66, '8', '21', 'C'),
(67, '8', '22', 'D'),
(68, '8', '23', 'D'),
(69, '8', '24', 'C'),
(70, '8', '25', 'D'),
(71, '8', '26', 'C'),
(72, '8', '27', 'D'),
(73, '8', '28', 'D'),
(74, '8', '29', 'A'),
(75, '8', '30', 'C'),
(76, '8', '31', 'B'),
(77, '8', '32', 'C'),
(78, '8', '33', 'C'),
(79, '8', '34', 'D'),
(80, '8', '35', 'D'),
(81, '8', '36', 'A'),
(82, '8', '37', 'C'),
(83, '8', '38', 'B'),
(84, '8', '39', 'C'),
(85, '8', '40', 'A'),
(86, '8', '41', 'C'),
(87, '8', '42', 'B'),
(88, '8', '43', 'C'),
(89, '8', '44', 'D'),
(90, '8', '45', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_tes3`
--

CREATE TABLE IF NOT EXISTS `jawaban_tes3` (
  `no` int(11) NOT NULL auto_increment,
  `id_user` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban1` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `jawaban2` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `jawaban_tes3`
--

INSERT INTO `jawaban_tes3` (`no`, `id_user`, `id_soal`, `jawaban1`, `jawaban2`) VALUES
(1, 1, 1, '', ''),
(2, 1, 2, '', ''),
(3, 1, 3, '', ''),
(4, 1, 4, '', ''),
(5, 1, 5, '', ''),
(6, 1, 6, '', ''),
(7, 1, 7, '', ''),
(8, 1, 8, '', ''),
(9, 1, 9, '', ''),
(10, 1, 10, '', ''),
(11, 1, 11, '', ''),
(12, 1, 12, '', ''),
(13, 1, 13, '', ''),
(14, 1, 14, '', ''),
(15, 1, 15, '', ''),
(16, 1, 16, '', ''),
(17, 1, 17, '', ''),
(18, 1, 18, '', ''),
(19, 1, 19, '', ''),
(20, 1, 20, '', ''),
(21, 1, 21, '', ''),
(22, 1, 22, '', ''),
(23, 1, 23, '', ''),
(24, 1, 24, '', ''),
(25, 1, 25, '', ''),
(26, 8, 1, '8', '9'),
(27, 8, 2, '32', '34'),
(28, 8, 3, '13', '10'),
(29, 8, 4, '368', '736'),
(30, 8, 5, '13', '18'),
(31, 8, 6, '50', '61'),
(32, 8, 7, '14', '23'),
(33, 8, 8, '1', '0.5'),
(34, 8, 9, '6', '-8'),
(35, 8, 10, '1828', '1833'),
(36, 8, 11, '1600', '3200'),
(37, 8, 12, '30', '27'),
(38, 8, 13, '95.25', '47.625'),
(39, 8, 14, '60', '4'),
(40, 8, 15, '35', '9'),
(41, 8, 16, '43', '33'),
(42, 8, 17, '24', '13'),
(43, 8, 18, '10', '0.01'),
(44, 8, 19, '40', '160'),
(45, 8, 20, '4', '2'),
(46, 8, 21, '', ''),
(47, 8, 22, '', ''),
(48, 8, 23, '', ''),
(49, 8, 24, '', ''),
(50, 8, 25, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_tes4`
--

CREATE TABLE IF NOT EXISTS `jawaban_tes4` (
  `no` int(11) NOT NULL auto_increment,
  `id_user` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `jawaban_tes4`
--

INSERT INTO `jawaban_tes4` (`no`, `id_user`, `id_soal`, `jawaban`) VALUES
(1, 1, 1, 'C'),
(2, 1, 2, 'A'),
(3, 1, 3, 'A'),
(4, 1, 4, 'A'),
(5, 1, 5, 'C'),
(6, 1, 6, 'A'),
(7, 1, 7, 'D'),
(8, 1, 8, 'D'),
(9, 1, 9, 'D'),
(10, 1, 10, 'A'),
(11, 8, 1, 'E'),
(12, 8, 2, 'C'),
(13, 8, 3, 'A'),
(14, 8, 4, 'A'),
(15, 8, 5, 'C'),
(16, 8, 6, 'E'),
(17, 8, 7, 'A'),
(18, 8, 8, 'B'),
(19, 8, 9, 'A'),
(20, 8, 10, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_tes5`
--

CREATE TABLE IF NOT EXISTS `jawaban_tes5` (
  `no` int(11) NOT NULL auto_increment,
  `id_user` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `jawaban_tes5`
--

INSERT INTO `jawaban_tes5` (`no`, `id_user`, `id_soal`, `jawaban`) VALUES
(1, 1, 1, 'B'),
(2, 1, 2, 'B'),
(3, 1, 3, 'D'),
(4, 1, 4, 'A'),
(5, 1, 5, 'B'),
(6, 1, 6, 'A'),
(7, 8, 1, 'D'),
(8, 8, 2, 'C'),
(9, 8, 3, 'A'),
(10, 8, 4, 'C'),
(11, 8, 5, 'B'),
(12, 8, 6, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_benar`
--

CREATE TABLE IF NOT EXISTS `jumlah_benar` (
  `no` int(11) NOT NULL auto_increment,
  `id_user` int(11) NOT NULL,
  `tes1` varchar(255) NOT NULL,
  `tes2` varchar(255) NOT NULL,
  `tes3` varchar(255) NOT NULL,
  `tes4` varchar(255) NOT NULL,
  `tes5` varchar(255) NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `jumlah_benar`
--


-- --------------------------------------------------------

--
-- Table structure for table `soal1`
--

CREATE TABLE IF NOT EXISTS `soal1` (
  `id` int(11) NOT NULL auto_increment,
  `soal` text collate utf8_unicode_ci NOT NULL,
  `kunci_jawaban` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `soal1`
--

INSERT INTO `soal1` (`id`, `soal`, `kunci_jawaban`) VALUES
(1, 'Berapakah jumlah 59 dan 8 pulpen?', '67'),
(2, 'Berapa jam waktu yang dibutuhkan oleh sebuah mobil yang melaju 60 km per jam untuk menempuh jarak 480 km?', '8'),
(3, '1/2 &times; 1/3 =', '1/6'),
(4, '1/2 - 1/3 =', '1/6'),
(5, '1/2 + 1/3 =', '5/6'),
(6, '1/2 &divide; 1/3=', '3/2 / 1 1/2  '),
(7, 'Jika sebuah bola ditendang 9 meter ke utara dan kemudian ditendang kembali 3 meter keselatan, berapa jarak bola tersebut dari titik awal?', '6'),
(8, 'Jika 3 buah pulpen harganya Rp. 120,-, berapa pulpen yang dapat dibeli dengan uang Rp. 600,-?', '15'),
(9, 'Berapa banyak upah yang diperoleh dalam waktu 3 jam, apabila dalam waktu 30 menit diperoleh upah Rp. 5.000,-?', '30.000'),
(10, 'Shinta mempunyai 250 pulpen. Ia memberikan 65 pulpen kepada Andi. Kemudian Shinta mendapatkan 100 pulpen lagi dari Ibu. Berapa pulpen Shinta sekarang?', '285'),
(11, '5&#179;+5&#179;+5&#179;+5&#179;+5&#179; =', '625'),
(12, '(2t+3)/(5t-2)= 4. Berapakah nilai t?', '11/18'),
(13, 'Andi membeli enam buah permen dengan harga Rp. 150,-sebuah dan tiga kilogram beras dengan harga Rp. 15.000,- per kilogram. Berapa uang kembalian yang diterima Andi bila ia membayar dengan uang Rp. 50.000,-?', '4.100'),
(14, 'Lima orang membuat ayunan dengan waktu 8 hari. Berapa orang yang dibutuhkan untuk menyelesaikan ayunan tersebut dalam waktu setengah hari?', '80'),
(15, '1/(x+3)  +  1/(3-x)= ', '6/(〖-X〗^2+9)/ -(-6)/(X^2-9)'),
(16, '&#8730;25+&#179;&#8730;64 &times;^4&#8730;725 =', '25'),
(17, '(33 1/3%) &times; (0,125 + 0,043 + 0.021) &times; 0 =', '0'),
(18, 'Delapan setengah kilogram emas harganya Rp. 1.700,-. Berapa harga tiga setengah kilogram emas tersebut?', '700'),
(19, '2x+y-12=0 ; 3x-y-13=0. Berapakah nilai +y ?', '7'),
(20, 'Pada tes masuk universitas A terdapat 1380 calon mahasiswa yang memenuhi syarat untuk masuk universitas tersebut. Delapan persen tidak memenuhi syarat. Berapa orang calon mahasiswa yang hadir dalam tes masuk universitas tersebut?', '1500'),
(21, '(Bobot nilai untuk soal dibawah ini 5X lebih besar dari soal lainnya).\r\nJarak Jakarta-Batu 350 km. Jika Budi berangkat dari Jakarta ke Batu pukul 06.00 pagi dengan mobil kecepatannya 60 km/jam. Pada waktu dan rute yang sama Andi berangkat dari Batu menuju Jakarta dengan mengendarai mobil yang kecepatannya 80 km/jam. Pada jarak berapa dari Jakarta keduanya berpapasan?', '150');

-- --------------------------------------------------------

--
-- Table structure for table `soal2`
--

CREATE TABLE IF NOT EXISTS `soal2` (
  `id` int(11) NOT NULL auto_increment,
  `soal` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_a` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_b` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_c` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_d` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `kunci_jawaban` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `soal2`
--

INSERT INTO `soal2` (`id`, `soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `kunci_jawaban`) VALUES
(1, 'Hidung : Nafas = Kaki : ', 'Berjalan', 'Mendengar', 'Mengecap', 'Merasa', 'A'),
(2, 'Aquarium : Ikan = Sangkar :', 'Singa', 'Anjing', 'Burung', 'Kucing', 'C'),
(3, 'Sepatu : Sol = Helm :', 'Karton', 'Busa', 'Besi', 'Alumunium', 'B'),
(4, 'Rajin : Berhasil = Malas : ', 'Kaya', 'Sukses', 'Berkembang', 'Gagal', 'D'),
(5, 'Es : Cair = Air :', 'Membeku', 'Menguap', 'Menyublin', 'Membakar', 'B'),
(6, 'Pohon : Hijau = Tanah :', 'Merah', 'Biru', 'Abu-abu', 'Coklat', 'D'),
(7, 'Staff : Supervisor = Supervisor : ', 'Anak Magang', 'Manager ', 'Vice President ', 'CFO', 'B'),
(8, 'Telfon : Nomor = Surat : ', 'Email', 'Alamat', 'Surel', 'Tautan', 'B'),
(9, 'Meteran : Panjang = Jam Tangan :', 'Tanggal', 'Waktu', 'Tahun', 'Bulan', 'B'),
(10, 'Kepala : Rambut = Jari :', 'Kuku ', 'Rumput', 'Daun', 'Bulu', 'A'),
(11, 'Merdeka : Penjajahan = Cuti : ', 'Bekerja', 'Lembur', 'Pagi', 'Sore', 'A'),
(12, 'Pensil : Penghapus = Cat :', 'Amplas', 'Kertas', 'Tipe-x', 'Pulpen', 'A'),
(13, 'Lidah : Perasa = Kulit :', 'Pengecap', 'Peraba', 'Pendengaran', 'Pengelihatan', 'B'),
(14, 'Design : Designer = Recruit :', 'Recruiter ', 'Kontraktor', 'HRD', 'Polisi', 'A'),
(15, 'Kamera : Foto = Handycam :', 'Polaroid', 'Gambar', 'Lukisan', 'Video', 'D'),
(16, 'Suami : Istri = Jantan :', 'Pria', 'Wanita', 'Betina', 'Pasangan', 'C'),
(17, 'Pulpen : Tinta = Mobil :', 'Air', 'Bensin', 'Pupuk', 'Uang', 'B'),
(18, 'Australia : Kanguru = Indonesia :', 'Garuda ', 'Koala', 'Citah', 'Panther', 'A'),
(19, 'Kabel : Listrik = Jalan :', 'Semen', 'Aspal', 'Kendaraan', 'Landasan', 'C'),
(20, 'Udara : Bernafas = Air :', 'Panas', 'Makan', 'Minum', 'Istirahat', 'C'),
(21, 'Cermin : Bersolek = Microphone :  ', 'Bersuara', 'Berteriak', 'Bernyanyi', 'Berbisik', 'C'),
(22, 'Pintar : Bekerja = Bodoh : ', 'Bebaur', 'Bermain', 'Tersungkur', 'Menganggur', 'D'),
(23, 'Pisang : Buah = Tomat :  ', 'Sayur', 'Umbi-Umbian', 'Akar-Akaran', 'Buah', 'D'),
(24, 'Gelas : Air = Mangkuk : ', 'Teh', 'Ikan', 'Sup', 'Kopi', 'C'),
(25, 'Olahraga : Sehat = Merokok :', 'Batuk', 'Lelah', 'Letih', 'Sakit', 'D'),
(26, 'Menang : Kalah = Hidup : ', 'Bernafas', 'Bergerak', 'Mati', 'Tertawa', 'C'),
(27, 'Jarak : KM = Berat : ', 'CM', 'DM', 'G', 'KG', 'D'),
(28, 'Coklat : Manis = Cabai :  ', 'Asin', 'Asam', 'Pahit', 'Pedas', 'D'),
(29, 'Januari : Bulan = Senin :', 'Hari', 'Tahun', 'Selasa', 'Tanggal', 'A'),
(30, 'Buku : Tulis = Kanvas : ', 'Kasar', 'Cat', 'Lukis', 'Kertas', 'C'),
(31, 'Angka : Hitung = Huruf : ', 'Penjumlahan', 'Baca', 'Penambahan', 'Perhitungan', 'B'),
(32, 'Mesin : Oli = Mobil : ', 'Air', 'Bakar ', 'Bensin', 'Charge', 'C'),
(33, 'Kursi : Duduk = Kasur : ', 'Berdiri', 'Bermimpi', 'Tidur', 'Membaca', 'C'),
(34, 'Bingkai : Foto = Brangkas : ', 'Air', 'Oksigen', 'Kertas', 'Emas', 'D'),
(35, 'Muda : Tua = Tua : ', 'Lahir', 'Sakit', 'Usia', 'Mati', 'D'),
(36, 'Kaya : Raya = Miskin : ', 'Melarat', 'Senang', 'Suka', 'Pesta', 'A'),
(37, 'Sedih : Senang = Murah : ', 'Durja', 'Discount', 'Mahal', 'Meriah', 'C'),
(38, 'Cepat : Lambat = Pagi : ', 'Siang', 'Malam', 'Sore', 'Matahari', 'B'),
(39, 'Senang : Senyum = Sedih :', 'Happy', 'Suka', 'Cemberut', 'Duka', 'C'),
(40, 'Ramai : Pasar = Sepi :', 'Perpustakaan', 'Mal', 'Bazar', 'Kantor', 'A'),
(41, 'Toples : Kue = Rak :', 'Kayu', 'Besi', 'Buku', 'Tart', 'C'),
(42, 'Anjing : Bulu = Ikan :', 'Sirip', 'Sisik', 'Insang', 'Kulit', 'B'),
(43, 'Makan : Lapar = Minum : ', 'Kurang Kenyang', 'Sangat Kenyang', 'Dahaga', 'Tersedak', 'C'),
(44, 'Panjang : Tinggi = Pendek :', 'Lebih Tinggi', 'Tinggi Sekali', 'Bulat', 'Rendah', 'D'),
(45, 'Jaket : Kulit = Lantai : ', 'Keramik', 'Ubin', 'Air', 'Daun', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `soal3`
--

CREATE TABLE IF NOT EXISTS `soal3` (
  `id` int(11) NOT NULL auto_increment,
  `soal` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `deret_1` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `deret_2` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `deret_3` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `deret_4` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `deret_5` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `deret_6` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `kunci_jawaban1` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `kunci_jawaban2` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `soal3`
--

INSERT INTO `soal3` (`id`, `soal`, `deret_1`, `deret_2`, `deret_3`, `deret_4`, `deret_5`, `deret_6`, `kunci_jawaban1`, `kunci_jawaban2`) VALUES
(1, '2	3	4	5	6	7', '2', '3', '4', '5', '6', '7', '8 ', '9'),
(2, '20	22	24	26	28	30', '20', '22', '24', '26', '28', '30', '32', '34'),
(3, '30	27	24	21	19	16', '30', '27', '24', '21', '19', '16', '13 ', '10'),
(4, '7	14	28	46	92	184', '7', '14', '28', '46', '92', '184', '368', '736'),
(5, '7	12	9	14	11	16', '7', '12', '9', '14', '11', '16', '13', '18'),
(6, '4	9	16	23	31	40', '4', '9', '16', '23', '31', '40', '50 ', '61'),
(7, '9	18	11	20	13	21', '9', '18', '11', '20', '13', '21', '14', '23'),
(8, '64	32	16	8	4	2', '64', '32', '16', '8', '4', '2', '1 ', '0.5'),
(9, '69	61	52	42	31	19', '69', '61', '52', '42', '31', '19', '6 ', '-8'),
(10, '22	27	108	113	452	457', '22', '27', '108', '113', '452', '457', '1828', '183'),
(11, '25	50	100	200	400	800', '25', '50', '100', '200', '400', '800', '1600 ', '320'),
(12, '9	6	12	9	18	15', '9', '6', '12', '9', '18', '15', '30', '27'),
(13, '6096	3048	1524	762	381	190.5', '6096', '3048', '1524', '762', '381', '190.5', '95.25 ', '47'),
(14, '30	10	40	8	50	6', '30', '10', '40', '8', '50', '6', '60 ', '4'),
(15, '17	18	22	14	28	11', '17', '18', '22', '14', '28', '11', '35', '9'),
(16, '64	60	55	49	42	34', '64', '60', '55', '49', '42', '34', '43', '33'),
(17, '21	10	22	11	23	12', '21', '10', '22', '11', '23', '12', '24', '13'),
(18, '10000	10	1000	1	100	0.1', '10000', '10', '1000', '1', '100', '0.1', '10', '0.01'),
(19, '5	20	10	40	20	80', '5', '20', '10', '40', '20', '80', '40', '160'),
(20, '18	9	10	5	6	3', '18', '9', '10', '5', '6', '3', '4', '2'),
(21, '-3	-6	-9	-15	-24	-39', '-3', '-6', '-9', '-15', '-24', '-39', '-63', '-102'),
(22, '1	2	5	12	9	22', '1', '2', '5', '12', '9', '22', '13', '32'),
(23, '1/2 	1/2 	 1/4	1/12  	1/48  	1/240  ', '1/2', '1/2', '1/4', '1/12', '1/48', '1/240', '1/1440', '1'),
(24, '0	15	-15	30	-30	45', '0', '15', '-15', '30', '-30', '45', '-45', '60'),
(25, '24	30	18	42	-6	90', '24', '30', '18', '42', '-6', '90', '-102 ', '282');

-- --------------------------------------------------------

--
-- Table structure for table `soal4`
--

CREATE TABLE IF NOT EXISTS `soal4` (
  `id` int(11) NOT NULL auto_increment,
  `soal` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_a` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_b` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_c` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_d` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_e` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) default NULL,
  `kunci_jawaban` varchar(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `soal4`
--

INSERT INTO `soal4` (`id`, `soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `pilihan_e`, `gambar`, `kunci_jawaban`) VALUES
(1, 'Demosi><\r\n', 'Mosi', 'Turun', 'Pindah', 'Tidak percaya', 'Promosi', NULL, 'E'),
(2, 'Gaek><', 'Baru', 'Renta', 'Muda', 'Terdahulu', 'Tua', NULL, 'C'),
(3, 'Tidak hobi membaca atau suka berolahraga.', 'Suka berolahraga', 'Suka membaca', 'Suka berolahraga dan membaca', 'Tidak hobi berolahraga', 'Tidak suka berolahraga', NULL, 'A'),
(4, 'Tidak ada mamalia yang bertelur. </br> Semuaikan paus adalah mamalia.\r\n', 'Tidak ada ikan paus yang bertelur', 'Beberapa ikan paus bertelur', 'Ikan paus bertelur atau mamalia', 'Ikan paus mamalia dan bertelur', 'Tidak ada ikan paus termasuk mamalia', NULL, 'A'),
(5, '	\r\nAriana diterima kuliah di UI atau IKJ.. </br> Ternyata Ariana tidak kuliah di UI..', 'Ariana ternyata tidak kuliah di IKJ', 'Kuliah di UI', 'Kuliah di IKJ', 'Jika Ariana diterima kuliah di UI maka IKJ tidak dipilih', 'Jika Ariana diterima kuliah di IKJ maka UI tidak dipilih', NULL, 'C'),
(6, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan </br> <i>Hazdame</i> berarti cat nila </br> <i>Luklbim</i> berarti rumah baru </br> <i>Bimfriks </i> berarti lampu rumah </br> Kata apakah yang berarti &quot;nilabaru&quot;', 'Hazbim', 'Lukfriks', 'Hazbrot', 'Lukldame', 'Luklhaz', NULL, 'E'),
(7, 'Diagram 1.1 menunjukkan:', 'Futsal merupakan olahraga favorit', 'Tidak ada yang suka futsal', 'Futsal tidak ada yang memainkan', 'Futsal di benci di lingkungan', 'Futsal adalah olahraga terpopuler kedua', '4.1.png', 'A'),
(8, 'Diagram 1.1 menunjukkan:\r\n', 'Takraw adalah memiliki populasi terbesar', 'Takraw dan basket memiliki persentase peminat yang sama', 'Tidak ada yang suka takraw', 'Basket memiliki jumlah peminat yang sama dengan sepak bola', 'Basket dan takraw mendominasi olahraga di sini', NULL, 'B'),
(9, 'Diagram diatas menunjukkan:\r\n', 'Tahun 2018 cabai menguasai penjualan', 'Tahun 2018 cabai tidak bisa mengalahkan penjualan kedelai.', 'Tahun 2018 keledai memiliki penjualan paling tinggi.', 'Bawang memimpin penjualan pada tahun 2018.', 'Cabai dan bawang memiliki penjualan tertinggi pada tahun 2018.', '4.2.png', 'A'),
(10, 'Diagram diatas menunjukkan:\r\n', 'Setiap tahun cabai selalu memimpin penjualan.', 'Pada periode 2019 cabai mengalami penurunan tertinggi.', 'Tahun 2020 bawang memiliki penjualan tertinggi.', 'Tahun 2019 kedelai memiliki penjualan tertinggi.', 'Cabai tidak pernah memimpin penjualan setiap tahun.', NULL, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `soal5`
--

CREATE TABLE IF NOT EXISTS `soal5` (
  `id` int(11) NOT NULL auto_increment,
  `pernyataan` text character set utf8 collate utf8_unicode_ci,
  `soal` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_a` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_b` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_c` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_d` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `pilihan_e` text character set utf8 collate utf8_unicode_ci,
  `kunci_jawaban` varchar(5) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `soal5`
--

INSERT INTO `soal5` (`id`, `pernyataan`, `soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `pilihan_e`, `kunci_jawaban`) VALUES
(1, NULL, 'Steve : How do you go to fresh market? </br> Ronnie : We &#46&#46&#46 the bus to fresh market', 'Taken', 'Taking', 'Took', 'Take', NULL, 'D'),
(2, NULL, 'When &#46&#46&#46 you &#46&#46&#46 a shower?', 'Do, took', 'Do, taken', 'Do, take', 'Do, taking', NULL, 'C'),
(3, NULL, 'Tom and I &#46&#46&#46 &#46&#46&#46 together.', 'Don&#39;t surf', 'Do surfing', 'Do surfs', 'Don&#39;t surfing', NULL, 'A'),
(4, '<b>Passage A</b><br>(1)&nbsp;&nbsp;&nbsp;Objective historians see their role as that of neutral judge, one who must never become an advocate or, worse, propagandist. Their conclusions should display the judicial qualities of balance and evenhandedness. As with the judiciary, these qualities require insulation from political considerations, and avoidance of partisanship or bias. Thus objective historians must purge themselves of external loyalties; their primary allegiance is to objective historical truth and to colleagues who share a commitment to its discovery.<br>(3)&nbsp;&nbsp;&nbsp;Central to the historian&#39;s profession and scholarship has been the idea of objectivity. The assumptions upon which this ideal rests include a commitment to the reality of the past, a sharp separation between fact and value, and above all, a distinction between history and fiction<br>(2)&nbsp;&nbsp;&nbsp;According to this ideal, historical facts are prior to and independent of interpretation: the value of and interpretation should be judged by how well it accounts for the fact that successive generation of historians have ascribed different meanings to past events does not mean, as relatives historians claim, that the events themselves lack fixed or absolute meanings.<br><br><b>Passage B</b><br>(1)&nbsp;&nbsp;&nbsp;	Such arguments are often more faithful to the complexity of historical interpretation &#8722; more faithful even to the irreducible plurality of human perspectives &#8722; than exits that abjure position &#8722; taking altogether. The powerful argument is the highest fruit of the kind of thinking I would call objective, and in it neutrality plays no part. Authentic objectivity bears no resemblance to the television newscaster&#39;s mechanical gesture of allocating the same number of second to both sides of a question, editorially splitting the difference between them, irrespective of their perceived.<br>(2)&nbsp;&nbsp;&nbsp;The very possibility of historical scholarship as an enterprise distinct from propaganda requires of its practitioners that self-discipline that enables them to do such things as abandon wishful thinking, assimilate bad news, and discard pleasing interpretations that fail elementary tests of evidence and logic.<br>(3)&nbsp;&nbsp;&nbsp;Yet objectivity, for the historian, should not be confused with neutrality. Objectivity is perfectly compatible with strong political commitment. The objective thinker does not value detachment as an end in itself but only as an indispensable means of achieving deeper understanding. In historical scholarship, the idea of objectivity is most compellingly embodied in the powerful argument &#8722; one that reveals by its every twist and turn its very respectful appreciation of the alternative arguments it rejects. Such a text attains power precisely because its author has managed to suspend momentarily his or her own perceptions so as to anticipate and take into account objections and alternative constructions&#8722;not those of straw men, but those that truly issue from the rival&#39;s position, understood as sensitively and stated as eloquently as the rival could desire. To mount a telling attack on a position, one must first inhabit it. Those so habituated to their customary intellectual abode that they cannot even explore others can never be persuasive to anyone but fellow habitu&#234;s.', 'The passage A above have been placed in a random order. Put them in correct order.\r\n', '1,2,3', '2,3,1', '3,2,1', '2,1,3', '3,1,2', 'C'),
(5, NULL, 'The passage B above have been placed in a random order. Put them in correct order', '1,2,3', '2,3,1', '3,2,1', '2,1,3', '3,1,2', 'B'),
(6, NULL, 'Both passages identify which one of the following as a historical research\r\n', 'The historian&#39;s willingness to answer in detail all possible objections that might be made against his or her interpretation', 'The historian&#39;s willingness to employ methodologies favored proponents of competing vies when evaluating evidence.', 'The historian&#39;s willingness to accord respectful consideration to rival interpretation', 'The historian&#39;s willingness to relinquish favored interpretations in light of the discovery of facts inconsistent with them', 'The historian&#39;s willingness to borrow methods of analysis from other disciplines when evaluating evidence.', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `validasi` int(11) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `tanggal_tes` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `validasi`, `umur`, `no_telp`, `pendidikan`, `tanggal_tes`) VALUES
(1, 'Ahmad Gojali', 'Ali', 'ali', 'ahmadgojali1309@gmail.com', 0, '20', '123456789', 'S-1', '2019-02-19 08:46:36'),
(2, 'Ahmad', 'Ahmad', 'ahmad', 'ahmad@gmail.com', 0, '20', '123456789', 'D-3', NULL),
(3, 'Saya', 'Saya', 'R402i0mg', 'saya@gmail.com', 0, '20', '10123456789', 'S-1', NULL),
(4, 'Coba', 'Coba', 'coba', 'coba@gmail.com', 0, '20', '123456789', 'S1', '2019-02-18 11:38:33'),
(5, 'Aku', 'TiMRXl5z', '', 'aku@gmail.com', 0, '13', '0123456', 'S-1', NULL),
(6, 'Asa', 'Asa', 'BM3rL3LI', 'asa@aada.com', 0, '12', '2121313', 'S-1', NULL),
(7, 'Cobalagi', 'Coba', 'ZzA4uACG', 'coba@gmail.com', 1, '15', '1223321456', 'S-1', '2019-02-18 16:40:38'),
(8, 'Fajar', 'Tester1', 'kgmZ0BF6', 'fajar@poseidon.com', 0, '25', '9999999', 'S-1', '2019-02-18 17:24:54'),
(9, 'Meiliana', 'Tester2', '71cgF1CL', 'meiliana@posseidon.com', 0, '24', '123', 'S-1', NULL),
(10, 'Dia', 'Dia', '', 'dia@cc.com', 0, '12', '12', 'S-1', NULL),
(12, 'Ali', 'Ali', '1BakooCIQx', 'ali@gmail.com', 0, '12', '12345678', 'S-1', NULL);
