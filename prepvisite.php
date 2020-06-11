<!DOCTYPE html>
<html>
  <?php include_once('includes/header.php') ?>
  <body>
  <?php include_once('includes/navbar.php')?>
        <!--Milieu de la page contenant deux parties-->
        <div>
            <!--Partie gauche du milieu de la page-->
            <div class="row">
              <div class="main">
                  <h1 id="horaire"><?php echo horaires_prepVisite ?></h1>
                  <p>
                    <h2><?php echo horaires_chateau ?></h2>
                    <br>
                    <?php echo horaires_chateau2 ?>
                    <br>
                    <?php echo horaires_chateau3 ?>
                  </p>
                  <p>
                    <h2><?php echo horaires_trianon ?></h2>
                    <br>
                    <?php echo horaires_trianon2 ?>
                    <br>
                    <?php echo horaires_trianon3 ?>
                  </p>
                  <p>
                    <h2><?php echo horaires_jardins?></h2>
                    <br>
                    <?php echo horaires_jardins2 ?>
                    <br>
                    <?php echo horaires_jardins3 ?>
                  </p>
                  <p>
                    <h2><?php echo horaires_parc?></h2>
                    <br>
                    <?php echo horaires_parc2 ?>
                    <br>
                    <?php echo horaires_parc3 ?>
                  </p>
                  <p>
                    <h2><?php echo horaires_marly?></h2>
                    <br>
                    <?php echo horaires_marly2 ?>
                    <br>
                    <?php echo horaires_marly3 ?>
                  </p>
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
          </div>
            <!--Fin de la partie droite du milieu de la page-->
        </div>
        <!--Fin du milieu de la page-->
        <?php include_once('includes/footer.php') ?>
    </body>
</html>
