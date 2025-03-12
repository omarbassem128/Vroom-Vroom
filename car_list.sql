-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 12:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `carName` varchar(100) NOT NULL,
  `pickupDate` date NOT NULL,
  `price` int(100) NOT NULL,
  `carImage` varchar(100) NOT NULL,
  `seats` int(100) NOT NULL,
  `drivingmode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`carName`, `pickupDate`, `price`, `carImage`, `seats`, `drivingmode`) VALUES
('Mercedes', '2024-05-25', 1000, 'car2.png', 6, 'Automatic');

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `userEmail` varchar(100) NOT NULL,
  `pickupDate` date NOT NULL,
  `carName` varchar(100) NOT NULL,
  `carImage` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `seats` int(100) NOT NULL,
  `drivingmode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`userEmail`, `pickupDate`, `carName`, `carImage`, `price`, `seats`, `drivingmode`) VALUES
('hommaaad@gmail.com', '2024-05-24', 'ArABYYAA', 'car1.png', 1000, 6, 'AUUUUTOOO'),
('yassin2@gmail.com', '2024-05-24', 'ArABYYAA', 'car1.png', 1000, 6, 'AUUUUTOOO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `profilePic` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phonenum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `pass`, `profilePic`, `firstname`, `lastname`, `phonenum`) VALUES
('hommaaad@gmail.com', '1234', 'hamada.jpeg', 'homaad', 'hommaaaad', '192873'),
('loalo@gmail.com', '1234', 'mark.jpeg', 'lalal', 'loloaoao', '91273'),
('mahe@gmail.com', '123456', 'default-car.png', 'maha', 'talaat', '01245678825'),
('oaijdoi@gmail.com', '123', 'default-car.png', 'oaskj', 'osdijfo', '1283791'),
('yassin2@gmail.com', '1234', 'hamada.jpeg', 'yassin', 'tarek', '8721612'),
('yassin@gmail.com', '1234', 'hamada.jpeg', 'yassin', 'tarek', '98327');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`carName`,`pickupDate`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`userEmail`,`pickupDate`,`carName`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
