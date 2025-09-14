<?php
require_once('bdd/bdd.php');

// Récupérer toutes les réservations
function getReservations() {
    global $pdo;
    $sql = "SELECT * FROM Reservation";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// Ajouter une réservation
function ajouterReservation($idChauffeur, $idVehicule, $lieu, $date) {
    global $pdo;
    $sql = "INSERT INTO Reservation (Id_Chauffeur, Id_Vehicule, Lieu, Date_Reservation)
            VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$idChauffeur, $idVehicule, $lieu, $date]);
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
