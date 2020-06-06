<?php
session_start();
 ?>

 <?php
   if (isset($_POST['submit']) && $_POST['submit'] == 'LOGIN') {
     include_once('includes/connexion.php');
     $login = $_POST['login'];
     $mdp = $_POST['mdp'];



     $results=$dbh->query("SELECT login,password FROM user WHERE login = '$login' AND password = '$mdp'");

     $ligne = $results->fetch();
     $login_valide = $ligne['login'];
     $pwd_valide = $ligne['password'];

     if (!(empty($login)) && !(empty($mdp))) {

       if ($login_valide == $login && $pwd_valide == $mdp) {

         $_SESSION['login'] = $login;
         $_SESSION['pwd'] = $mdp;
         header('Location: index.php');
       }
       else {
         echo "La connexion a échoué. Nom d'utilisateur ou mot de passe incorrect.";
       }
     }
   }
 ?>

<html>
  <head>
     <meta charset="utf-8">
      <!-- importer le fichier de style -->
      <link rel="stylesheet" href="login.css" media="screen" type="text/css" />
  </head>
  <?php include_once('includes/header.php') ?>
  <body>
  <?php include_once('includes/navbar.php')?>

        <div id="container">
            <!-- zone de connexion -->

            <form action="login.php" method="POST">
                <h1>Connexion</h1>
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login"/>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp"/>

                <input type="submit" id="submit" name="submit" value='LOGIN'/>
            </form>
        </div>
        <?php include_once('includes/footer.php') ?>
    </body>
</html>
