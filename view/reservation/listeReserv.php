<?php
require_once(__DIR__ . '/../../model/reservationModel.php');

try {
    $reservations = getReservations(); // Cette fonction doit inclure les JOIN dans reservationModel.php
} catch (Exception $e) {
    echo "Erreur lors du chargement des réservations : " . $e->getMessage();
    $reservations = [];
}
?>

<div class="container mt-4">
    <h1 class="text-center">Liste des Réservations</h1>

    <div class="table-responsive w-75 mx-auto">
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Lieu</th>
                    <th>Date</th>
                    <th>Chauffeur</th>
                    <th>Véhicule</th>
                    <th>Détails</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($reservations)): ?>
                    <?php foreach ($reservations as $reservation): ?>
                        <tr>
                            <td><?= $reservation['Id_Reservation'] ?></td>
                            <td><?= htmlspecialchars($reservation['Lieu']) ?></td>
                            <td><?= date('d/m/Y', strtotime($reservation['Date_Reservation'])) ?></td>
                            <td>
                                <?= htmlspecialchars($reservation['ChauffeurPrenom']) ?> <?= htmlspecialchars($reservation['ChauffeurNom']) ?>
                                <br><small class="text-muted"><?= htmlspecialchars($reservation['ChauffeurTel']) ?></small>
                            </td>
                            <td>
                                <?= htmlspecialchars($reservation['VehiculeMarque']) ?> <?= htmlspecialchars($reservation['VehiculeModele']) ?>
                                <br><small class="text-muted"><?= htmlspecialchars($reservation['VehiculeImmatriculation']) ?></small>
                            </td>
                            <td>
                                <a href="index.php?page=detailReserv&id=<?= $reservation['Id_Reservation'] ?>" class="btn btn-sm btn-primary">Voir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">Aucune réservation trouvée</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
