-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Feb 2020 pada 18.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahCI`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'server123', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(1, 'uri:api/sekolah/index:get', 7, 1580455753, 'server123'),
(2, 'uri:api/sekolah/index:delete', 1, 1580371845, 'server123'),
(3, 'uri:api/sekolah/index:put', 7, 1580374194, 'server123'),
(4, 'uri:api/sekolah/index:post', 1, 1580375313, 'server123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbSekolah`
--

CREATE TABLE `tbSekolah` (
  `id` int(255) NOT NULL,
  `wilayah` varchar(255) NOT NULL,
  `sd` varchar(5) NOT NULL,
  `smp` varchar(5) NOT NULL,
  `sma` varchar(5) NOT NULL,
  `smk` varchar(5) NOT NULL,
  `slb` varchar(5) NOT NULL,
  `jml` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbSekolah`
--

INSERT INTO `tbSekolah` (`id`, `wilayah`, `sd`, `smp`, `sma`, `smk`, `slb`, `jml`) VALUES
(1, 'Kec. Ciparay', '69', '24', '11', '5', '4', '113'),
(2, 'Kec. Rancaekek', '66', '20', '5', '14', '3', '108'),
(3, 'Kec. Baleendah', '68', '17', '8', '12', '1', '106'),
(4, 'Kec. Majalaya', '69', '14', '7', '9', '2', '101'),
(5, 'Kec. Paseh', '66', '13', '6', '7', '2', '94'),
(6, 'Kec. Pangalengan', '70', '9', '3', '3', '1', '86'),
(7, 'Kec. Cileunyi', '54', '19', '3', '6', '3', '85'),
(8, 'Kec. Pacet', '50', '18', '2', '5', '0', '75'),
(9, 'Kec. Cimenyan', '49', '19', '2', '2', '2', '74'),
(10, 'Kec. Cicalengka', '48', '10', '5', '8', '3', '74'),
(11, 'Kec. Banjaran', '46', '14', '5', '8', '1', '74'),
(12, 'Kec. Margahayu', '45', '10', '6', '7', '5', '73'),
(13, 'Kec. Arjasari', '47', '13', '6', '5', '1', '72'),
(14, 'Kec. Dayeuhkolot', '49', '12', '3', '3', '1', '68'),
(15, 'Kec. Ibun', '47', '10', '3', '5', '1', '66'),
(16, 'Kec. Soreang', '40', '9', '5', '5', '2', '61'),
(17, 'Kec. Margaasih', '44', '8', '3', '3', '2', '60'),
(18, 'Kec. Solokanjeruk', '44', '8', '2', '4', '1', '59'),
(19, 'Kec. Pasirjambu', '44', '10', '1', '2', '1', '58'),
(20, 'Kec. Kutawaringin', '45', '7', '1', '1', '1', '55'),
(21, 'Kec. Cikancung', '42', '9', '2', '1', '0', '54'),
(22, 'Kec. Katapang', '36', '8', '1', '5', '2', '52'),
(23, 'Kec. Kertasari', '43', '5', '2', '0', '0', '50'),
(24, 'Kec. Cimaung', '33', '9', '2', '3', '2', '49'),
(25, 'Kec. Bojongsoang', '30', '8', '2', '4', '1', '45'),
(26, 'Kec. Ciwidey', '33', '5', '3', '2', '0', '43'),
(27, 'Kec. Pameungpeuk', '29', '7', '3', '2', '1', '42'),
(28, 'Kec. Nagreg', '28', '6', '1', '5', '1', '41'),
(29, 'Kec. Rancabali', '31', '6', '2', '1', '0', '40'),
(30, 'Kec. Cangkuang', '23', '7', '2', '2', '1', '35'),
(31, 'Kec. Cilengkrang', '20', '5', '2', '1', '0', '28'),
(36, 'jabodetabek update', '2', '5', '2', '2', '2', '10'),
(37, 'cengkarng', '2', '4', '3', '5', '3', '90');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbSekolah`
--
ALTER TABLE `tbSekolah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbSekolah`
--
ALTER TABLE `tbSekolah`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
