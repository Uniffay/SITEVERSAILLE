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
            <h1><?php echo date_chateau_1 ?></h1>
          <p align = "center">
          <img src="Images/Louis XIII.jpg" align = "center">
        <p><?php echo contenu5_chateau ?></p>
        <br>
            <h1><?php echo date_chateau_2 ?></h1>
          <p align = "center">
          <img src="Images/Louis XIV.jpg" align = "center">
        <p><?php echo contenu6_chateau ?></p>
        <br>
            <h1><?php echo date_chateau_3 ?></h1>
          <p align = "center">
          <img src="Images/Louis XV.jpg" align = "center">
        <p><?php echo contenu7_chateau ?></p>
        <br>
            <h1><?php echo date_chateau_4 ?></h1>
          <p align = "center">
          <img src="Images/Louis XVI.jpg" align = "center">
        <p><?php echo contenu8_chateau ?></p>
        <br>
            <h1><?php echo date_chateau_5 ?></h1>
          <p align = "center">
          <img src="Images/Révolution.jpg" style = "width:50%">
        <p><?php echo contenu9_chateau ?></p>
        <br>
            <h1><?php echo date_chateau_6 ?></h1>
          <p align = "center">
          <img src="Images/19e siècle.jpg" align = "center">
        <p><?php echo contenu10_chateau ?></p>
        <br>
            <h1><?php echo date_chateau_7 ?></h1>
          <p align = "center">
          <img src="Images/Nosjours.jpg" align = "center">
        <p><?php echo contenu11_chateau ?></p>
        <br>
            <h1><?php echo anecdotes ?></h1>
        <br>
        <h2><?php echo intro?></h2>
        <br>
        <p>
        <?php echo contenu12_chateau?>
        <br>
        <?php echo contenu13_chateau?>
        </p>
        <br>
        <br>
        <h2><?php echo intro2?></h2>
        <br>
        <p>
        <?php echo contenu14_chateau?>
        <br>
        <?php echo contenu15_chateau?>
        </p>

            </div>
            <!--Fin de la partie gauche du milieu de la page-->
        </div>
        <!--Fin du milieu de la page-->
        <?php  include_once('includes/footer.php')?>
    </body>
</html>
