-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 04:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sumit`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `voterid` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `area` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `voterid`, `password`, `address`, `photo`, `role`, `area`, `status`, `votes`) VALUES
(21, 'James', 1126172257, 'G12345', '123', 'srinagar garhwal', '1.jpg', 1, 1, 1, 0),
(22, 'Charlotte', 7569412250, 'G123456', '123', 'Bhaktiyana', '10.jpg', 1, 1, 0, 0),
(23, 'William', 9826354120, 'G1234567', '123', 'Chauras campus', '2.jpg', 1, 1, 0, 0),
(24, 'Henry', 6357895405, 'G12345678', '123', 'Chauras Campus', '3.jpg', 1, 1, 0, 0),
(25, 'Noah', 7852012364, 'G123456789', '123', 'Srikot Ganganali', '8.jpg', 1, 1, 0, 0),
(26, 'Jack Hamma', 8912014560, 'G98765', '123', 'Kandoliya', '9.jpg', 1, 2, 1, 0),
(27, 'David', 9810023645, 'G987654', '123', 'Tarakund', '1.jpg', 1, 2, 0, 0),
(28, 'Olivia', 8520364798, 'G9876543', '123', 'Yamkeshwar', '7.jpg', 1, 2, 0, 0),
(29, 'Lana', 8547963001, 'G98765432', '123', 'Pauri Garhwal', '6.jpg', 1, 2, 0, 0),
(30, 'Sophia', 7410258698, 'G012345', '123', 'Tehri dam', '8.jpg', 1, 3, 0, 0),
(31, 'Andrew', 9985642003, 'G0123456', '123', 'Tehri', '4.jpg', 1, 3, 0, 0),
(32, 'Grace', 8957456841, 'G01234567', '123', 'Tehri Garhwal', '5.jpg', 1, 3, 0, 0),
(33, 'Republic', 4200220024, 'H12345', '12345', 'Srinagar Garhwal', 'img2.jpg', 2, 1, 0, 0),
(34, 'County', 9874125630, 'H123456', '12345', 'Srikot ganganali', 'img10.jpg', 2, 1, 0, 1),
(35, 'Democratic', 8514123645, 'H1234567', '12345', 'Uppar Bhaktiyana', 'img5.jpg', 2, 1, 0, 1),
(36, 'Enter', 1896547410, 'G12345678', '12345', 'Chauras Campus', 'img7.jpg', 2, 1, 0, 1),
(37, 'Republic', 6541257895, 'H98765', '12345', 'Pauri', 'img3.jpg', 2, 2, 0, 0),
(38, 'County', 9655474125, 'H987654', '12345', 'Pauri', 'img9.jpg', 2, 2, 0, 1),
(39, 'Shifter', 2365485963, 'H9876543', '12345', 'Pauri Garhwal', 'img6.jpg', 2, 2, 0, 1),
(40, 'Republic', 6985741250, 'H012345', '12345', 'Tehri', 'img4.jpg', 2, 3, 0, 0),
(41, 'County', 9868567456, 'G0123456', '12345', 'Tehri Garhwal', 'img3.jpg', 2, 3, 0, 1),
(42, 'Sumit Singh Panwar', 9368423513, 'G171341190', '123', 'Srikot Ganganali, Srinagar Garhwal', '9.jpg', 1, 1, 1, 0),
(43, 'Vijaykant', 3738123616, 'G11111', '123', 'dsfdgfh', '2.jpg', 1, 1, 1, 0),
(44, 'Arjun Reddy', 7564124856, 'G00000', '123', 'Dehradun', '4.jpg', 1, 2, 1, 0),
(48, 'SUMIT', 8888888888, 'G8800', '12345678', 'sddas', 'pp.jpg', 1, 3, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
