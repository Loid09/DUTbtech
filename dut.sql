-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 30 juil. 2023 à 17:32
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dut`
--

-- --------------------------------------------------------

--
-- Structure de la table `autre`
--

CREATE TABLE `autre` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  `Fait_le` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `autre`
--

INSERT INTO `autre` (`id`, `nom`, `prenom`, `tel`, `mail`, `commentaire`, `Fait_le`) VALUES
(1, 'ufkutku', 'ikuitk', '7684687', 'v@gmail.com', 'cjuyfjfy', '2023-07-30 09:33:20');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `nom_entreprise` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `nom_prenom` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `catalogue` varchar(255) DEFAULT NULL,
  `souscrire` tinyint(1) DEFAULT 0,
  `rdv` tinyint(1) DEFAULT 0,
  `apport` varchar(255) DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  `Fait_le` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom_entreprise`, `adresse`, `nom_prenom`, `tel`, `mail`, `catalogue`, `souscrire`, `rdv`, `apport`, `commentaire`, `Fait_le`) VALUES
(1, 'jfctyf', 'ygyvgku', 'gcjyf', '68414689', 'b@gmail.com', 'fytdchf', 1, 1, 'yucdrthdj', 'ytddytk', '2023-07-30 09:32:27');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `nom_ecole` varchar(255) DEFAULT NULL,
  `emplacement` varchar(255) DEFAULT NULL,
  `hackathon` tinyint(1) DEFAULT 0,
  `theme` varchar(255) DEFAULT NULL,
  `digitalMiss` tinyint(1) DEFAULT 0,
  `miss_name_project` varchar(255) DEFAULT NULL,
  `miss_description_project` text DEFAULT NULL,
  `miss_description_teams` text DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  `Fait_le` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `tel`, `mail`, `nom_ecole`, `emplacement`, `hackathon`, `theme`, `digitalMiss`, `miss_name_project`, `miss_description_project`, `miss_description_teams`, `commentaire`, `Fait_le`) VALUES
(1, 'ossoun', 'lanan', '0022965686963', 'oussoulanann@gmail.com', 'kjzegfuz', 'ekjrgtuig', 1, 'f', 1, 'eirugh', 'thjk', 'htui(\'y', 'eruihe', '2023-07-30 09:28:28');

-- --------------------------------------------------------

--
-- Structure de la table `texteSite`
--

CREATE TABLE `texteSite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(25) NOT NULL,
  `Texte` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `texteSite`
--

INSERT INTO `texteSite` (`id`, `libelle`, `Texte`) VALUES
(1, 'text_dut', 'Le Digital University Tour est un programme pluriannuel\r\n									qui\r\n									vise à intégrer les compétences numériques et entrepreneuriales dans toutes les\r\n									formations. En collaboration avec les professionnels du secteur, nous avons mis en\r\n									place\r\n									une caravane éducative et commerciale qui fait la tournée des universités et écoles,\r\n									pour diffuser les technologies digitales et accompagner la créativité et l\'esprit\r\n									d\'entreprise des apprenants.'),
(2, 'text_programme', 'L’expérience instructive du\r\n									Digital University Tour offre aux étudiants une immersion pratique, utile et\r\n									nécessaire\r\n									dans le monde du digital et de l\'entrepreneuriat numérique à travers diverses\r\n									activités\r\n									: panels-débat, ateliers, master class, démonstrations, hackathons, expositions,\r\n									concours, réseautage… et surtout d’avoir des témoignages et échanges avec les\r\n									acteurs\r\n									du secteur. Au programme :'),
(3, 'text_caravane', 'Pour la tournée des universités, le Digital University Tour\r\n								et ses partenaires ont mis à disposition un outil efficace de communication :\r\n								<strong style=\"font-weight: bold;\"> une\r\n									caravane éducative et commerciale, composée d’un bus et de 5 voitures\r\n									brandées</strong>.\r\n								<br>\r\n								Pendant <strong style=\"font-weight: bold;\">2 mois</strong> , ce convoi va sillonner\r\n								<strong style=\"font-weight: bold;\">20 villes</strong> ,\r\n								parcourir plus\r\n								de <strong style=\"font-weight: bold;\">2500 km</strong> , impacter\r\n								plus de <strong style=\"font-weight: bold;\">5.000.000 de personnes sur son\r\n									trajet</strong>, faire escale\r\n								sur <strong style=\"font-weight: bold;\"> 50\r\n									sites universitaires</strong>,\r\n								rencontrer plus de <strong style=\"font-weight: bold;\">100.000 étudiants</strong>,\r\n								exposer plus de\r\n								<strong style=\"font-weight: bold;\">500 stands</strong>,\r\n								distribuer plus de\r\n								<strong style=\"font-weight: bold;\">1000 kits étudiants </strong> et <strong\r\n									style=\"font-weight: bold;\">5.000 goodies</strong>, dispenser plus\r\n								de <strong style=\"font-weight: bold;\">250\r\n									conférences, formations et\r\n									ateliers…</strong>\r\n								<br><br>\r\n								Si vous voulez avoir un impact significatif auprès de ce large public, alors, <strong\r\n									style=\"font-weight: bold;\">soyez notre\r\n									partenaire !</strong>\r\n								Ne manquez pas cette opportunité exceptionnelle pour renforcer votre notoriété.\r\n								Profitez de nos offres : communication, publicité, branding, exposition, animations…\r\n								N’hésitez pas à nous contacter pour mettre en place et conduire avec vous votre campagne\r\n								avec succès.'),
(4, 'text_challenge', 'Le DUT est aussi une occasion pour des expériences\r\n									inédites\r\n									en thème de défis, de réflexions et d’application des connaissances. En effet, 3\r\n									challenges mettent à l’épreuve les esprits créatifs, dans l’excellence, l’innovation\r\n									et\r\n									l\'entrepreneuriat numérique : le “DUT Hackathon”, le “Trophée Miss Digital” et le\r\n									“Best\r\n									Digital University”.'),
(5, 'text_hackathon', 'Le Digital University Tour lance son premier hackathon sur le thème de l’innovation\r\n									dans\r\n									le <strong style=\"font-weight: bold;\">BTP</strong>, le <strong\r\n										style=\"font-weight: bold;\">textile</strong>, et la <strong\r\n										style=\"font-weight: bold;\">connectivité internet</strong>.\r\n\r\n								<br>\r\n									Seul ou en groupe, vous avez un projet ou une idée dans l’un de ces 3 domaines,\r\n									inscrivez-vous et essayer de gagner un des <strong style=\"font-weight: bold;\">grands\r\n										prix de ce hackathon d’une valeur de\r\n										plus de 4.000.000 F CFA</strong>. Les projets doivent mettre en avant\r\n									l\'innovation,\r\n									l’inclusion\r\n									et l’impact social et économique dans ces 3 secteurs. Formez des équipes, développez\r\n									des\r\n									idées en solutions numériques et remportez les récompenses ! <br>\r\n									La meilleure solution sera récompensée par un prix d’une valeur de 2.000.000 F CFA;\r\n									la deuxième aura un prix d’une valeur de 1.500.000 et la troisième, 1.000.000 F CFA\r\n									et d’autres lots. Pour participer au Hackathon DUT, veuillez remplir le\r\n									formulaire d\'inscription en cliquant <a href=\"#section-5\">ici</a>\r\n								'),
(6, 'text_miss', 'Le Trophée Miss Digital recherche des jeunes femmes étudiantes talentueuses et\r\n									ambitieuses. Seule ou en groupe, participez au concours Miss Digital et mettez en\r\n									avant\r\n									votre projet ou entreprise numérique. <br><br>Gagnez en visibilité, bénéficiez d\'un\r\n									accompagnement et tissez des liens avec des acteurs clés de l\'écosystème numérique.\r\n									Ne\r\n									manquez pas cette opportunité qui va vous révéler et vous lancer.\r\n\r\n								<p style=\"text-align: justify; \"> <br>\r\n\r\n									Le meilleur projet sera récompensé par un prix d’une valeur de 1.000.000 F CFA ;\r\n									la deuxième aura un prix d’une valeur de 500.000 et la troisième, 250.000 F CFA.\r\n									Pour participer au Trophée Miss Digitale, veuillez remplir le formulaire\r\n									d\'inscription en cliquant <a href=\"#section-5\">ici</a>\r\n\r\n								</p>'),
(7, 'text_bdu', 'Votre université ou école est-elle “digitale friendly” ? <br>\r\n									A-t-elle a intégré les outils digitaux qui facilitent l’expérience utilisateur ?\r\n									<br>\r\n									Infrastructures, programmes, ressources éducatives, collaborations <br> engagement\r\n									étudiant\r\n									… <br>\r\n									Participez au Digital University Tour, soumettez votre candidature, répondez aux\r\n									critères et prenez votre chance de remporter le trophée et le titre du “Best Digital\r\n									University” 2023.\r\n\r\n								<p style=\"text-align: justify;\">Le titre du <strong style=\"font-weight: bold;\">Best\r\n										Digital\r\n										University</strong>\r\n									2023, l\'université la plus digitale est une reconnaissance des efforts et des\r\n									réalisations dans le domaine de la transformation digitale des universités et\r\n									écoles du Bénin. Toutes les universités peuvent gagner ce titre, en partageant\r\n									leurs initiatives, en échangeant des bonnes pratiques et en créant des\r\n									opportunités de collaboration.\r\n									Pour participer au Best Digital University, veuillez remplir le formulaire\r\n									d\'inscription <a href=\"#section-5\">ici</a>\r\n								</p>'),
(8, 'text_inscription', 'Pour participer au Digital University Tour, veuillez remplir le formulaire\r\n										d\'inscription.');

-- --------------------------------------------------------

--
-- Structure de la table `texte_site`
--

CREATE TABLE `texte_site` (
  `id` int(11) NOT NULL,
  `text_DUT` mediumtext NOT NULL,
  `text_prog` mediumtext NOT NULL,
  `text_caravane` mediumtext NOT NULL,
  `text_challenge` mediumtext NOT NULL,
  `text_hackathon` mediumtext NOT NULL,
  `text_miss` mediumtext NOT NULL,
  `text_BDU` mediumtext NOT NULL,
  `text_inscription` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `texte_site`
--

INSERT INTO `texte_site` (`id`, `text_DUT`, `text_prog`, `text_caravane`, `text_challenge`, `text_hackathon`, `text_miss`, `text_BDU`, `text_inscription`) VALUES
(1, 'Le Digital University Tour est un programme pluriannuel\n									qui\n									vise à intégrer les compétences numériques et entrepreneuriales dans toutes les\n									formations. En collaboration avec les professionnels du secteur, nous avons mis en\n									place\n									une caravane éducative et commerciale qui fait la tournée des universités et écoles,\n									pour diffuser les technologies digitales et accompagner la créativité et l\'esprit\n									d\'entreprise des apprenants.', 'L’expérience instructive du\n									Digital University Tour offre aux étudiants une immersion pratique, utile et\n									nécessaire\n									dans le monde du digital et de l\'entrepreneuriat numérique à travers diverses\n									activités\n									: panels-débat, ateliers, master class, démonstrations, hackathons, expositions,\n									concours, réseautage… et surtout d’avoir des témoignages et échanges avec les\n									acteurs\n									du secteur. Au programme :', 'Pour la tournée des universités, le Digital University Tour\n								et ses partenaires ont mis à disposition un outil efficace de communication :\n								<strong style=\"font-weight: bold;\"> une\n									caravane éducative et commerciale, composée d’un bus et de 5 voitures\n									brandées</strong>.\n								<br>\n								Pendant <strong style=\"font-weight: bold;\">2 mois</strong> , ce convoi va sillonner\n								<strong style=\"font-weight: bold;\">20 villes</strong> ,\n								parcourir plus\n								de <strong style=\"font-weight: bold;\">2500 km</strong> , impacter\n								plus de <strong style=\"font-weight: bold;\">5.000.000 de personnes sur son\n									trajet</strong>, faire escale\n								sur <strong style=\"font-weight: bold;\"> 50\n									sites universitaires</strong>,\n								rencontrer plus de <strong style=\"font-weight: bold;\">100.000 étudiants</strong>,\n								exposer plus de\n								<strong style=\"font-weight: bold;\">500 stands</strong>,\n								distribuer plus de\n								<strong style=\"font-weight: bold;\">1000 kits étudiants </strong> et <strong\n									style=\"font-weight: bold;\">5.000 goodies</strong>, dispenser plus\n								de <strong style=\"font-weight: bold;\">250\n									conférences, formations et\n									ateliers…</strong>\n								<br><br>\n								Si vous voulez avoir un impact significatif auprès de ce large public, alors, <strong\n									style=\"font-weight: bold;\">soyez notre\n									partenaire !</strong>\n								Ne manquez pas cette opportunité exceptionnelle pour renforcer votre notoriété.\n								Profitez de nos offres : communication, publicité, branding, exposition, animations…\n								N’hésitez pas à nous contacter pour mettre en place et conduire avec vous votre campagne\n								avec succès.', 'Le DUT est aussi une occasion pour des expériences\n									inédites\n									en thème de défis, de réflexions et d’application des connaissances. En effet, 3\n									challenges mettent à l’épreuve les esprits créatifs, dans l’excellence, l’innovation\n									et\n									l\'entrepreneuriat numérique : le “DUT Hackathon”, le “Trophée Miss Digital” et le\n									“Best\n									Digital University”.', 'Le Digital University Tour lance son premier hackathon sur le thème de l’innovation\n									dans\n									le <strong style=\"font-weight: bold;\">BTP</strong>, le <strong\n										style=\"font-weight: bold;\">textile</strong>, et la <strong\n										style=\"font-weight: bold;\">connectivité internet</strong>.\n\n								<br>\n									Seul ou en groupe, vous avez un projet ou une idée dans l’un de ces 3 domaines,\n									inscrivez-vous et essayer de gagner un des <strong style=\"font-weight: bold;\">grands\n										prix de ce hackathon d’une valeur de\n										plus de 4.000.000 F CFA</strong>. Les projets doivent mettre en avant\n									l\'innovation,\n									l’inclusion\n									et l’impact social et économique dans ces 3 secteurs. Formez des équipes, développez\n									des\n									idées en solutions numériques et remportez les récompenses ! <br>\n									La meilleure solution sera récompensée par un prix d’une valeur de 2.000.000 F CFA;\n									la deuxième aura un prix d’une valeur de 1.500.000 et la troisième, 1.000.000 F CFA\n									et d’autres lots. Pour participer au Hackathon DUT, veuillez remplir le\n									formulaire d\'inscription en cliquant <a href=\"#section-5\">ici</a>\n								', 'Le Trophée Miss Digital recherche des jeunes femmes étudiantes talentueuses et\n									ambitieuses. Seule ou en groupe, participez au concours Miss Digital et mettez en\n									avant\n									votre projet ou entreprise numérique. <br><br>Gagnez en visibilité, bénéficiez d\'un\n									accompagnement et tissez des liens avec des acteurs clés de l\'écosystème numérique.\n									Ne\n									manquez pas cette opportunité qui va vous révéler et vous lancer.\n\n								<p style=\"text-align: justify; \"> <br>\n\n									Le meilleur projet sera récompensé par un prix d’une valeur de 1.000.000 F CFA ;\n									la deuxième aura un prix d’une valeur de 500.000 et la troisième, 250.000 F CFA.\n									Pour participer au Trophée Miss Digitale, veuillez remplir le formulaire\n									d\'inscription en cliquant <a href=\"#section-5\">ici</a>\n\n								</p>', 'Votre université ou école est-elle “digitale friendly” ? <br>\n									A-t-elle a intégré les outils digitaux qui facilitent l’expérience utilisateur ?\n									<br>\n									Infrastructures, programmes, ressources éducatives, collaborations <br> engagement\n									étudiant\n									… <br>\n									Participez au Digital University Tour, soumettez votre candidature, répondez aux\n									critères et prenez votre chance de remporter le trophée et le titre du “Best Digital\n									University” 2023.\n\n								<p style=\"text-align: justify;\">Le titre du <strong style=\"font-weight: bold;\">Best\n										Digital\n										University</strong>\n									2023, l\'université la plus digitale est une reconnaissance des efforts et des\n									réalisations dans le domaine de la transformation digitale des universités et\n									écoles du Bénin. Toutes les universités peuvent gagner ce titre, en partageant\n									leurs initiatives, en échangeant des bonnes pratiques et en créant des\n									opportunités de collaboration.\n									Pour participer au Best Digital University, veuillez remplir le formulaire\n									d\'inscription <a href=\"#section-5\">ici</a>\n								</p>', 'Pour participer au Digital University Tour, veuillez remplir le formulaire\n										d\'inscription.');

-- --------------------------------------------------------

--
-- Structure de la table `universite`
--

CREATE TABLE `universite` (
  `id` int(11) NOT NULL,
  `nom_universite` varchar(255) DEFAULT NULL,
  `nom_ecole` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  `Fait_le` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `autre`
--
ALTER TABLE `autre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `texteSite`
--
ALTER TABLE `texteSite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `texte_site`
--
ALTER TABLE `texte_site`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `universite`
--
ALTER TABLE `universite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `autre`
--
ALTER TABLE `autre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `texteSite`
--
ALTER TABLE `texteSite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `texte_site`
--
ALTER TABLE `texte_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `universite`
--
ALTER TABLE `universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
