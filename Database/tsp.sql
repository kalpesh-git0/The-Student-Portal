-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 09:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin2`
--

CREATE TABLE `admin2` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(250) DEFAULT NULL,
  `EmailId` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `creationdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `QID` varchar(50) DEFAULT NULL,
  `Answer` text DEFAULT NULL,
  `attachment` varchar(100) DEFAULT NULL,
  `author` varchar(120) DEFAULT NULL,
  `postdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `bookname` varchar(260) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `catid` int(11) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `ISBN_no` int(11) DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `regdate` timestamp NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_catagory`
--

CREATE TABLE `book_catagory` (
  `id` int(11) NOT NULL,
  `category` varchar(259) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `creationdate` timestamp NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NOT NULL DEFAULT '2012-11-10 21:01:29' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(130) DEFAULT NULL,
  `EmailId` varchar(130) NOT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `Message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doubts`
--

CREATE TABLE `doubts` (
  `QId` int(11) NOT NULL,
  `stname` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `topic` varchar(60) NOT NULL,
  `question` varchar(500) NOT NULL,
  `Quesattach` varchar(100) DEFAULT NULL,
  `postdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `e_learning_data`
--

CREATE TABLE `e_learning_data` (
  `id` int(11) NOT NULL,
  `subjectCode` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `Title` varchar(250) NOT NULL,
  `attachment` varchar(250) DEFAULT NULL,
  `uploader_name` varchar(120) DEFAULT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `issuedbooks`
--

CREATE TABLE `issuedbooks` (
  `id` int(11) NOT NULL,
  `bookid` int(11) DEFAULT NULL,
  `studentid` varchar(250) DEFAULT NULL,
  `issuedate` timestamp NULL DEFAULT current_timestamp(),
  `returndate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `return_status` int(11) NOT NULL,
  `fine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `library_admin`
--

CREATE TABLE `library_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `emailid` varchar(120) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `updationdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `review_form`
--

CREATE TABLE `review_form` (
  `id` int(11) NOT NULL,
  `teacherid` varchar(250) DEFAULT NULL,
  `semester` int(11) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `total_lectures` int(11) NOT NULL,
  `time_management` int(11) NOT NULL,
  `punctuality` int(11) NOT NULL,
  `regularity` int(11) NOT NULL,
  `student_presence` int(11) NOT NULL,
  `completes_syllabus` int(11) NOT NULL,
  `alternate arrangement` int(11) NOT NULL,
  `subject_command` int(11) NOT NULL,
  `focus` int(11) NOT NULL,
  `self_confidence` int(11) NOT NULL,
  `communication_skills` int(11) NOT NULL,
  `classroom_discussion` int(11) NOT NULL,
  `subject_matter` int(11) NOT NULL,
  `link_subject_to_life` int(11) NOT NULL,
  `reference_to_latest` int(11) NOT NULL,
  `teaching` int(11) NOT NULL,
  `useof_teaching_aids` int(11) NOT NULL,
  `whiteboard` int(11) NOT NULL,
  `innovative_teaching_method` int(11) NOT NULL,
  `aswer_key` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `creationdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `StudentId` varchar(100) DEFAULT NULL,
  `Enroll_no` varchar(250) NOT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `Semester` varchar(10) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `Status` int(1) DEFAULT 1,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `SubjectCode` varchar(100) DEFAULT NULL,
  `subject` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(120) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `emailId` varchar(120) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `mobileno` varchar(11) DEFAULT NULL,
  `regdate` timestamp NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin2`
--
ALTER TABLE `admin2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN_no` (`ISBN_no`);

--
-- Indexes for table `book_catagory`
--
ALTER TABLE `book_catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doubts`
--
ALTER TABLE `doubts`
  ADD PRIMARY KEY (`QId`),
  ADD UNIQUE KEY `QId` (`QId`);

--
-- Indexes for table `e_learning_data`
--
ALTER TABLE `e_learning_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attachment` (`attachment`);

--
-- Indexes for table `issuedbooks`
--
ALTER TABLE `issuedbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_admin`
--
ALTER TABLE `library_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_form`
--
ALTER TABLE `review_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Enroll_no` (`Enroll_no`),
  ADD UNIQUE KEY `StudentId` (`StudentId`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin2`
--
ALTER TABLE `admin2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `book_catagory`
--
ALTER TABLE `book_catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doubts`
--
ALTER TABLE `doubts`
  MODIFY `QId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `e_learning_data`
--
ALTER TABLE `e_learning_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `issuedbooks`
--
ALTER TABLE `issuedbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `library_admin`
--
ALTER TABLE `library_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review_form`
--
ALTER TABLE `review_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
