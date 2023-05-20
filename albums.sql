-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2022 at 12:17 AM
-- Server version: 5.7.40
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reyeszaki_cs213_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `artists_id` int(11) NOT NULL,
  `album` varchar(50) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `artists_id`, `album`, `year`) VALUES
(1, 1, 'Astroworld', 2018),
(2, 1, 'JACKBOYS', 2019),
(3, 1, 'Birds in the Trap Sing McKnight', 2016),
(4, 1, 'Rodeo (Expanded Edition)', 2015),
(5, 2, 'Her Loss', 2022),
(6, 2, 'Honestly, Nevermind', 2022),
(7, 2, 'Certified Lover Boy', 2021),
(8, 2, 'Scorpion', 2018),
(9, 3, 'Gemini Rights', 2022),
(10, 3, 'Apollo XXI', 2019),
(11, 3, 'The Lo-Fis', 2020),
(13, 4, 'Blonde', 2016),
(14, 4, 'Channel Orange', 2012),
(15, 4, 'Nostalgia, Ultra', 2011),
(17, 5, 'Dawn FM', 2022),
(18, 5, 'After Hours', 2020),
(19, 5, 'Beauty Behind the Madness', 2015),
(20, 5, 'Starboy', 2016),
(21, 6, 'The Melodic Blue', 2021),
(22, 6, 'The Sound of Bad Habit', 2018),
(23, 7, 'Wasteland', 2022),
(24, 7, 'Sonder Son', 2017),
(25, 7, 'Lost', 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
