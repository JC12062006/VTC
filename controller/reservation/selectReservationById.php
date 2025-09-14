<?php

include("bdd/bdd.php");

$id = $_GET['id'];
$req = $bdd->prepare("SELECT * FROM reservation WHERE id=".$id);
$req->execute();

$reservation = $req->fetchAll();


/*var_dump($reservation);
die();*/



?>