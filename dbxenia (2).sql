-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Agu 2020 pada 14.36
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbxenia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisa_hasil`
--

CREATE TABLE `analisa_hasil` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `session_id` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `kd_penyakit` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisa_hasil`
--

INSERT INTO `analisa_hasil` (`id`, `nama`, `session_id`, `tanggal`, `kd_penyakit`) VALUES
(11, 'Hanung Dwi Nanda Fauzi ', '167b58ce2d21db6eeef28e71a6d1e6cc', '2019-09-05', 3),
(12, 'Hanung Dwi Nanda Fauzi ', 'aa029fce81f1367ff8b6bd6235d257c8', '2019-09-05', 2),
(13, 'Hanung Dwi Nanda Fauzi ', '8fdd595d55edf5347937f66f5e407c04', '2019-09-05', 4),
(14, 'Hanung Dwi Nanda Fauzi ', '5457ebec254e6b506f720c536a9cd3a8', '2019-09-05', 2),
(15, 'Hanung Dwi Nanda Fauzi ', '71d75556deb9558742875537996aca92', '2019-09-05', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `tahun` text NOT NULL,
  `akses_level` varchar(6) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `username`, `nama_customer`, `type`, `tahun`, `akses_level`) VALUES
(1, '', 'haruka san', 'XENIA XI ', '2013', ''),
(2, '', 'test', 'XI VVTI', '2009', '3'),
(3, '', 'test', 'Type X', '2013', '3'),
(4, '', 'test5', 'Type D', '2014', '3'),
(5, '', 'mamang', 'Type M', '2011', 'user'),
(6, '', 'mamang2', 'LI VVTI', '2004', 'user'),
(7, '', '', 'XI VVTI', '2010', 'user'),
(8, '', '', 'LI VVTI', '2006', 'user'),
(9, '', '', 'Type D', '2013', 'user'),
(10, '', 'mamang2', 'Type D', '2014', 'user'),
(11, '', 'mamang2', 'Type D', '2013', 'user'),
(12, 'mamang2', 'mamang', 'XI VVTI', '2008', 'user'),
(13, 'mamang2', 'mamang2', 'LI VVTI', '2004', 'user'),
(14, 'mamang2', 'mamang2', 'XI VVTI', '2007', 'user'),
(15, 'mamang2', 'mamang2', 'Type X', '2004', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(3) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`, `status`) VALUES
('G01', 'terjadi getaran pada kabin saat mesin menyala', ''),
('G02', 'Terdapat sisa pelumas pada kepala busi', ''),
('G03', 'Terdapat sisa kerak pada kepala busi', ''),
('G04', 'Busi berwarna coklat/kemerahan', ''),
('G05', 'Elektroda meleleh', ''),
('G06', 'Idle kasar dan tidak langsam pada saat rpm rendah', ''),
('G07', 'Mesin tersendat saat pedal gas diinjak', ''),
('G08', 'Tenaga melemah saat akselerasi', ''),
('G09', 'Akselerasi buruk dan boros bbm', ''),
('G10', 'Lampu indicator cek engine berkedip', ''),
('G11', 'Suara mesin megelitik', ''),
('G12', 'Tenaga mesin loyo', ''),
('G13', 'Suara mesin mendesis', ''),
('G14', 'Terdengar bunyi gluduk saat gas dilepas', ''),
('G15', 'Tiba-tiba lost power', ''),
('G16', 'Tidak ada hebusan pada ac', ''),
('G17', 'Extra fan tidak berputar', ''),
('G18', 'Kipas Ac tidak berputar', ''),
('G19', 'Ac tiba-tiba panas', ''),
('G20', 'Indicator temperature naik', ''),
('G21', 'Rem bunyi saat diinjak', ''),
('G22', 'Rem mobil keras', ''),
('G23', 'Rem mobil dalam', ''),
('G24', 'Rem mobil terasa bergetar', ''),
('G25', 'Rem macet', ''),
('G26', 'Mesin mogok', ''),
('G27', 'Oli bercampur air', ''),
('G28', 'Bau terbakar diarea transmisi', ''),
('G29', 'Bau mesin menyengat', ''),
('G30', 'Tenaga mesin berkurang', ''),
('G31', 'Terdengar bunyi dugdug saat melepas kopling', ''),
('G32', 'Gigi seperti mengunci keatas', ''),
('G33', 'Tombol overdrive aktif', ''),
('G34', 'Telah masuk gigi R tp tidak mundur', ''),
('G35', 'Sulit over gigi', ''),
('G36', 'Stater tidak berfungsi', ''),
('G37', 'Air aki keruh', ''),
('G38', 'Crangking kurang dari 10volt', ''),
('G39', 'Terdengar bunyi kasar saat distater', ''),
('G40', 'Mobil bergetar saat kecepatan sedang atau  tinggi', ''),
('G41', 'Terdapat bunyi Klutuk-klutuk saat akselerasi dan d', ''),
('G42', 'Stir berbelok sendiri pada satu arah', ''),
('G43', 'permukaan ban tidak rata / aus', ''),
('G44', 'berjalan miring saat dikendarai', ''),
('G45', 'mesin menghentakk saat dijalankan pertama kali', ''),
('G46', 'Lampu Mati', ''),
('G47', 'Klakson Mati', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_analisa`
--

CREATE TABLE `hasil_analisa` (
  `id_kerusakan` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_pasien` varchar(20) NOT NULL,
  `type` varchar(12) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `nama_kerusakan` varchar(200) NOT NULL,
  `solusi` varchar(600) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_analisa`
--

INSERT INTO `hasil_analisa` (`id_kerusakan`, `username`, `tanggal`, `nama_pasien`, `type`, `tahun`, `nama_kerusakan`, `solusi`, `status`) VALUES
(1, '', '2020-07-23 14:16:08', '', '', '', 'ISC bermasalah', '', ''),
(2, '', '2020-07-23 14:28:32', '', '', '', 'ISC bermasalah', '', ''),
(3, '', '2020-07-23 14:28:55', '', '', '', 'ISC bermasalah', '', ''),
(4, '', '2020-07-27 23:04:04', '', '', '', 'Premature Ignition (Pengapian tidak sempurna)/knoc', '', '2'),
(5, '', '2020-07-28 09:37:10', '', '', '', 'Premature Ignition (Pengapian tidak sempurna)/knoc', '', '2'),
(6, '', '2020-07-28 09:38:08', '', '', '', 'Premature Ignition (Pengapian tidak sempurna)/knoc', '', '2'),
(7, '', '2020-08-03 21:53:22', '', '', '', 'ISC bermasalah', '', '2'),
(8, '', '2020-08-03 21:56:01', '', '', '', 'ISC bermasalah', '', '2'),
(9, '', '2020-08-03 21:59:30', '', '', '', 'ISC bermasalah', '', '2'),
(10, '', '2020-08-03 22:05:04', '', '', '', 'ISC bermasalah', '', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id_history` int(5) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `tanggal_konsultasi` date NOT NULL,
  `nama_kerusakan` varchar(30) NOT NULL,
  `solusi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id_kerusakan` varchar(3) NOT NULL,
  `nama_kerusakan` varchar(50) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kerusakan`
--

INSERT INTO `kerusakan` (`id_kerusakan`, `nama_kerusakan`, `status`) VALUES
('K01', 'Kerusakan pada busi', '2'),
('K02', 'ISC bermasalah', '2'),
('K03', 'Premature Ignition (Pengapian tidak sempurna)/knoc', '2'),
('K04', 'kerusakan AC / Freon Ac habis', '2'),
('K05', 'kerusakan pada rem\r\n', '2'),
('K06', 'mesin overheat', '2'),
('K07', 'kerusakan transmisi', '2'),
('K08', 'kerusakan ACCU', '2'),
('K09', 'Kerusakan Engine Mounting', '2'),
('K10', 'kerusakan pada bagian roda', '2'),
('K11', 'Kerusakan Sistem Kelistrikan', '2'),
('K12', 'Kerusakan Testing', '2'),
('K13', 'Kerusakan Testing 2', '2'),
('K14', 'Kerusakan testing 3', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` char(5) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tglkonsultasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `nama`, `tglkonsultasi`) VALUES
('10001', 'gilang', '2019-07-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(6) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `type`, `tahun`) VALUES
(1, 'mas kenang', 'xi vvti', '2010'),
(2, 'jonatan', 'LI VVTI', '2006'),
(3, 'candra', 'xi vvti', '2008'),
(4, 'Kang Husen', 'Xenia type M', '2013'),
(5, 'Dedy', 'Li VVTi', '2008'),
(6, 'Berkah Lulu Ac', 'xi vvti', '2011'),
(7, 'Desniar', 'All New Xenia Type R', '2014'),
(8, 'budi', 'Xenia type D', '2030'),
(9, 'angga', 'Type D', '2030');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(5) NOT NULL,
  `nama_pemilik` varchar(25) NOT NULL,
  `type` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `type`, `tahun`) VALUES
(1, 'candra', 'XENIA XI ', '2011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi`
--

CREATE TABLE `relasi` (
  `id_relasi` int(11) NOT NULL,
  `id_penyakit` varchar(3) NOT NULL,
  `id_gejala` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi`
--

INSERT INTO `relasi` (`id_relasi`, `id_penyakit`, `id_gejala`) VALUES
(1, 'P01', 'G01'),
(2, 'P01', 'G02'),
(3, 'P01', 'G03'),
(4, 'P02', 'G04'),
(5, 'P02', 'G05'),
(6, 'P03', 'G06'),
(7, 'P03', 'G07'),
(8, 'P03', 'G08'),
(9, 'P04', 'G09'),
(10, 'P04', 'G10'),
(11, 'P04', 'G11'),
(12, 'P05', 'G12'),
(13, 'P05', 'G13'),
(14, 'P06', 'G14'),
(15, 'P06', 'G15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` char(3) NOT NULL,
  `id_kerusakan` varchar(3) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `id_kerusakan`, `solusi`) VALUES
('S01', 'K01', 'Mengganti dengan Busi baru atau'),
('S02', 'K02', 'Bersihkan injektor dengan cairan khusus (Injector Cleaner)'),
('S03', 'K03', 'Gunakan bensin dengan oktane tinggi'),
('S04', 'K03', 'Bersihkan ruang bakar menggunakan carbon cleaner'),
('S05', 'K03', 'Bersihkan busi dan filter udara'),
('S06', 'K03', 'Ganti filter bahan bakar'),
('S07', 'K04', 'Bawa mobil ke bengkel khusus Radiator'),
('S08', 'K08', 'Lakukan pengecekan pada aki'),
('S09', 'K08', 'Stroom Aki'),
('S10', 'K08', 'Segera bawa ke bengkel untuk pengecekan engine mounting'),
('S11', 'K04', 'Lakukan Pengecekan Freon Ac di Bengkel Ac terdekat'),
('S12', 'K05', 'penggantian / repair bagian Kanvas Rem'),
('S13', 'K05', 'mengganti master rem dengan yang baru'),
('S14', 'K05', 'Cek Minyak Rem Jika berkurang tambahkan sesuai takaran'),
('S15', 'K06', 'Parkir di Pinggir Jalan Sambil Matikan Mesin Mobil'),
('S16', 'K06', 'Buka Kap Mesin Mobil'),
('S17', 'K06', 'Hindari Membuka Tutup Radiator ( Biarkan dingin terlebih dahulu)'),
('S18', 'K06', 'Periksa Cadangan Air di Dalam Radiator'),
('S19', 'K06', 'Bersihkan Radiator Secara Berkala'),
('S20', 'K07', 'Segera bawa Mobil ke Bengkel terdekat'),
('S21', 'K01', 'bersihkan busi satu per satu menggunakan injector cleaner'),
('S22', 'K01', 'setelah itu di uji apakah masih ada listriknya atau tidak'),
('S23', 'K02', 'Bersihkan filter udara dan busi '),
('S24', 'K09', 'Segera ganti Engine Mounting di bengkel terdekat, jika dibiarkan akan berakibat merusak komponen lainnya'),
('S25', 'K10', 'segera Spooring atau Balancing di Bengkel terdekat dr wilayah anda, jika dibiarkan dapat merusak kualitas ban dan kurang nyaman saat dikendarai'),
('S26', 'K11', 'bengkel'),
('S27', 'K11', 'bengkerl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tree`
--

CREATE TABLE `tree` (
  `id` int(11) NOT NULL,
  `id_gejala` varchar(5) NOT NULL,
  `ifyes` int(11) NOT NULL,
  `ifno` int(11) NOT NULL,
  `hasil` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tree`
--

INSERT INTO `tree` (`id`, `id_gejala`, `ifyes`, `ifno`, `hasil`) VALUES
(1, 'G01', 6, 11, NULL),
(2, 'G02', 3, 99, NULL),
(3, 'G03', 4, 99, NULL),
(4, 'G04', 5, 99, NULL),
(5, 'G05', 0, 99, 'K01'),
(6, 'G06', 7, 40, NULL),
(7, 'G07', 8, 99, NULL),
(8, 'G08', 9, 2, NULL),
(9, 'G09', 0, 99, 'K02'),
(11, 'G11', 12, 16, NULL),
(12, 'G12', 13, 99, NULL),
(13, 'G13', 14, 99, NULL),
(14, 'G14', 15, 99, NULL),
(15, 'G15', 0, 99, 'K03'),
(16, 'G16', 17, 21, NULL),
(17, 'G17', 18, 99, NULL),
(18, 'G18', 19, 99, NULL),
(19, 'G19', 20, 99, NULL),
(20, 'G20', 0, 99, 'K04'),
(21, 'G21', 22, 26, NULL),
(22, 'G22', 23, 99, NULL),
(23, 'G23', 24, 99, NULL),
(24, 'G24', 25, 99, NULL),
(25, 'G25', 46, 99, 'K11'),
(26, 'G26', 27, 31, NULL),
(27, 'G27', 28, 99, NULL),
(28, 'G28', 29, 99, NULL),
(29, 'G29', 30, 99, NULL),
(30, 'G30', 0, 99, 'K06'),
(31, 'G31', 32, 36, NULL),
(32, 'G32', 33, 99, NULL),
(33, 'G33', 34, 99, NULL),
(34, 'G34', 35, 99, NULL),
(35, 'G35', 0, 99, 'K07'),
(36, 'G36', 37, 25, NULL),
(37, 'G37', 38, 99, NULL),
(38, 'G38', 39, 99, NULL),
(39, 'G39', 40, 99, NULL),
(40, 'G40', 41, 42, NULL),
(41, 'G41', 45, 99, NULL),
(42, 'G42', 43, 99, NULL),
(43, 'G43', 44, 99, NULL),
(44, 'G44', 0, 45, 'K10'),
(45, 'G45', 0, 99, 'K09'),
(46, 'G46', 47, 99, 'NULL'),
(47, 'G47', 0, 99, 'K11'),
(48, 'G25', 46, 99, 'NULL'),
(49, 'G36', 46, 99, 'K11'),
(50, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal_update`) VALUES
(2, 'Super Admin', 'hanung@gmail.com', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '2019-07-27 15:08:37'),
(3, 'Pembantu Admin', 'gilang@gmail.com', 'Admin2', '4e7afebcfbae000b22c7c85e5560f89a2a0280b4', 'Admin', '2019-07-27 15:09:03'),
(4, 'Daihatsu Tegal', 'hening@gmail.com', 'daihatsu', '315f166c5aca63a157f7d41007675cb44a948b33', 'Admin', '2020-03-19 12:10:51'),
(5, 'pakarnya', '', 'pakar', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Pakar', '2020-07-27 05:10:31'),
(6, 'mamang', 'mamang', 'mamang', 'b1623d985386fabb5fda9f090423177029bf6631', '', '2020-07-28 08:29:09'),
(7, 'mamang2', 'mamang2', 'mamang2', '82388ade65afd3b6e8eb7f198d33cc56820b5f13', 'user', '2020-07-28 08:31:31'),
(8, 'mang garok', 'mangarok@gmail', 'garokss', 'd11d9ede704759dc1c1e53dd27b1f117b7742d26', 'user', '2020-07-28 14:58:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `hasil_analisa`
--
ALTER TABLE `hasil_analisa`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `hasil_analisa`
--
ALTER TABLE `hasil_analisa`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
