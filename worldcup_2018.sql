-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 06:45 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldcup_2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2018_08_04_203200_create_stadium_table', 2),
(14, '2018_08_27_151719_create_teams_table', 2),
(15, '2018_08_27_135226_create_players_table', 3),
(17, '2018_08_28_070212_create_matches_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `player_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `player_img_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `player_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `player_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jersy_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `match_played` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `goal_scored` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `yellow_cards` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `red_cards` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `player_name`, `player_img_path`, `player_country`, `player_position`, `jersy_no`, `match_played`, `goal_scored`, `yellow_cards`, `red_cards`, `created_at`, `updated_at`) VALUES
(1, 'NAHUEL GUZMAN', 'img/players/Argentina-NAHUEL GUZMAN.png', 'Argentina', 'GK', '1', '0', '0', '0', '0', '2018-08-28 09:03:08', '2018-08-28 09:03:08'),
(2, 'Lionel MESSI', 'img/players/Argentina-Lionel MESSI.png', 'Argentina', 'F', '10', '4', '1', '1', '0', '2018-08-28 09:06:34', '2018-08-28 09:06:34'),
(3, 'Franco ARMANI', 'img/players/Argentina-Franco ARMANI.png', 'Argentina', 'GK', '12', '2', '0', '0', '0', '2018-08-28 09:10:06', '2018-08-28 09:10:06'),
(4, 'Wilfredo CABALLERO', 'img/players/Argentina-Wilfredo CABALLERO.png', 'Argentina', 'GK', '23', '2', '0', '0', '0', '2018-08-28 09:11:14', '2018-08-28 09:11:14'),
(5, 'Gabriel MERCADO', 'img/players/Argentina-Gabriel MERCADO.png', 'Argentina', 'DF', '2', '3', '1', '1', '0', '2018-08-28 09:12:11', '2018-08-28 09:12:11'),
(6, 'Nicolas TAGLIAFICO', 'img/players/Argentina-Nicolas TAGLIAFICO.png', 'Argentina', 'DF', '3', '4', '0', '1', '0', '2018-08-28 09:13:10', '2018-08-28 09:13:10'),
(7, 'Cristian ANSALDI', 'img/players/Argentina-Cristian ANSALDI.png', 'Argentina', 'DF', '4', '0', '0', '0', '0', '2018-08-28 09:13:49', '2018-08-28 09:13:49'),
(8, 'Federico FAZIO', 'img/players/Argentina-Federico FAZIO.png', 'Argentina', 'DF', '6', '1', '0', '0', '0', '2018-08-28 09:14:32', '2018-08-28 09:14:32'),
(9, 'Marcos ACUNA', 'img/players/Argentina-Marcos ACUNA.png', 'Argentina', 'DF', '8', '1', '0', '1', '0', '2018-08-28 09:15:20', '2018-08-28 09:15:20'),
(10, 'Javier MASCHERANO', 'img/players/Argentina-Javier MASCHERANO.png', 'Argentina', 'DF', '14', '4', '0', '2', '0', '2018-08-28 09:16:14', '2018-08-28 09:16:14'),
(11, 'Angel DI MARIA', 'img/players/Argentina-Angel DI MARIA.png', 'Argentina', 'MD', '11', '3', '1', '0', '0', '2018-08-28 09:17:24', '2018-08-28 09:17:24'),
(12, 'Sergio AGUERO', 'img/players/Argentina-Sergio AGUERO.png', 'Argentina', 'F', '19', '4', '2', '0', '0', '2018-08-28 09:18:27', '2018-08-28 09:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `stadiums`
--

CREATE TABLE `stadiums` (
  `id` int(10) UNSIGNED NOT NULL,
  `stadium_img_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stadium_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stadium_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `opened` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stadiums`
--

INSERT INTO `stadiums` (`id`, `stadium_img_path`, `stadium_name`, `stadium_city`, `opened`, `capacity`, `created_at`, `updated_at`) VALUES
(1, 'img/stadiums/Ekaterinburg Arena-Ekaterinburg.jpg', 'Ekaterinburg Arena', 'Ekaterinburg', '1957', '47,659', NULL, NULL),
(2, 'img/stadiums/Luzhniki Stadium-Moscow.jpg', 'Luzhniki Stadium', 'Moscow', '1956', '80,000', NULL, NULL),
(3, 'img/stadiums/Saint Petersburg Stadium-Saint Petersburg.jpg', 'Saint Petersburg Stadium', 'Saint Petersburg', '2017', '67,000', NULL, NULL),
(4, 'img/stadiums/Fisht Olympic Stadium-Sochi.jpg', 'Fisht Olympic Stadium', 'Sochi', '2013', '48,000', NULL, NULL),
(5, 'img/stadiums/Kazan Arena-Kazan.jpg', 'Kazan Arena', 'Kazan', '2013', '45,000', NULL, NULL),
(6, 'img/stadiums/Nizhny Novgorod Stadium-Nizhny Novgorod.jpg', 'Nizhny Novgorod Stadium', 'Nizhny Novgorod', '2018', '45,000', NULL, NULL),
(7, 'img/stadiums/Rostov Arena-Rostov-on-Don.jpg', 'Rostov Arena', 'Rostov-on-Don', '2018', '45,000', NULL, NULL),
(8, 'img/stadiums/Samara Arena-Samara.jpg', 'Samara Arena', 'Samara', '2018', '45,000', NULL, NULL),
(9, 'img/stadiums/Mordovia Arena-Saransk.jpg', 'Mordovia Arena', 'Saransk', '2018', '45,000', NULL, NULL),
(10, 'img/stadiums/Volgograd Stadium-Volgograd.jpg', 'Volgograd Stadium', 'Volgograd', '2018', '45,000', NULL, NULL),
(11, 'img/stadiums/Spartak Stadium-Moscow.jpg', 'Spartak Stadium', 'Moscow', '2014', '42,000', NULL, NULL),
(12, 'img/stadiums/Kaliningrad Stadium-Kaliningrad.jpg', 'Kaliningrad Stadium', 'Kaliningrad', '2018', '35,212', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flag_img_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coach` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `match_played` int(11) NOT NULL,
  `match_won` int(11) NOT NULL,
  `match_draw` int(11) NOT NULL,
  `match_lose` int(11) NOT NULL,
  `goal_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `country`, `flag_img_path`, `coach`, `group`, `match_played`, `match_won`, `match_draw`, `match_lose`, `goal_diff`, `points`, `created_at`, `updated_at`) VALUES
(1, 'Argentina', 'img/teams/Argentina-Jorge Sampoli.png', 'Jorge Sampoli', 'D', 3, 1, 1, 1, -2, 4, '2018-08-28 06:20:24', '2018-08-28 06:20:24'),
(2, 'Brazil', 'img/teams/Brazil-TITE.png', 'TITE', 'E', 3, 2, 1, 0, 4, 7, '2018-08-28 06:32:30', '2018-08-28 06:32:30'),
(3, 'Australia', 'img/teams/Australia-BERT VAN MARWIJK.png', 'BERT VAN MARWIJK', 'c', 3, 0, 1, 2, -3, 1, '2018-08-28 06:36:21', '2018-08-28 06:36:21'),
(4, 'France', 'img/teams/France-Didier DESCHAMPS.png', 'Didier DESCHAMPS', 'C', 3, 2, 1, 0, 2, 7, '2018-08-28 07:01:34', '2018-08-28 07:01:34'),
(5, 'Belgium', 'img/teams/Belgium-MARTINEZ Roberto.png', 'MARTINEZ Roberto', 'G', 3, 3, 0, 0, 7, 9, '2018-08-28 07:03:03', '2018-08-28 07:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$i4NZXZxSvXUQE6DEa7kbxu.bV/PsGgUJUJZQGPhyGKABYDACH6TK6', NULL, '2018-08-28 07:35:05', '2018-08-28 07:35:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stadiums`
--
ALTER TABLE `stadiums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
