-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 01:47 PM
-- Server version: 5.7.16-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundrycc`
--

-- --------------------------------------------------------

--
-- Table structure for table `msmember`
--

CREATE TABLE `msmember` (
  `ID_Member` char(10) NOT NULL,
  `namaMember` varchar(50) NOT NULL,
  `alamatMember` varchar(200) NOT NULL,
  `telpMember` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msmember`
--

INSERT INTO `msmember` (`ID_Member`, `namaMember`, `alamatMember`, `telpMember`) VALUES
('M001', 'Sybil Erajaya', 'Jalan Kemanggisan, Jakarta', '081245672356'),
('M002', 'Andi Kurniawan', 'Jalan Dewi Sartika no. 13, Jakarta', '081255557676'),
('M003', 'Ilham Putra', 'Jalan Semangka no. 45, Jakarta', '088872323234'),
('M004', 'Paul Jonathan', 'Jalan Cakra no. 56, Jakarta', '089777772344'),
('M005', 'Putri Kurnia Wijayanti', 'Jalan K.H. Syahdan no. 34, Jakarta', '088233232344'),
('M006', 'Budi  Santoso', 'Jalan Mangga no. 456, Jakarta Barat', '089992321342'),
('M007', 'Arthur Andersen ', 'Jl. Melati no. 990, Jakarta Utara', '08882732222'),
('M008', 'Eddy Winata', 'Jl. Kelapa Gading no. 107, Jakarta Barat', '088822312223'),
('M009', 'Jeannie Widjaja', 'Jl. Mawar no.333, Jakarta Timur', '087772321312'),
('M010', 'Jeremy David Kemp', 'Jl. Soekarno Hatta no. 49, Jakarta Pusat', '085523231453'),
('M011', 'Josep Susanto Kiswandono', 'Jl. Keluarga no. 563, Jakarta Barat', '08213313435'),
('M012', 'Yosefa Valencia', 'Jl. Durian II No. 14', '081769926376'),
('M013', 'Helen', 'Jl. Daan Mogot I No. 19', '081763992888'),
('M014', 'Jackie Wellington', 'Jalan Orange no. 456, Jakarta Pusat', '081277723232');

-- --------------------------------------------------------

--
-- Table structure for table `mspakaian`
--

CREATE TABLE `mspakaian` (
  `ID_Pakaian` char(10) NOT NULL,
  `namaPakaian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mspakaian`
--

INSERT INTO `mspakaian` (`ID_Pakaian`, `namaPakaian`) VALUES
('P001', 'Kemeja Panjang'),
('P002', 'Kerudung'),
('P003', 'Kemeja Pendek'),
('P004', 'Sajadah'),
('P005', 'Jaket'),
('P006', 'Handuk'),
('P007', 'Kaos Oblong'),
('P008', 'Bed Cover'),
('P009', 'Kaos Kerah'),
('P010', 'Sarung Bantal'),
('P011', 'Celana Panjang'),
('P012', 'Sarung Guling'),
('P013', 'Celana Pendek'),
('P014', 'Kain Sarung'),
('P015', 'Celana Jeans'),
('P016', 'Selimut'),
('P017', 'Rok Panjang'),
('P018', 'Sapu Tangan'),
('P019', 'Rok Pendek'),
('P020', 'Kebaya'),
('P021', 'Singlet'),
('P022', 'Gaun'),
('P023', 'Daster'),
('P024', 'Jas');

-- --------------------------------------------------------

--
-- Table structure for table `msservicetype`
--

CREATE TABLE `msservicetype` (
  `ID_ServiceType` char(10) NOT NULL,
  `namaServiceType` varchar(100) NOT NULL,
  `tarifServiceType` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msservicetype`
--

INSERT INTO `msservicetype` (`ID_ServiceType`, `namaServiceType`, `tarifServiceType`) VALUES
('STP01', 'Regular', 7000),
('STP02', 'Express', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `msstaff`
--

CREATE TABLE `msstaff` (
  `ID_Staff` char(10) NOT NULL,
  `namaStaff` varchar(50) NOT NULL,
  `alamatStaff` varchar(200) NOT NULL,
  `telpStaff` varchar(20) NOT NULL,
  `positionStaff` varchar(100) NOT NULL,
  `gajiStaff` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msstaff`
--

INSERT INTO `msstaff` (`ID_Staff`, `namaStaff`, `alamatStaff`, `telpStaff`, `positionStaff`, `gajiStaff`) VALUES
('S001', 'Jack Wellington', 'Jalan Kemanggisan no.98, Jakarta', '089778956432', 'Manager', 5000000),
('S002', 'Paul James', 'Kemanggisan, Jakarta', '087655236232', 'Pegawai', 1000000),
('S003', 'Rick Kinderson', 'Jalan Cakra no.44, Jakarta', '088823232323', 'Pegawai', 1000000),
('S004', 'Susanti Gautama', 'Jln. Kembangan Utara, Jakarta Barat', '081965580031', 'Pegawai', 1000000),
('S005', 'Regina Fransiska', 'Poris Indah Blok A3 No. 8, Tangerang', '081677780123', 'Pegawai', 1000000),
('S006', 'Marvel Halim', 'Taman Palem Lestari Blok C4 No. 2, Jakarta Barat', '081940093757', 'Pegawai', 1000000),
('S007', 'Aryaraka', 'Poris Indah Blok A1 No. 17, Tangerang', '081762263843', 'Pegawai', 1000000),
('S008', 'Elbert Setiawan', 'Citra 5 Blok C7 No. 3, Jakarta Barat', '081763070833', 'Pegawai', 1000000),
('S009', 'Hendry Lim', 'Permata Hijau Blok H2 No. 4, Jakarta Utara', '081947763899', 'Manager', 5000000),
('S010', 'Devira Laurensia', 'Jln. Tanah Sereal IV No. 33, Jakarta Pusat', '081672200988', 'Manager', 5000000),
('S011', 'Nicholas Anderson', 'Jln. Rawa Belong No. 21, Jakarta Barat', '081903377746', 'Pegawai', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `msstock`
--

CREATE TABLE `msstock` (
  `ID_Brg` char(10) NOT NULL,
  `namaBrg` varchar(100) NOT NULL,
  `hargaBrg` int(30) NOT NULL,
  `qtyBrg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msstock`
--

INSERT INTO `msstock` (`ID_Brg`, `namaBrg`, `hargaBrg`, `qtyBrg`) VALUES
('ST001', 'Pewangi', 25000, 170),
('ST002', 'Deterjen', 30000, 150),
('ST003', 'Pelicin', 15000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `mssupplier`
--

CREATE TABLE `mssupplier` (
  `ID_Supplier` char(10) NOT NULL,
  `namaSupplier` varchar(50) NOT NULL,
  `alamatSupplier` varchar(200) NOT NULL,
  `telpSupplier` varchar(20) NOT NULL,
  `emailSupplier` varchar(100) NOT NULL,
  `kotaSupplier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mssupplier`
--

INSERT INTO `mssupplier` (`ID_Supplier`, `namaSupplier`, `alamatSupplier`, `telpSupplier`, `emailSupplier`, `kotaSupplier`) VALUES
('SP001', 'PT. Wings', 'Jl. Tipar Cakung Kav. F 5-7, Cakung', '(021) 460269', 'contacts@wings.co.id', 'Jakarta Timur'),
('SP002', 'Deterjen Laundry Idola', 'Jl. Pisangan Baru Selatan Gg. I No.11', '0877-8832-8920', 'deterjenidola@yahoo.co.id', 'Jakarta Timur'),
('SP003', 'PT. Unilever Indonesia, Tbk', 'Jl. H. R. Rasuna Said No.B 9', '(021) 5201010', 'contacts@unilever.co.id', 'Jakarta Selatan'),
('SP004', 'Juragan Laundry', 'Jl Veteran Pos II RT01 RW 09', '0857-1960-0388', 'juraganlaundry@gmail.com', 'Tangerang'),
('SP005', 'Forti ( Q-loundrie )', 'Jalan Giriloka Blok S3 No.12', '(021) 68085445', 'forti@gmail.com', 'Tangerang Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `trlaundry`
--

CREATE TABLE `trlaundry` (
  `ID_TransLaundry` char(10) NOT NULL,
  `ID_Member` char(10) NOT NULL,
  `ID_ServiceType` char(10) NOT NULL,
  `ID_Staff` char(10) NOT NULL,
  `TglTerima` datetime NOT NULL,
  `TglAmbil` date NOT NULL,
  `totalItem` int(11) NOT NULL,
  `totalKilo` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `trNotes` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trlaundry`
--

INSERT INTO `trlaundry` (`ID_TransLaundry`, `ID_Member`, `ID_ServiceType`, `ID_Staff`, `TglTerima`, `TglAmbil`, `totalItem`, `totalKilo`, `totalPrice`, `trNotes`) VALUES
('TR001', 'M011', 'STP01', 'S001', '2016-03-01 16:12:27', '2016-03-02', 24, 10, 70000, 'C.Panjang (10)\r\nC.Pendek (14)'),
('TR002', 'M011', 'STP01', 'S009', '2016-12-09 16:41:17', '2016-12-12', 7, 3, 21000, 'Jaket 3\r\nC.pendek 4'),
('TR003', 'M010', 'STP02', 'S003', '2016-12-09 16:43:41', '2016-12-10', 3, 2, 30000, 'K.panjang 1\r\nC.jeans 1\r\nSinglet 1'),
('TR004', 'M002', 'STP01', 'S009', '2016-01-01 16:48:50', '2016-01-04', 15, 7, 49000, 'Kaos 15'),
('TR005', 'M001', 'STP02', 'S004', '2016-01-18 16:51:17', '2016-01-20', 12, 5, 75000, 's.bantal 4\r\ns.guling 8'),
('TR006', 'M002', 'STP02', 'S003', '2016-09-19 16:54:44', '2016-09-21', 4, 2, 30000, 'jaket 2'),
('TR007', 'M011', 'STP01', 'S009', '2016-10-12 16:56:15', '2016-10-15', 2, 2, 14000, 'kebaya 2'),
('TR008', 'M003', 'STP01', 'S009', '2016-09-12 16:57:32', '2016-09-14', 13, 7, 49000, 'k.panjang 5\r\nc.panjang 5\r\nr.pendek 3'),
('TR009', 'M001', 'STP01', 'S006', '2016-11-24 16:58:53', '2016-11-26', 2, 1, 7000, 'k.kerah 2'),
('TR010', 'M008', 'STP01', 'S009', '2016-11-09 16:59:32', '2016-11-12', 3, 2, 14000, 'jaket 3'),
('TR011', 'M006', 'STP01', 'S003', '2016-11-03 17:00:07', '2016-01-05', 4, 2, 14000, 'k.oblong 4'),
('TR012', 'M012', 'STP02', 'S006', '2016-12-21 19:46:17', '2016-12-22', 10, 5, 75000, 'Kerah (2), Bantal (3), Selimut(5)');

-- --------------------------------------------------------

--
-- Table structure for table `trlaundrydetail`
--

CREATE TABLE `trlaundrydetail` (
  `ID_TransLaundry` char(10) NOT NULL,
  `ID_Pakaian` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trlaundrydetail`
--

INSERT INTO `trlaundrydetail` (`ID_TransLaundry`, `ID_Pakaian`) VALUES
('TR003', 'P001'),
('TR008', 'P001'),
('TR002', 'P005'),
('TR006', 'P005'),
('TR010', 'P005'),
('TR004', 'P007'),
('TR011', 'P007'),
('TR009', 'P009'),
('TR012', 'P009'),
('TR005', 'P010'),
('TR012', 'P010'),
('TR001', 'P011'),
('TR008', 'P011'),
('TR005', 'P012'),
('TR001', 'P013'),
('TR002', 'P013'),
('TR003', 'P015'),
('TR012', 'P016'),
('TR008', 'P019'),
('TR007', 'P020'),
('TR003', 'P021');

-- --------------------------------------------------------

--
-- Table structure for table `trstock`
--

CREATE TABLE `trstock` (
  `ID_TransStock` char(10) NOT NULL,
  `ID_Supplier` char(10) NOT NULL,
  `ID_Staff` char(10) NOT NULL,
  `ID_Brg` char(10) NOT NULL,
  `TglTransStock` datetime NOT NULL,
  `orderQty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trstock`
--

INSERT INTO `trstock` (`ID_TransStock`, `ID_Supplier`, `ID_Staff`, `ID_Brg`, `TglTransStock`, `orderQty`) VALUES
('TRS001', 'SP001', 'S002', 'ST001', '2016-01-18 19:12:34', 70),
('TRS002', 'SP003', 'S009', 'ST002', '2016-12-19 19:19:15', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msmember`
--
ALTER TABLE `msmember`
  ADD PRIMARY KEY (`ID_Member`);

--
-- Indexes for table `mspakaian`
--
ALTER TABLE `mspakaian`
  ADD PRIMARY KEY (`ID_Pakaian`);

--
-- Indexes for table `msservicetype`
--
ALTER TABLE `msservicetype`
  ADD PRIMARY KEY (`ID_ServiceType`);

--
-- Indexes for table `msstaff`
--
ALTER TABLE `msstaff`
  ADD PRIMARY KEY (`ID_Staff`);

--
-- Indexes for table `msstock`
--
ALTER TABLE `msstock`
  ADD PRIMARY KEY (`ID_Brg`);

--
-- Indexes for table `mssupplier`
--
ALTER TABLE `mssupplier`
  ADD PRIMARY KEY (`ID_Supplier`);

--
-- Indexes for table `trlaundry`
--
ALTER TABLE `trlaundry`
  ADD PRIMARY KEY (`ID_TransLaundry`),
  ADD KEY `ID_Member` (`ID_Member`),
  ADD KEY `ID_ServiceType` (`ID_ServiceType`),
  ADD KEY `ID_Staff` (`ID_Staff`);

--
-- Indexes for table `trlaundrydetail`
--
ALTER TABLE `trlaundrydetail`
  ADD PRIMARY KEY (`ID_TransLaundry`,`ID_Pakaian`),
  ADD KEY `ID_Pakaian` (`ID_Pakaian`);

--
-- Indexes for table `trstock`
--
ALTER TABLE `trstock`
  ADD PRIMARY KEY (`ID_TransStock`),
  ADD KEY `ID_Supplier` (`ID_Supplier`),
  ADD KEY `ID_Staff` (`ID_Staff`),
  ADD KEY `ID_Brg` (`ID_Brg`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trlaundry`
--
ALTER TABLE `trlaundry`
  ADD CONSTRAINT `trlaundry_ibfk_1` FOREIGN KEY (`ID_Member`) REFERENCES `msmember` (`ID_Member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trlaundry_ibfk_2` FOREIGN KEY (`ID_Staff`) REFERENCES `msstaff` (`ID_Staff`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trlaundry_ibfk_3` FOREIGN KEY (`ID_ServiceType`) REFERENCES `msservicetype` (`ID_ServiceType`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trlaundrydetail`
--
ALTER TABLE `trlaundrydetail`
  ADD CONSTRAINT `trlaundrydetail_ibfk_1` FOREIGN KEY (`ID_Pakaian`) REFERENCES `mspakaian` (`ID_Pakaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trlaundrydetail_ibfk_2` FOREIGN KEY (`ID_TransLaundry`) REFERENCES `trlaundry` (`ID_TransLaundry`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trstock`
--
ALTER TABLE `trstock`
  ADD CONSTRAINT `trstock_ibfk_1` FOREIGN KEY (`ID_Staff`) REFERENCES `msstaff` (`ID_Staff`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trstock_ibfk_2` FOREIGN KEY (`ID_Supplier`) REFERENCES `mssupplier` (`ID_Supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trstock_ibfk_3` FOREIGN KEY (`ID_Brg`) REFERENCES `msstock` (`ID_Brg`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
