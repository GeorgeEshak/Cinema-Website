-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 05:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `seats` int(11) NOT NULL DEFAULT '50'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `name`, `seats`) VALUES
(1, 'Fast &Furious 6', 36),
(2, 'The Cabin in the woods', 50),
(3, 'Captain America', 42);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `user_email` varchar(50) NOT NULL,
  `film_id` int(11) NOT NULL,
  `seats_number` int(11) NOT NULL,
  `film_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`user_email`, `film_id`, `seats_number`, `film_time`) VALUES
('goka@hotmial.com', 1, 4, '10:30'),
('goka@hotmial.com', 1, 4, '10:30'),
('goka@hotmial.com', 1, 4, '10:30'),
('goka@hotmial.com', 1, 4, '10:30'),
('goka@hotmial.com', 1, 4, '10:30'),
('goka@hotmial.com', 1, 4, '10:30'),
('goka@hotmial.com', 1, 4, '10:30'),
('goka@hotmial.com', 1, 4, '10:30'),
('goka@hotmial.com', 1, 4, '10:30'),
;

-- --------------------------------------------------------

--
-- Table structure for table `uinfo`
--

CREATE TABLE `uinfo` (
  `Username` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uinfo`
--

INSERT INTO `uinfo` (`Username`, `Email`, `Password`) VALUES
('Ahmed Gamil', 'Ahmed@gmail.com', '1515516'),
('Ahmed Mostafa', 'Ahmed@hotmail.com', '54545465'),
('George Shawky', 'George@gmail.com', '995555'),
('George Eshak', 'George@hotmail.com', '989899'),
('goka', 'goka@hotmial.com', '123456'),
('Marwa', 'goooka@hotmial.com', '123hH'),
('hhj', 'kkkk@mail.com', '2147483647'),
('kkm', 'lfjfj2@hjj.com', '54'),
('Marwa', 'ljknln@kmkfv', '123'),
('fkk', 'lkm@dlnjdjfdfm', '0'),
('Marwa', 'marwa@hotmail.com', '555555'),
('Mina Zaki', 'Mina@hotmail.com', '989899'),
('Mouhamed Mostafa', 'Mouhamed@gmail.com', '989899'),
('Mouhamed Ahmed', 'Mouhamed@hotmail.com', '488864'),
('hgfdsa', 'VERLBKME@KMGL', '541');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uinfo`
--
ALTER TABLE `uinfo`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
