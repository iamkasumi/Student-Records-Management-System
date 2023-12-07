-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 09:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive-g7`
--

CREATE TABLE `archive-g7` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LRN` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `archive-g8`
--

CREATE TABLE `archive-g8` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LRN` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `archive-g9`
--

CREATE TABLE `archive-g9` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LRN` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `archive-g10`
--

CREATE TABLE `archive-g10` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LRN` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade-7`
--

CREATE TABLE `grade-7` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LRN` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade-8`
--

CREATE TABLE `grade-8` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LRN` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade-9`
--

CREATE TABLE `grade-9` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LRN` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade-10`
--

CREATE TABLE `grade-10` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LRN` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `score-g7`
--

CREATE TABLE `score-g7` (
  `StudentID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Filipino` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `MAPEH` int(11) NOT NULL,
  `AP` int(11) NOT NULL,
  `ESP` int(11) NOT NULL,
  `TLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `score-g8`
--

CREATE TABLE `score-g8` (
  `StudentID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Filipino` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `MAPEH` int(11) NOT NULL,
  `AP` int(11) NOT NULL,
  `ESP` int(11) NOT NULL,
  `TLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `score-g9`
--

CREATE TABLE `score-g9` (
  `StudentID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Filipino` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `MAPEH` int(11) NOT NULL,
  `AP` int(11) NOT NULL,
  `ESP` int(11) NOT NULL,
  `TLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `score-g10`
--

CREATE TABLE `score-g10` (
  `StudentID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Filipino` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `MAPEH` int(11) NOT NULL,
  `AP` int(11) NOT NULL,
  `ESP` int(11) NOT NULL,
  `TLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `#` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`#`, `Name`, `Email`, `Password`, `Type`) VALUES
(1, 'Pamela Villegas', 'pam@gmail.com', '$2y$10$MJi2qJ.kxwnPDN78x7920O9D1VA9w.UtpF1QvuKYhhgu3Zlkcaxd2', 'Admin'),
(2, 'Andrei Luna', 'andrei@gmail.com', '$2y$10$TAeGs79QNzlUcSJ/Y6pY4em/GW5.Q3t5x0TQ/.gBRdmHbYHIYUsq6', 'Faculty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive-g7`
--
ALTER TABLE `archive-g7`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `LRN` (`LRN`,`Email`);

--
-- Indexes for table `archive-g8`
--
ALTER TABLE `archive-g8`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `LRN` (`LRN`,`Email`);

--
-- Indexes for table `archive-g9`
--
ALTER TABLE `archive-g9`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `LRN` (`LRN`,`Email`);

--
-- Indexes for table `archive-g10`
--
ALTER TABLE `archive-g10`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `LRN` (`LRN`,`Email`);

--
-- Indexes for table `grade-7`
--
ALTER TABLE `grade-7`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `LRN` (`LRN`,`Email`);

--
-- Indexes for table `grade-8`
--
ALTER TABLE `grade-8`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `LRN` (`LRN`,`Email`);

--
-- Indexes for table `grade-9`
--
ALTER TABLE `grade-9`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `LRN` (`LRN`,`Email`);

--
-- Indexes for table `grade-10`
--
ALTER TABLE `grade-10`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `LRN` (`LRN`,`Email`);

--
-- Indexes for table `score-g7`
--
ALTER TABLE `score-g7`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `score-g8`
--
ALTER TABLE `score-g8`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `score-g9`
--
ALTER TABLE `score-g9`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `score-g10`
--
ALTER TABLE `score-g10`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`#`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive-g7`
--
ALTER TABLE `archive-g7`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archive-g8`
--
ALTER TABLE `archive-g8`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archive-g9`
--
ALTER TABLE `archive-g9`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archive-g10`
--
ALTER TABLE `archive-g10`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade-7`
--
ALTER TABLE `grade-7`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade-8`
--
ALTER TABLE `grade-8`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade-9`
--
ALTER TABLE `grade-9`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade-10`
--
ALTER TABLE `grade-10`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `score-g7`
--
ALTER TABLE `score-g7`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `score-g8`
--
ALTER TABLE `score-g8`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `score-g9`
--
ALTER TABLE `score-g9`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `score-g10`
--
ALTER TABLE `score-g10`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
