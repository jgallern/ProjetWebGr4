<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Gestion Pilotes
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="icon" href="" type="image/png">

<body>
    <nav id="navbar">
        <img id="logo_seb" src="./logo_png.png" alt="logo" width="150px" />
        <div id="lien_navbar">
            <a class="lien_nav police_texte" href="gestion_entreprise_pilote_admin.html"
                id="lien_entreprises_etudiants">Entreprises</a>
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
                <button id="bouton_voir_profil">Voir le profil</button>
                <button id="bouton_deconnexion">Se déconnecter</button>
            </div>

            <img id="photo_profil"
                src="C:\Users\quent\OneDrive - Association Cesi Viacesi mail\A2\04_web\Projet\images\photo_profil.png"
                alt="photo_profil">
        </div>

    </nav>

    <main>
        <h1 class="titre police_texte">Gestion des Pilotes</h1>

        <section class="bloc_gestion police_texte">
            <h2>Rechercher un pilote</h2>
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
                        <div class="image-container" id="btn_stats">
                            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/ico_stats.png"
                                width="30px">
                            <div class="overlay"></div>
                        </div>
                        <div class="image-container" id="btn_voir">
                            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/ico_oeil.png"
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


            <fieldset id="result_stats" class="police_texte">
                <legend>Statistiques de l'entreprise</legend>
                <p><strong>Nom de l'entreprise :</strong> GOGO Corporation</p>
                <p><strong>Le top des offres :</strong></p>
                <p><strong>Nombre d'étudiants actuellement en stage :</strong00< /p>
                        <div class="rating">
                            <span><strong>Moyenne de l'entreprise :</strong></span>
                            <div class="stars">★★★☆☆</div>
                        </div>
            </fieldset>

        </section>

        <section class="bloc_gestion police_textea>
            <h2>Créer une entreprise</h2>
            <div class="form-row">
                <label for="create-name">Nom de l'entreprise :</label><br>
                <input id="create-name" type="text" placeholder="Entrez le nom de l'entreprise" />
            </div>
            <div class="form-row">
                <label for="create-name">Description de l'entreprise</label><br>
                <textarea class="police_texte" id="description_entreprise" name="description_entreprise"
                    placeholder="Decrivez l'entreprise ici"></textarea>
            </div>
            <div class="form-row">
                <label for="create-location">Lieu d'entreprise :</label><br>
                <input id="create-location" type="text" placeholder="Entrez le lieu" />
            </div>
            <div class="form-row">
                <label for="create-sector">Secteur d'activité :</label><br>
                <select name="nouv_secteur">
                    <option>--Choisir--</option>
                    <option>Informatique</option>
                    <option>BTP</option>
                    <option>S3E</option>
                    <option>jesaisplu</option>
                </select>
            </div>
            <div class="form-row">
                <label for="create-sector">Image de l'entreprise :</label><br>
                <input name="image_entreprise" type="file" accept="image/jpeg, image/png">
            </div>
            <div class="form-actions">
                <button class="button-search">Créer</button>
                <button class="button-reset">Réinitialiser</button>
            </div>
        </section>



        <footer class="police_texte">&copy; Stage En Bref. <br> Tous droits réservés</footer>
</body>

</html>