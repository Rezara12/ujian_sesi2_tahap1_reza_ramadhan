-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 03:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmasnew`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_laporan`
-- (See below for the actual view)
--
CREATE TABLE `data_laporan` (
`id_layanan` int(11)
,`id_dokter` int(11)
,`id_pasien` int(11)
,`catatan` varchar(100)
,`tgl_layanan` date
,`koko` varchar(20)
,`nama_pasien` varchar(50)
,`kodepasien` varchar(50)
,`jenis_kelamin` varchar(9)
,`nama_dokter` varchar(50)
,`spesialis` varchar(50)
,`harga_layanan` varchar(7)
,`total` double
,`jenis_pasien` varchar(20)
,`no_bpjs` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_pasienmodal`
-- (See below for the actual view)
--
CREATE TABLE `data_pasienmodal` (
`id_pasien` int(11)
,`kodepasien` varchar(50)
,`nama_pasien` varchar(50)
,`jenis_kelamin` varchar(9)
,`tempat_lahir` varchar(15)
,`tanggal_lahir` date
,`alamat` varchar(100)
,`status` int(1)
,`tgl_daftar` date
,`jenis_pasien` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_resep`
-- (See below for the actual view)
--
CREATE TABLE `data_resep` (
`id_layanan` int(11)
,`id_dokter` int(11)
,`id_pasien` int(11)
,`catatan` varchar(100)
,`tgl_layanan` date
,`koko` varchar(20)
,`id_resep` int(11)
,`nama_obat` varchar(50)
,`harga_obat` varchar(50)
,`kodepasien` varchar(50)
,`nama_pasien` varchar(50)
,`jenis_kelamin` varchar(9)
,`nama_dokter` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_totalobat`
-- (See below for the actual view)
--
CREATE TABLE `data_totalobat` (
`id_layanan` int(11)
,`total` double
);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_pasien`
--

CREATE TABLE `pembayaran_pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran_pasien`
--

INSERT INTO `pembayaran_pasien` (`id`, `nama`, `jumlah`, `alamat`) VALUES
(3, 'adhan', 8000, 'Banjarmasin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_daftarsurat`
--

CREATE TABLE `tabel_daftarsurat` (
  `id_daftarsurat` int(11) NOT NULL,
  `id_suratsehat` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `tanggal_daftarsurat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_daftarsurat`
--

INSERT INTO `tabel_daftarsurat` (`id_daftarsurat`, `id_suratsehat`, `id_dokter`, `tanggal_daftarsurat`) VALUES
(1, 1, 3, '2021-06-10'),
(3, 2, 3, '2021-06-10'),
(4, 3, 7, '2021-06-22'),
(5, 4, 11, '2021-06-22'),
(6, 5, 10, '2021-06-22'),
(7, 5, 12, '2021-06-22'),
(8, 7, 14, '2021-06-22'),
(9, 8, 13, '2021-06-22'),
(10, 9, 3, '2021-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_dokter`
--

CREATE TABLE `tabel_dokter` (
  `id_dokter` int(11) NOT NULL,
  `kodedokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `harga_layanan` varchar(7) NOT NULL,
  `jam_praktek` varchar(70) DEFAULT NULL,
  `tgl_simpan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_dokter`
--

INSERT INTO `tabel_dokter` (`id_dokter`, `kodedokter`, `nama_dokter`, `spesialis`, `harga_layanan`, `jam_praktek`, `tgl_simpan`) VALUES
(3, 'DR2101060001', 'Dr. Rusli Andreas', 'Paru', '30000', 'Senin-Rabu : 09.00-15.00', '2021-02-02'),
(7, 'DR2102080001', 'Dr. Kevien', 'Gigi', '50000', 'Senin-Rabu : 10.00-15.00', '2021-02-09'),
(9, 'DR2102090001', 'Dr. Reza', 'Saraf', '75000', 'Selasa : 10.00-15.00', '2021-02-10'),
(10, 'DR2103010001', 'Dr. Sams', 'Patoligi Anatomi', '34000', 'Senin-Rabu : 10.00-15.00', '2021-03-01'),
(11, 'DR2106150001', 'Dr. Ramadhan', 'Mata', '50000', 'Selasa : 09.00-10.00', '2021-06-15'),
(12, 'DR2106220001', 'Dr. Ahmad', 'THT', '50000', 'Senin-Rabu : 09.00-15.00', '2021-06-22'),
(13, 'DR2106220002', 'Dr. Irfan', 'Rehabilitasi Medik', '100000', 'Jum\'at : 09.00-11.00', '2021-06-22'),
(14, 'DR2106220003', 'Dr. Nadia', 'Anak', '30000', 'Senin-Kamis : 09.00-14.00', '2021-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_layanan`
--

CREATE TABLE `tabel_layanan` (
  `id_layanan` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `tgl_layanan` date NOT NULL,
  `koko` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_layanan`
--

INSERT INTO `tabel_layanan` (`id_layanan`, `id_dokter`, `id_pasien`, `catatan`, `tgl_layanan`, `koko`) VALUES
(34, 4, 13, 'batukan', '2021-02-14', '32'),
(35, 3, 7, 'Coba', '2021-02-15', '27'),
(36, 7, 10, 'Batuk', '2021-02-17', '35'),
(38, 8, 14, 'Hehe', '2021-02-19', '34'),
(39, 4, 16, 'Gila', '2021-02-19', '37'),
(41, 10, 13, 'Anto', '2021-03-01', '40'),
(42, 9, 17, 'MAgg', '2021-03-17', '41'),
(43, 3, 7, 'pasien harus banyak istirahat', '2021-06-15', '45'),
(44, 3, 14, 'Maag', '2021-06-15', '43'),
(45, 11, 21, 'Katarak', '2021-06-22', '47'),
(46, 3, 29, 'Batukan', '2021-08-18', '49');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_obat`
--

CREATE TABLE `tabel_obat` (
  `id_obat` int(11) NOT NULL,
  `kode_obat` varchar(60) NOT NULL,
  `nama_obat` varchar(60) NOT NULL,
  `harga_obat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_obat`
--

INSERT INTO `tabel_obat` (`id_obat`, `kode_obat`, `nama_obat`, `harga_obat`) VALUES
(1, 'OBT0001', 'Parasetamol', '6000'),
(2, 'OBT0002', 'OBH Combi', '18000'),
(4, 'OBT0003', 'bodrex', '2000'),
(5, 'OBT0004', 'Progmaag', '8000'),
(6, 'OBT0005', 'asam Urat', '5000'),
(7, 'OBT0006', 'Syarafatus', '56000'),
(8, 'OBT0007', 'Tetes THT', '45000'),
(9, 'OBT0008', 'Nafsu Makan', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pasien`
--

CREATE TABLE `tabel_pasien` (
  `id_pasien` int(11) NOT NULL,
  `kodepasien` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_pasien`
--

INSERT INTO `tabel_pasien` (`id_pasien`, `kodepasien`, `nama_pasien`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `status`, `tgl_daftar`) VALUES
(15, 'PN2102190001', 'Zia', 'Laki-laki', 'Banjarmasin', '1995-12-25', 'Jalan Banyiur', 0, '2021-02-19'),
(21, 'PN2106150002', 'Madan', 'Laki-laki', 'banjar', '2003-06-15', 'Tatah amuntai\r\n', 1, '2021-06-15'),
(22, 'PN2106220001', 'Nurdin', 'Laki-laki', 'Banjarmasin', '1998-06-07', 'Jl. Kelayan B', 0, '2021-06-22'),
(23, 'PN2106220002', 'Mila', 'Perempuan', 'Banjar', '1994-08-22', 'Jl. HKSN No.3', 0, '2021-06-22'),
(24, 'PN2106220003', 'Rahmad', 'Laki-laki', 'Martapura', '1993-07-12', 'Jl. Irigasi', 0, '2021-06-22'),
(25, 'PN2106220004', 'Karmila', 'Perempuan', 'Martapura', '1996-05-01', 'Jl. Sekumpul', 0, '2021-06-22'),
(26, 'PN2106220005', 'Maulana', 'Laki-laki', 'Banjarmasin', '1996-01-04', 'Jl. Bumi Mas Raya', 0, '2021-06-22'),
(27, 'PN2106220006', 'Fahri', 'Laki-laki', 'Banjarmasin', '1998-03-10', 'Jl. Perdagangan', 0, '2021-06-22'),
(28, 'PN2106220007', 'Husna', 'Perempuan', 'Bnajrmasin', '1995-10-10', 'Jl. Kelayan B', 0, '2021-06-22'),
(29, 'PN2108180001', 'adan', 'Laki-laki', '12', '1997-01-12', 'banjarmasin', 1, '2021-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pemeriksaan`
--

CREATE TABLE `tabel_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_suratsehat` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `tinggi_badan` varchar(50) NOT NULL,
  `tensi_darah` varchar(100) NOT NULL,
  `suhu` varchar(100) NOT NULL,
  `nadi` varchar(70) NOT NULL,
  `saturasi` varchar(70) NOT NULL,
  `tes_butawarna` varchar(70) NOT NULL,
  `daftarsurat_id` int(11) NOT NULL,
  `tanggal_suratsehat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_pemeriksaan`
--

INSERT INTO `tabel_pemeriksaan` (`id_pemeriksaan`, `id_suratsehat`, `id_dokter`, `berat_badan`, `tinggi_badan`, `tensi_darah`, `suhu`, `nadi`, `saturasi`, `tes_butawarna`, `daftarsurat_id`, `tanggal_suratsehat`) VALUES
(3, 1, 3, '80 kg', '170 cm', '120/80', '30 derajat', 'kada tahu', 'tes', 'Tidak Buta Warna', 1, '2021-06-11'),
(4, 9, 3, '60', '170', '120/80', '36', '12', '13', 'Tidak Buta Warna', 10, '2021-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_rawatjalan`
--

CREATE TABLE `tabel_rawatjalan` (
  `id_rawatjalan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `jenis_pasien` varchar(20) NOT NULL,
  `no_bpjs` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_rawatjalan`
--

INSERT INTO `tabel_rawatjalan` (`id_rawatjalan`, `id_pasien`, `id_dokter`, `jenis_pasien`, `no_bpjs`, `date`) VALUES
(47, 21, 11, 'Umum', '001', '2021-06-22'),
(49, 29, 3, 'Umum', '', '2021-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_resep`
--

CREATE TABLE `tabel_resep` (
  `id_resep` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga_obat` varchar(50) NOT NULL,
  `id_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_resep`
--

INSERT INTO `tabel_resep` (`id_resep`, `nama_obat`, `harga_obat`, `id_layanan`) VALUES
(33, 'OBH Combi', '18000', 34),
(34, 'OBH Combi', '18000', 34),
(35, 'OBH Combi', '18000', 34),
(36, 'Parasetamol', '5000', 34),
(37, 'OBH Combi', '18000', 35),
(38, 'OBH Combi', '18000', 36),
(39, 'Parasetamol', '5000', 36),
(40, 'Parasetamol', '5000', 36),
(41, 'Parasetamol', '5000', 35),
(42, 'OBH Combi', '18000', 35),
(45, 'OBH Combi', '18000', 38),
(47, 'OBH Combi', '18000', 39),
(56, 'OBH Combi', '18000', 41),
(57, 'OBH Combi', '18000', 42),
(58, 'Parasetamol', '6000', 42),
(59, 'OBH Combi', '18000', 42),
(61, 'OBH Combi', '18000', 41),
(62, 'OBH Combi', '18000', 41),
(63, 'Parasetamol', '6000', 41),
(66, 'OBH Combi', '18000', 42),
(70, 'OBH Combi', '18000', 42),
(71, 'Parasetamol', '6000', 36),
(72, 'Parasetamol', '6000', 43),
(73, 'OBH Combi', '18000', 44),
(74, 'asam Urat', '5000', 45),
(75, 'Parasetamol', '6000', 45),
(76, 'OBH Combi', '18000', 46);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_suratsehat`
--

CREATE TABLE `tabel_suratsehat` (
  `id_suratsehat` int(11) NOT NULL,
  `kode_suratsehat` varchar(50) NOT NULL,
  `nama_suratsehat` varchar(100) NOT NULL,
  `jeniskelamin_suratsehat` varchar(50) NOT NULL,
  `alamat_suratsehat` varchar(100) NOT NULL,
  `tempatlahir_suratsehat` varchar(100) NOT NULL,
  `tanggallahir_suratsehat` date NOT NULL,
  `keperluan` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_suratsehat`
--

INSERT INTO `tabel_suratsehat` (`id_suratsehat`, `kode_suratsehat`, `nama_suratsehat`, `jeniskelamin_suratsehat`, `alamat_suratsehat`, `tempatlahir_suratsehat`, `tanggallahir_suratsehat`, `keperluan`) VALUES
(1, 'SS2105220001', 'Muhammad Kevien Setiawan', 'Laki-laki', 'Jalan Simpang Belitung', 'Banjarmasin', '2000-02-28', 'Melamar Pekerjaan'),
(2, 'SS2106070001', 'Zia Khanisa', 'Perempuan', 'Jalan Benyiur', 'Banjarmasin', '1995-12-25', 'Daftar CPNS'),
(3, 'SS2106220001', 'Reza', 'Laki-laki', 'Jl. Belayung', 'Banjarmasin', '1997-01-12', 'Daftar Bintara Polri'),
(4, 'SS2106220002', 'Ramadhan', 'Laki-laki', 'Jl. Tatah Belayung', 'Banjarmasin', '1997-01-12', 'Daftar Tamtama Polri'),
(5, 'SS2106220003', 'Nadia', 'Perempuan', 'Gambut', 'Sei Lulut', '1998-10-21', 'Mendaftar CPNS'),
(6, 'SS2106220004', 'Sarbiah', 'Perempuan', 'Jl. Kelayan B', 'Banjarmasin', '2000-06-13', 'Melengkapi Adm Nikah'),
(7, 'SS2106220005', 'Liana', 'Perempuan', 'Jl. Kelayan A', 'Banjarmasin', '1997-06-28', 'Membuka Usaha'),
(8, 'SS2106220006', 'Tiara', 'Perempuan', 'Jl. Manggis', 'Banjarbaru', '2000-06-22', 'Melamar Pekerjaan'),
(9, 'SS2108180001', 'adan', 'Laki-laki', 'banjarmasin', 'Banjarmasin', '1994-01-11', 'Melamar Pekerjaan');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `layanan` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jenispasien` varchar(70) NOT NULL,
  `total_tagihan` varchar(70) NOT NULL,
  `uang_bayar` varchar(70) NOT NULL,
  `uang_kembalian` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_transaksi`
--

INSERT INTO `tabel_transaksi` (`id_transaksi`, `id_pasien`, `id_dokter`, `layanan`, `tgl_transaksi`, `jenispasien`, `total_tagihan`, `uang_bayar`, `uang_kembalian`) VALUES
(9, 7, 3, 35, '2021-02-16', 'Umum', '48000', '50000', '2000'),
(10, 10, 7, 36, '2021-02-17', 'Umum', '73000', '100000', '27000'),
(12, 13, 10, 41, '2021-03-01', 'Umum', '52000', '60000', '8000'),
(13, 7, 3, 43, '2021-06-15', 'Umum', '36000', '50000', '14000'),
(14, 29, 3, 46, '2021-08-18', 'Umum', '48000', '50000', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `nama_user` varchar(15) NOT NULL,
  `jenis_kelamin_user` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` int(1) NOT NULL COMMENT '1:head_admin, 2:admin, 3:kasir'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `id_dokter`, `nama_user`, `jenis_kelamin_user`, `username`, `password`, `level`) VALUES
(1, 0, 'Head Admin', 'laki-laki', 'admin1', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(4, 0, 'kasir', 'perempuan', 'kasir', '8691e4fc53b99da544ce86e22acba62d13352eff', 3),
(5, 0, 'admin', 'laki-laki', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 2),
(6, 3, 'Mahmud', 'laki-laki', 'perawat1', 'e3c6bb57de8499d152cc9065ebe58e8b91645458', 4),
(8, 7, 'Yulia S', 'perempuan', 'perawat3', '27f51c47df664aa3778387e848d0cd70dcbf711d', 4),
(10, 8, 'Siti Aminah', 'perempuan', 'perawat_oke', '7c222fb2927d828af22f592134e8932480637c0d', 4),
(11, 9, 'Ari', 'laki-laki', 'perawat2', 'caf3712fb8ea5dd05a9871bf30dd28b4c46243a3', 4),
(12, 11, 'Nadia', 'perempuan', 'perawat01', 'ac34fd3a3c86d2ca64f43495c0d70bdd970bab24', 4),
(13, 12, 'madan', 'laki-laki', 'perawat5', '756a62873a115ac93648876045d9467c7b5e7213', 4);

-- --------------------------------------------------------

--
-- Structure for view `data_laporan`
--
DROP TABLE IF EXISTS `data_laporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_laporan`  AS SELECT `tabel_layanan`.`id_layanan` AS `id_layanan`, `tabel_layanan`.`id_dokter` AS `id_dokter`, `tabel_layanan`.`id_pasien` AS `id_pasien`, `tabel_layanan`.`catatan` AS `catatan`, `tabel_layanan`.`tgl_layanan` AS `tgl_layanan`, `tabel_layanan`.`koko` AS `koko`, `tabel_pasien`.`nama_pasien` AS `nama_pasien`, `tabel_pasien`.`kodepasien` AS `kodepasien`, `tabel_pasien`.`jenis_kelamin` AS `jenis_kelamin`, `tabel_dokter`.`nama_dokter` AS `nama_dokter`, `tabel_dokter`.`spesialis` AS `spesialis`, `tabel_dokter`.`harga_layanan` AS `harga_layanan`, `data_totalobat`.`total` AS `total`, `tabel_rawatjalan`.`jenis_pasien` AS `jenis_pasien`, `tabel_rawatjalan`.`no_bpjs` AS `no_bpjs` FROM ((((`tabel_layanan` join `tabel_dokter` on(`tabel_layanan`.`id_dokter` = `tabel_dokter`.`id_dokter`)) join `tabel_pasien` on(`tabel_layanan`.`id_pasien` = `tabel_pasien`.`id_pasien`)) join `data_totalobat` on(`tabel_layanan`.`id_layanan` = `data_totalobat`.`id_layanan`)) join `tabel_rawatjalan` on(`tabel_rawatjalan`.`id_rawatjalan` = `tabel_layanan`.`koko`)) ;

-- --------------------------------------------------------

--
-- Structure for view `data_pasienmodal`
--
DROP TABLE IF EXISTS `data_pasienmodal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_pasienmodal`  AS SELECT `tabel_pasien`.`id_pasien` AS `id_pasien`, `tabel_pasien`.`kodepasien` AS `kodepasien`, `tabel_pasien`.`nama_pasien` AS `nama_pasien`, `tabel_pasien`.`jenis_kelamin` AS `jenis_kelamin`, `tabel_pasien`.`tempat_lahir` AS `tempat_lahir`, `tabel_pasien`.`tanggal_lahir` AS `tanggal_lahir`, `tabel_pasien`.`alamat` AS `alamat`, `tabel_pasien`.`status` AS `status`, `tabel_pasien`.`tgl_daftar` AS `tgl_daftar`, `tabel_rawatjalan`.`jenis_pasien` AS `jenis_pasien` FROM (`tabel_pasien` left join `tabel_rawatjalan` on(`tabel_pasien`.`id_pasien` = `tabel_rawatjalan`.`id_pasien`)) WHERE `tabel_pasien`.`status` = 1 AND `tabel_rawatjalan`.`jenis_pasien` is null ;

-- --------------------------------------------------------

--
-- Structure for view `data_resep`
--
DROP TABLE IF EXISTS `data_resep`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_resep`  AS SELECT `tabel_layanan`.`id_layanan` AS `id_layanan`, `tabel_layanan`.`id_dokter` AS `id_dokter`, `tabel_layanan`.`id_pasien` AS `id_pasien`, `tabel_layanan`.`catatan` AS `catatan`, `tabel_layanan`.`tgl_layanan` AS `tgl_layanan`, `tabel_layanan`.`koko` AS `koko`, `tabel_resep`.`id_resep` AS `id_resep`, `tabel_resep`.`nama_obat` AS `nama_obat`, `tabel_resep`.`harga_obat` AS `harga_obat`, `tabel_pasien`.`kodepasien` AS `kodepasien`, `tabel_pasien`.`nama_pasien` AS `nama_pasien`, `tabel_pasien`.`jenis_kelamin` AS `jenis_kelamin`, `tabel_dokter`.`nama_dokter` AS `nama_dokter` FROM (((`tabel_layanan` join `tabel_resep` on(`tabel_layanan`.`id_layanan` = `tabel_resep`.`id_layanan`)) join `tabel_pasien` on(`tabel_layanan`.`id_pasien` = `tabel_pasien`.`id_pasien`)) join `tabel_dokter` on(`tabel_layanan`.`id_dokter` = `tabel_dokter`.`id_dokter`)) ;

-- --------------------------------------------------------

--
-- Structure for view `data_totalobat`
--
DROP TABLE IF EXISTS `data_totalobat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_totalobat`  AS SELECT `tabel_resep`.`id_layanan` AS `id_layanan`, sum(`tabel_resep`.`harga_obat`) AS `total` FROM `tabel_resep` GROUP BY `tabel_resep`.`id_layanan` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran_pasien`
--
ALTER TABLE `pembayaran_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_daftarsurat`
--
ALTER TABLE `tabel_daftarsurat`
  ADD PRIMARY KEY (`id_daftarsurat`);

--
-- Indexes for table `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tabel_layanan`
--
ALTER TABLE `tabel_layanan`
  ADD PRIMARY KEY (`id_layanan`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `tabel_obat`
--
ALTER TABLE `tabel_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tabel_pemeriksaan`
--
ALTER TABLE `tabel_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `tabel_rawatjalan`
--
ALTER TABLE `tabel_rawatjalan`
  ADD PRIMARY KEY (`id_rawatjalan`),
  ADD KEY `tabel_rawatjalan_ibfk_1` (`id_dokter`),
  ADD KEY `tabel_rawatjalan_ibfk_2` (`id_pasien`);

--
-- Indexes for table `tabel_resep`
--
ALTER TABLE `tabel_resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `tabel_resep_ibfk_1` (`id_layanan`);

--
-- Indexes for table `tabel_suratsehat`
--
ALTER TABLE `tabel_suratsehat`
  ADD PRIMARY KEY (`id_suratsehat`);

--
-- Indexes for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran_pasien`
--
ALTER TABLE `pembayaran_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_daftarsurat`
--
ALTER TABLE `tabel_daftarsurat`
  MODIFY `id_daftarsurat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tabel_layanan`
--
ALTER TABLE `tabel_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tabel_obat`
--
ALTER TABLE `tabel_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tabel_pemeriksaan`
--
ALTER TABLE `tabel_pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_rawatjalan`
--
ALTER TABLE `tabel_rawatjalan`
  MODIFY `id_rawatjalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tabel_resep`
--
ALTER TABLE `tabel_resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tabel_suratsehat`
--
ALTER TABLE `tabel_suratsehat`
  MODIFY `id_suratsehat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_rawatjalan`
--
ALTER TABLE `tabel_rawatjalan`
  ADD CONSTRAINT `tabel_rawatjalan_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `tabel_dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_rawatjalan_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `tabel_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabel_resep`
--
ALTER TABLE `tabel_resep`
  ADD CONSTRAINT `tabel_resep_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `tabel_layanan` (`id_layanan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
