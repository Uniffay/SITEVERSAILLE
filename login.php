<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
      <!-- importer le fichier de style -->
      <link rel="stylesheet" href="login.css" media="screen" type="text/css" />
  </head>
  <?php include_once('includes/header.php') ?>
  <body>
  <?php include_once('includes/navbar.php')?>

        <div id="container">
            <!-- zone de connexion -->

            <form action="verification.php" method="POST">
                <h1><?php echo login?></h1>
                <label><b><?php echo username?></b></label>
                <input type="text" placeholder=<?php echo enterUsername?> name="username" required>

                <label><b><?php echo password?></b></label>
                <input type="password" placeholder=<?php echo enterPassword?> name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
        <?php include_once('includes/footer.php') ?>
    </body>
</html>
