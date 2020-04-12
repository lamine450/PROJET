<?php
define("EMAIL","admin@gmail.com");
define("PASSWORD","admin");
    $email='';
    $motdepasse='';

    if(!empty($_POST)) 
    {
    
      if(!empty($_POST['email']) && !empty($_POST['password'])) 
      {
        $email=$_POST['email'];
        $mdp=$_POST['password'];
        
        if($_POST['email'] != EMAIL) 
        {
          $errorMessage = 'Mauvais email ';
        }
         elseif($_POST['password'] == PASSWORD) 
        {  
          $errorMessage = 'Mauvais password !';
        }
        else{
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['password']=$mdp;
          
        }
    }else
        {
          $errorMessage = "mot de passe incorrect".;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/authentification.css">
    <title>Connexion Admin</title>
</head>
<body>
    <div class="plaisir">
          <p class="imageH" ></p>
          <h1 class="text jouer">Le plaisir de jouer</h1>
    </div>

    <div class="background fond">
      <div class="position">
      
          <div class="loginform"><p class="login form">Login Form</p><span class="close">x</span></div> 

            <div class="formulaire">
              <form action="" name="admin" method="post">
                <div class="div2">
                    <input class="inputF" placeholder="Utilisateur" type="email"  name="email">
                    <img src="Images\Icônes\ic-login.png" alt="">
                </div>
                <div class="div2"> 
                    <input class="inputF" placeholder="Mot de passe" type="password" name="password">
                    <img src="Images\Icônes\ic-password.png" alt="">
                </div>
            
                <div class="div3">
                  <input  class="inputS" type="submit" class="submit" name="submit" value="Connexion">
                  <p class="inscrire"><a href="inscri">S'inscrire pour jouer?</a></p>
                </div>
              </form>
            </div> 
      </div>
    </div>

</body>
</html>
