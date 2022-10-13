
CREATE DATABASE Ecole_de_la_Reussite;
USE Ecole_de_la_Reussite;
CREATE TABLE `eleve` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Adresse` varchar(70) NOT NULL,
  `Téléphone` int(11) NOT NULL,
  `Date_de_naissance` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Lieu_de_naissance` varchar(30) NOT NULL,
  `Nationalite` varchar(50) NOT NULL,
  `SEXE` varchar(9) DEFAULT NULL,
  `PrenomT` varchar(50) DEFAULT NULL,
  `nomT` varchar(50) DEFAULT NULL,
  `TelephoneT` varchar(50) DEFAULT NULL,
  `EmailT` varchar(50) DEFAULT NULL,
  `Montant` int(50) DEFAULT NULL,
  `DateInscription` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Niveau` enum('Primere','Secondaire') DEFAULT NULL,
  `Classe` enum('CI','CP','CE1','CE2','CM1','CM2','sixième','cinquième','quatrième','troisième') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`Id`, `Nom`, `Prenom`, `Adresse`, `Téléphone`, `Date_de_naissance`, `Lieu_de_naissance`, `Nationalite`, `SEXE`, `PrenomT`, `nomT`, `TelephoneT`, `EmailT`, `Montant`, `DateInscription`, `Niveau`, `Classe`) VALUES
(1, 'sall', 'cheikh', 'Kebemer ', 777839359, '2022-10-14 00:00:00', 'HOPITAL', 'senegalaise', 'H', 'papa', 'gentil', '7777839359', 'ndeyeffall365@gmail.com', 5000, '2022-10-12 00:00:00', 'Primere', 'CI');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `ID` int(11) NOT NULL,
  `passeword` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(80) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `numero` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `adresse` varchar(80) NOT NULL,
  `profession` varchar(80) NOT NULL,
  `nationalite` varchar(80) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(80) NOT NULL,
  `date_soumission` date NOT NULL,
  `sexe` varchar(80) NOT NULL,
  `statue` int(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`ID`, `passeword`, `nom`, `prenom`, `numero`, `email`, `adresse`, `profession`, `nationalite`, `date_naissance`, `lieu_naissance`, `date_soumission`, `sexe`, `statue`) VALUES
(5, '1234', 'sall', 'NDEYE LACOSTE', '777839359', 'krietou@gmail.com', 'Kebemer ', 'prof', 'SENEGAL', '2022-10-14', 'Kebemer', '2022-10-21', 'masculin', 1),
(8, 'gentil', 'sall', 'BARA', '63453', 'gentil@gmail.com', 'Kebemer ', 'admin', 'SENEGAL', '2022-10-26', 'Kebemer', '2022-10-14', 'masculin', 1),
(9, '2605', 'sall', 'CHEIKH', '777839359', 'chmouhammed2605@gmail.com', 'Kebemer ', 'professeur', 'senegalaise', '2001-02-08', 'Diamagueune sicap mbao', '2022-10-29', 'masculin', 1),
(10, '2202', 'niang', 'diarra', '778402202', 'diarra@gmail.com', 'Kebemer ', 'secretaire', 'senegalaise', '2001-02-08', 'Kebemer', '2022-10-29', 'feminin', 1),
(11, 'xql', 'sall', 'NDEYE LACOSTE', '32', 'krietou@gmail.com', 'Kebemer ', 'feed', 'SENEGAL', '2022-09-30', 'Kebemer', '2022-10-22', 'masculin', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
