-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-02-17 08:19:23
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `portfolio`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `id` int(5) NOT NULL,
  `brief` text COLLATE utf8_unicode_520_ci NOT NULL,
  `habit` text COLLATE utf8_unicode_520_ci NOT NULL,
  `skill` text COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `acc` text COLLATE utf8_unicode_520_ci NOT NULL,
  `pw` text COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'tiff', '199504');

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `id` int(5) NOT NULL,
  `name` text COLLATE utf8_unicode_520_ci NOT NULL,
  `email` text COLLATE utf8_unicode_520_ci NOT NULL,
  `company` text COLLATE utf8_unicode_520_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_520_ci NOT NULL,
  `message` text COLLATE utf8_unicode_520_ci NOT NULL,
  `tiime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `company`, `subject`, `message`, `tiime`) VALUES
(1, 'Micky', 'Micky@aaa.com', '', 'Hello', 'Sleep well', '2022-02-16 03:00:23');

-- --------------------------------------------------------

--
-- 資料表結構 `scheme`
--

CREATE TABLE `scheme` (
  `id` int(5) NOT NULL,
  `pri_color` text COLLATE utf8_unicode_520_ci NOT NULL,
  `acc_color` text COLLATE utf8_unicode_520_ci NOT NULL,
  `bg_color` text COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `works`
--

CREATE TABLE `works` (
  `id` int(5) NOT NULL,
  `title` text COLLATE utf8_unicode_520_ci NOT NULL,
  `idea` text COLLATE utf8_unicode_520_ci NOT NULL,
  `tag` text COLLATE utf8_unicode_520_ci NOT NULL,
  `img_url` text COLLATE utf8_unicode_520_ci NOT NULL,
  `demo_url` text COLLATE utf8_unicode_520_ci NOT NULL,
  `g_url` text COLLATE utf8_unicode_520_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- 傾印資料表的資料 `works`
--

INSERT INTO `works` (`id`, `title`, `idea`, `tag`, `img_url`, `demo_url`, `g_url`, `sh`) VALUES
(1, '作品一', '發揮想像力', 'Bootstrap,PHP', './img/001', 'https://www.google.com/', 'https://www.google.com/', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `work_exp`
--

CREATE TABLE `work_exp` (
  `id` int(5) NOT NULL,
  `position` text COLLATE utf8_unicode_520_ci NOT NULL,
  `company` text COLLATE utf8_unicode_520_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `sum` text COLLATE utf8_unicode_520_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `work_exp`
--
ALTER TABLE `work_exp`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about`
--
ALTER TABLE `about`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `scheme`
--
ALTER TABLE `scheme`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `works`
--
ALTER TABLE `works`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `work_exp`
--
ALTER TABLE `work_exp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
