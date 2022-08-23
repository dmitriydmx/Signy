-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2022 г., 16:45
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `signy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `name`, `mail`, `phone`, `message`) VALUES
(1, 'Дмитрий', 'dmitriydmx@mail.ru', '+71234567890', 'привет'),
(2, 'Дмитрий ', 'dmitriydmx@mail.ru', '+79141301894', 'asdas'),
(3, 'qwe', 'qweqw@ma', 'qweqw', 'eqweqwe'),
(4, 'Дмитрий ', '1@mail.ru', '+7965456465', 'awsds'),
(5, 'ываыв', 'dmitriydmx@mail.ru', 'ываывавы', 'ывавыаы'),
(6, 'Лена', 'dfgdfgfd@mail.ru', 'dfgfdgdfg', 'dfgfdgfdgfdgfdgfdg');

-- --------------------------------------------------------

--
-- Структура таблицы `subscription`
--

CREATE TABLE `subscription` (
  `id` int(10) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscription`
--

INSERT INTO `subscription` (`id`, `mail`) VALUES
(1, 'dmitriydmx@mail.ru'),
(2, '1@mail.ru'),
(3, 'dmitriydmx@mail.ru'),
(4, '2@mail.ru'),
(5, 'dmitriydmx@mail.ru'),
(6, '1@mail.ru'),
(7, '2@mail.ru'),
(8, 'dmitriydmx@mail.ru'),
(9, 'dmitriydmx@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `textforblog`
--

CREATE TABLE `textforblog` (
  `id` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `textforblog`
--

INSERT INTO `textforblog` (`id`, `id_user`, `img`, `title`, `text`) VALUES
(1, 0, 'img/blogImg1.png', 'Burn Calories Quicker in 30 Min.', 'Luxury is something everyone deserves from time to time. Such an indulgence can make a vacation a truly rejuvenating experience. One of the best ways to get the luxury of the rich and famous to fit into your budget can be yours through yacht charter companies. These companies specialize in creating custom sailing vacations that redefine travel. Planning Your Luxury Trip With your budget in mind, it is easy to plan a chartered yacht vacation. Companies often have a fleet of sailing vessels that can accommodate parties of various sizes. You may want to make it a more intimate trip with only close family. There are charters that can be rented for as few as two people. These include either a sailboat or motorboat and can come with or without a crew and captain to sail the ship for you. If you choose not to hire a crew, you will have to show that you are knowledgeable of sailing and can handle the ship competently. The next part of planning is to determine your starting and ending ports. This could be a place close to home and sail in one area or start and finish at two different ports. Generally, starting and stopping in the same port will save you money and is usually more convenient. You can also fly to a destination far from home and then sail another exotic sea. There are luxury yacht charter companies that cruise the Caribbean and Mediterranean seas or around Alaska, the Panama Canal, or anyplace you can imagine. Determining the type of cruise is another aspect of planning a chartered yachting trip. You can have as little or many crew members as the ship will hold. A captain takes all the worries out of navigating and onboard housekeeping services make it a real vacation that rivals the finest hotel services. You can also choose to have a chef and service crew as part of your vacation package. Your yacht is your hotel that travels with you. There is only one flight and one hotel to book! Then you take all of your luggage and unpack it just once to enjoy several days of new destinations. If you have never experienced cruising before, a chartered experience is a great way to get your feet wet. It is different from cruise lines with thousands of guests because the people on your ship will be your friends and family. The personal touches of a chartered trip will help you develop your love for the sea with all the best benefits of commercial cruises. If you like the idea of knowing what it is really like to sail, but don’t want to risk safety, you can charter a sailing cruise that puts you in the role of deck hand. A competent crew will direct you as to your “chores” for keeping the ship in top shape and on course. Destinations & Ports of important Charter Companies One of the greatest benefits of choosing a chartered cruise as a vacation is the choice. You will most likely have a rough itinerary and that can be affected by weather. However, you are flexible in deciding how long you want to stay in a particular port and if you want to add or subtract stops along the way. If you like the idea of knowing what it is really like to sail, but don’t want to risk safety, you can charter a sailing cruise that puts you in the role of deck hand. A competent crew will direct you as to your “chores” for keeping the ship in top shape and on course. Destinations & Ports of important Charter Companies One of the greatest benefits of choosing a chartered cruise as a vacation is the choice. You will most likely have a rough itinerary and that can be affected by weather. However, you are flexible in deciding how long you want to stay in a particular port and if you want to add or subtract stops along the way.'),
(2, 0, 'img/blogImg2.png', 'Lorem ipsum dolor sit amet consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate exercitationem a nam quas iusto nulla, sapiente quisquam voluptates placeat suscipit sed cumque. Necessitatibus excepturi, eligendi dolores fugit obcaecati iusto architecto maiores aperiam nostrum, accusamus fuga facilis deserunt autem eaque, itaque fugiat libero odio! Error, ipsam consequatur, quam quibusdam maxime, ab porro ducimus modi iure a voluptatibus ipsum illo repellat maiores corrupti minima doloremque corporis. Pariatur adipisci quae nulla blanditiis enim, similique quaerat sed ab, quia molestias optio nesciunt rem quidem quam cum in maiores! Deserunt non alias aliquam dolorum, ea, repellat quo in explicabo quidem, labore aspernatur saepe! Debitis voluptas et ratione atque? Voluptatum provident distinctio dolorum voluptatem perferendis fugit dolores molestias repellat, adipisci, sit inventore corporis sed sapiente minima libero expedita quidem reprehenderit ipsa impedit? Commodi veritatis quidem possimus delectus harum odio earum obcaecati! Illum iusto facere, similique aut quam libero velit sit non, eos praesentium tempore. Earum alias voluptate deserunt labore. Modi voluptate facere iure adipisci rem iste, labore culpa iusto, reiciendis, quae numquam. Veritatis aliquam iure debitis quas cum esse sit tempore dolorem molestiae reiciendis unde aspernatur rem voluptatum, delectus ducimus dolor deleniti perferendis suscipit! Deleniti ipsa voluptates praesentium voluptas culpa illum alias quis dolor assumenda mollitia quae, blanditiis nulla aspernatur esse vel obcaecati quisquam! Laboriosam pariatur aspernatur unde explicabo. Obcaecati autem esse possimus odit quas quos deleniti sequi vel itaque maxime placeat nihil explicabo amet, magnam pariatur consectetur nobis animi doloribus? Non libero atque et? Officiis voluptas fuga adipisci voluptates numquam labore laborum tempora modi saepe.'),
(3, NULL, 'img/blogImg3.png', 'Статья', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe harum reiciendis alias id suscipit ullam, eaque qui praesentium, illo delectus recusandae velit neque atque aspernatur. Sit hic dolore consequatur ad nemo laudantium excepturi, atque aliquam. Consectetur eum dolorum inventore quaerat, dolores tempore odit illum, qui maiores nam atque, fuga tempora quam et nisi quasi vel cumque quae? Voluptates minima ducimus ullam voluptatem harum, quia tempora delectus hic quaerat assumenda nulla, a placeat nam laudantium beatae inventore temporibus aut! Maiores, nulla! Iusto voluptatibus obcaecati ab excepturi blanditiis omnis fuga recusandae est quasi rem! Fuga beatae ea, laboriosam vel non dicta itaque?'),
(4, NULL, 'img/blogImg2.png', 'Название', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quasi obcaecati. Accusantium iure earum ratione, molestias autem eaque repudiandae fugiat incidunt nulla magni modi in minus, rerum aliquid deserunt perferendis enim laboriosam placeat. Iure sit adipisci, delectus doloremque atque harum facere eos accusamus saepe reiciendis molestiae ab assumenda porro veritatis aut quas. Quas quia ut possimus architecto animi incidunt autem sapiente? Consequatur iste explicabo nihil numquam harum, ad tenetur blanditiis mollitia maxime ipsa sit eius officia consectetur, dolor vel, illo officiis voluptatum eos necessitatibus eveniet saepe? Quae minus, recusandae cupiditate aliquam earum cumque, hic molestiae atque saepe reiciendis obcaecati nihil Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quasi obcaecati. Accusantium iure earum ratione, molestias autem eaque repudiandae fugiat incidunt nulla magni modi in minus, rerum aliquid deserunt perferendis enim laboriosam placeat. Iure sit adipisci, delectus doloremque atque harum facere eos accusamus saepe reiciendis molestiae ab assumenda porro veritatis aut quas. Quas quia ut possimus architecto animi incidunt autem sapiente? Consequatur iste explicabo nihil numquam harum, ad tenetur blanditiis mollitia maxime ipsa sit eius officia consectetur, dolor vel, illo officiis voluptatum eos necessitatibus eveniet saepe? Quae minus, recusandae cupiditate aliquam earum cumque, hic molestiae atque saepe reiciendis obcaecati nihil.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(18, 'admin1', '0ac6875d7953caf85fc33fe5abe4da01'),
(20, '123', '0ac6875d7953caf85fc33fe5abe4da01'),
(21, 'yhj', '99690866dc484fd93f993b7db5b31d97'),
(22, 'dmitriydmxdmitriydmx', '0ac6875d7953caf85fc33fe5abe4da01'),
(23, 'admin', 'f743618ebcac8121429376cde6db79cb'),
(24, '1', '0d9ee8f7d5a28213a78f6d2fe1d93844'),
(25, '1', '0d9ee8f7d5a28213a78f6d2fe1d93844');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `textforblog`
--
ALTER TABLE `textforblog`
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
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `textforblog`
--
ALTER TABLE `textforblog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
