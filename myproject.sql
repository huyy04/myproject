-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 13, 2024 lúc 05:05 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `myproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sdt` int NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tongdonhang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `name`, `email`, `sdt`, `diachi`, `tongdonhang`) VALUES
(1, 'vuhuy', 'vuhuy0910@gmail.com', 123456789, 'Thai Binh', 100000),
(2, 'vuhuy', 'vuhuy0910@gmail.com', 123456789, 'Thai Binh', 100000),
(3, 'huy', 'vuhuy0910@gmail.com', 363102652, 'Thai Binh', 100000),
(4, 'huy', 'huy@gmail.com', 363102652, 'Thai Binh', 600000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `idsp` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_chitiet` int NOT NULL,
  `soluong` int NOT NULL,
  `id_sanpham` int NOT NULL,
  `id_hoadon` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sdt` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddm` int NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddm`, `img`, `name`) VALUES
(1, 'dm1.jpg', 'Áo thể thao'),
(2, 'dm2.jpg', 'Áo polo'),
(3, 'dm3.jpg', 'Áo thun'),
(4, 'dm4.jpg', 'Set thể thao'),
(5, 'dm5.jpg', 'Quần thể thao'),
(6, 'dm6.jpg', 'Chăm sóc nam giới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int NOT NULL,
  `tongtien` int NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `soluong` int NOT NULL,
  `mota` varchar(550) COLLATE utf8mb4_general_ci NOT NULL,
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `soluong`, `mota`, `iddm`) VALUES
(1, 'Áo thể thao ', 'sp1.jpg', 100000, 0, 'Áo Thể Thao Nam TSIMPLE là sự kết hợp hoàn hảo giữa phong cách và hiệu suất. Với chất thun lạnh co giãn 4 chiều, Áo Thể Thao Nam này không chỉ giúp bạn cảm thấy thoải mái trong quá trình tập gym, mà còn thấm hút mồ hôi vượt trội và khô nhanh gấp 4 lần. Bạ', 1),
(2, 'Áo thể thao ', 'sp2.jpg', 100000, 0, 'Áo Thể Thao Nam TSIMPLE là sự kết hợp hoàn hảo giữa phong cách và hiệu suất. Với chất thun lạnh co giãn 4 chiều, Áo Thể Thao Nam này không chỉ giúp bạn cảm thấy thoải mái trong quá trình tập gym, mà còn thấm hút mồ hôi vượt trội và khô nhanh gấp 4 lần. Bạ', 1),
(3, 'Áo thể thao ', 'sp3.jpg', 100000, 0, 'Áo Thể Thao Nam TSIMPLE là sự kết hợp hoàn hảo giữa phong cách và hiệu suất. Với chất thun lạnh co giãn 4 chiều, Áo Thể Thao Nam này không chỉ giúp bạn cảm thấy thoải mái trong quá trình tập gym, mà còn thấm hút mồ hôi vượt trội và khô nhanh gấp 4 lần. Bạ', 1),
(4, 'Áo thể thao ', 'sp4.jpg', 100000, 0, 'Áo Thể Thao Nam TSIMPLE là sự kết hợp hoàn hảo giữa phong cách và hiệu suất. Với chất thun lạnh co giãn 4 chiều, Áo Thể Thao Nam này không chỉ giúp bạn cảm thấy thoải mái trong quá trình tập gym, mà còn thấm hút mồ hôi vượt trội và khô nhanh gấp 4 lần. Bạ', 1),
(5, 'Áo thể thao ', 'sp5.jpg', 100000, 0, 'Áo Thể Thao Nam TSIMPLE là sự kết hợp hoàn hảo giữa phong cách và hiệu suất. Với chất thun lạnh co giãn 4 chiều, Áo Thể Thao Nam này không chỉ giúp bạn cảm thấy thoải mái trong quá trình tập gym, mà còn thấm hút mồ hôi vượt trội và khô nhanh gấp 4 lần. Bạ', 1),
(6, 'Áo thể thao ', 'sp6.jpg', 100000, 0, 'Áo Thể Thao Nam TSIMPLE là sự kết hợp hoàn hảo giữa phong cách và hiệu suất. Với chất thun lạnh co giãn 4 chiều, Áo Thể Thao Nam này không chỉ giúp bạn cảm thấy thoải mái trong quá trình tập gym, mà còn thấm hút mồ hôi vượt trội và khô nhanh gấp 4 lần. Bạn sẽ luôn cảm thấy mát mẻ và tự tin trong mọi bài tập.\r\n\r\n \r\n\r\nĐặc điểm nổi bật của Áo Thể Thao Nam:\r\n\r\n– Chất thun lạnh co giãn 4 chiều: cho phép bạn tập luyện mà không bị hạn chế động tác. Chất liệu co giãn đàn hồi tốt giúp áo vừa vặn và không bị co rút, mang đến sự thoải mái tuyệt đối.\r\n\r\n– ', 1),
(7, 'Áo polo tsimple', 'sp7.jpg', 100000, 0, 'đẹp', 2),
(8, 'Áo polo tsimple', 'sp8.jpg', 100000, 0, 'đẹp', 2),
(9, 'Áo polo tsimple', 'sp9.jpg', 100000, 0, 'đẹp', 2),
(15, 'cute', 'images.jpg', 100000, 0, '', 2),
(16, 'Ao polo tsimple', 'sp10.jpg', 100000, 0, '', 2),
(20, 'Ao thun nam tsimple', 'baner5.jpg', 100000, 0, '', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sdt` int NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `sdt`, `diachi`) VALUES
(1, 'vuhuy', 'vuhuy0910@gmail.com', '123456', 123456789, 'Thai Binh'),
(2, 'huyvu', 'vuhuy0910@fpt.vn', '09102004', 987654321, 'Thai Binh'),
(3, 'huyvd', 'huy@gmail.com', '12345', 0, ''),
(4, 'vudinhhuy', 'huy@gmail.com', '123456', 0, ''),
(5, 'huyy', 'huyvudinh04@gmail.vn', '12345', 0, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_cart-user` (`id_user`),
  ADD KEY `lk_cart-sp` (`idsp`),
  ADD KEY `lk_cart-bill` (`idbill`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_chitiet`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddm`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sp-dm` (`iddm`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_chitiet` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_cart-bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `lk_cart-sp` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `lk_cart-user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sp-dm` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`iddm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
