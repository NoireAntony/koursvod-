-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2026 г., 13:25
-- Версия сервера: 5.7.39-log
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `koursvod`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kours`
--

CREATE TABLE `kours` (
  `id_kours` int(11) NOT NULL,
  `name_kours` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kours`
--

INSERT INTO `kours` (`id_kours`, `name_kours`, `img`) VALUES
(1, ' Вождение катеров', ''),
(2, ' Вождение круизных лайнеров', ''),
(3, ' Вождение яхт', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `fio` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_rod` date NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(31) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `fio`, `login`, `password`, `date_rod`, `email`, `phone`) VALUES
(1, 'Иванов Антон ', 'Admin26', 'Demo20', '2002-05-15', 'noire-antony@mail.ru', '+7(988)-876-22-55'),
(2, 'Петров Петр', 'petr', 'petr123', '1993-02-21', 'petr@mail.ru', '+8(342)-243-32-55'),
(3, 'Юрий Прокудин', 'prok', 'prok4321', '1999-03-21', 'prok@mail.ru', '+7(321)-123-54-21'),
(4, 'Екатерина Волкова', 'wolf', 'wolf12345', '1995-04-21', 'wolf@mail.ru', '+7(321)-432-53-57');

-- --------------------------------------------------------

--
-- Структура таблицы `zayavka`
--

CREATE TABLE `zayavka` (
  `id_zayavka` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kours` int(11) NOT NULL,
  `date` date NOT NULL,
  `oplate` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zayavka`
--

INSERT INTO `zayavka` (`id_zayavka`, `id_user`, `id_kours`, `date`, `oplate`, `status`) VALUES
(1, 2, 1, '2026-05-20', 'Наличные', 'Идет обучение'),
(2, 3, 2, '2026-05-22', 'Картой', 'Обучение завершено'),
(3, 4, 3, '2026-05-23', 'Наличные', 'Новая');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kours`
--
ALTER TABLE `kours`
  ADD PRIMARY KEY (`id_kours`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `zayavka`
--
ALTER TABLE `zayavka`
  ADD PRIMARY KEY (`id_zayavka`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kours` (`id_kours`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kours`
--
ALTER TABLE `kours`
  MODIFY `id_kours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `zayavka`
--
ALTER TABLE `zayavka`
  MODIFY `id_zayavka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `zayavka`
--
ALTER TABLE `zayavka`
  ADD CONSTRAINT `zayavka_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zayavka_ibfk_2` FOREIGN KEY (`id_kours`) REFERENCES `kours` (`id_kours`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
