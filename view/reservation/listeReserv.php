<?php
// Ne pas réinclure le model si déjà fait
if (!function_exists('getReservations')) {
    require_once(__DIR__ . '/../../model/reservationModel.php');
}

try {
    $reservations = getReservations();
} catch (Exception $e) {
    echo "Erreur lors du chargement des réservations : " . $e->getMessage();
    $reservations = [];
}
?>

<div class="container mt-4">
    <h1 class="text-center">Liste des Réservations</h1>

    <div class="table-responsive w-75 mx-auto">
        <table class="table table-primary table-bordered text-center">
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
                    <?php foreach($reservations as $reservation): ?>
                        <tr>
                            <td><?= $reservation['Id_Reservation'] ?></td>
                            <td><?= $reservation['Lieu'] ?></td>
                            <td><?= date('d/m/Y', strtotime($reservation['Date_Reservation'])) ?></td>
                            <td>
                                <?= $chauffeur['Nom'] ?? 'Non assigné' ?>
                                <?= $chauffeur['Prenom'] ?? 'Non assigné' ?>
                                <?php if (!empty($chauffeur['Num_Tel'])): ?>
                                    <br><small class="text-muted"><?= $chauffeur['Num_Tel'] ?></small>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?= $vehicule['Marque'] ?? 'Non assigné' ?>
                                <?php if (!empty($vehicule['Immatriculation'])): ?>
                                    <br><small class="text-muted"><?= $vehicule['Immatriculation'] ?></small>
                                <?php endif; ?>
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