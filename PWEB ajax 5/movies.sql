-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 02:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id_movie` int(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id_movie`, `title`, `genre`, `image`) VALUES
(1, 'Brother\'s Secret', 'Political Drama', 'brothersSecret.jpg'),
(2, 'Two Sides', 'Psychological Thrill', 'twoSides.jpg'),
(3, 'Criminal Minds', 'Mystery', 'criminalMinds.jpg'),
(4, 'The Warriors', 'Mythic Fiction', 'theWarriors.jpg'),
(5, 'Kingdom: Season 2', 'Horror', 'kingdom.jpg'),
(6, 'Men in Black', 'Action Comedy', 'mib.jpg'),
(7, 'Fight Club', 'Thriller', 'fightClub.jpg'),
(8, 'Train to the Future', 'Fantasy', 'trainToTheFuture.jpg'),
(9, 'The Target', ' Action', 'theTarget.jpg'),
(10, 'Synchronization of Dreams', 'Fantasy Mystery', 'syncOfDream.jpg'),
(11, 'Kingsman: The Golden Circle', 'Adventure Comedy', 'kingsmanTGC.jpg'),
(12, 'Jumanji', 'Fantasy', 'jumanji.jpg'),
(13, 'Seoul Ghost Story', 'Horror', 'seoulGhost.jpg'),
(14, 'Rooftop Fight', 'Action Comedy', 'rooftopFight.jpg'),
(15, '7llin\' in the Dream', 'Drama Comedy', '7llin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id_movie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id_movie` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
