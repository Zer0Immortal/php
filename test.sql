-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 192.168.1.83:3306
-- Время создания: Май 21 2024 г., 16:57
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `forum`
--

CREATE TABLE `forum` (
  `id` int NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `forum`
--

INSERT INTO `forum` (`id`, `full_name`, `massage`) VALUES
(1, 'loh', 'Привет, Петушок!!!'),
(2, 'dadadadada', 'Привет тварь'),
(3, 'dadadadada', 'Стефани лох\r\n'),
(4, 'asddg', 'Ну привет'),
(5, 'asddg', 'Привет всем'),
(6, 'loh', 'Вроде работает\r\nТок грузит долго'),
(7, 'loh', 'И еще походу проблема с высотой. При длинных сообщениях наверное не будет умещаться'),
(8, 'asddg', 'Ну, сыровато но выглядит норм'),
(9, 'asddg', 'Надо время добавить было еще'),
(10, 'asdawd', 'Лень(');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(1, 'admin', 'admin', 'admin@admin.ru', '202cb962ac59075b964b07152d234b70', 'uploads/Без имени.png'),
(27, 'loh', 'loh', 'betaroma97@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/1715864774Без имени.png'),
(28, 'hsfgg', 'hahaha', 'addsa@asdad', '202cb962ac59075b964b07152d234b70', ''),
(29, 'hahah', 'hahahahah', 'addsa@asdad', '202cb962ac59075b964b07152d234b70', ''),
(30, 'asdawd', 'lol', 'betaroma97@gmail.com', '202cb962ac59075b964b07152d234b70', ''),
(31, 'lol2', 'lol2', 'betaroma97@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/1715869473photo1715014260.jpeg'),
(32, 'dadadadada', 'dada', 'addsa@asdad', '202cb962ac59075b964b07152d234b70', 'uploads/1716217194Снимок экрана (5).png'),
(33, 'asddg', 'tyt', 'betaroma97@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/1716227196Снимок экрана (1).png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `forum`
--
ALTER TABLE `forum`
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
-- AUTO_INCREMENT для таблицы `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
