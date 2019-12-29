-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 28, 2019 at 11:10 AM
-- Server version: 5.6.45
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dimarcop_dimarko`
--

-- --------------------------------------------------------

--
-- Table structure for table `arhiva`
--

CREATE TABLE `arhiva` (
  `id` int(10) NOT NULL,
  `datum` date DEFAULT NULL,
  `vreme` time DEFAULT NULL,
  `korisnik` int(10) DEFAULT NULL,
  `porudzbina` text,
  `cena` decimal(7,2) DEFAULT NULL,
  `vreme_dostave` varchar(20) DEFAULT NULL,
  `broj_narucivanja_korisnika` int(20) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'prihvaceno'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arhiva`
--

INSERT INTO `arhiva` (`id`, `datum`, `vreme`, `korisnik`, `porudzbina`, `cena`, `vreme_dostave`, `broj_narucivanja_korisnika`, `status`) VALUES
(1064, '2019-11-11', '11:25:00', 43006, 'a:1:{s:11:\"pice4788340\";a:9:{s:12:\"id_proizvoda\";s:11:\"pice4788340\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1199.00\";s:8:\"napomena\";s:23:\"1907# sifra za interfon\";s:13:\"velicina_pice\";s:2:\"50\";s:11:\"pica_dodaci\";a:1:{i:0;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 1262.00, '60 minuta', 32, 'prihvaceno'),
(1065, '2019-11-15', '16:49:00', 43033, 'a:2:{s:13:\"ostalo9505891\";a:6:{s:12:\"id_proizvoda\";s:13:\"ostalo9505891\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:15:\"Piletina u sosu\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"686.00\";s:10:\"vrsta_sosa\";s:12:\"PeÄurke sos\";}s:14:\"deserti5211369\";a:6:{s:12:\"id_proizvoda\";s:14:\"deserti5211369\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:13:\"VoÄ‡na salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"267.00\";s:16:\"velicina_porcije\";s:9:\"250 grama\";}}', 953.00, '60 minuta', 6, 'prihvaceno'),
(1066, '2019-11-15', '20:07:00', 43050, 'a:1:{s:11:\"pice2209736\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice2209736\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"997.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 997.00, '60 minuta', 1, 'prihvaceno'),
(1067, '2019-11-16', '18:17:00', 58, 'a:7:{s:11:\"pice3016357\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice3016357\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"369.00\";s:13:\"velicina_pice\";s:2:\"28\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci28\";}s:14:\"rostilj8544358\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj8544358\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:5:{i:0;s:7:\"Majonez\";i:1;s:6:\"KeÄap\";i:2;s:5:\"Kupus\";i:3;s:4:\"Senf\";i:4;s:7:\"Pavlaka\";}}s:14:\"rostilj1951038\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj1951038\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 250 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"280.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:7:{i:0;s:7:\"Urnebes\";i:1;s:6:\"KeÄap\";i:2;s:8:\"Crni luk\";i:3;s:5:\"Kupus\";i:4;s:4:\"Senf\";i:5;s:7:\"Pavlaka\";i:6;s:14:\"Tucana paprika\";}}s:20:\"pica_sendvici1723074\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici1723074\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:1:{i:0;s:17:\"Ekstra kaÄkavalj\";}}s:13:\"ostalo2389921\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo2389921\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"deserti6303010\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti6303010\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:3:{i:0;s:6:\"Banana\";i:1;s:8:\"Kikiriki\";i:2;s:6:\"Plazma\";}}s:14:\"rostilj7820253\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj7820253\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:5:{i:0;s:6:\"KeÄap\";i:1;s:8:\"Crni luk\";i:2;s:5:\"Kupus\";i:3;s:4:\"Senf\";i:4;s:7:\"Pavlaka\";}}}', 1794.60, '60 minuta', 163, 'prihvaceno'),
(1080, '2019-12-06', '01:20:00', 43033, 'a:2:{s:13:\"ostalo6192782\";a:6:{s:12:\"id_proizvoda\";s:13:\"ostalo6192782\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:15:\"Piletina u sosu\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"686.00\";s:10:\"vrsta_sosa\";s:12:\"PeÄurke sos\";}s:13:\"ostalo6419983\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo6419983\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:14:\"Å tapiÄ‡i ribe\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"479.00\";}}', 1165.00, '60 minuta', 7, 'prihvaceno'),
(1081, '2019-12-08', '15:18:00', 43036, 'a:2:{s:11:\"pice1572107\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice1572107\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:22:\"VULKAN - punjena ivica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1047.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:13:\"ostalo6226885\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo6226885\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}}', 1407.00, '60 minuta', 12, 'prihvaceno'),
(1082, '2019-12-09', '18:07:00', 58, 'a:2:{s:11:\"pice1760679\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice1760679\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"877.00\";s:13:\"velicina_pice\";s:2:\"50\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:11:\"pice9094040\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice9094040\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1081.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 1813.50, '60 minuta', 166, 'prihvaceno'),
(1079, '2019-12-06', '00:37:00', 43006, 'a:1:{s:11:\"pice3543995\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice3543995\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"887.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:7:\"Pavlaka\";i:1;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 983.00, '60 minuta', 33, 'prihvaceno'),
(1069, '2019-11-22', '21:43:00', 43036, 'a:4:{s:11:\"pice8094515\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice8094515\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:22:\"VULKAN - punjena ivica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1047.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:13:\"ostalo8172537\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo8172537\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"napitci5370828\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci5370828\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"140.00\";s:16:\"velicina_porcije\";s:2:\"1l\";}s:14:\"napitci4313106\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci4313106\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:16:\"ZajeÄarsko pivo\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"130.00\";s:16:\"velicina_porcije\";s:7:\"Limenka\";}}', 1497.00, '50 minuta', 11, 'prihvaceno'),
(1068, '2019-11-16', '21:47:00', 43036, 'a:4:{s:11:\"pice3348597\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice3348597\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1049.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:13:\"ostalo2279505\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo2279505\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"deserti7408316\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti7408316\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:6:\"Plazma\";}}s:14:\"napitci6807257\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci6807257\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}}', 1569.60, '60 minuta', 10, 'prihvaceno'),
(1063, '2019-11-10', '22:04:00', 58, 'a:5:{s:11:\"pice6880550\";a:9:{s:12:\"id_proizvoda\";s:11:\"pice6880550\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"671.00\";s:8:\"napomena\";s:104:\"Ako moze vozaÄ usput da uzme heets sienna 2 paklice i lucky strike double klik jednu paklicu, hvala :) \";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:6:\"KeÄap\";i:1;s:7:\"Pavlaka\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:13:\"ostalo1921107\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo1921107\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"napitci7533931\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci7533931\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:14:\"deserti1923026\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti1923026\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:5:\"Orasi\";i:1;s:6:\"Plazma\";}}s:14:\"rostilj3655884\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj3655884\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:4:{i:0;s:6:\"KeÄap\";i:1;s:8:\"Crni luk\";i:2;s:5:\"Kupus\";i:3;s:7:\"Pavlaka\";}}}', 1490.40, '60 minuta', 162, 'prihvaceno'),
(1060, '2019-11-08', '11:12:00', 43033, 'a:2:{s:13:\"ostalo7387726\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo7387726\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:14:\"Å tapiÄ‡i ribe\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"479.00\";}s:14:\"deserti6542709\";a:6:{s:12:\"id_proizvoda\";s:14:\"deserti6542709\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:13:\"VoÄ‡na salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"376.00\";s:16:\"velicina_porcije\";s:9:\"400 grama\";}}', 855.00, '60 minuta', 5, 'prihvaceno'),
(1059, '2019-11-04', '19:28:00', 43036, 'a:3:{s:11:\"pice3035669\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice3035669\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:22:\"VULKAN - punjena ivica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1047.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:13:\"ostalo1907676\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo1907676\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"napitci4522476\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci4522476\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"140.00\";s:16:\"velicina_porcije\";s:2:\"1l\";}}', 1367.00, '60 minuta', 9, 'prihvaceno'),
(1057, '2019-11-02', '23:53:00', 42940, 'a:1:{s:11:\"pice5744200\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice5744200\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 756.00, '50 minuta', 54, 'prihvaceno'),
(1058, '2019-11-03', '14:37:00', 43026, 'a:1:{s:11:\"pice7942887\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice7942887\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"877.00\";s:13:\"velicina_pice\";s:2:\"50\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"Kajmak\";}s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 964.00, '60 minuta', 3, 'prihvaceno'),
(1054, '2019-10-27', '00:28:00', 43006, 'a:1:{s:11:\"pice6160876\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice6160876\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"887.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"PeÄurke\";i:1;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 987.00, '50 minuta', 31, 'prihvaceno'),
(1055, '2019-11-02', '13:51:00', 42993, 'a:1:{s:11:\"pice3561543\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice3561543\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:16:\"QUATTRO FORMAGGI\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1159.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 1159.00, '60 minuta', 2, 'prihvaceno'),
(1056, '2019-11-02', '23:30:00', 58, 'a:6:{s:11:\"pice7519127\";a:9:{s:12:\"id_proizvoda\";s:11:\"pice7519127\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"671.00\";s:8:\"napomena\";s:63:\"Ako moze vozaÄ usput da uzme heets sienna 2 paklice, hvala :) \";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:3:{i:0;s:6:\"KeÄap\";i:1;s:7:\"Pavlaka\";i:2;s:13:\"Punjena ivica\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:14:\"rostilj5442676\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj5442676\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:6:{i:0;s:7:\"Urnebes\";i:1;s:6:\"KeÄap\";i:2;s:8:\"Crni luk\";i:3;s:5:\"Kupus\";i:4;s:4:\"Senf\";i:5;s:7:\"Pavlaka\";}}s:14:\"rostilj3841003\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj3841003\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:5:{i:0;s:7:\"Majonez\";i:1;s:6:\"KeÄap\";i:2;s:5:\"Kupus\";i:3;s:4:\"Senf\";i:4;s:7:\"Pavlaka\";}}s:13:\"ostalo7705884\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo7705884\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"napitci9859903\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci9859903\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:14:\"deserti4084643\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti4084643\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:5:\"Kokos\";i:1;s:5:\"Orasi\";}}}', 1940.40, '60 minuta', 160, 'prihvaceno'),
(1053, '2019-10-25', '20:10:00', 42940, 'a:1:{s:11:\"pice6525278\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice6525278\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"887.00\";s:8:\"napomena\";s:54:\"Da ne bude prepecena i bez kajmaka, ajvara i feferona.\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 887.00, '50 minuta', 53, 'prihvaceno'),
(1052, '2019-10-25', '18:02:00', 43036, 'a:6:{s:11:\"pice2079647\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice2079647\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:22:\"VULKAN - punjena ivica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1047.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:13:\"ostalo2953696\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo2953696\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"napitci4853123\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci4853123\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:16:\"ZajeÄarsko pivo\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"130.00\";s:16:\"velicina_porcije\";s:7:\"Limenka\";}s:14:\"napitci2785375\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci2785375\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"140.00\";s:16:\"velicina_porcije\";s:2:\"1l\";}s:14:\"deserti9439507\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti9439507\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:6:\"Plazma\";}}s:14:\"deserti5733512\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti5733512\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:6:\"Banana\";}}}', 1788.30, '60 minuta', 8, 'prihvaceno'),
(1051, '2019-10-20', '19:56:00', 43036, 'a:4:{s:11:\"pice2174627\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice2174627\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"806.00\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:14:\"napitci9309358\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci9309358\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:14:\"deserti8348900\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti8348900\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:6:\"Plazma\";i:1;s:7:\"ViÅ¡nja\";}}s:14:\"deserti2793845\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti2793845\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:8:\"Kikiriki\";i:1;s:6:\"Plazma\";}}}', 1356.00, '60 minuta', 7, 'prihvaceno'),
(1047, '2019-10-12', '20:46:00', 43048, 'a:1:{s:13:\"ostalo6479018\";a:6:{s:12:\"id_proizvoda\";s:13:\"ostalo6479018\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:17:\"Lazanje Bolognese\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"687.00\";s:16:\"velicina_porcije\";s:9:\"600 grama\";}}', 1374.00, '60 minuta', 1, 'prihvaceno'),
(1048, '2019-10-15', '23:23:00', 43006, 'a:1:{s:11:\"pice4451535\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice4451535\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"887.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:1:{i:0;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 930.00, '60 minuta', 30, 'prihvaceno'),
(1049, '2019-10-17', '00:47:00', 42998, 'a:2:{s:11:\"pice6595023\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice6595023\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SICILLIANA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"704.00\";s:8:\"napomena\";s:14:\"BEZ ORIGANA!!!\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:14:\"deserti3665575\";a:6:{s:12:\"id_proizvoda\";s:14:\"deserti3665575\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";}}', 954.00, '50 minuta', 5, 'prihvaceno'),
(1050, '2019-10-19', '19:19:00', 58, 'a:7:{s:14:\"rostilj7977332\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj7977332\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:5:{i:0;s:6:\"KeÄap\";i:1;s:8:\"Crni luk\";i:2;s:5:\"Kupus\";i:3;s:4:\"Senf\";i:4;s:7:\"Pavlaka\";}}s:20:\"pica_sendvici8193276\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici8193276\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:1:{i:0;s:17:\"Ekstra kaÄkavalj\";}}s:14:\"napitci9449988\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci9449988\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:14:\"deserti9255634\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti9255634\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:5:\"Orasi\";i:1;s:6:\"Plazma\";}}s:15:\"sendvici5565048\";a:8:{s:12:\"id_proizvoda\";s:15:\"sendvici5565048\";s:15:\"vrsta_proizvoda\";s:8:\"sendvici\";s:5:\"naziv\";s:17:\"DI MARCO sendviÄ\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"315.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:2:{i:0;s:17:\"Ekstra kaÄkavalj\";i:1;s:6:\"KeÄap\";}s:15:\"namazi_sendvica\";s:7:\"Pavlaka\";}s:13:\"ostalo7568926\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo7568926\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:11:\"pice4534075\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice4534075\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"513.00\";s:13:\"velicina_pice\";s:2:\"32\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci32\";}}', 1982.70, '60 minuta', 159, 'prihvaceno'),
(1046, '2019-10-12', '19:46:00', 58, 'a:5:{s:11:\"pice8950453\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice8950453\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"369.00\";s:13:\"velicina_pice\";s:2:\"28\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci28\";}s:14:\"rostilj7560088\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj7560088\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 250 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"280.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:6:{i:0;s:7:\"Urnebes\";i:1;s:6:\"KeÄap\";i:2;s:8:\"Crni luk\";i:3;s:5:\"Kupus\";i:4;s:4:\"Senf\";i:5;s:7:\"Pavlaka\";}}s:14:\"rostilj4306799\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj4306799\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 250 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"280.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:5:{i:0;s:7:\"Majonez\";i:1;s:6:\"KeÄap\";i:2;s:5:\"Kupus\";i:3;s:4:\"Senf\";i:4;s:7:\"Pavlaka\";}}s:14:\"napitci5031300\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci5031300\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:13:\"ostalo6522279\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo6522279\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}}', 1373.40, '60 minuta', 158, 'prihvaceno'),
(1061, '2019-11-09', '19:27:00', 43026, 'a:1:{s:11:\"pice4231621\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice4231621\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"877.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 877.00, '60 minuta', 4, 'prihvaceno'),
(1062, '2019-11-09', '19:34:00', 58, 'a:5:{s:11:\"pice3771807\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice3771807\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"671.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:6:\"KeÄap\";i:1;s:7:\"Pavlaka\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:20:\"pica_sendvici6128461\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici6128461\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:2:{i:0;s:17:\"Ekstra kaÄkavalj\";i:1;s:7:\"Origano\";}}s:14:\"napitci8393931\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci8393931\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:13:\"ostalo3868345\";a:6:{s:12:\"id_proizvoda\";s:13:\"ostalo3868345\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";s:8:\"napomena\";s:104:\"Ako moze vozaÄ usput da uzme heets sienna 2 paklice i lucky strike double klik jednu paklicu, hvala :) \";}s:14:\"deserti3778873\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti3778873\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:5:\"Orasi\";i:1;s:6:\"Plazma\";}}}', 1700.10, '60 minuta', 161, 'prihvaceno'),
(1078, '2019-12-01', '18:05:00', 58, 'a:2:{s:11:\"pice8614547\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice8614547\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"997.00\";s:13:\"velicina_pice\";s:2:\"50\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:11:\"pice7300736\";a:9:{s:12:\"id_proizvoda\";s:11:\"pice7300736\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1081.00\";s:8:\"napomena\";s:29:\"Na pola pice staviti feferone\";s:13:\"velicina_pice\";s:2:\"50\";s:11:\"pica_dodaci\";a:1:{i:0;s:8:\"Feferoni\";}s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 2921.40, '60 minuta', 165, 'prihvaceno'),
(1076, '2019-11-28', '23:51:00', 42984, 'a:3:{s:13:\"ostalo5193384\";a:7:{s:12:\"id_proizvoda\";s:13:\"ostalo5193384\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:26:\"Slane zapeÄene palaÄinke\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"319.00\";s:14:\"nadev_sendvica\";s:9:\"PeÄenica\";s:15:\"namazi_sendvica\";s:7:\"Urnebes\";}s:14:\"deserti3583675\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti3583675\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:6:\"Plazma\";i:1;s:5:\"Å lag\";}}s:14:\"rostilj5739931\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj5739931\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:7:\"Urnebes\";i:1;s:5:\"Kupus\";i:2;s:7:\"Pavlaka\";}}}', 1029.00, '60 minuta', 4, 'prihvaceno'),
(1077, '2019-11-30', '17:01:00', 42940, 'a:1:{s:11:\"pice6555453\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice6555453\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:8:\"napomena\";s:22:\"Da ne bude preprecena.\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 756.00, '60 minuta', 55, 'prihvaceno'),
(1075, '2019-11-28', '22:44:00', 43052, 'a:5:{s:12:\"paste4670330\";a:8:{s:12:\"id_proizvoda\";s:12:\"paste4670330\";s:15:\"vrsta_proizvoda\";s:5:\"paste\";s:5:\"naziv\";s:15:\"NjeguÅ¡ka pasta\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"589.00\";s:13:\"tabela_dodaci\";s:15:\"dodaci_za_paste\";s:11:\"vrsta_paste\";s:4:\"Pene\";s:12:\"pasta_dodaci\";a:1:{i:0;s:10:\"KaÄkavalj\";}}s:12:\"paste7134245\";a:6:{s:12:\"id_proizvoda\";s:12:\"paste7134245\";s:15:\"vrsta_proizvoda\";s:5:\"paste\";s:5:\"naziv\";s:15:\"NjeguÅ¡ka pasta\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"589.00\";s:13:\"tabela_dodaci\";s:15:\"dodaci_za_paste\";}s:14:\"deserti4031323\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti4031323\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:17:\"PalaÄinka nutela\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"145.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:6:\"Plazma\";}}s:15:\"sendvici9918150\";a:6:{s:12:\"id_proizvoda\";s:15:\"sendvici9918150\";s:15:\"vrsta_proizvoda\";s:8:\"sendvici\";s:5:\"naziv\";s:15:\"PrÅ¡ut sendviÄ\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"315.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";}s:13:\"salate2644694\";a:5:{s:12:\"id_proizvoda\";s:13:\"salate2644694\";s:15:\"vrsta_proizvoda\";s:6:\"salate\";s:5:\"naziv\";s:13:\"SRPSKA salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"223.00\";}}', 1744.20, '60 minuta', 1, 'prihvaceno'),
(1074, '2019-11-26', '23:55:00', 42984, 'a:4:{s:14:\"rostilj3425216\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj3425216\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:5:\"Kupus\";i:1;s:4:\"Senf\";i:2;s:7:\"Pavlaka\";}}s:14:\"rostilj7458429\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj7458429\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:7:\"Majonez\";i:1;s:5:\"Kupus\";i:2;s:7:\"Pavlaka\";}}s:14:\"rostilj2265748\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj2265748\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:8:\"Crni luk\";i:1;s:5:\"Kupus\";i:2;s:7:\"Pavlaka\";}}s:14:\"rostilj4410199\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj4410199\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:4:{i:0;s:8:\"Crni luk\";i:1;s:4:\"Senf\";i:2;s:7:\"Pavlaka\";i:3;s:14:\"Tucana paprika\";}}}', 1250.00, '60 minuta', 3, 'prihvaceno'),
(1072, '2019-11-25', '20:10:00', 43029, 'a:2:{s:11:\"pice7408045\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice7408045\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"829.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:3:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";i:2;s:13:\"Punjena ivica\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:11:\"pice1149695\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice1149695\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"806.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:3:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";i:2;s:13:\"Punjena ivica\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1964.70, '60 minuta', 11, 'prihvaceno'),
(1073, '2019-11-25', '22:40:00', 58, 'a:3:{s:13:\"ostalo4795575\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo4795575\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";}s:11:\"pice4657665\";a:9:{s:12:\"id_proizvoda\";s:11:\"pice4657665\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"444.00\";s:8:\"napomena\";s:72:\"Ako moze vozaÄ usput da uzme heets sienna jednu paklicu, hvala puno :) \";s:13:\"velicina_pice\";s:2:\"28\";s:11:\"pica_dodaci\";a:3:{i:0;s:10:\"Gorgonzola\";i:1;s:14:\"Morski plodovi\";i:2;s:7:\"Tabasko\";}s:13:\"tabela_dodaci\";s:8:\"dodaci28\";}s:14:\"deserti2223694\";a:6:{s:12:\"id_proizvoda\";s:14:\"deserti2223694\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:28:\"PalaÄinka marmelada kajsija\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"115.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";}}', 856.00, '60 minuta', 164, 'prihvaceno'),
(1070, '2019-11-23', '16:32:00', 43026, 'a:1:{s:11:\"pice8611537\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice8611537\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"877.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 877.00, '60 minuta', 5, 'prihvaceno'),
(1071, '2019-11-24', '23:29:00', 42984, 'a:4:{s:14:\"rostilj5601152\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj5601152\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:8:\"Crni luk\";i:1;s:4:\"Senf\";i:2;s:7:\"Pavlaka\";}}s:14:\"rostilj2358097\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj2358097\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:4:{i:0;s:7:\"Majonez\";i:1;s:8:\"Crni luk\";i:2;s:5:\"Kupus\";i:3;s:14:\"Tucana paprika\";}}s:11:\"pice8079172\";a:9:{s:12:\"id_proizvoda\";s:11:\"pice8079172\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"MARGHERITA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"327.00\";s:13:\"velicina_pice\";s:2:\"28\";s:16:\"izbor_kackavalja\";s:10:\"KaÄkavalj\";s:11:\"pica_dodaci\";a:4:{i:0;s:4:\"Jaje\";i:1;s:5:\"Kulen\";i:2;s:8:\"PeÄurke\";i:3;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci28\";}s:14:\"deserti5565719\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti5565719\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"3\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:6:\"Plazma\";i:1;s:5:\"Å lag\";}}}', 1454.40, '60 minuta', 2, 'prihvaceno'),
(1089, '2019-12-18', '00:17:00', 43056, 'a:7:{s:14:\"rostilj9926045\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj9926045\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:1:{i:0;s:5:\"Kupus\";}}s:14:\"rostilj4161848\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj4161848\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 250 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"280.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:7:\"Urnebes\";i:1;s:7:\"Majonez\";i:2;s:7:\"Pavlaka\";}}s:13:\"salate9642085\";a:5:{s:12:\"id_proizvoda\";s:13:\"salate9642085\";s:15:\"vrsta_proizvoda\";s:6:\"salate\";s:5:\"naziv\";s:12:\"CEZAR salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"357.00\";}s:15:\"sendvici2675533\";a:6:{s:12:\"id_proizvoda\";s:15:\"sendvici2675533\";s:15:\"vrsta_proizvoda\";s:8:\"sendvici\";s:5:\"naziv\";s:17:\"DI MARCO sendviÄ\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"315.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";}s:15:\"sendvici6776986\";a:7:{s:12:\"id_proizvoda\";s:15:\"sendvici6776986\";s:15:\"vrsta_proizvoda\";s:8:\"sendvici\";s:5:\"naziv\";s:14:\"Posni sendviÄ\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"255.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:15:\"namazi_sendvica\";s:6:\"KeÄap\";}s:20:\"pica_sendvici9979813\";a:6:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici9979813\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";}s:14:\"deserti3573520\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti3573520\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:17:\"PalaÄinka nutela\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"145.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:6:\"Plazma\";}}}', 2041.20, '70 minuta', 1, 'prihvaceno'),
(1086, '2019-12-15', '16:24:00', 43029, 'a:2:{s:11:\"pice6376344\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice6376344\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"829.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:11:\"pice9264650\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice9264650\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"806.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1730.70, '60 minuta', 12, 'prihvaceno'),
(1087, '2019-12-15', '20:07:00', 43026, 'a:1:{s:11:\"pice6351891\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice6351891\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"877.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 877.00, '60 minuta', 6, 'prihvaceno'),
(1088, '2019-12-15', '20:52:00', 43050, 'a:2:{s:11:\"pice3983481\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice3983481\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:14:\"napitci3127832\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci3127832\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}}', 936.00, '60 minuta', 2, 'prihvaceno'),
(1085, '2019-12-14', '22:36:00', 43006, 'a:1:{s:11:\"pice8975087\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice8975087\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"887.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:7:\"Pavlaka\";i:1;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 983.00, '60 minuta', 34, 'prihvaceno'),
(1083, '2019-12-11', '17:46:00', 43053, 'a:3:{s:12:\"paste3327854\";a:7:{s:12:\"id_proizvoda\";s:12:\"paste3327854\";s:15:\"vrsta_proizvoda\";s:5:\"paste\";s:5:\"naziv\";s:15:\"Pasta Carbonare\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"549.00\";s:13:\"tabela_dodaci\";s:15:\"dodaci_za_paste\";s:11:\"vrsta_paste\";s:4:\"Pene\";}s:12:\"paste9827101\";a:7:{s:12:\"id_proizvoda\";s:12:\"paste9827101\";s:15:\"vrsta_proizvoda\";s:5:\"paste\";s:5:\"naziv\";s:20:\"QUATRO FORMAGI pasta\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"579.00\";s:13:\"tabela_dodaci\";s:15:\"dodaci_za_paste\";s:11:\"vrsta_paste\";s:4:\"Pene\";}s:14:\"napitci2482601\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci2482601\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"140.00\";s:16:\"velicina_porcije\";s:2:\"1l\";}}', 1268.00, '60 minuta', 1, 'prihvaceno'),
(1084, '2019-12-13', '17:24:00', 43054, 'a:1:{s:11:\"pice7711873\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice7711873\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:1:{i:0;s:13:\"Punjena ivica\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 886.00, '60 minuta', 1, 'prihvaceno'),
(982, '2019-07-04', '22:25:00', 43036, 'a:3:{s:11:\"pice5075550\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice5075550\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:22:\"VULKAN - punjena ivica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1047.00\";s:13:\"velicina_pice\";s:2:\"50\";s:11:\"pica_dodaci\";a:1:{i:0;s:16:\"NjeguÅ¡ki prÅ¡ut\";}s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:13:\"ostalo5275292\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo5275292\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"deserti5635533\";a:6:{s:12:\"id_proizvoda\";s:14:\"deserti5635533\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:13:\"VoÄ‡na salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"376.00\";s:16:\"velicina_porcije\";s:9:\"400 grama\";}}', 1800.00, '60 minuta', 4, 'prihvaceno'),
(983, '2019-07-06', '19:48:00', 42871, 'a:1:{s:11:\"pice8234262\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice8234262\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"887.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:3:{i:0;s:16:\"NjeguÅ¡ki prÅ¡ut\";i:1;s:8:\"Piletina\";i:2;s:13:\"Punjena ivica\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1301.00, '70 minuta', 26, 'prihvaceno'),
(984, '2019-07-06', '22:35:00', 58, 'a:4:{s:11:\"pice3426521\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice3426521\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"513.00\";s:13:\"velicina_pice\";s:2:\"32\";s:11:\"pica_dodaci\";a:3:{i:0;s:6:\"KeÄap\";i:1;s:7:\"Pavlaka\";i:2;s:13:\"Punjena ivica\";}s:13:\"tabela_dodaci\";s:8:\"dodaci32\";}s:13:\"ostalo7419268\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo7419268\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"napitci5065576\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci5065576\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:14:\"rostilj6667434\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj6667434\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:5:{i:0;s:6:\"KeÄap\";i:1;s:8:\"Crni luk\";i:2;s:5:\"Kupus\";i:3;s:4:\"Senf\";i:4;s:7:\"Pavlaka\";}}}', 1373.00, '60 minuta', 146, 'prihvaceno'),
(985, '2019-07-07', '00:28:00', 43006, 'a:1:{s:11:\"pice5717494\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice5717494\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"887.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:1:{i:0;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 930.00, '60 minuta', 21, 'prihvaceno'),
(986, '2019-07-08', '21:11:00', 42930, 'a:3:{s:13:\"ostalo9427822\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo9427822\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:15:\"Chicken fingers\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"577.00\";}s:13:\"ostalo5805435\";a:6:{s:12:\"id_proizvoda\";s:13:\"ostalo5805435\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:15:\"Piletina u sosu\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"686.00\";s:10:\"vrsta_sosa\";s:18:\"ÄŒetiri vrste sira\";}s:14:\"deserti4246380\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti4246380\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:17:\"PalaÄinka nutela\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"145.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:6:\"Plazma\";}}}', 1451.70, '60 minuta', 46, 'prihvaceno'),
(987, '2019-07-11', '18:36:00', 58, 'a:4:{s:14:\"deserti3042429\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti3042429\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:5:\"Orasi\";i:1;s:6:\"Plazma\";}}s:11:\"pice8787670\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice8787670\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:22:\"VULKAN - punjena ivica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"799.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:20:\"pica_sendvici8460185\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici8460185\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:2:{i:0;s:17:\"Ekstra kaÄkavalj\";i:1;s:7:\"Origano\";}}s:13:\"ostalo9342242\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo9342242\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}}', 1959.30, '60 minuta', 147, 'prihvaceno'),
(988, '2019-07-13', '21:55:00', 42940, 'a:1:{s:11:\"pice3983759\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice3983759\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1360.80, '50 minuta', 50, 'prihvaceno'),
(989, '2019-07-14', '20:31:00', 43029, 'a:2:{s:11:\"pice6526143\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice6526143\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"806.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:11:\"pice7187657\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice7187657\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"829.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1730.70, '60 minuta', 5, 'prihvaceno'),
(990, '2019-07-15', '22:02:00', 42945, 'a:1:{s:12:\"paste2404643\";a:8:{s:12:\"id_proizvoda\";s:12:\"paste2404643\";s:15:\"vrsta_proizvoda\";s:5:\"paste\";s:5:\"naziv\";s:15:\"NjeguÅ¡ka pasta\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"589.00\";s:13:\"tabela_dodaci\";s:15:\"dodaci_za_paste\";s:11:\"vrsta_paste\";s:4:\"Pene\";s:12:\"pasta_dodaci\";a:1:{i:0;s:7:\"Masline\";}}}', 612.00, '50 minuta', 33, 'prihvaceno'),
(991, '2019-07-17', '17:34:00', 43037, 'a:2:{s:11:\"pice7230084\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice7230084\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:17:\"QUATTRO STAGGIONI\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"444.00\";s:13:\"velicina_pice\";s:2:\"28\";s:13:\"tabela_dodaci\";s:8:\"dodaci28\";}s:11:\"pice7366306\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice7366306\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"SRPSKA pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"479.00\";s:13:\"velicina_pice\";s:2:\"28\";s:13:\"tabela_dodaci\";s:8:\"dodaci28\";}}', 923.00, '60 minuta', 1, 'prihvaceno'),
(992, '2019-07-17', '22:16:00', 42945, 'a:1:{s:12:\"paste6193505\";a:8:{s:12:\"id_proizvoda\";s:12:\"paste6193505\";s:15:\"vrsta_proizvoda\";s:5:\"paste\";s:5:\"naziv\";s:15:\"NjeguÅ¡ka pasta\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"589.00\";s:13:\"tabela_dodaci\";s:15:\"dodaci_za_paste\";s:11:\"vrsta_paste\";s:4:\"Pene\";s:12:\"pasta_dodaci\";a:1:{i:0;s:7:\"Masline\";}}}', 612.00, '50 minuta', 34, 'prihvaceno'),
(993, '2019-07-19', '17:26:00', 43037, 'a:2:{s:11:\"pice1903104\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice1903104\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"SRPSKA pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"639.00\";s:13:\"velicina_pice\";s:2:\"32\";s:13:\"tabela_dodaci\";s:8:\"dodaci32\";}s:11:\"pice7139029\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice7139029\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:17:\"QUATTRO STAGGIONI\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"444.00\";s:13:\"velicina_pice\";s:2:\"28\";s:13:\"tabela_dodaci\";s:8:\"dodaci28\";}}', 1083.00, '60 minuta', 2, 'prihvaceno'),
(994, '2019-07-21', '20:59:00', 43006, 'a:1:{s:11:\"pice6620401\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice6620401\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:3:{i:0;s:7:\"Majonez\";i:1;s:5:\"Susam\";i:2;s:9:\"Suvi vrat\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 933.00, '60 minuta', 22, 'prihvaceno'),
(995, '2019-07-24', '21:38:00', 42945, 'a:1:{s:12:\"paste2102754\";a:7:{s:12:\"id_proizvoda\";s:12:\"paste2102754\";s:15:\"vrsta_proizvoda\";s:5:\"paste\";s:5:\"naziv\";s:15:\"NjeguÅ¡ka pasta\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"589.00\";s:13:\"tabela_dodaci\";s:15:\"dodaci_za_paste\";s:12:\"pasta_dodaci\";a:1:{i:0;s:7:\"Masline\";}}}', 612.00, '50 minuta', 35, 'prihvaceno');
INSERT INTO `arhiva` (`id`, `datum`, `vreme`, `korisnik`, `porudzbina`, `cena`, `vreme_dostave`, `broj_narucivanja_korisnika`, `status`) VALUES
(996, '2019-07-25', '23:41:00', 43006, 'a:1:{s:11:\"pice6601862\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice6601862\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"655.00\";s:13:\"velicina_pice\";s:2:\"32\";s:11:\"pica_dodaci\";a:1:{i:0;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci32\";}}', 682.00, '60 minuta', 23, 'prihvaceno'),
(997, '2019-07-27', '14:26:00', 42945, 'a:2:{s:11:\"pice2435639\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice2435639\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"NAPOLITANA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"545.00\";s:13:\"velicina_pice\";s:2:\"32\";s:13:\"tabela_dodaci\";s:8:\"dodaci32\";}s:14:\"deserti1744530\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti1744530\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:6:\"Plazma\";}}}', 700.00, '50 minuta', 36, 'prihvaceno'),
(998, '2019-07-28', '18:45:00', 43029, 'a:2:{s:11:\"pice9238730\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice9238730\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"806.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:11:\"pice5983970\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice5983970\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"829.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1730.70, '60 minuta', 6, 'prihvaceno'),
(999, '2019-07-29', '00:29:00', 43028, 'a:3:{s:11:\"pice5557066\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice5557066\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:3:{i:0;s:8:\"Mocarela\";i:1;s:5:\"Susam\";i:2;s:7:\"Tabasko\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:14:\"napitci1260389\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci1260389\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:5:\"90.00\";s:16:\"velicina_porcije\";s:7:\"Limenka\";}s:14:\"napitci5608000\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci5608000\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:5:\"Fanta\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:5:\"90.00\";s:16:\"velicina_porcije\";s:7:\"Limenka\";}}', 1113.00, '60 minuta', 5, 'prihvaceno'),
(1000, '2019-07-31', '14:11:00', 58, 'a:2:{s:13:\"ostalo4278987\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo4278987\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";}s:11:\"pice9063837\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice9063837\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:22:\"VULKAN - punjena ivica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"799.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1026.00, '60 minuta', 148, 'prihvaceno'),
(1001, '2019-08-03', '15:08:00', 43026, 'a:1:{s:11:\"pice8576639\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice8576639\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"877.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 877.00, '60 minuta', 2, 'prihvaceno'),
(1002, '2019-08-04', '00:50:00', 43006, 'a:1:{s:11:\"pice5265250\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice5265250\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:4:{i:0;s:7:\"Majonez\";i:1;s:5:\"Kulen\";i:2;s:5:\"Susam\";i:3;s:9:\"Suvi vrat\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1020.00, '60 minuta', 24, 'prihvaceno'),
(1003, '2019-08-07', '11:14:00', 43038, 'a:2:{s:11:\"pice1569217\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice1569217\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:14:\"napitci5805176\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci5805176\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"100.00\";s:16:\"velicina_porcije\";s:4:\"0,5l\";}}', 956.00, '60 minuta', 1, 'prihvaceno'),
(1012, '2019-08-20', '18:06:00', 58, 'a:4:{s:20:\"pica_sendvici9975771\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici9975771\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:2:{i:0;s:17:\"Ekstra kaÄkavalj\";i:1;s:7:\"Origano\";}}s:13:\"ostalo6830728\";a:6:{s:12:\"id_proizvoda\";s:13:\"ostalo6830728\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";s:8:\"napomena\";s:90:\"Ako moze vozaÄ usput da uzme heets sienna 2 paklice i lucky strike double klik, hvala :) \";}s:14:\"napitci9920611\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci9920611\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:11:\"pice7236282\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice7236282\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:22:\"VULKAN - punjena ivica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"799.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1601.10, '30 minuta', 152, 'odbijeno'),
(1004, '2019-08-07', '17:21:00', 43037, 'a:1:{s:11:\"pice8210767\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice8210767\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"SRPSKA pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"878.00\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 878.00, '50 minuta', 3, 'prihvaceno'),
(1005, '2019-08-07', '21:11:00', 42945, 'a:4:{s:14:\"rostilj9200877\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj9200877\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 250 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"280.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:4:{i:0;s:6:\"KeÄap\";i:1;s:8:\"Crni luk\";i:2;s:5:\"Kupus\";i:3;s:4:\"Senf\";}}s:14:\"rostilj9427779\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj9427779\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:8:\"Crni luk\";i:1;s:5:\"Kupus\";i:2;s:7:\"Pavlaka\";}}s:15:\"sendvici3878423\";a:7:{s:12:\"id_proizvoda\";s:15:\"sendvici3878423\";s:15:\"vrsta_proizvoda\";s:8:\"sendvici\";s:5:\"naziv\";s:15:\"PrÅ¡ut sendviÄ\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"315.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:15:\"namazi_sendvica\";s:7:\"Pavlaka\";}s:14:\"deserti3066244\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti3066244\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:6:\"Plazma\";i:1;s:5:\"Å lag\";}}}', 1090.00, '60 minuta', 37, 'prihvaceno'),
(1006, '2019-08-09', '15:39:00', 42940, 'a:1:{s:11:\"pice8163455\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice8163455\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"887.00\";s:8:\"napomena\";s:44:\"Bez kajmaka, ajvara i feferona kao i uvek :)\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 887.00, '40 minuta', 51, 'prihvaceno'),
(1007, '2019-08-10', '21:23:00', 58, 'a:5:{s:11:\"pice2530883\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice2530883\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:22:\"VULKAN - punjena ivica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"799.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:20:\"pica_sendvici7318310\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici7318310\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:2:{i:0;s:17:\"Ekstra kaÄkavalj\";i:1;s:6:\"KeÄap\";}}s:13:\"ostalo8722578\";a:6:{s:12:\"id_proizvoda\";s:13:\"ostalo8722578\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";s:8:\"napomena\";s:62:\"ako moze vozac usput da uzme heets sienna ili bronze, hvala :)\";}s:14:\"deserti5141196\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti5141196\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:8:\"Kikiriki\";i:1;s:6:\"Plazma\";}}s:14:\"napitci4468103\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci4468103\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}}', 1785.60, '60 minuta', 149, 'prihvaceno'),
(1008, '2019-08-11', '20:21:00', 43039, 'a:1:{s:11:\"pice8104256\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice8104256\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1199.00\";s:8:\"napomena\";s:21:\"Bez ajvara i feferona\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 1199.00, '50 minuta', 1, 'prihvaceno'),
(1009, '2019-08-12', '21:41:00', 58, 'a:4:{s:11:\"pice5629429\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice5629429\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"444.00\";s:13:\"velicina_pice\";s:2:\"28\";s:11:\"pica_dodaci\";a:2:{i:0;s:14:\"Morski plodovi\";i:1;s:13:\"Punjena ivica\";}s:13:\"tabela_dodaci\";s:8:\"dodaci28\";}s:13:\"ostalo4481120\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo4481120\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";}s:13:\"salate3023077\";a:6:{s:12:\"id_proizvoda\";s:13:\"salate3023077\";s:15:\"vrsta_proizvoda\";s:6:\"salate\";s:5:\"naziv\";s:12:\"RUSKA salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"275.00\";s:8:\"napomena\";s:63:\"Ako moze vozaÄ usput da uzme heets sienna 2 paklice, hvala :) \";}s:14:\"napitci7735167\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci7735167\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"140.00\";s:16:\"velicina_porcije\";s:2:\"1l\";}}', 1176.00, '60 minuta', 150, 'prihvaceno'),
(1010, '2019-08-20', '14:39:00', 42871, 'a:4:{s:11:\"pice9244495\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice9244495\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1199.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:11:\"pice2600048\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice2600048\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"806.00\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:12:\"paste7587648\";a:8:{s:12:\"id_proizvoda\";s:12:\"paste7587648\";s:15:\"vrsta_proizvoda\";s:5:\"paste\";s:5:\"naziv\";s:15:\"Pasta Carbonare\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"549.00\";s:13:\"tabela_dodaci\";s:15:\"dodaci_za_paste\";s:11:\"vrsta_paste\";s:4:\"Pene\";s:12:\"izbor_pribor\";s:6:\"Pribor\";}s:12:\"paste4734514\";a:8:{s:12:\"id_proizvoda\";s:12:\"paste4734514\";s:15:\"vrsta_proizvoda\";s:5:\"paste\";s:5:\"naziv\";s:15:\"Pasta Carbonare\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"549.00\";s:13:\"tabela_dodaci\";s:15:\"dodaci_za_paste\";s:11:\"vrsta_paste\";s:4:\"Pene\";s:12:\"izbor_pribor\";s:6:\"Pribor\";}}', 2792.70, '60 minuta', 27, 'prihvaceno'),
(1011, '2019-08-20', '17:41:00', 58, 'a:4:{s:11:\"pice5217807\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice5217807\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:22:\"VULKAN - punjena ivica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"586.00\";s:13:\"velicina_pice\";s:2:\"32\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci32\";}s:13:\"ostalo5731627\";a:6:{s:12:\"id_proizvoda\";s:13:\"ostalo5731627\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";s:8:\"napomena\";s:90:\"Ako moze vozaÄ usput da uzme heets sienna 2 paklice i lucky strike double klik, hvala :) \";}s:14:\"napitci5867905\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci5867905\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:20:\"pica_sendvici6583547\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici6583547\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:2:{i:0;s:17:\"Ekstra kaÄkavalj\";i:1;s:7:\"Origano\";}}}', 1391.40, '60 minuta', 151, 'prihvaceno'),
(1013, '2019-08-21', '16:59:00', 42940, 'a:1:{s:11:\"pice5687382\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice5687382\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 756.00, '60 minuta', 52, 'prihvaceno'),
(1014, '2019-08-23', '00:53:00', 43040, 'a:2:{s:11:\"pice9256696\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice9256696\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:14:\"napitci3829691\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci3829691\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"140.00\";s:16:\"velicina_porcije\";s:2:\"1l\";}}', 896.00, '60 minuta', 1, 'prihvaceno'),
(1015, '2019-08-23', '01:36:00', 43028, 'a:1:{s:11:\"pice7496995\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice7496995\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:7:\"Tabasko\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 890.00, '50 minuta', 6, 'prihvaceno'),
(1023, '2019-09-09', '10:08:00', 43041, 'a:6:{s:14:\"rostilj3595099\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj3595099\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:5:\"Kupus\";i:1;s:4:\"Senf\";i:2;s:7:\"Pavlaka\";}}s:14:\"rostilj8774048\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj8774048\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:6:\"KeÄap\";i:1;s:5:\"Kupus\";i:2;s:4:\"Senf\";}}s:14:\"rostilj2021156\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj2021156\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:2:{i:0;s:7:\"Pavlaka\";i:1;s:14:\"Tucana paprika\";}}s:14:\"rostilj3694712\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj3694712\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:6:\"KeÄap\";i:1;s:5:\"Kupus\";i:2;s:7:\"Pavlaka\";}}s:15:\"sendvici4159658\";a:7:{s:12:\"id_proizvoda\";s:15:\"sendvici4159658\";s:15:\"vrsta_proizvoda\";s:8:\"sendvici\";s:5:\"naziv\";s:9:\"SendviÄ \";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"245.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:15:\"namazi_sendvica\";s:6:\"KeÄap\";}s:14:\"rostilj8653574\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj8653574\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:1:{i:0;s:5:\"Kupus\";}}}', 1495.00, '30 minuta', 1, 'odbijeno'),
(1016, '2019-08-23', '16:24:00', 58, 'a:6:{s:11:\"pice6082104\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice6082104\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"513.00\";s:13:\"velicina_pice\";s:2:\"32\";s:11:\"pica_dodaci\";a:2:{i:0;s:6:\"KeÄap\";i:1;s:7:\"Pavlaka\";}s:13:\"tabela_dodaci\";s:8:\"dodaci32\";}s:15:\"sendvici9119271\";a:8:{s:12:\"id_proizvoda\";s:15:\"sendvici9119271\";s:15:\"vrsta_proizvoda\";s:8:\"sendvici\";s:5:\"naziv\";s:17:\"DI MARCO sendviÄ\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"315.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:3:{i:0;s:8:\"Beli luk\";i:1;s:6:\"KeÄap\";i:2;s:7:\"Origano\";}s:15:\"namazi_sendvica\";s:7:\"Pavlaka\";}s:20:\"pica_sendvici2700305\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici2700305\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:2:{i:0;s:17:\"Ekstra kaÄkavalj\";i:1;s:7:\"Origano\";}}s:13:\"ostalo2484256\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo2484256\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"napitci8641759\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci8641759\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:14:\"deserti2658688\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti2658688\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:5:\"Orasi\";i:1;s:6:\"Plazma\";}}}', 1823.40, '60 minuta', 153, 'prihvaceno'),
(1017, '2019-08-24', '00:31:00', 43006, 'a:1:{s:11:\"pice5314529\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice5314529\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"756.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:3:{i:0;s:7:\"Pavlaka\";i:1;s:5:\"Susam\";i:2;s:9:\"Suvi vrat\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 939.00, '60 minuta', 25, 'prihvaceno'),
(1018, '2019-08-24', '12:43:00', 42945, 'a:1:{s:11:\"pice2477922\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice2477922\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"SRPSKA pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"878.00\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 878.00, '60 minuta', 38, 'prihvaceno'),
(1019, '2019-08-25', '20:21:00', 43029, 'a:2:{s:11:\"pice7125180\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice7125180\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"806.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:11:\"pice5235675\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice5235675\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"829.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1730.70, '60 minuta', 7, 'prihvaceno'),
(1020, '2019-08-29', '20:47:00', 42945, 'a:4:{s:14:\"rostilj7828746\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj7828746\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:4:{i:0;s:8:\"Crni luk\";i:1;s:5:\"Kupus\";i:2;s:4:\"Senf\";i:3;s:7:\"Pavlaka\";}}s:13:\"ostalo4775517\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo4775517\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"deserti7196877\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti7196877\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:17:\"PalaÄinka nutela\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"145.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:6:\"Plazma\";i:1;s:5:\"Å lag\";}}s:14:\"deserti1717427\";a:6:{s:12:\"id_proizvoda\";s:14:\"deserti1717427\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:13:\"VoÄ‡na salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"267.00\";s:16:\"velicina_porcije\";s:9:\"250 grama\";}}', 1167.00, '60 minuta', 39, 'prihvaceno'),
(1021, '2019-08-31', '14:57:00', 43006, 'a:1:{s:11:\"pice6416986\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice6416986\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1199.00\";s:13:\"velicina_pice\";s:2:\"50\";s:11:\"pica_dodaci\";a:1:{i:0;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 1262.00, '60 minuta', 26, 'prihvaceno'),
(1022, '2019-09-07', '20:01:00', 58, 'a:6:{s:11:\"pice1448057\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice1448057\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"513.00\";s:13:\"velicina_pice\";s:2:\"32\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci32\";}s:14:\"rostilj4496042\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj4496042\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:5:{i:0;s:6:\"KeÄap\";i:1;s:8:\"Crni luk\";i:2;s:5:\"Kupus\";i:3;s:4:\"Senf\";i:4;s:7:\"Pavlaka\";}}s:13:\"ostalo6576615\";a:6:{s:12:\"id_proizvoda\";s:13:\"ostalo6576615\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";s:8:\"napomena\";s:68:\"Ako moze vozaÄ usput da uzme heets sienna jedno pakovanje,hvala :) \";}s:20:\"pica_sendvici6697901\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici6697901\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:4:{i:0;s:8:\"Beli luk\";i:1;s:10:\"Crni biber\";i:2;s:17:\"Ekstra kaÄkavalj\";i:3;s:7:\"Origano\";}}s:14:\"napitci1664560\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci1664560\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:14:\"deserti2175288\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti2175288\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:3:{i:0;s:6:\"Banana\";i:1;s:5:\"Orasi\";i:2;s:6:\"Plazma\";}}}', 1663.20, '60 minuta', 154, 'prihvaceno'),
(1024, '2019-09-11', '20:32:00', 43029, 'a:2:{s:11:\"pice9107478\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice9107478\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"806.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:11:\"pice5318629\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice5318629\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"829.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1730.70, '60 minuta', 8, 'prihvaceno'),
(1025, '2019-09-11', '21:00:00', 43006, 'a:1:{s:11:\"pice1977173\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice1977173\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"887.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:1:{i:0;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 930.00, '60 minuta', 27, 'prihvaceno'),
(1026, '2019-09-14', '18:50:00', 58, 'a:6:{s:20:\"pica_sendvici2472895\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici2472895\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:1:{i:0;s:17:\"Ekstra kaÄkavalj\";}}s:14:\"rostilj3992846\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj3992846\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 125 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"160.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:5:{i:0;s:6:\"KeÄap\";i:1;s:8:\"Crni luk\";i:2;s:5:\"Kupus\";i:3;s:4:\"Senf\";i:4;s:7:\"Pavlaka\";}}s:14:\"deserti3222311\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti3222311\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:3:{i:0;s:6:\"Banana\";i:1;s:5:\"Kokos\";i:2;s:6:\"Plazma\";}}s:14:\"napitci5527708\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci5527708\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:13:\"ostalo3429681\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo3429681\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:11:\"pice3582635\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice3582635\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"513.00\";s:13:\"velicina_pice\";s:2:\"32\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci32\";}}', 1663.20, '60 minuta', 155, 'prihvaceno'),
(1027, '2019-09-20', '01:18:00', 42998, 'a:2:{s:11:\"pice5525692\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice5525692\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SICILLIANA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"704.00\";s:8:\"napomena\";s:14:\"BEZ ORIGANA!!!\";s:13:\"velicina_pice\";s:2:\"42\";s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:14:\"deserti9641053\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti9641053\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:6:\"Plazma\";}}}', 859.00, '60 minuta', 4, 'prihvaceno'),
(1028, '2019-09-22', '15:00:00', 43006, 'a:1:{s:11:\"pice7674276\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice7674276\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1199.00\";s:13:\"velicina_pice\";s:2:\"50\";s:11:\"pica_dodaci\";a:1:{i:0;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 1262.00, '60 minuta', 28, 'prihvaceno'),
(1029, '2019-09-22', '16:26:00', 43033, 'a:3:{s:12:\"paste8691962\";a:7:{s:12:\"id_proizvoda\";s:12:\"paste8691962\";s:15:\"vrsta_proizvoda\";s:5:\"paste\";s:5:\"naziv\";s:15:\"Pasta Carbonare\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"549.00\";s:13:\"tabela_dodaci\";s:15:\"dodaci_za_paste\";s:11:\"vrsta_paste\";s:8:\"Å pagete\";}s:14:\"deserti2982854\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti2982854\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:5:\"Kokos\";i:1;s:6:\"Plazma\";}}s:14:\"deserti2311993\";a:6:{s:12:\"id_proizvoda\";s:14:\"deserti2311993\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:13:\"VoÄ‡na salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"376.00\";s:16:\"velicina_porcije\";s:9:\"400 grama\";}}', 1110.00, '60 minuta', 2, 'prihvaceno'),
(1030, '2019-09-23', '17:30:00', 43036, 'a:4:{s:13:\"ostalo6582258\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo6582258\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";}s:11:\"pice7431906\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice7431906\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1049.00\";s:13:\"velicina_pice\";s:2:\"50\";s:11:\"pica_dodaci\";a:1:{i:0;s:8:\"Piletina\";}s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:14:\"deserti7298236\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti7298236\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:6:\"Plazma\";}}s:14:\"napitci2961269\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci2961269\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}}', 1539.90, '60 minuta', 5, 'prihvaceno'),
(1031, '2019-09-23', '21:32:00', 43033, 'a:2:{s:13:\"ostalo4807752\";a:6:{s:12:\"id_proizvoda\";s:13:\"ostalo4807752\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:15:\"Piletina u sosu\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"686.00\";s:10:\"vrsta_sosa\";s:14:\"Gorgonzola sos\";}s:14:\"deserti6666492\";a:6:{s:12:\"id_proizvoda\";s:14:\"deserti6666492\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:13:\"VoÄ‡na salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"267.00\";s:16:\"velicina_porcije\";s:9:\"250 grama\";}}', 953.00, '50 minuta', 3, 'prihvaceno'),
(1032, '2019-09-23', '22:52:00', 42945, 'a:3:{s:13:\"salate8756242\";a:6:{s:12:\"id_proizvoda\";s:13:\"salate8756242\";s:15:\"vrsta_proizvoda\";s:6:\"salate\";s:5:\"naziv\";s:14:\"PileÄ‡a salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"289.00\";s:12:\"izbor_pribor\";s:6:\"Pribor\";}s:14:\"rostilj6548957\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj6548957\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:4:{i:0;s:8:\"Crni luk\";i:1;s:5:\"Kupus\";i:2;s:4:\"Senf\";i:3;s:7:\"Pavlaka\";}}s:14:\"rostilj8665108\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj8665108\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:5:\"Kupus\";i:1;s:4:\"Senf\";i:2;s:7:\"Pavlaka\";}}}', 909.00, '60 minuta', 40, 'prihvaceno'),
(1033, '2019-09-24', '15:08:00', 43011, 'a:3:{s:13:\"ostalo5787950\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo5787950\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:15:\"Chicken fingers\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"577.00\";}s:14:\"deserti2264645\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti2264645\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:17:\"PalaÄinka nutela\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"145.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:6:\"Plazma\";}}s:14:\"napitci8861356\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci8861356\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:4:\"Rosa\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:5:\"60.00\";s:16:\"velicina_porcije\";s:4:\"0,5l\";}}', 812.00, '60 minuta', 2, 'prihvaceno'),
(1034, '2019-09-25', '16:01:00', 58, 'a:6:{s:11:\"pice8973745\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice8973745\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"513.00\";s:13:\"velicina_pice\";s:2:\"32\";s:11:\"pica_dodaci\";a:1:{i:0;s:6:\"KeÄap\";}s:13:\"tabela_dodaci\";s:8:\"dodaci32\";}s:20:\"pica_sendvici4616200\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici4616200\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:1:{i:0;s:17:\"Ekstra kaÄkavalj\";}}s:14:\"deserti2272017\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti2272017\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:3:{i:0;s:8:\"Kikiriki\";i:1;s:5:\"Kokos\";i:2;s:6:\"Plazma\";}}s:13:\"ostalo4967882\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo4967882\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"napitci6333531\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci6333531\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}s:13:\"salate3837598\";a:5:{s:12:\"id_proizvoda\";s:13:\"salate3837598\";s:15:\"vrsta_proizvoda\";s:6:\"salate\";s:5:\"naziv\";s:12:\"CEZAR salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"357.00\";}}', 1840.50, '60 minuta', 156, 'prihvaceno'),
(1035, '2019-09-27', '16:59:00', 58, 'a:4:{s:20:\"pica_sendvici6956992\";a:7:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici6956992\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:14:\"sendvic_dodaci\";a:1:{i:0;s:17:\"Ekstra kaÄkavalj\";}}s:13:\"ostalo9117741\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo9117741\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"deserti6251198\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti6251198\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:6:\"Banana\";i:1;s:5:\"Kokos\";}}s:11:\"pice2566842\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice2566842\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"VESUVIO\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"671.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:6:\"KeÄap\";i:1;s:7:\"Pavlaka\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1538.10, '60 minuta', 157, 'prihvaceno'),
(1036, '2019-09-27', '20:18:00', 43044, 'a:1:{s:11:\"pice8550007\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice8550007\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"997.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 997.00, '60 minuta', 1, 'prihvaceno'),
(1037, '2019-09-29', '18:21:00', 43039, 'a:1:{s:11:\"pice9988421\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice9988421\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1199.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 1199.00, '50 minuta', 2, 'prihvaceno'),
(1038, '2019-10-01', '20:58:00', 43029, 'a:2:{s:11:\"pice3950223\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice3950223\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"829.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:11:\"pice2016668\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice2016668\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"806.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1730.70, '50 minuta', 9, 'prihvaceno'),
(1039, '2019-10-02', '11:03:00', 43033, 'a:2:{s:12:\"paste5725761\";a:7:{s:12:\"id_proizvoda\";s:12:\"paste5725761\";s:15:\"vrsta_proizvoda\";s:5:\"paste\";s:5:\"naziv\";s:15:\"NjeguÅ¡ka pasta\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"589.00\";s:13:\"tabela_dodaci\";s:15:\"dodaci_za_paste\";s:11:\"vrsta_paste\";s:8:\"Å pagete\";}s:14:\"deserti5352971\";a:6:{s:12:\"id_proizvoda\";s:14:\"deserti5352971\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:13:\"VoÄ‡na salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"376.00\";s:16:\"velicina_porcije\";s:9:\"400 grama\";}}', 965.00, '60 minuta', 4, 'prihvaceno'),
(1040, '2019-10-03', '00:04:00', 42971, 'a:1:{s:11:\"pice5584616\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice5584616\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1081.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 1081.00, '60 minuta', 8, 'prihvaceno'),
(1041, '2019-10-05', '01:43:00', 43046, 'a:2:{s:11:\"pice4169221\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice4169221\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SICILLIANA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"522.00\";s:13:\"velicina_pice\";s:2:\"32\";s:11:\"pica_dodaci\";a:7:{i:0;s:10:\"Dva jajeta\";i:1;s:8:\"Feferoni\";i:2;s:4:\"Jaje\";i:3;s:8:\"Mocarela\";i:4;s:7:\"Pavlaka\";i:5;s:13:\"Punjena ivica\";i:6;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci32\";}s:14:\"deserti4038180\";a:6:{s:12:\"id_proizvoda\";s:14:\"deserti4038180\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";}}', 957.00, '60 minuta', 1, 'prihvaceno'),
(1042, '2019-10-05', '03:00:00', 43006, 'a:1:{s:11:\"pice4537077\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice4537077\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"887.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:1:{i:0;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 930.00, '30 minuta', 29, 'odbijeno'),
(1043, '2019-10-07', '21:26:00', 43036, 'a:4:{s:11:\"pice8232382\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice8232382\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1049.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:13:\"ostalo7935787\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo7935787\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"napitci3514258\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci3514258\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:16:\"ZajeÄarsko pivo\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"130.00\";s:16:\"velicina_porcije\";s:7:\"Limenka\";}s:14:\"napitci9733594\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci9733594\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"140.00\";s:16:\"velicina_porcije\";s:2:\"1l\";}}', 1511.10, '60 minuta', 6, 'prihvaceno'),
(1044, '2019-10-08', '17:09:00', 43029, 'a:2:{s:11:\"pice2135553\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice2135553\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:22:\"VULKAN - punjena ivica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"799.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:9:\"PeÄenica\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}s:11:\"pice4257380\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice4257380\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:7:\"DIAVOLA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"829.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:2:{i:0;s:8:\"Mocarela\";i:1;s:8:\"PeÄurke\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 1751.40, '60 minuta', 10, 'prihvaceno'),
(1045, '2019-10-10', '00:17:00', 43014, 'a:4:{s:14:\"rostilj5046049\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj5046049\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:20:\"Di Marco pljeskavica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"310.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:4:{i:0;s:7:\"Urnebes\";i:1;s:6:\"KeÄap\";i:2;s:5:\"Kupus\";i:3;s:7:\"Pavlaka\";}}s:14:\"deserti8484967\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti8484967\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:17:\"PalaÄinka nutela\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"145.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:2:{i:0;s:6:\"Banana\";i:1;s:6:\"Plazma\";}}s:13:\"ostalo4891934\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo4891934\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"napitci9790577\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci9790577\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:8:\"Pivo Lav\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"130.00\";s:16:\"velicina_porcije\";s:7:\"Limenka\";}}', 855.00, '60 minuta', 2, 'prihvaceno');

-- --------------------------------------------------------

--
-- Table structure for table `beograd`
--

CREATE TABLE `beograd` (
  `id` int(10) NOT NULL,
  `oblast` varchar(50) NOT NULL,
  `ogranicenje` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beograd`
--

INSERT INTO `beograd` (`id`, `oblast`, `ogranicenje`) VALUES
(1, 'Stari Grad', 900.00),
(2, 'VraÄar', 850.00),
(4, 'DorÄ‡ol', 950.00),
(6, 'Savski Venac', 850.00),
(7, 'Banjica', 600.00),
(8, 'Banovo Brdo', 850.00),
(9, 'Bele Vode', 800.00),
(10, 'BraÄ‡e JerkoviÄ‡', 750.00),
(11, 'Ä†alije', 1400.00),
(12, 'Cerak', 800.00),
(13, 'Cerak Vinogradi', 800.00),
(14, 'ÄŒukarica', 1800.00),
(15, 'Dedinje', 750.00),
(16, 'DuÅ¡anovac', 800.00),
(17, 'Filmski Grad', 800.00),
(18, 'Jajinci', 750.00),
(19, 'Kanarevo Brdo', 700.00),
(20, 'Karaburma', 1300.00),
(21, 'Konjarnik', 800.00),
(23, 'Labudovo Brdo', 850.00),
(24, 'Mali Mokri Lug', 1250.00),
(26, 'Miljakovac', 700.00),
(27, 'Mirijevo', 1350.00),
(28, 'Petlovo Brdo', 850.00),
(29, 'Rakovica', 800.00),
(30, 'Resnik', 1300.00),
(31, 'Senjak', 800.00),
(32, 'Stepa StepanoviÄ‡', 600.00),
(33, 'Vidikovac', 800.00),
(34, 'ViÅ¡njiÄka Banja', 2000.00),
(35, 'VoÅ¾dovac', 800.00),
(36, 'Å½arkovo', 800.00),
(37, 'Å½eleznik', 1800.00),
(38, 'Autokomanda', 720.00),
(39, 'ÄŒukariÄka Padina', 950.00),
(40, 'Cvetkova Pijaca', 950.00),
(41, 'Denkova BaÅ¡ta', 800.00),
(42, 'KumodraÅ¾ 2', 850.00),
(43, 'KumodraÅ¾ Selo', 950.00),
(44, 'KumodraÅ¾ Selo (posle Å¡kole u Vojvode Stepe)', 1250.00),
(45, 'MedakoviÄ‡ 1, 2 i 3', 800.00),
(46, 'Miljakovac 1 i 2', 750.00),
(47, 'Miljakovac 3', 950.00),
(48, 'Mirijevo 1', 1400.00),
(49, 'Mirijevo 2, 3 i 4', 1500.00),
(50, 'Palilula uÅ¾i deo', 950.00),
(51, 'Pinosava', 1300.00),
(52, 'Rakovica Selo', 900.00),
(53, 'RupÄine', 1200.00),
(54, 'Savamala', 900.00),
(55, 'SremÄica', 2500.00),
(56, 'UÄiteljsko naselje', 800.00),
(57, 'Veliki Mokri Lug', 1200.00),
(58, 'Zvezdara do Cvetkove Pijace', 900.00),
(59, 'Zvezdara uÅ¾i deo', 1100.00);

-- --------------------------------------------------------

--
-- Table structure for table `deserti`
--

CREATE TABLE `deserti` (
  `id` int(10) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `opis` varchar(100) DEFAULT NULL,
  `cena` decimal(6,2) DEFAULT NULL,
  `v250g` decimal(6,2) DEFAULT '0.00',
  `v300g` decimal(6,2) DEFAULT '0.00',
  `v400g` decimal(6,2) DEFAULT '0.00',
  `v500g` decimal(6,2) DEFAULT '0.00',
  `image` varchar(50) NOT NULL DEFAULT 'no_image',
  `stanje` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deserti`
--

INSERT INTO `deserti` (`id`, `naziv`, `opis`, `cena`, `v250g`, `v300g`, `v400g`, `v500g`, `image`, `stanje`) VALUES
(1, 'Kesten pire sa Å¡lagom', '', 245.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 0),
(2, 'PalaÄinka eurokrem', '2 komada', 125.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 1),
(3, 'PalaÄinka marmelada kajsija', '2 komada', 115.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 1),
(5, 'PalaÄinka meÅ¡ana marmelada', '2 komada', 115.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 1),
(6, 'PalaÄinka nutela', '2 komada', 145.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 1),
(7, 'VoÄ‡na salata', 'Jabuka, kruÅ¡ka, banana, pomorandÅ¾a, kivi, Å¡lag', 0.00, 267.00, 0.00, 376.00, 0.00, 'no_image', 1),
(8, 'Å½ito sa Å¡lagom i orasima', 'Muskatni orah po Å¾elji', 0.00, 0.00, 267.00, 0.00, 367.00, 'no_image', 0),
(9, 'Tulumbe', '2 komada', 200.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 0),
(10, 'Baklave', '2 komada', 200.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dodaci28`
--

CREATE TABLE `dodaci28` (
  `id` int(10) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` decimal(6,2) NOT NULL,
  `stanje` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dodaci28`
--

INSERT INTO `dodaci28` (`id`, `naziv`, `cena`, `stanje`) VALUES
(1, 'Ajvar', 17.00, 1),
(3, 'Feferoni', 17.00, 1),
(4, 'Gorgonzola', 37.00, 1),
(5, 'Jaje', 23.00, 1),
(6, 'KaÄkavalj', 57.00, 1),
(7, 'Kajmak', 27.00, 1),
(8, 'KeÄap', 17.00, 1),
(10, 'Majonez', 17.00, 1),
(11, 'Masline', 17.00, 1),
(12, 'Mocarela', 37.00, 1),
(13, 'Kulen', 37.00, 1),
(14, 'Morski plodovi', 57.00, 1),
(15, 'NjeguÅ¡ki prÅ¡ut', 77.00, 1),
(16, 'Paradajz', 27.00, 0),
(17, 'Pavlaka', 23.00, 1),
(18, 'PeÄenica', 37.00, 1),
(19, 'PeÄurke', 27.00, 1),
(20, 'Piletina', 37.00, 1),
(21, 'Punjena ivica', 80.00, 1),
(22, 'Å unka', 37.00, 1),
(23, 'Susam', 17.00, 1),
(24, 'Suvi vrat', 37.00, 1),
(25, 'Tabasko', 23.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dodaci32`
--

CREATE TABLE `dodaci32` (
  `id` int(10) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` decimal(6,2) NOT NULL,
  `stanje` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dodaci32`
--

INSERT INTO `dodaci32` (`id`, `naziv`, `cena`, `stanje`) VALUES
(1, 'Ajvar', 27.00, 1),
(2, 'Dva jajeta', 43.00, 1),
(3, 'Feferoni', 27.00, 1),
(4, 'Gorgonzola', 67.00, 1),
(5, 'Jaje', 23.00, 1),
(6, 'KaÄkavalj', 77.00, 1),
(7, 'Kajmak', 47.00, 1),
(8, 'KeÄap', 27.00, 1),
(10, 'Majonez', 27.00, 1),
(11, 'Masline', 27.00, 1),
(12, 'Mocarela', 57.00, 1),
(13, 'Kulen', 57.00, 1),
(14, 'Morski plodovi', 77.00, 1),
(15, 'NjeguÅ¡ki prÅ¡ut', 107.00, 1),
(16, 'Paradajz', 37.00, 0),
(17, 'Pavlaka', 33.00, 1),
(18, 'PeÄenica', 57.00, 1),
(19, 'PeÄurke', 37.00, 1),
(20, 'Piletina', 57.00, 1),
(21, 'Punjena ivica', 100.00, 1),
(22, 'Å unka', 57.00, 1),
(23, 'Susam', 27.00, 1),
(24, 'Suvi vrat', 57.00, 1),
(25, 'Tabasko', 33.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dodaci42`
--

CREATE TABLE `dodaci42` (
  `id` int(10) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` decimal(6,2) NOT NULL,
  `stanje` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dodaci42`
--

INSERT INTO `dodaci42` (`id`, `naziv`, `cena`, `stanje`) VALUES
(1, 'Ajvar', 47.00, 1),
(2, 'Dva jajeta', 43.00, 1),
(3, 'Feferoni', 41.00, 1),
(4, 'Gorgonzola', 97.00, 1),
(5, 'Jaje', 23.00, 1),
(6, 'KaÄkavalj', 110.00, 1),
(7, 'Kajmak', 67.00, 1),
(8, 'KeÄap', 47.00, 1),
(10, 'Majonez', 47.00, 1),
(11, 'Masline', 41.00, 1),
(12, 'Mocarela', 87.00, 1),
(13, 'Kulen', 87.00, 1),
(14, 'Morski plodovi', 157.00, 1),
(15, 'NjeguÅ¡ki prÅ¡ut', 157.00, 1),
(16, 'Paradajz', 57.00, 0),
(17, 'Pavlaka', 53.00, 1),
(18, 'PeÄenica', 87.00, 1),
(19, 'PeÄurke', 57.00, 1),
(20, 'Piletina', 127.00, 1),
(21, 'Punjena ivica', 130.00, 1),
(22, 'Å unka', 87.00, 1),
(23, 'Susam', 43.00, 1),
(24, 'Suvi vrat', 87.00, 1),
(25, 'Tabasko', 47.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dodaci50`
--

CREATE TABLE `dodaci50` (
  `id` int(10) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` decimal(6,2) NOT NULL,
  `stanje` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dodaci50`
--

INSERT INTO `dodaci50` (`id`, `naziv`, `cena`, `stanje`) VALUES
(1, 'Ajvar', 57.00, 1),
(2, 'Dva jajeta', 43.00, 1),
(3, 'Feferoni', 57.00, 1),
(4, 'Gorgonzola', 117.00, 1),
(5, 'Tri jajeta', 65.00, 1),
(6, 'KaÄkavalj', 137.00, 1),
(7, 'Kajmak', 87.00, 1),
(8, 'KeÄap', 57.00, 1),
(10, 'Majonez', 67.00, 1),
(11, 'Masline', 57.00, 1),
(12, 'Mocarela', 107.00, 1),
(13, 'Kulen', 97.00, 1),
(14, 'Morski plodovi', 197.00, 1),
(15, 'NjeguÅ¡ki prÅ¡ut', 217.00, 1),
(16, 'Paradajz', 77.00, 0),
(17, 'Pavlaka', 67.00, 1),
(18, 'PeÄenica', 107.00, 1),
(19, 'PeÄurke', 77.00, 1),
(20, 'Piletina', 147.00, 1),
(21, 'Punjena ivica', 170.00, 1),
(22, 'Å unka', 97.00, 1),
(23, 'Susam', 63.00, 1),
(24, 'Suvi vrat', 107.00, 1),
(25, 'Tabasko', 63.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dodaci_za_palacinke`
--

CREATE TABLE `dodaci_za_palacinke` (
  `id` int(10) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` decimal(6,2) NOT NULL,
  `stanje` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dodaci_za_palacinke`
--

INSERT INTO `dodaci_za_palacinke` (`id`, `naziv`, `cena`, `stanje`) VALUES
(1, 'Banana', 30.00, 1),
(2, 'Kikiriki', 30.00, 1),
(3, 'Kokos', 30.00, 1),
(4, 'Orasi', 30.00, 1),
(5, 'Plazma', 30.00, 1),
(6, 'Å lag', 30.00, 1),
(7, 'ViÅ¡nja', 30.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dodaci_za_paste`
--

CREATE TABLE `dodaci_za_paste` (
  `id` int(10) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` decimal(6,2) NOT NULL,
  `stanje` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dodaci_za_paste`
--

INSERT INTO `dodaci_za_paste` (`id`, `naziv`, `cena`, `stanje`) VALUES
(1, 'Ajvar', 27.00, 1),
(3, 'Jaje', 23.00, 1),
(4, 'KaÄkavalj', 47.00, 1),
(5, 'Kajmak', 37.00, 1),
(6, 'KeÄap', 23.00, 1),
(7, 'Kulen', 47.00, 1),
(8, 'Majonez', 27.00, 1),
(9, 'Masline', 23.00, 1),
(10, 'Morski plodovi', 67.00, 1),
(11, 'NjeguÅ¡ki prÅ¡ut', 87.00, 1),
(12, 'Paradajz', 37.00, 0),
(13, 'Pavlaka', 27.00, 1),
(14, 'PeÄenica', 67.00, 1),
(15, 'PeÄurke', 37.00, 1),
(16, 'Å unka', 47.00, 1),
(17, 'Susam', 27.00, 1),
(18, 'Suvi vrat', 47.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dodaci_za_sendvice`
--

CREATE TABLE `dodaci_za_sendvice` (
  `id` int(10) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` decimal(6,2) DEFAULT NULL,
  `posno` varchar(10) DEFAULT NULL,
  `stanje` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dodaci_za_sendvice`
--

INSERT INTO `dodaci_za_sendvice` (`id`, `naziv`, `cena`, `posno`, `stanje`) VALUES
(1, 'Ajvar', 20.00, 'Posno', 1),
(2, 'Beli luk', 0.00, NULL, 1),
(3, 'Crni biber', 0.00, NULL, 1),
(4, 'Ekstra kaÄkavalj', 50.00, NULL, 1),
(5, 'Feferoni', 15.00, 'Posno', 1),
(6, 'Gorgonzola', 60.00, NULL, 1),
(7, 'Kajmak', 25.00, NULL, 1),
(8, 'KeÄap', 20.00, 'Posno', 1),
(9, 'Kulen', 65.00, NULL, 1),
(10, 'Ljuti keÄap', 20.00, 'Posno', 1),
(11, 'Majonez', 20.00, 'Posno', 1),
(12, 'Margarin', 20.00, 'Posno', 0),
(13, 'NjeguÅ¡ki prÅ¡ut', 80.00, NULL, 1),
(14, 'Origano', 0.00, NULL, 1),
(15, 'PanÄeta', 50.00, NULL, 1),
(16, 'Pavlaka', 20.00, NULL, 1),
(17, 'PeÄenica', 50.00, NULL, 1),
(18, 'Å unka', 40.00, NULL, 1),
(19, 'Suvi vrat', 50.00, NULL, 1),
(20, 'Tabasko', 20.00, 'Posno', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE `galerija` (
  `id` int(10) NOT NULL,
  `naziv` text NOT NULL,
  `velicina` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`id`, `naziv`, `velicina`) VALUES
(2, 'di_marko.jpg', 452990),
(4, 'montenegro.jpg', 489241),
(5, 'quattro_stagioni.jpg', 498672),
(6, 'vojvodjanska.jpg', 619099);

-- --------------------------------------------------------

--
-- Table structure for table `knjiga_utisaka`
--

CREATE TABLE `knjiga_utisaka` (
  `id` int(10) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `datum` date NOT NULL,
  `tekst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `knjiga_utisaka`
--

INSERT INTO `knjiga_utisaka` (`id`, `ime`, `datum`, `tekst`) VALUES
(4, 'Vlada', '2016-03-15', 'Svaka cast! \r\nBrza isporuka i kvalitetna hrana!\r\nSamo tako nastavite.\r\n'),
(5, 'Milijana', '2016-04-15', 'Inovativni,kvalitetni,ljubazni,brzi. Svaka cast.'),
(6, 'Aleksandar', '2016-06-16', 'Hrana je dobra, pice su im izvrsne, a ovo je jedina picerija u Beogradu gde se Quattro Formaggi pica pravi kako treba - svaka vrsta sira je izdvojena.'),
(7, 'gladan', '2016-07-24', 'vrh vrh vrh,sveze ukusno predobro, za svaku pohvalu'),
(407, 'Kimi', '2016-10-10', 'Prosto nema ukusnije hrane u Bg-u,brza dostava,veoma ljubazni,sve pohvale,stvarno ste najbolji!'),
(408, 'nemanja', '2016-11-27', 'Di Marco pizza, odlicna, stigla vruca, svaka cast!');

-- --------------------------------------------------------

--
-- Table structure for table `napitci`
--

CREATE TABLE `napitci` (
  `id` int(10) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `limenka` decimal(6,2) DEFAULT NULL,
  `v0_5l` decimal(6,2) DEFAULT NULL,
  `v1l` decimal(6,2) DEFAULT NULL,
  `v1_5l` decimal(6,2) DEFAULT NULL,
  `v2l` decimal(6,2) DEFAULT NULL,
  `stanje` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `napitci`
--

INSERT INTO `napitci` (`id`, `naziv`, `limenka`, `v0_5l`, `v1l`, `v1_5l`, `v2l`, `stanje`) VALUES
(1, 'Coca Cola', 90.00, 100.00, 140.00, 0.00, 180.00, 1),
(2, 'Fanta', 90.00, 100.00, 0.00, 0.00, 180.00, 1),
(3, 'Sprite', 90.00, 100.00, 0.00, 0.00, 0.00, 1),
(4, 'Guarana', 110.00, 0.00, 0.00, 0.00, 0.00, 1),
(5, 'Nektar sok', 0.00, 0.00, 150.00, 0.00, 0.00, 0),
(6, 'Knjaz MiloÅ¡', 0.00, 60.00, 0.00, 80.00, 0.00, 1),
(7, 'Rosa', 0.00, 60.00, 0.00, 80.00, 0.00, 1),
(8, 'Pivo Jelen', 130.00, 0.00, 0.00, 0.00, 0.00, 1),
(9, 'Pivo Lav', 130.00, 0.00, 0.00, 0.00, 0.00, 1),
(10, 'Pivo NikÅ¡iÄ‡ko', 130.00, 0.00, 0.00, 0.00, 0.00, 1),
(11, 'Pivo Tuborg', 145.00, 0.00, 0.00, 0.00, 0.00, 1),
(12, 'Pivo Becks', 145.00, 0.00, NULL, NULL, NULL, 0),
(13, 'ZajeÄarsko pivo', 130.00, 0.00, 0.00, 0.00, 0.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `novi_beograd`
--

CREATE TABLE `novi_beograd` (
  `id` int(10) NOT NULL,
  `oblast` varchar(100) NOT NULL,
  `ogranicenje` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `novi_beograd`
--

INSERT INTO `novi_beograd` (`id`, `oblast`, `ogranicenje`) VALUES
(2, 'Arena', 900.00),
(3, 'Belville', 1150.00),
(6, 'Blokovi (Blok 61, 62 i 72)', 1200.00),
(7, 'Dunavski Kej (Blok 12, 26, 27, 30 i delovi bloka 10)', 1250.00),
(12, 'Paviljoni - Stari Merkator (Blok 7, 7a, 9a, 11a, 11b, 11c i delovi bloka 6)', 1150.00),
(15, 'Stari Aerodrom (Blok 37, 38, 39 i delovi blokova 40, 41a i 49)', 1150.00),
(19, 'BeÅ¾anija (57, delovi bloka 60, 49 i zona A)', 1600.00),
(20, 'Fontana (blok 1, 31, 32 i 33)', 1150.00),
(21, 'Gazela (blok 18, 19, 23, 24, 42 i 43)', 800.00),
(22, 'Mladost (blok 63, 64, 65 i delovi bloka 40)', 1200.00),
(23, 'Pariske Komune (blok 2, 5, 8 i 8a)', 1150.00),
(24, 'Sava (blok 44, 45 i 71)', 1200.00),
(25, 'Savski Kej (blok 58, 66, 66a, 67, 67a, 68, 69, 70,', 1150.00),
(26, 'Staro SajmiÅ¡te (blok 17, 18, 19 i 20)', 900.00),
(27, 'Studentski Grad (blok 3, 4, 6, 34 i 35)', 1250.00),
(28, 'Autoput Novi Sad', 1750.00),
(29, 'Akademija (blok 25, 28, 29 i delovi bloka 41)', 1100.00),
(32, 'BeÅ¾anijska Kosa (blok 51, 52, 53, 54, 55, 59 i delovi bloka 60 i 49)', 1550.00),
(33, 'Sava Centar', 800.00),
(34, 'UÅ¡Ä‡e (Blok 13, 14, 15, 16, 21 i 22)', 850.00);

-- --------------------------------------------------------

--
-- Table structure for table `ostalo`
--

CREATE TABLE `ostalo` (
  `id` int(10) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `opis` varchar(100) NOT NULL,
  `cena` decimal(6,2) DEFAULT NULL,
  `v200g` decimal(6,2) DEFAULT '0.00',
  `v350g` decimal(6,2) DEFAULT '0.00',
  `v400g` decimal(6,2) DEFAULT '0.00',
  `v550g` decimal(6,2) DEFAULT '0.00',
  `v600g` decimal(6,2) DEFAULT '0.00',
  `v1000g` decimal(6,2) DEFAULT '0.00',
  `image` varchar(50) NOT NULL DEFAULT 'no_image',
  `stanje` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ostalo`
--

INSERT INTO `ostalo` (`id`, `naziv`, `opis`, `cena`, `v200g`, `v350g`, `v400g`, `v550g`, `v600g`, `v1000g`, `image`, `stanje`) VALUES
(1, 'Italijanske piroÅ¡ke', 'Pelat, kaÄkavalj, Å¡unka, peÄurke, pavlaka, masline, origano', 659.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 1),
(2, 'Italijanski Ä‘evrek', 'Pavlaka, Å¡unka, kaÄkavalj, kulen, peÄurke, susam, origano', 0.00, 0.00, 0.00, 0.00, 586.00, 0.00, 896.00, 'no_image', 1),
(3, 'Chicken fingers', 'PileÄ‡i Å¡tapiÄ‡i u susamu, lepinja, tarator salata, pomfrit', 577.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 1),
(4, 'Lazanje Bolognese', 'Bolognese sos, kaÄkavalj, Å¡unka, pavlaka, origano', 0.00, 0.00, 0.00, 477.00, 0.00, 687.00, 0.00, 'no_image', 1),
(5, 'Piletina u sosu', 'File, lepinja, pomfrit, sos po izboru', 686.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 1),
(6, 'Pohovani kaÄkavalj', 'Tartar sos, lepinja', 0.00, 373.00, 526.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 1),
(7, 'Pomfrit', '150 grama', 180.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 1),
(8, 'Slane zapeÄene palaÄinke', '2 komada<br /><br />KaÄkavalj, nadev i namaz', 319.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 1),
(9, 'Å tapiÄ‡i ribe', 'Lepinja, tartar sos, pomfrit, posno', 479.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'no_image', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paste`
--

CREATE TABLE `paste` (
  `id` int(10) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `opis` varchar(100) NOT NULL,
  `cena` decimal(6,2) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'no_image',
  `stanje` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paste`
--

INSERT INTO `paste` (`id`, `naziv`, `opis`, `cena`, `image`, `stanje`) VALUES
(1, 'Pasta Bolognese', 'Bolognese sos, parmezan, zaÄini', 549.00, 'no_image', 1),
(2, 'Pasta Frutti di mare', 'Plodovi mora, belo vino,  zaÄini, sos po Å¾elji', 549.00, 'no_image', 1),
(3, 'Pasta Fungi', 'PeÄurke, neutralna pavlaka, zaÄini', 549.00, 'no_image', 1),
(4, 'Pasta Gorgonzola', 'Gorgonzola, neutralna pavlaka, zaÄini', 549.00, 'no_image', 1),
(5, 'Pasta Carbonare', 'Å½umance, neutralna pavlaka, panÄeta, zaÄini', 549.00, 'no_image', 1),
(6, 'PileÄ‡a pasta', 'PeÄurke, piletina, neutralna pavlaka, zaÄini', 549.00, 'no_image', 1),
(7, 'Pasta Milanese', 'Pelat, Å¡unka, zaÄini', 549.00, 'no_image', 1),
(8, 'NjeguÅ¡ka pasta', 'PrÅ¡uta, piletina, peÄurke, neutralna pavlaka, zaÄini', 589.00, 'no_image', 1),
(9, 'QUATRO FORMAGI pasta', 'Neutralna pavlaka, gorgonzola, ementaler, kaÄkavalj, parmezan, zaÄini', 579.00, 'no_image', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pica_sendvic`
--

CREATE TABLE `pica_sendvic` (
  `id` int(10) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `opis` varchar(100) NOT NULL,
  `cena` decimal(6,2) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'no_image',
  `stanje` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pica_sendvic`
--

INSERT INTO `pica_sendvic` (`id`, `naziv`, `opis`, `cena`, `image`, `stanje`) VALUES
(1, 'Pica sendviÄ kulen', 'KaÄkavalj, keÄap, pavlaka, susam, kulen', 343.00, 'no_image', 1),
(2, 'Pica sendviÄ peÄenica', 'KaÄkavalj, keÄap, pavlaka, susam, peÄenica', 343.00, 'no_image', 1),
(3, 'Pica sendviÄ Å¡unka', 'KaÄkavalj, keÄap, pavlaka, susam, Å¡unka', 275.00, 'no_image', 1),
(4, 'Pica sendviÄ suvi vrat', 'KaÄkavalj, keÄap, pavlaka, susam, suvi vrat', 343.00, 'no_image', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pice`
--

CREATE TABLE `pice` (
  `id` int(10) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `opis` varchar(200) NOT NULL,
  `v28cm` decimal(6,2) DEFAULT NULL,
  `v32cm` decimal(6,2) DEFAULT NULL,
  `v42cm` decimal(6,2) DEFAULT NULL,
  `v50cm` decimal(6,2) DEFAULT NULL,
  `posno` varchar(20) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `stanje` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pice`
--

INSERT INTO `pice` (`id`, `naziv`, `opis`, `v28cm`, `v32cm`, `v42cm`, `v50cm`, `posno`, `image`, `stanje`) VALUES
(1, 'CALZONE - zatvorena', 'Pelat, kaÄkavalj, Å¡unka, peÄurke, origano', 407.00, 557.00, 756.00, 997.00, NULL, NULL, 1),
(2, 'CAPRICCIOSA', 'Pelat, kaÄkavalj, Å¡unka, peÄurke, masline, origano', 407.00, 557.00, 756.00, 997.00, NULL, 'capricoza', 1),
(3, 'NAPOLITANA', 'Pelat, kaÄkavalj, kulen, feferone, masline, origano', 403.00, 545.00, 731.00, 964.00, NULL, NULL, 1),
(4, 'POSNA pica', 'Pelat, posni kaÄkavalj, tunjevina, peÄurke, povrÄ‡e, masline, origano', 394.00, 528.00, 719.00, 896.00, 'Da', NULL, 1),
(5, 'QUATTRO FORMAGGI', 'Pelat, kaÄkavalj, mocarela, gorgonzola, emetaler, parmezan, masline, origano', 437.00, 629.00, 867.00, 1159.00, NULL, NULL, 1),
(6, 'SPECIALE', 'Pelat, kaÄkavalj, Å¡unka, kulen, peÄurke, jaja, feferone, masline, origano', 461.00, 623.00, 851.00, 1165.00, NULL, NULL, 1),
(7, 'SRPSKA pica', 'Pelat, kaÄkavalj, kulen, panÄeta, suvi vrat, jaja, kajmak, ajvar, feferone, masline, origano', 479.00, 639.00, 878.00, 1187.00, NULL, NULL, 1),
(8, 'SUSAM pica', 'Pavlaka, kaÄkavalj, Å¡unka, suvi vrat, susam, masline, origano', 439.00, 591.00, 806.00, 1049.00, NULL, NULL, 1),
(9, 'VESUVIO', 'Pelat, kaÄkavalj, Å¡unka, masline, origano', 369.00, 513.00, 671.00, 877.00, NULL, NULL, 1),
(10, 'VULKAN - punjena ivica', 'Pelat, kaÄkavalj, Å¡unka, peÄurke, pavlaka, masline, origano', 426.00, 586.00, 799.00, 1047.00, NULL, NULL, 1),
(11, 'DIAVOLA', 'Pelat, kaÄkavalj, Å¡unka, panÄeta, kulen, tabasko, masline, origano', 444.00, 607.00, 829.00, 1081.00, NULL, 'diavola', 1),
(12, 'FRUTTI DI MARE', 'Pelat, plodovi mora, masline, biljni kaÄkavalj / kaÄkavalj, origano', 477.00, 627.00, 854.00, 1174.00, 'Da', NULL, 1),
(13, 'FUNGHI', 'Pelat, peÄurke, masline, biljni kaÄkavalj / kaÄkavalj, origano', 367.00, 508.00, 663.00, 861.00, 'Da', NULL, 1),
(14, 'MARGHERITA', 'Pelat, parmezan, masline, biljni kaÄkavalj / kaÄkavalj, origano', 327.00, 457.00, 629.00, 824.00, 'Da', NULL, 1),
(15, 'DI MARCO pica', 'Pelat, kaÄkavalj, peÄurke, Å¡unka, panÄeta, kulen, suvi vrat, pecenica, jaja, kajmak, ajvar, feferone', 488.00, 655.00, 887.00, 1199.00, NULL, 'di_marko', 1),
(16, 'PRÅ UTA pica', 'Pelat, kaÄkavalj, peÄurke, prÅ¡uta, masline, paradajz, origano', 489.00, 665.00, 915.00, 1115.00, NULL, 'montenegro', 1),
(17, 'QUATTRO STAGGIONI', 'Pelat, kaÄkavalj, Å¡unka, peÄurke, jaja, kulen, masline, origano', 444.00, 607.00, 829.00, 1081.00, NULL, 'quattro_stagioni', 1),
(22, 'SICILLIANA', 'Pelat, kaÄkavalj, Å¡unka, jaja, masline, origano', 382.00, 522.00, 704.00, 888.00, NULL, NULL, 1),
(19, 'VEGETARIANA', 'Pelat, peÄurke, povrÄ‡e, masline, biljni kaÄkavalj / kaÄkavalj, origano', 391.00, 526.00, 709.00, 891.00, 'Da', NULL, 1),
(23, 'GALIA', 'Pelat, kaÄkavalj, Å¡unka, peÄurke, jaja, masline, origano', 421.00, 568.00, 777.00, 1019.00, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `porudzbine`
--

CREATE TABLE `porudzbine` (
  `id` int(10) NOT NULL,
  `datum` date NOT NULL,
  `vreme` time NOT NULL,
  `korisnik` int(10) NOT NULL,
  `porudzbina` text NOT NULL,
  `cena` decimal(7,2) NOT NULL,
  `potvrda` int(2) NOT NULL DEFAULT '0',
  `vreme_dostave` varchar(20) DEFAULT NULL,
  `broj_narucivanja_korisnika` int(20) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'prihvaceno'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `porudzbine`
--

INSERT INTO `porudzbine` (`id`, `datum`, `vreme`, `korisnik`, `porudzbina`, `cena`, `potvrda`, `vreme_dostave`, `broj_narucivanja_korisnika`, `status`) VALUES
(1090, '2019-12-21', '16:55:00', 43036, 'a:5:{s:11:\"pice2376398\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice2376398\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"SUSAM pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:7:\"1049.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}s:13:\"ostalo3535308\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo3535308\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"2\";s:4:\"cena\";s:6:\"180.00\";}s:14:\"deserti8680466\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti8680466\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:5:\"Kokos\";}}s:14:\"deserti3548330\";a:7:{s:12:\"id_proizvoda\";s:14:\"deserti3548330\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:19:\"PalaÄinka eurokrem\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"125.00\";s:13:\"tabela_dodaci\";s:19:\"dodaci_za_palacinke\";s:16:\"palacinka_dodaci\";a:1:{i:0;s:6:\"Plazma\";}}s:14:\"napitci4004346\";a:6:{s:12:\"id_proizvoda\";s:14:\"napitci4004346\";s:15:\"vrsta_proizvoda\";s:7:\"napitci\";s:5:\"naziv\";s:9:\"Coca Cola\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";s:16:\"velicina_porcije\";s:2:\"2l\";}}', 1709.10, 1, '60 minuta', 13, 'prihvaceno'),
(1091, '2019-12-23', '23:31:00', 43006, 'a:1:{s:11:\"pice2233838\";a:8:{s:12:\"id_proizvoda\";s:11:\"pice2233838\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:13:\"DI MARCO pica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"887.00\";s:13:\"velicina_pice\";s:2:\"42\";s:11:\"pica_dodaci\";a:1:{i:0;s:5:\"Susam\";}s:13:\"tabela_dodaci\";s:8:\"dodaci42\";}}', 930.00, 1, '60 minuta', 35, 'prihvaceno'),
(1092, '2019-12-25', '19:45:00', 43039, 'a:1:{s:11:\"pice3343731\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice3343731\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:11:\"CAPRICCIOSA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"997.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 997.00, 1, '60 minuta', 3, 'prihvaceno'),
(1093, '2019-12-25', '23:51:00', 43056, 'a:7:{s:13:\"ostalo8108088\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo8108088\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:14:\"Å tapiÄ‡i ribe\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"479.00\";}s:11:\"pice4531272\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice4531272\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:10:\"MARGHERITA\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"327.00\";s:13:\"velicina_pice\";s:2:\"28\";s:13:\"tabela_dodaci\";s:8:\"dodaci28\";}s:15:\"sendvici6166291\";a:7:{s:12:\"id_proizvoda\";s:15:\"sendvici6166291\";s:15:\"vrsta_proizvoda\";s:8:\"sendvici\";s:5:\"naziv\";s:17:\"DI MARCO sendviÄ\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"315.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";s:15:\"namazi_sendvica\";s:7:\"Pavlaka\";}s:13:\"salate7067004\";a:5:{s:12:\"id_proizvoda\";s:13:\"salate7067004\";s:15:\"vrsta_proizvoda\";s:6:\"salate\";s:5:\"naziv\";s:13:\"GRÄŒKA salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"261.00\";}s:13:\"ostalo5368282\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo5368282\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:7:\"Pomfrit\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"180.00\";}s:20:\"pica_sendvici6852653\";a:6:{s:12:\"id_proizvoda\";s:20:\"pica_sendvici6852653\";s:15:\"vrsta_proizvoda\";s:13:\"pica_sendvici\";s:5:\"naziv\";s:23:\"Pica sendviÄ peÄenica\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"343.00\";s:13:\"tabela_dodaci\";s:18:\"dodaci_za_sendvice\";}s:14:\"rostilj5060731\";a:7:{s:12:\"id_proizvoda\";s:14:\"rostilj5060731\";s:15:\"vrsta_proizvoda\";s:7:\"rostilj\";s:5:\"naziv\";s:17:\"Pljeskavica 250 g\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"280.00\";s:13:\"tabela_dodaci\";s:15:\"rostilj_prilozi\";s:15:\"rostilj_prilozi\";a:3:{i:0;s:7:\"Urnebes\";i:1;s:7:\"Majonez\";i:2;s:7:\"Pavlaka\";}}}', 2002.50, 1, '70 minuta', 2, 'prihvaceno'),
(1094, '2019-12-27', '15:21:00', 43033, 'a:2:{s:13:\"ostalo2813037\";a:5:{s:12:\"id_proizvoda\";s:13:\"ostalo2813037\";s:15:\"vrsta_proizvoda\";s:6:\"ostalo\";s:5:\"naziv\";s:14:\"Å tapiÄ‡i ribe\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"479.00\";}s:14:\"deserti3384384\";a:6:{s:12:\"id_proizvoda\";s:14:\"deserti3384384\";s:15:\"vrsta_proizvoda\";s:7:\"deserti\";s:5:\"naziv\";s:13:\"VoÄ‡na salata\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"376.00\";s:16:\"velicina_porcije\";s:9:\"400 grama\";}}', 855.00, 1, '60 minuta', 8, 'prihvaceno'),
(1095, '2019-12-27', '15:42:00', 43058, 'a:1:{s:11:\"pice7265529\";a:7:{s:12:\"id_proizvoda\";s:11:\"pice7265529\";s:15:\"vrsta_proizvoda\";s:4:\"pice\";s:5:\"naziv\";s:19:\"CALZONE - zatvorena\";s:8:\"kolicina\";s:1:\"1\";s:4:\"cena\";s:6:\"997.00\";s:13:\"velicina_pice\";s:2:\"50\";s:13:\"tabela_dodaci\";s:8:\"dodaci50\";}}', 997.00, 1, '60 minuta', 1, 'prihvaceno');

-- --------------------------------------------------------

--
-- Table structure for table `radno_vreme`
--

CREATE TABLE `radno_vreme` (
  `id` int(10) NOT NULL,
  `radno_vreme` varchar(20) NOT NULL DEFAULT 'otvoreno'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `radno_vreme`
--

INSERT INTO `radno_vreme` (`id`, `radno_vreme`) VALUES
(1, 'otvoreno');

-- --------------------------------------------------------

--
-- Table structure for table `rostilj`
--

CREATE TABLE `rostilj` (
  `id` int(10) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `opis` varchar(100) DEFAULT NULL,
  `cena` decimal(6,2) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'no_image',
  `stanje` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rostilj`
--

INSERT INTO `rostilj` (`id`, `naziv`, `opis`, `cena`, `image`, `stanje`) VALUES
(1, 'Pljeskavica 125 g', '125 grama', 160.00, 'no_image', 1),
(2, 'Pljeskavica 250 g', '250 grama', 280.00, 'no_image', 1),
(3, 'Di Marco pljeskavica', 'Punjena (kaÄkavalj, panÄeta, luk)', 310.00, 'no_image', 1),
(4, 'RoÅ¡tilj kobasica', '', 270.00, 'no_image', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rostilj_prilozi`
--

CREATE TABLE `rostilj_prilozi` (
  `id` int(10) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` decimal(6,2) DEFAULT NULL,
  `stanje` int(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rostilj_prilozi`
--

INSERT INTO `rostilj_prilozi` (`id`, `naziv`, `cena`, `stanje`) VALUES
(1, 'Urnebes', 30.00, 1),
(2, 'Kupus', 0.00, 1),
(3, 'Crni luk', 0.00, 1),
(4, 'Paradajz', 20.00, 0),
(5, 'KeÄap', 0.00, 1),
(6, 'Tucana paprika', 0.00, 1),
(7, 'Krastavac', 20.00, 0),
(8, 'Senf', 0.00, 1),
(9, 'Pavlaka', 0.00, 1),
(10, 'Majonez', 10.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `salate`
--

CREATE TABLE `salate` (
  `id` int(10) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `opis` varchar(100) NOT NULL,
  `cena` decimal(6,2) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'no_image',
  `stanje` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salate`
--

INSERT INTO `salate` (`id`, `naziv`, `opis`, `cena`, `image`, `stanje`) VALUES
(1, 'CEZAR salata', 'Ajsberg, slanina, piletina, krutoni, dresing, parmezan', 357.00, 'no_image', 1),
(2, 'FRANCUSKA salata', 'Å unka, jaja, pavlaka, majonez, kiseli krastavci', 275.00, 'no_image', 1),
(3, 'GRÄŒKA salata', 'Paradajz, paprika, krastavac, luk, sir, masline', 261.00, 'no_image', 1),
(5, 'RUSKA salata', 'PovrÄ‡e, majonez, Å¡unka, kiseli krastavac, jaje', 275.00, 'no_image', 1),
(6, 'Å OPSKA salata', 'Paradajz, paprika, krastavac, luk, sir', 257.00, 'no_image', 1),
(7, 'SRPSKA salata', 'Paradajz, paprika, krastavac, luk', 223.00, 'no_image', 1),
(8, 'PileÄ‡a salata', 'PileÄ‡e belo meso, jaja, pavlaka, zelena salata, biber', 289.00, 'no_image', 1),
(9, 'POSNA salata', 'Posne makarone, posni majonez, kukuruz, tunjevina, kiseli krastavci, so, senf', 273.00, 'no_image', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sendvici`
--

CREATE TABLE `sendvici` (
  `id` int(10) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `opis` varchar(100) NOT NULL,
  `cena` decimal(6,2) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'no_image',
  `stanje` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sendvici`
--

INSERT INTO `sendvici` (`id`, `naziv`, `opis`, `cena`, `image`, `stanje`) VALUES
(1, 'SendviÄ - lepinja', 'Namaz, nadev po izboru: Å¡unka, kulen, suvi vrat, peÄenica', 245.00, 'no_image', 1),
(2, 'DI MARCO sendviÄ', 'KaÄkavalj, Å¡unka, suvi vrat, kulen, salata, namaz', 315.00, 'no_image', 1),
(3, 'Posni sendviÄ', 'Posni kaÄkavalj, tunjevina, peÄurke, salata, namaz', 255.00, 'no_image', 1),
(4, 'Srpski sendviÄ', 'kaÄkavalj, kulen, peÄenica, feferone, salata, namaz', 305.00, 'no_image', 1),
(5, 'Classic sendviÄ', 'KaÄkavalj, nadev, salata, namaz', 245.00, 'no_image', 1),
(6, 'PrÅ¡ut sendviÄ', 'NjeguÅ¡ki prÅ¡ut, kajmak, jaje, paradajz', 315.00, 'no_image', 1),
(7, 'SendviÄ ', 'Namaz, nadev po izboru: Å¡unka, kulen, suvi vrat, peÄenica', 245.00, 'no_image', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lozinka` varchar(50) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `brojnarucivanja` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `lozinka`, `ime`, `prezime`, `brojnarucivanja`) VALUES
(31, 'yt5ytt@gmail.com', '16032012', 'Aleksandar', 'Å afranec', 35),
(38, 'dragana.mijailovic4@gmail.com', 'minjica', 'Dragana', 'MijailoviÄ‡', 46),
(39, 'mili_brend@yahoo.com', 'karelijaultima', 'Milijana', 'DILPARIC', 4),
(40, 'metalmorgoth@gmail.com', 'DeepRoots1', 'Marko', 'GajiÄ‡ ', 1),
(41, 'jankoratkovic@yahoo.com', 'dimarcopizza', 'Janko', 'Ratkovic', 0),
(42, 'dalibor2602@gmail.com', 'babazivka', 'Dalibor', 'Ezio-Vasic', 38),
(43, 'mihailos@sting.rs', 'loki14', 'Mihailo', 'StaniÄ‡', 1),
(44, 'aleksandar.ciric@revelsystems.com', 'Ackoacko,2803', 'Aleksandar', 'Ciric', 2),
(45, 'filip.acm@hotmail.com', 'Mementomori1992', 'Filip', 'Djokovic', 1),
(46, 'desperado01988@gmail.com', 'Acko,2803', 'Aleksandar', 'Ciric', 95),
(47, 'vpredolac@aol.com', 'Vlajke86', 'Vladimir', 'Predolac', 1),
(48, 'petarstone88@gmail.com', 'pera', 'Petar', 'Miljkovic', 4),
(49, 'prskiman@gmail.com', 'mcbranja34', 'Darko', 'Prskalo', 1),
(50, 'markopajovetmic@gmail.com', 'markopajo25', 'Marko', 'VetmiÄ‡', 1),
(51, 'vladica.rassa@gmail.com', 'rassa968', 'Ja', 'Rassa', 7),
(52, 'marko.zekovic@merasws.rs', 'marantz123', 'Marko', 'Zekovic', 1),
(53, 'mocnidabar@gmail.com', '1tnvdNMFDKqJVspjFSdm', 'Nikola', 'Pasic', 3),
(54, 'daxeeman@gmail.com', 'daxruled!', 'Damjan', 'SibinoviÄ‡ ', 1),
(55, 'bigstopalo@gmail.com', 'acubmab250', 'Mladen', 'Karajovic', 0),
(56, 'bkosa@mail.com', 'czbktebrex', 'Milan', 'Krkic', 0),
(57, 'kristinastefan30@gmail.com', 'tina30', 'Kristina', 'MiloÅ¡eviÄ‡', 1),
(58, 'damjan.sibinovic@gmail.com', 'Daxrules1', 'Damjan', 'Sibinovic', 166),
(59, 'vukotic.nenad@gmail.com', 'f00d011', 'Nenad', 'Vukotic', 0),
(60, 'sonjastojanovic1993@gmail.com', 'agatakristi', 'Sonja', 'Stojanovic', 0),
(61, 'tgwri2s@gmail.com', '11111', 'Petar', 'MilovanoviÄ‡', 3),
(62, 'anamanasijevic@hotmail.com', 'eatalluwant', 'Ana', 'Manasijevic', 6),
(64, 'branimirudovcic3@gmail.com', '38cobra50', 'branimir', 'udovcic', 17),
(65, 'quizma90@gmail.com', 'r1o9k919900', 'stefan', 'cavic', 1),
(66, 'mackzterbuzz@gmail.com', '499269118', 'Petar', 'Mihajlovic', 0),
(67, 'srdjanteknoir@gmail.com', 'gladansam', 'Srdjan ', 'Obradovic', 0),
(42800, 'stefanel2005@gmail.com', 'stefan0106', 'Stefan ', 'Lazarevic', 0),
(42829, 'mladen-l@hotmail.com', 'Katarina1705', 'Mladen', 'Lekic', 0),
(42838, 'aleksandartopic994@gmail.com', '15101994', 'Aleksandar', 'TopiÄ‡', 0),
(42857, 'filip.d.milosavljevic@gmail.com', 'strelok2012', 'Filip', 'Milosavljevic', 1),
(42866, 'ivanvukasin@sbb.rs', 'turboCHARGER200', 'Ivan', 'Vukasinovic', 5),
(42871, 'zr023@yahoo.com', 'jugoslavk', 'Jugoslav', 'KovaÄ', 27),
(42878, 'l383048@mvrht.com', 'a2@@la+', 'das', 'ads', 1),
(42893, 'mojagposta@gmail.com', 'lozinka', 'Ana', 'Milutinovic', 13),
(42904, 'Dv250095@ncr.com', 'hemoroid', 'Dunja', 'Vukmirovic', 0),
(42905, 'lstefan4613@hotmail.com', 'lstefan46/13', 'Stefan', 'LatinoviÄ‡', 11),
(42910, 'ananikolic1404@gmail.com', '14041988', 'Ana', 'Nikolic', 1),
(42913, 'ziskovicn@gmail.com', 'zile89', 'Nemanja', 'Ziskovic', 1),
(42925, 'miqi.neg@gmail.com', '123.qwert', 'Milan', 'Petrovic', 0),
(42929, 'vladimir.momcilovic@gmail.com', 'majvla22', 'Vladimir MomÄiloviÄ', 'MomÄiloviÄ‡', 0),
(42930, 'kameni_bg@hotmail.com', 'kamenkovic', 'Kamenko', 'Jovanovic', 46),
(42931, 'nikoolaa@hotmail.com', 'gepard', 'Nikola', 'Dmitrovic', 0),
(42932, '', '', 'Srdjan', 'Spanovic', 0),
(42933, 'aleksandraradovic08@gmail.com', 'aleksandra123', 'Aleksandra', 'Radovic', 0),
(42934, 'novima994@gmail.com', 'm031542240', 'Milan', 'Novitovic', 2),
(42935, 'never.en1ng@gmail.com', 'dwworwgight1039', 'ilija Markovic', 'Markovic', 76),
(42936, 'jelenavascic81@gmail.com', 'lenamaki35', 'Jelena', 'Vascic', 0),
(42937, 'udja93@gmail.com', 'udjatan1234', 'Uros', 'Tanaskovic', 0),
(42938, 'dujanka@gmail.com', 'hastalamanana', 'DuÅ¡an', 'Vujovic', 1),
(42939, 'ivanakastrat@gmail.com', 'gugasabovic', 'Ivana', 'Kastratovic', 0),
(42940, 'cofy.steel@gmail.com', 'plavipupak1973', 'Filip', 'Glisovic', 55),
(42941, 'stojkovic.ljubaanica@gmail.com', 'momcilo2011', 'Ljuba', 'Stojkovic', 0),
(42942, 'the.hobbit.iphone@gmail.com', 'abrasevic96', 'Nemanja', 'Granic', 7),
(42943, 'soktax87@gmail.com', '555putapo555', 'Kosta', 'Lisancic', 2),
(42944, 'fekete_guja@hotmail.com', 'baixue27', 'SneÅ¾ana', 'StojanoviÄ‡', 78),
(42945, 'aleksandarbarjaktarovic604@gmail.com', 'thereisnospoon16', 'Aleksandar', 'Barjaktarovic', 40),
(42946, 'boki.dimic97@hotmail.com', 'sifra.123', 'Bogdan', 'DimitrijeviÄ‡', 0),
(42947, 'nenadpiper@yahoo.com', 'betmen', 'Nenad', 'Piper', 0),
(42948, 'thomas.g@coins-xchange.com', '123456', 'thomas', 'green', 1),
(42949, 'bjelidjole@gmail.com', 'novembar13', 'Djordje', 'Bjelica', 5),
(42950, 'dejobulatovic89@gmail.com', 'ratkomladic', 'dejan', 'bulatovic', 4),
(42951, 'stexchina@live.se', 'Liverpool12', 'Stefan', 'Dervisevic', 1),
(42952, 'filip.dulic@gmail.com', '911analogin911', 'Filip', 'Dulic', 1),
(42953, 'andjelija.majk94@yahoo.com', 'generacija1994', 'Andjela', 'Stamatovic', 1),
(42954, 'ivanovic.aleksandra@yahoo.com', 'alex050980', 'Aleksandra', 'Ivanovic', 0),
(42955, 'Predragzivanovic94@hotmail.com', '12345', 'Predrag', 'Zivanovic', 4),
(42956, 'biemel@me.com', 'jakin14', 'Branko', 'Lazarevic', 1),
(42957, 'nikola.seratlic23@gmail.com', 'alkatraz123', 'Nikola', 'Seratlic', 1),
(42958, 'vukalezic@yahoo.com', '21blok', 'Vukasin', 'Kalezic', 0),
(42959, 'geloso@beotel.net', 'SDadgtgr23', 'Nebojsa', 'Stepic', 1),
(42960, 'aleksandar.anokic@gmail.com', 'serbia2010140', 'Aleksandar', 'AnokiÄ‡', 0),
(42961, 'pavic.nemanja@gmail.com', 'qwe12rty', 'Nemanja', 'Pavic', 1),
(42962, 'milangimis@gmail.com', '949494', 'milan', 'gimiÅ¡', 1),
(42963, 'sergejnenic@gmail.com', 'zvucnici123', 'Sergej', 'Nenic', 46),
(42964, 'milosevicnastasija@gmail.com', '123456na', 'Nastasija', 'Milosevic', 1),
(42965, 'mladentimotijevic@yahoo.com', 'mlacke96', 'Mladen', 'Timotijevic', 3),
(42966, 'dimitrijevic.m@outlook.com', 'johanneskepler21', 'Milos', 'Dimitrijevic ', 0),
(42967, 'tanja.stankov@gmail.com', 'njanja11', 'Tanja', 'Capor', 1),
(42968, 'oliverstoiljkovic74@gmail.com', 'oliver101', 'Oliver', 'Stoiljkovic', 1),
(42969, 'andrej95bg@gmail.com', '216457154', 'Andrej ', 'Nedeljkovic', 1),
(42970, 'a.davidov@webcentric.co.rs', 'oecc91', 'Aleksandar Davidov', 'Davidov', 1),
(42971, 'rambo10888@gmail.com', '0644811400', 'Milos', 'Randedovic', 8),
(42972, 'sakicmanuela@gmail.com', 'elvis2018', 'Manuela', 'Sakic', 1),
(42973, 'mugigum@hotmail.com', '9611', 'Jovan', 'Mitrovic', 1),
(42974, 'sasa.jonic@gmail.com', 'jonke83', 'Sasa', 'Jonic', 2),
(42975, 'nikolaparoski777@gmail.com', 'Nikolaparoski7', 'Nikola', 'Paroski', 2),
(42976, 'booking.aero@gmail.com', 'aero9704', 'Boris ', 'Rifelj ', 4),
(42977, 'nemanjanesovanovic@gmail.com', '28051987', 'Nemanja', 'Nesovanovic', 0),
(42978, 'marijazivanovic23@gmail.com', 'prontozadrvo', 'Marija', 'Zivanovic', 2),
(42979, 'blagojevicandjela94@gmail.com', 'delijesever', 'Andjela ', 'Blagojevic', 0),
(42980, 'djorovic.marija@gmail.com', 'cicka', 'Marija', 'ÄoroviÄ‡', 0),
(42982, 'jekybones@gmail.com', 'jelena', 'Jelena', 'StojanoviÄ‡', 1),
(42983, 'vanjavejn@gmail.com', 'jmbg20211', 'VANJA ', 'VEJNOVIC', 1),
(42984, 'mechamecha888@gmail.com', 'sasailic22', 'Milos', 'Radonjic', 4),
(42985, 'ogipop92@gmail.com', 'oggypop92', 'Ognjen', 'Popovic', 1),
(42986, 'blagojevic.jovan96@gmail.com', 'andjeladjidji', 'Jovan', 'BlagojeviÄ‡', 3),
(42987, 'nunica.ristic1@gmail.com', 'amsterdam', 'Katarina', 'Ristic', 0),
(42988, 'zafirovicdarja@gmail.com', 'kasika', 'Darja', 'Zafirovic', 1),
(42989, 'bojan-94@hotmail.com', 'duffbeer11!', 'Bojan', 'Manic', 1),
(42990, 'djordjemaksic1987@gmail.com', 'jerrydekor1987', 'Djordje', 'Maksic', 5),
(42991, 'janicijevicandrej@gmail.com', 'blablabla', 'Andrej', 'JaniÄ‡ijeviÄ‡', 0),
(42992, 'lazarcorluka@gmail.com', 'gladansamkodzukela', 'Ð›Ð°Ð·Ð°Ñ€', 'Ð‹Ð¾Ñ€Ð»ÑƒÐºÐ°', 1),
(42993, 'lotr.rule@hotmail.com', '123qweasdzxc', 'boban', 'bobanovic', 2),
(42994, 'predragzivanovic94@hotmail.com', '12345', 'Predrag', 'Zivanovic', 0),
(42995, 'arsicd@gmail.com', 'are3asia', 'Dragan', 'Arsic', 1),
(42996, 'petar.stonework@gmail.com', 'draganmiljkovic', 'Petar', 'Peric', 2),
(42997, 'hajkles@yahoo.com', 'amira', 'Amira', 'Barakat', 1),
(42998, 'marina.miric44@gmail.com', 'andreas85', 'Marina Miric', 'Miric', 5),
(42999, 'mircetican@gmail.com', 'pedere0808', 'Milica', 'Mirceta', 0),
(43000, 'lakobrijanikola@gmail.com', 'cyber1245', 'Nikola', 'Lakobrija', 1),
(43001, 'softy992@hotmail.com', 'leptejebo12', 'Branko', 'Radojicic', 1),
(43002, 'srdjan.m.kojic@gmail.com', 'Srdj@n1710', 'SrÄ‘an KojiÄ‡', 'KojiÄ‡', 1),
(43003, 'sanjicica2007@gmail.com', 'fanfatalmackica', 'Sanja', 'Radoman ', 0),
(43004, 'milada.vukovic@gmail.com', 'cikicik4294', 'Milada', 'Vukovic', 4),
(43005, 'taca.bgd@gmail.com', '13zzta', 'Tamara', 'Vukovic', 0),
(43006, 'srdjan.spanovic88@gmail.com', 'jesenjin', 'Srdjan', 'Spanovic', 35),
(43007, 'tajeknic@gmail.com', 'kacaana77', 'Tatjana', 'JekniÄ‡', 3),
(43008, 'anastasija.samardzic1@gmail.com', 'anastasija1234', 'Anastasija', 'Samardzic', 0),
(43009, 'belgradeinlove@gmail.com', 'Milipas123', 'Vanja', 'Vodenicarevic', 0),
(43010, 'stefan.ivankovic73@gmail.com', 'kakarotaaa', 'Stefan', 'Ivankovic', 0),
(43011, 'minja.mijailovic3@gmail.com', 'picerija', 'Minja ', 'Mijailovic', 2),
(43012, 'aleksandra.vinogradova994@gmail.com', 'markovic58', 'Aleksandra', 'Markovic', 1),
(43013, 'cubicabubica@gmail.com', 'dzigidzigi', 'Anka', 'Markovic', 0),
(43014, 'camper604@live.com', 'zdravozdravo1', 'Barjak', 'Nikolic', 2),
(43015, 'severinafilipovic@yahoo.com', 'sirenas', 'Severina', 'Filipovic', 0),
(43016, 'Vbaba002@fiu.edu', 'Elza12345', 'Vesna', 'Babarogic', 0),
(43017, 'nevena.sorak@gmail.com', 'aleksija', 'Nevena Å¡orak', 'Å¡orak', 5),
(43018, 'saveski.ivana@gmail.com', 'ivana1234', 'Ivana', 'Saveski', 1),
(43019, 'miticsmilos@gmail.com', 'MilosMitic86', 'Milos', 'Mitic', 2),
(43020, 'krunicmirjana0206@gmail.com', 'm02061958', 'mira', 'krunic', 1),
(43021, 'marina.radulovic88@gmail.com', 'curafina', 'Marina', 'Radulovic', 0),
(43022, '1stojkovicmilos@gmail.com', 'prvizakon1489', 'MiloÅ¡', 'StojkoviÄ‡', 1),
(43023, 'nikola.nino.tomic@gmail.com', 'imhugoboss', 'Nikola', 'TomiÄ‡', 5),
(43024, 'danilos.1992@gmail.com', 'jagatiga92', 'Danilo ', 'Stojanovic', 0),
(43025, 'anja.way@gmail.com', 'jagatiga92', 'Anja', 'Matovic', 1),
(43026, 'nadja.valjarevic14@gmail.com', '08082017', 'Nadja', 'Valjarevic', 6),
(43027, 'pavasovic.milan@gmail.com', 'k0zn4k4d', 'Milan', 'Pavasovic', 1),
(43028, 'srdjanknn@gmail.com', 'MarcoDi', 'SrÄ‘an', 'RaÅ¡koviÄ‡', 6),
(43029, 'judza87@gmail.com', 'struja1987', 'Nikola', 'Ilic', 12),
(43030, 'kbr80@hushmail.com', 'cegpi8-jymnuj-kettyF', 'Jovica', 'Vlajcic', 0),
(43031, 'milosiv91@hotmail.com', 'arsenal14', 'Milos Tomislav Ivano', 'Ivanovic', 1),
(43032, 'sismisslepi1@gmail.com', 'rakovica95', 'milos', 'petrovic', 0),
(43033, 'ivamilanovic91@gmail.com', 'Ljubovija13', 'Iva', 'MilanoviÄ‡', 8),
(43034, 'medojevic_2006@yahoo.com', 'meda2019', 'Marko', 'Medojevic', 1),
(43035, 'milan1992mkc@gmail.com', 'cepums94', 'Milan', 'Stojanovic', 1),
(43036, 'etikutete@gmail.com', 'huawei2', 'Filip', 'StojanoviÄ‡', 13),
(43037, 'prokici98@gmail.com', 'nikola', 'Tatjana', 'Prokic', 3),
(43038, 'ivana.kanazir98@gmail.com', 'ixyribica', 'Ivana', 'Kanazir', 1),
(43039, 'krstic.zeljko91@gmail.com', 'zeljko2112232', 'Zeljko', 'Krstic', 3),
(43040, 'jovana.smilee93@gmail.com', 'jovanasmajli93', 'Jovana ', 'VukobratoviÄ‡', 1),
(43041, 'tomislav.bogdanovic@gmail.com', 'toma2017', 'Tomislav', 'BogdanoviÄ‡', 1),
(43042, 'kaja.savic0707@gmail.com', 'sijalica', 'Katarina', 'Savic Jesic', 0),
(43043, 'Minja.mijailovic3@gmail.com', '12345678', 'Minja ', 'Mijailovic ', 0),
(43044, 'lazar.velickovic@live.com', 'lSC003PT', 'Lazar', 'VeliÄkoviÄ‡', 1),
(43045, 'mikastevanovic88@gmail.com', 'mika666', 'Mihailo Stevanovic', 'Stevanovic', 0),
(43046, 'uros996s@gmail.com', 'soko', 'Uros', 'S', 1),
(43047, 'lukamejlzalol@yahoo.com', 'stameni123', 'Luka ', 'Stamenic', 0),
(43048, 'tijana.brdaric@gmail.com', 'miwica90', 'Tijana', 'Brdaric', 1),
(43049, 'filips1706982@gmail.com', 'c.o.r.e.', 'Filip Sovilj', 'Sovilj', 0),
(43050, 'marpop89@gmail.com', 'emdzej3004', 'marko', 'popoviÄ‡', 2),
(43051, 'dekanac94@gmail.com', 'Karina1312', 'Nikola', 'Djukic', 0),
(43052, 'snorkiplay@gmail.com', 'bananazuta', 'Milena', 'Dj', 1),
(43053, 'petra9931@gmail.com', 'znojsmrdi993', 'Petra', 'ViÅ¡njariÄ‡', 1),
(43054, 'goran.postic79@gmail.com', 'Celavi1979', 'Goran', 'PoÅ¡tiÄ‡', 1),
(43055, 'martin.milojevic12355@gmail.com', 'pranjevesa123', 'Martin', 'Milojevic', 0),
(43056, 'markodvujicic@gmail.com', 'dimarco2020', 'Marko', 'Vujicic', 2),
(43057, 'vladimir@kanazir.com', '*e67%&^pb!KCL3nQg2hi', 'Vladimir', 'Kanazir', 0),
(43058, 'dushan.srb@gmail.com', 'd1marco2020', 'Dusan', 'Momcilovic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_podaci`
--

CREATE TABLE `user_podaci` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobilni` varchar(20) NOT NULL,
  `fiksni` varchar(20) NOT NULL,
  `firma` varchar(100) DEFAULT NULL,
  `ulica` varchar(100) NOT NULL,
  `ulicnibroj` varchar(20) NOT NULL,
  `oblast` varchar(100) NOT NULL,
  `interfon` varchar(50) DEFAULT NULL,
  `sprat` varchar(50) DEFAULT NULL,
  `brojstana` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_podaci`
--

INSERT INTO `user_podaci` (`id`, `email`, `mobilni`, `fiksni`, `firma`, `ulica`, `ulicnibroj`, `oblast`, `interfon`, `sprat`, `brojstana`) VALUES
(31, 'yt5ytt@gmail.com', '0605991001', '014245039', '', 'nas. Milorada PavloviÄ‡a', '15/3', 'Banjica', '', '', ''),
(38, 'dragana.mijailovic4@gmail.com', '0641178472', '2541017', '', 'PoruÄnika SpasiÄ‡a i MaÅ¡ere ', '118', 'ÄŒukarica', 'IÅ¡ljamoviÄ‡', '9', '36'),
(39, 'mili_brend@yahoo.com', '0604141409', '0', '', 'DÅ¾ordÅ¾a Vasingtona ', '38A', 'Stari Grad', 'Putanov', '4', '12'),
(40, 'metalmorgoth@gmail.com', '0648671192', '0113131256', '', 'Bulevar Zorana ÄinÄ‘iÄ‡a ', '111 ulaz 2', 'Arena', '', 'Visoko prizemlje ', '1'),
(41, 'jankoratkovic@yahoo.com', '0631122370', '55', '', 'Neka', '8', 'DorÄ‡ol', '', '', ''),
(42, 'dalibor2602@gmail.com', '0601844566', '/', '', 'Svetozara Zorica', '24', 'MedakoviÄ‡ 1, 2 i 3', '3', '2', '3'),
(43, 'mihailos@sting.rs', '063205803', 'n/a', '', 'ZmajevaÄka', '6', 'Å½arkovo', 'n/a', 'n/a', 'n/a'),
(44, 'aleksandar.ciric@revelsystems.com', '060/0328-988', 'N/A', 'Mera Software Services', 'Djordja Stanojevica', '12', 'Stari Aerodrom (Blok 37, 38, 39 i delovi blokova 40, 41a i 49)', '', '1', '1'),
(45, 'filip.acm@hotmail.com', '0695417401', 'nema', 'MERA', 'Djordja Stanojevica', '12', 'Belville', '000', '1', '000'),
(46, 'desperado01988@gmail.com', '0600328988', '0600328988', '', 'DarosavaÄka', '4', 'Konjarnik', '', '', ''),
(47, 'vpredolac@aol.com', '066000732', '0112863151', 'Mera', 'Djordja Stanojevica ', '12', 'Belville', '', '', ''),
(48, 'petarstone88@gmail.com', '0652833294', '0113940479', '', 'Bulevar jna ', '136', 'VoÅ¾dovac', '', '', ''),
(49, 'prskiman@gmail.com', '0645602319', 'n/a', 'Mera', 'Djordja Stanojevica', '12', 'Belville', '', '', ''),
(50, 'markopajovetmic@gmail.com', '0655108369', '/', '', 'Miloja ZakiÄ‡a', '10', 'Filmski Grad', '19', '', '19'),
(51, 'vladica.rassa@gmail.com', '0652084262', '000', '', 'bulevar nikole tesle', '36', 'Bele Vode', '', '', ''),
(52, 'marko.zekovic@merasws.rs', '064 2305 140', '064 2305 140', 'MERA SOFTWARE SERVICES - Belgrade Office Park', 'Djordja Stanojevica', '12a', 'Belville', 'Morate Pozvati ', '', ''),
(53, 'mocnidabar@gmail.com', '0638113939', '0638113939', '', 'Sestara Strain', '3', 'Galenika', '42', '8', '42'),
(54, 'daxeeman@gmail.com', '0693991915', '0113557453', '', 'Steve TodoroviÄ‡a', '3', 'Banovo Brdo', 'ZlatiÄ‡', '3', '4'),
(55, 'bigstopalo@gmail.com', '0611953452', '0611953452', 'MERA', 'Djordja Stanojevica', '12', 'Stari Aerodrom (Blok 37, 38, 39 i delovi blokova 40, 41a i 49)', '', '1', ''),
(56, 'bkosa@mail.com', '0611342724', '0611342724', '', 'Prve Pruge', '7', 'Zemun Centar', '', '9', '90'),
(57, 'kristinastefan30@gmail.com', '0613044706', '0613044706', '', 'Kursulina ', '22', 'VraÄar', '', '', ''),
(58, 'damjan.sibinovic@gmail.com', '0693991915', '0113557453', '/', 'Steve Todorovica', '3', 'Banovo Brdo', 'Zlatic', '3', '4'),
(59, 'vukotic.nenad@gmail.com', '0692222480', '/', 'Mera', 'Djordja Stanojevica', '12', 'Belville', '', '1', ''),
(60, 'sonjastojanovic1993@gmail.com', '063/649-828', '/', '', 'Kralja Vladimira', '33', 'VoÅ¾dovac', '', '', ''),
(61, 'tgwri2s@gmail.com', '0112861712', '0642041567', '', 'Bul. kralja Aleksandra', '459', 'Zvezdara uÅ¾i deo', '', '', ''),
(62, 'anamanasijevic@hotmail.com', '+381652001559', '+38111123456', '', 'Borisavljeviceva ', '84', 'VoÅ¾dovac', 'Active studio', '1', ''),
(64, 'branimirudovcic3@gmail.com', '0612296152', '0114093137', '', 'milana rakica', '62', 'Zvezdara uÅ¾i deo', 'ne', 'prizemlje', 'kuca'),
(65, 'quizma90@gmail.com', '0641187431', '3974909', '', 'vojvode stepe ', '249', 'VoÅ¾dovac', 'drenjanin', '9', '50'),
(66, 'mackzterbuzz@gmail.com', '063540111', '', '', 'Luke Vojvodica', '18g', 'Vidikovac', 'Nema', 'Suteren', '5'),
(67, 'srdjanteknoir@gmail.com', '063555643', '', '', 'Bulevar Nikole Tesle', '36', 'Dunavski Kej (Blok 12, 26, 27, 30 i delovi bloka 10)', 'Mirkov', '3', '13'),
(42800, 'stefanel2005@gmail.com', '0659079070', '0117582064', '', 'Snezane Hrepevnik ', '43', 'Rakovica', '', '', ''),
(42829, 'mladen-l@hotmail.com', '0603329090', '', '', 'Omladinskih brigada', '57/1', 'Blokovi (Blok 61, 62 i 72)', 'Randjelovic', 'Prizemlje', '1'),
(42838, 'aleksandartopic994@gmail.com', '0659800787', '/', '', 'Mileve MariÄ‡ AjnÅ¡tajn', '88', 'Blokovi (Blok 61, 62 i 72)', 'Maric', '1', '5'),
(42857, 'filip.d.milosavljevic@gmail.com', '+381652100103', '+381652100103', '', 'kalemarska', '14', 'KumodraÅ¾ 2', '', '', ''),
(42866, 'ivanvukasin@sbb.rs', '063670622', '063670622', 'Telenor d.o.o.', 'Omladinskih Brigada', '90', 'Stari Aerodrom (Blok 37, 38, 39 i delovi blokova 40, 41a i 49)', '', '', ''),
(42871, 'zr023@yahoo.com', '0654561332', '0654561332', '', 'Äura ÄapiÄ‡a', '11', 'Zemun Centar', '', '', ''),
(42878, 'l383048@mvrht.com', '42342', '42342', 'adsads', 'dasda', '3', 'Ä†alije', '2', '2', '2'),
(42893, 'mojagposta@gmail.com', '0649224779', 'nema', '', 'Miloja Zakica', '11', 'Filmski Grad', 'nema, kuca ulaz sa strane na malu bron kapijicu, p', 'prizemlje', ''),
(42904, 'Dv250095@ncr.com', '0691780198', '0628438808', '', 'Spanskih Boraca', '1', 'Arena', '', '', ''),
(42905, 'lstefan4613@hotmail.com', '0643628596', '/', '', 'DuÅ¡ana JovanoviÄ‡a', '4a', 'Stepa StepanoviÄ‡', 'LatinoviÄ‡', '1', '10'),
(42910, 'ananikolic1404@gmail.com', '0643329086', '0112886558', '', 'Glasinacka', '5', 'Konjarnik', '32', '3', '32'),
(42913, 'ziskovicn@gmail.com', '0611640632', '0611640632', '', 'Velike Stepenice', '6', 'Stari Grad', '', '', ''),
(42925, 'miqi.neg@gmail.com', '0638749450', '0', '', 'Dzona Kenedija', '43', 'Paviljoni - Stari Merkator (Blok 7, 7a, 9a, 11a, 11b, 11c i delovi bloka 6)', '', '1', '6'),
(42929, 'vladimir.momcilovic@gmail.com', '+381638242017', '+381638242017', '', 'Bulevar kralja Aleksandra', '410', 'Zvezdara uÅ¾i deo', 'Dimitrijevic', '', ''),
(42930, 'kameni_bg@hotmail.com', '063500801', '063500801', '', 'Vladimira Rolovica ', '152', 'Å½arkovo', '', '1', '2'),
(42931, 'nikoolaa@hotmail.com', '064/166-44-83', '011/397-62-67', '', 'vitanovacka', '45', 'VoÅ¾dovac', '', '', ''),
(42932, '', '065', '2185488', '', 'Arcibalda Rajsa ', '11G', 'Filmski Grad', 'Vukajlovic', '3', '7'),
(42933, 'aleksandraradovic08@gmail.com', '0643852298', '0643852298', '', 'Pilota Mihajla Petrovica', '14', 'Rakovica', 'Radovic', '8.', '50'),
(42934, 'novima994@gmail.com', '0645107068', '0116307690', '', 'Kaplara MomÄila GavriÄ‡a', '2', 'Stepa StepanoviÄ‡', '10', '1', '10'),
(42935, 'never.en1ng@gmail.com', '0692692366', '0692692366', '', 'Mladena Stojanovica', '9a', 'Dedinje', 'Bilo koje dugme', '', ''),
(42936, 'jelenavascic81@gmail.com', '0652004054', '0000', 'nije firma', 'savski trg ', '5', 'Savski Venac', 'Vascic', '2', '48'),
(42937, 'udja93@gmail.com', '+38169698009', 'nema', '', 'Porecka', '13', 'Palilula uÅ¾i deo', 'Kostic', '3', '16'),
(42938, 'dujanka@gmail.com', '0644742632', '-', '', 'ViÅ¡egradska', '3', 'Savski Venac', 'ÄorÄ‘eviÄ‡', '5', '52'),
(42939, 'ivanakastrat@gmail.com', '0637765947', '0637765947', '', 'Borisavljeviceva', '9', 'VoÅ¾dovac', 'Kesic/Kastratovic', '2', '5'),
(42940, 'cofy.steel@gmail.com', '0631155865', '/', '', 'Bulevar Oslobodjenja', '172', 'Banjica', '84 - Glisovic', '8', '84'),
(42941, 'stojkovic.ljubaanica@gmail.com', '0641992109', '0112772355', '', 'Dragoslava Srejovica', '60 ', 'Palilula uÅ¾i deo', 'Stojkovic', '', '7'),
(42942, 'the.hobbit.iphone@gmail.com', '062406680', '/', '', 'Borivoja Stevnovica', '7', 'VoÅ¾dovac', '35', '9', '35'),
(42943, 'soktax87@gmail.com', '0640288209', '3860573', '', 'Ljermontova', '5', 'DuÅ¡anovac', 'Lisancic', '2', '23'),
(42944, 'fekete_guja@hotmail.com', '0637070966', '0113513361', '', 'Roze Luksemburg', '9/4', 'Kanarevo Brdo', 'StojanoviÄ‡', 'Prizemlje', '4'),
(42945, 'aleksandarbarjaktarovic604@gmail.com', '0611411318', '0112517143', '', 'Milana Jovanovica', '23', 'Å½arkovo', '', '', ''),
(42946, 'boki.dimic97@hotmail.com', '0666660097', '011221123', '', 'Paje JovanoviÄ‡a', '10', 'Zvezdara uÅ¾i deo', 'Mijalkovic', '2', '21'),
(42947, 'nenadpiper@yahoo.com', '0642642262', ',', '', 'Radoja DakiÄ‡a', '27', 'Paviljoni - Stari Merkator (Blok 7, 7a, 9a, 11a, 11b, 11c i delovi bloka 6)', 'Piper', '0', '4'),
(42948, 'thomas.g@coins-xchange.com', '0603013811', '0603013811', '', 'hadzi milentijeva ', '76', 'VraÄar', '#9999#', 'minus 1', '1'),
(42949, 'bjelidjole@gmail.com', '0645577783', '0000000000', '', 'Å umadiske divizije', '8, sprat 3, broj 22', 'Stepa StepanoviÄ‡', '22', '3', '22'),
(42950, 'dejobulatovic89@gmail.com', '0612845239', '011 345984', '', 'vojvode stepe', '341', 'VoÅ¾dovac', 'banduka', '3', '3.2'),
(42951, 'stexchina@live.se', '0643419671', '0643419671', '', 'Frederika Sopena', '1', 'Jajinci', '', 'Prizemlje', '2'),
(42952, 'filip.dulic@gmail.com', '0637598891  ', 'nema', '', 'Brane Crncevica', '12', 'VraÄar', 'nema', '4', '15(Milasinovic)'),
(42953, 'andjelija.majk94@yahoo.com', '0612447577', 'nema', '', 'Kosancicev Venac ', '1a', 'Stari Grad', 'Kladar', '5', '21'),
(42954, 'ivanovic.aleksandra@yahoo.com', '+381642503025', '+38163334777', '', 'Vidikovacki venac', '17', 'Vidikovac', 'Ranisavljev', '2', '14'),
(42955, 'Predragzivanovic94@hotmail.com', '0643823772', '/', '', 'Ljubinjska ', '5', 'Cerak', '', '', ''),
(42956, 'biemel@me.com', '0653000444', 'Nema', '', 'Snezana Hrepevnik', '43', 'Rakovica', 'Kuca', '', ''),
(42957, 'nikola.seratlic23@gmail.com', '063317334', '063317334', '', 'Mihizova ', '2', 'Stari Grad', 'Lazic', '4', '17'),
(42958, 'vukalezic@yahoo.com', '063333378', '063333378', '', 'JovaniÄka', '2', 'VoÅ¾dovac', '102 kalezic', '1', '102'),
(42959, 'geloso@beotel.net', '+381638020622', '0113836955', '', 'Mutapova', '51', 'VraÄar', 'Djokic', '2', '8'),
(42960, 'aleksandar.anokic@gmail.com', '0652530496', '2142339', '', 'Milutina MilankoviÄ‡a', '108', 'Akademija (blok 25, 28, 29 i delovi bloka 41)', 'AnokiÄ‡', '1', '3'),
(42961, 'pavic.nemanja@gmail.com', '063373543', '063373543', '', 'Ranka Tajsica', '40/6', 'VoÅ¾dovac', 'Pavic', '3', '16'),
(42962, 'milangimis@gmail.com', '0601882446', '0601882446', '', 'KaÄerska', '17b', 'VoÅ¾dovac', ' ulaz iz nikole Ä‘urkoviÄ‡a', '', ''),
(42963, 'sergejnenic@gmail.com', '0613257772', '/', '/', 'Tunelska  ', '9', 'Petlovo Brdo', '/', 'Prizemlje', '/'),
(42964, 'milosevicnastasija@gmail.com', '0641071431', 'nemamo', '', 'Vojislava Ilica', '32', 'VraÄar', 'Radonjic', '3', '9'),
(42965, 'mladentimotijevic@yahoo.com', '0631080348', '-', '', 'Bulevar Milutina Milankovica ', '94', 'Arena', 'Ivanovic (38)', '10', '38'),
(42966, 'dimitrijevic.m@outlook.com', '0643147674', '0612228534', 'RocHoir kids', 'Mile Dimic ', '9a', 'Rakovica', 'ObradoviÄ‡ ', '12', '78'),
(42967, 'tanja.stankov@gmail.com', '+381641172598', '0112451821', '', 'Gvozdiceva', '18', 'Zvezdara uÅ¾i deo', 'Nenadic', '3', '9'),
(42968, 'oliverstoiljkovic74@gmail.com', '+381600340034', '+381600340034', '1974', 'Antifasisticke Borbe 3', '9', 'Arena', 'Stoiljkovic br 9', '4', '9'),
(42969, 'andrej95bg@gmail.com', '0641266308', '0000000000', 'Balkan bet', 'Bulevar Zorana Djindjica', '44a', 'Arena', '/', '/', '/'),
(42970, 'a.davidov@webcentric.co.rs', '0653695533', '0113423464', 'WEBCENTRIC DOO', 'Ulofa Palmea 6b', '6b', 'Mirijevo', '', '', ''),
(42971, 'rambo10888@gmail.com', '0614877771', '0116332200', '', 'Rasinska ', '10', 'Petlovo Brdo', '3', '-1', '3'),
(42972, 'sakicmanuela@gmail.com', '00381603737288', '0113461782', '', 'Gavrila principa ', '57', 'Savski Venac', '13', '6', '13'),
(42973, 'mugigum@hotmail.com', '063494643', '-', '', 'djordja stanojevica', '11', 'Belville', 'Popovic', '2', '8'),
(42974, 'sasa.jonic@gmail.com', '063370533', '063370533', '', 'Studentski trg', '17', 'Stari Grad', '20. Stankovic Jelovac', '5', '20'),
(42975, 'nikolaparoski777@gmail.com', '0631607956', '011', '', 'Nikole Marakovica ', '15', 'Miljakovac', 'nema', '1', '10'),
(42976, 'booking.aero@gmail.com', '0612764908', 'Nema', '', 'Kraljice Katarine ', '31', 'Banovo Brdo', 'KuÄ‡a ', '', ''),
(42977, 'nemanjanesovanovic@gmail.com', '063660884', '0113468310', '', 'Svetozara Radojcica ', '46', 'MedakoviÄ‡ 1, 2 i 3', '', '', ''),
(42978, 'marijazivanovic23@gmail.com', '0649896532', '/////', '', 'Å½ivka Davidovica', '106 a', 'Zvezdara uÅ¾i deo', 'Slot club', '', ''),
(42979, 'blagojevicandjela94@gmail.com', '0612810849', '/', '', 'Vucitrnska ', '10', 'Senjak', '', '', ''),
(42980, 'djorovic.marija@gmail.com', '062 77 60 67', '2467502', '', 'Darvinova', '2', 'BraÄ‡e JerkoviÄ‡', '', '', ''),
(42982, 'jekybones@gmail.com', '0637362667', '1', '', 'BirÄaninova', '2a', 'Izaberite oblast', 'Zuber', '3', '25'),
(42983, 'vanjavejn@gmail.com', '062390740', '062390740', '', 'Balkanska 27', '27', 'Stari Grad', 'da', '5', '9'),
(42984, 'mechamecha888@gmail.com', '0643204804', '0643204804', '	', 'Djordja Ognjanovica', '23', 'Å½arkovo', '1', '1', '1'),
(42985, 'ogipop92@gmail.com', '0659551441', '0000', '', 'Bulevar Oslobodjenja ', '108', 'Banjica', 'Koricanac', '1', '14'),
(42986, 'blagojevic.jovan96@gmail.com', '0613138596', '012240136', '', 'Vojvode Stepe', '286/67', 'VoÅ¾dovac', '', '11', '67'),
(42987, 'nunica.ristic1@gmail.com', '0643663199', '0116306657', '', 'Kaplara Momcila Gavrica', '3/15', 'Stepa StepanoviÄ‡', '15', '2', '15'),
(42988, 'zafirovicdarja@gmail.com', '0631100285', '0112455012', '', 'Maksima Gorkog', '19', 'VraÄar', 'Zafirovic', '4', ''),
(42989, 'bojan-94@hotmail.com', '0631155105', '0112544993', '', 'Mladena Mitrica', '6', 'ÄŒukarica', '31 Manic', '7', '31'),
(42990, 'djordjemaksic1987@gmail.com', '0616173001', '0616173001', '', 'ÄŒika MiÅ¡e DjuriÄ‡a ', '2a', 'Palilula uÅ¾i deo', '', 'Prizemlje', '1'),
(42991, 'janicijevicandrej@gmail.com', '0693344304', '0113942081', '', 'Milutina MiljkoviÄ‡a', '2', 'Jajinci', '', '', ''),
(42992, 'lazarcorluka@gmail.com', '062/251420', 'ÐÐµÐ¼Ð°Ð¼', '', 'ÐœÐ¸Ð»Ð°Ð½Ð° ÐˆÐ¾Ð²Ð°Ð½Ð¾Ð²Ð¸Ñ›Ð° ', '23', 'Å½arkovo', '', '', ''),
(42993, 'lotr.rule@hotmail.com', '0644026897', '2417933', '', 'Bulevar Kralja Aleksandra ', '223', 'Zvezdara uÅ¾i deo', 'Batakovic', '1', '13'),
(42994, 'predragzivanovic94@hotmail.com', '0656732072', '-', '', 'Sretena Mladenovica Mike', '20a', 'Labudovo Brdo', '', '', ''),
(42995, 'arsicd@gmail.com', '064298660', '064298660', '', 'Zivka Davidovica', '81a', 'Zvezdara uÅ¾i deo', '', '3', '33'),
(42996, 'petar.stonework@gmail.com', '0652833294', '0113099073', '', 'Bulevar Jna ', '136', 'Jajinci', '', '', ''),
(42997, 'hajkles@yahoo.com', '0656754076', '2381057', '', 'Ace joksimovica', '71', 'Å½arkovo', '1', '0', '3'),
(42998, 'marina.miric44@gmail.com', '061/2332-017', '011/2432-381', '', 'Njegoseva', '76', 'VraÄar', 'Miric/Stankovic (6 dugme odozgo)', 'Visoki parter', '2'),
(42999, 'mircetican@gmail.com', '0655530757', '/', '', 'Bulevar patrijarha Germana ', '41', 'Jajinci', '', '', ''),
(43000, 'lakobrijanikola@gmail.com', '+38163590259', '2338213', '', 'Boze Baucala', '7', 'Petlovo Brdo', '', '', ''),
(43001, 'softy992@hotmail.com', '0616196229', '0118888888', '', 'Brace Jerkovic', '84', 'BraÄ‡e JerkoviÄ‡', 'Pavlicic', '4', '24'),
(43002, 'srdjan.m.kojic@gmail.com', '066099081', 'nemam', 'Senor d.o.o.', 'BraÄ‡e JerkoviÄ‡', '179', 'VoÅ¾dovac', 'Kojic', '1', '5'),
(43003, 'sanjicica2007@gmail.com', '0605344966 ', '0', '', 'PoÅ¾arevaÄka ', '8', 'VraÄar', '3', '', '3'),
(43004, 'milada.vukovic@gmail.com', '062242262', '062242262', '', 'VareÅ¡ka', '33', 'Kanarevo Brdo', 'PanteliÄ‡ ', '0', '3'),
(43005, 'taca.bgd@gmail.com', '0637255310', '0637255310', '', 'Vojvode Stepe', '249', 'VoÅ¾dovac', 'Petrovic Tintor', '10', '53'),
(43006, 'srdjan.spanovic88@gmail.com', '0652185488', '0112392932', '', 'Arcibalda Rajsa ', '11G', 'Å½arkovo', 'Vukajkovic', '3', '7'),
(43007, 'tajeknic@gmail.com', '063347315', '0113954380', 'JKP Infostan tehnologije', 'Vojvode Skopljanca ', '26', 'DuÅ¡anovac', '', '', ''),
(43008, 'anastasija.samardzic1@gmail.com', '+38267759671', '00', '', 'Gospodara vucica', '130', 'VoÅ¾dovac', '5', '1', '5'),
(43009, 'belgradeinlove@gmail.com', '0659761081', '/', '', 'Brace Todorovic ', '1', 'Zvezdara uÅ¾i deo', 'Rozi interfon', 'Prvi', '1'),
(43010, 'stefan.ivankovic73@gmail.com', '+38268018455', '433562', '/', 'Radovana Simica Cige 14', '13', 'MedakoviÄ‡ 1, 2 i 3', 'Ilioski', '3', '20'),
(43011, 'minja.mijailovic3@gmail.com', '0604541017', '2541017', '', 'Porucnika Spasica i Masere', '118', 'Å½arkovo', 'Isljamovic', '9', '36'),
(43012, 'aleksandra.vinogradova994@gmail.com', '0603491919', '0603491919', '', 'Jove IliÄ‡a ', '39', 'VoÅ¾dovac', '7', '2', '7'),
(43013, 'cubicabubica@gmail.com', '0694075077', '0116337235', '', 'Jedanaeste krajiske divizije ', '40', 'Labudovo Brdo', '', '8', '32'),
(43014, 'camper604@live.com', '0652517143', 'Nema', '', 'Riste Marjanovica', '6', 'Å½arkovo', 'Zo', 'vi', ':)'),
(43015, 'severinafilipovic@yahoo.com', '0638755718', 'nema', '', 'Bulevar Mihajla Pupina ', '173/104', 'Paviljoni - Stari Merkator (Blok 7, 7a, 9a, 11a, 11b, 11c i delovi bloka 6)', 'nema', '13', '104'),
(43016, 'Vbaba002@fiu.edu', '0601851050', 'Ne postoji', '', 'Vojvode Vlahovica', '27m', 'BraÄ‡e JerkoviÄ‡', 'Najgornji', '3', ''),
(43017, 'nevena.sorak@gmail.com', '0652212227', '0113113268', '', 'Miloja zakica', '61', 'Filmski Grad', '', '1', '1'),
(43018, 'saveski.ivana@gmail.com', '0603337761', '00', '', 'Mirijevski bulevar', '18', 'Karaburma', '', '2', '9'),
(43019, 'miticsmilos@gmail.com', '0644591234', 'N/A', '', 'RakoviÄka', '3', 'Kanarevo Brdo', 'PetroviÄ‡/MitiÄ‡', '3', '26'),
(43020, 'krunicmirjana0206@gmail.com', '063 269606', '3067301', '', 'dedinjska', '10', 'Dedinje', 'stojanovic', '', ''),
(43021, 'marina.radulovic88@gmail.com', '0638919128', '0638919128', '', 'Rastka Petrovica', '51', 'MedakoviÄ‡ 1, 2 i 3', '10', '3', '10'),
(43022, '1stojkovicmilos@gmail.com', '0653779489', '/', '', 'Dimitrija AvramoviÄ‡a', '2', 'Å½arkovo', 'Å½ivkoviÄ‡', '5', '22'),
(43023, 'nikola.nino.tomic@gmail.com', '064/44-44-977', '000', '', 'ÄŒemerniÄka', '9', 'VraÄar', '107', '2', '7'),
(43024, 'danilos.1992@gmail.com', '069663007', 'N/A', '', 'Cvijiceva ', '91', 'Palilula uÅ¾i deo', '21', '4', '21'),
(43025, 'anja.way@gmail.com', '069663007', 'n/a', '', 'Cvijiceva ', '91', 'VraÄar', '21', '4', '21'),
(43026, 'nadja.valjarevic14@gmail.com', '0615045450', '0112684273', '', 'Savska', '31', 'Savski Venac', '23', '2', '23'),
(43027, 'pavasovic.milan@gmail.com', '+381641673644', '+381641673644', '', 'Radovana SimiÄ‡a Cige', '3', 'MedakoviÄ‡ 1, 2 i 3', '66', '9', '66'),
(43028, 'srdjanknn@gmail.com', '0642500230', '-', '', 'Blagajska ', '8', 'Konjarnik', 'ÄorÄ‘eski', '4', '43'),
(43029, 'judza87@gmail.com', '063/388-559', '063/210-031', '', 'Kalemarska', '43a', 'KumodraÅ¾ 2', '', '', ''),
(43030, 'kbr80@hushmail.com', '0694582000', '0694582000', '', 'Mihaila Avramovica', '52', 'Dedinje', '102', '2', '102'),
(43031, 'milosiv91@hotmail.com', '0652757364', '0113582124', 'Novomatic', 'Surcinski put', '1a', 'BeÅ¾anijska Kosa (blok 51, 52, 53, 54, 55, 59 i delovi blokova 60 i 49)', '', '', ''),
(43032, 'sismisslepi1@gmail.com', '0628496916', '0000', '', 'bul ', '10', 'Banjica', '', '', ''),
(43033, 'ivamilanovic91@gmail.com', '0652562811', '015562811', '', 'DuÅ¡ana SrezojeviÄ‡a', '10', 'MedakoviÄ‡ 1, 2 i 3', '17', 'poslednji', '17'),
(43034, 'medojevic_2006@yahoo.com', '062342920', '0110987654332', 'NCR d.o.o.', 'Spanskih boraca', '1', 'Arena', '', '5', ''),
(43035, 'milan1992mkc@gmail.com', '062210332', '0', '', 'Stanka Paunovica ', '54/5', 'Rakovica', '5', 'visoko prizemlje', '5'),
(43036, 'etikutete@gmail.com', '0637740335', '0113513361', '', 'Roze Luksemburg', '9/4', 'Kanarevo Brdo', 'StojanoviÄ‡', 'Prizemlje', '4'),
(43037, 'prokici98@gmail.com', '063255297', '0113591655', '', 'Bogdana Zerajica ', '19', 'Rakovica', 'Sifra 7575#', '5', '31'),
(43038, 'ivana.kanazir98@gmail.com', '069617380', '2880371', '', 'Deset avijaticara', '19', 'Konjarnik', 'Janjic', 'MeÄ‘usprat', '2'),
(43039, 'krstic.zeljko91@gmail.com', '0616148780', '032726659', '', 'Belicka ', '17', 'VoÅ¾dovac', '3', 'Pr', '3'),
(43040, 'jovana.smilee93@gmail.com', '0655332451 ', '0112888695', '', 'Vladimira TomanoviÄ‡a', '13', 'Konjarnik', 'VukobratoviÄ‡', '', '12'),
(43041, 'tomislav.bogdanovic@gmail.com', '0601584176', '0601584176', 'Supernova', 'Bulevar Arsenija ÄŒarnojeviÄ‡a ', '99b', 'Arena', '', 'Prizemlje', ''),
(43042, 'kaja.savic0707@gmail.com', '0600707280', '0600707280', '', 'RadniÄka ', '43', 'ÄŒukarica', '14', '3', '14'),
(43043, 'Minja.mijailovic3@gmail.com', '0604541017', '2541017', '', 'PoruÄnika SpasiÄ‡a i MaÅ¡ere ', '118/36', 'Å½arkovo', '', '9', '36'),
(43044, 'lazar.velickovic@live.com', '0648723142', 'nema', '', 'Blagajska', '8', 'Konjarnik', 'VeliÄkoviÄ‡', '4', '42'),
(43045, 'mikastevanovic88@gmail.com', '0637500966', '0112661045', '', 'Trstenjakova ', '4', 'Kanarevo Brdo', 'mika i pavle ', '1', '1'),
(43046, 'uros996s@gmail.com', '0601330313', '011555555', '', 'KopernikovA', '7', 'Palilula uÅ¾i deo', '4', '2', '4'),
(43047, 'lukamejlzalol@yahoo.com', '062295490', '0112759675', '', 'Cvijiceva ', '75', 'Palilula uÅ¾i deo', '11', '5', '10'),
(43048, 'tijana.brdaric@gmail.com', '0603623736', 'Nema', '', 'Pariske komune', '61', 'Fontana (blok 1, 31, 32 i 33)', 'Nema', '9', '71'),
(43049, 'filips1706982@gmail.com', '0656556702', '0656556702', 'Supernova', 'Bulevar Arsenija Carnojevica', '99b', 'Arena', '', '', ''),
(43050, 'marpop89@gmail.com', '+381604334500', '0113584209', '', 'ÄŒelebiÄ‡ka', '4', 'Miljakovac 1 i 2', 'RaÅ¡eviÄ‡', '4', '22'),
(43051, 'dekanac94@gmail.com', '0653588552', '0112222222', '', 'Jug Bogdanova', '24', 'Stari Grad', 'ne radi, pozvati', '', ''),
(43052, 'snorkiplay@gmail.com', '0605158787', 'Xxx', 'Matrak', 'Jurija gagarina', '14g ulaz A', 'Belville', 'Matr', '10', '69'),
(43053, 'petra9931@gmail.com', '0653096900', '0113096940', '', 'BraÄ‡e JerkoviÄ‡ ', '61', 'VoÅ¾dovac', '21', '4', '21'),
(43054, 'goran.postic79@gmail.com', '0606606136', '0116543557', '', 'PoÅ¾eÅ¡ka ', '174 stan 32 leva str', 'Banovo Brdo', 'ZukoviÄ‡', '5', '32'),
(43055, 'martin.milojevic12355@gmail.com', '0694428927', '445666', '', 'Ljube Vuckovica', '25/12', 'VoÅ¾dovac', '', '1', '12'),
(43056, 'markodvujicic@gmail.com', '0654517300', '0654517300', 'CCBill', 'Bulevar Mihajla Pupina', '165g', 'Fontana (blok 1, 31, 32 i 33)', '', '', ''),
(43057, 'vladimir@kanazir.com', '063 755 02 65', 'nemam', '', 'Borivoja StevanoviÄ‡a', '19', 'MedakoviÄ‡ 1, 2 i 3', 'Kanazir', '3', '13'),
(43058, 'dushan.srb@gmail.com', '0638351549', '/', '/', 'Vladimira Tomanovica', '5', 'Konjarnik', '73 Momcilovic', '7', '73');

-- --------------------------------------------------------

--
-- Table structure for table `zemun`
--

CREATE TABLE `zemun` (
  `id` int(10) NOT NULL,
  `oblast` varchar(50) NOT NULL,
  `ogranicenje` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zemun`
--

INSERT INTO `zemun` (`id`, `oblast`, `ogranicenje`) VALUES
(1, 'Galenika', 2500.00),
(2, 'Kalvarija', 1300.00),
(3, 'Zemun Centar', 1350.00),
(4, 'Zemun - Gornji Grad', 1450.00),
(5, 'Zemun - Novi Grad', 1750.00),
(6, 'Nova Galenika', 2700.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arhiva`
--
ALTER TABLE `arhiva`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beograd`
--
ALTER TABLE `beograd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deserti`
--
ALTER TABLE `deserti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dodaci28`
--
ALTER TABLE `dodaci28`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dodaci32`
--
ALTER TABLE `dodaci32`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dodaci42`
--
ALTER TABLE `dodaci42`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dodaci50`
--
ALTER TABLE `dodaci50`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dodaci_za_palacinke`
--
ALTER TABLE `dodaci_za_palacinke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dodaci_za_paste`
--
ALTER TABLE `dodaci_za_paste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dodaci_za_sendvice`
--
ALTER TABLE `dodaci_za_sendvice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knjiga_utisaka`
--
ALTER TABLE `knjiga_utisaka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `napitci`
--
ALTER TABLE `napitci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novi_beograd`
--
ALTER TABLE `novi_beograd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ostalo`
--
ALTER TABLE `ostalo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paste`
--
ALTER TABLE `paste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pica_sendvic`
--
ALTER TABLE `pica_sendvic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pice`
--
ALTER TABLE `pice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porudzbine`
--
ALTER TABLE `porudzbine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radno_vreme`
--
ALTER TABLE `radno_vreme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rostilj`
--
ALTER TABLE `rostilj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rostilj_prilozi`
--
ALTER TABLE `rostilj_prilozi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salate`
--
ALTER TABLE `salate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendvici`
--
ALTER TABLE `sendvici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_podaci`
--
ALTER TABLE `user_podaci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zemun`
--
ALTER TABLE `zemun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beograd`
--
ALTER TABLE `beograd`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `deserti`
--
ALTER TABLE `deserti`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dodaci28`
--
ALTER TABLE `dodaci28`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dodaci32`
--
ALTER TABLE `dodaci32`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dodaci42`
--
ALTER TABLE `dodaci42`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dodaci50`
--
ALTER TABLE `dodaci50`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dodaci_za_palacinke`
--
ALTER TABLE `dodaci_za_palacinke`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dodaci_za_paste`
--
ALTER TABLE `dodaci_za_paste`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dodaci_za_sendvice`
--
ALTER TABLE `dodaci_za_sendvice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `knjiga_utisaka`
--
ALTER TABLE `knjiga_utisaka`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

--
-- AUTO_INCREMENT for table `napitci`
--
ALTER TABLE `napitci`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `novi_beograd`
--
ALTER TABLE `novi_beograd`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ostalo`
--
ALTER TABLE `ostalo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paste`
--
ALTER TABLE `paste`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pica_sendvic`
--
ALTER TABLE `pica_sendvic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pice`
--
ALTER TABLE `pice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `porudzbine`
--
ALTER TABLE `porudzbine`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1096;

--
-- AUTO_INCREMENT for table `radno_vreme`
--
ALTER TABLE `radno_vreme`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rostilj`
--
ALTER TABLE `rostilj`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rostilj_prilozi`
--
ALTER TABLE `rostilj_prilozi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `salate`
--
ALTER TABLE `salate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sendvici`
--
ALTER TABLE `sendvici`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43059;

--
-- AUTO_INCREMENT for table `user_podaci`
--
ALTER TABLE `user_podaci`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43059;

--
-- AUTO_INCREMENT for table `zemun`
--
ALTER TABLE `zemun`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
