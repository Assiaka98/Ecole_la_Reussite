
<?php

function executeRequete($req)
{
    global $pdo;
    $resultat = $pdo->query($req);
    if(!$resultat)
    {
        die("Erreur sur la requette sql.<br>Message :" .$pdo ->error ."<br>Code :" .$req);
    }
    return $resultat;
}

function eleveEstConnecte()
{
    if(!isset($_SESSION['eleves'])) 
    return false;
    else 
    return true;
}

function employeConnecte(){
    if(!isset($_SESSION['employe']))
    return false;
    else
    return true;}
    

   ?>