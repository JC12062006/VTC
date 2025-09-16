<?php
require_once('model/chauffeurModel.php');

// Récupérer tous les véhicules
$chauffeurs = getChauffeurs();

// Afficher la vue avec la liste
include('view/chauffeur/chauffeurList.php');
