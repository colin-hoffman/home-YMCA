-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2022 at 06:14 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homebasedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbapplicantscreenings`
--

CREATE TABLE `dbapplicantscreenings` (
  `type` text NOT NULL,
  `creator` text,
  `steps` text,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbapplicantscreenings`
--

INSERT INTO `dbapplicantscreenings` (`type`, `creator`, `steps`, `status`) VALUES
('new', 'Admin7037806282', '', 'unpublished');

-- --------------------------------------------------------

--
-- Table structure for table `dbdates`
--

CREATE TABLE `dbdates` (
  `id` char(20) NOT NULL,
  `shifts` text,
  `mgr_notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbdates`
--

INSERT INTO `dbdates` (`id`, `shifts`, `mgr_notes`) VALUES
('22-01-24:portland', '22-01-24:9-12:portland*22-01-24:3-6:portland*22-01-24:6-9:portland*22-01-24:12-3:portland', ''),
('22-01-25:portland', '22-01-25:9-12:portland*22-01-25:12-3:portland*22-01-25:3-6:portland*22-01-25:6-9:portland', ''),
('22-01-26:portland', '22-01-26:9-12:portland*22-01-26:12-3:portland*22-01-26:3-6:portland*22-01-26:6-9:portland', ''),
('22-01-27:portland', '22-01-27:9-12:portland*22-01-27:12-3:portland*22-01-27:3-6:portland*22-01-27:6-9:portland', ''),
('22-01-28:portland', '22-01-28:9-12:portland*22-01-28:12-3:portland*22-01-28:3-6:portland*22-01-28:6-9:portland*22-01-28:night:portland', ''),
('22-01-29:portland', '22-01-29:10-1:portland*22-01-29:1-4:portland*22-01-29:night:portland', ''),
('22-01-30:portland', '22-01-30:9-12:portland*22-01-30:2-5:portland*22-01-30:5-9:portland', ''),
('22-01-31:portland', '22-01-31:9-12:portland*22-01-31:3-6:portland*22-01-31:6-9:portland*22-01-31:12-3:portland', ''),
('22-02-01:portland', '22-02-01:9-12:portland*22-02-01:12-3:portland*22-02-01:3-6:portland*22-02-01:6-9:portland', ''),
('22-02-02:portland', '22-02-02:9-12:portland*22-02-02:12-3:portland*22-02-02:3-6:portland*22-02-02:6-9:portland', ''),
('22-02-03:portland', '22-02-03:9-12:portland*22-02-03:12-3:portland*22-02-03:3-6:portland*22-02-03:6-9:portland', ''),
('22-02-04:portland', '22-02-04:9-12:portland*22-02-04:3-6:portland*22-02-04:6-9:portland*22-02-04:night:portland*22-02-04:12-3:portland', ''),
('22-02-05:portland', '22-02-05:10-1:portland*22-02-05:1-4:portland*22-02-05:night:portland', ''),
('22-02-06:portland', '22-02-06:9-12:portland*22-02-06:2-5:portland*22-02-06:5-9:portland', '');

-- --------------------------------------------------------

--
-- Table structure for table `dblog`
--

CREATE TABLE `dblog` (
  `id` int(3) NOT NULL,
  `time` text,
  `message` text,
  `venue` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dblog`
--

INSERT INTO `dblog` (`id`, `time`, `message`, `venue`) VALUES
(3, '1647735389', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(4, '1647735922', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(5, '1647736073', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(6, '1647736122', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(7, '1647736405', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(8, '1647736498', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(9, '1647736560', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(10, '1647736796', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(11, '1647736805', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(12, '1647736853', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(13, '1647736863', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(14, '1647737301', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(15, '1647737384', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(16, '1647737828', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(17, '1647737901', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(18, '1647737997', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(19, '1647738129', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(20, '1647738166', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(21, '1647738445', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(22, '1647738501', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(23, '1647738642', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(24, '1647738674', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(25, '1647739309', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(26, '1647739413', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(27, '1647739462', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(28, '1647739471', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(29, '1647740017', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(30, '1647740344', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(31, '1647741524', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(32, '1647741734', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(33, '1647741815', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(34, '1647741873', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(35, '1647741903', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(36, '1647742115', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(37, '1647742201', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(38, '1647742889', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(39, '1647742913', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(40, '1647742951', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(41, '1647742979', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(42, '1647743078', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(43, '1647743082', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(44, '1647743088', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(45, '1647743115', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(46, '1647743121', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(47, '1647743125', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(48, '1647743964', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(49, '1647744006', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(50, '1647744159', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(51, '1647744243', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(52, '1647744802', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(53, '1647744874', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(54, '1647745032', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(55, '1647745090', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(56, '1647748824', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(57, '1647748901', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(58, '1647749558', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland'),
(59, '1647749650', '<a href=\"personEdit.php?id=test5408414802\">test testson</a>\'s Personnel Edit Form has been changed.', 'portland');

-- --------------------------------------------------------

--
-- Table structure for table `dbmasterschedule`
--

CREATE TABLE `dbmasterschedule` (
  `venue` text,
  `day` text NOT NULL,
  `week_no` text NOT NULL,
  `hours` text,
  `slots` int(11) DEFAULT NULL,
  `persons` text,
  `notes` text,
  `id` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbmasterschedule`
--

INSERT INTO `dbmasterschedule` (`venue`, `day`, `week_no`, `hours`, `slots`, `persons`, `notes`, `id`) VALUES
('portland', 'Mon', 'odd', '9-12', 3, ',Jane7038293469,Cathy7038295422,Cheryl7032821358', '', 'odd:Mon:9-12:portland'),
('portland', 'Mon', 'odd', '3-6', 2, ',Robin7037510984,Claire7033293465', '', 'odd:Mon:3-6:portland'),
('portland', 'Mon', 'odd', '6-9', 2, ',Nonie7037812392', '', 'odd:Mon:6-9:portland'),
('portland', 'Tue', 'odd', '9-12', 2, ',Jane7038859127,Stacey7032333522', '', 'odd:Tue:9-12:portland'),
('portland', 'Tue', 'odd', '12-3', 2, ',Cindy7035631089', '', 'odd:Tue:12-3:portland'),
('portland', 'Tue', 'odd', '3-6', 2, ',Becky7037725009,Betsy7038464935', '', 'odd:Tue:3-6:portland'),
('portland', 'Tue', 'odd', '6-9', 2, ',Kara7035953232,Daniel7032330196', '', 'odd:Tue:6-9:portland'),
('portland', 'Wed', 'odd', '9-12', 2, ',Aynne7032328782,Charlie7032728637', '', 'odd:Wed:9-12:portland'),
('portland', 'Wed', 'odd', '12-3', 2, ',John7032476256', '', 'odd:Wed:12-3:portland'),
('portland', 'Wed', 'odd', '3-6', 2, ',Amy7037519944,Ann7038470375', '', 'odd:Wed:3-6:portland'),
('portland', 'Wed', 'odd', '6-9', 2, ',Marilee7034159124,Claudia7033181908', '', 'odd:Wed:6-9:portland'),
('portland', 'Thu', 'odd', '9-12', 2, ',Cathy7038784455,Meg7039395058', '', 'odd:Thu:9-12:portland'),
('portland', 'Thu', 'odd', '12-3', 2, ',Marjorie7032328434', '', 'odd:Thu:12-3:portland'),
('portland', 'Thu', 'odd', '3-6', 2, ',Nancy7032210332,Suzanne7037018778', '', 'odd:Thu:3-6:portland'),
('portland', 'Thu', 'odd', '6-9', 2, ',Jody7033294089,Allyson7034410528', '', 'odd:Thu:6-9:portland'),
('portland', 'Fri', 'odd', '9-12', 2, ',Sally7037993827,Becky7038463827', '', 'odd:Fri:9-12:portland'),
('portland', 'Fri', 'odd', '12-3', 2, ',Ellen7034432810', '', 'odd:Fri:12-3:portland'),
('portland', 'Fri', 'odd', '3-6', 3, ',Phyllis7032325963,Elaine7037672928', '', 'odd:Fri:3-6:portland'),
('portland', 'Fri', 'odd', '6-9', 0, '', '', 'odd:Fri:6-9:portland'),
('portland', 'Mon', 'even', '9-12', 3, ',Jane7038293469,Cathy7038295422,Cheryl7032821358', '', 'even:Mon:9-12:portland'),
('portland', 'Mon', 'even', '3-6', 2, ',Maureen7032100761,Claire7033293465', '', 'even:Mon:3-6:portland'),
('portland', 'Mon', 'even', '6-9', 2, ',Vickie7033180302,Estelle7037720647', '', 'even:Mon:6-9:portland'),
('portland', 'Tue', 'even', '9-12', 2, ',Jane7038859127,Stacey7032333522', '', 'even:Tue:9-12:portland'),
('portland', 'Tue', 'even', '12-3', 2, ',Mary Ann7038833212,Gibbs7037474590', '', 'even:Tue:12-3:portland'),
('portland', 'Tue', 'even', '3-6', 2, ',Becky7037725009,Betsy7038464935', '', 'even:Tue:3-6:portland'),
('portland', 'Tue', 'even', '6-9', 2, ',Josh7037124705,April7038075431', '', 'even:Tue:6-9:portland'),
('portland', 'Wed', 'even', '9-12', 2, ',Jeannie7037970345,Kym7037970345', '', 'even:Wed:9-12:portland'),
('portland', 'Wed', 'even', '12-3', 2, ',Ellen7037994830', '', 'even:Wed:12-3:portland'),
('portland', 'Wed', 'even', '3-6', 2, ',Nancy7034158150', '', 'even:Wed:3-6:portland'),
('portland', 'Wed', 'even', '6-9', 2, ',Jody7033294089,Lilly2158349209', '', 'even:Wed:6-9:portland'),
('portland', 'Thu', 'even', '9-12', 2, '', '', 'even:Thu:9-12:portland'),
('portland', 'Thu', 'even', '12-3', 2, ',Thorne7034439654,Meg7037298111', '', 'even:Thu:12-3:portland'),
('portland', 'Thu', 'even', '3-6', 2, ',Linda7037568845,Sue7033171877', '', 'even:Thu:3-6:portland'),
('portland', 'Thu', 'even', '6-9', 2, ',Shay6175012425,Rebecca5185881836', '', 'even:Thu:6-9:portland'),
('portland', 'Fri', 'even', '9-12', 3, ',Bobbi7033447417,Meg7039395058', '', 'even:Fri:9-12:portland'),
('portland', 'Fri', 'even', '3-6', 3, ',Phyllis7032325963,Margi7034152255', '', 'even:Fri:3-6:portland'),
('portland', 'Fri', 'even', '6-9', 0, '', '', 'even:Fri:6-9:portland'),
('portland', 'Sat', '1st', '10-1', 3, ',Nancy7036769033,Beth7033399448,Rita7037998431', '', '1st:Sat:10-1:portland'),
('portland', 'Sat', '1st', '1-4', 1, ',Beverly7038542682', '', '1st:Sat:1-4:portland'),
('portland', 'Sat', '2nd', '10-1', 1, '', '', '2nd:Sat:10-1:portland'),
('portland', 'Sat', '2nd', '1-4', 1, ',Susan7037817946', '', '2nd:Sat:1-4:portland'),
('portland', 'Sat', '3rd', '10-1', 1, '', '', '3rd:Sat:10-1:portland'),
('portland', 'Sat', '3rd', '1-4', 1, '', '', '3rd:Sat:1-4:portland'),
('portland', 'Sat', '4th', '10-1', 1, '', '', '4th:Sat:10-1:portland'),
('portland', 'Sat', '5th', '10-1', 1, '', '', '5th:Sat:10-1:portland'),
('portland', 'Sat', '5th', '1-4', 1, '', '', '5th:Sat:1-4:portland'),
('portland', 'Sun', '1st', '9-12', 1, '', '', '1st:Sun:9-12:portland'),
('portland', 'Sun', '1st', '2-5', 1, ',Mary7038293321', '', '1st:Sun:2-5:portland'),
('portland', 'Sun', '1st', '5-9', 1, ',Paul7032323414', '', '1st:Sun:5-9:portland'),
('portland', 'Sun', '2nd', '9-12', 1, '', '', '2nd:Sun:9-12:portland'),
('portland', 'Sun', '3rd', '9-12', 1, '', '', '3rd:Sun:9-12:portland'),
('portland', 'Sun', '3rd', '2-5', 2, ',Lance7032528780,Melissa7036501479', '', '3rd:Sun:2-5:portland'),
('portland', 'Sun', '4th', '9-12', 1, ',Gaye7032476985', '', '4th:Sun:9-12:portland'),
('portland', 'Sun', '4th', '2-5', 1, '', '', '4th:Sun:2-5:portland'),
('portland', 'Sun', '4th', '5-9', 1, '', '', '4th:Sun:5-9:portland'),
('portland', 'Sun', '5th', '9-12', 1, '', '', '5th:Sun:9-12:portland'),
('portland', 'Sun', '5th', '2-5', 1, '', '', '5th:Sun:2-5:portland'),
('portland', 'Sun', '5th', '5-9', 1, ',Chris7038788512', '', '5th:Sun:5-9:portland'),
('portland', 'Fri', 'odd', 'night', 1, '', '', 'odd:Fri:night:portland'),
('portland', 'Fri', 'even', 'night', 1, '', '', 'even:Fri:night:portland'),
('portland', 'Sat', '1st', 'night', 1, '', '', '1st:Sat:night:portland'),
('portland', 'Sat', '2nd', 'night', 1, '', '', '2nd:Sat:night:portland'),
('portland', 'Sat', '3rd', 'night', 1, '', '', '3rd:Sat:night:portland'),
('portland', 'Sat', '4th', 'night', 1, '', '', '4th:Sat:night:portland'),
('portland', 'Sat', '5th', 'night', 1, '', '', '5th:Sat:night:portland'),
('portland', 'Sat', '4th', '1-4', 1, '', '', '4th:Sat:1-4:portland'),
('portland', 'Mon', 'even', '12-3', 2, ',Peter7037991786,Cheryl7038089589', '', 'even:Mon:12-3:portland'),
('portland', 'Sun', '3rd', '5-9', 1, '', '', '3rd:Sun:5-9:portland'),
('portland', 'Fri', 'even', '12-3', 2, ',Suzanne7037018778', '', 'even:Fri:12-3:portland'),
('portland', 'Sun', '2nd', '2-5', 1, ',Chris7038788512', '', '2nd:Sun:2-5:portland'),
('portland', 'Sun', '2nd', '5-9', 1, '', '', '2nd:Sun:5-9:portland'),
('portland', 'Mon', 'odd', '12-3', 2, ',Cheryl7038089589', '', 'odd:Mon:12-3:portland'),
('bangor', 'Sat', '5th', 'night', 0, '', '', '5th:Sat:night:bangor'),
('bangor', 'Mon', 'odd', '9-12', 1, '', '', 'odd:Mon:9-12:bangor'),
('bangor', 'Tue', 'odd', '9-12', 1, ',Julie7039424211', '', 'odd:Tue:9-12:bangor'),
('bangor', 'Wed', 'odd', '9-12', 1, ',Linda7037358701', '', 'odd:Wed:9-12:bangor'),
('bangor', 'Thu', 'odd', '9-12', 1, ',Lura7039471915', '', 'odd:Thu:9-12:bangor'),
('bangor', 'Fri', 'odd', '9-12', 1, ',Sara7036594431', '', 'odd:Fri:9-12:bangor'),
('bangor', 'Mon', 'even', '9-12', 1, '', '', 'even:Mon:9-12:bangor'),
('bangor', 'Tue', 'even', '9-12', 1, ',Julie7039424211', '', 'even:Tue:9-12:bangor'),
('bangor', 'Wed', 'even', '9-12', 1, ',Linda7037358701', '', 'even:Wed:9-12:bangor'),
('bangor', 'Thu', 'even', '9-12', 1, ',Lura7039471915', '', 'even:Thu:9-12:bangor'),
('bangor', 'Fri', 'even', '9-12', 1, ',Sara7036594431', '', 'even:Fri:9-12:bangor'),
('bangor', 'Thu', 'odd', '3-6', 2, ',Cassandra7039445038,Nicole9176052094', '', 'odd:Thu:3-6:bangor'),
('bangor', 'Mon', 'odd', '12-3', 1, ',Barbara7033227096', '', 'odd:Mon:12-3:bangor'),
('bangor', 'Tue', 'odd', '12-3', 1, ',Sara7036594431', '', 'odd:Tue:12-3:bangor'),
('bangor', 'Wed', 'odd', '12-3', 1, ',Bonnie7039421321', '', 'odd:Wed:12-3:bangor'),
('bangor', 'Thu', 'odd', '12-3', 2, ',Shannon7039912298,Hannah7036109735', '', 'odd:Thu:12-3:bangor'),
('bangor', 'Fri', 'odd', '12-3', 1, ',Jane7038273452', '', 'odd:Fri:12-3:bangor'),
('bangor', 'Mon', 'odd', '3-6', 1, '', '', 'odd:Mon:3-6:bangor'),
('bangor', 'Tue', 'odd', '3-6', 1, ',Jennifer7038527724', '', 'odd:Tue:3-6:bangor'),
('bangor', 'Wed', 'odd', '3-6', 1, '', '', 'odd:Wed:3-6:bangor'),
('bangor', 'Fri', 'odd', '3-6', 1, ',Amanda7032051750', '', 'odd:Fri:3-6:bangor'),
('bangor', 'Mon', 'odd', '6-9', 1, '', '', 'odd:Mon:6-9:bangor'),
('bangor', 'Tue', 'odd', '6-9', 1, ',Natasha7034040029', '', 'odd:Tue:6-9:bangor'),
('bangor', 'Wed', 'odd', '6-9', 1, ',Natasha7034040029', '', 'odd:Wed:6-9:bangor'),
('bangor', 'Thu', 'odd', '6-9', 1, '', '', 'odd:Thu:6-9:bangor'),
('bangor', 'Mon', 'even', '12-3', 1, ',Barbara7033227096', '', 'even:Mon:12-3:bangor'),
('bangor', 'Tue', 'even', '12-3', 1, ',Kimberley9048746622', '', 'even:Tue:12-3:bangor'),
('bangor', 'Wed', 'even', '12-3', 1, ',Bonnie7039421321', '', 'even:Wed:12-3:bangor'),
('bangor', 'Thu', 'even', '12-3', 2, ',Shannon7039912298,Hannah7036109735', '', 'even:Thu:12-3:bangor'),
('bangor', 'Fri', 'even', '12-3', 1, ',Jane7038273452', '', 'even:Fri:12-3:bangor'),
('bangor', 'Mon', 'even', '3-6', 1, '', '', 'even:Mon:3-6:bangor'),
('bangor', 'Tue', 'even', '3-6', 1, ',Jennifer7038527724', '', 'even:Tue:3-6:bangor'),
('bangor', 'Wed', 'even', '3-6', 1, '', '', 'even:Wed:3-6:bangor'),
('bangor', 'Thu', 'even', '3-6', 2, ',Cassandra7039445038,Nicole9176052094', '', 'even:Thu:3-6:bangor'),
('bangor', 'Fri', 'even', '3-6', 1, ',Amanda7032051750', '', 'even:Fri:3-6:bangor'),
('bangor', 'Mon', 'even', '6-9', 1, '', '', 'even:Mon:6-9:bangor'),
('bangor', 'Tue', 'even', '6-9', 1, ',Natasha7034040029', '', 'even:Tue:6-9:bangor'),
('bangor', 'Wed', 'even', '6-9', 1, ',Natasha7034040029', '', 'even:Wed:6-9:bangor'),
('bangor', 'Thu', 'even', '6-9', 1, '', '', 'even:Thu:6-9:bangor'),
('bangor', 'Fri', 'odd', 'night', 0, '', '', 'odd:Fri:night:bangor'),
('bangor', 'Fri', 'even', 'night', 0, '', '', 'even:Fri:night:bangor'),
('bangor', 'Sun', '1st', '5-9', 0, '', '', '1st:Sun:5-9:bangor'),
('bangor', 'Sat', '4th', 'night', 0, '', '', '4th:Sat:night:bangor'),
('bangor', 'Sat', '1st', 'night', 0, '', '', '1st:Sat:night:bangor'),
('bangor', 'Sun', '1st', '9-5', 0, '', '', '1st:Sun:9-5:bangor'),
('bangor', 'Sat', '2nd', 'night', 0, '', '', '2nd:Sat:night:bangor'),
('bangor', 'Sun', '2nd', '9-5', 0, '', '', '2nd:Sun:9-5:bangor'),
('bangor', 'Sun', '2nd', '5-9', 0, '', '', '2nd:Sun:5-9:bangor'),
('bangor', 'Sun', '3rd', '9-5', 0, '', '', '3rd:Sun:9-5:bangor'),
('bangor', 'Sun', '4th', '9-5', 0, '', '', '4th:Sun:9-5:bangor'),
('bangor', 'Sun', '3rd', '5-9', 0, '', '', '3rd:Sun:5-9:bangor'),
('bangor', 'Sat', '3rd', 'night', 0, '', '', '3rd:Sat:night:bangor'),
('bangor', 'Sun', '4th', '5-9', 0, '', '', '4th:Sun:5-9:bangor'),
('bangor', 'Sun', '5th', '9-5', 0, '', '', '5th:Sun:9-5:bangor'),
('bangor', 'Sun', '5th', '5-9', 0, '', '', '5th:Sun:5-9:bangor'),
('bangor', 'Sat', '1st', '9-5', 0, '', '', '1st:Sat:9-5:bangor'),
('bangor', 'Sat', '2nd', '9-5', 0, '', '', '2nd:Sat:9-5:bangor'),
('bangor', 'Sat', '3rd', '9-5', 0, '', '', '3rd:Sat:9-5:bangor'),
('bangor', 'Sat', '4th', '9-5', 0, '', '', '4th:Sat:9-5:bangor'),
('bangor', 'Sat', '5th', '9-5', 0, '', '', '5th:Sat:9-5:bangor');

-- --------------------------------------------------------

--
-- Table structure for table `dbpersons`
--

CREATE TABLE `dbpersons` (
  `id` text NOT NULL,
  `start_date` text,
  `venue` text,
  `first_name` text NOT NULL,
  `last_name` text,
  `address` text,
  `city` text,
  `state` varchar(2) DEFAULT NULL,
  `zip` text,
  `phone1` varchar(12) NOT NULL,
  `phone1type` text,
  `phone2` varchar(12) DEFAULT NULL,
  `phone2type` text,
  `birthday` text,
  `email` text,
  `employer` text,
  `position` text,
  `credithours` text,
  `howdidyouhear` text,
  `commitment` text,
  `motivation` text,
  `specialties` text,
  `convictions` text,
  `type` text,
  `screening_type` text,
  `screening_status` text,
  `status` text,
  `availability` text,
  `schedule` text,
  `hours` text,
  `notes` text,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbpersons`
--

INSERT INTO `dbpersons` (`id`, `start_date`, `venue`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`, `phone1`, `phone1type`, `phone2`, `phone2type`, `birthday`, `email`, `employer`, `position`, `credithours`, `howdidyouhear`, `commitment`, `motivation`, `specialties`, `convictions`, `type`, `screening_type`, `screening_status`, `status`, `availability`, `schedule`, `hours`, `notes`, `password`) VALUES
('Admin7037806282', '17-07-26', 'portland', 'Admin', 'Jones', '1 Gum Tree Rd', 'Ashburn', 'VA', '20147', '7037806282', '', '7037806282', '', '', 'admin@yahoo.com', '', '', '', '', '', '', '', 'no', 'manager', '', '', 'active', '', '', '', '', '06d80eb0c50b49a509b49f2424e8c805'),
('Joe1111111111', '', '', 'Joe', 'Biden', '1233 Oak Lane', 'King George', 'VA', '22485', '1111111111', 'home', '', '', '', 'joe@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', 'b8fb60e528e76272bb7c9c63c6d6d55a'),
('Jack5408414802', '', '', 'Jack', 'Smoe', '1234 Oak Lane', 'King George', 'VA', '22485', '5408414802', 'home', '', '', '', 'timwerme1@gmail.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', 'cdff9c46de81918c8672dca6126e1bac'),
('Max9876543211', '', '', 'Max', 'Houck', 'home 1234', 'King George', 'VA', '22485', '9876543211', 'cell', '', '', '', 'max@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '22af645d1859cb5ca6da0c484f1f37ea'),
('Joe9876543211', '', '', 'Joe', 'Smoe', '1233 Oak Lane', 'King George', 'VA', '22485', '9876543211', 'work', '', '', '', 'cole@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '22af645d1859cb5ca6da0c484f1f37ea'),
('Bill5408414802', '', '', 'Bill', 'Murray', 'home 1234', 'King George', 'VA', '22485', '5408414802', 'home', '', '', '', 'david@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '22af645d1859cb5ca6da0c484f1f37ea'),
('Steve3405678123', '', '', 'Steve', 'Jobs', '7234 Bob lane', 'King George', 'VA', '22485', '3405678123', 'work', '', '', '', 'jack@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '22af645d1859cb5ca6da0c484f1f37ea'),
('John9876543211', '', '', 'John', 'Doe', '1233 Oak Lane', 'King George', 'VA', '22485', '9876543211', '', '', '', '', 'doe@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '22af645d1859cb5ca6da0c484f1f37ea'),
('Bob1234567891', '', '', 'Bob', 'Dylan', 'home 1234', 'King George', 'VA', '22485', '1234567891', 'work', '', '', '', 'bob@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '22af645d1859cb5ca6da0c484f1f37ea'),
('Sammy1111111111', '', '', 'Sammy', 'Hagar', 'home 1234', 'King George', 'VA', '22485', '1111111111', '', '', '', '', 'hagar@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '22af645d1859cb5ca6da0c484f1f37ea'),
('Joey9876543211', '', '', 'Joey', 'Eakins', 'home 1234', 'King George', 'VA', '22485', '9876543211', 'work', '', '', '', 'joey@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '22af645d1859cb5ca6da0c484f1f37ea'),
('Joe3405678123', '', '', 'Joe', 'Biden', '1234 Oak Lane', 'King George', 'VA', '22485', '3405678123', 'home', '', '', '', 'timwerme1@gmail.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '22af645d1859cb5ca6da0c484f1f37ea'),
('Johnny1111111111', '', '', 'Johnny', 'John', '7234 Bob lane', 'King George', 'VA', '22485', '1111111111', 'cell', '', '', '', 'johnny@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '22af645d1859cb5ca6da0c484f1f37ea'),
('Mary5408414802', '', '', 'Mary', 'Sue', '1234 Oak Lane', 'King George', 'VA', '22485', '5408414802', 'work', '', '', '', 'sue@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '3dcc210189938cf3c6f6a39784608b6d'),
('Jack1111111111', '', '', 'Jack', 'Houck', '7234 Bob lane', 'King George', 'VA', '22485', '1111111111', '', '', '', '', 'jack@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', 'fda739f5bd19111cc777dce074ee4604'),
('Billy3405678123', '', '', 'Billy', 'Kid', '1235 Oak Lane', 'King George', 'VA', '22485', '3405678123', 'cell', '', '', '', 'cole@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '6889170a1fc431f820d0dff2a79a401a'),
('Cole3405678123', '', '', 'Cole', 'Nerney', '7234 Bob lane', 'King George', 'VA', '22485', '3405678123', 'cell', '', '', '', 'cole@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', '981ece8072e5e83d23a200aff192a899'),
('Jill9876543211', '', '', 'Jill', 'Jackson', 'home 1234', 'King George', 'VA', '22485', '9876543211', 'cell', '', '', '', 'jill@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', 'd43932d8698abb4805cf560206956663'),
('Tim1111111111', '', '', 'Tim', 'Werme', 'home 1234', 'King George', 'VA', '22485', '1111111111', 'cell', '', '', '', 'timwerme1@gmail.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '13465', '0ac7705b5dd60d611f582e4824979252'),
('Colin1111111111', '', '', 'Colin', 'Hoffman', 'home 1234', 'King George', 'VA', '22485', '1111111111', '', '', '', '', 'colin@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'f02d18d870707e2f01b7a69589a6fd1b'),
('Harrison1111111111', '', '', 'Harrison', 'Kemy', 'home 1234', 'King George', 'VA', '22485', '1111111111', 'cell', '', '', '', 'harrison@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', 'bb3f67c39b37b709ef09dd5fca2bb04e'),
('Tod5408414802', '', '', 'Tod', 'Testing', 'home 1234', 'King George', 'VA', '22485', '5408414802', 'cell', '', '', '', 'tod@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('test5408414802', '', '', 'test', 'testson', 'home 1234', 'King George', 'VA', '22485', '5408414802', 'work', '', '', '', 'test@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '13465', 'd41d8cd98f00b204e9800998ecf8427e'),
('Ted5408414802', '', '', 'Ted', 'Test', 'home 1234', 'King George', 'VA', '22485', '5408414802', 'home', '', '', '', 'twerme@mail.umw.edu', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '13465', '0f0115800cada4612df24594387815c0'),
('Might1234567891', '', '', 'Might', 'Guy', 'home 1234', 'King George', 'VA', '22485', '1234567891', 'home', '', '', '', 'jack@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '13465', '6fb2a62a584a963044a6f0af5fac9778'),
('Tiffany9876543211', '', '', 'Tiffany', 'Test', '1233 Oak Lane', 'King George', 'VA', '22485', '9876543211', 'work', '', '', '', 'tif@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '1234', '452d22bca5cfa3ab168ff142145a87a0'),
('Joe1234567891', '', '', 'Joe', 'Smoe', '1235 Oak Lane', 'King George', 'VA', '22485', '1234567891', 'work', '', '', '', 'smoe@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '12345678', '65d15fe9156f9c4bbffd98085992a44e');

-- --------------------------------------------------------

--
-- Table structure for table `dbscl`
--

CREATE TABLE `dbscl` (
  `id` char(25) NOT NULL,
  `persons` text,
  `status` text,
  `vacancies` text,
  `time` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dbshifts`
--

CREATE TABLE `dbshifts` (
  `id` char(25) NOT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `venue` text,
  `vacancies` int(11) DEFAULT NULL,
  `persons` text,
  `removed_persons` text,
  `sub_call_list` text,
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbshifts`
--

INSERT INTO `dbshifts` (`id`, `start_time`, `end_time`, `venue`, `vacancies`, `persons`, `removed_persons`, `sub_call_list`, `notes`) VALUES
('22-01-24:12-3:portland', 12, 15, 'portland', 1, 'Cheryl7038089589+Cheryl+Jones', '', '', ''),
('22-01-24:3-6:portland', 15, 18, 'portland', 0, 'Robin7037510984+Robin+Jones*Claire7033293465+Claire+Jones', '', '', ''),
('22-01-24:6-9:portland', 18, 21, 'portland', 1, 'Nonie7037812392+Nonie+Jones', '', '', ''),
('22-01-24:9-12:portland', 9, 12, 'portland', 0, 'Jane7038293469+Jane+Jones*Cathy7038295422+Cathy+Jones*Cheryl7032821358+Cheryl+Jones', '', '', ''),
('22-01-25:12-3:portland', 12, 15, 'portland', 1, 'Cindy7035631089+Cindy+Jones', '', '', ''),
('22-01-25:3-6:portland', 15, 18, 'portland', 0, 'Becky7037725009*Betsy7038464935+Betsy+Jones', '', '', ''),
('22-01-25:6-9:portland', 18, 21, 'portland', 0, 'Kara7035953232+Kara+Jones*Daniel7032330196+Daniel+Jones', '', '', ''),
('22-01-25:9-12:portland', 9, 12, 'portland', 0, 'Jane7038859127*Stacey7032333522+Stacey+Jones', '', '', ''),
('22-01-26:12-3:portland', 12, 15, 'portland', 1, 'John7032476256+John+Jones', '', '', ''),
('22-01-26:3-6:portland', 15, 18, 'portland', 0, 'Amy7037519944+Amy+Jones*Ann7038470375+Ann+Jones', '', '', ''),
('22-01-26:6-9:portland', 18, 21, 'portland', 0, 'Marilee7034159124+Marilee+Jones*Claudia7033181908+Claudia+Jones', '', '', ''),
('22-01-26:9-12:portland', 9, 12, 'portland', 0, 'Aynne7032328782+Aynne+Jones*Charlie7032728637+Charlie+Jones', '', '', ''),
('22-01-27:12-3:portland', 12, 15, 'portland', 1, 'Marjorie7032328434+Marjorie+Jones', '', '', ''),
('22-01-27:3-6:portland', 15, 18, 'portland', 0, 'Nancy7032210332+Nancy+Jones*Suzanne7037018778+Suzanne+Jones', '', '', ''),
('22-01-27:6-9:portland', 18, 21, 'portland', 0, 'Jody7033294089+Jody+Jones*Allyson7034410528+Allyson+Jones', '', '', ''),
('22-01-27:9-12:portland', 9, 12, 'portland', 0, 'Cathy7038784455+Cathy+Jones*Meg7039395058+Meg+Jones', '', '', ''),
('22-01-28:12-3:portland', 12, 15, 'portland', 1, 'Ellen7034432810+Ellen+Jones', '', '', ''),
('22-01-28:3-6:portland', 15, 18, 'portland', 1, 'Phyllis7032325963*Elaine7037672928+Elaine+Jones', '', '', ''),
('22-01-28:6-9:portland', 18, 21, 'portland', 0, '', '', '', ''),
('22-01-28:9-12:portland', 9, 12, 'portland', 0, 'Sally7037993827+Sally+Jones*Becky7038463827+Becky+Jones', '', '', ''),
('22-01-28:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-01-29:1-4:portland', 13, 16, 'portland', 1, '', '', '', ''),
('22-01-29:10-1:portland', 10, 13, 'portland', 1, '', '', '', ''),
('22-01-29:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-01-30:2-5:portland', 14, 17, 'portland', 1, '', '', '', ''),
('22-01-30:5-9:portland', 17, 21, 'portland', 0, 'Chris7038788512+Chris+Jones', '', '', ''),
('22-01-30:9-12:portland', 9, 12, 'portland', 1, '', '', '', ''),
('22-01-31:12-3:portland', 12, 15, 'portland', 0, 'Peter7037991786+Peter+Jones*Cheryl7038089589+Cheryl+Jones', '', '', ''),
('22-01-31:3-6:portland', 15, 18, 'portland', 0, 'Maureen7032100761+Maureen+Jones*Claire7033293465+Claire+Jones', '', '', ''),
('22-01-31:6-9:portland', 18, 21, 'portland', 0, 'Vickie7033180302+Vickie+Jones*Estelle7037720647+Estelle+Jones', '', '', ''),
('22-01-31:9-12:portland', 9, 12, 'portland', 0, 'Jane7038293469+Jane+Jones*Cathy7038295422+Cathy+Jones*Cheryl7032821358+Cheryl+Jones', '', '', ''),
('22-02-01:12-3:portland', 12, 15, 'portland', 0, 'Mary Ann7038833212+Mary Ann+Jones*Gibbs7037474590+Gibbs+Jones', '', '', ''),
('22-02-01:3-6:portland', 15, 18, 'portland', 0, 'Becky7037725009*Betsy7038464935+Betsy+Jones', '', '', ''),
('22-02-01:6-9:portland', 18, 21, 'portland', 0, 'Josh7037124705+Josh+Jones*April7038075431+April+Jones', '', '', ''),
('22-02-01:9-12:portland', 9, 12, 'portland', 0, 'Jane7038859127*Stacey7032333522+Stacey+Jones', '', '', ''),
('22-02-02:12-3:portland', 12, 15, 'portland', 1, 'Ellen7037994830+Ellen+Jones', '', '', ''),
('22-02-02:3-6:portland', 15, 18, 'portland', 1, 'Nancy7034158150+Nancy+Jones', '', '', ''),
('22-02-02:6-9:portland', 18, 21, 'portland', 0, 'Jody7033294089+Jody+Jones*Lilly2158349209', '', '', ''),
('22-02-02:9-12:portland', 9, 12, 'portland', 0, 'Jeannie7037970345+Jeannie+Jones*Kym7037970345+Kym+Jones', '', '', ''),
('22-02-03:12-3:portland', 12, 15, 'portland', 0, 'Thorne7034439654+Thorne+Jones*Meg7037298111+Meg+Jones', '', '', ''),
('22-02-03:3-6:portland', 15, 18, 'portland', 0, 'Linda7037568845+Linda+Jones*Sue7033171877+Sue+Jones', '', '', ''),
('22-02-03:6-9:portland', 18, 21, 'portland', 0, 'Shay6175012425*Rebecca5185881836', '', '', ''),
('22-02-03:9-12:portland', 9, 12, 'portland', 2, '', '', '', ''),
('22-02-04:12-3:portland', 12, 15, 'portland', 1, 'Suzanne7037018778+Suzanne+Jones', '', '', ''),
('22-02-04:3-6:portland', 15, 18, 'portland', 1, 'Phyllis7032325963*Margi7034152255+Margi+Jones', '', '', ''),
('22-02-04:6-9:portland', 18, 21, 'portland', 0, '', '', '', ''),
('22-02-04:9-12:portland', 9, 12, 'portland', 1, 'Bobbi7033447417+Bobbi+Jones*Meg7039395058+Meg+Jones', '', '', ''),
('22-02-04:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-02-05:1-4:portland', 13, 16, 'portland', 0, 'Beverly7038542682+Beverly+Jones', '', '', ''),
('22-02-05:10-1:portland', 10, 13, 'portland', 0, 'Nancy7036769033+Nancy+Jones*Beth7033399448+Beth+Jones*Rita7037998431+Rita+Jones', '', '', ''),
('22-02-05:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-02-06:2-5:portland', 14, 17, 'portland', 0, 'Mary7038293321+Mary+Jones', '', '', ''),
('22-02-06:5-9:portland', 17, 21, 'portland', 0, 'Paul7032323414+Paul+Jones', '', '', ''),
('22-02-06:9-12:portland', 9, 12, 'portland', 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dbweeks`
--

CREATE TABLE `dbweeks` (
  `id` char(20) NOT NULL,
  `dates` text,
  `venue` text,
  `status` text,
  `name` text,
  `end` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbweeks`
--

INSERT INTO `dbweeks` (`id`, `dates`, `venue`, `status`, `name`, `end`) VALUES
('22-01-24:portland', '22-01-24:portland*22-01-25:portland*22-01-26:portland*22-01-27:portland*22-01-28:portland*22-01-29:portland*22-01-30:portland', 'portland', 'archived', 'January 24, 2022 to January 30, 2022', 1643587199),
('22-01-31:portland', '22-01-31:portland*22-02-01:portland*22-02-02:portland*22-02-03:portland*22-02-04:portland*22-02-05:portland*22-02-06:portland', 'portland', 'unpublished', 'January 31, 2022 to February 6, 2022', 1644191999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbdates`
--
ALTER TABLE `dbdates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dblog`
--
ALTER TABLE `dblog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbscl`
--
ALTER TABLE `dbscl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbshifts`
--
ALTER TABLE `dbshifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbweeks`
--
ALTER TABLE `dbweeks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dblog`
--
ALTER TABLE `dblog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
