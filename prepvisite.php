<!DOCTYPE html>
<html>
  <?php include_once('includes/header.php') ?>
  <body>
  <?php include_once('includes/navbar.php')?>
        <!--Milieu de la page contenant deux parties-->
        <div class="row">
            <!--Partie gauche du milieu de la page-->
            <div class="main">
              <h2><?php echo introVisite?></h2>

              <p>
                <?php echo contenu1_prepVisite?>
                <?php echo contenu2_prepVisite?>
            </div>
            <!--Fin de la partie gauche du milieu de la page-->
            <!--Partie gauche du milieu de la page-->
            <div class="side">
              <?php echo billeterie ?>
            </div>
            <!--Fin de la partie droite du milieu de la page-->
        </div>
        <!--Fin du milieu de la page-->
        <?php include_once('includes/footer.php') ?>
    </body>
</html>
