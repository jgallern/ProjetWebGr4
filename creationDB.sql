DROP TABLE IF EXISTS contenir;
DROP TABLE IF EXISTS Se_voir_attribué;
DROP TABLE IF EXISTS Exercer_dans;
DROP TABLE IF EXISTS Offre;
DROP TABLE IF EXISTS Candidature;
DROP TABLE IF EXISTS Administrateur;
DROP TABLE IF EXISTS Etudiant;
DROP TABLE IF EXISTS Promotion;
DROP TABLE IF EXISTS Entreprise;
DROP TABLE IF EXISTS Wishlist;
DROP TABLE IF EXISTS SecteurActivite;
DROP TABLE IF EXISTS Pilote;
DROP TABLE IF EXISTS Notes;
DROP TABLE IF EXISTS Personne;
DROP TABLE IF EXISTS Centre;
DROP TABLE IF EXISTS Adresse;

CREATE TABLE Adresse(
    ID_Adresse INT NOT NULL AUTO_INCREMENT,
    Numero_rue INT,
    Nom_rue VARCHAR(200),
    Ville VARCHAR(100),
    PRIMARY KEY(ID_Adresse)
);

CREATE TABLE SecteurActivite(
    ID_secteur INT NOT NULL AUTO_INCREMENT,
    nom_secteur VARCHAR(50),
    PRIMARY KEY(ID_secteur)
);

CREATE TABLE Notes(
    ID_Note INT NOT NULL AUTO_INCREMENT,
    Note INT,
    Commentaire VARCHAR(280),
    PRIMARY KEY(ID_Note)
);


CREATE TABLE Centre(
    ID_Centre INT NOT NULL AUTO_INCREMENT,
    Nom_centre VARCHAR(50),
    ID_Adresse INT,
    PRIMARY KEY(ID_Centre),
    FOREIGN KEY(ID_Adresse) REFERENCES Adresse(ID_Adresse)
);

-- Personne table corrected; added missing ID_Centre column for foreign key
CREATE TABLE Personne(
    ID_Personne INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    Login VARCHAR(50) UNIQUE,
    Password VARCHAR(64),
    ID_Centre INT,
    PRIMARY KEY(ID_Personne),
    FOREIGN KEY(ID_Centre) REFERENCES Centre(ID_Centre)
);

CREATE TABLE Pilote(
    ID_Pilote INT NOT NULL AUTO_INCREMENT,
    photoprofile VARCHAR(50),
    ID_Note INT NOT NULL,
    ID_Personne INT NOT NULL,
    PRIMARY KEY(ID_Pilote),
    FOREIGN KEY(ID_Note) REFERENCES Notes(ID_Note),
    FOREIGN KEY(ID_Personne) REFERENCES Personne(ID_Personne)
);

CREATE TABLE Entreprise(
    ID_Entreprise INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    description VARCHAR(255),
    secteur VARCHAR (255),
    logo VARCHAR(50),
    ID_Adresse INT,
    PRIMARY KEY(ID_Entreprise),
    FOREIGN KEY(ID_Adresse) REFERENCES Adresse(ID_Adresse)
);

CREATE TABLE Promotion(
    ID_Promotion INT NOT NULL AUTO_INCREMENT,
    Nom_Promo VARCHAR(50) UNIQUE,
    ID_Pilote INT NOT NULL,
    PRIMARY KEY(ID_Promotion),
    FOREIGN KEY(ID_Pilote) REFERENCES Pilote(ID_Pilote)
);



CREATE TABLE Offre(
    ID_Offre INT NOT NULL AUTO_INCREMENT,
    Dureestage INT,
    Baseremuneration INT,
    dateoffre DATE,
    nbplaces INT,
    nbdejapostule INT,
    Competence VARCHAR(50),
    Destination_promotion VARCHAR(50),
    ID_Adresse INT,
    ID_Entreprise INT NOT NULL,
    PRIMARY KEY(ID_Offre),
    FOREIGN KEY(ID_Adresse) REFERENCES Adresse(ID_Adresse),
    FOREIGN KEY(ID_Entreprise) REFERENCES Entreprise(ID_Entreprise)
);

-- Wishlist table corrected
CREATE TABLE Wishlist(
    ID_Wishlist INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(ID_Wishlist),
    ID_Offre INT,
    FOREIGN KEY(ID_Offre) REFERENCES Offre(ID_Offre)
);

CREATE TABLE Etudiant(
    ID_Etudiant INT NOT NULL AUTO_INCREMENT,
    photoprofil VARCHAR(50),
    ID_Wishlist INT NOT NULL,
    ID_Note INT NOT NULL,
    ID_Promotion INT NOT NULL,
    ID_Personne INT NOT NULL,
    PRIMARY KEY(ID_Etudiant),
    FOREIGN KEY(ID_Wishlist) REFERENCES Wishlist(ID_Wishlist),
    FOREIGN KEY(ID_Note) REFERENCES Notes(ID_Note),
    FOREIGN KEY(ID_Promotion) REFERENCES Promotion(ID_Promotion),
    FOREIGN KEY(ID_Personne) REFERENCES Personne(ID_Personne)
);

CREATE TABLE Administrateur(
    ID_Administrateur INT NOT NULL AUTO_INCREMENT,
    ID_Wishlist INT NOT NULL,
    ID_Personne INT NOT NULL,
    PRIMARY KEY(ID_Administrateur),
    FOREIGN KEY(ID_Wishlist) REFERENCES Wishlist(ID_Wishlist),
    FOREIGN KEY(ID_Personne) REFERENCES Personne(ID_Personne)
);

CREATE TABLE Candidature(
    ID_Candidature INT NOT NULL AUTO_INCREMENT,
    CV VARCHAR(50),
    lettremotiv VARCHAR(50),
    ID_Etudiant INT NOT NULL,
    PRIMARY KEY(ID_Candidature),
    FOREIGN KEY(ID_Etudiant) REFERENCES Etudiant(ID_Etudiant)
);

CREATE TABLE Se_voir_attribué(
    ID_Entreprise INT NOT NULL,
    ID_Note INT NOT NULL,
    PRIMARY KEY(ID_Entreprise, ID_Note),
    FOREIGN KEY(ID_Entreprise) REFERENCES Entreprise(ID_Entreprise),
    FOREIGN KEY(ID_Note) REFERENCES Notes(ID_Note)
);


CREATE TABLE Exercer_dans(
    ID_Entreprise INT NOT NULL,
    ID_secteur INT NOT NULL,
    PRIMARY KEY(ID_Entreprise, ID_secteur),
    FOREIGN KEY(ID_Entreprise) REFERENCES Entreprise(ID_Entreprise),
    FOREIGN KEY(ID_secteur) REFERENCES SecteurActivite(ID_secteur)
);


CREATE TABLE contenir(
    ID_Offre INT NOT NULL,
    ID_Wishlist INT NOT NULL,
    PRIMARY KEY(ID_Offre, ID_Wishlist),
    FOREIGN KEY(ID_Offre) REFERENCES Offre(ID_Offre),
    FOREIGN KEY(ID_Wishlist) REFERENCES Wishlist(ID_Wishlist)
);
