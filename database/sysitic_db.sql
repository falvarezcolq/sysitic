-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2018 a las 01:19:54
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
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `laboratory_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cleanings`
--

INSERT INTO `cleanings` (`id`, `estado`, `fecha_limp`, `created_at`, `updated_at`, `laboratory_id`) VALUES
(1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(5, 0, '1995-02-12 19:01:10', '2018-08-13 04:45:45', '2018-08-13 04:45:45', 1),
(6, 0, '1995-03-12 19:01:10', '2018-08-13 04:45:45', '2018-08-13 04:45:45', 1),
(7, 0, '1995-02-12 19:01:10', '2018-08-13 04:45:45', '2018-08-13 04:45:45', 2),
(8, 0, '1995-03-12 19:01:10', '2018-08-13 04:45:45', '2018-08-13 04:45:45', 2),
(9, 0, '1995-02-12 19:01:10', '2018-08-13 04:45:45', '2018-08-13 04:45:45', 3),
(10, 0, '1995-03-12 19:01:10', '2018-08-13 04:45:45', '2018-08-13 04:45:45', 3),
(11, 0, '1995-02-12 19:01:10', '2018-08-13 04:45:45', '2018-08-13 04:45:45', 4),
(12, 0, '1995-03-12 19:01:10', '2018-08-13 04:45:45', '2018-08-13 04:45:45', 4),
(13, 0, '1995-02-12 19:01:10', '2018-08-13 04:45:45', '2018-08-13 04:45:45', 3),
(14, 0, '1995-03-12 19:01:10', '2018-08-13 04:45:45', '2018-08-13 04:45:45', 3),
(15, 0, '1995-02-12 19:01:10', '2018-08-13 04:45:45', '2018-08-13 04:45:45', 4),
(16, 0, '1995-03-12 19:01:10', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipment`
--

CREATE TABLE `equipment` (
  `id` int(10) UNSIGNED NOT NULL,
  `cod_itic` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cod_pc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `laboratory_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `equipment`
--

INSERT INTO `equipment` (`id`, `cod_itic`, `cod_pc`, `created_at`, `updated_at`, `laboratory_id`) VALUES
(1, '123', 'LASIN - 02', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 1),
(2, '124', 'LASIN - 03', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 1),
(3, '15', 'LASIN - 04', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 1),
(4, '126', 'LASIN - 05', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 1),
(5, '333', 'LBD - 02', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 2),
(6, '334', 'LBD - 03', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 2),
(7, '335', 'LBD - 04', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 2),
(8, '336', 'LBD - 05', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 2),
(9, '773', 'LI - 02', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 3),
(10, '774', 'LI - 03', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 3),
(11, '775', 'LI - 04', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 3),
(12, '776', 'LI - 05', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 3),
(13, '663', 'LB - 02', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 4),
(14, '664', 'LB - 03', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 4),
(15, '665', 'LB - 04', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 4),
(16, '666', 'LB - 05', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 4);

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
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `equipment_problems`
--

INSERT INTO `equipment_problems` (`id`, `equipment_id`, `standar_problem_id`, `user_id_report`, `timereport`, `solution_id`, `user_id_solution`, `timesolution`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2000-12-12 15:11:11', 1, 1, '2000-12-12 15:11:11', '2018-08-13 04:45:48', '2018-08-13 04:45:48'),
(2, 2, 9, 2, '2000-12-12 15:11:11', 1, 1, '2000-12-12 15:11:11', '2018-08-13 04:45:48', '2018-08-13 04:45:48'),
(3, 6, 2, 2, '2000-12-12 15:11:11', 1, 1, '2000-12-12 15:11:11', '2018-08-13 04:45:48', '2018-08-13 04:45:48'),
(4, 2, 8, 1, '2000-12-12 15:11:11', 1, 1, '2000-12-12 15:11:11', '2018-08-13 04:45:48', '2018-08-13 04:45:48'),
(5, 9, 1, 2, '2000-12-12 15:11:11', 1, 1, '2000-12-12 15:11:11', '2018-08-13 04:45:48', '2018-08-13 04:45:48'),
(6, 5, 6, 1, '2000-12-12 15:11:11', NULL, NULL, NULL, '2018-08-13 04:45:48', '2018-08-13 04:45:48'),
(7, 9, 9, 1, '2000-12-12 15:11:11', NULL, NULL, NULL, '2018-08-13 04:45:48', '2018-08-13 04:45:48'),
(8, 1, 8, 1, '2000-12-12 15:11:11', NULL, NULL, NULL, '2018-08-13 04:45:48', '2018-08-13 04:45:48'),
(9, 9, 7, 4, '2000-12-12 15:11:11', NULL, NULL, NULL, '2018-08-13 04:45:48', '2018-08-13 04:45:48'),
(10, 1, 4, 4, '2000-12-12 15:11:11', NULL, NULL, NULL, '2018-08-13 04:45:49', '2018-08-13 04:45:49'),
(11, 9, 5, 3, '2000-12-12 15:11:11', NULL, NULL, NULL, '2018-08-13 04:45:49', '2018-08-13 04:45:49'),
(12, 3, 8, 3, '2000-12-12 15:11:11', NULL, NULL, NULL, '2018-08-13 04:45:49', '2018-08-13 04:45:49'),
(13, 3, 5, 2, '2000-12-12 15:11:11', NULL, NULL, NULL, '2018-08-13 04:45:49', '2018-08-13 04:45:49'),
(14, 1, 1, 1, '2018-08-13 04:49:34', NULL, NULL, NULL, '2018-08-13 04:49:34', '2018-08-13 04:49:34'),
(15, 2, 2, 1, '2018-08-13 04:55:11', NULL, NULL, NULL, '2018-08-13 04:55:11', '2018-08-13 04:55:11'),
(16, 2, 2, 2, '2018-08-13 04:56:20', NULL, NULL, NULL, '2018-08-13 04:56:20', '2018-08-13 04:56:20'),
(17, 1, 1, 1, '2018-08-13 04:57:08', NULL, NULL, NULL, '2018-08-13 04:57:08', '2018-08-13 04:57:08'),
(18, 2, 9, 2, '2018-08-13 04:57:46', 10, 1, '2018-08-13 05:00:42', '2018-08-13 04:57:46', '2018-08-13 05:00:42'),
(19, 1, 10, 1, '2018-08-13 04:58:34', NULL, NULL, NULL, '2018-08-13 04:58:34', '2018-08-13 04:58:34');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `equipment_problems_table`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `equipment_problems_table` (
`id` int(10) unsigned
,`fecha` timestamp
,`laboratory_id` int(10) unsigned
,`laboratory_cod` varchar(15)
,`cod_itic` varchar(10)
,`cod_pc` varchar(15)
,`standar_problem_id` int(10) unsigned
,`descripcion` varchar(300)
,`name` varchar(200)
,`timesolution` timestamp
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratories`
--

CREATE TABLE `laboratories` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_lab` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `people_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `laboratories`
--

INSERT INTO `laboratories` (`id`, `codigo`, `nombre_lab`, `ubicacion`, `created_at`, `updated_at`, `people_id`) VALUES
(1, 'LASIN', 'Laboratorio Superior de Informática', 'Monoblock', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'P3 - L1', 'Laboratorio de Base de datos', 'Edificio de Informática', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'P3 - L2', 'Laboratorio de Ingles', 'Edificio de Informática', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(4, 'P3 - L3', 'Laboratorio Básico', 'Edificio de Informática', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2);

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
('2018_05_16_021635_create_equipment_problems_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observations`
--

CREATE TABLE `observations` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_obs` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `laboratory_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `observations`
--

INSERT INTO `observations` (`id`, `descripcion`, `fecha_obs`, `created_at`, `updated_at`, `laboratory_id`) VALUES
(1, 'Computadoras fuera de lugar', '1995-12-12 15:11:11', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 1),
(2, 'LS6DliZbBRdioaQ0om3T39qVF6TCBwKukveSfiVfTSutR9vCN7', '1995-12-12 15:11:11', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 2),
(3, 'tyslhafZt6tlUyreWO3SyW6upApsfkkbyvgAlHfwjx1QuiB0Rp', '1995-12-12 15:11:11', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 1),
(4, 'B973lASLaPwYvXb6mT6qq5cWpdibFbvapwXuomftlJcapoPVZ9', '1995-12-12 15:11:11', '2018-08-13 04:45:46', '2018-08-13 04:45:46', 3);

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
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`id`, `ci`, `nombre`, `paterno`, `materno`, `genero`, `fecha_nac`, `email`, `telfijo`, `telcelular`, `direccion`, `profesion`, `created_at`, `updated_at`) VALUES
(1, '123456', 'Reynaldo', 'Escobar', 'Rava', 1, '1990-12-12 08:04:04', 'rey@mail.com', '2123456', '76543219', 'SUDlFLeFuvnxdPGysYfs', 'Director Itic', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '123456', 'Fernando', 'Alvarez', 'Alva', 1, '1990-12-12 08:04:04', 'fer@mail.com', '2123456', '76543219', 'X3dLZcs9u5TafdLbkBm3', 'Software developer', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '123456', 'Ximena', 'Palacios', 'Aquino', 0, '1990-12-12 08:04:04', 'Xim@mail.com', '2123456', '76543219', 'xu1MjPfpFictfEJ7qIGO', 'Software developer', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '123456', 'Lizbeth', 'Calle', 'Zaenz', 0, '1990-12-12 08:04:04', 'Lis@mail.com', '2123456', '76543219', 'hmDYXVsptcT3mLhE1aaq', 'Software developer', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '123456', 'German ', 'Huanca', 'Loayza', 1, '1990-12-12 08:04:04', 'ger@mail.com', '2123456', '76543219', 'D35Dbmt4IYI7ntfmTQr0', 'Docente', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problem_types`
--

CREATE TABLE `problem_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `problem_types`
--

INSERT INTO `problem_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'hadware', '2018-08-13 04:45:47', '2018-08-13 04:45:47'),
(2, 'Software', '2018-08-13 04:45:47', '2018-08-13 04:45:47'),
(3, 'Verificacion', '2018-08-13 04:45:47', '2018-08-13 04:45:47'),
(4, 'Energía eléctrica', '2018-08-13 04:45:47', '2018-08-13 04:45:47'),
(5, 'Revision', '2018-08-13 04:45:47', '2018-08-13 04:45:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solutions`
--

CREATE TABLE `solutions` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `standar_problem_id` int(10) UNSIGNED NOT NULL,
  `problem_type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `solutions`
--

INSERT INTO `solutions` (`id`, `descripcion`, `created_at`, `updated_at`, `standar_problem_id`, `problem_type_id`) VALUES
(1, 'aceitado de ventilador', '2018-08-13 04:45:48', '2018-08-13 04:45:48', 1, 1),
(2, 'Reemplazo de ventilador', '2018-08-13 04:45:48', '2018-08-13 04:45:48', 1, 1),
(3, 'Cambio de fuente de alimentación', '2018-08-13 04:45:48', '2018-08-13 04:45:48', 2, 1),
(4, 'Reparacion de fuente', '2018-08-13 04:45:48', '2018-08-13 04:45:48', 2, 1),
(5, 'Reemplazo de cable UTP ok', '2018-08-13 04:45:48', '2018-08-13 06:56:52', 3, 1),
(6, 'Soldadura de  Rj45', '2018-08-13 04:45:48', '2018-08-13 06:57:28', 3, 3),
(7, 'Soldadura de cables de conexion', '2018-08-13 04:45:48', '2018-08-13 04:45:48', 3, 1),
(8, 'pantalla con colores externos', '2018-08-13 04:45:48', '2018-08-13 04:45:48', 4, 1),
(9, 'Conexion electrica del monitor', '2018-08-13 04:45:48', '2018-08-13 04:45:48', 4, 1),
(10, 'Instalacion del programa Packettracer', '2018-08-13 05:00:04', '2018-08-13 05:00:04', 9, 2),
(12, 'Reemplazo', '2018-08-13 05:22:39', '2018-08-13 05:22:39', 11, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `standar_problems`
--

CREATE TABLE `standar_problems` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `problem_type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `standar_problems`
--

INSERT INTO `standar_problems` (`id`, `descripcion`, `created_at`, `updated_at`, `problem_type_id`) VALUES
(1, 'Ventilador en con ruido', '2018-08-13 04:45:47', '2018-08-13 04:45:47', 1),
(2, 'Fuente de alimentacion sobrecalentada', '2018-08-13 04:45:47', '2018-08-13 04:45:47', 1),
(3, 'Cable UTP en mal estado', '2018-08-13 04:45:47', '2018-08-13 04:45:47', 1),
(4, 'Falla del monitor', '2018-08-13 04:45:47', '2018-08-13 04:45:47', 1),
(5, 'Puertos USB en mal estado', '2018-08-13 04:45:47', '2018-08-13 04:45:47', 1),
(6, 'S.O. sin arrancar', '2018-08-13 04:45:47', '2018-08-13 04:45:47', 2),
(7, 'S.O. lento', '2018-08-13 04:45:47', '2018-08-13 04:45:47', 2),
(8, 'Pantalla azul repentina', '2018-08-13 04:45:47', '2018-08-13 04:45:47', 2),
(9, 'Falta de programa packetracer', '2018-08-13 04:45:47', '2018-08-13 04:45:47', 2),
(10, 'Equipo no se encuentra congelado', '2018-08-13 04:45:48', '2018-08-13 04:45:48', 2),
(11, 'Ventilador en desuso', '2018-08-13 05:22:13', '2018-08-13 05:22:13', 1);

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
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `people_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `cargo`, `user`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`, `people_id`) VALUES
(1, 'Técnico', 'reynaldo', '$2y$10$hlSXeEnVHLOiEi4/MmpMz.T3IUPi4FfjODqe2TLAtM7sG5ADTvkZG', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'técnico', 'fer', '$2y$10$I5r91x5ekgKn4KbOr6ZEI.FNeS/Mig0kzJnOphvYdog/tBNe5ISi6', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(3, 'técnico', 'xim', '$2y$10$xEGwj9miWvhvKw3m.iB7J.FNT7EDCWtsIfLc1Nis0zK2eFt36/tMy', 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(4, 'técnico', 'lis', '$2y$10$Ay/6HfvcstifUjMD3X5CMu49nLeEFK.dIMOfabouwDROFiOjzUd7q', 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4);

-- --------------------------------------------------------

--
-- Estructura para la vista `equipment_problems_table`
--
DROP TABLE IF EXISTS `equipment_problems_table`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `equipment_problems_table`  AS  select `eq`.`id` AS `id`,`eq`.`created_at` AS `fecha`,`l`.`id` AS `laboratory_id`,`l`.`codigo` AS `laboratory_cod`,`e`.`cod_itic` AS `cod_itic`,`e`.`cod_pc` AS `cod_pc`,`eq`.`standar_problem_id` AS `standar_problem_id`,`sp`.`descripcion` AS `descripcion`,`pt`.`name` AS `name`,`eq`.`timesolution` AS `timesolution` from ((((`laboratories` `l` join `equipment` `e`) join `equipment_problems` `eq`) join `standar_problems` `sp`) join `problem_types` `pt`) where ((`l`.`id` = `e`.`laboratory_id`) and (`e`.`id` = `eq`.`equipment_id`) and (`sp`.`id` = `eq`.`standar_problem_id`) and (`pt`.`id` = `sp`.`problem_type_id`)) order by `eq`.`created_at` desc ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cleanings`
--
ALTER TABLE `cleanings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cleanings_laboratory_id_foreign` (`laboratory_id`);

--
-- Indices de la tabla `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `equipment_cod_itic_unique` (`cod_itic`),
  ADD UNIQUE KEY `equipment_cod_pc_unique` (`cod_pc`),
  ADD KEY `equipment_laboratory_id_foreign` (`laboratory_id`);

--
-- Indices de la tabla `equipment_problems`
--
ALTER TABLE `equipment_problems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_problems_equipment_id_foreign` (`equipment_id`),
  ADD KEY `equipment_problems_standar_problem_id_foreign` (`standar_problem_id`),
  ADD KEY `equipment_problems_user_id_report_foreign` (`user_id_report`),
  ADD KEY `equipment_problems_solution_id_foreign` (`solution_id`),
  ADD KEY `equipment_problems_user_id_solution_foreign` (`user_id_solution`);

--
-- Indices de la tabla `laboratories`
--
ALTER TABLE `laboratories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `laboratories_codigo_unique` (`codigo`),
  ADD KEY `laboratories_people_id_foreign` (`people_id`);

--
-- Indices de la tabla `observations`
--
ALTER TABLE `observations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `observations_laboratory_id_foreign` (`laboratory_id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solutions_standar_problem_id_foreign` (`standar_problem_id`),
  ADD KEY `solutions_problem_type_id_foreign` (`problem_type_id`);

--
-- Indices de la tabla `standar_problems`
--
ALTER TABLE `standar_problems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `standar_problems_problem_type_id_foreign` (`problem_type_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_unique` (`user`),
  ADD UNIQUE KEY `users_people_id_unique` (`people_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cleanings`
--
ALTER TABLE `cleanings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `equipment_problems`
--
ALTER TABLE `equipment_problems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `laboratories`
--
ALTER TABLE `laboratories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `observations`
--
ALTER TABLE `observations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `problem_types`
--
ALTER TABLE `problem_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `standar_problems`
--
ALTER TABLE `standar_problems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cleanings`
--
ALTER TABLE `cleanings`
  ADD CONSTRAINT `cleanings_laboratory_id_foreign` FOREIGN KEY (`laboratory_id`) REFERENCES `laboratories` (`id`);

--
-- Filtros para la tabla `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_laboratory_id_foreign` FOREIGN KEY (`laboratory_id`) REFERENCES `laboratories` (`id`);

--
-- Filtros para la tabla `equipment_problems`
--
ALTER TABLE `equipment_problems`
  ADD CONSTRAINT `equipment_problems_equipment_id_foreign` FOREIGN KEY (`equipment_id`) REFERENCES `equipment` (`id`),
  ADD CONSTRAINT `equipment_problems_solution_id_foreign` FOREIGN KEY (`solution_id`) REFERENCES `solutions` (`id`),
  ADD CONSTRAINT `equipment_problems_standar_problem_id_foreign` FOREIGN KEY (`standar_problem_id`) REFERENCES `standar_problems` (`id`),
  ADD CONSTRAINT `equipment_problems_user_id_report_foreign` FOREIGN KEY (`user_id_report`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `equipment_problems_user_id_solution_foreign` FOREIGN KEY (`user_id_solution`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `laboratories`
--
ALTER TABLE `laboratories`
  ADD CONSTRAINT `laboratories_people_id_foreign` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`);

--
-- Filtros para la tabla `observations`
--
ALTER TABLE `observations`
  ADD CONSTRAINT `observations_laboratory_id_foreign` FOREIGN KEY (`laboratory_id`) REFERENCES `laboratories` (`id`);

--
-- Filtros para la tabla `solutions`
--
ALTER TABLE `solutions`
  ADD CONSTRAINT `solutions_problem_type_id_foreign` FOREIGN KEY (`problem_type_id`) REFERENCES `problem_types` (`id`),
  ADD CONSTRAINT `solutions_standar_problem_id_foreign` FOREIGN KEY (`standar_problem_id`) REFERENCES `standar_problems` (`id`);

--
-- Filtros para la tabla `standar_problems`
--
ALTER TABLE `standar_problems`
  ADD CONSTRAINT `standar_problems_problem_type_id_foreign` FOREIGN KEY (`problem_type_id`) REFERENCES `problem_types` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_people_id_foreign` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
