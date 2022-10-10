<?php
require_once("inclusion/BD.inc.php");
if($_POST){ 
$recup = $pdo->query("INSERT INTO eleve(
Nom,
Prenom,
Adresse,
Téléphone,
Date_de_naissance,
Lieu_de_naissance,
Nationalite,
SEXE,
nomT,
PrenomT,
TelephoneT,
EmailT,
Montant,
DateInscription,
Niveau,
Classe)
VALUES (
'$_POST[nom]',
'$_POST[prenom]',
'$_POST[adresse]',
'$_POST[telephone]',
'$_POST[DateDeNaissance]',
'$_POST[LieuDeNaissance]',
'$_POST[Nationalité]',
'$_POST[sexe]',
'$_POST[nom_T]',
'$_POST[prenom_T]',
'$_POST[telephoneTuteur]',
'$_POST[email]',
'$_POST[montant]',
'$_POST[DateInscription]',
'$_POST[niveau]',

'$_POST[classe]')
");
echo "<br><br><center> <h1> inscription validé <br </h1> </center>";
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
        <h2>FORMULAIRE D'INSCRIPTION</h2>
            <form  class="formulaire" method="POST" action=""  >
            <div class="eleve">
                <h3>L'élève</h3>
                <label for="prenom " >Prenom</label> <br>
                <input type="text" name="prenom" id="prenom" required placeholder="Prenom" class="case"><br><br>
                <label for="nom ">Nom</label><br>
                <input type="text" name="nom" id="nom" required placeholder="Nom" class="case"><br><br>                
                <label for="telephone">Telephone</label><br>
                <input type="text" name="telephone" class="case"><br><br>
                <label for="adresse">Adresse</label><br>
                <input type="text" name="adresse" id="adresse" required placeholder="adresse" class="case"><br><br>
                <label for="date">Date de naissance</label><br>
                <input type="date" name="DateDeNaissance" required placeholder="26-05-1998" class="case">
                <label for="lieu">Lieu de naissance</label><br>
                <input type="text" name="LieuDeNaissance" id="dateN" required placeholder="Kebemer" class="case"><br><br>
                <label for="nationalite">Nationalité</label><br>
                <input type="text" name="Nationalité" id="nationalite" required placeholder="nationalite" class="case"><br><br><br>
                <span >Sexe: </span>
                <select classe="cas" name="sexe" id="">
                    <option ></option>
                <option value="H" > Masculin </option>
                <option value="F"> Féminin </option>
            </select><br/><br/>

            </div> 
            <div class="tuteur">
                <h3>Tuteur/Tutrice</h3>
                <label for="tuteur">Nom </label><br>                             
                <input type="text" name="nom_T" id="tuteur" required placeholder="Tuteur" class="case"><br><br>
                <label for="tuteur">prénom </label><br>                             
                <input type="text" name="prenom_T" id="tuteur" required placeholder="Tuteur" class="case"><br><br>
                <label for="telephoneTuteur">Telephone</label><br>
                <input type="tel" name="telephoneTuteur" id="_umerotuteur" required placeholder="Numerotuteur" class="case"><br><br>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" required placeholder="mail@serveur.com" class="case"><br><br>
                <span id="resultat"></span>
            </div>
            <div class="inscription">
                <h3>Inscription</h3>
                <label for="cfa">Montant en fCFA</label><br>
                <input type="text" name="montant"  required placeholder="franc CFA" class="case"><br><br>
                <label for="nationalite">date</label><br>
                <input type="date" name="DateInscription" id="inscrit le..." required placeholder="date" class="case"><br><br>
               <label for="niveau">Niveau</label><br>
                <select name="niveau" class="cas">
                    <option value=""></option>
                   <button id="togg1" onclick="function togg()"> <option value="Primere">Primère </option></button>
                    <option value="Secondaire"><button id="togg2" onclick="function togg()">Secondaire </button> </option>
                </select><br><br>
                <div id="d1">
                <label for="classe">classe</label><br>
                
                <select name="classe">
                    <option value=""></option>
                    <option value="CI">CI</option>
                    <option value="CP">CP</option>
                    <option value="CE1">CE1</option>
                    <option value="CE2">CE2</option>
                    <option value="CM1">CM1</option>
                    <option value="CM2">CM2</option>
                   
                    <div id="d2">
                    <option value="CE1">sixième</option>
                    <option value="CE2">cinquième</option>
                    <option value="CM1">quatrième</option>
                    <option value="CM2">troisième</option>
                    </div>
                </select><br><br>
            </div>
                
                <input type="submit" id="envoyer" onclick="" class="" >

            </div>
            </form>
    </main>
    </body>
    <style> body{
        border: solid;
        border-color: #5A87BC;
        border-radius: 1rem;
        
    }
    
    header{
        background-color:#5A87BC;
        height: 80px;
        display: flex;
        border: solid;
        border: #5A87BC;
        border-radius:0.5rem;
    
    }
    #logo{
        width: 10%;
        height:100%;
        margin-left: 60%;
    }
    .formulaire{
        display: flex;
        gap: 5%;
        padding: 2%;
        justify-content: center;
        margin-top: 0%;
        
    }
    h2{
        border: solid;
        border-color: #5A87BC;
        border-radius: 1rem;
        width: 28%;
        margin-left: 36%;
        align-content: center;
        text-align: center;
    }
  
    .tuteur,.inscription,.eleve{
        width: 40%;
        border: solid;
        border-color: #5A87BC;
        border-radius: 1rem;
        padding: 1%;
        background:linear-gradient(rgba(255, 255, 255, 0.747),rgba(252, 249, 249, 0.452));
height: 700px;
    
    }
    .case{
        width: 95%;
        height: 5%; 
        border-radius: 5px;
    }
    .cas{
        height: 5%; 
        border-radius: 5px; 
    }
    #togg1{
color: #5A87BC;
background-color: #5A87BC;
    }
    </style>
    <script>
        let togg1 = document.getElementById("togg1");
let togg2 = document.getElementById("togg2");
let d1 = document.getElementById("d1");
let d2 = document.getElementById("d2");
togg1.addEventListener("click", () => {
  if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
  } else {
    d1.style.display = "block";
  }
})

function togg(){
  if(getComputedStyle(d2).display != "none"){
    d2.style.display = "none";
  } else {
    d2.style.display = "block";
  }
};
togg2.onclick = togg;
    </script>