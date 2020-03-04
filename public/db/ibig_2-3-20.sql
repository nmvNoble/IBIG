-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 06:09 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibig`
--

-- --------------------------------------------------------

--
-- Table structure for table `calamities`
--

CREATE TABLE `calamities` (
  `id` bigint(20) NOT NULL,
  `creatorID` bigint(20) NOT NULL,
  `orgID` bigint(20) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `goal` int(9) NOT NULL,
  `current` int(9) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calamities`
--

INSERT INTO `calamities` (`id`, `creatorID`, `orgID`, `title`, `goal`, `current`, `description`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Evacuation Goods 4024', 100, 42, 'Hello po. Kami po ay nangongolekta ng mga goods para ibigay kada pamilya sa evacuation centers sa may 4024 Area. kung ayo po ay may mga basic nescecity goods na maibibigay kami po ay nagpapasalamat sa inyo.', 'Relief Goods', 'default', '2020-03-01 06:42:42', '2020-03-01 06:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `userID` bigint(20) NOT NULL,
  `projID` bigint(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `cont` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customizes`
--

CREATE TABLE `customizes` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `donateComputed` tinyint(1) NOT NULL,
  `donateProgress` tinyint(1) NOT NULL,
  `donateAlternate` tinyint(1) NOT NULL,
  `donateOrdered` tinyint(1) NOT NULL,
  `donateUnordered` tinyint(1) NOT NULL,
  `projectProgess` tinyint(1) NOT NULL,
  `projectDescTab` tinyint(1) NOT NULL,
  `projectUpdateTab` tinyint(1) NOT NULL,
  `projComntTab` tinyint(1) NOT NULL,
  `projDntnTab` tinyint(1) NOT NULL,
  `spareTab` tinyint(1) NOT NULL,
  `projDescText` tinyint(1) NOT NULL,
  `donateNotif` tinyint(1) NOT NULL,
  `compareLocation` tinyint(1) NOT NULL,
  `benefactorSpotLight` tinyint(1) NOT NULL,
  `compareGender` tinyint(1) NOT NULL,
  `userOwnedTab` tinyint(1) NOT NULL,
  `userDonatedTab` tinyint(1) NOT NULL,
  `orgOwnedTab` tinyint(1) NOT NULL,
  `orgDonatedTab` tinyint(1) NOT NULL,
  `orgAboutUsTab` tinyint(1) NOT NULL,
  `orgAffiliatesTab` tinyint(1) NOT NULL,
  `userAnonymityComment` tinyint(1) NOT NULL,
  `userAnonymityDonation` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customizes`
--

INSERT INTO `customizes` (`id`, `userid`, `donateComputed`, `donateProgress`, `donateAlternate`, `donateOrdered`, `donateUnordered`, `projectProgess`, `projectDescTab`, `projectUpdateTab`, `projComntTab`, `projDntnTab`, `spareTab`, `projDescText`, `donateNotif`, `compareLocation`, `benefactorSpotLight`, `compareGender`, `userOwnedTab`, `userDonatedTab`, `orgOwnedTab`, `orgDonatedTab`, `orgAboutUsTab`, `orgAffiliatesTab`, `userAnonymityComment`, `userAnonymityDonation`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-12-05 10:19:48', '2020-03-02 05:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) NOT NULL,
  `benefactorID` bigint(20) NOT NULL,
  `orgID` bigint(20) DEFAULT NULL,
  `projectID` bigint(20) NOT NULL,
  `donation` int(9) NOT NULL,
  `note` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint(20) NOT NULL,
  `name` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `websiteImage` varchar(50) NOT NULL,
  `websiteLink` varchar(50) NOT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `image3` varchar(50) DEFAULT NULL,
  `contact` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `description`, `websiteImage`, `websiteLink`, `image1`, `image2`, `image3`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'I Love Santa Rosa Foundation Inc.', 'description', '', '', '', '', '', '09175728050', '2019-12-05 09:48:24', '2019-12-05 09:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) NOT NULL,
  `creatorID` bigint(20) NOT NULL,
  `orgID` bigint(20) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `goal` int(9) NOT NULL,
  `current` int(9) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT 'default',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `creatorID`, `orgID`, `title`, `goal`, `current`, `description`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 9099, NULL, '4MyHealth mission 2', 4400, 900, 'Update guys I''m in need again but I''m not giving up! This is to fund my health issue. times are tough financially for us so it would be a great help to me and my family if you could help us out a bit. We sure hope for people cooperation. Just in case you forgot to read the part before this i have compiled the previous lines for you to reread. This is to fund my health issue. times are tough financially for us so it would be a great help to me and my family if you could help us out a bit. We sure hope for the people''s cooperation.', '', 'pic02', '2019-12-06 04:47:46', '2019-12-06 04:47:46'),
(2, 9099, NULL, 'I love life', 90000, 0, 'Operation etc', '', 'pic07', '2019-12-06 04:47:46', '2019-12-06 04:47:46'),
(3, 9099, NULL, '4MyHealth', 4000, 0, 'This is to fund my health issue. times are tough financially for us so it would be a great help to me and my family if you could help us out a bit. We sure hope for the people''s cooperation. Just in case you forgot to read the part before this i have compiled the previous lines for you to reread. This is to fund my health issue. times are tough financially for us so it would be a great help to me and my family if you could help us out a bit. We sure hope for the people''s cooperation.', '', 'default', '2019-12-06 04:47:46', '2019-12-06 04:47:46'),
(4, 9099, NULL, 'Life Savers', 5000, 0, 'This is Life Savers. To donate is to give support to volunteers ... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'default', '2019-12-06 04:47:46', '2019-12-06 04:47:46'),
(5, 9099, NULL, 'Helping Heather', 60000, 30000, 'Heather has a rare disease Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL, '2019-12-06 04:47:46', '2020-03-01 05:55:41'),
(6, 9099, NULL, 'Lay on Hands', 20000, 19999, 'Lay on Hands is a baranggay mission to Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'LoH', '2019-12-06 04:47:46', '2019-12-06 04:47:46'),
(7, 1, 1, 'Sight Saving', 20000, 0, 'We are giving free check up on vision problems and prescribe glasses. We would like your donations to further help the doctors that will give the check up and for funding the glasses.', '', 'default', '2020-02-19 03:23:47', '2020-02-19 03:23:47'),
(8, 1, 1, 'Medical Mission', 20000, 0, 'We are giving free check up on common illnesses and give prescription or the needed medicine if available. We also give surgeries to people in removing lumps. We would like your donations to help fund our doctors and the medicine that we would give.', '', 'default', '2020-02-19 03:23:47', '2020-02-19 03:23:47'),
(9, 1, 1, 'Medical Mission - Walking disabilities', 20000, 0, 'We are giving free wheelchairs, canes, and walkers to people who have disablities in walking . We would like your donations to help fund us in getting the needed tools or the tools itself', '', 'default', '2020-02-19 03:23:47', '2020-02-19 03:23:47'),
(10, 1, 1, 'Medical Mission - Teeth Checkup', 20000, 0, 'We are giving free check ups on the teeth of those that will want to have checkups and also do removal of broken teeth if there is a need.  We would like your donations to help fund our doctors and the medicine that we would give and use.', '', 'default', '2020-02-19 03:23:47', '2020-02-19 03:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` bigint(20) NOT NULL,
  `projectid` bigint(20) NOT NULL,
  `updateTitle` varchar(50) NOT NULL,
  `updateImage` varchar(50) DEFAULT NULL,
  `updateText` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orgID` bigint(20) DEFAULT NULL,
  `orgTitle` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `orgID`, `orgTitle`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arnel Gomez', 'ag5598@gmail.com', NULL, '123qweasd', NULL, NULL, NULL, NULL, NULL),
(2, 'Juan Dela Cruz', 'jdc@dlsu.edu.ph', NULL, '123qweasd', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calamities`
--
ALTER TABLE `calamities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customizes`
--
ALTER TABLE `customizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
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
-- AUTO_INCREMENT for table `calamities`
--
ALTER TABLE `calamities`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customizes`
--
ALTER TABLE `customizes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
