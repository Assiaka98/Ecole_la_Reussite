<?php
   include('inclusion/BD.inc.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inclusion/CSS/styla.css">
    <link rel="stylesheet" href="inclusion/CSS/connexion.css">

    <title>Liste Employe</title>
</head>
<body class="general" >
 
 <header>
        <div class="header">
            <nav>
                <ul class="menu">
                    <img src="inclusion/REUSSITE.jpg" alt="image simplon" class="z">
                    <li class="li"><a href="">Contact</a></li>
                   
                    <li class="li" ><a href="page_accueuil.php" class="active">Accueil</a></li>
                    
                </ul>
            </nav>
        </div>
        
    </header>
    <main>
    

    
    <div >
        <button ><a href="inscrip_employes.php" >Ajouter</a></button><br>
    </div>
    <?php
        echo '<table   border= 2px> <tr  style="background:#0096D7; color:white; ">';
           
      
    
  
   
    $ins=$pdo->prepare("SELECT prenom,nom,numero,adresse,profession,supprimer,modifier FROM employe");
    $ins->execute();


      $ins = $pdo->query("SELECT ID,prenom,nom,numero,adresse,profession,supprimer,modifier FROM employe");

  for($i=0; $i < $ins->columnCount(); $i++)



  {
    $Nom_colonne = $ins->getColumnMeta($i);
    echo '<th>' .$Nom_colonne['name'].'</th>';
  }

  echo "</tr>";
  
    while ($row = $ins->fetch(PDO::FETCH_ASSOC)) {
      $ID=$row['ID'];
        $prenom=$row['prenom'];
      $nom=$row['nom'];
     
      $numero=$row['numero'];
     
      $adresse=$row['adresse'];
      $profession=$row['profession'];
     
      $supprimer=$row['supprimer'];
      $modifier=$row['modifier'];
    
      if ($supprimer==0) {
        
        echo '<tr>
        <td >'.$ID.'</td>
        <td >'.$prenom.'</td>
        <td>'.$nom.'</td>
       
        <td>'.$numero.'</td>
        
        <td>'.$adresse.'</td>
        <td>'.$profession.'</td>
       
        
        <td>
  
        <button classe="b1"style="background:#e41414; width: 190px;  height: 25px; font-size: 15px; border-radius: 10px; text-decoration: none;" OnClick="return(confirm(\'voulez-vous vraiment supprimer cet employé?\'))";>
        <a href="supp.php?supprimerid='.$ID.'" >Supprimer</a></button>
        </td>
        <td>
        <button style="background:#146ee4;  width: 190px;  height: 25px; font-size: 15px; text-decoration: none;border-radius: 10px; "><a href="inscrip_employes.php?modifierid='.$ID.'" >modifier</a></button>
        </td>
    
      </tr>';
    
  
      }
    }
       
    
    ?>
  </tbody>
</table>
</main>
  </body>
</html>