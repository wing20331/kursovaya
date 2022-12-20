-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 20 2022 г., 15:40
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vilyl_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `vinylId` int(11) NOT NULL,
  `colich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `history`
--

INSERT INTO `history` (`id`, `userId`, `vinylId`, `colich`) VALUES
(42, 10, 1, 1),
(43, 10, 4, 1),
(44, 10, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `vinylId` int(11) NOT NULL,
  `colich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(319) NOT NULL,
  `password` varchar(32) NOT NULL,
  `isAdmin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `isAdmin`) VALUES
(2, 'admin', 'admin', 'admin', '1'),
(9, 'Артём', 'LebArt2321@yandex.ru', '12345', NULL),
(10, 'Кирилл', 'lalala@sobaka.com', '11111', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `vinyl`
--

CREATE TABLE `vinyl` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `colich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `vinyl`
--

INSERT INTO `vinyl` (`id`, `name`, `price`, `img1`, `colich`) VALUES
(1, 'ЗЕМФИРА - ЗЕМФИРА', 4990, '\\img\\catalog\\ЗЕМФИРА\\ЗЕМФИРА\\1.jpg', 10),
(2, 'ЗЕМФИРА - БОРДЕРЛАЙН', 5620, '\\img\\catalog\\ЗЕМФИРА\\БОРДЕРЛАЙН\\1.jpg', 0),
(3, 'MICHAEL JACKSON - BAD', 3390, '\\img\\catalog\\MICHAEL JACKSON\\BAD\\1.jpg', 5),
(4, 'TYLER, THE CREATOR - IGOR', 3223, '\\img\\catalog\\TYLER, THE CREATOR\\IGOR\\1.jpg', 7),
(5, 'TYLER, THE CREATOR - FLOWER', 3990, '\\img\\catalog\\TYLER, THE CREATOR\\FLOWER\\1.jpg', 3),
(6, 'AC/DC - POWER UP', 3230, '\\img\\catalog\\AC_DC\\Power Up, LP\\1.jpg', 7),
(7, 'QUEEN - QUEEN II', 5290, '\\img\\catalog\\QUEEN\\QUEEN II\\1.jpg', 4),
(8, 'ABBA - VOYAGE', 3984, '\\img\\catalog\\ABBA\\VOYAGE\\1.jpg', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vinyl`
--
ALTER TABLE `vinyl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `vinyl`
--
ALTER TABLE `vinyl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
