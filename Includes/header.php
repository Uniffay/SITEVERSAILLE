<?php 
if (!isset($_GET["lang"])) {
    $lang = "en";
}

if ($_GET["lang"] === "fr") {
    require_once "contenu/francais.php"; 
} else {
    require_once "contenu/english.php";
}
?>

<head>
    <title> <?php echo nom_chateau ?></title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta name="viewport" content="width:device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!--Haut de la page-->
    <div class="header">
        <a href= "https://fr.unesco.org" target = "_blank" ><img src="Images/unesco.png" height="10%" width="10%" align="left"/></a>
        <a href= "http://emeline-cardinet.com/MCN" target = "_blank" ><img src="Images/mcn.png" height="15%" width="20%" align="right" style="margin-top: 1.4%;"/></a>
        <h1><?php echo nom_chateau?></h1>
    </div>
</head>
    <!--Fin du haut de la page-->
