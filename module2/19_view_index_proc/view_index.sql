-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 12:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `view_index`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_product` (IN `ID` INT, IN `masanpham` VARCHAR(50), IN `ten_san_pham` VARCHAR(50), IN `gia_san_pham` FLOAT, IN `productAmount` INT, IN `Mo_ta_san_pham` VARCHAR(250), IN `trang_thai_san_pham` VARCHAR(250))   BEGIN
INSERT INTO products
VALUES(ID,masanpham,ten_san_pham,gia_san_pham,productAmount,Mo_ta_san_pham,trang_thai_san_pham);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_product` (IN `id` INT)   BEGIN
DELETE FROM products
WHERE`ID`=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `edit_product` (IN `id` INT, IN `ma_san_pham` VARCHAR(50), IN `ten_san_pham` VARCHAR(50), IN `gia_san_pham` VARCHAR(50), IN `productAmount` INT, IN `Mo_ta_san_pham` VARCHAR(250), IN `trang_thai_san_pham` VARCHAR(250))   BEGIN 
UPDATE `products` SET `ma_san_pham` = ma_san_pham,`ten_san_pham`= ten_san_pham, `gia_san_pham`= gia_san_pham,`productAmount`= productAmount,`Mo_ta_san_pham`=Mo_ta_san_pham,`trang_thai_san_pham`= trang_thai_san_pham
WHERE `products`.`ID` = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `info_table` ()   BEGIN
SELECT* FROM products;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `show_product` ()   BEGIN
SELECT*FROM products;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `ma_san_pham` varchar(50) NOT NULL,
  `ten_san_pham` varchar(50) NOT NULL,
  `gia_san_pham` float NOT NULL,
  `productAmount` int(11) NOT NULL,
  `Mo_ta_san_pham` varchar(255) NOT NULL,
  `trang_thai_san_pham` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `ma_san_pham`, `ten_san_pham`, `gia_san_pham`, `productAmount`, `Mo_ta_san_pham`, `trang_thai_san_pham`) VALUES
(1, 'AA1', 'iphone10', 13789, 100, 'san pham moi', 'chua ban'),
(2, 'AA5', 'iphoneXsmax', 15789, 900, 'san pham moi', 'chua ban'),
(3, 'AA10', 'SamSung J7', 89756, 10, 'san pham cu', 'chua ban'),
(4, 'AA1', 'readMe ', 15986, 40, 'san pham 99%', 'cdang ban'),
(5, 'AA1', 'iphone8', 5451650, 100, 'san pham moi', 'chua ban'),
(6, 'AA1', 'iphoneX', 13789, 300, 'san pham moi', 'da ban'),
(7, 'AA3', 'Toan', 5000, 1, 'chua ai lay', 'dang e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `masanpham` (`ma_san_pham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
