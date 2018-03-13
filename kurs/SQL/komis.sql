-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Lut 2018, 11:01
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
-- Baza danych: `komis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `id` int(11) NOT NULL,
  `marka` text NOT NULL,
  `model` text NOT NULL,
  `rocznik` year(4) NOT NULL,
  `kolor` text NOT NULL,
  `stan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`id`, `marka`, `model`, `rocznik`, `kolor`, `stan`) VALUES
(1, 'Fiat', 'Punto', 2016, 'czerwony', 'bardzo dobry'),
(2, 'Fiat', 'Punto', 2002, 'czerwony', 'dobry'),
(3, 'Fiat', 'Punto', 2007, 'niebieski', 'bardzo bobry'),
(4, 'Opel', 'Corsa', 2016, 'grafitowy', 'bardzo dobry'),
(5, 'Opel', 'Astra', 2003, 'niebieski', 'porysowany lakier'),
(6, 'Toyota', 'Corolla', 2016, 'czerwony', 'bardzo dobry'),
(7, 'Toyota', 'Corolla', 2014, 'szary', 'dobry'),
(8, 'Toyota', 'Yaris', 2004, 'granatowy', 'dobry');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(11) NOT NULL,
  `Samochody_id` int(11) NOT NULL,
  `Klient` text NOT NULL,
  `telefon` text NOT NULL,
  `dataZam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id`, `Samochody_id`, `Klient`, `telefon`, `dataZam`) VALUES
(0, 5, '	\r\nAnna Kowalska', '444555666', '2018-02-25'),
(1, 3, 'Anna Kowalska', '111222333', '2016-02-15'),
(2, 6, 'Jan Nowakowski', '222111333', '2016-02-15'),
(3, 8, 'Marcin Kolwal', '333111222', '2016-02-15');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Samochody_id` (`Samochody_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`Samochody_id`) REFERENCES `samochody` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
