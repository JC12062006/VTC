<?php

include("bdd/bdd.php");

$req = $bdd->prepare("SELECT * FROM reservation");
$req->execute();

$types = $req->fetchAll();


/*var_dump($reservation);
die();
*/


?>