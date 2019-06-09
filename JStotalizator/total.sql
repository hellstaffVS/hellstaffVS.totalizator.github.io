-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 09 2019 г., 13:32
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `total`
--

-- --------------------------------------------------------

--
-- Структура таблицы `autoracing`
--

CREATE TABLE `autoracing` (
  `autoracing` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `autoracing`
--

INSERT INTO `autoracing` (`autoracing`) VALUES
('Vova'),
('Bodya'),
('Andrey');

-- --------------------------------------------------------

--
-- Структура таблицы `kind_of_racing`
--

CREATE TABLE `kind_of_racing` (
  `id` int(11) NOT NULL,
  `kind` text NOT NULL,
  `marzha` float NOT NULL,
  `winner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kind_of_racing`
--

INSERT INTO `kind_of_racing` (`id`, `kind`, `marzha`, `winner`) VALUES
(35, 'motoracing', 0.4, 'Stas'),
(36, 'autoracing', 0.4, 'Vova');

-- --------------------------------------------------------

--
-- Структура таблицы `motoracing`
--

CREATE TABLE `motoracing` (
  `motoracing` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `motoracing`
--

INSERT INTO `motoracing` (`motoracing`) VALUES
('vlad'),
('dima'),
('stas');

-- --------------------------------------------------------

--
-- Структура таблицы `parlays`
--

CREATE TABLE `parlays` (
  `parlays_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `horse` text NOT NULL,
  `sum` int(255) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `parlays`
--

INSERT INTO `parlays` (`parlays_id`, `username`, `horse`, `sum`, `type`) VALUES
(1, 'Lina', 'vlad', 10, 'motoracing'),
(2, 'Lina', 'dima', 10, 'motoracing'),
(3, 'Lina', 'stas', 25, 'motoracing'),
(4, 'Oleg', 'Vova', 5, 'autoracing'),
(5, 'Oleg', 'Bodya', 50, 'autoracing'),
(6, 'Oleg', 'Andrey', 10, 'autoracing'),
(7, 'Oleg', 'stas', 10, 'motoracing'),
(8, 'Lina', 'Vova', 10, 'autoracing'),
(9, 'Lina', 'Bodya', 20, 'autoracing'),
(10, 'Lina', 'Andrey', 30, 'autoracing'),
(11, 'Lina', 'Vova', 1, 'autoracing'),
(12, 'Lina', 'vlad', 10, 'motoracing'),
(13, 'Lina', 'dima', 20, 'motoracing'),
(14, 'Lina', 'stas', 50, 'motoracing'),
(15, 'Lina', 'Vova', 5, 'autoracing'),
(16, 'Lina', 'Bodya', 2, 'autoracing'),
(17, 'Lina', 'Andrey', 7, 'autoracing'),
(18, 'Lina', 'Vova', 5, 'autoracing'),
(19, 'Lina', 'Bodya', 2, 'autoracing'),
(20, 'Lina', 'Andrey', 7, 'autoracing'),
(21, 'Lina', 'Vova', 5, 'autoracing'),
(22, 'Lina', 'Bodya', 2, 'autoracing'),
(23, 'Lina', 'Andrey', 7, 'autoracing'),
(24, 'Lina', 'Vova', 5, 'autoracing'),
(25, 'Lina', 'Bodya', 2, 'autoracing'),
(26, 'Lina', 'Andrey', 7, 'autoracing'),
(27, 'Lina', 'Vova', 5, 'autoracing'),
(28, 'Lina', 'Bodya', 2, 'autoracing'),
(29, 'Lina', 'Andrey', 7, 'autoracing'),
(30, 'Lina', 'Vova', 5, 'autoracing'),
(31, 'Lina', 'Bodya', 2, 'autoracing'),
(32, 'Lina', 'Andrey', 7, 'autoracing'),
(33, 'Lina', 'Vova', 5, 'autoracing'),
(34, 'Lina', 'Bodya', 2, 'autoracing'),
(35, 'Lina', 'Andrey', 7, 'autoracing'),
(36, 'Lina', 'Vova', 5, 'autoracing'),
(37, 'Lina', 'Bodya', 2, 'autoracing'),
(38, 'Lina', 'Andrey', 7, 'autoracing'),
(39, 'Lina', 'Vova', 5, 'autoracing'),
(40, 'Lina', 'Bodya', 2, 'autoracing'),
(41, 'Lina', 'Andrey', 7, 'autoracing'),
(42, 'Lina', 'Vova', 5, 'autoracing'),
(43, 'Lina', 'Bodya', 2, 'autoracing'),
(44, 'Lina', 'Andrey', 7, 'autoracing'),
(45, 'Lina', 'Vova', 5, 'autoracing'),
(46, 'Lina', 'Bodya', 2, 'autoracing'),
(47, 'Lina', 'Andrey', 7, 'autoracing'),
(48, 'Lina', 'Vova', 5, 'autoracing'),
(49, 'Lina', 'Bodya', 2, 'autoracing'),
(50, 'Lina', 'Andrey', 7, 'autoracing'),
(51, 'Lina', 'Vova', 5, 'autoracing'),
(52, 'Lina', 'Bodya', 2, 'autoracing'),
(53, 'Lina', 'Andrey', 7, 'autoracing'),
(54, 'Lina', 'Vova', 5, 'autoracing'),
(55, 'Lina', 'Bodya', 2, 'autoracing'),
(56, 'Lina', 'Andrey', 7, 'autoracing'),
(57, 'Lina', 'Vova', 5, 'autoracing'),
(58, 'Lina', 'Bodya', 2, 'autoracing'),
(59, 'Lina', 'Andrey', 7, 'autoracing'),
(60, 'Lina', 'Vova', 5, 'autoracing'),
(61, 'Lina', 'Bodya', 2, 'autoracing'),
(62, 'Lina', 'Andrey', 7, 'autoracing'),
(63, 'Lina', 'Vova', 5, 'autoracing'),
(64, 'Lina', 'Bodya', 2, 'autoracing'),
(65, 'Lina', 'Andrey', 7, 'autoracing'),
(66, 'Lina', 'Vova', 5, 'autoracing'),
(67, 'Lina', 'Bodya', 2, 'autoracing'),
(68, 'Lina', 'Andrey', 7, 'autoracing'),
(69, 'Lina', 'Vova', 5, 'autoracing'),
(70, 'Lina', 'Bodya', 2, 'autoracing'),
(71, 'Lina', 'Andrey', 7, 'autoracing'),
(72, 'Lina', 'Vova', 5, 'autoracing'),
(73, 'Lina', 'Bodya', 2, 'autoracing'),
(74, 'Lina', 'Andrey', 7, 'autoracing'),
(75, 'Lina', 'Vova', 5, 'autoracing'),
(76, 'Lina', 'Bodya', 2, 'autoracing'),
(77, 'Lina', 'Andrey', 7, 'autoracing'),
(78, 'Lina', 'Vova', 5, 'autoracing'),
(79, 'Lina', 'Bodya', 2, 'autoracing'),
(80, 'Lina', 'Andrey', 7, 'autoracing'),
(81, 'Lina', 'Vova', 5, 'autoracing'),
(82, 'Lina', 'Bodya', 2, 'autoracing'),
(83, 'Lina', 'Andrey', 7, 'autoracing'),
(84, 'Lina', 'Vova', 5, 'autoracing'),
(85, 'Lina', 'Bodya', 2, 'autoracing'),
(86, 'Lina', 'Andrey', 7, 'autoracing'),
(87, 'Lina', 'Vova', 5, 'autoracing'),
(88, 'Lina', 'Bodya', 2, 'autoracing'),
(89, 'Lina', 'Andrey', 7, 'autoracing'),
(90, 'Lina', 'Vova', 5, 'autoracing'),
(91, 'Lina', 'Bodya', 2, 'autoracing'),
(92, 'Lina', 'Andrey', 7, 'autoracing'),
(93, 'Lina', 'Vova', 5, 'autoracing'),
(94, 'Lina', 'Bodya', 2, 'autoracing'),
(95, 'Lina', 'Andrey', 7, 'autoracing'),
(96, 'Lina', 'Vova', 5, 'autoracing'),
(97, 'Lina', 'Bodya', 2, 'autoracing'),
(98, 'Lina', 'Andrey', 7, 'autoracing'),
(99, 'Lina', 'Vova', 5, 'autoracing'),
(100, 'Lina', 'Bodya', 2, 'autoracing'),
(101, 'Lina', 'Andrey', 7, 'autoracing'),
(102, 'Lina', 'Vova', 5, 'autoracing'),
(103, 'Lina', 'Bodya', 2, 'autoracing'),
(104, 'Lina', 'Andrey', 7, 'autoracing'),
(105, 'Lina', 'Vova', 5, 'autoracing'),
(106, 'Lina', 'Bodya', 2, 'autoracing'),
(107, 'Lina', 'Andrey', 7, 'autoracing'),
(108, 'Lina', 'Vova', 5, 'autoracing'),
(109, 'Lina', 'Bodya', 2, 'autoracing'),
(110, 'Lina', 'Andrey', 7, 'autoracing'),
(111, 'Lina', 'Vova', 5, 'autoracing'),
(112, 'Lina', 'Bodya', 2, 'autoracing'),
(113, 'Lina', 'Andrey', 7, 'autoracing'),
(114, 'Lina', 'Vova', 5, 'autoracing'),
(115, 'Lina', 'Bodya', 2, 'autoracing'),
(116, 'Lina', 'Andrey', 7, 'autoracing'),
(117, 'Lina', 'Vova', 5, 'autoracing'),
(118, 'Lina', 'Bodya', 2, 'autoracing'),
(119, 'Lina', 'Andrey', 7, 'autoracing'),
(120, 'Lina', 'Vova', 5, 'autoracing'),
(121, 'Lina', 'Bodya', 2, 'autoracing'),
(122, 'Lina', 'Andrey', 7, 'autoracing'),
(123, 'Lina', 'Vova', 10, 'autoracing'),
(124, 'Lina', 'Bodya', 5, 'autoracing'),
(125, 'Lina', 'Vova', 10, 'autoracing'),
(126, 'Lina', 'Bodya', 5, 'autoracing'),
(127, 'Test', 'Vova', 10, 'autoracing'),
(128, 'Test', 'Bodya', 20, 'autoracing'),
(129, 'Test', 'Andrey', 30, 'autoracing');

-- --------------------------------------------------------

--
-- Структура таблицы `signup`
--

CREATE TABLE `signup` (
  `user_id` int(255) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `signup`
--

INSERT INTO `signup` (`user_id`, `username`, `password`) VALUES
(1, 'Admin', 'Admin'),
(2, 'Lina', 'Lina'),
(3, 'Oleg', 'Oleg'),
(4, 'Test', 'Test');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kind_of_racing`
--
ALTER TABLE `kind_of_racing`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parlays`
--
ALTER TABLE `parlays`
  ADD PRIMARY KEY (`parlays_id`);

--
-- Индексы таблицы `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kind_of_racing`
--
ALTER TABLE `kind_of_racing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `parlays`
--
ALTER TABLE `parlays`
  MODIFY `parlays_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT для таблицы `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
