-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-12-08 02:33:08
-- 服务器版本： 5.1.73
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newnoobird`
--

-- --------------------------------------------------------

--
-- 表的结构 `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `name` varchar(40) NOT NULL,
  `desc` text,
  `app_key` varchar(40) DEFAULT NULL,
  `app_id` varchar(40) DEFAULT NULL,
  `iap_index` int(11) DEFAULT '1',
  `status` int(2) unsigned DEFAULT '4',
  `install` int(10) unsigned DEFAULT '0',
  `updated` int(10) unsigned DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- 转存表中的数据 `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `name`, `desc`, `app_key`, `app_id`, `iap_index`, `status`, `install`, `updated`, `created`) VALUES
(1, 1, 'TEST_edit', 'aaaaa', 'TEST', 'TEST', 1, 3, 0, 1448847815, 1387349001),
(4, 5, 'TEST', 'TEST', 'MTBmNA', '10f4', 4, 0, 7, 1396280736, 1395407987),
(5, 54, '飞鸟九号', '这是一个测试用的应用。\n这是一个测试用的应用。\n这是一个测试用的应用。\n这是一个测试用的应用。\n这是一个测试用的应用。\n这是一个测试用的应用。\n这是一个测试用的应用。\n这是一个测试用的应用。\n这是一个测试用的应用。', 'MTNEYzU', '13Dc5', 3, 4, 0, 1395409673, 1395409321),
(8, 54, '飞龙小艾条', '好吃！', 'MTNxVDg', '13qT8', 1, 3, 0, 1395683089, 1395683089),
(10, 54, '终于搞定', '时区正常', 'MTNGZzEw', '13Fg10', 1, 3, 0, 1395684514, 1395684514),
(16, 5, 'TEST', 'TEST', '44e1e47caa2e5e40', '00100016', 2, 3, 0, 1396280774, 1396280743),
(21, 57, '3123123', '3123', 'f151008c30a56ac9', '01600021', 1, 3, 0, 1397387491, 1397387491),
(22, 57, '31231', '3123213', 'baf145ec2ac83d43', '01600022', 1, 3, 0, 1397387496, 1397387496),
(23, 57, '312321', '1231313', '66acf6bbf9ee2bf1', '01600023', 1, 3, 0, 1397387501, 1397387501),
(24, 57, '123123', '123123', '9cf8e0dfffab265a', '01600024', 1, 3, 0, 1397387505, 1397387505),
(25, 57, '1', '1', 'f82661248c49800c', '01600025', 1, 3, 0, 1397387509, 1397387509),
(26, 57, '2', '2', '15a9899fdacb1a7c', '01600026', 1, 3, 0, 1397387514, 1397387514),
(27, 57, '3', '3', 'eb262fa270e854d5', '01600027', 1, 3, 0, 1397387518, 1397387518),
(28, 57, '4', '4', 'f7b3e37d5c3bfe04', '01600028', 1, 3, 0, 1397387521, 1397387521),
(29, 57, '5', '5', '30a4b6fd245149eb', '01600029', 1, 3, 0, 1397387525, 1397387525),
(30, 57, '6', '6', 'adeece0a4d2e91c6', '01600030', 1, 3, 0, 1397387529, 1397387529),
(31, 57, '7', '7', '92ae1e6e1fa11198', '01600031', 1, 3, 0, 1397387533, 1397387533),
(32, 72, 'Crazy Fingers', '#手残大联盟#采用当下最流行的小游戏合集的游戏方式，内容搞怪整蛊，考验你的极限反应！这是一款让高端玩家泪流满面，手残党喜大普奔的游戏，我们的目标是让更多高玩加入手残党大家庭！你敢接受挑战吗？\n\n游戏特色\n●全新设计的关卡，不一样的游戏体验！\n●操作简单，任何人都有机会完爆高端玩家！\n●画面轻松搞怪，文字诙谐幽默！\n●两种游戏模式让你一次过足瘾！', '59d76c0e7aed32b5', '01900032', 7, 3, 26, 1430192307, 1399872969),
(33, 3, '热战联盟', '我说的发额为欺负人', '0fb56e4fe0163f21', '00000033', 2, 3, 0, 1415012314, 1415012273),
(34, 80, 'IfpayDemo', 'SDK Demo App', '62e4591a0954e8b5', '00000034', 4, 3, 12, 1440426814, 1422954465),
(35, 80, 'qwweddd', 'Shdfhf', '1bb3022fb9019e50', '00000035', 1, 3, 0, 1425972474, 1425972474),
(36, 3, '12312312', '3123123123', '471d2082cb70763f', '00000036', 2, 3, 0, 1426846072, 1426602070),
(37, 7676, 'iLocker', 'This is a very interesting theme APP, featuring the three core functions,including sreen-lock,control center and wallpaper store.\n1) Screen-lock is based on the lastest unlock technology, horizontal move to unlock, smoothly like silk.\n2) Screen-lock provides the flattening-styled password lock and fingerprint lock, protecting the user privacy.\n3) Provides the control center of Android version, system on-and-off, music control,APP entry and others. \n4) With its own theme Store, users can change the screen-locking and desktop themes according to the mood.\n5) Original screen-lock methods,including shake-off and air screen-lock,freeing users from power key.\n6) Provide high-accuracy compass, whenever and wherever do never lose your way.\n7) The screen-lock interface comes with the weather forecast,and is customizable with the third-party APP, making it more variable.\n8) Screen-lock interface monitors the traffic of the mobile phone to detect the traffic-stealing in the backend manangement.\n9) Screen lock and unlock features are editable and personalized\n10) The electricity-saving mode make it more efficient than the original\nWarm Tip: To unload the one-key screen-lock, attached one-key unload feature is applicable,or go to Setting->Security->Device Manager to remove the activation first and the unload.\n', '356d123ef8d44e34', '00000037', 2, 3, 30, 1427770421, 1426844189),
(38, 9720, '美女找你茬', '哇哦，好多美女呢，一起来发现不同点吧', '1f48dda298835253', '00000038', 1, 3, 0, 1440426354, 1440426354),
(39, 1, '新增一个应用', '新增应用的描述', '2a9ec2c1646e48a291b1c347ca045374', '00000039', 1, 4, 0, NULL, 1448847974);

-- --------------------------------------------------------

--
-- 表的结构 `approvals`
--

CREATE TABLE IF NOT EXISTS `approvals` (
`id` int(11) unsigned NOT NULL,
  `message` varchar(256) DEFAULT NULL,
  `related_id` int(11) DEFAULT NULL,
  `result` varchar(16) DEFAULT NULL,
  `operator` int(11) DEFAULT NULL,
  `type` varchar(5) DEFAULT NULL,
  `updated` int(10) unsigned DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `approvals`
--

INSERT INTO `approvals` (`id`, `message`, `related_id`, `result`, `operator`, `type`, `updated`, `created`) VALUES
(1, 'test', 11, 'deny', 5, 'dev', NULL, 1396000166),
(2, NULL, 22, 'off', 5, 'iap', NULL, 1397385214),
(3, '太贵了', 33, 'deny', 5, 'iap', NULL, 1397462845);

-- --------------------------------------------------------

--
-- 表的结构 `client_infos`
--

CREATE TABLE IF NOT EXISTS `client_infos` (
`id` int(11) unsigned NOT NULL,
  `version` varchar(64) DEFAULT NULL,
  `api_version` varchar(64) DEFAULT NULL,
  `mobile` varchar(64) DEFAULT NULL,
  `model` varchar(64) DEFAULT NULL,
  `app_id` varchar(40) DEFAULT NULL,
  `mnc` int(11) DEFAULT NULL,
  `imsi` varchar(64) DEFAULT NULL,
  `imei` varchar(64) DEFAULT NULL,
  `ifpay_paycode_version` varchar(64) DEFAULT NULL,
  `ifpay_version` varchar(64) DEFAULT NULL,
  `updated` int(10) unsigned DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=201 ;

--
-- 转存表中的数据 `client_infos`
--

INSERT INTO `client_infos` (`id`, `version`, `api_version`, `mobile`, `model`, `app_id`, `mnc`, `imsi`, `imei`, `ifpay_paycode_version`, `ifpay_version`, `updated`, `created`) VALUES
(1, '4.4', '19', '15555215554', 'sdk', '10f4', 310260, '', '', '1.3', 'A_J_2.0.3', NULL, 1395408351),
(2, '4.4', '19', '15555215554', 'sdk', '10f4', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1395409726),
(3, '4.0.4', '15', '', 'XT910', '10f4', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395412019),
(4, '4.0.4', '15', '', 'XT910', '10f4', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395414550),
(5, '4.0.4', '15', '', 'XT910', '10f4', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395648829),
(6, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '10f4', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1395651010),
(7, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '10f4', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1395651275),
(8, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395932146),
(9, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395932326),
(10, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395932445),
(11, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395932493),
(12, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395932875),
(13, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395986995),
(14, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395998992),
(15, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395998995),
(16, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999002),
(17, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999003),
(18, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999019),
(19, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999022),
(20, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999026),
(21, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999028),
(22, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999029),
(23, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999035),
(24, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999038),
(25, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999094),
(26, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999132),
(27, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999158),
(28, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999269),
(29, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999278),
(30, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999279),
(31, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999279),
(32, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999279),
(33, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999279),
(34, '4.0.4', '15', '', 'XT910', '14sb11', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1395999306),
(35, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '14sb11', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396252443),
(36, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '14sb11', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396331704),
(37, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396338659),
(38, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396359958),
(39, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396450001),
(40, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396450286),
(41, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396451241),
(42, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396451264),
(43, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396451349),
(44, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396451472),
(45, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396451587),
(46, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396451698),
(47, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396451742),
(48, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396451841),
(49, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396452077),
(50, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396492224),
(51, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396493983),
(52, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396495278),
(53, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396504136),
(54, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1396505280),
(55, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '1', 'A_J_2.0.3', NULL, 1396507363),
(56, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '1', 'A_J_2.0.3', NULL, 1396515412),
(57, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '1', '1.0beta', NULL, 1397373452),
(58, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '1', '1.0beta', NULL, 1397807362),
(59, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '1', '1.0beta', NULL, 1397808195),
(60, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '1', '1.0beta', NULL, 1397808435),
(61, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1399196147),
(62, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1399256421),
(63, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1399257443),
(64, '4.1.2', '16', '', 'GT-I8552', '01900032', 46002, '', '', '2', '1.0beta', NULL, 1399881410),
(65, '4.0.4', '15', '', 'XT910', '01900032', 50219, '', '', '2', '1.0beta', NULL, 1399885205),
(66, '4.0.4', '15', '', 'XT910', '01900032', 50219, '', '', '2', '1.0beta', NULL, 1399888647),
(67, '4.1.1', '16', '', 'GT-N8000', '01900032', 50212, '', '', '2', '1.0beta', NULL, 1400056013),
(68, '4.1.1', '16', '', 'GT-N8000', '01900032', 50216, '', '', '2', '1.0beta', NULL, 1400120729),
(69, '4.3', '18', '', 'GT-I9300', '01900032', 50219, '', '', '2', '1.0beta', NULL, 1400137473),
(70, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1400510055),
(71, '4.4', '19', '15555215554', 'sdk', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1400510060),
(72, '4.2.2', '17', '13458531880', 'HTC S720e', '01900032', 46002, '', '', '2', '1.0beta', NULL, 1400553919),
(73, '4.3', '18', '60194093063', 'HTC Butterfly s', '01900032', 50219, '', '', '2', '1.0beta', NULL, 1400564055),
(74, '4.0.4', '15', '', 'GT-I9300', '01900032', 50212, '', '', '2', '1.0beta', NULL, 1400638053),
(75, '4.4.2', '19', '', 'GT-I9500', '01900032', 50212, '', '', '2', '1.0beta', NULL, 1400640946),
(76, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1400642884),
(77, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1400643185),
(78, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1400652073),
(79, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1400652256),
(80, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1400652797),
(81, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1400655139),
(82, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1400656087),
(83, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1400658141),
(84, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1400730606),
(85, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1400748777),
(86, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401182601),
(87, '4.0.3', '15', '13911538983', 'M030', '01400017', 46000, '', '', '2', '1.0beta', NULL, 1401373034),
(88, '4.0.3', '15', '13911538983', 'M030', '01400017', 46000, '', '', '2', '1.0beta', NULL, 1401374627),
(89, '4.1.1', '16', '13911538983', 'M030', '01400017', 46000, '', '', '2', '1.0beta', NULL, 1401420131),
(90, '4.1.1', '16', '', 'M030', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401420501),
(91, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1401420958),
(92, '4.1.1', '16', '', 'M030', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401423039),
(93, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1401423132),
(94, '4.1.1', '16', '', 'M030', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401429423),
(95, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401433339),
(96, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401434059),
(97, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1401766097),
(98, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1401766485),
(99, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1401766884),
(100, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1401767028),
(101, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '01400017', 310260, '', '', '2', '1.0beta', NULL, 1401767204),
(102, '4.4.2', '19', '', 'GT-N7100', '01900032', 50219, '', '', '2', '1.0beta', NULL, 1401767878),
(103, '4.4.2', '19', '', 'GT-N7100', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401768098),
(104, '4.0.4', '15', '', 'XT910', '01400017', 0, '', '', '2', '1.0beta', NULL, 1401850938),
(105, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401851218),
(106, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401851871),
(107, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401852213),
(108, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401852379),
(109, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401852611),
(110, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401853190),
(111, '4.0.4', '15', '', 'XT910', '01400017', 50219, '', '', '2', '1.0beta', NULL, 1401866408),
(112, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2.0', '1.0beta', NULL, 1421218830),
(113, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421218917),
(114, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421220182),
(115, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2.0', '1.0beta', NULL, 1421305655),
(116, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421738814),
(117, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421739047),
(118, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421739233),
(119, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421739565),
(120, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421742992),
(121, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421743245),
(122, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421743430),
(123, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421813515),
(124, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421813650),
(125, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421816368),
(126, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421816474),
(127, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421816631),
(128, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421816738),
(129, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421816807),
(130, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421816950),
(131, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421817037),
(132, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421817219),
(133, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421817906),
(134, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421819101),
(135, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421819287),
(136, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421819698),
(137, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1421819963),
(138, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00100016', 310260, '', '', '2', '1.0beta', NULL, 1422003217),
(139, '4.0.4', '15', '', 'XT910', '00100016', 50212, '', '', '2', '1.0beta', NULL, 1422005188),
(140, '4.0.4', '15', '', 'XT910', '00100016', 50212, '502121516809071', '8960011404168090718', '2', '1.0beta', NULL, 1422435160),
(141, '4.0.4', '15', '', 'XT910', '00100016', 50212, '502121516809071', '8960011404168090718', '2', '1.0beta', NULL, 1422435296),
(142, '4.0.4', '15', '', 'XT910', '00100016', 50212, '502121516809071', '8960011404168090718', '2', '1.0beta', NULL, 1422435466),
(143, '4.0.4', '15', '', 'XT910', '00100016', 50212, '502121516809071', '8960011404168090718', '2', '1.0beta', NULL, 1422435536),
(144, '4.0.4', '15', '', 'XT910', '00000034', 50212, '502121516809071', '8960011404168090718', '2', '1.0beta', NULL, 1422956223),
(145, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00000034', 310260, NULL, NULL, '2', '1.0beta', NULL, 1423372756),
(146, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00000034', 310260, NULL, NULL, '2', '1.0beta', NULL, 1423466423),
(147, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00000034', 310260, NULL, NULL, '2', '1.0beta', NULL, 1423466483),
(148, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00000034', 310260, NULL, NULL, '2', '1.0beta', NULL, 1423469966),
(149, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00000034', 310260, NULL, NULL, '2', '1.0beta', NULL, 1423470028),
(150, '4.0.4', '15', '', 'XT910', '00000034', 50212, NULL, NULL, '2', '1.0beta', NULL, 1423557787),
(151, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00000034', 310260, NULL, NULL, '2', '1.0beta', NULL, 1426149080),
(152, '4.0.4', '15', '', 'XT910', '00000034', 50212, NULL, NULL, '2', '1.0beta', NULL, 1426150171),
(153, '4.0.4', '15', '', 'XT910', '00000034', 50212, NULL, NULL, '2', '1.0beta', NULL, 1426152076),
(154, '4.4.4', '19', '', 'MI NOTE LTE', '00000037', 46000, NULL, NULL, '2', '1.0beta', NULL, 1426847980),
(155, '4.4.4', '19', '', 'MI NOTE LTE', '00000037', 46000, NULL, NULL, '2', '1.0beta', NULL, 1426866187),
(156, '4.4.4', '19', '', 'MI NOTE LTE', '00000037', 46000, NULL, NULL, '2', '1.0beta', NULL, 1426868053),
(157, '4.4.4', '19', '', 'MI NOTE LTE', '00000037', 46000, NULL, NULL, '2', '1.0beta', NULL, 1426868217),
(158, '5.0.1', '21', '', 'Nexus 5', '00000037', 46000, NULL, NULL, '2', '1.0beta', NULL, 1427036947),
(159, '5.1', '22', '', 'Nexus 5', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427077732),
(160, '5.1', '22', '', 'Nexus 5', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427078365),
(161, '5.1', '22', '', 'Nexus 5', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427078662),
(162, '4.1.2', '16', '', 'MI 1S', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427080146),
(163, '4.1.2', '16', '', 'MI 1S', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427080370),
(164, '4.1.2', '16', '', 'MI 1S', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427081977),
(165, '4.1.2', '16', '', 'MI 1S', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427082221),
(166, '4.1.2', '16', '', 'MI 1S', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427083389),
(167, '4.1.2', '16', '', 'MI 1S', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427083660),
(168, '4.1.2', '16', '', 'MI 1S', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427087593),
(169, '4.4.4', '19', '', 'MI NOTE LTE', '00000037', 46000, NULL, NULL, '2', '1.0beta', NULL, 1427091374),
(170, '4.1.2', '16', '', 'MI 1S', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427092795),
(171, '4.1.2', '16', '', 'MI 1S', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427093345),
(172, '4.1.2', '16', '', 'MI 1S', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427095266),
(173, '4.4.2', '19', '+8618628978747', 'NX503A', '00000037', 46001, NULL, NULL, '2', '1.0beta', NULL, 1427099612),
(174, '4.4.2', '19', '+8618628211017', 'GT-N7100', '00000037', 46001, NULL, NULL, '2', '1.0beta', NULL, 1427101811),
(175, '4.1.1', '16', '', 'GT-I9300', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427105303),
(176, '4.1.1', '16', '', 'GT-I9300', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427105456),
(177, '4.1.1', '16', '', 'GT-I9300', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427106814),
(178, '4.4.4', '19', '', 'MI NOTE LTE', '00000037', 46000, NULL, NULL, '2', '1.0beta', NULL, 1427107106),
(179, '4.4.2', '19', '+8618628211017', 'GT-N7100', '00000037', 46001, NULL, NULL, '2', '1.0beta', NULL, 1427114982),
(180, '4.4.2', '19', '+8618628211017', 'GT-N7100', '01900032', 46001, NULL, NULL, '2', '1.0beta', NULL, 1427275420),
(181, '4.4.2', '19', '+8618628211017', 'GT-N7100', '01900032', 46001, NULL, NULL, '2', '1.0beta', NULL, 1427275852),
(182, '4.4.2', '19', '+8618628211017', 'GT-N7100', '00000037', 46001, NULL, NULL, '2', '1.0beta', NULL, 1427279972),
(183, '4.4.2', '19', '', 'GT-I9500', '01900032', 50212, NULL, NULL, '2', '1.0beta', NULL, 1427338815),
(184, '4.2.2', '17', '+60123878885', 'HM NOTE 1W', '01900032', 50216, NULL, NULL, '2', '1.0beta', NULL, 1427429179),
(185, '4.1.1', '16', '', 'GT-N8000', '01900032', 50216, NULL, NULL, '2', '1.0beta', NULL, 1427438257),
(186, '4.4.2', '19', '15555215554', 'Android SDK built for x86', '00000034', 310260, NULL, NULL, '2', '1.0beta', NULL, 1427532577),
(187, '4.4.4', '19', '', 'MI NOTE LTE', '00000037', 46000, NULL, NULL, '2', '1.0beta', NULL, 1427684181),
(188, '4.4.4', '19', '', 'MI NOTE LTE', '00000037', 46000, NULL, NULL, '2', '1.0beta', NULL, 1427708014),
(189, '4.3', '18', '', 'GT-I9300', '00000037', 0, NULL, NULL, '2', '1.0beta', NULL, 1427770421),
(190, '4.1.1', '16', '', 'GT-N8000', '01900032', 50212, NULL, NULL, '2', '1.0beta', NULL, 1427941614),
(191, '4.4.2', '19', '15555215554', 'sdk', '01900032', 310260, NULL, NULL, '2', '1.0beta', NULL, 1427960050),
(192, '4.3', '18', '6288213925954', 'Smartfren Andromax AD688G', '01900032', 51009, NULL, NULL, '2', '1.0beta', NULL, 1428393948),
(193, '4.1.1', '16', '', 'HTC One S', '01900032', 52000, NULL, NULL, '2', '1.0beta', NULL, 1428467404),
(194, '4.1.2', '16', '', 'SHV-E210S', '01900032', 45204, NULL, NULL, '2', '1.0beta', NULL, 1428477189),
(195, '4.4.2', '19', '+8618628211017', 'GT-N7100', '01900032', 46001, NULL, NULL, '2', '1.0beta', NULL, 1428584602),
(196, '4.4.2', '19', '+8618628211017', 'GT-N7100', '01900032', 46001, NULL, NULL, '2', '1.0beta', NULL, 1428631335),
(197, '4.4.2', '19', '15555215554', 'sdk', '01900032', 310260, NULL, NULL, '2', '1.0beta', NULL, 1428720432),
(198, '4.4.2', '19', '15555215554', 'sdk', '01900032', 310260, NULL, NULL, '2', '1.0beta', NULL, 1428721771),
(199, '4.1.1', '16', '', 'GT-N8000', '01900032', 50212, NULL, NULL, '2', '1.0beta', NULL, 1430192307),
(200, '4.4.4', '19', '', 'HM NOTE 1LTE', '00000034', 46007, NULL, NULL, '2', '1.0beta', NULL, 1440426814);

-- --------------------------------------------------------

--
-- 表的结构 `developers`
--

CREATE TABLE IF NOT EXISTS `developers` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `mobile` varchar(40) DEFAULT NULL,
  `company_name` varchar(64) DEFAULT NULL,
  `company_scale` int(2) DEFAULT NULL,
  `company_address` varchar(64) DEFAULT NULL,
  `company_license` varchar(64) DEFAULT NULL,
  `person_card` varchar(64) DEFAULT NULL,
  `company_image` varchar(256) DEFAULT NULL,
  `contact_image` varchar(256) DEFAULT NULL,
  `type` int(1) NOT NULL,
  `city` varchar(32) DEFAULT NULL,
  `province` varchar(32) DEFAULT NULL,
  `contact` varchar(40) DEFAULT NULL,
  `bank_no` varchar(40) DEFAULT NULL,
  `status` int(2) unsigned DEFAULT '2',
  `updated` int(10) unsigned DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL,
  `balance` decimal(15,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `developers`
--

INSERT INTO `developers` (`id`, `user_id`, `mobile`, `company_name`, `company_scale`, `company_address`, `company_license`, `person_card`, `company_image`, `contact_image`, `type`, `city`, `province`, `contact`, `bank_no`, `status`, `updated`, `created`, `balance`) VALUES
(1, 5, '18616840955', 'Ifpay', NULL, 'Ifpay', 'Ifpay', 'Ifpay', NULL, NULL, 1, NULL, NULL, '濮仪', NULL, 1, 1396599617, 1395389451, '0.00'),
(11, 52, '', 'TEST', NULL, 'TEST', 'TEST', '', NULL, NULL, 2, '北京', NULL, '', NULL, 5, 1396000166, 1395396322, '0.00'),
(13, 54, '18722872983', NULL, NULL, NULL, NULL, '511002198702010040', NULL, '54/54/dev_in_unnamedCA7FYUPA.png', 1, '广州', NULL, '张航', NULL, 1, 1395409262, 1395408542, '0.00'),
(16, 57, '1243858', '移付通', NULL, '成都高新区', '99179', '837754345', '57/57/dev_co_Sample.png', '57/57/dev_in_Sample.png', 2, '成都', NULL, '张航', NULL, 1, 1396328573, 1396326218, '0.00'),
(17, 58, '13458531880', NULL, NULL, NULL, NULL, '1111111', NULL, NULL, 1, '成都', NULL, '余洋', NULL, 1, 1396575120, 1396575023, '0.00'),
(18, 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 2, NULL, 1397619934, '0.00'),
(20, 67, '000-0000-0000', 'Beta', NULL, 'China', 'None', '000000000000000000', '67/67/dev_co_logo.jpg', '67/67/dev_in_logo.jpg', 2, 'Chengdu', NULL, 'Tester', NULL, 1, 1398763589, 1398763477, '0.00'),
(21, 68, '000-0000-0000', 'Beta', NULL, 'China', 'None', '000000000000000000', '68/68/dev_co_logo.jpg', '68/68/dev_in_logo.jpg', 2, 'Other', NULL, 'Tester', NULL, 1, 1398763706, 1398763631, '0.00'),
(22, 72, '15520795588', '成都阿哇龙科技有限公司', NULL, '四川成都天府软件园D区', '0000000000', '0000000000', '66/66/dev_co_客户端焦点图480x253.jpg', '66/66/dev_in_客户端焦点图480x253.jpg', 2, '成都', NULL, '罗阳', NULL, 1, 1399872888, 1398762237, '0.00'),
(23, 74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 2, NULL, 1406556331, '0.00'),
(24, 75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 2, NULL, 1406618292, '0.00'),
(25, 9829, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 2, NULL, 1446521785, '0.00'),
(26, 9830, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 2, NULL, 1446521820, '0.00');

-- --------------------------------------------------------

--
-- 表的结构 `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
`id` int(11) unsigned NOT NULL,
  `pay_code` varchar(32) DEFAULT NULL,
  `description` varchar(64) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '2',
  `updated` int(10) unsigned DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `fees`
--

INSERT INTO `fees` (`id`, `pay_code`, `description`, `status`, `updated`, `created`) VALUES
(1, 'T00', 'RM0.00', 1, 1395386047, 1395386047),
(4, 'T03', 'RM1.00', 1, NULL, NULL),
(6, 'T05', 'RM2.00', 1, NULL, NULL),
(8, 'T07', 'RM3.00', 1, NULL, NULL),
(10, 'T09', 'RM4.00', 1, NULL, NULL),
(14, 'T13', 'RM6.00', 1, NULL, NULL),
(22, 'T21', 'RM10.00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `iaps`
--

CREATE TABLE IF NOT EXISTS `iaps` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `application_id` int(11) unsigned NOT NULL,
  `name` varchar(40) NOT NULL,
  `iap_desc` text,
  `trigger_desc` text,
  `position_desc` text,
  `pay_code` varchar(16) NOT NULL,
  `iap_key` varchar(40) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '2',
  `updated` int(10) unsigned DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- 转存表中的数据 `iaps`
--

INSERT INTO `iaps` (`id`, `user_id`, `application_id`, `name`, `iap_desc`, `trigger_desc`, `position_desc`, `pay_code`, `iap_key`, `status`, `updated`, `created`) VALUES
(1, 1, 1, 'TEST', NULL, NULL, NULL, 'T01', 'TEST01', 0, 1387349001, 1387349001),
(5, 54, 5, '好吃的包子', NULL, '玩家购买一个好吃的包子，可以增加50点体力。', '真好吃哦！！谢谢！！', 'T01', '13Dc51T01', 4, 1395671222, 1395409558),
(6, 54, 5, '脏馒头', NULL, '吃完以后会恶心呕吐三天。', '非常的好哈~帅哥。', 'T01', '13Dc52T01', 2, NULL, 1395409673),
(36, 5, 16, 'TEST', NULL, 'TEST', 'TES', 'T00', '00100016T00002', 1, NULL, 1397458197),
(42, 72, 32, 'Unlock Arcade Mode', NULL, '玩家自主商城购买', 'In the shop', 'T09', '01900032T09001', 1, 1399879666, 1399873048),
(43, 72, 32, 'test', NULL, '玩家自主商城购买', 'testtesttesttesttesttest', 'T01', '01900032T01002', 4, 1399879627, 1399873108),
(44, 72, 32, '1 Golden Fingers', NULL, '玩家自主商城购买', 'In the shop.', 'T03', '01900032T03003', 1, 1399879665, 1399874056),
(45, 72, 32, '3 Golden Fingers', NULL, '玩家自主商城购买', 'In the shop.', 'T05', '01900032T05004', 1, 1399879664, 1399874077),
(46, 72, 32, '6 Golden Fingers', NULL, '玩家自主商城购买', 'In the shop.', 'T07', '01900032T07005', 1, 1399879664, 1399874091),
(47, 72, 32, 'Unlock All Levels & Arcade Mode', NULL, '玩家自主商城购买', 'In the shop.', 'T13', '01900032T13006', 1, 1399879663, 1399874103),
(48, 3, 33, '100', NULL, '123123', '123123', 'T03', '00000033T03001', 3, 1421300874, 1415012314),
(49, 80, 34, 'T00', NULL, '用于Demo程序测试', '用于Demo程序测试', 'T00', '00000034T00001', 1, 1422954666, 1422954526),
(50, 80, 34, 'T03', NULL, '用于Demo程序测试', '用于Demo程序测试', 'T03', '00000034T03002', 1, 1422955299, 1422955277),
(51, 80, 34, 'ffghhhg', NULL, 'Ggggfff', 'Dffggh', 'T00', '00000034T00003', 2, NULL, 1425972517),
(52, 7676, 37, 'Password Lock', NULL, '密码锁', '密码锁', 'T07', '00000037T07001', 1, 1427768753, 1426846006),
(53, 3, 36, '111111', NULL, '11111111', '111111111', 'T03', '00000036T03001', 3, 1426846076, 1426846072),
(54, 1, 1, '头盔', NULL, '触发计费说明', '计费点位置描述', 'T03', NULL, 0, NULL, 1448848169),
(55, 0, 1, '衣服', NULL, '衣服触发计费说明', '衣服计费点位置描述', 'T00', NULL, 2, NULL, 1448866194),
(56, 1, 1, '护手', NULL, 'aaaaaaaa', 'bbbbbbbbb', 'T00', '7fdffb0bee155cc2', 2, NULL, 1448866617),
(57, 1, 1, '鞋子', NULL, '鞋子', '鞋子', 'T03', '28eed03208631849', 2, NULL, 1448874012),
(58, 0, 1, '1', NULL, 'new', 'new', 'T00', '628d5a42fcf097fb', 2, NULL, 1448875297),
(59, 1, 1, 'aaa', NULL, 'aaa', 'aaa', 'T00', 'adfea2f8a49e77c6', 2, NULL, 1448875405),
(60, 1, 1, 'bbb', NULL, 'bbb', 'bbb', 'T00', '345e1e61e0060ee3', 3, NULL, 1448875456);

-- --------------------------------------------------------

--
-- 表的结构 `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
`id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '日志标题',
  `content` text NOT NULL COMMENT '日志内容',
  `created` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='日志表' AUTO_INCREMENT=96 ;

--
-- 转存表中的数据 `logs`
--

INSERT INTO `logs` (`id`, `title`, `content`, `created`) VALUES
(1, 'TEST', '', 1447395864),
(2, 'TEST', '', 1447396759),
(3, 'TEST', '', 1447396912),
(4, 'TEST', '', 1447396982),
(5, 'TEST', '', 1447396999),
(6, 'TEST', '', 1447397003),
(7, 'TEST', 'no data!', 1447397263),
(8, 'apply_pay', '{"apply_pay":"{\\"app_id\\":\\"app_id_value\\",\\"app_key\\":\\"app_key_value\\",\\"iap_id\\":\\"iap_id_value\\",\\"mnc\\":\\"46001\\",\\"ip\\":\\"192.168.1.102\\",\\"macaddress\\":\\"e4907eaff0d7\\",\\"appversion\\":1,\\"imsi\\":\\"460018172638740\\",\\"imei\\":\\"89860112881011714846\\",\\"appversionname\\":\\"1.0\\",\\"apppackagename\\":\\"com.example.demo\\"}"}', 1447398248),
(9, 'apply_pay', '{"app_id":"app_id_value","app_key":"app_key_value","iap_id":"iap_id_value","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}     ', 1447398576),
(10, 'apply_pay', '{"app_id":"app_id_value","app_key":"app_key_value","iap_id":"iap_id_value","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}     ', 1447398591),
(11, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_id":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}          ', 1447402879),
(12, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_id":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}          ', 1447403107),
(13, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_id":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}          ', 1447403334),
(14, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"36","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}     ', 1447406575),
(15, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"36","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}     ', 1447406612),
(16, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"36","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}     ', 1447406620),
(17, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"36","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}     ', 1447406628),
(18, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447406728),
(19, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447406779),
(20, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447407203),
(21, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447407228),
(22, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447407400),
(23, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447407574),
(24, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447407801),
(25, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447407927),
(26, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447407982),
(27, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447408017),
(28, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447408104),
(29, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447408240),
(30, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447408351),
(31, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447408437),
(32, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447408456),
(33, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447408532),
(34, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447408598),
(35, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447408760),
(36, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447409015),
(37, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447409054),
(38, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447409669),
(39, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447409824),
(40, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447410307),
(41, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447410398),
(42, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447410435),
(43, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447410463),
(44, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447410541),
(45, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447410652),
(46, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447410833),
(47, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447410867),
(48, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411091),
(49, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411312),
(50, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411318),
(51, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411345),
(52, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411390),
(53, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411396),
(54, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411425),
(55, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411429),
(56, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411451),
(57, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411509),
(58, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411576),
(59, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411641),
(60, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411701),
(61, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411890),
(62, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411901),
(63, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411959),
(64, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447411988),
(65, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447412129),
(66, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447412141),
(67, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447412601),
(68, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447412634),
(69, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447412689),
(70, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447412717),
(71, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447412766),
(72, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447412824),
(73, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447413713),
(74, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.1.102","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}         ', 1447638788),
(75, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"10.146.66.46","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}          ', 1447638944),
(76, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447639104),
(77, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447659027),
(78, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447659146),
(79, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447659312),
(80, 'test', '{"resultCode":"2002"}', 1447659312),
(81, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447660079),
(82, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447660332),
(83, 'test', '{"resultCode":"2002"}', 1447660332),
(84, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447660390),
(85, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447660647),
(86, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447660705),
(87, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447660926),
(88, 'test', '{"resultCode":"3002"}', 1447660926),
(89, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447661242),
(90, 'test', '{"longCode":"106598721","resultCode":"0000","code":"1#1185api#3qHJf0"}', 1447661242),
(91, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447661383),
(92, 'test', '{"resultCode":"2007"}', 1447661383),
(93, 'apply_pay', '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo"}       ', 1447661548),
(94, 'test', '{"longCode":"106598721","resultCode":"0000","code":"1#1185api#05kpP4"}', 1447661548),
(95, 'TEST', '', 1447665421);

-- --------------------------------------------------------

--
-- 表的结构 `mncs`
--

CREATE TABLE IF NOT EXISTS `mncs` (
`id` int(11) unsigned NOT NULL,
  `mnc` varchar(16) DEFAULT NULL,
  `operator` varchar(32) DEFAULT NULL,
  `updated` int(10) unsigned DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `mncs`
--

INSERT INTO `mncs` (`id`, `mnc`, `operator`, `updated`, `created`) VALUES
(1, '56001', 'CELCOM', 1448939819, 1400505853),
(2, '50219', 'CELCOM', 1400506110, 1400505883),
(3, '50212', 'MAXIS', NULL, 1415284417),
(4, '50217', 'MAXIS', NULL, 1415284443),
(5, '50210', 'DIGI', NULL, 1422954761),
(6, '50216', 'DIGI', NULL, 1422954768),
(7, '46000', 'CTCC', NULL, 1448939791),
(8, '46001', 'CUCC', NULL, 1448939876);

-- --------------------------------------------------------

--
-- 表的结构 `pay_code`
--

CREATE TABLE IF NOT EXISTS `pay_code` (
`id` int(11) unsigned NOT NULL,
  `version` varchar(32) DEFAULT NULL,
  `pay_code` varchar(16) DEFAULT NULL,
  `service_code` varchar(64) DEFAULT NULL,
  `code` varchar(32) DEFAULT NULL,
  `target` varchar(64) DEFAULT NULL,
  `fee` float NOT NULL,
  `local_fee` float DEFAULT NULL,
  `local_unit` varchar(32) DEFAULT NULL,
  `local` varchar(16) DEFAULT NULL,
  `extra` varchar(256) DEFAULT NULL,
  `operator` varchar(40) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '2',
  `updated` int(10) unsigned DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- 转存表中的数据 `pay_code`
--

INSERT INTO `pay_code` (`id`, `version`, `pay_code`, `service_code`, `code`, `target`, `fee`, `local_fee`, `local_unit`, `local`, `extra`, `operator`, `status`, `updated`, `created`) VALUES
(2, '2', 'T00', 'test', 'IFPAY39968CHG0000', '39968', 0, 0, 'RM', 'my', NULL, 'CELCOM', 1, 1400506384, 1399271205),
(4, '2', 'T03', 'app3', 'IFPAY39968CHG0100', '39968', 1, 1, 'RM', 'my', NULL, 'CELCOM', 1, 1399449955, 1399449810),
(6, '2', 'T05', 'app5', 'IFPAY39968CHG0200', '39968', 2, 2, 'RM', 'my', NULL, 'CELCOM', 1, 1399450028, 1399450025),
(8, '2', 'T07', 'app7', 'IFPAY39968CHG0300', '39968', 3, 3, 'RM', 'my', NULL, 'CELCOM', 1, 1399450214, 1399450112),
(10, '2', 'T09', 'app9', 'IFPAY39968CHG0400', '39968', 4, 4, 'RM', 'my', NULL, 'CELCOM', 1, 1399450190, 1399450180),
(13, '2', 'T13', 'app13', 'IFPAY39968CHG0600', '39968', 6, 6, 'RM', 'my', NULL, 'CELCOM', 1, 1399450323, 1399450321),
(17, '2', 'T21', 'app21', 'IFPAY39968CHG1000', '39968', 10, 10, 'RM', 'my', NULL, 'CELCOM', 1, 1399450532, 1399450526),
(18, '2', 'T00', 'test', 'IFPAY39968CHG0000', '39968', 0, 0, 'RM', 'my', NULL, 'MAXIS', 1, 1399450630, 1399450627),
(21, '2', 'T03', 'app3', 'IFPAY39968CHG0100', '39968', 1, 1, 'RM', 'my', NULL, 'MAXIS', 1, 1399450747, 1399450743),
(23, '2', 'T05', 'app5', 'IFPAY39968CHG0200', '39968', 2, 2, 'RM', 'my', NULL, 'MAXIS', 1, 1399450803, 1399450801),
(25, '2', 'T07', 'app7', 'IFPAY39968CHG0300', '39968', 3, 3, 'RM', 'my', NULL, 'MAXIS', 1, 1399450867, 1399450863),
(27, '2', 'T09', 'app9', 'IFPAY39968CHG0400', '39968', 4, 4, 'RM', 'my', NULL, 'MAXIS', 1, 1399450962, 1399450959),
(30, '2', 'T13', 'app13', 'IFPAY39968CHG0600', '39968', 6, 6, 'RM', 'my', NULL, 'MAXIS', 1, 1399451052, 1399451050),
(34, '2', 'T21', 'app21', 'IFPAY39968CHG1000', '39968', 10, 10, 'RM', 'my', NULL, 'MAXIS', 1, 1399452093, 1399452091),
(35, '2', 'T00', 'test', 'IFPAY39968CHG0000', '39968', 0, 0, 'RM', 'my', NULL, 'DIGI', 1, 1399452163, 1399452159),
(38, '2', 'T03', 'app3', 'IFPAY39968CHG0100', '39968', 1, 1, 'RM', 'my', NULL, 'DIGI', 1, 1399452471, 1399452468),
(40, '2', 'T05', 'app5', 'IFPAY39968CHG0200', '39968', 2, 2, 'RM', 'my', NULL, 'DIGI', 1, 1399452535, 1399452532),
(42, '2', 'T07', 'app7', 'IFPAY39968CHG0300', '39968', 3, 3, 'RM', 'my', NULL, 'DIGI', 1, 1399452591, 1399452588),
(44, '2', 'T09', 'app9', 'IFPAY39968CHG0400', '39968', 4, 4, 'RM', 'my', NULL, 'DIGI', 1, 1399452653, 1399452650),
(47, '2', 'T13', 'app13', 'IFPAY39968CHG0600', '39968', 6, 6, 'RM', 'my', NULL, 'DIGI', 1, 1399452768, 1399452765),
(51, '2', 'T21', 'app21', 'IFPAY39968CHG1000', '39968', 10, 10, 'RM', 'cn', NULL, 'DIGI', 1, 1399452881, 1399452875);

-- --------------------------------------------------------

--
-- 表的结构 `statistics`
--

CREATE TABLE IF NOT EXISTS `statistics` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `application_id` int(11) unsigned NOT NULL,
  `iap_id` int(11) DEFAULT NULL,
  `message_id` varchar(64) DEFAULT NULL,
  `mobile` varchar(64) DEFAULT NULL,
  `code` varchar(64) DEFAULT NULL,
  `ip` varchar(64) DEFAULT NULL,
  `operator` varchar(64) DEFAULT NULL,
  `telco` int(11) DEFAULT NULL,
  `pay_code` varchar(16) DEFAULT NULL,
  `service_code` varchar(16) DEFAULT NULL,
  `type` int(1) NOT NULL,
  `fee` float NOT NULL,
  `local_fee` float NOT NULL DEFAULT '0',
  `local_unit` varchar(16) DEFAULT NULL,
  `local_time` varchar(64) DEFAULT NULL,
  `order_key` varchar(64) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `client_status` varchar(8) DEFAULT NULL,
  `updated` int(10) unsigned zerofill DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL,
  `macaddress` varchar(30) NOT NULL,
  `appversion` varchar(30) NOT NULL DEFAULT '' COMMENT '应用版本号',
  `imsi` char(30) NOT NULL DEFAULT '' COMMENT '用户标识',
  `imei` char(30) NOT NULL DEFAULT '' COMMENT '设备标识',
  `appversionname` varchar(50) NOT NULL DEFAULT '',
  `apppackagename` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=261 ;

--
-- 转存表中的数据 `statistics`
--

INSERT INTO `statistics` (`id`, `user_id`, `application_id`, `iap_id`, `message_id`, `mobile`, `code`, `ip`, `operator`, `telco`, `pay_code`, `service_code`, `type`, `fee`, `local_fee`, `local_unit`, `local_time`, `order_key`, `status`, `client_status`, `updated`, `created`, `macaddress`, `appversion`, `imsi`, `imei`, `appversionname`, `apppackagename`) VALUES
(1, 1, 1, 1, '10001', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, '89bc94913297454189c0b409af53a27b', 1, 'SUC', 1400601579, 1387349212, '', '', '', '', '', ''),
(3, 1, 1, 1, '10005', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387353193, '', '', '', '', '', ''),
(4, 1, 1, 1, '10006', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387354700, '', '', '', '', '', ''),
(5, 1, 1, 1, '10008', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387355406, '', '', '', '', '', ''),
(6, 1, 1, 1, '10009', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387355487, '', '', '', '', '', ''),
(7, 1, 1, 1, '10015', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387355520, '', '', '', '', '', ''),
(8, 1, 1, 1, '10016', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387355791, '', '', '', '', '', ''),
(9, 1, 1, 1, '10017', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387355856, '', '', '', '', '', ''),
(10, 1, 1, 1, '10018', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387355944, '', '', '', '', '', ''),
(11, 1, 1, 1, '10019', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387356108, '', '', '', '', '', ''),
(12, 1, 1, 1, 'C2C02E0DE4C0BAC3E32E8354B673C100', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131219111436', NULL, 5, NULL, NULL, 1387422873, '', '', '', '', '', ''),
(13, 1, 1, 1, 'B3F399B7565D622684598CBE5C63891B', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131219112123', NULL, 5, NULL, NULL, 1387423280, '', '', '', '', '', ''),
(14, 1, 1, 1, '76777D26319D9E7638C4D9A45DA43350', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131219113500', NULL, 5, NULL, NULL, 1387424097, '', '', '', '', '', ''),
(15, 1, 1, 1, '10001', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387424533, '', '', '', '', '', ''),
(16, 1, 1, 1, '10001', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387424623, '', '', '', '', '', ''),
(17, 1, 1, 1, '10003', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387424678, '', '', '', '', '', ''),
(18, 1, 1, 1, '10005', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387424783, '', '', '', '', '', ''),
(19, 1, 1, 1, '10005', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387424871, '', '', '', '', '', ''),
(20, 1, 1, 1, '10005', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387425017, '', '', '', '', '', ''),
(21, 1, 1, 1, '3C53250A027544C72AF4FA0EF84229C3', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131219115832', NULL, 5, NULL, NULL, 1387425510, '', '', '', '', '', ''),
(22, 1, 1, 1, 'A901C857DAFC52CBA51C96F6EC2AAFCE', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131219125354', NULL, 5, NULL, NULL, 1387428831, '', '', '', '', '', ''),
(23, 1, 1, 1, '10001', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387441265, '', '', '', '', '', ''),
(24, 1, 1, 1, '10003', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387441352, '', '', '', '', '', ''),
(25, 1, 1, 1, '100010', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387441690, '', '', '', '', '', ''),
(26, 1, 1, 1, '100011', '10002', NULL, '218.106.62.210', 'mTouche', 4, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387442024, '', '', '', '', '', ''),
(27, 1, 1, 1, 'CAADF1CBB7901D6ADAECA4815F61775F', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131219163810', NULL, 5, NULL, NULL, 1387442287, '', '', '', '', '', ''),
(28, 1, 1, 1, 'E1931EE38276C8C44336C0CFCA0F2431', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131219164222', NULL, 5, NULL, NULL, 1387442538, '', '', '', '', '', ''),
(29, 1, 1, 1, 'DB6388A58BDC49FF8C12A662B2E926AE', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131219173518', NULL, 5, NULL, NULL, 1387445715, '', '', '', '', '', ''),
(30, 1, 1, 1, '0', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387446172, '', '', '', '', '', ''),
(31, 1, 1, 1, '\n7050B70A0159E9971CE7DC5F1A4E4C10', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387446284, '', '', '', '', '', ''),
(32, 1, 1, 1, '7050B70A0159E9971CE7DC5F1A4E4C10', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387446373, '', '', '', '', '', ''),
(33, 1, 1, 1, '', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131219175320', NULL, 5, NULL, NULL, 1387446797, '', '', '', '', '', ''),
(34, 1, 1, 1, '\n0B333E86F9FFD3956C876FCC7CF61C06', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387447527, '', '', '', '', '', ''),
(35, 1, 1, 1, 'CF5133D9028FC65F89AC79272CEDCB5A\r', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131219181111', NULL, 5, NULL, NULL, 1387447869, '', '', '', '', '', ''),
(36, 1, 1, 1, '10001', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387508239, '', '', '', '', '', ''),
(37, 1, 1, 1, '10001', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387508364, '', '', '', '', '', ''),
(38, 1, 1, 1, '6D03C022E1C50A1D27208D4C1035ECF9', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131220111101', NULL, 5, NULL, NULL, 1387509057, '', '', '', '', '', ''),
(39, 1, 1, 1, '222ED195C60810237038AB31B826210E', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20131220111631', NULL, 1, NULL, 1387509401, 1387509388, '', '', '', '', '', ''),
(40, 1, 1, 1, '466BAB8D8C060F9E752B851947BEA3A0', '60166316566', NULL, '203.208.246.72', 'mTouche', 5, NULL, NULL, 1, 1, 1, 'RM', '20131220143328', NULL, 1, NULL, 1387521341, 1387521203, '', '', '', '', '', ''),
(41, 1, 1, 1, '3C99D4DA51637F8E9942E406D9C9C375', '601112312459', NULL, '203.208.246.72', 'mTouche', 4, NULL, NULL, 1, 1, 1, 'RM', '20131220143435', NULL, 1, NULL, 1387539153, 1387521271, '', '', '', '', '', ''),
(42, 1, 1, 1, '', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387523214, '', '', '', '', '', ''),
(43, 1, 1, 1, '', '10002', NULL, '218.106.62.210', 'mTouche', 2, NULL, NULL, 1, 1, 1, 'RM', NULL, NULL, 5, NULL, NULL, 1387523401, '', '', '', '', '', ''),
(44, 1, 1, 1, 'EB9580AF1496B566AACED1F0F08D9326', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20140214001349', NULL, 1, NULL, 1392308032, 1392308024, '', '', '', '', '', ''),
(45, 1, 1, 1, '7529446294EDB8DDB0F02711417F6974', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20140214133442', NULL, 1, NULL, 1392356082, 1392356076, '', '', '', '', '', ''),
(46, 1, 1, 1, '2778F039FCD4A222061D9CA4A7251A0B', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20140215145309', NULL, 1, NULL, 1392447189, 1392447182, '', '', '', '', '', ''),
(47, 1, 1, 1, '0C21437B35D312CEBBBB074BD1D651B7', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20140216120856', NULL, 1, NULL, 1392523754, 1392523729, '', '', '', '', '', ''),
(48, 1, 1, 1, 'DB85504B779CCBF888E84DB87416BEC4', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20140216120920', NULL, 1, NULL, 1392523767, 1392523751, '', '', '', '', '', ''),
(49, 1, 1, 1, '728A5F00121D5DDD51D1B63311360CEC', '601115514404', NULL, '203.208.246.72', 'mTouche', 6, NULL, NULL, 1, 1, 1, 'RM', '20140227145557', NULL, 1, NULL, 1393484143, 1393484138, '', '', '', '', '', ''),
(50, 5, 4, 4, '', '601115514404', NULL, '61.173.225.26', 'CELCOM', 6, 'T01', 'PBCB', 1, 0, 1, 'RM', '20140321223908', NULL, 5, NULL, 1395414447, 1395414446, '', '', '', '', '', ''),
(51, 5, 4, 4, '', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'PBCB', 1, 0, 1, 'RM', '20140321230925', NULL, 5, NULL, 1395414553, 1395414553, '', '', '', '', '', ''),
(52, 5, 4, 4, '', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'PBCB', 1, 0, 1, 'RM', '20140321232032', NULL, 5, NULL, 1395415220, 1395415219, '', '', '', '', '', ''),
(53, 5, 4, 4, '', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'PBCB', 1, 0, 1, 'RM', '20140321232056', NULL, 5, NULL, 1395415244, 1395415243, '', '', '', '', '', ''),
(54, 1, 1, 1, '', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'PBCB', 1, 0, 1, 'RM', '20140321232459', NULL, 5, NULL, 1395415486, 1395415486, '', '', '', '', '', ''),
(55, 1, 1, 1, '', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'PBCB', 1, 0, 1, 'RM', '20140321232552', NULL, 5, NULL, 1395415540, 1395415540, '', '', '', '', '', ''),
(56, 5, 4, 4, '', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'PBCB', 1, 0, 1, 'RM', '20140324215908', NULL, 5, NULL, 1395669533, 1395669532, '', '', '', '', '', ''),
(57, 5, 4, 4, '8E32C39ECF626B39A4732BDB57256648', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'PBCB', 1, 0, 1, 'RM', '20140325103909', NULL, 1, NULL, 1395715154, 1395715148, '', '', '', '', '', ''),
(58, 5, 4, 4, 'A46C2FEA5E5CE3774CCB52FDE8561959', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'PBCB', 1, 0, 1, 'RM', '20140325225849', NULL, 1, NULL, 1395759536, 1395759527, '', '', '', '', '', ''),
(117, 66, 32, 43, NULL, '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'app1', 1, 0.3, 0, 'RM', '20140512134835', '670656d4ed5a4d31b21a38c5a3331ffc', 6, NULL, NULL, 1399873708, '', '', '', '', '', ''),
(118, 66, 32, 43, NULL, '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'app1', 1, 0.3, 0, 'RM', '20140512135007', '08deaa43ed3a47709e6d556913d123de', 6, NULL, NULL, 1399873798, '', '', '', '', '', ''),
(119, 66, 32, 43, NULL, '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'app1', 1, 0.3, 0, 'RM', '20140512135121', '6018eacd2599440380beab0c079df054', 6, NULL, NULL, 1399873873, '', '', '', '', '', ''),
(120, 66, 32, 43, NULL, '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'app1', 1, 0.3, 0, 'RM', '20140512135910', 'ab7fa258235a4c17bfb214ab11e922c7', 6, NULL, NULL, 1399874341, '', '', '', '', '', ''),
(121, 66, 32, 43, NULL, '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'app1', 1, 0.3, 0, 'RM', '20140512140139', 'a808ae389bff49899565875ea264b4ce', 6, NULL, NULL, 1399874490, '', '', '', '', '', ''),
(122, 66, 32, 43, '630E4304661AD2FA6DBA1FAD6E30811D', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'app1', 1, 0.3, 0, 'RM', '20140512140242', '84c7cbf2063c49a4bd154f454c81cf42', 1, NULL, 1399874562, 1399874553, '', '', '', '', '', ''),
(123, 66, 32, 43, '74ABBD2EA20D4FDC4F4C39C596C612BC', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'app1', 1, 0.3, 0, 'RM', '20140512140712', '6b315c8e0c5a48a7bf710a37a745558e', 1, NULL, 1399874833, 1399874824, '', '', '', '', '', ''),
(124, 66, 32, 43, NULL, '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T01', 'app1', 1, 0.3, 0, 'RM', '20140512141113', 'd503a562b329494b86189ef47c6ac0c8', 6, NULL, NULL, 1399875065, '', '', '', '', '', ''),
(125, 72, 32, 44, NULL, '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T03', 'app3', 1, 1, 1, 'RM', '20140512152308', 'ead701bd1ab145f0aea33cb183c3d611', 6, NULL, NULL, 1399879380, '', '', '', '', '', ''),
(126, 72, 32, 44, '2E8CD45170BB914CEB7D9E8C3B32BE4E', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T03', 'app3', 1, 1, 1, 'RM', '20140512152927', 'd915fb07408b4db9a906c0c4e5f0a925', 1, NULL, 1399879771, 1399879759, '', '', '', '', '', ''),
(127, 72, 32, 44, '27640826C0698FE5592A2A39EC8DC0AE', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T03', 'app3', 1, 1, 1, 'RM', '20140512170048', '645101807fc74b2c91cc5bf4921fdf37', 1, NULL, 1399885251, 1399885240, '', '', '', '', '', ''),
(128, 72, 32, 44, '106D546DEDAB8B65C806BD0BC98EB6CA', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T03', 'app3', 1, 1, 1, 'RM', '20140512173543', '30515011f14f4fe885e9468543e8d955', 1, NULL, 1399887343, 1399887335, '', '', '', '', '', ''),
(129, 72, 32, 44, '9705DA9F744676086CEE7522D7F25AE9', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T03', 'app3', 1, 1, 1, 'RM', '20140512175750', '3bd8390546ce40da90a70e043abc3aa6', 1, NULL, 1399888671, 1399888662, '', '', '', '', '', ''),
(130, 72, 32, 42, '4EA7B4BDF954CA36AEADDC7B9C7AC608', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T09', 'app9', 1, 4, 4, 'RM', '20140512215721', '937159b5c1594226a1ffdd9ec7253af0', 1, NULL, 1399903045, 1399903032, '', '', '', '', '', ''),
(131, 72, 32, 44, '0D08E609173F1E547E86176FB9D65EC6', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20140514162954', 'cd81d8747eb7495b922fccd294720b4a', 1, NULL, 1400065198, 1400056184, '', '', '', '', '', ''),
(132, 72, 32, 46, '7B8DAC1DE509F9CD761F1E232E7B7F73', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T07', 'app7', 1, 3, 3, 'RM', '20140514163420', '49b8a3e0359849b6bc4ab1af83e0135b', 1, NULL, 1400065198, 1400056449, '', '', '', '', '', ''),
(133, 72, 32, 45, '5D31CB8D05C2C2AD7D78613D805DF90F', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T05', 'app5', 1, 2, 2, 'RM', '20140514163623', '905c9f2857a64c31bb0627d44417a1fa', 1, NULL, 1400065198, 1400056572, '', '', '', '', '', ''),
(134, 72, 32, 45, '08181D4A71448662255C2C8A7F8F0203', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T05', 'app5', 1, 2, 2, 'RM', '20140514163638', 'c15be7e68dbe4e3499d1ff19281e0e68', 1, NULL, 1400065198, 1400056587, '', '', '', '', '', ''),
(135, 72, 32, 42, 'F8907C7B087A7741631252B9DE86C379', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T09', 'app9', 1, 4, 4, 'RM', '20140514165530', '3fa14cb00c034133ba93a8121ba61040', 1, NULL, 1400065198, 1400057719, '', '', '', '', '', ''),
(136, 72, 32, 44, '334977E5420708297491EB2C83F853C2', '60102312728', NULL, '203.208.246.72', 'CELCOM', 5, 'T03', 'app3', 1, 1, 1, 'RM', '20140515103512', 'da05ae156b974aed805606093ec3ce0f', 1, NULL, 1400375260, 1400121301, '', '', '', '', '', ''),
(137, 72, 32, 45, '4754428F8DA9457A0C500049A94DD161', '60102312728', NULL, '203.208.246.72', 'CELCOM', 5, 'T05', 'app5', 1, 2, 2, 'RM', '20140515103540', '52999f36abb44fd0ae217e231658d294', 1, NULL, 1400121537, 1400121329, '', '', '', '', '', ''),
(138, 72, 32, 46, '0EAB137852F541671888DCB91CC29BA3', '60102312728', NULL, '203.208.246.72', 'CELCOM', 5, 'T07', 'app7', 1, 3, 3, 'RM', '20140515103651', '603f073e36914de697c120a7a9982159', 1, NULL, 1400131088, 1400121399, '', '', '', '', '', ''),
(139, 72, 32, 46, '69E55F3113E1AF533AF90D7F78801CB4', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T07', 'app7', 1, 3, 3, 'RM', '20140515140648', '34faf4cf776b441588e4f51b12a42bf5', 1, NULL, 1400153436, 1400133997, '', '', '', '', '', ''),
(140, 72, 32, 47, '4C0E59585B3897D1A6796420AFA28FBD', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T13', 'app13', 1, 6, 6, 'RM', '20140515145715', '2bee85aecfc7445895bfed63dde4cc10', 1, NULL, 1400153437, 1400137024, '', '', '', '', '', ''),
(141, 72, 32, 45, '4EAEB9931893AA9B018388636D232891', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T05', 'app5', 1, 2, 2, 'RM', '20140515150742', 'a23842deaabd4028be5b0f8670c07541', 1, NULL, 1400153363, 1400137650, '', '', '', '', '', ''),
(142, 72, 32, 44, '920FB057F25DDC2F08033A5C0B2916BD', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20140515152007', '19db519ae460418889195954eb85b3f0', 1, NULL, 1400153363, 1400138397, '', '', '', '', '', ''),
(143, 72, 32, 44, '175B280CA5EF79A6FD45C36156D160D8', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T03', 'app3', 1, 1, 1, 'RM', '20140515235259', 'bf6806c192154e41a0c3b4c478de32c3', 1, NULL, 1400169179, 1400169168, '', '', '', '', '', ''),
(145, 72, 32, 44, '37BEFAA8E31230CEB37DDAD6207C090C', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T03', 'app3', 1, 1, 1, 'RM', '20140517212828', 'cb204576e0a9434f90c57cca270a0814', 1, NULL, 1400333301, 1400333296, '', '', '', '', '', ''),
(146, 72, 32, 44, '1D33895013EF8C335F18641DD70055F7', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T03', 'app3', 1, 1, 1, 'RM', '20140519213725', '170e6c2f4ca7448ab6d61f4a0780faf7', 1, NULL, 1400506635, 1400506629, '', '', '', '', '', ''),
(147, 72, 32, 46, '8BA2AD77D1EFB1265D160B06CA4AAD6A', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T07', 'app7', 1, 3, 3, 'RM', '20140520101112', '76f50c5abe57452f8c72f9c0efa13e5f', 1, NULL, 1400567240, 1400551856, '', '', '', '', '', ''),
(148, 72, 32, 45, '2D2DCA1083D55C53BEBA51DFE3ECBAB1', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T05', 'app5', 1, 2, 2, 'RM', '20140520101226', 'ecd94d0c863c4fb4b85740e5a7e14d17', 1, NULL, 1400567240, 1400551930, '', '', '', '', '', ''),
(149, 72, 32, 46, '73F5B768AC8E7A44794CB34D2F6D78F1', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T07', 'app7', 1, 3, 3, 'RM', '20140520111327', '05f6a680d3e848c9a71b561319b3ab72', 1, NULL, 1400568873, 1400555591, '', '', '', '', '', ''),
(150, 72, 32, 44, '3BAA45F062E8DCA517B0D26C6E67631B', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T03', 'app3', 1, 1, 1, 'RM', '20140520154752', '40a21fd0cb91438fa929072953ca0a3c', 1, NULL, 1400572060, 1400572055, '', '', '', '', '', ''),
(151, 72, 32, 44, '5C726D2839D4559BDB6A2EC84D00FAAC', '60123810479', NULL, '203.208.246.72', 'CELCOM', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20140521101100', '867276cba84442589103be2f810dd4e2', 1, NULL, 1400653470, 1400638244, '', '', '', '', '', ''),
(152, 72, 32, 44, 'EFB870A8F569F3AA4D04D0D31977F74C', '60123810479', NULL, '203.208.246.72', 'CELCOM', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20140521101230', '2853aaf65acc4daab99d459ef057fccb', 1, NULL, 1400653470, 1400638332, '', '', '', '', '', ''),
(153, 72, 32, 44, '7653086B5214BC9EDBD0C3B974194B94', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20140521105145', '3620d61f6d2343138750d3364620fa26', 1, NULL, 1400653470, 1400640688, '', '', '', '', '', ''),
(154, 72, 32, 44, '531FBA3015BCEFA660A03685EB6D43BC', '60123120308', NULL, '203.208.246.72', 'CELCOM', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20140521105322', 'd38f7282c4954a3b80a798b115a8bfb4', 1, NULL, 1400653470, 1400640784, '', '', '', '', '', ''),
(155, 72, 32, 44, 'ACEFA3CB90A407544D9F953AF453B817', '60123810479', NULL, '203.208.246.72', 'CELCOM', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20140521141228', '0a4729fde715475f907787e77a54ac34', 1, NULL, 1400672881, 1400652731, '', '', '', '', '', ''),
(156, 72, 32, 44, '249997413DDB33354652DAF06BEDF783', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T03', 'app3', 1, 1, 1, 'RM', '20140521150251', 'b2f60601e60f478f88751db52c9c79a5', 1, NULL, 1400655761, 1400655753, '', '', '', '', '', ''),
(197, 72, 32, 44, '7C323F95C1A77B5A98249DA5ACD88F57', '601115514404', NULL, '203.208.246.72', 'CELCOM', 6, 'T03', 'app3', 1, 1, 1, 'RM', '20140603115923', 'eddf512507e04796af3b599a973200d2', 1, NULL, 1401767951, 1401767938, '', '', '', '', '', ''),
(198, 72, 32, 45, 'D173F797FA4694210E7F3EEA666A60D2', '60193803065', NULL, '203.208.246.72', 'CELCOM', 6, 'T05', 'app5', 1, 2, 2, 'RM', '20141211120138', 'f9f0bdff159642c9a3c404a7861206b7', 4, NULL, 1418365783, 1418270468, '', '', '', '', '', ''),
(199, 72, 32, 44, '266E5D93420208E3FA0D450E0B214EA1', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20141214153646', '32172904e7b043c78e55cf08c7873653', 1, NULL, 1418557892, 1418542574, '', '', '', '', '', ''),
(200, 80, 34, 49, 'FFBA5B83A9A7560F29233436E4D81798', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T00', 'test', 1, 0, 0, 'RM', '20150203173847', '5be92b682c374d70bbd4c5d44834f282', 4, 'TOT', 1422956292, 1422956237, '', '', '', '', '', ''),
(201, 80, 34, 50, '39EB27DB0247B8D74A43B5318ECFDEAD', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150203175414', '12f51f7f5f604fc59801ed41ac999fcb', 1, 'SUC', 1422993557, 1422957165, '', '', '', '', '', ''),
(202, 80, 34, 50, '00019E2EA91DFB862F7CDEF981E130E0', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150207111343', '62c6f6208e5b4bffa20e959145f7aee1', 1, 'SUC', 1423534785, 1423278731, '', '', '', '', '', ''),
(203, 80, 34, 50, '712EAFD78655DF2896D9DE49215267C2', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150207134006', '66b9bcf2c8f6424688055678a1f3ce05', 1, NULL, 1423534785, 1423287514, '', '', '', '', '', ''),
(204, 80, 34, 50, '691F4762D5F2FBF12D5E19E2210CEF0D', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150210164455', '6feb04fe451b442386eda2a3524888db', 1, 'SUC', 1423594705, 1423557798, '', '', '', '', '', ''),
(205, 80, 34, 49, '594FBBD43FCD39B6BB5F2898A5A95519', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T00', 'test', 1, 0, 0, 'RM', '20150213144254', 'dec76d81b8a54bb0b2172bfe1ffb1b80', 4, 'TOT', 1423809729, 1423809672, '', '', '', '', '', ''),
(206, 80, 34, 49, 'A3D27FD4042286B83B93C8D6E1398D0C', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T00', 'test', 1, 0, 0, 'RM', '20150213164701', '0f67ee051b84437c92b551bb295360b9', 4, 'TOT', 1423817308, 1423817128, '', '', '', '', '', ''),
(207, 80, 34, 50, 'B32613CEFF4BF70455398D13176D82CD', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150213164807', '0012294b64ae4e949c4b33b131846772', 1, 'TOT', 1423856378, 1423817185, '', '', '', '', '', ''),
(208, 80, 34, 50, '0F1835BF02087B9CA008AC981C60FE20', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150310144457', 'd0d8186c0b884c12b7f855ea859abdd7', 1, 'SUC', 1425986453, 1425969769, '', '', '', '', '', ''),
(209, 80, 34, 50, 'C73DF3F553636115007BA59DAD17C482', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150310164041', '65f95732fb7041a1a58f920f601afaa4', 5, 'SUC', 1425976720, 1425976712, '', '', '', '', '', ''),
(210, 80, 34, 50, 'CFC0C5BF4C56E0E4D99389B26667E00E', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150310192514', '171265471f64456e998b1b0f65553419', 5, 'SUC', 1425986591, 1425986583, '', '', '', '', '', ''),
(211, 80, 34, 50, '60CF254B814BC415120FAB3E6AAA5331', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150312165152', '37e95cea267d4aeb95610cb878f35aeb', 1, 'SUC', 1426159663, 1426150188, '', '', '', '', '', ''),
(212, 80, 34, 50, 'FA18EFD1DBCB4A6C6FFA04D5AB0CE0F9', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150312172345', '44a7668909034d2a92070326206afd97', 5, 'SUC', 1426152103, 1426152095, '', '', '', '', '', ''),
(213, 80, 34, 50, '7E500AE86507DDDB34BC9B25DF1ACB52', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150313172222', '9b0e58841fac45a388d34dd39fb8c901', 5, NULL, 1426238410, 1426238410, '', '', '', '', '', ''),
(214, 80, 34, 50, '802292D8FDAC81CF226ED3B00168B9CA', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150317154630', '5891e845379647fcaa7d4be7610b6713', 1, 'SUC', 1426591638, 1426578289, '', '', '', '', '', ''),
(215, 80, 34, 49, '19191B3719019F8962B9E0ECD13B13BC', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T00', 'test', 1, 0, 0, 'RM', '20150317154752', 'fb29ff99a5ff4f929ac98e78e400ee0b', 4, 'TOT', 1426578389, 1426578338, '', '', '', '', '', ''),
(216, 72, 32, 44, '0BFAEF767A819CC9EDB38D760FA35B36', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150325105001', '98c2f2e56a2d49749c9568730d829918', 1, NULL, 1427265973, 1427251657, '', '', '', '', '', ''),
(217, 7676, 37, 52, '3011990E36F29C596D078C8B5D0EF612', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T07', 'app7', 1, 3, 3, 'RM', '20150325105226', '4bcd7cda29464498a4e1f874a11040d1', 1, NULL, 1427265973, 1427251798, '', '', '', '', '', ''),
(218, 72, 32, 45, '776CB71BB956E2727DF9B751C2A42DCE', '60193803065', NULL, '203.208.246.72', 'CELCOM', 6, 'T05', 'app5', 1, 2, 2, 'RM', '20150325155712', '2ce3b200f1964fa2a2eb971ef8c03071', 1, NULL, 1427270255, 1427270085, '', '', '', '', '', ''),
(219, 72, 32, 45, 'AD296195A6A6D952E51B950D6571FE78', '60193803065', NULL, '203.208.246.72', 'CELCOM', 6, 'T05', 'app5', 1, 2, 2, 'RM', '20150325161440', '91ffd1ad585e437db8d9738401ff1e80', 1, NULL, 1427271147, 1427271136, '', '', '', '', '', ''),
(220, 72, 32, 44, '436BF8C6C1C05B5ECC87C76F653C048C', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150325173839', 'd66be795145f4b1e806194d3d372a498', 1, NULL, 1427285863, 1427276199, '', '', '', '', '', ''),
(221, 72, 32, 44, 'D4C57C0E0870F8FACED93A49BE3B877A', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150325174006', 'ee41565bf69249ba819223e793edbaf1', 1, NULL, 1427285863, 1427276257, '', '', '', '', '', ''),
(222, 72, 32, 44, '8942E193A0237E8EB24331FCB19B6D5E', '60126840917', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150326110640', '907b9e38113a46cd99190b02d61bc332', 1, 'SUC', 1427351135, 1427339051, '', '', '', '', '', ''),
(223, 72, 32, 44, 'F73B1CBF5BEB2F3F236C2495CA6CD8E2', '60123878885', NULL, '203.208.246.72', 'DIGI', 5, 'T03', 'app3', 1, 1, 1, 'RM', '20150327121205', 'd8887b2359674739a410c01b2f3d93e9', 1, 'TOT', 1427429430, 1427429383, '', '', '', '', '', ''),
(224, 72, 32, 44, '15B5F6CC04A2A053561A85A02273608D', '60102312728', NULL, '203.208.246.72', 'DIGI', 5, 'T03', 'app3', 1, 1, 1, 'RM', '20150327144024', 'b5ab0c2641d7458698aceef2b40f59f4', 1, 'SUC', 1427461503, 1427438281, '', '', '', '', '', ''),
(225, 7676, 37, 52, 'EE74B02CF20DE0251555879EFBB2DD06', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T07', 'app7', 1, 3, 3, 'RM', '20150331093952', '32d3fea9b4954063834125c422cb5821', 5, NULL, 1427765842, 1427765842, '', '', '', '', '', ''),
(226, 7676, 37, 52, NULL, '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T07', 'app7', 1, 3, 3, 'RM', '20150331101411', '00e8fa47e38948e78f604fd0ea90bff6', 6, NULL, NULL, 1427767904, '', '', '', '', '', ''),
(227, 7676, 37, 52, 'E1BD09FB3F8E92BEB90C65E5664B20A7', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T07', 'app7', 1, 3, 3, 'RM', '20150331104204', '03394fba642a4b93aab593f9db1a57e3', 1, NULL, 1427781564, 1427769573, '', '', '', '', '', ''),
(228, 7676, 37, 52, '3E48244DB1603D3728E1B0C59D4AF307', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T07', 'app7', 1, 3, 3, 'RM', '20150331110628', '12b0b05ea4f4454bb46805915c9106b8', 1, NULL, 1427782074, 1427771046, '', '', '', '', '', ''),
(229, 7676, 37, 52, '2F9CA74C70660D56BA73F59D633D65F4', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T07', 'app7', 1, 3, 3, 'RM', '20150331111235', '60feca7f514c423cbbac447258e760eb', 1, NULL, 1427782074, 1427771411, '', '', '', '', '', ''),
(230, 72, 32, 44, '3107DAA22ABAE87B2A1F351F353ADF74', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150331113833', '11ecf548fbc2452da053e21d85fcc205', 1, NULL, 1427782074, 1427772981, '', '', '', '', '', ''),
(231, 72, 32, 44, '8FD27E5CAD55C4667FDB41A95F08558A', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150331113922', '5001a65486974ef29bfaff0f8b7d5076', 1, NULL, 1427782074, 1427773007, '', '', '', '', '', ''),
(232, 72, 32, 44, 'A60435005A9287B7E9F999FF06EBB4C1', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150331154749', '888c6ec1e1cf4bb3a662d5386cf73224', 5, NULL, 1427787925, 1427787925, '', '', '', '', '', ''),
(233, 72, 32, 44, 'CB2DB414F805693B40FC1E815E8EBC64', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150331170427', 'b8bf2520e7da45bc8e461a937d35705a', 5, NULL, 1427792533, 1427792533, '', '', '', '', '', ''),
(234, 72, 32, 44, 'DFDE200FE4210049606CE80319BE697D', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150331203737', '0c8b540c175f4937b165e92dedd6f410', 5, NULL, 1427805315, 1427805314, '', '', '', '', '', ''),
(235, 72, 32, 44, '4324770843CAFD32296542F4C1B3F64A', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150401104704', '87d8ac20b1bf48bfbbc0fc69c76c410b', 1, NULL, 1427869959, 1427856269, '', '', '', '', '', ''),
(236, 72, 32, 44, 'E7AC9510F49E725CAC70CE70E4F0B5D6', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150401105003', 'e5566260ac1444abba421be6b07c7d1b', 1, NULL, 1427869959, 1427856447, '', '', '', '', '', ''),
(237, 72, 32, 44, 'F3FC374F5988B34181282A4744C3B8E1', '60123915605', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150401141338', '1cb3173027734fafa9d6ce47331ba0cd', 5, NULL, 1427868684, 1427868683, '', '', '', '', '', ''),
(238, 72, 32, 46, '28E6E0851EE32D5C282991A2EA3FDBA6', '60123120308', NULL, '203.208.246.72', 'MAXIS', 4, 'T07', 'app7', 1, 3, 3, 'RM', '20150402101910', '1afc9894084d4b718c1745d122765d20', 1, 'SUC', 1427956014, 1427940994, '', '', '', '', '', ''),
(239, 72, 32, 42, '45DBA9807489124D20DBFB20DC0A149C', '60123120308', NULL, '203.208.246.72', 'MAXIS', 4, 'T09', 'app9', 1, 4, 4, 'RM', '20150402101959', 'd43bcaf6a5d34bcf8c1ad994d1ead5e1', 1, 'SUC', 1427956014, 1427941052, '', '', '', '', '', ''),
(240, 72, 32, 47, '144F3BA573E5C450B6E8DCAA82BD3DBE', '60123120308', NULL, '203.208.246.72', 'MAXIS', 4, 'T13', 'app13', 1, 6, 6, 'RM', '20150402102456', '4cb51010099b4869a0c8b8321ccb7068', 1, 'SUC', 1427956014, 1427941384, '', '', '', '', '', ''),
(241, 72, 32, 44, 'CA680FDD0F2130AC1116AE77CBA26739', '60123120308', NULL, '203.208.246.72', 'MAXIS', 4, 'T03', 'app3', 1, 1, 1, 'RM', '20150402103440', '08020bad653844dcbb90da333cf860e3', 1, 'SUC', 1427956014, 1427941963, '', '', '', '', '', ''),
(242, 72, 32, 45, '2AF04385AC5F3953E52664286061272E', '60123120308', NULL, '203.208.246.72', 'MAXIS', 4, 'T05', 'app5', 1, 2, 2, 'RM', '20150402103716', '9b5a62e374f64422acc68e298a1a1096', 1, 'SUC', 1427956014, 1427942084, '', '', '', '', '', ''),
(243, 72, 32, 47, '41E9BFBEA13CF19E82756C5E6327C5FA', '60123120308', NULL, '203.208.246.72', 'MAXIS', 4, 'T13', 'app13', 1, 6, 6, 'RM', '20150402103832', 'ec3895fdfacc4457b8cef81a03bacf41', 1, 'SUC', 1427956014, 1427942154, '', '', '', '', '', ''),
(244, 5, 16, NULL, NULL, '', NULL, '192168001102', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151113190704', 'jfwxE0EC3DA7AF81EE5762159660F506CA12', 5, NULL, NULL, 1447412824, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(245, 5, 16, NULL, NULL, '', NULL, '192168001102', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151113192153', 'jfwx9ECA7AC4EEBCAA99E8AEADCD2B603BA2', 5, NULL, NULL, 1447413713, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(246, 5, 16, NULL, NULL, '', NULL, '192168001102', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116095308', 'jfwxAB0E6F467307160E8CFBDB58B86305C9', 5, NULL, NULL, 1447638788, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(247, 5, 16, NULL, NULL, '', NULL, '010146066046', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116095544', 'jfwx21F5AF4CCD6A958D5AA3BA5DC88C0960', 5, NULL, NULL, 1447638944, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(248, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116095824', 'jfwxC97C97A097E0F1FA0B18AE6AED00E8B2', 5, NULL, NULL, 1447639104, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(249, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116153027', 'jfwxC6090AD8050826F9FD89EC8C04C5DA48', 5, NULL, NULL, 1447659027, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(250, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116153226', 'jfwx00FFD863FC7DFCDD93FF7384850BA0CC', 5, NULL, NULL, 1447659146, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(251, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116153512', 'jfwxA983B76ACD15F0212CA69C8F22DE436D', 5, NULL, NULL, 1447659312, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(252, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116154759', 'jfwxFB9FF1E7A106BA60A03F9EFC225998B4', 5, NULL, NULL, 1447660079, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(253, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116155212', 'jfwx9D70DFF6792BEF209718A1304B1FBD27', 5, NULL, NULL, 1447660332, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(254, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116155310', 'jfwx2793171C92C952054A5A77F2731B1800', 5, NULL, NULL, 1447660390, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(255, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116155727', 'jfwx59560F7135D6187D76072C49D41F6A0D', 5, NULL, NULL, 1447660647, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(256, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116155825', 'jfwxE23FA159BC0C1F14FF48FEA91FB1D599', 5, NULL, NULL, 1447660705, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(257, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116160206', 'jfwx2B0A696F14A340852768823F078DC020', 5, NULL, NULL, 1447660926, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(258, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116160722', 'jfwxDC87D8C006D3C5D33F2203CB46EDD408', 5, NULL, NULL, 1447661242, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(259, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116160943', 'jfwxE87CE61918EF9876066D645B6FF4EC2A', 5, NULL, NULL, 1447661383, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo'),
(260, 5, 16, NULL, NULL, '', NULL, '192168137104', '46001', 0, 'T00', 'test', 0, 0, 0, 'RM', '20151116161228', 'jfwx07AED3D5476F34924952C8C3F9D084A7', 5, NULL, NULL, 1447661548, 'e4907eaff0d7', '1', '460018172638740', '89860112881011714846', '1.0', 'com.example.demo');

-- --------------------------------------------------------

--
-- 表的结构 `telcos`
--

CREATE TABLE IF NOT EXISTS `telcos` (
`id` int(11) unsigned NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `operator` varchar(32) DEFAULT NULL,
  `country` varchar(32) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `updated` int(10) unsigned DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `telcos`
--

INSERT INTO `telcos` (`id`, `code`, `operator`, `country`, `name`, `updated`, `created`) VALUES
(1, '6', 'CELCOM', 'Malaysia', 'CELCOM', NULL, 1400505710),
(2, '5', 'DIGI', 'Malaysia', 'DIGI', NULL, 1400505731),
(3, '4', 'MAXIS', 'Malaysia', 'MAXIS', NULL, 1400505759),
(4, '46000', 'CTCC', '中国', '电信朗天通讯', NULL, 1448939774),
(5, '46001', 'CUCC', 'China', '中国联通沃商店', NULL, 1448939863);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `mobile` int(16) DEFAULT NULL,
  `icoin` decimal(15,2) DEFAULT '0.00',
  `icost` decimal(15,2) NOT NULL DEFAULT '0.00',
  `experience` int(10) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  `face` varchar(255) DEFAULT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9832 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `mobile`, `icoin`, `icost`, `experience`, `sex`, `face`, `logins`, `last_login`, `created`) VALUES
(1, 'sean@noobird.com', 'admin', 'f149c1f504711e488dcd2029d0cce10c', NULL, '0.00', '0.00', NULL, 0, '/data/user/1/1/avata05.png', 186, 1426057744, NULL),
(2, 'wanzhu008@gmail.com', '顽主', '9160381a3cd4247994c8e5201362cf45d3c9c7af4ab8617291397b1eb0f3e6b7', NULL, '0.00', '0.00', NULL, 2, '/data/user/2/2/avata02.png', 7, 1371572575, 1368167573),
(9830, 'test@aviup123.com', 'testadmin123', 'a2639f35a0939cea541e34f243b9d241', NULL, '0.00', '0.00', NULL, NULL, NULL, 0, NULL, 1446521820),
(9831, '', 'admintest', 'f149c1f504711e488dcd2029d0cce10c', NULL, '0.00', '0.00', NULL, NULL, NULL, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_application_user_id` (`user_id`), ADD KEY `fk_application_key` (`app_key`);

--
-- Indexes for table `approvals`
--
ALTER TABLE `approvals`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_infos`
--
ALTER TABLE `client_infos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_developers_user_id` (`user_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iaps`
--
ALTER TABLE `iaps`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_iaps_app_id` (`application_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mncs`
--
ALTER TABLE `mncs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_code`
--
ALTER TABLE `pay_code`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_statistics_app_id` (`application_id`), ADD KEY `fk_statistics_user_id` (`user_id`), ADD KEY `fk_statistics_iap_id` (`iap_id`), ADD KEY `fk_statistics_message_id` (`message_id`);

--
-- Indexes for table `telcos`
--
ALTER TABLE `telcos`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_operators_code` (`code`), ADD KEY `fk_operators_operator` (`operator`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_username` (`username`), ADD UNIQUE KEY `uniq_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `client_infos`
--
ALTER TABLE `client_infos`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `iaps`
--
ALTER TABLE `iaps`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `mncs`
--
ALTER TABLE `mncs`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pay_code`
--
ALTER TABLE `pay_code`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=261;
--
-- AUTO_INCREMENT for table `telcos`
--
ALTER TABLE `telcos`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9832;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
