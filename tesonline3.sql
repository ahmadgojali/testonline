-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Feb 2019 pada 18.40
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tesonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Ali', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_tes1`
--

CREATE TABLE IF NOT EXISTS `jawaban_tes1` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no_5` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no_6` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_tes2`
--

CREATE TABLE IF NOT EXISTS `jawaban_tes2` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban_tes2`
--

INSERT INTO `jawaban_tes2` (`id`, `id_user`, `nilai`) VALUES
(1, 1, 0),
(2, 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal1`
--

CREATE TABLE IF NOT EXISTS `soal1` (
`id` int(11) NOT NULL,
  `soal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `soal1`
--

INSERT INTO `soal1` (`id`, `soal`, `jawaban`) VALUES
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
(21, '(Bobot nilai untuk soal dibawah ini 5X lebih besar dari soal lainnya).\r\nJarak Jakarta-Batu 350 km. Jika Budi berangkat dari Jakarta ke Batu pukul 06.00 pagi dengan mobil kecepatannya 60 km/jam. Pada waktu dan rute yang sama Andi berangkat dari Batu menuju', '150');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal2`
--

CREATE TABLE IF NOT EXISTS `soal2` (
`id` int(11) NOT NULL,
  `soal` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_a` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_b` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_c` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_d` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jawaban` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal2`
--

INSERT INTO `soal2` (`id`, `soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban`) VALUES
(1, 'Hidung : Nafas = Kaki : ', 'Berjalan', 'Mendengar', 'Mengecap', 'Merasa', 'A'),
(2, 'Aquarium : Ikan = Sangkar :', 'Singa', 'Anjing', 'Burung', 'Kucing', 'C'),
(3, 'Sepatu : Alas = Helm :', 'Karton', 'Busa', 'Besi', 'Alumunium', 'B'),
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
-- Struktur dari tabel `soal3`
--

CREATE TABLE IF NOT EXISTS `soal3` (
`id` int(11) NOT NULL,
  `soal` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deret_1` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deret_2` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deret_3` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deret_4` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deret_5` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deret_6` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jawaban1` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jawaban2` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal3`
--

INSERT INTO `soal3` (`id`, `soal`, `deret_1`, `deret_2`, `deret_3`, `deret_4`, `deret_5`, `deret_6`, `jawaban1`, `jawaban2`) VALUES
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
-- Struktur dari tabel `soal4`
--

CREATE TABLE IF NOT EXISTS `soal4` (
`id` int(11) NOT NULL,
  `soal` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_a` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_b` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_c` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_d` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_e` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `jawaban` varchar(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal4`
--

INSERT INTO `soal4` (`id`, `soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `pilihan_e`, `gambar`, `jawaban`) VALUES
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
-- Struktur dari tabel `soal5`
--

CREATE TABLE IF NOT EXISTS `soal5` (
`id` int(11) NOT NULL,
  `pernyataan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `soal` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_a` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_b` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_c` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_d` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pilihan_e` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `jawaban` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal5`
--

INSERT INTO `soal5` (`id`, `pernyataan`, `soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `pilihan_e`, `jawaban`) VALUES
(1, NULL, 'Steve : How do you go to fresh market? </br> Ronnie : We &#46&#46&#46 the bus to fresh market', 'Ridden', 'Rode', 'Riding', 'Ride', NULL, 'D'),
(2, NULL, 'When &#46&#46&#46 you &#46&#46&#46 a shower?', 'Do, took', 'Do, taken', 'Do, take', 'Do, taking', NULL, 'C'),
(3, NULL, 'Tom and I &#46&#46&#46 &#46&#46&#46 together.', 'Don&#39;t surf', 'Do surfing', 'Do surfs', 'Don&#39;t surfing', NULL, 'A'),
(4, 'Passage A</br>               Objective historians see their role as that of neutral judge, one who must never become an advocate or, worse, propagandist. Their conclusions should display the judicial qualities of balance and evenhandedness. As with the judiciary, these qualities require insulation from political considerations, and avoidance of partisanship or bias. Thus objective historians must purge themselves of external loyalties; their primary allegiance is to objective historical truth and to colleagues who share a commitment to its discovery.	  (1)               Central to the historian’s profession and scholarship has been the idea of objectivity. The assumptions upon which this ideal rests include a commitment to the reality of the past, a sharp separation between fact and value, and above all, a distinction between history and fiction. 	 (3)               According to this ideal, historical facts are prior to and independent of interpretation: the value of and interpretation should be judged by how well it accounts for the fact that successive generation of historians have ascribed different meanings to past events does not mean, as relatives historians claim, that the events themselves lack fixed or absolute meanings.	 (2)   Passage B 	 	Such arguments are often more faithful to the complexity of historical interpretation – more faithful even to the irreducible plurality of human perspectives – than exits that abjure position – taking altogether. The powerful argument is the highest fruit of the kind of thinking I would call objective, and in it neutrality plays no part. Authentic objectivity bears no resemblance to the television newscaster’s mechanical gesture of allocating the same number of second to both sides of a question, editorially splitting the difference between them, irrespective of their perceived.	  (1) 	The very possibility of historical scholarship as an enterprise distinct from propaganda requires of its practitioners that self-discipline that enables them to do such things as abandon wishful thinking, assimilate bad news, and discard pleasing interpretations that fail elementary tests of evidence and logic.	 (2) 	Yet objectivity, for the historian, should not be confused with neutrality. Objectivity is perfectly compatible with strong political commitment. The objective thinker does not value detachment as an end in itself but only as an indispensable means of achieving deeper understanding. In historical scholarship, the idea of objectivity is most compellingly embodied in the powerful argument – one that reveals by its every twist and turn its very respectful appreciation of the alternative arguments it rejects. Such a text attains power precisely because its author has managed to suspend momentarily his or her own perceptions so as to anticipate and take into account objections and alternative constructions-not those of straw men, but those that truly issue from the rival’s position, understood as sensitively and stated as eloquently as the rival could desire. To mount a telling attack on a position, one must first inhabit it. Those so habituated to their customary intellectual abode that they cannot even explore others can never be persuasive to anyone but fellow habitués.	    (3)', 'The passage A above have been placed in a random order. Put them in correct order.\r\n', '1,2,3', '2,3,1', '3,2,1', '2,1,3', '3,1,2', 'C'),
(5, NULL, 'The passage B above have been placed in a random order. Put them in correct order', '1,2,3', '2,3,1', '3,2,1', '2,1,3', '3,1,2', 'B'),
(6, NULL, 'Both passages identify which one of the following as a historical research\r\n', 'The historian&#39;s willingness to answer in detail all possible objections that might be made against his or her interpretation', 'The historian&#39;s willingness to employ methodologies favored proponents of competing vies when evaluating evidence.', 'The historian&#39;s willingness to accord respectful consideration to rival interpretation', 'The historian&#39;s willingness to relinquish favored interpretations in light of the discovery of facts inconsistent with them', 'The historian&#39;s willingness to borrow methods of analysis from other disciplines when evaluating evidence.', 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbasisten`
--

CREATE TABLE IF NOT EXISTS `tbasisten` (
  `kd_asisten` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbasisten`
--

INSERT INTO `tbasisten` (`kd_asisten`, `username`, `password`, `nama_lengkap`, `kelas`, `jenis_kelamin`, `jabatan`, `no_telp`, `foto`) VALUES
('1', 'admin', 'admin', 'Ahmad Gojali ', '3KA27', 'Laki-laki', 'Programmer', '08988822124', 'ali.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbnilai`
--

CREATE TABLE IF NOT EXISTS `tbnilai` (
  `npm` varchar(8) NOT NULL,
  `kehadiran1` int(3) NOT NULL,
  `lp1` int(3) NOT NULL,
  `la1` int(3) NOT NULL,
  `kehadiran2` int(3) NOT NULL,
  `lp2` int(3) NOT NULL,
  `la2` int(3) NOT NULL,
  `kehadiran3` int(3) NOT NULL,
  `ujian` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbnilai`
--

INSERT INTO `tbnilai` (`npm`, `kehadiran1`, `lp1`, `la1`, `kehadiran2`, `lp2`, `la2`, `kehadiran3`, `ujian`) VALUES
('10114559', 40, 0, 0, 40, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpraktikan`
--

CREATE TABLE IF NOT EXISTS `tbpraktikan` (
  `npm` varchar(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `status` varchar(15) NOT NULL,
  `foto` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpraktikan`
--

INSERT INTO `tbpraktikan` (`npm`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `kelas`, `status`, `foto`) VALUES
('10114550', 'ADUL', 'ADUL', 'Abdul Rohman', 'Laki-laki', '3KA27', 'Aktif', '7.gif'),
('10114551', 'NO NAME', 'NO NAME', 'Ayu Putri Pricila', 'Perempuan', '3KA27', 'Aktif', 'MYOR.png'),
('10114558', 'ALI', 'ALI', 'Aliando', 'Laki-laki', '3KA27', 'Tidak Aktif', '5.jpg'),
('10114559', 'ahmad', 'ahmad', 'Ahmad Gojali', 'Laki-laki', '3KA27', 'Aktif', 'ali.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsoal`
--

CREATE TABLE IF NOT EXISTS `tbsoal` (
  `kd_soal` varchar(10) NOT NULL,
  `matkul` varchar(30) NOT NULL,
  `bab` varchar(30) NOT NULL,
  `soal` varchar(500) NOT NULL,
  `A` varchar(500) NOT NULL,
  `B` varchar(500) NOT NULL,
  `C` varchar(500) NOT NULL,
  `D` varchar(500) NOT NULL,
  `kunci_jaw` varchar(5) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbsoal`
--

INSERT INTO `tbsoal` (`kd_soal`, `matkul`, `bab`, `soal`, `A`, `B`, `C`, `D`, `kunci_jaw`, `status`) VALUES
('MP01', 'Dasar Manajemen Keuangan', 'Manajemen Piutang', 'Tagihan kepada pelanggan yang timbul dari penjualan barang dagangan secara  kredit merupakan pengertian dari ...', 'Hutang', 'Piutang', 'Persediaan', 'Kas', 'B', 'Aktif'),
('MP02', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Penjualan produk/jasa dapat dilakukan secara ...', 'Tunai', 'Kredit', 'Tunai dan Kredit', 'Semua jawaban salah', 'C', 'Aktif'),
('MP03', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Menyangkut masalah pengendalian jumlah piutang, pengendalian pemberian dan pengumpulan piutang, dan evaluasi terhadap politik kredit yang dijalankan oleh perusahaan merupakan tugas dari ...', 'Manajemen operasional', 'Manajemen perusahaan', 'Manajemen piutang', 'Manajemen politik', 'C', 'Aktif'),
('MP04', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'I. Penetapan kebijakan kredit\r\nII. Pemantauan\r\nIII. Analisis perubahan kebijakan piutang usaha\r\nYang termasuk langkah utama dalam manajemen piutang adalah ...\r\n', 'I', 'I & II', 'II & III', 'I, II, & III', 'D', 'Aktif'),
('MP05', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Faktor yang mempengaruhi besarnya investasi terhadap piutang adalah, kecuali ...', 'Volume penjualan tunai', 'Syarat pembayaran penjualan kredit', 'Ketentuan pembatasan kredit', 'Kebijaksanaan dalam mengumpulkan piutang', 'A', 'Aktif'),
('MP06', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Dalam volume penjualan kredit, jika proporsi penjualan kredit meningkat maka ...', 'Dana dalam piutang meningkat, resiko menurun dan profit meningkat', 'Dana dalam piutang menurun, resiko meningkat dan profit meningkat', 'Dana dalam piutang meningkat, resiko meningkat dan profit menurun', 'Dana dalam piutang meningkat, resiko meningkat dan profit meningkat', 'D', 'Aktif'),
('MP07', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Ada berapa alternatif syarat pembayaran penjualan kredit ...', '2 alternatif', '3 alternatif', '4 alternatif', '5 alternatif', 'A', 'Aktif'),
('MP08', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Yang termasuk alternatif syarat pembayaran penjualan kredit adalah ...', 'Dengan ketat', 'Dengan lunak', 'Jawaban a & b benar', 'Jawaban a & c salah', 'C', 'Aktif'),
('MP09', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Jika perusahaan sangat selektif maka menggunakan alternatif ...', 'Dengan ketat', 'Dengan lunak', 'Jawaban a & b benar', 'Jawaban a & c salah', 'A', 'Aktif'),
('MP10', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Jika perusahaan kurang selektif maka menggunakan alternatif ...', 'Dengan ketat', 'Dengan lunak', 'Jawaban a & b benar', 'Jawaban a & c salah', 'B', 'Aktif'),
('MP11', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Yang dimaksud dengan plafon kredit adalah ...', 'Batas minimal kredit', 'Batas maksimal kredit', 'Batas awalan kredit', 'Batas akhiran kredit', 'B', 'Aktif'),
('MP12', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Yang termasuk penilaian pelanggan adalah sebagai berikut, kecuali ...', 'Capacity', 'Character', 'City', 'Capital', 'C', 'Aktif'),
('MP13', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Salah satu penilaian pelanggan adalah menyangkut kejujuran, tanggung jawab dalam memenuhi kewajiban merupakan pengertian dari ...', 'Character', 'Capacity', 'Capital', 'Collateral', 'A', 'Aktif'),
('MP14', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Salah satu penilaian pelanggan adalah kemampuan untuk membayar hutangnya (dilihat dari Aktiva dan jumlah hutang berdasarkan laporan keuangan) merupakan pengertian dari ...', 'Character', 'Capacity', 'Capital', 'Collateral', 'B', 'Aktif'),
('MP15', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Salah satu penilaian pelanggan adalah melihat dari jumlah Modal Sendiri yang dimiliki perusahaan dari suatu periodemerupakan pengertian dari ...', 'Character', 'Capacity', 'Capital', 'Collateral', 'C', 'Aktif'),
('MP16', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Salah satu penilaian pelanggan adalah adanya jaminan dalam pengambilan kredit biasanya berupa surat berhargamerupakan pengertian dari ...', 'Character', 'Capacity', 'Capital', 'Collateral', 'D', 'Aktif'),
('MP17', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Salah satu penilaian pelanggan adalah kondisi perekonomian secara umummerupakan pengertian dari ...', 'Condition', 'Capacity', 'Capital', 'Collateral', 'A', 'Aktif'),
('MP18', 'Dasar Manajemen Keuangan', 'Manajemen Piutang', 'I. Mengadakan Klasifikasi dari Para Pelanggan berdasarkan Risiko Pembayarannya\r\nII. Penentuan besarnya risiko yang akan ditanggung oleh Perusahaan\r\nIII. Mengadakan seleksi dari Pelanggan\r\nIV. Penyelidikan tentang Kemampuan untuk Memenuhi Kewajibannya\r\nUrutan langkah penyaringan pelanggan yang benar adalah ...\r\n', 'II - IV - III - I', 'I - IV - III - II', 'II - IV - I - III', 'I - IV - II - III', 'C', 'Aktif'),
('MP19', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Pengertian dari receivable turnover adalah ...', 'Tingkat perputaran hutang', 'Tingkat perputaran piutang', 'Tingkat perputaran persediaan', 'Tingkat perputaran penjualan', 'B', 'Aktif'),
('MP20', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Pengertian receivables collection budget adalah ...', 'Budget pengumpulan hutang', 'Budget pengumpulan piutang', 'Budget pengumpulan persediaan', 'Budget pengumpulan penjualan', 'B', 'Aktif'),
('MP21', 'Dasar Manajemen Keuangan ', 'Manajemen Piutang', 'Skema perputaran piutang yang benar adalah ...', 'kas -> Piutang -> Persediaan -> Penjualan Kredit', 'kas -> Persediaan -> Piutang -> Penjualan Kredit', 'Piutang -> Kas -> Persediaan -> Penjualan Kredit', 'Piutang -> Persediaan -> kas -> Penjualan Kredit', 'C', 'Aktif'),
('MP22', 'Dasar Manajemen Keuangan', 'Manajemen Piutang', 'Membagi jumlah kredit sales selama periode tertentu dengan jumlah rata-rata piutang merupakan cara untuk mengetahui ...', 'perputaran hutang', 'perputaran kas', 'perputaran piutang', 'perputaran persediaan', 'C', 'Aktif'),
('MP23', 'Dasar Manajemen Keuangan', 'Manajemen Piutang', '360 / Receivables Turnover\r\n\r\nDiatas merupakan rumus dari ...', 'Hari rata - rata pengumpulan piutang', 'Tahun rata - rata pengumpulan piutang', 'Hari rata - rata pengumpulan hutang', 'Tahun rata - rata pengumpulan hutang', 'A', 'Aktif'),
('MP24', 'Dasar Manajemen Keuangan', 'Manajemen Piutang', 'Budget piutang adalah ...', 'Membuat estimasi penerimaan hutang', 'Membuat estimasi pengeluaran hutang', 'Membuat estimasi penerimaan piutang', 'Membuat estimasi pengeluaran piutang', 'C', 'Aktif'),
('MP25', 'Dasar Manajemen Keuangan', 'Manajemen Piutang', 'Yang perlu diperhatikan dalam membuat estimasi penerimaan piutang adalah, kecuali ...', 'Kebiasaan membeli dalam membayar hutang', 'Kebijaksanaan cash discount', 'Kebijaksanaan piutang ragu - ragu', 'Kebiasaan membeli dalam membayar piutang', 'D', 'Aktif'),
('RK01', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Istilah ukuran dalam analisis laporan keuangan adalah ....', 'Pembagian', 'Analisis', 'Rasio', 'Pemecahan', 'C', 'Aktif'),
('RK02', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Laporan yang berisi semua informasi mengenai informasi keuangan perusahaan adalah ....', 'Laporan keuangan', 'Laporan R/L', 'Neraca', 'Perubahan Modal', 'A', 'Aktif'),
('RK03', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Berapa macam teknik perbandingan analisis rasio keuangan ....', '1', '2', '3', '4', 'B', 'Aktif'),
('RK04', 'Dasar Manajemen Keuangan', 'Rasio Keuangan', 'Dibawah ini adalah macam - macam rasio keuangan, kecuali....', 'Likuiditas', 'Solvabilitas', 'Profititabilitas', 'Analitas  ', 'D', 'Aktif'),
('RK05', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Rasio yang menghitung kemampuan perusahaan dalam memenuhi kewajiban jangka pendeknya adalah rasio ....', 'Likuiditas', 'Solvabilitas', 'Profititabilitas', 'Rentabilitas ', 'A', 'Aktif'),
('RK06', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Aktiva lancar / Utang lancar merupakan rumus dari ....', 'Current ratio', 'Cash Ratio ', 'Quick ratio ', 'Working Capital ratio', 'A', 'Aktif'),
('RK07', 'Dasar Manajemen Keuangan', 'Rasio Keuangan', 'Semakin besar nilai rasio lancar semakin ....... bagi perusahaan ', 'Baik ', 'Biasa saja', 'Tidak baik', 'Sangat tidak baik', 'A', 'Aktif'),
('RK08', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', '(Kas + efek) / Utang lancar merupakan rumus dari  ....', 'Current ratio ', 'Cash Ratio ', 'Quick ratio ', 'Working Capital ratio', 'B', 'Aktif'),
('RK09', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', '(Kas + efek + piutang) / Utang lancar merupakan rumus dari .... ', 'Current ratio ', 'Cash Ratio ', 'Quick ratio ', 'Working Capital ratio', 'C', 'Aktif'),
('RK10', 'Dasar Manajemen Keuangan', 'Rasio Keuangan', 'Jika tingkat quick ratio kurang dari 100% dianggap ...... bagi perusahaan.', 'kurang baik', 'Baik ', 'Tidak baik', 'Biasa saja', 'A', 'Aktif'),
('RK11', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', '(Aktiva lancar + Utang lancar) / Jumlah aktiva merupakan rumus dari ....', 'Current ratio ', 'Cash Ratio ', 'Quick ratio ', 'Working Capital to Total Assets Ratio ', 'D', 'Aktif'),
('RK12', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Rasio yang mengukur penggunaan dana dari hutang disebut ....', 'Likuiditas', 'Solvabilitas', 'Profititabilitas', 'Rentabilitas ', 'B', 'Aktif'),
('RK13', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Total Hutang / Modal Sendiri merupakan rumus dari ....', 'Total Debt to Equity Ratio ', 'Total Debt to Total Capital Assets', 'Long Term Debt to Equity Ratio', 'Short Term Debt to Equity Ratio', 'A', 'Aktif'),
('RK14', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Total Hutang / Total Aktiva merupakan rumus dari ....', 'Total Debt to Equity Ratio ', 'Total Debt to Total Capital Asset', 'Long Term Debt to Equity Ratio', 'Short Term Debt to Equity Ratio', 'B', 'Aktif'),
('RK15', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Utang jangka panjang / Modal sendiri merupakan rumus dari ....', 'Total Debt to Equity Ratio ', 'Total Debt to Capital Asset', 'Long Term Debt to Equity Ratio', 'Short Term Debt to Equity Ratio', 'C', 'Aktif'),
('RK16', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Dibawah ini merupakan komponen dari rasio solvabilitas/ leverage , kecuali  ....', 'Total Debt to Equity Ratio ', 'Total Debt to Capital Asset', 'Long Term Debt to Equity Ratio', 'Short Term Debt to Equity Ratio', 'D', 'Aktif'),
('RK17', 'Dasar Manajemen Keuangan', 'Rasio Keuangan', 'Rasio yang menghitung efektifitas penggunaan dana yang dimiliki oleh perusahaan adalah rasio ...', 'Likuiditas', 'Solvabilitas', 'Profititabilitas', 'Aktivitas ', 'D', 'Aktif'),
('RK18', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Dibawah ini merupakan komponen dari rasio aktifitas , kecuali  ....', 'Total Assets Turnover', 'Receivable Turnover', 'Average Collection Period', 'Liability Turnover ', 'D', 'Aktif'),
('RK19', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Penjualan neto / Total aktiva merupakan rumus dari ....', 'Total Assets Turnover', 'Receivable Turnover', 'Average Collection Period', 'Liability Turnover ', 'A', 'Aktif'),
('RK20', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Penjualan kredit / Piutang rata-rata merupakan rumus dari ....', 'Total Assets Turnover', 'Receivable Turnover', 'Average Collection Period', 'Liability Turnover', 'B', 'Aktif'),
('RK21', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', '(Piutang rata-rata x 360) / Penjualan kredit merupakan rumus dari ....', 'Total Assets Turnover', 'Receivable Turnover', 'Average Collection Period', 'Liability Turnover', 'C', 'Aktif'),
('RK22', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Harga pokok penjualan / Inventory rata-rata merupakan rumus dari ....', 'Total Assets Turnover', 'Receivable Turnover', 'Average Collection Period', 'Inventory  Turnover', 'D', 'Aktif'),
('RK23', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', '(Inventory rata-rata x 360) / Harga pokok penjualan merupakan rumus dari ....', 'Total Assets Turnover', 'Receivable Turnover', 'Average days Inventory', 'Inventory  Turnover', 'C', 'Aktif'),
('RK24', 'Dasar Manajemen Keuangan', 'Rasio Keuangan', 'Penjualan neto / (Aktiva lancar - Utang lancar) merupakan rumus dari ....', 'Total Assets Turnover', 'Receivable Turnover', 'Average days Inventory ', 'Working Capital Turnover', 'D', 'Aktif'),
('RK25', 'Dasar Manajemen Keuangan ', 'Rasio Keuangan', 'Dalam bahasa Inventory Turnover adalah ....', 'Perputaran persediaan', 'Perputaran asset ', 'Perputaran kewajiban ', 'Perputaran rasio ', 'A', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbujian`
--

CREATE TABLE IF NOT EXISTS `tbujian` (
  `kd_ujian` varchar(4) NOT NULL,
  `matkul` varchar(30) NOT NULL,
  `tipe_soal` varchar(30) NOT NULL,
  `file` varchar(300) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbujian`
--

INSERT INTO `tbujian` (`kd_ujian`, `matkul`, `tipe_soal`, `file`, `status`) VALUES
('UJ01', 'Dasar Manajemen Keuangan', 'A', 'Soal Type A.docx', 'Aktif'),
('UJ02', 'Dasar Manajemen Keuangan', 'B', 'Soal Type B.docx', 'Aktif'),
('UJ03', 'Dasar Manajemen Keuangan', 'C', 'Soal Type C.docx', 'Aktif'),
('UJ04', 'Dasar Manajemen Keuangan', 'D', 'Soal Type D.docx', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `validasi` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `tanggal_tes` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `validasi`, `umur`, `tanggal_tes`) VALUES
(1, 'Ahmad Gojali', 'Ali', 'Ali', 'ahmadgojali@gmail.com', 0, 19, '2019-02-12 16:09:46'),
(2, 'Budi 1', 'Budi', 'Budi1', 'budi1@gmail.com', 0, 20, '0000-00-00 00:00:00'),
(3, 'Budi 2', 'Budi', 'Budi2', 'budi2@gmail.com', 1, 21, '0000-00-00 00:00:00'),
(4, 'Aku', 'Aku123', 'Aku123', 'aku@gmail.com', 0, 21, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban_tes1`
--
ALTER TABLE `jawaban_tes1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban_tes2`
--
ALTER TABLE `jawaban_tes2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal1`
--
ALTER TABLE `soal1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal2`
--
ALTER TABLE `soal2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal3`
--
ALTER TABLE `soal3`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal4`
--
ALTER TABLE `soal4`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal5`
--
ALTER TABLE `soal5`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbasisten`
--
ALTER TABLE `tbasisten`
 ADD PRIMARY KEY (`kd_asisten`);

--
-- Indexes for table `tbnilai`
--
ALTER TABLE `tbnilai`
 ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `tbpraktikan`
--
ALTER TABLE `tbpraktikan`
 ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `tbsoal`
--
ALTER TABLE `tbsoal`
 ADD PRIMARY KEY (`kd_soal`);

--
-- Indexes for table `tbujian`
--
ALTER TABLE `tbujian`
 ADD PRIMARY KEY (`kd_ujian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jawaban_tes1`
--
ALTER TABLE `jawaban_tes1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jawaban_tes2`
--
ALTER TABLE `jawaban_tes2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `soal1`
--
ALTER TABLE `soal1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `soal2`
--
ALTER TABLE `soal2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `soal3`
--
ALTER TABLE `soal3`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `soal4`
--
ALTER TABLE `soal4`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `soal5`
--
ALTER TABLE `soal5`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
