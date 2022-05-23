-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 02:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qaprojects`
--

-- --------------------------------------------------------

--
-- Table structure for table `qaprojects`
--

CREATE TABLE `qaprojects` (
  `id` int(11) NOT NULL,
  `crfid` varchar(255) COLLATE utf8_bin NOT NULL,
  `fsid` varchar(255) COLLATE utf8_bin NOT NULL,
  `jiraid` varchar(255) COLLATE utf8_bin NOT NULL,
  `customername` varchar(255) COLLATE utf8_bin NOT NULL,
  `scopeofproject` varchar(255) COLLATE utf8_bin NOT NULL,
  `testscenariostatus` varchar(255) COLLATE utf8_bin NOT NULL,
  `system` varchar(255) COLLATE utf8_bin NOT NULL,
  `regulatory` varchar(255) COLLATE utf8_bin NOT NULL,
  `numberportal` varchar(255) COLLATE utf8_bin NOT NULL,
  `serversoftware` varchar(255) COLLATE utf8_bin NOT NULL,
  `nonnavstarsoftware` varchar(255) COLLATE utf8_bin NOT NULL,
  `visionversion` varchar(255) COLLATE utf8_bin NOT NULL,
  `dbscriptversion` varchar(255) COLLATE utf8_bin NOT NULL,
  `dtechii` varchar(255) COLLATE utf8_bin NOT NULL,
  `navstarsoftware` varchar(255) COLLATE utf8_bin NOT NULL,
  `firmware` varchar(255) COLLATE utf8_bin NOT NULL,
  `plcandhmiversion` varchar(255) COLLATE utf8_bin NOT NULL,
  `printerinunitstation` varchar(255) COLLATE utf8_bin NOT NULL,
  `camerainunitstation` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpuconfigurationinunitstation` varchar(255) COLLATE utf8_bin NOT NULL,
  `camerainnavstarstation` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpuconfigurationinnavstarstation` varchar(255) COLLATE utf8_bin NOT NULL,
  `printerinintermediatestation` varchar(255) COLLATE utf8_bin NOT NULL,
  `camerainintermediatestation` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpuconfigurationinintermediatestation` varchar(255) COLLATE utf8_bin NOT NULL,
  `printerinlastintermediatestation` varchar(255) COLLATE utf8_bin NOT NULL,
  `camerainlastintermediatestation` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpuconfigurationinlastintermediatestation` varchar(255) COLLATE utf8_bin NOT NULL,
  `printerinpalletstation` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpuinpalletstation` varchar(255) COLLATE utf8_bin NOT NULL,
  `scanner` varchar(255) COLLATE utf8_bin NOT NULL,
  `projectstatus` varchar(255) COLLATE utf8_bin NOT NULL,
  `softwarepath` varchar(255) COLLATE utf8_bin NOT NULL,
  `testdatapath` varchar(255) COLLATE utf8_bin NOT NULL,
  `attachmentsofrn` blob NOT NULL,
  `remark` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `qaprojects`
--

INSERT INTO `qaprojects` (`id`, `crfid`, `fsid`, `jiraid`, `customername`, `scopeofproject`, `testscenariostatus`, `system`, `regulatory`, `numberportal`, `serversoftware`, `nonnavstarsoftware`, `visionversion`, `dbscriptversion`, `dtechii`, `navstarsoftware`, `firmware`, `plcandhmiversion`, `printerinunitstation`, `camerainunitstation`, `cpuconfigurationinunitstation`, `camerainnavstarstation`, `cpuconfigurationinnavstarstation`, `printerinintermediatestation`, `camerainintermediatestation`, `cpuconfigurationinintermediatestation`, `printerinlastintermediatestation`, `camerainlastintermediatestation`, `cpuconfigurationinlastintermediatestation`, `printerinpalletstation`, `cpuinpalletstation`, `scanner`, `projectstatus`, `softwarepath`, `testdatapath`, `attachmentsofrn`, `remark`) VALUES
(4, 'ss', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on hold', '', '', '', ''),
(5, 'dww', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Testing in progress', '', '', '', ''),
(6, 'dww', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Testing in progress', '', '', '', ''),
(7, 'dww', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Testing in progress', '', '', '', ''),
(8, 'dww', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Testing in progress', '', '', '', ''),
(9, 'dww', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Testing in progress', '', '', '', ''),
(10, 'dww', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Testing in progress', '', '', '', ''),
(11, 'dww', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Testing in progress', '', '', '', ''),
(12, 'dd', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(13, 'dd', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(14, 'ss', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(15, 'ss', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(16, 'dd', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(17, 'dd', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(18, 'ss', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(19, 'ss', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(20, 'ss', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(21, 'ss', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(22, 'uh', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(23, 'uh', ' ', '', '', '', '', '', 'Choose...', 'Choose...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Choose...', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qaprojects`
--
ALTER TABLE `qaprojects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qaprojects`
--
ALTER TABLE `qaprojects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
