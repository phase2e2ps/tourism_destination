-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2025 at 10:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gers_db`
--
DROP DATABASE IF EXISTS `gers_db`;
CREATE DATABASE IF NOT EXISTS `gers_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gers_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `name_tb` varchar(50) NOT NULL,
  `pass_tb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `name_tb`, `pass_tb`) VALUES
(10, 'admin', '$2y$10$HMxsDqogtskpVti92NPuqeGADt1Zp2LWpCvSSJv7bOs'),
(12, 'user', '$2y$10$ka39ulhAUJwQbX/4uLQTfeSJ4EmCSuhItxWdQV3FkrM');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE `contact_tb` (
  `id` int(11) NOT NULL,
  `name_tb` varchar(50) NOT NULL,
  `email_tb` varchar(50) NOT NULL,
  `contact_tb` varchar(50) NOT NULL,
  `message_tb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`id`, `name_tb`, `email_tb`, `contact_tb`, `message_tb`) VALUES
(1, 'Aray ko!', 'Arayko@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(2, 'Gerson C.', 'sample@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(3, 'Gers', 'sample@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(4, 'Gerson C.', 'sample@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(5, 'admin', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(6, 'Gers', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(7, 'Gers', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(8, 'Gers', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(9, 'Gers', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(24, 'admin', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(25, 'admin', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(26, 'admin', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(27, 'Gers', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(28, 'Gers', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(29, 'kersone', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(30, 'kersone', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(31, 'kersone', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(32, 'kersone', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(33, 'Edi wow!', 'sarah@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(34, 'okay cgi', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(35, 'Gers', 'okayfine@gmail.com', '09887440217', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consectetur cupiditate, reprehenderit excepturi laborum maiores distinctio voluptate aliquam impedit harum tempore soluta porro accusamus? Obcaecati impedit tenetur nulla sint excepturi?'),
(36, 'hello', 'okayfine@gmail.com', '09887440217', 'jkfdujdfdfuiuiuijioknsfhoibsioughsoiufghios'),
(37, 'Ako Lang To', 'okayfine@gmail.com', '09887440217', 'poei-0ryige09gpocfj90bijpdofpi'),
(38, 'admin', 'sample@gmail.com', '09887440217', 'ketduketukku'),
(39, 'John Doe', 'sample@gmail.com', '', 'lkvnsdokvbmns');

-- --------------------------------------------------------

--
-- Table structure for table `line1_home`
--

CREATE TABLE `line1_home` (
  `id` int(11) NOT NULL,
  `img_tb` varchar(1000) NOT NULL,
  `title_tb` varchar(1000) NOT NULL,
  `desc_tb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `line1_home`
--

INSERT INTO `line1_home` (`id`, `img_tb`, `title_tb`, `desc_tb`) VALUES
(1, 'https://www.barcelo.com/guia-turismo/wp-content/uploads/2022/03/que-visitar-dubai.jpg', 'Second slide label', 'Some representative placeholder content for the first slide.'),
(2, 'http://localhost/Cabelin/Final_Output/image/dubai8.avif', 'Second slide label\r\n', 'Some representative placeholder content for the second slide.\r\n\r\n\r\n'),
(3, 'http://localhost/Cabelin/Final_Output/image/dubai3.jpg', 'Third slide label\r\n', 'Some representative placeholder content for the third slide.\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `line2_home`
--

CREATE TABLE `line2_home` (
  `id` int(11) NOT NULL,
  `img_tb` varchar(1000) NOT NULL,
  `title_tb` varchar(1000) NOT NULL,
  `desc_tb` varchar(1000) NOT NULL,
  `button_tb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `line2_home`
--

INSERT INTO `line2_home` (`id`, `img_tb`, `title_tb`, `desc_tb`, `button_tb`) VALUES
(10, 'https://i.natgeofe.com/n/483e77f7-f52b-432a-a0f5-d9cd1489a95a/madinat-jumeirah-dubai-uae.jpg', 'Aray ko!', 'Some representative placeholder content for the second slide.', 'Read More'),
(11, 'http://localhost/Cabelin/Final_Output/image/dubai8.avif', 'Saho saring kaman', 'Adventure awaits in Switzerland. Discover scenic trails, alpine villages, and unforgettable views in our latest post.', 'Read More'),
(12, 'http://localhost/Cabelin/Final_Output/image/dubai3.jpg', 'Ano dayon?', 'Short on time but big on exploration? Check out our 2-day itinerary to eat, shop, and explore Tokyo like a local!', 'Read More');

-- --------------------------------------------------------

--
-- Table structure for table `line3_home`
--

CREATE TABLE `line3_home` (
  `id` int(11) NOT NULL,
  `img_tb` varchar(1000) NOT NULL,
  `title_tb` varchar(1000) NOT NULL,
  `desc_tb` varchar(1000) NOT NULL,
  `button_tb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `line3_home`
--

INSERT INTO `line3_home` (`id`, `img_tb`, `title_tb`, `desc_tb`, `button_tb`) VALUES
(1, 'http://localhost/Cabelin/Final_Output/image/dubai10.webp', 'Card title', 'Some quick example text to build on the card title and make up the bulk of the cardâ€™s content.', 'Go somewhere'),
(2, 'http://localhost/Cabelin/Final_Output/image/dubai2.avif', 'Card title', 'Some quick example text to build on the card title and make up the bulk of the cardâ€™s content.', 'Go somewhere'),
(3, 'http://localhost/Cabelin/Final_Output/image/dubai4.jpg', 'Card title', 'Some quick example text to build on the card title and make up the bulk of the cardâ€™s content.', 'Go somewhere');

-- --------------------------------------------------------

--
-- Table structure for table `line4_home`
--

CREATE TABLE `line4_home` (
  `id` int(11) NOT NULL,
  `img_tb` varchar(1000) NOT NULL,
  `title_tb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `line4_home`
--

INSERT INTO `line4_home` (`id`, `img_tb`, `title_tb`) VALUES
(1, 'https://images.ctfassets.net/ov8o7v78mnye/277z1v4u02PAPgLRPYG9uV/2236563e77a36e4f73c32cab5de466c0/turag-photography-fZtFVdZHmJE-unsplash-550x367.jpg', 'rturyu5u'),
(2, 'https://images.musement.com/cover/0002/45/dubai-skyline-at-dusk-jpg_header-144981.jpeg', 'Another longer title belongs here\r\n'),
(3, 'https://travelbird-images.imgix.net/7b/14/7b14faa262694b6f2e8ade0769a21f86?auto=compress%2Cformat&crop=faces%2Cedges%2Ccenter&fit=crop&h=450&w=675', 'Another longer title belongs here\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `line5_home`
--

CREATE TABLE `line5_home` (
  `id` int(11) NOT NULL,
  `img_tb` varchar(1000) NOT NULL,
  `title_tb` varchar(1000) NOT NULL,
  `desc_tb` varchar(1000) NOT NULL,
  `button_tb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `line5_home`
--

INSERT INTO `line5_home` (`id`, `img_tb`, `title_tb`, `desc_tb`, `button_tb`) VALUES
(1, 'http://localhost/Cabelin/Final_Output/image/dubai6.webp', 'Card title', 'Some quick example text to build on the card title and make up the bulk of the cardâ€™s content.', 'Go somewhere'),
(2, 'http://localhost/Cabelin/Final_Output/image/dubai8.avif', 'Card title', 'Some quick example text to build on the card title and make up the bulk of the cardâ€™s content.', 'Go somewhere'),
(3, 'http://localhost/Cabelin/Final_Output/image/dubai1.jpg', 'Card title\r\n', 'Some quick example text to build on the card title and make up the bulk of the cardâ€™s content.\r\n\r\n', 'Go somewhere');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_tb`
--
ALTER TABLE `contact_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line1_home`
--
ALTER TABLE `line1_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line2_home`
--
ALTER TABLE `line2_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line3_home`
--
ALTER TABLE `line3_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line4_home`
--
ALTER TABLE `line4_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line5_home`
--
ALTER TABLE `line5_home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_tb`
--
ALTER TABLE `contact_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `line1_home`
--
ALTER TABLE `line1_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `line2_home`
--
ALTER TABLE `line2_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `line3_home`
--
ALTER TABLE `line3_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `line4_home`
--
ALTER TABLE `line4_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `line5_home`
--
ALTER TABLE `line5_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
