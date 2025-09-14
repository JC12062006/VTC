<?php
session_start();

include('view/commun/header.php');

// Définition de la page à afficher
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

switch($page) {
    // Pages liées aux réservations
    case 'ajoutReserv':
        include('view/reservation/ajoutReserv.php');
        break;

    case 'detailReserv':
        include('view/reservation/detailReserv.php');
        break;

    case 'listeReserv':
        include('view/reservation/listeReserv.php');
        break;

    case 'vehicule':
        include('view/vehicule/vehicule.php');
    // Pages liées aux véhicules
    case 'vehiculeList':
        include('view/vehicule/vehiculeList.php');
        break;

    case 'vehiculeDetail':
        include('view/vehicule/vehicule.php'); // ou detailVehicule.php si tu renommes
        break;

    // Page d’accueil
    default:
        include('view/accueil.php');
        break;
}

include('view/commun/footer.php');
?>
