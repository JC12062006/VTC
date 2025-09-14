<?php

include("bdd/bdd.php");

$req = $bdd->prepare("SELECT * FROM vehicule");
$req->execute();

$types = $req->fetchAll();


/*var_dump($vehicule);
die();
*/


?>