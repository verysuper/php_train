-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-05-31 03:54:37
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
-- 資料表索引 `member_0520`
--
ALTER TABLE `member_0520`
  ADD PRIMARY KEY (`m5_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `member_0520`
--
ALTER TABLE `member_0520`
  MODIFY `m5_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
