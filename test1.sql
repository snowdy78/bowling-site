-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 12 2024 г., 13:56
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `balls_data`
--

CREATE TABLE `balls_data` (
  `id` int NOT NULL,
  `color` varchar(128) NOT NULL,
  `price` int NOT NULL,
  `secondary_color` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `balls_data`
--

INSERT INTO `balls_data` (`id`, `color`, `price`, `secondary_color`, `name`) VALUES
(1, 'Красный', 22400, 'Черный', 'СИТХ-800'),
(2, 'Желтый', 14880, 'Фиолетовый', 'CHUPACHUPS-1'),
(3, 'Розовый', 19840, 'Синий', 'GHOSTLING-100'),
(4, 'Оранжевый', 23560, 'Фиолетовый', 'HALKSHIRT'),
(5, 'Синий', 26500, 'Зеленый', 'NEON-RAVE'),
(6, 'Бирюзовый', 17300, 'Желтый', 'BUBBLEGUM-PLANET'),
(7, 'Розовый', 24820, 'Бирюзовый', 'ALIEN-BLOOD'),
(8, 'Фиолетовый ', 34820, 'Синий', 'SWEETY-WATER'),
(9, 'Розовый ', 33220, 'Фиолетовый', 'CANDY-LOVE'),
(10, 'Синий ', 29420, 'Бирюзовый', 'AQUA-HORSE'),
(11, 'Лаймовый', 29420, 'Желтый', 'TOXIC-ATMOSPHERE');

-- --------------------------------------------------------

--
-- Структура таблицы `roads_data`
--

CREATE TABLE `roads_data` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `roads_data`
--

INSERT INTO `roads_data` (`id`, `user_id`) VALUES
(1, NULL),
(2, NULL),
(3, 1),
(4, NULL),
(5, NULL),
(6, NULL),
(7, NULL),
(8, NULL),
(9, NULL),
(10, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(64) NOT NULL,
  `phone_number` varchar(28) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `phone_number`, `email`, `password`) VALUES
(1, 'asdfas', '', '', '1234'),
(2, 'hesus', '', '', 'old'),
(3, 'as', 'as', '', '+79021422795');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `balls_data`
--
ALTER TABLE `balls_data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roads_data`
--
ALTER TABLE `roads_data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `balls_data`
--
ALTER TABLE `balls_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `roads_data`
--
ALTER TABLE `roads_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
