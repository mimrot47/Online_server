-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 11:50 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rk`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `ROLL10` varchar(10) NOT NULL,
  `OB10` varchar(10) NOT NULL,
  `TOT10` varchar(10) NOT NULL,
  `ROLL12` varchar(10) NOT NULL,
  `OB12` varchar(10) NOT NULL,
  `TOT12` varchar(10) NOT NULL,
  `ROLLG` varchar(10) NOT NULL,
  `OBG` varchar(10) NOT NULL,
  `TOTG` varchar(10) NOT NULL,
  `ROLLP` varchar(10) NOT NULL,
  `OBP` varchar(10) NOT NULL,
  `TOTP` varchar(10) NOT NULL,
  `COR` varchar(20) NOT NULL,
  `CORS` varchar(20) NOT NULL,
  `CORT` varchar(20) NOT NULL,
  `PHOTO` varchar(40) NOT NULL,
  `SIGN` varchar(40) NOT NULL,
  `ADHAR` varchar(40) NOT NULL,
  `PAN` varchar(40) NOT NULL,
  `MARK10` varchar(40) NOT NULL,
  `MARK12` varchar(40) NOT NULL,
  `MARKG` varchar(40) NOT NULL,
  `TC` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `UID`, `ROLL10`, `OB10`, `TOT10`, `ROLL12`, `OB12`, `TOT12`, `ROLLG`, `OBG`, `TOTG`, `ROLLP`, `OBP`, `TOTP`, `COR`, `CORS`, `CORT`, `PHOTO`, `SIGN`, `ADHAR`, `PAN`, `MARK10`, `MARK12`, `MARKG`, `TC`) VALUES
(7, 221228, '12444', '4442', '22323', '3232', '232', '23232', '232', '2323', '3232', '23232', '23232', '2323', '232', '2323', '232', 'download.jpg', 'download.jpg', 'download.jpg', 'download.jpg', 'download.jpg', 'download.jpg', 'DSC_0267 (1).JPG', 'DSC_0267 (1) (1).jpg'),
(11, 148965, 'k1905255', '560', '670', '452', '452', '45', '152', '4512', '1524', '15425', '45786', 'A', 'FORENCIC SCINCES', 'SCINCE', 'NON', 'gokul.jpg', 'download.jpg', 'photo.jpg', 'gokul.jpg', 'gokulsig.jpg', 'pASS.jpg', 'T_c.jpg', 'desktop.jfif'),
(13, 245390, 'k030170', '650', '481', 'r012546', '600', '410', 'bsc scienc', '3500', '2100', '', '', '', 'msc it information t', 'SCIENCE', 'information techolog', 'bamu logo1.jfif', 'bamu logook.jpg', 'bamu logo.jfif', 'bamu logo.jfif', 'bamu logo.jfif', 'bamu logook.jpg', 'bamu logook.jpg', 'bamu logook.jpg'),
(14, 100922, 'gtrfyutg', 'y', 'utjyt', 'rtfgf', 'jyjuhjkyu', 'yhg', 'fg', 'vb', 'tgt', 't', 'f', '', 'g', 'g', 'u', 'IMG_20170701_115740.jpg', 'New Doc 2019-06-07 - Page 1.jpg', 'mscit.jpg', 'New Doc 2019-06-07 - Page 1.jpg', 'New Doc 2019-06-07 - Page 1.jpg', 'IMG_20170701_115740.jpg', 'mscit.jpg', 'IMG_20170701_115740.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASS1` varchar(15) NOT NULL,
  `PASS2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `NAME`, `LNAME`, `EMAIL`, `PASS1`, `PASS2`) VALUES
(1, 'sunil___', 'pawar__', 's@f.com', '1233', '1234'),
(2, 'sunil___', 'pawar__', 's@f.com', '1233', '1234'),
(3, 'Gokul', 'Mimrot', 'mimrot47@gmail.com', '22222', '22222'),
(4, 'Gokul', 'Mimrot', 'mimrot47@gmail.com', '1234', '1234'),
(5, 'Vivek', 'nagre', 'nagrevivek@mail.ocm', 'gikul', 'gikul'),
(6, 'ajay', 'savle', 'gok@g.c', '1234', '1234'),
(7, 'rk', 'rk', 'mimrot47@gmail.com', 'rk', 'rk'),
(8, 'shivaji', 'ghait', 's@f.com', '789456', '789456'),
(9, 'vsn', 'n', 'dfhdhfdk@gmail.com', 'Pa', 'Pa'),
(10, 'vidya', 'mate', 'vm@gmail.com', 'Pass@123', 'Pass@123'),
(11, 'Vivek', 'Nagre', 'vs@gmail.com', 'rk', 'rk'),
(12, 'mustakim', 'patel', 'pmustakim194@gmail.com', '848487msp', '848487msp'),
(13, 'Rahul', 'Gaikwad', 'raps@gmail.com', 'Raps', 'Raps'),
(14, 'e', 'f', 'asdf@gmail.com', 'poiu', 'poiu');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `ADHAR` int(12) NOT NULL,
  `MOB` int(10) NOT NULL,
  `UID` int(6) NOT NULL,
  `SFN` varchar(40) NOT NULL,
  `SMN` varchar(40) NOT NULL,
  `SLN` varchar(40) NOT NULL,
  `FFN` varchar(20) NOT NULL,
  `FMN` varchar(20) NOT NULL,
  `FLN` varchar(20) NOT NULL,
  `MFN` varchar(20) NOT NULL,
  `MMN` varchar(40) NOT NULL,
  `MLN` varchar(40) NOT NULL,
  `MR` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `CHM` varchar(8) NOT NULL,
  `BPLCE` varchar(20) NOT NULL,
  `BGROUP` varchar(4) NOT NULL,
  `STATE` varchar(20) NOT NULL,
  `DIST` varchar(20) NOT NULL,
  `TQ` varchar(20) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `STATE1` varchar(20) NOT NULL,
  `DIST1` varchar(20) NOT NULL,
  `TQ1` varchar(20) NOT NULL,
  `CITY1` varchar(20) NOT NULL,
  `ADDRESS1` varchar(200) NOT NULL,
  `CATAG` varchar(40) NOT NULL,
  `CASTE` varchar(20) NOT NULL,
  `SBCAST` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `ADHAR`, `MOB`, `UID`, `SFN`, `SMN`, `SLN`, `FFN`, `FMN`, `FLN`, `MFN`, `MMN`, `MLN`, `MR`, `DOB`, `CHM`, `BPLCE`, `BGROUP`, `STATE`, `DIST`, `TQ`, `CITY`, `ADDRESS`, `STATE1`, `DIST1`, `TQ1`, `CITY1`, `ADDRESS1`, `CATAG`, `CASTE`, `SBCAST`) VALUES
(7, 12345678, 2147483647, 221228, 'gokul', 'Gokul Mimrot', 'Mimrot', 'FULCHAND   ', 'DEVCHANE   ', 'MIMROT  ', 'SUNITA   ', 'FULCHAND', 'BARANDWAL   ', 'Unmarried', '1997-01-22', 'Male', 'kedarkheda', 'A+', 'mahashtra', 'bhokardan', 'BHOKARDAN', 'bhokardan', 'at kedarkheda', 'mahashtra', 'JALNA', 'BHOKARDAN', 'bhokardan', 'at kedarkheda', 'SC', '    CHAMBHAR  ', 'CHAMH'),
(11, 2147483647, 2147483647, 148965, 'Vivek ', 'Suresh', 'Nagre', 'Suresh', 'Ramesh', 'Nagre', 'sharda', 'kishor', 'doud', 'Unmarried', '1997-06-25', 'Male', 'banegon', 'A+', 'Mahashtra', 'Buldhana', 'BHOKARDAN', 'Bhokardan', 'jalna', 'mahashtra', 'JALNA', 'BHOKARDAN', 'bhokardan', 'at kedarkheda', 'NT', 'vanjari', 'vanjari'),
(13, 84562368, 2147483647, 245390, 'Rahul', 'Raghunath', 'Gaikwad', 'Raghunath', 'Rangnath', 'Gaikwad', 'Kantabai', 'Shamrao', 'more', 'Unmarried', '1996-05-15', 'Male', 'Kannad', 'A+', 'mahashtra', 'aurangabad', 'kannad', 'kannad', 'at Post navjivan coloni ', 'mahashtra', 'JALNA', 'BHOKARDAN', 'bhokardan', 'at kedarkheda', 'SC', 'Mang', 'ffsf'),
(14, 123, 121, 100922, 'bgfg', 'nmhh', 'oppii', 'g', 'kgtb', 'hjg', 'dy', 'dtdf', 'tgh', 'Unmarried', '2010-02-22', 'Male', 'jhygdftyg', 'A+', 'mahashtra', 'bhokardan', 'jhjuh', 'jhj', 'hgg', 'm', 'trvgjhhj', 'hghgh', 'ghghghg', 'ghghghg', 'NT(C)', 'gyhghg', 'hfgfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`,`UID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`,`UID`,`ADHAR`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `UID` (`UID`),
  ADD UNIQUE KEY `ADHAR` (`ADHAR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
