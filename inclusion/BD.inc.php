<?php
try
{
	// On se connecte à MySQL
	$pdo = new PDO('mysql:host=localhost;dbname=Ecole_de_la_Reussite;charset=utf8','UBUNTU','mamy');
  
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>