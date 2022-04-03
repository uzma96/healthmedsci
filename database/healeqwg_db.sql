-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2022 at 04:42 AM
-- Server version: 10.3.34-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healeqwg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `article_description`, `article_date`, `article_status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Demo 1', '<p>Demo 1</p>', '12/09/2017', 0, 1, '2017-04-15 05:05:22', '2017-04-15 05:12:43'),
(2, 'Both softw', '<p>Abstract-Software cost estimation is the process to<br />\r\nmeasure the required effort and cost to build system. &nbsp;In<br />\r\nhe project management still it is one of the most difficult<br />\r\nasks. There is a lack of reliable estimation technique and<br />\r\nremains on going challenge to software developer.<br />\r\nTrustworthy estimation techniques give proper schedule,<br />\r\nbudget, effort, risk, resource. Software cost estimation<br />\r\nmore challenging to IT industry because of continuous<br />\r\nchanging resources and involvement of different<br />\r\ncustomer. &nbsp;Both software project management and<br />\r\ncustomer are suffering in this issue. &nbsp;In many cases it is<br />\r\nnecessary to estimate cost urgent for customer without<br />\r\nadvance requirements. Most of the estimation techniques<br />\r\ndevelop based on details requirement. In reality customer<br />\r\nwants to know the cost of the system immediately before<br />\r\ngiving them full requirement of the system. &nbsp;We are<br />\r\ngoing to propose an Abrupt Software cost estimation</p>', '2017-04-28', 0, 1, '2017-04-28 22:38:14', '2017-04-28 22:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `author_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) UNSIGNED NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `receiver_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `sender_id`, `subject`, `description`, `receiver_id`, `created_at`, `updated_at`, `status`) VALUES
(2, 16, 'Demo', '<p>Demo</p>', '1', '2017-05-04 21:55:00', '2017-05-04 21:55:00', 3),
(3, 22, 'sdfg', '<p>sdfgsdfgsdfg</p>', '1', '2017-05-08 00:01:05', '2017-05-08 00:01:05', 3);

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` int(10) UNSIGNED NOT NULL,
  `journal_id` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `paper_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_of_research` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doi` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `no_of_view` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_of_download` int(11) DEFAULT 0,
  `domain` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'doc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `journal_id`, `paper_title`, `article_type`, `abstract`, `keywords`, `area_of_research`, `doi`, `user_id`, `status`, `no_of_view`, `created_at`, `updated_at`, `no_of_download`, `domain`) VALUES
(13, '600001', 'PLANT PROFILE, PHYTOCHEMISTRY AND PHARMACOLOGY OF SPATHODEA CAMPANULATA P. BEAUVAIS (AFRICAN TULIP TREE): A REVIEW', 'Journal', '<p>Plants have been used as one of the important source for treating various diseases of human beings since ancient times. Numbers of plants are mentioned in different traditional system of medicine, among them <i>Spathodea campanulata </i>P. Beauvais is one of the important medicinal plant. Different parts of <i>Spathodea campanulata </i>such as flowers, leaves, stem, bark and roots have been reported for possessing anti-inflammatory, analgesic, cytotoxic, anti-diabetic and anticonvulsant activity. Phytochemical screening shows the presence of various secondary metabolites like alkaloids, tannins, flavonoids, glycosides and sterols. Relevant information and literature on <i>Spathodea campanulata</i> from electronic databases such as Academic Journals, Google, Google Scholar, Science Direct, PubMed and Web of Science were collected and analyzed. Available literatures evidently show that <i>Spathodea campanulata</i> possess a wide range of pharmacological activities that could be explained by the presence of variety of phytochemicals. The aim of the present review to provide detailed information regarding geographical distribution, phytochemicals and pharmacological properties of this plant.</p>', 'Spathodea campanulata P. Beauvais, Phytochemicals, Flavonoids, Pharmacology', 'Physics', '10.22159/ijpps.2018v10i5.24096', 9, 5, 141, '2018-07-25 19:16:34', '2022-03-28 05:36:34', 0, 'doc'),
(14, '600002', NULL, NULL, NULL, NULL, NULL, NULL, 9, -1, 108, '2018-07-25 19:18:14', '2022-03-28 02:04:42', 0, 'doc'),
(15, '600003', NULL, NULL, NULL, NULL, NULL, NULL, 10, -1, 99, '2018-07-25 19:19:46', '2022-04-01 00:02:43', 0, 'doc'),
(16, '600004', NULL, NULL, NULL, NULL, NULL, NULL, 12, -1, 107, '2018-11-26 17:12:05', '2022-03-28 02:05:07', 0, 'doc'),
(17, '600004', 'Enhancement of immunity by novel formulation of functional foods', 'Research Article', '<p>jkljaaaaaaaaaaaaaaaaaaaa</p><p>ajljkkkkkkkkkkkkkkkkkkkkk</p><p>jalkjlkjklajlkjlkfdjlkadjlkjflk</p><p>ahlkjdlkjflkjlkajlkjdlfk</p><p>jalkjlkfjlkjldklka</p><p>kljaaaaaaaaaaaaaaaaaaaa</p><p>ajljkkkkkkkkkkkkkkkkkkkkk</p><p>jalkjlkjklajlkjlkfdjlkadjlkjflk</p><p>ahlkjdlkjflkjlkajlkjdlfk</p><p>jalkjlkfjlkjldklkakljaaaaaaaaaaaaaaaaaaaa</p><p>ajljkkkkkkkkkkkkkkkkkkkkk</p><p>jalkjlkjklajlkjlkfdjlkadjlkjflk</p><p>ahlkjdlkjflkjlkajlkjdlfk</p><p>jalkjlkfjlkjldklkakljaaaaaaaaaaaaaaaaaaaa</p><p>ajljkkkkkkkkkkkkkkkkkkkkk</p><p>jalkjlkjklajlkjlkfdjlkadjlkjflk</p><p>ahlkjdlkjflkjlkajlkjdlfk</p><p>jalkjlkfjlkjldklkakljaaaaaaaaaaaaaaaaaaaa</p><p>ajljkkkkkkkkkkkkkkkkkkkkk</p><p>jalkjlkjklajlkjlkfdjlkadjlkjflk</p><p>ahlkjdlkjflkjlkajlkjdlfk</p><p>jalkjlkfjlkjldklkakljaaaaaaaaaaaaaaaaaaaa</p><p>ajljkkkkkkkkkkkkkkkkkkkkk</p><p>jalkjlkjklajlkjlkfdjlkadjlkjflk</p><p>ahlkjdlkjflkjlkajlkjdlfk</p><p>jalkjlkfjlkjldklkakljaaaaaaaaaaaaaaaaaaaa</p><p>ajljkkkkkkkkkkkkkkkkkkkkk</p><p>jalkjlkjklajlkjlkfdjlkadjlkjflk</p><p>ahlkjdlkjflkjlkajlkjdlfk</p><p>jalkjlkfjlkjldklka</p>', 'Functional foods, immunity, cancer, diabetes, infection', 'Pharmacy', NULL, 12, 0, 0, '2018-11-26 17:19:57', '2018-11-26 17:19:57', 0, 'doc'),
(18, '600005', 'In vitro antioxidant preliminary screening profile of methanolic extract of Uvaria littoralis leaf.', 'research paper', '<p><strong>Abstract</strong></p><p><strong>Objective: </strong>To evaluate the antioxidant activity of Uvaria littoralis.</p><p>&nbsp;</p><p><strong>Methods:</strong> Total phenolic content, Total Flavonols, and Total antioxidant activity were used to evaluate the antioxidant potential of Uvaria littoralis. Hydroxyl radical scavenging assay was used to find the scavenging activity of free hydroxyl radicals like hydrogen peroxide in the presence of different fractions of plant sample. Metal chelating activity was also observed.</p><p><strong>Result:</strong> The crude methanol extract and its different fractions showed considerable total antioxidant activity. In a phenolic test, comparing the phenolic content of different fractions with crude methanol extract it was observed that EAF and AQF contain more amounts of phenolic compounds than the crude extract.&nbsp; Total flavonoids content of different fractions with crude methanol extract has shown good flavonoids activity. In hydroxyl radical scavenging activity Petroleum ether fraction exhibited the highest scavenging activity with IC50 of 4.697 μg/ml, while Chloroform fraction exhibited the lowest activity with IC50 of 6.544 μg/ml. In the metal chelating activity, it has shown very well metal chelating activity.</p><p>&nbsp;</p><p>&nbsp;</p>', 'Key Words: Uvaria littoralis, Antioxidant, Methanolic extract.', 'Pharmacy', NULL, 13, 1, 79, '2019-05-20 17:45:05', '2022-03-28 01:58:59', 0, 'ps'),
(19, '600006', NULL, NULL, NULL, NULL, NULL, NULL, 14, -1, 60, '2019-11-24 11:35:43', '2022-03-28 02:05:32', 0, 'doc'),
(20, '600007', 'sdfgsdf', 'dfgsdfg', '<p>gsdfgsdfgsdfg</p>', 'sdfgsdfgdfg', 'Physics', 'sdfgsdfg', 15, 1, 102, '2020-01-17 14:50:57', '2022-03-26 04:06:19', 0, 'www'),
(21, '600008', NULL, NULL, NULL, NULL, NULL, NULL, 18, -1, 14, '2021-12-18 16:34:08', '2022-04-02 18:26:47', 0, 'doc'),
(22, '600009', NULL, NULL, NULL, NULL, NULL, NULL, 19, -1, 3, '2022-03-13 16:17:45', '2022-04-02 14:27:48', 0, 'doc'),
(23, '600010', NULL, NULL, NULL, NULL, NULL, NULL, 20, -1, 1, '2022-03-18 18:24:42', '2022-03-30 13:34:25', 0, 'doc');

-- --------------------------------------------------------

--
-- Table structure for table `journal_author`
--

CREATE TABLE `journal_author` (
  `id` int(11) UNSIGNED NOT NULL,
  `journal_id` varchar(255) DEFAULT NULL,
  `salutation` varchar(32) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `affiliation` varchar(255) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `orcid_id` varchar(256) DEFAULT NULL,
  `correspondent_author` varchar(3) DEFAULT 'No',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `journal_author`
--

INSERT INTO `journal_author` (`id`, `journal_id`, `salutation`, `first_name`, `last_name`, `email`, `tel`, `affiliation`, `country`, `orcid_id`, `correspondent_author`, `created_at`, `updated_at`) VALUES
(20, '51', 'Prof.', 'Iftakharul', 'Alam', 'bappa2du@gmail.com', NULL, 'Dhaka University', 'Bangladesh', NULL, '1', '2018-07-25 19:13:55', '2018-07-25 19:13:55'),
(21, '600001', 'Prof.', 'Iftakharul', 'Alam', 'bappa2du@gmail.com', NULL, 'Dhaka University', 'Bangladesh', NULL, '1', '2018-07-25 19:15:02', '2018-07-25 19:15:02'),
(22, '600002', 'Prof.', 'Iftakharul', 'Alam', 'bappa2du@gmail.com', NULL, 'Dhaka University', 'Bangladesh', NULL, '1', '2018-07-25 19:18:14', '2018-07-25 19:18:14'),
(23, '600003', 'Prof.', 'Saiful', 'Alam', 'bappa2du@outlook.com', NULL, 'Dhaka University', 'Bangladesh', NULL, '1', '2018-07-25 19:19:47', '2018-07-25 19:19:47'),
(24, '600002', 'Prof.', 'Ashraful', 'Alam', 'ashraful@gmail.com', NULL, 'Dhaka University', 'Bangladesh', NULL, '0', '2018-07-25 19:22:40', '2018-07-25 19:22:40'),
(25, '600004', 'Prof.', 'Md. Moklesur Rahman', 'Sarker', 'healthmedsci@gmail.com', NULL, 'State University of Bangladesh', 'Bangladesh', NULL, '1', '2018-11-26 17:12:05', '2018-11-26 17:12:05'),
(26, '600004', 'Prof.', 'Harunur', 'Rashid', 'moklesur2002@yahoo.com', NULL, 'World University of Bangladesh', 'Bangladesh', NULL, '0', '2018-11-26 17:18:39', '2018-11-26 17:18:39'),
(27, '600005', 'Mr.', 'Md.Shariful', 'Islam', 'sharif.seu17@gmail.com', NULL, 'Researcher, Southeast University, Banani, Dhaka, Bangladesh', 'Bangladesh', NULL, '1', '2019-05-20 17:45:06', '2019-05-20 17:45:06'),
(28, '600006', 'Mr.', 'Mohammad Abul', 'Sajjad', 'sajjadpharma1993@gmail.com', NULL, 'International Islamic University Chittagong.\r\nKumira, Sitakundo, Chittagong.', 'Bangladesh', NULL, '1', '2019-11-24 11:35:43', '2019-11-24 11:35:43'),
(29, '600007', 'Mr.', 'nazim', 'udin', 'nazim_107@diu.edu.bd', NULL, 'diu', 'Bangladesh', NULL, '1', '2020-01-17 14:50:57', '2020-01-17 14:50:57'),
(30, '600008', 'Prof.', 'Mokles', 'Sarker', 'smsinnovation2017@gmail.com', NULL, 'hljljl ajlkjkjl akljlkj a', 'Bangladesh', NULL, '1', '2021-12-18 16:34:08', '2021-12-18 16:34:08'),
(31, '600009', 'Prof.', 'Shahid', 'Hossain', 'esibd2015@gmail.com', NULL, 'hlkjlkjlkj hlj lahkljlk  jalkjlkjlk', 'Bangladesh', NULL, '1', '2022-03-13 16:17:45', '2022-03-13 16:17:45'),
(32, '600010', 'Prof.', 'Demo', 'Account', 'amatul.uzma96@gmail.com', NULL, NULL, 'Bangladesh', NULL, '1', '2022-03-18 18:24:43', '2022-03-18 18:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `journal_details`
--

CREATE TABLE `journal_details` (
  `id` int(11) NOT NULL,
  `journal_id` text DEFAULT NULL,
  `document_src` varchar(255) DEFAULT NULL,
  `document_name` varchar(255) DEFAULT NULL,
  `document_type` varchar(32) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal_details`
--

INSERT INTO `journal_details` (`id`, `journal_id`, `document_src`, `document_name`, `document_type`, `status`, `created_at`, `updated_at`) VALUES
(6, '600001', 'journals/mJ9mGF3pX2jtoCHjkFvBFdQy83wtVj7kFnrNu83s.docx', 'respondus-docx-sample-file_0.docx', 'Menuscript', 1, '2018-07-25 19:16:20', '2018-07-25 19:16:20'),
(7, '600002', 'journals/raGNcICXWa4rdmGOYuhIH84qn14eUe2ROu2YkVEW.docx', 'Accountancy for business.docx', 'Menuscript', 1, '2018-07-25 19:22:16', '2018-07-25 19:22:16'),
(8, '600004', 'journals/vIKo02xFzKB0OB8jLLDIgtJfXfEVqZIhVrhBKYkX.jpeg', 'Attachment # 1.jpg', 'Menuscript', 1, '2018-11-26 17:14:30', '2018-11-26 17:14:30'),
(9, '600004', 'journals/oxDT35PBc5jNKDNKsmdp8aZJXymykpUVoO7K0kKh.doc', 'Invitaiton letter-CSE.docx', 'Menuscript', 1, '2018-11-26 17:17:28', '2018-11-26 17:17:28'),
(10, '600005', 'journals/tsg9i8tYzXNFjff3SC4i3AbHDST8wkcRBvTu0TuR.doc', 'Anti-oxidant final.doc', 'Menuscript', 1, '2019-05-20 17:48:06', '2019-05-20 17:48:06'),
(11, '600007', 'journals/E08aDxz9Qze0rdeOy5JNIHdlzJd54GAVwX1V79wC.doc', 'New Microsoft Office Word Document (3).docx', 'Menuscript', 1, '2020-01-17 14:52:05', '2020-01-17 14:52:05'),
(12, '600007', 'journals/YRwv1ZSmHBr9hzryA4a1vYZEVR8WBYSVAr5te0g5.doc', 'New Microsoft Office Word Document (4).docx', 'Menuscript', 1, '2020-01-17 14:52:28', '2020-01-17 14:52:28'),
(13, '600008', 'journals/1VaGHCh47ihJAgpzE1q4mtSzUHGTgyZitMsG1zTN.doc', 'MMRS Research Cadge # 1.docx', 'Menuscript', 1, '2021-12-18 16:35:11', '2021-12-18 16:35:11'),
(14, '600009', 'journals/yansB2QjnVJZL3CTdxitOqzC7uWkWa7dQOROUYAj.doc', 'Molecules-Accepted manuscript.docx', 'Menuscript', 1, '2022-03-13 16:31:54', '2022-03-13 16:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `journal_review`
--

CREATE TABLE `journal_review` (
  `id` int(11) NOT NULL,
  `journal_id` text NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `status` varchar(64) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal_review`
--

INSERT INTO `journal_review` (`id`, `journal_id`, `reviewer_id`, `comment`, `document`, `status`, `created_at`, `updated_at`) VALUES
(2, '600001', 11, '<p>this is demo comment</p>', NULL, '1', '2018-07-25 20:04:55', '2018-07-25 20:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_03_03_090914_create_authors_table', 2),
(4, '2017_03_03_094630_create_research_papers_table', 3),
(5, '2017_03_03_145148_create_roles_table', 4),
(6, '2017_03_03_145331_create_paper_categories_table', 4),
(7, '2017_04_07_033533_create_pages_table', 5),
(8, '2017_04_07_063400_create_articles_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) UNSIGNED NOT NULL,
  `notice_title` text DEFAULT NULL,
  `notice_date` varchar(32) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_title`, `notice_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'This is a', '2017-04-02', NULL, '2017-04-16 01:54:06', '2017-04-16 01:59:56'),
(2, 'New way to communicate', '2017-04-05', NULL, '2017-04-16 02:00:17', '2017-04-16 02:00:17'),
(3, 'allah', '2017-04-28', NULL, '2017-04-28 22:35:14', '2017-04-28 22:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `notification_type` varchar(128) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(11) NOT NULL,
  `page_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_id`, `page_title`, `page_description`, `page_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 100004, 'About The Journal', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'about-the-journal', 1, '2017-04-28 22:33:05', '2017-05-03 17:11:46'),
(2, 100004, 'Scope of The Journal', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'scope-of-the-journal', 1, '2017-04-29 18:33:02', '2017-05-03 17:12:45'),
(3, 100004, 'Journal Indexing', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'journal-indexing', 1, '2017-05-01 23:57:16', '2017-05-03 17:12:37'),
(4, 100005, 'Editorial Board', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'editorial-board', 1, '2017-05-03 17:13:03', '2017-05-03 17:13:03'),
(5, 100006, 'Guide For Authors', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'guide-for-authors', 1, '2017-05-03 17:13:21', '2017-05-03 17:13:21'),
(6, 100007, 'Journal Announcement', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p><br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'journal-announcement', 1, '2017-05-03 20:36:48', '2017-05-03 20:36:48'),
(7, 100008, 'Journal Open Access Policy', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p><br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'journal-open-access-policy', 1, '2017-05-03 20:37:23', '2017-05-03 20:37:23'),
(8, 100009, 'About International Journal of Diabetes Obesity and Cancer', '<p>There is a growing body of evidence to support a connection between diabetes (predominantly type 2), obesity and cancer. Multiple meta-analyses of epidemiological data show that people with diabetes are at increased risk of developing many different types of cancers, along with an increased risk of cancer mortality. Several pathophysiological mechanisms for this relationship have been postulated, including insulin resistance and hyperinsulinaemia, enhanced inflammatory processes, dysregulation of sex hormone production and hyperglycaemia. In addition to these potential mechanisms, a number of common risk factors, including obesity, may be behind the association between diabetes and cancer. Indeed, obesity is associated with an increased risk of cancer and diabetes. Abdominal adiposity has been shown to play a role in creating a systemic pro-inflammatory environment, which could result in the development of both diabetes and cancer. Here, we examine the relationship between diabetes, obesity and cancer, and investigate the potential underlying causes of increased cancer risk in individuals with diabetes. Current treatment recommendations for reducing the overall disease burden are also explored and possible areas for future research are considered.</p>', 'about-international-journal-of-diabetes-obesity-and-cancer', 1, '2017-05-04 05:05:11', '2017-05-04 05:05:11'),
(9, 100017, 'Editorial Policy', '<ul>\r\n	<li>Submission of a manuscript to a HealthMed Science journals imply that all authors have read and agreed to its content and that the manuscript conforms to the journals&rsquo; policies.</li>\r\n	<li>Any study involving animals or humans should obtain ethical approval from the appropriate authority such as Institutional Review Board or National Ethical Committee for human or animal study.</li>\r\n	<li>For studies involving humans, the consent from the participants should be obtained following the guidelines of Declaration of Helsinki.</li>\r\n	<li>Research Involving plants should be authenticated by a Herbalist or Botanist to have identification number accordingly.</li>\r\n	<li>The data of results should be statistically analyzed by using appropriate software.</li>\r\n	<li>HealthMed Science authors has to declare competing intetests of their works. The reviewers and editors should declare conflict of interests on the articles.</li>\r\n	<li>Contribution of the authors: All the authors listed in the manuscript should have valid contribution to the manuscript.</li>\r\n	<li>The contributors in the submitted article should be dully acknowledged the contribution in the research works or other types of supports wherever applicable.</li>\r\n	<li>The information provided from other sources should be cited properly to give recognition to the authors.</li>\r\n	<li>The articles with plagiarism report less than 25% is considered for evaluation and publication in the HealthMed Journals.</li>\r\n	<li>HealthMed Science follow double-blind peer review policy.</li>\r\n</ul>', 'editorial-policy', 1, '2017-10-13 16:01:42', '2018-09-25 11:58:52'),
(10, 100017, 'Open Access Policy', '<p>HealthMed Science strictly follow the Open Access Policy of Journals. All articles published by HealthMed Science are made available worldwide freely and permanently accessible online immediately upon publication, without subscription charges or registration barriers.</p>\r\n\r\n<ul>\r\n	<li>The authors are copyright holders of the articles</li>\r\n	<li>The third party has the granted to use, reproduce or disseminate the articleif proper accreditation/citation of the original publication is given</li>\r\n	<li>Any reader has free and unlimited access to the full-text of <em>all</em><em> </em>articles published in HealthMed Science journals</li>\r\n	<li>Open access publication is supported by the authors&#39; institutes or research funding agencies with low article processing charge before publication process.</li>\r\n</ul>', 'open-access-policy', 1, '2017-10-13 16:04:27', '2018-09-25 11:59:59'),
(11, 100018, 'Publication Ethics', '<p>All types of studies involving human (clinical studies/trials, case studies, case series, clinical datasets, medical records, prospective studies, surveys) and animals (rats, mice, rodents, hamsters, guinea pigs, rabbits, cats, dogs) should be approved by a formally constituted review board - Institutional Review Board or Ethics committee. The research has to confirm that ethical and legal approval was obtained prior to the commencement of the study. Human research should confirm and to be conducted in accordance with the&nbsp;Declaration of Helsinki. Research involving animals should follow institutional, national and international guidelines for the ethical and legal use of animals and their treatment.</p>', 'publication-ethics', 1, '2017-10-13 16:05:00', '2018-09-25 12:00:55'),
(12, 100013, 'Plagiarism Policy', '<p>Plagiarism Policy</p>', 'plagiarism-policy', 1, '2017-10-13 16:05:34', '2017-10-13 16:05:34'),
(13, 100014, 'Special Thematic Issue', '<p>Special Thematic Issue</p>', 'special-thematic-issue', 1, '2017-10-13 16:06:35', '2017-10-13 16:06:35'),
(14, 100015, 'Conference', '<p>Conference</p>', 'conference', 1, '2017-10-13 16:07:12', '2017-10-13 16:07:12'),
(15, 100017, 'Press Release', '<p>Lincoln University College Malaysia, State University of Bangladesh, Primeasia University, World University of Bangladesh, Daffodil International University, Haji Danesh Science and Technology University, Southeast University, ASA University, Bangladesh University, and Atish Dipankar University of Science and Technology have subscribed Healthmed Science journals in their libraries.</p>', 'press-release', 1, '2017-10-13 16:07:53', '2018-09-25 12:00:33'),
(16, 100018, 'Privacy Policy', '<p>HealthMed Science gives highest priority to the privacy of the authors, editors, reviewers, and readers.</p>', 'privacy-policy', 1, '2018-09-25 12:02:04', '2018-09-25 12:02:04'),
(17, 100019, 'Our Philosophy', '<p>We believe in innovation, sharing great ideas, rapid publication, heartiest supports to the authors to get their work to be published and respect the opinions of the readers.</p>', 'our-philosophy', 1, '2018-09-25 12:03:45', '2018-09-25 12:03:45'),
(18, 100020, 'About Health Med Science', '<p>HealthMed Science has been established in 2017 with the combined efforts of a group of multinational researchers having research backgrounds in Medical, Pharmaceutical, Clinical, Nutritional, and Natural Products&rsquo; Research. The aim of this publishing company is to be one of leaders in publications of journals and books in Medical and Pharmaceutical Sciences. The principle objective of HealthMed Science is to publish innovative and genuine research and ideas within the minimum possible time and to explore the publications to the readers around the globe.</p>', 'history', 1, '2018-09-25 12:04:44', '2018-09-25 12:04:44'),
(19, 100021, 'Conflict of Interests', '<p>The publication policy of Healthmed Science is required to declare and disclose potential conflicts of interests of editors, peer reviewers, and authors.</p>', 'conflict-of-interests', 1, '2018-10-05 21:19:16', '2018-10-05 21:19:16'),
(20, 100024, 'Double-Blind Peer Review Policy', '<p>Healthmed Science ensures double-blind peer-review with the assessment of journal manuscripts by the expert reviewers around the globe specialized in the respective field of research.</p>', 'double-blind-peer-review-policy', 1, '2018-10-05 21:20:11', '2018-10-05 21:21:39'),
(21, 100025, 'Services', '<p>We provide following services -</p>\r\n\r\n<ol>\r\n	<li>Journal Publication</li>\r\n	<li>Book Publication</li>\r\n	<li>Special Thematic Issue</li>\r\n	<li>Conference</li>\r\n	<li>And More...</li>\r\n</ol>', 'services', 1, '2018-10-05 21:23:44', '2018-10-05 21:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `paper_categories`
--

CREATE TABLE `paper_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paper_categories`
--

INSERT INTO `paper_categories` (`id`, `category_title`, `category_description`, `created_at`, `updated_at`) VALUES
(1, 'Pharmacy', 'Science', '2017-03-04 04:01:42', '2017-05-07 03:13:50'),
(2, 'Physics', 'Sports', '2017-03-04 04:05:00', '2017-05-07 03:13:26'),
(3, 'Chemistry', 'ggggg', '2017-04-28 22:30:33', '2017-05-07 03:13:38'),
(4, 'Nuclear Science', 'Nuclear Science', '2017-05-07 03:14:15', '2017-05-07 03:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviewer_profile`
--

CREATE TABLE `reviewer_profile` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_title` text DEFAULT NULL,
  `first_name` text DEFAULT NULL,
  `family_name` text DEFAULT NULL,
  `user_initials` text DEFAULT NULL,
  `job_title` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `organization` text DEFAULT NULL,
  `institution` text DEFAULT NULL,
  `principle_field` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviewer_profile`
--

INSERT INTO `reviewer_profile` (`id`, `user_id`, `user_title`, `first_name`, `family_name`, `user_initials`, `job_title`, `department`, `organization`, `institution`, `principle_field`, `country`, `phone`, `created_at`, `updated_at`) VALUES
(1, 16, 'Mr.', 'Iftakharul', 'Alam', 'Mr.', 'Principle', 'Pharmacy', 'Dhaka University', 'Dhaka University', 'Pharmacy', 'Bangladesh', '80121726334', '2017-05-04 20:37:54', '2017-05-04 20:43:48'),
(2, 21, 'Mr.', NULL, NULL, NULL, 'Principle', NULL, NULL, NULL, NULL, 'BD', '017263234', '2017-05-07 04:23:09', '2017-05-07 04:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_slug`, `created_at`, `updated_at`) VALUES
(1, 'Author', 'author', '2017-04-07 16:21:11', '2017-04-07 16:29:47'),
(2, 'Review', 'review', '2017-04-07 16:30:03', '2017-04-07 16:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `statement` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `statement`, `username`, `created_at`, `updated_at`) VALUES
(2, 'this is statement', 'username', '2017-10-13 16:17:55', '2017-10-13 16:17:55'),
(3, 'this is statement 2', 'username 2', '2017-10-13 16:18:13', '2017-10-13 16:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salutation` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orcid_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailing_address` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_text` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `reset_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `gender`, `salutation`, `affiliation`, `orcid_id`, `phone`, `mailing_address`, `country`, `password_text`, `password`, `remember_token`, `role`, `status`, `reset_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'admin@demo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$OUvpIV.fGyjEZ/HwT.jV3e0e4r6VFiWbwZ8stGJK3iJ/CISkJ0pu6', 'BVF63q5VUCCXF8lXMHuBgAU5z7e4amIsDnSIlG6oVmAN4WkLNol3VojGGchR', 'admin', 1, NULL, '2017-03-03 19:06:22', '2018-07-22 13:13:12'),
(9, 'Iftakharul', 'Alam', 'bappa2du@gmail.com', 'male', 'Prof.', 'Dhaka University', '017261-0182678', '+8801670752214', 'Dhaka', 'Bangladesh', NULL, '$2y$10$Ny62EzNT/9c0m.NiK6upt.5YyDQYJlu2YFXJuq0ikfjJow5Z1etgC', 'UX8uTzqfCaUe3vstWRR7eKeZoQ55XilSYo7YSFBhjdfVzYJpAPc6e1lgOikx', 'author', 1, 'a72173c29efd2cb2ec22ce5e26fb266eb10d7489', '2018-07-25 19:09:24', '2018-07-25 19:09:24'),
(10, 'Saiful', 'Alam', 'bappa2du@outlook.com', 'male', 'Prof.', 'Dhaka University', '018272-18172671', '+8801670752214', 'Dhaka', 'Bangladesh', NULL, '$2y$10$Yrll6xiHqR3YJYREkRtZ4OSpDoBhgE0Pc0oL6b8g0b6bk3B4TT1y.', '5UVyZAUVbvQApQurNdlM6Bv01Ag71Vk4JgNbndBD2h06GbtslAp1PQHdi4jK', 'author', 1, '37e0ab7fcf9bab99260f055c64380be33c49a226', '2018-07-25 19:19:29', '2018-07-25 19:19:29'),
(11, 'Fahad', 'Alam', 'fahad@yahoo.com', NULL, 'Dr.', 'East West University', NULL, NULL, NULL, NULL, '123456', '$2y$10$z/n070XaKQQZaFK2aNlZJOOhfR8AuV0LSyHQhOknG5iUNe17OKRHm', 'FtnpbjAfX1tucnX0sRXedJuwCKH3VraTTE1RJrDe6hfTgPZNoobiN1yB5bKU', 'reviewer', 1, NULL, '2018-07-25 19:49:19', '2018-07-25 19:49:19'),
(12, 'Md. Moklesur Rahman', 'Sarker', 'healthmedsci@gmail.com', 'male', 'Prof.', 'State University of Bangladesh', NULL, '+8801776758882', 'Lalmatia, Dhaka', 'Bangladesh', NULL, '$2y$10$ogp.Nn9yr7kDtJPftsEMO.IL2VVPSEOYxg4d1aQ3xy0V7VHo92LG6', '4XzC9scFgTElTFLfIIbfL8ju3iSvdKTBnr7c7rhFuNrG5k3kes8boFlDogNS', 'author', 1, 'b6260f329338c6438e490fc601d412285ec08f35', '2018-11-26 17:11:23', '2018-11-26 17:11:23'),
(13, 'Md.Shariful', 'Islam', 'sharif.seu17@gmail.com', 'male', 'Mr.', 'Researcher, Southeast University, Banani, Dhaka, Bangladesh', 'https://orcid.org/0000-0002-8166-6896', '+8801685945797', '89/G, East Rampura, DIT Road, Dhaka, Bangladesh', 'Bangladesh', NULL, '$2y$10$y4FFNoWUfAfEuiqlCMWudO4NvLx04rgQNMOqPu29gkqS5V3Hhl6ee', NULL, 'author', 1, 'de979b7ca7771ad625a9e2ecbf859ccbb4cc131f', '2019-05-20 17:44:44', '2019-05-20 17:44:44'),
(14, 'Mohammad Abul', 'Sajjad', 'sajjadpharma1993@gmail.com', 'male', 'Mr.', 'International Islamic University Chittagong.\r\nKumira, Sitakundo, Chittagong.', NULL, '+8801883901747', 'Monsur Building(5B), Abdul Hakim Sowdagor Lane,Kapasgola, Chawkbazar, Chittagong, Bangladesh.', 'Bangladesh', NULL, '$2y$10$t1FGsFTM9ZO/YdXYrnKEIu/shrxKiE1CETTyzAQqVd0JjlfJqgA/y', NULL, 'author', 1, 'a6f7c43a6d324348611620d210b624eb43d34f2a', '2019-11-24 11:34:59', '2019-11-24 11:34:59'),
(15, 'nazim', 'udin', 'nazim_107@diu.edu.bd', 'male', 'Mr.', 'diu', 'na', '+8801820256327', 'H#9,B#C,Level-5\r\nSouth Banasree,Khilgon', 'Bangladesh', NULL, '$2y$10$Ah1GSY5Fwb6Z47kv4LOQhOf63Png5TU8ZR.UoEctKtYm.oLKUyFnq', 'khz1aAmWrZ3YxL98ZJLU3QMdmVmSRwsc7c1apVRTHLnUfTBfdIfzCu4xoWey', 'author', 1, '63d442e72f00dc24be2ec0fbc5846bff71bb30d8', '2020-01-17 14:50:45', '2020-01-17 14:50:45'),
(16, 'Rhwlbyfqcr', 'Abrams', 'viktoriya.21.3dq@mail.ru', 'female', 'Ms.', 'Mississippi 57', NULL, NULL, 'viktoriya.21.3dq@mail.ru', 'Finland', NULL, '$2y$10$yqsVhCdhQ3EA0JaP0yrWKeg.KR2Kd8XTYX3zgNvX3vrMQStWtTXXK', NULL, 'author', 1, '6c9f47307116121f2c923004d0412757b2adf846', '2021-06-23 19:27:41', '2021-06-23 19:27:41'),
(17, 'Zqwkkudviz https://dmzjxvmqtc.biz/', 'Abrams', 'searchnilatzi1972407510@mail.ru', 'female', 'Ms.', 'Mississippi 31', NULL, '+8809992724744', 'searchnilatzi1972407510@mail.ru', 'Finland', NULL, '$2y$10$6mg.VUkCaETqD2ZG63BQAuzQzVZnoCsM59c1zp9dFiKKWa3lesGJK', NULL, 'author', 1, '77a7ceb0e0118fa6c21ffbb3a03a43da3e172cfe', '2021-06-23 19:29:11', '2021-06-23 19:29:11'),
(18, 'Mokles', 'Sarker', 'smsinnovation2017@gmail.com', 'male', 'Prof.', 'hljljl ajlkjkjl akljlkj a', NULL, '+8801796253050', 'hljkj  hlaj  hlaj lj  hlkjlakj', 'Bangladesh', NULL, '$2y$10$K0dN8.bx0Wf/k3gT6//8beK.TCW1a2dYC//DX/oN.ridnbBAemn1y', NULL, 'author', 1, 'fbae0f3cca68fb98280bf0e8546846859a8d0710', '2021-12-18 16:32:54', '2021-12-18 16:32:54'),
(19, 'Shahid', 'Hossain', 'esibd2015@gmail.com', 'male', 'Prof.', 'hlkjlkjlkj hlj lahkljlk  jalkjlkjlk', NULL, '+8801796253050', '77 Satmasjid Road, Dhanmondi, Dhaka', 'Bangladesh', NULL, '$2y$10$5z5UqlUhQh3Mh1iWGfxwkus4vKLNym7fQeunoSh4gAINKeQl0NGD6', 'tNNtCmcd1ksbJxrIlKLaloW1JwBYJZFhC5sofpP57XDFtQ3MmYpaaqAC4Maj', 'author', 1, 'd6656f3c56b6d75c3a2e1223276ae1ca55e47eb5', '2022-03-13 16:16:25', '2022-03-13 16:16:25'),
(20, 'Demo', 'Account', 'amatul.uzma96@gmail.com', 'female', 'Prof.', NULL, NULL, NULL, NULL, 'Bangladesh', NULL, '$2y$10$jUtsKMAeF0PEsYvJe33OhuHzuTvIHV7iidYMKkg/DqlmwnxRggE5W', 'zpqGzYDicXp2Bzr32E2PMnatwwyZNmSGcw6laShkRkbi7kKGQxvkRaRtFs5M', 'author', 1, '1d98f6fa716d26e6f635568f1cf13ec441e414bc', '2022-03-18 18:24:23', '2022-03-18 18:24:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_author`
--
ALTER TABLE `journal_author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_details`
--
ALTER TABLE `journal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_review`
--
ALTER TABLE `journal_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper_categories`
--
ALTER TABLE `paper_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191)),
  ADD KEY `password_resets_token_index` (`token`(191));

--
-- Indexes for table `reviewer_profile`
--
ALTER TABLE `reviewer_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `journal_author`
--
ALTER TABLE `journal_author`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `journal_details`
--
ALTER TABLE `journal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `journal_review`
--
ALTER TABLE `journal_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `paper_categories`
--
ALTER TABLE `paper_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviewer_profile`
--
ALTER TABLE `reviewer_profile`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
