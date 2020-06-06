<?PHP
/* Connexion au serveur et à la base de données */
$host="sqletud.u-pem.fr";
$user="vdomin01"; /* Votre login */
$pwd="xc7yo2ieJs"; /* Votre mot de passe */
$db="vdomin01_db"; /* Le nom de votre base : de la forme ici : xxx_db avec xxx votre login */
    // Connexion avec avec PDO
try{
$con='mysql:host='.$host.';dbname='.$db;
$dbh = new PDO($con,$user,$pwd,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)); }
catch(Exception $e){
die('Connexion impossible à la base de données !'.$e->getMessage());
}
?>
