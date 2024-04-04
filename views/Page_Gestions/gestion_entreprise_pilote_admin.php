<?php
session_start(); // Start the session to access session variables
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Gestion entreprise
    </title>
    <link rel="stylesheet" href="../../assets/css/style_Gestion_Entreprise_Pilote_Admin.css">
    <script src="../../assets/js/script_Gestion_Entreprise_Pilote_Admin.js"></script>
    <link rel="icon" href="" type="image/png">

<body>
<nav id="navbar">
    <img id="logo_seb" src="../../assets/images/logo_png.png" alt="logo" width="150px"/>
    <div id="lien_navbar">
        <a class="lien_nav police_texte" href="gestion_entreprise_pilote_admin.html"
           id="lien_entreprises_etudiants">Entreprises</a>
        <a class="lien_nav police_texte" href="gestion_offres_pilote_admin.html"
           id="lien_offres_etudiants">Offres</a>
        <a class="lien_nav police_texte" href="gestion_entreprise_pilote_admin.html"
           id="lien_offres_etudiants">Pilotes</a>
        <a class="lien_nav police_texte" href="gestion_entreprise_pilote_admin.html" id="lien_offres_etudiants">Etudiants</a>
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
    <h1 class="titre police_texte">Gestion des Entreprises</h1>

    <section class="bloc_gestion police_texte">
        <h2>Rechercher une entreprise</h2>
        <div id="recherche_container">

            <div id="form_recherche">
                <form id="searchForm" method="POST" action="../../controllers/Controller_Rechercher_Entreprise.php"
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
                        <select id="create-sector" name="secteur" ">
                            <option value="">--Choisir--</option>
                            <option value="Autre">Autre</option>
                        </select>
                        <input type="text" id="autre-secteur" name="autre_secteur"
                               placeholder="Entrez le nouveau secteur" style="display: none;">
                    </div>
                    <div class="form_buttons">
                        <button type="submit" name="submit-search" class="button-search">Rechercher</button>
                        <button type="reset" class="button-reset">Réinitialiser</button>
                    </div>
                </form>
            </div>
            <div id="fiches_entreprises_et_boutons">
                <div id="result_recherche_entreprise">
                    <?php
                    // Check if search results exist and are in the expected format (array of arrays)
                    if (isset($_SESSION['searchResults']) && is_array($_SESSION['searchResults'])) {
                        echo "<ul class='entreprise-list'>";
                        foreach ($_SESSION['searchResults'] as $entreprise) {
                            // Ensure each $entreprise is an array before attempting to access its keys
                            if (is_array($entreprise)) {
                                $detailUrl = "entreprise_detail.php?id=" . urlencode($entreprise['ID_Entreprise']);
                                echo "<li class='entreprise-item'>";
                                echo "<div class='entreprise-content'>";
                                // Display the entreprise name with emphasis
                                echo "<h3 class='entreprise-nom'><a href='{$detailUrl}'>" . htmlspecialchars($entreprise['nom']) . "</a></h3>";                                // Display the entreprise description
                                echo "<p class='entreprise-description'>" . htmlspecialchars($entreprise['description']) . "</p>";
                                // Optionally, add more details like address, sector, etc.
                                echo "</div>";
                                echo "</li>";
                            }
                        }
                        echo "</ul>";
                    } elseif (isset($_SESSION['noResultsMessage'])) {
                        // Display the no results message if set
                        echo "<div id='noResultsMessage'>" . htmlspecialchars($_SESSION['noResultsMessage']) . "</div>";
                    }
                    ?>
                </div>
            </div>


            <div id="icones_modif">
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
            <legend>Modifer une entreprise</legend>
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
                        <input name="image_entreprise" type="file" accept="image/jpeg, image/png">
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
                        <button id="supprimer_entreprise">Supprimer l'entreprise</button>
                        <br>
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
            <p><strong>Nombre d'étudiants actuellement en stage :</strong< /p>
            <div class="rating">
                <span><strong>Moyenne de l'entreprise :</strong></span>
                <div class="stars">★★★☆☆</div>
            </div>
        </fieldset>

    </section>

    <section class="bloc_gestion police_texte">
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
                <input type="text" id="autre-secteurs" name="autre_secteur" placeholder="Entrez le nouveau secteur"
                       style="display: none;">
            </div>
            <div class="form-row">
                <label for="image_entreprise">Image de l'entreprise :</label><br>
                <input id="image_entreprise" name="logo" type="file" accept="image/jpeg, image/png" required>
                <br>
                <?php
                // Handle the logo file upload
                if (isset($_FILES['logo']) && $_FILES['logo']['error'] == 0) {
                    // Define allowed MIME types for images
                    $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];

                    // Get MIME type of the uploaded file
                    $fileMimeType = mime_content_type($_FILES['logo']['tmp_name']);

                    // Check if the uploaded file is an allowed image type
                    if (in_array($fileMimeType, $allowedMimeTypes)) {
                        $targetDirectory = "uploads//"; // Adjust based on your actual uploads directory
                        $logoPath = $targetDirectory . basename($_FILES['logo']['name']);

                        // Attempt to move the uploaded file to the target directory
                        if (move_uploaded_file($_FILES['logo']['tmp_name'], $logoPath)) {
                            // Success message or further processing
                            echo "Le logo a été téléchargé avec succès.";
                        } else {
                            // Reset $logoPath if the upload fails
                            $logoPath = '';
                            echo "Erreur lors de l'upload du logo.";
                        }
                    } else {
                        echo "Le fichier téléchargé n'est pas une image valide. Seuls les formats JPEG, PNG et GIF sont autorisés.";
                    }
                } else {
                    // Handle other errors or no file being uploaded
                    if (!isset($_FILES['logo'])) {
                        echo "Aucun fichier n'a été téléchargé.";
                    } else {
                        // Output error for debugging
                        echo "Erreur lors du téléchargement: " . $_FILES['logo']['error'];
                    }
                }
                ?>
            </div>
            <div class="form-actions">
                <button type="submit" class="button-search">Créer</button>
                <button type="reset" class="button-reset">Réinitialiser</button>
            </div>
        </form>
    </section>


    <footer class="police_texte">&copy; Stage En Bref. <br> Tous droits réservés</footer>
</body>

</html>


<?php

// Check for and display messages
if (isset($_SESSION['success_message'])) {
    echo "<div class='success-message'>" . htmlspecialchars($_SESSION['success_message']) . "</div>";
    unset($_SESSION['success_message']);
    echo 'hello';
}
if (isset($_SESSION['error_message'])) {
    echo "<div class='error-message'>" . htmlspecialchars($_SESSION['error_message']) . "</div>";
    unset($_SESSION['error_message']);
    echo 'hello';
}