<?php
require_once(__DIR__ . '/../model/reservationModel.php');
require_once(__DIR__ . '/../model/chauffeurModel.php');

$id_vehicule = $_POST['id_vehicule'];
$lieu = $_POST['lieu'];
$date = $_POST['date_reservation'];

// Exemple : affecter automatiquement un chauffeur disponible
$chauffeur = getChauffeurDisponible($date, $id_vehicule);

if ($chauffeur) {
    ajouterReservation($chauffeur['Id_Chauffeur'], $id_vehicule, $lieu, $date);
    header('Location: ../view/reservation/success.php');
} else {
    header('Location: ../view/reservation/echec.php');
}
