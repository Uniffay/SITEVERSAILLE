<?php
$host = "sqletud.u-pem.fr";
$user = "vdomin01";
$pwd = "xc7yo2ieJs";
$dbname = "vdomin01_db";
try {
    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pwd, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
} catch (Exception $e) {
    die('Connexion impossible à la base de données !' . $e->getMessage());
}
