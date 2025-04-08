-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2025 at 10:42 PM
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
-- Database: `turnir_u_malon_nogometu`
--

-- --------------------------------------------------------

--
-- Table structure for table `golovi`
--

CREATE TABLE `golovi` (
  `IDgol` int(11) NOT NULL,
  `utakmicaID` int(11) DEFAULT NULL,
  `igracID` int(11) DEFAULT NULL,
  `minuta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `igrac`
--

CREATE TABLE `igrac` (
  `IDigrac` int(11) NOT NULL,
  `timID` int(11) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  `broj_na_dresu` int(11) NOT NULL,
  `brojZutih` int(11) DEFAULT 0,
  `brojCrvenih` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karton`
--

CREATE TABLE `karton` (
  `IDkarton` int(11) NOT NULL,
  `tipKarton` enum('crveni','zuti') NOT NULL,
  `igracID` int(11) NOT NULL,
  `minutaKarton` int(11) NOT NULL,
  `utakmicaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE `stage` (
  `IDstage` int(11) NOT NULL,
  `stageIme` varchar(20) NOT NULL,
  `elimination_type` enum('grupna faza','nokaut faza') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statistika_utakmice`
--

CREATE TABLE `statistika_utakmice` (
  `utakmicaID` int(11) NOT NULL,
  `brojFaulova` int(11) DEFAULT NULL,
  `brojPrilika` int(11) DEFAULT NULL,
  `brojZutih` int(11) DEFAULT NULL,
  `brojCrvenih` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `IDtim` int(11) NOT NULL,
  `ime_tim` varchar(40) NOT NULL,
  `trener` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utakmica`
--

CREATE TABLE `utakmica` (
  `IDutakmica` int(11) NOT NULL,
  `stageID` int(11) NOT NULL,
  `tim1ID` int(11) NOT NULL,
  `tim2ID` int(11) NOT NULL,
  `golovitim1` int(11) DEFAULT 0,
  `golvoitim2` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golovi`
--
ALTER TABLE `golovi`
  ADD PRIMARY KEY (`IDgol`),
  ADD KEY `utakmicaID` (`utakmicaID`),
  ADD KEY `igracID` (`igracID`);

--
-- Indexes for table `igrac`
--
ALTER TABLE `igrac`
  ADD PRIMARY KEY (`IDigrac`),
  ADD KEY `fk_igrac_tim` (`timID`);

--
-- Indexes for table `karton`
--
ALTER TABLE `karton`
  ADD KEY `fk_karton_igrac` (`igracID`),
  ADD KEY `fk_karton_utakmica` (`utakmicaID`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`IDstage`);

--
-- Indexes for table `statistika_utakmice`
--
ALTER TABLE `statistika_utakmice`
  ADD KEY `fk_statistika_utakmica` (`utakmicaID`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`IDtim`);

--
-- Indexes for table `utakmica`
--
ALTER TABLE `utakmica`
  ADD PRIMARY KEY (`IDutakmica`),
  ADD KEY `fk_utakmica_stage` (`stageID`),
  ADD KEY `fk_utakmica_tim1` (`tim1ID`),
  ADD KEY `fk_utakmica_tim2` (`tim2ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `golovi`
--
ALTER TABLE `golovi`
  MODIFY `IDgol` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `golovi`
--
ALTER TABLE `golovi`
  ADD CONSTRAINT `golovi_ibfk_1` FOREIGN KEY (`utakmicaID`) REFERENCES `utakmica` (`IDutakmica`),
  ADD CONSTRAINT `golovi_ibfk_2` FOREIGN KEY (`igracID`) REFERENCES `igrac` (`IDigrac`);

--
-- Constraints for table `igrac`
--
ALTER TABLE `igrac`
  ADD CONSTRAINT `fk_igrac_tim` FOREIGN KEY (`timID`) REFERENCES `tim` (`IDtim`);

--
-- Constraints for table `karton`
--
ALTER TABLE `karton`
  ADD CONSTRAINT `fk_karton_igrac` FOREIGN KEY (`igracID`) REFERENCES `igrac` (`IDigrac`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_karton_utakmica` FOREIGN KEY (`utakmicaID`) REFERENCES `utakmica` (`IDutakmica`);

--
-- Constraints for table `statistika_utakmice`
--
ALTER TABLE `statistika_utakmice`
  ADD CONSTRAINT `fk_statistika_utakmica` FOREIGN KEY (`utakmicaID`) REFERENCES `utakmica` (`IDutakmica`) ON DELETE CASCADE,
  ADD CONSTRAINT `statistika_utakmice_utakmica` FOREIGN KEY (`utakmicaID`) REFERENCES `utakmica` (`IDutakmica`) ON DELETE CASCADE;

--
-- Constraints for table `utakmica`
--
ALTER TABLE `utakmica`
  ADD CONSTRAINT `fk_utakmica_stage` FOREIGN KEY (`stageID`) REFERENCES `stage` (`IDstage`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_utakmica_tim1` FOREIGN KEY (`tim1ID`) REFERENCES `tim` (`IDtim`),
  ADD CONSTRAINT `fk_utakmica_tim2` FOREIGN KEY (`tim2ID`) REFERENCES `tim` (`IDtim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
