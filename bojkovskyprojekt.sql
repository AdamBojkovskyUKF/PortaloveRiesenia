-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 07:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bojkovskyprojekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `offer` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `name`, `email`, `offer`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'test test', 'test@test.test', 1, '2022-12-01', '2022-12-31', '2022-12-01 22:58:08', '2022-12-01 22:58:08'),
(2, 'pokus pokus', 'pokus@pokus.pokus', 2, '2023-01-02', '2023-01-08', '2022-12-01 22:58:54', '2022-12-01 22:58:54'),
(3, 'x', 'x@x.x', 3, '2022-11-01', '2022-11-02', '2022-12-03 14:32:37', '2022-12-03 14:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dovolenka1', '1.jpg', 'Popis prvej dovolenky', '2022-12-01 00:30:29', '2022-12-03 17:46:37'),
(2, 'Dovolenka2', '2.jpg', 'Popis druhej dovolenky', '2022-12-01 00:36:18', '2022-12-01 00:36:18'),
(3, 'Dovolenka3', '3.jpg', 'Popis tretej dovolenky', '2022-12-01 00:36:50', '2022-12-01 00:36:50'),
(4, 'Dovolenka4', '4.jpg', 'Popis štvrtej dovolenky', '2022-12-01 00:37:31', '2022-12-01 00:37:31'),
(5, 'Dovolenka5', '5.jpg', 'Popis piatej dovolenky', '2022-12-01 00:37:45', '2022-12-01 00:37:45'),
(6, 'Dovolenka6', '6.jpg', 'Popis šiestej dovolenky', '2022-12-01 00:37:54', '2022-12-01 00:37:54'),
(7, 'Dovolenka7', '7.jpg', 'Popis siedmej dovolenky', '2022-12-01 00:38:06', '2022-12-01 00:38:06'),
(8, 'Dovolenka8', '8.jpg', 'Popis ôsmej dovolenky', '2022-12-01 00:38:19', '2022-12-01 00:38:19'),
(9, 'Dovolenka9', '9.jpg', 'Popis deviatej dovolenky', '2022-12-01 00:38:30', '2022-12-01 00:38:30'),
(10, 'Dovolenka10', '10.jpg', 'Popis desiatej dovolenky', '2022-12-01 00:38:40', '2022-12-01 00:38:40'),
(11, 'Dovolenka11', '11.jpg', 'Popis jedenástej dovolenky', '2022-12-01 00:38:51', '2022-12-01 00:38:51'),
(12, 'Dovolenka12', '12.jpg', 'Popis dvanástej dovolenky', '2022-12-01 00:39:03', '2022-12-01 00:39:03'),
(13, 'Dovolenka13', '13.jpg', 'Popis trinástej dovolenky', '2022-12-01 00:39:16', '2022-12-01 00:39:16'),
(14, 'Dovolenka14', '14.jpg', 'Popis štrnástej dovolenky', '2022-12-01 00:39:28', '2022-12-01 00:39:28'),
(15, 'Dovolenka15', '15.jpg', 'Popis petnástej dovolenky', '2022-12-01 00:39:44', '2022-12-01 00:39:44'),
(16, 'Dovolenka16', '16.jpg', 'Popis šesnástej dovolenky', '2022-12-01 00:40:07', '2022-12-01 00:40:07'),
(17, 'Dovolenka17', '17.jpg', 'Popis sedemnástej dovolenky', '2022-12-01 00:40:45', '2022-12-01 00:40:45'),
(18, 'Dovolenka18', '18.jpg', 'Popis osemnástej dovolenky', '2022-12-01 00:41:01', '2022-12-01 00:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `is_admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
