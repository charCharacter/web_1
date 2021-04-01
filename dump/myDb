
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myDb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `name` text NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `date` text CHARACTER SET utf8 NOT NULL,
  `ip` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `category`, `name`, `text`, `date`, `ip`) VALUES
(1, 0, 'Admin', 'Test', '30.10.2020', '195.211.206.218'),
(2, 0, 'Egor', 'Привет!', '30.10.2020', '195.211.206.218'),
(3, 0, 'Egor', 'Комментарий', '30.10.2020', '195.211.206.218'),
(4, 0, 'Alex', 'Тест!', '14.11.2020', '188.162.14.156'),
(5, 0, 'Xela', 'Делай лабы', '22.11.2020', '212.164.65.167');

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `url` text CHARACTER SET utf8 NOT NULL,
  `date` text CHARACTER SET utf8 NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `name`, `url`, `date`, `class`) VALUES
(1, 'Лабораторная работа №1 (docx)', 'http://fpm2.ami.nstu.ru/~pmi-b8511/files/Ks_Lab1_brig11.docx', '20.09.2020', 'ks'),
(2, 'Лабораторная работа №2 (docx)', 'http://fpm2.ami.nstu.ru/~pmi-b8511/files/Ks_Lab2_brig11.docx', '04.10.2020', 'ks'),
(3, 'Исправленная ЛР №2 (docx)', 'http://fpm2.ami.nstu.ru/~pmi-b8511/files/Ks_Lab2_brig11_fixed.docx', '07.10.2020', 'ks'),
(4, 'Лабораторная работа №1 (docx)', 'http://fpm2.ami.nstu.ru/~pmi-b8511/files/Chmv_lab1_Demidovich_Muraviev.docx', '20.09.2020', 'chmv'),
(5, 'Лабораторная работа №2 (docx)', 'http://fpm2.ami.nstu.ru/~pmi-b8511/files/Chmv_lab2_Demidovich_Muraviev.docx', '02.10.2020', 'chmv'),
(6, 'Лабораторная работа №3 (docx)', 'http://fpm2.ami.nstu.ru/~pmi-b8511/files/Chmv_lab3_Demidovich_Muraviev.docx', '20.10.2020', 'chmv'),
(7, 'Лабораторная работа №3 (docx)', 'http://fpm2.ami.nstu.ru/~pmi-b8511/files/Ks_Lab3_brig11.docx', '22.10.2020', 'ks'),
(8, 'Лабораторная работа №4+5 (docx)', 'http://fpm2.ami.nstu.ru/~pmi-b8511/files/Chmv_lab4_5_Demidovich_Muraviev.docx', '27.10.2020', 'chmv');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
