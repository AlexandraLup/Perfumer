-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 21, 2019 la 01:27 PM
-- Versiune server: 10.1.38-MariaDB
-- Versiune PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `perfumer`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `comentarii`
--

CREATE TABLE `comentarii` (
  `id` int(10) NOT NULL,
  `id_produs` int(10) NOT NULL,
  `comentariu` varchar(10) NOT NULL,
  `nume_utilizator` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `comenzi`
--

CREATE TABLE `comenzi` (
  `id` int(10) NOT NULL,
  `id_utilizator` int(10) NOT NULL,
  `valoare` varchar(20) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `compozitii`
--

CREATE TABLE `compozitii` (
  `id` int(10) NOT NULL,
  `id_produs` int(10) NOT NULL,
  `note_baza` varchar(20) DEFAULT NULL,
  `note_inima` varchar(20) DEFAULT NULL,
  `note_varf` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cos_cumparaturi`
--

CREATE TABLE `cos_cumparaturi` (
  `id` int(10) NOT NULL,
  `id_produs` int(10) NOT NULL,
  `id_utilizator` int(10) NOT NULL,
  `subtotal` float NOT NULL,
  `cantitate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `lista_produse`
--

CREATE TABLE `lista_produse` (
  `id` int(10) NOT NULL,
  `id_produs` int(10) NOT NULL,
  `id_comanda` int(10) NOT NULL,
  `subtotal` float NOT NULL,
  `cantitate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `preferinte_utilizator`
--

CREATE TABLE `preferinte_utilizator` (
  `id` int(10) NOT NULL,
  `id_utilizator` int(10) NOT NULL,
  `esenta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `produse`
--

CREATE TABLE `produse` (
  `id` int(10) NOT NULL,
  `nume` varchar(20) NOT NULL,
  `gen` varchar(20) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `esenta` varchar(20) NOT NULL,
  `descriere` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `produse`
--

INSERT INTO `produse` (`id`, `nume`, `gen`, `categorie`, `esenta`, `descriere`) VALUES
(1, 'Candy Prada', 'femeie', 'apa de toaleta', 'oriental', 'Prada Candy este un parfum floral ce se potriveste tuturor femeilor carora nu le este teama sa-si exprima propriile opinii. Preda-te tentatiei in forma unei puteri roz adusa de parfumul Prada Candy. Iesi din anonimat si straluceste. Incearca sa faci lucrurile pe cont propriu si primeste energia necesara pentru a invinge obstacolele de zi cu zi.\r\n\r\nNotele de varf usor florale fac pe oricine sa se indragosteasca instantaneu de acest parfum. Notele centrale contin esente senzuale de mosc alb, ce-ti confera incredere si determinare sa devi o femeie increzatoare si stralucitoare. Incantatoarele acorduri seducatoare de caramel iti incanta simturile in profunzime si scoate la suprafata adevarata personalitate!\r\n\r\nUna dintre cele mai importante case de moda, Prada a inceput sa comercializeze parfumuri acum mult timp. Indragosteste-te de calitatea si caracterul acestor parfumuri pline de flori, fructe si condimente atent selectionate. Este apreciat in special de catre cei ce iubesc stilul si luxul conferit de aceasta marca prestigioasa, prezentate in sticluta cu forme extrem de moderne. Prada Candy este cu siguranta pe placul tau. Indrazneste sa-ti exprimi opinia. Doar femeile increzatoare in fortele lor proprii, care stiu exact ceea ce vor, pot obtine orice isi doresc!');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `stocuri`
--

CREATE TABLE `stocuri` (
  `id` int(10) NOT NULL,
  `id_produs` int(10) NOT NULL,
  `stoc_30` int(10) DEFAULT NULL,
  `pret_30` float NOT NULL,
  `stoc_50` int(10) DEFAULT NULL,
  `pret_50` float NOT NULL,
  `stoc_100` int(10) DEFAULT NULL,
  `pret_100` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(10) NOT NULL,
  `nume` varchar(20) NOT NULL,
  `prenume` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `adresa` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `parola` varchar(20) NOT NULL,
  `telefon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) NOT NULL,
  `id_produs` int(10) NOT NULL,
  `id_utilizator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `comentarii`
--
ALTER TABLE `comentarii`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produse_comentarii_idx` (`id_produs`);

--
-- Indexuri pentru tabele `comenzi`
--
ALTER TABLE `comenzi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_comenzi_utilizator_idx` (`id_utilizator`);

--
-- Indexuri pentru tabele `compozitii`
--
ALTER TABLE `compozitii`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produse_compozitii_idx` (`id_produs`);

--
-- Indexuri pentru tabele `cos_cumparaturi`
--
ALTER TABLE `cos_cumparaturi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produse_cos_idx` (`id_produs`),
  ADD KEY `id_utilizatori_cos_idx` (`id_utilizator`);

--
-- Indexuri pentru tabele `lista_produse`
--
ALTER TABLE `lista_produse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produse_lista_idx` (`id_produs`),
  ADD KEY `id_comanda_lista_idx` (`id_comanda`);

--
-- Indexuri pentru tabele `preferinte_utilizator`
--
ALTER TABLE `preferinte_utilizator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_preferinte_utilizator_idx` (`id_utilizator`);

--
-- Indexuri pentru tabele `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `stocuri`
--
ALTER TABLE `stocuri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produse_stocuri_idx` (`id_produs`);

--
-- Indexuri pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produse_wishlist_idx` (`id_produs`),
  ADD KEY `id_utilizatori_wishlist_idx` (`id_utilizator`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `comentarii`
--
ALTER TABLE `comentarii`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `comenzi`
--
ALTER TABLE `comenzi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `compozitii`
--
ALTER TABLE `compozitii`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `cos_cumparaturi`
--
ALTER TABLE `cos_cumparaturi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `lista_produse`
--
ALTER TABLE `lista_produse`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `preferinte_utilizator`
--
ALTER TABLE `preferinte_utilizator`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `produse`
--
ALTER TABLE `produse`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pentru tabele `stocuri`
--
ALTER TABLE `stocuri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `comentarii`
--
ALTER TABLE `comentarii`
  ADD CONSTRAINT `id_produse_comentarii` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`);

--
-- Constrângeri pentru tabele `comenzi`
--
ALTER TABLE `comenzi`
  ADD CONSTRAINT `id_comenzi_utilizator` FOREIGN KEY (`id_utilizator`) REFERENCES `utilizatori` (`id`);

--
-- Constrângeri pentru tabele `compozitii`
--
ALTER TABLE `compozitii`
  ADD CONSTRAINT `id_produse_compozitii` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`);

--
-- Constrângeri pentru tabele `cos_cumparaturi`
--
ALTER TABLE `cos_cumparaturi`
  ADD CONSTRAINT `id_produse_cos` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`),
  ADD CONSTRAINT `id_utilizatori_cos` FOREIGN KEY (`id_utilizator`) REFERENCES `utilizatori` (`id`);

--
-- Constrângeri pentru tabele `lista_produse`
--
ALTER TABLE `lista_produse`
  ADD CONSTRAINT `id_comanda_lista` FOREIGN KEY (`id_comanda`) REFERENCES `comenzi` (`id`),
  ADD CONSTRAINT `id_produse_lista` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`);

--
-- Constrângeri pentru tabele `preferinte_utilizator`
--
ALTER TABLE `preferinte_utilizator`
  ADD CONSTRAINT `id_preferinte_utilizator` FOREIGN KEY (`id_utilizator`) REFERENCES `utilizatori` (`id`);

--
-- Constrângeri pentru tabele `stocuri`
--
ALTER TABLE `stocuri`
  ADD CONSTRAINT `id_produse_stocuri` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`);

--
-- Constrângeri pentru tabele `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `id_produse_wishlist` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`),
  ADD CONSTRAINT `id_utilizatori_wishlist` FOREIGN KEY (`id_utilizator`) REFERENCES `utilizatori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
