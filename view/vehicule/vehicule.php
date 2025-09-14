<h1>Voici la liste des Véhicules</h1>

<?php 
echo "Chemin actuel : " . __DIR__ . "<br>";
echo "Fichier actuel : " . __FILE__ . "<br>";
?>

<!-- debut ajout de la liste des types -->
<?php include('../../controller/vehicule/selectVehicule.php');  ?>

<!-- Debug : vérifier si $vehicules contient des données -->
<?php 
if (empty($vehicules)) {
    echo "<p>Aucun véhicule trouvé dans la base de données.</p>";
} else {
    echo "<p>Nombre de véhicules trouvés : " . count($vehicules) . "</p>";
}
?>

<?php  include('vehiculeList.php'); ?>
<!-- fin ajout de la liste des types -->