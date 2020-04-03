-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2019 at 09:41 PM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `binitems`
--

CREATE TABLE `binitems` (
  `Sno` int(11) NOT NULL,
  `ItemCode` varchar(10) DEFAULT NULL,
  `ItemDescription` varchar(100) DEFAULT NULL,
  `UnitPrice` decimal(9,2) DEFAULT NULL,
  `Weight` varchar(50) DEFAULT NULL,
  `Units` varchar(50) DEFAULT NULL,
  `HSNACS` varchar(50) DEFAULT NULL,
  `GST` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `binitems`
--

INSERT INTO `binitems` (`Sno`, `ItemCode`, `ItemDescription`, `UnitPrice`, `Weight`, `Units`, `HSNACS`, `GST`) VALUES
(1, '1774667883', 'Laven Noni Gold Juice', '1116.07', '800', 'ML', '20099000', 12),
(2, '9994483236', 'Laven Protein Powder', '1059.32', '500', 'GMS', '2106', 18);

-- --------------------------------------------------------

--
-- Table structure for table `gst`
--

CREATE TABLE `gst` (
  `sno` int(11) NOT NULL,
  `state_code` varchar(50) DEFAULT NULL,
  `state_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst`
--

INSERT INTO `gst` (`sno`, `state_code`, `state_name`) VALUES
(1, '1', 'Jammu and Kashmir'),
(2, '2', 'Himachal Pradesh'),
(3, '3', 'Punjab'),
(4, '4', 'Chandigarh'),
(5, '5', 'Uttarakhand'),
(6, '6', 'Haryana'),
(7, '7', 'Delhi'),
(8, '8', 'Rajasthan'),
(9, '9', 'Uttar Pradesh'),
(10, '10', 'Bihar'),
(11, '11', 'Sikkim'),
(12, '12', 'Arunachal Pradesh'),
(13, '13', 'Nagaland'),
(14, '14', 'Manipur'),
(15, '15', 'Mizoram'),
(16, '16', 'Tripura'),
(17, '17', 'Meghalaya'),
(18, '18', 'Assam'),
(19, '19', 'WestBengal'),
(20, '20', 'Jharkhand'),
(21, '21', 'Odisha'),
(22, '22', 'Chattisgarh'),
(23, '23', 'Madhya Pradesh'),
(24, '24', 'Gujarat'),
(25, '25', 'Daman and Diu'),
(26, '26', 'Dadar and Nagar Haveli'),
(27, '27', 'Maharashtra'),
(29, '29', 'Karnataka'),
(30, '30', 'Goa'),
(31, '31', 'Lakshadweep'),
(32, '32', 'Kerala'),
(33, '33', 'Tamilnadu'),
(34, '34', 'Pondicherry'),
(35, '35', 'Andaman and Nicobar Islands'),
(36, '36', 'Telangana'),
(37, '37', 'Andhra Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Sno` int(11) NOT NULL,
  `InvNo` varchar(10) DEFAULT NULL,
  `Invto` varchar(10) DEFAULT NULL,
  `RevNo` varchar(50) DEFAULT NULL,
  `InvDt` varchar(20) DEFAULT NULL,
  `InvState` varchar(50) DEFAULT NULL,
  `InvStCode` varchar(10) DEFAULT NULL,
  `TransMode` varchar(50) DEFAULT NULL,
  `VehNo` varchar(20) DEFAULT NULL,
  `DtofSup` varchar(20) DEFAULT NULL,
  `PlofSup` varchar(50) DEFAULT NULL,
  `Bname` varchar(50) DEFAULT NULL,
  `Bgst` varchar(15) DEFAULT NULL,
  `Baddr` varchar(100) DEFAULT NULL,
  `BstCode` varchar(20) DEFAULT NULL,
  `Bstate` varchar(50) DEFAULT NULL,
  `Sname` varchar(50) DEFAULT NULL,
  `Shgst` varchar(15) DEFAULT NULL,
  `Saddr` varchar(100) DEFAULT NULL,
  `SstCode` varchar(20) DEFAULT NULL,
  `Sstate` varchar(50) DEFAULT NULL,
  `ItemCode` varchar(10) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Amount` decimal(9,2) DEFAULT NULL,
  `TotInvAmt` decimal(9,2) DEFAULT NULL,
  `GST` decimal(9,2) DEFAULT NULL,
  `CGST` decimal(9,2) DEFAULT NULL,
  `SGST` decimal(9,2) DEFAULT NULL,
  `IGST` decimal(9,2) DEFAULT NULL,
  `AmtWithTax` decimal(9,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Sno`, `InvNo`, `Invto`, `RevNo`, `InvDt`, `InvState`, `InvStCode`, `TransMode`, `VehNo`, `DtofSup`, `PlofSup`, `Bname`, `Bgst`, `Baddr`, `BstCode`, `Bstate`, `Sname`, `Shgst`, `Saddr`, `SstCode`, `Sstate`, `ItemCode`, `Quantity`, `Amount`, `TotInvAmt`, `GST`, `CGST`, `SGST`, `IGST`, `AmtWithTax`) VALUES
(1, '8427251139', 'M140799940', '125', '19-11-2019', 'Andhra Pradesh', '37', 'SELECT TRANSPORTATION MODE', '', '07-08-2019', 'VIJAYAWADA', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(2, '8427251139', 'M140799940', '125', '19-11-2019', 'Andhra Pradesh', '37', 'SELECT TRANSPORTATION MODE', '', '07-08-2019', 'VIJAYAWADA', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(3, '9449783300', 'M413402329', '126', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-08-2019', 'VIJAYAWADA', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(4, '9449783300', 'M413402329', '126', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-08-2019', 'VIJAYAWADA', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(5, '4219573944', 'M614057392', '143', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(6, '4219573944', 'M614057392', '143', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(7, '1845881649', 'M331335426', '167', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(8, '1845881649', 'M331335426', '167', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RS NATURAL FOODS', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(9, '6760213502', 'M387940436', '187', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(10, '6760213502', 'M387940436', '187', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(11, '2907615657', 'M859539153', '187', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(12, '2907615657', 'M859539153', '187', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(13, '8029266614', 'M157703894', '178', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(14, '8029266614', 'M157703894', '178', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(15, '4690164218', 'M815043203', '109', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(16, '4690164218', 'M815043203', '109', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-11-2019', 'VIJAYAWADA', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'BRAHMAIAH URITI', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(17, '9608974106', 'M327063294', '180', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'RAMUDU V', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'RAMUDU V', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(18, '9608974106', 'M327063294', '180', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'RAMUDU V', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'RAMUDU V', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(19, '8213605040', 'M312214383', '128', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(20, '8213605040', 'M312214383', '128', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(21, '1547760775', 'M454824679', '198', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'SRINIVASA REDDY KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'SRINIVASA REDDY', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(22, '1547760775', 'M454824679', '198', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'SRINIVASA REDDY KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'SRINIVASA REDDY', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(23, '8348969719', 'M462834776', '120', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'UMA MAHESWARA RAO V', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'UMA MAHESWARA RAO V', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(24, '8348969719', 'M462834776', '120', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'UMA MAHESWARA RAO V', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'UMA MAHESWARA RAO V', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(25, '4501041529', 'M267036527', '170', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'NAGARJUNA SAGAR V', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'NAGARJUNA SAGAR V', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(26, '4501041529', 'M267036527', '170', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'NAGARJUNA SAGAR V', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'NAGARJUNA SAGAR V', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(27, '4033409381', 'M441735459', '129', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '12-11-2019', 'VIJAYAWADA', 'VENKATA RAMANA KOLA', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'VENKATA RAMANA KOLA', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(28, '4033409381', 'M441735459', '129', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '12-11-2019', 'VIJAYAWADA', 'VENKATA RAMANA KOLA', '', 'AMARAVATHI', '37', 'Andhra Pradesh', 'VENKATA RAMANA KOLA', '', 'AMARAVATHI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(29, '2126544600', 'M599775165', '126', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '12-11-2019', 'VIJAYAWADA', 'PRAMEELA DEVI S V', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'PRAMEELA DEVI S V', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(30, '2126544600', 'M599775165', '126', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '12-11-2019', 'VIJAYAWADA', 'PRAMEELA DEVI S V', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'PRAMEELA DEVI S V', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(31, '6042782039', 'M449380248', '185', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '12-11-2019', 'VIJAYAWADA', 'ANITHA MADDALA', '', 'KOTHAPALLI', '37', 'Andhra Pradesh', 'ANITHA MADDALA', '', 'KOTHAPALLI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(32, '6042782039', 'M449380248', '185', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '12-11-2019', 'VIJAYAWADA', 'ANITHA MADDALA', '', 'KOTHAPALLI', '37', 'Andhra Pradesh', 'ANITHA MADDALA', '', 'KOTHAPALLI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(33, '3577497775', 'M329042383', '176', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '12-11-2019', 'VIJAYAWADA', 'DEEPTHI SYKAM', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'DEEPTHI SYKAM', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(34, '3577497775', 'M329042383', '176', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '12-11-2019', 'VIJAYAWADA', 'DEEPTHI SYKAM', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'DEEPTHI SYKAM', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(35, '8064920941', 'M988810484', '150', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '13-11-2019', 'VIJAYAWADA', 'VENKATESWARA RAO T', '', 'RATNALA CHERUVU', '37', 'Andhra Pradesh', 'VENKATESWARA RAO T', '', 'RATNALA CHERUVU', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(36, '8064920941', 'M988810484', '150', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '13-11-2019', 'VIJAYAWADA', 'VENKATESWARA RAO T', '', 'RATNALA CHERUVU', '37', 'Andhra Pradesh', 'VENKATESWARA RAO T', '', 'RATNALA CHERUVU', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(37, '3409700935', 'M138538944', '126', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '13-11-2019', 'VIJAYAWADA', 'NAGENDRA KUMAR BUDATI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'NAGENDRA KUMAR BUDATI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(38, '3409700935', 'M138538944', '126', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '13-11-2019', 'VIJAYAWADA', 'NAGENDRA KUMAR BUDATI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'NAGENDRA KUMAR BUDATI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(39, '2665294906', 'M987474561', '124', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '13-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(40, '2665294906', 'M987474561', '124', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '13-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(41, '3468603659', 'M322022834', '128', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(42, '3468603659', 'M322022834', '128', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(43, '1939342686', 'M755273283', '129', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(44, '1939342686', 'M755273283', '129', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(45, '9092970496', 'M869816357', '102', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(46, '9092970496', 'M869816357', '102', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(47, '1681239199', 'M741222777', '101', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(48, '1681239199', 'M741222777', '101', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(49, '4609845597', 'M424959601', '104', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(50, '4609845597', 'M424959601', '104', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(51, '3837004215', 'M535683090', '128', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(52, '3837004215', 'M535683090', '128', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'SURESH KUMAR KONDA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(53, '7481740694', 'M346483244', '137', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'KOTESWARA RAO T', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'KOTESWARA RAO T', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(54, '7481740694', 'M346483244', '137', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'KOTESWARA RAO T', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'KOTESWARA RAO T', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(55, '8721135569', 'M289918167', '126', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'SUNIL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'SUNIL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(56, '8721135569', 'M289918167', '126', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '11-11-2019', 'VIJAYAWADA', 'SUNIL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'SUNIL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(57, '1113509049', 'M945336797', '178', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '12-11-2019', 'VIJAYAWADA', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(58, '1113509049', 'M945336797', '178', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '12-11-2019', 'VIJAYAWADA', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(59, '9014971398', 'M521414719', '195', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'RAHUL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RAHUL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(60, '9014971398', 'M521414719', '195', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '15-11-2019', 'VIJAYAWADA', 'RAHUL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RAHUL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(61, '2971257516', 'M700849314', '150', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '14-11-2019', 'VIJAYAWADA', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(62, '2971257516', 'M700849314', '150', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '14-11-2019', 'VIJAYAWADA', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(63, '7608926135', 'M371919630', '127', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '09-11-2019', 'VIJAYAWADA', 'LAVANYA TEKI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'LAVANYA TEKI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(64, '7608926135', 'M371919630', '127', '19-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '09-11-2019', 'VIJAYAWADA', 'LAVANYA TEKI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'LAVANYA TEKI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(65, '5910124938', 'M373371450', '785', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '31-08-2019', 'VIJAYAWADA', 'VENKATA SRINU KADEM', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'VENKATA SRINU KADEM', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(66, '5910124938', 'M373371450', '785', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '31-08-2019', 'VIJAYAWADA', 'VENKATA SRINU KADEM', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'VENKATA SRINU KADEM', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(67, '1804253039', 'M565539317', '861', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '30-08-2019', 'VIJAYAWADA', 'DURGA GOLLA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'DURGA GOLLA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(68, '1804253039', 'M565539317', '861', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '30-08-2019', 'VIJAYAWADA', 'DURGA GOLLA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'DURGA GOLLA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(69, '2318519590', 'M513612096', '780', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '30-08-2019', 'VIJAYAWADA', 'NAVEEN MUTTHU KRISHNA  P', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'NAVEEN MUTTHU KRISHNA P', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(70, '2318519590', 'M513612096', '780', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '30-08-2019', 'VIJAYAWADA', 'NAVEEN MUTTHU KRISHNA  P', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'NAVEEN MUTTHU KRISHNA P', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(71, '7330003379', 'M911916279', '761', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '05-09-2019', 'VIJAYAWADA', 'SRI SANTHI MEDIDI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'SRI SANTHI MEDIDI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(72, '7330003379', 'M911916279', '761', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '05-09-2019', 'VIJAYAWADA', 'SRI SANTHI MEDIDI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'SRI SANTHI MEDIDI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(73, '1720906085', 'M844348808', '194', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '01-10-2019', 'VIJAYAWADA', 'SRINIVASA RAO ANDE', '', 'GUNTUR', '37', 'Andhra Pradesh', 'SRINIVASA RAO', '', 'GUNTUR', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(74, '1720906085', 'M844348808', '194', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '01-10-2019', 'VIJAYAWADA', 'SRINIVASA RAO ANDE', '', 'GUNTUR', '37', 'Andhra Pradesh', 'SRINIVASA RAO', '', 'GUNTUR', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(75, '4560374769', 'M693197273', '761', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '04-09-2019', 'VIJAYAWADA', 'NARENDRA GOLLA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'NARENDRA GOLLA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(76, '4560374769', 'M693197273', '761', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '04-09-2019', 'VIJAYAWADA', 'NARENDRA GOLLA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'NARENDRA GOLLA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(77, '6222557781', 'M115816189', '981', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '30-08-2019', 'VIJAYAWADA', 'MADHURI PUNNAPU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'MADHURI PUNNAPU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(78, '6222557781', 'M115816189', '981', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '30-08-2019', 'VIJAYAWADA', 'MADHURI PUNNAPU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'MADHURI PUNNAPU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(79, '1580075767', 'M380794529', '671', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '30-08-2019', 'VIJAYAWADA', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(80, '1580075767', 'M380794529', '671', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '30-08-2019', 'VIJAYAWADA', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'PRABHAVATHI PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(81, '4443001177', 'M422812415', '562', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-08-2019', 'VIJAYAWADA', 'BOSU BABU PATTETI', '', 'GUNTUR', '37', 'Andhra Pradesh', 'BOSU BABU PATTETI', '', 'GUNTUR', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(82, '4443001177', 'M422812415', '562', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-08-2019', 'VIJAYAWADA', 'BOSU BABU PATTETI', '', 'GUNTUR', '37', 'Andhra Pradesh', 'BOSU BABU PATTETI', '', 'GUNTUR', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(83, '9391647899', 'M991850475', '170', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '10-08-2019', 'VIJAYAWADA', 'SRINIVASA RAO BATTU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'SRINIVASA RAO BATTU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(84, '9391647899', 'M991850475', '170', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '10-08-2019', 'VIJAYAWADA', 'SRINIVASA RAO BATTU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'SRINIVASA RAO BATTU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(85, '4522113917', 'M149662899', '678', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '10-08-2019', 'VIJAYAWADA', 'BAJIKHAN PATAN', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'BAJIKHAN PATAN', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(86, '4522113917', 'M149662899', '678', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '10-08-2019', 'VIJAYAWADA', 'BAJIKHAN PATAN', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'BAJIKHAN PATAN', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(87, '5459648911', 'M302077310', '129', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '14-08-2019', 'VIJAYAWADA', 'GOVINDAMMA RAVIRALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'GOVINDAMMA RAVIRALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(88, '5459648911', 'M302077310', '129', '20-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '14-08-2019', 'VIJAYAWADA', 'GOVINDAMMA RAVIRALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'GOVINDAMMA RAVIRALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(89, '2200383639', 'M237606127', '450', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '23-08-2019', 'VIJAYAWADA', 'RAVINDRA BOJJA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RAVINDRA BOJJA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(90, '2200383639', 'M237606127', '450', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '23-08-2019', 'VIJAYAWADA', 'RAVINDRA BOJJA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RAVINDRA BOJJA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(91, '2291191514', 'M132109191', '781', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '14-09-2019', 'VIJAYAWADA', 'SURESH NEELA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'SURESH NEELA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(92, '2291191514', 'M132109191', '781', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '14-09-2019', 'VIJAYAWADA', 'SURESH NEELA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'SURESH NEELA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(93, '6824144826', 'M427381866', '684', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '10-09-2019', 'VIJAYAWADA', 'SUNIL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'SUNIL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(94, '6824144826', 'M427381866', '684', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '10-09-2019', 'VIJAYAWADA', 'SUNIL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'SUNIL PADAVALA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(95, '8404612073', 'M258199851', '891', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'NAGA UDAY BABU G', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'NAGA UDAY BABU G', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(96, '8404612073', 'M258199851', '891', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'NAGA UDAY BABU G', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'NAGA UDAY BABU G', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(97, '9185283056', 'M188768125', '905', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'ANJI BABU GONEPALLI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'ANJI BABU GONEPALLI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(98, '9185283056', 'M188768125', '905', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'ANJI BABU GONEPALLI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'ANJI BABU GONEPALLI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(99, '9847131449', 'M439186064', '761', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '20-09-2019', 'VIJAYAWADA', 'NISSANKARA RAO S', '', 'GUNTUR', '37', 'Andhra Pradesh', 'NISSANKA RAO S', '', 'GUNTUR', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(100, '9847131449', 'M439186064', '761', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '20-09-2019', 'VIJAYAWADA', 'NISSANKARA RAO S', '', 'GUNTUR', '37', 'Andhra Pradesh', 'NISSANKA RAO S', '', 'GUNTUR', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(101, '7776442151', 'M613882654', '671', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '05-09-2019', '', 'RAMESH PULUGUJJU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RAMESH PULUGUJJU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(102, '7776442151', 'M613882654', '671', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '05-09-2019', '', 'RAMESH PULUGUJJU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RAMESH PULUGUJJU', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(103, '5535165256', 'M836162533', '901', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(104, '5535165256', 'M836162533', '901', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(105, '2813960731', 'M951286776', '891', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(106, '2813960731', 'M951286776', '891', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(107, '7697003107', 'M526805660', '904', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(108, '7697003107', 'M526805660', '904', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', 'ASHOK KURMA', '', 'BANTUMILLI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(109, '8758153295', 'M453131552', '983', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'SAMPATH DASARI', '', 'BANTUMILLI', '37', 'Andhra Pradesh', 'SAMPATH DASARI', '', 'BANTUMILLI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(110, '8758153295', 'M453131552', '983', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'SAMPATH DASARI', '', 'BANTUMILLI', '37', 'Andhra Pradesh', 'SAMPATH DASARI', '', 'BANTUMILLI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(111, '9517686627', 'M447230604', '892', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-08-2019', '', 'RAMESH BABU KOTHAPALLI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RAMESH BABU KOTHAPALLI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(112, '9517686627', 'M447230604', '892', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '07-08-2019', '', 'RAMESH BABU KOTHAPALLI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'RAMESH BABU KOTHAPALLI', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(113, '8047574005', 'M193487634', '989', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '16-09-2019', 'vijayawada', 'RAVI CHANDRA BOMMADEVARA', '', 'TIRUVURU', '37', 'Andhra Pradesh', 'RAVI CHANDRA B', '', 'TIRUVURU', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(114, '8047574005', 'M193487634', '989', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '16-09-2019', 'vijayawada', 'RAVI CHANDRA BOMMADEVARA', '', 'TIRUVURU', '37', 'Andhra Pradesh', 'RAVI CHANDRA B', '', 'TIRUVURU', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(115, '2377668829', 'M799458190', '526', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '02-09-2019', 'VIJAYAWADA', 'MOHANA KRISHNA BODDOJU', '', 'THIRUVURU', '37', 'Andhra Pradesh', 'B MOHAN KRISHNA', '', 'THIRUVURU', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(116, '2377668829', 'M799458190', '526', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '02-09-2019', 'VIJAYAWADA', 'MOHANA KRISHNA BODDOJU', '', 'THIRUVURU', '37', 'Andhra Pradesh', 'B MOHAN KRISHNA', '', 'THIRUVURU', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(117, '2092936766', 'M921264945', '856', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '16-09-2019', 'VIJAYAWADA', 'RAVI CHANDRA BOMMADEVARA', '', 'THIRUVURU', '37', 'Andhra Pradesh', 'B RAVI CHANDRA', '', 'THIRUVURU', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(118, '2092936766', 'M921264945', '856', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '16-09-2019', 'VIJAYAWADA', 'RAVI CHANDRA BOMMADEVARA', '', 'THIRUVURU', '37', 'Andhra Pradesh', 'B RAVI CHANDRA', '', 'THIRUVURU', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(119, '1373092738', 'M494194437', '964', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '04-09-2019', '', 'RAJU KALAPALA', '', 'NUZVID', '37', 'Andhra Pradesh', 'K RAJU', '', 'NUZVID', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(120, '1373092738', 'M494194437', '964', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '04-09-2019', '', 'RAJU KALAPALA', '', 'NUZVID', '37', 'Andhra Pradesh', 'K RAJU', '', 'NUZVID', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(121, '7915708873', 'M502659617', '154', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '16-09-2019', 'VIJAYAWADA', 'RAVI CHANDRA BOMMADEVARA', '', 'THIRUVURU', '37', 'Andhra Pradesh', 'B RAVI CHANDRA', '', 'THIRUVURU', '37', 'Andhra Pradesh', '1774667883', 1, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(122, '7915708873', 'M502659617', '154', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '16-09-2019', 'VIJAYAWADA', 'RAVI CHANDRA BOMMADEVARA', '', 'THIRUVURU', '37', 'Andhra Pradesh', 'B RAVI CHANDRA', '', 'THIRUVURU', '37', 'Andhra Pradesh', '9994483236', 1, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(123, '4505333920', 'M519490767', '807', '21-11-2019', 'Andhra Pradesh', '', 'By Hand', '', '16-09-2019', 'VIJAYAWADA', 'BALA BABU BOMMADEVARA', '', 'MYLAVARAM', '37', 'Andhra Pradesh', 'B BALABABU', '', 'MYLAVARAM', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(124, '4505333920', 'M519490767', '807', '21-11-2019', 'Andhra Pradesh', '', 'By Hand', '', '16-09-2019', 'VIJAYAWADA', 'BALA BABU BOMMADEVARA', '', 'MYLAVARAM', '37', 'Andhra Pradesh', 'B BALABABU', '', 'MYLAVARAM', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(125, '1432193035', 'M320347637', '134', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '16-09-2019', 'VIJAYAWADA', 'SATHYENDRANATH M', '', 'THIRUVURU', '37', 'Andhra Pradesh', 'SATHYENDRANATH M', '', 'THIRUVURU', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(126, '1432193035', 'M320347637', '134', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '16-09-2019', 'VIJAYAWADA', 'SATHYENDRANATH M', '', 'THIRUVURU', '37', 'Andhra Pradesh', 'SATHYENDRANATH M', '', 'THIRUVURU', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(127, '9058878505', 'M141022182', '178', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '16-09-2019', 'VIJAYAWADA', 'SRINIVASA RAO KONDAPATURI', '', 'THIRUVURU', '37', 'Andhra Pradesh', 'K SRINIVASA RAO', '', 'THIRUVURU', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(128, '9058878505', 'M141022182', '178', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '16-09-2019', 'VIJAYAWADA', 'SRINIVASA RAO KONDAPATURI', '', 'THIRUVURU', '37', 'Andhra Pradesh', 'K SRINIVASA RAO', '', 'THIRUVURU', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(129, '2349050668', 'M173678092', '896', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'KAMALA TIRUVEEDULA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'KAMALA TIRUVEEDULA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(130, '2349050668', 'M173678092', '896', '21-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '22-08-2019', 'VIJAYAWADA', 'KAMALA TIRUVEEDULA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', 'KAMALA TIRUVEEDULA', '', 'MANGALAGIRI', '37', 'Andhra Pradesh', '9994483236', 1, '1053.32', '2169.00', '323.53', '161.76', '161.76', '0.00', '2493.00'),
(131, '3340534390', 'M851126166', '907', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'LAKSHMANUDU V', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'LAKSHMANUDU V', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(132, '3340534390', 'M851126166', '907', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'LAKSHMANUDU V', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'LAKSHMANUDU V', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '9994483236', 1, '1059.32', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(133, '6874763640', 'M659694673', '721', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', '', 'SRINIVASA REDDY KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'SRINIVASA REDDY', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(134, '6874763640', 'M659694673', '721', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', '', 'SRINIVASA REDDY KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'SRINIVASA REDDY', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '9994483236', 1, '1059.32', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(135, '3861867675', 'M560832020', '763', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(136, '3861867675', 'M560832020', '763', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '9994483236', 1, '1059.32', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(137, '3074589473', 'M791033554', '754', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'SREEDHAR RAO GANTA', '', 'WARANGAL', '37', 'Andhra Pradesh', 'SREEDHAR RAO GANTA', '', 'WARANGAL', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(138, '3074589473', 'M791033554', '754', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'SREEDHAR RAO GANTA', '', 'WARANGAL', '37', 'Andhra Pradesh', 'SREEDHAR RAO GANTA', '', 'WARANGAL', '37', 'Andhra Pradesh', '9994483236', 1, '1059.32', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(139, '7097386519', 'M493491920', '843', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'MALYADRI GONUGUNTA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'MALYADRI GONUGUNTA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(140, '7097386519', 'M493491920', '843', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'MALYADRI GONUGUNTA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', 'MALYADRI GONUGUNTA', '', 'VIJAYAWADA', '37', 'Andhra Pradesh', '9994483236', 1, '1059.32', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(141, '8928754770', 'M551700859', '895', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(142, '8928754770', 'M551700859', '895', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', 'RAMADEVI KURRE', '', 'RAMACHANDRAPURAM', '37', 'Andhra Pradesh', '9994483236', 1, '1059.32', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(143, '2379879638', 'M290819833', '671', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'SOUJANYA DOBBALA', '', 'KHAMMAM', '37', 'Andhra Pradesh', 'SOUJANYA DOBBALA', '', 'KHAMMAM', '37', 'Andhra Pradesh', '1774667883', 1, '1116.07', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00'),
(144, '2379879638', 'M290819833', '671', '27-11-2019', 'Andhra Pradesh', '37', 'By Hand', '', '27-11-2019', 'VIJAYAWADA', 'SOUJANYA DOBBALA', '', 'KHAMMAM', '37', 'Andhra Pradesh', 'SOUJANYA DOBBALA', '', 'KHAMMAM', '37', 'Andhra Pradesh', '9994483236', 1, '1059.32', '2175.00', '324.61', '162.30', '162.30', '0.00', '2500.00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Sno` int(11) NOT NULL,
  `MemberID` varchar(10) DEFAULT NULL,
  `ReferalID` varchar(10) DEFAULT NULL,
  `Legpos` varchar(20) DEFAULT NULL,
  `Title` varchar(10) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `EmailID` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(20) DEFAULT NULL,
  `Password` text,
  `Qualification` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `AadharNo` varchar(20) DEFAULT NULL,
  `PANNo` varchar(20) DEFAULT NULL,
  `BankName` varchar(100) DEFAULT NULL,
  `BranchName` varchar(100) DEFAULT NULL,
  `IFSCcode` varchar(20) DEFAULT NULL,
  `BankAccNo` varchar(20) DEFAULT NULL,
  `NomineeName` varchar(50) DEFAULT NULL,
  `DtofJoining` varchar(50) DEFAULT NULL,
  `LeftCount` bigint(20) DEFAULT NULL,
  `WkLC` bigint(20) DEFAULT NULL,
  `RightCount` bigint(20) DEFAULT NULL,
  `WkRC` bigint(20) DEFAULT NULL,
  `ParallelCount` bigint(20) DEFAULT NULL,
  `WkPC` bigint(20) DEFAULT NULL,
  `Totpairs` bigint(20) DEFAULT NULL,
  `PairCommission` decimal(9,2) DEFAULT NULL,
  `WkPrCom` decimal(9,2) DEFAULT NULL,
  `Bonus` decimal(9,2) DEFAULT NULL,
  `TotAmount` decimal(9,2) DEFAULT NULL,
  `TdsTax` decimal(9,2) DEFAULT NULL,
  `WalletAmt` decimal(9,2) DEFAULT NULL,
  `AmttobePaid` decimal(9,2) DEFAULT NULL,
  `Cader` varchar(50) DEFAULT NULL,
  `CarryForward` int(11) DEFAULT NULL,
  `FinishedReview` varchar(10) DEFAULT NULL,
  `ReviewAtPairCnt` int(11) DEFAULT NULL,
  `PaymentReceived` decimal(19,2) DEFAULT NULL,
  `PaymentRecDt` varchar(20) DEFAULT NULL,
  `BalAmt` decimal(19,2) DEFAULT NULL,
  `Active` int(11) DEFAULT NULL,
  `FilePath` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Sno`, `MemberID`, `ReferalID`, `Legpos`, `Title`, `FirstName`, `LastName`, `EmailID`, `ContactNo`, `Password`, `Qualification`, `Country`, `State`, `City`, `Address`, `AadharNo`, `PANNo`, `BankName`, `BranchName`, `IFSCcode`, `BankAccNo`, `NomineeName`, `DtofJoining`, `LeftCount`, `WkLC`, `RightCount`, `WkRC`, `ParallelCount`, `WkPC`, `Totpairs`, `PairCommission`, `WkPrCom`, `Bonus`, `TotAmount`, `TdsTax`, `WalletAmt`, `AmttobePaid`, `Cader`, `CarryForward`, `FinishedReview`, `ReviewAtPairCnt`, `PaymentReceived`, `PaymentRecDt`, `BalAmt`, `Active`, `FilePath`) VALUES
(1, 'M237237655', 'SPONSOR', NULL, 'M/s', 'LIPID MARKETING', 'LLP', 'lipidmarketingllp@gmail.com', '+919704820002', '$2y$10$oAa71JqSOWcIGeqYG8c3GeZeiFGBhVfBtXvWcZv0zysCDkwDg6Ug2', 'Degree', 'INDIA', 'Andhra Pradesh', 'VIJAYAWADA', 'VIJAYAWADA', '429655844417', 'AAIFL3253A', 'INDIAN BANK', 'VIJAYAWADA', 'IDIB000V018', '6780863985', 'P PRABHAVATHI', '19-11-2019', 33, 7, 38, 0, 1, 0, 33, '13200.00', '2800.00', '500.00', '13700.00', '548.00', '1315.20', '11836.80', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(2, 'M140799940', 'M237237655', 'Left Leg - LLG', 'M/s', 'RS NATURAL', 'FOODS', 'rsnaturalfoods.ne@gmail.com', '+918096771177', '$2y$10$QnscQrOFdY6gQ.d7XsvCj.3OZmMNBMxSiRIEXNfZ0io9cF2JPugIu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 30, 7, 1, 0, 1, 0, 1, '400.00', '0.00', '0.00', '400.00', '16.00', '38.40', '345.60', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(3, 'M413402329', 'M237237655', 'Right Leg - RLG', 'M/s', 'RS NATURAL', 'FOODS', 'rsnaturalfoods.ne@gmail.com', '+918096771177', '$2y$10$lCkeRAVab.BmtzIVCQ0teOl9tc3bpTFDrUzSNrdFFqWffV2fPR9PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 15, 0, 21, 0, 1, 0, 15, '6000.00', '0.00', '500.00', '6500.00', '260.00', '624.00', '5616.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(4, 'M331335426', 'M140799940', 'Left Leg - LLG', 'M/s', 'RS NATURAL', 'FOODS', 'rsnaturalfoods.ne@gmail.com', '+918096771177', '$2y$10$7QDQXCb7kjlB4thiDsmit.MfR72J9QZwNDAVkabKnY.4a1gnkd7hu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 29, 7, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, ''),
(5, 'M614057392', 'M237237655', 'Parallel Leg - PLG', 'Smt.', 'PRABHAVATHI', 'PADAVALA', 'lipidmarketingllp@gmail.com', '+919704820002', '$2y$10$D.K3FFHltRhNY9in2bHvRuE.mYht1bNdJIuzRlZuCVC3KLHnlDhUO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(6, 'M387940436', 'M331335426', 'Left Leg - LLG', 'Mr.', 'BRAHMAIAH', 'URITI', 'rsnaturalfoods.ne@gmail.com', '+918106937774', '$2y$10$PCz6SPzz04nlMpwZwtvbyugC1FPx5bK9M6edN22BKu6bg1CwnOFQ2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 13, 6, 14, 1, 1, 0, 13, '5200.00', '2400.00', '500.00', '5700.00', '228.00', '547.20', '4924.80', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(7, 'M859539153', 'M387940436', 'Left Leg - LLG', 'Mr.', 'BRAHMAIAH', 'URITI', 'rsnaturalfoods.ne@gmail.com', '+918106937774', '$2y$10$GHDiaEFFJqzmRTElLjp/AeiBRw2EqODYAD4qczvc7cBRU0QDM.CRm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 12, 6, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(8, 'M157703894', 'M387940436', 'Right Leg - RLG', 'Mr.', 'BRAHMAIAH', 'URITI', 'rsnaturalfoods.ne@gmail.com', '+918106937774', '$2y$10$wRtcq2ikw9gxOvGzAcJxaeE9zxnlUNta7adWOs3QqYAgM4x30ZcJK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 13, 1, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(9, 'M815043203', 'M387940436', 'Parallel Leg - PLG', 'Mr.', 'BRAHMAIAH', 'URITI', 'rsnaturalfoods.ne@gmail.com', '+918106937774', '$2y$10$SfB/16k7s.sRDS0eLuj5bOCfmxvDcir1HQ.rQk2a11j9DszUb60Le', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(10, 'M327063294', 'M859539153', 'Left Leg - LLG', 'Mr.', 'RAMUDU', 'VISWANADHAPALLI', 'rsnaturalfoods.ne@gmail.com', '+919550116981', '$2y$10$Y0.0/6pbsqoQ7/afpcp.W.u5LIr5kmY48fPmI8bRWjhdlnDlmWufS', '', NULL, '', '', '', '', '', '', '', '', '', NULL, '19-11-2019', 9, 4, 1, 1, 1, 1, 1, '400.00', '400.00', '0.00', '400.00', '16.00', '38.40', '345.60', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(11, 'M312214383', 'M327063294', 'Left Leg - LLG', 'Smt.', 'RAMADEVI', 'KURRE', 'rsnaturalfoods.ne@gmail.com', '+918686825611', '$2y$10$bW8/h3L8x3FziHd.a01elOn.w88oaouvm/gvL44.fVBHipGmzw6Im', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 6, 2, 2, 2, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(12, 'M454824679', 'M312214383', 'Left Leg - LLG', 'Mr.', 'SRINIVASA REDDY', 'KURRE', 'rsnaturalfoods.ne@gmail.com', '+919848220891', '$2y$10$5s9i7CNz2SA9ZYlKSUR1K.MBQpwXvcvm7PowbxP/fEfL1vMcfXjm2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 5, 2, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(13, 'M462834776', 'M454824679', 'Left Leg - LLG', 'Mr.', 'UMA MAHESWARA RAO', 'VENIGALLA', 'rsnaturalfoods.ne@gmail.com', '+919849824370', '$2y$10$/nsJyI0LXGdSrx9XhM0ttOQIzsm49D7mDWAg0fUy1EXl6s28XYoyW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 3, 1, 1, 1, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(14, 'M267036527', 'M462834776', 'Left Leg - LLG', 'Mr.', 'NAGARJUNA SAGAR', 'VADDINENI', 'rsnaturalfoods.ne@gmail.com', '+918008457513', '$2y$10$jEK5AYPkq.J5Y8cS63jT.uWI3IxEDYDXSHvc9gGkBOf7txB5ZDIBi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 2, 1, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(15, 'M441735459', 'M267036527', 'Left Leg - LLG', 'Mr.', 'VENKATA RAMANA', 'KOLA', 'rsnaturalfoods.ne@gmail.com', '+918106139292', '$2y$10$oO/FdDehSgM7v.sciiirlOTlUuBaqlq/zpOvG/w6Sfe4N07SHYbX.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 1, 1, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(16, 'M599775165', 'M157703894', 'Right Leg - RLG', 'Smt.', 'PRAMEELA DEVI', 'S V', 'rsnaturalfoods.ne@gmail.com', '+917207607729', '$2y$10$jiH03aa/DPTlSzNJ2MAA6OskT3UjYBcoZO4EfS5fGJy6MFXVz5tDe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 1, 1, 11, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(17, 'M449380248', 'M599775165', 'Right Leg - RLG', 'Ms', 'ANITHA', 'MADDALA', 'rsnaturalfoods.ne@gmail.com', '+917036731463', '$2y$10$wu.WX5Gr24vY5kXk.wV3MeZMVXfl6I4x48V7qHNl7.4l2zjGz.YJS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 10, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(18, 'M329042383', 'M449380248', 'Right Leg - RLG', 'Smt.', 'DEEPTHI', 'SYKAM', 'rsnaturalfoods.ne@gmail.com', '+917780165648', '$2y$10$NY37jCMZy9ppj9DKAgko..khR7NGmkejuUFElEpUUizpwquyhT/N.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 9, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(19, 'M988810484', 'M329042383', 'Right Leg - RLG', 'Mr.', 'VENKATESWARA RAO', 'THUMA', 'rsnaturalfoods.ne@gmail.com', '+918919340460', '$2y$10$oOv0eOkp.jBUUgGfsbcVEes0yFNzps7dWDsa6g5rscz9Jc8T2QtFe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 8, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(20, 'M138538944', 'M988810484', 'Right Leg - RLG', 'Mr.', 'NAGENDRA KUMAR', 'BUDATI', 'rsnaturalfoods.ne@gmail.com', '+919912058205', '$2y$10$eukmHQxLi06xFfDkYGJJqOlmJYTlaMjoLV/.mKQrf34cFtQGBKWjK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 7, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(21, 'M987474561', 'M138538944', 'Right Leg - RLG', 'Mr.', 'SURESH KUMAR', 'KONDA', 'rsnaturalfoods.ne@gmail.com', '+919703818222', '$2y$10$CrDEXEkCN17dCLVzNWjq9OueHNG1CKqweTYPJRoSwn/VHT/qserOO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 3, 0, 3, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(22, 'M322022834', 'M987474561', 'Left Leg - LLG', 'Mr.', 'SURESH KUMAR', 'KONDA', 'rsnaturalfoods.ne@gmail.com', '+919703818222', '$2y$10$98je3F.l.Amok9Um41tVeuHFk4w3k0r4p6J02Pa1l.RsIWUSIdgu6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 1, 0, 1, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(23, 'M755273283', 'M987474561', 'Right Leg - RLG', 'Mr.', 'SURESH KUMAR', 'KONDA', 'rsnaturalfoods.ne@gmail.com', '+919703818222', '$2y$10$5Epp0f/I/YFLJ35RdVoIVul1/4s5X3M0x8m.ysJ07q8wd86rUfSke', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 1, 0, 1, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(24, 'M869816357', 'M322022834', 'Left Leg - LLG', 'Mr.', 'SURESH KUMAR', 'KONDA', 'rsnaturalfoods.ne@gmail.com', '+919703818222', '$2y$10$G10oXl3XzodXoe0JEI9FQuJ/0HdUDA8EZqJQGA5GkPZVWJ1F2fGJy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(25, 'M741222777', 'M322022834', 'Right Leg - RLG', 'Mr.', 'SURESH KUMAR', 'KONDA', 'rsnaturalfoods.ne@gmail.com', '+919703818222', '$2y$10$j/D9bckpCzgCnzXUJ8ijDevd8ae/pyMrHLm8zUuGPWWdeFUIYLmee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(26, 'M424959601', 'M755273283', 'Left Leg - LLG', 'Mr.', 'SURESH KUMAR', 'KONDA', 'rsnaturalfoods.ne@gmail.com', '+919703818222', '$2y$10$MO9LVpjG3eO/t0Z4oDF4jOODYY7uoqb2k4Acsx3OkgNivt20qYUmW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(27, 'M535683090', 'M755273283', 'Right Leg - RLG', 'Mr.', 'SURESH KUMAR', 'KONDA', 'rsnaturalfoods.ne@gmail.com', '+919703818222', '$2y$10$EwG3Yvez.scXl1FWXaQeg.3nDAwwoK4DvP/oE0LO68PoDPUDhT1km', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(28, 'M346483244', 'M413402329', 'Left Leg - LLG', 'Mr.', 'KOTESWARA RAO', 'TIRIVEEDULA', 'rsnaturalfoods.ne@gmail.com', '+919885553596', '$2y$10$NDkb2rvPASBp5RbXXaCK5.i3oUjsXxPIpxQYQVZIEXqSDXartZHGC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 9, 0, 4, 0, 1, 0, 4, '1600.00', '0.00', '0.00', '1600.00', '64.00', '153.60', '1382.40', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(29, 'M289918167', 'M140799940', 'Right Leg - RLG', 'Mr.', 'SUNIL', 'PADAVALA', 'sunirahulpadavala@gmail.com', '+918896886886', '$2y$10$6z2uOZf0uP58kExHZff1juPqXgR41iIkAHz6KDt5bja26JX.3Ohx6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(30, 'M945336797', 'M140799940', 'Parallel Leg - PLG', 'Smt.', 'PRABHAVATHI', 'PADAVALA', 'rsnaturalfoods.ne@gmail.com', '+919704820002', '$2y$10$iEjZNK2oSsQ66W2/QW3QQec9cu9t4OK8YNs76rl/gtddLfTPptNU6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(31, 'M521414719', 'M413402329', 'Right Leg - RLG', 'Mr.', 'RAHUL', 'PADAVALA', 'sunirahulpadavala@gmail.com', '+918096776665', '$2y$10$mciLZ4POvDxrnQRIYuLz0.VLS7WHhvX8njHZEE3TJO2a2.DWVVcw6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 9, 0, 10, 0, 1, 0, 9, '3600.00', '0.00', '500.00', '4100.00', '164.00', '393.60', '3542.40', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(32, 'M700849314', 'M413402329', 'Parallel Leg - PLG', 'Smt.', 'PRABHAVATHI', 'PADAVALA', 'sunirahulpadavala@gmail.com', '+918096776665', '$2y$10$Ws74IVNhBLVpXjCrL38fk.PXxJ4qDgqv1OuNuo3I7ig1UmKW4afP.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(33, 'M371919630', 'M346483244', 'Left Leg - LLG', 'Smt.', 'LAVANYA', 'TEKI', 'lavanyateki0110@gmail.com', '+918247503426', '$2y$10$rn.gluAUyN7fq1NT.aNjdeicUh5zQryn/NlVQzuRQ90xqjpWluH7W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19-11-2019', 4, 0, 3, 0, 1, 0, 3, '1200.00', '0.00', '0.00', '1200.00', '48.00', '115.20', '1036.80', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(34, 'M373371450', 'M371919630', 'Left Leg - LLG', 'Mr.', 'VENKATA SRINU', 'KADEM', 'rsnaturalfoods.ne@gmail.com', '+919966216189', '$2y$10$y9lrdZ9WUTpEfvItKvQlPurvM/rXDUqNMmm0LCv7LbLTRfD4cL75O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 2, 0, 1, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(35, 'M565539317', 'M371919630', 'Right Leg - RLG', 'Smt.', 'DURGA', 'GOLLA', 'rsnaturalfoods.ne@gmail.com', '+918247503426', '$2y$10$ymZrXbVkPQs1MnB3yFusieKWqKnk21jRLuqRTFFYZFiqBHgV0XrZW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 1, 0, 1, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(36, 'M513612096', 'M373371450', 'Left Leg - LLG', 'Mr.', 'NAVEEN MUTTHU KRISHNA', 'PUNNAPU', 'rsnaturalfoods.ne@gmail.com', '+917569891560', '$2y$10$orWaCBzpsrVzgxkc7e3Wp.i272RqWPFlQaOzaGE5IAgHrGkZyRPjW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 1, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(37, 'M911916279', 'M373371450', 'Right Leg - RLG', 'Smt.', 'SRI SANTHI', 'MEDIDI', 'rsnaturalfoods.ne@gmail.com', '+916281699183', '$2y$10$AgdNBJJq.E9ZPUIPekHUO.wu4OrC2tbHeHbOkUqbx0/PesV/77CHu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(38, 'M844348808', 'M513612096', 'Left Leg - LLG', 'Mr.', 'SRINIVASA RAO', 'ANDE', 'rsnaturalfoods.ne@gmail.com', '+919396842664', '$2y$10$4.d8/fdsnCvc7mXBhP4aP.eoU.Z7pez2Jk6v8Y.aq23Y8CLtauVHi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(39, 'M693197273', 'M565539317', 'Left Leg - LLG', 'Mr.', 'NARENDRA', 'GOLLA', 'rsnaturalfoods.ne@gmail.com', '+919948662693', '$2y$10$f/Q7IGo8TCvf8wWRGwNPeu01ZUB66g8uk7IOqbgWWtcpIIhdt6SWW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(40, 'M115816189', 'M565539317', 'Right Leg - RLG', 'Ms', 'MADHURI', 'PUNNAPU', 'rsnaturalfoods.ne@gmail.com', '+916281674903', '$2y$10$jZby.okTXrFHiMnFemZ.BeoQKhoWsxlLi2H3/JhTQRMdPH7jAg9wO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(41, 'M380794529', 'M371919630', 'Parallel Leg - PLG', 'Smt.', 'PRABHAVATHI', 'PADAVALA', 'sunirahulpadavala@gmail.com', '+918096776665', '$2y$10$78GNjaJXhWep4.vkz.SQ8uuO/MYgykNNlCkMTdG1P/hX1XI484ndi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, '1W', 0, '0.00', NULL, '0.00', 1, NULL),
(42, 'M422812415', 'M346483244', 'Right Leg - RLG', 'Mr.', 'BOSU BABU', 'PATTETI', 'rsnaturalfoods.ne@gmail.com', '+919848210668', '$2y$10$YzKt0pnauuPNKDuF4xrACOqVmLfH3JQhuj9eF/TE1mBqFyMjaeiX6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 2, 0, 1, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(43, 'M991850475', 'M422812415', 'Left Leg - LLG', 'Mr.', 'SRINIVASA RAO', 'BATTU', 'rsnaturalfoods.ne@gmail.com', '+919848032670', '$2y$10$khu0xnebnM3XEFblYb1fjehNgz/mHi.rUtIrclqIgiVmKeLn2yfMy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 1, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(44, 'M149662899', 'M422812415', 'Right Leg - RLG', 'Mr.', 'BAJIKHAN', 'PATAN', 'rsnaturalfoods.ne@gmail.com', '+919441061646', '$2y$10$uRRe9Fg/rnS8QagbjYHr1eIcGnpOgki4UweWNuzk1FMPVkM.C5Arq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(45, 'M302077310', 'M991850475', 'Left Leg - LLG', 'Smt.', 'GOVINDAMMA', 'RAVIRALA', 'rsnaturalfoods.ne@gmail.com', '+918125166389', '$2y$10$HlSqKJc6Cosca6RLbjL8c.Htiz/7zn/wUYo.a0RScXFzXPQ0ZHBq2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(46, 'M237606127', 'M521414719', 'Left Leg - LLG', 'Mr.', 'RAVINDRA', 'BOJJA', 'rsnaturalfoods.ne@gmail.com', '+919393576104', '$2y$10$J2Z2HFoyGXERLBycyhPKyuWXtqxsEaMXHG6EUvM/jE9cbxkQCx5TC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 8, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(47, 'M132109191', 'M521414719', 'Right Leg - RLG', 'Mr.', 'SURESH', 'NEELA', 'rsnaturalfoods.ne@gmail.com', '+919392878797', '$2y$10$FxPBYWQoOncb8g29N8VBOOBlbxAl/M8oASAWH6rD7IMKXRNMqYcK.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 9, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(48, 'M427381866', 'M346483244', 'Parallel Leg - PLG', 'Mr.', 'SUNIL', 'PADAVALA', 'sunirahulpadavala@gmail.com', '+918896886886', '$2y$10$1m9xRLADxvUxmlkSCUjRIunV1ddvZXd62MXAbO/yHodrGBrt.n5ia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(49, 'M258199851', 'M237606127', 'Left Leg - LLG', 'Mr.', 'NAGA UDAY BABU', 'GONEPALLI', 'rsnaturalfoods.ne@gmail.com', '+919100414560', '$2y$10$1Z3Uh5UMw3y20y8NhStWcOx6W6fCc2qFXBK4wus4JnC2i45469ZVq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 2, 0, 5, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(50, 'M188768125', 'M258199851', 'Left Leg - LLG', 'Mr.', 'ANJI BABU', 'GONEPALLI', 'rsnaturalfoods.ne@gmail.com', '+919347865483', '$2y$10$raMMSYIY7fj/OojTe3gVX.EoDYY15kmvBLpBZOPVRGkOweLSpELxu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 1, NULL, 0, NULL, 0, NULL, 0, '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(51, 'M439186064', 'M188768125', 'Left Leg - LLG', 'Mr.', 'NISSANKARA RAO', 'SWARAMA KRISHNA', 'rsnaturalfoods.ne@gmail.com', '+919397983959', '$2y$10$Y41VqfzVCOg9Aa3cQ8m5KOI1wfjA20NmUkKhAu2nvcGzmjtZmHpO2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(52, 'M613882654', 'M258199851', 'Right Leg - RLG', 'Mr.', 'RAMESH', 'PULUGUJJU', 'rsnaturalfoods.ne@gmail.com', '+919440485189', '$2y$10$yvLs/Bx0X3kMrSGqY0HO5O/FOp8no0aDKnoCEzwPY.9AtaBtNdxWK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 4, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(53, 'M836162533', 'M613882654', 'Left Leg - LLG', 'Mr.', 'ASHOK', 'KURMA', 'rsnaturalfoods.ne@gmail.com', '+919966278877', '$2y$10$AFWhVxG3dXocLfQIgwFk5OolXGo43Tn6RYeZoU8TYsNJXmAoKQufe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 1, 0, 1, 0, 1, 0, 1, '400.00', '0.00', '0.00', '400.00', '16.00', '38.40', '345.60', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(54, 'M951286776', 'M836162533', 'Left Leg - LLG', 'Mr.', 'ASHOK', 'KURMA', 'rsnaturalfoods.ne@gmail.com', '+919966278877', '$2y$10$ORCND2Nf4WEFkkHOqO6G/uhgYWVqitx2fxNSaCYpvSgh7B9T/MVPa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(55, 'M526805660', 'M836162533', 'Right Leg - RLG', 'Mr.', 'ASHOK', 'KURMA', 'rsnaturalfoods.ne@gmail.com', '+919966278877', '$2y$10$.tQnAHpFIQ14ymh9/EYmOuf7q3FNymAEiqzaUhiN0VLxdxYPRRH2C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(56, 'M453131552', 'M836162533', 'Parallel Leg - PLG', 'Mr.', 'SAMPATH', 'DASARI', 'rsnaturalfoods.ne@gmail.com', '+919966278877', '$2y$10$Qlp2/Vs/vPsnd7Q2ej8d0OM8IzQschpswnWy2XL8um3wer0XvQ2b6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(57, 'M447230604', 'M521414719', 'Parallel Leg - PLG', 'Mr.', 'RAMESH BABU', 'KOTHAPALLI', 'rsnaturalfoods.ne@gmail.com', '+919885323568', '$2y$10$GFZPyvt..Jz2W1kE4rzu0O7lA5E58lPPn4NUysFZhdGqnDuwzXt.C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 0, NULL, 0, NULL, 0, NULL, 0, '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(58, 'M193487634', 'M132109191', 'Left Leg - LLG', 'Mr.', 'RAVI CHANDRA', 'BOMMADEVARA', 'rsnaturalfoods.ne@gmail.com', '+919966007894', '$2y$10$K9bGzLT8B9xTsSwswovt3OBQYRzHZcuAd5aJDueMC.CnnJsbK9V4G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 5, 0, 3, 0, 3, 0, 5, '2000.00', '0.00', '0.00', '1200.00', '48.00', '115.20', '1036.80', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(59, 'M799458190', 'M193487634', 'Left Leg - LLG', 'Mr.', 'MOHANA KRISHNA', 'BODDOJU', 'rsnaturalfoods.ne@gmail.com', '+917013178347', '$2y$10$k6qV0Lto1wuX.AZAoKeDweQBQJgZN111/NqHN4wc7ZaXSe3zE6YIW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 3, 0, 1, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(60, 'M921264945', 'M193487634', 'Right Leg - RLG', 'Mr.', 'RAVI CHANDRA', 'BOMMADEVARA', 'rsnaturalfoods.ne@gmail.com', '+919966007894', '$2y$10$wIRGqISX8Ncfmckfm6on7upPBGW5Tyn2/0rnVRqfbBEffP79ylH1a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 1, NULL, 1, NULL, 0, NULL, 0, '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(61, 'M494194437', 'M799458190', 'Left Leg - LLG', 'Mr.', 'RAJU', 'KALAPALA', 'rsnaturalfoods.ne@gmail.com', '+919000397616', '$2y$10$.6xduXfoP.65NKpTrBNkv.0UkXv4OFt8PdtDuvEuZDf5.C5IER7Ky', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 2, NULL, 0, NULL, 0, NULL, 0, '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(62, 'M502659617', 'M494194437', 'Left Leg - LLG', 'Mr.', 'RAVI CHANDRA', 'BOMMADEVARA', 'rsnaturalfoods.ne@gmail.com', '+919966007894', '$2y$10$iJqG/uKm/y.QkgF0cf2tQe1ee7UnMOSewT/nlpppJfcOMBVtHkTBG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 1, NULL, 0, NULL, 0, NULL, 0, '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(63, 'M519490767', 'M502659617', 'Left Leg - LLG', 'Mr.', 'BALA BABU', 'BOMMADEVARA', 'rsnaturalfoods.ne@gmail.com', '+919885968159', '$2y$10$Z5Bl6qmnKIIkLDPVKUDlyOVTVUni5HN.ank3hg/47ch3yW9e5U6fO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 0, NULL, 0, NULL, 0, NULL, 0, '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(64, 'M320347637', 'M921264945', 'Left Leg - LLG', 'Mr.', 'SATHYENDRANATH', 'MUNAGANTI', 'rsnaturalfoods.ne@gmail.com', '+919912487466', '$2y$10$1TYoNMz34wBSwXcJULPKL.k.KFW1rKZhTcl8WFTEnu5mw5.hy0puu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(65, 'M141022182', 'M921264945', 'Right Leg - RLG', 'Mr.', 'SRINIVASA RAO', 'KONDAPATURI', 'rsnaturalfoods.ne@gmail.com', '+918465072217', '$2y$10$UwelntAsQtG4dH4WnKaDweXRXVsj4pyoCp6Kl.ks0yy7bSXrYV.u.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(66, 'M173678092', 'M193487634', 'Parallel Leg - PLG', 'Smt.', 'KAMALA', 'TIRUVEEDULA', 'rsnaturalfoods.ne@gmail.com', '+918096776665', '$2y$10$P8DhnIHRDBbn.Md8EattzugKo1MHFmFVfBYl76Eb.VbD54mQH9vva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21-11-2019', 1, 0, 1, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(67, 'M851126166', 'M327063294', 'Right Leg - RLG', 'Mr.', 'LAKSHMANUDU', 'VISWANADAPALLI', 'rsnaturalfoods.ne@gmail.com', '+917661997670', '$2y$10$HQp8ZtA.x6VeG0YkSBeExOZa8ioysZA.S0Zz7H6QsmTpKY4SE0zOO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '27-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(68, 'M659694673', 'M312214383', 'Right Leg - RLG', 'Mr.', 'SRINIVASA REDDY', 'KURRE', 'rsnaturalfoods.ne@gmail.com', '+919848220891', '$2y$10$t1x/0MlWCk5g.KHYyybZfu2vHOamfg6r7bmx37.3Bxy/78qXPU9l.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '27-11-2019', 0, NULL, 1, NULL, 0, NULL, 0, '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(69, 'M560832020', 'M659694673', 'Right Leg - RLG', 'Smt.', 'RAMADEVI', 'KURRE', 'rsnaturalfoods.ne@gmail.com', '+918686825611', '$2y$10$1dUA5OBMgvwIFXMYJVm.CuPNHDmJdBa7kU8LGkSi0bpJDxQ.41kJC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '27-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(70, 'M791033554', 'M462834776', 'Right Leg - RLG', 'Mr.', 'SREEDHAR RAO', 'GANTA', 'rsnaturalfoods.ne@gmail.com', '+919381491416', '$2y$10$ryXS5MNkroLGjA8l3l1RsOn3X.Q/tK9/UtzQDmR3czxaMYfp5TkX.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '27-11-2019', 0, NULL, 0, NULL, 0, NULL, 0, '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(71, 'M493491920', 'M441735459', 'Left Leg - LLG', 'Mr.', 'MALYADRI', 'GONUGUNTA', 'rsnaturalfoods.ne@gmail.com', '+918142015169', '$2y$10$Eq/UPkJa890mOccE6JcgmO/9xtYjbZNNKb5N1wKJnEQxiVVM1pADq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '27-11-2019', 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(72, 'M551700859', 'M327063294', 'Parallel Leg - PLG', 'Smt.', 'RAMADEVI', 'KURRE', 'rsnaturalfoods.ne@gmail.com', '+918686825611', '$2y$10$D6gTpIqpC3PqlCGAIle/beHhVBm7hIG1zs5sP76KwrhCR12gsfZDy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '27-11-2019', 0, NULL, 0, NULL, 0, NULL, 0, '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL),
(73, 'M290819833', 'M599775165', 'Left Leg - LLG', 'Smt.', 'SOUJANYA', 'DOBBALA', 'rsnaturalfoods.ne@gmail.com', '+919704098844', '$2y$10$CnsRAd.GKl/JFvjSQQki0u0iCyjYiwynxkQcZZKw0FcOmlh39ZDem', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '27-11-2019', 0, NULL, 0, NULL, 0, NULL, 0, '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', 'Member', 0, NULL, 0, '0.00', NULL, '0.00', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binitems`
--
ALTER TABLE `binitems`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `gst`
--
ALTER TABLE `gst`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binitems`
--
ALTER TABLE `binitems`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gst`
--
ALTER TABLE `gst`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
