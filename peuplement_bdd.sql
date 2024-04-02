-- peuplement table adresse

INSERT INTO Adresse (Nom_rue,Numero_rue,Ville)
VALUES ('Avenue Montaigne', 24, 'Paris'),
('Rue Royale', 56, 'Lyon'),
('Place Vendôme', 13, 'Paris'),
('Boulevard Haussmann', 72, 'Marseille'),
('Rue du Faubourg Saint-Honoré', 31, 'Nice'),
('Rue de Rivoli', 88, 'Toulouse'),
('Avenue des Champs-Élysées', 45, 'Nantes'),
('Rue Saint-Honoré', 2, 'Lyon'),
('Boulevard Saint-Germain', 77, 'Bordeaux'),
('Rue de la Paix', 50, 'Paris'),
('Avenue Montaigne', 17, 'Marseille'),
('Rue Royale', 3, 'Nice'),
('Place Vendôme', 29, 'Strasbourg'),
('Boulevard Haussmann', 64, 'Lyon'),
('Rue du Faubourg Saint-Honoré', 11, 'Montpellier'),
('Rue de Rivoli', 41, 'Bordeaux'),
('Avenue des Champs-Élysées', 9, 'Paris'),
('Rue Saint-Honoré', 36, 'Lille'),
('Boulevard Saint-Germain', 28, 'Marseille'),
('Rue de la Paix', 7, 'Toulouse'),
('Avenue Montaigne', 82, 'Strasbourg'),
('Rue Royale', 19, 'Nantes'),
('Place Vendôme', 55, 'Lyon'),
('Boulevard Haussmann', 14, 'Paris'),
('Rue du Faubourg Saint-Honoré', 67, 'Bordeaux'),
('Rue de Rivoli', 23, 'Nice'),
('Avenue des Champs-Élysées', 39, 'Marseille'),
('Rue Saint-Honoré', 91, 'Toulouse'),
('Boulevard Saint-Germain', 4, 'Lille'),
('Rue de la Paix', 72, 'Montpellier'),
('Avenue Montaigne', 5, 'Strasbourg'),
('Rue Royale', 60, 'Bordeaux'),
('Place Vendôme', 10, 'Paris'),
('Boulevard Haussmann', 33, 'Nantes'),
('Rue du Faubourg Saint-Honoré', 27, 'Lyon'),
('Rue de Rivoli', 49, 'Marseille'),
('Avenue des Champs-Élysées', 20, 'Nice'),
('Rue Saint-Honoré', 8, 'Toulouse'),
('Boulevard Saint-Germain', 16, 'Lyon'),
('Rue de la Paix', 38, 'Strasbourg'),
('Avenue Montaigne', 71, 'Bordeaux'),
('Rue Royale', 22, 'Lille'),
('Place Vendôme', 44, 'Montpellier'),
('Boulevard Haussmann', 81, 'Paris'),
('Rue du Faubourg Saint-Honoré', 63, 'Marseille'),
('Rue de Rivoli', 9, 'Toulouse'),
('Avenue des Champs-Élysées', 15, 'Nantes'),
('Rue Saint-Honoré', 30, 'Nice'),
('Boulevard Saint-Germain', 58, 'Lyon'),
('Rue de la Paix', 26, 'Bordeaux'),
('Rue de la Paix', 24, 'Nancy'),
('Boulevard Haussmann', 56, 'Strasbourg'),
('Avenue Montaigne', 13, 'Dijon'),
('Rue Royale', 72, 'Reims'),
('Rue du Faubourg Saint-Honoré', 31, 'Châteauroux'),
('Rue de Rivoli', 88, 'Orléans'),
('Avenue des Champs-Élysées', 45, 'Paris'),
('Place Vendôme', 17, 'Angoulême'),
('Rue Saint-Honoré', 92, 'Brest'),
('Boulevard Saint-Germain', 3, 'La Rochelle'),
('Rue de la Paix', 11, 'Le Mans'),
('Avenue Montaigne', 66, 'Nantes'),
('Rue Royale', 28, 'Saint-Nazaire')
('Rue de la Paix', 24, 'Aix-en-Provence'),
('Boulevard Haussmann', 56, 'Grenoble'),
('Avenue Montaigne', 13, 'Lyon'),
('Rue Royale', 72, 'Nice'),
('Rue du Faubourg Saint-Honoré', 31, 'Sud-Ouest'),
('Rue de Rivoli', 88, 'Bordeaux'),
('Avenue des Champs-Élysées', 45, 'Montpellier'),
('Place Vendôme', 17, 'Pau'),
('Rue Saint-Honoré', 92, 'Toulouse'),
('Boulevard Saint-Germain', 3, 'Lille'),
('Rue de la Paix', 11, 'Rouen'),
('Avenue Montaigne', 66, 'Arras'),
('Rue Royale', 28, 'Caen');




-- peuplement table centre

INSERT INTO Centre(ID_Adresse,Nom_centre)
VALUES(51, 'CESI Aix-en-Provence'),
(52, 'CESI Grenoble'),
(53, 'CESI Lyon'),
(54, 'CESI Nice'),
(55, 'CESI Sud-Ouest'),
(56, 'CESI Bordeaux'),
(57, 'CESI Montpellier'),
(58, 'CESI Pau'),
(59, 'CESI Toulouse'),
(60, 'CESI Lille'),
(61, 'CESI Rouen'),
(62, 'CESI Arras'),
(63, 'CESI Caen'),
(64, 'CESI Nancy'),
(65, 'CESI Strasbourg'),
(66, 'CESI Dijon'),
(67, 'CESI Reims'),
(68, 'CESI Châteauroux'),
(69, 'CESI Orléans'),
(70, 'CESI Paris'),
(71, 'CESI Angoulême'),
(72, 'CESI Brest'),
(73, 'CESI La Rochelle'),
(74, 'CESI Le Mans'),
(75, 'CESI Nantes'),
(76, 'CESI Saint-Nazaire');


-- peuplement table personne

INSERT INTO Personne (ID_Centre,Login,nom,Password,prenom)
VALUES (23, 'jdoe', 'Doe', sha2('password123',256), 'John'),
(12, 'asmith', 'Smith', sha2('abc123',256), 'Alice'),
(7, 'mjohnson', 'Johnson', sha2('qwerty',256), 'Michael'),
(19, 'ssmith', 'Smith', sha2('letmein',256), 'Sarah'),
(15, 'eroberts', 'Roberts', sha2('pass123',256), 'Emily'),
(5, 'mjones', 'Jones', sha2('password',256), 'Mark'),
(8, 'bjackson', 'Jackson', sha2('abc123',256), 'Brian'),
(17, 'cwilliams', 'Williams', sha2('password123',256), 'Caroline'),
(3, 'rthomas', 'Thomas', sha2('letmein',256), 'Rachel'),
(14, 'jlee', 'Lee', sha2('123456',256), 'Jessica'),
(24, 'bnguyen', 'Nguyen', sha2('password',256), 'Brandon'),
(10, 'htran', 'Tran', sha2('abc123',256), 'Hannah'),
(21, 'wwilson', 'Wilson', sha2('letmein',256), 'William'),
(6, 'mlambert', 'Lambert', sha2('password123',256), 'Melissa'),
(18, 'rperez', 'Perez', sha2('qwerty',256), 'Robert'),
(13, 'dcook', 'Cook', sha2('pass123',256), 'Daniel'),
(22, 'jmurphy', 'Murphy', sha2('abc123',256), 'Jennifer'),
(2, 'gscott', 'Scott', sha2('password',256), 'Grace'),
(4, 'klam', 'Lam', sha2('letmein',256), 'Kevin'),
(1, 'lpark', 'Park', sha2('123456',256), 'Laura'),
(20, 'bpham', 'Pham', sha2('password',256), 'Bryan'),
(16, 'gcooper', 'Cooper', sha2('letmein',256), 'George'),
(9, 'zjiang', 'Jiang', sha2('password123',256), 'Zoe'),
(25, 'rthompson', 'Thompson', sha2('abc123',256), 'Rebecca'),
(15, 'cjones', 'Jones', sha2('qwerty',256), 'Christopher'),
(7, 'lchen', 'Chen', sha2('letmein',256), 'Linda'),
(12, 'mramirez', 'Ramirez', sha2('password123',256), 'Michael'),
(19, 'rrivera', 'Rivera', sha2('abc123',256), 'Rachel'),
(5, 'rkim', 'Kim', sha2('password',256), 'Ryan'),
(8, 'jchoi', 'Choi', sha2('letmein',256), 'Jessica'),
(17, 'bkim', 'Kim', sha2('123456',256), 'Benjamin'),
(3, 'alee', 'Lee', sha2('password123',256), 'Anna'),
(14, 'snguyen', 'Nguyen', sha2('abc123',256), 'Sophia'),
(24, 'jli', 'Li', sha2('letmein',256), 'Jonathan'),
(10, 'ykim', 'Kim', sha2('password',256), 'Yasmine'),
(21, 'dchang', 'Chang', sha2('qwerty',256), 'David'),
(6, 'jcho', 'Cho', sha2('abc123',256), 'Jennifer'),
(18, 'bzhao', 'Zhao', sha2('password123',256), 'Brandon'),
(13, 'eyoung', 'Young', sha2('letmein',256), 'Elizabeth'),
(22, 'jjung', 'Jung', sha2('123456',256), 'Julia'),
(2, 'mwoo', 'Woo', sha2('password',256), 'Michael'),
(4, 'wlee', 'Lee', sha2('abc123',256), 'William'),
(1, 'wlin', 'Lin', sha2('letmein',256), 'Wendy'),
(20, 'skim', 'Kim', sha2('password123',256), 'Sophie'),
(11, 'mchoi', 'Choi', sha2('qwerty',256), 'Michael'),
(16, 'kho', 'Ho', sha2('abc123',256), 'Kevin'),
(9, 'khan', 'Han', sha2('password',256), 'Karen'),
(25, 'ksong', 'Song', sha2('letmein',256), 'Kevin'),
(23, 'ypark', 'Park', sha2('123456',256), 'Yvonne');


-- peuplement table secteuractivites

INSERT INTO Secteuractivite(nom_secteur) VALUES('Informatique'),('Bâtiment et travaux publics'),('Systèmes embarqués'),('Généraliste');


-- peuplement table wishlist

INSERT INTO Wishlist(ID_Offre)
VALUES (null),(null),(null),(null);


--peuplement table administrateur

INSERT INTO Administrateur(ID_Personne,ID_Wishlist) VALUES(100,1),(101,2),(102,3),(103,4);








