-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 05:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firma2`
--

-- --------------------------------------------------------

--
-- Table structure for table `departman`
--

CREATE TABLE `departman` (
  `id` int(11) NOT NULL,
  `departmanAdi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departman`
--

INSERT INTO `departman` (`id`, `departmanAdi`) VALUES
(1, 'Muhasebe'),
(2, 'İnsan Kaynakları'),
(3, 'Bilişim Teknolojileri'),
(4, 'Planlama');

-- --------------------------------------------------------

--
-- Table structure for table `gorev`
--

CREATE TABLE `gorev` (
  `id` int(11) NOT NULL,
  `gorevAdi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gorev`
--

INSERT INTO `gorev` (`id`, `gorevAdi`) VALUES
(1, 'Müdür'),
(2, 'Müdür Yardımcısı'),
(3, 'Yazılımcı'),
(4, 'Bilgisayar Teknikeri'),
(6, 'Üstat');

--
-- Triggers `gorev`
--
DELIMITER $$
CREATE TRIGGER `gorevAfterInsert` AFTER INSERT ON `gorev` FOR EACH ROW BEGIN
SELECT COUNT(id) INTO @gorevSayisi FROM gorev;
UPDATE rapor SET rapor.gorevSayisi=@gorevSayisi;


END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `personel`
--

CREATE TABLE `personel` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `birthday` varchar(4) NOT NULL,
  `departmanID` int(11) NOT NULL,
  `gorevID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personel`
--

INSERT INTO `personel` (`id`, `name`, `surname`, `birthday`, `departmanID`, `gorevID`) VALUES
(1, 'Mehmet', 'Hanaylı', '1980', 3, 3),
(2, 'Ayşenur', 'Kanca', '1995', 1, 2),
(3, 'Kerim', 'Tanbur', '1995', 2, 4),
(4, 'Emir', 'Karameşe', '2002', 1, 1),
(5, 'Neriman', 'Gül', '2002', 3, 1),
(6, 'Ayşe', 'Gül', '2002', 3, 1);

--
-- Triggers `personel`
--
DELIMITER $$
CREATE TRIGGER `personelAfterInsert` AFTER INSERT ON `personel` FOR EACH ROW BEGIN

SELECT COUNT(id) INTO @personelSayisi FROM personel;
UPDATE rapor SET personelSayisi=@personelSayisi;



END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rapor`
--

CREATE TABLE `rapor` (
  `id` int(11) NOT NULL,
  `departmanSayisi` int(11) NOT NULL,
  `gorevSayisi` int(11) NOT NULL,
  `personelSayisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rapor`
--

INSERT INTO `rapor` (`id`, `departmanSayisi`, `gorevSayisi`, `personelSayisi`) VALUES
(1, 1, 5, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departman`
--
ALTER TABLE `departman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gorev`
--
ALTER TABLE `gorev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departman`
--
ALTER TABLE `departman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gorev`
--
ALTER TABLE `gorev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personel`
--
ALTER TABLE `personel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
