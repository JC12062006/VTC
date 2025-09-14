<?php
require_once('model/vehiculeModel.php');
$vehicules = getVehicules();
?>

<div class="container mt-4">
    <h1 class="text-center">Liste des Véhicules</h1>

    <div class="table-responsive w-75 mx-auto">
        <table class="table table-primary table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Immatriculation</th>
                    <th>Année</th>
                    <th>Places</th>
                    <th>Détail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vehicules as $vehicule) : ?>
                    <tr>
                        <td><?= $vehicule['Id_Vehicule'] ?></td>
                        <td><?= $vehicule['Marque'] ?></td>
                        <td><?= $vehicule['Modele'] ?></td>
                        <td><?= $vehicule['Immatriculation'] ?></td>
                        <td><?= $vehicule['Annee'] ?></td>
                        <td><?= $vehicule['Places'] ?></td>
                        <td>
                            <a href="index.php?page=vehiculeDetail&id=<?= $vehicule['Id_Vehicule'] ?>" class="btn btn-dark btn-sm">Voir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
