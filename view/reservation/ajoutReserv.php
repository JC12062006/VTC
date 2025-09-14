<?php
require_once(__DIR__ . '/../../model/vehiculeModel.php');

$vehicules = getVehicules(); // On garde le choix du véhicule
?>

<div class="container mt-4">
    <h1 class="text-center">Réserver un Véhicule</h1>

    <form action="../../controller/reservationController.php" method="POST" class="w-50 mx-auto mt-4 p-4 bg-light rounded shadow">
        <div class="mb-3">
            <label for="id_vehicule" class="form-label">Type de Véhicule</label>
            <select name="id_vehicule" id="id_vehicule" class="form-select" required>
                <option value="">-- Sélectionner --</option>
                <?php foreach ($vehicules as $vehicule) : ?>
                    <option value="<?= $vehicule['Id_Vehicule'] ?>">
                        <?= $vehicule['Marque'] ?> <?= $vehicule['Modele'] ?> (<?= $vehicule['Immatriculation'] ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="lieu" class="form-label">Lieu de prise en charge</label>
            <input type="text" name="lieu" id="lieu" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="date_reservation" class="form-label">Date de réservation</label>
            <input type="date" name="date_reservation" id="date_reservation" class="form-control" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-dark px-5 py-2">Réserver</button>
        </div>
    </form>
</div>
