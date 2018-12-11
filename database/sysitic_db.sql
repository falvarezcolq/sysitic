-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2018 a las 02:33:47
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `desc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'Sin laboratorio', 'Sin asignar', '---', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

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
('2018_09_25_210731_create_logs_table', 1),
('2018_11_06_200835_add_desc_to_equipment_problems', 1);

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
(2, 'Técnico', 'rey2018', '$2y$10$1n9dpE86PXQrAxJY0ho3Eu/bHRnUrTo4tFqf0gd9aa6eochUUuvsG', 1, 1, 2, 1, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipment_problems`
--
ALTER TABLE `equipment_problems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `laboratories`
--
ALTER TABLE `laboratories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `observations`
--
ALTER TABLE `observations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `problem_types`
--
ALTER TABLE `problem_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `standar_problems`
--
ALTER TABLE `standar_problems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
