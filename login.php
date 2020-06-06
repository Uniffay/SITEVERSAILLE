
<?php
session_start ();
?>

<?php
  if (isset($_POST['submit']) && $_POST['submit'] == 'Envoyer') {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];



    $results=$dbh->query("SELECT login,password FROM user WHERE login = '$login' AND password = '$mdp'");

    $ligne = $results->fetch();
    $login_valide = $ligne['login'];
    $pwd_valide = $ligne['password'];

    if (isset($login) && isset($mdp)) {
      
      if ($login_valide == $login && $pwd_valide == $mdp) {

        $_SESSION['login'] = $login;
        $_SESSION['pwd'] = $mdp;
?>

<html>
  <?php include_once('includes/header.php') ?>
  <title>Se connecter</title>
  <body>
  <?php include_once('includes/navbar.php')?>
        <!--Milieu de la page contenant deux parties-->
        <div class="row">
            <!--Partie gauche du milieu de la page-->
            <div class="main">
              <h1>Formulaire d'authentification</h1>
              <form action="login.php" method="post">
              Login <input type="text" name="login" size="25"  /><br>
              Mot de passe <input type="password" name="mdp" size="25" /><br>
              <input type="reset" name="submit" value="Effacer" />
              <input type="submit" name="submit" value="Envoyer" />
              </form>

            </div>
            <!--Fin de la partie gauche du milieu de la page-->
            <!--Partie gauche du milieu de la page-->
            <div class="side">
              <?php include_once('includes/billeterie.php') ?>
            </div>
            <!--Fin de la partie droite du milieu de la page-->
        </div>
        <!--Fin du milieu de la page-->
        <?php include_once('includes/footer.php') ?>
    </body>
</html>
