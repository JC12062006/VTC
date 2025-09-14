<?php 

include('controller/vehicule/selectVehiculeById.php');


?>

<div class="container mt-4">
    <h1 class="text-center">Detail Véhicule</h1>
    <h2><?php echo $vehicule[0]['Marque'];?></h2>
    <h2><?php echo $vehicule[0]['Modele'];?></h2>
    <h2><?php echo $vehicule[0]['Immatriculation'];?></h2>
    <h2><?php echo $vehicule[0]['Annee'];?></h2>
    <h2><?php echo $vehicule[0]['Places'];?></h2>
</div>
