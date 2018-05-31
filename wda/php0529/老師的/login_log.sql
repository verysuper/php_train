-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-05-31 03:54:31
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `myphp_2018_05`
--

-- --------------------------------------------------------

--
-- 資料表結構 `login_log`
--

CREATE TABLE `login_log` (
  `ll_seq` int(10) UNSIGNED NOT NULL COMMENT '索引鍵',
  `ll_id` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '登入的帳號',
  `ll_jo` int(1) NOT NULL COMMENT '登入的結果',
  `ll_ip` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '登入的IP',
  `ll_time` datetime NOT NULL COMMENT '登入的時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `login_log`
--

INSERT INTO `login_log` (`ll_seq`, `ll_id`, `ll_jo`, `ll_ip`, `ll_time`) VALUES
(1, 'asd', 0, '127.0.0.1', '2018-05-31 08:30:30'),
(2, 'qqq', 0, '127.0.0.1', '2018-05-31 08:30:46'),
(3, 'xxx', 0, '127.0.0.1', '2018-05-31 08:30:51'),
(4, 'QAQ', 1, '127.0.0.1', '2018-05-31 08:30:56'),
(8, 'xxxx', 0, '::1', '2018-05-31 09:39:19'),
(9, 'xxxx', 0, '::1', '2018-05-31 09:39:59'),
(10, 'xxxx', 0, '::1', '2018-05-31 09:40:03'),
(11, 'AA', 0, '127.0.0.1', '2018-05-31 09:40:19'),
(12, 'AA', 0, '127.0.0.1', '2018-05-31 09:40:43'),
(13, 'AA', 0, '127.0.0.1', '2018-05-31 09:40:48'),
(14, 'QAQ', 1, '127.0.0.1', '2018-05-31 09:41:04'),
(15, 'sd', 0, '127.0.0.1', '2018-05-31 09:41:14'),
(16, 'sd', 0, '127.0.0.1', '2018-05-31 09:41:22'),
(17, 'sd', 0, '127.0.0.1', '2018-05-31 09:41:24');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `login_log`
--
ALTER TABLE `login_log`
  ADD PRIMARY KEY (`ll_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `login_log`
--
ALTER TABLE `login_log`
  MODIFY `ll_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '索引鍵', AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
