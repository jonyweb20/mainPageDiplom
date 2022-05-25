-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2022 г., 13:48
-- Версия сервера: 5.6.51-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `product`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `orderarticle` int(12) NOT NULL,
  `artmodel` varchar(64) NOT NULL,
  `articlecolor` varchar(64) NOT NULL,
  `qty` int(12) NOT NULL,
  `price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Артикул модели и цвета';

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `orderbrand` int(12) NOT NULL,
  `brandname` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Наименование брендов';

-- --------------------------------------------------------

--
-- Структура таблицы `colorframe`
--

CREATE TABLE `colorframe` (
  `ordercolor` int(12) NOT NULL,
  `color` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Цвет оправы';

-- --------------------------------------------------------

--
-- Структура таблицы `colorlens`
--

CREATE TABLE `colorlens` (
  `ordercollens` int(12) NOT NULL,
  `collens` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Цвет линз';

-- --------------------------------------------------------

--
-- Структура таблицы `flex`
--

CREATE TABLE `flex` (
  `orderflex` int(12) NOT NULL,
  `fl` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Флекс';

-- --------------------------------------------------------

--
-- Структура таблицы `formframe`
--

CREATE TABLE `formframe` (
  `orderform` int(12) NOT NULL,
  `form` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Форма оправы';

-- --------------------------------------------------------

--
-- Структура таблицы `gender`
--

CREATE TABLE `gender` (
  `ordergenger` int(12) NOT NULL,
  `gen` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Пол';

-- --------------------------------------------------------

--
-- Структура таблицы `higthlens`
--

CREATE TABLE `higthlens` (
  `orderhigth` int(12) NOT NULL,
  `higth` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='высота линзы';

-- --------------------------------------------------------

--
-- Структура таблицы `lengthbracket`
--

CREATE TABLE `lengthbracket` (
  `orderlength` int(12) NOT NULL,
  `length` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Длина заушника';

-- --------------------------------------------------------

--
-- Структура таблицы `material`
--

CREATE TABLE `material` (
  `ordermaterial` int(12) NOT NULL,
  `matframe` varchar(64) NOT NULL,
  `matbracket` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Материал оправы и дужки';

-- --------------------------------------------------------

--
-- Структура таблицы `nameproduct`
--

CREATE TABLE `nameproduct` (
  `ordername` int(12) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Наименование товара';

-- --------------------------------------------------------

--
-- Структура таблицы `nosebridge`
--

CREATE TABLE `nosebridge` (
  `ordernose` int(12) NOT NULL,
  `nose` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Переносица';

-- --------------------------------------------------------

--
-- Структура таблицы `polarization`
--

CREATE TABLE `polarization` (
  `orderpolariz` int(12) NOT NULL,
  `polariz` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Поляризация';

-- --------------------------------------------------------

--
-- Структура таблицы `rxable`
--

CREATE TABLE `rxable` (
  `orderrx` int(12) NOT NULL,
  `rx` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Rx-Able';

-- --------------------------------------------------------

--
-- Структура таблицы `typeform`
--

CREATE TABLE `typeform` (
  `ordertype` int(12) NOT NULL,
  `type` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Тип оправы';

-- --------------------------------------------------------

--
-- Структура таблицы `widthlens`
--

CREATE TABLE `widthlens` (
  `orderwidthl` int(12) NOT NULL,
  `width` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ширина линзы';

-- --------------------------------------------------------

--
-- Структура таблицы `сurvature`
--

CREATE TABLE `сurvature` (
  `ordercurvature` int(12) NOT NULL,
  `lenscurvature` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Кривизна линзы';

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`orderarticle`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`orderbrand`);

--
-- Индексы таблицы `colorframe`
--
ALTER TABLE `colorframe`
  ADD PRIMARY KEY (`ordercolor`);

--
-- Индексы таблицы `colorlens`
--
ALTER TABLE `colorlens`
  ADD PRIMARY KEY (`ordercollens`);

--
-- Индексы таблицы `flex`
--
ALTER TABLE `flex`
  ADD PRIMARY KEY (`orderflex`);

--
-- Индексы таблицы `formframe`
--
ALTER TABLE `formframe`
  ADD PRIMARY KEY (`orderform`);

--
-- Индексы таблицы `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`ordergenger`);

--
-- Индексы таблицы `higthlens`
--
ALTER TABLE `higthlens`
  ADD PRIMARY KEY (`orderhigth`);

--
-- Индексы таблицы `lengthbracket`
--
ALTER TABLE `lengthbracket`
  ADD PRIMARY KEY (`orderlength`);

--
-- Индексы таблицы `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`ordermaterial`);

--
-- Индексы таблицы `nameproduct`
--
ALTER TABLE `nameproduct`
  ADD PRIMARY KEY (`ordername`);

--
-- Индексы таблицы `nosebridge`
--
ALTER TABLE `nosebridge`
  ADD PRIMARY KEY (`ordernose`);

--
-- Индексы таблицы `polarization`
--
ALTER TABLE `polarization`
  ADD PRIMARY KEY (`orderpolariz`);

--
-- Индексы таблицы `rxable`
--
ALTER TABLE `rxable`
  ADD PRIMARY KEY (`orderrx`);

--
-- Индексы таблицы `typeform`
--
ALTER TABLE `typeform`
  ADD PRIMARY KEY (`ordertype`);

--
-- Индексы таблицы `widthlens`
--
ALTER TABLE `widthlens`
  ADD PRIMARY KEY (`orderwidthl`);

--
-- Индексы таблицы `сurvature`
--
ALTER TABLE `сurvature`
  ADD PRIMARY KEY (`ordercurvature`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `orderarticle` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `orderbrand` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `colorframe`
--
ALTER TABLE `colorframe`
  MODIFY `ordercolor` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `colorlens`
--
ALTER TABLE `colorlens`
  MODIFY `ordercollens` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `flex`
--
ALTER TABLE `flex`
  MODIFY `orderflex` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `formframe`
--
ALTER TABLE `formframe`
  MODIFY `orderform` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gender`
--
ALTER TABLE `gender`
  MODIFY `ordergenger` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `higthlens`
--
ALTER TABLE `higthlens`
  MODIFY `orderhigth` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lengthbracket`
--
ALTER TABLE `lengthbracket`
  MODIFY `orderlength` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `material`
--
ALTER TABLE `material`
  MODIFY `ordermaterial` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `nameproduct`
--
ALTER TABLE `nameproduct`
  MODIFY `ordername` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `nosebridge`
--
ALTER TABLE `nosebridge`
  MODIFY `ordernose` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `polarization`
--
ALTER TABLE `polarization`
  MODIFY `orderpolariz` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `rxable`
--
ALTER TABLE `rxable`
  MODIFY `orderrx` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `typeform`
--
ALTER TABLE `typeform`
  MODIFY `ordertype` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `widthlens`
--
ALTER TABLE `widthlens`
  MODIFY `orderwidthl` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `сurvature`
--
ALTER TABLE `сurvature`
  MODIFY `ordercurvature` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
