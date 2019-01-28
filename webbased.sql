-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 05:04 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbased`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin123', '$2y$10$Q0K3r2GfQEsgt4pvPnyAJO1q6SCidI8/YvLZIFawOtX9R9VhHf26u', '2018-05-19 21:54:28'),
(2, 'admin', '$2y$10$Q0K3r2GfQEsgt4pvPnyAJO1q6SCidI8/YvLZIFawOtX9R9VhHf26u', '2018-05-19 21:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `fanswer`
--

CREATE TABLE `fanswer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fquestions`
--

CREATE TABLE `fquestions` (
  `id` int(4) NOT NULL,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `image`, `name`, `price`, `description`) VALUES
(1, 'dapne.jpg', 'Interviewing: A Practical Guide for Students and Professionals', 170.95, 'Interviews are increasingly a core part of life in commerce, the professions and in higher education, yet few people are aware of the many skills needed to be a good interviewer. Interviewing: A Practical Guide for Students and Professionals is an invaluable guide for all those looking to improve their interviewing skills, whether they are experienced professionals or beginners'),
(2, 'diana.jpg', 'The BIID Interior Design Job Book', 299.90, 'The BIID Interior Design Job Book is the first book to set out the professional standard for running an interior design project. It does so step by step, in a sequence designed to complement the construction industry\'s standard Plan of Work, providing guidance at every stage of a job from appraisal of the client\'s requirements through to completion.'),
(3, 'lola.jpg', 'Resume Writing Made Easy', 205.00, 'A Practical Guide provides time-tested techniques for creating powerful resumes and cover letters that get noticed');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uID` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NRIC` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `vision` text NOT NULL,
  `TelephoneNo` varchar(255) NOT NULL,
  `Uaddress` varchar(255) NOT NULL,
  `postalcode` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `Fqualification` varchar(255) NOT NULL,
  `Fyear` varchar(255) NOT NULL,
  `Fschool` varchar(255) NOT NULL,
  `Fgrade` varchar(255) NOT NULL,
  `Squalification` varchar(255) NOT NULL,
  `Syear` varchar(255) NOT NULL,
  `Sschool` varchar(255) NOT NULL,
  `Sgrade` varchar(255) NOT NULL,
  `Tqualification` varchar(255) NOT NULL,
  `Tyear` varchar(255) NOT NULL,
  `Tschool` varchar(255) NOT NULL,
  `Tgrade` varchar(255) NOT NULL,
  `Cname` varchar(255) NOT NULL,
  `Cdate` varchar(255) NOT NULL,
  `Caddress` varchar(255) NOT NULL,
  `Cno` varchar(255) NOT NULL,
  `Crespon` varchar(255) NOT NULL,
  `CresponF` varchar(255) NOT NULL,
  `CresponS` varchar(255) NOT NULL,
  `CresponT` varchar(255) NOT NULL,
  `CresponE` varchar(255) NOT NULL,
  `Adetails` varchar(255) NOT NULL,
  `SdetailsF` varchar(255) NOT NULL,
  `SdetailsS` varchar(255) NOT NULL,
  `SdetailsT` varchar(255) NOT NULL,
  `FirstL` varchar(255) NOT NULL,
  `SecondL` varchar(255) NOT NULL,
  `IdetailsF` varchar(255) NOT NULL,
  `IdetailsS` varchar(255) NOT NULL,
  `IdetailsT` varchar(255) NOT NULL,
  `IdetailsE` varchar(255) NOT NULL,
  `Rname` varchar(255) NOT NULL,
  `Rposition` varchar(255) NOT NULL,
  `Rwork` varchar(255) NOT NULL,
  `Raddress` varchar(255) NOT NULL,
  `Rno` varchar(255) NOT NULL,
  `Remail` varchar(255) NOT NULL,
  `RnameF` varchar(255) NOT NULL,
  `RpositionF` varchar(255) NOT NULL,
  `RworkF` varchar(255) NOT NULL,
  `RaddressF` varchar(255) NOT NULL,
  `RnoF` varchar(255) NOT NULL,
  `RemailF` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uID`, `userid`, `FirstName`, `LastName`, `Email`, `NRIC`, `password`, `website`, `vision`, `TelephoneNo`, `Uaddress`, `postalcode`, `city`, `region`, `twitter`, `instagram`, `Fqualification`, `Fyear`, `Fschool`, `Fgrade`, `Squalification`, `Syear`, `Sschool`, `Sgrade`, `Tqualification`, `Tyear`, `Tschool`, `Tgrade`, `Cname`, `Cdate`, `Caddress`, `Cno`, `Crespon`, `CresponF`, `CresponS`, `CresponT`, `CresponE`, `Adetails`, `SdetailsF`, `SdetailsS`, `SdetailsT`, `FirstL`, `SecondL`, `IdetailsF`, `IdetailsS`, `IdetailsT`, `IdetailsE`, `Rname`, `Rposition`, `Rwork`, `Raddress`, `Rno`, `Remail`, `RnameF`, `RpositionF`, `RworkF`, `RaddressF`, `RnoF`, `RemailF`) VALUES
(2, 'ads', 'sacukq', 'MASRI', 'SHADOWDEVO94@GMAIL.COM', '123123', '1234', 'asdasd', 'asdas', '0145992635', 'LOT 721 JALAN BATU BIAH', 98700, 'LIMBANG', 'SARAWAK', 'asdad', 'xczx', 'nvbnv', 'dfgdftertert', 'ertert', 'ertret', 'ertet', 'ete', 'tee', 'treteteerter', 'ertert', 'etet', 'et', 'etet', '2012 - 2014etete', 'tete', 'tert', 'etet', 'etert', 'etet', 'etet', 'ete', 'trete', 'tetert', 'erter', 'teteter', 'tetert', 'ertert', 'erter', 'terter', 'tertert', 'ertreter', 'tertert', 'erte', 'erte', 'tertertret', 'ertreter', 'tet', 'eterter', 'etet', 'tretertert', 'ertert', 'teter', 'erterter', 'terte'),
(3, 'ira123', 'Ira', 'fazira', 'ira@gmail.com', '123123', '1234', 'www.ira.com', 'visionary', '0145992635', 'LOT 721 JALAN BATU BIAH, 98700 LIMBANG SARAWAK', 98700, 'LIMBANG', 'SARAWAK', 'ira', 'ira', 'degree', '2012', 'unimas', '4.0', 'diploma', '2012', 'politeknik', '4.0', 'spm', '2011', 'smk', '3a', 'sinyang', '2012', 'kuchin', '1231214', 'techinician', 'watcing', 'dancing', 'walking', 'spying', 'asdas', 'asdasd', 'sadas', 'dasd', 'dsada', 'dsad', 'dasd', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'gfd', 'hg', 'jhgj', 'hgjh', 'gjh', 'ghjg', 'hgjh', 'gjhg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `fanswer`
--
ALTER TABLE `fanswer`
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `fquestions`
--
ALTER TABLE `fquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fquestions`
--
ALTER TABLE `fquestions`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
