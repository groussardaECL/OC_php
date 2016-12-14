 <?php
/** Pas de protetion des données en cas d'erreur
$bdd = new PDO('mysql:host=localhost','root','root'); */
try
{
    $bdd = new PDO('mysql:host=localhost:3307;dbname=blog','root','root');
}
catch (Exception $e)
{
    die('Erreur de connexion : '. $e->getMessage());
}
?>