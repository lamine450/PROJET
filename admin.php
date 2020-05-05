<link rel="stylesheet" type="text/css" href="./public/css/styleadmin.css">

<div class="container">
                <div class="container-header">
                        <div class="title">CRÉER ET PARAMÉRTER VOS QUIZZ </div>
                        <div class="deconnexion">
                                <div class="title-1"><a href="index.php?statut=logout">Deconnexion</a></div>
                                
                        </div>
                </div>
                        <div class="liste-1">
                                <div class="container-user">
                                <img class="img-user"src="./public/Images/img5.jpg"/>
                                <div class="prenom">LAMINE</div>
                                <div class="nom">CAMARA</div>
                        </div>
                                <div class="menu">
                                        <a href="index.php?lien=admin"><div class="sousmenu iclist active">Liste Questions</div></a>
                                        <a href="index.php?lien=admin"><div class="sousmenu icajout">Créer Admin</div></a>
                                        <a href="index.php?lien=admin"><div class="sousmenu iclist ">Liste joueurs</div></a>
                                        <a href="index.php?lien=admin"><div class="sousmenu icajout">Créer Questions</div></a>
                                </div>
                <div class="container-liste"> 
                        <?php

                                require_once("./vues/joueurs.php");

                        ?>
                </div>
               
</div>

Admin
<?php
is_connect();

        echo $_SESSION['user']['nom'];
        echo $_SESSION['user']['prenom'];
        echo $_SESSION['user']['login'];
        echo $_SESSION['user']['profil']; 
        echo $_SESSION['user']['photo'];
?>
<br>
<a href="index.php?lien=inscription.php"><button>Deconnexion</button></a>

