-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 16 2026 г., 16:30
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `electronic-shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `photo`) VALUES
(1, 'Процессор AMD Ryzen 7 5700X OEM', 14999, 'Процессор AMD Ryzen 7 5700X OEM является одним из флагманских устройств от AMD. Он основан на архитектуре Zen 3. Конфигурация модели представляет собой 8-ядерное и 16-потоковое устройство. Ее рабочая частота составляет 3.4 ГГц, а максимальная – 4.6 ГГц в режиме Turbo.', 'cd544c1a7746cb99b220d5c90b1a2107a94a08112077e6015d2040a83afae4c5.jpg.webp'),
(2, 'Материнская плата MSI MPG B550 GAMING PLUS', 14299, 'Материнская плата MSI MPG B550 GAMING PLUS – отличный выбор для любителей игр, предпочитающих использовать процессоры AMD. Устройство совместимо с процессорами, для установки которых используется сокет AM4. Плата, располагающая возможностью монтажа до 128 ГБ памяти, подходит не только для развлечений, но и для профессиональных задач. В этой связи вам наверняка будет полезна поддержка NVMe, благодаря которой можно задействовать скоростные SSD.\r\nПлата MSI MPG B550 GAMING PLUS поддерживает технологию CrossFire X. Одновременно можно использовать 2 видеокарты.', '489e1dfb774c68ca8c80a1cd66477739765abc0c00722185d2c1178489ffdec3.png.webp'),
(3, 'Оперативная память Kingston FURY Beast Black 32 ГБ', 26999, 'Оперативная память Kingston FURY Beast Black [KF432C16BB1K2/32WP] соответствует типу DDR4. Системная память представлена комплектом из двух модулей стандарта DDR4, которые обладают емкостью по 16 ГБ и частотой 3200 МГц.', 'ec0756a0e464e3ee054995708d915d7e1b238888416107891fba8108ff4c5be6.jpg.webp'),
(4, 'Блок питания DEEPCOOL PF750 черный', 4699, 'Блок питания DEEPCOOL PF750 [R-PF750D-HA0B-EU] с мощностью по всем линиям на выходе 750 Вт достаточно производителен, чтобы обеспечивать питание всем модулям игрового системного блока. В этом устройстве предусмотрены кабели черного цвета, на которых установлены как основной разъем питания, так и интерфейс 4+4 pin CPU для подключения ЦПУ, разъемы для SATA-накопителей (до 6 шт) и видеокарт (до 4 шт). Сетевой кабель поставляется вместе с БП, рассчитанным на работу при входном напряжении 200-240 В.', '74c7a89208c221e785c0d1da83dbbf565f4636c187bce0b6c803074a329228be.jpg.webp'),
(5, 'Видеокарта Palit GeForce RTX 5060 Dual', 31999, 'Видеокарта Palit GeForce RTX 5060 Dual [NE75060019P1-GB2063D] поддерживает технологию «0 децибел» и работает бесшумно при сниженных нагрузках. Назначение устройства – сборка и модернизация игровых компьютеров. Видеоадаптер оснащен GPU NVIDIA GeForce RTX 5060, потенциал которого реализует 8-гигабайтная память DDR7 с эффективной частотой 28000 МГц. 3840 универсальных процессоров увеличивают частоту кадров, 30 ядер RT производят аппаратное ускорение трассировки лучей, а 120 тензорных ядер увеличивают производительность при рендеринге. Производительность модели позволяет использовать большинство игр на средних или высоких графических настройках.', '0783077cf860895ce4d2d105c675df02a8e49ca2e3787a2c2cba6899ee131331.jpg.webp');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
