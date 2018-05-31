-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-05-31 03:49:34
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

-- --------------------------------------------------------

--
-- 資料表結構 `member_0520`
--

CREATE TABLE `member_0520` (
  `m5_seq` int(10) UNSIGNED NOT NULL,
  `m5_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `m5_pw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `m5_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `m5_sex` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `m5_time` datetime NOT NULL,
  `m5_del` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `member_0520`
--

INSERT INTO `member_0520` (`m5_seq`, `m5_id`, `m5_pw`, `m5_name`, `m5_sex`, `m5_time`, `m5_del`) VALUES
(2, 'ssss', '2d02e669731cbade6a64b58d602cf2a4', 'KK', '女', '2018-05-29 10:28:59', 1),
(3, 'xxx', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', 'xxx', '男', '2018-05-29 10:35:12', 0),
(4, 'qqq', 'b2ca678b4c936f905fb82f2733f5297f', '999', '女', '2018-05-29 10:35:18', 1),
(7, 'xxx', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', 'xxx', '男', '2018-05-29 13:19:12', 0),
(8, 'xxx', '53e59fface936ea788f7cf51e7b25531', 'OO', '男', '2018-05-29 13:29:26', 1),
(9, 'QAQ', 'e50c05d19e7a6942f9031d457b6d3839', 'YA', '女', '2018-05-29 15:46:39', 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `login_log`
--
ALTER TABLE `login_log`
  ADD PRIMARY KEY (`ll_seq`);

--
-- 資料表索引 `member_0520`
--
ALTER TABLE `member_0520`
  ADD PRIMARY KEY (`m5_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `login_log`
--
ALTER TABLE `login_log`
  MODIFY `ll_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '索引鍵', AUTO_INCREMENT=18;

--
-- 使用資料表 AUTO_INCREMENT `member_0520`
--
ALTER TABLE `member_0520`
  MODIFY `m5_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
