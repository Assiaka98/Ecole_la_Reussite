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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inclusion/CSS/style.css">
  

    <title>Liste Employe</title>
</head>
<body>
    <div class="container">
        <button ><a href="inscrip_employes.php" >Ajouter</a></button>
    </div>
    <?php
        echo '<table border= 2px> <tr  style="background:#0096D7; color:white; ">';  
 
   
      echo '<th >identifiant</th>';
     echo '<th >passeword</th>';
    echo '<th >nom</th>';
  echo '<th >prenom</th>';
  echo '<th >numero</th>';
   echo '<th scope="col">email</th>';
   echo '<th >adresse</th>';
    echo '<th >profession</th>';
   echo '<th scope="col">nationalite</th>';
    echo '<th scope="col">date_naissance</th>';
   echo '<th scope="col">lieu_naissance</th>';
   echo '<th scope="col">date_soumission</th>';
   echo '<th >sexe</th>';
    echo '<th >Actions</th>';
   echo '<th >Actions</th>';  
echo '</tr>';
  
   
    $ins=$pdo->prepare("SELECT * FROM employe");
    $ins->execute();


      $ins = $pdo->query("SELECT * FROM employe");

  for($i=0; $i < $ins->columnCount(); $i++)



  {
    $Nom_colonne = $ins->getColumnMeta($i);
    echo '<th>' .$Nom_colonne['name'].'</th>';
  }

  echo "</tr>";
  
    while ($row = $ins->fetch(PDO::FETCH_ASSOC)) {
      $ID=$row['ID'];
      $passeword=$row['passeword'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $numero=$row['numero'];
      $email=$row['email'];
      $adresse=$row['adresse'];
      $profession=$row['profession'];
      $nationalite=$row['nationalite'];
      $date_naissance=$row['date_naissance'];
      $lieu_naissance=$row['lieu_naissance'];
      $date_soumission=$row['date_soumission'];
      $sexe=$row['sexe'];
      $supprimer=$row['supprimer'];
      $modifier=$row['modifier'];
    
      if ($supprimer==0) {
        echo '<tr>
        <th>'.$ID.'</th>
        <td>'.$passeword.'</td>
        <td>'.$nom.'</td>
        <td>'.$prenom.'</td>
        <td>'.$numero.'</td>
        <td>'.$email.'</td>
        <td>'.$adresse.'</td>
        <td>'.$profession.'</td>
        <td>'.$nationalite.'</td>
        <td>'.$date_naissance.'</td>
        <td>'.$lieu_naissance.'</td>
        <td>'.$date_soumission.'</td>
        <td>'.$sexe.'</td>
        <td>
  
        <button ><a href="supemploye.php?supprimerid='.$ID.'" >Supprimer</a></button>
        </td>
        <td>
        <button ><a href="inscrip_employes.php?modifierid='.$ID.'" >modifier</a></button>
        </td>
    
      </tr>';
  
      }
    }
    
    ?>
  </tbody>
</table>
</body>
</html>