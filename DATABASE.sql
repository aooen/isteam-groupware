-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: db
-- 생성 시간: 19-02-08 13:20
-- 서버 버전: 10.0.33-MariaDB-0ubuntu0.16.04.1
-- PHP 버전: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `gkrdus124`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `isteam_memberlist`
--

CREATE TABLE `isteam_memberlist` (
  `number` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `isteam_project`
--

CREATE TABLE `isteam_project` (
  `no` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('open','close','delete') COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `isteam_project_attachment`
--

CREATE TABLE `isteam_project_attachment` (
  `no` bigint(20) UNSIGNED NOT NULL,
  `project_no` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('image','url','text') COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `isteam_project_team`
--

CREATE TABLE `isteam_project_team` (
  `project_no` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `isteam_user`
--

CREATE TABLE `isteam_user` (
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `isteam_memberlist`
--
ALTER TABLE `isteam_memberlist`
  ADD PRIMARY KEY (`number`);

--
-- 테이블의 인덱스 `isteam_project`
--
ALTER TABLE `isteam_project`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `isteam_project_attachment`
--
ALTER TABLE `isteam_project_attachment`
  ADD PRIMARY KEY (`no`),
  ADD KEY `project_no` (`project_no`);

--
-- 테이블의 인덱스 `isteam_project_team`
--
ALTER TABLE `isteam_project_team`
  ADD KEY `user_project` (`project_no`,`user_id`) USING BTREE;

--
-- 테이블의 인덱스 `isteam_user`
--
ALTER TABLE `isteam_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `number` (`number`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `isteam_project`
--
ALTER TABLE `isteam_project`
  MODIFY `no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `isteam_project_attachment`
--
ALTER TABLE `isteam_project_attachment`
  MODIFY `no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
