<?php
require_once(__DIR__ . '/../bdd/bdd.php');

function getChauffeurs() {
    global $bdd;
    return $bdd->query("SELECT * FROM Chauffeur")->fetchAll(PDO::FETCH_ASSOC);
}
?>
