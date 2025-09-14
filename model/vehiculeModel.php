<?php
require_once('bdd/bdd.php');

// Récupérer tous les véhicules
function getVehicules() {
    global $pdo;
    $sql = "SELECT * FROM Vehicule";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// Récupérer un véhicule par son ID
function getVehiculeById($id) {
    global $pdo;
    $sql = "SELECT * FROM Vehicule WHERE Id_Vehicule = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
