-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 05 2020 г., 13:06
-- Версия сервера: 5.7.30-0ubuntu0.18.04.1
-- Версия PHP: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `avto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `avto_cars`
--

CREATE TABLE `avto_cars` (
  `id` int(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_driver` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `avto_cars`
--

INSERT INTO `avto_cars` (`id`, `created_at`, `updated_at`, `number`, `name_driver`) VALUES
(1, '2020-06-04 16:44:25', '2020-06-04 16:44:25', 'AA 12 34 BB', 'Ivan'),
(2, '2020-06-05 05:04:47', '2020-06-05 05:04:47', '2222', 'Jack'),
(3, '2020-06-05 05:04:47', '2020-06-05 05:04:47', '3333', 'Jack3'),
(16, '2020-06-05 05:06:16', '2020-06-05 05:06:16', '5555', 'Sasha2');

-- --------------------------------------------------------

--
-- Структура таблицы `avto_cars_avto_park`
--

CREATE TABLE `avto_cars_avto_park` (
  `avto_park_id` int(11) NOT NULL,
  `avto_cars_id` int(11) NOT NULL,
  `id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `avto_cars_avto_park`
--

INSERT INTO `avto_cars_avto_park` (`avto_park_id`, `avto_cars_id`, `id`) VALUES
(1, 1, 1),
(12, 13, 2),
(12, 14, 3),
(13, 15, 76),
(13, 16, 77),
(14, 2, 78),
(14, 3, 79),
(14, 1, 80);

-- --------------------------------------------------------

--
-- Структура таблицы `avto_parks`
--

CREATE TABLE `avto_parks` (
  `id` int(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `avto_parks`
--

INSERT INTO `avto_parks` (`id`, `created_at`, `updated_at`, `title`, `address`, `schedule`) VALUES
(1, '2020-06-04 16:45:23', '2020-06-04 16:45:23', 'Автопарк№1', 'Харьков1', '12-00'),
(14, '2020-06-05 06:36:56', '2020-06-05 06:36:56', 'Автопарк№2', 'Харьков2', '12-00'),
(15, '2020-06-05 06:38:31', '2020-06-05 06:38:31', 'Автопарк№2', 'Харьков2', '12-00');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2019_08_19_000000_create_failed_jobs_table', 1),
(35, '2020_05_27_102957_create_avto_parks_table', 1),
(36, '2020_05_27_103607_create_avto_cars_table', 1),
(37, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sasha', 'sergienko8385@ukr.net', NULL, '$2y$10$PvWwdYWOo4JlcWJ22m7s9Oqr1zOrLOH7QFx8uKMtEF5MpZ9Ezg2Da', 'g92MrVpU9VWNcBKM3rYQeWTjeUMCIa3izMSXQYFt7L1FFOnUSFvRotYQkwGf', '2020-05-28 07:33:00', '2020-05-28 07:33:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `avto_cars`
--
ALTER TABLE `avto_cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `avto_cars_avto_park`
--
ALTER TABLE `avto_cars_avto_park`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `avto_parks`
--
ALTER TABLE `avto_parks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `avto_cars`
--
ALTER TABLE `avto_cars`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `avto_cars_avto_park`
--
ALTER TABLE `avto_cars_avto_park`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT для таблицы `avto_parks`
--
ALTER TABLE `avto_parks`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
