-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2015 at 04:10 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `colabveille`
--

-- --------------------------------------------------------

--
-- Table structure for table `actifs`
--

CREATE TABLE IF NOT EXISTS `actifs` (
  `ID_ACTIF` int(11) NOT NULL,
  `MOTCLE` varchar(128) DEFAULT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_CLASSE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='La table des mots cl';

-- --------------------------------------------------------

--
-- Table structure for table `archivebul`
--

CREATE TABLE IF NOT EXISTS `archivebul` (
  `ID` int(11) NOT NULL,
  `DATEARCHIVAGE` char(60) DEFAULT NULL,
  `REMARQUE` text,
  `ID_BUL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `ID_ARTICLE` int(11) NOT NULL,
  `ID_SITE` int(11) NOT NULL,
  `URLARTICLE` char(255) DEFAULT NULL,
  `DESCRI` text,
  `DATECAP` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bulettinvul`
--

CREATE TABLE IF NOT EXISTS `bulettinvul` (
  `ID_BUL` int(11) NOT NULL,
  `DATECREATION` char(60) DEFAULT NULL,
  `ETAT` int(11) DEFAULT NULL,
  `VULNERABILITE` varchar(128) DEFAULT NULL,
  `DESCRIPTION` varchar(128) DEFAULT NULL,
  `SYSTAFFECTE` varchar(128) DEFAULT NULL,
  `DATEAPPARITION` date DEFAULT NULL,
  `SOURCE` varchar(128) DEFAULT NULL,
  `NIVEAURISQUE` varchar(128) DEFAULT NULL,
  `SOURCEFIABLE` varchar(128) DEFAULT NULL,
  `NIVEAUCRITICITE` varchar(128) DEFAULT NULL,
  `NIVEAUIMPACT` varchar(128) DEFAULT NULL,
  `TESTCORRECTIF` int(11) DEFAULT NULL,
  `APPLICATIONCORRECTIF` int(11) DEFAULT NULL,
  `JUSTIF` varchar(128) DEFAULT NULL,
  `SYSTCONCERNE` varchar(128) DEFAULT NULL,
  `VULPRISCHARGE` int(11) DEFAULT NULL,
  `APPLICHARGE` varchar(128) DEFAULT NULL,
  `OBSERVATION` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `ID_CLASSE` int(11) NOT NULL,
  `TYPEVEILLE` varchar(128) DEFAULT NULL,
  `THEMATIQUE` varchar(128) DEFAULT NULL,
  `CATEGORIE` varchar(128) DEFAULT NULL,
  `RUBRIQUE` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lierarticle`
--

CREATE TABLE IF NOT EXISTS `lierarticle` (
  `ID` int(11) NOT NULL,
  `ID_ARTICLE` int(11) NOT NULL,
  `ID_BUL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siteweb`
--

CREATE TABLE IF NOT EXISTS `siteweb` (
  `ID_SITE` int(11) NOT NULL,
  `URLSITE` char(255) DEFAULT NULL,
  `TYPE` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spider`
--

CREATE TABLE IF NOT EXISTS `spider` (
  `ID` int(11) NOT NULL,
  `ID_SITEWEB` int(11) NOT NULL,
  `NOMSPIDER` varchar(128) DEFAULT NULL,
  `ETAT` int(11) DEFAULT NULL,
  `ID_SITE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID_USER` int(11) NOT NULL,
  `USER` varchar(60) NOT NULL,
  `MOTDP` varchar(255) NOT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  `EMAIL` varchar(128) NOT NULL,
  `POSTE` varchar(128) DEFAULT NULL,
  `SERVICE` varchar(128) DEFAULT NULL,
  `DIRECTION` varchar(128) DEFAULT NULL,
  `TYPEUSER` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_USER`, `USER`, `MOTDP`, `NOM`, `PRENOM`, `EMAIL`, `POSTE`, `SERVICE`, `DIRECTION`, `TYPEUSER`) VALUES
(6, 'islamoc', '$2y$10$OTe.i83xhjAQmkBnC2zINOZ5CKmM.TAeOpRRWo0T6oQfUKPeOOhtC', 'islam', 'islam', 'islamoc@gmail.com', 'islam', 'islam', 'islam', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actifs`
--
ALTER TABLE `actifs`
  ADD PRIMARY KEY (`ID_ACTIF`), ADD KEY `I_FK_ACTIFS_USERS` (`ID_USER`), ADD KEY `I_FK_ACTIFS_CLASSE` (`ID_CLASSE`);

--
-- Indexes for table `archivebul`
--
ALTER TABLE `archivebul`
  ADD PRIMARY KEY (`ID`), ADD KEY `I_FK_ARCHIVEBUL_BULETTINVUL` (`ID_BUL`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID_ARTICLE`), ADD KEY `I_FK_ARTICLE_SITEWEB` (`ID_SITE`);

--
-- Indexes for table `bulettinvul`
--
ALTER TABLE `bulettinvul`
  ADD PRIMARY KEY (`ID_BUL`);

--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`ID_CLASSE`);

--
-- Indexes for table `lierarticle`
--
ALTER TABLE `lierarticle`
  ADD PRIMARY KEY (`ID`), ADD KEY `I_FK_LIERARTICLE_ARTICLE` (`ID_ARTICLE`), ADD KEY `I_FK_LIERARTICLE_BULETTINVUL` (`ID_BUL`);

--
-- Indexes for table `siteweb`
--
ALTER TABLE `siteweb`
  ADD PRIMARY KEY (`ID_SITE`);

--
-- Indexes for table `spider`
--
ALTER TABLE `spider`
  ADD PRIMARY KEY (`ID`), ADD KEY `I_FK_SPIDER_SITEWEB` (`ID_SITE`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `actifs`
--
ALTER TABLE `actifs`
ADD CONSTRAINT `actifs_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID_USER`),
ADD CONSTRAINT `actifs_ibfk_2` FOREIGN KEY (`ID_CLASSE`) REFERENCES `classe` (`ID_CLASSE`);

--
-- Constraints for table `archivebul`
--
ALTER TABLE `archivebul`
ADD CONSTRAINT `archivebul_ibfk_1` FOREIGN KEY (`ID_BUL`) REFERENCES `bulettinvul` (`ID_BUL`);

--
-- Constraints for table `article`
--
ALTER TABLE `article`
ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`ID_SITE`) REFERENCES `siteweb` (`ID_SITE`);

--
-- Constraints for table `lierarticle`
--
ALTER TABLE `lierarticle`
ADD CONSTRAINT `lierarticle_ibfk_1` FOREIGN KEY (`ID_ARTICLE`) REFERENCES `article` (`ID_ARTICLE`),
ADD CONSTRAINT `lierarticle_ibfk_2` FOREIGN KEY (`ID_BUL`) REFERENCES `bulettinvul` (`ID_BUL`);

--
-- Constraints for table `spider`
--
ALTER TABLE `spider`
ADD CONSTRAINT `spider_ibfk_1` FOREIGN KEY (`ID_SITE`) REFERENCES `siteweb` (`ID_SITE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
