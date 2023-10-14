-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 05:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apple_store_bangladesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `img` varchar(255) NOT NULL,
  `pid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`img`, `pid`) VALUES
('\"image/accessories/20W charger.jpeg\"', 9),
('\"image/accessories/airtag.png\"', 10),
('\"image/accessories/cover.png\"', 11),
('\"image/accessories/mgsafeCharger.jpeg\"', 12),
('\"image/accessories/apple-tv.png\"', 30);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `phone`, `email`) VALUES
('0000a', 'Taposhi', '12345678', 'taposhi@apple.com'),
('0000admin', 'Admin', '012345678', 'admin@apple.com'),
('0000b', 'Zunayed', '123456789', 'zunayed@apple.com'),
('0000c', 'Sumaiya', '1234567890', 'sumaiya@apple.com'),
('0000d', 'Redowan', '1234567891', 'redowan@apple.com'),
('0000e', 'Abir', '1234567892', 'abir@apple.com');

-- --------------------------------------------------------

--
-- Table structure for table `airpods`
--

CREATE TABLE `airpods` (
  `img` varchar(255) DEFAULT NULL,
  `pid` int(15) NOT NULL,
  `feature` varchar(255) DEFAULT NULL,
  `chip` varchar(255) DEFAULT NULL,
  `casetype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airpods`
--

INSERT INTO `airpods` (`img`, `pid`, `feature`, `chip`, `casetype`) VALUES
('\"image/airpods/airpods-2.png\"', 15, 'In-ear', 'H1 Chip', 'Charging Case'),
('\"image/airpods/airpods-3.png\"', 16, 'In-ear<br>Spatial Audio', 'H1 Chip', 'MagSafe Charging Case'),
('\"image/airpods/airpods-max.gif\"', 17, 'Over-ear<br>Active Noise Cancellation<br>Transparency Mode<br>Spatial Audio', 'H1 Chip', 'Smart Case'),
('\"image/airpods/airpods-pro.png\"', 18, 'In-ear<br>Active Noise Cancellation<br>Transparency Mode<br>Spatial Audio', 'H1 Chip', 'MagSafe Charging Case');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_no` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `building` varchar(255) DEFAULT NULL,
  `road` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `phone`, `password`, `building`, `road`, `city`) VALUES
(6, 'customer', 'customer@gmail.com', '0123456789', '12345678', '12', '18', 'Dhaka'),
(8, 'Taposhi', 'taposhi@gmail.com', '12345678910', '12345678910', '12', '13', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `ipad`
--

CREATE TABLE `ipad` (
  `img` varchar(255) DEFAULT NULL,
  `pid` int(15) NOT NULL,
  `display` varchar(255) DEFAULT NULL,
  `chip` varchar(255) DEFAULT NULL,
  `camera` varchar(255) DEFAULT NULL,
  `speaker` varchar(255) DEFAULT NULL,
  `biometrics` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipad`
--

INSERT INTO `ipad` (`img`, `pid`, `display`, `chip`, `camera`, `speaker`, `biometrics`, `capacity`, `color`) VALUES
('\"image/ipad/ipad-mini.gif\"', 19, '8.3-inch (diagonal) LED-backlit Multi-Touch display with IPS technology', 'A15 Bionic chip with 64‑bit architecture', '12MP Wide camera, ƒ/1.8 aperture', 'Stereo speakers (landscape)', 'Face ID', '64GB - 128GB', 'Space Gray - Pink - Purple - Starlight'),
('\"image/ipad/ipad.gif\"', 20, '10.2-inch (diagonal) LED-backlit Multi-Touch display with IPS technology', 'A13 Bionic chip with 64-bit architecture', '8MP Wide camera, ƒ/2.4 aperture', 'Stereo speakers', 'Touch ID', '64GB - 256GB', 'Silver - Space Grey'),
('\"image/ipad/ipad-air.gif\"', 21, '10.9-inch (diagonal) LED‑backlit Multi‑Touch display with IPS technology', 'A14 Bionic chip with 64‑bit architecture', '12MP Wide camera, ƒ/1.8 aperture', 'Stereo speakers', 'Face ID', '64GB - 256GB', 'Space gray - Sky Blue'),
('\"image/ipad/ipad-pro.gif\"', 22, '11-inch (diagonal) LED backlit Multi‑Touch display with IPS technology', 'Apple M1 chip', 'Wide: 12MP, ƒ/1.8 aperture<br>  Ultra Wide: 10MP, ƒ/2.4 aperture, and 125° field of view', 'Four speaker audio', 'Face ID', '128GB - 256GB', 'Silver - Space Gray');

-- --------------------------------------------------------

--
-- Table structure for table `iphone`
--

CREATE TABLE `iphone` (
  `img` varchar(255) DEFAULT NULL,
  `pid` int(15) NOT NULL,
  `display` varchar(255) DEFAULT NULL,
  `network` varchar(255) DEFAULT NULL,
  `camera` varchar(255) DEFAULT NULL,
  `chip` varchar(255) DEFAULT NULL,
  `biometrics` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iphone`
--

INSERT INTO `iphone` (`img`, `pid`, `display`, `network`, `camera`, `chip`, `biometrics`, `capacity`, `color`) VALUES
('\"image/iphones/iphone-11.gif\"', 1, '6.1\" Liquid Retina HD Display', '4G LTE Cellular', 'Wide Camera <br>Ultra Wide Camera', 'A13 Bionic Chip', 'Face ID', '64GB - 128GB', 'Black - White - Red - Purple - Yellow - Green'),
('\"image/iphones/iphone-se.gif\"', 2, '4.7\" Retina HD Display', '4G LTE Cellular', 'Wide Camera ', 'A13 Bionic Chip', 'Touch ID', '64GB - 128GB', 'Black - White - Red '),
('\"image/iphones/iphone-xr.gif\"', 3, '6.1\" Liquid Retina HD Display', '4G LTE Cellular', 'Wide Camera ', 'A12 Bionic Chip', 'Face ID', '64GB - 128GB', 'Black - White - Red - Blue - Coral - Yellow'),
('\"image/iphones/iphone-11-pro.gif\"', 4, '6.5\" Super Retina XDR Display', '4G LTE Cellular', 'Wide Camera <br> Ultra Wide Camera <br>Telephoto Camera', 'A13 Bionic Chip', 'Face ID', '64GB - 128GB - 512GB', 'Space Gray - Silver - Midnight Green - Gold'),
('\"image/iphones/iphone-12.gif\"', 5, '6.1\" Super Retina XDR Display', '5G LTE Cellular', 'Wide Camera <br> Ultra Wide Camera', 'A14 Bionic Chip', 'Face ID', '64GB - 128GB - 256GB', 'Black - White - Red - Blue - Purple - Green'),
('\"image/iphones/iphone-12-pro.gif\"', 6, '6.7\" Super Retina XDR Display', '5G LTE Cellular', 'Wide Camera <br> Ultra Wide Camera <br>Telephoto Camera', 'A14 Bionic Chip', 'Face ID', '128GB - 256GB - 512GB', 'Graphite - Silver - Pacific Blue - Gold'),
('\"image/iphones/iphone-13.gif\"', 7, '6.1\" Super Retina XDR Display', '5G LTE Cellular', 'Wide Camera <br> Ultra Wide Camera ', 'A15 Bionic Chip', 'Face ID', '128GB - 256GB - 512GB', 'Midnight - Starlight - Red - Blue - Pink'),
('\"image/iphones/iphone-13-pro.gif\"', 8, '6.7\" Super Retina XDR Display', '5G LTE Cellular', 'Wide Camera <br> Ultra Wide Camera <br>Telephoto Camera', 'A15 Bionic Chip', 'Face ID', '128GB - 256GB - 512GB - 1TB', 'Graphite - Silver - Gold - Sierra Blue');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('abir@apple.com', '01234567'),
('admin@apple.com', '123456789'),
('customer@gmail.com', '12345678'),
('redowan@apple.com', '01234567'),
('sumaiya@apple.com', '01234567'),
('taposhi@apple.com', '01234567'),
('taposhi@gmail.com', '12345678910'),
('zunayed@apple.com', '01234567');

-- --------------------------------------------------------

--
-- Table structure for table `macbook`
--

CREATE TABLE `macbook` (
  `img` varchar(255) DEFAULT NULL,
  `pid` int(15) NOT NULL,
  `display` varchar(255) DEFAULT NULL,
  `chip` varchar(255) DEFAULT NULL,
  `cpu` varchar(255) DEFAULT NULL,
  `gpu` varchar(255) DEFAULT NULL,
  `memory` varchar(255) DEFAULT NULL,
  `ssd` varchar(255) DEFAULT NULL,
  `camera` varchar(255) DEFAULT NULL,
  `biometrics` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `macbook`
--

INSERT INTO `macbook` (`img`, `pid`, `display`, `chip`, `cpu`, `gpu`, `memory`, `ssd`, `camera`, `biometrics`, `weight`, `color`) VALUES
('\"image/macbooks/macbook-air.gif\"', 23, '13.3\" Retina Display', 'M1 Chip', '8-core CPU', 'Upto 8-core GPU', 'Upto 16GB Memory', 'Upto 2TB SSD', '720p FaceTime HD Camera', 'Touch ID', '2.8 lbs', 'Space Gray - Silver - Gold'),
('\"image/macbooks/macbook-pro-13.gif\"', 24, '13.3\" Retina Display', 'M1 Chip', '8-core CPU', '8-core GPU', 'Upto 16GB Memory', 'Upto 2TB SSD', '720p FaceTime HD Camera', 'Touch ID & Touch ID', '3.0 lbs', 'Space Gray - Silver'),
('\"image/macbooks/macbook-pro-14.gif\"', 25, '14.2\" Liquid Retina XDR ProMotion Display', 'M1 Pro Chip - M1 Max Chip', 'Upto 10-core CPU', 'Upto 32-core GPU', 'Upto 64GB Memory', 'Upto 8TB SSD', '1080p FaceTime HD Camera', 'Touch ID ', '3.5 lbs', 'Space Gray - Silver'),
('\"image/macbooks/macbook-pro-16.gif\"', 26, '16.2\" Liquid Retina XDR ProMotion Display', 'M1 Pro Chip - M1 Max Chip', '10-core CPU', 'Upto 32-core GPU', 'Upto 64GB Memory', 'Upto 8TB SSD', '1080p FaceTime HD Camera', 'Touch ID ', '4.7 lbs', 'Space Gray - Silver');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `order_no` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_no` int(11) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `total_cost` int(11) NOT NULL,
  `gives` varchar(255) DEFAULT NULL,
  `takes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pid`
--

CREATE TABLE `pid` (
  `order_no` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `order_no` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(15) NOT NULL,
  `availability` tinyint(4) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stored in` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `availability`, `model`, `price`, `stored in`) VALUES
(1, 1, 'iPhone 11', 60000, 0),
(2, 1, 'iPhone SE 2', 44999, 0),
(3, 1, 'iPhone XR', 49999, 0),
(4, 1, 'iPhone 11 pro', 74999, 0),
(5, 1, 'iPhone 12', 69999, 0),
(6, 1, 'iPhone 12 Pro', 89999, 0),
(7, 1, 'iPhone 13', 79999, 0),
(8, 1, 'iPhone 13 Pro', 99999, 0),
(9, 1, '20W charger', 1000, 0),
(10, 1, 'airtag', 6000, 0),
(11, 1, 'iPhone 13 pro Cover\r\n', 5999, 0),
(12, 1, 'Magsafe Charger', 5499, 0),
(15, 1, 'AirPods 2', 14999, 0),
(16, 1, 'AirPods 3', 17999, 0),
(17, 1, 'AirPods Max', 49999, 0),
(18, 1, 'AirPods Pro', 22999, 0),
(19, 1, 'iPad Mini', 55000, 0),
(20, 1, 'iPad', 39999, 0),
(21, 1, 'iPad Air', 64999, 0),
(22, 1, 'iPad Pro', 84999, 0),
(23, 1, 'MacBook Air 13\" (2020)', 99999, 0),
(24, 1, 'MacBook Pro 13\" (2020)', 124999, 0),
(25, 1, 'MacBook Pro 14\" (2021)', 184999, 0),
(26, 1, 'MacBook Pro 16\" (2021)', 224999, 0),
(27, 1, 'Apple Watch Series 3', 25000, 0),
(28, 1, 'Apple Watch SE', 31999, 0),
(29, 1, 'Apple Watch Series 7', 44999, 0),
(30, 1, 'Apple TV', 21000, 0),
(40, 1, 'iPhone 13 mini', 1000000, 0),
(100, 1, 'iphone', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `order_no` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `si` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `pid` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `subprice` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `SI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_cus`
--

CREATE TABLE `temp_cus` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `img` varchar(255) DEFAULT NULL,
  `pid` int(15) NOT NULL,
  `feature` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`img`, `pid`, `feature`) VALUES
('\"image/watch/apple-watch-3.png\"', 27, 'Retina Display<br>42mm or 38mm'),
('\"image/watch/apple-watch-se.png\"', 28, 'Retina Display<br>44mm or 40mm'),
('\"image/watch/apple-watch-7.png\"', 29, 'Always-on Retina Display<br>45mm or 41mm<br>IP6X dust resistant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `airpods`
--
ALTER TABLE `airpods`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `ipad`
--
ALTER TABLE `ipad`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `iphone`
--
ALTER TABLE `iphone`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `macbook`
--
ALTER TABLE `macbook`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`order_no`,`model`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `takes` (`takes`);

--
-- Indexes for table `pid`
--
ALTER TABLE `pid`
  ADD PRIMARY KEY (`order_no`,`pid`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`order_no`,`price`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`si`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`SI`);

--
-- Indexes for table `temp_cus`
--
ALTER TABLE `temp_cus`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `SI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessories`
--
ALTER TABLE `accessories`
  ADD CONSTRAINT `accessories_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `airpods`
--
ALTER TABLE `airpods`
  ADD CONSTRAINT `airpods_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ipad`
--
ALTER TABLE `ipad`
  ADD CONSTRAINT `ipad_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `iphone`
--
ALTER TABLE `iphone`
  ADD CONSTRAINT `iphone_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `macbook`
--
ALTER TABLE `macbook`
  ADD CONSTRAINT `macbook_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`order_no`) REFERENCES `cart` (`order_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`takes`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pid`
--
ALTER TABLE `pid`
  ADD CONSTRAINT `pid_ibfk_1` FOREIGN KEY (`order_no`) REFERENCES `cart` (`order_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `price_ibfk_1` FOREIGN KEY (`order_no`) REFERENCES `cart` (`order_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quantity`
--
ALTER TABLE `quantity`
  ADD CONSTRAINT `quantity_ibfk_1` FOREIGN KEY (`order_no`) REFERENCES `cart` (`order_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `watch`
--
ALTER TABLE `watch`
  ADD CONSTRAINT `watch_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
