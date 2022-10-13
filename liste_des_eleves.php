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

    <title>Liste Eleve</title>
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
    

    <div classe="liste">





    <div >
        
    </div>
    <?php
        echo '<table   border= 2px> <tr  style="background:#0096D7; color:white; ">';
           
      
    
  
   
    $ins=$pdo->prepare("SELECT Nom,Prenom,Adresse,Téléphone FROM eleve");
    $ins->execute();


      $ins = $pdo->query("SELECT id,Nom,Prenom,Adresse,Téléphone FROM eleve");

  for($i=0; $i < $ins->columnCount(); $i++)



  {
    $Nom_colonne = $ins->getColumnMeta($i);
    echo '<th>' .$Nom_colonne['name'].'</th>';
  }

  echo "</tr>";
  
    while ($row = $ins->fetch(PDO::FETCH_ASSOC)) {
      $ID=$row['id'];
        $nom=$row['Nom'];
      $prenom=$row['Prenom'];
     
      $adresse=$row['Adresse'];
     
      $numero=$row['Téléphone'];
     
     
      
      
    
      if ($ID !==0 ) {
        
        echo '<tr>
        <td >'.$ID.'</td>
        <td >'.$nom.'</td>
        <td>'.$prenom.'</td>
       <td>'.$adresse.'</td>
        <td>'.$numero.'</td>
        
        
        
       
        
       
    
      </tr>';
    
  
      }
    }
       
    
    ?>
  </tbody>
</table>
    </div>
</main>
  </body>
</html>