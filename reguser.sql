-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 05 2019 г., 07:36
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `reguser`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mail` text NOT NULL,
  `uName` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `sexUser` varchar(30) NOT NULL,
  `countryUser` varchar(50) NOT NULL,
  `registrDate` text,
  `lastActiveDate` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `mail`, `uName`, `password`, `lastName`, `firstName`, `middleName`, `sexUser`, `countryUser`, `registrDate`, `lastActiveDate`) VALUES
(18, 'rreeee123@utro.kg', 'UtroMan', 'e10adc3949ba59abbe56e057f20f883e', 'Хатунов', 'Ринат', 'Акирович', 'Женский', 'Австралия', 'Sun Aug 4 17:30:49 CEST 2019', 'Sun Aug 4 22:07:22 CEST 2019'),
(19, 'reebok@123.com', 'reebokSport', 'e10adc3949ba59abbe56e057f20f883e', 'Арстанов', 'Бакир', 'Улукович', 'Мужской', 'Россия', 'Sun Aug 4 17:43:11 CEST 2019', 'Sun Aug 4 22:01:03 CEST 2019'),
(20, 'aue@gmail.com', 'fromFaziland', 'e10adc3949ba59abbe56e057f20f883e', 'Закиров', 'Турсун', 'Дамирович', 'Мужской', 'Испания', 'Sun Aug 4 17:44:15 CEST 2019', 'Sun Aug 4 22:07:56 CEST 2019'),
(21, 'juliya@gmail.com', 'julya789', 'e10adc3949ba59abbe56e057f20f883e', 'Шарапова', 'Анастасия', 'Александровна', 'Женский', 'Италия', 'Sun Aug 4 17:45:13 CEST 2019', 'Sun Aug 4 22:08:39 CEST 2019'),
(22, 'tribRR@123.com', 'tributeMan', 'e10adc3949ba59abbe56e057f20f883e', 'Сергеева', 'Ульяна', 'Акировна', 'Женский', 'Колумбия', 'Sun Aug 4 17:46:04 CEST 2019', 'Sun Aug 4 22:09:08 CEST 2019'),
(23, 'askar12345@mail.ru', 'askar_99', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Алмазов', 'Арстан', 'Аскарович', 'Мужской', 'Исландия', 'Sun Aug 4 22:02:55 CEST 2019', 'Mon Aug 5 9:47:29 CEST 2019');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
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
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
