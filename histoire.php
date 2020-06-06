<!DOCTYPE html>
<html>
  <?php include_once('includes/header.php') ?>
  <body>
  <?php include_once('includes/navbar.php')?>
        <!--Milieu de la page contenant deux parties-->
        <div class="row">
            <!--Partie gauche du milieu de la page-->
            <div class="main">
              <h2><?php echo frise_histoire?></h2>
              <?phpif($_GET["lang"]){
                  echo "<img src=\"$http_image\"/>\n";
              }
              else{
                  echo "<img src=\"uploads/$username/noprofile.png\"/>\n";
              } 
              ?>
              <img class = "frise" src="Images/frise.png" alt="Frise"/>

            </div>
            <!--Fin de la partie gauche du milieu de la page-->
            <!--Partie gauche du milieu de la page-->
            <div class="side">
            </div>
            <!--Fin de la partie droite du milieu de la page-->
        </div>
        <!--Fin du milieu de la page-->
        <?php include_once('includes/footer.php') ?>
    </body>
</html>
