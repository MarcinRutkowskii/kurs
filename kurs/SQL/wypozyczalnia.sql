-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Lut 2018, 13:34
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
-- Baza danych: `wypozyczalnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czytelnik`
--

CREATE TABLE `czytelnik` (
  `id_czytelnik` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(40) NOT NULL,
  `kod_pocztowy` mediumint(5) NOT NULL,
  `miasto` varchar(30) NOT NULL DEFAULT 'Poznań',
  `ulica` varchar(40) NOT NULL,
  `nr` varchar(9) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `czytelnik`
--

INSERT INTO `czytelnik` (`id_czytelnik`, `imie`, `nazwisko`, `kod_pocztowy`, `miasto`, `ulica`, `nr`, `email`) VALUES
(1, 'Kamil', 'Adach', 61100, 'Poznań', 'Wolna', '5c', 'kamil.adach@gmail.com'),
(2, 'Martyna', 'Maciaszczyk', 62200, 'Poznań', 'Polna', '10', 'martyna@o2.pl'),
(3, 'Anna', 'Nowak', 62200, 'Poznań', 'Polna', '3', 'anna@o2.pl'),
(4, 'Paweł', 'Nowak', 61100, 'Poznań', 'Polna', '2', 'pawel@o2.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazka`
--

CREATE TABLE `ksiazka` (
  `id_ksiazka` int(11) NOT NULL,
  `tytul` varchar(40) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `rok_wydania` year(4) NOT NULL,
  `wydawnictwo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ksiazka`
--

INSERT INTO `ksiazka` (`id_ksiazka`, `tytul`, `autor`, `isbn`, `rok_wydania`, `wydawnictwo`) VALUES
(1, 'Wiedźmin Chrzest Ognia', 'Andrzej Sapkowski', '1234567890123', 1996, 'superNOWA'),
(2, 'Wiedźmin Miecz przeznaczenia', 'Andrzej Sapkowski', '1234567890124', 1992, 'superNOWA');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenie`
--

CREATE TABLE `wypozyczenie` (
  `id_wypozyczenie` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_czytelnik` int(11) NOT NULL,
  `id_ksiazka` int(11) NOT NULL,
  `status` enum('dostępna','wypożyczona','zarezerwowana','przetrzymana') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `wypozyczenie`
--

INSERT INTO `wypozyczenie` (`id_wypozyczenie`, `data`, `id_czytelnik`, `id_ksiazka`, `status`) VALUES
(1, '2018-02-24 11:29:12', 1, 1, 'wypożyczona'),
(2, '2018-02-24 11:29:12', 2, 1, 'zarezerwowana');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `czytelnik`
--
ALTER TABLE `czytelnik`
  ADD PRIMARY KEY (`id_czytelnik`);

--
-- Indeksy dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  ADD PRIMARY KEY (`id_ksiazka`);

--
-- Indeksy dla tabeli `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  ADD PRIMARY KEY (`id_wypozyczenie`),
  ADD KEY `id_czytelnik` (`id_czytelnik`),
  ADD KEY `id_ksiazka` (`id_ksiazka`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `czytelnik`
--
ALTER TABLE `czytelnik`
  MODIFY `id_czytelnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  MODIFY `id_ksiazka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  MODIFY `id_wypozyczenie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  ADD CONSTRAINT `wypozyczenie_ibfk_1` FOREIGN KEY (`id_czytelnik`) REFERENCES `czytelnik` (`id_czytelnik`),
  ADD CONSTRAINT `wypozyczenie_ibfk_2` FOREIGN KEY (`id_ksiazka`) REFERENCES `ksiazka` (`id_ksiazka`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
