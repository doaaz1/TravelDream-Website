

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";





CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;



CREATE TABLE `tips` (
  `id` int(11) NOT NULL,
  `country` varchar(2) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `tip_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


CREATE TABLE `trip_plans` (
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `budget` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `trip_plans`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `trip_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

