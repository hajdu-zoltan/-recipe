-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Dec 06. 17:39
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `receptdatabase`
--
CREATE DATABASE IF NOT EXISTS `receptdatabase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `receptdatabase`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hozzavalok`
--

CREATE TABLE `hozzavalok` (
  `Id` int(11) NOT NULL,
  `receptid` int(11) NOT NULL,
  `neve` varchar(500) NOT NULL,
  `mennyisege` varchar(500) NOT NULL,
  `mertekegysege` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `hozzavalok`
--

INSERT INTO `hozzavalok` (`Id`, `receptid`, `neve`, `mennyisege`, `mertekegysege`) VALUES
(133, 133, 'marhalábszár', '60', 'dkg'),
(134, 133, 'vöröshagyma', '30', 'dkg'),
(135, 133, 'répa', '3', 'db'),
(136, 133, 'fehérrépa', '2', 'db'),
(137, 133, 'zeller', '1', 'db'),
(138, 133, 'burgonya', '40', 'dkg'),
(139, 133, 'fűszerpaprika', '1', 'ek'),
(140, 133, 'csípős fűszerpaprika', '0.5', 'ek'),
(141, 133, 'só', '1', 'csapek'),
(142, 133, 'őrölt fűszerkömény', '1', 'tl'),
(143, 133, 'babérlevél', '2', 'db'),
(144, 133, 'fekete bors (frissen őrölt)', '1', 'tl'),
(145, 133, 'paradicsom', '1', 'db'),
(146, 133, 'tv paprika', '1', 'db'),
(147, 133, 'fokhagyma', '3', 'ger'),
(148, 133, 'sertészsír', '2', 'ek'),
(149, 133, 'zellerlevél', '5', 'db'),
(150, 133, 'petrezselyem', '0.5', 'csokor'),
(151, 133, 'víz', '2.5', 'l'),
(154, 135, 'tej', '1.5', 'dl'),
(155, 135, 'feketekávé', '1', 'dl'),
(156, 136, 'tojás', '4', 'db'),
(157, 136, 'vaj', '4', 'dkg'),
(158, 136, 'fehér bors', '0.5', 'kk'),
(159, 136, 'só', '0.5', 'kk'),
(160, 136, 'mustár', '1', 'kk'),
(161, 136, 'majonéz', '1', 'ek'),
(162, 137, 'marha hátszín', '500', 'g'),
(163, 137, 'fekete bors (frissen őrölt)', '1', 'mokkk'),
(164, 137, 'só', '1', 'mokkk'),
(165, 137, 'vaj', '1', 'ek'),
(166, 137, 'olívaolaj', '1', 'ek'),
(167, 138, 'kakaópor', '1-2', 'ek'),
(168, 138, 'étcsokoládé (70% kakaó tartalmú)', '180', 'g'),
(169, 138, 'vaj', '115', 'g'),
(170, 138, 'L-es tojás', '2', 'db'),
(171, 138, 'tojás sárgája', '1', 'db'),
(172, 138, 'porcukor', '115', 'g'),
(173, 138, 'liszt', '2.5', 'ek'),
(174, 138, 'étcsokis trüffel', '6', 'db'),
(175, 138, 'mogyoróvaj', '6', 'púpos evőkanál'),
(176, 139, 'tejföl', '1', 'pohar'),
(177, 139, 'fokhagyma', '3-4', 'ger'),
(178, 139, 'só', '1', 'mokkk'),
(179, 139, 'tej', '2', 'ek'),
(180, 140, 'kígyóuborka', '1', 'db'),
(181, 140, 'paradicsom', '4', 'db'),
(182, 140, 'lilahagyma', '1', 'db'),
(183, 140, 'olívabogyó', '15', 'dkg'),
(184, 140, 'citrom leve', '0.5', 'db'),
(185, 140, 'só', '1', 'tl'),
(186, 140, 'bors', '2', 'mokkk'),
(187, 140, 'oregánó', '1', 'tl'),
(188, 140, 'feta sajt', '20', 'dkg'),
(189, 140, 'olívaolaj', '4', 'ek'),
(192, 143, 'darált marhahús', '1', 'kg'),
(193, 143, 'darált sertéshús', '1', 'kg'),
(194, 143, 'darált bárányhús', '70', 'dkg'),
(195, 143, 'vöröshagyma', '3', 'db'),
(196, 143, 'szódabikarbóna', '2', 'ek'),
(197, 143, 'só', '4', 'ek'),
(198, 143, 'négyszínű bors', '2', 'ek'),
(199, 143, 'olívaolaj', '0.5', 'dl'),
(200, 145, 'darált marhahús', '1', 'kg'),
(201, 145, 'só', '3', 'púpos evőkanál');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `lepesek`
--

CREATE TABLE `lepesek` (
  `Id` int(11) NOT NULL,
  `receptid` int(11) NOT NULL,
  `adat` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `lepesek`
--

INSERT INTO `lepesek` (`Id`, `receptid`, `adat`) VALUES
(94, 133, 'A hagymákat kis kockára vágjuk. A húst leöblítjük, szárazra töröljük, majd 2 cm-es kockára daraboljuk.'),
(95, 133, 'A zsírt felhevítjük, megfonnyasztjuk benne a hagymát, majd félrehúzzuk, a fűszerpaprikákkal összekeverjük, felöntjük 1,5 dl vízzel, majd a vizet elfőzve, zsírjára pirítjuk.'),
(96, 133, 'Ekkor hozzáadjuk a marhahúst, és kevergetve fehéredésig pirítjuk. Sózzuk, borsozzuk, köménnyel megszórjuk, hozzáadjuk az áttört fokhagymát, a kis kockára vágott paradicsomot, a kicsumázott egész paprikát, babérlevelet.'),
(97, 133, 'Fedővel lefedve saját levében 90 percet főzzük.Elkészítjük a csipetkét.'),
(98, 133, 'Ezután kerülnek bele a zöldségek: a karikára vágott sárga- és fehérrépa, a kockára vágott zeller, burgonya, az aprított petrezselyem és zellerzöld, felöntjük 2l -2.5 l vízzel.'),
(99, 133, 'Letakarva további 50 percet főzzük. Beletesszük a csipetkét, és 10 perc alatt készre főzzük.'),
(105, 135, 'Lefőzünk egy adag kávét.'),
(106, 135, 'Közben a tej egyik felét kissé megmelegítjük, ez kerül a pohár aljára.'),
(107, 135, 'Egy kanál segítségével a kávét a tej tetejére csurgatjuk. Mivel a vizes alapú kávé könnyebb, mint a tej, ezért nem keverednek össze.'),
(108, 135, 'A maradék tejből kemény tejhabot készítünk. Ez kerül a kávé tetejére.'),
(109, 135, 'A tej, a kávé és a tejhab így alkot három réteget.'),
(110, 136, 'A tojásokat keményre főzzük.(forrástól számított 10 perc alatt)'),
(111, 136, 'A vajat habosra keverjük.'),
(112, 136, 'A tojásokat megpucoljuk és az aljukat levágjuk, a sárgájukat kiszedjük.'),
(113, 136, 'Amikor a sárgája már langyos, villával összetörjük és a vajjal jól kikeverjük.'),
(114, 136, 'Hozzáadjuk a majonézt és a fűszereket ( só, mustár bors ) és jól összedolgozzuk.'),
(115, 136, 'A kapott masszát visszatöltjük az üregekbe és a megtöltött tojásokat egy tálra helyezzük a levágott felükkel lefelé.'),
(116, 136, 'A bevonathoz elkészítjük a sűrű tartármártást és a tojásokra öntjük.'),
(117, 136, 'Hűtőben 10-12 órát állni hagyjuk.'),
(118, 136, 'Franciasaláta ágyon tálaljuk'),
(119, 137, 'A hűtőből kivett húst sütés előtt hagyjuk, hogy 20 percig szobahőmérsékletűre melegedjen, majd másfél centi vastagságú, tenyérnyi szeletekre vágjuk.'),
(120, 137, 'Sütéshez egy jó vastag aljú serpenyőt válasszunk, majd együtt olvasszuk fel benne a vajat és az olívaolajat.'),
(121, 137, 'A zsiradék akkor elég meleg a sütéshez, amikor a tenyerünket a serpenyő fölé helyezve megfogja a zsírgőz, ami kissé tapadni fog. Ilyenkor tökéletes a zsiradék a sütéshez.'),
(122, 137, 'Helyezzük bele a steaknek való hússzeleteket a serpenyőbe. Akkor jó, ha erőteljes sercegést hallunk. Süthetünk több steak-et is egyszerre, csak arra figyeljünk, hogy hagyjunk elegendő helyet (kb. két ujjnyit) közöttük, mert különben elkezdenek főni.'),
(123, 137, 'Minimum 2 percig hagyjuk a serpenyőt és a forró zsiradékot, hogy végezhesse a dolgát. Semmiképpen se rázogassuk a serpenyőt, hagyjuk nyugodtan sülni a hússzeleteket, mert azok majd szépen leválnak a serpenyő felületéről, amint megfelelő pörzsanyagok képződtek rajtuk.'),
(124, 137, 'Ezután fordítsuk meg a húsokat, és azon nyomban sózzuk, borsozzuk, ugyanis ekkor még a forró szaftok feloldják, illetve kioldják a fűszerekben található értékes aromákat. Ha mindent jól csináltunk, a hús nem egyenletesen szürkés lesz, hanem széleinél és a közepénél erőteljesen barna karamellizációk jelennek meg.'),
(125, 137, 'Várjuk meg, amíg a hús felszíne elkezd rózsaszínűen gyöngyözni, ekkor a húsban lévő szaftok, amelyek az előbb még a másik irányba áramoltak, ezen a felén próbálnak kiszabadulni, de mivel megfelelő kérget sütöttünk a húsokra, ezért az értékes szaftokat a kéreg nem hagyja kifolyni.'),
(126, 137, 'Tegyük be a húst serpenyővel együtt az előmelegített 150-160 fokos sütőbe, és süssük majdnem készre. Ebben az esetben azért nincs pontos sütési idő, mert a készenléti állapot értsd: rare, medium rare, stb. mindig a hús középpontjában tálaláskor mérhető hőmérsékletre vonatkozik, tehát erősen befolyásolja a hús keresztmetszete, mérete, illetve, hogy csontos vagy filézett steakkel van-e dolgunk. Én azt szoktam mondani, hogy 2 perc, 2 perc, 4 perc, és készen is van. Az első két intervallum a serpenyőben eltöltött időt, míg a harmadik a sütőben eltöltött időt jelenti. Végezetül sózzuk, borsozzuk.'),
(127, 137, 'Ezek után jöhet a pihentetés. Nagyon fontos, hogy minden fentiek szerint készülő húst a hőközlés befejezése után legalább a sütési idő feléig, de inkább 2/3-áig pihentessük egy meleg, de semmiképpen sem forró helyen, alufóliával lazán letakarva a kihűlés elkerülése végett.'),
(128, 138, 'A sütőt előmelegítjük: légkeveréses sütőt 200˚C / 180˚C-ra, a gázsütőt 6-os fokozatra, és a középső polcon felmelegítünk egy tepsit.'),
(129, 138, 'Kikenünk 6 darab „dariole\" vagy „baba\" formát vajjal, majd hozzáadjuk a kakaóport, megforgatjuk úgy, hogy a kakaó egy réteget képezve fedje a formát, a felesleget pedig a következő formába tesszük, és ezt mind a hat formánál megismételjük. Egy felületen óvatosan leütögetjük a felesleges kakaót a formákról.'),
(130, 138, 'A csokit és a vajat egy tálba tesszük, majd egy edény forrásban lévő víz fölé tartva kevergetjük, megolvasztjuk, és félretesszük és hagyjuk kicsit hűlni.'),
(131, 138, 'A tojásokat, a tojássárgát és a cukrot olyan sűrűre keverjük, hogy amikor egy kicsit a habverőből a tálban lévő keverékbe dobunk belőle, akkor az nyomot hagy. A csokis keveréket, majd a lisztet is a tojásokhoz adjuk.'),
(132, 138, 'A keveréket egy nagy kancsóba öntjük, és a formákat félig megtöltve egyenlően elosztjuk. Mindegyik közepébe egy trüffelt teszünk, majd egy kanálnyi mogyoróvajat ügyelve arra, hogy ne érjen a formák oldalához, és még több csokis keverékkel befedjük úgy, hogy a massza éppen a formák pereme alá érjen.'),
(133, 138, 'Előmelegített sütőben 14 percig sütjük. A sütőből kivéve 2 percig pihentetjük a sütiket, majd egy kis késsel körbefutunk a formák széle körül. Ez után egy konyharuha segítségével tányérokra fordítjuk ki a sütiket. Tejszínhabbal együtt azonnal tálaljuk őket.'),
(134, 139, 'A tejfölt egy tálban jól összekeverjük, ha sűrűnek találjuk tejjel hígíthatjuk.'),
(135, 139, 'A fokhagymát megpucoljuk és egy fokhagymanyomó segítségével a tejfölhöz adjuk.'),
(136, 139, 'Sóval ízesítjük.'),
(137, 140, 'A zöldségeket megtiszítjuk, megmossuk, szárazra töröljük, és felaprítjuk. '),
(138, 140, 'Egy tálban összekeverjük az uborkát, a paradicsomot, a lilahagymát és az olívabogyót, majd meglocsoljuk a citromlével, és összekeverjük.'),
(139, 140, 'Megsózzuk, megborsozzuk, megszórjuk oregánóval, majd hozzáadjuk a felkockázott feta sajtot. Végül meglocsoljuk az olívaolajjal, összekeverjük, és néhány órára a hűtőbe tesszük.'),
(142, 143, 'A húsokat a felhasználás előtti napona sóval, borssal, valamint a szódabikarbónával jól átgyúrjuk. Akkor csináljuk jól, ha úgy dolgozzuk át, mintha tésztát dagasztanánk, szinte egymásba préselődjenek a különböző húsok, s eltűnik a darált jellege a húsnak.'),
(143, 143, 'A húsokat a felhasználás előtti napona sóval, borssal, valamint a szódabikarbónával jól átgyúrjuk. Akkor csináljuk jól, ha úgy dolgozzuk át, mintha tésztát dagasztanánk, szinte egymásba préselődjenek a különböző húsok, s eltűnik a darált jellege a húsnak.'),
(144, 143, 'Mikor megvagyunk, beleszórjuk a vöröshagymát, és ezt is beledolgozzuk, de ezt már nem nyomkodjuk nagyon szét, csak elkeverjük, hogy mindenhol egyenletesen legyen a masszában. Egy éjszakára, vagy 12 órára hűtőszekrénybe tesszük jól lefedve, hogy minél kevesebb levegő érje a felületét a masszának.'),
(145, 143, 'A felhasználás napján egy kis tálkába olívaolajat teszünk, amibe belemártjuk a kezünket és kiveszünk egy adag masszát (kb. őszibarack nagyságút), és a kezünkkel hamburger formájú húspogácsát készítünk belőle, kb. 15 cm átmérőjű, és 2-3 cm vastag pogácsáról van szó. Egy olajjal lekent tálcára, vagy tepsire helyezzük, és a masszával addig folytatjuk a műveletet, amíg el nem fogy.'),
(146, 143, 'Ezután két lehetőség van, vagy faszénparázs felett grillezzük - ez a legjobb választás, vagy olívaolajjal kikent grill-, vagy sima serpenyőben közepes tűz felett szépen átsütjük mindkét oldalán kb. 7-10 perc alatt. Akkor jó, ha már nem folyik ki belőle lé, de rugalmas még a húspogácsa.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `receptek`
--

CREATE TABLE `receptek` (
  `Id` int(11) NOT NULL,
  `cim` varchar(500) NOT NULL,
  `kategoria` int(11) NOT NULL,
  `adatok` mediumtext NOT NULL,
  `kepid` varchar(5000) NOT NULL,
  `usersid` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `receptek`
--

INSERT INTO `receptek` (`Id`, `cim`, `kategoria`, `adatok`, `kepid`, `usersid`, `active`) VALUES
(133, 'Gulyásleves', 1, '', '133.jpg', 10, 1),
(135, 'Latte Macchiato', 5, '', '135.jpg', 10, 1),
(136, 'Kaszinótojás', 4, '', '136.jpg', 111, 1),
(137, 'Steak', 2, '', '137.jpg', 111, 1),
(138, 'Étcsokis-mogyoróvajas szuflé', 3, '', '138.jpg', 111, 1),
(139, 'Fokhagymaszósz', 6, '', '139.jpg', 111, 1),
(140, 'Görög saláta', 7, '', '140.jpg', 111, 1),
(143, 'Pljeskavica', 2, '', '143.jpg', 112, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `usersReceptei` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersReceptei`) VALUES
(6, 'Deim Máté', 'mate.deim@gmail.com', 'asd123', '$2y$10$W/QZ1IrBg2n7U0LfSJsUXO3Xqff8HHtBtZECTGUxfFow8CqPvs4he', 0),
(7, 'Varga Endre', 'vendere10@gmail.com', 'emerka', '$2y$10$yZ5Ut4My0o6wBldiIT9YQuaZ0iYCUaJBLy3JMz6uepWaDvpYNL1R6', 0),
(8, 'Hajdú Zoltán', 'hajduzoltan155@gmail.com', 'Zoli', '$2y$10$5wCDUYqmp3rM8IZK0lmKxODgLEZJrywsaKfGmNfDVTvIvtz4Z9pGu', 0),
(10, 'Admin', 'admin@admin.com', 'Admin', '$2y$10$OxYuZT7swrSGzJPQEzo9W.BNUksfp6l6QKOg9pVZLSz3m16CM9MWW', 0),
(111, 'Teszter', 'test@test.com', 'teszter01', '$2y$10$6FZM7.e1WdUTSySNDooYhu3zoIH4j8bbJRfzUiEaRRyBjZBR.cVle', 0),
(112, 'teszter', 'test1@test.com', 'teszt1', '$2y$10$5UkefprdAN1nxRpXuC9sA.QSe.mDJCzCL4rErj1jxx7abK6cYWMYi', 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `hozzavalok`
--
ALTER TABLE `hozzavalok`
  ADD PRIMARY KEY (`Id`);

--
-- A tábla indexei `lepesek`
--
ALTER TABLE `lepesek`
  ADD PRIMARY KEY (`Id`);

--
-- A tábla indexei `receptek`
--
ALTER TABLE `receptek`
  ADD PRIMARY KEY (`Id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `hozzavalok`
--
ALTER TABLE `hozzavalok`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT a táblához `lepesek`
--
ALTER TABLE `lepesek`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT a táblához `receptek`
--
ALTER TABLE `receptek`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
