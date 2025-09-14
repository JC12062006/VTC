<?php

include("bdd/bdd.php");

$id = $_GET['id'];
$req = $bdd->prepare("SELECT * FROM vehicule WHERE id=".$id);
$req->execute();

$vehicule = $req->fetchAll();


/*var_dump($vehicule);
die();*/



?>