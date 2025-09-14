<?php

include("bdd/bdd.php");

$req = $bdd->prepare("SELECT * FROM chauffeur");
$req->execute();

$chauffeurs = $req->fetchAll();


/*var_dump($chauffeur);
die();
*/


?>