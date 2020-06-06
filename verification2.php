<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    include('connexion.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if($username !== "" && $password !== "") {
        if ($password == $password2) {

          $requete = "SELECT count(*) FROM Utilisateur where
                nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
          $reponse = $bdd->query($requete);
          $reponse->setFetchMode(PDO::FETCH_ASSOC);
          $ligne =  $reponse->fetch();
          $count = $ligne['count(*)'];
          if($count==0) // nom d'utilisateur et mot de passe nouveaux
          {

          try{  $sql = $bdd->prepare("INSERT into `Utilisateur` (nom_utilisateur, mot_de_passe, type_utilisateur) values (?, ?, 'visiteur')");
            $sql->execute([$username,$password]);
            }

          catch(Exception $e){
            die('ça marche po !'.$e->getMessage());
          }
            header('Location: login.php');
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
?>
