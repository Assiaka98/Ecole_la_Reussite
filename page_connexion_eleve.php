<?php  ?>

<?php

require_once("inclusion/BD.inc.php");

if(isset($_GET['action']) && $_GET['action']== "deconnexion")
{
    session_destroy();
}

if(eleveEstConnecte())
{
    header("location:profil/profil_eleve.php");
}


  if($_POST)
  {
    $résultat = executeRequete("SELECT * FROM eleve WHERE EmailT='$_POST[mail]'");
    if($résultat->rowCount() != 0)
    {
      $eleves = $résultat->fetch(PDO::FETCH_ASSOC);
      if($eleves['TelephoneT'] == $_POST['mdp'])
      {
          foreach($eleves as $indice => $element)
          {
            if($indice != 'mdp')
            {
              $_SESSION['eleves'][$indice] = $element;
            }
          }
        header("location:profil/profil_eleve.php");
      }
      else { $contenu .= '<div class="erreur">Mot de passe incorecte</div>';}
    }
    else{$contenu .= '<div class="erreur">Mail incorrecte</div>';}
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="inclusion/CSS/connexion.css">
  <title>Document</title>
  </head>
<body class="general" >
 
 
<header>
        <div class="header">
            <nav>
                <ul class="menu">
                    <img src="inclusion/REUSSITE.jpg" alt="image simplon" class="z">
                    <li class="li"><a href="">Contact</a></li>
                   
                    <li class="li" ><a href="#" class="active">Accueil</a></li>
                    
                </ul>
            </nav>
        </div>
        
    </header>
    <main>
    
        <div class="description">
            
            <h1>CONNEXION ELEVE</h1><br>
            
            </div>
            <div class="container">
    <form method="POST" action="">
    <label for="mail">Email</label> <br>
        <input type="email" name="mail" id="email" required placeholder="saisir votre mail" class="case"><br><br>
        <label for="nom ">Mot de pass</label><br>
        <input type="password" name="mdp" id="pass" required placeholder="Mot de pass" class="case"><br><br>
          <input type="submit" value="Se connecter" class="btn" >
       
      </form> 
  
     
 </div>


</div> 

<footer><p>© Copyright Simplon. Designed and Developed by <strong>UBUNTU_GROUPE</strong></p></footer>

</main>


    </body>
</html>