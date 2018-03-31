-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jan 2008 pada 16.48
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiakad_161530018`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbjurusan`
--

CREATE TABLE `tbjurusan` (
  `kd_jur` char(3) NOT NULL,
  `jurusan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbjurusan`
--

INSERT INTO `tbjurusan` (`kd_jur`, `jurusan`) VALUES
('120', 'Teknik Komputer & Informatika'),
('130', 'Teknik Mesin'),
('140', 'Teknik Kimia'),
('150', 'Teknik Sipil'),
('160', 'Akuntansi Bisnis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblogin`
--

CREATE TABLE `tblogin` (
  `id_log` int(11) NOT NULL,
  `id_user` char(5) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `device` varchar(75) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblogin`
--

INSERT INTO `tblogin` (`id_log`, `id_user`, `ip_address`, `device`, `browser`, `time`) VALUES
(1, 'ID001', '127.0.0.1', 'localhost', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:50.0) G', '2017-05-14 21:43:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmahasiswa`
--

CREATE TABLE `tbmahasiswa` (
  `nim` char(9) NOT NULL,
  `id_ta` tinyint(4) NOT NULL,
  `kd_prodi` char(3) NOT NULL,
  `nama_mhs` varchar(45) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tmp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `nama_ayah` varchar(45) NOT NULL,
  `nama_ibu` varchar(45) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tbmahasiswa`
--

INSERT INTO `tbmahasiswa` (`nim`, `id_ta`, `kd_prodi`, `nama_mhs`, `jk`, `tmp_lahir`, `tgl_lahir`, `agama`, `nama_ayah`, `nama_ibu`, `alamat`, `no_telepon`) VALUES
('161530018', 1, '152', 'Qomariyah', 'P', 'Pekalongan', '0000-00-00', 'Islam', 'Rasito', 'Muyasaroh', 'Jalan Bahurekso No.304 RT.01 RW.08 Kebonagung Kajen Pekalongan', '085741908343'),
('161530022', 3, '153', 'Naila Zulfa', 'P', 'Pekalongan', '0000-00-00', 'Islam', 'Rasito', 'Muyasaroh', 'Kebonagung', '029876555553');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbprodi`
--

CREATE TABLE `tbprodi` (
  `kd_prodi` char(3) NOT NULL,
  `prodi` varchar(45) NOT NULL,
  `kd_jur` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbprodi`
--

INSERT INTO `tbprodi` (`kd_prodi`, `prodi`, `kd_jur`) VALUES
('121', 'D2 - Teknik Informatika', '120'),
('122', 'D3 - Teknik Informatika', '120'),
('123', 'D4 - Teknik Infromatika', '120'),
('131', 'D2- Teknik Mesin', '130'),
('132', 'D3 - Teknik Mesin', '130'),
('133', 'D3 - Teknik Aeronautika', '130'),
('141', 'D2 - Teknik Kimia Tekstil', '140'),
('142', 'D3 - Teknik Kimia', '140'),
('143', 'D4 - Teknik Kimia', '140'),
('151', 'D3 - Teknik Konstruksi Gedung', '150'),
('152', 'D3 - Teknik Konstruksi Sipil', '150'),
('153', 'D4 - Teknik Perencanaan Jalan & Jembatan', '150'),
('161', 'D3 - Akuntansi', '160'),
('162', 'D3 - Keuangan Perbankan', '160'),
('163', 'D4 - Akuntansi', '160');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbthangkatan`
--

CREATE TABLE `tbthangkatan` (
  `id_ta` tinyint(4) NOT NULL,
  `tahun_angkatan` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbthangkatan`
--

INSERT INTO `tbthangkatan` (`id_ta`, `tahun_angkatan`) VALUES
(1, '2014'),
(2, '2015'),
(3, '2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id_user` char(5) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `lev_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `nama_user`, `pass`, `lev_user`) VALUES
('ID001', 'qori', '21232f297a57a5a743894a0e4a801fc3', 'Adminstrator'),
('ID004', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbjurusan`
--
ALTER TABLE `tbjurusan`
  ADD PRIMARY KEY (`kd_jur`);

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tbmahasiswa`
--
ALTER TABLE `tbmahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_ta` (`id_ta`),
  ADD KEY `kd_prodi` (`kd_prodi`);

--
-- Indexes for table `tbprodi`
--
ALTER TABLE `tbprodi`
  ADD PRIMARY KEY (`kd_prodi`),
  ADD KEY `kd_jur` (`kd_jur`);

--
-- Indexes for table `tbthangkatan`
--
ALTER TABLE `tbthangkatan`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbmahasiswa`
--
ALTER TABLE `tbmahasiswa`
  ADD CONSTRAINT `fk_prodi_mhs` FOREIGN KEY (`kd_prodi`) REFERENCES `tbprodi` (`kd_prodi`),
  ADD CONSTRAINT `fk_ta_mhs` FOREIGN KEY (`id_ta`) REFERENCES `tbthangkatan` (`id_ta`);

--
-- Ketidakleluasaan untuk tabel `tbprodi`
--
ALTER TABLE `tbprodi`
  ADD CONSTRAINT `fk_jur_prodi` FOREIGN KEY (`kd_jur`) REFERENCES `tbjurusan` (`kd_jur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
