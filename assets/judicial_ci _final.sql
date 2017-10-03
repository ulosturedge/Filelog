-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 03, 2017 at 03:54 AM
-- Server version: 5.7.17-log
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `judicial_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_file_chart`
--

CREATE TABLE `admin_file_chart` (
  `id` int(11) NOT NULL,
  `file_id` int(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `lastmodified` varchar(255) NOT NULL,
  `ago` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `statusid` int(1) NOT NULL,
  `notes` text NOT NULL,
  `file_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_file_chart`
--

INSERT INTO `admin_file_chart` (`id`, `file_id`, `filename`, `filepath`, `lastmodified`, `ago`, `timestamp`, `born_date`, `user`, `statusid`, `notes`, `file_status`) VALUES
(85, 1, '20161116104524646.pdf', 'http://192.168.0.5:8088/judicial_codeigniter_3/users/mando/20161116104524646.pdf', 'September 01 2017 22:06:58.', '05 minutes ago', '2017-09-02 03:11:58', '2017-09-02 03:10:35', '', 0, '', ''),
(102, 3, 'Connect to Sharp Version 2.pdf', 'http://192.168.0.5:8088/judicial_codeigniter_3/users/mando/Connect to Sharp Version 2.pdf', 'September 01 2017 22:07:00.', '05 minutes ago', '2017-09-02 03:12:00', '2017-09-02 03:11:59', '', 0, '', ''),
(109, 5, 'fmlahotline (1).pdf', 'http://192.168.0.5:8088/judicial_codeigniter_3/users/mando/fmlahotline (1).pdf', 'September 01 2017 22:07:02.', '05 minutes ago', '2017-09-02 03:12:02', '2017-09-02 03:12:01', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `all_records`
--

CREATE TABLE `all_records` (
  `id` int(11) NOT NULL,
  `file_id` int(20) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1dkeda3lrbjnn1c5fj6ilg9pbco2epjl', '::1', 1504362367, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336323336373b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('9q5slrlbbnam9jksf3jv8uaf7qf6ove1', '::1', 1504362864, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336323836343b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('aciicl263pslmmnmmvn0li79jln867aa', '::1', 1504363184, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336333138343b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('gkhvma0uktad9lusn3nj4a838bldku5b', '::1', 1504363487, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336333438373b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('shrtp9a5a0qkft8840hs4a0qfap3mrjr', '::1', 1504364219, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336343231393b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('drs2ecdlsh9lj4i4068v0prn5u3e5sio', '::1', 1504364559, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336343535393b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('as635ju4jak1ss90cbmu9ucst8ilq0as', '::1', 1504365066, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336353036363b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('11g4pcauhpjevukhqpavoqqpolvhjg7c', '::1', 1504365414, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336353431343b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('e6pfrg1dqtcbrco48e5sv9ihjvuukdsj', '::1', 1504365792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336353739323b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('n2vkk7s8pk1cr36ifeqoaad86s3gjpme', '::1', 1504367052, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336373035323b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('k53rbdjj7vdrmddusskhp06hmr6n23hd', '::1', 1504367418, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336373431383b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('qrjfgr4hd3gc14t7hdf0b6mi56itjf5o', '::1', 1504367774, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336373737343b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('ric11gid9aesd4cfqleaqf33bevoj7oh', '::1', 1504368245, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336383234353b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('prjr6aci82o6gb7ja67lntgbhhm8it3j', '::1', 1504368548, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336383534383b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('ii52bakbtfprlfpkco3f6hlubfadetnv', '::1', 1504369279, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336393237393b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('03v2gf772hm6epqcb9811aarakuns2a0', '::1', 1504369864, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343336393836343b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('8m4ks8ib7h5g1vfobnp4jph2puajou3e', '::1', 1504370207, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337303230373b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('vreju1rtku9k57bvvo62rdfeqf0sn7fs', '::1', 1504370598, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337303539383b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('kalp2gur4pahollbnvjqvks4mcqgqad6', '::1', 1504374679, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337343637393b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('3nscch7c71d24kdruq5kl6nqnggourah', '::1', 1504374980, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337343938303b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('csv7i41e97g2ptm1mb4sgk6j66o1v12q', '::1', 1504375396, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337353339363b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('8shpn0riq4v0h58fjmvtuo39ao8oggvr', '::1', 1504375700, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337353730303b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('pvk0f92577qhrjn1lgklb3d3mclbc1c0', '::1', 1504376558, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337363535383b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('el34m81og7grgpm2k9n9lk43juenkj4p', '::1', 1504377126, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337373132363b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('20hjqjlta7uvevtv8iligth3s1f63a4l', '::1', 1504377623, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337373632333b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('s42hc27jpqffre9g5rp89143jog00phr', '::1', 1504378461, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337383436313b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('cl2vjgmtfnahhh5846lupa9f1q0k6b1t', '::1', 1504378814, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337383831343b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('r2u4k4rt2g176oc43rdh052499qht0a2', '::1', 1504379141, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337393134313b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('f0d6q2bq8il07vsf7d6fpp2cfsu7atof', '::1', 1504379474, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337393437343b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('ba3rdknbhv5vcjm9i55jlajisqsprf2p', '::1', 1504379861, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343337393836313b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('pgsd95ngrrbk5pbe66cs9askhnv0qb0h', '::1', 1504380174, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338303137343b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('djifnavv2udps02lihbose00t4tke730', '::1', 1504380513, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338303531333b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('d9bqo98etj3q6d4d6advk4m6ua5t7ovp', '::1', 1504380840, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338303834303b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('tkqirk64qd0t4lpk0rhjrgt8raeem17e', '::1', 1504383104, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338333130343b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('pupeqfhb2iguu6l7j6nq7vr4j5t709er', '::1', 1504383605, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338333630353b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('7iehrersimvg01jttncbl4hmgk91ba6h', '::1', 1504383947, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338333934373b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('p5vldcho8t2294i2qq3je6hht0cc6tm9', '::1', 1504384260, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338343236303b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('9oiqiqpcr957lc4vh554fha5h0qml8u5', '::1', 1504384726, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338343732363b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('m3fp2m2ok3br35tjg8321vjtlr291a2r', '::1', 1504385029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338353032393b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('hioi5oqalunlg5722j1rp17jv6ba00km', '::1', 1504385345, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338353334353b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('d3fb0kqq0ligom1o5v3uvg5ig4h4j86c', '::1', 1504385701, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338353730313b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('dq3pev6nqddd3bjarcstqisa70hmftvd', '::1', 1504386004, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338363030343b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('fvjs31qmqjq2k0kh8g3d39mej42kb6pi', '::1', 1504386305, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338363330353b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('8dm76j0v4p92vlun5ut82tnj4noj60b4', '::1', 1504386661, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338363636313b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('8707l1s52s6ejbicu8ste4hvc6rs4krm', '::1', 1504387173, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338373137333b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('0oa52pofh9vis6ho1akb3k1rv6d662lo', '::1', 1504387244, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343338373137333b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('utea6noh5a0u25kfff1r9t56qte5a692', '::1', 1504402676, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343430323637363b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('q0loj79nl6gamorpm148h18cr39g689r', '::1', 1504403051, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343430333035313b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('3u0tepl4gukilkhtb8em8pog7333tt9l', '::1', 1504404941, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343430343934313b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('0tu5raaiqu93ckssq1h30um1ftn9koot', '::1', 1504405244, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343430353234343b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('eujeqi3jfs9msqnmqt14fde0k43sn9di', '::1', 1504407367, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343430373336373b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('njvtch6u9vsdbmju91rhv8t71p9vrk9a', '::1', 1504407911, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343430373931313b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('nqo1obmdr4bquutav3fv4kfr8hbc4386', '::1', 1504408320, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343430383332303b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('hfb8ngsqslnml6ovd3d2i1jne2io99ii', '::1', 1504408888, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343430383838383b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('cehv6oo4vgs658hmvo44kch9mmudsdie', '::1', 1504409197, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343430393139373b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('0n0dub9q33dte0hsrsk31bicrppnspog', '::1', 1504409642, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343430393634323b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('4frq0eokf0mnnq88i3i3521itkg3inuq', '::1', 1504410002, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343431303030323b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('gmfk4mcgomva5hudpu9tjcvepdcsi414', '::1', 1504410475, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343431303437353b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b),
('ho3lsf1uksesb3o1s6msibf0dup0bab6', '::1', 1504410584, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343431303437353b757365725f69647c733a323a223735223b7569647c733a353a226d616e646f223b6c6f676765645f696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `file_id` int(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `lastmodified` varchar(255) NOT NULL,
  `ago` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `statusid` int(1) NOT NULL,
  `notes` text NOT NULL,
  `file_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Triggers `dashboard`
--
DELIMITER $$
CREATE TRIGGER `after_update_dashboard` AFTER UPDATE ON `dashboard` FOR EACH ROW BEGIN
IF NEW.file_status <> OLD.file_status
THEN
        INSERT INTO log (filename, filepath, lastmodified, ago, timestamp, born_date, user, statusid, notes, file_status) VALUES (NEW.filename, NEW.filepath, NEW.lastmodified, NEW.ago, NEW.timestamp, NEW.born_date, NEW.user, NEW.statusid, NEW.notes, NEW.file_status);
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `judicial`
--

CREATE TABLE `judicial` (
  `id` int(11) NOT NULL,
  `file_id` int(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `lastmodified` varchar(255) NOT NULL,
  `ago` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `statusid` int(1) NOT NULL,
  `notes` text NOT NULL,
  `file_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `legal`
--

CREATE TABLE `legal` (
  `id` int(11) NOT NULL,
  `file_id` int(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `lastmodified` varchar(255) NOT NULL,
  `ago` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `statusid` int(1) NOT NULL,
  `notes` text NOT NULL,
  `file_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `lastmodified` varchar(255) NOT NULL,
  `ago` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `statusid` int(1) NOT NULL,
  `notes` text NOT NULL,
  `file_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mando_file_chart`
--

CREATE TABLE `mando_file_chart` (
  `id` int(11) NOT NULL,
  `file_id` int(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `lastmodified` varchar(255) NOT NULL,
  `ago` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `statusid` int(1) NOT NULL,
  `notes` text NOT NULL,
  `file_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nintendo_file_chart`
--

CREATE TABLE `nintendo_file_chart` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `lastmodified` varchar(255) NOT NULL,
  `ago` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `statusid` int(1) NOT NULL,
  `notes` text NOT NULL,
  `file_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `note_history`
--

CREATE TABLE `note_history` (
  `id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `prev_notes` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Triggers `note_history`
--
DELIMITER $$
CREATE TRIGGER `after_insert_note_history` AFTER INSERT ON `note_history` FOR EACH ROW BEGIN
        INSERT INTO note_history_log (file_id, filename, prev_notes, timestamp, uid) VALUES (NEW.file_id, NEW.filename, NEW.prev_notes, NEW.timestamp, NEW.uid);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `note_history_log`
--

CREATE TABLE `note_history_log` (
  `id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `prev_notes` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `output`
--

CREATE TABLE `output` (
  `id` int(11) NOT NULL,
  `file_id` int(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `lastmodified` varchar(255) NOT NULL,
  `ago` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `statusid` int(1) NOT NULL,
  `notes` text NOT NULL,
  `file_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id` int(11) NOT NULL,
  `file_id` int(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `lastmodified` varchar(255) NOT NULL,
  `ago` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `statusid` int(1) NOT NULL,
  `notes` text NOT NULL,
  `file_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `uid` varchar(128) NOT NULL,
  `pwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `uid`, `pwd`) VALUES
(2, 'Lee', 'admin', '$2y$10$iUdquXRtH4XqjRxOJVamuuxfWDQ/e.MhSIaBbE20LU9w0ZPkDszQy'),
(4, 'Me', 'admin1', '$2y$10$bzgkd7OLAe000EXD7hcLaOyWcZWZP9ofcMbjPg1khT3s3cw0bH5wK'),
(6, 'lego', 'lego', '3a22c9ea9a3039d180e0a514a5a3b619'),
(26, 'Holy Man', 'Holy', '$2y$10$zD3OjVuNflnzbHwnSWIYTO4wOl.AQq4yYmYofHNrUJrpulJGXqhqG'),
(75, 'mando', 'mando', 'f366d2db3a9995e6e2ae2cad19beeb09'),
(76, 'nintendo', 'nintendo', '7d9ad0211d6493e8d55a4a75de3f90a1'),
(77, 'candy', 'candy', 'c48ba993d35c3abe0380f91738fe2a34'),
(78, 'spurs', 'spurs', '0aacc72699fa293cc7f3f1b1e8fae35f'),
(79, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `user_file_chart`
--

CREATE TABLE `user_file_chart` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `lastmodified` varchar(255) NOT NULL,
  `ago` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `statusid` int(1) NOT NULL,
  `notes` text NOT NULL,
  `file_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_file_chart`
--

INSERT INTO `user_file_chart` (`id`, `filename`, `filepath`, `lastmodified`, `ago`, `timestamp`, `born_date`, `user`, `statusid`, `notes`, `file_status`) VALUES
(1, '20161116104524646.pdf', 'http://localhost:8088/judicial_codeigniter_3/user_file_chart/20161116104524646.pdf', 'August 22 2017 17:38:12.', '53 minutes ago', '2017-08-22 23:31:18', '2017-08-22 23:30:56', '', 0, '', ''),
(2, 'ProfessionalServicesResume2.pdf', 'http://localhost:8088/judicial_codeigniter_3/user_file_chart/ProfessionalServicesResume2.pdf', 'August 22 2017 16:41:19.', '01 hour 49 minutes ago', '2017-08-22 21:41:19', '2017-08-22 23:30:56', '', 0, '', ''),
(3, 'Publication1 - Copy (2).pdf', 'http://localhost:8088/judicial_codeigniter_3/user_file_chart/Publication1 - Copy (2).pdf', 'August 22 2017 16:41:24.', '01 hour 49 minutes ago', '2017-08-22 21:41:24', '2017-08-22 23:30:56', '', 0, '', ''),
(4, 'time - Copy.pdf', 'http://localhost:8088/judicial_codeigniter_3/user_file_chart/time - Copy.pdf', 'August 01 2017 09:07:03.', '21 days 09 hours 24 minutes ago', '2017-08-22 23:31:11', '2017-08-22 23:30:56', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_file_chart`
--
ALTER TABLE `admin_file_chart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`),
  ADD UNIQUE KEY `lastmodified` (`lastmodified`);

--
-- Indexes for table `all_records`
--
ALTER TABLE `all_records`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`),
  ADD UNIQUE KEY `lastmodified` (`lastmodified`);

--
-- Indexes for table `judicial`
--
ALTER TABLE `judicial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`),
  ADD UNIQUE KEY `lastmodified` (`lastmodified`);

--
-- Indexes for table `legal`
--
ALTER TABLE `legal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`),
  ADD UNIQUE KEY `lastmodified` (`lastmodified`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mando_file_chart`
--
ALTER TABLE `mando_file_chart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`),
  ADD UNIQUE KEY `lastmodified` (`lastmodified`);

--
-- Indexes for table `nintendo_file_chart`
--
ALTER TABLE `nintendo_file_chart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`),
  ADD UNIQUE KEY `lastmodified` (`lastmodified`);

--
-- Indexes for table `note_history`
--
ALTER TABLE `note_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note_history_log`
--
ALTER TABLE `note_history_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `output`
--
ALTER TABLE `output`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`),
  ADD UNIQUE KEY `lastmodified` (`lastmodified`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`),
  ADD UNIQUE KEY `lastmodified` (`lastmodified`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_file_chart`
--
ALTER TABLE `user_file_chart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`),
  ADD UNIQUE KEY `lastmodified` (`lastmodified`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_file_chart`
--
ALTER TABLE `admin_file_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `all_records`
--
ALTER TABLE `all_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `judicial`
--
ALTER TABLE `judicial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `legal`
--
ALTER TABLE `legal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mando_file_chart`
--
ALTER TABLE `mando_file_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nintendo_file_chart`
--
ALTER TABLE `nintendo_file_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `note_history`
--
ALTER TABLE `note_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `note_history_log`
--
ALTER TABLE `note_history_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `output`
--
ALTER TABLE `output`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `user_file_chart`
--
ALTER TABLE `user_file_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
