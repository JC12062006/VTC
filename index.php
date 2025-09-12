<?php
session_start();

include('view/commun/header.php');

// Définition de la page à afficher
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

switch($page) {
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
        include('view/vehicule/vehicule.php'); // à créer si besoin
        break;

    case 'deconnexion':
        session_destroy();
        header('Location: index.php');
        exit();
        break;

    default:
        include('view/accueil.php'); // à créer si besoin
        break;
}

include('view/commun/footer.php');
?>
