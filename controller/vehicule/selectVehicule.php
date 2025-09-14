<?php

include("bdd/bdd.php");

$req = $bdd->prepare("SELECT * FROM vehicule");
$req->execute();

$vehicules = $req->fetchAll();


/*var_dump($vehicule);
die();
*/


?>