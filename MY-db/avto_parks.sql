-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 31 2020 г., 21:14
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
-- Структура таблицы `avto_parks`
--

CREATE TABLE `avto_parks` (
  `id` int(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avto_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `avto_parks`
--

INSERT INTO `avto_parks` (`id`, `created_at`, `updated_at`, `title`, `address`, `schedule`, `avto_id`) VALUES
(1, '2020-05-27 04:13:15', '2020-05-30 13:53:58', 'Автопарк№1', 'Харьков2', 'с 8-00 до 20-00', 1),
(2, '2020-05-30 10:39:49', '2020-05-30 10:41:05', 'Автопарк№2', 'Харьков3', '12-00', 2),
(3, '2020-05-30 12:29:19', '2020-05-30 12:29:19', 'Автопарк№4', 'Харьков4', '12 00 -14 00', 3),
(4, '2020-05-30 13:07:29', '2020-05-31 08:37:18', 'Автопарк№5', 'Харьков5', '12-00', 2),
(5, '2020-05-31 05:21:18', '2020-05-31 08:37:37', 'Автопарк№6', 'Харьков2', '12 00 -14 00', 2),
(6, '2020-05-31 08:51:39', '2020-05-31 08:51:39', 'Автопарк№6', 'Харьков6', '12 00 -14 00', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `avto_parks`
--
ALTER TABLE `avto_parks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avto_id` (`avto_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `avto_parks`
--
ALTER TABLE `avto_parks`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
