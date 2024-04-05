<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Gestion des entreprises</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script_page_gestion_entreprise_admin.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">

</head>

<body>
    <nav id="navbar">
        <div class="menu-icon">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <a href="../view_admin/page_accueil_admin.php"><img id="logo_seb" src="../../assets/images/logo_blanc.png" alt="logo" width="60px" /></a>
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
                <form id="searchForm" method="POST" action="../../controllers/Controller_Rechercher_Entreprise_Admin.php"
                      enctype="multipart/form-data">
                    <div class="form-row">
                        <label for="search-name">Nom de l'entreprise :</label><br>
                        <input id="search-name" name="search_name" type="text"
                               placeholder="Entrez le nom de l'entreprise"/>
                    </div>

                    <div class="form-row">
                        <label for="search-ville">Ville d'entreprise :</label><br>
                        <input id="search-ville" name="search_ville" type="text" placeholder="Entrez le lieu"/>
                    </div>
                    <div class="form-row">
                        <label for="search-numero-rue">Numero-Rue d'entreprise :</label><br>
                        <input id="search-numero-rue" name="search_numero-rue" type="text"
                               placeholder="Entrez le lieu"/>
                    </div>
                    <div class="form-row">
                        <label for="search-nom-rue">Nom-Rue d'entreprise :</label><br>
                        <input id="search-nom-rue" name="search_nom-rue" type="text" placeholder="Entrez le lieu"/>
                    </div>
                    <div class="form-row">
                        <label for="search-sector">Secteur d'activité :</label><br>
                        <select id="create-sectorss" name="secteur" ">
                        <option value="">--Choisir--</option>

                        </select>

                    </div>
                    <div class="form_buttons">
                        <button type="submit" name="submit-search" class="button-search">Rechercher</button>
                        <button id="resetbutton" type="reset" class="button-reset">Réinitialiser</button>
                    </div>
                </form>
            </div>
            <div id="fiches_entreprises_et_boutons">
                <div id="result_recherche_entreprise">
                    <?php
                    $maxVisible = 4; // Number of items to show initially
                    $count = 0; // Counter to keep track of how many items have been shown
                    if (isset($_SESSION['searchResults']) && !empty($_SESSION['searchResults'])) {
                        foreach ($_SESSION['searchResults'] as $entreprise) {
                            $isHidden = $count >= $maxVisible ? "style='display:none;'" : ""; // Hide if beyond max visible
                            echo "<a href='../view_etudiant/page_presentation_entreprise.php?id=" . htmlspecialchars($entreprise['ID_Entreprise']) . "' class='carte_entreprise police_texte' {$isHidden}>";
                            echo "<img src='" . htmlspecialchars($entreprise['logo']) . "' alt='logo entreprise'>";
                            echo "<h3>" . htmlspecialchars($entreprise['nom']) . "</h3>";
                            echo "<p>" . htmlspecialchars($entreprise['description']) . "</p>";
                            echo "</a>";
                            $count++; // Increment counter
                        }
                    } elseif (isset($_SESSION['noResultsMessage'])) {
                        echo "<p>" . $_SESSION['noResultsMessage'] . "</p>";
                    }
                    ?>
                    <div id="overlay"></div>
                    <div id="message">Veuillez sélectionner une entreprise</div>
                </div>


                    <div id="icones_modif_entreprise">
                        <div class="image-container" id="btn_modif">
                            <img 
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/ico_modifier.png"
                                width="30px">
                            <div class="overlay"></div>
                        </div>
                        <div class="image-container" id="btn_stats">
                            <img
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/ico_stats.png"
                                width="30px">
                            <div class="overlay"></div>
                        </div>
                        <div class="image-container" id="btn_voir">
                            <img
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/ico_oeil.png"
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
            <fieldset id="result_modif" class="police_texte">
                <legend>Modifier une entreprise</legend>
                <form>
                    <div id="deux_partie_modif">
                        <div id="partie_modif">
                            <label>Nouveau nom :</label><br>
                            <input type="text" id="nouv_nom" name="nouv_nom" placeholder="Nouveau nom">
                            <br>
                            <label>Nouveau secteur :</label><br>
                            <select name="nouv_secteur">
                                <option>--Choisir--</option>
                                <option>Informatique</option>
                                <option>BTP</option>
                                <option>S3E</option>
                                <option>jesaisplu</option>
                            </select>
                            <br>
                            <label>Nouvelle localité :</label><br>
                            <div id="adresses">
                                <!-- Conteneur pour les adresses -->
                            </div>
                            <button type="button" id="ajouterAdresse">Ajouter une adresse</button>

                            <br>
                            <label>Nouvelle image :</label><br>
                            <input id="input_image" name="image_entreprise" type="file" accept="image/jpeg, image/png">
                        </div>
                        <div id="partie_eval">
                            <label>Evaluer l'entreprise :</label>
                            <div class="rating" id="rating">
                                <span class="star" data-value="1">&#9733;</span>
                                <span class="star" data-value="2">&#9733;</span>
                                <span class="star" data-value="3">&#9733;</span>
                                <span class="star" data-value="4">&#9733;</span>
                                <span class="star" data-value="5">&#9733;</span>
                            </div>
                            <label>Commentaire :</label><br>
                            <textarea class="police_texte" id="commentaire_entreprise" name="commentaire_entreprise"
                                placeholder="Entrez un commentaire"></textarea>
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
        <form id="entrepriseForm" action="../../controllers/Controller_Creer_Entreprise.php" method="POST"
              enctype="multipart/form-data">
            <div class="form-row">
                <label for="create-name">Nom de l'entreprise :</label><br>
                <input id="create-name" name="nom" type="text" placeholder="Entrez le nom de l'entreprise"
                       required/>
            </div>
            <div class="form-row">
                <label for="description_entreprise">Description de l'entreprise</label><br>
                <textarea class="police_texte" id="description_entreprise" name="description"
                          placeholder="Décrivez l'entreprise ici" required></textarea>
            </div>
            <div class="form-row">
                <label for="create-location"> Numéro Rue :</label><br>
                <input id="create-location" name="numero_rue" type="text" placeholder="Entrez le numeéro de la rue"
                       required/>
            </div>
            <div class="form-row">
                <label for="create-location">Rue :</label><br>
                <input id="create-location" name="nom_rue" type="text" placeholder="Entrez la Rue" required/>
            </div>
            <div class="form-row">
                <label for="create-location">Ville :</label><br>
                <input id="create-location" name="ville" type="text" placeholder="Entrez la ville" required/>
            </div>

            <div class="form-row">
                <label for="search-sector">Secteur d'activité :</label><br>
                <select id="create-sectors" name="secteur" required>
                    <option value="">--Choisir--</option>
                    <!-- Dynamically populated sectors -->

                </select>
            </div>
            <div class="form-row">
                <label for="image_entreprise">Image de l'entreprise :</label><br>
                <input id="image_entreprise" name="logo" type="file" accept="image/jpeg, image/png" required>
                <br>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Assuming you've already processed the file in your controller/model
                    // and set a session or direct variable for success or failure message
                    if (isset($_SESSION['uploadMessage'])) {
                        echo $_SESSION['uploadMessage']; // Display upload message set by the controller/model
                        unset($_SESSION['uploadMessage']); // Clear the message after displaying
                    }
                }
                ?>
            </div>
            <div class="form-actions">
                <button type="submit" class="button-search">Créer</button>
                <button id="resetButton" type="reset" class="button-reset">Réinitialiser</button>
            </div>
        </section>


        
        
</body>

<footer class="police_texte">
            &copy; Stage En Bref. <br> Tous droits réservés <br>
            <a target="_blank" href="../mentions_legales.php">Mentions Légales</a>
        </footer>

</html>
