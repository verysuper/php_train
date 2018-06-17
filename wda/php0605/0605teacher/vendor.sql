-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-06-05 10:27:30
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
-- 資料表結構 `vendor`
--

CREATE TABLE `vendor` (
  `v_seq` int(10) UNSIGNED NOT NULL,
  `v_name` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '廠商名稱',
  `v_con` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '廠商敘述'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `vendor`
--

INSERT INTO `vendor` (`v_seq`, `v_name`, `v_con`) VALUES
(1, '春水堂', '賣吃的'),
(2, '墾的G', '也是吃ㄉ'),
(3, 'A0A', 'CC'),
(4, 'BBB', 'cc'),
(5, 'FFF', 'ddd'),
(6, 'UUU', 'sdfsd'),
(9, 'XAX', 'a'),
(10, '0.0', 'YA');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`v_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `vendor`
--
ALTER TABLE `vendor`
  MODIFY `v_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
