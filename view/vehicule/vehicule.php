<?php 
echo "Chemin actuel : " . __DIR__ . "<br>";
echo "Fichier actuel : " . __FILE__ . "<br>";
?>

<h1>Voici la liste des Véhicules</h1>

<!-- debut ajout de la liste des types -->
<?php 
echo "Tentative d'inclusion de selectVehicule.php...<br>";
include('../../controller/vehicule/selectVehicule.php'); 
echo "Inclusion terminée<br>";

// Vérifier si la variable existe
if (isset($vehicules)) {
    echo "Variable \$vehicules définie avec " . count($vehicules) . " éléments<br>";
} else {
    echo "Variable \$vehicules NON définie<br>";
}
?>

<?php include('vehiculeList.php'); ?>
<!-- fin ajout de la liste des types -->