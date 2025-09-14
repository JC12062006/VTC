<?php

include("bdd/bdd.php");

$req = $bdd->prepare("SELECT * FROM reservation.Id_Reservation, vehicule.Marque from reservation, chauffeur.Nom from reservation, reservation.Lieu, reservation.Date_Reservation from tache, vehicule where reservation.Id_Vehicule = vehicule.id, chauffeur where reservation.Id_Chauffeur = chauffeur.id ORDER by Date_Reservation DESC;");
$req->execute();

$reservations = $req->fetchAll();


/*var_dump($reservation);
die();
*/


?>