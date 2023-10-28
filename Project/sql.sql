-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2023 lúc 08:20 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sql`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pttt` tinyint(1) NOT NULL DEFAULT 1,
  `ngaydathang` varchar(50) DEFAULT NULL,
  `tong` int(10) NOT NULL DEFAULT 0,
  `trangthai` tinyint(1) NOT NULL DEFAULT 0,
  `name2` varchar(255) DEFAULT NULL,
  `diachi2` varchar(255) DEFAULT NULL,
  `sdt2` varchar(50) DEFAULT NULL,
  `email2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `name`, `diachi`, `sdt`, `email`, `pttt`, `ngaydathang`, `tong`, `trangthai`, `name2`, `diachi2`, `sdt2`, `email2`) VALUES
(28, 1, 'admin', '88 Vĩnh Phúc', '0375343852', 'hung87800@gmail.com', 1, '06:28:20pm 27/10/2023', 500000, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gia` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idsp`, `img`, `name`, `gia`, `soluong`, `thanhtien`, `idbill`) VALUES
(35, 7, 18, '6.jpg', 'Balo snsBHX', 1000, 1, 1000, 22),
(36, 7, 20, '7.jpg', 'Samsung Galaxy Z Flip3', 26000000, 1, 26000000, 22),
(37, 7, 20, '7.jpg', 'Samsung Galaxy Z Flip3', 26000000, 1, 26000000, 24),
(38, 7, 20, '7.jpg', 'Samsung Galaxy Z Flip3', 26000000, 1, 26000000, 25),
(39, 7, 18, '6.jpg', 'Balo snsBHX', 1000, 1, 1000, 25),
(44, 1, 24, 'Dell.jpg', 'ULTRA', 500000, 1, 500000, 28);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(16, 'Laptop'),
(17, 'Đồng hồ'),
(18, 'Balo'),
(19, 'Phụ kiện thời trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) NOT NULL,
  `don_gia` double(10,2) NOT NULL,
  `giam_gia` double(10,2) DEFAULT 0.00,
  `hinh` varchar(50) NOT NULL,
  `ngay_nhap` varchar(255) DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `dac_biet` bit(1) NOT NULL DEFAULT b'0',
  `so_luot_xem` int(11) DEFAULT 0,
  `ma_loai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(1, 'samsung', 99999999.99, 0.00, '2585595.jpg', NULL, 'vip pro', b'0', 0, 29),
(2, 'samsung', 12000000.00, 0.00, '2585595.jpg', NULL, 'Vip pro', b'0', 0, 29),
(5, 'dell', 100000.00, 0.00, '65da50d19e10aee83345f8bb672caa57.png', NULL, 'vip bá cháy', b'0', 3, 28),
(7, 'vivo', 8999000.00, 7999000.00, 'vivo-v20-pro-5g-2.jpg', '13/06/2022', 'vivi v20 pro', b'1', 8, 29),
(8, 'iphone', 31990000.00, 29990000.00, 'iphone-13-pro-max-gold-1-600x600.jpg', '13/06/2022', 'Iphone 13 pro max', b'1', 99, 29),
(12, 'iphone 11', 9999000.00, 8999000.00, 'apple-iphone-11-tim-didongviet_5.jpg', '13/06/2022', 'iphone 11', b'1', 0, 29);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `ma_loai` int(10) NOT NULL COMMENT 'mã loại hàng',
  `ten_loai` varchar(50) NOT NULL COMMENT 'tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`ma_loai`, `ten_loai`) VALUES
(28, 'Laptop smart'),
(29, 'điện thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gia` double DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `gia`, `img`, `mota`, `luotxem`, `danhmuc`) VALUES
(21, '12 PRM', 10000, 'locgio.jpg', '', 0, 19),
(22, 'HAHA ', 500000, 'Bóp cu.gif', '', 0, 17),
(23, 'Acer Predator', 99999999, 'Acer Predator.jpg', '', 0, 16),
(24, 'Dell 7420', 500000, 'Dell.jpg', 'Máy ngon giá rẻ phù hợp với nhu cầu của nhiều người', 0, 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `diachi`, `sdt`, `role`) VALUES
(1, 'admin', '123456', 'hung87800@gmail.com', '88 Vĩnh Phúc', '0375343852', 1),
(2, 'project1', '111111', 'project1@gmail.com', NULL, '0933705634', 0),
(9, 'project2', '222222', 'project2@gmail.com', NULL, NULL, 0),
(10, 'project3', '333333', 'project3@gmail.com', NULL, NULL, 0),
(11, 'nhi', '123', 'tranphuongnhi180601@gmail.com', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idsp` (`idsp`) USING BTREE;

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `lk_lh_hh` (`ma_loai`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sp_dm` (`danhmuc`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT COMMENT 'mã loại hàng', AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `lk_lh_hh` FOREIGN KEY (`ma_loai`) REFERENCES `loaihang` (`ma_loai`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sp_dm` FOREIGN KEY (`danhmuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
