<?php

include("bdd/bdd.php");

$id = $_GET['id'];
$req = $bdd->prepare("SELECT * FROM chauffeur WHERE id=".$id);
$req->execute();

$chauffeur = $req->fetchAll();


/*var_dump($chauffeur);
die();*/



?>