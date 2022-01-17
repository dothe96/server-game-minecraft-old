-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 11:26 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minecraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE IF NOT EXISTS `thanhvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip` varchar(40) NOT NULL DEFAULT '127.0.0.1',
  `lastlogin` bigint(20) NOT NULL DEFAULT '0',
  `x` double NOT NULL DEFAULT '0',
  `y` double NOT NULL DEFAULT '0',
  `z` double NOT NULL DEFAULT '0',
  `world` varchar(255) NOT NULL DEFAULT 'world',
  `email` varchar(255) DEFAULT 'your@email.com',
  `isLogged` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `email`, `isLogged`) VALUES
(14, 'Luky', 'Luky', '5b7ea42fcac51f0086d4460518c73093', '183.80.184.176', 0, 0, 0, 0, 'world', 'hotro.minelg@gmail.com', 0),
(15, 'DoThe', 'DoThe', '1e3ff2be3d5c2ef0d69922c6c7544c08', '183.80.184.176', 0, 0, 0, 0, 'world', 'dothetq96@gmail.com', 0),
(16, 'gatyl', 'gatyl', 'aa6316d3ecdfa87b43263d72af5b6cba', '27.74.249.23', 0, 0, 0, 0, 'world', 'taolaytrum@gmail.com', 0),
(17, 'minhchichcho1', 'minhchichcho1', 'aa6316d3ecdfa87b43263d72af5b6cba', '113.161.87.162', 0, 0, 0, 0, 'world', 'asdas@yahoo.com', 0),
(18, 'baomap', 'baomap', 'e6282689223ab33ac24cb1caf538cf3f', '113.180.79.146', 0, 0, 0, 0, 'world', 'jjdhd@gmail.com', 0),
(19, 'akashj', 'akashj', '94dba186bd8cc844229668cf80c6db06', '113.180.110.159', 0, 0, 0, 0, 'world', 'nkuttran2014@gmeil.com', 0),
(20, 'namdeptrai123', 'namdeptrai123', 'cc6d89e2df1f37817e68777bee3f407d', '113.180.110.159', 0, 0, 0, 0, 'world', 'namdeptrai1234@gmail.com', 0),
(21, 'nuipro01', 'nuipro01', '61d8d0599ec9a2984a98e0ff032e20f0', '116.105.3.152', 0, 0, 0, 0, 'world', 'thuctkgameming@gmail.com', 0),
(22, 'HudsonPlayz', 'HudsonPlayz', '7bd134c16e0191d864a142c53fdf703c', '14.161.3.201', 0, 0, 0, 0, 'world', 'votuant3@gmail.com', 0),
(23, 'SoiNhi2k3', 'SoiNhi2k3', '22ad655d73f358f4b9ea3e3b0bd1dffd', '14.164.125.209', 0, 0, 0, 0, 'world', 'ngothanhduong025@gmail.com', 0),
(24, 'Moking', 'Moking', 'db31809768483b88e0b8cfd43cffeff6', '14.164.125.209', 0, 0, 0, 0, 'world', 'anhdo147@gmail.com', 0),
(25, 'Mota', 'Mota', 'fa86cb61f06298e4bebac6e8a6f69ccb', '14.164.125.209', 0, 0, 0, 0, 'world', 'huynhtai666666@gmail.com', 0),
(26, 'Tr00ll', 'Tr00ll', '0b9f0f6cce432f04ae08b50e4249288e', '14.161.3.201', 0, 0, 0, 0, 'world', 'trung@yhoo.com', 0),
(27, 'chichkoem', 'chichkoem', 'a9ec0a37ed0087db95657f4761039142', '14.191.137.42', 0, 0, 0, 0, 'world', 'cuong@gmail.com', 0),
(28, 'protai147', 'protai147', 'fad68fc99d66fc4667e98e1b0ec58d7d', '113.180.74.10', 0, 0, 0, 0, 'world', 'hoat3264@gmail.com', 0),
(29, 'owenvg_', 'owenvg_', 'ecc9655f069012ba61190a107f6c424d', '117.3.71.184', 0, 0, 0, 0, 'world', 'VuPro111@Gmail.com', 0),
(30, 'chicken', 'chicken', 'c231c35f7f209cc3e7288cf1dd542669', '183.80.184.176', 0, 0, 0, 0, 'world', 'cuongnguyen61097@gmail.com', 0),
(31, 'heofg1478', 'heofg1478', 'c59590d14b586e03561e4c6ca6cb38c0', '113.180.110.151', 0, 0, 0, 0, 'world', 'quocanh09090@gmail.com', 0),
(32, 'vyyeuphuong', 'vyyeuphuong', 'f77a49d16eb2da4e67298fa4fc7491ec', '113.170.29.69', 0, 0, 0, 0, 'world', 'luan@gmail.com', 0),
(33, 'luan17', 'luan17', 'c8751cdaddcf2344508c26666cb5989a', '115.79.54.54', 0, 0, 0, 0, 'world', 'luanrop@gmail.com', 0),
(34, 'luan19', 'luan19', '635683043832d16cefa6c01f4e92d799', '115.79.54.54', 0, 0, 0, 0, 'world', 'duan@gmail.com', 0),
(35, 'emgalam', 'emgalam', '635683043832d16cefa6c01f4e92d799', '115.79.54.54', 0, 0, 0, 0, 'world', 'ahihi@gmail.com', 0),
(36, 'erenff', 'erenff', 'a939a7764d72984a40dd4ace9eddd09d', '14.161.3.201', 0, 0, 0, 0, 'world', 'sangtang62@gmail.com', 0),
(37, 'minhchichcho2', 'minhchichcho2', 'aa6316d3ecdfa87b43263d72af5b6cba', '14.161.3.201', 0, 0, 0, 0, 'world', 'sdlfhaskfj@yahoo.com', 0),
(38, 'minhchichcho3', 'minhchichcho3', 'aa6316d3ecdfa87b43263d72af5b6cba', '14.161.3.201', 0, 0, 0, 0, 'world', 'sadasdas@yahoo.com', 0),
(39, 'minhchichcho4', 'minhchichcho4', 'aa6316d3ecdfa87b43263d72af5b6cba', '14.161.3.201', 0, 0, 0, 0, 'world', 'asdasdas@yahoo.com', 0),
(40, '456456456', '456456456', 'aa6316d3ecdfa87b43263d72af5b6cba', '14.161.3.201', 0, 0, 0, 0, 'world', 'tafdasfasd@yahoo.com', 0),
(41, '15975643', '15975643', 'aa6316d3ecdfa87b43263d72af5b6cba', '14.161.3.201', 0, 0, 0, 0, 'world', 'warar@yahoo.com', 0),
(42, 'OsinCuaOx', 'OsinCuaOx', '0b38eced4bc449aff8ae217cba4558e4', '113.163.46.147', 0, 0, 0, 0, 'world', 'luanvai@gmail.com', 0),
(43, 'TuyetNhu', 'TuyetNhu', 'cc6d89e2df1f37817e68777bee3f407d', '113.180.110.151', 0, 0, 0, 0, 'world', 'tuyetnhu@gmail.com', 0),
(44, 'SuperMan', 'SuperMan', 'cc6d89e2df1f37817e68777bee3f407d', '113.180.110.151', 0, 0, 0, 0, 'world', 'namdeptrai123@gmail.com', 0),
(45, 'Hinata', 'Hinata', 'cc6d89e2df1f37817e68777bee3f407d', '113.180.110.151', 0, 0, 0, 0, 'world', 'cmt@gmail.com', 0),
(46, 'CuTiPhong1', 'CuTiPhong1', '1f2c3eee788372c30eca8deb86f18dd7', '113.180.79.229', 0, 0, 0, 0, 'world', 'longhoang1355@gmail.com', 0),
(47, 'tranthiminhthu1', 'tranthiminhthu1', '1f2c3eee788372c30eca8deb86f18dd7', '113.180.79.229', 0, 0, 0, 0, 'world', 'fasdfaf@gmail.com', 0),
(48, 'boykutehb01', 'boykutehb01', '69682513f8d3f721fe32dbd62cb8d2ca', '14.190.41.233', 0, 0, 0, 0, 'world', 'ngoclong5219@gmail.com', 0),
(49, 'thanhtoan1210', 'thanhtoan1210', 'b333c315cee9fb3f26c35012e90a65ba', '113.166.109.226', 0, 0, 0, 0, 'world', 'toantruong424@gmail.com', 0),
(50, 'dangnhathuy159', 'dangnhathuy159', 'be7383dc03f35eee2f4f455df0627b73', '117.3.58.254', 0, 0, 0, 0, 'world', 'nhathuy063@gmail.com', 0),
(51, 'emoi', 'emoi', 'be7383dc03f35eee2f4f455df0627b73', '117.3.58.254', 0, 0, 0, 0, 'world', 'sudung002@gmail.com', 0),
(52, 'emyeu', 'emyeu', '859ada3646b768096f1d3e605d3a57e6', '113.163.46.147', 0, 0, 0, 0, 'world', 'luane@gmail.com', 0),
(53, 'sangnho123', 'sangnho123', '9eabba0c0d368652abac5f11b3c1db84', '113.180.79.237', 0, 0, 0, 0, 'world', 'djdjdj@gmail.com', 0),
(54, 'tam8', 'tam8', '73e2774192f29a28ea7dd6f13435f935', '113.163.46.147', 0, 0, 0, 0, 'world', 'luanq@gmail.com', 0),
(55, 'khoi8a7', 'khoi8a7', '9bcc3bb4572b0ae3ff7ad22cac43fada', '113.163.46.147', 0, 0, 0, 0, 'world', 'luanp@gmail.com', 0),
(56, 'taideptrai2001', 'taideptrai2001', '5d5c465d1cb2d607b2567a6c3cee07c7', '113.180.110.233', 0, 0, 0, 0, 'world', 'mnguyn5125@yahoo.com', 0),
(57, 'swddds', 'swddds', '5b880f88b67b5d4d3bb68fc3a10b1aa7', '113.180.110.233', 0, 0, 0, 0, 'world', 'dsadasf@gmail.com', 0),
(58, 'akame', 'akame', '4df09890277c2180432cb6fb7d0092bd', '113.180.110.233', 0, 0, 0, 0, 'world', 'dasdas@gmail.com', 0),
(59, 'EthAxl', 'EthAxl', '85dbfb7212c0c2dfdf97c7bf96452c35', '117.3.71.184', 0, 0, 0, 0, 'world', 'EthAxl@yahoo.com.vn', 0),
(60, 'safsa', 'safsa', '53cd8788e4823ff53194677dd417d4c1', '14.161.3.201', 0, 0, 0, 0, 'world', 'nhoksieucap123@gmail.com.vn', 0),
(61, 'thangtran123', 'thangtran123', 'd2d6d029e53fb8eb349b076a1646f220', '113.180.110.18', 0, 0, 0, 0, 'world', 'nkuttran2014@gmail.com', 0),
(62, 'lozma123', 'lozma123', '33dadb70e6417be84841f266876a02a6', '117.3.46.58', 0, 0, 0, 0, 'world', 'huynhthanh11@yahoo.com', 0),
(63, 'NGUYENTRAN', 'NGUYENTRAN', 'c79eeb90ba6486e3c1081074b062acfe', '113.170.31.111', 0, 0, 0, 0, 'world', 'yeuTHIENTRANG@YAHOO.COM', 0),
(64, 'truonggiang2', 'truonggiang2', 'b35a4f9955e2097ae774a5d37ecc7183', '14.161.3.201', 0, 0, 0, 0, 'world', 'sdsad@gmail.com', 0),
(65, 'anh123', 'anh123', '6fb42da0e32e07b61c9f0251fe627a9c', '113.170.31.111', 0, 0, 0, 0, 'world', 'anh123@gmail.com.vn', 0),
(66, 'long', 'long', 'bc965dd327f19256747298316b2e64c4', '113.163.46.147', 0, 0, 0, 0, 'world', 'adawwdad@gmail.com', 0),
(67, 'long_', 'long_', '24c32858d1b35526eb12565c0909b997', '113.163.46.147', 0, 0, 0, 0, 'world', 'aaewfas@gmail.com', 0),
(68, 'tranthiminhthu', 'tranthiminhthu', '3726506acfe43e91594b1bde5e513620', '113.163.46.147', 0, 0, 0, 0, 'world', 'daedd@gmail.com', 0),
(69, 'thuanvip_082', 'thuanvip_082', '128cb8fb0e8b8f0d9244b2e05b4925c4', '113.170.31.111', 0, 0, 0, 0, 'world', 'luanvai@gmmail.com', 0),
(70, 'duan', 'duan', '6ef4bd0f9e49430d116e6008e7b319b5', '113.170.31.111', 0, 0, 0, 0, 'world', 'vanduan@yahoo.com', 0),
(71, 'giabua', 'giabua', '59c76094c81fa7f468a0ee3a361465a3', '222.253.215.166', 0, 0, 0, 0, 'world', 'tringhuyero22@gmail.com', 0),
(72, 'dongcho', 'dongcho', '432f45b44c432414d2f97df0e5743818', '222.253.215.166', 0, 0, 0, 0, 'world', 'phongcho3ffy@gamil.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
