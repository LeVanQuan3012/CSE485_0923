-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 22, 2023 lúc 05:53 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btth01_cse485`
--

DELIMITER $$
--
-- Thủ tục
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_DSBaiViet` (IN `ten_tloai` VARCHAR(100))   BEGIN
    DECLARE ma_tloai int;
    SELECT theloai.ma_tloai INTO ma_tloai FROM theloai WHERE theloai.ten_tloai = ten_tloai;
    IF ma_tloai IS NULL THEN
        SELECT "Không tồn tại " AS Message;
    ELSE
        SELECT * FROM baiviet WHERE baiviet.ma_tloai = ma_tloai;
    END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `ma_bviet` int(11) NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(11) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text DEFAULT NULL,
  `ma_tgia` int(11) NOT NULL,
  `ngayviet` datetime NOT NULL,
  `hinhanh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
(1, 'Tiêu đề 1', 'Bài hát 1', 1, 'tóm tắt 1', 'Nội dung 1', 1, '2023-09-22 07:47:32', 'hình ảnh 1'),
(2, 'Tiêu đề 2', 'Bài hát 2', 2, 'Tóm tắt 2', 'nội dung 2', 2, '2023-09-22 07:49:55', 'Hình ảnh 2'),
(3, 'Tiêu đề 3', 'Bài hát 3', 3, 'Tóm tắt 3', 'Nội dung 3', 3, '2023-09-22 07:52:49', 'Hình ảnh 3'),
(4, 'Tiêu đề 4', 'Bài hát 4', 4, 'tóm tắt 4', 'nội dung 4', 4, '2023-09-22 08:03:45', 'Hình ảnh4'),
(5, 'Tiêu đề 5', 'Bài hát 5', 3, 'Tóm tắt 5', 'Nội dung 5', 1, '2023-09-22 08:25:33', 'Hình ảnh 5'),
(6, 'Tiêu đề 6', 'Bài hát 6', 1, 'Tóm tắt 6', 'Nội dung 6', 1, '2023-09-22 08:30:47', 'Hình ảnh 6'),
(7, 'Tiêu đề 7', 'Bài hát 7', 2, 'Tóm tắt 7', 'Nội dung 7', 2, '2023-09-22 08:30:47', 'Hình ảnh 7'),
(8, 'Tiêu đề 8', 'Bài hát 8', 3, 'Yêu và thương và anh và em và', 'Nội dung 8', 1, '2023-09-22 08:39:47', 'Hình ảnh 8'),
(9, 'Đừng yêu', 'Bài hát 9', 1, 'Tóm tắt 9', 'Nội dung 9', 1, '2023-09-22 08:45:40', 'Hình ảnh 9'),
(10, 'Tiêu đề 10', 'Bài hát 10', 1, '', NULL, 4, '2023-09-22 17:45:39', 'Hình ảnh 10');

--
-- Bẫy `baiviet`
--
DELIMITER $$
CREATE TRIGGER `tg_CapNhatTheLoai` AFTER INSERT ON `baiviet` FOR EACH ROW BEGIN
    UPDATE theloai
    SET SLBaiViet = SLBaiViet + 1
    WHERE ma_tloai = NEW.ma_tloai;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `ma_tgia` int(11) NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tgia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
(1, 'Sơn Tùng', 'hinh1'),
(2, 'Mỹ Tâm', 'hinh2'),
(3, 'Thủy Tiên', 'hinh3'),
(4, 'Nhacvietplus', 'hình 4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `ma_tloai` int(11) NOT NULL,
  `ten_tloai` varchar(50) NOT NULL,
  `SLBaiViet` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`, `SLBaiViet`) VALUES
(1, 'Nhạc trữ tình', 1),
(2, 'Nhạc đỏ', 0),
(3, 'Nhạc cách mạng', 0),
(4, 'Thể loại 4', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `vw_music`
-- (See below for the actual view)
--
CREATE TABLE `vw_music` (
`ma_bviet` int(11)
,`tieude` varchar(200)
,`ten_tloai` varchar(50)
,`ten_tgia` varchar(100)
);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `vw_music`
--
DROP TABLE IF EXISTS `vw_music`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_music`  AS SELECT `baiviet`.`ma_bviet` AS `ma_bviet`, `baiviet`.`tieude` AS `tieude`, `theloai`.`ten_tloai` AS `ten_tloai`, `tacgia`.`ten_tgia` AS `ten_tgia` FROM ((`baiviet` join `theloai` on(`baiviet`.`ma_tloai` = `theloai`.`ma_tloai`)) join `tacgia` on(`baiviet`.`ma_tgia` = `tacgia`.`ma_tgia`)) ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ma_bviet`),
  ADD KEY `ma_tloai` (`ma_tloai`),
  ADD KEY `ma_tgia` (`ma_tgia`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`ma_tgia`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`ma_tloai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `ma_bviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `ma_tgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `ma_tloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`),
  ADD CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
