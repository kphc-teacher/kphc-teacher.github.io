-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 25 2021 г., 09:40
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` tinytext DEFAULT NULL,
  `text` text NOT NULL,
  `id_categoris` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `id_categoris`, `views`, `date`) VALUES
(1, 'Измененная4dsfgңі', '<p>d &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"/upload/image/logo.png\" style=\"height:80px; width:240px\" />dfsgg</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>asd</td>\r\n			<td>v</td>\r\n		</tr>\r\n		<tr>\r\n			<td>asd</td>\r\n			<td>v</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 0, '2021-09-28 11:12:23'),
(2, 'Моя втора!\"', '<p>Моя статья&quot;</p>\r\n', 2, 3, '2021-09-30 00:17:15'),
(3, 'УДалить!', '213\r\n', 3, 0, '2021-10-04 14:17:52'),
(4, '123', '', 1, 0, '2021-10-04 14:23:34'),
(5, 'asdfasdf', '<p>dsfgdsfgdsgdsgsdf</p>\r\n', 1, 0, '2021-10-04 14:23:50'),
(10, 'фыв', '', 1, 0, '2021-10-04 14:52:48'),
(11, '123', 'rcn sadfs sdf\r\n\r\n423423\r\n\r\n234\r\n', 1, 0, '2021-10-14 21:42:33');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` tinytext DEFAULT NULL,
  `thumbs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `thumbs`) VALUES
(1, 'Новости', 'assets/images/about/bg.jpg'),
(2, 'HP-17', 'assets/images/about/bg.jpg'),
(3, 'BTP-2', 'assets/images/about/bg.jpg'),
(4, 'TP-21', '');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` tinytext NOT NULL,
  `id_article` int(11) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `comment`, `id_article`, `date`) VALUES
(1, 'Test', 1, '2021-09-28 12:18:45'),
(2, '1', 1, '2021-09-28 12:42:08'),
(3, 'asf', 1, '2021-09-28 12:42:50'),
(4, 'фыав', 1, '2021-09-29 21:58:30');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `pass`, `email`, `name`, `surname`, `admin`) VALUES
(6, '1', '2', 'akimkereev@gmail.com', 'Zhasulan ', 'Akimkereev', '1'),
(7, 'kempa', '123', 'zhasulanakimkereev@yandex.ru', 'Жасулан Нурланович Акимке', 'Жасулан Нурланович Акимке', ''),
(8, '241', 'к414', 'akimkereev@gmail.com', 'Zhasulan Akimkereev', 'Zhasulan Akimkereev', ''),
(10, '3', '3', 'asd@asd.sdf', '3', '3', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
