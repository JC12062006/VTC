<?php
require_once('model/vehicule.php');
$id = $_GET['id'] ?? null;
$vehicule = $id ? getVehiculeById($id) : null;
?>

<div class="container mt-4">
    <h1 class="text-center">Détail du Véhicule</h1>

    <?php if ($vehicule) : ?>
        <div class="table-responsive w-50 mx-auto">
            <table class="table table-bordered table-striped text-center">
                <tr><th>Marque</th><td><?= $vehicule['Marque'] ?></td></tr>
                <tr><th>Modèle</th><td><?= $vehicule['Modele'] ?></td></tr>
                <tr><th>Immatriculation</th><td><?= $vehicule['Immatriculation'] ?></td></tr>
                <tr><th>Année</th><td><?= $vehicule['Annee'] ?></td></tr>
                <tr><th>Places</th><td><?= $vehicule['Places'] ?></td></tr>
            </table>
        </div>
    <?php else : ?>
        <p class="text-center">Véhicule non trouvé.</p>
    <?php endif; ?>
</div>
