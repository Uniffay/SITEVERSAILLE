<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    include('includes/connexion.php');

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM user WHERE
              login = '".$username."' and password = '".$password."' ";
        $reponse = $bdd->query($requete);
        $reponse->setFetchMode(PDO::FETCH_ASSOC);
        $ligne =  $reponse->fetch();
        $count = $ligne['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
            $sql = "SELECT * FROM user WHERE
            login = '".$username."' and password = '".$password."'";
            $rep = $bdd->query($sql);
            $rep->setFetchMode(PDO::FETCH_ASSOC);
            $ligne =  $rep->fetch();
            $_SESSION['usertype'] = $ligne['type_utilisateur'];
            $_SESSION['username'] = $username;
            header('Location: index.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($bdd); // fermer la connexion
?>
