-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 10:33 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thekolaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `user_type` enum('Agent','Accountant','Admin','Land_Owner','Manager','Product_Manager','Supervisor') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `address`, `mobile_number`, `user_type`, `password`, `created_at`) VALUES
('Acc-000', 'Pasindu Melaka', 'Galle Kollek', 773158043, 'Accountant', '$2y$10$NlN2HI.qpL2mtLtpfQ5Cpe7X0BavLDogo6BRwyjTv1vFM6/vhxY02', '2021-09-02 11:11:42'),
('Admin-00', 'Sasindu', 'Math Galle Kollek', 768687025, 'Admin', '$2y$10$GLEs1JIzBvzUTEOYxkPT0uabC4unmvlQkeRO.Hj4DKsxP4kxXthvy', '0000-00-00 00:00:00'),
('Agent-000', 'Roneki', 'Mama Matara Kellek', 777816920, 'Agent', '$2y$10$DEoIysExgKU2NSRtgtnnc./gKPhb6QGVsDPCGrxd8LbRf7zu19T2G', '2021-09-02 11:16:00'),
('Land-000', 'kumud', 'Ariyawanshagama, Welipenna', 769372530, 'Supervisor', '$2y$10$SAALWgCmYwJb8WIBzExR9eh3RsiwsP93SKqGasVLseeiyOb4gZ3C.', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
