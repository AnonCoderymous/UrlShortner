-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 09:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_urlshortner`
--

-- --------------------------------------------------------

--
-- Table structure for table `redirects_logs`
--

CREATE TABLE `redirects_logs` (
  `origin` varchar(255) DEFAULT NULL,
  `redirect_code` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `redirects_logs`
--

INSERT INTO `redirects_logs` (`origin`, `redirect_code`) VALUES
('https://fontawesome.com/icons/link?f=classic', 'zERMg'),
('https://alexcican.com/post/how-to-remove-php-html-htm-extensions-with-htaccess/', 'EkPhG'),
('https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_loc_protocol', 'nx1ks'),
('https://www.w3schools.com/php/func_math_rand.asp', 'cPyLm'),
('https://www.w3schools.com/php/func_math_rand.asp', '0xsQS'),
('https://codedamn.com/news/javascript/write-regular-expression-regex-for-url', 'pPvYE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
