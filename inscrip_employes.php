<?php
/*LIAISON AVEC LE FORMULAIRE A LA BASE DE DONNEE*/
$mon_inscription= new PDO('msql:host=localhost;dbname=Ecole_de_la_Reussite','mamy','mamysy', array
(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

/*ENVOYER LES DONNEES DANS LA BASE DE DONNEE*/
$recup = $mon_inscription->exec("INSERT INTO employe(nom,prenom,numero,email,adresse,profession,nationalité,date_naissance,lieu_naissance,date_soumission,sexe) 
VALUES('$_POST[nom]',$_POST[prenom]','$_POST[numero]',$_POST[email]',$_POST[adresse]','$_POST[profession]','$_POST[nationalité]','$_POST[date_naissance]','$_POST[lieu_naissance]','$_POST[date_soumission]','$_POST[sexe]')");
  echo  '<div style="color: green; padding: 5px;"> L\'INSCRIPTION VALIDÉ AVEC SUCCÉS</div>' .'<br>';
  


  $recup = $mon_inscription->query("SELECT * FROM employe");

  echo '<table border= 2px> <tr  style="background:#0096D7; color:white; ">';

  for($i=0; $i < $recup->columnCount(); $i++)



  {
    $Nom_colonne = $recup->getColumnMeta($i);
    echo '<th>' .$Nom_colonne['name'].'</th>';
  }

  echo "</tr>";


  while($ligne = $recup->fetch(PDO::FETCH_ASSOC))

  {
    echo '<tr>';
    foreach($ligne as $indice => $information)
    {
      echo '<td>' .$information . '</td>';
    }
    /*$action = 'Action';
    echo '<td>' . $action . '</td>';
    echo '<td>' . $action . '</td>';*/
    echo '</tr>';
  }


echo '</table>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inclusion/CSS/style.css">
    <script src="ins.js"></script>
    
    <title>INSCRIPTION EMPLOYE</title>
</head>
<body>
    <div class="container">
   <div class="a"> <h1>INSCRIPTION EMPLOYE</h1></div>
     
       <form class="box" id="myForm" method="post" action="">

<div> <label for="NOM"><h4>NOM</h4></label>
<input type="text" placeholder="nom" id="nom" name="nom"></div>
<span id="error"></span>
<div> <label for="PRENOM"><h4>PRENOM</h4></label>
<input type="text" placeholder="entrer votre prenom" id="prenom" name="prenom"></div>
<span id="error1"></span>
<div> <label for="TELEPHONE"><h4>NUMERO</h4></label>
<input type="nombre" placeholder="telephone" id="telephone" name="numero"></div>
<span id="error2"></span>
<div> <label for="EMAIL"><h4>EMAIL</h4></label>
<input type="email" placeholder="email" id="email" name="email"></div>
<span id="error3"></span>
<div> <label for="ADRESSE"><h4>ADRESSE</h4></label>
<input type="text" placeholder="adresse" id="adresse" name="adresse"></div>
<span id="error4"></span>
<div> <label for="PROFESSION"><h4>PROFESSION</h4></label>
<input type="text" placeholder="profession" id="profession" name="profession"></div>
<span id="error5"></span>
<div> <label for="NATIONALITÉ"><h4>NATIONALITÉ</h4></label>
<input type="text" placeholder="Nationalité" id="nationalité" name="nationalité"></div>
<span id="error6"></span>
<div> <label for="DATE DE NAISSANCE"><h4>DATE DE NAISSANCE</h4></label>
<input type="date" placeholder="date" id="date" name="date_naissance"></div>
<span id="error8"></span>
<div> <label for="lieu de naissance"><h4>LIEU DE NAISSANCE</h4></label>
<input type="text" placeholder="lieu de naissance" id="lieu_de_naissance" name="lieu_naissance"></div>
<span id="error9"></span>
<div> <label for="date_de_soumission"><h4>DATE DE SOUMISSION</h4></label>
<input type="date" placeholder="date_de_soumission" id="date_de_soumission" name="date_soumission"></div>
<span id="error8"></span>
<div> <h4>Sexe: </h4>
        <input type="radio" name="sexe" id="sexe" >
        <label for="sexe">Masculin</label>
        <input type="radio" name="sexe" id="sexe" >
        <label for="sexe">Feminin</label><br>
</label></div>

<div class="bout">
<button type="submit" onclick="envoyer()">Envoyer</button></div>
</div>

</form>
</body>
</html>