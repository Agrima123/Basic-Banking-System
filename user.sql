-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 01:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `transaction1` (
  `transaction_id` int(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `datetime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trans`
--

INSERT INTO `transaction1` (`transaction_id`, `sender`, `receiver`, `amount`, `datetime`) 
VALUES(1, 'Agrima Gupta', 'Hana Gupta', 100, '2021-04-14 12:41:48.544309');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user` (`id`, `email`, `balance` , `name1`) VALUES
(1, 'agrima.gupta2312@gmail.com', 100000, 'Agrima Gupta'),
(2, 'hanag2506@gmail.com', 30009, 'Hana Gupta'),
(3, 'manish.gupta1774@gmail.com', 25477, 'Manish Gupta'),
(4, 'Deepa2773@gmail.com', 1000078,'Deepa Gupta'),
(5, 'vivogg@gmail.com', 49097, 'Vivo Goswami'),
(6, 'anjali.mehta@gmail.com', 80001, 'Anjali Mehta'),
(7, 'neetya23@hotmail.com', 30581, 'Neetya Dewangan'),
(8, 'tanu74@hotmail.com', 93020, 'Tanu Poojary'),
(9, 'vedha.naik45@gmail.com', 90063,'Vedha Naik'),
(10,'nivi.mishra40@gmail.com', 50550, 'Nivi Mishra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trans`
--
ALTER TABLE `transaction1`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trans`
--
ALTER TABLE `transaction1`
  MODIFY `transaction_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;