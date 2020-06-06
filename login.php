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
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
        <?php include_once('includes/footer.php') ?>
    </body>
</html>
