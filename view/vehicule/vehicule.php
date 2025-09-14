<h1>Voici la liste des Véhicules</h1>

<!-- debut ajout de la liste des types -->
<?php 
include('../../controller/vehicule/selectVehicule.php'); 

// Vérifier si la variable existe
if (isset($vehicules)) {
    echo "L'entreprise VTC vous donne le choix avec " . count($vehicules) . " types de véhicules<br>";
} else {
    echo "Variable \$vehicules NON définie<br>";
}
?>

<?php include('vehiculeList.php'); ?>
<!-- fin ajout de la liste des types -->