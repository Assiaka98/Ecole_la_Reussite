

<?php
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
    }
 }

 



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    
    <title>Document</title>
</head>
<body >
 

<div class="general">
    <nav class="nav" >
        <img src="logo.jpg" alt="Trulli" ><br>
        <h1>Ecole de la Reussite</h1>
    </nav>
    <div class="titre"><h4>connexion</h4></div><br><br><br>
<div class="container">
    
    <form method="POST" action=""  >
       
        
        <label for="pseudo " >Email</label> <br>
        <input type="text" name="email" id="email" required placeholder="saisir votre mail" class="case"><br><br>
        <label for="nom ">Mot de pass</label><br>
        <input type="password" name="Telephone" id="pass" required placeholder="Mot de pass" class="case"><br><br>
        <button type="submit" id="envoyer" onclick="afficher()" class="btn" >CONNEXION</button>
   
    </form>

</div>
</div>
<script defer type="text/javascript" src="formulaire.js"></script> 

    </body>
</html>