<?php
include("inclusion/BD.inc.php");
$message="";

    if(isset($_POST['email'],$_POST['passeword']))
    {

$user = trim($_POST['email']);
$pass = trim($_POST['passeword']);
$profession = trim($_POST['profession']);
try{
$sth = $pdo->prepare(" SELECT * FROM employe WHERE email = '".$user."' AND passeword = '".$pass."' AND profession = '".$profession."'"); 
$sth->execute();
$res = $sth->fetchAll(PDO::FETCH_ASSOC); 
if(count($res) == 0){        
  $message="Vous n'êtes pas dans la base de données, inscrivez-vous";
    }
    else{

        if($profession=='professeur'){
            header("location:profil/professeur.php");
            

        }
        else if($profession=='secretaire'){
            header("location:profil/secretaire.php");
        }
    }


}
catch(PDOException $e){ echo ("Erreur:".$e->getMessage());}
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
            
            <h1>CONNEXION EMPLOYÉ</h1><br>
            
            </div>
            <div class="container">
    <form method="POST" action=""  >
       
        
        <label for="pseudo ">Email</label> <br>
        <input type="text" name="email" id="email" required placeholder="saisir votre mail" class="case"><br><br>
        <label for="nom ">Mot de pass</label><br>
        <input type="password" name="passeword" id="pass" required placeholder="Mot de pass" class="case"><br><br>
        <label for="nom ">profession</label><br>
        <input type="text" name="profession" id="prof" required placeholder="profession" class="case"><br><br>
        <button type="submit" id="envoyer" onclick="afficher()" class="btn" >CONNEXION</button><br><br><span><?=$message?></span>
   
    </form> 
 </div>


</div> 
<script>function afficher(){
    /*        Récupération des données         */
    
   
    if(document.getElementById('email').value == "") {
      alert("Veuillez entrer votre email!");
      document.getElementById('email').focus();
      return false; }

     

     

    if(document.getElementById('email').value.indexOf('@') == -1) {
      alert("@ est obligatoire pour une adresse électronique!");
      document.getElementById('email').focus();
      return false;
    }

    if(document.getElementById('email').value.indexOf('.') == -1) {
      alert("un(.) est obligatoire pour une adresse électronique!");
      document.getElementById('email').focus();
      return false;
    }
   

   

                        if(document.getElementById('profession').value == "") {
                            alert("Veuillez entrer votre profession!");
                            document.getElementById('profession').focus();
                            return false; }
                            if(document.getElementById('pass').value == "") {
                              alert("Veuillez entrer votre mot de pass!");
                              document.getElementById('pass').focus();
                              return false; }
    

   

      }</script> 
<footer><p>© Copyright Simplon. Designed and Developed by <strong>UBUNTU_GROUPE</strong></p></footer>

</main>


    </body>
</html>











































    

    




















  


