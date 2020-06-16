<!DOCTYPE html>
<html>
  <?php include_once('includes/header.php') ?>
  <link rel="stylesheet" href="galerie.css" media="screen" type="text/css" />
  <body>
  <?php include_once('includes/navbar.php')?>
            <!--Partie gauche du milieu de la page-->
            <main>
              <h1><?php echo Chateau_galerie ?></h1>
              <div class='caroussel_diapo'>
              <input checked id="carou_un" name="rotation" type="radio">
              <label for="carou_un"></label>
              <input id="carou_deux" name="rotation" type="radio">
              <label for="carou_deux"></label>
              <input id="carou_trois" name="rotation" type="radio">
              <label for="carou_trois"></label>
              <input id="carou_quatre" name="rotation" type="radio">
              <label for="carou_quatre"></label>
              <input id="carou_cinq" name="rotation" type="radio">
              <label for="carou_cinq"></label>
              <input id="carou_six" name="rotation" type="radio">
              <label for="carou_six"></label>
              <input id="carou_sept" name="rotation" type="radio">
              <label for="carou_sept"></label>
              <div class="contenu_carou">
              <div class="caroussel">
              <img src="Images/Versaille.jpg" alt>
              <img src="Images/Versaille2.jpg" alt>
              <img src="Images/Versaille3.jpg" alt>
              <img src="Images/Chateau.jpg" alt>
              <img src="Images/Versaille4.jpg" alt>
              <img src="Images/Versaille5.jpg" alt>
              <img src="Images/Versaille6.jpg" alt>
              </div>
              </div>
              </div>
              <h1><?php echo Jardins_galerie ?></h1>
              
            </main>

  <?php include_once('includes/footer.php') ?>
  </body>
  </html>
