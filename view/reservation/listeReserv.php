<div class="container mt-4">
    <h1 class="text-center">Liste des Réservation</h1>

    <div class="table-responsive w-50 mx-auto">
        <table class="table table-primary table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Marque</th>
                    <th>Modele</th>
                    <th>Immatriculation</th>
                    <th>Année</th>
                    <th>Places</th>
                    <th>Détails</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($reservations as $reservation){ ?>
                    <tr>
                        <td><?php echo $reservation['Id_Chauffeur']; ?></td>
                        <td><?php echo $reservation['Id_Vehicule']; ?></td>
                        <td><?php echo $reservation['Id_Client']; ?></td>
                        <td><?php echo $reservation['Lieu']; ?></td>
                        <td><?php echo $reservation['Date_Reservation']; ?></td>
                        <td><a href="index.php?page=detailTaches&id=<?php echo $reservation['id']; ?>">Detail</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
