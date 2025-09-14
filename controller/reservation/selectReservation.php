<?php

include("bdd/bdd.php");

$req = $bdd->prepare("SELECT * FROM reservation");
$req->execute();

$reservations = $req->fetchAll();


/*var_dump($reservation);
die();
*/


?>