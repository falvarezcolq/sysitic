-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2018 a las 17:18:25
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sysitic_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cleanings`
--

CREATE TABLE `cleanings` (
  `id` int(10) UNSIGNED NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_limp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_id` int(10) UNSIGNED NOT NULL,
  `updated_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `laboratory_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cleanings`
--

INSERT INTO `cleanings` (`id`, `estado`, `fecha_limp`, `created_id`, `updated_id`, `created_at`, `updated_at`, `laboratory_id`) VALUES
(1, 0, '0000-00-00 00:00:00', 3, 3, '2018-10-16 14:57:49', '2018-10-16 14:59:51', 2),
(2, 1, '0000-00-00 00:00:00', 3, NULL, '2018-10-16 15:02:52', '2018-10-16 15:02:52', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipment`
--

CREATE TABLE `equipment` (
  `id` int(10) UNSIGNED NOT NULL,
  `cod_itic` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cod_pc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_id` int(10) UNSIGNED NOT NULL,
  `updated_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `laboratory_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `equipment`
--

INSERT INTO `equipment` (`id`, `cod_itic`, `cod_pc`, `created_id`, `updated_id`, `created_at`, `updated_at`, `laboratory_id`) VALUES
(1, '110', 'P3L1PC01', 2, NULL, '2018-09-18 04:51:28', '2018-09-18 04:51:28', 2),
(2, '012', 'P3L1PC02', 2, NULL, '2018-09-18 05:12:08', '2018-09-18 05:12:08', 2),
(3, '104', 'P3L1PC03', 2, NULL, '2018-09-18 05:13:16', '2018-09-18 05:13:16', 2),
(4, '078', 'P3L1PC04', 2, NULL, '2018-09-18 05:15:52', '2018-09-18 05:15:52', 2),
(5, '081', 'P3L1PC05', 2, NULL, '2018-09-18 05:17:05', '2018-09-18 05:17:05', 2),
(6, '084', 'P3L1PC06', 2, NULL, '2018-09-18 05:17:26', '2018-09-18 05:17:26', 2),
(7, '111', 'P3L1PC07', 2, NULL, '2018-09-18 05:17:48', '2018-09-18 05:17:48', 2),
(8, '187', 'P3L1PC08', 2, NULL, '2018-09-18 05:18:05', '2018-09-18 05:18:05', 2),
(9, '094', 'P3L1PC09', 2, NULL, '2018-09-18 05:18:18', '2018-09-18 05:18:18', 2),
(10, '024', 'P3L1PC10', 2, NULL, '2018-09-18 05:18:40', '2018-09-18 05:18:40', 2),
(11, '090', 'P3L1PC11', 2, NULL, '2018-09-18 05:21:45', '2018-09-18 05:21:45', 2),
(12, '088', 'P3L1PC12', 2, NULL, '2018-09-18 05:21:59', '2018-09-18 05:21:59', 2),
(13, '101', 'P3L1PC13', 2, NULL, '2018-09-18 05:22:13', '2018-09-18 05:22:13', 2),
(14, '077', 'P3L1PC14', 2, NULL, '2018-09-18 05:22:25', '2018-09-18 05:22:25', 2),
(15, '103', 'P3L1PC15', 2, NULL, '2018-09-18 05:22:45', '2018-09-18 05:22:45', 2),
(16, '097', 'P3L1PC16', 2, NULL, '2018-09-18 05:22:59', '2018-09-18 05:22:59', 2),
(17, '083', 'P3L1PC17', 2, NULL, '2018-09-18 05:23:10', '2018-09-18 05:23:10', 2),
(18, '185', 'P3L1PC18', 2, NULL, '2018-09-18 05:24:11', '2018-09-18 05:24:11', 2),
(19, '011', 'P3L1PC19', 2, NULL, '2018-09-18 05:24:23', '2018-09-18 05:24:23', 2),
(20, '014', 'P3L1PC20', 2, NULL, '2018-09-18 05:24:32', '2018-09-18 05:24:32', 2),
(21, '095', 'P3L1PC21', 2, NULL, '2018-09-18 05:24:45', '2018-09-18 05:24:45', 2),
(22, '108', 'P3L1PC22', 2, NULL, '2018-09-18 05:25:04', '2018-09-18 05:25:04', 2),
(23, '100', 'P3L1PC23', 2, NULL, '2018-09-18 05:25:30', '2018-09-18 05:25:30', 2),
(24, '099', 'P3L1PC24', 2, NULL, '2018-09-18 05:25:47', '2018-09-18 05:25:47', 2),
(25, '092', 'P3L1PC25', 2, NULL, '2018-09-18 05:25:58', '2018-09-18 05:25:58', 2),
(26, '102', 'P3L1PC26', 2, NULL, '2018-09-18 05:26:08', '2018-09-18 05:26:08', 2),
(27, '206', 'P3L1PC27', 2, NULL, '2018-09-18 05:26:43', '2018-09-18 05:26:43', 2),
(28, '086', 'P3L1PC28', 2, NULL, '2018-09-18 05:26:53', '2018-09-18 05:26:53', 2),
(29, '087', 'P3L1PC29', 2, NULL, '2018-09-18 05:27:07', '2018-09-18 05:27:07', 2),
(30, '008', 'P3L1PC30', 2, NULL, '2018-09-18 05:27:25', '2018-09-18 05:27:25', 2),
(31, '105', 'P3L1PC31', 2, NULL, '2018-09-18 05:27:34', '2018-09-18 05:27:34', 2),
(32, '107', 'P3L1PC32', 2, NULL, '2018-09-18 05:27:56', '2018-09-18 05:27:56', 2),
(33, '018', 'P3L1PC33', 2, NULL, '2018-09-18 05:32:36', '2018-09-18 05:32:36', 2),
(34, '082', 'P3L1PC34', 2, NULL, '2018-09-18 05:32:48', '2018-09-18 05:32:48', 2),
(35, '156', 'P3L2PC03', 2, NULL, '2018-09-18 05:39:57', '2018-09-18 05:39:57', 3),
(36, '153', 'P3L2PC04', 2, NULL, '2018-09-18 05:40:13', '2018-09-18 05:40:13', 3),
(37, '152', 'P3L2PC05', 2, NULL, '2018-09-18 05:40:25', '2018-09-18 05:40:25', 3),
(38, '151', 'P3L2PC06', 2, NULL, '2018-09-18 05:40:36', '2018-09-18 05:40:36', 3),
(39, '150', 'P3L2PC07', 2, NULL, '2018-09-18 05:40:47', '2018-09-18 05:40:47', 3),
(40, '149', 'P3L2PC08', 2, NULL, '2018-09-18 05:40:57', '2018-09-18 05:40:57', 3),
(41, '148', 'P3L2PC09', 2, NULL, '2018-09-18 05:41:13', '2018-09-18 05:46:39', 3),
(42, '144', 'P3L2PC10', 2, NULL, '2018-09-18 05:41:30', '2018-09-18 05:41:30', 3),
(43, '146', 'P3L2PC12', 2, NULL, '2018-09-18 05:42:13', '2018-09-18 05:42:13', 3),
(44, '147', 'P3L2PC13', 2, NULL, '2018-09-18 05:47:11', '2018-09-18 05:47:11', 3),
(45, '145', 'P3L2PC11', 2, NULL, '2018-09-18 05:47:27', '2018-09-18 05:47:27', 3),
(46, '133', 'P3L2PC14', 2, NULL, '2018-09-18 05:47:44', '2018-09-18 05:47:44', 3),
(47, '134', 'P3L2PC15', 2, NULL, '2018-09-18 05:47:55', '2018-09-18 05:47:55', 3),
(48, '135', 'P3L2PC16', 2, NULL, '2018-09-18 05:48:07', '2018-09-18 05:48:07', 3),
(49, '136', 'P3L2PC17', 2, NULL, '2018-09-18 05:48:16', '2018-09-18 05:48:16', 3),
(50, '137', 'P3L2PC18', 2, NULL, '2018-09-18 05:48:39', '2018-09-18 05:48:39', 3),
(51, '138', 'P3L2PC19', 2, NULL, '2018-09-18 05:48:48', '2018-09-18 05:48:48', 3),
(53, '139', 'P3L2PC20', 2, NULL, '2018-09-18 05:50:19', '2018-09-18 05:50:19', 3),
(54, '140', 'P3L2PC21', 2, NULL, '2018-09-18 05:50:31', '2018-09-18 05:50:31', 3),
(55, '013', 'P3L2PC22', 2, NULL, '2018-09-18 05:50:46', '2018-09-18 05:50:46', 3),
(56, '143', 'P3L2PC23', 2, NULL, '2018-09-18 05:51:01', '2018-09-18 05:51:01', 3),
(57, '141', 'P3L2PC25', 2, NULL, '2018-09-18 05:51:28', '2018-09-18 05:51:28', 3),
(58, '158', 'P3L2PC01', 2, NULL, '2018-09-18 05:52:11', '2018-09-18 05:52:11', 3),
(59, '070', 'P3L3BPC27', 2, NULL, '2018-09-19 03:58:18', '2018-09-19 03:58:18', 5),
(60, '065', 'P3L3BPC29', 2, NULL, '2018-09-19 03:58:40', '2018-09-19 03:58:40', 5),
(61, '052', 'P3L3BPC30', 2, NULL, '2018-09-19 03:59:38', '2018-09-19 03:59:38', 5),
(62, '058', 'P3L3BPC31', 2, NULL, '2018-09-19 04:01:02', '2018-09-19 04:01:02', 5),
(63, '054', 'P3L3BPC32', 2, NULL, '2018-09-19 04:01:18', '2018-09-19 04:01:18', 5),
(64, '051', 'P3L3BPC33', 2, NULL, '2018-09-19 04:01:32', '2018-09-19 04:01:32', 5),
(65, '205', 'P3L3BPC34', 2, NULL, '2018-09-19 04:02:03', '2018-09-19 04:02:03', 5),
(66, '053', 'P3L3BPC35', 2, NULL, '2018-09-19 04:02:49', '2018-09-19 04:02:49', 5),
(67, '034', 'P3L3BPC36', 2, NULL, '2018-09-19 04:03:17', '2018-09-19 04:03:17', 5),
(68, '037', 'P3L3BPC37', 2, NULL, '2018-09-19 04:03:29', '2018-09-19 04:03:29', 5),
(69, '044', 'P3L3BPC38', 2, NULL, '2018-09-19 04:03:42', '2018-09-19 04:03:42', 5),
(70, '071', 'P3L3BPC39', 2, NULL, '2018-09-19 04:03:56', '2018-09-19 04:03:56', 5),
(71, '057', 'P3L3BPC41', 2, NULL, '2018-09-19 04:04:22', '2018-09-19 04:04:22', 5),
(72, '063', 'P3L3BPC42', 2, NULL, '2018-09-19 04:04:39', '2018-09-19 04:04:39', 5),
(73, '009', 'P3L3BPC43', 2, NULL, '2018-09-19 04:04:58', '2018-09-19 04:04:58', 5),
(75, '043', 'P3L3BPC01', 2, NULL, '2018-09-19 04:13:55', '2018-09-19 04:13:55', 5),
(76, '035', 'P3L3BPC02', 2, NULL, '2018-09-19 04:14:15', '2018-09-19 04:14:15', 5),
(77, '059', 'P3L3BPC03', 2, NULL, '2018-09-19 04:14:28', '2018-09-19 04:14:28', 5),
(78, '046', 'P3L3BPC04', 2, NULL, '2018-09-19 04:14:41', '2018-09-19 04:14:41', 5),
(79, '062', 'P3L3BPC05', 2, NULL, '2018-09-19 04:14:54', '2018-09-19 04:14:54', 5),
(80, '131', 'P3L3BPC06', 2, NULL, '2018-09-19 04:15:11', '2018-09-19 04:15:11', 5),
(81, '045', 'P3L3BPC07', 2, NULL, '2018-09-19 04:15:23', '2018-09-19 04:15:23', 5),
(82, '067', 'P3L3BPC08', 2, NULL, '2018-09-19 04:15:41', '2018-09-19 04:15:41', 5),
(83, '068', 'P3L3BPC09', 2, NULL, '2018-09-19 04:15:50', '2018-09-19 04:15:50', 5),
(84, '056', 'P3L3BPC10', 2, NULL, '2018-09-19 04:16:02', '2018-09-19 04:16:02', 5),
(85, '073', 'P3L3BPC11', 2, NULL, '2018-09-19 04:16:12', '2018-09-19 04:16:12', 5),
(86, '072', 'P3L3BPC12', 2, NULL, '2018-09-19 04:16:24', '2018-09-19 04:16:24', 5),
(87, '049', 'P3L3BPC13', 2, NULL, '2018-09-19 04:16:36', '2018-09-19 04:16:36', 5),
(88, '074', 'P3L3BPC14', 2, NULL, '2018-09-19 04:16:46', '2018-09-19 04:16:46', 5),
(89, '186', 'P3L3BPC15', 2, NULL, '2018-09-19 04:17:06', '2018-09-19 04:17:06', 5),
(90, '050', 'P3L3BPC16', 2, NULL, '2018-09-19 04:17:17', '2018-09-19 04:17:17', 5),
(91, '040', 'P3L3BPC17', 2, NULL, '2018-09-19 04:17:31', '2018-09-19 04:17:31', 5),
(92, '042', 'P3L3BPC18', 2, NULL, '2018-09-19 04:17:41', '2018-09-19 04:17:41', 5),
(93, '015', 'P3L3BPC19', 2, NULL, '2018-09-19 04:17:55', '2018-09-19 04:17:55', 5),
(94, '066', 'P3L3BPC20', 2, NULL, '2018-09-19 04:18:06', '2018-09-19 04:18:06', 5),
(95, '069', 'P3L3BPC21', 2, NULL, '2018-09-19 04:18:24', '2018-09-19 04:18:24', 5),
(96, '048', 'P3L3BPC22', 2, NULL, '2018-09-19 04:18:34', '2018-09-19 04:18:34', 5),
(97, '060', 'P3L3BPC23', 2, NULL, '2018-09-19 04:18:41', '2018-09-19 04:18:41', 5),
(98, '055', 'P3L3BPC24', 2, NULL, '2018-09-19 04:18:50', '2018-09-19 04:18:50', 5),
(99, '041', 'P3L3BPC25', 2, NULL, '2018-09-19 04:19:03', '2018-09-19 04:19:03', 5),
(100, '064', 'P3L3BPC26', 2, NULL, '2018-09-19 04:19:15', '2018-09-19 04:19:15', 5),
(101, '027', 'P3L3APC01', 2, NULL, '2018-09-19 04:20:20', '2018-09-19 04:20:20', 5),
(102, '075', 'P3L3APC02', 2, NULL, '2018-09-19 04:20:33', '2018-09-19 04:20:33', 5),
(103, '114', 'P3L3APC03', 2, NULL, '2018-09-19 04:20:41', '2018-09-19 04:20:41', 5),
(104, '112', 'P3L3APC04', 2, NULL, '2018-09-19 04:20:50', '2018-09-19 04:20:50', 5),
(105, '127', 'P3L3APC05', 2, NULL, '2018-09-19 04:21:02', '2018-09-19 04:21:02', 5),
(106, '122', 'P3L3APC06', 2, NULL, '2018-09-19 04:21:11', '2018-09-19 04:21:11', 5),
(107, '021', 'P3L3APC08', 2, NULL, '2018-09-19 04:26:14', '2018-09-19 04:26:14', 5),
(108, '120', 'P3L3APC09', 2, NULL, '2018-09-19 04:26:25', '2018-09-19 04:26:25', 5),
(109, '115', 'P3L3APC10', 2, NULL, '2018-09-19 04:26:35', '2018-09-19 04:26:35', 5),
(110, '123', 'P3L3APC11', 2, NULL, '2018-09-19 04:26:47', '2018-09-19 04:26:47', 5),
(111, '125', 'P3L3APC12', 2, NULL, '2018-09-19 04:26:58', '2018-09-19 04:26:58', 5),
(112, '126', 'P3L3APC13', 2, NULL, '2018-09-19 04:27:10', '2018-09-19 04:27:10', 5),
(113, '023', 'P3L3APC14', 2, NULL, '2018-09-19 04:27:24', '2018-09-19 04:27:24', 5),
(114, '188', 'P3L3APC15', 2, NULL, '2018-09-19 04:27:58', '2018-09-19 04:27:58', 5),
(115, '117', 'P3L3APC16', 2, NULL, '2018-09-19 04:28:08', '2018-09-19 04:28:08', 5),
(116, '119', 'P3L3APC17', 2, NULL, '2018-09-19 04:28:15', '2018-09-19 04:28:15', 5),
(117, '118', 'P3L3APC18', 2, NULL, '2018-09-19 04:28:25', '2018-09-19 04:28:25', 5),
(118, '113', 'P3L3APC19', 2, NULL, '2018-09-19 04:28:38', '2018-09-19 04:28:38', 5),
(119, '129', 'P3L3APC20', 2, NULL, '2018-09-19 04:28:57', '2018-09-19 04:28:57', 5),
(120, '132', 'P3L3APC21', 2, NULL, '2018-09-19 04:29:09', '2018-09-19 04:29:09', 5),
(121, '116', 'P3L3APC22', 2, NULL, '2018-09-19 04:29:19', '2018-09-19 04:29:19', 5),
(122, '124', 'P3L3APC23', 2, NULL, '2018-09-19 04:29:28', '2018-09-19 04:29:28', 5),
(123, '128', 'P3L3APC24', 2, NULL, '2018-09-19 04:29:40', '2018-09-19 04:29:40', 5),
(124, '121', 'P3L3APC25', 2, NULL, '2018-09-19 04:29:50', '2018-09-19 04:29:50', 5),
(125, '130', 'P3L3APC26', 2, NULL, '2018-09-19 04:30:07', '2018-09-19 04:30:07', 5),
(126, '004', 'P3L3APC27', 2, NULL, '2018-09-19 04:30:19', '2018-09-19 04:30:19', 5),
(127, '047', 'P3L3APC28', 2, NULL, '2018-09-19 04:30:27', '2018-09-19 04:30:27', 5),
(128, '180', 'P3L3APC29', 2, NULL, '2018-09-19 04:30:38', '2018-09-19 04:30:38', 5),
(129, '010', 'P3L3APC31', 2, NULL, '2018-09-19 04:31:09', '2018-09-19 04:31:09', 5),
(130, '182', 'P3L3APC32', 2, NULL, '2018-09-19 04:31:17', '2018-09-19 04:31:17', 5),
(131, '019', 'P3L3APC33', 2, NULL, '2018-09-19 04:31:33', '2018-09-19 04:31:33', 5),
(132, '003', 'P3L3APC34', 2, NULL, '2018-09-19 04:31:41', '2018-09-19 04:31:41', 5),
(133, '096', 'P3L3APC36', 2, NULL, '2018-09-19 04:31:52', '2018-09-19 04:31:52', 5),
(134, '030', 'P3L4PC01', 2, NULL, '2018-09-19 04:33:02', '2018-09-19 04:33:02', 4),
(135, '017', 'P3L4PC02', 2, NULL, '2018-09-19 04:33:12', '2018-09-19 04:33:12', 4),
(136, '171', 'P3L4PC03', 2, NULL, '2018-09-19 04:33:22', '2018-09-19 04:33:22', 4),
(137, '170', 'P3L4PC04', 2, NULL, '2018-09-19 04:33:31', '2018-09-19 04:33:31', 4),
(138, '162', 'P3L4PC05', 2, NULL, '2018-09-19 04:33:40', '2018-09-19 04:33:40', 4),
(139, '161', 'P3L4PC06', 2, NULL, '2018-09-19 04:33:47', '2018-09-19 04:33:47', 4),
(140, '160', 'P3L4PC07', 2, NULL, '2018-09-19 04:33:57', '2018-09-19 04:33:57', 4),
(141, '159', 'P3L4PC08', 2, NULL, '2018-09-19 04:34:12', '2018-09-19 04:34:12', 4),
(142, '169', 'P3L4PC09', 2, NULL, '2018-09-19 04:34:29', '2018-09-19 04:34:29', 4),
(143, '172', 'P3L4PC10', 2, NULL, '2018-09-19 04:34:37', '2018-09-19 04:34:37', 4),
(144, '025', 'P3L4PC11', 2, NULL, '2018-09-19 04:34:46', '2018-09-19 04:34:46', 4),
(145, '174', 'P3L4PC12', 2, NULL, '2018-09-19 04:34:55', '2018-09-19 04:34:55', 4),
(146, '016', 'P3L4PC14', 2, NULL, '2018-09-19 04:35:07', '2018-09-19 04:35:07', 4),
(147, '164', 'P3L4PC15', 2, NULL, '2018-09-19 04:35:20', '2018-09-19 04:35:20', 4),
(148, '163', 'P3L4PC16', 2, NULL, '2018-09-19 04:35:32', '2018-09-19 04:49:37', 4),
(149, '173', 'P3L4PC20', 2, NULL, '2018-09-19 04:35:45', '2018-09-19 04:35:45', 4),
(150, '168no', 'P3L4PC21', 2, 2, '2018-09-19 04:35:57', '2018-10-16 14:56:16', 4),
(151, '167', 'P3L4PC23', 2, NULL, '2018-09-19 04:36:19', '2018-09-19 04:36:19', 4),
(152, '166', 'P3L4PC24', 2, NULL, '2018-09-19 04:36:29', '2018-09-19 04:36:29', 4),
(153, '181', 'P3L4PC17', 2, NULL, '2018-09-19 04:37:10', '2018-09-19 04:37:10', 4),
(154, '176', 'P3L4PC18', 2, NULL, '2018-09-19 04:37:19', '2018-09-19 04:37:19', 4),
(155, '179', 'P3L4PC19', 2, NULL, '2018-09-19 04:37:29', '2018-09-19 04:37:29', 4),
(156, '168', 'P3L4PC22', 2, NULL, '2018-09-19 04:47:33', '2018-09-19 04:47:33', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipment_problems`
--

CREATE TABLE `equipment_problems` (
  `id` int(10) UNSIGNED NOT NULL,
  `equipment_id` int(10) UNSIGNED NOT NULL,
  `standar_problem_id` int(10) UNSIGNED NOT NULL,
  `user_id_report` int(10) UNSIGNED NOT NULL,
  `timereport` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `solution_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id_solution` int(10) UNSIGNED DEFAULT NULL,
  `timesolution` timestamp NULL DEFAULT NULL,
  `created_id` int(10) UNSIGNED NOT NULL,
  `updated_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `equipment_problems`
--

INSERT INTO `equipment_problems` (`id`, `equipment_id`, `standar_problem_id`, `user_id_report`, `timereport`, `solution_id`, `user_id_solution`, `timesolution`, `created_id`, `updated_id`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 3, '2018-10-16 14:59:20', NULL, NULL, NULL, 3, NULL, '2018-10-16 14:59:20', '2018-10-16 14:59:20'),
(2, 7, 14, 3, '2018-10-16 15:12:42', NULL, NULL, NULL, 3, NULL, '2018-10-16 15:12:42', '2018-10-16 15:12:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratories`
--

CREATE TABLE `laboratories` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_lab` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_id` int(10) UNSIGNED NOT NULL,
  `updated_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `people_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `laboratories`
--

INSERT INTO `laboratories` (`id`, `codigo`, `nombre_lab`, `ubicacion`, `created_id`, `updated_id`, `created_at`, `updated_at`, `people_id`) VALUES
(1, 'Sin laboratorio', 'Sin asignar', '---', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'P3L1', 'LABORATORIO DE BASE DE DATOS', 'PISO 3', 2, NULL, '2018-09-18 04:46:14', '2018-09-18 04:46:14', 2),
(3, 'P3L2', 'LABORATORIO DE INGLES', 'PISO 3', 2, NULL, '2018-09-18 04:47:02', '2018-09-18 04:47:02', 2),
(4, 'P3L4', 'LABORATORIO DE TELEMATICA', 'PISO 3', 2, NULL, '2018-09-18 04:47:35', '2018-09-18 04:47:35', 2),
(5, 'P3L3', 'LABORATORIO BASICO', 'PISO 3', 2, NULL, '2018-09-18 04:48:10', '2018-09-18 04:48:10', 2),
(6, 'P4L1', 'LABORATORIO DE MAQUINAS VIRTUALES', 'PISO 4', 2, NULL, '2018-09-18 04:48:33', '2018-09-18 04:48:33', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `operation` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `old_value` text COLLATE utf8_unicode_ci,
  `new_value` text COLLATE utf8_unicode_ci,
  `user` text COLLATE utf8_unicode_ci NOT NULL,
  `table_before` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id`, `table_name`, `operation`, `old_value`, `new_value`, `user`, `table_before`, `created_at`, `updated_at`) VALUES
(1, 'standar_problems', 'delete', '{\n    \"id\": 25,\n    \"descripcion\": \"Nuevo problema\",\n    \"created_id\": 2,\n    \"updated_id\": null,\n    \"created_at\": \"2018-10-16 10:38:47\",\n    \"updated_at\": \"2018-10-16 10:38:47\",\n    \"problem_type_id\": 1\n}', NULL, '2 Reynaldo Escobar', NULL, '2018-10-16 14:45:46', '2018-10-16 14:45:46'),
(2, 'standar_problems', 'delete', '{\n    \"id\": 26,\n    \"descripcion\": \"Nuevo problema\",\n    \"created_id\": 2,\n    \"updated_id\": null,\n    \"created_at\": \"2018-10-16 10:38:51\",\n    \"updated_at\": \"2018-10-16 10:38:51\",\n    \"problem_type_id\": 1\n}', NULL, '2 Reynaldo Escobar', NULL, '2018-10-16 14:45:54', '2018-10-16 14:45:54'),
(3, 'standar_problems', 'delete', '{\n    \"id\": 27,\n    \"descripcion\": \"fff\",\n    \"created_id\": 2,\n    \"updated_id\": null,\n    \"created_at\": \"2018-10-16 10:50:06\",\n    \"updated_at\": \"2018-10-16 10:50:06\",\n    \"problem_type_id\": 2\n}', NULL, '2 Reynaldo Escobar', NULL, '2018-10-16 14:54:47', '2018-10-16 14:54:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2018_05_04_205711_create_people_table', 1),
('2018_05_04_205720_create_users_table', 1),
('2018_05_04_205920_create_laboratories_table', 1),
('2018_05_04_205950_create_cleanings_table', 1),
('2018_05_04_210001_create_observations_table', 1),
('2018_05_04_210009_create_equipment_table', 1),
('2018_05_04_210012_create_problem_types_table', 1),
('2018_05_04_210015_create_standar_problems_table', 1),
('2018_05_04_210050_create_solutions_table', 1),
('2018_05_16_021635_create_equipment_problems_table', 1),
('2018_09_25_210731_create_logs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observations`
--

CREATE TABLE `observations` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_obs` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_id` int(10) UNSIGNED NOT NULL,
  `updated_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `laboratory_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `observations`
--

INSERT INTO `observations` (`id`, `descripcion`, `fecha_obs`, `created_id`, `updated_id`, `created_at`, `updated_at`, `laboratory_id`) VALUES
(1, 'Este reporte se realiza como primer ejemplo de prueba , texto editado', '0000-00-00 00:00:00', 3, 3, '2018-10-16 14:58:23', '2018-10-16 15:00:06', 2),
(2, 'segundo reporte editado', '0000-00-00 00:00:00', 3, 2, '2018-10-16 15:02:59', '2018-10-16 15:17:35', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `people`
--

CREATE TABLE `people` (
  `id` int(10) UNSIGNED NOT NULL,
  `ci` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `paterno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `materno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `genero` tinyint(1) NOT NULL,
  `fecha_nac` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telfijo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `telcelular` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profesion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_id` int(11) NOT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`id`, `ci`, `nombre`, `paterno`, `materno`, `genero`, `fecha_nac`, `email`, `telfijo`, `telcelular`, `direccion`, `profesion`, `created_id`, `updated_id`, `created_at`, `updated_at`) VALUES
(1, '', 'Sin nombre', '', '', 1, '1990-12-12 08:04:04', 'default@itic.com', '', '', '', '', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '123456', 'Reynaldo', 'Escobar', 'Ibañes', 1, '1990-12-12 08:04:04', 'reynaldoei@gmail.com', '-', '71288569', 'calle 3 los Alamos Chasquipampa', 'Lic. Informatica', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '7031954', 'Fernando', 'Alvarez', 'Colque', 1, '1991-12-09 08:04:04', 'falvarezcolq@gmail.com', '-', '75837740', 'El Alto, z\\Nuevos horizontes I , Calle v-3 # 557', 'Estudiante Informatica 9 sem', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problem_types`
--

CREATE TABLE `problem_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_id` int(10) UNSIGNED NOT NULL,
  `updated_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `problem_types`
--

INSERT INTO `problem_types` (`id`, `name`, `created_id`, `updated_id`, `created_at`, `updated_at`) VALUES
(1, 'Hardware', 2, NULL, '2018-09-18 02:58:15', '2018-09-18 02:58:15'),
(2, 'Software', 2, NULL, '2018-09-18 02:58:15', '2018-09-18 02:58:15'),
(3, 'Verificacion', 2, NULL, '2018-09-18 02:58:15', '2018-09-18 02:58:15'),
(4, 'Energía eléctrica', 2, NULL, '2018-09-18 02:58:15', '2018-09-18 02:58:15'),
(5, 'Revision', 2, NULL, '2018-09-18 02:58:15', '2018-09-18 02:58:15'),
(6, 'Otros', 2, NULL, '2018-09-18 02:58:15', '2018-09-18 02:58:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solutions`
--

CREATE TABLE `solutions` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created_id` int(10) UNSIGNED NOT NULL,
  `updated_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `standar_problem_id` int(10) UNSIGNED NOT NULL,
  `problem_type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `solutions`
--

INSERT INTO `solutions` (`id`, `descripcion`, `created_id`, `updated_id`, `created_at`, `updated_at`, `standar_problem_id`, `problem_type_id`) VALUES
(1, 'LUBRICACION DE COOLER', 2, NULL, '2018-09-20 04:05:02', '2018-09-20 04:05:02', 1, 1),
(2, 'ASEGURAR CABLE PARA QUE NO TOQUE PALETAS DEL COOLER', 2, NULL, '2018-09-20 04:06:52', '2018-09-20 04:06:52', 1, 1),
(4, 'CAMBIO DE COOLER', 2, NULL, '2018-09-20 04:07:42', '2018-09-20 04:07:42', 1, 1),
(5, 'REINSTALACION ', 2, NULL, '2018-09-20 04:26:45', '2018-09-20 04:26:45', 2, 2),
(6, 'REINSTALACION', 2, NULL, '2018-09-20 04:31:20', '2018-09-20 04:31:20', 3, 2),
(7, 'FORMATEO DE DISCO DURO', 2, NULL, '2018-09-20 04:32:00', '2018-09-20 04:32:00', 3, 2),
(8, 'FORMATEO A BAJO NIVEL DE DISCO DURO', 2, NULL, '2018-09-20 04:32:10', '2018-09-20 04:32:10', 3, 2),
(9, 'CAMBIO  DE DISCO DURO', 2, NULL, '2018-09-20 04:32:54', '2018-09-20 04:32:54', 3, 2),
(10, 'ASEGURAMIENTO DE CABLE DE VIDEO DEL PC', 2, NULL, '2018-09-20 04:36:36', '2018-09-20 04:36:36', 4, 1),
(11, 'CAMBIO DE CABLE DE PODER', 2, NULL, '2018-09-20 04:37:14', '2018-09-20 04:37:14', 4, 1),
(12, 'AJUSTE DE MEMORIA', 2, NULL, '2018-09-20 04:37:24', '2018-09-20 04:37:24', 4, 1),
(13, 'AJUSTE DE TARJETA DE VIDEO', 2, NULL, '2018-09-20 04:37:37', '2018-09-20 04:37:37', 4, 1),
(14, 'REINSTALACION', 2, NULL, '2018-09-20 05:44:09', '2018-09-20 05:44:09', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `standar_problems`
--

CREATE TABLE `standar_problems` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created_id` int(10) UNSIGNED NOT NULL,
  `updated_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `problem_type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `standar_problems`
--

INSERT INTO `standar_problems` (`id`, `descripcion`, `created_id`, `updated_id`, `created_at`, `updated_at`, `problem_type_id`) VALUES
(1, 'RUIDO DE COOLER AL ENCENDER EL PC', 2, NULL, '2018-09-20 04:04:21', '2018-09-20 04:04:21', 1),
(2, 'PC SIGUE ENCENDIDO LUEGO DE APAGARLA', 2, NULL, '2018-09-20 04:26:12', '2018-09-20 04:26:12', 2),
(3, 'PC SE CUELGA AL CARGAR EL S.O.', 2, NULL, '2018-09-20 04:30:31', '2018-09-20 04:30:31', 1),
(4, 'PANTALLA NEGRA', 2, NULL, '2018-09-20 04:35:18', '2018-09-20 04:35:18', 1),
(5, 'PANTALLA NEGRA', 2, NULL, '2018-09-20 04:37:49', '2018-09-20 04:37:49', 1),
(6, 'NO INGRESA AL S.O.', 2, NULL, '2018-09-20 04:52:10', '2018-09-20 04:52:10', 2),
(7, 'NO INGRESA A RED JACK  MAL ESTADO', 2, NULL, '2018-09-20 04:59:54', '2018-09-20 04:59:54', 1),
(8, 'PC NO RECONOCE EL TECLADO ', 2, NULL, '2018-09-20 05:01:01', '2018-09-20 05:01:01', 1),
(9, 'PC SIN ACCESO A LA RED , RJ CON LENGUETA  ROTA', 2, NULL, '2018-09-20 05:02:52', '2018-09-20 05:02:52', 1),
(10, 'PC NO ENCIENDE, CABLE DE ENERGIA SUELTO', 2, NULL, '2018-09-20 05:03:41', '2018-09-20 05:03:41', 1),
(11, 'PC INICIA , NO RECONOCE TECLADO NI MOUSE', 2, NULL, '2018-09-20 05:04:29', '2018-09-20 05:04:29', 1),
(12, 'PC INICIA ,ERROR BOOT FAILURE', 2, NULL, '2018-09-20 05:04:54', '2018-09-20 05:04:54', 2),
(13, 'S.O. ARRANQUE MUY LENTO', 2, NULL, '2018-09-20 05:07:09', '2018-09-20 05:07:09', 2),
(14, 'MAQUINA VIRTUAL NO ARRANCA', 2, NULL, '2018-09-20 05:08:53', '2018-09-20 05:08:53', 2),
(15, 'NO ACCESA A LA RED INTERNET', 2, NULL, '2018-09-20 05:10:15', '2018-09-20 05:10:15', 2),
(16, 'NO ACCESA A LA RED INTERNET', 2, NULL, '2018-09-20 05:10:19', '2018-09-20 05:10:19', 1),
(17, 'FECHA Y HORA DESACTUALIZADAS', 2, NULL, '2018-09-20 05:12:00', '2018-09-20 05:12:00', 2),
(18, 'NO CARGA S.O. AL 1ER INTENTO', 2, NULL, '2018-09-20 05:13:06', '2018-09-20 05:13:06', 2),
(19, 'NO CARGA S.O. AL 2DO INTENTO', 2, NULL, '2018-09-20 05:13:17', '2018-09-20 05:13:17', 2),
(20, 'NO CARGA S.O. AL 3ER INTENTO', 2, NULL, '2018-09-20 05:13:33', '2018-09-20 05:13:33', 2),
(21, 'NO RECONOCE MOUSE', 2, NULL, '2018-09-20 05:15:40', '2018-09-20 05:15:40', 1),
(22, 'NO RECONOCE TECLADO', 2, NULL, '2018-09-20 05:15:46', '2018-09-20 05:15:46', 1),
(23, 'NO RECONOCE  PUERTO USB (PARTE TRASERA)', 2, NULL, '2018-09-20 05:16:31', '2018-09-20 05:16:31', 1),
(24, 'NO RECONOCE  PUERTO USB (PARTE FRONTAL)', 2, NULL, '2018-09-20 05:16:37', '2018-09-20 05:16:37', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `cargo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `people_id` int(10) UNSIGNED NOT NULL,
  `created_id` int(10) UNSIGNED NOT NULL,
  `updated_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `cargo`, `user`, `password`, `is_admin`, `active`, `people_id`, `created_id`, `updated_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Técnico', 'rey2018', '$2y$10$ELfLgd74v4iheeSp1k7hNOnulEoZ8N6o.qVk9RbJNzvSEfpm2a8v6', 1, 1, 2, 1, NULL, '1vGSFqaf0CA6hodLCnGhr5YpHmrA5tGoGJOZjm1NF09YrNdlw68ZocA0n2GX', '0000-00-00 00:00:00', '2018-10-16 15:17:45'),
(3, 'Auxiliar de servicio ITIC', 'fer', '$2y$10$pWiHWOJq1OJw7KOtDBla6uPpHueGh9mHUA79AS0dRALcjge05t1ZC', 0, 1, 3, 2, NULL, 'treN9Kh09fnh8hZ5FzTOxZs8xtJ7IDa6mbIhdM354EueSs1Vw4GqJA6CySUC', '2018-10-16 14:04:34', '2018-10-16 15:13:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cleanings`
--
ALTER TABLE `cleanings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cleanings_laboratory_id_foreign` (`laboratory_id`),
  ADD KEY `cleanings_created_id_foreign` (`created_id`),
  ADD KEY `cleanings_updated_id_foreign` (`updated_id`);

--
-- Indices de la tabla `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `equipment_cod_itic_unique` (`cod_itic`),
  ADD UNIQUE KEY `equipment_cod_pc_unique` (`cod_pc`),
  ADD KEY `equipment_laboratory_id_foreign` (`laboratory_id`),
  ADD KEY `equipment_created_id_foreign` (`created_id`),
  ADD KEY `equipment_updated_id_foreign` (`updated_id`);

--
-- Indices de la tabla `equipment_problems`
--
ALTER TABLE `equipment_problems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_problems_equipment_id_foreign` (`equipment_id`),
  ADD KEY `equipment_problems_standar_problem_id_foreign` (`standar_problem_id`),
  ADD KEY `equipment_problems_user_id_report_foreign` (`user_id_report`),
  ADD KEY `equipment_problems_solution_id_foreign` (`solution_id`),
  ADD KEY `equipment_problems_user_id_solution_foreign` (`user_id_solution`),
  ADD KEY `equipment_problems_created_id_foreign` (`created_id`),
  ADD KEY `equipment_problems_updated_id_foreign` (`updated_id`);

--
-- Indices de la tabla `laboratories`
--
ALTER TABLE `laboratories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `laboratories_codigo_unique` (`codigo`),
  ADD KEY `laboratories_people_id_foreign` (`people_id`),
  ADD KEY `laboratories_created_id_foreign` (`created_id`),
  ADD KEY `laboratories_updated_id_foreign` (`updated_id`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `observations`
--
ALTER TABLE `observations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `observations_laboratory_id_foreign` (`laboratory_id`),
  ADD KEY `observations_created_id_foreign` (`created_id`),
  ADD KEY `observations_updated_id_foreign` (`updated_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `problem_types`
--
ALTER TABLE `problem_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `problem_types_created_id_foreign` (`created_id`),
  ADD KEY `problem_types_updated_id_foreign` (`updated_id`);

--
-- Indices de la tabla `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solutions_standar_problem_id_foreign` (`standar_problem_id`),
  ADD KEY `solutions_problem_type_id_foreign` (`problem_type_id`),
  ADD KEY `solutions_created_id_foreign` (`created_id`),
  ADD KEY `solutions_updated_id_foreign` (`updated_id`);

--
-- Indices de la tabla `standar_problems`
--
ALTER TABLE `standar_problems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `standar_problems_problem_type_id_foreign` (`problem_type_id`),
  ADD KEY `standar_problems_created_id_foreign` (`created_id`),
  ADD KEY `standar_problems_updated_id_foreign` (`updated_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_unique` (`user`),
  ADD UNIQUE KEY `users_people_id_unique` (`people_id`),
  ADD KEY `users_created_id_foreign` (`created_id`),
  ADD KEY `users_updated_id_foreign` (`updated_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cleanings`
--
ALTER TABLE `cleanings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT de la tabla `equipment_problems`
--
ALTER TABLE `equipment_problems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `laboratories`
--
ALTER TABLE `laboratories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `observations`
--
ALTER TABLE `observations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `problem_types`
--
ALTER TABLE `problem_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `standar_problems`
--
ALTER TABLE `standar_problems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cleanings`
--
ALTER TABLE `cleanings`
  ADD CONSTRAINT `cleanings_created_id_foreign` FOREIGN KEY (`created_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `cleanings_laboratory_id_foreign` FOREIGN KEY (`laboratory_id`) REFERENCES `laboratories` (`id`),
  ADD CONSTRAINT `cleanings_updated_id_foreign` FOREIGN KEY (`updated_id`) REFERENCES `people` (`id`);

--
-- Filtros para la tabla `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_created_id_foreign` FOREIGN KEY (`created_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `equipment_laboratory_id_foreign` FOREIGN KEY (`laboratory_id`) REFERENCES `laboratories` (`id`),
  ADD CONSTRAINT `equipment_updated_id_foreign` FOREIGN KEY (`updated_id`) REFERENCES `people` (`id`);

--
-- Filtros para la tabla `equipment_problems`
--
ALTER TABLE `equipment_problems`
  ADD CONSTRAINT `equipment_problems_created_id_foreign` FOREIGN KEY (`created_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `equipment_problems_equipment_id_foreign` FOREIGN KEY (`equipment_id`) REFERENCES `equipment` (`id`),
  ADD CONSTRAINT `equipment_problems_solution_id_foreign` FOREIGN KEY (`solution_id`) REFERENCES `solutions` (`id`),
  ADD CONSTRAINT `equipment_problems_standar_problem_id_foreign` FOREIGN KEY (`standar_problem_id`) REFERENCES `standar_problems` (`id`),
  ADD CONSTRAINT `equipment_problems_updated_id_foreign` FOREIGN KEY (`updated_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `equipment_problems_user_id_report_foreign` FOREIGN KEY (`user_id_report`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `equipment_problems_user_id_solution_foreign` FOREIGN KEY (`user_id_solution`) REFERENCES `people` (`id`);

--
-- Filtros para la tabla `laboratories`
--
ALTER TABLE `laboratories`
  ADD CONSTRAINT `laboratories_created_id_foreign` FOREIGN KEY (`created_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `laboratories_people_id_foreign` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `laboratories_updated_id_foreign` FOREIGN KEY (`updated_id`) REFERENCES `people` (`id`);

--
-- Filtros para la tabla `observations`
--
ALTER TABLE `observations`
  ADD CONSTRAINT `observations_created_id_foreign` FOREIGN KEY (`created_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `observations_laboratory_id_foreign` FOREIGN KEY (`laboratory_id`) REFERENCES `laboratories` (`id`),
  ADD CONSTRAINT `observations_updated_id_foreign` FOREIGN KEY (`updated_id`) REFERENCES `people` (`id`);

--
-- Filtros para la tabla `problem_types`
--
ALTER TABLE `problem_types`
  ADD CONSTRAINT `problem_types_created_id_foreign` FOREIGN KEY (`created_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `problem_types_updated_id_foreign` FOREIGN KEY (`updated_id`) REFERENCES `people` (`id`);

--
-- Filtros para la tabla `solutions`
--
ALTER TABLE `solutions`
  ADD CONSTRAINT `solutions_created_id_foreign` FOREIGN KEY (`created_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `solutions_problem_type_id_foreign` FOREIGN KEY (`problem_type_id`) REFERENCES `problem_types` (`id`),
  ADD CONSTRAINT `solutions_standar_problem_id_foreign` FOREIGN KEY (`standar_problem_id`) REFERENCES `standar_problems` (`id`),
  ADD CONSTRAINT `solutions_updated_id_foreign` FOREIGN KEY (`updated_id`) REFERENCES `people` (`id`);

--
-- Filtros para la tabla `standar_problems`
--
ALTER TABLE `standar_problems`
  ADD CONSTRAINT `standar_problems_created_id_foreign` FOREIGN KEY (`created_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `standar_problems_problem_type_id_foreign` FOREIGN KEY (`problem_type_id`) REFERENCES `problem_types` (`id`),
  ADD CONSTRAINT `standar_problems_updated_id_foreign` FOREIGN KEY (`updated_id`) REFERENCES `people` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_created_id_foreign` FOREIGN KEY (`created_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `users_people_id_foreign` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `users_updated_id_foreign` FOREIGN KEY (`updated_id`) REFERENCES `people` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
