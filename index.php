<!DOCTYPE html>
<html>
  <?php include_once('includes/header.php') ?>
  <body>
  <?php include_once('includes/navbar.php')?>
        <!--Milieu de la page contenant deux parties-->
        <div class="row">
            <!--Partie gauche du milieu de la page-->
            <div class="main">
                <h1 style="text-align: center">Bienvenue à Versailles</h1>
                <div class="slide">
                  <div class="image">

                  </div>
                </div>
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
