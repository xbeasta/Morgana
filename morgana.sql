-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 09:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morgana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(144) NOT NULL,
  `password` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'el', '65c10911d8b8591219a21ebacf46da01'),
(3, 'testing', 'ae2b1fca515949e5d54fb22b8ed95575');

-- --------------------------------------------------------

--
-- Table structure for table `graphicsdesign`
--

CREATE TABLE `graphicsdesign` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(144) NOT NULL,
  `title` varchar(144) NOT NULL,
  `description` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `graphicsdesign`
--

INSERT INTO `graphicsdesign` (`id`, `thumbnail`, `title`, `description`) VALUES
(10, 'image1.png', 'Sumatran Tigers', 'Please help the Sumatran Tigers<br>\r\nThey are dying as we speak'),
(11, 'image2.jpg', 'No way out', 'Movie poster for a class movie in 12th grade'),
(12, 'image3.jpg', 'The gym', '1st solo project after finishing graphics designing class'),
(13, 'image4.png', 'Inifnity Impact Logo', '1st commissioned project for a company'),
(14, 'image5.png', 'Infinity Impact Card Front', '1st commissioned project for a company'),
(16, 'image6.png', 'Infinity Impact Letterhead', '1st commissioned project for a company'),
(17, 'image7.png', 'Infinity Impact Card Back', '1st commissioned project for a company'),
(18, 'image8.jpg', 'Dumet Poster', 'Final poster project for Dumet School photshop course');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `thumbnail`) VALUES
(3, 'card_back.png');

-- --------------------------------------------------------

--
-- Table structure for table `home_active`
--

CREATE TABLE `home_active` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_active`
--

INSERT INTO `home_active` (`id`, `thumbnail`) VALUES
(1, 'card_front.png');

-- --------------------------------------------------------

--
-- Table structure for table `watercolor`
--

CREATE TABLE `watercolor` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(144) NOT NULL,
  `title` varchar(144) NOT NULL,
  `description` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watercolor`
--

INSERT INTO `watercolor` (`id`, `thumbnail`, `title`, `description`) VALUES
(18, 'watercolor1.jpg', 'Kageyama Tobio', '8 July 2020<br>\r\nOtw to finish the last arc'),
(19, 'watercolor2.jpg', 'The Smile', '13 July 2020<br>\r\nIn the cold, I was unhappy but I should live my life covered in a smile'),
(20, 'watercolor3.jpg', 'Hinata Shoyo', '7 July 2020<br>\r\nTo love a character is like to improve yourself by loving yourself'),
(21, 'watercolor4.jpg', 'Inconsistency that was felt', '6 July 2929<br>\r\nI have come to dislike people who gets to close somehow but I prefer painting people<br>\r\nIrony<br>\r\nI dont know whats to come '),
(22, 'watercolor5.jpg', 'The young who saw', 'So this piece is basically my imagination of who I want to look like when I was a kid<br>\r\nTo be calm and in control and perfect like a painting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graphicsdesign`
--
ALTER TABLE `graphicsdesign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_active`
--
ALTER TABLE `home_active`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watercolor`
--
ALTER TABLE `watercolor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `graphicsdesign`
--
ALTER TABLE `graphicsdesign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_active`
--
ALTER TABLE `home_active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `watercolor`
--
ALTER TABLE `watercolor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
