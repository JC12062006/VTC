<?php
require_once('model/reservationModel.php');
$id = $_GET['id'] ?? null;
$reservation = $id ? getReservationById($id) : null;
?>

<div class="container mt-4">
    <h1 class="text-center">Détail de la Réservation</h1>

    <?php if ($reservation) : ?>
        <div class="table-responsive w-50 mx-auto">
            <table class="table table-bordered table-striped text-center">
                <tr><th>Lieu</th><td><?= $reservation['Lieu'] ?></td></tr>
                <tr><th>Date</th><td><?= $reservation['Date_Reservation'] ?></td></tr>
                <tr><th>Chauffeur</th><td><?= $reservation['Id_Chauffeur'] ?></td></tr>
                <tr><th>Véhicule</th><td><?= $reservation['Id_Vehicule'] ?></td></tr>
            </table>
        </div>
    <?php else : ?>
        <p class="text-center">Réservation non trouvée.</p>
    <?php endif; ?>
</div>
