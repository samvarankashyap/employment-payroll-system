-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2013 at 05:39 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE IF NOT EXISTS `empdetails` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `mothername` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(300) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `lti` varchar(5) NOT NULL,
  `fred` date NOT NULL,
  `frjd` date NOT NULL,
  `adhaar` varchar(20) NOT NULL,
  `pan` varchar(20) NOT NULL,
  `std` varchar(10) NOT NULL,
  `landline` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `appiontmenttype` varchar(20) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `da` int(5) NOT NULL,
  `ftorpt` varchar(20) NOT NULL,
  `doj` date NOT NULL,
  `hra` int(20) NOT NULL,
  `gross` int(20) NOT NULL,
  `payscale` varchar(20) NOT NULL,
  `pf` int(20) NOT NULL,
  `allowance` int(20) NOT NULL,
  `qual1` varchar(20) NOT NULL,
  `yopq1` varchar(20) NOT NULL,
  `pomq1` varchar(20) NOT NULL,
  `mosq1` varchar(20) NOT NULL,
  `noiq1` varchar(20) NOT NULL,
  `nouq1` varchar(20) NOT NULL,
  `qual2` varchar(20) NOT NULL,
  `yopq2` varchar(20) NOT NULL,
  `pomq2` varchar(20) NOT NULL,
  `mosq2` varchar(20) NOT NULL,
  `noiq2` varchar(20) NOT NULL,
  `nouq2` varchar(20) NOT NULL,
  `qual3` varchar(20) NOT NULL,
  `yopq3` varchar(20) NOT NULL,
  `pomq3` varchar(20) NOT NULL,
  `mosq3` varchar(20) NOT NULL,
  `noiq3` varchar(20) NOT NULL,
  `nouq3` varchar(20) NOT NULL,
  `te` int(10) NOT NULL,
  `tte` int(10) NOT NULL,
  `re` int(10) NOT NULL,
  `bankac` varchar(30) NOT NULL,
  `patents` varchar(500) NOT NULL,
  `isph` varchar(5) NOT NULL,
  `basic` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`id`, `title`, `surname`, `firstname`, `middlename`, `gender`, `fathername`, `mothername`, `dob`, `address`, `postalcode`, `city`, `state`, `religion`, `caste`, `photo`, `lti`, `fred`, `frjd`, `adhaar`, `pan`, `std`, `landline`, `mobile`, `email`, `fax`, `designation`, `appiontmenttype`, `programme`, `course`, `da`, `ftorpt`, `doj`, `hra`, `gross`, `payscale`, `pf`, `allowance`, `qual1`, `yopq1`, `pomq1`, `mosq1`, `noiq1`, `nouq1`, `qual2`, `yopq2`, `pomq2`, `mosq2`, `noiq2`, `nouq2`, `qual3`, `yopq3`, `pomq3`, `mosq3`, `noiq3`, `nouq3`, `te`, `tte`, `re`, `bankac`, `patents`, `isph`, `basic`) VALUES
(1, 'mr', 'rallabandi', 'samvaran', 'kashyap', 'male', 'rvprasadraju', 'rnaginidevi', '1992-08-21', 'timbu enclave motinagar', '500018', 'hyderabad', 'Andhrapradesh', 'hindu', 'ksdfns', 'chrome.dll', 'no', '2013-01-22', '2009-08-12', '7326872367', '124345', '040', '23835748', '7416572393', 'samvaran2best@gmail.com', '2312131', 'asstprof', 'teaching', 'engineering', 'cse', 31, 'ft', '1992-08-12', 18, 30000, 'senior', 24, 8000, 'phd', '1992', '34', 'fulltime', 'carnagiemellon', 'asdasds', 'phd', '1992', '44', 'fulltime', 'asdas', 'kenfsk', 'phd', '1233', '26', 'fulltime', 'mgit', 'kdakldnm', 22, 2, 15, '42374832748', 'dsdsfsdsdf\r\ndsfdsf\r\nsdfds\r\nfds\r\nfsf', 'no', '27800'),
(2, 'mr', 'rallabandi', 'samvaranrrrr', 'kashyaprrr', 'male', 'asdsad', 'adsas', '1992-08-21', 'xwdxwxwxw', '500018', 'hyderabad', 'Andhrapradesh', 'das', 'bcd', 'apache_pb.gif', 'no', '2013-01-22', '2009-08-12', '7326872367', '124345', '', '2132332', '917416572393', 'samvaran2best@gmail.com', '2333', 'asstprof', 'teaching', 'engineering', 'cse', 213123, 'ft', '2013-01-15', 21, 232, '3232', 23, 233, 'phd', '1992', '34', 'fulltime', 'carnagiemellon', 'asdasds', 'phd', '1992', '44', 'fulltime', 'asdas', 'kenfsk', 'phd', '1994', '26', 'fulltime', 'dsa', 'kdakldnm', 15, 15, 2, '1234455', 'zcsdcdscsdcsdc', 'no', '27800'),
(3, 'mr', 'rallabandi', 'sad', 'kashyap', 'male', 'rvprasadraju', 'adsas', '2013-01-08', 'dfdfvdfvdf', '500018', 'hyderabad', 'Andhrapradesh', 'hioin', 'bcd', 'apache_pb.png', 'no', '2013-08-11', '2009-08-12', '7326872367', '124345', '040', '23835748', '917416572393', 'sam@gmail.com', '2312131', 'asstprof', 'teaching', 'engineering', 'cse', 213123, 'ft', '2013-08-11', 32423, 300000, '3232', 23, 324234, 'phd', '1992', '11', 'fulltime', 'carnagiemellon', 'asdasds', 'phd', '1992', '66', 'fulltime', 'asdas', 'das', 'phd', '1233', '22', 'fulltime', 'mgit', 'kdakldnm', 15, 15, 23, '1234455', 'bdfvdfvdfvdvdvdfv', 'no', '0');

-- --------------------------------------------------------

--
-- Table structure for table `lossofpay`
--

CREATE TABLE IF NOT EXISTS `lossofpay` (
  `pkey` int(100) NOT NULL AUTO_INCREMENT,
  `id` int(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `val` float NOT NULL,
  `reason` varchar(300) NOT NULL,
  PRIMARY KEY (`pkey`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `lossofpay`
--

INSERT INTO `lossofpay` (`pkey`, `id`, `surname`, `firstname`, `middlename`, `date`, `val`, `reason`) VALUES
(3, 2, 'kashyaprrr', 'rallabandi', 'samvaranrrrr', '21-08-2013', 2, 'health'),
(4, 2, 'kashyaprrr', 'rallabandi', 'samvaranrrrr', '21-08-2013', 2, 'jhjkh'),
(5, 2, 'kashyaprrr', 'rallabandi', 'samvaranrrrr', '21-12-2013', 2, 'njbhv'),
(6, 3, 'kashyap', 'rallabandi', 'sad', '21-12-2023', 3, 'jkbhj'),
(7, 1, 'kashyap', 'rallabandi', 'samvaran', '21-12-2015', 1, 'mnkm'),
(8, 2, 'kashyaprrr', 'rallabandi', 'samvaranrrrr', '21-12-2023', 0.5, 'jbhjb'),
(9, 1, 'kashyap', 'rallabandi', 'samvaran', '21-12-2013', 2, 'sdadasd');

-- --------------------------------------------------------

--
-- Table structure for table `mar2013`
--

CREATE TABLE IF NOT EXISTS `mar2013` (
  `id` int(20) NOT NULL DEFAULT '0',
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `da` int(5) NOT NULL,
  `hra` int(20) NOT NULL,
  `gross` int(20) NOT NULL,
  `payscale` varchar(20) NOT NULL,
  `pf` int(20) NOT NULL,
  `allowance` int(20) NOT NULL,
  `basic` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mar2013`
--

INSERT INTO `mar2013` (`id`, `surname`, `firstname`, `middlename`, `da`, `hra`, `gross`, `payscale`, `pf`, `allowance`, `basic`) VALUES
(1, 'rallabandi', 'samvaran', 'kashyap', 31, 18, 30000, 'senior', 24, 8000, '27800'),
(2, 'rallabandi', 'samvaranrrrr', 'kashyaprrr', 213123, 21, 232, '3232', 23, 233, '27800'),
(3, 'rallabandi', 'sad', 'kashyap', 213123, 32423, 300000, '3232', 23, 324234, '0');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` int(20) NOT NULL,
  `password` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
(1, 1234, 1234);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
