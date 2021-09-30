-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 11:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `adminName`, `adminUser`, `adminEmail`, `adminPass`, `level`) VALUES
(3, 'Md Rafiq', 'admin', 'mtrajpathbangladeshltd@gmail.com', '01760058679', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `title`, `description`) VALUES
(9, 'Why do you choose us?', '<p><span>MT Rajpath Bangladesh Ltd has&nbsp;full-fledged&nbsp;leading multi business company in Bangladesh and fully well certified Compnay Provided By government of Bangladesh.</span></p>'),
(10, 'What Services are you Provided?', '<p>Please check our Service option. Here you will be acknowledged about all services we provided.</p>'),
(11, 'Where are you located?', '<p>254/1, Haji Sonamia Market (3<sup>rd</sup> Floor), Mahmod Nagar, Signboard (North),&nbsp;&nbsp; &nbsp;Demra, Dhaka.</p>'),
(12, 'How do I contact your company if my question isn’t answered here?', '<p><span>Please contact directly with us. here is the contact number <strong>+880</strong></span><strong>9612113322. </strong>You will get more contact information in our contact section. Thank you.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `image`) VALUES
(2, 'uploads/slider/bd3bdfedb9.jpg'),
(3, 'uploads/slider/4131319306.jpg'),
(4, 'uploads/slider/2bc7df67e8.jpg'),
(7, 'uploads/slider/148841eedd.jpg'),
(8, 'uploads/slider/b38b2a47f9.jpg'),
(9, 'uploads/slider/19c8a3dc72.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `shortDescription` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `name`, `title`, `shortDescription`, `image`, `fb`, `tw`, `ln`) VALUES
(8, 'Masud Khan', 'Chairman', 'He is responsible for leading the Board', 'Uploads/f6cc0c376e.jpg', 'https://www.facebook.com/profile.php?id=100047267811122', '', ''),
(9, 'Freedom Fighter Ahsanulla', 'Director', 'The  decision maker of our Company', 'Uploads/fd2a4b5dbc.jpg', '', '', ''),
(10, 'Asaduzzaman Tushar', 'Managing of Director', 'He is supervise and stirrs our company\'s operations,', 'Uploads/14908cc27b.jpg', '', '', ''),
(11, 'N/A', 'N/A', 'N/A', 'Uploads/d419ede640.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_why`
--

CREATE TABLE `tbl_why` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_why`
--

INSERT INTO `tbl_why` (`id`, `title`, `description`) VALUES
(14, 'Who you are?', 'MT Rajpath Bangladesh Ltd has&nbsp;full-fledged&nbsp;leading multi business company in Bangladesh'),
(15, 'What is the aim of MT Rajpath Bangladesh Ltd ?', 'MT Rajpath Bangladesh (Ltd) aim to bring a positive change in Bangladesh and make huge Job platform for the job seekers.'),
(16, 'Why do you trust us ?', 'Trust is earn, not demanded. If you have faith on us then give us opportunity, then we will make sure you will not regret and we will surely earn yours as well as everyone else\'s trust.'),
(17, 'Where are you located?', '54/1, Haji Sonamia Market (3<sup>rd</sup> Floor), Mahmod Nagar, Signboard (North),&nbsp;&nbsp; &nbsp;Demra, Dhaka.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_why`
--
ALTER TABLE `tbl_why`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_why`
--
ALTER TABLE `tbl_why`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
