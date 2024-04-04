<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Gestion Pilotes
    </title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="script.js"></script>
    <link rel="icon" href="" type="image/png">

<body>
    <nav id="navbar">
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <img id="logo_seb" src="./logo_png.png" alt="logo" width="150px" />
        <div id="lien_navbar">
            
            <a class="lien_nav police_texte" href="gestion_offres_pilote_admin.html"
            id="lien_accueil">Accueil</a>

            <a class="lien_nav police_texte" href="gestion_offres_pilote_admin.html"
                id="lien_offres_etudiants">Offres</a>
            <a class="lien_nav police_texte" href="gestion_pilotes_admin.html" id="lien_offres_etudiants">Pilotes</a>
            <a class="lien_nav police_texte" href="gestion_entreprise_pilote_admin.html"
                id="lien_offres_etudiants">Etudiants</a>
            <a class="lien_nav police_texte" href="page_wishlist_candidatures.html" id="lien_wishlist">Mes listes</a>
            <a class="lien_nav police_texte" href="page_wishlist_candidatures.html"
                id="lien_candidatures">Candidatures</a>
        </div>
        <div id="profil">
            <div id="detail_profil" class="police_texte">
                <h3 id="nom_prenom_etudiant">Quentin Baud</h3>
                <a style="text-decoration: none;" href="../controllers/deconnection_controller.php"><button id="bouton_deconnexion">Se déconnecter</button></a>
            </div>

            <img id="photo_profil"
                src="C:\Users\quent\OneDrive - Association Cesi Viacesi mail\A2\04_web\Projet\images\photo_profil.png"
                alt="photo_profil">
        </div>

    </nav>

    <div id="lien_navbar_expand">
        <a class="lien_nav police_texte linking-animation delay-0" href="page_accueil_admin.html"
            id="lien_entreprises_etudiants">Acceuil</a>
        <a class="lien_nav police_texte linking-animation delay-1" href="gestion_entreprise_pilote_admin.html"
            id="lien_entreprises_etudiants">Entreprises</a>
        <a class="lien_nav police_texte linking-animation delay-2" href="gestion_entreprise_pilote_admin.html"
            id="lien_offres_etudiants">Offres</a>
        <a class="lien_nav police_texte linking-animation delay-3" href="gestion_entreprise_pilote_admin.html"
            id="lien_offres_etudiants">Etudiants</a>
        <a class="lien_nav police_texte linking-animation delay-4" href="gestion_entreprise_pilote_admin.html"
            id="lien_offres_etudiants">Etudiants</a>
        <a class="lien_nav police_texte linking-animation delay-5" href="page_wishlist_candidatures.html"
            id="lien_candidatures">Candidatures</a>
    </div>

    <main>
        <h1 class="titre police_texte">Gestion des Pilotes</h1>

        <section class="bloc_gestion police_texte">
            <h2 id="titre_recherche">Rechercher un pilote</h2>
            <div id="recherche_container">

                <div id="form_recherche">
                    <form>
                        <div class="form-row">
                            <label for="search-name">Nom du pilote :</label><br>
                            <input id="search-name" type="text" placeholder="Entrez le nom du pilote">
                        </div>
                        <div class="form-row">
                            <label for="search-stages">Prénom du pilote :</label><br>
                            <input id="search-stages" type="text" placeholder="Entrez le prénom du pilote">
                        </div>
                        <div class="form-row">
                            <label for="search-sector">Centre :</label><br>
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
                        </div>
                        <div class="form-row">
                            <label for="search-name">Promotion :</label><br>
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
                            </select>
                        </div>
                        <div class="form_buttons">
                            <button class="button-search">Rechercher</button>
                            <button class="button-reset">Réinitialiser</button>
                        </div>
                    </form>
                </div>
                <div id="fiches_entreprises_et_boutons">
                    <div id="result_recherche_entreprise">
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                                alt="img entreprise">
                            <h3>Nom Prénom</h3>
                            <p>Centre</p>
                            <p>Promos :</p>
                            <ul>
                                <li>A1</li>
                                <li>A2</li>
                                <li>A3</li>
                            </ul>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                                alt="img entreprise">
                            <h3>Nom Prénom</h3>
                            <p>Centre</p>
                            <p>Promos :</p>
                            <ul>
                                <li>A1</li>
                                <li>A2</li>
                                <li>A3</li>
                            </ul>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                                alt="img entreprise">
                            <h3>Nom Prénom</h3>
                            <p>Centre</p>
                            <p>Promos :</p>
                            <ul>
                                <li>A1</li>
                                <li>A2</li>
                                <li>A3</li>
                            </ul>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                                alt="img entreprise">
                            <h3>Nom Prénom</h3>
                            <p>Centre</p>
                            <p>Promos :</p>
                            <ul>
                                <li>A1</li>
                                <li>A2</li>
                                <li>A3</li>
                            </ul>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                                alt="img entreprise">
                            <h3>Nom Prénom</h3>
                            <p>Centre</p>
                            <p>Promos :</p>
                            <ul>
                                <li>A1</li>
                                <li>A2</li>
                                <li>A3</li>
                            </ul>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                                alt="img entreprise">
                            <h3>Nom Prénom</h3>
                            <p>Centre</p>
                            <p>Promos :</p>
                            <ul>
                                <li>A1</li>
                                <li>A2</li>
                                <li>A3</li>
                            </ul>
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

        </section>

        <div id="overlay_suppression"></div>

        <div id="confirmationSuppression" class="police_texte">
            <p>Voulez-vous vraiment supprimer l'entreprise ?</p>
            <button id="btnOui">Oui</button>
            <button id="btnNon">Non</button>
        </div>

        <section id="result_all">
            <fieldset id="result_modif_pilote" class="police_texte">
                <legend>Modifer un pilote</legend>
                <form>
                    <div id="deux_partie_modif">
                        <label>Nouveau nom :</label><br>
                        <input type="text" id="nouv_nom" name="nouv_nom_pilote" placeholder="Nouveau nom">
                        <br>
                        <label>Nouveau Prénom :</label><br>
                        <input type="text" id="nouv_nom" name="nouv_prenom_pilote" placeholder="Nouveau nom">
                        <br>
                        <label>Nouveau centre :</label><br>
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
                        <label for="search-name">Promotion :</label><br>
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
                        </select>

                        <br>
                        <label>Nouvelle image :</label><br>
                        <input name="image_entreprise" type="file" accept="image/jpeg, image/png">

                        <button id="supprimer_entreprise">Supprimer le pilote</button> <br>
                        <div id="btn_envoi">
                            <button type="reset">Réinitialiser</button>
                            <button type="submit">Modifer</button>
                        </div>
                    </div>

                </form>
            </fieldset>

        </section>

        <section class="bloc_gestion police_texte">
            <h2>Créer un pilote</h2>
            <div class="form-row">
                <label for="create-name">Nom du pilote :</label><br>
                <input id="create-name" type="text" placeholder="Entrez le nom du pilote" />
            </div>
            <div class="form-row">
                <label for="create-name">Prénom du pilote :</label><br>
                <input id="create-name" type="text" placeholder="Entrez le nom du pilote" />
            </div>

            <div class="form-row">
                <label for="search-sector">Centre :</label><br>
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
            </div>
            <label for="search-name">Promotions :</label><br>
            <div id="check_promos" name="promo">
                <input type="checkbox">A2 informatique</input type="checkbox">
                <input type="checkbox">A2 BTP</input type="checkbox">
                <input type="checkbox">A2 S3E</input type="checkbox">
                <input type="checkbox">A2 Généraliste</input type="checkbox">
                <input type="checkbox">A3 informatique</input type="checkbox">
                <input type="checkbox">A3 BTP</input type="checkbox">
                <input type="checkbox">A3 S3E</input type="checkbox">
                <input type="checkbox">A3 Généraliste</input type="checkbox">
                <input type="checkbox">A4 informatique</input type="checkbox">
                <input type="checkbox">A4 BTP</input type="checkbox">
                <input type="checkbox">A4 S3E</input type="checkbox">
                <input type="checkbox">A4 Généraliste</input type="checkbox">
                <input type="checkbox">A5 informatique</input type="checkbox">
                <input type="checkbox">A5 BTP</input type="checkbox">
                <input type="checkbox">A5 S3E</input type="checkbox">
                <input type="checkbox">A5 Généraliste</input type="checkbox">
            </select><br>
            <div class="form-row">
                <label for="create-sector">Photo du pilote :</label><br>
                <input name="image_entreprise" type="file" accept="image/jpeg, image/png">
            </div>
            <div class="form-actions">
                <button class="button-search">Créer</button>
                <button class="button-reset">Réinitialiser</button>
            </div>
        </section>



        <footer class="police_texte">
    &copy; Stage En Bref. <br> Tous droits réservés <br>
    <a href="mentions_legales.php">Mentions Légales</a>
</footer></body>

</html>
