-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Янв 24 2019 г., 23:25
-- Версия сервера: 5.7.25-0ubuntu0.18.04.2
-- Версия PHP: 7.2.14-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sociability` int(2) NOT NULL,
  `engineering_skills` int(2) NOT NULL,
  `time_management` int(2) NOT NULL,
  `languages` int(2) NOT NULL,
  `project_id` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `photo`, `sociability`, `engineering_skills`, `time_management`, `languages`, `project_id`) VALUES
(56, 'Smith John', 'smith@gmail.com', 'avatar-non.png', 9, 9, 8, 7, '10'),
(57, 'Reed Evelyn', 'read@gmail.com', 'rapper-america-eternal-hat-preview.jpg', 9, 7, 10, 9, '2,3,4'),
(58, 'Park Anthony', 'park@gmail.com', 'man-using-computer-1290116_1280.jpg', 8, 8, 8, 8, '8'),
(59, 'Bryan Elizabeth', 'bryan@gmail.com', 'business-woman-2697954_1280.jpg', 9, 7, 10, 8, '12,14'),
(60, 'Griffith Henry', 'griffith@gmail.com', 'beard-2286446_1280.jpg', 7, 8, 7, 7, '6'),
(61, 'Byrd Roger', 'byrd@gmail.com', 'avatar-non.png', 7, 8, 8, 9, '4'),
(62, 'Neal Sophia', 'neal@gmail.com', 'specs-3296472_1280.png', 9, 8, 8, 10, '7'),
(63, 'Carter Charles', 'carter@gmail.com', 'man-1209494_1280.jpg', 7, 9, 10, 9, '13,14,15');

-- --------------------------------------------------------

--
-- Структура таблицы `employee_projects`
--

CREATE TABLE `employee_projects` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `employee_projects`
--

INSERT INTO `employee_projects` (`id`, `employee_id`, `project_id`) VALUES
(54, 56, 10),
(55, 57, 2),
(56, 57, 3),
(57, 57, 4),
(58, 58, 8),
(59, 59, 12),
(60, 59, 14),
(61, 60, 6),
(62, 61, 4),
(63, 62, 7),
(64, 63, 13),
(65, 63, 14),
(66, 63, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `title`) VALUES
(1, 'PROJECT 1'),
(2, 'PROJECT 2'),
(3, 'PROJECT 3'),
(4, 'PROJECT 4'),
(5, 'PROJECT 5'),
(6, 'PROJECT 6'),
(7, 'PROJECT 7'),
(8, 'PROJECT 8'),
(9, 'PROJECT 9'),
(10, 'PROJECT 10'),
(11, 'PROJECT 11'),
(12, 'PROJECT 12'),
(13, 'PROJECT 13'),
(14, 'PROJECT 14'),
(15, 'PROJECT 15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `employee_projects`
--
ALTER TABLE `employee_projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT для таблицы `employee_projects`
--
ALTER TABLE `employee_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
