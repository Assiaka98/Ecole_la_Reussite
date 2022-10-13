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
