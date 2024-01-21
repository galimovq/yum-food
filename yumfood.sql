-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 21 2024 г., 19:44
-- Версия сервера: 5.7.35-38
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: ``
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, ''),
(3, 'Сургут'),
(4, 'Тобольск'),
(5, 'Нефтеюганск'),
(6, 'Тюмень');

-- --------------------------------------------------------

--
-- Структура таблицы `favourites`
--

CREATE TABLE IF NOT EXISTS `favourites` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL,
  `food` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  KEY `food` (`food`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `price` float(6,2) NOT NULL,
  `weight` int(5) NOT NULL,
  `user` int(10) NOT NULL,
  `link` varchar(256) NOT NULL,
  `about` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `weight`, `user`, `link`, `about`) VALUES
(1, 'блюдо 1', 100.20, 200, 1, 'https://yum-food.ru/pages/food/', 'Немного о блюде'),
(3, 'блюдо 2', 2000.20, 2000, 1, 'https://yum-food.ru/pages/food/', 'Немного о блюде буквально 2 строки'),
(4, 'Мясо по-французки', 300.00, 150, 1, 'https://yum-food.ru/pages/food/', 'Немного о блюде буквально 2-3 строки'),
(5, 'Картошка фри', 300.00, 150, 1, 'https://yum-food.ru/pages/food/', 'Немного о блюде буквально 2-3 строки'),
(6, 'Печеночный торт', 3000.00, 500, 1, 'https://yum-food.ru/pages/food/', 'Немного о блюде');

-- --------------------------------------------------------

--
-- Структура таблицы `food_storage`
--

CREATE TABLE IF NOT EXISTS `food_storage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `food` int(10) NOT NULL,
  `priority` int(2) NOT NULL,
  `link` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `food` (`food`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `food_storage`
--

INSERT INTO `food_storage` (`id`, `food`, `priority`, `link`) VALUES
(5, 3, 1, 'https://yum-food.ru/assets/img/photos/img_0.jpg'),
(6, 1, 3, 'https://yum-food.ru/assets/img/photos/img_0.jpg'),
(7, 4, 1, 'https://yum-food.ru/assets/img/photos/img_0.jpg'),
(8, 5, 1, 'https://yum-food.ru/assets/img/photos/img_0.jpg'),
(9, 6, 1, 'https://yum-food.ru/assets/img/photos/img_0.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `food_type`
--

CREATE TABLE IF NOT EXISTS `food_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `food_type`
--

INSERT INTO `food_type` (`id`, `name`) VALUES
(1, 'Горячее'),
(2, 'Холодное');

-- --------------------------------------------------------

--
-- Структура таблицы `food_types`
--

CREATE TABLE IF NOT EXISTS `food_types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `food` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `food` (`food`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `food_types`
--

INSERT INTO `food_types` (`id`, `food`, `type`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(32) NOT NULL,
  `phone` varchar(18) NOT NULL DEFAULT '+7 (000) 000-00-00',
  `email` varchar(256) NOT NULL DEFAULT 'null@null.null',
  `name_1` varchar(100) NOT NULL DEFAULT 'null',
  `name_2` varchar(100) NOT NULL DEFAULT 'null',
  `name_3` varchar(100) NOT NULL DEFAULT 'null',
  `about` varchar(256) NOT NULL,
  `use_phone` tinyint(1) NOT NULL,
  `use_telegram` tinyint(1) NOT NULL,
  `use_whatsapp` tinyint(1) NOT NULL,
  `use_vk` tinyint(1) NOT NULL,
  `link_vk` varchar(256) NOT NULL,
  `city` int(10) NOT NULL,
  `street` varchar(150) NOT NULL,
  `house` varchar(10) NOT NULL,
  `photo_link` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `phone` (`phone`),
  KEY `email` (`email`),
  KEY `city` (`city`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `password`, `phone`, `email`, `name_1`, `name_2`, `name_3`, `about`, `use_phone`, `use_telegram`, `use_whatsapp`, `use_vk`, `link_vk`, `city`, `street`, `house`, `photo_link`, `link`) VALUES
(1, '123', '+7 (996) 000-00-00', 'null@null.null', 'null_1', 'null_2', 'null_3', 'Небольшое описание обо мне', 1, 0, 1, 0, '', 1, 'Университетская', '29', 'https://yum-food.ru/assets/img/photos/people_0.jpg', 'https://yum-food.ru/pages/cook/'),
(3, '1234', '+7 (996) 000-00-01', 'null@null.null', 'null_1', 'null_2', 'null_3', 'Небольшое описание обо мне', 1, 0, 1, 0, '', 1, 'Университетская', '29', 'https://yum-food.ru/assets/img/photos/people_0.jpg', 'https://yum-food.ru/pages/cook/'),
(18, '', '+7 (999) 999-99-77', 'ilya.tolpeykin@yandex.ru', 'Любитель еды', '66958', 'null', '', 1, 0, 0, 0, '', 1, '', '', 'https://yum-food.ru/assets/img/photos/man.jpg', 'https://yum-food.ru/pages/cooks/cook-6f4922f45568161a8cdf4ad2299f6d23/'),
(19, '', '+7 (999) 999-99-88', 'ilya.tolpeykin@mail.ru', 'Любитель еды', '70275', 'null', '', 1, 0, 0, 0, '', 1, '', '', 'https://yum-food.ru/assets/img/photos/man.jpg', 'https://yum-food.ru/pages/cooks/cook-1f0e3dad99908345f7439f8ffabdffc4/'),
(20, '', '+7 (999) 999-99-48', 'murderer-92@mail.ru', 'gjkmpjsdf', '19264', 'null', '', 1, 1, 1, 1, '', 5, '11А Мкр.', '3', 'https://yum-food.ru/assets/img/photos/man.jpg', 'https://yum-food.ru/pages/cooks/cook-98f13708210194c475687be6106a3b84/');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`food`) REFERENCES `food` (`id`);

--
-- Ограничения внешнего ключа таблицы `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `food_storage`
--
ALTER TABLE `food_storage`
  ADD CONSTRAINT `food_storage_ibfk_1` FOREIGN KEY (`food`) REFERENCES `food` (`id`);

--
-- Ограничения внешнего ключа таблицы `food_types`
--
ALTER TABLE `food_types`
  ADD CONSTRAINT `food_types_ibfk_1` FOREIGN KEY (`food`) REFERENCES `food` (`id`),
  ADD CONSTRAINT `food_types_ibfk_2` FOREIGN KEY (`type`) REFERENCES `food_type` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`city`) REFERENCES `cities` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
