-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 03:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblab`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--
CREATE DATABASE weblab;
USE weblab;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `imgurl` text NOT NULL DEFAULT 'https://i.pinimg.com/236x/6f/21/47/6f2147c359f1ab834f00b4cbac5d6817.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `imgurl`) VALUES
(7, 'takagi', 'anime', 123, 'https://upload.wikimedia.org/wikipedia/vi/thumb/1/13/%C3%81p_ph%C3%ADch_phim_Karakai_Jouzu_no_Takagi-san_Movie.jpg/220px-%C3%81p_ph%C3%ADch_phim_Karakai_Jouzu_no_Takagi-san_Movie.jpg'),
(12, 'violet', 'anime', 132, 'https://m.media-amazon.com/images/M/MV5BZmUzMThjOTItZGY4ZS00ODcwLTliNTMtYjVkM2JmY2QxNmRhXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_.jpg'),
(15, 'juliet', 'manga', 1234, 'https://upload.wikimedia.org/wikipedia/vi/7/75/Juliet_of_Boarding_School_volume_1_cover.jpg'),
(16, '5tobun', 'anime', 23, 'https://cdn.galaxycine.vn/media/2022/10/4/22_1664868924386.jpg'),
(20, 'josee', 'anime', 34, 'https://i.pinimg.com/736x/31/26/eb/3126ebbb56619d65f782fa42dbfe8431.jpg'),
(21, 'tenki no ko', 'anime', 1234, 'https://upload.wikimedia.org/wikipedia/vi/thumb/0/03/Tenki_no_Ko_poster.jpg/250px-Tenki_no_Ko_poster.jpg'),
(22, 'kaguya', 'anime', 3, 'https://m.media-amazon.com/images/M/MV5BYjEwNjEwYzgtZGZkMy00MTBjLTg2MmYtNDk0MzY2NmU0MmNiXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_FMjpg_UX1000_.jpg'),
(23, 'grand blue', 'manga', 412, 'https://upload.wikimedia.org/wikipedia/vi/e/e4/Grand_Blue_volume_1_cover.jpg'),
(24, 'konosuba', 'anime', 4123, 'https://m.media-amazon.com/images/M/MV5BYmZhMTJhZDgtZTc0Yi00NjcxLThhYTAtNmJiYTljMzc1Y2NiXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_.jpg'),
(25, 'nisekoi', 'manga', 421, 'https://upload.wikimedia.org/wikipedia/en/thumb/0/0c/Nisekoi_Volume_1.jpg/220px-Nisekoi_Volume_1.jpg'),
(26, 'wotakoi', 'manga', 421, 'https://www.dymocks.com.au/Pages/ImageHandler.ashx?q=9781632368614&w=&h=570'),
(27, 'yamada', 'manga', 134, 'https://cdn-amz.woka.io/images/I/91SkOl5z4nL.jpg'),
(29, 're zero', 'anime', 5312, 'https://ecdn.game4v.com/g4v-content/uploads/2021/07/game4v-tokyo-revengers-manga-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin@gmail.com', 'Admindeptrai123', 'admin'),
(2, 'user@gmail.com', 'Userdepgai123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
