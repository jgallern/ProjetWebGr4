<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Gestion des entreprises</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script_page_gestion_entreprise_admin.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">
    <link rel="manifest" href="../../assets/manifest.json">

</head>

<body>
    <nav id="navbar">
        <div class="menu-icon">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <a href="../view_admin/page_accueil_admin.php"><img id="logo_seb" src="../../assets/images/logo_blanc_60.png" alt="logo" /></a>
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
                <h3 id="nom_prenom_etudiant"><?php
                        if (isset($_COOKIE['$prenom'])){
                            echo $_COOKIE['$prenom'];
                        }
                    ?></h3>
                <a style="text-decoration: none;" href="../controllers/deconnection_controller.php"><button id="bouton_deconnexion">Se déconnecter</button></a>
            </div>

            <img id="photo_profil"
                src="../../assets/images/photo_profil.png"
                alt="photo_profil">
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
        <h1 class="titre police_texte">Gestion des Entreprises</h1>

        <section class="bloc_gestion police_texte">
            <h2 id="titre_recherche">Rechercher une entreprise</h2>
            <div id="recherche_container">

                <div id="form_recherche">
                    <form>
                        <div class="form-row">
                            <label for="search-name">Nom de l'entreprise :<br>
                            <input id="search-name" type="text" placeholder="Entrez le nom de l'entreprise" />
                            </label>
                        </div>
                        <div class="form-row">
                            <label for="search-stages">Nombre d'offres de stage :<br>
                            <input id="search-stages" type="number" placeholder="Entrez le nombre d'offres" />
                            </label>
                        </div>
                        <div class="form-row">
                            <label>Lieu d'entreprise :<br>
                            <input id="code_postal_entreprise" type="number" placeholder="Code postal"/>
                            <input id="adresse_entreprise" type="text" placeholder="Entrez le lieu" />
                            </label>
                        </div>
                        <div class="form-row">
                            <label>Secteur d'activité :<br>
                            <select>
                                <option>--Choisir--</option>
                                <option>Informatique</option>
                                <option>BTP</option>
                                <option>S3E</option>
                                <option>Généraliste</option>
                            </select>
                            </label>
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
                                src=""
                                alt="img entreprise">
                            <h3>Intitulé 1</h3>
                            <p>lorem ipsum target sagesse et tirtlipon.</p>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src=""
                                alt="img entreprise">
                            <h3>Intitulé 2</h3>
                            <p>lorem ipsum target sagesse et tirtlipon.</p>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src=""
                                alt="img entreprise">
                            <h3>Intitulé 3</h3>
                            <p>lorem ipsum target sagesse et tirtlipon.</p>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src=""
                                alt="img entreprise">
                            <h3>Intitulé 3</h3>
                            <p>lorem ipsum target sagesse et tirtlipon.</p>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src=""
                                alt="img entreprise">
                            <h3>Intitulé 3</h3>
                            <p>lorem ipsum target sagesse et tirtlipon.</p>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src=""
                                alt="img entreprise">
                            <h3>Intitulé 3</h3>
                            <p>lorem ipsum target sagesse et tirtlipon.</p>
                        </div>

                        <div id="overlay"></div>
                        <div id="message">Veuillez sélectionner une entreprise</div>
                    </div>


                    <div id="icones_modif_entreprise">
                        <div class="image-container" id="btn_modif">
                            <img 
                                src="../../assets/images/ico_modifier.png"
                                width="25px" alt="icone_modif">
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
            <fieldset id="result_modif" class="police_texte">
                <legend>Modifier une entreprise</legend>
                <form>
                    <div id="deux_partie_modif">
                        <div id="partie_modif">
                            <label>Nouveau nom :<br>
                            <input type="text" id="nouv_nom" name="nouv_nom" placeholder="Nouveau nom">
                            </label>
                            <br>
                            <label>Nouveau secteur :<br>
                            <select name="nouv_secteur">
                                <option>--Choisir--</option>
                                <option>Informatique</option>
                                <option>BTP</option>
                                <option>S3E</option>
                                <option>jesaisplu</option>
                            </select>
                            </label>
                            <br>
                            <label>Nouvelle localité :<br>
                            <div id="adresses">
                                <!-- Conteneur pour les adresses -->
                            </div>
                            </label>
                            <button type="button" id="ajouterAdresse">Ajouter une adresse</button>

                            <br>
                            <label>Nouvelle image :<br>
                            <input id="input_image" name="image_entreprise" type="file" accept="image/jpeg, image/png">
                            </label>
                        </div>
                        <div id="partie_eval">
                            <label>Evaluer l'entreprise :
                            <div class="rating" id="rating">
                                <span class="star" data-value="1">&#9733;</span>
                                <span class="star" data-value="2">&#9733;</span>
                                <span class="star" data-value="3">&#9733;</span>
                                <span class="star" data-value="4">&#9733;</span>
                                <span class="star" data-value="5">&#9733;</span>
                            </div>
                            </label>
                            <label>Commentaire :<br>
                            <textarea class="police_texte" id="commentaire_entreprise" name="commentaire_entreprise"
                                placeholder="Entrez un commentaire"></textarea>
                            </label>
                            <br>
                            <button id="supprimer_entreprise">Supprimer l'entreprise</button> <br>
                            <div id="btn_envoi">
                                <button type="reset">Réinitialiser</button>
                                <button type="submit">Modifer</button>
                            </div>
                        </div>
                    </div>

                </form>
            </fieldset>


            <fieldset id="result_stats" class="police_texte">
                <legend>Statistiques de l'entreprise</legend>
                <p><strong>Nom de l'entreprise :</strong> GOGO Corporation</p>
                <p><strong>Le top des offres :</strong></p>
                <p><strong>Nombre d'étudiants actuellement en stage :</strong></p>
                        <div class="rating">
                            <span><strong>Moyenne de l'entreprise :</strong></span>
                            <div class="stars">★★★☆☆</div>
                        </div>
            </fieldset>

        </section>

        <section id="bloc_padding" class="bloc_gestion police_texte">
            <h2>Créer une entreprise</h2>
            <div class="form-row">
                <label for="create-name">Nom de l'entreprise :<br>
                <input id="create-name" type="text" placeholder="Entrez le nom de l'entreprise" />
                </label>
            </div>
            <div class="form-row">
                <label for="create-name">Description de l'entreprise<br>
                <textarea class="police_texte" id="description_entreprise" name="description_entreprise"
                    placeholder="Decrivez l'entreprise ici"></textarea>
                </label>
            </div>
            <div class="form-row">
                <label >Lieu d'entreprise :<br>
                <input id="code_postal_entreprise_creer" type="number" placeholder="Code postal"/>
                <input id="adresse_entreprise_creer" type="text" placeholder="Entrez le lieu" />
                <ul id="ul_adresse">
                </ul>
                </label>
            </div>
            <div class="form-row">
                <label >Secteur d'activité :<br>
                <select name="nouv_secteur">
                    <option>--Choisir--</option>
                    <option>Informatique</option>
                    <option>BTP</option>
                    <option>S3E</option>
                    <option>jesaisplu</option>
                </select>
                </label>
            </div>
            <div class="form-row">
                <label >Image de l'entreprise :<br>
                <input name="image_entreprise" type="file" accept="image/jpeg, image/png">
                </label>
            </div>
            <div class="form-actions">
                <button class="button-search">Créer</button>
                <button class="button-reset">Réinitialiser</button>
            </div>
        </section>


        
        
</body>

<footer class="police_texte">
            &copy; Stage En Bref. <br> Tous droits réservés <br>
            <a target="_blank" href="../mentions_legales.php">Mentions Légales</a>
        </footer>

</html>
