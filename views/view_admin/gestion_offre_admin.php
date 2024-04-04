<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Gestion des offres
    </title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script_gestion_offres_admin.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">
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
                <a style="text-decoration: none;" href="../controllers/deconnection_controller.php"><button
                        id="bouton_deconnexion">Se déconnecter</button></a>
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
        <h1 class="titre police_texte">Gestion des offres de stages</h1>

        <section class="bloc_gestion police_texte" id="section_recherche_offres">
            <h2 id="titre_recherche">Rechercher une offre</h2>
            <div id="recherche_container">

                <div id="form_recherche_offres">
                    <div id="form_partie_all">
                        <div id="form_partie1">
                            <form>
                                <div class="form-row">
                                    <label for="search-name">Nom de l'entreprise :</label><br>
                                    <input name="nom_entreprise" "search-name" type="text"
                                        placeholder="Entrez le nom de l'entreprise" />
                                </div>
                                <div class="form-row">
                                    <label for="search-name">Lieu du stage :</label><br>
                                    <input name="localite" id="search-name" type="text"
                                        placeholder="Entrez le nom de l'entreprise" />
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
                                <div class="form-row">
                                    <label for="search-sector">Secteur d'activité :</label><br>
                                    <select name="secteur_activite">
                                        <option>--Choisir--</option>
                                        <option>Informatique</option>
                                        <option>BTP</option>
                                        <option>S3E</option>
                                        <option>Généraliste</option>
                                    </select>
                                </div>

                        </div>

                        <div id="form_partie2">
                            <div class="form-row">
                                <label for="search-stages">Durée du stage (en semaines) :</label><br>
                                <input name="duree" id="search-stages" type="number"
                                    placeholder="Entrez la durée en semaine" />
                            </div>
                            <div class="form-row">
                                <label for="search-stages">Date de l'offre :</label><br>
                                <input name="date_offre" id="search-stages" type="date"
                                    placeholder="Entrez la date de poste de l'offre" />
                            </div>
                            <div class="form-row">
                                <label for="search-stages">Nombre de place pour le stage :</label><br>
                                <input name="nbr_offre" id="search-stages" type="number"
                                    placeholder="Entrez le nombre de place" />
                            </div>

                            </form>
                        </div>
                    </div>
                    <div id="form_button_offres" class="form_buttons">
                        <button class="button-search">Rechercher</button>
                        <button type="reset" class="button-reset">Réinitialiser</button>
                    </div>
                </div>
            </div>
            <div id="result_recherche_offres">

                <div class="recherche_fiche_offres">

                    <img width="80px"
                        src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 1</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des
                        chocolats</p>
                </div>

                <div class="recherche_fiche_offres">

                    <img width="80px"
                        src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 3</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des
                        chocolats</p>
                </div>
                <div class="recherche_fiche_offres">

                    <img width="80px"
                        src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 3</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des
                        chocolats</p>
                </div>
                <div class="recherche_fiche_offres">

                    <img width="80px"
                        src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 3</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des
                        chocolats</p>
                </div>
                <div class="recherche_fiche_offres">

                    <img width="80px"
                        src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 3</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des
                        chocolats</p>
                </div>

                <div id="overlay"></div>
                <div id="message">Veuillez sélectionner une offre</div>
            </div>

            <div id="icones_modif_offres">
                <div class="fond_ico_offres" id="btn_modif_offre">
                    <img
                        src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/ico_modifier.png">
                    <div class="overlay"></div>
                </div>

                <div class="fond_ico_offres" id="btn_voir_offre">
                    <img
                        src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/ico_oeil.png">
                    <div class="overlay"></div>
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
            <fieldset id="result_modif" class="police_texte">
                <legend>Modifer l'offre</legend>
                <form>
                    <div id="deux_partie_modif">
                        <div id="partie_modif">
                            <label>Lieu du stage</label><br>
                            <input type="text" id="nouv_lieu_offre" name="nouv_lieu_offre" placeholder="Nouveau lieu">
                            <br>
                            <label>Nouveau secteur :</label><br>
                            <select name="nouv_secteur_offre">
                                <option>--Choisir--</option>
                                <option>Informatique</option>
                                <option>BTP</option>
                                <option>S3E</option>
                                <option>Généraliste</option>
                            </select>
                            <br>
                            <label>Promotion</label><br>
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
                            <label>Nouvelle durée du stage (en semaines)</label><br>
                            <input name="image_entreprise" type="number" placeholder="Durée du stage en semaines">
                        </div>
                        <div id="partie_eval">
                            <label>Nouvelle rémunération :</label><br>
                            <input type="number" name="renum" placeholder="Rémunération en euros par mois"><br>
                            <label>Nouvelle Date :</label><br>
                            <input type="date" name="nouv_date">
                            <br>
                            <label>Nombre de place</label><br>
                            <input type="number" placeholder="Nombre de place pour l'offre" name="nbr_place"> <br>
                            <label>Nouvelle image</label><br>
                            <input id="input_image" name="nouv_image_offre" type="file"
                                accept="image/jpeg, image/png"><br>

                        </div>
                    </div>
                    <button id="supprimer_offre" style="background-color: indianred; color: #fff;">Supprimer
                        l'offre</button> <br>
                    <div id="btn_envoi">
                        <button type="reset">Réinitialiser</button>
                        <button type="submit">Modifer</button>
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

        <section id="bloc_padding" class="bloc_gestion police_texte">
            <h2>Créer une offre</h2>
            <div class="form-row">
                <label for="create-name">Intitulé de l'offre :</label><br>
                <input id="create-name" type="text" placeholder="Entrez le nom de l'offre" name="nom_offre">
            </div>
            <div class="form-row">
                <label for="create-name">Entreprise</label><br>
                <input type="text" name="offre_entreprise" placeholder="Decrivez l'entreprise ici"></input>
            </div>
            <div class="form-row">
                <label for="create-location">Lieu du stage :</label><br>
                <input id="create-location" type="text" placeholder="Entrez le lieu">
            </div>
            <div class="form-row">
                <label for="create-sector">Secteur d'activité :</label><br>
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
            <div class="form-row">
                <label for="create-sector">Durée du stage :</label><br>
                <input type="number" placeholder="Durée du stage en semaine">
            </div>
            <div class="form-row">
                <label>Rémunération</label><br>
                <input type="number" placeholder="Rémunération par mois">
            </div>
            <div class="form-row">
                <label>Date de l'offre</label><br>
                <input type="date">
            </div>
            <div class="form-row">
                <label>Nombre de place</label><br>
                <input type="number" placeholder="Nombre de place proposées par l'entreprise">
            </div>
            <label>Ajouter une image</label>
            <input name="nouv_image_offre" type="file" accept="image/jpeg, image/png"><br>

            <div class="form-actions">
                <button type="submit" class="button-search">Créer</button>
                <button type="reset" class="button-reset">Réinitialiser</button>
            </div>
        </section>



</body>

<footer class="police_texte">
    &copy; Stage En Bref. <br> Tous droits réservés <br>
    <a target="_blank" href="../mentions_legales.php">Mentions Légales</a>
</footer>

</html>