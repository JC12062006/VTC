<?php
require_once(__DIR__ . '/../../model/chauffeurModel.php');
require_once(__DIR__ . '/../../model/vehiculeModel.php');

$chauffeurs = getChauffeurs();
$vehicules = getVehicules();
?>

<div class="container mt-4">
    <h1 class="text-center">Ajouter une Réservation</h1>

    <form action="../../controller/reservationController.php" method="POST" class="w-50 mx-auto mt-4 p-4 bg-light rounded shadow">
        <!-- Sélection du chauffeur -->
        <div class="mb-3">
            <label for="id_chauffeur" class="form-label">Chauffeur</label>
            <select name="id_chauffeur" id="id_chauffeur" class="form-select" required>
                <option value="">-- Sélectionner --</option>
                <?php foreach ($chauffeurs as $chauffeur) : ?>
                    <option value="<?= $chauffeur['Id_Chauffeur'] ?>">
                        <?= $chauffeur['Prenom'] ?> <?= $chauffeur['Nom'] ?> (<?= $chauffeur['Num_Tel'] ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Sélection du véhicule -->
        <div class="mb-3">
            <label for="id_vehicule" class="form-label">Véhicule</label>
            <select name="id_vehicule" id="id_vehicule" class="form-select" required>
                <option value="">-- Sélectionner --</option>
                <?php foreach ($vehicules as $vehicule) : ?>
                    <option value="<?= $vehicule['Id_Vehicule'] ?>">
                        <?= $vehicule['Marque'] ?> <?= $vehicule['Modele'] ?> - <?= $vehicule['Immatriculation'] ?> (<?= $vehicule['Places'] ?> places, <?= $vehicule['Annee'] ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Lieu -->
        <div class="mb-3">
            <label for="lieu" class="form-label">Lieu</label>
            <input type="text" name="lieu" id="lieu" class="form-control" required>
        </div>

        <!-- Date -->
        <div class="mb-3">
            <label for="date_reservation" class="form-label">Date</label>
            <input type="date" name="date_reservation" id="date_reservation" class="form-control" required>
        </div>

        <!-- Bouton -->
        <div class="text-center">
            <button type="submit" class="btn btn-dark px-5 py-2">Réserver</button>

            <!-- debut ajout de la liste des types -->
            <?php include('controller/reservationController.php');  ?>
            <?php  include('view/reservation/listeReserv.php'); ?>
            <!-- fin ajout de la liste des types -->