-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-05-29 04:31:00
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
  `m5_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `member_0520`
--

INSERT INTO `member_0520` (`m5_seq`, `m5_id`, `m5_pw`, `m5_name`, `m5_sex`, `m5_time`) VALUES
(1, 'aaa', 's', 'd', '', '2018-05-29 00:00:00'),
(2, 'ssss', '2d02e669731cbade6a64b58d602cf2a4', '4s', '女', '2018-05-29 10:28:59');

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
  MODIFY `m5_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
