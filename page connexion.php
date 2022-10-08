

<?php
<<<<<<< HEAD
/*LIAISON AVEC LE FORMULAIRE A LA BASE DE DONNEE*/
$LINKER = new PDO('mysql:host=localhost;dbname=Ecole_de_la_Reussite','mamy','mamysy', array
(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

//$result = new PDO('mysql:host=localhost;dbname=ECOLS','papa','260594', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));



//var_dump($_POST['email'],$_POST['Telephone']);die;
if(isset($_POST['email'],$_POST['Telephone']))
{

    $email = $_POST['email'];
    $pass = $_POST['Telephone'];


    

    $sql = "SELECT * FROM Eleve where Email='$email'";
    //$result = $LINKER->prepare($sql);
    $result=$LINKER->query($sql);
   
    if($result->rowCount() > 0)
    {
        $data = $result->fetchAll()[0];
        if ($data["Telephone"] === $pass) {
            echo "CONNECTER";
            //var_dump($data) ;die;
            header("location: inscrip_employes.php");
           
        } else {
            echo "mot de passe incorrect";
            header("location: page connexion.php");
        }
    }
    else{
        echo "EMAIL INCORRECT";
=======
session_start();
/*LIAISON AVEC LE FORMULAIRE A LA BASE DE DONNEE*/
require_once('inclusion/BD.inc.php');
//$result = new PDO('mysql:host=localhost;dbname=ECOLS','papa','260594', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

$erreur="";

//var_dump($_POST['email'],$_POST['Telephone']);die;
if(isset($_POST['email'],$_POST['passeword']))
{

    $email = $_POST['email'];
    $pass = $_POST['passeword'];

    $_SESSION['email']= $email;
    $_SESSION['pass']= $pass;   

    $sql = "SELECT * FROM employe where email='$email'";
    //$result = $LINKER->prepare($sql);
    $result=$pdo->query($sql);
   
    if($result->rowCount() > 0)
        {
             $data = $result->fetchAll()[0];
                 if ($data["passeword"] === $pass) {
                       echo "CONNECTER";
                          //var_dump($data) ;die;
                        $_SESSION['autoriser']='oui';
                        header("location:profil.php");
                        
        }        else {
                        $erreur="mauvaise login ou mt de pass";
                        echo "mot de passe incorrect";
                        header("location:page_accueil.php");
                    }
    }
    else{
        $erreur="mauvaise login ou mt de pass";
>>>>>>> 7fec807d1b37bd32d2b039fb4b869dd9593b45f4
    }
 }

 



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="connexion.css">
=======
    <link rel="stylesheet" href="inclusion/CSS/connexion.css">
>>>>>>> 7fec807d1b37bd32d2b039fb4b869dd9593b45f4
    
    <title>Document</title>
</head>
<body >
 

<div class="general">
    <nav class="nav" >
<<<<<<< HEAD
        <img src="logo.jpg" alt="Trulli" ><br>
=======
        <img src="inclusion/logo.jpg" alt="Trulli" ><br>
>>>>>>> 7fec807d1b37bd32d2b039fb4b869dd9593b45f4
        <h1>Ecole de la Reussite</h1>
    </nav>
    <div class="titre"><h4>connexion</h4></div><br><br><br>
<div class="container">
    
    <form method="POST" action=""  >
       
        
        <label for="pseudo " >Email</label> <br>
        <input type="text" name="email" id="email" required placeholder="saisir votre mail" class="case"><br><br>
        <label for="nom ">Mot de pass</label><br>
<<<<<<< HEAD
        <input type="password" name="Telephone" id="pass" required placeholder="Mot de pass" class="case"><br><br>
=======
        <input type="password" name="passeword" id="pass" required placeholder="Mot de pass" class="case"><br><br>
>>>>>>> 7fec807d1b37bd32d2b039fb4b869dd9593b45f4
        <button type="submit" id="envoyer" onclick="afficher()" class="btn" >CONNEXION</button>
   
    </form>

</div>
</div>
<<<<<<< HEAD
<script defer type="text/javascript" src="formulaire.js"></script> 
=======
<script defer type="text/javascript" src="inclusion/formulaire.js"></script> 
>>>>>>> 7fec807d1b37bd32d2b039fb4b869dd9593b45f4

    </body>
</html>