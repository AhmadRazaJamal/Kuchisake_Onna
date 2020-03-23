-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2019 at 07:21 AM
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
-- Database: `answersDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer` varchar(200) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer`, `id`) VALUES
('The dark, empty, and lifeless streets', 1),
('Figure approaching, closely ever, hidden behind a mask', 2),
('67 111 108 100 44 32 108 105 102 101 108 101 115 115 44 32 115 104 101 32 97 112 112 114 111 97 99 104 101 115', 3),
('Am I pretty? She asks frailly', 4),
('Unveils and asks once more', 5);

-- --------------------------------------------------------

--
-- Table structure for table `puzzle1`
--

CREATE TABLE `puzzle1` (
  `user` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puzzle1`
--

INSERT INTO `puzzle1` (`user`, `id`) VALUES
('savant', 2),
('owais', 3),
('owais', 4),
('YahYeet', 5),
('paul', 6),
('Paul', 7),
('owais', 8);

-- --------------------------------------------------------

--
-- Table structure for table `puzzle2`
--

CREATE TABLE `puzzle2` (
  `user` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puzzle2`
--

INSERT INTO `puzzle2` (`user`, `id`) VALUES
('savant', 2),
('owais', 3),
('owais', 4),
('YahYeet', 5),
('paul', 6),
('Paul', 7),
('owais', 8);

-- --------------------------------------------------------

--
-- Table structure for table `puzzle3`
--

CREATE TABLE `puzzle3` (
  `user` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puzzle3`
--

INSERT INTO `puzzle3` (`user`, `id`) VALUES
('savant', 1),
('YahYeet', 2),
('', 3),
('paul', 4),
('Paul', 5),
('owais', 6);

-- --------------------------------------------------------

--
-- Table structure for table `puzzle4`
--

CREATE TABLE `puzzle4` (
  `user` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puzzle4`
--

INSERT INTO `puzzle4` (`user`, `id`) VALUES
('savant', 1),
('YahYeet', 2),
('paul', 3),
('Paul', 4),
('owais', 5);

-- --------------------------------------------------------

--
-- Table structure for table `puzzle5`
--

CREATE TABLE `puzzle5` (
  `user` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puzzle5`
--

INSERT INTO `puzzle5` (`user`, `id`) VALUES
('savant', 1),
('YahYeet', 2),
('paul', 3),
('Paul', 4),
('owais', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puzzle1`
--
ALTER TABLE `puzzle1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puzzle2`
--
ALTER TABLE `puzzle2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puzzle3`
--
ALTER TABLE `puzzle3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puzzle4`
--
ALTER TABLE `puzzle4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puzzle5`
--
ALTER TABLE `puzzle5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `puzzle1`
--
ALTER TABLE `puzzle1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `puzzle2`
--
ALTER TABLE `puzzle2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `puzzle3`
--
ALTER TABLE `puzzle3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `puzzle4`
--
ALTER TABLE `puzzle4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `puzzle5`
--
ALTER TABLE `puzzle5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
