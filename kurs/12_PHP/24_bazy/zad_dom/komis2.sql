-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Kwi 2018, 22:36
-- Wersja serwera: 10.1.30-MariaDB
-- Wersja PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `komis2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auta`
--

CREATE TABLE `auta` (
  `id` int(11) NOT NULL,
  `login` varchar(40) NOT NULL,
  `marka` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `rocznik` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `auta`
--

INSERT INTO `auta` (`id`, `login`, `marka`, `model`, `rocznik`) VALUES
(1, 'Marcin', 'Audi', 'A4', 2009),
(2, 'Janusz', 'Volkswagen', 'Passat', 2010),
(3, 'Marcin', 'Mitsubishi', 'Lancer Evo X', 2009),
(4, 'Basia', 'Skoda', 'Yeti', 2012);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `login` varchar(40) NOT NULL,
  `imie` varchar(40) NOT NULL,
  `nazwisko` varchar(40) NOT NULL,
  `haslo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`login`, `imie`, `nazwisko`, `haslo`) VALUES
('Basia', 'Basia', 'Grubasia', 'Grubasia'),
('Janusz', 'Janusz', 'Biedny', 'Biedny'),
('Marcin', 'Marcin', 'Bogaty', 'Bogaty');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `auta`
--
ALTER TABLE `auta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_wlasciciela` (`login`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `auta`
--
ALTER TABLE `auta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD CONSTRAINT `klienci_ibfk_1` FOREIGN KEY (`login`) REFERENCES `auta` (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
