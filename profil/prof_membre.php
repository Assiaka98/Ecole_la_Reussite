<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <script src="p.js"></script>

    <title>Document</title>
</head>
<body>
    <header>
        <div class="header">
            <nav>
           
                <ul class="menu">
                    <img src="../inclusion/REUSSITE.jpg" alt="image simplon" class="z">
                    <li class="contact"><a href="">Contact</a></li>
                    <li><?=$btn1?></li>
                    <li><?=$btn2?></li>
                    <li><?=$btn3?></li>
                    <li><?=$btn4?></li>
                    <li><?=$btn5?></li>
                    <li><?=$btn6?></li>
                    <li class="contact" ><a href="../page_accueuil.php" class="active">Accueil</a></li>
                    
                </ul>
            </nav>
        </div>
        
    </header>
    <main>
        <div class="description">
            <div>
            <h1><?=$bienvenue?></h1>
            <div class="lieu">
                    <img src="ELEVE2.jpg" width="100%" height="200px" alt="" id="slide">
                 
     </div>
            
    </main>
    <script defer type="text/javascript" src="inclusion/formulaire.js"></script> 
    
</body>
<footer><p>© Copyright Simplon. Designed and Developed by <strong>UBUNTU_GROUPE</strong></p></footer>
</html>

<style>.li{
        width: 100px;
        height: 30px;
        color:rgb(22, 22, 22);
        text-decoration: none;
        border-radius: 5px;
        background: #f5f6f8;
        padding-top: 5px;
        cursor: pointer;
        display: flex;
        font-size: 12px;
        justify-content: center;
        
       
    }
    .li:hover{box-shadow: 5px 6px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
        font-size: 17px;
        color:blue;
        background: #04baf6;
    }
    .contact{box-shadow: 5px 6px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
        color:rgb(22, 22, 22);
        text-decoration: none;
        border-radius: 5px;
        background: #f5f6f8;
        padding-top: 5px;
        cursor: pointer;
        display: flex;
        font-size: 15px;
        justify-content: center;
        width: 90px;
        height: 15px;
        margin-top: 36px;
    }
    
    *{
    margin: 0px;
    padding: 0px;
}
.active
{width: auto;
    height: auto;
    
    color: rgb(238, 16, 16);
}
.header{
    background-color:  #5A87BC;
    height: 100px;
    font-weight: bold;
    position: fixed;
    width: 100%;
    
}

nav ul li{
    list-style-type: none;
    display: inline-block;
    margin-top: 25px;
    margin-right: 25px;
}
.z{
    border-radius: 60px;
    margin: 25px;
    width: 75px;
    height: 75px;
    margin-top: 15px;
}
.menu li{
    float: right;
    padding: 15px;
}   

.B{
    margin-left: 10px ;
}
.menu li a{
    text-decoration: none;
}
h1{
    color: #5A87BC;
    text-align: center;
}
.tex{
    color: black;
    font-size: 31px;
    margin: 50px 120px;
    text-align: justify;
}
img{
    width:100%;
    height: 659px; 
    border-radius: 5px;
}
.a{
    
    display: flex;  
}
h6{
    color: white;
    font-size: 18px;
}
p{
    color: white;
    font-size: 22px;

}
main{
    width: 100%;
   
}
footer{
    background-color: black;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    bottom: 0;
}
body{
    
    margin: 0;
    padding: 0;
}
.description{
    display: flex;
    justify-content: center;
}</style>