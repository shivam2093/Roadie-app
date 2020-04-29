-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2017 at 04:42 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `rodi`
--

-- --------------------------------------------------------

--
-- Table structure for table `addreq`
--

CREATE TABLE `addreq` (
  `addreq_id` int(11) NOT NULL auto_increment,
  `id` int(11) NOT NULL,
  `disc` varchar(100) NOT NULL,
  `t_add` varchar(500) NOT NULL,
  `t_cid` int(11) NOT NULL,
  `f_add` varchar(50) NOT NULL,
  `f_cid` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`addreq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `addreq`
--


-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `addr` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `phone`, `city`, `state`, `country`, `addr`) VALUES
(3, 'Harsh', 'patelharsh397@gmail.com', '12345', '7778931154', 'Nadiad', 'Gujarat', 'India', 'Uttarsanda'),
(4, 'Shivam', 'shivam.patel2093@yahoo.in', '12345', '8460520494', 'Nadiad', 'Gujarat', 'india', 'Patel Society Nadiad');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `bid_id` int(11) NOT NULL auto_increment,
  `trans_id` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `disc` varchar(100) NOT NULL,
  `terms` varchar(100) NOT NULL,
  `req_id` int(10) NOT NULL,
  `except` int(1) NOT NULL,
  PRIMARY KEY  (`bid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bid_id`, `trans_id`, `price`, `disc`, `terms`, `req_id`, `except`) VALUES
(15, 13, 5000, 'jbhvhv', 'hvhvh', 22, 1),
(16, 13, 500, 'luggage', 'hi', 22, 0),
(17, 13, 500, 'luggage', 'this', 24, 0),
(18, 16, 50000, 'hhvh', 'jjbjb', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(10) NOT NULL auto_increment,
  `cname` varchar(30) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`, `sid`) VALUES
(1, 'Anand', 0),
(2, 'Vadodara', 0),
(3, 'Bharuch', 0),
(4, 'Surat', 0),
(5, 'Nadiad', 0),
(6, 'Ahmedabad', 0),
(7, 'Bhavnagar', 1),
(17, 'Bharuch', 1),
(18, 'Rajkot', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `coid` int(10) NOT NULL auto_increment,
  `coname` varchar(30) NOT NULL,
  PRIMARY KEY  (`coid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`coid`, `coname`) VALUES
(1, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(10) NOT NULL auto_increment,
  `fname` varchar(500) NOT NULL,
  PRIMARY KEY  (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `fname`) VALUES
(1, 'the'),
(2, 'very');

-- --------------------------------------------------------

--
-- Table structure for table `myfav`
--

CREATE TABLE `myfav` (
  `myid` int(10) NOT NULL auto_increment,
  `uid` int(10) NOT NULL,
  `spid` int(10) NOT NULL,
  PRIMARY KEY  (`myid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `myfav`
--

INSERT INTO `myfav` (`myid`, `uid`, `spid`) VALUES
(11, 23, 13),
(13, 39, 13),
(14, 32, 13),
(15, 40, 13),
(16, 30, 14);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(10) NOT NULL auto_increment,
  `sname` varchar(30) NOT NULL,
  `coid` int(11) NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`, `coid`) VALUES
(1, 'Gujarat', 0),
(2, 'Maharashtra', 0),
(3, 'Delhi', 0),
(4, 'Punjab', 0),
(5, 'Madhya Pradesh', 0),
(8, 'rajasthan', 1),
(9, 'bihar', 1),
(11, 'Bharuch', 1),
(12, 'Mumbai', 1),
(13, 'Mumbai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transreg`
--

CREATE TABLE `transreg` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `addr` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `transreg`
--

INSERT INTO `transreg` (`id`, `name`, `email`, `pass`, `phone`, `city`, `state`, `country`, `addr`) VALUES
(13, 'yax1', 'yaxbahuk@gmail.com', '12345', '84605204941', '3', 'Gujarat', 'India', 'patel'),
(14, 'darshan', 'darshan@gmail.com', '123', '8460520494', '1', 'Gujarat', 'India', 'grid'),
(15, 'Happy', 'Happy@gmail.com', '12345', '4568958656', '5', 'Gujarat', 'India', 'Nadiad'),
(16, 'rahul patel', 'patelrahul@gmail.com', '12345', '7778931154', '1', 'Gujarat', 'India', 'ANAND');

-- --------------------------------------------------------

--
-- Table structure for table `useraddreq`
--

CREATE TABLE `useraddreq` (
  `id` int(10) NOT NULL auto_increment,
  `userid` int(10) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `To_City` varchar(50) NOT NULL,
  `To_State` varchar(50) NOT NULL,
  `To_Country` varchar(50) NOT NULL,
  `To_Address` varchar(250) NOT NULL,
  `From_City` varchar(50) NOT NULL,
  `From_State` varchar(50) NOT NULL,
  `From_Country` varchar(50) NOT NULL,
  `From_Address` varchar(250) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `useraddreq`
--

INSERT INTO `useraddreq` (`id`, `userid`, `Description`, `To_City`, `To_State`, `To_Country`, `To_Address`, `From_City`, `From_State`, `From_Country`, `From_Address`, `date`, `time`) VALUES
(22, 23, 'Moving', '1', '1', '1', '56 raj ', '2', '1', '1', '50', '1-1-1900', '14:16'),
(23, 35, 'I want to move Anand to Baroda', '1', '1', '1', '84 vv nagar', '1', '1', '1', '56 BBC tower ', '12-5-2017', '22:22'),
(24, 27, 'luggage', '1', '1', '1', '17,patel society', '5', '1', '1', '10,ganesh chowk', '31-5-2017', '11:38'),
(25, 30, 'move ', '2', '1', '1', '56 rajkaml', '1', '1', '1', '289 azad pod', '17-5-2017', '8');

-- --------------------------------------------------------

--
-- Table structure for table `usereg`
--

CREATE TABLE `usereg` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `addr` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `usereg`
--

INSERT INTO `usereg` (`id`, `name`, `email`, `pass`, `phone`, `city`, `state`, `country`, `addr`) VALUES
(23, 'deep', 'deep@gmail.com', '12345', '4564646464', '1', 'Gujarat', 'India', 'greed'),
(24, 'harsh', 'deep@gmail.com', '123', '1234567890', '1', 'Gujarat', 'India', 'anand'),
(27, 'deep', 'd@gmail.com', '123', '12345678992', 'anand', 'gujarat', 'india', 'grif'),
(28, 'deep', 'd@gmail.com', '123', '12345678992', 'anand', 'gujarat', 'india', 'grif'),
(29, 'deep', 'd@gmail.com', '123', '12345678992', 'anand', 'gujarat', 'india', 'grif'),
(30, 'Harsh', 'patelharsh@gmail.com', '12345', '1234567890', '5', 'Gujarat', 'India', 'Vaniya vad'),
(31, 'deep', 'deep@gamil.com', '12345', '1234567890', '1', 'Gujarat', 'India', 'anand'),
(32, 'shivam', 'shivam.patel2093@yahoo.in', '123', '8460520494', '1', 'Gujarat', 'India', 'ghf'),
(33, 'yax', 'yaxbahuk@gmail.com', '12345', '8560430696', '1', 'Gujarat', 'India', 'grid'),
(34, 'juned memon', 'jmemon.799@gmail.com', '1234567898', '9979109677', '2', 'Gujarat', 'India', 'fatehgunj'),
(35, 'Rahul', 'Rahulpatel@gmail.com', '12345', '8546521642', '1', 'Gujarat', 'India', 'vv nagar'),
(36, 'harsh', 'harsh@gmail.com', '12345', '8460240393', '1', 'Gujarat', 'India', 'uttarsanda'),
(37, 'shivam', 'shivam123@gmail.com', '12345', '8460520494', '1', 'Gujarat', 'India', 'ahmedabad'),
(38, 'darshan', 'darshan@gmail.com', '123', '8460520494', '1', 'Gujarat', 'India', 'grid'),
(39, 'Nikhil ', 'Nikhilpatel8347@gmail.com', '12345', '9033985286', '1', 'Gujarat', 'India', 'Adas'),
(40, 'Rahul', 'Rahul@gmail.com', '12345', '8956234159', '1', 'Gujarat', 'India', 'Anand');
