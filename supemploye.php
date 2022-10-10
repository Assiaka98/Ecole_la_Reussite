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
if (isset($_GET['supprimerid'])) {
    $ID=$_GET['supprimerid'];
    $ins=$pdo->prepare("UPDATE employe SET supprimer='1' WHERE ID='$ID'");//code pour archiver en changeant la valeur 0 par 1
    $ins->execute();
    if($ins){
       header('location:liste_employe.php');
       echo 'voulez-vous supprimer cette donnée?';
    }
}
?>