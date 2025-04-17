-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2025 at 03:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `amritreg`
--

CREATE TABLE `amritreg` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amritreg`
--

INSERT INTO `amritreg` (`id`, `uname`, `lname`, `father`, `phone`, `email`, `address`, `date`) VALUES
(3, 'jashan', 'mattu', 'father', 456213786, 'email@gmail.com', 'address', '2025-03-30'),
(4, 'jashan', 'kaur', 'father', 456456, 'jashan@mattu.com', 'address', '2025-08-30'),
(5, 'mattu', 'kaur', 'father', 456456, 'jash@mattu.com', 'address', '2025-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `bhetan`
--

CREATE TABLE `bhetan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `choose` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bhetan`
--

INSERT INTO `bhetan` (`id`, `name`, `father`, `address`, `email`, `phone`, `choose`, `image`) VALUES
(1, '', '', '', '', 0, '', 'bhetanImgFolder/1743776318_student.jpg'),
(2, '', '', '', '', 0, '', 'bhetanImgFolder/1743776450_student.jpg'),
(3, 'name', 'father', 'address', 'email@kldfg.com', 545454, 'amount', 'bhetanImgFolder/1743776483_default-image.png');

-- --------------------------------------------------------

--
-- Table structure for table `daswandh`
--

CREATE TABLE `daswandh` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` int(10) NOT NULL,
  `amount` int(11) NOT NULL,
  `image` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daswandh`
--

INSERT INTO `daswandh` (`id`, `role`, `name`, `father`, `address`, `mail`, `date`, `phone`, `amount`, `image`) VALUES
(1, 'admin', 'jashan', 'father', 'address', 'email@gmail.com', '2025-04-24', 2147483647, 101, ''),
(2, 'admin', 'jash', 'father', 'address', 'dfj@gjgf.com', '2020-04-27', 4546546, 11, 'daswandhImgFolder/1743775259_header-bg.jpg'),
(3, 'other', 'other', 'father', 'adrder', 'fjd@djfg.com', '2022-02-04', 4389579, 101, 'daswandhImgFolder/1743775327_default-image.png');

-- --------------------------------------------------------

--
-- Table structure for table `deg`
--

CREATE TABLE `deg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deg`
--

INSERT INTO `deg` (`id`, `name`, `phone`, `date`, `time`, `amount`) VALUES
(1, 'jashan', 890, '2025-04-03', '07:36:00', 11),
(17, 'gurveer', 2147483647, '2025-04-03', '07:55:00', 81),
(18, 'new', 489569345, '2025-04-04', '07:33:00', 501);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `job` varchar(80) NOT NULL,
  `gender` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `father`, `email`, `password`, `dob`, `phone`, `address`, `role`, `image`, `job`, `gender`) VALUES
(1, 'jashan', 'father', 'email@gmail.com', '0acb0a98505c34b3096f56f585df0679', '2025-04-01', 2147483647, 'address', 'other', '', 'sweeper', 'Female'),
(2, 'preet', 'father', 'email@mail.com', '9eebe7f821d04a9ce6c1369bab9afd7c', '2025-03-31', 34645672, 'address', 'other', 'RegImgFolder/1743692601_header-bg.jpg', 'tabla', 'Male'),
(3, 'admin', 'father', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '2025-04-01', 123456, 'address', 'admin', 'RegImgFolder/1744033363_head.png', 'head Granthi', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amritreg`
--
ALTER TABLE `amritreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bhetan`
--
ALTER TABLE `bhetan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daswandh`
--
ALTER TABLE `daswandh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deg`
--
ALTER TABLE `deg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amritreg`
--
ALTER TABLE `amritreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bhetan`
--
ALTER TABLE `bhetan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daswandh`
--
ALTER TABLE `daswandh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deg`
--
ALTER TABLE `deg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
