<?php
require_once(__DIR__ . '/../bdd/bdd.php');

// Récupérer toutes les réservations
function getReservations() {
    global $bdd;
    $sql = "
        SELECT r.*, 
               c.Nom AS ChauffeurNom, 
               c.Prenom AS ChauffeurPrenom, 
               c.Num_Tel AS ChauffeurTel,
               v.Marque AS VehiculeMarque, 
               v.Modele AS VehiculeModele, 
               v.Immatriculation AS VehiculeImmatriculation
        FROM Reservation r
        JOIN Chauffeur c ON r.Id_Chauffeur = c.Id_Chauffeur
        JOIN Vehicule v ON r.Id_Vehicule = v.Id_Vehicule
        ORDER BY r.Date_Reservation DESC
    ";
    return $bdd->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}


// Ajouter une réservation
function ajouterReservation($id_chauffeur, $id_vehicule, $lieu, $date) {
    global $bdd;
    $sql = "INSERT INTO Reservation (Id_Chauffeur, Id_Vehicule, Lieu, Date_Reservation) VALUES (?, ?, ?, ?)";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$id_chauffeur, $id_vehicule, $lieu, $date]);
}

// Récupérer une réservation par son ID
function getReservationById($id) {
    global $bdd;
    $sql = "
        SELECT r.*, 
               c.Nom AS ChauffeurNom, 
               c.Prenom AS ChauffeurPrenom, 
               c.Num_Tel AS ChauffeurTel,
               v.Marque AS VehiculeMarque, 
               v.Modele AS VehiculeModele, 
               v.Immatriculation AS VehiculeImmatriculation,
               v.Places AS VehiculePlaces,
               v.Annee AS VehiculeAnnee
        FROM Reservation r
        JOIN Chauffeur c ON r.Id_Chauffeur = c.Id_Chauffeur
        JOIN Vehicule v ON r.Id_Vehicule = v.Id_Vehicule
        WHERE r.Id_Reservation = :id
        LIMIT 1
    ";
    $stmt = $bdd->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
