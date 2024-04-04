<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Gestion Etudiants
    </title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script_gestion_etudiants_admin.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">
    <link rel="manifest" href="../assets/manifest.json">
</head>

<body>
    <nav id="navbar">
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <a href="../view_admin/page_accueil_admin.php"><img id="logo_seb" src="../../assets/images/logo_blanc.png"
                alt="logo" width="60px" /></a>
        <div id="lien_navbar">
            <a class="lien_nav police_texte" href="../view_admin/gestion_entreprise_admin.php"
                id="lien_entreprises_etudiants">Entreprises</a>
            <a class="lien_nav police_texte" href="../view_admin/gestion_offre_admin.php"
                id="lien_offres_etudiants">Offres</a>
            <a class="lien_nav police_texte" href="../view_admin/gestion_pilotes_admin.php"
                id="lien_offres_etudiants">Pilotes</a>
            <a class="lien_nav police_texte" href="../view_admin/gestion_etudiants_admin.php"
                id="lien_offres_etudiants">Etudiants</a>
            <a class="lien_nav police_texte" href="../view_admin/page_wishlist_candidatures_admin.php"
                id="lien_candidatures">Wishlit et Candidatures</a>
        </div>
        <div id="profil">
            <div id="detail_profil" class="police_texte">
                <h3 id="nom_prenom_etudiant">Quentin Baud</h3>
                <a style="text-decoration: none;" href="../../controllers/deconnection_controller.php"><button id="bouton_deconnexion">Se déconnecter</button></a>
            </div>

            <img id="photo_profil" src="../../assets/images/photo_profil.png" alt="photo_profil">
        </div>

    </nav>

    <div id="lien_navbar_expand">
        <a class="lien_nav police_texte linking-animation delay-0" href="../view_admin/page_accueil_admin.php"
            id="lien_entreprises_etudiants">Acceuil</a>
        <a class="lien_nav police_texte linking-animation delay-1" href="../view_admin/gestion_entreprise_admin.php"
            id="lien_entreprises_etudiants">Entreprises</a>
        <a class="lien_nav police_texte linking-animation delay-2" href="../view_admin/gestion_offre_admin.php"
            id="lien_offres_etudiants">Offres</a>
        <a class="lien_nav police_texte linking-animation delay-3" href="../view_admin/gestion_etudiants_admin.php"
            id="lien_offres_etudiants">Etudiants</a>
        <a class="lien_nav police_texte linking-animation delay-4" href="../view_admin/gestion_pilotes_admin.php"
            id="lien_offres_etudiants">Pilotes</a>
        <a class="lien_nav police_texte linking-animation delay-5" href="../view_admin/page_wishlist_candidatures.php"
            id="lien_candidatures">Wishlit et Candidatures</a>
    </div>

    <main>
        <?php
        if (isset($_GET["creation"])) {
            if ($_GET["creation"] == "echec") {
                echo "<p style='text-align:center'>Erreur lors de la création du compte étudiant  	&#128546</p>";
            } else if ($_GET["creation"] == "succes") {

                echo "<p style='text-align:center'>Création du compte étudiant réussie &#128077</p>";
            }
        }
        ?>
        <h1 class="titre police_texte">Gestion des Etudiants</h1>

        <section class="bloc_gestion police_texte">
            <form method="post" action="../../controllers/Chercher_compte.php">
            <h2>Rechercher un étudiant</h2>
            <div id="recherche_container">
                <div id="form_recherche">
                        <div class="form-row">
                            <label for="search-name">Nom de l'étudiant :</label><br>
                            <input name="search-name" type="text" placeholder="Entrez le nom de l'étudiant" />
                        </div><br>
                        <div class="form-row">
                            <label for="search-name">Prénom de l'étudiant :</label><br>
                            <input name="search-prenom" type="text" placeholder="Entrez le prénom de l'étudiant" />
                        </div><br>
                        <label>Promotion :</label>
                        <select name="promo">
                            <option>--Choisir--</option>
                            <option>A2 informatique</option>
                            <option>A2 BTP</option>
                            <option>A2 S3E</option>
                            <option>A2 Généraliste</option>
                            <option>A3 informatique</option>
                            <option>A3 BTP</option>
                            <option>A3 S3E</option>
                            <option>A3 Généraliste</option>
                            <option>A4 informatique</option>
                            <option>A4 BTP</option>
                            <option>A4 S3E</option>
                            <option>A4 Généraliste</option>
                            <option>A5 informatique</option>
                            <option>A5 BTP</option>
                            <option>A5 S3E</option>
                            <option>A5 Généraliste</option>
                        </select><br>
                        <label>Centre :</label><br>
                        <select>
                            <option disabled selected>Choisissez un centre</option>
                            <option disabled selected>Est</option>
                            <option>Strasbourg</option>
                            <option>Dijon</option>
                            <option>Nancy</option>
                            <option>Reims</option>
                            <option disabled selected>Sud-Est</option>
                            <option>Aix-en-provence</option>
                            <option>Grenoble</option>
                            <option>Lyon</option>
                            <option>Nice</option>
                            <option disabled selected>Ile-de-France-Centre</option>
                            <option>Châteauroux</option>
                            <option>Orléans</option>
                            <option>Paris Nanterre</option>
                            <option disabled selected>Ouest</option>
                            <option>Angoulême</option>
                            <option>Brest</option>
                            <option>La Rochelle</option>
                            <option>Le Mans</option>
                            <option>Nantes</option>
                            <option>Saint-Nazaire</option>
                            <option disabled selected>Sud-Ouest</option>
                            <option>Bordeaux</option>
                            <option>Montpellier</option>
                            <option>Pau</option>
                            <option>Toulouse</option>
                            <option disabled selected>Nord-Ouest</option>
                            <option>Lille</option>
                            <option>Rouen</option>
                            <option>Arras</option>
                            <option>Cean</option>
                        </select>
                        <br>

                        <div class="form_buttons">
                            <button type="submit" class="button-search">Rechercher</button>
                            <button type="reset" class="button-reset">Réinitialiser</button>
                        </div>
            </form>
            </div>
            <div id="fiches_entreprises_et_boutons">
                <div id="result_recherche_entreprise">
                    <div class="recherche_fiche_entreprise">
                        <img width="80px"
                            src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                            alt="img entreprise">
                        <h3>Intitulé 1</h3>
                        <p>A5 informatique</p>
                    </div>
                    <div class="recherche_fiche_entreprise">
                        <img width="80px"
                            src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                            alt="img entreprise">
                        <h3>Intitulé 1</h3>
                        <p>A5 informatique</p>
                    </div>
                    <div class="recherche_fiche_entreprise">
                        <img width="80px"
                            src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                            alt="img entreprise">
                        <h3>Intitulé 1</h3>
                        <p>A5 informatique</p>
                    </div>
                    <div class="recherche_fiche_entreprise">
                        <img width="80px"
                            src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                            alt="img entreprise">
                        <h3>Intitulé 1</h3>
                        <p>A5 informatique</p>
                    </div>
                    <div class="recherche_fiche_entreprise">
                        <img width="80px"
                            src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                            alt="img entreprise">
                        <h3>Intitulé 1</h3>
                        <p>A5 informatique</p>
                    </div>
                    
                    

                    <div id="overlay"></div>
                    <div id="message">Veuillez sélectionner une entreprise</div>
                </div>


                <div id="icones_modif">
                    <div class="image-container" id="btn_modif">
                        <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/ico_modifier.png"
                            width="30px">
                        <div class="overlay"></div>
                    </div>
                </div>

            </div>
            </div>
            </form>

        </section>

        <div id="overlay_suppression"></div>

        <div id="confirmationSuppression" class="police_texte">
            <p>Voulez-vous vraiment supprimer l'entreprise ?</p>
            <button id="btnOui">Oui</button>
            <button id="btnNon">Non</button>
        </div>

        <section id="result_all">
            <fieldset id="result_modif" class="police_texte">
                <legend>Modifier un étudiant</legend>
                <form>
                    <div class="form-row">
                        <label for="search-name">Nom de l'étudiant :</label><br>
                        <input type="text" placeholder="Entrez le nom de l'étudiant" />
                    </div><br>
                    <div class="form-row">
                        <label for="search-name">Prénom de l'étudiant :</label><br>
                        <input type="text" placeholder="Entrez le prénom de l'étudiant" />
                    </div><br>
                    <label>Promotion :</label><br>
                    <select name="promo">
                        <option>--Choisir--</option>
                        <option>A2 informatique</option>
                        <option>A2 BTP</option>
                        <option>A2 S3E</option>
                        <option>A2 Généraliste</option>
                        <option>A3 informatique</option>
                        <option>A3 BTP</option>
                        <option>A3 S3E</option>
                        <option>A3 Généraliste</option>
                        <option>A4 informatique</option>
                        <option>A4 BTP</option>
                        <option>A4 S3E</option>
                        <option>A4 Généraliste</option>
                        <option>A5 informatique</option>
                        <option>A5 BTP</option>
                        <option>A5 S3E</option>
                        <option>A5 Généraliste</option>
                    </select><br>
                    <label>Centre :</label><br>
                    <select>
                        <option disabled selected>Choisissez un centre</option>
                        <option disabled selected>Est</option>
                        <option>Strasbourg</option>
                        <option>Dijon</option>
                        <option>Nancy</option>
                        <option>Reims</option>
                        <option disabled selected>Sud-Est</option>
                        <option>Aix-en-provence</option>
                        <option>Grenoble</option>
                        <option>Lyon</option>
                        <option>Nice</option>
                        <option disabled selected>Ile-de-France-Centre</option>
                        <option>Châteauroux</option>
                        <option>Orléans</option>
                        <option>Paris Nanterre</option>
                        <option disabled selected>Ouest</option>
                        <option>Angoulême</option>
                        <option>Brest</option>
                        <option>La Rochelle</option>
                        <option>Le Mans</option>
                        <option>Nantes</option>
                        <option>Saint-Nazaire</option>
                        <option disabled selected>Sud-Ouest</option>
                        <option>Bordeaux</option>
                        <option>Montpellier</option>
                        <option>Pau</option>
                        <option>Toulouse</option>
                        <option disabled selected>Nord-Ouest</option>
                        <option>Lille</option>
                        <option>Rouen</option>
                        <option>Arras</option>
                        <option>Cean</option>
                    </select>
                    <div class="form-row">
                        <label for="create-sector">Photo de l'étudiant :</label><br>
                        <input name="image_entreprise" type="file" accept="image/jpeg, image/png">
                    </div>
                    <div class="form-actions">
                        <button class="button-search">Modifier</button>
                        <button class="button-reset">Réinitialiser</button>
                    </div>
                </form>
            </fieldset>


            <fieldset id="result_stats" class="police_texte">
                <legend>Statistiques de l'étudiant</legend>
                <p><strong>Nom de l'entreprise :</strong> GOGO Corporation</p>
                <p><strong>Le top des offres :</strong></p>
                <p><strong>Nombre d'étudiants actuellement en stage :</strong00< /p>
                        <div class="rating">
                            <span><strong>Moyenne de l'entreprise :</strong></span>
                            <div class="stars">★★★☆☆</div>
                        </div>
            </fieldset>

        </section>

        <section class="bloc_gestion police_texte">
            <h2>Créer un étudiant</h2>
            <form methode="post" action="../../controllers/creation_compte.php" >
            <div class="form-row">
                <label for="search-name">Nom de l'étudiant : *</label><br>
                <input name="search-name" id="search-name" type="text" placeholder="Entrez le nom de l'étudiant" required/>
            </div><br>
            <div class="form-row">
                <label for="search-name">Prénom de l'étudiant : *</label><br>
                <input  name="search-prenom" id="search-name" type="text" placeholder="Entrez le prénom de l'étudiant" required />
            </div><br>
            <label>Promotion : *</label><br>
            <select required name="promo">
                <option>--Choisir--</option>
                <option>A2 informatique</option>
                <option>A2 BTP</option>
                <option>A2 S3E</option>
                <option>A2 Généraliste</option>
                <option>A3 informatique</option>
                <option>A3 BTP</option>
                <option>A3 S3E</option>
                <option>A3 Généraliste</option>
                <option>A4 informatique</option>
                <option>A4 BTP</option>
                <option>A4 S3E</option>
                <option>A4 Généraliste</option>
                <option>A5 informatique</option>
                <option>A5 BTP</option>
                <option>A5 S3E</option>
                <option>A5 Généraliste</option>
            </select><br>
            <label>Centre : *</label><br>
            <select required name="search-sector">
                <option disabled selected>Choisissez un centre</option>
                <option disabled selected>Est</option>
                <option>Strasbourg</option>
                <option>Dijon</option>
                <option>Nancy</option>
                <option>Reims</option>
                <option disabled selected>Sud-Est</option>
                <option>Aix-en-provence</option>
                <option>Grenoble</option>
                <option>Lyon</option>
                <option>Nice</option>
                <option disabled selected>Ile-de-France-Centre</option>
                <option>Châteauroux</option>
                <option>Orléans</option>
                <option>Paris Nanterre</option>
                <option disabled selected>Ouest</option>
                <option>Angoulême</option>
                <option>Brest</option>
                <option>La Rochelle</option>
                <option>Le Mans</option>
                <option>Nantes</option>
                <option>Saint-Nazaire</option>
                <option disabled selected>Sud-Ouest</option>
                <option>Bordeaux</option>
                <option>Montpellier</option>
                <option>Pau</option>
                <option>Toulouse</option>
                <option disabled selected>Nord-Ouest</option>
                <option>Lille</option>
                <option>Rouen</option>
                <option>Arras</option>
                <option>Cean</option>
            </select>
            <div class="form-row">
                <label for="create-sector">Photo de l'étudiant :</label><br>
                <input name="image_entreprise" type="file" accept="image/jpeg, image/png">
            </div>
            <div class="form-row">
                <label for="create-sector">Login : *</label><br>
                <input required  name="login" id="search-name" type="text" placeholder="Entrez le login de connexion de l'étudiant" />

                </div>
                <div class="form-row">
                    <label for="create-sector">Mot de passe : *</label><br>
                    <input required name="password" type="password"
                        placeholder="Entrez le mot de passe de connexion de l'étudiant" />

                </div>
                <div class="form-actions">
                    <button class="button-search">Créer</button>
                    <button class="button-reset">Réinitialiser</button>
                    <p> *: champ obligatoire </p>
                </div>
            </form>
        </section>


        
        <footer class="police_texte">
    &copy; Stage En Bref. <br> Tous droits réservés <br>
    <a href="mentions_legales.php">Mentions Légales</a>
</footer></body>

</html>