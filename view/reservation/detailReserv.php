<?php
require_once(__DIR__ . '/../../model/reservationModel.php');
$id = $_GET['id'] ?? null;
$reservation = $id ? getReservationById($id) : null;
?>

<div class="container mt-4">
    <h1 class="text-center">Détail de la Réservation</h1>

    <?php if ($reservation) : ?>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">Réservation #<?= $reservation['Id_Reservation'] ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-primary">Informations générales</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <th width="30%">Lieu :</th>
                                        <td><?= htmlspecialchars($reservation['Lieu']) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Date :</th>
                                        <td><?= date('d/m/Y', strtotime($reservation['Date_Reservation'])) ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-success">Chauffeur assigné</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <th width="30%">Nom :</th>
                                        <td><?= $chauffeur['Nom'] ?? 'Non assigné' ?></td>
                                        <td><?= $chauffeur['Prenom'] ?? 'Non assigné' ?></td>
                                    </tr>
                                    <?php if (!empty($chauffeur['Num_Tel'])): ?>
                                    <tr>
                                        <th>Téléphone :</th>
                                        <td><?= $chauffeur['Num_Tel'] ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if (!empty($chauffeur['Email'])): ?>
                                    <tr>
                                        <th>Email :</th>
                                        <td><?= $chauffeur['Email'] ?></td>
                                    </tr>
                                    <?php endif; ?>
                                </table>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-warning">Véhicule assigné</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <th width="20%">Véhicule :</th>
                                        <td><?= $vehicule['Marque'] ?? 'Non assigné' ?></td>
                                        <td><?= $vehicule['Modèle'] ?? 'Non assigné' ?></td>
                                    </tr>
                                    <?php if (!empty($vehicule['Immatriculation'])): ?>
                                    <tr>
                                        <th>Immatriculation :</th>
                                        <td><?= $vehicule['Immatriculation'] ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if (!empty($vehicule['Places'])): ?>
                                    <tr>
                                        <th>Nombre de places :</th>
                                        <td><?= $vehicule['Places'] ?> places</td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if (!empty($vehicule['Annee'])): ?>
                                    <tr>
                                        <th>Année :</th>
                                        <td><?= $vehicule['Annee'] ?></td>
                                    </tr>
                                    <?php endif; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a href="index.php?page=ajoutReserv" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Retour à la liste
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="alert alert-warning text-center w-50 mx-auto">
            <h4>Réservation non trouvée</h4>
            <p>La réservation demandée n'existe pas ou a été supprimée.</p>
            <a href="index.php?page=ajoutReserv" class="btn btn-primary">Retour à la liste</a>
        </div>
    <?php endif; ?>
</div>