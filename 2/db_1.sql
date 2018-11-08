-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 07 2018 г., 15:04
-- Версия сервера: 5.7.20-log
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`, `surname`) VALUES
(1, 'Иван', 'Иванов'),
(2, 'Юрий', 'Ушаков'),
(3, 'Андрей', 'Беляев'),
(4, 'Артем', 'Полежаев'),
(5, 'Игорь', 'Пресняков');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`) VALUES
(1, 'Книга 1'),
(2, 'Книга 2'),
(3, 'Книга 3'),
(4, 'Книга 4'),
(5, 'Книга 5'),
(6, 'Книга 6'),
(7, 'Книга 7'),
(8, 'Книга 8'),
(9, 'Книга 9'),
(10, 'Книга 10'),
(11, 'Книга 11'),
(12, 'Книга 12'),
(13, 'Книга 13'),
(14, 'Книга 14'),
(15, 'Книга 15');

-- --------------------------------------------------------

--
-- Структура таблицы `books_and_authors`
--

CREATE TABLE `books_and_authors` (
  `id` int(10) NOT NULL,
  `id_author` int(10) NOT NULL,
  `id_book` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_and_authors`
--

INSERT INTO `books_and_authors` (`id`, `id_author`, `id_book`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 2, 4),
(5, 2, 5),
(6, 2, 6),
(7, 2, 7),
(8, 2, 8),
(9, 2, 9),
(10, 1, 10),
(11, 3, 12),
(12, 3, 11),
(13, 4, 10),
(14, 5, 10),
(15, 5, 13),
(16, 5, 14),
(17, 1, 15);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books_and_authors`
--
ALTER TABLE `books_and_authors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `books_and_authors`
--
ALTER TABLE `books_and_authors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
