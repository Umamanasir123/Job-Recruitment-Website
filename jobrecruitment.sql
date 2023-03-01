-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 09:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobrecruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appdetails`
--

CREATE TABLE `appdetails` (
  `detailsId` int(11) NOT NULL,
  `education` varchar(80) NOT NULL,
  `document` blob DEFAULT NULL,
  `resume` blob DEFAULT NULL,
  `experience` varchar(30) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `projects` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appdetails`
--

INSERT INTO `appdetails` (`detailsId`, `education`, `document`, `resume`, `experience`, `skills`, `projects`) VALUES
(1, 'Masters', '', '', 'Yes', 'Supply chain', '55000'),
(15, 'Graduate', 0x2853452d3230303437292e706e67, '', '', '', '0'),
(16, 'Graduate', '', '', 'No', 'Front end developer', '45000'),
(17, 'Ned, Little hearts, Adamjee', 0x316c6f67696e2e6a7067, 0x726573702e706e67, 'suzuki, trainee', 'Front end developer', 'elearning app'),
(18, 'Ned,  Delhi college', '', '', 'suzuki motors trainee', 'Supply chain', 'elearning app'),
(19, 'NUST,PECHS,Orchard School', 0x555044415445442054455354532e646f6378, '', 'Systems Limited', 'Front end developer', 'elearning app, Book shop'),
(20, 'Ned,  Delhi college', '', '', 'suzuki, trainee', 'Supply chain', 'EBook shop'),
(21, 'Ned, Little hearts, comecs', '', '', 'suzuki motors trainee', 'Developer', 'elearning app, Book shop'),
(22, 'Ned, Little hearts, Adamjee', '', '', 'Systems Limited', 'Developer', 'elearning app, Book shop'),
(23, 'NUST,Orchard School', '', '', 'Systems Limited', 'Backend developer', 'Shopping website'),
(24, '', '', '', '', '', ''),
(25, 'NUST,PECHS,Orchard School', 0x756d616d61666565732e706466, '', 'no', 'Supply chain', 'SAP project');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicantId` int(11) NOT NULL,
  `applicantName` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `cnic` int(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` int(20) NOT NULL,
  `username` varchar(7) NOT NULL,
  `password` varchar(7) NOT NULL,
  `detailsId` int(10) NOT NULL,
  `bookmarks` int(11) DEFAULT NULL,
  `statuss` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicantId`, `applicantName`, `gender`, `dob`, `province`, `city`, `cnic`, `email`, `contact`, `username`, `password`, `detailsId`, `bookmarks`, `statuss`) VALUES
(1, 'Nasir', 'Male', '1996-10-23', 'Sindh', 'Karachi', 2147483647, 'qs@gmail.com', 332514212, 'qas01', 'qa234', 1, NULL, 'WORKING'),
(2, 'Asif', 'Male', '1990-07-13', 'Sindh', 'Karachi', 2147483647, 'zb@gml.com', 2147483647, 'ibr04', '123ui', 15, 0, ''),
(3, 'Arsalan', 'male', '0000-00-00', 'Sindh', 'Karachi', 2142512618, 'ars12@gmail.com', 335213361, 'arsal12', 'aw12', 16, 0, ''),
(25, 'Qasim', 'Male', '1998-07-01', 'Baluchistan', 'Gawadar', 2147483647, 'ra@gmail.com', 2147483647, 'abr041', 'ali87', 17, 0, ''),
(26, 'Qasim', 'Male', '2022-07-07', 'Sindh', 'Karachi', 2147483647, 'tal@gmail.com', 321543, 'uma12', 'asas', 18, 0, ''),
(27, 'Rauf', 'Male', '2022-07-22', 'Sindh', 'Karachi', 2147483647, 'ra@gmail.com', 2147483647, 'ras01', 'RAU56', 0, 0, ''),
(28, 'Mahnoor', 'Female', '2022-07-03', 'Baluchistan', 'Gawadar', 2147483647, 'mah@gmail.com', 2147483647, 'mah65', 'mah6543', 0, 0, ''),
(29, 'Asif', 'Male', '2022-07-05', 'Sindh', 'Karachi', 2147483647, 'zb@gml.com', 2147483647, 'as0f1', 'asif1', 19, 0, ''),
(30, 'Mahnoor', 'Female', '2022-07-28', 'Punjab', 'Multan', 2147483647, 'tal@gmail.com', 32154376, 'man76', 'mah654', 20, 0, ''),
(31, 'Manzoor', 'Male', '2022-07-06', 'Sindh', 'Karachi', 2147483647, 'zb@gml.com', 2147483647, 'man65', '453ew', 22, 0, ''),
(32, 'hamza', 'Male', '2022-06-30', 'Sindh', 'Karachi', 2147483647, 'ra@gmail.com', 2147483647, 'ham56', 'hg54', 23, 0, ''),
(33, '', '', '0000-00-00', 'Sindh', 'Karachi', 0, '', 0, '', '', 24, 0, ''),
(34, 'Sobia', 'Female', '1994-06-02', 'Sindh', 'Karachi', 2147483647, 'sob123@gmail.com', 332354475, 'sob098', 's123', 25, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `applicantapplied`
--

CREATE TABLE `applicantapplied` (
  `applicantId` int(10) NOT NULL,
  `jobId` int(10) NOT NULL,
  `statuss` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicantapplied`
--

INSERT INTO `applicantapplied` (`applicantId`, `jobId`, `statuss`) VALUES
(1, 1, 'accepted'),
(1, 1, 'accepted'),
(1, 1, 'accepted'),
(1, 1, 'accepted'),
(1, 1, 'accepted'),
(1, 1, 'accepted'),
(1, 2, 'No-response'),
(2, 1, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `applicantoffered`
--

CREATE TABLE `applicantoffered` (
  `jobId` int(10) NOT NULL,
  `applicantId` int(10) NOT NULL,
  `statuss` varchar(40) NOT NULL,
  `recruiterId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicantoffered`
--

INSERT INTO `applicantoffered` (`jobId`, `applicantId`, `statuss`, `recruiterId`) VALUES
(1, 1, '', 0),
(1, 1, 'no-response', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(10) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `purchased` int(10) NOT NULL,
  `borrowed` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `quantity`, `purchased`, `borrowed`) VALUES
(1, 'Harry porter ', 12, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryNumber` int(12) NOT NULL,
  `categoryName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryNumber`, `categoryName`) VALUES
(1, 'Database'),
(2, 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `jobposts`
--

CREATE TABLE `jobposts` (
  `category` int(10) NOT NULL,
  `jobId` int(10) NOT NULL,
  `jobTitle` varchar(40) NOT NULL,
  `salary` int(30) NOT NULL,
  `timings` varchar(50) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `location` varchar(30) NOT NULL,
  `recruiterId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobposts`
--

INSERT INTO `jobposts` (`category`, `jobId`, `jobTitle`, `salary`, `timings`, `designation`, `location`, `recruiterId`) VALUES
(1, 1, 'Database Manager', 30000, '9am-5pm', 'manager', 'Karachi', 1),
(2, 2, 'Web Engineer', 50000, '9am-5pm', 'trainee', 'Multan', 1),
(1, 3, 'Database Manager', 45000, '9am-5:30pm', 'assistant', 'Lahore', 0),
(3, 4, 'Mechanical Analyst', 56000, '9am-5:30pm', 'Mechanical Engineer', 'Lahore', 0),
(3, 5, 'Mechanical Analyst', 90000, '8:30am-6:30pm', 'Assistant Engineer', 'Faisalabad', 0),
(5, 6, 'Wire Management', 78000, '9am-5pm', 'Electrical Trainee Engineer', 'Karachi', 0),
(7, 7, 'Reaction Analyst', 80000, '9am-5:30pm', 'Nuclear/Polymer Trainee ', 'Lahore', 0),
(8, 8, 'Formula/Chemical Analyst', 75000, '8:30am-6:30pm', 'Manager', 'Karachi', 0),
(2, 9, 'Web Engineer', 90000, '9am-6pm', 'Manager', 'Lahore', 1);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `queryId` int(18) NOT NULL,
  `postDescription` varchar(100) NOT NULL,
  `response` varchar(100) DEFAULT NULL,
  `responseTime` time DEFAULT NULL,
  `postingTime` time NOT NULL,
  `applicantId` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`queryId`, `postDescription`, `response`, `responseTime`, `postingTime`, `applicantId`) VALUES
(1, 'I have issue in uploading my documents', '   First reduce your file size then try again', '10:31:32', '08:22:29', 1),
(2, 'I found issue in uploading my picture.', 'Please convert your pic in png format', '07:38:18', '02:20:23', 2),
(3, 'I have issues in creating account.', NULL, NULL, '08:22:29', 1),
(4, 'I have picture uploading problem', '  Please reduce file size and then check .', '06:23:36', '04:25:09', 4),
(5, 'I can\'t access login page. ', NULL, NULL, '08:29:46', 2),
(6, 'I have issues in accessing login page.', ' Please refresh your screen first', '07:10:00', '10:11:33', 4),
(7, 'My registration form is not opening.', ' Refresh your browser then open it', '02:23:36', '10:36:56', 5),
(8, 'Issue in editing my info/details', '  Please try again ', '10:09:11', '07:17:16', 2),
(9, 'many issues in uploading cv', NULL, NULL, '00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `recruiterId` int(18) NOT NULL,
  `recruiterName` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `companyRegistrationId` int(18) NOT NULL,
  `contactNo` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`recruiterId`, `recruiterName`, `username`, `password`, `companyRegistrationId`, `contactNo`, `email`) VALUES
(1, ' Ali', ' ali12', ' abc123', 100, '033456121', ' ali12@gmail.com'),
(2, 'Fahad', 'fahad34', 'def34', 200, '03312456212', 'fah@gmail.com'),
(3, 'umama', 'uma123', 'um345', 300, '03122264993', 'uma@gmail.com'),
(4, 'ibrahim', 'ras01', 'ras12', 1200, '021346554322', 'qs@gml.com'),
(8, 'osama', 'osama12', 'osm98', 500, 'osama@gmail.com', '03321453232'),
(9, 'Umama', 'uma122', 'un0807', 800, '03323544790', 'um@gmail.com'),
(10, 'Muhammad Aslam', 'aslam12', 'ASl345', 800, '033212313', 'aslam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `webadmin`
--

CREATE TABLE `webadmin` (
  `adminId` int(5) NOT NULL,
  `adminName` varchar(20) NOT NULL,
  `username` varchar(13) NOT NULL,
  `password` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webadmin`
--

INSERT INTO `webadmin` (`adminId`, `adminName`, `username`, `password`) VALUES
(1, 'Noman', 'nom98', 'noman12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appdetails`
--
ALTER TABLE `appdetails`
  ADD PRIMARY KEY (`detailsId`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicantId`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryNumber`);

--
-- Indexes for table `jobposts`
--
ALTER TABLE `jobposts`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`queryId`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`recruiterId`);

--
-- Indexes for table `webadmin`
--
ALTER TABLE `webadmin`
  ADD PRIMARY KEY (`adminId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appdetails`
--
ALTER TABLE `appdetails`
  MODIFY `detailsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicantId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryNumber` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobposts`
--
ALTER TABLE `jobposts`
  MODIFY `jobId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `queryId` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `recruiterId` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `webadmin`
--
ALTER TABLE `webadmin`
  MODIFY `adminId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
