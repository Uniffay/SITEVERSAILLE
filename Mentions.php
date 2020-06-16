<?php include_once('includes/header.php');
      include_once('includes/navbar.php')?>
      <body>
        <!--Milieu de la page contenant deux parties-->
        <div class="row">
            <!--Partie gauche du milieu de la page-->
            <div class="main">
              <h1><?php echo mentionslegales ?></h1>
      				<p>
      				<?php echo contenu1_mention ?>
      				<?php echo contenu2_mention ?>
      				<?php echo contenu3_mention ?>
      				<br>
              <br>
              </p>
                  <h2><?php echo editeur_site ?> </h2>
              <p>
              <b><?php echo contenu4_mention ?></b>
              <br>
              GANDEGA Issa, GUEFFIER Benjamin, FRANCISCO Michel, BOULET Quentin, GARCIA CALZADA Alan, DOMINGUES Vincent.
              <br>
              <br>
              </p>
                <h2><?php echo conditions_duti ?> </h2>
              <p>
              <?php echo contenu5_mention ?>
              <br>
              <br>
              </p>
                <h2><?php echo limi_resp ?> </h2>
              <p>
                <?php echo contenu6_mention ?>
                <?php echo contenu7_mention ?>
              <br>
              <br>
              </p>
                <h2><?php echo privacy ?> </h2>
              <p>
                <?php echo contenu8_mention ?>
              <br>
              <br>
              </p>
                <h2><?php echo propri_inte ?> </h2>
              <p>
              <?php echo contenu9_mention ?>
              <?php echo contenu10_mention ?>
              <?php echo contenu11_mention ?>
              <br>
              <br>
              </p>
                <h2><?php echo cookies ?> </h2>
              <p>
              <?php echo contenu12_mention ?>
              <br>
              <br>
              </p>
                <h2><?php echo contact ?> </h2>
              <p>
              <?php echo contenu13_mention ?>
              </p>
            </div>
            <!--Fin de la partie gauche du milieu de la page-->
        </div>
        <!--Fin du milieu de la page-->
        <?php  include_once('includes/footer.php')?>
    </body>
</html>
