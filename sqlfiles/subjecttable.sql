-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2017 at 03:29 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trial`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjecttable`
--

CREATE TABLE `subjecttable` (
  `year` varchar(6) NOT NULL,
  `department` varchar(30) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `subcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjecttable`
--

INSERT INTO `subjecttable` (`year`, `department`, `subject`, `subcode`) VALUES
('I', 'Mechanical Engineering', 'Human Rights', 'BH201'),
('I', 'Mechanical Engineering', 'Engineering Mathematcis II', 'BH202'),
('I', 'Mechanical Engineering', 'Engineering Physics II', 'BH203'),
('I', 'Mechanical Engineering', 'Engineering Chemistry II', 'BH204'),
('I', 'Mechanical Engineering', 'Engineering Mechanics', 'EM205'),
('I', 'Mechanical Engineering', 'Electrical Engineering', 'ID206'),
('I', 'Mechanical Engineering', 'Mechanical Engineering :Programming', 'CL207'),
('I', 'Chemical Engineering', 'Human Rights', 'BH201'),
('I', 'Chemical Engineering', 'Engineering Mathematcis II', 'BH202'),
('I', 'Chemical Engineering', 'Engineering Physics II', 'BH203'),
('I', 'Chemical Engineering', 'Engineering Chemistry II', 'BH204'),
('I', 'Chemical Engineering', 'Engineering Mechanics', 'EM205'),
('I', 'Chemical Engineering', 'Electrical Engineering', 'ID206'),
('I', 'Chemical Engineering', 'Chemical Engineering :Programming', 'CH207'),
('I', 'Computer Engineering', 'Human Rights', 'BH201'),
('I', 'Computer Engineering', 'Engineering Mathematcis II', 'BH202'),
('I', 'Computer Engineering', 'Engineering Physics II', 'BH203'),
('I', 'Computer Engineering', 'Engineering Chemistry II', 'BH204'),
('I', 'Computer Engineering', 'Basic Civil Engineering', 'CV205'),
('I', 'Computer Engineering', 'Basic Mechanical Engineering', 'ME206'),
('I', 'Computer Engineering', 'Engineering Graphics', 'ME207'),
('I', 'Computer Engineering', 'Basic Software and Programming', 'CE208'),
('I', 'Civil Engineering', 'Human Rights', 'BH201'),
('I', 'Civil Engineering', 'Engineering Mathematcis II', 'BH202'),
('I', 'Civil Engineering', 'Engineering Physics II', 'BH203'),
('I', 'Civil Engineering', 'Engineering Chemistry II', 'BH204'),
('I', 'Civil Engineering', 'Engineering Mechanics', 'EM205'),
('I', 'Civil Engineering', 'Electrical Engineering', 'ID206'),
('I', 'Civil Engineering', 'Civil Engineering :Programming and software', 'CV207'),
('II', 'Mechanical Engineering', 'Manufacturing Process I', 'ME401'),
('II', 'Mechanical Engineering', 'Theory of Machines and Mechanism I', 'ME402'),
('II', 'Mechanical Engineering', 'Machine Design I', 'ME403'),
('II', 'Mechanical Engineering', 'Applied Thrmodynamics', 'ME404'),
('II', 'Mechanical Engineering', 'Elective I(Renuable Energy Sources)', 'ME405'),
('II', 'Chemical Engineering', 'Thermodynamics I', 'CHE401'),
('II', 'Chemical Engineering', 'Heat Transfer Operations', 'CHE402'),
('II', 'Chemical Engineering', 'Introduction to Bioprocess Engineering ', 'CHE403'),
('II', 'Chemical Engineering', 'Process Plant Utilities and Safety', 'CHE404'),
('II', 'Chemical Engineering', 'Elective I(Nanotechnology Fundamentals)', 'CHE405'),
('II', 'Computer Engineering', 'Probability Satistic and Queing Theory', 'CE401'),
('II', 'Computer Engineering', 'Data Communication', 'CE402'),
('II', 'Computer Engineering', 'Microprocessors and Micrrocontrollers', 'CE403'),
('II', 'Computer Engineering', 'Data Structures', 'CE404'),
('II', 'Computer Engineering', 'Elective I(infromation system analysis and design)', 'CE405'),
('II', 'Civil Engineering', 'Hydrulic Enigneering II', 'CV401'),
('II', 'Civil Engineering', 'Structure Mechanics', 'CV402'),
('II', 'Civil Engineering', 'Surveying II', 'CV403'),
('II', 'Civil Engineering', 'Water Resource Engineering I', 'CV404'),
('II', 'Civil Engineering', 'Elecctive I(Systems Engineering)', 'CV405'),
('III', 'Mechanical Engineering', 'Manufacturing Process III', 'ME601'),
('III', 'Mechanical Engineering', 'Dynamics of Machines', 'ME602'),
('III', 'Mechanical Engineering', 'Machine Design III', 'ME603'),
('III', 'Mechanical Engineering', 'I.C Engines and Fluid Machinary', 'ME604'),
('III', 'Mechanical Engineering', 'Elective III(Numerical Methods of engg)', 'ME605'),
('III', 'Chemical Engineering', 'Mass Transfer Operations II', 'CHE601'),
('III', 'Chemical Engineering', 'Chemical Recation Engineering I', 'CHE602'),
('III', 'Chemical Engineering', 'Process Instrumentation', 'CHE603'),
('III', 'Chemical Engineering', 'Organic Chemical Technology', 'CHE604'),
('III', 'Chemical Engineering', 'Elecctive III(Corrosion Engineering)', 'CHE605'),
('III', 'Computer Engineering', 'Software Engineering', 'CE601'),
('III', 'Computer Engineering', 'Computer Networks', 'CE602'),
('III', 'Computer Engineering', 'Principle of Compiler Design', 'CE603'),
('III', 'Computer Engineering', 'Computer Graphics', 'CE604'),
('III', 'Computer Engineering', 'Elective III( Human Computer Interaction)', 'CE605'),
('III', 'Civil Engineering', 'Design of Concrete Structure I', 'CV601'),
('III', 'Civil Engineering', 'Transportation Engineering I', 'CV602'),
('III', 'Civil Engineering', 'Foundation Engineering', 'CV603'),
('III', 'Civil Engineering', 'Concrete Engineering', 'CV604'),
('III', 'Civil Engineering', 'Elective III(Advance Solid Mechanics)', 'CV605'),
('IV', 'Mechanical Engineering', 'Mechatronics', 'ME801'),
('IV', 'Mechanical Engineering', 'Power Plant Technology', 'ME802'),
('IV', 'Mechanical Engineering', 'Industrial Technology and Management', 'ME803'),
('IV', 'Mechanical Engineering', 'Elective V(Tool Design)', 'ME804'),
('IV', 'Chemical Engineering', 'Trasport Phenomena', 'CHE801'),
('IV', 'Chemical Engineering', 'Pollution Control in Process Industries', 'CHE802'),
('IV', 'Chemical Engineering', 'Elective V(Petrochem refining and Pectrochem)', 'CHE803'),
('IV', 'Chemical Engineering', 'Process Design,Flow Sheeting and Simulation', 'CHE804'),
('IV', 'Computer Engineering', 'Infroamtion Security', 'CE801'),
('IV', 'Computer Engineering', 'Distributed System', 'CE802'),
('IV', 'Computer Engineering', 'Software Testing', 'CE803'),
('IV', 'Computer Engineering', 'Elective IV(Intelligence)', 'CE804'),
('IV', 'Civil Engineering', 'Introduction to earthquake Engineering', 'CV801'),
('IV', 'Civil Engineering', 'Project Management', 'CV802'),
('IV', 'Civil Engineering', 'Construction Technique', 'CV803'),
('IV', 'Civil Engineering', 'Elecctive V(Advance Engineering geology)', 'CV804');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
