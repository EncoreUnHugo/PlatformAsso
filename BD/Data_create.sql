-- Table des événements
CREATE TABLE Evenement (
    id_evenement INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255),
    date DATE,
    description TEXT
);

-- Table des rôles
CREATE TABLE Role (
    id_role INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100)
);

-- Table des membres
CREATE TABLE Membre (
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(255) UNIQUE,
    mot_de_passe VARCHAR(255),
    id_role INT,
    FOREIGN KEY (id_role) REFERENCES Role(id_role)
);

-- Table des projets
CREATE TABLE Projet (
    id_projet INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    description TEXT,
    statut VARCHAR(100)
);

-- Table des messages
CREATE TABLE Message (
    id_message INT AUTO_INCREMENT PRIMARY KEY,
    contenu TEXT,
    date_envoi DATE
);

-- Table de participation à un événement
CREATE TABLE Participe (
    id_evenement INT,
    id_membre INT,
    PRIMARY KEY (id_evenement, id_membre),
    FOREIGN KEY (id_evenement) REFERENCES Evenement(id_evenement) ON DELETE CASCADE,
    FOREIGN KEY (id_membre) REFERENCES Membre(id_membre) ON DELETE CASCADE
);

-- Table de travail sur un projet
CREATE TABLE Travaille_sur (
    id_membre INT,
    id_projet INT,
    PRIMARY KEY (id_membre, id_projet),
    FOREIGN KEY (id_membre) REFERENCES Membre(id_membre) ON DELETE CASCADE,
    FOREIGN KEY (id_projet) REFERENCES Projet(id_projet) ON DELETE CASCADE
);
