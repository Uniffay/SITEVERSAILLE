<!DOCTYPE html>
<html>
    <body>
      <?php include_once('includes/header.php');
            include_once('includes/navbar.php')?>
        <!--Milieu de la page contenant deux parties-->
        <div class="row">
            <!--Partie gauche du milieu de la page-->
            <div class="main">
                <h1><?php echo presentation_chateau?></h1>
				<p>
				<?php echo contenu1_chateau ?>
				<br>
				<?php echo contenu2_chateau ?>
				<br>
				<?php echo contenu3_chateau ?>
				<br>
				<?php echo contenu4_chateau ?>
        <br>
        <br>
        </p>
            <h1><?php echo anecdotes ?></h1>
        <br>
        <h2><?php echo intro?></h2>
        <br>
        <p>
        <?php echo contenu5_chateau?>
        <br>
        <?php echo contenu6_chateau?>
        </p>
        <br>
        <br>
        <h2><?php echo intro2?></h2>
        <br>
        <p>
        <?php echo contenu7_chateau?>
        <br>
        <?php echo contenu8_chateau?>
        </p>

            </div>
            <!--Fin de la partie gauche du milieu de la page-->
        </div>
        <!--Fin du milieu de la page-->
        <?php  include_once('includes/footer.php')?>
    </body>
</html>
