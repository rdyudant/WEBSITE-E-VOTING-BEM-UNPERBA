-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2024 pada 15.22
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evotingbem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(25) CHARACTER SET latin1 NOT NULL,
  `password` varchar(32) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `hak_akses` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `aktif` enum('Y','T') CHARACTER SET latin1 NOT NULL DEFAULT 'T',
  `foto` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`, `hak_akses`, `email`, `aktif`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Ridho', 'Administrator', 'ridhoyudant22@gmail.com', 'Y', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datapemilu`
--

CREATE TABLE `tb_datapemilu` (
  `id_pemilu` int(5) NOT NULL,
  `prodi` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nmr_pemilih` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_paslon` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_datapemilu`
--

INSERT INTO `tb_datapemilu` (`id_pemilu`, `prodi`, `nmr_pemilih`, `id_paslon`, `waktu`) VALUES
(1, 'Informatika', '01905027', '2', '2024-05-31 06:15:18'),
(2, 'Teknik Mesin', '01905001', '1', '2024-05-31 06:16:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mhswa`
--

CREATE TABLE `tb_mhswa` (
  `nim` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'T',
  `memilih` varchar(2) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mhswa`
--

INSERT INTO `tb_mhswa` (`nim`, `password`, `nama`, `gender`, `prodi`, `email`, `aktif`, `memilih`, `foto`) VALUES
('01905001', '8646bb90ed27a08fd220f07f41147582', 'Dwimas Noviyanto', 'L', 'Teknik Mesin', '', 'Y', '', ''),
('01905027', 'ffad882ebd19a0193f16cbd7bad7e493', 'Ridho Dimas', 'L', 'Informatika', '', 'Y', '', ''),
('01905039', '79e2e2f39249e3d0c98102e579b9bc69', 'Selwiani', 'P', 'Akuntansi', '', 'Y', '', ''),
('01909001', '397f8438df22b64a89ed9dd168ec2b3d', 'Tukiman A', 'L', 'Teknik Mesin', '', 'Y', '', ''),
('01909002', '3f1d96f1718a8c030df7863fa1c545bd', 'Tukiman B', 'P', 'Agribisnis', '', 'Y', '', ''),
('01909003', '74ecfab5f9a45a4b34549d37a6e9d0fa', 'Tukiman C', 'L', 'Manajemen', '', 'Y', '', ''),
('01909004', '9845b45340a825d93cb908303d9ce695', 'Tukiman D', 'P', 'Informatika', '', 'Y', '', ''),
('01909005', 'cb1b4943285120c50ada6b414f898329', 'Tukiman E', 'L', 'Akuntansi', '', 'Y', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paslon`
--

CREATE TABLE `tb_paslon` (
  `id_paslon` int(2) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nomor` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `jml_suara` varchar(4) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `visi` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `misi` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_paslon`
--

INSERT INTO `tb_paslon` (`id_paslon`, `nama`, `nomor`, `jml_suara`, `visi`, `misi`, `foto`) VALUES
(1, 'Hashirama & Senju', '01', '1', 'Dari Mahasiswa, Oleh Mahasiswa, Untuk Mahasiswa.', '<ol>\r\n<li>Ketuhanan yang Maha Esa.\r\n<li>Kemanusiaan yang adil dan beradab.\r\n<li>Persatuan Indonesia.\r\n<li>Kerakyatan yang dipimpin oleh hikmat kebijaksanaan dalam permusyawaratan/perwakilan.\r\n<li>Keadilan sosial bagi seluruh rakyat Indonesia.\r\n</ol>', 'hokage1.jpg'),
(2, 'Uchiha & Itachi', '02', '1', 'Menjadi entrepreneur university berbasis Iptek yang unggul dalam kearifan lokal dan wawasan global pada tahun 2038.', '<ol>\r\n<li>Menyelenggarakan pendidikan akademik guna menghasilkan lulusan yang berkualitas dan berdaya saing tinggi, serta berkemampuan entrepreneur yang berkearifan lokal dan berwawasan global.\r\n<li>Menyelenggarakan penelitian untuk pengembangan ilmu pengetahuan dan teknologi yang dapat memacu peningkatan kemampuan entrepeneur yang berkearifan lokal dan berwawasan global.\r\n<li>Menyelenggarkan pengabdian kepada masyarakat dalam rangka pemberdayaan masyarakat khususnya di perdesaan yang memacu peningkatan kemampuan entrepreneur yang berkearifan lokal dan berwawasan global.\r\n</ol>', 'uchiha-itachi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(2) NOT NULL,
  `prodi` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `prodi`) VALUES
(3, 'Agribisnis'),
(1, 'Akuntansi'),
(5, 'Informatika'),
(2, 'Manajemen'),
(4, 'Teknik Mesin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `tb_datapemilu`
--
ALTER TABLE `tb_datapemilu`
  ADD PRIMARY KEY (`id_pemilu`);

--
-- Indeks untuk tabel `tb_mhswa`
--
ALTER TABLE `tb_mhswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tb_paslon`
--
ALTER TABLE `tb_paslon`
  ADD PRIMARY KEY (`id_paslon`);

--
-- Indeks untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD UNIQUE KEY `prodi` (`prodi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_datapemilu`
--
ALTER TABLE `tb_datapemilu`
  MODIFY `id_pemilu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_paslon`
--
ALTER TABLE `tb_paslon`
  MODIFY `id_paslon` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
