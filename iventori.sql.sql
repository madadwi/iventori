-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2021 pada 07.36
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iventori`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `stock` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `name`, `code`, `stock`, `price`, `gambar`) VALUES
(100, 'Nuke 13R', 'wwdkkk', 88, 6000000, '60cad42edb84f.jpg'),
(108, 'Core 9', 'core995', 80, 8000000, '60d01483f23c6.jpg'),
(111, 'mada', 'maduy28618', 90, 1000000, '60d025058caec.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `barang` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `aksi` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `bayar` varchar(255) NOT NULL,
  `kembali` varchar(255) NOT NULL,
  `sisa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `tanggal`, `barang`, `kode`, `aksi`, `user`, `harga`, `jumlah`, `total`, `bayar`, `kembali`, `sisa`) VALUES
(10, '21 Juni 2021', 'Core 9', '666', 'tambah', 'abinoval123', '8000000', '80', '0', '0', '0', '0'),
(12, '21 Juni 2021', 'Batu Bata', 'batabata', 'hapus', 'abinoval123', '100000', '900', '0', '0', '0', '0'),
(13, '21 Juni 2021', 'Batu Bata', 'batabata', 'tambah', 'abinoval123', '100000', '900', '0', '0', '0', '0'),
(14, '21 Juni 2021', 'Batu Bata', 'batabata', 'beli', 'tes', '100000', '10', '1000000', '20000000', '19000000', '890'),
(15, '21 Juni 2021', 'Batu Bata', 'batabata', 'beli', 'tes', '100000', '5', '500000', '1000000', '500000', '885'),
(16, '21 Juni 2021', 'Batu Bata', 'batabata', 'beli', 'tes', '100000', '5', '500000', '1000000', '500000', '880'),
(17, '21 Juni 2021', 'Batu Bata', 'batabata', 'beli', 'tes', '100000', '5', '500000', '1000000', '500000', '875'),
(18, '21 Juni 2021', 'Batu Bata', 'batabata', 'beli', 'tes', '100000', '5', '500000', '1000000', '500000', '870'),
(19, '21 Juni 2021', 'Batu Bata', 'batabata', 'beli', 'tes', '100000', '5', '500000', '1000000', '500000', '865'),
(20, '21 Juni 2021', 'Batu Bata', 'batabata', 'edit', 'abinoval123', '20000', '865', '0', '0', '0', '0'),
(21, '21 Juni 2021', 'Core 9', 'core995', 'edit', 'abinoval123', '8000000', '80', '0', '0', '0', '0'),
(22, '21 Juni 2021', 'Batu Bata', 'batabata', 'hapus', 'abinoval123', '20000', '865', '0', '0', '0', '0'),
(23, '21 Juni 2021', 'mada', 'maduy28618', 'tambah', 'abinoval123', '1000000', '90', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(12, 'ucup', 'c4ca4238a0b923820dcc509a6f75849b', 'admin'),
(22, 'q', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(1111, 'jingjjjj', 'ba248c985ace94863880921d8900c53f', 'admin'),
(12345, 'qq', 'c4ca4238a0b923820dcc509a6f75849b', 'admin'),
(123123, 'q', '7694f4a66316e53c8cdd9d9954bd611d', 'user'),
(543277, 'adbi', '311eba6dada049960e16974e652ef134', 'user'),
(656545, 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'user'),
(3232323, 'abinoval123', '7815696ecbf1c96e6894b779456d330e', 'admin'),
(12007875, 'Mada123201', '25d55ad283aa400af464c76d713c07ad', 'admin'),
(12008125, 'Richal0410', '1b3aa46703693f9420ec25011f1e1707', 'admin'),
(12008211, 'syahril27', '1bbd886460827015e5d605ed44252251', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
