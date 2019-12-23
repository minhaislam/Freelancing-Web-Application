-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 02:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE `send` (
  `id` int(5) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send`
--

INSERT INTO `send` (`id`, `sender`, `receiver`, `message`) VALUES
(1, 'minhaj', 'habib', 'dfskdjfkskfk'),
(2, 'minhaj', 'Habib1', 'Hello'),
(3, 'minhaj', 'Habib1', 'How are you'),
(9, 'minhaj', 'Habib1', 'Warning'),
(10, 'minhaj', 'Habib1', 'Wassup'),
(11, 'minhaj', 'Habib1', 'Mr. Buyer'),
(13, 'minhaj', 'Habib1', 'Thanks for using our site'),
(14, 'minhaj', 'Habib1', 'Regular user'),
(15, 'minhaj', 'Habib1', 'Mr. Habib'),
(16, 'minhaj', 'min22', 'Mr. min22'),
(17, 'minhaj', 'Habib1', 'Thanks for joining us'),
(18, 'minhaj', 'min22', 'Thanks for joining us'),
(19, 'minhaj', 'min22', 'Welcom!!!!'),
(20, 'minhaj', 'min22', 'We are glad to have you with us'),
(21, 'Habib1', 'minhaj', 'gfgdfgg'),
(22, 'Habib1', 'minhaj', 'Hiiiii'),
(23, 'Habib1', 'minhaj', 'I am fine'),
(24, 'minhaj', 'Habib1', 'kire');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `send`
--
ALTER TABLE `send`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `send`
--
ALTER TABLE `send`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
