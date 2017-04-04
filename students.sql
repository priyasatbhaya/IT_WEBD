-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2017 at 08:49 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `age` varchar(33) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `t_board` varchar(40) NOT NULL,
  `t_year` varchar(40) NOT NULL,
  `t_marks` varchar(40) NOT NULL,
  `s_board` varchar(100) NOT NULL,
  `s_year` varchar(100) NOT NULL,
  `s_marks` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `cgpa` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `date`, `Gender`, `age`, `branch`, `regno`, `email`, `pass`, `contact`, `address`, `t_board`, `t_year`, `t_marks`, `s_board`, `s_year`, `s_marks`, `degree`, `cgpa`, `status`) VALUES
(16, 'Sri Harsha', '1997-03-23', 'm', '20', 'it', '14/IT/38', 'sriharshashm@gmail.com', 'harsha444', '9493083847', '7-9-148/3,sri ram nagar colony\r\npanagal road,nalgonda', 'state', '2012', '87', 'state', '2014', '98.1', 'b.tech', '8.43', 1),
(17, 'Akhil', '2001-12-12', 'm', '15', 'it', '14/IT/56', 'akhil@gmail.com', 'akhil123', '94930838374', 'hall 1\r\nNIT DURGAPUR', 'icse', '2012', '98', 'icse', '2014', '98', 'b.tech', '8', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
