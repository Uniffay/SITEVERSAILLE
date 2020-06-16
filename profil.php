<?php
session_start();
include_once('includes/connexion.php');
$infos = $bdd->query("SELECT * FROM `membre` LEFT JOIN `user` ON `membre`.id = `user`.id_membre WHERE `user`.`login` = '" . $_SESSION['username'] . "'");
$infoUser = $infos->fetch();
?>

<?php include_once('includes/header.php') ?>

<body>
    <?php
    if (!isset($_SESSION['username'])) {
        include_once('includes/navbar.php');
    } else {
        include_once('includes/navbar-connected.php');
    } ?>
    <link rel="stylesheet" href="profil.css" media="screen" type="text/css" />
    <!--Milieu de la page contenant deux parties-->
    <div class="row">
        <!--Partie gauche du milieu de la page-->
        <div class="main">

            <main>
                <div class="profil">
                    <table>
                        <tr>
                            <th colspan="1">Nom</th>
                            <th colspan="1">Prénom</th>
                            <th colspan="2">Adresse e-mail</th>
                        </tr>
                        <tr>
                            <td colspan="1"><?php echo $infoUser['nom'] ?></td>
                            <td colspan="1"><?php echo $infoUser['prenom'] ?></td>
                            <td colspan="1"><?php echo $infoUser['email'] ?></td>
                        </tr>
                    </table>
                </div>
            </main>

        </div>
        <!--Fin de la partie gauche du milieu de la page-->
        <!--Partie gauche du milieu de la page-->
    </div>
    <!--Fin du milieu de la page-->
    <?php include_once('includes/footer.php') ?>
</body>

</html>