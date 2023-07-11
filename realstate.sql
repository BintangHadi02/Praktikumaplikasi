-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2023 pada 21.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realstate`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah`
--

CREATE TABLE `rumah` (
  `koderumah` int(11) NOT NULL,
  `lokasi` text NOT NULL,
  `idpemilik` char(30) NOT NULL,
  `namapemilik` char(10) NOT NULL,
  `tanggalbeli` date NOT NULL,
  `tanggallunas` date NOT NULL,
  `kode_tipe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rumah`
--

INSERT INTO `rumah` (`koderumah`, `lokasi`, `idpemilik`, `namapemilik`, `tanggalbeli`, `tanggallunas`, `kode_tipe`) VALUES
(2, 'bengkulu', '982879832', 'budi', '2023-07-12', '2023-07-21', '14567'),
(3, 'bandung', '653117', 'bandu', '2023-01-10', '2023-07-28', '980678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiperumah`
--

CREATE TABLE `tiperumah` (
  `kodetipe` int(10) NOT NULL,
  `namatipe` varchar(15) NOT NULL,
  `deskripsirumah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`koderumah`);

--
-- Indeks untuk tabel `tiperumah`
--
ALTER TABLE `tiperumah`
  ADD PRIMARY KEY (`kodetipe`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rumah`
--
ALTER TABLE `rumah`
  MODIFY `koderumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tiperumah`
--
ALTER TABLE `tiperumah`
  MODIFY `kodetipe` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
