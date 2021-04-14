-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2021 pada 16.34
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp4_dpbo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `matkul` varchar(100) NOT NULL,
  `status_td` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_dosen`
--

INSERT INTO `data_dosen` (`id`, `nip`, `nama_dosen`, `gender`, `tanggal_lahir`, `matkul`, `status_td`) VALUES
(8, '0000', 'Deni Darmawan', 'Pria', '1971-11-27', 'Teknologi Pendidikan', 'ACC'),
(9, '0A01', 'Nenden Citra S.N', 'Wanita', '2001-12-19', 'Website', 'ACC'),
(10, '1a2b', 'ArumNenden', 'Wanita', '2002-02-14', 'Arsitektur Komputer', 'ACC'),
(11, '1a2b', 'Zahra Elghisya', 'Wanita', '2001-09-17', 'Kalkulus', 'ACC'),
(12, '3c4d', 'Abighail Shafira', 'Wanita', '1999-10-25', 'Algoritma Pemrograman', 'Belum'),
(13, 'e56f', 'Alya Chairunisa faz', 'Wanita', '2001-03-31', 'Paradigma Pemrograman', 'Belum'),
(15, '05J5', 'Arozy Adi Falaqi', 'Pria', '2001-05-16', 'Basis Data', 'Belum'),
(16, '237G', 'Fadellah Rizky', 'Pria', '2001-09-06', 'Aljabar Linier', 'ACC'),
(18, '3005', 'Diestry Dellyana A', 'Wanita', '2005-05-30', 'IPA', 'ACC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
