<?php
require_once("inclusion/BD.inc.php");
$recup = $pd->query("INSERT INTO eleve(
Nom,
Prenom,
Adresse,
Téléphone,
Date_de_naissance,
Lieu_de_naissance,
Nationalite,
SEXE,
nomT,
PrenomT,
TelephoneT,
EmailT,
Montant,
DateInscription,
Niveau,
Classe)
VALUES (
'$_POST[nom]',
'$_POST[prenom]',
'$_POST[adresse]',
'$_POST[telephone]',
'$_POST[DateDeNaissance]',
'$_POST[LieuDeNaissance]',
'$_POST[Nationalité]',
'$_POST[sexe]',
'$_POST[nom_T]',
'$_POST[prenom_T]',
'$_POST[telephoneTuteur]',
'$_POST[email]',
'$_POST[montant]',
'$_POST[DateInscription]',
'$_POST[niveau]',
'$_POST[classe]')");
echo "<br><br><center> <h1> inscription validé <br </h1> </center>";

?>