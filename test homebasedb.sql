-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2022 at 01:20 AM
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
-- Table structure for table `dbchild`
--

CREATE TABLE `dbchild` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `status` text,
  `birthday` text NOT NULL,
  `allergies` text,
  `guardian_phone` text NOT NULL,
  `guardian_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbchild`
--

INSERT INTO `dbchild` (`id`, `first_name`, `last_name`, `status`, `birthday`, `allergies`, `guardian_phone`, `guardian_email`) VALUES
(4, 'Joe', 'Smoe', NULL, '11/12/2016', 'none', '5408414802', 'twerme@mail.umw.edu'),
(1, 'Jerry', 'Smith', NULL, '11-06-23', 'Peanuts', '7037806282', 'admin@yahoo.com'),
(2, 'Randy', 'Travis', NULL, '03-15-17', NULL, '5407756363', 'timwerme1@gmail.com'),
(3, 'John', 'Johnson', NULL, '10-07-18', NULL, '5409478673', 'john@yahoo.com');

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
-- Table structure for table `dblocation`
--

CREATE TABLE `dblocation` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `start_time` text NOT NULL,
  `end_time` text NOT NULL,
  `capacity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dblocation`
--

INSERT INTO `dblocation` (`id`, `name`, `start_time`, `end_time`, `capacity`) VALUES
(1, 'Massad', '8:00', '18:00', 24),
(2, 'King George', '8:00', '18:00', 24),
(3, 'Rosner', '8:00', '18:00', 24),
(4, 'Caroline', '8:00', '12:00', 3);

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
(3, '1648042751', '<a href=\"personEdit.php?id=Joe1111111111\">Joe Smoe</a>\'s Personnel Edit Form has been changed.', 'portland');

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
('Admin7037806282', '17-07-26', 'portland', 'Admin', 'Jones', '1 Gum Tree Rd', 'Ashburn', 'VA', '20147', '7037806282', '', '7037806282', '', '', 'admin@yahoo.com', '', '', '', '', '', '', '', 'no', 'manager', '', '', 'active', '', '', '', '', '21232f297a57a5a743894a0e4a801fc3'),
('Tim5408414802', '', '', 'Tim', 'Werme', '1234 Oak Lane', 'King George', 'VA', '22485', '5408414802', 'cell', '', '', '', 'twerme@mail.umw.edu', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '12345678', 'b15d47e99831ee63e3f47cf3d4478e9a'),
('Joe1111111111', '', '', 'Joe', 'Smoe', '1234 Oak Lane', 'King George', 'VA', '22485', '1111111111', '', '', '', '', 'smoe@yahoo.com', '', '', '', '', '', '', '', '', 'guardian', '', '', '', '', '', '', '12345678', 'ac9102ad531184851daa0e97ca25def9');

-- --------------------------------------------------------

--
-- Table structure for table `dbreservation`
--

CREATE TABLE `dbreservation` (
  `id` text NOT NULL,
  `count` int(11) NOT NULL,
  `child_first` text NOT NULL,
  `child_last` text NOT NULL,
  `location` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `guardian_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbreservation`
--

INSERT INTO `dbreservation` (`id`, `count`, `child_first`, `child_last`, `location`, `date`, `time`, `guardian_email`) VALUES
('Joetwerme@mail.umw.edu', 0, 'Joe', 'Smoe', 'Caroline', '04/07/22', '8:00 AM', 'twerme@mail.umw.edu'),
('Jerryadmin@yahoo.com', 1, 'Jerry', 'Smith', 'Caroline', '04/07/22', '8:00 AM', 'admin@yahoo.com'),
('Randytimwerme1@gmail.com', 2, 'Randy', 'Travis', 'Caroline', '04/07/22', '8:00 AM', 'timwerme1@gmail.com'),
('Joetwerme@mail.umw.edu', 3, 'Joe', 'Smoe', 'Massad', '04/07/22', '8:00 AM', 'twerme@mail.umw.edu');

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
