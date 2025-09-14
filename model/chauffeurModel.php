<?php
require_once(__DIR__ . '/../bdd/bdd.php');

function getChauffeurs() {
    global $bdd;
    return $bdd->query("SELECT * FROM Chauffeur")->fetchAll(PDO::FETCH_ASSOC);
}

// Renvoie un chauffeur disponible (simple version : le premier trouvé)
function getChauffeurDisponible($date, $id_vehicule) {
    global $bdd;
    $sql = "SELECT * FROM Chauffeur LIMIT 1"; // à améliorer plus tard avec disponibilité
    $stmt = $bdd->query($sql);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
