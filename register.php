
<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
      <!-- importer le fichier de style -->
      <?php include('includes/header.php'); ?>
      <link rel="stylesheet" href="login.css" media="screen" type="text/css" />
  </head>
    <body>
    <?php include_once('includes/navbar.php')?>
        <div id="container">
            <!-- zone de connexion -->

            <form action="verification2.php" method="POST">
                <h1>Inscription</h1>
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrez votre nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="password" required>
                <input type="password" placeholder="Confirmez votre mot de passe" name="password2" required>

                <input type="submit" id='submit' value='REGISTER' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if ($err==3) {
                      echo "<p style='color:red'>Veuillez renseigner les champs</p>";
                    }
                    elseif($err==2) {
                        echo "<p style='color:red'>Mots de passes non similaires</p>";
                      }
                    elseif ($err==1) {
                      echo "<p style='color:red'>Vous etes déjà inscrit</p>";
                    }

                }
                ?>
            </form>
        </div>
    </body>
</html>
