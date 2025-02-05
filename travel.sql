-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2024 pada 15.37
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

CREATE DATABASE travel;
USE travel;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `destination_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `destination`
--

INSERT INTO `destination` (`id`, `img`, `img2`, `img3`, `img4`, `destination_name`, `location`, `price`, `deskripsi`, `rating`) VALUES
(1, 'https://i.pinimg.com/736x/52/4e/34/524e34879037b5734c5c3a3f5d323c3a.jpg', '0', '', '', 'Santorini', '\r\nGreece,Eropa', 148, 'Santorini adalah pulau vulkanik di Laut Aegea yang terkenal dengan rumah-rumah bercat putih dengan kubah biru, laut biru kristal, dan matahari terbenam yang memukau. Destinasi ini merupakan pilihan favorit pasangan untuk bulan madu. Kota-kota seperti Oia ', 0),
(2, 'https://s7g10.scene7.com/is/image/barcelo/things-to-do-in-cappadocia_cappadocia-things-to-do?&&fmt=webp-alpha&qlt=75&wid=1300&fit=crop,1', '0', '', '', 'Cappadocia', 'Turkey,Asia', 400, 'Cappadocia terkenal dengan lanskap unik berupa cerobong peri, kota bawah tanah, dan rumah yang diukir di batu. Salah satu atraksi utama di sini adalah balon udara panas yang menawarkan pemandangan spektakuler dari hamparan bebatuan vulkanik. Selain itu, d', 0),
(3, 'https://images.unsplash.com/photo-1730432638537-719459845d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '0', '', '', 'Machu Picchu', 'Peru,America', 500, 'Machu Picchu adalah situs kuno suku Inca yang terletak di pegunungan Andes, Peru. Tempat ini dikenal sebagai salah satu Tujuh Keajaiban Dunia Baru. Keajaiban arkeologi ini menawarkan reruntuhan bangunan yang megah seperti kuil, teras bertingkat, dan obser', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
