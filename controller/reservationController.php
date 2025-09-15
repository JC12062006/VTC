<?php
require_once(__DIR__ . '/../model/reservationModel.php');
require_once(__DIR__ . '/../model/chauffeurModel.php');

if (
    isset($_POST['id_vehicule'], $_POST['lieu'], $_POST['date_reservation']) &&
    !empty($_POST['id_vehicule']) &&
    !empty($_POST['lieu']) &&
    !empty($_POST['date_reservation'])
) {
    $id_vehicule = $_POST['id_vehicule'];
    $lieu = $_POST['lieu'];
    $date = $_POST['date_reservation'];

    $chauffeur = getChauffeurDisponible($date, $id_vehicule);

    if ($chauffeur) {
        ajouterReservation($chauffeur['Id_Chauffeur'], $id_vehicule, $lieu, $date);
        // Retour à la page d'ajout
        header('Location: ../index.php?page=ajoutReserv');
        exit;
    } else {
        // Retour à la page d'ajout
        header('Location: ../index.php?page=ajoutReserv');
        exit;
    }
} else {
    // Retour à la page d'ajout
    header('Location: ../index.php?page=ajoutReserv');
    exit;
}
?>