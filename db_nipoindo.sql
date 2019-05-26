-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2019 at 02:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nipoindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name_sender` varchar(255) NOT NULL,
  `c_address_sender` text NOT NULL,
  `c_city_sender` varchar(150) NOT NULL,
  `c_postcode_sender` varchar(100) NOT NULL,
  `c_phone_sender` varchar(20) NOT NULL,
  `c_name_receiver` varchar(255) NOT NULL,
  `c_address_receiver` text NOT NULL,
  `c_city_receiver` varchar(200) NOT NULL,
  `c_postcode_receiver` varchar(100) NOT NULL,
  `c_phone_receiver` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name_sender`, `c_address_sender`, `c_city_sender`, `c_postcode_sender`, `c_phone_sender`, `c_name_receiver`, `c_address_receiver`, `c_city_receiver`, `c_postcode_receiver`, `c_phone_receiver`) VALUES
(1, 'rizal', 'andung', 'bandunng', '0968', '08293919,938490587', 'ilham', 'sukabumi', 'sukabumi', '07867', '867557647674,8675576'),
(2, 'rizal', 'test', 'bandunng', '0968', '08293919', 'ilham', 'teset', 'sukabumi', '07867', '867557647674'),
(3, 'rizal', 'test', 'bandunng', '0968', '08293919,938490587', 'ilham', 'tsetset', 'sukabumi', '07867', '867557647674,8675576');

-- --------------------------------------------------------

--
-- Table structure for table `desc_transaction`
--

CREATE TABLE `desc_transaction` (
  `dt_id` int(11) NOT NULL,
  `dt_list_products` text NOT NULL,
  `dt_total_items` int(11) NOT NULL,
  `dt_total_weight` decimal(10,0) NOT NULL,
  `dt_packing` varchar(200) NOT NULL,
  `dt_province` varchar(150) NOT NULL,
  `dt_additional_cost` int(11) NOT NULL,
  `dt_total_price` int(11) NOT NULL,
  `dt_desc` text NOT NULL,
  `dt_date` datetime NOT NULL,
  `dt_agent` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desc_transaction`
--

INSERT INTO `desc_transaction` (`dt_id`, `dt_list_products`, `dt_total_items`, `dt_total_weight`, `dt_packing`, `dt_province`, `dt_additional_cost`, `dt_total_price`, `dt_desc`, `dt_date`, `dt_agent`) VALUES
(1, '1,2,3,', 4, '57', '1', '', 0, 0, 'bagus smua', '2019-05-26 04:32:59', ''),
(2, '3,2,1,', 3, '57', '2', 'Jawa', 2000, 3000, 'baru', '2019-05-26 14:05:46', 'bambang'),
(3, '1,', 4, '57', '2', '', 0, 0, 'baru', '2019-05-26 14:13:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `packing`
--

CREATE TABLE `packing` (
  `pk_id` int(11) NOT NULL,
  `pk_name` varchar(255) NOT NULL,
  `pk_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packing`
--

INSERT INTO `packing` (`pk_id`, `pk_name`, `pk_cost`) VALUES
(1, 'Box S', 0),
(2, 'Box M', 200);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_desc`) VALUES
(1, 'Sepeda', 'jenis baru'),
(2, 'sendal', ' '),
(3, 'motor', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`s_id`, `s_name`) VALUES
(1, 'Diproses');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `t_id` int(11) NOT NULL,
  `t_no_trans` varchar(255) NOT NULL,
  `t_date_delivery` datetime NOT NULL,
  `t_date_reception` datetime NOT NULL,
  `t_status` varchar(255) NOT NULL,
  `t_desc` text NOT NULL,
  `dt_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`t_id`, `t_no_trans`, `t_date_delivery`, `t_date_reception`, `t_status`, `t_desc`, `dt_id`, `c_id`) VALUES
(1, '1120190526RNMQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 'Segera lakukan pembayaran', 1, 1),
(2, '2220190526QSHC', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 'test', 2, 2),
(3, '3320190526GY9T', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 'Segera lakukan pembayaran', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `_id` int(11) NOT NULL,
  `_username` varchar(255) NOT NULL,
  `_password` varchar(255) NOT NULL,
  `_name` varchar(200) NOT NULL,
  `_previllage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`_id`, `_username`, `_password`, `_name`, `_previllage`) VALUES
(1, 'admin', '21232F297A57A5A743894A0E4A801FC3', 'Admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `desc_transaction`
--
ALTER TABLE `desc_transaction`
  ADD PRIMARY KEY (`dt_id`);

--
-- Indexes for table `packing`
--
ALTER TABLE `packing`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `no_trans` (`t_no_trans`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `desc_transaction`
--
ALTER TABLE `desc_transaction`
  MODIFY `dt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packing`
--
ALTER TABLE `packing`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
