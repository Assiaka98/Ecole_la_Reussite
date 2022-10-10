<?php
/*LIAISON AVEC LE FORMULAIRE A LA BASE DE DONNEE*/
$pdo = new PDO('mysql:host=localhost;dbname=Ecole_de_la_Reussite','UBUNTU','mamy', array
(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$contenu = '';
 session_start();
include('fonction.inc.php');

