<?php
require_once('bdd/bdd.php');

// Récupérer toutes les réservations
function getReservations() {
    global $pdo;
    $sql = "SELECT * FROM Reservation";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// Ajouter une réservation
function ajouterReservation($id_chauffeur, $id_vehicule, $lieu, $date) {
    global $bdd;
    $sql = "INSERT INTO Reservation (Id_Chauffeur, Id_Vehicule, Lieu, Date_Reservation) VALUES (?, ?, ?, ?)";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$id_chauffeur, $id_vehicule, $lieu, $date]);
}

// Récupérer une réservation par son ID
function getReservationById($id) {
    global $pdo;
    $sql = "SELECT * FROM Reservation WHERE Id_Reservation = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
