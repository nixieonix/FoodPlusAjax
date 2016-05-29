-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2016 at 09:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodplusajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `production_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `ean_code` varchar(100) NOT NULL,
  `weight` int(100) NOT NULL,
  `weight_unit` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `production_date`, `expiry_date`, `price`, `currency`, `ean_code`, `weight`, `weight_unit`) VALUES
(1, 'Milk', 'Cow milk', '2016-05-01', '2016-06-01', '0.95', 'EUR', '1513515616418', 100, 'ml'),
(3, 'Chocolate', 'Milk chocolate', '2015-01-01', '2017-01-01', '1.75', 'EUR', '511892418185', 100, 'g'),
(5, 'Milk', 'Goat milk', '2016-05-01', '2016-06-01', '1.84', 'EUR', '1513515616417', 100, 'ml'),
(23, 'Komedije', 'ghfgjjmh', '2015-11-11', '2020-10-11', '15.00', 'EUR', '0560651513206', 500, 'g'),
(24, 'Komedije', 'dsfvkdsomv', '2015-11-11', '2020-11-11', '15.00', 'EUR', '0560651513206', 500, 'g');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
