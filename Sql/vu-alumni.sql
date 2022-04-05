-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 08:45 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vu-alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Atik Mahmud', 'admin541@gmail.com', 'atik.mahmud', 'e63c792611bbd386344931cfc0cb6576.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE IF NOT EXISTS `archive` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sender` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `feedbackdata` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id`, `sender`, `title`, `feedbackdata`, `attachment`) VALUES
(1, 'Atik Mahmud', 'Atik Mahmud CV', 'Atik Mahmud CV', 'Atik.pdf'),
(2, 'Atik Mahmud', 'Docx', 'Docs', 'atik.docx');

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE IF NOT EXISTS `chatting` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sender` varchar(20) NOT NULL,
  `msg` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `chatting`
--

INSERT INTO `chatting` (`id`, `sender`, `msg`) VALUES
(1, 'Atik Mahmud', 'Hi Friends...!'),
(2, 'Saima Akter Tumpa', 'Hlw Friends...!'),
(3, 'Israt Jahan Ema', 'Whats up guise...'),
(4, 'Atik Mahmud', '123456789'),
(5, 'Atik Mahmud', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sender` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `feedbackdata` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `sender`, `title`, `feedbackdata`, `attachment`) VALUES
(1, 'Atik Mahmud', 'Problem', 'Admit card problem...', 'Admit.png'),
(2, 'Atik Mahmud', 'Solve', 'Solve...', 'Admit.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `id_number` int(9) NOT NULL,
  `batch` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `district` varchar(10) NOT NULL,
  `prjs` varchar(100) NOT NULL,
  `ptjs` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `id_number`, `batch`, `gender`, `birthdate`, `district`, `prjs`, `ptjs`, `mobile`, `email`, `password`, `image`, `status`) VALUES
(1, 'Atik Mahmud', 161311045, 11, 'Male', '1996-11-15', 'Natore', 'Web Developer at Satt IT', 'Web Developer at Atik WorkSpace Ltd.', '01749941982', 'atiikmahmud@gmail.com', 'atik.mahmud', '901bbd838377d484820914a729e6a08f.jpg', 1),
(2, 'Maidul Islam', 161311048, 11, 'Male', '1998-11-10', 'Nawabgonj', 'Not', 'Not', '01743931286', 'moon@gmail.com', '123456', '157073e9bdf21e13591dd9cbdb7d356d.jpg', 1),
(3, 'Sayem Basar', 161311066, 11, 'Male', '1996-11-20', 'Nawabgonj', 'Not', 'Not', '01773367190', 'sayem@gmail.com', '123456', '302c955f50f5eff521dd5d2072715331.jpg', 1),
(4, 'Pronob Haldar', 161311079, 11, 'Male', '1996-12-11', 'Naogoan', 'Not', 'Not', '01767515451', 'pronob@gmail.com', '123456', '3ddb3f12ebc12e50a577c90a163fdcfb.jpg', 1),
(5, 'Khalid Saifullah Arm', 161311041, 11, 'Male', '1996-12-12', 'Nawabgonj', 'Not', 'Not', '01758712517', 'arman@gmail.com', '123456', '117c241d9c1f70b6b3790a9a706b2c72.jpg', 1),
(6, 'Rifa Tasfia Labanna', 161311042, 11, 'Female', '1996-12-12', 'Rangpur', 'Not', 'Not', '01780651811', 'labanna@gmail.com', '123456', 'fe5e1d48b3f44a98e2a7d965ac23736d.jpg', 1),
(7, 'Jerin Sultana', 161311046, 11, 'Female', '1996-11-11', 'Rajshahi', 'Not', 'Not', '01743931286', 'jerin@gmail.com', '123456', '', 1),
(8, 'Lakhi Saha', 161311049, 11, 'Female', '1996-12-12', 'Chuadanga', 'Not', 'Not', '01780651811', 'lakhi@gmail.com', '123456', '24de993cd1ba6c1622377457b49bc249.JPG', 1),
(9, 'Munira Huda Jui', 161311050, 11, 'Female', '1996-11-11', 'Nawabgonj', 'Not', 'Not', '01799301424', 'jui@gmail.com', '123456', '67021da58352a70e9121a6cead18701b.jpg', 1),
(10, 'Galiba Bushra', 161311051, 11, 'Female', '1996-11-11', 'Naogoan', 'Not', 'Not', '01700000000', 'bushra@gmail.com', '123456', '2b7d1d8ba9d9e5a16b8f6fb63ac44a47.jpg', 1),
(11, 'Saima Akter Tumpa', 161311052, 11, 'Female', '1996-12-30', 'Rajshahi', 'Not', 'Not', '01794195154', 'saima@gmail.com', '123456', 'a25527e242002fdd2f7d3085ad314f47.jpg', 1),
(12, 'Israt Jahan Ema', 161311053, 11, 'Female', '1996-02-12', 'Natore', 'Not', 'Not', '01700000000', 'ema@gmail.com', '123456', '119a4e95ec0bf62dfc2f471749796083.jpg', 1),
(13, 'Fariha Afrin Sadia', 161311054, 11, 'Female', '1996-11-11', 'Nawabgonj', 'Not', 'Not', '01700000000', 'sadia@gmail.com', '123456', '7918ea79de0e734b0d5d66d490169fc9.jpg', 1),
(14, 'Wahida Islam Tripti', 161311055, 11, 'Female', '1996-11-11', 'Rajshahi', 'Not', 'Not', '01700000000', 'tripti@gmail.com', '123456', 'e1d93dcbfbc3c03591184bca8aec41d2.JPG', 1),
(15, 'Fatama Tuj Zohora Mu', 161311061, 11, 'Female', '1996-11-11', 'Rajshahi', 'Not', 'Not', '01700000000', 'munni@gmail.com', '123456', '7d51d389c1bfd94bb5e554e2427ad89b.jpg', 1),
(16, 'Rubel Islam', 161311062, 11, 'Male', '1996-11-11', 'Rajshahi', 'Not', 'Not', '01700000000', 'rubel@gmail.com', '123456', '90b09623c79cbafecc4a9cda79d0ba75.jpg', 1),
(17, 'Abir Shium', 161311063, 11, 'Male', '1996-11-11', 'Rajshahi', 'Not', 'Not', '01700000000', 'shium@gmail.com', '123456', '881089271704d5be7058bbdb587a8b7c.jpg', 1),
(18, 'Nawajish Apon', 161311065, 11, 'Male', '1996-11-11', 'Rajshahi', 'Not', 'Not', '01700000000', 'apon@gmail.com', '123456', '5982e89361d7145d47e1d9c5f09e7f89.jpg', 1),
(19, 'Sadi Khan', 161311067, 11, 'Male', '1996-11-11', 'Sirajganj', 'Not', 'Not', '01700000000', 'sadi@gmail.com', '123456', '256b648921abc3e83370492db5bafbbd.jpg', 1),
(20, 'Shahriar Ruposh', 161311068, 11, 'Male', '1996-11-11', 'Rajshahi', 'Not', 'Not', '01700000000', 'ruposh@gmail.com', '123456', '19535e4d50d53b18f84ae7e0723de02e.jpg', 1),
(21, 'Salman Farshe', 161311070, 11, 'Male', '1996-11-11', 'Rajshahi', 'Not', 'Not', '01700000000', 'salman@gmail.com', '123456', '631946e659220b0e6c97a7a636c8b508.jpg', 1),
(22, 'Nupur Saha Nipa', 161311072, 11, 'Female', '1996-11-11', 'Nawabgonj', 'Not', 'Not', '01700000000', 'nipa@gmail.com', '123456', '1ec9d803fcc2302590a4db79f4e1003d.jpg', 1),
(23, 'Mahfujur Rahman Raju', 161311076, 11, 'Male', '1996-11-11', 'Rajshahi', 'Not', 'Not', '01700000000', 'raju@gmail.com', '123456', '31d92f47aa767cf008692ebade3cf90c.jpg', 1),
(24, 'Jarin Tastim Esa', 161311077, 11, 'Female', '1997-11-11', 'Rajshahi', 'Not', 'Not', '01700000000', 'jarin@gmail.com', '123456', '6265bbd14765f2e18289afcf6d3aff17.png', 1),
(25, 'Naimul Haq Dipu', 161311078, 11, 'Male', '1996-11-11', 'Rajshahi', 'Not', 'Not', '01700000000', 'dipu@gmail.com', '123456', '40ab30a82cb28dc9238df90628de5c5a.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_notice`
--

CREATE TABLE IF NOT EXISTS `users_notice` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_notice`
--

INSERT INTO `users_notice` (`id`, `title`, `notice`, `time`) VALUES
(1, 'Happy New Year 2020', 'This day is office holiday...', '2019-12-29 19:02:07'),
(2, 'Friday Office', 'Friday Class will be held on regular time.  ', '2019-12-29 19:02:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
