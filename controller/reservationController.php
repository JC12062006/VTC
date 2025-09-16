<?php
require_once(__DIR__ . '/../model/reservationModel.php');

if (
    isset($_POST['id_chauffeur'], $_POST['id_vehicule'], $_POST['lieu'], $_POST['date_reservation']) &&
    !empty($_POST['id_chauffeur']) &&
    !empty($_POST['id_vehicule']) &&
    !empty($_POST['lieu']) &&
    !empty($_POST['date_reservation'])
) {
    // ✅ Récupération des données du formulaire
    $id_chauffeur = $_POST['id_chauffeur'];
    $id_vehicule = $_POST['id_vehicule'];
    $lieu = $_POST['lieu'];
    $date = $_POST['date_reservation'];

    // ✅ Ajout de la réservation avec le chauffeur choisi
    ajouterReservation($id_chauffeur, $id_vehicule, $lieu, $date);

    // ✅ Redirection vers la page de réservation
    header('Location: ../index.php?page=ajoutReserv');
    exit;
} else {
   
    header('Location: ../index.php?page=ajoutReserv');
    exit;
}
?>
