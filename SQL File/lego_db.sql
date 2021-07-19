-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 04:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lego_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '20210629014600', 'App\\Database\\Migrations\\User', 'default', 'App', 1624908915, 1),
(2, '20210629020400', 'App\\Database\\Migrations\\Product', 'default', 'App', 1624908915, 1),
(3, '20210629021100', 'App\\Database\\Migrations\\Transaction', 'default', 'App', 1624908916, 1),
(4, '20210629022500', 'App\\Database\\Migrations\\Comment', 'default', 'App', 1624908916, 1),
(5, '20210630020000', 'App\\Database\\Migrations\\KomentarAlterFk', 'default', 'App', 1625036560, 2),
(6, '20210630020000', 'App\\Database\\Migrations\\TransaksiAlterFk', 'default', 'App', 1625036560, 2),
(7, '20210702011700', 'App\\Database\\Migrations\\TransactionAlterAddress', 'default', 'App', 1625164917, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `price` int(25) NOT NULL,
  `stock` int(10) NOT NULL,
  `thumbnail` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `stock`, `thumbnail`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(3, 'Bat Mobile Base - Version 2', 600000, 100, '1626098587_fbcb9f7a4c8556584e4f.jpeg', 3, '2021-07-12 09:03:07', 3, '2021-07-13 17:42:40'),
(4, 'Bat Mobile', 850000, 98, '1626098621_2e6e8c2a616040ba36e1.jpeg', 3, '2021-07-12 09:03:41', NULL, NULL),
(5, 'Bat Wing', 750000, 89, '1626098647_c853fa36a23e00f1e229.jpeg', 3, '2021-07-12 09:04:07', NULL, NULL),
(6, 'Dart Vader', 800000, 99, '1626099783_f6fc7fc9cfae78ead777.jpeg', 3, '2021-07-12 09:23:03', NULL, NULL),
(7, 'Space Trooper', 600000, 50, '1626099815_dbae37832d24f620521a.jpeg', 3, '2021-07-12 09:23:35', NULL, NULL),
(9, 'Batman Penguin Harley Quinn', 950000, 99, '1626216393_27a7af8a255bfffc3650.jpeg', 3, '2021-07-13 17:46:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) UNSIGNED NOT NULL,
  `id_customer` int(11) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `address` text DEFAULT NULL,
  `shiping_costs` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `id_product`, `id_customer`, `quantity`, `total_price`, `created_by`, `created_date`, `updated_by`, `updated_date`, `address`, `shiping_costs`, `status`) VALUES
(1, 9, 8, 1, 986000, 8, '2021-07-13 18:19:09', NULL, NULL, 'Jl. madukoro2', 36000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`, `avatar`, `role`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'user01', 'f6672f6760080335ac8e530744e78bad', '60e112aa7fb3c7.83197778', NULL, 1, 0, '2021-07-03 20:45:14', NULL, NULL),
(2, 'user01', '02d0589827d13a2a6b7bf5a5415ff3cf', '60e112ac90d8c2.43400152', NULL, 1, 0, '2021-07-03 20:45:16', NULL, NULL),
(3, 'admin01', '055b275bbe45e64581a4582bcedc0e1f', '60e112d0946046.48319390', NULL, 0, 0, '2021-07-03 20:45:52', NULL, NULL),
(4, 'admin01', 'c5f7041b072385f8a19d2b8ac403eda8', '60e112f8dc74c3.64681715', NULL, 1, 0, '2021-07-03 20:46:32', NULL, NULL),
(5, 'user02', 'c232932f6513e541005c3d03cd33d689', '60e9763e2cfb37.59819078', NULL, 1, 0, '2021-07-10 05:28:14', NULL, NULL),
(6, 'user02', '3ece9dc433967e759195c5a816744165', '60e97669b6fcf1.45487416', NULL, 1, 0, '2021-07-10 05:28:57', NULL, NULL),
(7, 'user05', '14a5fc01889f1d983477887a6cc84bbf', '60ee12efd9e9b6.59325547', NULL, 1, 0, '2021-07-13 17:25:51', NULL, NULL),
(8, 'maulanaaghni', 'bea5ad3012b067e661ead9db33ad2c67', '60ee155aa54f45.68338904', NULL, 1, 0, '2021-07-13 17:36:10', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id_user_foreign` (`id_user`),
  ADD KEY `comment_id_product_foreign` (`id_product`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_id_customer_foreign` (`id_customer`),
  ADD KEY `transaction_id_product_foreign` (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `comment_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `transaction_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
