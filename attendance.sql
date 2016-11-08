-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 10:34 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_timein`
--

CREATE TABLE IF NOT EXISTS `admin_timein` (
  `username` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `login` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_timeout`
--

CREATE TABLE IF NOT EXISTS `admin_timeout` (
  `username` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `logout` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `idno` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `position` varchar(50) NOT NULL,
  `activation` int(1) NOT NULL,
  `totalhours` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`idno`, `username`, `password`, `fname`, `mname`, `lname`, `position`, `activation`, `totalhours`) VALUES
(1, 'barral_hr', 'barral1234', 'Christian', 'Curitao', 'Barral', 'Admin', 1, 0),
(2, 'jellyace', '123456789', 'angelle', 'Enter Your Middle Name', 'sanico', 'Admin', 1, 0),
(3, 'relnareal', '09275049678relna', 'relna', 'rabi', 'villaser', 'Volunteer', 1, 0),
(4, 'allynster18', 'wayforever', 'allyn', 'yap', 'barral', 'Volunteer', 1, 0),
(5, 'almira07', 'dadhie20', 'kris almira', 'moncada', 'cruz', 'Volunteer', 1, 0),
(6, 'skill shaggy', 'geronimo', 'geronimo', 'delacerna', 'daclan', 'Volunteer', 1, 0),
(7, 'jamesparker', 'lapera', 'ronello', 'Enter Your Middle Name', 'lapera', 'Volunteer', 1, 0),
(8, 'padrikasmut', '739184625123000', 'nicole', 'andrei', 'cabornay', 'Volunteer', 1, 0),
(9, 'arman', 'lapera', 'arman', 'saraga', 'lapera', 'Volunteer', 1, 0),
(10, 'ian', 'markzapanta', 'ian', 'presbitero', 'zapanta', 'Volunteer', 1, 0),
(11, 'cherry', 'cheruzcc05', 'cherry', 'manano', 'cruz', 'Volunteer', 1, 0),
(12, 'roselle', 'alison24', 'roselle', 'cabornay', 'ragasajo', 'Volunteer', 1, 0),
(13, 'pdhaha', '123', 'allan', 'paul', 'alforque', 'Volunteer', 1, 0),
(14, 'dayan', 'aljane', 'april dianne', 'ortiz', 'fernandez', 'Volunteer', 1, 0),
(15, 'glybell', 'winston', 'glybell', 'ag', 'amar', 'Volunteer', 1, 0),
(16, 'joshua', 'ikik', 'joshua', 'ikik', 'ok ok', 'Volunteer', 1, 0),
(17, 'kerker', '12345', 'kerker', 'kerker', 'kerker', 'Volunteer', 1, 0),
(18, 'john', '032357', 'johnlloyd', 'magdasal', 'lapera', 'Volunteer', 1, 0),
(19, 'vd32041', 'dave32041', 'vincent dave', 'lozano', 'cabreros', 'Volunteer', 1, 0),
(20, 'jacint', 'purefoods', 'jacintcarl', 'carl', 'jacint', 'Volunteer', 1, 0),
(21, 'imjmae', 'jessamaecabs', 'jessamae', 'cabarrubias', 'pacquiao', 'Volunteer', 1, 0),
(22, 'abbysam', 'cleadabs', 'abby', 'redoble', 'samson', 'Volunteer', 1, 0),
(23, 'cyndywella', 'cyndywella', 'cyndy', 'binondo', 'tapic', 'Admin', 1, 0),
(24, 'arcenal35', 'arcenalian', 'Arcenal', 'Divinagracia', 'Ahig', 'Volunteer', 1, 0),
(25, 'sweety', 'sweetygaviola', 'sweety', 'moncada', 'gaviola', 'Volunteer', 1, 0),
(27, 'carl', 'carljay', 'carl', 'daclan', 'daclan', 'Volunteer', 1, 0),
(29, 'qwerty2', 'qwerty', 'chaarles', 'stanley', 'catalya', 'Volunteer', 1, 0),
(30, 'claire', 'claire', 'claire', 'moncada', 'abendan', 'Volunteer', 1, 0),
(31, 'qwerty3', 'qwert', 'charlie', 'gentiles', 'amante', 'Volunteer', 1, 0),
(32, 'leah123', 'lopez', 'leahmay', 'abinasa', 'lopez', 'Volunteer', 1, 0),
(33, 'needle00', 'asdf123', 'arnie', 'encienzo', 'edon', 'Volunteer', 1, 0),
(34, 'asdfg', '12345', 'ardel', 'peresores', 'navarro', 'Volunteer', 1, 0),
(36, 'curt', 'cathy', 'curt', 'lopez', 'marabi', 'Volunteer', 1, 0),
(37, 'andre', 'may202000', 'chesmu jon', 'andre', 'canete', 'Volunteer', 1, 0),
(40, 'hannang', 'fckfake', 'Hanna', 'Getuayen', 'Nemil', 'Admin', 1, 0),
(41, 'julius', 'haha', 'julius', 'haha', 'daclan', 'Admin', 1, 0),
(42, 'dessataboada', '0729', 'dessa', 'gimena', 'taboada', 'Admin', 1, 0),
(43, 'sayie', 'Marysayie13', 'sariel', 'abelgas', 'alforque', 'Admin', 1, 0),
(44, 'kenoykenoy', 'kentax', 'kentoy', 'kentoy', 'kentoy', 'Admin', 1, 0),
(45, 'sixsicksex', 'maryjane420', 'April', 'Gwapa', 'Villarino', 'Admin', 1, 0),
(46, 'ralphugo', '123456789', 'Ralph', 'Opada', 'Hugo', 'Admin', 1, 0),
(47, 'Merianintoxicated', '123456789', 'Merian', 'Gutierrez', 'Delos Reyes', 'Admin', 1, 0),
(48, 'pasaguecath', '09232278147', 'catherine', 'cabaÃ±ero', 'pasague', 'Admin', 1, 0),
(49, 'ted', '1231tedbryan', 'ted', 'Gutierrez', 'Delos Reyes', 'Admin', 1, 0),
(50, 'cooper14', 'qweasdzxc123', 'joshua', 'tesalona', 'orellana', 'Admin', 1, 0),
(51, 'ohlage', 'ohlage', 'Kim Brian', 'C.', 'Barral', 'Volunteer', 1, 0),
(52, 'jairen', 'bacaricho', 'Jaison', 'Ancao', 'Cho', 'Admin', 1, 0),
(53, 'justgab', 'gabtejoc', 'John Gabriel', 'Reyes', 'Tejoc', 'Admin', 1, 0),
(54, 'haroldpacana', 'skchairman', 'Harold', 'Summa Cum Laude', 'Pacana', 'Admin', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `trid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `requestor` varchar(50) NOT NULL,
  `releasingofficer` varchar(50) NOT NULL,
  `dates` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `itemno` int(11) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `itemdesc` varchar(50) NOT NULL,
  `itemdateofreg` varchar(20) NOT NULL,
  `itemquantity` bigint(20) NOT NULL,
  `itemrop` int(11) NOT NULL,
  `itemstat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invrequest`
--

CREATE TABLE IF NOT EXISTS `invrequest` (
  `idno` int(11) NOT NULL,
  `itemno` int(11) NOT NULL,
  `requestor` varchar(50) NOT NULL,
  `releasingofficer` varchar(50) NOT NULL,
  `itemquantity` int(11) NOT NULL,
  `dateupdated` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `salesid` int(11) NOT NULL,
  `orid` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `dates` varchar(20) NOT NULL,
  `adultprice` int(11) NOT NULL,
  `childprice` int(11) NOT NULL,
  `cashier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_in`
--

CREATE TABLE IF NOT EXISTS `time_in` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `login` varchar(20) NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_out`
--

CREATE TABLE IF NOT EXISTS `time_out` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `logout` varchar(50) NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`trid`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`itemno`);

--
-- Indexes for table `invrequest`
--
ALTER TABLE `invrequest`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesid`);

--
-- Indexes for table `time_in`
--
ALTER TABLE `time_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_out`
--
ALTER TABLE `time_out`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `idno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `trid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `itemno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invrequest`
--
ALTER TABLE `invrequest`
  MODIFY `idno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `time_in`
--
ALTER TABLE `time_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `time_out`
--
ALTER TABLE `time_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
