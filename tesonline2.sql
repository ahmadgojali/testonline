-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Feb 2019 pada 08.16
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
-- Struktur dari tabel `soal1`
--

CREATE TABLE IF NOT EXISTS `soal1` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `soal` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jawaban` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `percobaan` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal1`
--

INSERT INTO `soal1` (`id`, `id_user`, `soal`, `jawaban`, `percobaan`) VALUES
(1, 1, 'Berapakah jumlah 59 dan 8 pulpen?', '67', 0),
(2, 1, 'Berapa jam waktu yang dibutuhkan oleh sebuah mobil yang melaju 60 km per jam untuk menempuh jarak 480 km?', '8', 0),
(3, 1, '1/2  ×  1/3=', '1/6', 0),
(4, 1, '1/2  -  1/3=', '1/6', 0),
(5, 1, '1/2  +  1/3=', '5/6', 0),
(6, 1, '1/2 ÷  1/3=', '3/2 / 1 1/2  ', 0),
(7, 1, 'Jika sebuah bola ditendang 9 meter ke utara dan kemudian ditendang kembali 3 meter keselatan, berapa jarak bola tersebut dari titik awal?', '6', 0),
(8, 1, 'Jika 3 buah pulpen harganya Rp. 120,-, berapa pulpen yang dapat dibeli dengan uang Rp. 600,-?', '15', 0),
(9, 1, 'Berapa banyak upah yang diperoleh dalam waktu 3 jam, apabila dalam waktu 30 menit diperoleh upah Rp. 5.000,-?', '30.000', 0),
(10, 1, 'Shinta mempunyai 250 pulpen. Ia memberikan 65 pulpen kepada Andi. Kemudian Shinta mendapatkan 100 pulpen lagi dari Ibu. Berapa pulpen Shinta sekarang?', '285', 0),
(11, 1, '5^3+5^3+5^3+5^3+5^3=', '625', 0),
(12, 1, '(2t+3)/(5t-2)= 4. Berapakah nilai t?', '11/18', 0),
(13, 1, 'Andi membeli enam buah permen dengan harga Rp. 150,-sebuah dan tiga kilogram beras dengan harga Rp. 15.000,- per kilogram. Berapa uang kembalian yang diterima Andi bila ia membayar dengan uang Rp. 50.000,-?', '4.100', 0),
(14, 1, 'Lima orang membuat ayunan dengan waktu 8 hari. Berapa orang yang dibutuhkan untuk menyelesaikan ayunan tersebut dalam waktu setengah hari?', '80', 0),
(15, 1, '1/(x+3)  +  1/(3-x)= ', '6/(〖-X〗^2+9)/ -(-6)/(X^2-9)', 0),
(16, 1, '√25+∛64  × ∜725  =', '25', 0),
(17, 1, '□(33 1/3%) × (0,125 + 0,043 + 0.021) × 0 =', '0', 0),
(18, 1, 'Delapan setengah kilogram emas harganya Rp. 1.700,-. Berapa harga tiga setengah kilogram emas tersebut?', '700', 0),
(19, 1, '2x+y-12=0 ; 3x-y-13=0. Berapakah nilai +y ?', '7', 0),
(20, 1, 'Pada tes masuk universitas A terdapat 1380 calon mahasiswa yang memenuhi syarat untuk masuk universitas tersebut. Delapan persen tidak memenuhi syarat. Berapa orang calon mahasiswa yang hadir dalam tes masuk universitas tersebut?', '1500', 0),
(21, 1, '(Bobot nilai untuk soal dibawah ini 5X lebih besar dari soal lainnya).\r\nJarak Jakarta-Batu 350 km. Jika Budi berangkat dari Jakarta ke Batu pukul 06.00 pagi dengan mobil kecepatannya 60 km/jam. Pada waktu dan rute yang sama Andi berangkat dari Batu menuju Jakarta dengan mengendarai mobil yang kecepatannya 80 km/jam. Pada jarak berapa dari Jakarta keduanya berpapasan?\r\n', '150', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal2`
--

CREATE TABLE IF NOT EXISTS `soal2` (
  `id` int(11) NOT NULL,
  `soal` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `A` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `B` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `D` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jawaban` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `percobaan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal2`
--

INSERT INTO `soal2` (`id`, `soal`, `A`, `B`, `C`, `D`, `jawaban`, `percobaan`) VALUES
(1, 'Hidung : Nafas = Kaki : ', 'Berjalan', 'Mendengar', 'Mengecap', 'Merasa', 'A', 0),
(2, 'Aquarium : Ikan = Sangkar :', 'Singa', 'Anjing', 'Burung', 'Kucing', 'C', 0),
(3, 'Sepatu : Alas = Helm :', 'Karton', 'Busa', 'Besi', 'Alumunium', 'B', 0),
(4, 'Rajin : Berhasil = Malas : ', 'Kaya', 'Sukses', 'Berkembang', 'Gagal', 'D', 0),
(5, 'Es : Cair = Air :', 'Membeku', 'Menguap', 'Menyublin', 'Membakar', 'B', 0),
(6, 'Pohon : Hijau = Tanah :', 'Merah', 'Biru', 'Abu-abu', 'Coklat', 'D', 0),
(7, 'Staff : Supervisor = Supervisor : ', 'Anak Magang', 'Manager ', 'Vice President ', 'CFO', 'B', 0),
(8, 'Telfon : Nomor = Surat : ', 'Email', 'Alamat', 'Surel', 'Tautan', 'B', 0),
(9, 'Meteran : Panjang = Jam Tangan :', 'Tanggal', 'Waktu', 'Tahun', 'Bulan', 'B', 0),
(10, 'Kepala : Rambut = Jari :', 'Kuku ', 'Rumput', 'Daun', 'Bulu', 'A', 0),
(11, 'Merdeka : Penjajahan = Cuti : ', 'Bekerja', 'Lembur', 'Pagi', 'Sore', 'A', 0),
(12, 'Pensil : Penghapus = Cat :', 'Amplas', 'Kertas', 'Tipe-x', 'Pulpen', 'A', 0),
(13, 'Lidah : Perasa = Kulit:', 'Pengecap', 'Peraba', 'Pendengaran', 'Pengelihatan', 'B', 0),
(14, 'Design : Designer = Recruit :', 'Recruiter ', 'Kontraktor', 'HRD', 'Polisi', 'A', 0),
(15, 'Kamera : Foto = Handycam :', 'Polaroid', 'Gambar', 'Lukisan', 'Video', 'D', 0),
(16, 'Suami : Istri = Jantan :', 'Pria', 'Wanita', 'Betina', 'Pasangan', 'C', 0),
(17, 'Pulpen : Tinta = Mobil :', 'Air', 'Bensin', 'Pupuk', 'Uang', 'B', 0),
(18, 'Australia : Kanguru = Indonesia', 'Garuda ', 'Koala', 'Citah', 'Panther', 'A', 0),
(19, 'Kabel : Listrik = Jalan :', 'Semen', 'Aspal', 'Kendaraan', 'Landasan', 'C', 0),
(20, 'Udara : Bernafas = Air :', 'Panas', 'Makan', 'Minum', 'Istirahat', 'C', 0),
(21, 'Cermin : Bersolek = Microphone :  ', 'Bersuara', 'Berteriak', 'Bernyanyi', 'Berbisik', 'C', 0),
(22, 'Pintar : Bekerja = Bodoh : ', 'Bebaur', 'Bermain', 'Tersungkur', 'Menganggur', 'D', 0),
(23, 'Pisang : Buah = Tomat :  ', 'Sayur', 'Umbi-Umbian', 'Akar-Akaran', 'Buah', 'D', 0),
(24, 'Gelas : Air = Mangkuk : ', 'Teh', 'Ikan', 'Sup', 'Kopi', 'C', 0),
(25, 'Olahraga : Sehat = Merokok :', 'Batuk', 'Lelah', 'Letih', 'Sakit', 'D', 0),
(26, 'Menang : Kalah = Hidup : ', 'Bernafas', 'Bergerak', 'Mati', 'Tertawa', 'C', 0),
(27, 'Jarak : KM = Berat : ', 'CM', 'DM', 'G', 'KG', 'D', 0),
(28, 'Coklat : Manis = Cabai :  ', 'Asin', 'Asam', 'Pahit', 'Pedas', 'D', 0),
(29, 'Januari : Bulan = Senin', 'Hari', 'Tahun', 'Selasa', 'Tanggal', 'A', 0),
(30, 'Buku : Tulis = Kanvas : ', 'Kasar', 'Cat', 'Lukis', 'Kertas', 'C', 0),
(31, 'Angka : Hitung = Huruf : ', 'Penjumlahan', 'Baca', 'Penambahan', 'Perhitungan', 'B', 0),
(32, 'Mesin : Oli = Mobil : ', 'Air', 'Bakar ', 'Bensin', 'Charge', 'C', 0),
(33, 'Kursi : Duduk = Kasur : ', 'Berdiri', 'Bermimpi', 'Tidur', 'Membaca', 'C', 0),
(34, 'Bingkai : Foto = Brangkas : ', 'Air', 'Oksigen', 'Kertas', 'Emas', 'D', 0),
(35, 'Muda : Tua = Tua : ', 'Lahir', 'Sakit', 'Usia', 'Mati', 'D', 0),
(36, 'Kaya : Raya = Miskin : ', 'Melarat', 'Senang', 'Suka', 'Pesta', 'A', 0),
(37, 'Sedih : Senang = Murah : ', 'Durja', 'Discount', 'Mahal', 'Meriah', 'C', 0),
(38, 'Cepat : Lambat = Pagi : ', 'Siang', 'Malam', 'Sore', 'Matahari', 'B', 0),
(39, 'Senang : Senyum = Sedih :', 'Happy', 'Suka', 'Cemberut', 'Duka', 'C', 0),
(40, 'Ramai : Pasar = Sepi', 'Perpustakaan', 'Mal', 'Bazar', 'Kantor', 'A', 0),
(41, 'Toples : Kue = Rak :', 'Kayu', 'Besi', 'Buku', 'Tart', 'C', 0),
(42, 'Anjing : Bulu = Ikan :', 'Sirip', 'Sisik', 'Insang', 'Kulit', 'B', 0),
(43, 'Makan : Lapar = Minum : ', 'Kurang Kenyang', 'Sangat Kenyang', 'Dahaga', 'Tersedak', 'C', 0),
(44, 'Panjang : Tinggi = Pendek :', 'Lebih Tinggi', 'Tinggi Sekali', 'Bulat', 'Rendah', 'D', 0),
(45, 'Jaket : Kulit = Lantai : ', 'Keramik', 'Ubin', 'Air', 'Daun', 'A', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal3`
--

CREATE TABLE IF NOT EXISTS `soal3` (
`id` int(11) NOT NULL,
  `percobaan` int(11) NOT NULL,
  `soal` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jawaban` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal3`
--

INSERT INTO `soal3` (`id`, `percobaan`, `soal`, `jawaban`) VALUES
(1, 0, '2	3	4	5	6	7', '8 , 9'),
(2, 0, '20	22	24	26	28	30', '32 , 34'),
(3, 0, '30	27	24	21	19	16', '13 , 10'),
(4, 0, '7	14	28	46	92	184', '368 , 736'),
(5, 0, '7	12	9	14	11	16', '13 , 18'),
(6, 0, '4	9	16	23	31	40', '50 , 61'),
(7, 0, '9	18	11	20	13	21', '14 , 23'),
(8, 0, '64	32	16	8	4	2', '1 , 0.5'),
(9, 0, '69	61	52	42	31	19', '6 , -8'),
(10, 0, '22	27	108	113	452	457', '1828 , 1833'),
(11, 0, '25	50	100	200	400	800', '1600 , 3200'),
(12, 0, '9	6	12	9	18	15', '30 , 27'),
(13, 0, '6096	3048	1524	762	381	190.5', '95.25 , 47.625'),
(14, 0, '30	10	40	8	50	6', '60 , 4'),
(15, 0, '17	18	22	14	28	11', '35 , 9'),
(16, 0, '64	60	55	49	42	34', '43 , 33'),
(17, 0, '21	10	22	11	23	12', '24 , 13'),
(18, 0, '10000	10	1000	1	100	0.1', '10 , 0.01'),
(19, 0, '5	20	10	40	20	80', '40 , 160'),
(20, 0, '18	9	10	5	6	3', '4, 2'),
(21, 0, '-3	-6	-9	-15	-24	-39', '-63 , -102'),
(22, 0, '1	2	5	12	9	22', '13 , 32'),
(23, 0, '1/2 	1/2 	 1/4	1/12  	1/48  	1/240  ', '1/1440  ,1/2880'),
(24, 0, '0	15	-15	30	-30	45', '-45 , 60'),
(25, 0, '24	30	18	42	-6	90', '-102 , 282');

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
  `jumlah_masuk` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `jumlah_masuk`) VALUES
(1, 'Ahmad Gojali', 'ali', 'ali', 'ahmadgojali@gmail.com', 0),
(2, 'budi 1', 'budi', 'budi1', 'budi1@gmail.com', 0),
(3, 'budi 2', 'budi', 'budi2', 'budi2@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soal1`
--
ALTER TABLE `soal1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal3`
--
ALTER TABLE `soal3`
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
-- AUTO_INCREMENT for table `soal1`
--
ALTER TABLE `soal1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `soal3`
--
ALTER TABLE `soal3`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
