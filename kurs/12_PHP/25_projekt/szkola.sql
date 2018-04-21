-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Kwi 2018, 12:48
-- Wersja serwera: 10.1.31-MariaDB
-- Wersja PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `szkola`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `administracja`
--

CREATE TABLE `administracja` (
  `idAdministracja` int(10) UNSIGNED NOT NULL,
  `uprawnienieId` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imie` varchar(40) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `haslo` varchar(40) NOT NULL,
  `aktywny` enum('aktywny','nieaktywny','usunięty','zablokowany') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `administracja`
--

INSERT INTO `administracja` (`idAdministracja`, `uprawnienieId`, `login`, `email`, `imie`, `nazwisko`, `haslo`, `aktywny`) VALUES
(1, 1, 'admin', 'admin@gmail.com', 'Jan', 'Kowal', 'tajne', 'aktywny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kierunek`
--

CREATE TABLE `kierunek` (
  `idKierunek` int(10) UNSIGNED NOT NULL,
  `kierunek` varchar(50) NOT NULL,
  `skrot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `kierunek`
--

INSERT INTO `kierunek` (`idKierunek`, `kierunek`, `skrot`) VALUES
(1, 'Programowanie', 'Prog'),
(2, 'Technik informatyk', 'TI'),
(3, 'Sieci komputerowe', 'Sk');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasa`
--

CREATE TABLE `klasa` (
  `idKlasa` int(10) UNSIGNED NOT NULL,
  `klasa` varchar(5) NOT NULL,
  `kierunekId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `klasa`
--

INSERT INTO `klasa` (`idKlasa`, `klasa`, `kierunekId`) VALUES
(1, '1Ta', 1),
(2, '1Tb', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lekcja`
--

CREATE TABLE `lekcja` (
  `idLekcja` int(11) NOT NULL,
  `nr` tinyint(3) UNSIGNED NOT NULL,
  `poczatek` time NOT NULL,
  `koniec` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `lekcja`
--

INSERT INTO `lekcja` (`idLekcja`, `nr`, `poczatek`, `koniec`) VALUES
(1, 1, '08:00:00', '08:45:00'),
(2, 2, '08:50:00', '09:35:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciel`
--

CREATE TABLE `nauczyciel` (
  `idNauczyciel` int(10) UNSIGNED NOT NULL,
  `imie` varchar(40) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `miasto` varchar(40) NOT NULL,
  `dataUrodzenia` date NOT NULL,
  `notatka` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `nauczyciel`
--

INSERT INTO `nauczyciel` (`idNauczyciel`, `imie`, `nazwisko`, `miasto`, `dataUrodzenia`, `notatka`) VALUES
(1, 'Gerwazy', 'Nowak', 'Poznań', '1980-05-12', 'informatyka, matematyka, jest ok'),
(2, 'Martyna', 'Kowal', 'Krzyż', '2000-05-12', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `plan`
--

CREATE TABLE `plan` (
  `idLekcja` bigint(20) UNSIGNED NOT NULL,
  `klasaId` int(11) NOT NULL,
  `nauczycielId` int(11) NOT NULL,
  `kierunekId` int(11) NOT NULL,
  `salaId` int(11) NOT NULL,
  `przedmiotId` int(11) NOT NULL,
  `data` date NOT NULL,
  `lekcjaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `plan`
--

INSERT INTO `plan` (`idLekcja`, `klasaId`, `nauczycielId`, `kierunekId`, `salaId`, `przedmiotId`, `data`, `lekcjaId`) VALUES
(1, 1, 1, 1, 1, 1, '2018-04-27', 1),
(2, 1, 1, 1, 1, 1, '2018-04-27', 2),
(3, 1, 1, 1, 1, 1, '2018-04-27', 3),
(4, 1, 1, 1, 1, 1, '2018-04-27', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmiot`
--

CREATE TABLE `przedmiot` (
  `idPrzedmiot` int(10) UNSIGNED NOT NULL,
  `przedmiot` varchar(60) NOT NULL,
  `skrot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `przedmiot`
--

INSERT INTO `przedmiot` (`idPrzedmiot`, `przedmiot`, `skrot`) VALUES
(1, 'Programowanie aplikacji internetowych', 'PAI'),
(2, 'Sieci komputerowe', 'SK'),
(3, 'Matematyka', 'M'),
(4, 'Fizyka', 'F'),
(5, 'Informatyka', 'I');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmiotkier`
--

CREATE TABLE `przedmiotkier` (
  `przedmiotId` int(11) NOT NULL,
  `kierunekId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `przedmiotkier`
--

INSERT INTO `przedmiotkier` (`przedmiotId`, `kierunekId`) VALUES
(1, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przydzialnaucz`
--

CREATE TABLE `przydzialnaucz` (
  `idPrzydzialNaucz` int(10) UNSIGNED NOT NULL,
  `idNauczyciel` int(11) NOT NULL,
  `przedmiotId` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `przydzialnaucz`
--

INSERT INTO `przydzialnaucz` (`idPrzydzialNaucz`, `idNauczyciel`, `przedmiotId`, `data`) VALUES
(1, 2, 1, '2018-04-21 09:41:20'),
(2, 2, 2, '2018-04-21 09:41:20');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przydzialuczen`
--

CREATE TABLE `przydzialuczen` (
  `idPrzydzialUczen` int(10) UNSIGNED NOT NULL,
  `uczenId` int(11) NOT NULL,
  `klasaId` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `przydzialuczen`
--

INSERT INTO `przydzialuczen` (`idPrzydzialUczen`, `uczenId`, `klasaId`, `data`) VALUES
(1, 1, 1, '2018-04-21 09:46:40'),
(2, 2, 1, '2018-04-21 09:46:40'),
(3, 1, 2, '2018-04-21 09:46:40'),
(4, 1, 1, '2018-04-21 10:07:17');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sala`
--

CREATE TABLE `sala` (
  `idSala` int(11) NOT NULL,
  `typId` int(11) NOT NULL,
  `nr` varchar(4) NOT NULL,
  `miejsca` tinyint(3) UNSIGNED NOT NULL,
  `projektor` tinyint(1) NOT NULL DEFAULT '1',
  `tablicaMulti` tinyint(1) NOT NULL DEFAULT '0',
  `notatka` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `sala`
--

INSERT INTO `sala` (`idSala`, `typId`, `nr`, `miejsca`, `projektor`, `tablicaMulti`, `notatka`) VALUES
(1, 1, '20', 16, 1, 0, 'dostępnych 5 laptopów, dodatkowo oprogramowanie do programowania'),
(2, 2, '10', 16, 1, 1, 'język polski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typ`
--

CREATE TABLE `typ` (
  `idTyp` int(10) UNSIGNED NOT NULL,
  `typ` varchar(40) NOT NULL,
  `notatka` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `typ`
--

INSERT INTO `typ` (`idTyp`, `typ`, `notatka`) VALUES
(1, 'Komputerowa', 'sala komputerowa'),
(2, 'wykładowa', 'sala wykładowa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczen`
--

CREATE TABLE `uczen` (
  `idUczen` int(10) UNSIGNED NOT NULL,
  `imie` varchar(40) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `miasto` varchar(40) NOT NULL,
  `dataUrodzenia` date NOT NULL,
  `notatka` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `uczen`
--

INSERT INTO `uczen` (`idUczen`, `imie`, `nazwisko`, `miasto`, `dataUrodzenia`, `notatka`) VALUES
(1, 'Janusz', 'Nowak', 'Poznań', '2000-01-01', 'Janusz internetu'),
(2, 'Anna', 'Kowal', 'Gniezno', '2000-02-14', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uprawnienie`
--

CREATE TABLE `uprawnienie` (
  `idUprawnienie` int(10) UNSIGNED NOT NULL,
  `uprawnienie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `uprawnienie`
--

INSERT INTO `uprawnienie` (`idUprawnienie`, `uprawnienie`) VALUES
(1, 'admin'),
(2, 'sekretariat'),
(3, 'uczen'),
(4, 'gosc');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `administracja`
--
ALTER TABLE `administracja`
  ADD PRIMARY KEY (`idAdministracja`);

--
-- Indeksy dla tabeli `kierunek`
--
ALTER TABLE `kierunek`
  ADD PRIMARY KEY (`idKierunek`);

--
-- Indeksy dla tabeli `klasa`
--
ALTER TABLE `klasa`
  ADD PRIMARY KEY (`idKlasa`);

--
-- Indeksy dla tabeli `lekcja`
--
ALTER TABLE `lekcja`
  ADD PRIMARY KEY (`idLekcja`);

--
-- Indeksy dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
  ADD PRIMARY KEY (`idNauczyciel`);

--
-- Indeksy dla tabeli `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`idLekcja`),
  ADD KEY `klasaId` (`klasaId`);

--
-- Indeksy dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
  ADD PRIMARY KEY (`idPrzedmiot`);

--
-- Indeksy dla tabeli `przydzialnaucz`
--
ALTER TABLE `przydzialnaucz`
  ADD PRIMARY KEY (`idPrzydzialNaucz`),
  ADD KEY `nauczycielId` (`idNauczyciel`);

--
-- Indeksy dla tabeli `przydzialuczen`
--
ALTER TABLE `przydzialuczen`
  ADD PRIMARY KEY (`idPrzydzialUczen`),
  ADD KEY `uczenId` (`uczenId`),
  ADD KEY `kierunekId` (`klasaId`);

--
-- Indeksy dla tabeli `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`idSala`),
  ADD KEY `typId` (`typId`);

--
-- Indeksy dla tabeli `typ`
--
ALTER TABLE `typ`
  ADD PRIMARY KEY (`idTyp`);

--
-- Indeksy dla tabeli `uczen`
--
ALTER TABLE `uczen`
  ADD PRIMARY KEY (`idUczen`);

--
-- Indeksy dla tabeli `uprawnienie`
--
ALTER TABLE `uprawnienie`
  ADD PRIMARY KEY (`idUprawnienie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `administracja`
--
ALTER TABLE `administracja`
  MODIFY `idAdministracja` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `kierunek`
--
ALTER TABLE `kierunek`
  MODIFY `idKierunek` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `klasa`
--
ALTER TABLE `klasa`
  MODIFY `idKlasa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `lekcja`
--
ALTER TABLE `lekcja`
  MODIFY `idLekcja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
  MODIFY `idNauczyciel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `plan`
--
ALTER TABLE `plan`
  MODIFY `idLekcja` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
  MODIFY `idPrzedmiot` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `przydzialnaucz`
--
ALTER TABLE `przydzialnaucz`
  MODIFY `idPrzydzialNaucz` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `przydzialuczen`
--
ALTER TABLE `przydzialuczen`
  MODIFY `idPrzydzialUczen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `sala`
--
ALTER TABLE `sala`
  MODIFY `idSala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `typ`
--
ALTER TABLE `typ`
  MODIFY `idTyp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uczen`
--
ALTER TABLE `uczen`
  MODIFY `idUczen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uprawnienie`
--
ALTER TABLE `uprawnienie`
  MODIFY `idUprawnienie` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
