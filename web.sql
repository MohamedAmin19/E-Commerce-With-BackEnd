-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 03:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `Name`, `Email`, `Password`, `Age`, `Image`) VALUES
(0, 'Mohamed', 'mohamed@admin.com', '123456', 21, '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Name` varchar(255) NOT NULL,
  `Complain` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Reply` varchar(255) NOT NULL,
  `ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Name`, `Complain`, `Email`, `Picture`, `Reply`, `ID`) VALUES
('adham', 'Please help bro im very retarded and kinda brain dead what can I do bro :(((((((((((((', 'adham@gmail.com', '', 'ok bro gg', 1),
('adham', 'safdfasfsasfafsasfafsaasf', 'adham@gmail.com', '', '', 2),
('adham', 'wqrwrqrwqrwqasf', 'adham@gmail.com', '', '', 3),
('adham', 'please help im yasmina', 'adham@gmail.com', '', 'fuck u', 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Age` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `Email`, `Password`, `Age`, `Image`) VALUES
('adham', 'adham@gmail.com', '12345678', 15, 'adham.jpg'),
('hany', 'hany@gmail.com', '1231231132312', 12, 'hany.jpg'),
('mistafa', 'hazem222222@gmail.com', '241214214', 15, ''),
('mistafa2222', 'hazemafsfasafs@gmail.com', 'Kosomak12@', 15, ''),
('mistafa', 'mistafa@gmail.com', 'hazem123@1A', 15, ''),
('mistafa', 'mustafa@gmail.com', '21424121421421شششسبشبشسبشس@', 12, ''),
('sherbo', 'sherbo@gmail.com', '12345678', 19, 'sherbo.jpg'),
('Mohamed', 'mohamed@gmail.com', '123456', 21, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Description`, `Price`, `Image`) VALUES
(1, 'hazem', 'sasa', 555, 'corona_bk.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
