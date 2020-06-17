<?php include('includes/header.php'); ?>

<body>
  <link rel="stylesheet" href="login.css" media="screen" type="text/css" />
  <?php include_once('includes/navbar.php') ?>
  <div class="row">
    <div class="main">

    <div id="container">
      <!-- zone de connexion -->

      <form action="verification2.php" method="POST">
        <h1><?php echo register ?></h1>
        <label><b><?php echo nom ?></b></label>
        <input type="text" placeholder=<?php echo enter ?> name="nom" required>

        <label><b><?php echo prenom ?></b></label>
        <input type="text" placeholder=<?php echo enter ?> name="prenom" required>

        <label><b><?php echo username ?></b></label>
        <input type="text" placeholder=<?php echo enter ?> name="username" required>

        <label><b><?php echo password ?></b></label>
        <input type="password" placeholder=<?php echo enter ?> name="password" required>

        <label><b><?php echo confirmPassword ?></b></label>
        <input type="password" placeholder=<?php echo enter ?> name="password2" required>

        <label><b>Email</b></label>
        <input type="text" placeholder=<?php echo enter ?> name="email" required>

        <input type="submit" id='submit' value='REGISTER'>
        <?php
        if (isset($_GET['erreur'])) {
          $err = $_GET['erreur'];
          if ($err == 3) {
            echo "<p style='color:red'>Veuillez renseigner les champs</p>";
          } elseif ($err == 2) {
            echo "<p style='color:red'>Mots de passes non similaires</p>";
          } elseif ($err == 1) {
            echo "<p style='color:red'>Vous etes déjà inscrit</p>";
          }
        }
        ?>
      </form>
      <br>
      <?php
      echo infoins;
      ?>
    </div>
    </div>
  </div>
  <?php include_once('includes/footer.php') ?>
</body>

</html>
