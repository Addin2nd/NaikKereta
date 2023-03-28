-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2021 pada 13.04
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naikkereta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminn`
--

CREATE TABLE `adminn` (
  `id` int(11) NOT NULL,
  `namadepan` varchar(50) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adminn`
--

INSERT INTO `adminn` (`id`, `namadepan`, `namabelakang`, `username`, `email`, `password`, `gambar`) VALUES
(2, 'Muhamad Addin', 'al-Haadi', 'admin', 'addinalhaadi@gmail.com', '$2y$10$uuDudl5YC4FSgDrxG7LMHO8XjNl/3CmcmKlLVvObhIw.mdAAPV2yy', 'admin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapemesanan`
--

CREATE TABLE `datapemesanan` (
  `id` int(11) NOT NULL,
  `namaPembeli` varchar(255) NOT NULL,
  `namaKereta` varchar(255) NOT NULL,
  `tglBerangkat` date NOT NULL,
  `waktuBerangkat` time NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `berangkat` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `dewasa` int(11) NOT NULL,
  `anakanak` int(11) NOT NULL,
  `nomorTelepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapemesanan`
--

INSERT INTO `datapemesanan` (`id`, `namaPembeli`, `namaKereta`, `tglBerangkat`, `waktuBerangkat`, `kelas`, `berangkat`, `tujuan`, `dewasa`, `anakanak`, `nomorTelepon`) VALUES
(6, 'reni', 'Argo Wilis', '2021-01-17', '15:00:00', 'Ekonomi', 'Bandung BDG', 'Yogyakarta YGK', 1, 1, '087781493809');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kereta`
--

CREATE TABLE `kereta` (
  `id` int(11) NOT NULL,
  `namakereta` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kereta`
--

INSERT INTO `kereta` (`id`, `namakereta`, `kelas`, `harga`, `jurusan`) VALUES
(1, 'Argo Wilis', 'Eksekutif', '120.000', 'Bandung - Surabaya'),
(4, 'Argo Parahyangan', 'Ekonomi', '100.000', 'Bandung - Gambir'),
(6, 'Turangga', 'Eksekutif', '110.000', 'Bandung - Surabaya'),
(7, 'Jayabaya', 'Eksekutif', '225.000', 'Pasar Senen - Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noTelepon` varchar(50) NOT NULL,
  `masukan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `email`, `noTelepon`, `masukan`) VALUES
(6, 'raka.bae@gmail.com', '087781493809', 'punten, mo cancel gimana ya?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `namadepan` varchar(50) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `namadepan`, `namabelakang`, `username`, `email`, `password`) VALUES
(6, 'Arham', 'Irsyad', 'arham', 'arham@gmail.com', '$2y$10$Yk6HvIOSW0IZ.SWjN6azYuO0l6F1RI42KnYyD3rdtrwVREfI7Isvq'),
(8, 'Ridho', 'Adha', 'ridho', 'ridho@gmail.com', '$2y$10$dghxf3PTA24cIpewphrFR.62x5Ro3zMBAHJ7XVMb0Xz9yuFNF8/oO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stasiun`
--

CREATE TABLE `stasiun` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `namastasiun` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stasiun`
--

INSERT INTO `stasiun` (`id`, `kode`, `namastasiun`, `lokasi`) VALUES
(6, 'YGK', 'Yogyakarta', 'Yogyakarta'),
(7, 'JKT', 'Jakarta', 'Jakarta'),
(8, 'BLI', 'Bali', 'Bali'),
(9, 'SGU', 'Gubeng', 'Surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `idTiket` int(11) NOT NULL,
  `kodeTiket` varchar(255) NOT NULL,
  `NamaKereta` varchar(255) NOT NULL,
  `namaPembeli` varchar(255) NOT NULL,
  `tglBerangkat` date NOT NULL,
  `waktuBerangkat` time NOT NULL,
  `waktuSampai` time NOT NULL,
  `harga` int(200) NOT NULL,
  `noKursi` varchar(255) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `berangkat` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`idTiket`, `kodeTiket`, `NamaKereta`, `namaPembeli`, `tglBerangkat`, `waktuBerangkat`, `waktuSampai`, `harga`, `noKursi`, `kelas`, `berangkat`, `tujuan`) VALUES
(6, '6446193', 'Argo Wilis', 'reni', '2021-01-17', '15:00:00', '18:00:00', 150000, '20, 21', 'Ekonomi', 'Bandung BDG', 'Yogyakarta YGK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `namadepan` varchar(50) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `namadepan`, `namabelakang`, `username`, `email`, `password`) VALUES
(10, 'Raka Zia', 'Insani', 'raka', 'raka@gmail.com', '$2y$10$rkVWUvgpwDV.ay2yyxDVyu/MaxdDREfeQkqOgQ7ZHXxIsJeujPTI2'),
(11, 'reni', 'amanta', 'reni', 'reni@gmail.com', '$2y$10$zj/0KeXSe4SN8xpuAOOdse5Si4YeFhEFElYszNcJwRvJwDaA17bDW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapemesanan`
--
ALTER TABLE `datapemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stasiun`
--
ALTER TABLE `stasiun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`idTiket`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`namadepan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `datapemesanan`
--
ALTER TABLE `datapemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kereta`
--
ALTER TABLE `kereta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `stasiun`
--
ALTER TABLE `stasiun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `idTiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
