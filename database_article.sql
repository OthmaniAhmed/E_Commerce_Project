-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 01 jan. 2021 à 19:39
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database_article`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `ref` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `gamme_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`ref`, `libelle`, `quantite`, `prix`, `description`, `image_path`, `gamme_id`) VALUES
(1, 'PC De Bureau Gamer Spirit 3 Ultra / I3 10é Gén / 8 Go', 10, 1969, 'Processeur Intel Core i3-10320 - Carte mère MSI MAGB460M Bazooka - Mémoire 8 Go - Disque 240 Go SSD -Carte graphique PNY GeForce GTX 1650 Super, 4 Go de mémoire ', '1.png', 1),
(2, 'Pc De Bureau Lenovo IdeaCentre G5 14IMB05 / I5 10è Gén / 8 Go', 50, 2369, 'Processeur Intel Core I5-10400 10è Génération, Up To 4.3 GHz, 12 Mo De Mémoire Cache - Mémoire 8 Go - Disque 1 To + 256 Go SSD M.2 - Carte Graphique Nvidia GeForce GTX 1650 Super', '2.png', 1),
(3, 'Pc De Bureau HP Pavilion Gaming TG01-1006nk / I5 10è Gén / 16 Go', 2, 2649, 'Processeur Intel Core I5-10400 10è Génération, Up To 4.3 GHz, 12 Mo De Mémoire Cache - Mémoire 16 Go - Disque 1 To + 128 Go SSD M.2 - Carte Graphique Nvidia GeForce RTX 2060', '3.png', 1),
(4, 'Pc De Bureau Dell Vostro 3671 / 4 Go / Dual Core', 50, 829, 'Processeur Intel Pentium Gold Dual Core G5420, 3.8 GHz, 4 Mo De Mémoire Cache - Mémoire 4 Go - Disque 1 To - Carte Graphique Intel HD Graphics ', '4.png', 1),
(5, 'Pc De Bureau Lenovo V530T / I3 9é Gén / 4 Go', 8, 939, 'Processeur Intel Core I3-9100T, 9éme Génération, Up To 3.7 Ghz, 6 Mo De Mémoire Cache - Mémoire 4 Go - Disque 1 To - Carte Graphique Intel HD Graphics', '5.png', 1),
(6, 'Pc Portable Acer Aspire 3 A315 / I3 7é Gén / 4 Go / Bleu', 30, 1299, 'Ecran 15.6\" HD LED - Processeur Intel Core I3-7020U, 8é Gén, 2.3 GHz, 3 Mo De Mémoire Cache - Mémoire 4 Go - Disque 1 To', '6.png', 2),
(7, 'Pc Portable Acer Aspire 3 A315 / I3 7é Gén / 4 Go / Rouge', 14, 1299, 'Ecran 15.6\" HD LED - Processeur Intel Core I3-7020U, 8é Gén, 2.3 GHz, 3 Mo De Mémoire Cache - Mémoire 4 Go - Disque 1 To - Carte Graphique Intel HD Graphics - Wifi - Bluetooth', '7.png', 2),
(8, 'Pc Portable Lenovo Ideapad L340-15IRH Gaming / I5 9é Gén / 8 Go', 2, 2249, 'Écran 15.6\" Full HD IPS - Processeur Intel Core I5-9300H, Up To 4.1 Ghz, 8 Mo De Cache - Mémoire 8 Go - Disque 2 To', '8.png', 2),
(9, 'Pc Portable Lenovo Legion Y540 / I5 9è Gén / 8 Go', 7, 2749, 'Ecran 15.6\" Full HD IPS - Processeur Intel Core I5-9300H, Up To 4.1 GHz, 8 Mo De Mémoire Cache - Mémoire 8 Go - Disque 1 To + 128 Go SSD - Carte Graphique Nvidia GeForce GTX 1650, 4 Go De Mémoire Dédiée - Wifi - Bluetooth - Clavier Rétroéclairé - Webcam H', '9.png', 2),
(10, 'Pc Portable MSI Gaming GF63 Thin 10SCSR / I5 10è Gén / 8 Go', 5, 2779, 'Ecran 15.6\" Full HD 144 Hz - Processeur Intel Core I5-10300H, Up To 4.5 Ghz, 8 Mo De Mémoire Cache - Mémoire 8 Go - Disque 512 Go SSD', '10.png', 2),
(11, 'Pc Portable Asus TUF506LU / I5 10é Gén / 8 Go', 7, 3079, 'Ecran 15.6\" Full HD - Processeur Intel Core I5-10300H, Up To 4.5 Ghz, 8 Mo De Mémoire Cache - Mémoire 8 Go - Disque 512 Go SSD - Carte Graphique Nvidia GeForce GTX 1660 Ti, 6 Go De Mémoire Dédiée - Wifi - Bluetooth - Lecteur De Cartes', '11.png', 2),
(12, 'Pc Portable ACER Predator Triton 300 / I5 9é Gèn / 8 Go', 7, 2549, 'Ecran 15.6\" Full HD 144 Hz - Processeur Intel Core I5-10300H, Up To 4.5 Ghz, 8 Mo De Mémoire Cache - Mémoire 32 Go ', '12.png', 2),
(13, 'Écran HP V214a 20.7\" Full HD', 20, 233, 'Écran HP V214a - 20.7\" Full HD LED - Résolution 1920 X 1080 À 60 Hz ', '13.png', 3),
(14, 'Ecran Pro 24/7 Hikvision 21.5\" FHD DS-D5022QE-E', 30, 255, 'Ecran Pro Hikvision 21.5\" Full HD - Résolution 1920 X 1080, 60Hz ', '14.png', 3),
(15, 'Ecran Philips LED Full HD 21.5', 7, 277, 'Écran 21.5\" Full HD -Résolution Optimale 1920x1080 À 60 Hz', '15.png', 3),
(16, 'Ecran 24.5\" Millenium MD25 PRO', 8, 770, 'Ecran 24.5 Résolution: 1920 X 1080 Pixels -Fréquence De Rafraîchissement: 144 Hz ', '16.png', 3),
(17, 'Ecran Gaming HP 27x 27\" FHD Incurvé 7MW42AA / 144 Hz', 5, 839, 'Ecran Gaming Hp 27\" - Résolution FHD 1920 X 1 080 À 120 Hz - Format 16:9 - Fréquence 144 H', '17.png', 3),
(18, 'Souris Gaming MSI Clutch GM30', 22, 99, 'Souris Gaming MSI Clutch GM30', '18.png', 4),
(19, 'SOURIS FILAIRE GAMING LOGITECH G402', 3, 265, 'Souris filaire pour gamer - Droitier - Capteur optique 4000 dpi - 8 boutons programmables', '19.png', 4),
(20, 'CASQUE MICRO GAMING T-DAGGER', 33, 43, 'Dimensions: 200 x 175 x 87 mm - Couleur: Noir & Vert', '20.png', 4),
(21, 'CASQUE MICRO GAMING RGB FANTECH VISAGE', 21, 55, 'Casque Micro Gaming RGB Fantech Visage II HG17 - Interface USB', '21.png', 4),
(22, 'MICRO CASQUE GAMER WHITE SHARK', 5, 65, 'Micro Casque Gamer WHITE SHARK MARGAY ', '22.png', 4),
(23, 'CLAVIER GAMING GENESIS RHOD 400 / NOIR & ROUGE', 10, 79, 'Clavier Gaming Genesis Rhod 400 - Touche Anti-Ghosting - 104 Boutons', '23.png', 4),
(24, 'CLAVIER GAMER MSI VIGOR GK20 / RGB', 18, 99, 'Clavier Gamer MSI Vigor GK20 - Norme AZERTY - Rétroéclairage LED RGB', '24.png', 4),
(25, 'Microsoft Office 365 Personnel Francais SUBscr / 1 An', 200, 179, 'Microsoft Office 365 Personnel - Français - Licence 1 utilisateur pour 1 PC ou Mac - Word, Excel, PowerPoint, OneNote et Outlook.. - Abonnement 1 an', '25.png', 5);

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(255) NOT NULL,
  `this_feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `gamme`
--

CREATE TABLE `gamme` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gamme`
--

INSERT INTO `gamme` (`id`, `nom`) VALUES
(1, 'Ordinateur de Bureau'),
(2, 'Ordinateur Portable'),
(3, 'Ecran'),
(4, 'Accessoires et Périphériques'),
(5, 'Logiciels');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ref`),
  ADD KEY `fk1` (`gamme_id`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`article_id`);

--
-- Index pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `gamme`
--
ALTER TABLE `gamme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `ref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `gamme`
--
ALTER TABLE `gamme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`gamme_id`) REFERENCES `gamme` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
