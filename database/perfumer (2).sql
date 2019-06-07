-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 07, 2019 la 06:08 PM
-- Versiune server: 10.1.39-MariaDB
-- Versiune PHP: 7.1.29

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
  `comentariu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nume_utilizator` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Eliminarea datelor din tabel `comentarii`
--

INSERT INTO `comentarii` (`id`, `id_produs`, `comentariu`, `nume_utilizator`) VALUES
(1, 1, 'Mie personal imi place foarte mult acest parfum, dar este intr-adevar o problema cu persistenta sa, dupa cateva ore simt ca dispare, dar persoanele din jurul meu se pare ca inca il pot mirosi. Este un parfum lejer, de vara ideal pentru un caracter feminin si elegant.', 'diana'),
(2, 1, 'este unul dintre parfumurile mele preferate , asa incat nu pot fi obiectiva si oricum, gusturile nu se discuta! este un parfum deosebit , rafinat ; eu una nu ii simt tenta florala ci mai degraba pare sa miroasa ca o caramea cu lapte! mirosul este delicios, dulceag dar nu gretos, nu foarte puternic dar suficient de intens cat sa fie sesizabil iar persistenta pe piele este delicata si creaza dependenta:). flaconul este elegant si oarecum copilaros , dar Candy cred ca se potriveste oricarei femei, indiferent de varsta, care iubeste parfumurile blande, neagresive, ce dau o stare de bine instantaneu!', 'fri'),
(3, 1, 'E un parfum destul de puternic,dar care din păcate nu durează prea mult...mă așteptam ca la prețul acesta să fie ceva WoW.Nu zic,e un parfum pe care nu îl simți la multă lume,miroase foarte bine,dar nu persistă. :\\ (și poate mi s-a părut mie,dar cei 50 de ml mi s-au terminat din câteva pufuri:))) )', 'geo'),
(4, 1, 'Am citit toate comentariile, dar mie mi se pare total diferit fata de ce scrie lumea. Caramel? Unde? Mie mi se pare un parfum foarte vesel. Miroase intr-adevar a bomboane, dar cu fructe. Mi se pare un parfum ce se potriveste intr-o zi frumoasa de primavara. Miroase a flori parfumate, dulce, dar nu prea, fructat si proaspat in acelasi timp. Cel putin pe pielea mea asa miroase. Ma binedispune dar mi se pare prea scump comparativ cu alte parfumuri.', 'luiza'),
(5, 1, 'parfumul miroase foarte bine, insa nu persista foarte mult.', 'Mihaela'),
(6, 1, 'Îl ador!!! Nici nu pot descrie în cuvinte ceea ce simt când îl folosesc.Persistă şi a doua zi, mai ales în păr. Soțului meu îi place f.f.mult atunci când îl folosesc. Îl recomand, persistă foarte multe ore, cel puțin pe mine. ..', 'Claudia');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `comenzi`
--

CREATE TABLE `comenzi` (
  `id` int(10) NOT NULL,
  `id_utilizator` int(10) NOT NULL,
  `valoare` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `compozitii`
--

CREATE TABLE `compozitii` (
  `id` int(10) NOT NULL,
  `id_produs` int(10) NOT NULL,
  `note_baza` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `note_inima` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `note_varf` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Eliminarea datelor din tabel `compozitii`
--

INSERT INTO `compozitii` (`id`, `id_produs`, `note_baza`, `note_inima`, `note_varf`) VALUES
(1, 1, 'caramel', 'benzoin', 'mosc'),
(2, 2, 'cedru, lemn de santal, maslin, vanilie, vetiver', 'cuisoare, garoafa, mahon, scortisoara', 'bergamota, geranium, lamaie, mar, muÈ™chi de stejar, pruna');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `preferinte_utilizator`
--

CREATE TABLE `preferinte_utilizator` (
  `id` int(10) NOT NULL,
  `id_utilizator` int(10) NOT NULL,
  `esenta` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `produse`
--

CREATE TABLE `produse` (
  `id` int(10) NOT NULL,
  `nume` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gen` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `esenta` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descriere` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagine` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Eliminarea datelor din tabel `produse`
--

INSERT INTO `produse` (`id`, `nume`, `gen`, `categorie`, `esenta`, `descriere`, `imagine`) VALUES
(1, 'Candy Prada', 'femeie', 'apa de toaleta', 'oriental', 'Prada Candy este un parfum floral ce se potriveste tuturor femeilor carora nu le este teama sa-si exprima propriile opinii. Preda-te tentatiei in forma unei puteri roz adusa de parfumul Prada Candy. Iesi din anonimat si straluceste. Incearca sa faci lucrurile pe cont propriu si primeste energia necesara pentru a invinge obstacolele de zi cu zi.\r\n\r\nNotele de varf usor florale fac pe oricine sa se indragosteasca instantaneu de acest parfum. Notele centrale contin esente senzuale de mosc alb, ce-ti confera incredere si determinare sa devi o femeie increzatoare si stralucitoare. Incantatoarele acorduri seducatoare de caramel iti incanta simturile in profunzime si scoate la suprafata adevarata personalitate!\r\n\r\nUna dintre cele mai importante case de moda, Prada a inceput sa comercializeze parfumuri acum mult timp. Indragosteste-te de calitatea si caracterul acestor parfumuri pline de flori, fructe si condimente atent selectionate. Este apreciat in special de catre cei ce iubesc stilul si luxul conferit de aceasta marca prestigioasa, prezentate in sticluta cu forme extrem de moderne. Prada Candy este cu siguranta pe placul tau. Indrazneste sa-ti exprimi opinia. Doar femeile increzatoare in fortele lor proprii, care stiu exact ceea ce vor, pot obtine orice isi doresc!', 'assets/images/prada.png'),
(2, 'Giorgio Armani-Sky di Gioia', 'femeie', 'parfum', 'fructate', 'Parfumul Armani Sky di Gioia este expresia optimismului și a sentimentului de totală fericire. Învăluie-te în această aromă și vei avea o dispoziție excelentă toată ziua!', 'assets/images/armani-sky.jpg'),
(3, 'Dolce & Gabbana-The One', 'femeie', 'parfum', 'florale', 'Dolce & Gabbana The One este un parfum oriental proaspat pentru fiecare femeie care doreste o schimbare. Lasa-ti simturile rasfatate de esente unice de fructe din întreaga lume. Devii irezistibila si seducatoare.', 'assets/images/dolce3.png'),
(4, 'Dior-Blooming Bouquet', 'femeie', 'apa de toaleta', 'florale', 'Parfumul feminin de lux Miss Dior Blooming Bouquet celebrează frumuseţea şi discreţia mugurului care se deschide. Parfumul este inspirat de gândul că florile sunt pentru femei creaţii dumnezeieşti. Înveliţi-vă în subtilitatea delicată, dezvăluindu-i astfel frumuseţea pură. Cu acest parfum vă veţi simţi neobişnuit de senzuală şi de atrăgătoare! ', 'assets/images/Miss-Dior.png'),
(5, 'Gucci-Guilty', 'femeie', 'apa de toaleta', 'orientale-dulci', 'Gucci Guilty este destinat femeii intense, îndrăznețe și independente, care gustă viața din toți porii și respectă doar propriile reguli.', 'assets/images/gucci-guilty.jpg'),
(6, 'Carolina Herrera-212 VIP', 'femeie', 'parfum', 'orientale-dulci', 'parfum aromatic', 'assets/images/CH-vip.jpg'),
(7, 'Bvlgari-Goldea The Roman Night', 'barbati', 'parfum', 'florale', 'Bvlgari Parfumuri | Bvlgari (fondata în 1884, Roma, Italia), este un brand de lux, cu un stil italian puternic. Marca Bvlgari se inspira din frumusetea atemporala a artei grecesti si romane, fondatorul Sotirio Bvlgari descendent din Epir,  s-a lansat ca producator de bijuterii  din argint ,lucru ce se reflecta in designul sticlelor. Primul magazin Bvlgari se deschide in  Roma si in curand devine foarte popular.', 'assets/images/bvlgari-goldea.jpg'),
(8, 'Giorgio Armani-Armani Si Intense', 'femeie', 'apa de parfum', 'fructate', 'Apa de parfum SI Intense este destinată femeilor încrezătoare şi curajoase. O compoziţie aromatică, pentru cele care nu se tem de riscuri. O combinaţie sofisticată şi originală, de tonuri selecţionate, pentru a vă face mai frumoasă. Cedaţi dorinţei de a avea un parfum cu ingrediente bogate şi originale.', 'assets/images/armani-intense.jpg'),
(9, 'Chanel-Coco Mademoiselle', 'femeie', 'parfum', 'florale', 'Parfumul dulce de trandafiri şi de vanilie, în combinaţie cu tonurile proaspete de portocală, de iasomie îmbătătoare şi de paciuli, vă oferă o experienţă irepetabilă pentru simţurile dumneavoastră şi ale celor din jur. Senzualitatea şi încrederea: acestea sunt esenţele principale ale excepţionalului parfum Chanel Coco Mademoiselle.', 'assets/images/Chanel-parfum.jpg'),
(10, 'Valentino-Valentina', 'femeie', 'parfum', 'fructate', 'Lansat in 2011, parfumul Valentina a fost inspirat de Roma si aromele italienesti. Creatorii sai sunt Alberto Morillas si Olivier Cresp. Compozitia parfumului este floral - fructata, cu accente puternice orientale. Valentina este plin de contradictii, delicat si puternic si in acelasi timp, elegant, senzual, rebel si vesel.', 'assets/images/valentino-va.png'),
(11, 'Dior-J\'adore', 'femeie', 'apa de parfum', 'florale', 'Parfumul pentru femei Christian Dior Jadore este o expresie a feminitatii absolute, fiind foarte popular printre femeile moderne. Parfumul floral fructat imbina mandarine proaspete cu iasomie, orhidee si trandafiri. Florile de ylang-ylang impreuna cu trandafirii de Damasc si esentele delicate de iasomie, dau eleganta si unicitate.', 'assets/images/dior-jadore.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Eliminarea datelor din tabel `stocuri`
--

INSERT INTO `stocuri` (`id`, `id_produs`, `stoc_30`, `pret_30`, `stoc_50`, `pret_50`, `stoc_100`, `pret_100`) VALUES
(1, 1, 100, 219, 5, 289, 10, 395),
(2, 2, 100, 106, 120, 142, 300, 202),
(3, 3, 70, 240, 20, 289, 10, 350),
(4, 4, 80, 298, 50, 350, 30, 400),
(5, 5, 90, 199, 12, 250, 30, 320),
(6, 6, 100, 219, 40, 289, 10, 390),
(7, 7, 100, 255, 5, 300, 10, 320),
(8, 8, 140, 250, 65, 290, 10, 340),
(9, 9, 100, 245, 51, 289, 10, 330),
(10, 10, 100, 219, 65, 270, 10, 320),
(11, 11, 100, 220, 57, 270, 10, 330);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(10) NOT NULL,
  `nume` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenume` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `adresa` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parola` varchar(90) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Eliminarea datelor din tabel `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `nume`, `prenume`, `sex`, `adresa`, `email`, `parola`, `telefon`) VALUES
(2, 'Foca', 'Diana', 'feminin', 'Str. Strapungere Sil', 'focadianagabriela@ya', '$2y$10$o0driYpG72ASW', 768314902),
(3, 'diana', 'Diana', 'feminin', 'StrÄƒpungere Silvest', 'focadianagabriela@gm', '$2y$10$vs.gkW5ZMwOM6', 768314902);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) NOT NULL,
  `id_produs` int(10) NOT NULL,
  `id_utilizator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pentru tabele `comenzi`
--
ALTER TABLE `comenzi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `compozitii`
--
ALTER TABLE `compozitii`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pentru tabele `stocuri`
--
ALTER TABLE `stocuri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `id_produse_comentarii` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`) ON DELETE CASCADE;

--
-- Constrângeri pentru tabele `comenzi`
--
ALTER TABLE `comenzi`
  ADD CONSTRAINT `id_comenzi_utilizator` FOREIGN KEY (`id_utilizator`) REFERENCES `utilizatori` (`id`) ON DELETE CASCADE;

--
-- Constrângeri pentru tabele `compozitii`
--
ALTER TABLE `compozitii`
  ADD CONSTRAINT `id_produse_compozitii` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`) ON DELETE CASCADE;

--
-- Constrângeri pentru tabele `cos_cumparaturi`
--
ALTER TABLE `cos_cumparaturi`
  ADD CONSTRAINT `id_produse_cos` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_utilizatori_cos` FOREIGN KEY (`id_utilizator`) REFERENCES `utilizatori` (`id`) ON DELETE CASCADE;

--
-- Constrângeri pentru tabele `lista_produse`
--
ALTER TABLE `lista_produse`
  ADD CONSTRAINT `id_comanda_lista` FOREIGN KEY (`id_comanda`) REFERENCES `comenzi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_produse_lista` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`) ON DELETE CASCADE;

--
-- Constrângeri pentru tabele `preferinte_utilizator`
--
ALTER TABLE `preferinte_utilizator`
  ADD CONSTRAINT `id_preferinte_utilizator` FOREIGN KEY (`id_utilizator`) REFERENCES `utilizatori` (`id`);

--
-- Constrângeri pentru tabele `stocuri`
--
ALTER TABLE `stocuri`
  ADD CONSTRAINT `id_produse_stocuri` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`) ON DELETE CASCADE;

--
-- Constrângeri pentru tabele `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `id_produse_wishlist` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_utilizatori_wishlist` FOREIGN KEY (`id_utilizator`) REFERENCES `utilizatori` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
