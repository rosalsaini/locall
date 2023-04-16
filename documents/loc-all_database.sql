-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 06:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loc-all database`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(4) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mehul Tuteja', 'mehultuteja79@gmail.com', 'Mehul@123'),
(2, 'Malzymon', 'Malzymon@gmail.com', 'Malzy@123');

-- --------------------------------------------------------

--
-- Table structure for table `stationdemo`
--

CREATE TABLE `stationdemo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stationdemo`
--

INSERT INTO `stationdemo` (`id`, `name`, `sid`) VALUES
(101, 'Chembur', 101),
(102, 'Tilak Nagar', 102),
(103, 'Kurla', 202),
(104, 'GTB Nagar', 104),
(201, 'Vidyavihar', 201),
(202, 'Kurla', 103),
(203, 'Sion', 203),
(204, 'Matunga', 204),
(205, 'Dadar', 205);

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `name`, `sid`) VALUES
(101, 'Churchgate', 101),
(102, 'Marine Lines', 102),
(103, 'Charni Road', 103),
(104, 'Grant Road', 104),
(105, 'Mumbai Central', 105),
(106, 'Mahalakshmi', 106),
(107, 'Lower Parel', 107),
(108, 'Elphinston Road', 108),
(109, 'Dadar', 208),
(110, 'Matunga Road', 110),
(111, 'Mahim', 111),
(112, 'Bandra', 112),
(113, 'Khar Road', 113),
(114, 'Santacruz', 114),
(115, 'Vile Parle', 115),
(116, 'Andheri', 116),
(117, 'Jogeshwari', 117),
(118, 'Goregaon', 118),
(119, 'Malad', 119),
(120, 'Kandivali', 120),
(121, 'Borivali', 121),
(122, 'Dahisar', 122),
(123, 'Mira Road', 123),
(124, 'Elphinston Road', 124),
(125, 'Naigaon', 125),
(126, 'Vasai Road', 126),
(127, 'Nallasopara', 127),
(128, 'Virar', 128),
(129, 'Vaitarna', 129),
(130, 'Saphale', 130),
(131, 'Kelve Road', 131),
(132, 'Palghar', 132),
(133, 'Umroli', 133),
(134, 'Boisar', 134),
(135, 'Vangaon', 135),
(136, 'Dahanu Road', 136),
(201, 'Mumbai CST', 201),
(202, 'Masjid', 202),
(203, 'Sandhurst road', 203),
(204, 'Byculla', 204),
(205, 'Chinchpokli', 205),
(206, 'Curry road', 206),
(207, 'Parel', 207),
(208, 'Dadar', 109),
(209, 'Matunga', 209),
(210, 'Sion', 210),
(211, 'Kurla', 211),
(212, 'Vidyavihar', 212),
(213, 'Ghatkopar', 213),
(214, 'Vikhroli', 214),
(215, 'Kanjurmarg', 215),
(216, 'Bhandup', 216),
(217, 'Nahur', 217),
(218, 'Mulund', 218),
(219, 'Thane', 219),
(220, 'Kalva', 220),
(221, 'Mumbra', 221),
(222, 'Diva Jn.', 222),
(223, 'Dombivali', 223),
(224, 'Thakurli', 224),
(225, 'Kalyan', 225),
(226, 'Shahad', 226),
(227, 'Ambivali', 227),
(228, 'Titwala', 228),
(229, 'Vithalwadi', 229),
(230, 'Ulhasnagar', 230),
(231, 'Ambernath', 231),
(232, 'Badlapur', 232),
(233, 'Khadavli', 233),
(234, 'Vasind', 234),
(235, 'Asangaon', 235),
(236, 'Vangani', 236),
(237, 'Neral', 237),
(238, 'Bhivpuri', 238),
(239, 'Karjat', 239),
(240, 'Palasdari', 240),
(241, 'Kolavli', 241),
(242, 'Lokjee', 242),
(243, 'Dolavli', 243),
(244, 'Khopoli', 244),
(245, 'Khardi', 245),
(246, 'Kasara', 246),
(301, 'Mumbai CST', 301),
(302, 'Masjid', 302),
(303, 'Sandhurst road', 303),
(304, 'Dockyard road', 304),
(305, 'Rey road', 305),
(306, 'Cotton green', 306),
(307, 'Sewri', 307),
(308, 'Wadala road', 308),
(309, 'King circle', 309),
(310, 'Raoli Jn', 310),
(311, 'GTB nagar', 311),
(312, 'Chunabhati', 312),
(313, 'Kurla', 313),
(314, 'Tilak nagar', 314),
(315, 'Chembur', 315),
(316, 'Govandi', 316),
(317, 'Mankhurd', 317),
(318, 'Vashi', 318),
(319, 'Sanpada', 319),
(320, 'Juinagar', 320),
(321, 'Nerul', 321),
(322, 'Seawoods', 322),
(323, 'Belapur CBD', 323),
(324, 'Kharghar', 324),
(325, 'Mansarovar', 325),
(326, 'Khandeshwar', 326),
(327, 'Panvel', 327),
(401, 'Thane', 401),
(402, 'Airoli', 402),
(403, 'Rabale', 403),
(404, 'Ghansoli', 404),
(405, 'Koparkhairane', 405),
(406, 'Turbhe', 406);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stationdemo`
--
ALTER TABLE `stationdemo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
