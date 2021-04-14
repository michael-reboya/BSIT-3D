-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 06:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample_authenticator`
--

-- --------------------------------------------------------

--
-- Table structure for table `authenticator_code`
--

CREATE TABLE `authenticator_code` (
  `A_ID` int(11) NOT NULL,
  `A_CODE` int(11) NOT NULL,
  `Created_At` text NOT NULL,
  `Expiration` text NOT NULL,
  `U_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authenticator_code`
--

INSERT INTO `authenticator_code` (`A_ID`, `A_CODE`, `Created_At`, `Expiration`, `U_ID`) VALUES
(1, 123456, 'aweawe123123', '123123213', 1),
(3, 299782, 'aweawe', 'aweawe', 23),
(4, 992269, 'aweawe', 'aweawe', 23),
(5, 483724, 'aweawe', 'aweawe', 1),
(6, 203554, 'aweawe', 'aweawe', 1),
(7, 255413, 'aweawe', 'aweawe', 1),
(8, 229478, 'aweawe', 'aweawe', 1),
(9, 604791, 'aweawe', 'aweawe', 1),
(10, 218393, 'aweawe', 'aweawe', 23);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_ID` int(11) NOT NULL,
  `U_USERNAME` varchar(255) NOT NULL,
  `U_PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_ID`, `U_USERNAME`, `U_PASSWORD`) VALUES
(1, 'admin', 'admin'),
(23, 'GAGO', 'GAGO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authenticator_code`
--
ALTER TABLE `authenticator_code`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authenticator_code`
--
ALTER TABLE `authenticator_code`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
