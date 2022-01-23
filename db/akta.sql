-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2022 pada 09.03
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_akta`
--

CREATE TABLE `input_akta` (
  `id` int(5) NOT NULL,
  `para_pihak` varchar(100) NOT NULL,
  `no_akta` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jenis_akta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input_akta`
--

INSERT INTO `input_akta` (`id`, `para_pihak`, `no_akta`, `tgl_masuk`, `jenis_akta`) VALUES
(6, 'Jhonny,Sinta', 'CD/12334', '2022-01-16', 'Warisan'),
(13, 'David', 'A013BD', '2022-01-15', 'Sertifikat Tanah'),
(14, 'Tunggal, Mandiri', 'ER/0192345T411', '2021-02-28', 'Pembelian Motor'),
(15, 'Fita, Leo', 'AI/12301', '2021-11-28', 'Akta Pengakuan Kredit'),
(16, 'Jono, Gitok', 'AU/129877', '2022-01-01', 'Surat Perjanjian Sewa Menyewa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klien`
--

CREATE TABLE `klien` (
  `no_akta` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` varchar(25) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klien`
--

INSERT INTO `klien` (`no_akta`, `no_ktp`, `nama`, `tgl_lahir`, `no_hp`, `id`) VALUES
('CD/12334', '12098471000001', 'Test Test', '2000-12-31', '08213040141', 9),
('A013BD', '12098761534000000001', 'David Pratama Sinaga', '2000-7-30', '082164164531', 11),
('AI/12301', '120974812290000001', 'Fita Sari', '2000-03-23', '082342309382', 15),
('ER/0192345T411', '12098765167718', 'Mandiri Silaban', '1994-06-24', '08217665678', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'David Sinaga', 1, 'Staff Notaris Wihardi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `input_akta`
--
ALTER TABLE `input_akta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_akta` (`no_akta`) USING BTREE;

--
-- Indeks untuk tabel `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `input_akta`
--
ALTER TABLE `input_akta`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
