<?php
require_once(__DIR__ . '/../bdd/bdd.php');

function getVehicules() {
    global $bdd;
    return $bdd->query("SELECT * FROM Vehicule")->fetchAll(PDO::FETCH_ASSOC);
}

function getVehiculeById($id) {
    global $bdd;
    $sql = "SELECT * FROM Vehicule WHERE Id_Vehicule = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
