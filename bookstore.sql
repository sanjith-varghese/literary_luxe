-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 09:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogins`
--

CREATE TABLE `adminlogins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT 'owner',
  `password` varchar(255) NOT NULL DEFAULT '7777',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminlogins`
--

INSERT INTO `adminlogins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'owner', '7777', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `authorname` varchar(255) NOT NULL,
  `publishername` varchar(255) NOT NULL,
  `inputFileUpload` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookname`, `description`, `authorname`, `publishername`, `inputFileUpload`, `category`, `created_at`, `updated_at`) VALUES
(3, 'Seven Rabbits', 'In the town of Tall Oak, high school football reigns supreme.', 'Timothy King', 'MG Book House', 'h1.jpeg', 'Horror', NULL, NULL),
(4, 'Cuckoo', 'A soaring, boundless ode to queer survival. It\'s flat-out mesmerizing.\"--Paul Tremblay,', 'Gretchen Felker-Martin', 'MG Book House', 'h2.jpeg', 'Horror', NULL, NULL),
(5, 'American Narcissus', 'The American dream is dead, and Los Angeles is burning.', 'Chandler Morrison', 'MG Book House', 'h3.jpeg', 'Horror', NULL, NULL),
(6, 'The Tell-Tale Heart (Bantam Classics)', 'The Tell-Tale Heart (Bantam Classics)  is an horror story based on true story', 'Edgar Allan Poe', 'MG Book House', 'h4.jpg', 'Horror', NULL, NULL),
(7, 'The Garden', '\"Genius.\"--The New York Times Book Review - \"A teeming gothic.\"--Vanity Fair ', 'Clare Beams', 'MG Book House', 'h5.jpeg', 'Horror', NULL, NULL),
(8, 'Indian Burial Ground', 'A man lunges in front of a car. An elderly woman silently drowns herself. ', 'Medina, Nick', 'MG Book House', 'h6.jpeg', 'Horror', NULL, NULL),
(9, 'The Troop', 'The Troop  is an english horror story', 'Nick Cutter', 'MG Book House', 'h7.jpeg', 'Horror', NULL, NULL),
(10, 'The Terror', 'The Terror  is an english Horror story', 'Dan Simmons', 'MG Book House', 'h8.jpeg', 'Horror', NULL, NULL),
(11, 'Top Secret Twenty-One: A Stephanie Plum Novel', 'Top Secret Twenty-One: A Stephanie Plum Novel', 'Janet Evanovich', 'MG Book House', 'r1.jpeg', 'Romance', NULL, NULL),
(12, 'The Rosie Project', 'The Rosie Project', 'Graeme Simsion', 'MG Book House', 'r2.jpeg', 'Romance', NULL, NULL),
(13, 'Takedown Twenty', 'Takedown Twenty', 'Janet Evanovich', 'MG Book House', 'r3.jpeg', 'Romance', NULL, NULL),
(14, 'Evening Stars', 'Evening Stars', 'Susan Mallery', 'MG Book House', 'r4.jpeg', 'Romance', NULL, NULL),
(15, 'Someday, Someday, Maybe', 'Someday, Someday, Maybe', 'Lauren Graham', 'MG Book House', 'r5.jpeg', 'Romance', NULL, NULL),
(16, 'Here\'s Looking at You', 'Here\'s Looking at You', 'Mhairi McFarlane', 'MG Book House', 'r6.jpeg', 'Romance', NULL, NULL),
(17, 'The Importance of Being Alice', 'The Importance of Being Alice', 'Katie MacAlister', 'MG Book House', 'r7.jpeg', 'Romance', NULL, NULL),
(18, 'Stop the Wedding!', 'Stop the Wedding!', 'Stephanie Bond', 'MG Book House', 'r8.jpeg', 'Romance', NULL, NULL),
(19, 'The Girl on the Train', 'The Girl on the Train', 'Paula Hawkins', 'MG Book House', 'm1.jpeg', 'Mystery', NULL, NULL),
(20, 'Dark Places', 'Dark Places', 'Gillian Flynn', 'MG Book House', 'm2.jpeg', 'Mystery', NULL, NULL),
(21, 'Along Came A Spider', 'Along Came A Spider', 'James Patterson', 'MG Book House', 'm3.jpg', 'Mystery', NULL, NULL),
(22, 'The Last Coyote', 'The Last Coyote', 'Michael Connelly', 'MG Book House', 'm4.jpeg', 'Mystery', NULL, NULL),
(23, 'The Concrete Blonde (Harry Bosch)', 'The Concrete Blonde (Harry Bosch)', 'Michael Connelly', 'MG Book House', 'm5.jpg', 'Mystery', NULL, NULL),
(24, 'The Cuckoo\'s Calling', 'The Cuckoo\'s Calling', 'Robert Galbraith', 'MG Book House', 'm6.jpeg', 'Mystery', NULL, NULL),
(25, 'Buried Prey', 'Buried Prey', 'John Sandford', 'MG Book House', 'm7.jpeg', 'Mystery', NULL, NULL),
(26, '12th of Never', '12th of Never', 'Maxine Paetro and James Patterson', 'MG Book House', 'm8.jpeg', 'Mystery', NULL, NULL),
(27, 'Black Adam: The Dark Age', 'Black Adam: The Dark Age', 'Tomasi, Peter J.', 'DC BOOKS', 'c1.jpeg', 'Comics', NULL, NULL),
(28, 'Deadpool Classic Companion', 'Deadpool Classic Companion', 'Jimmy Palmiotti, Stan Lee, Charlie Huston, et al.', 'DC BOOKS', 'c2.jpeg', 'Comics', NULL, NULL),
(29, 'Black Bullet, Vol. 1 (Manga)', 'Black Bullet, Vol. 1 (Manga)', 'Shiden Kanzaki, Morinohon, Adam Bright', 'MG Book House', 'c3.jpeg', 'Comics', NULL, NULL),
(30, 'Batman', 'Batman', 'Craig Shaw Gardner', 'DC BOOKS', 'c4.jpg', 'Comics', NULL, NULL),
(31, 'The Power of Shazam!', 'The Power of Shazam!', 'Jerry Ordway', 'DC BOOKS', 'c5.jpg', 'Comics', NULL, NULL),
(32, 'Wonder Woman Classic', 'Wonder Woman Classic: I Am Wonder Woman', 'Erin Stein', 'DC BOOKS', 'c6.jpeg', 'Comics', NULL, NULL),
(33, 'Superman Returns', 'Superman Returns', 'Marv Wolfman', 'DC BOOKS', 'c7.jpg', 'Comics', NULL, NULL),
(34, 'V for Vendetta New', 'V for Vendetta New', 'Alan Moore', 'MG Book House', 'c8.jpg', 'Comics', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '0001_01_01_000000_create_users_table', 1),
(14, '0001_01_01_000001_create_cache_table', 1),
(15, '0001_01_01_000002_create_jobs_table', 1),
(16, '2024_06_18_064314_create_books_table', 1),
(17, '2024_07_01_045756_create_adminlogins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('PAYYjHeCoAeB1nH8zUL8kcce3MMjFFfKjGfr2rKc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOVBjUFBzcU9Od3ptUXVGYkdIQU92cmZuYkpiNmNWVENyRVUxb1lHaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZXh0Ijt9fQ==', 1719817338);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogins`
--
ALTER TABLE `adminlogins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `adminlogins`
--
ALTER TABLE `adminlogins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
