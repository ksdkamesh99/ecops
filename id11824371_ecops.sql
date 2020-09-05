-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2020 at 06:14 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11824371_ecops`
--

-- --------------------------------------------------------

--
-- Table structure for table `arms`
--

CREATE TABLE `arms` (
  `arms_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `pin` varchar(7) NOT NULL,
  `city` varchar(25) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arms`
--

INSERT INTO `arms` (`arms_id`, `name`, `phone`, `email`, `address`, `pin`, `city`, `reason`) VALUES
(1, ' ffhh', ' 09381225838', ' ksdkamesh99@gmail.com', ' Dr no 23.18.20a,2 floor,kota bhavan,vyakaranamvaristreer,s.n.puram,Vijayawada', ' 520011', ' vijayawada', ' bbbbbbbbbbbbbbbbbbbbbbbbbbbbb');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `complaint_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `ps` varchar(25) NOT NULL,
  `date_com` varchar(14) NOT NULL,
  `time_com` varchar(6) NOT NULL,
  `text_complaint` text NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `city` varchar(50) NOT NULL,
  `aadhar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `criminals`
--

CREATE TABLE `criminals` (
  `criminal_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dist` varchar(25) NOT NULL,
  `ps` varchar(25) NOT NULL,
  `firno` varchar(25) NOT NULL,
  `datecrime` varchar(40) NOT NULL,
  `addcrime` text NOT NULL,
  `motive` text NOT NULL,
  `witname` varchar(40) NOT NULL,
  `witadd` text NOT NULL,
  `investname` varchar(50) NOT NULL,
  `investdesig` varchar(40) NOT NULL,
  `investid` varchar(25) NOT NULL,
  `investdate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminals`
--

INSERT INTO `criminals` (`criminal_id`, `name`, `dist`, `ps`, `firno`, `datecrime`, `addcrime`, `motive`, `witname`, `witadd`, `investname`, `investdesig`, `investid`, `investdate`) VALUES
(6, ' harsha', ' Buxar', ' Buxar', ' 11', ' sss', ' Dr no 23.18.20a,2 floor,kota bhavan,vyakaranamvaristreer,s.n.puram,Vijayawada', ' qqqqqqqqqqq', ' ssssssssssss', ' Sone a hostel ,room no 226,rollno1806097,nit patna Nit road, PATNA, BIHAR 800005 India Phone number: 9381225838', ' Kamesh', ' DSP', ' 1', ' 31-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `driving`
--

CREATE TABLE `driving` (
  `driving_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `pincode` varchar(7) NOT NULL,
  `city` varchar(25) NOT NULL,
  `date_com` varchar(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driving`
--

INSERT INTO `driving` (`driving_id`, `name`, `phone`, `email`, `address`, `pincode`, `city`, `date_com`, `reason`) VALUES
(1, ' ffhh', ' 09381225838', ' ksdkamesh99@gmail.com', ' Dr no 23.18.20a,2 floor,kota bhavan,vyakaranamvaristreer,s.n.puram,Vijayawada', ' 520011', ' vijayawada', ' bnmm', ' aaaaaaaaaaaaaaaaaaaaaaaa '),
(2, ' ffhh', ' 09381225838', ' ksdkameh99@gmail.com', ' Dr no 23.18.20a,2 floor,kota bhavan,vyakaranamvaristreer,s.n.puram,Vijayawada', ' 520011', ' vijayawada', ' bnmm', ' aaaaaaaaaaaaaaaaaaaaaaaaaaa '),
(3, ' Sai Durga Kamesh Kota', ' 09381225838', ' ksdkamesh99@gmail.com', ' Dr no 23.18.20a,2 floor,kota bhavan,vyakaranamvaristreer,s.n.puram,Vijayawada', ' 520011', ' vijayawada', ' sss', ' 11111111111 ');

-- --------------------------------------------------------

--
-- Table structure for table `echalan`
--

CREATE TABLE `echalan` (
  `chalan_id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `vechileno` varchar(14) NOT NULL,
  `drivinglicence` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `echalanregno` varchar(40) NOT NULL,
  `amount` varchar(40) NOT NULL,
  `paymentno` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `echalan`
--

INSERT INTO `echalan` (`chalan_id`, `first`, `last`, `vechileno`, `drivinglicence`, `email`, `phone`, `echalanregno`, `amount`, `paymentno`) VALUES
(1, ' Sai Durga Kamesh', ' Kota', ' aa', ' aaaaaaa', ' ksdkamesh99@gmail.com', ' 09381225838', ' aaaaaaaaaaa', ' 500 ', ' 1111111 '),
(2, ' Sai Durga Kamesh', ' Kota', ' aa', ' aaaaaaa', ' ksdkamesh99@gmail.com', ' 09381225838', ' aaaaaaaaaaa', ' 500 ', ' 1111111 ');

-- --------------------------------------------------------

--
-- Table structure for table `firs`
--

CREATE TABLE `firs` (
  `fir_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `pincode` varchar(7) NOT NULL,
  `city` varchar(25) NOT NULL,
  `dis_f` varchar(15) NOT NULL,
  `dir_f` varchar(40) NOT NULL,
  `date_com` varchar(12) NOT NULL,
  `time_com` varchar(10) NOT NULL,
  `text_complaint_acd` text NOT NULL,
  `complaint_wit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `firs`
--

INSERT INTO `firs` (`fir_id`, `name`, `phone`, `email`, `address`, `pincode`, `city`, `dis_f`, `dir_f`, `date_com`, `time_com`, `text_complaint_acd`, `complaint_wit`) VALUES
(1, ' ffhh', ' 09381225838', ' ksdkamesh99@gmail.com', ' Dr no 23.18.20a,2 floor,kota bhavan,vyakaranamvaristreer,s.n.puram,Vijayawada', ' 520011', ' vijayawada', ' 11111111', ' 1111', ' bnmm', ' 122', ' aaaaaaaa', ' aaaaaaaaaaaaaaaaaaaaaaa'),
(2, ' ffhh', ' 09381225838', ' ksdkamesh99@gmail.com', ' Dr no 23.18.20a,2 floor,kota bhavan,vyakaranamvaristreer,s.n.puram,Vijayawada', ' 520011', ' vijayawada', ' 11111111', ' 1111', ' bnmm', ' 122', ' wwwwwwwwwwwwwww', ' wwwwwwwwwwwwwwwwwwwwwwwwww'),
(3, ' harsha', ' 09381225838', ' vnkbjhcgxfghjhg@gmail.com', ' Dr no 23.18.20a,2 floor,kota bhavan,vyakaranamvaristreer,s.n.puram,Vijayawada', ' 520011', ' vijayawada', ' 11111111', ' 1111', ' sss', ' 122', ' aaaaaaaaaa', ' aaaaaaaaaaaaaaaaa'),
(4, ' Sai Durga Kamesh Kota', ' 09381225838', ' ksdkamesh99@gmail.com', ' Dr no 23.18.20a,2 floor,kota bhavan,vyakaranamvaristreer,s.n.puram,Vijayawada', ' 520011', ' vijayawada', ' 11111111', ' 1111', ' bnmm', ' 122', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `helpissues`
--

CREATE TABLE `helpissues` (
  `help_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `issuetype` varchar(40) NOT NULL,
  `issuecomplete` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helpissues`
--

INSERT INTO `helpissues` (`help_id`, `name`, `issuetype`, `issuecomplete`) VALUES
(1, ' ffhh', ' File a complaint', ' aaaaaaaaaaaaaaaaaaa'),
(8, ' aaa', ' Passport Form', ' aaaaaaqqqqqqqqqqqqqqqq'),
(9, ' siddardha', ' Passport Form', ' i have a problem'),
(10, ' harsha', ' File a complaint', ' asdfghjkl'),
(11, ' kamesh', ' Front End', ' I think you should improve it'),
(12, ' ddddddddd', ' File a complaint', ' aaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `informationsharing`
--

CREATE TABLE `informationsharing` (
  `sendid` int(11) NOT NULL,
  `fromdesig` varchar(25) NOT NULL,
  `fromps` varchar(40) NOT NULL,
  `todesig` varchar(40) NOT NULL,
  `tops` varchar(40) NOT NULL,
  `subject` text NOT NULL,
  `text_` text NOT NULL,
  `regards` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informationsharing`
--

INSERT INTO `informationsharing` (`sendid`, `fromdesig`, `fromps`, `todesig`, `tops`, `subject`, `text_`, `regards`) VALUES
(15, 'ASI', 'vijayawada', ' DSP', ' patna(hq)', ' hi', ' hi', 'hi'),
(16, 'DSP', 'patna(hq)', ' ASI', ' ', ' ', ' ', ''),
(17, 'DSP', 'patna(hq)', ' DSP', ' patna(hq)', ' aaaaaaaaaa', ' aaaaaaaaaaaaa', 'aaaaaaaaaaaa'),
(18, 'DSP', 'patna(hq)', ' Inspector', ' Buxar', ' ddddd', ' ydtg', 'rcgjvkbj');

-- --------------------------------------------------------

--
-- Table structure for table `passport`
--

CREATE TABLE `passport` (
  `passport_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `pincode` varchar(7) NOT NULL,
  `city` varchar(25) NOT NULL,
  `reason` text NOT NULL,
  `status` varchar(25) DEFAULT 'verification pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `psdata`
--

CREATE TABLE `psdata` (
  `sno` int(11) NOT NULL,
  `psname` varchar(50) NOT NULL,
  `dsp_id` int(11) NOT NULL,
  `inceptor_id` int(11) NOT NULL,
  `acp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psdata`
--

INSERT INTO `psdata` (`sno`, `psname`, `dsp_id`, `inceptor_id`, `acp_id`) VALUES
(1, 'Buxar', 1, 2, 0),
(2, 'vijayawada', 1, 2, 0),
(3, 'patna(hq)', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `suggessions`
--

CREATE TABLE `suggessions` (
  `suggession_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `suggesstiontype` varchar(40) NOT NULL,
  `suggessioncomplete` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggessions`
--

INSERT INTO `suggessions` (`suggession_id`, `name`, `suggesstiontype`, `suggessioncomplete`) VALUES
(1, ' kamesh', ' Back End', ' I think you should improve it'),
(2, ' kamesh', ' Back End', ' '),
(3, ' ffhh', ' Front End', ' aaaaa'),
(4, ' Sai Durga Kamesh Kota', ' Back End', ' aaaaaaa'),
(5, ' Sai Durga Kamesh Kota', ' Back End', ' eeeeeeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `age` int(25) NOT NULL,
  `dateofbirth` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `desig` varchar(25) NOT NULL,
  `areasundercontrol` varchar(100) NOT NULL,
  `ps` varchar(40) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `age`, `dateofbirth`, `address`, `email`, `username`, `password`, `desig`, `areasundercontrol`, `ps`, `phone`, `image`, `dist`) VALUES
(1, 'Kamesh', 25, '8-10-1987', '8794 Shore Avenue\r\nClementon, NJ 08021', ' ksdkamesh99@gmail.com', 'user1', 'user1', 'DSP', 'BIHAR-EAST', 'patna(hq)', '9246191521', '/ecops/ecops/images_police/user1.jpg', 'Patna'),
(2, 'Arya Kumar', 30, '1-2-1985', '75 Saxon Ave.\r\nPort Orange, FL 32127', 'arya@gmail.com', 'user2', 'user2', 'Inspector', 'Buxar', 'Buxar', '9246491522', '/ecops/ecops/images_police/user2.jpg', 'Buxar'),
(3, 'Rajendra', 42, '1-5-1954', 'Matruchaya, Tilak Road, Kaapad Bazar, Panvel', ' ksdkamesh99@gmail.com', 'user3', 'user3', 'ASI', 'vijayawada', 'vijayawada', '09381225838', '/ecops/ecops/images_police/user3.jpg', 'krishna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arms`
--
ALTER TABLE `arms`
  ADD PRIMARY KEY (`arms_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `criminals`
--
ALTER TABLE `criminals`
  ADD PRIMARY KEY (`criminal_id`);

--
-- Indexes for table `driving`
--
ALTER TABLE `driving`
  ADD PRIMARY KEY (`driving_id`);

--
-- Indexes for table `echalan`
--
ALTER TABLE `echalan`
  ADD PRIMARY KEY (`chalan_id`);

--
-- Indexes for table `firs`
--
ALTER TABLE `firs`
  ADD PRIMARY KEY (`fir_id`);

--
-- Indexes for table `helpissues`
--
ALTER TABLE `helpissues`
  ADD PRIMARY KEY (`help_id`);

--
-- Indexes for table `informationsharing`
--
ALTER TABLE `informationsharing`
  ADD PRIMARY KEY (`sendid`);

--
-- Indexes for table `passport`
--
ALTER TABLE `passport`
  ADD PRIMARY KEY (`passport_id`);

--
-- Indexes for table `psdata`
--
ALTER TABLE `psdata`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `suggessions`
--
ALTER TABLE `suggessions`
  ADD PRIMARY KEY (`suggession_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arms`
--
ALTER TABLE `arms`
  MODIFY `arms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `criminals`
--
ALTER TABLE `criminals`
  MODIFY `criminal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `driving`
--
ALTER TABLE `driving`
  MODIFY `driving_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `echalan`
--
ALTER TABLE `echalan`
  MODIFY `chalan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `firs`
--
ALTER TABLE `firs`
  MODIFY `fir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `helpissues`
--
ALTER TABLE `helpissues`
  MODIFY `help_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `informationsharing`
--
ALTER TABLE `informationsharing`
  MODIFY `sendid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `passport`
--
ALTER TABLE `passport`
  MODIFY `passport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `psdata`
--
ALTER TABLE `psdata`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suggessions`
--
ALTER TABLE `suggessions`
  MODIFY `suggession_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
