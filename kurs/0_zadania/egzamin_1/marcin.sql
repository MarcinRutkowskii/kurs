-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Lut 2018, 17:47
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `marcin`
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
(1, 'Kamil', 'Adach', 64100, 'Leszno', 'Wolna', '5c', 'Kamil.adach@gmail.com'),
(2, 'Martyna', 'Maciaszczyk', 62200, 'Poznań', 'Poznańska', '10', 'martyna@o2.pl'),
(3, 'Natalia', 'Nowak', 62200, 'Poznań', 'Polna', '3', 'anna@o2.pl'),
(4, 'Paweł', 'Nowak', 61100, 'Poznań', 'Polna', '2', 'pawel@o2.pl'),
(5, 'Krystyna', 'Nowak', 61100, 'Poznań', 'Marszalkowska', '13', 'krycha@wp.pl'),
(6, 'Janusz', 'Pomelo', 22355, 'Gniezno', 'Kwiatowa', '1', 'JanuszTo@gmail.com'),
(7, 'Katarzyna', 'Mała', 44777, 'Gniezno', 'Kwiatowa', '5', 'Anna.Buziaczek@wp.pl');

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
  `wydawnictwo` varchar(30) NOT NULL,
  `cena` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ksiazka`
--

INSERT INTO `ksiazka` (`id_ksiazka`, `tytul`, `autor`, `isbn`, `rok_wydania`, `wydawnictwo`, `cena`) VALUES
(1, 'Wiedźmin Chrzest Ognia', 'Andrzej Sapkowski', '1123456778901', 1996, 'superNOWA', 10.50),
(2, 'Wiedzmin Miecz Przeznaczenia', 'Andrzej Sapkowski', '1234567890123', 1992, 'superNowa', 999.99),
(3, 'a', 'a', '1', 1991, 'a', 1.25),
(4, 'b', 'a', '1', 1991, 'a', 2.00),
(5, 'c', 'c', '1223', 1989, 'nowaEra', 5.00),
(6, 'd', 'd', '3', 1987, 'Era', 12.00),
(9, 'sadas', 'ddd', '12335', 1990, 'asdasd', 1.25);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `nazwa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '2018-02-24 14:31:20', 1, 2, 'zarezerwowana'),
(2, '2018-02-24 11:29:11', 2, 1, 'zarezerwowana'),
(3, '2018-02-24 14:31:20', 6, 3, 'zarezerwowana'),
(4, '2018-02-24 14:28:53', 1, 3, 'przetrzymana');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `czytelnik`
--
ALTER TABLE `czytelnik`
  ADD PRIMARY KEY (`id_czytelnik`);

--
-- Indexes for table `ksiazka`
--
ALTER TABLE `ksiazka`
  ADD PRIMARY KEY (`id_ksiazka`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  ADD PRIMARY KEY (`id_wypozyczenie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `czytelnik`
--
ALTER TABLE `czytelnik`
  MODIFY `id_czytelnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  MODIFY `id_ksiazka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1213;
--
-- AUTO_INCREMENT dla tabeli `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  MODIFY `id_wypozyczenie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
