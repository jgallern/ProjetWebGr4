<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Gestion des offres</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script_gestion_offres_pilote.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">
    <link rel="manifest" href="../../assets/manifest.json">

</head>

<body>
    <nav id="navbar">
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <a href="../view_pilote/page_accueil_pilote.php"><img id="logo_seb" src="../../assets/images/logo_blanc_60.png"alt="logo seb"</a>
        <div id="lien_navbar">
            <a class="lien_nav police_texte" href="../view_pilote/gestion_entreprise_pilote.php"
                id="lien_entreprises_etudiants">Entreprises</a>
            <a class="lien_nav police_texte" href="../view_pilote/gestion_offres_pilote.php"
                id="lien_offres_etudiants">Offres</a>
            <a class="lien_nav police_texte" href="../view_pilote/gestion_etudiants_pilote.php"
                id="lien_offres_etudiants">Etudiants</a>
        </div>
        <div id="profil">
            <div id="detail_profil" class="police_texte">
                <h3 id="nom_prenom_etudiant"><?php
                        if (isset($_COOKIE['$prenom'])){
                            echo $_COOKIE['$prenom'];
                        }
                    ?></h3>
                <a style="text-decoration: none;" href="../controllers/deconnection_controller.php"><button
                        id="bouton_deconnexion">Se déconnecter</button></a>
            </div>

            <img id="photo_profil"
                src="../../assets/images/photo_profil.png"
                alt="photo_profil">
        </div>

    </nav>

    <div id="lien_navbar_expand">
        <a class="lien_nav police_texte linking-animation delay-0" href="../view_pilote/page_accueil_pilote.php"
            id="lien_entreprises_etudiants">Acceuil</a>
        <a class="lien_nav police_texte linking-animation delay-1" href="../view_pilote/gestion_entreprise_pilote.php"
            id="lien_entreprises_etudiants">Entreprises</a>
        <a class="lien_nav police_texte linking-animation delay-2" href="../view_pilote/gestion_offres_pilotes.php"
            id="lien_offres_etudiants">Offres</a>
        <a class="lien_nav police_texte linking-animation delay-3" href="../view_pilote/gestion_etudiants_pilote.php"
            id="lien_offres_etudiants">Etudiants</a>
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
                                    <label for="search-name">Nom de l'entreprise :<br>
                                    <input name="nom_entreprise" "search-name" type="text"
                                        placeholder="Entrez le nom de l'entreprise" />
                                    </label>
                                </div>
                                <div class="form-row">
                                    <label for="search-name">Lieu du stage :<br>
                                    <input name="localite" id="search-name" type="text"
                                        placeholder="Entrez le nom de l'entreprise" />
                                    </label>
                                </div>
                                <div class="form-row">
                                    <label for="search-name">Promotion :<br>
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
                                    </label>
                                </div>
                                <div class="form-row">
                                    <label for="search-sector">Secteur d'activité :<br>
                                    <select name="secteur_activite">
                                        <option>--Choisir--</option>
                                        <option>Informatique</option>
                                        <option>BTP</option>
                                        <option>S3E</option>
                                        <option>Généraliste</option>
                                    </select>
                                    </label>
                                </div>

                        </div>

                        <div id="form_partie2">
                            <div class="form-row">
                                <label for="search-stages">Durée du stage (en semaines) :<br>
                                <input name="duree" id="search-stages" type="number"
                                    placeholder="Entrez la durée en semaine" />
                                </label>
                            </div>
                            <div class="form-row">
                                <label for="search-stages">Date de l'offre :<br>
                                <input name="date_offre" id="search-stages" type="date"
                                    placeholder="Entrez la date de poste de l'offre" />
                                </label>
                            </div>
                            <div class="form-row">
                                <label for="search-stages">Nombre de place pour le stage :<br>
                                <input name="nbr_offre" id="search-stages" type="number"
                                    placeholder="Entrez le nombre de place" />
                                </label>
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
                        src=""
                        alt="img entreprise">
                    <h3>Intitulé 1</h3>
                    <p>lorem ipsum target sagesse et tirtlipon.</p>
                </div>

                <div class="recherche_fiche_offres">

                    <img width="80px"
                        src=""
                        alt="img entreprise">
                    <h3>Intitulé 3</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. </p>
                </div>
                <div class="recherche_fiche_offres">

                    <img width="80px"
                        src=""
                        alt="img entreprise">
                    <h3>Intitulé 3</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. </p>
                </div>
                <div class="recherche_fiche_offres">

                    <img width="80px"
                        src=""
                        alt="img entreprise">
                    <h3>Intitulé 3</h3>
                    <p>lorem ipsum target sagesse et tirtlipon.</p>
                </div>
                <div class="recherche_fiche_offres">

                    <img width="80px"
                        src=""
                        alt="img entreprise">
                    <h3>Intitulé 3</h3>
                    <p>lorem ipsum target sagesse et tirtlipon.</p>
                </div>

                <div id="overlay"></div>
                <div id="message">Veuillez sélectionner une entreprise</div>
            </div>

            <div id="icones_modif_offres">
                <div class="fond_ico_offres" id="btn_modif_offre">
                    <img
                        src="../../assets/images/ico_modifier.png" width='25px' alt="icone_modif">
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
                            <label>Lieu du stage<br>
                            <input type="text" id="nouv_lieu_offre" name="nouv_lieu_offre" placeholder="Nouveau lieu">
                            </label>
                            <br>
                            <label>Nouveau secteur :<br>
                            <select name="nouv_secteur_offre">
                                <option>--Choisir--</option>
                                <option>Informatique</option>
                                <option>BTP</option>
                                <option>S3E</option>
                                <option>Généraliste</option>
                            </select>
                            </label>
                            <br>
                            <label>Promotion<br>
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
                            </label>
                            <br>
                            <label>Nouvelle durée du stage (en semaines)<br>
                            <input name="image_entreprise" type="number" placeholder="Durée du stage en semaines">
                            </label>
                        </div>
                        <div id="partie_eval">
                            <label>Nouvelle rémunération :<br>
                            <input type="number" name="renum" placeholder="Rémunération en euros par mois">
                            </label>
                            <br>
                            <label>Nouvelle Date :<br>
                            <input type="date" name="nouv_date">
                            </label>
                            <br>
                            <label>Nombre de place<br>
                            <input type="number" placeholder="Nombre de place pour l'offre" name="nbr_place">
                            </label> <br>
                            <label>Nouvelle image<br>
                            <input id="input_image" name="nouv_image_offre" type="file"
                                accept="image/jpeg, image/png">
                                </label><br>

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
                <label for="create-name">Intitulé de l'offre :<br>
                <input id="create-name" type="text" placeholder="Entrez le nom de l'offre" name="nom_offre">
                </label>
            </div>
            <div class="form-row">
                <label for="create-name">Entreprise<br>
                <input type="text" name="offre_entreprise" placeholder="Decrivez l'entreprise ici"></input>
                </label>
            </div>
            <div class="form-row">
                <label for="create-location">Lieu du stage :<br>
                <input id="create-location" type="text" placeholder="Entrez le lieu">
                </label>
            </div>
            <div class="form-row">
                <label for="create-sector">Secteur d'activité :<br>
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
                </label>
            </div>
            <div class="form-row">
                <label for="create-sector">Durée du stage :<br>
                <input type="number" placeholder="Durée du stage en semaine">
                </label>
            </div>
            <div class="form-row">
                <label>Rémunération<br>
                <input type="number" placeholder="Rémunération par mois">
                </label>
            </div>
            <div class="form-row">
                <label>Date de l'offre<br>
                <input type="date">
                </label>
            </div>
            <div class="form-row">
                <label>Nombre de place<br>
                <input type="number" placeholder="Nombre de place proposées par l'entreprise">
                </label>
            </div>
            <label>Ajouter une image
            <input name="nouv_image_offre" type="file" accept="image/jpeg, image/png"><br>
            </label>

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