-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 06. Dez 2015 um 15:39
-- Server Version: 5.6.21
-- PHP-Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `image`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(10) unsigned NOT NULL,
  `member_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_img` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=458 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `comments`
--

INSERT INTO `comments` (`id`, `member_name`, `page_id`, `body`, `dt`, `profile_img`) VALUES
(1, 'Cheffe', '130', 'Das ist ein Text', '0000-00-00 00:00:00', ''),
(2, '', '', '', '0000-00-00 00:00:00', ''),
(3, '', '', '', '0000-00-00 00:00:00', ''),
(4, 'peter', '150', '', '0000-00-00 00:00:00', ''),
(5, 'peter', '150', '', '0000-00-00 00:00:00', ''),
(6, 'peter', '150', '', '0000-00-00 00:00:00', ''),
(7, '', '', '', '0000-00-00 00:00:00', ''),
(8, '', '', '', '2015-06-06 10:52:18', ''),
(9, '', '', '', '2015-06-06 10:52:25', ''),
(10, '', '', '', '2015-06-06 10:54:24', ''),
(11, '', '', '', '2015-06-06 10:55:26', ''),
(12, '', '', '', '2015-06-06 11:36:36', ''),
(13, '', '', '', '2015-06-06 11:37:56', ''),
(14, '', '', '', '2015-06-06 11:55:30', ''),
(15, '', '', '', '2015-06-06 11:57:35', ''),
(16, '', '', '', '2015-06-06 11:59:52', ''),
(17, '', '', '', '2015-06-06 12:00:14', ''),
(18, '', '', '', '2015-06-06 12:06:51', ''),
(19, '', '', '', '2015-06-06 12:38:24', ''),
(20, '', '', '', '2015-06-06 12:38:44', ''),
(21, 'lad', '', 'sdsd', '2015-06-06 13:02:10', ''),
(22, 'lad', '', ' wewe', '2015-06-06 13:02:41', ''),
(23, 'lad', '', 'bald hab ichs', '2015-06-06 13:03:49', ''),
(24, 'lad', '', 'snhidfidgin brauch ich nicht', '2015-06-06 13:04:51', ''),
(25, 'lad', '128', 'sdwf', '2015-06-06 13:06:45', ''),
(26, 'lad', '128', 'sfsf', '2015-06-06 13:07:41', ''),
(27, 'lad', '128', 'hilfe', '2015-06-06 13:08:28', ''),
(28, 'lad', '128', 'jkkbh', '2015-06-06 13:21:31', ''),
(29, 'lad', '128', 'ghuj', '2015-06-06 13:23:42', ''),
(30, 'lad', '128', 'jj', '2015-06-06 13:24:26', ''),
(31, 'lad', '128', 'wewe wwe', '2015-06-06 13:25:44', ''),
(32, 'lad', '128', 'ewe w', '2015-06-06 13:26:52', ''),
(33, 'lad', '128', 'asa s', '2015-06-06 13:27:06', ''),
(34, 'lad', '128', 'kolo', '2015-06-06 13:27:18', ''),
(35, 'lad', '128', 'asas', '2015-06-06 13:27:43', ''),
(36, 'lad', '128', 'dw eqe', '2015-06-06 13:28:06', ''),
(37, 'lad', '128', 'sds dsd', '2015-06-06 13:33:04', ''),
(38, 'lad', '128', 'aaaaaaaaa', '2015-06-06 13:35:14', ''),
(39, 'lad', '128', 'sdsd sd', '2015-06-06 13:35:50', ''),
(40, 'lad', '128', 'qwewqe', '2015-06-06 13:36:45', ''),
(41, 'lad', '128', 'sdsd', '2015-06-06 13:42:01', ''),
(42, 'lad', '128', 'wieso nicht live?<br />', '2015-06-06 13:42:28', ''),
(43, 'lad', '128', 'asdasasafsfasasfsaf', '2015-06-06 13:44:30', ''),
(44, 'lad', '129', 'wer', '2015-06-06 13:46:11', ''),
(45, 'lad', '129', 'sdsd', '2015-06-06 13:48:02', ''),
(46, 'lad', '131', 'Erster Kommentar.', '2015-06-06 13:52:57', ''),
(47, 'lad', '131', 'zweiter Kommentar', '2015-06-06 13:53:59', ''),
(48, 'lad', '127', 'test1', '2015-06-06 13:54:16', ''),
(49, 'lad', '126', 'jjh', '2015-06-06 16:41:40', ''),
(50, 'lad', '126', 'lol', '2015-06-06 17:05:33', ''),
(51, 'lad', '126', 'das geht nicht', '2015-06-06 17:16:13', ''),
(52, 'lad', '126', 'sdvssgd', '2015-06-06 17:55:07', ''),
(53, 'lad', '126', 'oo', '2015-06-06 18:07:47', ''),
(54, 'lad', '126', 'sdsd', '2015-06-06 18:08:01', ''),
(55, 'lad', '126', 'sdwd', '2015-06-06 18:29:06', ''),
(56, 'lad', '126', 'sdsd', '2015-06-06 18:33:19', ''),
(57, 'lad', '126', 'sdsd', '2015-06-06 18:35:56', ''),
(58, 'lad', '128', 's', '2015-06-06 18:45:47', ''),
(59, 'lad', '128', 'sdsdsd', '2015-06-06 18:48:56', ''),
(60, 'lad', '128', 'sdsd', '2015-06-06 18:49:54', ''),
(61, 'lad', '128', 'kacke', '2015-06-06 18:50:02', ''),
(62, 'lad', '130', 'Tolles Bild', '2015-06-06 18:50:52', ''),
(63, 'lad', '130', 'jetzt', '2015-06-06 18:59:34', ''),
(64, 'lad', '130', 'ee', '2015-06-06 19:14:34', ''),
(65, 'lad', '130', '44', '2015-06-06 19:20:03', ''),
(66, 'lad', '130', '33', '2015-06-06 19:20:09', ''),
(67, 'lad', '130', 'wewe', '2015-06-06 19:20:45', ''),
(68, 'lad', '130', 'w', '2015-06-06 19:21:06', ''),
(69, 'lad', '130', 'aha', '2015-06-06 19:21:42', ''),
(70, 'lad', '130', 'a', '2015-06-06 19:24:12', ''),
(71, 'lad', '130', 'check', '2015-06-06 19:27:01', ''),
(72, 'lad', '130', 'lorol', '2015-06-06 19:27:13', ''),
(73, 'lad', '130', 'zu', '2015-06-06 19:27:30', ''),
(74, 'lad', '130', 'aaa', '2015-06-06 19:28:16', ''),
(75, 'lad', '130', 'pp', '2015-06-06 19:28:52', ''),
(76, 'lad', '130', 'rr', '2015-06-06 19:29:10', ''),
(77, 'lad', '130', 'juhu', '2015-06-06 19:30:32', ''),
(78, 'lad', '130', 'check', '2015-06-06 19:31:16', ''),
(79, 'lad', '130', 'lsjs', '2015-06-06 19:31:29', ''),
(80, 'lad', '130', 'vv', '2015-06-06 19:31:58', ''),
(81, 'lad', '130', 'tescht', '2015-06-07 10:33:41', ''),
(82, 'lad', '130', 'ww', '2015-06-07 10:34:10', ''),
(83, 'lad', '130', 'aa', '2015-06-07 10:34:23', ''),
(84, 'lad', '130', 'ss', '2015-06-07 10:34:32', ''),
(85, 'lad', '130', 'q', '2015-06-07 10:42:57', ''),
(86, 'lad', '130', 'sjsj', '2015-06-07 10:46:27', ''),
(87, 'lad', '130', 'sd', '2015-06-07 10:47:46', ''),
(88, 'lad', '130', 'sd', '2015-06-07 10:49:01', ''),
(89, 'lad', '130', 'oo', '2015-06-07 10:49:47', ''),
(90, 'lad', '130', 'oo', '2015-06-07 10:49:50', ''),
(91, 'lad', '130', 'owowo', '2015-06-07 10:50:03', ''),
(92, 'lad', '130', 'pppa', '2015-06-07 10:50:50', ''),
(93, 'lad', '130', 'pppaasas', '2015-06-07 10:51:03', ''),
(94, 'lad', '130', 'sas', '2015-06-07 10:51:21', ''),
(95, 'lad', '130', 'saswewe', '2015-06-07 10:51:33', ''),
(96, 'lad', '130', 'saswewe', '2015-06-07 10:51:35', ''),
(97, 'lad', '130', 'dkfjwepofÃ¼pewfpÃ¼eÃ¼jpw Ã¼jewÃ¼fÃ¼jwe f', '2015-06-07 10:51:50', ''),
(98, 'lad', '130', 'sdqq', '2015-06-07 10:52:59', ''),
(99, 'lad', '130', 'sdqqsdsd', '2015-06-07 10:53:02', ''),
(100, 'lad', '130', 'sdsd', '2015-06-07 10:54:02', ''),
(101, 'lad', '130', 'qwrqweqw wqe qwe ', '2015-06-07 10:54:09', ''),
(102, 'lad', '130', 'bbb', '2015-06-07 10:55:08', ''),
(103, 'lad', '130', 'sdsdsd', '2015-06-07 10:57:58', ''),
(104, 'lad', '130', 'hallo dani', '2015-06-07 10:58:34', ''),
(105, 'lad', '130', 'sdsd', '2015-06-07 11:00:14', ''),
(106, 'lad', '130', 'yy', '2015-06-07 11:03:55', ''),
(107, 'lad', '130', 'p', '2015-06-07 11:04:21', ''),
(108, 'lad', '130', 'lfppf', '2015-06-07 11:05:11', ''),
(109, 'lad', '130', 'wrwr', '2015-06-07 11:11:07', ''),
(110, 'lad', '126', 'dd', '2015-06-07 11:14:18', ''),
(111, 'lad', '126', 'wwe', '2015-06-07 11:14:29', ''),
(112, 'lad', '126', 'asa', '2015-06-07 11:17:59', ''),
(113, 'lad', '126', 'sdsd', '2015-06-07 11:21:42', ''),
(114, 'lad', '126', 'sd', '2015-06-07 11:22:06', ''),
(115, 'lad', '126', 'a', '2015-06-07 11:22:27', ''),
(116, 'lad', '126', 'aaa', '2015-06-07 11:23:14', ''),
(117, 'lad', '126', 'yy', '2015-06-07 11:23:30', ''),
(118, 'lad', '126', 'q', '2015-06-07 11:24:03', ''),
(119, 'lad', '126', 'aaa', '2015-06-07 11:24:15', ''),
(120, 'lad', '126', 'a', '2015-06-07 11:25:50', ''),
(121, 'lad', '126', 'y', '2015-06-07 11:26:30', ''),
(122, 'lad', '126', 'a', '2015-06-07 11:27:02', ''),
(123, 'lad', '126', 'qq', '2015-06-07 11:32:00', ''),
(124, 'lad', '126', 'pff', '2015-06-07 11:32:27', ''),
(125, 'lad', '126', 'asa', '2015-06-07 11:33:11', ''),
(126, 'lad', '126', 'sda', '2015-06-07 11:34:08', ''),
(127, 'lad', '126', 'lljjh', '2015-06-07 11:34:20', ''),
(128, 'lad', '126', 'spso', '2015-06-07 11:34:36', ''),
(129, 'lad', '126', 'sjsj', '2015-06-07 11:36:57', ''),
(130, 'lad', '126', 'pfofi', '2015-06-07 11:37:29', ''),
(131, 'lad', '126', 'nene<br />', '2015-06-07 12:38:37', ''),
(132, 'lad', '126', 'sdsd', '2015-06-07 12:40:33', ''),
(133, 'lad', '126', 'asdnascj', '2015-06-07 12:42:21', ''),
(134, 'lad', '126', 'fdhdh', '2015-06-07 12:50:04', ''),
(135, 'lad', '126', 'wdqw', '2015-06-07 12:55:58', ''),
(136, 'lad', '126', 'sd', '2015-06-07 16:00:41', ''),
(137, 'lad', '126', 'sdsd', '2015-06-07 16:06:17', ''),
(138, 'lad', '126', 'sdsd', '2015-06-07 16:07:45', ''),
(139, 'lad', '126', 'sdsd', '2015-06-07 16:07:49', ''),
(140, 'lad', '126', 'sdsd', '2015-06-07 16:08:21', ''),
(141, 'lad', '126', 'sdsd', '2015-06-07 16:08:38', ''),
(142, 'lad', '126', 'avocado', '2015-06-07 16:09:01', ''),
(143, 'lad', '126', 'sd', '2015-06-07 16:13:04', ''),
(144, 'lad', '126', 'asas', '2015-06-07 16:23:20', ''),
(145, 'lad', '126', 'sd', '2015-06-07 16:26:50', ''),
(146, 'lad', '126', 'we', '2015-06-07 16:27:05', ''),
(147, 'lad', '126', 'q', '2015-06-07 16:27:28', ''),
(148, 'lad', '126', 'asas', '2015-06-07 16:30:32', ''),
(149, 'lad', '126', 'as', '2015-06-07 16:32:06', ''),
(150, 'lad', '126', 'as', '2015-06-07 16:32:07', ''),
(151, 'lad', '127', 'Hallo', '2015-06-07 16:38:55', ''),
(152, 'lad', '127', 'aa', '2015-06-07 16:46:49', ''),
(153, 'lad', '127', 'asas', '2015-06-07 17:10:29', ''),
(154, 'lad', '127', 'kuhl', '2015-06-07 17:51:57', ''),
(155, 'lad', '175', 'wÃ¼rklech', '2015-06-09 06:23:56', ''),
(156, 'lad', '129', 's', '2015-06-09 06:34:25', ''),
(157, 'lad', '129', 'test', '2015-06-09 06:36:59', ''),
(158, 'lad', '129', 'testa', '2015-06-09 06:37:09', ''),
(159, 'lad', '152', 'dd', '2015-06-13 10:35:41', ''),
(160, 'lad', '152', 'lol', '2015-06-13 10:35:50', ''),
(161, 'lad', '152', 'na<br />', '2015-06-13 10:39:14', ''),
(162, 'lad', '152', 'dd', '2015-06-13 10:39:32', ''),
(163, 'lad', '152', 'ddddd', '2015-06-13 10:40:13', ''),
(164, 'lad', '152', 'fff', '2015-06-13 10:40:34', ''),
(165, 'lad', '152', 'fffsdsd', '2015-06-13 10:40:41', ''),
(166, 'lad', '152', 'sds', '2015-06-13 10:40:44', ''),
(167, 'lad', '152', 'yyay', '2015-06-13 10:48:44', ''),
(168, 'lad', '152', 'asas', '2015-06-13 10:49:41', ''),
(169, 'lad', '152', 'aa', '2015-06-13 10:50:14', ''),
(170, 'lad', '152', 'as', '2015-06-13 10:53:04', ''),
(171, 'lad', '152', 'a', '2015-06-13 10:53:27', ''),
(172, 'lad', '152', 'q', '2015-06-13 11:13:15', ''),
(173, 'lad', '152', 'qdd', '2015-06-13 11:13:23', ''),
(174, 'lad', '119', 'ss', '2015-06-13 11:18:21', ''),
(175, 'lad', '119', 'd', '2015-06-13 11:18:41', ''),
(176, 'lad', '119', 'd', '2015-06-13 11:18:41', ''),
(177, 'lad', '119', 's', '2015-06-13 11:30:28', ''),
(178, 'lad', '119', 'sd', '2015-06-13 11:30:57', ''),
(179, 'lad', '119', 'sddd', '2015-06-13 11:31:07', ''),
(180, 'lad', '119', 'hallo<br />', '2015-06-13 11:31:24', ''),
(181, 'lad', '119', 'nr', '2015-06-13 11:31:42', ''),
(182, 'lad', '119', 'nr', '2015-06-13 11:31:46', ''),
(183, 'lad', '119', 'nr', '2015-06-13 11:32:07', ''),
(184, 'lad', '119', 'nrdd', '2015-06-13 11:32:14', ''),
(185, 'lad', '119', 'nrddx', '2015-06-13 11:32:25', ''),
(186, 'lad', '119', 'nrddxd', '2015-06-13 11:32:40', ''),
(187, 'lad', '119', 'a', '2015-06-13 11:32:48', ''),
(188, 'lad', '119', 'a', '2015-06-13 11:32:50', ''),
(189, 'lad', '119', 'aaa', '2015-06-13 11:36:48', ''),
(190, 'lad', '119', 'aa', '2015-06-13 11:37:19', ''),
(191, 'lad', '119', 'asa', '2015-06-13 11:41:25', ''),
(192, 'lad', '119', 'as', '2015-06-13 11:42:04', ''),
(193, 'lad', '119', 'dd', '2015-06-13 11:44:57', ''),
(194, 'lad', '119', 'a', '2015-06-13 11:45:30', ''),
(195, 'lad', '128', 'a', '2015-06-13 11:54:53', ''),
(196, 'lad', '128', 'sdsd', '2015-06-13 11:54:58', ''),
(197, 'lad', '128', 'aha', '2015-06-13 11:55:10', ''),
(198, 'lad', '128', 'aa', '2015-06-13 11:55:41', ''),
(199, 'lad', '128', 'a', '2015-06-13 12:00:55', ''),
(200, 'lad', '128', 'oho', '2015-06-13 12:01:09', ''),
(201, 'lad', '128', 'oho', '2015-06-13 12:01:13', ''),
(202, 'lad', '128', 'next', '2015-06-13 12:02:46', ''),
(203, 'lad', '128', 'next', '2015-06-13 12:03:13', ''),
(204, 'lad', '128', 's', '2015-06-13 12:07:50', ''),
(205, 'lad', '128', 'hzh', '2015-06-13 12:55:27', ''),
(206, 'lad', '128', 'khgj', '2015-06-13 12:55:37', ''),
(207, 'lad', '128', 'test', '2015-06-13 12:56:16', ''),
(208, 'lad', '128', 'test', '2015-06-13 12:57:23', ''),
(209, 'lad', '128', 'a', '2015-06-13 12:57:30', ''),
(210, 'lad', '128', 'a', '2015-06-13 12:59:25', ''),
(211, 'lad', '128', 'o', '2015-06-13 12:59:32', ''),
(212, 'lad', '128', 'o', '2015-06-13 12:59:46', ''),
(213, 'lad', '128', 'lol', '2015-06-13 13:02:19', ''),
(214, 'lad', '128', 's', '2015-06-13 13:02:39', ''),
(215, 'lad', '128', 's', '2015-06-13 13:03:19', ''),
(216, 'lad', '128', 'ss', '2015-06-13 13:13:54', ''),
(217, 'lad', '128', 'vvv', '2015-06-13 13:15:50', ''),
(218, 'lad', '128', 'a', '2015-06-13 13:24:46', ''),
(219, 'lad', '128', 'emm', '2015-06-13 13:44:15', ''),
(220, 'lad', '128', 'a', '2015-06-13 13:50:52', ''),
(221, 'lad', '128', 'asa', '2015-06-13 13:59:53', ''),
(222, 'lad', '128', 'a', '2015-06-13 14:00:13', ''),
(223, 'lad', '128', 'aa', '2015-06-13 14:00:31', ''),
(224, 'lad', '128', 'aa', '2015-06-13 14:01:14', ''),
(225, 'lad', '128', 'dddd', '2015-06-13 16:03:47', ''),
(226, 'lad', '128', 'ss', '2015-06-13 16:44:09', ''),
(227, 'lad', '128', 'dgf', '2015-06-13 16:46:30', ''),
(228, 'lad', '128', 'sd', '2015-06-13 16:58:15', ''),
(229, 'lad', '124', 'ddd', '2015-06-13 17:10:49', ''),
(230, 'lad', '143', 'test', '2015-06-13 17:14:48', ''),
(231, 'lad', '143', 'e', '2015-06-13 20:57:14', ''),
(232, 'lad', '140', 'Test', '2015-06-14 08:45:39', ''),
(233, 'lad', '132', 'Test', '2015-06-14 08:56:47', ''),
(234, 'lad', '139', 'test', '2015-06-14 09:03:25', ''),
(235, 'lad', '146', 'test<br />', '2015-06-14 09:33:35', ''),
(236, 'lad', '151', 'hallo', '2015-06-14 10:57:40', ''),
(237, 'lad', '151', 'tescht', '2015-06-14 10:59:26', ''),
(238, 'lad', '151', 'hallo', '2015-06-14 10:59:42', ''),
(239, 'lad', '150', 'sds', '2015-06-14 11:06:20', ''),
(240, 'lad', '150', 'sds', '2015-06-14 11:06:54', ''),
(241, 'lad', '150', 'ddd', '2015-06-14 11:09:51', ''),
(242, 'lad', '122', 'dsd', '2015-06-14 12:03:35', ''),
(243, 'lad', '122', 'dsdass', '2015-06-14 12:04:04', ''),
(244, 'lad', '122', 'dsdass', '2015-06-14 12:04:31', ''),
(245, 'lad', '122', 'iiii', '2015-06-14 12:16:11', ''),
(246, 'lad', '122', 'sdsd', '2015-06-14 12:17:41', ''),
(247, 'lad', '122', 'hallo<br />', '2015-06-14 12:17:48', ''),
(248, 'lad', '122', 'hallo<br />', '2015-06-14 12:18:11', ''),
(249, 'lad', '122', 'sss', '2015-06-14 13:02:16', ''),
(250, 'lad', '122', 'sss', '2015-06-14 13:04:35', ''),
(251, 'lad', '122', 'sdsd', '2015-06-14 13:05:11', ''),
(252, 'lad', '122', 's', '2015-06-14 13:08:50', ''),
(253, 'lad', '122', 'dd', '2015-06-14 13:08:56', ''),
(254, 'lad', '122', 'dd', '2015-06-14 13:09:16', ''),
(255, 'lad', '122', 'rrr', '2015-06-14 13:09:37', ''),
(256, 'lad', '122', 'sdsd', '2015-06-14 14:07:44', ''),
(257, 'lad', '122', 'sd', '2015-06-14 14:08:03', ''),
(258, 'lad', '122', 'ssd', '2015-06-14 14:08:11', ''),
(259, 'lad', '122', 'sd', '2015-06-14 14:09:45', ''),
(260, 'lad', '126', 'was', '2015-06-15 22:44:20', ''),
(261, 'lad', '126', 'was', '2015-06-15 22:44:39', ''),
(262, 'lad', '126', 'was', '2015-06-15 22:44:43', ''),
(263, 'lad', '126', 'nÃ¶', '2015-06-15 22:44:55', ''),
(264, 'lad', '126', 'sd', '2015-06-15 22:45:38', ''),
(265, 'lad', '126', 'sdsdsd', '2015-06-15 22:46:21', ''),
(266, 'lad', '126', 'asasas', '2015-06-15 22:46:56', ''),
(267, 'lad', '126', 'aha', '2015-06-15 22:48:44', ''),
(268, 'lad', '126', 'ko', '2015-06-15 23:14:49', ''),
(269, 'lad', '126', 'nada', '2015-06-16 22:08:07', ''),
(270, 'lad', '126', 'tescht', '2015-06-16 22:10:21', ''),
(271, 'lad', '126', 'tescht', '2015-06-16 22:10:23', ''),
(272, 'lad', '126', 'tischt', '2015-06-16 22:10:35', ''),
(273, 'lad', '126', 'tischt', '2015-06-16 22:10:38', ''),
(274, 'lad', '126', 'tischt', '2015-06-16 22:11:01', ''),
(275, 'lad', '126', 'tischt', '2015-06-16 22:11:29', ''),
(276, 'lad', '126', 'boom', '2015-06-16 22:14:29', ''),
(277, 'lad', '126', 'boom', '2015-06-16 22:14:50', ''),
(278, 'lad', '126', 'mann', '2015-06-16 22:15:02', ''),
(279, 'lad', '126', 'mann', '2015-06-16 22:17:35', ''),
(280, 'lad', '126', 'soso', '2015-06-16 22:17:49', ''),
(281, 'lad', '126', 'wie', '2015-06-16 22:19:47', ''),
(282, 'lad', '126', 'wie', '2015-06-16 22:20:38', ''),
(283, 'lad', '126', 'oo', '2015-06-16 22:21:52', ''),
(284, 'lad', '126', 'oo', '2015-06-16 22:22:00', ''),
(285, 'lad', '126', 'as', '2015-06-16 22:22:45', ''),
(286, 'lad', '126', 'a', '2015-06-16 22:24:59', ''),
(287, 'lad', '126', 'a', '2015-06-16 22:25:23', ''),
(288, 'lad', '126', 'so', '2015-06-16 22:27:27', ''),
(289, 'lad', '126', 'q', '2015-06-16 22:29:14', ''),
(290, 'lad', '126', 'right', '2015-06-16 22:30:47', ''),
(291, 'lad', '126', 'w', '2015-06-16 22:30:54', ''),
(292, 'lad', '126', 'wat', '2015-06-16 22:32:32', ''),
(293, 'lad', '126', 'wat', '2015-06-16 22:33:00', ''),
(294, 'lad', '126', 'a', '2015-06-16 22:34:40', ''),
(295, 'lad', '126', 'i', '2015-06-16 22:35:44', ''),
(296, 'lad', '126', 'i', '2015-06-16 22:36:36', ''),
(297, 'lad', '126', 'a', '2015-06-16 22:36:49', ''),
(298, 'lad', '126', 'aaaa', '2015-06-16 22:37:41', ''),
(299, 'lad', '126', 'aaaa', '2015-06-16 22:38:06', ''),
(300, 'lad', '126', 'aasas', '2015-06-16 22:38:12', ''),
(301, 'lad', '126', 'oooh', '2015-06-16 22:39:15', ''),
(302, 'lad', '126', 'oooh', '2015-06-16 22:39:31', ''),
(303, 'lad', '126', 'a', '2015-06-16 22:39:37', ''),
(304, 'lad', '126', 'asasa', '2015-06-16 22:42:30', ''),
(305, 'lad', '126', 'aaa', '2015-06-16 22:42:54', ''),
(306, 'lad', '126', 'asasas', '2015-06-16 22:44:18', ''),
(307, 'lad', '126', 'geil', '2015-06-16 22:45:09', ''),
(308, 'lad', '126', 'asa', '2015-06-16 22:45:34', ''),
(309, 'lad', '126', 'asaaaaa', '2015-06-16 22:50:04', ''),
(310, 'lad', '126', 'addaf', '2015-06-16 22:56:29', ''),
(311, 'lad', '126', 'aa', '2015-06-16 23:00:01', ''),
(312, 'lad', '126', 'aa', '2015-06-16 23:00:18', ''),
(313, 'lad', '126', 'aa', '2015-06-16 23:01:45', ''),
(314, 'lad', '126', 'as', '2015-06-16 23:02:17', ''),
(315, 'lad', '126', 'a', '2015-06-16 23:04:43', ''),
(316, 'lad', '126', 'wret', '2015-06-16 23:06:45', ''),
(317, 'lad', '126', 'a', '2015-06-16 23:08:22', ''),
(318, 'lad', '126', 'assjdjd', '2015-06-16 23:08:28', ''),
(319, 'lad', '126', 'assjdjdsdsdd', '2015-06-16 23:08:31', ''),
(320, 'lad', '126', 'assjdjdsdsdd', '2015-06-16 23:08:54', ''),
(321, 'lad', '126', 'sdfsdg', '2015-06-16 23:09:01', ''),
(322, 'lad', '126', 'asd', '2015-06-16 23:09:18', ''),
(323, 'lad', '126', 'as', '2015-06-16 23:09:49', ''),
(324, 'lad', '126', 's', '2015-06-16 23:10:07', ''),
(325, 'lad', '126', 'aaa', '2015-06-16 23:10:49', ''),
(326, 'lad', '126', 'aaaa', '2015-06-16 23:10:55', ''),
(327, 'lad', '126', 'aaaaddd', '2015-06-16 23:10:57', ''),
(328, 'lad', '126', 's', '2015-06-16 23:11:18', ''),
(329, 'lad', '126', 'sdgdg', '2015-06-16 23:11:21', ''),
(330, 'lad', '126', 'sdgdg', '2015-06-16 23:11:32', ''),
(331, 'lad', '126', 'sddff', '2015-06-16 23:11:40', ''),
(332, 'lad', '126', 'sdsd', '2015-06-16 23:15:37', ''),
(333, 'lad', '126', 'aa', '2015-06-16 23:15:57', ''),
(334, 'lad', '126', 'sdsd', '2015-06-16 23:16:46', ''),
(335, 'lad', '126', 'sdsd', '2015-06-16 23:16:53', ''),
(336, 'lad', '126', 'asa', '2015-06-16 23:17:09', ''),
(337, 'lad', '126', 'sdsd', '2015-06-16 23:18:12', ''),
(338, 'lad', '126', 'asas', '2015-06-16 23:19:18', ''),
(339, 'lad', '126', 'sdsd', '2015-06-16 23:20:18', ''),
(340, 'lad', '126', 'sd', '2015-06-16 23:21:15', ''),
(341, 'lad', '126', 'sd', '2015-06-16 23:21:34', ''),
(342, 'lad', '126', 'a', '2015-06-16 23:21:41', ''),
(343, 'lad', '126', 'asas', '2015-06-16 23:23:02', ''),
(344, 'lad', '126', 'aa', '2015-06-16 23:24:46', ''),
(345, 'lad', '126', 'asas', '2015-06-16 23:29:10', ''),
(346, 'lad', '126', 'asas', '2015-06-16 23:30:42', ''),
(347, 'lad', '126', 'fggg', '2015-06-16 23:33:55', ''),
(348, 'lad', '126', 'asas', '2015-06-16 23:35:27', ''),
(349, 'lad', '126', 'sdsd', '2015-06-16 23:36:20', ''),
(350, 'lad', '126', 'sdsd', '2015-06-16 23:36:33', ''),
(351, 'lad', '126', 'ssf', '2015-06-16 23:38:54', ''),
(352, 'lad', '126', 'asas', '2015-06-16 23:40:44', ''),
(353, 'lad', '126', 'asas', '2015-06-16 23:41:12', ''),
(354, 'lad', '126', 'sdsd', '2015-06-16 23:45:43', ''),
(355, 'lad', '126', 'aa', '2015-06-16 23:47:20', ''),
(356, 'lad', '126', 'ass', '2015-06-16 23:48:10', ''),
(357, 'lad', '126', 'ass', '2015-06-16 23:48:12', ''),
(358, 'lad', '126', 'ass', '2015-06-16 23:48:13', ''),
(359, 'lad', '126', 'as', '2015-06-16 23:48:31', ''),
(360, 'lad', '126', 'aa', '2015-06-16 23:52:09', ''),
(361, 'lad', '126', 'ewtewt', '2015-06-16 23:53:31', ''),
(362, 'lad', '126', 'asas', '2015-06-16 23:53:47', ''),
(363, 'lad', '126', 'asas', '2015-06-16 23:53:53', ''),
(364, 'lad', '126', 'agsdgsdgdsg', '2015-06-16 23:54:00', ''),
(365, 'lad', '126', 'asasa', '2015-06-16 23:54:31', ''),
(366, 'lad', '126', 'asasa', '2015-06-16 23:55:09', ''),
(367, 'lad', '126', 'qwqw', '2015-06-16 23:55:17', ''),
(368, 'lad', '126', 'asas', '2015-06-16 23:57:54', ''),
(369, 'lad', '126', 'sss', '2015-06-16 23:59:20', ''),
(370, 'lad', '126', 'asas', '2015-06-17 00:00:40', ''),
(371, 'lad', '126', 'sd', '2015-06-17 00:00:59', ''),
(372, 'lad', '126', 'asasaa', '2015-06-17 00:03:05', ''),
(373, 'lad', '126', 'asas', '2015-06-17 00:03:19', ''),
(374, 'lad', '126', 'asas', '2015-06-17 00:05:07', ''),
(375, 'lad', '126', 'asas', '2015-06-17 00:05:19', ''),
(376, 'lad', '126', 'yxyx', '2015-06-17 00:08:50', ''),
(377, 'lad', '126', 'sd', '2015-06-17 07:41:22', ''),
(378, 'lad', '126', 'a', '2015-06-17 07:43:50', ''),
(379, 'lad', '126', 'af', '2015-06-17 07:44:46', ''),
(380, 'lad', '126', 'sdsd', '2015-06-17 07:45:14', ''),
(381, 'lad', '126', 'asa', '2015-06-17 07:46:27', ''),
(382, 'lad', '126', 'eder', '2015-06-17 07:48:19', ''),
(383, 'lad', '126', 'wee', '2015-06-17 07:48:40', ''),
(384, 'lad', '126', 'wee', '2015-06-18 19:54:58', ''),
(385, 'lad', '160', 'dd', '2015-06-20 11:22:57', ''),
(386, 'lad', '160', 's', '2015-06-20 11:24:39', ''),
(387, 'lad', '', 'w', '2015-06-20 11:26:19', ''),
(388, 'lad', '', 'sds<br />', '2015-06-20 11:26:54', ''),
(389, 'lad', '160', 'wewe', '2015-06-20 11:28:09', ''),
(390, 'lad', '160', 'q', '2015-06-20 11:28:33', ''),
(391, 'lad', '160', 'sds', '2015-06-20 11:29:04', ''),
(392, 'lad', '160', 'test', '2015-06-20 11:31:41', ''),
(393, 'lad', '160', 'z', '2015-06-20 11:33:43', ''),
(394, 'lad', '160', 'dd', '2015-06-20 11:41:55', ''),
(395, 'lad', '160', 'iiii', '2015-06-20 11:42:37', ''),
(396, 'lad', '160', 'hallo', '2015-06-20 11:44:22', ''),
(397, 'lad', '160', 'no', '2015-06-20 11:54:18', ''),
(398, 'lad', '160', 'sd', '2015-06-21 10:30:31', ''),
(399, 'lad', '160', 'sffgrg', '2015-06-21 10:30:35', ''),
(400, 'lad', '160', 'aha', '2015-06-21 10:33:21', ''),
(401, 'lad', '160', 'lokinnub', '2015-06-21 10:34:07', ''),
(402, 'lad', '160', 'lokinnub', '2015-06-21 10:34:09', ''),
(403, 'lad', '160', 'wewe', '2015-06-21 10:34:11', ''),
(404, 'lad', '140', 'Nice image<br />', '2015-06-21 10:34:43', ''),
(405, 'lad', '140', 's', '2015-06-21 10:37:14', ''),
(406, 'lad', '140', 'Das ist gut', '2015-06-21 10:38:54', ''),
(407, 'lad', '140', 'Oder', '2015-06-21 10:38:57', ''),
(408, 'lad', '140', 'Sehr sehr geil', '2015-06-21 10:39:03', ''),
(409, 'lad', '140', 'Cooles Photo.', '2015-06-21 10:39:47', ''),
(410, 'lad', '140', 'sdsd', '2015-06-21 10:42:59', ''),
(411, 'lad', '140', 'wieso', '2015-06-21 10:43:59', ''),
(412, 'lad', '140', 'a', '2015-06-21 10:44:54', ''),
(413, 'lad', '140', 'sdsd', '2015-06-21 10:45:26', ''),
(414, 'lad', '163', 'test', '2015-06-21 10:54:18', ''),
(415, 'lad', '163', 'ssdd', '2015-06-21 10:54:24', ''),
(416, 'lad', '163', 'es geit.', '2015-06-21 10:56:56', ''),
(417, 'lad', '163', 'd', '2015-06-21 10:57:40', ''),
(418, 'lad', '163', 'ewetewt', '2015-06-21 10:58:11', ''),
(419, 'lad', '163', 'as', '2015-06-21 10:59:16', ''),
(420, 'lad', '163', 'assdsd sd', '2015-06-21 10:59:20', ''),
(421, 'lad', '163', 'sdsd', '2015-06-21 11:01:11', ''),
(422, 'lad', '163', 'sdsd', '2015-06-21 11:01:12', ''),
(423, 'lad', '163', 'sdsd', '2015-06-21 11:01:13', ''),
(424, 'lad', '163', 'asa', '2015-06-21 11:01:32', ''),
(425, 'lad', '163', 'asaasas', '2015-06-21 11:01:34', ''),
(426, 'lad', '163', 'a', '2015-06-21 11:02:06', ''),
(427, 'lad', '163', 'a', '2015-06-21 11:02:38', ''),
(428, 'lad', '163', 'addd', '2015-06-21 11:02:40', ''),
(429, 'lad', '163', 'a', '2015-06-21 11:03:24', ''),
(430, 'lad', '163', 'asds', '2015-06-21 11:03:26', ''),
(431, 'lad', '163', 'sdsdasds', '2015-06-21 11:03:28', ''),
(432, 'lad', '163', 'a', '2015-06-21 11:04:10', ''),
(433, 'lad', '163', 'aasas', '2015-06-21 11:04:34', ''),
(434, 'lad', '163', 'a', '2015-06-21 11:04:46', ''),
(435, 'lad', '163', 'asdsd', '2015-06-21 11:04:48', ''),
(436, 'lad', '119', 'uhjgdsfhkefw', '2015-10-10 09:41:14', ''),
(437, 'lad', '119', 'ugggu', '2015-10-10 09:41:32', ''),
(438, 'lad', '119', 'ugggumjghjg', '2015-10-10 09:41:35', ''),
(439, 'lad', '119', 'koo', '2015-10-10 09:41:55', ''),
(440, 'lad', '131', 'ja', '2015-10-10 10:48:22', ''),
(441, 'lad', '131', 'nein', '2015-10-10 10:48:27', ''),
(442, 'lad', '131', 'lol', '2015-10-10 10:48:39', ''),
(443, '&lt;br /&gt;<br />&lt;b&gt;Notice&lt;/b&gt;:  Undefined variable: member_name in &lt;b&gt;/Applications/XAMPP/xamppfiles/htdocs/', '131', 'so', '2015-10-10 10:50:27', ''),
(444, '&lt;br /&gt;<br />&lt;b&gt;Notice&lt;/b&gt;:  Undefined variable: member_name in &lt;b&gt;/Applications/XAMPP/xamppfiles/htdocs/', '131', 'was', '2015-10-10 10:50:38', ''),
(445, '&lt;br /&gt;<br />&lt;b&gt;Notice&lt;/b&gt;:  Undefined variable: member_name in &lt;b&gt;/Applications/XAMPP/xamppfiles/htdocs/', '131', 'ne<br />', '2015-10-10 10:50:43', ''),
(446, 'lad', '121', 'test', '2015-10-10 10:54:48', ''),
(447, 'lad', '121', 'test', '2015-10-10 10:54:51', ''),
(448, 'lad', '121', 'sdsd', '2015-10-10 10:54:53', ''),
(449, 'lad', '121', 'sdsd', '2015-10-10 10:55:02', ''),
(450, 'lad', '121', 'sdsd', '2015-10-10 10:55:04', ''),
(451, 'lad', '121', 'sdsd', '2015-10-10 10:55:06', ''),
(452, 'lad', '119', 'es funktioniert', '2015-10-10 10:55:41', ''),
(453, 'kobold', '120', 'Test', '2015-10-15 22:42:31', ''),
(454, 'kobold', '123', 's', '2015-10-15 22:42:52', ''),
(455, 'kobold', '123', 'soso', '2015-10-15 22:42:59', ''),
(456, 'kobold', '123', 'soso', '2015-10-15 22:43:02', ''),
(457, 'kobold', '126', 'wewe', '2015-10-15 22:44:11', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fc_flashcard`
--

CREATE TABLE IF NOT EXISTS `fc_flashcard` (
  `flashcard_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gallery_category`
--

CREATE TABLE IF NOT EXISTS `gallery_category` (
`category_id` bigint(20) unsigned NOT NULL,
  `category_name` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gallery_category`
--

INSERT INTO `gallery_category` (`category_id`, `category_name`) VALUES
(1, 'Animals'),
(2, 'Cars'),
(3, 'People'),
(4, 'Blur'),
(5, 'Plants'),
(6, 'Architecture');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gallery_photos`
--

CREATE TABLE IF NOT EXISTS `gallery_photos` (
`photo_id` bigint(20) unsigned NOT NULL,
  `photo_category` text NOT NULL,
  `photo_filename` varchar(25) DEFAULT NULL,
  `photo_caption` text,
  `photo_user` varchar(60) DEFAULT NULL,
  `orientation` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gallery_photos`
--

INSERT INTO `gallery_photos` (`photo_id`, `photo_category`, `photo_filename`, `photo_caption`, `photo_user`, `orientation`) VALUES
(119, 'Animals', '119.jpg', 'bird pelican', 'emma99', 'vertical'),
(120, 'Animals', '120.jpg', 'bird pelican', NULL, 'vertical'),
(121, 'Animals', '121.jpg', 'bird pelican', NULL, 'vertical'),
(122, 'Animals', '122.jpg', 'bird pelican', NULL, 'vertical'),
(123, 'Animals', '123.jpg', 'bird pelican', NULL, 'vertical'),
(124, 'Animals', '124.jpg', 'bird pelican', NULL, 'vertical'),
(125, 'Animals', '125.jpg', 'bird pelican', NULL, 'vertical'),
(126, 'Animals', '126.jpg', 'Test', 'Samuel', 'vertical'),
(127, 'Animals', '127.jpg', 'Test', NULL, 'vertical'),
(128, 'Animals', '128.jpg', 'Test', NULL, 'vertical'),
(129, 'Animals', '129.jpg', 'Test', NULL, 'vertical'),
(130, 'Animals', '130.jpg', 'Test', NULL, 'vertical'),
(131, 'Animals', '131.jpg', 'Test', NULL, 'vertical'),
(132, 'Plants', '132.jpg', '', NULL, 'vertical'),
(133, 'Plants', '133.jpg', 'Free,Stock,Images', NULL, 'vertical'),
(134, 'Animals', '134.jpg', 'Free,Stock,Images,duck,animal,river', NULL, 'vertical'),
(135, 'Cars', '135.jpg', 'Free,Stock,Images,moon', NULL, 'vertical'),
(136, 'Plants', '136.jpg', 'Free,Stock,Images,moon', NULL, 'vertical'),
(137, 'Animals', '137.jpg', 'affe', NULL, 'vertical'),
(138, 'Blur', '138.jpg', 'Free,Stock,Images,quad', 'fritz', 'vertical'),
(139, 'Animals', '139.jpg', 'Free,Stock,Images,surf', '', 'vertical'),
(140, 'Animals', '140.jpg', 'Free,Stock,Images,fish', 'emma99', 'vertical'),
(141, 'Animals', '141.jpg', 'Free,Stock,Images,people', 'emma99', 'vertical'),
(142, 'Architecture', '142.jpg', 'Free,Stock,Images,Guinness,Brewery', '', 'vertical'),
(143, 'People', '143.jpg', 'Free,Stock,Images,Clocks', '', 'vertical'),
(144, 'Animals', '144.jpg', 'Free,Stock,Images,waterfall', '', 'vertical'),
(145, 'Animals', '145.jpg', 'Free,Stock,Images,waterfall', 'lad', 'vertical'),
(146, 'Cars', '146.jpg', 'Free,Stock,Images,ship', '', 'vertical'),
(147, 'Cars', '147.jpg', 'Free,Stock,Images,ship', '', 'vertical'),
(148, 'Blur', '148.jpg', 'Free,Stock,Images', '', 'vertical'),
(149, 'Animals', '149.jpg', 'Free,Stock,Images,brick,wall', '', 'vertical'),
(150, 'Animals', '150.jpg', 'Free,Stock,Images,blob', '', 'vertical'),
(151, 'Animals', '151.jpg', 'Free,Stock,Images,blob', '', 'vertical'),
(152, 'Animals', '152.jpg', 'Free,Stock,Images,blob', '', 'vertical'),
(153, 'Animals', '153.jpg', 'Free,Stock,Images,blob', '', 'vertical'),
(154, 'Animals', '154.jpg', 'Free,Stock,Images,blob', '', 'vertical'),
(155, 'Animals', '155.jpg', 'Free,Stock,Images,blob', '', 'vertical'),
(156, 'Animals', '156.jpg', 'Free,Stock,Images,blob,horizontal', '', 'vertical'),
(157, '', NULL, NULL, NULL, 'vertical'),
(158, 'Animals', '158.jpg', 'Free,Stock,Images,blob,horizontal', '', 'vertical'),
(159, 'Animals', '159.jpg', 'Free,Stock,Images,blob,horizontal', '', 'vertical'),
(160, 'Animals', '160.jpg', 'Free,Stock,Images,blob,horizontal', '', 'vertical'),
(161, 'Animals', '161.jpg', 'Free,Stock,Images,blob,horizontal,hallo', '', 'vertical'),
(162, 'Animals', '162.jpg', 'Free,Stock,Images,blob,horizontal,hallo', '', 'vertical'),
(163, 'Animals', '163.jpg', 'Free,Stock,Images,blob,horizontal,hallo', '', 'horizontal'),
(164, 'Animals', '164.jpg', 'Free,Stock,Images,blob,horizontal,hallo', '', 'horizontal'),
(165, 'Animals', '165.jpg', 'Free,Stock,Images,lala', '', 'vertical'),
(166, 'Animals', '166.jpg', 'Free,Stock,Images,lala', '', 'horizontal'),
(167, 'Animals', '167.jpg', 'Free,Stock,Images,lala', '', 'horizontal'),
(168, 'Animals', '168.jpg', 'Free,Stock,Images,lala', '', 'horizontal'),
(169, 'Animals', '169.jpg', 'Free,Stock,Images,lala', '', 'vertical'),
(170, 'Animals', '170.jpg', 'Free,Stock,Images,lala', '', 'vertical'),
(171, 'Animals', '171.jpg', 'Free,Stock,Images,lala', '', 'horizontal'),
(172, 'Animals', '172.jpg', 'Free,Stock,Images,lala', '', 'horizontal'),
(173, 'Animals', '173.jpg', 'Free,Stock,Images,lala', '', 'vertical'),
(174, 'Animals', '174.jpg', 'Free,Stock,Images,lolol', '', 'vertical'),
(175, 'Animals', '175.jpg', 'Free,Stock,Images,lolol', 'lad', 'horizontal'),
(176, 'Animals', '176.jpg', 'Free,Stock,Images,lolol', 'lad', 'vertical'),
(177, 'Animals', '177.jpg', 'Free,Stock,Images,lolol', 'lad', 'vertical'),
(178, 'Animals', '178.jpg', 'Free,Stock,Images,lolol', 'lad', 'horizontal');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_cards`
--

CREATE TABLE IF NOT EXISTS `tbl_cards` (
`card_id` int(9) NOT NULL,
  `front` text NOT NULL,
  `back` text NOT NULL,
  `deck_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tbl_cards`
--

INSERT INTO `tbl_cards` (`card_id`, `front`, `back`, `deck_id`, `user_id`) VALUES
(4, 'hello', 'hallo', 2, 1),
(5, 'no', 'nein', 3, 6),
(13, 'ewwqr', 'qwe', 2, 7),
(3, 'apple', 'manzana', 1, 8);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_decks`
--

CREATE TABLE IF NOT EXISTS `tbl_decks` (
`deck_id` int(11) NOT NULL,
  `deck_name` text NOT NULL,
  `description` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tbl_decks`
--

INSERT INTO `tbl_decks` (`deck_id`, `deck_name`, `description`, `topic_id`, `user_id`) VALUES
(1, 'English Spanish Essential Words', 'This is a deck with the most essential words in Spanish. The 100 most commonly used verbs, nouns and adjectives are used in this cool deck.', 1, 1),
(2, 'German English 101', '101 German English translations are in this deck. Study it and become a master of English.', 2, 8),
(3, 'German English', 'German English translations are in this deck.', 2, 8),
(4, 'Maths', 'Best Math Quiz ever.', 2, 8),
(5, 'Biology', '100 animal names and descriptions.', 2, 6),
(6, 'English Spanish Essential Words', 'This is a deck with the most essential words in Spanish. The 100 most commonly used verbs, nouns and adjectives are used in this cool deck.', 2, 1),
(7, 'German English', 'German English translations are in this deck.', 2, 6),
(8, 'German English 101', '101 German English translations are in this deck. Study it and become a master of English.', 2, 8);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_en_es`
--

CREATE TABLE IF NOT EXISTS `tbl_en_es` (
`id` int(11) NOT NULL,
  `english` tinytext NOT NULL,
  `spanish` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tbl_en_es`
--

INSERT INTO `tbl_en_es` (`id`, `english`, `spanish`) VALUES
(1, 'water', 'agua'),
(2, 'tomorrow', 'manana'),
(3, 'house', 'casa'),
(4, 'women', 'mujer'),
(5, 'man', 'hombre'),
(6, 'new', 'nuevo'),
(7, 'wife', 'mujer'),
(8, 'egg', 'huevo'),
(9, 'hello', 'hola'),
(10, 'dog', 'perro'),
(11, 'cheese', 'queso'),
(12, 'car', 'carro'),
(13, 'cat', 'gato');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_en_fr`
--

CREATE TABLE IF NOT EXISTS `tbl_en_fr` (
`id` int(11) NOT NULL,
  `english` tinytext NOT NULL,
  `french` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tbl_en_fr`
--

INSERT INTO `tbl_en_fr` (`id`, `english`, `french`) VALUES
(1, 'hello', 'bonjour');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_repetition`
--

CREATE TABLE IF NOT EXISTS `tbl_repetition` (
  `card_id` int(11) NOT NULL,
  `status` text NOT NULL,
  `last_review` date NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_topics`
--

CREATE TABLE IF NOT EXISTS `tbl_topics` (
`topic_id` int(11) NOT NULL,
  `topic_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tbl_topics`
--

INSERT INTO `tbl_topics` (`topic_id`, `topic_name`) VALUES
(1, 'Eng_Spa'),
(2, 'Eng_Ger');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL DEFAULT 'N',
  `tokenCode` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `userName`, `userEmail`, `userPass`, `userStatus`, `tokenCode`) VALUES
(1, 'gautam', 'gautamnagraj0@gmail.com', '202cb962ac59075b964b07152d234b70', 'N', 'a91f7123ffe33f224a7592f923bb141a'),
(6, 's', 'danieliseli@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'N', '7c628eb1098378a3fb0fec6dde6315de'),
(7, 'asas', 'fw@sws.sw', 'fcea920f7412b5da7be0cf42b8c93759', 'N', '7fd754d05612b4bfefc3043c267ad697'),
(8, 'ssf', 'ladq32@de.de', 'fcea920f7412b5da7be0cf42b8c93759', 'N', '5024bf6b904e95a39fabb9b4e8c9703c');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(16) NOT NULL,
  `passwd` char(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`username`, `passwd`, `email`, `about`) VALUES
('123dfkfjf', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'diseli100@gmail.com', ''),
('asdfasf', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'asDas@sdsd.de', NULL),
('dasisteintest', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ded@dcd.de', NULL),
('emma1000', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'diseli100@gmail.com', ''),
('emma99', '394421eb1c4bcbed15ea32d7756351f802a44cb0', 'sdsd@sds.de', 'das  iat ein test'),
('green', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'danieliseli@gmail.com', ''),
('jwefopwegphwgpj', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'diseli100@gmail.com', ''),
('kame', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'danieliseli@gmail.com', ''),
('kame123', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ddwd@dd.de', NULL),
('kamesan', '55744c2cc09a1e4d38c849d0a88eff50724ed98a', 'danieliseli@gmail.com', NULL),
('kamesan99', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'wqrqwr@sd.de', NULL),
('kamesanq', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'danieqweqwliseli@gmail.com', NULL),
('kamesanqw', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'danieqweqwliseli@gmail.com', NULL),
('kobold', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'danieliseli@gmail.com', '1231'),
('lad', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'danieliseli@gmail.com', 'lol'),
('netteler', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'danieliseli@gmail.com', ''),
('sepp99', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'danieliseli@gmail.com', ''),
('seppblatter87', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'sepp.blatter@gmail.com', NULL),
('uguggguff', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'gdggggdd@sss.de', NULL),
('uguguff', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'gdgdd@sss.de', NULL),
('wqdqwfr23t23556', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'danieliseli@gmx.net', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(230) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `gallery_category`
--
ALTER TABLE `gallery_category`
 ADD PRIMARY KEY (`category_id`), ADD KEY `category_id` (`category_id`);

--
-- Indizes für die Tabelle `gallery_photos`
--
ALTER TABLE `gallery_photos`
 ADD PRIMARY KEY (`photo_id`), ADD KEY `photo_id` (`photo_id`);

--
-- Indizes für die Tabelle `tbl_cards`
--
ALTER TABLE `tbl_cards`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_id` (`user_id`), ADD UNIQUE KEY `card_id_2` (`card_id`), ADD KEY `card_id` (`card_id`), ADD KEY `deck_id` (`deck_id`), ADD KEY `user_id_2` (`user_id`);

--
-- Indizes für die Tabelle `tbl_decks`
--
ALTER TABLE `tbl_decks`
 ADD UNIQUE KEY `deck_id` (`deck_id`), ADD KEY `topic_id` (`topic_id`), ADD KEY `user_id` (`user_id`);

--
-- Indizes für die Tabelle `tbl_en_es`
--
ALTER TABLE `tbl_en_es`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tbl_en_fr`
--
ALTER TABLE `tbl_en_fr`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tbl_topics`
--
ALTER TABLE `tbl_topics`
 ADD PRIMARY KEY (`topic_id`);

--
-- Indizes für die Tabelle `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`userID`), ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=458;
--
-- AUTO_INCREMENT für Tabelle `gallery_category`
--
ALTER TABLE `gallery_category`
MODIFY `category_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `gallery_photos`
--
ALTER TABLE `gallery_photos`
MODIFY `photo_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=179;
--
-- AUTO_INCREMENT für Tabelle `tbl_cards`
--
ALTER TABLE `tbl_cards`
MODIFY `card_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT für Tabelle `tbl_decks`
--
ALTER TABLE `tbl_decks`
MODIFY `deck_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT für Tabelle `tbl_en_es`
--
ALTER TABLE `tbl_en_es`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT für Tabelle `tbl_en_fr`
--
ALTER TABLE `tbl_en_fr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `tbl_topics`
--
ALTER TABLE `tbl_topics`
MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tbl_cards`
--
ALTER TABLE `tbl_cards`
ADD CONSTRAINT `fk_deck_id` FOREIGN KEY (`deck_id`) REFERENCES `tbl_decks` (`deck_id`),
ADD CONSTRAINT `tbl_cards_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`userID`);

--
-- Constraints der Tabelle `tbl_decks`
--
ALTER TABLE `tbl_decks`
ADD CONSTRAINT `fk_topic_id` FOREIGN KEY (`topic_id`) REFERENCES `tbl_topics` (`topic_id`),
ADD CONSTRAINT `tbl_decks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`userID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
