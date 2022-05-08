-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Maj 2022, 22:40
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Baza danych: `cms`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_polish_ci NOT NULL,
  `content` text COLLATE utf8mb4_polish_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`) VALUES
(1, 'Test', 'Tresc', '2022-04-10 00:00:00'),
(2, 'a', 'f', '2022-04-10 00:00:00'),
(3, 'Artykul', 'Tresc', '2022-04-23 11:13:12');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL,
  `descr` varchar(128) COLLATE utf8mb4_polish_ci NOT NULL,
  `name_simple` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`id`, `name`, `descr`, `name_simple`) VALUES
(1, 'Aktualności', '', 'aktualnosci'),
(2, 'Ogłoszenia', '', 'ogloszenia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_polish_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `article_id`, `comment`, `date`) VALUES
(1, 1, 1, 'Treść komentarza', '2022-05-08 22:27:29'),
(2, 1, 3, 'Praesent viverra dolor ipsum, quis mattis elit suscipit varius. Proin sit amet lacinia lectus, ac pretium est. Donec diam enim, vestibulum a felis nec, vestibulum fermentum tellus. Morbi aliquet, erat quis congue faucibus, nisl ipsum interdum nisl, pharetra aliquet', '2022-05-08 22:39:51');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `searchstats`
--

CREATE TABLE `searchstats` (
  `id` int(11) NOT NULL,
  `q` varchar(256) COLLATE utf8mb4_polish_ci NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `searchstats`
--

INSERT INTO `searchstats` (`id`, `q`, `count`) VALUES
(1, 'harmonogram', 3),
(2, 'elearning', 2),
(3, 'hello there', 2),
(5, 'Test', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `regDate` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(64) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `regDate`, `email`) VALUES
(1, 'Użytkownik', '$2y$10$e7VbhuUeflylaSBAU5dGBu63ayNbLRZMI7aEdokiE4Qa5nuYNQCmy', '2021-11-20', 'user@example.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `viewstats`
--

CREATE TABLE `viewstats` (
  `id` int(11) NOT NULL,
  `href` varchar(256) COLLATE utf8mb4_polish_ci NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `viewstats`
--

INSERT INTO `viewstats` (`id`, `href`, `name`, `views`) VALUES
(15, 'http://cms.kw/admin/', 'index.php', 17),
(16, 'http://cms.kw/admin/addarticle.php', 'addarticle.php', 34),
(17, 'http://cms.kw/admin/disparticle.php', 'disparticle.php', 40),
(19, 'http://cms.kw/admin/comments.php', 'comments.php', 22),
(20, 'http://cms.kw/admin/addarticle.php?title=a&content=c', 'addarticle.php', 1),
(21, 'http://cms.kw/admin/addarticle.php?title=d&content=f', 'addarticle.php', 5),
(22, 'http://cms.kw/admin/index.php', 'index.php', 1),
(23, 'http://cms.kw/admin/profile.php?userid=1', 'profile.php', 3),
(24, 'http://cms.kw/admin/disparticle.php?articleid=1', 'disparticle.php', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `searchstats`
--
ALTER TABLE `searchstats`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `viewstats`
--
ALTER TABLE `viewstats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `searchstats`
--
ALTER TABLE `searchstats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `viewstats`
--
ALTER TABLE `viewstats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;
