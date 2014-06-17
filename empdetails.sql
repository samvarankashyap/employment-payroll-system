-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2013 at 03:08 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE IF NOT EXISTS `empdetails` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `middlename` varchar(20) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(6) CHARACTER SET utf8 NOT NULL,
  `fathername` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mothername` varchar(20) CHARACTER SET utf8 NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(300) CHARACTER SET utf8 NOT NULL,
  `postalcode` varchar(10) CHARACTER SET utf8 NOT NULL,
  `city` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `state` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `religion` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `caste` varchar(20) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(300) CHARACTER SET utf8 NOT NULL,
  `lti` varchar(5) CHARACTER SET utf8 NOT NULL,
  `fred` date NOT NULL,
  `frjd` date NOT NULL,
  `adhaar` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pan` varchar(20) CHARACTER SET utf8 NOT NULL,
  `std` varchar(10) CHARACTER SET utf8 NOT NULL,
  `landline` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `fax` varchar(20) NOT NULL,
  `designation` varchar(20) CHARACTER SET utf8 NOT NULL,
  `appiontmenttype` varchar(20) CHARACTER SET utf8 NOT NULL,
  `programme` varchar(50) CHARACTER SET utf8 NOT NULL,
  `course` varchar(50) CHARACTER SET utf8 NOT NULL,
  `da` int(5) NOT NULL,
  `ftorpt` varchar(20) NOT NULL,
  `doj` date NOT NULL,
  `hra` int(20) NOT NULL,
  `gross` int(20) NOT NULL,
  `payscale` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pf` int(20) NOT NULL,
  `allowance` int(20) NOT NULL,
  `qual1` varchar(20) CHARACTER SET utf8 NOT NULL,
  `yopq1` varchar(20) NOT NULL,
  `pomq1` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mosq1` varchar(20) CHARACTER SET utf8 NOT NULL,
  `noiq1` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nouq1` varchar(20) CHARACTER SET utf8 NOT NULL,
  `qual2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `yopq2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pomq2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mosq2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `noiq2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nouq2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `qual3` varchar(20) CHARACTER SET utf8 NOT NULL,
  `yopq3` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pomq3` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mosq3` varchar(20) CHARACTER SET utf8 NOT NULL,
  `noiq3` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nouq3` varchar(20) CHARACTER SET utf8 NOT NULL,
  `te` int(10) NOT NULL,
  `tte` int(10) NOT NULL,
  `re` int(10) NOT NULL,
  `bankac` varchar(30) CHARACTER SET utf8 NOT NULL,
  `patents` varchar(500) CHARACTER SET utf8 NOT NULL,
  `isph` varchar(5) CHARACTER SET utf8 NOT NULL,
  `basic` bigint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`id`, `title`, `surname`, `firstname`, `middlename`, `gender`, `fathername`, `mothername`, `dob`, `address`, `postalcode`, `city`, `state`, `religion`, `caste`, `photo`, `lti`, `fred`, `frjd`, `adhaar`, `pan`, `std`, `landline`, `mobile`, `email`, `fax`, `designation`, `appiontmenttype`, `programme`, `course`, `da`, `ftorpt`, `doj`, `hra`, `gross`, `payscale`, `pf`, `allowance`, `qual1`, `yopq1`, `pomq1`, `mosq1`, `noiq1`, `nouq1`, `qual2`, `yopq2`, `pomq2`, `mosq2`, `noiq2`, `nouq2`, `qual3`, `yopq3`, `pomq3`, `mosq3`, `noiq3`, `nouq3`, `te`, `tte`, `re`, `bankac`, `patents`, `isph`, `basic`) VALUES
(1, 'mrs', 'dsads', 'sads', 'asdasds', 'female', 'ssdaas', 'sdasad', '2014-01-08', 'sadasdsasd', '500028', 'sadas', 'dsaass', 'dass', 'sdass', 'dsadasssad', 'no', '2013-01-22', '2013-01-19', '123456778', '2233455', '080', '23835748', '7416572393', 'sam@gmail.com', '32344', 'asstprof', 'teaching', 'engineering', 'cse', 213, 'ft', '2014-01-15', 212, 232, 'dsd', 233, 233, 'phd', '1992', '34', 'distance', 'ssss', 'asdasds', 'phd', '1992', '44', 'distance', 'asdas', 'dass', 'phd', '1994', '88', 'fulltime', 'mss', 'sadsd', 8, 23, 23, '1234455', 'dsdfdf asdasdd sa sdada', 'no', 234545),
(2, 'mrs', 'dsad', 'sad', 'asdasd', 'female', 'sdaas', 'sdaad', '2013-01-08', 'sadasdasd', '500018', 'sada', 'dsaas', 'das', 'sdas', 'dsadassad', 'no', '2013-01-22', '2013-01-19', '12234233', 'sdasd', '040', '23835748', '7416572393', 'sam@gmail.com', '3232', 'professor', 'teaching', 'engineering', 'it', 21, 'ft', '2013-01-15', 21, 23, 'sadasd', 23, 23, 'phd', '1992', '88', 'distance', 'sadas', 'asdas', 'phd', '1992', '66', 'distance', 'asda', 'das', 'phd', '1994', '33', 'fulltime', 'dsa', 'sad', 2, 2, 2, '234234', 'dsdfdf asdasdd sa ', 'no', 0),
(3, 'mrs', 'dsad', 'sad', 'asdasd', 'female', 'sdaas', 'sdaad', '2013-01-08', 'sadasdasd', '500018', 'sada', 'dsaas', 'das', 'sdas', 'dsadassad', 'yes', '2013-01-22', '2013-01-19', '324324324', 'sdasd', '040', '23835748', '7416572393', 'adsadsam@gmail.com', '32223', 'professor', 'teaching', 'engineering', 'it', 21, 'ft', '2013-01-15', 21, 23, 'sadasd', 23, 23, 'phd', '1992', '88', 'distance', 'sadas', 'asdas', 'phd', '1992', '66', 'distance', 'asda', 'das', 'phd', '1994', '99', 'fulltime', 'dsa', 'sad', 2, 2, 2, '23432234', 'dsdfdf asdasdd sa ', 'no', 0),
(4, 'mr', 'dsad', 'sad', 'asdasd', 'male', 'sdaas', 'sdaad', '2013-01-08', 'sadasdasd', '500018', 'sada', 'dsaas', 'das', 'sdas', 'dsadassad', 'no', '2013-01-22', '2013-01-19', '23423432423', 'sdasd', '08672', '23835748', '7416572393', 'adsadsam@gmail.com', '2323', 'professor', 'teaching', 'engineering', 'it', 21, 'pt', '2013-01-15', 21, 23, 'sadasd', 23, 23, 'ms', '1992', '88', 'distance', 'sadas', 'asdas', 'ms', '1992', '66', 'distance', 'asda', 'das', 'ms', '1994', '55', 'fulltime', 'dsa', 'sad', 2, 2, 2, '23423423', 'dsdfdf asdasdd sa ', 'no', 0),
(5, 'mr', 'suename', 'name', 'middlename', 'male', 'sdaas', 'sdaad', '2013-01-08', 'sadasdasd', '500018', 'sada', 'dsaas', 'das', 'sdas', 'dsadassad', 'yes', '2013-01-22', '2013-01-19', '23423453', 'sdasd', '08672', '23835748', '7416572393', 'adsadsam@gmail.com', '23223', 'professor', 'teaching', 'engineering', 'it', 21, 'pt', '2013-01-15', 21, 23, 'sadasd', 23, 23, 'ms', '1992', '88', 'distance', 'sadas', 'asdas', 'ms', '1992', '66', 'distance', 'asda', 'das', 'ms', '1994', '77', 'fulltime', 'dsa', 'sad', 2, 2, 2, '24234323', 'dsdfdf asdasdd sa ', 'no', 0),
(6, 'mr', 'suename', 'name', 'middlename', 'male', 'sdaas', 'sdaad', '2013-01-08', 'sadasdasd', '500018', 'sada', 'dsaas', 'das', 'sdas', 'dsadassad', 'no', '2013-01-22', '2013-01-19', '32423432', 'sdasd', '080', '23835748', '7416572393', 'adsadsam@gmail.com', '2332', 'professor', 'teaching', 'engineering', 'it', 21, 'ft', '2013-01-15', 21, 23, 'sadasd', 23, 23, 'phd', '1992', '77', 'distance', 'sadas', 'asdas', 'phd', '1992', '66', 'distance', 'asda', 'das', 'phd', '1994', '77', 'fulltime', 'dsa', 'sad', 2, 2, 2, '32423423', 'dsdfdf asdasdd sa ', 'no', 0),
(7, 'mr', 'das', 'asdas', 'asdasd', 'male', 'sdaas', 'sdaad', '2013-01-08', 'sadasdasd', '500018', 'sada', 'dsaas', 'das', 'sdas', 'dsadassad', 'yes', '2013-01-22', '2013-01-19', '32424324', 'sdasd', '081', '23835748', '7416572393', 'sam@gmail.com', '23223', 'professor', 'teaching', 'engineering', 'it', 21, 'pt', '2013-01-15', 21, 23, 'sadasd', 23, 23, 'ms', '1992', '77', 'distance', 'sadas', 'asdas', 'ms', '1992', '66', 'distance', 'asda', 'das', 'ms', '1994', '77', 'fulltime', 'dsa', 'sad', 2, 2, 2, '23432423', 'dsdfdf asdasdd sa ', 'no', 0),
(8, 'mr', 'das', 'asdas', 'asdasd', 'male', 'asdasd', 'asdas', '1992-08-12', 'sadasdasd', '500018', 'sada', 'dsaas', 'das', 'sdas', 'dsadassad', 'no', '2013-01-22', '2013-01-19', '4534534', 'sdasd', '080', '23835748', '7416572393', 'sam@gmail.com', '23223', 'professor', 'teaching', 'engineering', 'it', 21, 'pt', '2013-01-15', 21, 23, 'sadasd', 23, 23, 'ms', '1992', '77', 'distance', 'sadas', 'asdas', 'ms', '1992', '66', 'distance', 'asda', 'das', 'ms', '1994', '78', 'fulltime', 'dsa', 'sad', 2, 2, 2, '234324234', 'dsdfdf asdasdd sa ', 'no', 0),
(9, 'mr', 'sds', 'asdas', 'asdasd', 'male', 'asdasd', 'asdas', '1992-08-12', 'dsfsdfsdfsd', '222222', 'sdff', 'fsdfsd', 'sdfsdf', 'sdas', 'dsadassad', 'no', '2013-01-22', '2013-01-19', '324235332', 'sdasd', '040', '23835748', '7416572393', 'sam@gmail.com', '2323', 'professor', 'teaching', 'engineering', 'it', 21, 'pt', '2013-01-15', 21, 23, 'sadasd', 23, 23, 'ms', '1992', '66', 'distance', 'sadas', 'asdas', 'ms', '1992', '66', 'distance', 'asda', 'das', 'ms', '1994', '78', 'fulltime', 'dsa', 'sad', 2, 2, 2, '324324234', 'dsdfdf asdasdd sa ', 'no', 0),
(10, 'mr', 'das', 'asdas', 'asdasd', 'male', 'asdasd', 'asdas', '1992-08-12', 'zxczxczxc', '222222', 'sdff', 'fsdfsd', 'sdfsdf', 'sdfsdfsd', 'pepflashplayer.dll', 'no', '2013-01-22', '2013-01-19', '324235523', 'sdasd', '0890', '23835748', '7416572393', 'sam@gmail.com', 'sda', 'professor', 'teaching', 'engineering', 'it', 21, 'pt', '2013-01-15', 21, 23, 'sadasd', 23, 23, 'ms', '1992', '66', 'distance', 'sadas', 'asdas', 'ms', '1992', '66', 'distance', 'asda', 'das', 'ms', '1994', '86', 'fulltime', 'dsa', 'sad', 2, 2, 2, '423423', 'dsdfdf asdasdd sa ', 'no', 0),
(11, 'mr', 'das', 'asdas', 'asdasd', 'male', 'asdasd', 'asdas', '1992-08-12', 'sadasdsad', '222222', 'sdff', 'fsdfsd', 'sdfsdf', 'sadsadas', 'pepflashplayer.dll', 'no', '1992-08-12', '1992-08-12', '23432433', '34242', '24332', '324324', '7416572393', 'sam@gmail.com', '234', 'professor', 'teaching', 'engineering', 'it', 21, 'pt', '2013-01-15', 21, 23, 'sadasd', 23, 23, 'ms', '1992', '66', 'distance', 'sadas', 'asdas', 'ms', '1992', '66', 'distance', 'asda', 'das', 'ms', '1994', '65', 'distance', 'dsa', 'sad', 2, 2, 2, '23423432', 'dsdfdf asdasdd sa ', 'no', 0),
(12, 'mrs', 'das', 'asdas', 'asdasd', 'female', 'asdasd', 'asdas', '1992-08-12', 'asdasdsa', '222222', 'asdsad', 'asdsad', 'sdfsdf', 'sdfsdfsd', 'pepflashplayer.dll', 'no', '1992-08-12', '1992-08-12', '234324332', '34242', '24332', '324324', '3243243', 'sam@gmail.com', '234', 'asstprof', 'teaching', 'engineering', 'it', 23, 'ft', '2013-01-15', 21, 23, 'sadasd', 23, 23, 'ms', '1992', '66', 'distance', 'sadas', 'asdas', 'ms', '1992', '66', 'distance', 'asda', 'das', 'ms', '1994', '54', 'distance', 'dsa', 'sad', 2, 2, 2, '23424423', 'dsdfdf asdasdd sa ', 'yes', 0),
(13, 'mr', 'das', 'asdas', 'asdasd', 'male', 'asdasd', 'asdas', '1992-08-12', 'sadas', '222222', 'sdff', 'sdaa', 'sdfsdf', 'sdfsdfsd', 'manifest.json', 'no', '1992-08-12', '1992-08-12', '2343243323', '34242', '24332', '324324', '3243243', 'sam@gmail.com', '234', 'asstprof', 'teaching', 'engineering', 'cse', 23, 'ft', '1992-08-12', 332, 234324, 'sada', 2222, 234234, 'ms', '1992', '66', 'distance', 'sadas', 'asdas', 'ms', '1992', '66', 'distance', 'asda', 'das', 'ms', '1994', '55', 'distance', 'dsa', 'sad', 2, 2, 2, '3423423', 'sadasdsadsa', 'no', 0),
(14, 'mrs', 'das', 'asdas', 'asdasd', 'female', 'asdasd', 'asdas', '1992-08-12', 'asdsa', '222222', 'sdff', 'fsdfsd', 'sdfsdf', 'sdfsdfsd', 'pepflashplayer.dll', 'no', '1992-08-12', '1992-08-12', '23423525', '34242', '24332', '324324', '3243243', 'sam@gmail.com', '234', 'asstprof', 'teaching', 'engineering', 'cse', 23, 'ft', '1992-08-12', 332, 234324, 'sad', 2222, 234234, 'ms', '1992', '66', 'fulltime', 'sadasdasd', 'asdsadsd', 'ms', '1992', '66', 'distance', 'asda', 'das', 'ms', '1994', '44', 'distance', 'dsa', 'sad', 2, 3, 4, '3423423', 'sdaadsasa', 'no', 0),
(15, 'mr', 'das', 'asdas', 'asdasd', 'male', 'asdasd', 'asdas', '1992-08-12', 'sadasdsa', '222222', 'sdff', 'dsadas', 'sdfsdf', 'sdfsdfsd', 'pepflashplayer.dll', 'no', '1992-08-12', '1992-08-12', '234234234', '34242', '24332', '324324', '3243243', 'nagini1969@gmail.com', '234', 'asstprof', 'teaching', 'engineering', 'cse', 23, 'ft', '1992-08-12', 332, 234324, 'asd', 324324, 234234, 'phd', '1992', '12', 'fulltime', 'sadasdasd', 'asdsadsd', 'phd', '1992', '66', 'fulltime', 'asdsadasd', 'sdsadas', 'phd', '1994', '77', 'distance', 'dsa', 'sad', 2, 3, 4, '3423423', 'asdas', 'no', 0),
(16, 'mrs', 'das', 'asdas', 'sadas', 'female', 'asdasd', 'dasd', '1992-08-12', 'sadsadsad', '342423', 'sdff', 'dassad', 'sdfsdf', 'sdfsdfsd', 'pepflashplayer.dll', 'no', '1992-08-12', '1992-08-12', '23432432432', '34242', '24332', '324324', '3243243', 'sam@gmail.com', '234', 'asstprof', 'teaching', 'engineering', 'cse', 23, 'ft', '1992-08-12', 332, 234324, 'sadsa', 324324, 234234, 'phd', '1992', '66', 'fulltime', 'sadasdasd', 'asdsadsd', 'phd', '1992', '66', 'fulltime', 'asdsadasd', 'sdsadas', 'phd', '1994', '77', 'fulltime', 'asdsad', 'sadasdasd', 2, 3, 4, '3423423', 'sadasdasdasdf\r\nsammmm', 'no', 0),
(17, 'mr', 'das', 'asdas', 'sadasd', 'male', 'asdasd', 'asdas', '1992-08-12', 'assadsa', '222222', 'sdff', 'fsdfsd', 'sdfsdf', 'sdfsdfsd', 'pepflashplayer.dll', 'no', '1992-08-12', '1992-08-12', '32423423', '34242', '24332', '324324', '3243243', 'sam@gmail.com', '234', 'asstprof', 'teaching', 'engineering', 'cse', 23, 'ft', '1992-08-12', 332, 234324, '', 324324, 234234, 'phd', '1992', '66', 'fulltime', 'sadasdasd', 'sadas', 'phd', '1992', '66', 'fulltime', 'asdsadasd', 'sdsadas', 'phd', '1994', '88', 'fulltime', 'asdsad', 'sadsa', 1, 3, 4, '3423423', '', 'no', 0),
(18, 'mr', 'rallabandi', 'samvaran', 'kashyap', 'male', 'kavithaprasad', 'naginidevi', '1992-08-21', 'timbu enclave motinagar hyderabad', '500018', 'hyderabad', 'andhrapradesh', 'hindu', 'bcd', 'manifest.json', 'no', '2013-08-12', '2009-08-12', '123545443', '124345', '040', '23835748', '7416572393', 'samvaran2best@gmail.com', '', 'professor', 'teaching', 'engineering', 'cse', 100, 'ft', '1992-08-12', 800000, 800000, 'high', 2147483647, 5000, 'phd', '2013', '99', 'fulltime', 'carnagiemellon', 'MIT', 'phd', '2012', '99', 'fulltime', 'mgit', 'jntu', 'mtech', '1994', '99', 'fulltime', 'mgit', 'jntu', 15, 15, 15, '938837267', 'everything', 'no', 0),
(19, 'mr', 'sadasd', 'asdsa', 'adsd', 'male', 'asdsad', 'adsas', '2013-08-11', 'asdasdasd', '500018', 'hyderabad', 'Andhrapradesh', 'hioin', 'ihi', 'setup.xml', 'no', '2013-08-11', '2013-08-11', '7326872367', '871236', '876', '32234234', '917416572393', 'samvaran2best@gmail.com', '2312131', 'asstprof', 'teaching', 'engineering', 'cse', 213123, 'ft', '2013-08-11', 32423, 3242, '3232', 32432, 324234, 'phd', '2011', '11', 'fulltime', 'mgit', 'mhyg', 'phd', '1992', '99', 'fulltime', 'xkfsdm', 'kenfsk', 'phd', '2012', '22', 'fulltime', 'jojoasj', 'kdakldnm', 2, 2, 2, '42374832748', 'asdasdasdas', 'no', 23434),
(20, 'mr', 'rallabandi', 'samvaran', 'kashyap', 'male', 'kavithaprasad', 'naginidevi', '1992-08-21', 'timbu enclave motinagar hyderabad', '500018', 'hyderabad', 'andhrapradesh', 'hindu', 'bcd', '', 'no', '2013-08-12', '2009-08-12', '12354544', '124345', '040', '23835748', '7416572393', 'samvaran2best@gmail.com', '2333', 'professor', 'teaching', 'engineering', 'cse', 100, 'ft', '1992-08-12', 800000, 800000, 'high', 2147483647, 5000, 'phd', '2013', '99', 'fulltime', 'carnagiemellon', 'MIT', 'phd', '2012', '99', 'fulltime', 'mgit', 'jntu', 'phd', '2011', '99', 'fulltime', 'mgit', 'jntu', 15, 15, 15, '938837267', 'everythings', 'no', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
