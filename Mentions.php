<?php include_once('includes/header.php');
session_start();
if (!isset($_SESSION['username'])) {
  include_once('includes/navbar.php');
} else {
  include_once('includes/navbar-connected.php');
} ?>

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
      <h1><?php echo editeur_site ?> </h1>
      <p>
        <?php echo contenu4_mention ?>
        <br>
        GANDEGA Issa, GUEFFIER Benjamin, FRANCISCO Michel, BOULET Quentin, GARCIA CALZADA Alan, DOMINGUES Vincent.
        <br>
        <br>
      </p>
      <h1><?php echo conditions_duti ?> </h1>
      <p>
        <?php echo contenu5_mention ?>

    </div>
    <!--Fin de la partie gauche du milieu de la page-->
  </div>
  <!--Fin du milieu de la page-->
  <?php include_once('includes/footer.php') ?>
</body>

</html>