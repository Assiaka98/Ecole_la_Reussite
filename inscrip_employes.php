 <?php
include('inclusion/BD.inc.php');
$contenu="";

  // Vérifier si le formulaire est soumis 
  @$passeword = $_POST['passeword'];
    @$nom = $_POST['nom']; 
     @$prenom = $_POST['prenom']; 
     @$numero = $_POST['numero'];
      @$email = $_POST['email'];
      @$adresse = $_POST['adresse'];
      @$profession = $_POST['profession'];
      @$nationalite = $_POST['nationalite'];
      @$date_naissance = $_POST['date_naissance'];
      @$lieu_naissance = $_POST['lieu_naissance'];
      @$date_soumission = $_POST['date_soumission'];
      @$sexe = $_POST['sexe'];
      @$valider = $_POST['valider'];
      @$message = $_POST['message']; 
  
   
     if(isset($valider)){
       if(empty($passeword)) $message="<li>mot de passe invalide!</li>";
        if(empty($nom)) $message="<li>Nom invalide!</li>";
        if(empty($prenom)) $message.="<li>Prénom invalide!</li>";
        if(empty($numero)) $message.="<li>numero invalide!</li>";
        if(empty($email)) $message.="<li>email invalide!</li>";
        if(empty($adresse)) $message.="<li>adresse invalide!</li>";
        if(empty($profession)) $message.="<li>profession invalide!</li>";
        if(empty($nationalite)) $message.="<li>Nationalité invalide!</li>";
        if(empty($date_naissance)) $message.="<li>Date de naissance invalide!</li>";
        if(empty($lieu_naissance)) $message.="<li>lieu de naissance invalide!</li>";
         if(empty($date_soumission)) $message="<li>Date de soumission invalide!</li>";
          if(empty($sexe)) $message="<li>sexe invalide!</li>";
        if(empty($message))
        {
             include("co.php");  
               
            if(!empty($_POST)){ 
                 $ins=$pdo->prepare("INSERT INTO employe(passeword,nom,prenom,numero,email,adresse,profession,nationalite,date_naissance,lieu_naissance,date_soumission,sexe) 
                 VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
                $ins->execute(array($passeword,$nom,$prenom,$numero,$email,$adresse,$profession,$nationalite,$date_naissance,$lieu_naissance,$date_soumission,$sexe));
               ; }}
               } 

                  if($_POST)
    {
        $verif_caractere = preg_match('#^[a-zA-Z0-9.-]+$#', $_POST['email']);/* preg_match fonction qui permet de verifier les caracteres */
        if(!$verif_caractere && (strlen($_POST['email']) < 3 || strlen($_POST['email']) > 20) ) 
        {
           $contenu .= "Veuillez saisir un mail correcte S.V.P";
        }
        else
            {
                $ins = executeRequete("SELECT * FROM employe WHERE email = '$_POST[email]'");
                if($ins->rowCount()!= 0)
                {
                    $contenu .= "Vous avez deja un compte";
                    echo "$contenu";
                }
                else
                {
                    foreach($_POST as $indice => $valeur)
                    {
                        $_POST[$indice] = htmlEntities(addSlashes($valeur));
                    }
                    executeRequete("INSERT INTO employe (passeword,nom,prenom,numero,email,adresse,profession,nationalite,date_naissance,lieu_naissance,date_soumission,sexe) 
                    VALUES ('$_POST[passeword]','$_POST[nom]','$_POST[prenom]','$_POST[numero]', '$_POST[email]', '$_POST[adresse]', 
                     '$_POST[profession]', '$_POST[nationalite]', '$_POST[date_naissance]', '$_POST[lieu_naissance]', '$_POST[date_soumission]','$_POST[sexe]')");
                    $contenu .= "Inscription reussie";
                   
                    echo 'Vous êtes inscrit . <a href=""></a>';
                 
                    echo "$contenu";
                }
            }
     }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="inclusion/CSS/stylo.css">
   
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
    

    <div class="container">
 
    <div class="description">
            
            <h1>CONNEXION EMPLOYÉ</h1><br>
            
            </div>

       <form class="box" id="myForm" method="POST" action="">

<div> <label for="PASSEWORD"><h4>PASSEWORD</h4></label>
<input type="text" placeholder="passeword" id="passeword" name="passeword" ></div>
<span id="error"></span>
<div> <label for="NOM"><h4>NOM</h4></label>
<input type="text" placeholder="nom" id="nom" name="nom" ></div>
<span id="error1"></span>
<div> <label for="PRENOM"><h4>PRENOM</h4></label>
<input type="text" placeholder="entrer votre prenom" id="prenom" name="prenom" ></div>
<span id="error2"></span>
<div> <label for="TELEPHONE"><h4>NUMERO</h4></label>
<input type="number" placeholder="telephone" id="telephone" name="numero" ></div>
<span id="error3"></span>
<div> <label for="EMAIL"><h4>EMAIL</h4></label>
<input type="email" placeholder="email" id="email" name="email" ></div>
<span id="error4"></span>
<div> <label for="ADRESSE"><h4>ADRESSE</h4></label>
<input type="text" placeholder="adresse" id="adresse" name="adresse" ></div>
<span id="error5"></span>
<div> <label for="PROFESSION"><h4>PROFESSION</h4></label>
<input type="text" placeholder="profession" id="profession" name="profession" ></div>
<span id="error6"></span>
<div> <label for="NATIONALITÉ"><h4>NATIONALITÉ</h4></label>
<input type="text" placeholder="Nationalité" id="nationalité" name="nationalite"></div>
<span id="error7"></span>
<div> <label for="DATE DE NAISSANCE"><h4>DATE DE NAISSANCE</h4></label>
<input type="date" placeholder="date" id="date" name="date_naissance" ></div>
<span id="error8"></span>
<div> <label for="lieu de naissance"><h4>LIEU DE NAISSANCE</h4></label>
<input type="text" placeholder="lieu de naissance" id="lieu_de_naissance" name="lieu_naissance" ></div>
<span id="error9"></span>
<div> <label for="date_de_soumission"><h4>DATE DE SOUMISSION</h4></label>
<input type="date" placeholder="date_de_soumission" id="date_de_soumission" name="date_soumission" ></div>
<span id="error10"></span>
<div>
  <label for="sexe"><h4>Sexe</h4></label>
 <input type="text" name="sexe" id="sexe"></div>
 <span id="error11"></span>
<div class="bout">
<button type="submit" name="valider" value="s'inscrire" >Envoyer</button></div>
</div>

</form>
<?php if(!empty($message)){ ?>
        <div id="message"><?php echo $message ?></div>
        <?php } ?>
</main>
</body>
</html>