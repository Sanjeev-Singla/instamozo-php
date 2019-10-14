SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `credit_status` varchar(20) NOT NULL,
  `payment_id` varchar(30) NOT NULL,
  `instamojo_id` varchar(50) NOT NULL,
  `email_status` varchar(10) NOT NULL,
  `sms_status` varchar(10) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
