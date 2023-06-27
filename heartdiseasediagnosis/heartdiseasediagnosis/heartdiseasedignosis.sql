-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2012 at 09:20 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `heartdiseasedignosis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `symptom` varchar(20000) DEFAULT NULL,
  `disease` varchar(2000) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `symptom`, `disease`, `status`) VALUES
(20, 'Wheezing', 'Cor pulmonale ', 'Cor_pulmonale1'),
(21, 'Chest pain', 'stroke', 'stroke1'),
(22, 'Shortness of breath', 'heart failure ', 'heart_failure1'),
(23, 'Hypertension', 'coronary heart disease', 'coronary_heart_disease1'),
(24, 'High blood pressure', 'stroke', 'stroke3'),
(25, 'Chronic wet cough', 'Cor pulmonale', 'Cor_pulmonale2'),
(26, 'Diabetes', 'stroke', 'stroke2'),
(27, 'Fatigue', 'heart failure', 'heart_failure2'),
(28, 'Obesity', 'coronary heart disease', 'coronary_heart_disease2'),
(29, 'Abnormal awareness of heartbeat', 'cardiac dysrhythmia', 'cardiac_dysrhythmia1'),
(30, 'Swelling of the abdomen with fluid', 'Cor pulmonale', 'Cor_pulmonale3'),
(31, 'low heart pels', 'stroke', 'stroke4'),
(32, 'Feet swelling, ankles swelling', 'heart failure', 'heart_failure3'),
(33, 'High alcohol level', 'coronary heart disease', 'coronary_heart_disease3'),
(34, 'Palpitations', 'cardiac dysrhythmia', 'cardiac_dysrhythmia2'),
(35, 'Swelling of the ankles and feet', 'Cor pulmonale', 'Cor_pulmonale4'),
(36, 'Headache', 'stroke', 'stroke5'),
(37, 'Increased fat around the middle', 'heart failure', 'heart_failure4'),
(38, 'anxroxy', 'cardiac dysrhythmia', 'cardiac_dysrhythmia3');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE IF NOT EXISTS `treatment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disease` varchar(200) DEFAULT NULL,
  `treatment` varchar(2000) DEFAULT NULL,
  `medication` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `disease`, `treatment`, `medication`) VALUES
(1, 'heart failure', 'Coronary Angioplasty\r\nCoronary Artery Bypass Graft Surgery\r\n', 'clotbusters (should be administered as soon as possible for certain types of heart failure)'),
(2, 'stroke', 'Carotid Endarterectomy', 'clotbusters (must be administered within 3 hours from onset of stroke symptoms for certain types of strokes'),
(3, 'coronary heart disease', 'Aspirin is one of the cornerstones of coronary artery disease treatment. It prevents platelets from clumping together when blood becomes turbulent, like when it flows past a narrowing in an artery.', 'Beta blockers like carvedilol (Coreg)'),
(4, 'cardiac dysrhythmia', 'Treatments may include physical maneuvers, medications, electricity conversion, or electro or cryo cautery.', 'aspirin'),
(5, 'Cor pulmonale', 'treated with anticoagulants.', 'may include medication (conservative treatment) or iatrogenic/implanted pacemakers for slow heart rates, heart transplant for the severe case.'),
(6, 'go and see a doctor', 'go and see a doctor for professional advice and counsel ', 'your condition needs doctor''s attention');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `surname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

CREATE TABLE IF NOT EXISTS `users_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `disease` varchar(200) DEFAULT NULL,
  `treatment` varchar(2000) DEFAULT NULL,
  `medication` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `users_test`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
