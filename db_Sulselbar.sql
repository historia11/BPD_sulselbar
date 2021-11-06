-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 05:26 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+08:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_Sulselbar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` varchar(15) NOT NULL,
  `nm_adm` varchar(35) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `nm_adm`, `username`, `password`) VALUES
('AD89274124', 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `direksi`
--

CREATE TABLE `direksi` (
  `id_direksi` varchar(15) NOT NULL,
  `nm_direksi` varchar(35) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `direksi` (`id_direksi`, `nm_direksi`, `username`, `password`) VALUES
('AD89274124', 'Rahmat Nur Kholik', 'direksi', '18a5726d8227b237064ecef7d1f4e634');

-- --------------------------------------------------------

--
-- Table structure for table `data`
-- ID = SR/001/DCS
-- ID Nasabah = N0000001
-- ID Pekerjaan = PK0000001
-- ID Penghasilan = PH0000001

CREATE TABLE `proposal` (
  `id_proposal` varchar(15) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_disposisi` date,
  `status` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `id_pekerjaan` varchar(15) NOT NULL,
  `id_penghasilan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

-- INSERT INTO `data` (`id_proposal`, `tgl_buat`, `tgl_disposisi`,`status`, `id_nasabah`, `id_pekerjaan`, `id_penghasilan`) VALUES
-- ('', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat_domisili` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `no_hp_darurat` varchar(13) NOT NULL,
  `jml_tanggungan` int NOT NULL,
  `ft_ktp` mediumblob NOT NULL,
  `ft_s_ktp` mediumblob  NOT NULL,
  `ft_izin_usaha` mediumblob  NOT NULL,
  `ft_pp` mediumblob  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nm_usaha` varchar(35) NOT NULL,
  `alamat`  text NOT NULL,
  `jenis_usaha` varchar(15) NOT NULL,
  `lama_usaha` int NOT NULL,
  `nominal` int NOT NULL,
  `tenor` int NOT NULL,
  `angsuran` int NOT NULL,
  `ft_tmpt_usaha` mediumblob NOT NULL,
  `ft_s_tmpt_usaha` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `penghasilan`
--

CREATE TABLE `penghasilan` (
  `id_penghasilan` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `pendapatan_pokok` int NOT NULL,
  `tunjangan` int NOT NULL,
  `penghasilan` int NOT NULL,
  `biaya_rutin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`),
  ADD FOREIGN KEY (`nik`) REFERENCES `nasabah`(`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Indexes for table `penghasilan`
--
ALTER TABLE `penghasilan`
  ADD PRIMARY KEY (`id_penghasilan`),
  ADD FOREIGN KEY (`nik`) REFERENCES `nasabah`(`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Indexes for table `direksi`
--
ALTER TABLE `direksi`
  ADD PRIMARY KEY (`id_direksi`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`),
  ADD FOREIGN KEY (`id_pekerjaan`) REFERENCES `pekerjaan`(`id_pekerjaan`),
  ADD FOREIGN KEY (`id_penghasilan`) REFERENCES `penghasilan`(`id_penghasilan`),
  ADD FOREIGN KEY (`nik`) REFERENCES `nasabah`(`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
