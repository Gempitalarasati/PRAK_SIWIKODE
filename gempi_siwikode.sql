-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 18.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gempi_siwikode`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kuliner`
--

CREATE TABLE `jenis_kuliner` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_kuliner`
--

INSERT INTO `jenis_kuliner` (`id`, `nama`) VALUES
(1, 'Kedai/Cafe'),
(2, 'Restaurant'),
(3, 'Pasar Kaget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_wisata`
--

CREATE TABLE `jenis_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_wisata`
--

INSERT INTO `jenis_wisata` (`id`, `nama`) VALUES
(0, 'dsdsfasadwad'),
(2, 'Kuliner'),
(3, 'Taman Wisata'),
(4, 'Museum'),
(5, 'Water Park / Kolam Renang'),
(11, 'sasasas'),
(12, 'aku'),
(14, 'aku saya'),
(15, 'when i am asas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profesi`
--

CREATE TABLE `profesi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profesi`
--

INSERT INTO `profesi` (`id`, `nama`) VALUES
(1, 'Artist'),
(2, 'Pejabat'),
(3, 'Mahasiswa'),
(4, 'Pegawai Swasta'),
(5, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `wisata_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `komentar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `email`, `wisata_id`, `user_id`, `rating`, `komentar`) VALUES
(1, 'User', 'toni@mail.com', 1, 2, 0, 'sdsd'),
(2, 'User', 'toni@mail.com', 2, 2, 3, 'asa'),
(3, 'User', 'toni@mail.com', 2, 2, 4, 'dsds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama`, `email`, `password`, `id_level`) VALUES
(1, 'Toni', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'User', 'user@mail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis_wisata_id` int(11) NOT NULL,
  `fasilitas` text DEFAULT NULL,
  `bintang` smallint(6) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `latlong` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `jenis_kuliner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `deskripsi`, `jenis_wisata_id`, `fasilitas`, `bintang`, `kontak`, `alamat`, `latlong`, `email`, `web`, `foto`, `jenis_kuliner_id`) VALUES
(1, 'sasa', 'asasa', 2, 'asa', NULL, '055', 'asas', 'sasa', 'toni@mail.com', 'asa', 'default.jpg', 1),
(2, 'fddf', 'dsdss', 4, 'asas', NULL, '04441', 'dsds', 'sds', 'tes@mail.com', 'dsds', 'default.jpg', 3),
(5, 'sdsd', 'sdsdsd', 3, 'dsds', 2, '2085220', 'sdsd', 'sdsd', 'tes@mail.com', 'asa', 'default.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profesi`
--
ALTER TABLE `profesi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_testimoni_wisata1_idx` (`wisata_id`),
  ADD KEY `fk_testimoni_profesi1_idx` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_level` (`id_level`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wisata_jenis_wisata_idx` (`jenis_wisata_id`),
  ADD KEY `fk_wisata_jenis_kuliner1_idx` (`jenis_kuliner_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `testimoni_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_users`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `fk_wisata_jenis_kuliner1` FOREIGN KEY (`jenis_kuliner_id`) REFERENCES `jenis_kuliner` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wisata_jenis_wisata` FOREIGN KEY (`jenis_wisata_id`) REFERENCES `jenis_wisata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
