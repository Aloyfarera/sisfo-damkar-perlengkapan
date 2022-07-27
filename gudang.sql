-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2021 pada 14.41
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`id_alat`, `nama`, `jumlah`) VALUES
(9, 'Kampak rata', '1'),
(11, 'Fire blanket', '2'),
(14, 'Tabung cadangan', '1'),
(18, 'Kater', '1'),
(20, 'kait pemadam kebakaran', '1'),
(21, 'linggis', '1'),
(24, 'Tali manila 1\" x 20 m', '1'),
(25, 'Tangga aluminimum ', '1'),
(26, 'Sekop', '1'),
(27, 'Kampak runcing', '1'),
(29, 'Palu karet', '1'),
(31, 'Horse camp 2.5', '4'),
(32, 'Self conatained', '1'),
(36, 'Kunci standart', '1'),
(38, 'Tank', '3'),
(40, 'ban kotak', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` char(7) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan_id` int(11) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `kondisi_real` int(7) NOT NULL,
  `kondisi_ideal` int(7) NOT NULL,
  `kekurangan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stok`, `satuan_id`, `jenis_id`, `kondisi_real`, `kondisi_ideal`, `kekurangan`) VALUES
('B000001', 'Pengaman Selang', 15, 1, 6, 0, 0, 0),
('B000002', 'Blower', 40, 1, 6, 0, 0, 0),
('B000001', 'Pengaman Selang', 15, 1, 6, 0, 0, 0),
('B000002', 'Blower', 40, 1, 6, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barang_keluar` char(16) NOT NULL,
  `user_id` int(11) NOT NULL,
  `barang_id` char(7) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barang_keluar`, `user_id`, `barang_id`, `jumlah_keluar`, `tanggal_keluar`) VALUES
('T-BK-19082000001', 1, 'B000003', 35, '2019-08-20'),
('T-BK-19082000002', 1, 'B000002', 10, '2019-08-20'),
('T-BK-19092000003', 1, 'B000001', 5, '2019-09-20'),
('T-BK-19092000004', 1, 'B000003', 150, '2019-09-20'),
('T-BK-19092000005', 1, 'B000004', 10, '2019-09-20'),
('T-BK-19092200006', 1, 'B000003', 100, '2019-09-22'),
('T-BK-19082000001', 1, 'B000003', 35, '2019-08-20'),
('T-BK-19082000002', 1, 'B000002', 10, '2019-08-20'),
('T-BK-19092000003', 1, 'B000001', 5, '2019-09-20'),
('T-BK-19092000004', 1, 'B000003', 150, '2019-09-20'),
('T-BK-19092000005', 1, 'B000004', 10, '2019-09-20'),
('T-BK-19092200006', 1, 'B000003', 100, '2019-09-22');

--
-- Trigger `barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `update_stok_keluar` BEFORE INSERT ON `barang_keluar` FOR EACH ROW UPDATE `barang` SET `barang`.`stok` = `barang`.`stok` - NEW.jumlah_keluar WHERE `barang`.`id_barang` = NEW.barang_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barang_masuk` char(16) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `barang_id` char(7) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barang_masuk`, `supplier_id`, `user_id`, `barang_id`, `jumlah_masuk`, `tanggal_masuk`) VALUES
('T-BM-19082000001', 2, 1, 'B000003', 800, '2019-08-20'),
('T-BM-19082000002', 3, 1, 'B000001', 20, '2019-08-20'),
('T-BM-19082000003', 3, 1, 'B000002', 10, '2019-08-20'),
('T-BM-19082000004', 1, 1, 'B000004', 15, '2019-08-20'),
('T-BM-19092000005', 3, 1, 'B000002', 40, '2019-09-20'),
('T-BM-19092000006', 2, 1, 'B000003', 50, '2019-09-20'),
('T-BM-19092200007', 3, 1, 'B000004', 15, '2019-09-22'),
('T-BM-19092200008', 1, 1, 'B000003', 135, '2019-09-22'),
('T-BM-19082000001', 2, 1, 'B000003', 800, '2019-08-20'),
('T-BM-19082000002', 3, 1, 'B000001', 20, '2019-08-20'),
('T-BM-19082000003', 3, 1, 'B000002', 10, '2019-08-20'),
('T-BM-19082000004', 1, 1, 'B000004', 15, '2019-08-20'),
('T-BM-19092000005', 3, 1, 'B000002', 40, '2019-09-20'),
('T-BM-19092000006', 2, 1, 'B000003', 50, '2019-09-20'),
('T-BM-19092200007', 3, 1, 'B000004', 15, '2019-09-22'),
('T-BM-19092200008', 1, 1, 'B000003', 135, '2019-09-22');

--
-- Trigger `barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `update_stok_masuk` BEFORE INSERT ON `barang_masuk` FOR EACH ROW UPDATE `barang` SET `barang`.`stok` = `barang`.`stok` + NEW.jumlah_masuk WHERE `barang`.`id_barang` = NEW.barang_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Snack'),
(2, 'Minuman'),
(3, 'Laptop'),
(4, 'Handphone'),
(5, 'Sepeda Motor'),
(6, 'Mobil'),
(7, 'Perangkat Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `tgl_masuk` date DEFAULT NULL,
  `id_kendaraan` int(2) NOT NULL,
  `jns_kendaraan` varchar(40) NOT NULL,
  `merk` varchar(40) NOT NULL,
  `no_polisi` varchar(40) NOT NULL,
  `no_lbg` varchar(40) NOT NULL,
  `thn_pembuatan` year(4) NOT NULL,
  `warna` varchar(40) NOT NULL,
  `bahan_bakar` varchar(40) NOT NULL,
  `no_bpkb` varchar(40) NOT NULL,
  `no_mesin` varchar(40) NOT NULL,
  `no_rangka` varchar(40) NOT NULL,
  `asal_kendaraan` varchar(40) NOT NULL,
  `kondisi_kndrn` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`tgl_masuk`, `id_kendaraan`, `jns_kendaraan`, `merk`, `no_polisi`, `no_lbg`, `thn_pembuatan`, `warna`, `bahan_bakar`, `no_bpkb`, `no_mesin`, `no_rangka`, `asal_kendaraan`, `kondisi_kndrn`) VALUES
(NULL, 3, 'MOBIL ULAR TANGGA', 'ISUZU', 'H 9597 UH', '12', 1992, 'MERAH', 'pertalite', 'TIDAK ADA', '6QAI119573', 'CVRI4NL3000119', 'Bantuan Pusat/Hibah Jepang', 'Baik'),
(NULL, 4, 'MOBIL PICK UP', 'TOYOTA  ', 'H 9573 ZS', '17A', 2014, 'HITAM', 'SOLAR', '', '2KDS438421', 'MR0AS12GOE0015475', 'APBD TK II', 'Baik'),
(NULL, 5, 'MBL PMK/RESCUE', 'MITSUBHISI', 'H 9596 HA', '25', 2007, 'MERAH', 'SOLAR', 'E80885781', '6D16-C40021', 'MHMFM517A7K000023', 'APBD TK II', 'Baik'),
(NULL, 6, 'MOBIL POMPA', 'FORD ', 'H 9594 KA', '27', 2009, 'MRH PTH', 'SOLAR', 'G0808027I', 'WLAT1127848', 'MNBBSBE409W830192', 'APBD TK II', 'Baik'),
(NULL, 7, 'MOBIL PERALATAN &LIGHTNING', 'MITSUBISHI ', 'H 9586 MA', '28', 2010, 'MERAH', 'SOLAR', 'H07616228I', '4M4OUAB9123', 'MMBENKB70AD030210', 'APBD TK II', 'Baik'),
(NULL, 8, 'ELF', 'ISUZU', 'H 9510 WS', '70', 2013, 'MERAH', 'pertalite', '999898', 'M054447', 'MHCNKR55HDJ054447', 'APBD TK II', 'Baik'),
(NULL, 9, 'motor', 'Voucher', 'H 2233 HE', '24', 2021, 'merah', 'pertalite', '34242423', '5646456456', '123131', 'Blora', 'baik'),
(NULL, 10, 'Mobil', 'Honda', 'H 2244 HE', '90', 2021, 'silver', 'solar', '34242423', '564dasdds', '98098', 'Blora', 'baik'),
(NULL, 11, 'motor', 'honda revo', 'H 9999 HE', '100', 2021, 'merah', 'pertamax', '342490909', '9809809899', '68768768677', 'Blora', 'baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `date`, `user_id`, `product_id`, `type`, `text`) VALUES
(1, '2020-07-21 06:13:15', 1, 1, 'input', '[0]+[1]=[1]'),
(2, '2020-07-21 06:14:04', 1, 1, 'output', '[1.0000]-[1]=[0]'),
(3, '2020-07-21 06:14:26', 1, 1, 'input', '[0]+[1]=[1]'),
(4, '2020-07-21 06:14:32', 1, 1, 'output', '[1.0000]-[1]=[0]'),
(5, '2020-07-21 06:14:35', 1, 1, 'output', '[0.0000]-[1]=[-1]'),
(6, '2020-07-21 06:14:38', 1, 1, 'output', '[-1.0000]-[1]=[-2]'),
(7, '2020-07-21 06:16:21', 1, 1, 'output', '[-2.0000]-[1]=[-3]'),
(8, '2020-07-21 06:18:39', 1, 1, 'input', '[-3.0000]+[3]=[0]'),
(9, '2020-07-21 06:19:43', 1, 1, 'input', '[0]+[5]=[5]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meta`
--

CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `meta`
--

INSERT INTO `meta` (`id`, `ref_id`, `title`, `meta_key`, `meta_value`) VALUES
(1, 0, 'settings', 'language', 'english.php'),
(2, 0, 'page_access', '/index.php', '1'),
(3, 1, 'product', 'custom_field_1', 'Alat Mandi'),
(4, 1, 'product', 'custom_field_2', ''),
(5, 1, 'product', 'custom_field_3', ''),
(6, 1, 'product', 'custom_field_4', ''),
(7, 1, 'product', 'custom_field_5', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perlengkapan`
--

CREATE TABLE `perlengkapan` (
  `id_kendaraan` varchar(10) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `no_lbg` varchar(15) NOT NULL,
  `alat` varchar(40) NOT NULL,
  `kondisi_real` int(10) NOT NULL,
  `kondisi_ideal` int(10) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perlengkapan`
--

INSERT INTO `perlengkapan` (`id_kendaraan`, `no_polisi`, `no_lbg`, `alat`, `kondisi_real`, `kondisi_ideal`, `keterangan`) VALUES
('2', 'H 9545 A', '39', 'Sekop', 1, 1, 'Memadai'),
('2', 'H 9545 A', '39', 'Blower', 0, 0, ''),
('3', 'H 9546 A', '40', 'Selang hisap', 5, 1, ''),
('2', 'H 9545 A', '39', 'Sekop', 1, 1, 'Memadai'),
('2', 'H 9545 A', '39', 'Blower', 0, 0, ''),
('3', 'H 9546 A', '40', 'Selang hisap', 5, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `purchase_price` decimal(15,4) DEFAULT NULL,
  `sale_price` decimal(15,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `status`, `code`, `name`, `purchase_price`, `sale_price`) VALUES
(1, 'publish', '8999908009203', 'CLAUDIA BEAUTY HIJAU 80G', '2000.0000', '3000.0000'),
(2, 'publish', '8999908034601', 'TOTALCARE JUNIOR ORANGE 50G', '15000.0000', '17500.0000'),
(3, 'publish', '8999908042408', 'MY BABY POWDER 50 GR', '20000.0000', '23000.0000'),
(4, 'publish', '8999908043108', 'MY BABY SOAP 100G', '16000.0000', '17000.0000'),
(5, 'publish', '8999908009401', 'CLAUDIA BEAUTY PINK 80G', '2000.0000', '3000.0000'),
(6, 'publish', '8999908006301', 'F & N SODA WATER 330 ML', '5000.0000', '6000.0000'),
(7, 'publish', '8999908006400', 'F & N COFFEE CREAM 330ML', '5000.0000', '6000.0000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_amount`
--

CREATE TABLE `product_amount` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `shelf` varchar(255) DEFAULT NULL,
  `amount` decimal(15,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `product_amount`
--

INSERT INTO `product_amount` (`id`, `product_id`, `shelf`, `amount`) VALUES
(3, 1, '1', '5.0000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `nama_satuan`) VALUES
(1, 'Unit'),
(2, 'Pack'),
(3, 'Botol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `no_telp`, `alamat`) VALUES
(1, 'Ahmad Hasanudin', '085688772971', 'Kec. Cigudeg, Bogor - Jawa Barat'),
(2, 'Asep Salahudin', '081341879246', 'Kec. Ciampea, Bogor - Jawa Barat'),
(3, 'Filo Lial', '087728164328', 'Kec. Ciomas, Bogor - Jawa Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tools`
--

CREATE TABLE `tools` (
  `kode_kendaraan` varchar(10) NOT NULL,
  `id_kendaraan` varchar(40) NOT NULL,
  `id_tools` int(5) NOT NULL,
  `nama_tools` varchar(25) NOT NULL,
  `kondisi_real` int(10) NOT NULL,
  `kondisi_ideal` int(10) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tools`
--

INSERT INTO `tools` (`kode_kendaraan`, `id_kendaraan`, `id_tools`, `nama_tools`, `kondisi_real`, `kondisi_ideal`, `keterangan`) VALUES
('2', '2', 10, 'ban', 1, 1, 'memadai'),
('2', '2', 11, 'selang', 1, 1, 'memadai'),
('1', '1', 12, 'pompa', 1, 1, 'memadai'),
('2', '2', 13, 'ban hitam', 1, 1, 'tidak memadai'),
('1', '1', 15, 'pompa', 1, 1, 'memadai'),
('4', '4', 16, 'jetpom', 1, 1, 'memadai'),
('3', '3', 17, 'ular tangga', 2, 1, 'Tidak memadai'),
('5', '5', 19, 'selang air', 1, 1, 'memadai'),
('3', '3', 20, 'ban serep', 1, 2, 'Memadai'),
('3', '3', 21, 'ban belakang', 1, 2, 'Memadai'),
('6', '6', 22, 'pompa air', 1, 2, 'Memadai'),
('11', '11', 23, 'ban bunder', 2, 2, 'Tidak memadai'),
('3', '3', 24, 'Tali manila 1', 1, 2, 'Memadai'),
('3', '3', 25, 'Horse camp 2.5', 1, 4, 'Memadai'),
('8', '8', 27, 'Fire blanket', 1, 2, 'Tidak memadai'),
('8', '8', 28, 'Tabung cadangan', 0, 1, 'Tidak memadai'),
('8', '8', 29, 'ban kotak', 2, 4, 'Tidak memadai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('gudang','admin') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(1, 'Adminisitrator', 'admin', 'admin@admin.com', '025123456789', 'admin', '$2y$10$wMgi9s3FEDEPEU6dEmbp8eAAEBUXIXUy3np3ND2Oih.MOY.q/Kpoy', 1568689561, 'd5f22535b639d55be7d099a7315e1f7f.png', 1),
(7, 'Arfan ID', 'arfandotid', 'arfandotid@gmail.com', '081221528805', 'gudang', '$2y$10$5es8WhFQj8xCmrhDtH86Fu71j97og9f8aR4T22soa7716kAusmaeK', 1568691611, 'user.png', 1),
(8, 'Muhammad Ghifari Arfananda', 'mghifariarfan', 'mghifariarfan@gmail.com', '085697442673', 'gudang', '$2y$10$5SGUIbRyEXH7JslhtEegEOpp6cvxtK6X.qdiQ1eZR7nd0RZjjx3qe', 1568691629, 'user.png', 1),
(13, 'Arfan Kashilukato', 'arfankashilukato', 'arfankashilukato@gmail.com', '081623123181', 'gudang', '$2y$10$/QpTunAD9alBV5NSRJ7ytupS2ibUrbmS3ia3u5B26H6f3mCjOD92W', 1569192547, 'user.png', 1),
(14, 'shaufiq', 'shaufiq', 'shaufiqe@gmail.com', '08989899898989', 'gudang', '$2y$10$z5sg/qMtNsRZ8EqEfRapmOivR86OykyyrZLwevykDNgmn0xBOjs2S', 1618946051, 'user.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `status`, `user_name`, `password`, `level`) VALUES
(1, 'publish', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_amount`
--
ALTER TABLE `product_amount`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tools`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat`
--
ALTER TABLE `alat`
  MODIFY `id_alat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `product_amount`
--
ALTER TABLE `product_amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tools`
--
ALTER TABLE `tools`
  MODIFY `id_tools` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
