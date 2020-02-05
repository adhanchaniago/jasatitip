-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2020 pada 05.22
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasa_titip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `nama_barang`, `jenis_barang`, `harga`, `jumlah`, `deskripsi`, `gambar`) VALUES
(4, 'Beras Kepala Special Cap Mawar', 'Beras', 200000, 10, 'Beras Kepala Special Cap Mawar', 'Beras_Kepala_special_cap_mawar.jpeg'),
(3, 'Beras Kepala Mawar Merah', 'Beras', 250000, 10, 'Beras Kepala Spesial Mawar Merah – Makanan yang menyehatkan berawal dari kecermatan dalam memilih bahan-bahan yang baik, segar serta berkualitas. Makanan yang baik seharusnya terdiri dari sumber karbohidrat, protein, lemak, vitamin, mineral dan juga serat.Sebagai sumber karbohidrat, umumnya masyarakat di Indonesia mengkonsumsi nasi yang berasal dari beras. Beras sendiri memiliki berbagai jenis, yang dapat dibedakan dari warnanya serta bentuknya.', 'beras_kepala_mawar_merah.jpeg'),
(2, 'Beras Kepala Special', 'Beras', 210000, 40, 'Beras adalah bulir padi yang sudah terpisah dari sekamnya. Mengolah padi hingga menjadi beras harus melewati tahapan mengolah gabah dengan menggunakan mesin berteknologi tinggi. Gabah yang terkelupas kulitnya itulah yang dinamakan beras. Beras yang sering kita konsumsi ini berwarna putih dan memiliki ukuran yang kecil. Saat menggenggam beras rasanya sama seperti menggenggam pasir karena ukuran yang sangat kecil dan cukup halus.', 'beras_kepala_special.jpeg'),
(1, 'Beras 3 Mawar', 'Beras', 150000, 40, 'Beras 3 Mawar', 'Beras3mawar.jpeg'),
(5, 'Telur Ayam', 'Telur', 35000, 20, 'Telur ayam ras adalah salah satu sumber pangan protein hewani yang populer dan \r\nsangat diminati oleh masyarakat. Hampir seluruh kalangan masyarakat dapat \r\nmengonsumsi telur ayam ras untuk memenuhi kebutuhan protein hewani. Hal ini \r\nkarena telur ayam ras relatif murah dan mudah diperoleh serta dapat memenuhi \r\nkebutuhan gizi yang diharapkan', 'telur_ayam.jpeg'),
(6, 'Telur Bebek', 'Telur', 45000, 20, 'Telur bebek memiliki kandungan protein yang tinggi dibandingkan dengan telur ayam, kandungan protein inilah yang bisa menambahkan stamina jika dikonsumsi. Jika kamu sering meminum jamu, biasanya telur bebek menjadi bahan ramuan yang bisa menambahkan stamina.', 'telur_bebek.jpeg'),
(7, 'Telur Asin', 'Telur', 40000, 20, 'Telur asin diolah dengan cara merendam telur atau membaluri telur dengan adonan garam selama beberapa hari. Cara ini dilakukan sudah sejak lama dan bertujuan untuk membuat telur awet lebih lama. Dalam proses pembuatannya juga telur ini ditambahkan dengan garam dapur, abu hingga batu bara.', 'telur_asin.jpeg'),
(8, 'Cobek', 'Kerajinan', 250000, 10, 'Cobek dan ulekan adalah sepasang alat yang telah digunakan sejak zaman purbakala untuk menumbuk, menggiling, melumat, mengulek, dan mencampur bahan-bahan tertentu (misalnya bumbu dapur, rempah-rempah, jamu, atau obat-obatan).', 'cobek.jpeg'),
(9, 'Batu Palung', 'Kerajinan', 500000, 15, 'Cobek dan ulekan adalah sepasang alat yang telah digunakan sejak zaman purbakala untuk menumbuk, menggiling, melumat, mengulek, dan mencampur bahan-bahan tertentu (misalnya bumbu dapur, rempah-rempah, jamu, atau obat-obatan).', 'tumbukan_palung.jpeg'),
(10, 'Batu Nisan', 'Kerajinan', 800000, 20, 'Batu nisan adalah penanda kuburan yang biasanya dibuat dari batu. Biasanya ditulisi dengan nama orang yang dikebumikan di sana, tanggal lahir dan tanggal mati. Hal ini dapat berguna bagi ahli sejarah dan ahli silsilah. Batu nisan modern juga dapat mengandung foto orang tersebut.', 'batu_nisan.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat_tujuan` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `telepon` varchar(16) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `status_user` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `nama`, `alamat`, `telepon`, `kota`, `status_user`) VALUES
(1, 'agungmo@gmail.com', '1827d00c4594d677de31fa14cf0e8b89', 'Agung Ashari', 'Jln. Admin', '081234646599', 'Makassar', 'admin'),
(2, 'ivan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ivan Darmawan', 'Jln.Andalas no.34', '082193050609', 'Makassar', 'user'),
(3, 'arnold040897@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', 'iyan', 'Jln.veteran', '085145775755', 'Makassar', 'user'),
(4, 'zandiceng@gmail.com', 'bfac690e94a13d2882815029d8e140d4', 'zandy', 'makassar', '08923554678', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
