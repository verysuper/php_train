-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-05-31 05:06:14
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
-- 資料表結構 `block_log`
--

CREATE TABLE `block_log` (
  `bl_seq` int(10) UNSIGNED NOT NULL,
  `bl_ip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bl_time` datetime NOT NULL,
  `bl_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `block_log`
--

INSERT INTO `block_log` (`bl_seq`, `bl_ip`, `bl_time`, `bl_type`) VALUES
(1, '::1', '2018-05-31 11:11:13', 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `block_log`
--
ALTER TABLE `block_log`
  ADD PRIMARY KEY (`bl_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `block_log`
--
ALTER TABLE `block_log`
  MODIFY `bl_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
