<div class="container mt-4">
    <h1 class="text-center">Liste des Véhicules</h1>

    <div class="table-responsive w-50 mx-auto">
        <table class="table table-primary table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Marque</th>
                    <th>Modele</th>
                    <th>Immatriculation</th>
                    <th>Annee</th>
                    <th>Places</th>
                    <th>Détails</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($vehicules as $vehicule){ ?>
                    <tr>
                        <td><?php echo $vehicule['Marque']; ?></td>
                        <td><?php echo $vehicule['Modele']; ?></td>
                        <td><?php echo $vehicule['Immatriculation']; ?></td>
                        <td><?php echo $vehicule['Annee']; ?></td>
                        <td><?php echo $vehicule['Places']; ?></td>
                        <td><a href="index.php?page=detailTaches&id=<?php echo $vehicule['id']; ?>">Detail</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
