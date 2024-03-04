CREATE TABLE Personne(
   ID_Personne INT NOT NULL AUTO_INCREMENT ,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   centre VARCHAR(50),
   Login VARCHAR(50),
   Password VARCHAR(50),
   PRIMARY KEY(ID_Personne)
);

CREATE TABLE Notes(
   ID_Note INT NOT NULL AUTO_INCREMENT ,
   Note INT,
   Commentaire VARCHAR(280),
   PRIMARY KEY(ID_Note)
);

CREATE TABLE Centre(
   ID_Centre INT NOT NULL AUTO_INCREMENT ,
   Nom_centre VARCHAR(50),
   ID_Personne INT NOT NULL,
   PRIMARY KEY(ID_Centre),
   FOREIGN KEY(ID_Personne) REFERENCES Personne(ID_Personne)
);

CREATE TABLE Pilote(
   ID_Pilote INT NOT NULL AUTO_INCREMENT ,
   photoprofile VARCHAR(50),
   ID_Note INT NOT NULL,
   ID_Personne INT NOT NULL,
   PRIMARY KEY(ID_Pilote),
   UNIQUE(ID_Personne),
   FOREIGN KEY(ID_Note) REFERENCES Notes(ID_Note),
   FOREIGN KEY(ID_Personne) REFERENCES Personne(ID_Personne)
);

CREATE TABLE Adresse(
   ID_Adresse INT NOT NULL AUTO_INCREMENT,
   Numero_rue INT,
   Nom_rue VARCHAR(200),
   Ville VARCHAR(100),
   ID_Centre INT NOT NULL,
   PRIMARY KEY(ID_Adresse),
   UNIQUE(ID_Centre),
   FOREIGN KEY(ID_Centre) REFERENCES Centre(ID_Centre)
);

CREATE TABLE SecteurActivite(
   ID_secteur INT NOT NULL AUTO_INCREMENT ,
   nom_secteur VARCHAR(50),
   PRIMARY KEY(ID_secteur)
);

CREATE TABLE Wishlist(
   ID_Wishlist INT NOT NULL AUTO_INCREMENT,
   PRIMARY KEY(ID_Wishlist)
);

CREATE TABLE Entreprise(
   ID_Entreprise INT NOT NULL AUTO_INCREMENT,
   nom VARCHAR(50),
   logo VARCHAR(50),
   ID_Adresse INT,
   PRIMARY KEY(ID_Entreprise),
   FOREIGN KEY(ID_Adresse) REFERENCES Adresse(ID_Adresse)
);

CREATE TABLE Promotion(
   ID_Promotion INT NOT NULL AUTO_INCREMENT,
   Nom_Promo VARCHAR(50),
   ID_Pilote INT NOT NULL,
   PRIMARY KEY(ID_Promotion),
   FOREIGN KEY(ID_Pilote) REFERENCES Pilote(ID_Pilote)
);

CREATE TABLE Etudiant(
   ID_Etudiant INT NOT NULL AUTO_INCREMENT,
   photoprofil VARCHAR(50),
   ID_Wishlist INT NOT NULL,
   ID_Note INT NOT NULL,
   ID_Promotion INT NOT NULL,
   ID_Personne INT NOT NULL,
   PRIMARY KEY(ID_Etudiant),
   UNIQUE(ID_Personne),
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
   UNIQUE(ID_Personne),
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

CREATE TABLE Offre(
   ID_Offre INT NOT NULL AUTO_INCREMENT,
   Dureestrage INT,
   Baseremuneration INT,
   dateoffre DATE,
   nbplaces INT,
   nbdejapostule INT,
   Competence VARCHAR(50),
   Destination_promotion VARCHAR(50),
   ID_Adresse INT,
   ID_Entreprise INT NOT NULL,
   ID_Candidature INT NOT NULL,
   PRIMARY KEY(ID_Offre),
   UNIQUE(ID_Adresse),
   FOREIGN KEY(ID_Adresse) REFERENCES Adresse(ID_Adresse),
   FOREIGN KEY(ID_Entreprise) REFERENCES Entreprise(ID_Entreprise),
   FOREIGN KEY(ID_Candidature) REFERENCES Candidature(ID_Candidature)
);

CREATE TABLE Se_voir_attribué(
   ID_Entreprise INT NOT NULL AUTO_INCREMENT,
   ID_Note INT,
   PRIMARY KEY(ID_Entreprise, ID_Note),
   FOREIGN KEY(ID_Entreprise) REFERENCES Entreprise(ID_Entreprise),
   FOREIGN KEY(ID_Note) REFERENCES Notes(ID_Note)
);

CREATE TABLE Exercer_dans(
   ID_Entreprise INT NOT NULL AUTO_INCREMENT,
   ID_secteur INT,
   PRIMARY KEY(ID_Entreprise, ID_secteur),
   FOREIGN KEY(ID_Entreprise) REFERENCES Entreprise(ID_Entreprise),
   FOREIGN KEY(ID_secteur) REFERENCES SecteurActivite(ID_secteur)
);

CREATE TABLE contenir(
   ID_Offre INT NOT NULL AUTO_INCREMENT,
   ID_Wishlist INT,
   PRIMARY KEY(ID_Offre, ID_Wishlist),
   FOREIGN KEY(ID_Offre) REFERENCES Offre(ID_Offre),
   FOREIGN KEY(ID_Wishlist) REFERENCES Wishlist(ID_Wishlist)
);
