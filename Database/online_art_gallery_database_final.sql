-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 09:30 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_art_gallery_database_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `art_work`
--

CREATE TABLE `art_work` (
  `ART_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ART_TITLE` varchar(50) NOT NULL,
  `ART_DESCRIPTION` mediumtext,
  `ART_PRICE` int(11) NOT NULL,
  `ART_DATE` date NOT NULL,
  `ART_WIDTH` int(11) NOT NULL,
  `ART_HEIGHT` int(11) NOT NULL,
  `ART_THICKNESS` int(11) NOT NULL,
  `ART_CATEGORY` varchar(20) NOT NULL,
  `ART_MEDIA` varchar(20) NOT NULL,
  `ART_STATUS` varchar(20) NOT NULL,
  `art_stock` int(50) NOT NULL,
  `COMMENT_ID` int(11) DEFAULT NULL,
  `ART_IMAGEPATH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art_work`
--

INSERT INTO `art_work` (`ART_ID`, `USER_ID`, `ART_TITLE`, `ART_DESCRIPTION`, `ART_PRICE`, `ART_DATE`, `ART_WIDTH`, `ART_HEIGHT`, `ART_THICKNESS`, `ART_CATEGORY`, `ART_MEDIA`, `ART_STATUS`, `art_stock`, `COMMENT_ID`, `ART_IMAGEPATH`) VALUES
(5, 13, 'Luffy', 'The pirate King', 100000, '2017-03-20', 50, 50, 1, 'Drawing', 'Ballpoint Pen', 'SOLD', 0, NULL, '17407576_1431231553585872_2035701416_o.jpg'),
(6, 13, 'Marian Revera Dantes', 'main', 90000, '0000-00-00', 10, 10, 10, 'Photography', 'Digital', 'Available', 1, NULL, '17408285_1431238663585161_1338408460_o.jpg'),
(7, 13, 'Raindow Zebra', 'gay zebra', 100000, '2017-03-20', 10, 10, 10, 'Painting', 'Airbrush', 'AVAILABLE', 1, NULL, '17408164_1431231423585885_456829268_o.jpg'),
(8, 13, 'Marvel Heroes', 'The heroes of the modern society', 100000, '2017-03-20', 10, 10, 10, 'Drawing', 'Pencil', 'AVAILABLE', 1, NULL, '17342236_1431231340252560_1503827210_o.jpg'),
(9, 13, ' Ako ang Pabebe girl', 'walang makakapigil saakin', 100000, '2017-03-20', 10, 10, 10, 'Drawing', 'Pencil', 'SOLD', 0, NULL, '17408482_1431231300252564_495798123_o.jpg'),
(10, 13, 'the ballet', 'jellyfish float', 100000, '2017-03-20', 10, 10, 10, 'Drawing', 'Pencil', 'AVAILABLE', 1, NULL, '17380053_1431231713585856_441841391_o.jpg'),
(11, 13, 'Maine Mendoza', 'The dubsmash queen', 100000, '2017-03-20', 10, 10, 10, 'Drawing', 'Pencil', 'SOLD', 0, NULL, '17373406_1431231663585861_2104178414_o.jpg'),
(12, 13, 'Korean guy', 'korean guy', 200000, '2017-03-20', 10, 10, 10, 'Photography', 'Digital', 'SOLD', 0, NULL, '17392248_1431238563585171_1908655410_n.jpg'),
(13, 13, 'Another Korean Guy', 'korean guy', 200000, '2017-03-20', 10, 10, 10, 'Photography', 'Digital', 'SOLD', 0, NULL, '17349434_1431238550251839_1346896534_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buy_transaction`
--

CREATE TABLE `buy_transaction` (
  `TRANSACTION_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ART_ID` int(11) NOT NULL,
  `Courier_Name` varchar(50) NOT NULL,
  `Courier_Contact` bigint(20) NOT NULL,
  `ordered_date` date NOT NULL,
  `DELIVERY_DATE` date DEFAULT NULL,
  `ordered_no` int(10) NOT NULL,
  `total_price` int(50) NOT NULL,
  `shipping_area` varchar(50) NOT NULL,
  `shipping_municipal` varchar(50) NOT NULL,
  `shipping_province` varchar(50) NOT NULL,
  `shipping_zipcode` varchar(10) NOT NULL,
  `shipping_brgy` varchar(50) NOT NULL,
  `shipping_street` varchar(50) NOT NULL,
  `shipping_house_num` varchar(50) NOT NULL,
  `SHIPPING_STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_transaction`
--

INSERT INTO `buy_transaction` (`TRANSACTION_ID`, `USER_ID`, `ART_ID`, `Courier_Name`, `Courier_Contact`, `ordered_date`, `DELIVERY_DATE`, `ordered_no`, `total_price`, `shipping_area`, `shipping_municipal`, `shipping_province`, `shipping_zipcode`, `shipping_brgy`, `shipping_street`, `shipping_house_num`, `SHIPPING_STATUS`) VALUES
(14, 14, 9, 'iuyy', 1111, '2017-03-22', '2017-03-26', 1, 100000, 'luzon', 'yuy', 'yy', 'yyui', 'iuyiu', 'uyi', 'yiuiy', 'Delivered'),
(15, 14, 13, 'Earl Austin Zuniga', 9475293353, '2017-03-25', '2017-03-25', 1, 200000, 'Luzon', 'Castilla', 'Sorsogon', '7104', 'Poblacion', 'San Juan Street', '217', 'Delivered'),
(16, 14, 12, 'Earl Austin Zuniga', 9475293353, '2017-03-25', '2017-04-25', 1, 200000, 'mindanao', 'Castilla', 'Sorsogon', '7104', 'Poblacion', 'San Juan Street', '217', 'Delivered'),
(17, 15, 5, 'Dyron', 0, '2017-03-27', '2017-03-30', 1, 100000, 'luzon', 'JKB', 'JKB', 'JKB', 'UIBJ', 'bulcivlBUJC', 'nsdljvn', 'Processing'),
(18, 14, 11, 'sgnwe1`n', 9475293353, '2017-03-29', '2017-04-01', 1, 100000, 'luzon', 'bkl', 'b', '', 'kjbl', 'kb', 'ji', 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `COMMENT_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ART_ID` int(11) NOT NULL,
  `COMMENT_DATE` date NOT NULL,
  `COMMENT_CONTENT` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`COMMENT_ID`, `USER_ID`, `ART_ID`, `COMMENT_DATE`, `COMMENT_CONTENT`) VALUES
(1, 14, 13, '2017-03-21', 'aaaaaaa'),
(2, 15, 8, '2017-09-10', 'fjiog\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `RATING_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ART_ID` int(11) NOT NULL,
  `RATING_VALUE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`RATING_ID`, `USER_ID`, `ART_ID`, `RATING_VALUE`) VALUES
(1, 14, 13, 5),
(2, 15, 6, 4),
(3, 15, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `USER_FNAME` varchar(30) NOT NULL,
  `USER_MNAME` varchar(30) DEFAULT NULL,
  `USER_LNAME` varchar(30) NOT NULL,
  `USER_GENDER` varchar(10) NOT NULL,
  `USER_AGE` int(11) NOT NULL,
  `USER_BDAY` date NOT NULL,
  `USER_CONTACT` bigint(11) NOT NULL,
  `USER_MUNICIPAL` varchar(50) DEFAULT NULL,
  `USER_PROVINCE` varchar(50) DEFAULT NULL,
  `USER_ZIPCODE` varchar(10) DEFAULT NULL,
  `USER_BRGY` varchar(50) DEFAULT NULL,
  `USER_STREET` varchar(50) DEFAULT NULL,
  `USER_HOUSE_NUMBER` varchar(10) DEFAULT NULL,
  `user_email` varchar(100) NOT NULL,
  `USER_TYPE` varchar(20) NOT NULL,
  `User_imagepath` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `username`, `password`, `USER_FNAME`, `USER_MNAME`, `USER_LNAME`, `USER_GENDER`, `USER_AGE`, `USER_BDAY`, `USER_CONTACT`, `USER_MUNICIPAL`, `USER_PROVINCE`, `USER_ZIPCODE`, `USER_BRGY`, `USER_STREET`, `USER_HOUSE_NUMBER`, `user_email`, `USER_TYPE`, `User_imagepath`) VALUES
(5, 'admin', 'admin', 'Admin', 'Ba', 'Ako', 'Male', 0, '1998-02-08', 9301959762, 'Bulan', 'Sorsogon', '102', 'Zone 6', 'loilo st', '99', 'austinzunigapogi@gmail.com', 'Admin', ''),
(13, 'ruby', 'ruby', 'Ruby Mae', 'G.', ' Regilme', 'Female', 0, '1997-01-13', 9950888808, 'Ligao City', 'Albay', '4504', 'Sta. Cruz', 'Kalye 12 St.', '1001', 'rubymaeregilme@gmail.com', 'Artist', ''),
(14, 'austin', 'austin', 'Earl Austin', 'A', 'Zuniga', 'Male', 0, '1998-08-02', 9061790058, 'Bulan', 'Sorsogon', '999', 'Zone 6', 'loilo st', '12', 'earlaustinavilazuniga@gmail.com', 'Customer', ''),
(15, 'dyron', 'dyron', 'Dyron', '', 'Luniraria', 'Male', 0, '0000-00-00', 9090909, '', '', '', '', '', '', 'dyron@gmail.com', 'Customer', ''),
(16, 'dy', 'dy', 'Dyron', '', 'Laurinaria', 'Male', 0, '0000-00-00', 9475293353, '', '', '', '', '', '', 'dyron.laurinaria@bicol-u.edu.ph', 'Artist', 'banner-992.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art_work`
--
ALTER TABLE `art_work`
  ADD PRIMARY KEY (`ART_ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `COMMENT_ID` (`COMMENT_ID`);

--
-- Indexes for table `buy_transaction`
--
ALTER TABLE `buy_transaction`
  ADD PRIMARY KEY (`TRANSACTION_ID`),
  ADD KEY `ART_ID` (`ART_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`COMMENT_ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `ART_ID` (`ART_ID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RATING_ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `ART_ID` (`ART_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art_work`
--
ALTER TABLE `art_work`
  MODIFY `ART_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `buy_transaction`
--
ALTER TABLE `buy_transaction`
  MODIFY `TRANSACTION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `RATING_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `art_work`
--
ALTER TABLE `art_work`
  ADD CONSTRAINT `art_work_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `art_work_ibfk_2` FOREIGN KEY (`COMMENT_ID`) REFERENCES `comment` (`COMMENT_ID`) ON DELETE CASCADE;

--
-- Constraints for table `buy_transaction`
--
ALTER TABLE `buy_transaction`
  ADD CONSTRAINT `buy_transaction_ibfk_1` FOREIGN KEY (`ART_ID`) REFERENCES `art_work` (`ART_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `buy_transaction_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`ART_ID`) REFERENCES `art_work` (`ART_ID`) ON DELETE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`ART_ID`) REFERENCES `art_work` (`ART_ID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
