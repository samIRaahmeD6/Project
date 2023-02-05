-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 04:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(11) NOT NULL,
  `text` longtext NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `text`, `date`) VALUES
(1, 'ddd', '2022-12-19'),
(8, 'There are many variations of passages of Lorem Ipsum available, but the ', '2022-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `member_reg`
--

CREATE TABLE `member_reg` (
  `id` int(11) NOT NULL,
  `club_name` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `uni_id` int(11) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `admission_year` varchar(100) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_reg`
--

INSERT INTO `member_reg` (`id`, `club_name`, `full_name`, `uni_id`, `dept_name`, `semester`, `gender`, `dob`, `admission_year`, `mobile_no`, `email`, `password`, `status`, `date`) VALUES
(1, 'sports club', 'Saikat Hossain', 11201214, 'cse', 'spring', 'male', '10-10-2001', '2020', '01452201934', 'shossain201214@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2022-12-30 04:20:02'),
(2, 'computer club', 'Samira Ahmed', 11201167, 'cse', 'spring', 'female', '13-11-2001', '2020', '01310944012', 'sahmed201167@bscse.uiu.ac.bd', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-12-30 04:20:02'),
(3, 'computer club', 'Imon Hossain', 11201225, 'cse', 'spring', 'male', '10-10-2001', '2020', '01452201934', 'ihossain201215@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2022-12-30 04:20:02'),
(7, 'cultural club', 'Eashrat Jahan', 11201165, 'cse', 'spring', 'female', '13-11-2001', '2020', '01452201934', 'ejahan201165@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 0, '2022-12-30 04:20:02'),
(9, 'sias', 'Shahriar Sarker', 11201230, 'cse', 'spring', 'male', '10-10-2001', '2020', '01452201934', 'ssarker201230@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 0, '2022-12-30 04:20:02'),
(10, 'cultural club', 'Sumaiya Jahan', 11201111, 'cse', 'spring', 'female', '20-11-2000', '2018', '01201146654', 'sjahan201111@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2022-12-30 04:20:02'),
(11, 'sports club', 'Shahriar Sarker', 11201230, 'cse', 'spring', 'male', '10-10-2001', '2020', '01452201934', 'ssarker201230@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 0, '2022-12-30 04:20:02'),
(12, 'app forum', 'Sumaiya Jahan', 11201111, 'cse', 'summer', 'female', '20-11-2000', '2018', '01201146654', 'sjahan201111@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2022-12-30 04:20:02'),
(13, 'cultural club', 'Suraiya Islam', 11201111, 'civil engineering', 'summer', 'male', '20-11-2000', '2014', '01201146654', 'sjahan201111@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2022-12-30 04:20:02'),
(19, 'cultural club', 'Mithila Akhter', 11202345, 'cse', 'spring', 'female', '20-10-2022', '2014', '01201146654', 'makhter202345@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2022-12-30 04:20:02'),
(20, 'cultural club', 'Mithila Akhter', 11202345, 'cse', 'spring', 'female', '10-02-1999', '2016', '01201146654', 'makhter202345@bscse.uiu.ac.bd', '81b073de9370ea873f548e31b8adc081', 0, '2022-12-30 04:20:02'),
(21, 'cultural club', 'Saikat Hossain', 11201230, 'eee', 'spring', 'male', '10-10-2001', '2017', '01452201934', 'shossain201214@bscse.uiu.ac.bd', '827ccb0eea8a706c4c34a16891f84e7b', 0, '2022-12-30 04:20:02'),
(22, 'cultural club', 'Nazmul Huda', 11201224, 'cse', 'spring', 'male', '10-02-2000', '2016', '01310944012', 'nhuda201224@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 0, '2022-12-30 04:20:02'),
(23, 'computer club', 'Samira Ahmed', 11201167, 'civil engineering', 'spring', 'female', '13-11-2001', '2017', '01310944012', 'sahmed201167@bscse.uiu.ac.bd', '827ccb0eea8a706c4c34a16891f84e7b', 0, '2022-12-30 04:20:02'),
(24, 'cultural club', 'Saikat Hossain', 11201189, 'civil engineering', 'spring', 'male', '13-11-2001', '2018', '01452201934', 'shossain201214@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 0, '2022-12-30 04:20:02'),
(25, 'sports club', 'Imon Hossain', 11201112, 'cse', 'spring', 'male', '13-11-2001', '2018', '01310944012', 'ihossain201215@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 0, '2022-12-30 04:20:02'),
(26, 'sias', 'Shahriar Sarker', 11201934, 'cse', 'spring', 'male', '10-02-2000', '2016', '01310944012', 'ssarker201230@bscse.uiu.ac.bd', '827ccb0eea8a706c4c34a16891f84e7b', 0, '2022-12-30 04:20:02'),
(27, 'cultural club', 'Eashrat Jahan', 11201165, 'cse', 'spring', 'female', '21-20-2000', '2021', '01452201934', 'ejahan201165@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 0, '2022-12-30 04:20:02'),
(28, 'computer club', 'Saikat Hossain', 11201214, 'cse', 'spring', 'male', '10-02-2000', '2017', '01320388493', 'shossain201214@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2022-12-30 04:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` longtext NOT NULL,
  `club_type` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `text`, `club_type`, `type`, `date`) VALUES
(135, 'img1.jpg', '', 'Computer Club', 'All', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `registerd_users`
--

CREATE TABLE `registerd_users` (
  `reg_id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `post_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstname`, `lastname`, `email`, `password`) VALUES
(6, 'Samira', 'Ahmed', 'samira@ac.bd', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Saikat', 'Hossain', 'saikat@ac.bd', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Admin', 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(11, 'Mithila', 'Akhter', 'mithila@ac.bd', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_reg`
--
ALTER TABLE `member_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerd_users`
--
ALTER TABLE `registerd_users`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `registerd_users_ibfk_1` (`post_id`);

--
-- Indexes for table `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saved_ibfk_1` (`post_id`),
  ADD KEY `saved_ibfk_2` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `member_reg`
--
ALTER TABLE `member_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `registerd_users`
--
ALTER TABLE `registerd_users`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registerd_users`
--
ALTER TABLE `registerd_users`
  ADD CONSTRAINT `registerd_users_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saved`
--
ALTER TABLE `saved`
  ADD CONSTRAINT `saved_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `saved_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
