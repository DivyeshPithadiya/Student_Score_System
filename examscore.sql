-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 07:10 PM
-- Server version: 5.7.29-log
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examscore`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `phone` mediumtext,
  `gender` varchar(50) DEFAULT NULL,
  `Roll` int(11) DEFAULT NULL,
  `std` int(11) DEFAULT NULL,
  `exam` varchar(50) DEFAULT NULL,
  `english` int(11) DEFAULT NULL,
  `hin` int(11) DEFAULT NULL,
  `mar` int(11) DEFAULT NULL,
  `math` int(11) DEFAULT NULL,
  `sci` int(11) DEFAULT NULL,
  `ss` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `parcent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `mail`, `phone`, `gender`, `Roll`, `std`, `exam`, `english`, `hin`, `mar`, `math`, `sci`, `ss`, `total`, `parcent`) VALUES
(20, 'Divyesh ', 'd.pithadiya@somaiya.edu', '7878787878', 'male', 45, 1, 'First Unit Test', 20, 20, 20, 10, 10, 10, 90, 75),
(23, 'Viraj', 'viraj@gmail.com', '7474747474', 'male', 12, 2, 'First Unit Test', 20, 20, 20, 20, 20, 20, 120, 100),
(24, 'ShubhadaL', 's.pithadiya@somaiya.edu', '8989898989', 'Female', 12, 3, 'First Unit Test', 20, 20, 20, 20, 15, 15, 110, 92),
(25, 'Mihir ', 'Mihir@gmail.com', '9595959595', 'male', 12, 2, 'First Unit Test', 10, 10, 10, 10, 10, 10, 60, 50),
(26, 'Ankita', 'Ankita@gmail.com', '7575757575', 'Female', 1, 10, 'First Unit Test', 10, 20, 20, 10, 10, 10, 80, 67),
(27, 'Mihir Patel', 'mj@gmail.com', '9696969696', 'male', 10, 4, 'First Unit Test', 10, 10, 10, 10, 10, 10, 60, 50),
(30, 'Aniket', 'Aniket@gmail.com', '75575757575', 'male', 1, 1, 'Second Unit Test', 20, 15, 15, 15, 10, 14, 89, 74),
(33, 'Hardik', 'hardik@gmail.com', '8989898989', 'male', 13, 1, 'First Unit Test', 10, 10, 5, 5, 5, 5, 40, 33),
(36, 'Shanta', 'shanta@gmail.com', '8282828282', 'other', 8, 1, 'First Unit Test', 10, 12, 12, 14, 15, 13, 76, 63),
(37, 'Divyesh', 'd.pithadiya@somaiya.edu', '8989898989', 'male', 12, 1, 'First Unit Test', 12, 12, 12, 12, 12, 12, 72, 60),
(38, 'Divyesh', 'd.pithadiya@somaiya.edu', '8989898989', 'male', 12, 1, 'Second Unit Test', 15, 15, 15, 15, 15, 15, 90, 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
