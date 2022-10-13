<?php
include('inclusion/BD.inc.php');
 
if (isset($_GET['supprimerid'])) {
    $ID=$_GET['supprimerid'];
    $ins=$pdo->prepare("UPDATE eleve SET supprimer='1' WHERE id='$ID'");//code pour archiver en changeant la valeur 0 par 1
    $ins->execute();
    if($ins){
       header('location:liste_eleve.php');
     
    }
}
?>