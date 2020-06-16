<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    include('includes/connexion.php');
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $password2 = htmlspecialchars($_POST['password2']);

    if($username !== "" && $password !== "") {
        if ($password == $password2) {

          $requete = "SELECT count(*) FROM user WHERE
                login = '".$username."' and password = '".$password."' ";
          $reponse = $bdd->query($requete);
          $reponse->setFetchMode(PDO::FETCH_ASSOC);
          $ligne =  $reponse->fetch();
          $count = $ligne['count(*)'];
          if($count==0) // nom d'utilisateur et mot de passe nouveaux
          {

          try{  $sql = $bdd->exec("INSERT INTO `membre` (nom,prenom,email) values ('$nom', '$prenom', '$email')");
              $getid = $bdd->query("SELECT id FROM membre WHERE nom = '$nom'");
              $idligne = $getid->fetch();
              $id = $idligne['id'];
              $adduser = $bdd->exec("INSERT INTO `user` (login,password,id_membre) values ('$username', '$password, '$id')");
            }

          catch(Exception $e){
            die("L'inscription a échouée !".$e->getMessage());
          }
            header('Location: index.php');
          }
        else
        {
           header('Location: register.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
      }
      else
      {
        header('Location: register.php?erreur=2'); // mot de passe et mot de passe 2 non similaires
      }
    }
    else
    {
       header('Location: register.php?erreur=3'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: register.php');
}
mysqli_close($bdd); // fermer la connexion
