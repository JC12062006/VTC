<?php

include("bdd/bdd.php");

// Forcer l'encodage UTF-8 pour éviter les problèmes de caractères
$bdd->exec("SET NAMES utf8");

$req = $bdd->prepare("SELECT * FROM vehicule");
$req->execute();

$vehicules = $req->fetchAll();

echo "Nombre de véhicules : " . count($vehicules);
/*var_dump($vehicule);
die();
*/


?>