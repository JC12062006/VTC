CREATE DATABASE vtc;
USE vtc;

-- Table Chauffeur
CREATE TABLE Chauffeur (
    Id_Chauffeur INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Num_Tel VARCHAR(15) NOT NULL,
    Nom VARCHAR(50) NOT NULL,
    Prenom VARCHAR(50) NOT NULL
);

-- Table Vehicule
CREATE TABLE Vehicule (
    Id_Vehicule INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Marque VARCHAR(50) NOT NULL,
    Modele VARCHAR(50) NOT NULL,
    Immatriculation VARCHAR(20) NOT NULL UNIQUE,
    Annee INT NOT NULL,
    Places INT NOT NULL
);

-- Table Reservation
CREATE TABLE Reservation (
    Id_Reservation INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Id_Vehicule INT NOT NULL,
    Id_Chauffeur INT NOT NULL,
    Lieu VARCHAR(100) NOT NULL,
    Date_Reservation DATE NOT NULL,
    FOREIGN KEY (Id_Vehicule) REFERENCES Vehicule(Id_Vehicule),
    FOREIGN KEY (Id_Chauffeur) REFERENCES Chauffeur(Id_Chauffeur)
);
