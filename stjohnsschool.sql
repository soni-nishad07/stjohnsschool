-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 11:44 AM
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
-- Database: `stjohnsschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_approach`
--

CREATE TABLE `academic_approach` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_approach`
--

INSERT INTO `academic_approach` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'A Foundation for Lifelong Learning', 'At pre-, primary & high school, academics form the core foundation for our students to thrive in the present, construct, and retain future knowledge with enriched experiences.\r\n\r\n', '2025-06-16 09:14:37'),
(2, 'Balanced, Practical & Engaging Learning', 'We follow a balanced academic program that uses hands-on learning, real-world application, and understanding-based instruction for meaningful, practical and engaging learning.', '2025-06-16 09:18:57'),
(3, 'Experienced & Passionate Faculty', 'Our faculty are experienced, deeply committed, and empathetic mentors who equip students with conceptual clarity and life skills.', '2025-06-16 09:18:57'),
(4, 'Core Subject Focus', 'We emphasize core academic subjects like mathematics, science, and languages to ensure strong foundational skills and conceptual clarity.', '2025-06-16 09:18:57'),
(5, 'Assessment & Mentorship', 'We support students with regular assessments and one-on-one mentorship to strengthen academic performance and overall development.', '2025-06-16 09:18:57'),
(6, 'Results Beyond Exams', 'We focus on overall personality development, leadership, problem-solving and communication skills to equip students for life beyond academics.', '2025-06-16 09:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `academic_calendar`
--

CREATE TABLE `academic_calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `uploaded_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_calendar`
--

INSERT INTO `academic_calendar` (`id`, `title`, `file_path`, `uploaded_at`) VALUES
(2, 'Academic Calendar 2024 – 2025	', '2730556.pdf', '2025-06-17 15:12:26'),
(3, 'Academic Calendar 2023 – 2024	', '2730556.pdf', '2025-06-17 15:12:48'),
(4, 'Academic Calendar 2025 – 2026	', '2730556.pdf', '2025-06-17 15:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(5, 'abc1', 'abc1@gmail.com', '$2y$10$u87cFfI1OsLGqVhJ/Enz3eVW1WIgaCYGpTPm8WoLGqRwHwTKY1VJ.', '2025-06-15 12:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submitted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `phone`, `message`, `submitted_at`) VALUES
(1, 's', 'n', '8965741230', 'gh', '2025-06-16 12:01:05'),
(2, 'yufyt', 'nhfty', '779441', 'gh', '2025-06-16 12:02:45'),
(3, 'yufyt', 'nhfty', '779441', 'gh', '2025-06-16 12:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `images` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `category`, `event_date`, `images`, `created_at`) VALUES
(1, 'demoo', 'd', 'd', '2025-07-05', '1750059314_vh (4).jpg,1750059314_vh (5).jpg,1750059314_vh (6).jpg', '2025-06-16 07:35:14'),
(2, 'aa', 'ooo', 'opp', '2025-07-02', '1750059803_vh (8).jpg,1750059803_vh (9).jpg', '2025-06-16 07:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image_name` varchar(255) NOT NULL,
  `alt_text` varchar(255) DEFAULT NULL,
  `uploaded_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `event_name`, `description`, `image_name`, `alt_text`, `uploaded_at`) VALUES
(1, 'Photos of school activities', 'jhvjg', 'icsart-i-mage-nhancer-dc5278.png', 'demo', '2025-06-15 19:03:13'),
(2, 'Photos of school activities', 'jhvjg', 'ogo-67570b.png', 'demo', '2025-06-15 19:03:13'),
(3, 'Photos of school activities', 'vj', 'child-ec5356.png', 'demo', '2025-06-15 19:09:24'),
(4, 'Photos of school activities', 'vj', 'classroom-3d298f.jpg', 'demo', '2025-06-15 19:09:24'),
(5, 'Photos of school activities', 'vj', 'classroom-facility-3220fe.png', 'demo', '2025-06-15 19:09:24'),
(7, 'Photos of school activities', 'vj', 'faculty-4e1fd8.png', 'demo', '2025-06-15 19:09:24'),
(8, 'Photos of school activities', 'vj', 'footer-bg-b3782d.jpg', 'demo', '2025-06-15 19:09:24'),
(9, 'Photos of school activities', 'vj', 'footer-bg1-2f87e8.jpg', 'demo', '2025-06-15 19:09:24'),
(10, 'Photos of school activities', 'vj', 'footer-logo-cdc527.png', 'demo', '2025-06-15 19:09:24'),
(11, 'Photos of school activities', 'vj', 'hero-1-55d326.png', 'demo', '2025-06-15 19:09:24'),
(12, 'Photos of school activities', 'vj', 'hero-2-6c4224.png', 'demo', '2025-06-15 19:09:24'),
(13, 'Photos of school activities', 'vj', 'hero-3-2a6991.png', 'demo', '2025-06-15 19:09:24'),
(14, 'Photos of school activities', 'vj', 'hero-4-0f173b.png', 'demo', '2025-06-15 19:09:24'),
(15, 'Photos of school activities', 'vj', 'hero-5-8445c3.png', 'demo', '2025-06-15 19:09:24'),
(16, 'Photos of school activities', 'vj', 'hero-6-3f2dbf.png', 'demo', '2025-06-15 19:09:24'),
(17, 'Photos of school activities', 'vj', 'hero-7-eb9d85.png', 'demo', '2025-06-15 19:09:24'),
(18, 'Photos of school activities', 'vj', 'hero-8-19f39d.png', 'demo', '2025-06-15 19:09:24'),
(19, 'Photos of school activities', 'vj', 'hero-9-9796d1.png', 'demo', '2025-06-15 19:09:24'),
(20, 'Photos of school activities', 'vj', 'hero-10-49c395.png', 'demo', '2025-06-15 19:09:24'),
(21, 'Photos of school activities', 'vj', 'hero-11-be63c5.png', 'demo', '2025-06-15 19:09:24'),
(22, 'Photos of school activities', 'vj', 'img1-6c9d81.png', 'demo', '2025-06-15 19:09:24'),
(23, 'Photos of school activities', 'ggg', 'child-ec5356-9a2e91.png', 'demo', '2025-06-15 19:21:23'),
(24, 'Photos of school activities', 'ggg', 'classroom-3d298f-fa625e.jpg', 'demo', '2025-06-15 19:21:23'),
(25, 'Photos of school activities', 'ggg', 'classroom-facility-3220fe-d81956.png', 'demo', '2025-06-15 19:21:23'),
(26, 'Photos of school activities', 'ggg', 'faculty-4e1fd8-2d2820.png', 'demo', '2025-06-15 19:21:24'),
(27, 'Photos of school activities', 'ggg', 'footer-bg1-2f87e8-ca62a3.jpg', 'demo', '2025-06-15 19:21:24'),
(28, 'Photos of school activities', 'ggg', 'footer-bg-b3782d-44c0f5.jpg', 'demo', '2025-06-15 19:21:24'),
(29, 'Photos of school activities', 'ggg', 'footer-logo-cdc527-8b0ba7.png', 'demo', '2025-06-15 19:21:24'),
(30, 'Photos of school activities', 'ggg', 'hero-1-55d326-bcf7a8.png', 'demo', '2025-06-15 19:21:24'),
(31, 'Photos of school activities', 'ggg', 'hero-2-6c4224-9fd69c.png', 'demo', '2025-06-15 19:21:24'),
(32, 'Photos of school activities', 'ggg', 'hero-3-2a6991-6f6689.png', 'demo', '2025-06-15 19:21:24'),
(33, 'Photos of school activities', 'ggg', 'hero-4-0f173b-1094d7.png', 'demo', '2025-06-15 19:21:24'),
(34, 'Photos of school activities', 'ggg', 'hero-5-8445c3-cb0734.png', 'demo', '2025-06-15 19:21:24'),
(35, 'Photos of school activities', 'ggg', 'hero-6-3f2dbf-e4e8d4.png', 'demo', '2025-06-15 19:21:24'),
(36, 'Photos of school activities', 'ggg', 'hero-7-eb9d85-e4d7a9.png', 'demo', '2025-06-15 19:21:24'),
(37, 'Photos of school activities', 'ggg', 'hero-8-19f39d-ebb519.png', 'demo', '2025-06-15 19:21:24'),
(38, 'Photos of school activities', 'ggg', 'hero-9-9796d1-f3bbff.png', 'demo', '2025-06-15 19:21:24'),
(39, 'Photos of school activities', 'ggg', 'hero-10-49c395-92242f.png', 'demo', '2025-06-15 19:21:24'),
(40, 'Photos of school activities', 'ggg', 'hero-11-be63c5-79df35.png', 'demo', '2025-06-15 19:21:24'),
(41, 'Photos of school activities', 'ggg', 'icsart-i-mage-nhancer-53836d.png', 'demo', '2025-06-15 19:21:24'),
(42, 'Photos of school activities', 'demoooo', 'img1-6c9d81-19c2e8.png', 'demo1', '2025-06-15 19:21:24'),
(43, 'Photos of school activities', 'demoooo', 'logo-1750007963.png', 'demo1', '2025-06-15 22:49:23'),
(44, 'Independence day', 'kjghy', 'vh-3-e3d147.jpg', 'ppp', '2025-06-15 22:51:28'),
(45, 'Independence day', 'kjghy', 'vh-4-8dc839.jpg', 'ppp', '2025-06-15 22:51:28'),
(46, 'Independence day', 'kjghy', 'vh-5-44f7a7.jpg', 'ppp', '2025-06-15 22:51:28'),
(47, 'Independence day', 'kjghy', 'vh-6-a27e52.jpg', 'ppp', '2025-06-15 22:51:28'),
(48, 'Annual day', 'demoo1', 'vh-7-9bdc90.jpg', 'demo1', '2025-06-16 11:31:45'),
(49, 'Annual day', 'demoo1', 'vh-8-1d734d.jpg', 'demo1', '2025-06-16 11:31:46'),
(51, 'Annual day', 'fff', 'vh-12-c5b628.jpg', 'ddd', '2025-06-16 11:32:42'),
(52, 'Annual day', 'fff', 'ab-1-e71c78.jpg', 'ddd', '2025-06-16 11:32:42'),
(53, 'Annual day', 'fff', 'ab-2-5979dc.jpg', 'ddd', '2025-06-16 11:32:42'),
(54, 'ss', 's', 'vh-4-5df807.jpg', 's', '2025-06-16 11:43:22'),
(55, 'ss', 's', 'vh-5-4e26a3.jpg', 's', '2025-06-16 11:43:22'),
(56, 'ss', 's', 'vh-6-a43dac.jpg', 's', '2025-06-16 11:43:22'),
(57, 'a', 'a', 'vh-5-25863c.jpg', 'a', '2025-06-16 11:44:15'),
(59, 'a', 'a', 'vh-7-303758.jpg', 'a', '2025-06-16 11:44:15'),
(60, 'a', 'a', 'vh-8-abc8c6.jpg', 'a', '2025-06-16 11:44:15'),
(63, 'z', 'z', 'vh-10-d0228d.jpg', 'z', '2025-06-16 11:45:13'),
(64, 'z', 'z', 'vh-11-048b90.jpg', 'z', '2025-06-16 11:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `house_glance`
--

CREATE TABLE `house_glance` (
  `id` int(11) NOT NULL,
  `house_name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house_glance`
--

INSERT INTO `house_glance` (`id`, `house_name`, `description`, `created_at`, `image`) VALUES
(1, 'Rose', 'ROSE, with its deep red passion, represents love, resilience, and grace. Its members are strong yet gentle, rising above challenges with quiet strength.\r\n\r\n', '2025-06-16 15:14:26', '1751267660_icons8-rose-48.png'),
(3, 'Shamrock', 'SHAMROCK stands for unity, hope, and good fortune. Its three leaves remind students of balance—between mind, body, and spirit.', '2025-06-16 15:14:56', '1751267931_icons8-shamrock-48.png'),
(4, 'Tulip', 'TULIP shines with creativity and joy, always bringing fresh ideas and energy. They are bright thinkers and team players, spreading positivity wherever they go.', '2025-06-16 15:14:56', '1751267983_icons8-tulip-48.png'),
(5, 'Daffodil', 'DAFFODILS bloom with the spirit of renewal, confidence, and ambition. They welcome each day with enthusiasm, always ready to lead and inspire.', '2025-06-16 15:14:56', '1751268016_icons8-daffodil-64.png');

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `gallery` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`id`, `title`, `description`, `category`, `date`, `gallery`, `created_at`) VALUES
(1, 'CBSE Toppers Felicitation', 'Our top students were honored for their outstanding board results.\r\n\r\n', 'news', '2025-06-17', '../uploads/1750016261_vh (11).jpg,../uploads/1750016261_vh (12).jpg,../uploads/1750016261_ab (1).jpg', '2025-06-15 19:37:41'),
(2, 'ajjj', 'bhh', 'dbdg', '2025-06-17', '../uploads/1750017508_vh (1).jpg', '2025-06-15 19:58:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_approach`
--
ALTER TABLE `academic_approach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_calendar`
--
ALTER TABLE `academic_calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_glance`
--
ALTER TABLE `house_glance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_approach`
--
ALTER TABLE `academic_approach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `academic_calendar`
--
ALTER TABLE `academic_calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `house_glance`
--
ALTER TABLE `house_glance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
