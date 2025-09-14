<?php
require_once(__DIR__ . '/../bdd/bdd.php');

function getChauffeurs() {
    global $bdd;
    return $bdd->query("SELECT * FROM Chauffeur")->fetchAll(PDO::FETCH_ASSOC);
}
?>


// Récupérer un véhicule par son ID
function getVehiculeById($id) {
    global $pdo;
    $sql = "SELECT * FROM Vehicule WHERE Id_Vehicule = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
