<?php include_once('includes/header.php') ?>
<link rel="stylesheet" href="galerie.css" media="screen" type="text/css" />

<body>
  <?php session_start();
  if (!isset($_SESSION['username'])) {
    include_once('includes/navbar.php');
  } else {
    include_once('includes/navbar-connected.php');
  } ?>
  <!--Partie gauche du milieu de la page-->
  <main>
    <div class="row">
      <div class="main">


    <h1><?php echo Chateau_galerie ?></h1>
    <div class="contenu_carou_auto">
      <div class="caroussel-image">
        <img src="Images/Versaille.jpg" alt>
        <img src="Images/Versaille2.jpg" alt>
        <img src="Images/Versaille3.jpg" alt>
        <img src="Images/Versaille4.jpg" alt>
        <img src="Images/Versaille5.jpg" alt>
        <img src="Images/Versaille6.jpg" alt>
        <img src="Images/Versaille7.jpg" alt>
        <img src="Images/Versaille8.png" alt>
      </div>
    </div>
    <h1><?php echo Jardins_galerie ?></h1>
    <div class="contenu_carou_auto">
      <div class="caroussel-image">
        <img src="Images/Jardin.jpg" alt>
        <img src="Images/Jardin2.jpg" alt>
        <img src="Images/Jardin3.jpg" alt>
        <img src="Images/Jardin4.jpg" alt>
        <img src="Images/Jardin5.jpg" alt>
        <img src="Images/Jardin6.jpg" alt>
        <img src="Images/Jardin7.jpg" alt>
        <img src="Images/Jardin8.jpg" alt>
      </div>
    </div>

    </div>
  </div>
  </div>
  </main>

  <?php include_once('includes/footer.php') ?>
</body>

</html>
