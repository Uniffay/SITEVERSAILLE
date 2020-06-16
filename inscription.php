<?php
session_start();
 ?>

 <?php
   if (isset($_POST['submit']) && $_POST['submit'] == 'inscription') {
     include_once('includes/connexion.php');
     $login = htmlspecialchars($_POST['login']);
     $mdp = htmlspecialchars($_POST['mdp']);
     $nom = htmlspecialchars($_POST['nom']);
     $prenom = htmlspecialchars($_POST['prenom']);
     $email = htmlspecialchars($_POST['email']);

     try {
       $addmembre=$dbh->exec("INSERT INTO membre VALUES ('$nom','$prenom','$email')");
       $getid=$dbh->query("SELECT id FROM membre WHERE nom = $nom");
       $idligne = $getid->fetch();
       $id = $idligne['id']+1;
       $adduser=$dbh->exec("INSERT INTO user VALUES('$login','$mdp','$id')");
     }
     catch (Exception $e) {
       echo 'Connexion a la base de données impossible : ',  $e->getMessage(), "\n";
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

            <form action="inscription.php" method="POST">
                <h1>Inscription</h1>
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrez le nom d'utilisateur" name="login"/>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez le mot de passe" name="mdp"/>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrez votre nom" name="nom"/>

                <label><b>Prénom</b></label>
                <input type="text" placeholder="Entrez votre prenom" name="prenom"/>

                <label><b>Email</b></label>
                <input type="text" placeholder="Entrez votre email" name="email"/>

                <input type="submit" id="submit" name="submit" value='inscription'/>
            </form>
        </div>
        <?php include_once('includes/footer.php') ?>
    </body>
</html>
