-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 01:02 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dukaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`) VALUES
(1, 'Daal Seeds', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(2, 'Daal Seeds 2', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(3, 'Daal Seeds 3', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(4, 'Daal Seeds 4', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(5, 'Daal Seeds 5', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(6, 'Daal Seeds 6', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(7, 'Daal Seeds 7', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(8, 'Daal Seeds 8', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(9, 'Daal Seeds 9', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(10, 'Daal Seeds 10', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(11, 'Daal Seeds 11', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(12, 'Daal Seeds 12', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(13, 'Daal Seeds 13', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(14, 'Daal Seeds 14', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(15, 'Daal Seeds 15', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(16, 'Daal Seeds 16', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(17, 'Daal Seeds 17', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(18, 'Daal Seeds 18', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(19, 'Daal Seeds 19', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy'),
(20, 'Daal Seeds 20', 'https://lh3.googleusercontent.com/proxy/iR5BxSMPhGHcyU1a7neOKfHa5xeAK-JvY8pCdv6m9B-puLVMudul_LxwquvLl5x74dD6Gntqu-kbtY3mBgBYmKMElagIDSl3ga0mMnESdnevZ0hzmW_2qEwy');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_d_price` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `product_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phoneno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
