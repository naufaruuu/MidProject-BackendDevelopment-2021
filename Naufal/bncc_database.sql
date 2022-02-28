-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bncc
CREATE DATABASE IF NOT EXISTS `bncc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bncc`;

-- Dumping structure for table bncc.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `sessions` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `enrolled` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bncc.courses: ~7 rows (approximately)
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
REPLACE INTO `courses` (`id`, `number`, `sessions`, `description`, `enrolled`, `title`, `image`, `details`, `created_at`, `updated_at`) VALUES
	(1, 1, 20, 'A programming algorithm is a procedure or formula used for solving a problem. It is based on conducting a sequence of specified actions in which these actions describe how to do something, and your computer will do it exactly that way every time. An algorithm works by following a procedure, made up of inputs.', 1, 'Algorithm and Programming', 'https://cdn.lynda.com/course/718636/718636-1592866281852-16x9.jpg', '• Definition\r\n• Development Steps\r\n• Exercise\r\n• Flow Chart\r\n• Flow Chart Example\r\n• Pseudo-code\r\n• Pseudo-code Examples\r\n• Structured Theorem\r\n• C Standard library\r\n• C Structure\r\n• Character\r\n• Comments\r\n• Escape Sequences\r\n• Exercise\r\n• History of C\r\n• Identifier\r\n• Keyword', '2022-02-26 13:59:21', '2022-02-28 15:49:23'),
	(2, 2, 14, 'Program design methodology deals with the effective implementation of logics and procedures to construct a program in an information system. The methodology defines the analysis, design, implementation, testing and maintenance of the programs.', 2, 'Program Design', 'https://coeseguranca.com.br/wp-content/uploads/2016/05/auditoria-1.jpg', '• Assignment and Calculations\r\n• Declaration and Data Types\r\n• Designing Programs\r\n• Designing your first program\r\n• Documenting a program\r\n• Hand Tracing a program\r\n• Input, Output, variables\r\n• Named Constant\r\n• Defining and calling a module\r\n• Global Variables and Global constant\r\n• Introduction to Modules\r\n• Local Variables\r\n• Passing arguments\r\n• Boolean variables\r\n• Case Structure\r\n• Compare string\r\n• Dual alternative decision structure\r\n• Introduction to decision structure\r\n• Logical Operators\r\n• Nested Decision\r\n• Defensive Programming\r\n• Garbage in garbage out\r\n• Calculating a running total\r\n• Condition controlled loop\r\n• Count control loop\r\n• Introduction to Repetition Structure\r\n• Nested Loop\r\n• Sentinels', NULL, '2022-02-28 15:52:42'),
	(3, 3, 45, 'Web programming refers to the writing, markup and coding involved in Web development, which includes Web content, Web client and server scripting and network security. Web programming is different from just programming, which requires interdisciplinary knowledge on the application area, client and server scripting, and database technology.', 2, 'Web Programming', 'https://www.rakyatmerdeka.co.id/wp-content/uploads/2020/02/Aneka-Jenis-Platform-Website.jpg', '• Form Action\r\n• HTML Form Element\r\n• HTML Form Introduction\r\n• Table\r\n• CSS Box and Positioning\r\n• CSS Links\r\n• CSS Selector (Class, Id, Element)\r\n• CSS text Styles\r\n• Hover Effect\r\n• Internal and External CSS\r\n• Web Structure (Div)\r\n• Built in Functions (Date, String, Math)\r\n• Event Handler\r\n• Function\r\n• HTML and Javascript\r\n• Looping\r\n• Selection\r\n• Variables, Strings and Arrays', NULL, '2022-02-28 15:51:43'),
	(4, 4, 100, 'A database management system (DBMS) is the software that interacts with end users, applications, and the database itself to capture and analyze the data. The DBMS software additionally encompasses the core facilities provided to administer the database. The sum total of the database, the DBMS and the associated applications can be referred to as a database system. Often the term "database" is also used loosely to refer to any of the DBMS, the database system or an application associated with the database.', 1, 'Database Management System', 'https://gmedia.net.id/upload/foto_artikel/20200908OPbRvlO0oV.png', '• Declarative languages and runtime systems\r\n• Scalable data analysis and query processing\r\n• Consistency, concurrency, coordination and reliability\r\n• Data storage and physical design\r\n• Metadata management\r\n• Systems for machine learning and model management\r\n• Data cleaning, data transformation, and crowdsourcing', NULL, '2022-02-28 15:50:10'),
	(5, 5, 50, 'Data structure is a data organization, management, and storage format that enables efficient access and modification. More precisely, a data structure is a collection of data values, the relationships among them, and the functions or operations that can be applied to the data, i.e., it is an algebraic structure about data.', 1, 'Data Structure', 'https://res.cloudinary.com/practicaldev/image/fetch/s--AO0dFdQ5--/c_imagga_scale,f_auto,fl_progressive,h_900,q_auto,w_1600/https://thepracticaldev.s3.amazonaws.com/i/srnvrd7vfeeq5qpxnabq.png', '• Accessing Array\r\n• Array Declaration\r\n• Array of pointers\r\n• Operations in Array\r\n• Pointer to Pointer\r\n• Pointer Variables\r\n• Storing Array Values\r\n• Deleting for a value from a linked list\r\n• Inserting for a new value in a linked list\r\n• Introduction to single linked list\r\n• Searching for a value in a linked list\r\n• Deleting a node from a circular linked list\r\n• Inserting a new node in a circular linked list\r\n• Deleting a node from a doubly linked list\r\n• Inserting a new node in a doubly linked list\r\n• Array representation of stacks\r\n• Introduction to Stacks\r\n• Linked representation of stacks\r\n• Peek operations on a stack\r\n• Pop operations on a linked stack\r\n• Pop operations on a stack\r\n• Push operations on a linked stack\r\n• Push operations on a stack', NULL, '2022-02-28 15:52:38'),
	(6, 6, 30, 'Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. Its high-level built in data structures, combined with dynamic typing and dynamic binding, make it very attractive for Rapid Application Development, as well as for use as a scripting or glue language to connect existing components together.', 3, 'Python Programming', 'https://www.online-tech-tips.com/wp-content/uploads/2021/11/New-Featured-Image.jpg', '• Variables and Assignment\r\n• Function\r\n• Data Structure\r\n• Operation and Statements\r\n• Variables and Assignment\r\n• Repetition & Conditional Statement\r\n• NumPy and other Libraries', NULL, '2022-02-28 15:58:12'),
	(7, 7, 50, 'Data science encompasses preparing data for analysis, including cleansing, aggregating, and manipulating the data to perform advanced data analysis. Analytic applications and data scientists can then review the results to uncover patterns and enable business leaders to draw informed insights.', 6, 'Data Science', 'https://binus.ac.id/wp-content/uploads/2020/10/46-0-Berikut-Profesi-yang-Menjanjikan-bagi-Jurusan-Data-Science.jpg', '• Introduction to Numerical Method\r\n• Introduction to Scientific Computing\r\n• Absolute and Relative Errors\r\n• Basics of Linear Algebra\r\n• LU Decomposition Method\r\n• Systems of Linear Equation\r\n• Gauss–Seidel Elimination Method\r\n• Least Square regression\r\n• Linear interpolation\r\n• Cubic spline polynomial\r\n• Newton’s polynomial', NULL, '2022-02-28 15:58:07');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;

-- Dumping structure for table bncc.enrolled_courses
CREATE TABLE IF NOT EXISTS `enrolled_courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` int(11) DEFAULT NULL,
  `b` int(11) DEFAULT NULL,
  `c` int(11) DEFAULT NULL,
  `d` int(11) DEFAULT NULL,
  `e` int(11) DEFAULT NULL,
  `f` int(11) DEFAULT NULL,
  `g` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bncc.enrolled_courses: ~5 rows (approximately)
/*!40000 ALTER TABLE `enrolled_courses` DISABLE KEYS */;
REPLACE INTO `enrolled_courses` (`id`, `username`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `created_at`, `updated_at`) VALUES
	(1, 'naufalalfadli', 1, 1, 1, 1, 1, 1, 1, NULL, '2022-02-28 15:52:46'),
	(2, 'vincent_ganteng', NULL, 1, 1, NULL, NULL, NULL, 1, NULL, '2022-02-28 15:52:14'),
	(3, 'naufaruuu', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-02-25 18:28:15', '2022-02-28 15:54:29'),
	(4, 'moonach_', NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-02-26 12:39:02', '2022-02-28 15:53:38'),
	(5, 'yopiii', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-02-28 14:10:42', '2022-02-28 15:55:06'),
	(6, 'merak_trans', NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-02-28 15:57:49', '2022-02-28 15:58:12');
/*!40000 ALTER TABLE `enrolled_courses` ENABLE KEYS */;

-- Dumping structure for table bncc.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bncc.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table bncc.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bncc.migrations: ~7 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_02_24_163231_create_courses_table', 1),
	(6, '2022_02_25_150129_create_enrolled_courses_table', 1),
	(7, '2022_02_25_163546_create_session_courses_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table bncc.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bncc.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table bncc.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bncc.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table bncc.session_courses
CREATE TABLE IF NOT EXISTS `session_courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` int(11) DEFAULT NULL,
  `b` int(11) DEFAULT NULL,
  `c` int(11) DEFAULT NULL,
  `d` int(11) DEFAULT NULL,
  `e` int(11) DEFAULT NULL,
  `f` int(11) DEFAULT NULL,
  `g` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bncc.session_courses: ~4 rows (approximately)
/*!40000 ALTER TABLE `session_courses` DISABLE KEYS */;
REPLACE INTO `session_courses` (`id`, `username`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `created_at`, `updated_at`) VALUES
	(1, 'naufalalfadli', 14, 0, 15, 12, 0, 0, 30, NULL, '2022-02-28 15:52:46'),
	(2, 'vincent_ganteng', NULL, 3, 37, NULL, NULL, NULL, 14, NULL, '2022-02-28 15:52:18'),
	(3, 'naufaruuu', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-02-25 18:28:15', '2022-02-28 15:54:29'),
	(4, 'moonach_', NULL, NULL, NULL, NULL, NULL, 0, 6, '2022-02-26 12:39:02', '2022-02-28 15:53:38'),
	(5, 'yopiii', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-02-28 14:10:42', '2022-02-28 15:55:06'),
	(6, 'merak_trans', NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-02-28 15:57:49', '2022-02-28 15:58:12');
/*!40000 ALTER TABLE `session_courses` ENABLE KEYS */;

-- Dumping structure for table bncc.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bncc.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `username`, `email`, `password`, `dob`, `address`, `phone`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Ahmad Naufal Abdurrohman Alfadli', 'naufalalfadli', 'naufal@binus.edu', '$2y$10$ITYaLj1BfgM4d9/1UJx9fu1t0XoIirtbr3nZFzpfSCkiG2YIHqmOa', '2022-02-10', 'Cilandak', '+63267673674643', '1646062594.jpg', NULL, '2022-02-25 14:39:09', '2022-02-28 15:36:34'),
	(2, 'Vincent Amogus', 'vincent_ganteng', 'vincentttttttt@rocketmail.com', '$2y$10$pm.0t4kSH5gFwHbdRRg3SuYgbTnNkW8Q.vvzQxvxXv8Jf5axWdgP6', '2022-02-18', 'Malang', '0812345678', '1646063488.jpg', NULL, '2022-02-25 16:48:41', '2022-02-28 15:51:28'),
	(3, 'Naufaruu Arufaduri', 'naufaruuu', 'nopal@hotmail.co.uk', '$2y$10$DL4IKZ1EedHVYi7nOWJ7U.AiXRqS/Qa9Iyd5gZiXDAADcBB6VjJPO', '2022-02-17', 'Tokyo', '27263726723', '1646063659.jpg', NULL, '2022-02-25 18:28:15', '2022-02-28 15:54:19'),
	(4, 'Moona Hoshinova', 'moonach_', 'moona@hololive.id', '$2y$10$MgiBKG0wTdLeCf1/3GrER.RH0habWCmCffNkJFiQdFVAe7KNt4av6', '2022-02-12', 'Jaksell', '9374837873847', '1646063599.jpg', NULL, '2022-02-26 12:39:02', '2022-02-28 15:53:19'),
	(5, 'Airani Iofi', 'yopiii', 'yopii@hololive.tv', '$2y$10$gmHS4HfGaIad//K7ewFHJ.qJ7HLLiNPf4vmlH4KZtxHhReg.ACpt2', '2022-02-11', 'Jember', '26247643433', '1646063700.jpg', NULL, '2022-02-28 14:10:42', '2022-02-28 15:55:00'),
	(6, 'Pavoila Reine', 'merak_trans', 'reine@hololive.tv', '$2y$10$1qwv3oO/UG/KSjyfUEg4TePhENCiRp8CZtvPs8d2ZQ/bRHhdfJAQe', '2022-02-11', 'jakarta sealatann', '3434353554', '1646063868.png', NULL, '2022-02-28 15:57:49', '2022-02-28 15:57:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
