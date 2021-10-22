-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 03:52 AM
-- Phiên bản máy phục vụ: 8.0.17
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quản lý xe cho thuê`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thông tin xe cho thuê`
--

CREATE TABLE `thông tin xe cho thuê` (
  `vehicle_id` int(10) NOT NULL,
  `license_no` varchar(10) NOT NULL,
  `model` int(10) NOT NULL,
  `year` year(4) NOT NULL,
  `ctype` varchar(50) NOT NULL,
  `drate` int(10) NOT NULL,
  `wrate` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `thông tin xe cho thuê`
--

INSERT INTO `thông tin xe cho thuê` (`vehicle_id`, `license_no`, `model`, `year`, `ctype`, `drate`, `wrate`, `status`) VALUES
(1, '29A12345', 2020, 2020, 'SUV', 1000000, 30000000, 0),
(2, '51F88838', 2019, 2019, 'Limousine ', 2000000, 60000000, 1),
(3, '75A56789', 2021, 2021, 'Coupe ', 5000000, 150000000, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thông tin xe cho thuê`
--
ALTER TABLE `thông tin xe cho thuê`
  ADD PRIMARY KEY (`vehicle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
