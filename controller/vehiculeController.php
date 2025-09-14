<?php
require_once('model/vehicule.php');

// Récupérer tous les véhicules
$vehicules = getVehicules();

// Afficher la vue avec la liste
include('view/vehicule/vehiculeList.php');
