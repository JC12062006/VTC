<?php
require_once('model/reservationModel.php');

// Si on veut afficher la liste des réservations
if (isset($_GET['action']) && $_GET['action'] === 'liste') {
    $reservations = getReservations();
    include('view/reservation/listeReserv.php');
}

// Si on veut ajouter une réservation (formulaire envoyé)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idChauffeur = $_POST['id_chauffeur'];
    $idVehicule = $_POST['id_vehicule'];
    $lieu = $_POST['lieu'];
    $date = $_POST['date_reservation'];

    ajouterReservation($idChauffeur, $idVehicule, $lieu, $date);
    header('Location: index.php?page=listeReserv');
    exit();
}
