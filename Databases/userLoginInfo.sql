-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2019 at 07:22 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userLoginInfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `testUsers`
--

CREATE TABLE `testUsers` (
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(45) NOT NULL,
  `securityCode` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testUsers`
--

INSERT INTO `testUsers` (`username`, `email`, `password`, `securityCode`) VALUES
('Bugs', 'b@gmail.com', '*D37C49F9CBEFBF8B6F4B165AC703AA271E079004', '*142A2B6581F99287D8B106001A5D3C878663FD10'),
('Bugs', 'b@gmail.com', '*D37C49F9CBEFBF8B6F4B165AC703AA271E079004', '*142A2B6581F99287D8B106001A5D3C878663FD10'),
('Ahmad', 'ahmad.raza@me.com', '*6D2084EE3AD4D65CB66D2D3F8E53EF1409E37DF2', '*142A2B6581F99287D8B106001A5D3C878663FD10'),
('Paul', 'paulthz4@gmail.com', '*CC768D6F6EF4F8BD86A161CB806E7F79DB022F5C', '*0BC461E0D249CD928535DC82A5E8158E6B2F789F'),
('Aurnag', 'a@gmail.com', '*D37C49F9CBEFBF8B6F4B165AC703AA271E079004', '*5EFBD953DB7586EBEAB6B8D511C06E626B995352'),
('owais', 'o@gmail.com', '*D37C49F9CBEFBF8B6F4B165AC703AA271E079004', '*142A2B6581F99287D8B106001A5D3C878663FD10'),
('Prof', 'prof@gmail.com', '*D37C49F9CBEFBF8B6F4B165AC703AA271E079004', '*CE0EBFBAEC13009C6DC68FAF2BB64F2C100EDC45'),
('haha', 'ha@gmail.com', '*D37C49F9CBEFBF8B6F4B165AC703AA271E079004', '*142A2B6581F99287D8B106001A5D3C878663FD10'),
('dd', 'ddd@gmail.cim', '*2F3B76898A59E6BB293D056656D934848B96A444', '*D37C49F9CBEFBF8B6F4B165AC703AA271E079004'),
('gigi', 'gigihadid@gmail.com', '*D37C49F9CBEFBF8B6F4B165AC703AA271E079004', '*49E195077F52DA4B48AE7352D5EE30D1B0CD99E5'),
('hehe', 'hehe@gmail.com', '*D37C49F9CBEFBF8B6F4B165AC703AA271E079004', '*142A2B6581F99287D8B106001A5D3C878663FD10'),
('savant', 'kshitijsuri99@gmail.com', '*5E90580B0C30F4DBBC8C7409813E7897F24F70AE', '*ED2FFE9A26BEB61F477B43B07BE9425708AD7227'),
('YahYeet', 'ilikeboys@gmail.com', '*1186EE5EFB03BB1F6B03EC94BA8673B3B4595854', '*ADF42875A8A4963291A38C3FA3183655C824A1BB'),
('paul', 'paulthz4@gmail.com', '*CC768D6F6EF4F8BD86A161CB806E7F79DB022F5C', '*61584B76F6ECE8FB9A328E7CF198094B2FAC55C7'),
('Paul', 'paulrhz4@gmaiol.com', '*CC768D6F6EF4F8BD86A161CB806E7F79DB022F5C', '*61584B76F6ECE8FB9A328E7CF198094B2FAC55C7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
