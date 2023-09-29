-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2023 at 05:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LaptopRent`
--

-- --------------------------------------------------------

--
-- Table structure for table `LaptopDetails`
--

CREATE TABLE `LaptopDetails` (
  `Laptop_Code` int(11) NOT NULL,
  `Laptop_name` char(255) DEFAULT NULL,
  `Processor` char(255) DEFAULT NULL,
  `Ram` char(255) DEFAULT NULL,
  `Storage` char(255) DEFAULT NULL,
  `Operating_System` char(255) DEFAULT NULL,
  `Rental_Price_Per_Day` int(11) DEFAULT NULL,
  `Charge_For_An_ExtraDay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `LaptopDetails`
--

INSERT INTO `LaptopDetails` (`Laptop_Code`, `Laptop_name`, `Processor`, `Ram`, `Storage`, `Operating_System`, `Rental_Price_Per_Day`, `Charge_For_An_ExtraDay`) VALUES
(1, 'HP ProBook', 'Intel Core i5-1235U', '8GB DDR4', '512GB SATA Hard Drive', 'Windows 10', 3000, 500),
(2, 'HP EliteBook', 'Intel Core i5-1235U', '8GB DDR4', '512GB SATA Hard Drive', 'Windows 11', 3000, 700),
(3, 'ASUS VivoBook', 'Ryzen 5 5500U', '8GB DDR4', '512GB SATA Hard Drive', 'Windows 10', 3500, 800),
(4, 'ASUS ExpertBook', 'Intel Core i5-1235U', '8GB DDR4', '512GB SATA Hard Drive', 'Windows 10', 3750, 850),
(5, 'DELL Vostro', 'Intel Core i5-1135G7', '8GB DDR4', '256GB SATA Hard Drive', 'Windows 10', 2250, 500),
(6, 'Dell Inspiron', 'Intel Core i5-1135G7', '8GB DDR4', '512GB SATA Hard Drive', 'Windows 11', 3500, 800),
(7, 'MSI Modern', 'Intel Core i5-1235U', '8GB DDR4', '512GB SATA Hard Drive', 'Windows 11', 4000, 1000),
(8, 'MSI Thin', 'Alder Lake i5-12450H', '16GB DDR4', '512GB SATA Hard Drive', 'Windows 11', 4500, 1300),
(9, 'Lenovo Ideapad', 'Intel Celeron N4020', '4GB DDR4', '256GB SATA Hard Drive', 'Windows 11', 1700, 400),
(10, 'Lenovo Ideapad', 'AMD Ryzen 3-7320U', '8GB DDR5', '512GB SATA Hard Drive', 'Windows 11', 1800, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `LaptopDetails`
--
ALTER TABLE `LaptopDetails`
  ADD PRIMARY KEY (`Laptop_Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `LaptopDetails`
--
ALTER TABLE `LaptopDetails`
  MODIFY `Laptop_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
