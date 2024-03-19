CREATE TABLE Personne(
   ID_Personne INT NOT NULL AUTO_INCREMENT ,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   centre VARCHAR(50),
   Login VARCHAR(50) UNIQUE,
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
   Dureestage INT,
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

INSERT INTO Personne (nom, prenom, centre, Login, Password) VALUES
('Doe', 'John', 'Centre A', 'john.doe', 'password123'),
('Smith', 'Jane', 'Centre B', 'jane.smith', 'password456');
('Julien', 'Chagnon', 'Centre C', 'julien.chagnon', 'password789');
('Silvain', 'Alméras', 'Centre D', 'silvain.alméras', 'password987');
('Raphaël', 'Affré', 'Centre A', 'raphaël.affré', 'password654');
('Hugo', 'Barrault', 'Centre B', 'hugo.barrault', 'password321');
('Adolphe', 'Gérald', 'Centre C', 'adolphe.gérald', 'password135');
('Timothée', 'Adnet', 'Centre D', 'timothée.adnet', 'password246');
('Francis', 'Chappuis', 'Centre E', 'francis.chappuis', 'password791');
('Benjamin', 'Léger', 'Centre A', 'benjamin.léger', 'password148');

INSERT INTO Notes (Note, Commentaire) VALUES
(4/5, "Un service clientèle exceptionnel et des produits de haute qualité. Une entreprise fiable et digne de confiance."),
(3/5, "Des prix compétitifs, mais des délais de livraison un peu longs. Peut améliorer la communication avec les clients."),
(5/5, "Innovation constante, respect de l\'environnement et engagement social. Une entreprise exemplaire à tous les niveaux."),
(2/5, "Des problèmes récurrents de qualité des produits et de service après-vente. Des efforts à faire pour s'améliorer."),
(4/5, "Une large gamme de produits de haute qualité. Un service client réactif et professionnel."),
(3/5, "Des produits originaux, mais des prix un peu élevés. Une communication à améliorer pour fidéliser la clientèle."),
(5/5, "Une culture d'entreprise forte, des valeurs éthiques et un engagement envers la satisfaction client. Recommandé sans hésitation."),
(2/5, "Des retards fréquents dans les livraisons et un service clientèle peu réactif. Des efforts à fournir pour améliorer l'expérience client."),
(4/5, "Des produits innovants et de qualité. Un bon rapport qualité-prix, mais des délais de réponse un peu longs au service client."),
(3/5, "Une entreprise en croissance avec un potentiel intéressant. Besoin d'investir dans la formation du personnel pour améliorer la qualité des services.");

INSERT INTO Etudiant (photoprofil, ID_Wishlist, ID_Note, ID_Promotion, ID_Personne) VALUES
('etudiant1.png', 1, 3, 1, 1),
('etudiant2.png', 2, 4, 3, 2),
('etudiant3.png', 3, 5, 8, 6),
('etudiant4.png', 4, 1, 10, 7),
('etudiant5.png', 5, 8, 2, 4),
('etudiant6.png', 6, 7, 6, 9),
('etudiant7.png', 7, 8, 4, 5),
('etudiant8.png', 8, 9, 7, 8),
('etudiant1.png', 9, 2, 5, 3),
('etudiant1.png', 10, 10, 9, 10);

INSERT INTO Administrateur (ID_Wishlist, ID_Personne) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

INSERT INTO Offre (Dureestage, Baseremuneration, dateoffre, nbplaces, nbdejapostule, Competence, Destination_promotion, ID_Adresse, ID_Entreprise, ID_Candidature) VALUES
(6, 500, '2023-09-01', 3, 0, 'Java', 'Promo 2024', 1, 1, 1),
(12, 1000, '2023-06-01', 2, 1, 'Marketing Digital', 'Promo 2025', 2, 2, 2),
(10, 1100, '2023-08-01', 5, 4, 'C/C++', 'Promo 2023', 3, 3, 3),
(8, 600, '2023-03-01', 1, 3, 'Réseau', 'Promo 2022', 4, 4, 4),
(5, 700, '2023-01-01', 4, 6, 'Management', 'Promo 2023', 5, 5, 5),
(7, 800, '2023-02-01', 9, 7, 'Comptabilité', 'Promo 2024', 6, 6, 6),
(3, 900, '2024-01-01', 8, 10, 'Python', 'Promo 2025', 7, 7, 7),
(12, 1200, '2024-02-01', 6, 8, 'Robotique', 'Promo 2022', 8, 8, 8),
(9, 800, '2023-09-01', 6, 9, 'Mécanique', 'Promo 2024', 9, 9, 9),
(7, 600, '2023-04-01', 10, 2, 'Matériaux', 'Promo 2023', 10, 10, 10);

