-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Kwi 2022, 18:15
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
(2, 'a', 'f', '2022-04-10 00:00:00');

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
(15, 'http://cms.kw/admin/', 'index.php', 13),
(16, 'http://cms.kw/admin/addarticle.php', 'addarticle.php', 28),
(17, 'http://cms.kw/admin/disparticle.php', 'disparticle.php', 36),
(19, 'http://cms.kw/admin/comments.php', 'comments.php', 2),
(20, 'http://cms.kw/admin/addarticle.php?title=a&content=c', 'addarticle.php', 1),
(21, 'http://cms.kw/admin/addarticle.php?title=d&content=f', 'addarticle.php', 5);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;
