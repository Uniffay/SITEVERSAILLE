<?PHP
/* Connexion au serveur et à la base de données */
$host="localhost";
$user="root"; /* Votre login */
$pwd=""; /* Votre mot de passe */
$db="tp7"; /* Le nom de votre base : de la forme ici : xxx_db avec xxx votre login */
// Connexion avec avec PDO
try{
$con='mysql:host='.$host.';dbname='.$db;
$bdd = new PDO($con,$user,$pwd,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
die('Connexion impossible à la base de données !'.$e->getMessage());
}
?>
