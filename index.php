<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZZ</title>
    <link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>
<body>
         <div class="header">
                <div class="logo"></dive>
                <div class="header-text">Plaisir de jouer</div>
        </div>
        <div class="content">
            <?php 
            session_start();
                require_once("./traitement/fonction.php");

                if(isset($_GET['lien'])){
                    switch($_GET['lien']){

                        case 'inscription':
                            require_once("./vues/inscription.php");   
                     break;

                        case 'accueil':
                               require_once("./vues/admin.php");   
                        break;
                        case 'jeux':
                                require_once("./vues/jeux.php");   
                        break;
                    }
                }else{
                    if(isset($_GET['statut']) && $_GET['statut']==="logout"){
                        deconnexion();
                    }
                    require_once("./vues/connexion.php");
                }
           
            ?>

        </div>
</body>
</html>