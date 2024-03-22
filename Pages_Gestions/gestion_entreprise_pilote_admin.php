<?php
require_once "header1.php"; 
global $bdd;

$entreprise = new Entreprise();
$entreprise->set_bddconnection($bdd);

// Initial definitions
$entreprises = [];
$secteurs = [];

// Handling form submissions for creating enterprises and adding new sectors
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handling 'Other' sector submissions
    if (isset($_POST['secteur']) && $_POST['secteur'] === 'Autre' && !empty($_POST['autre_secteur'])) {
        $Nouveau_secteur = $_POST['autre_secteur'];

        // Insert new sector into database
        $stmt = $bdd->prepare("INSERT INTO secteuractivite (nom_secteur) VALUES (?)");
        $stmt->execute([$Nouveau_secteur]);
        $secteur = $bdd->lastInsertId(); // Update $secteur to use the newly inserted sector's ID
    }

    // Handling submissions from the create enterprise form
    if (isset($_POST['nom'])) {
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $numeroRue = $_POST['numero_rue'];
        $nomRue = $_POST['nom_rue'];
        $ville = $_POST['ville'];
        $logoPath = ''; // Initialize the variable to avoid errors

        // Handle logo upload logic here
        // Ensure $logoPath is correctly set upon successful upload or remains empty

        // Create enterprise with provided information
        if ($logoPath !== '') {
            $entreprise->Creer_Entreprise($nom, $description, $secteur, $logoPath, $numeroRue, $nomRue, $ville);
        }
    }

    // Handling search form submissions
    if (isset($_POST['submit-search'])) {
        $searchName = isset($_POST['search_name']) ? $_POST['search_name'] : null;
        $searchVille = isset($_POST['search_ville']) ? $_POST['search_ville'] : '';
        $searchNumeroRue = isset($_POST['search_numero-rue']) ? $_POST['search_numero-rue'] : '';
        $searchNomRue = isset($_POST['search_nom-rue']) ? $_POST['search_nom-rue'] : '';
        $searchSector = isset($_POST['search_sector']) ? $_POST['search_sector'] : null;

        $entreprises = $entreprise->Rechercher_Entreprise($searchName, $searchSector, $searchVille,$searchNumeroRue,$searchNomRue);
        if (empty($entreprises)) {
            $noResultsMessage = "Aucun résultat trouvé pour les critères de recherche spécifiés.";
        }
    } else {
        // Fetch random or initial set of enterprises
        $entreprises = $entreprise->FetchRandomEntreprises(); // Ensure you have this method in your class
        if (empty($entreprises)) {
            $noResultsMessage = "Aucune entreprise disponible pour l'affichage.";
        }
    }
}
// Fetching sectors for the sector selection dropdown
try {
    $stmt = $bdd->query("SELECT ID_secteur, nom_secteur FROM secteuractivite");
    $secteurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur lors de la récupération des secteurs : " . $e->getMessage();
    exit;
}

// Continue with HTML content below
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Gestion entreprise
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="icon" href="" type="image/png">

<body>
    <nav id="navbar">
        <img id="logo_seb" src="./logo_png.png" alt="logo" width="150px" />
        <div id="lien_navbar">
            <a class="lien_nav police_texte" href="gestion_entreprise_pilote_admin.html" id="lien_entreprises_etudiants">Entreprises</a>
            <a class="lien_nav police_texte" href="gestion_offres_pilote_admin.html" id="lien_offres_etudiants">Offres</a>
            <a class="lien_nav police_texte" href="gestion_entreprise_pilote_admin.html" id="lien_offres_etudiants">Pilotes</a>
            <a class="lien_nav police_texte" href="gestion_entreprise_pilote_admin.html" id="lien_offres_etudiants">Etudiants</a>
            <a class="lien_nav police_texte" href="page_wishlist_candidatures.html" id="lien_wishlist">Mes listes</a>
            <a class="lien_nav police_texte" href="page_wishlist_candidatures.html" id="lien_candidatures">Candidatures</a>
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
                    <form id="searchForm" method="POST" action="" enctype="multipart/form-data">
                        <div class="form-row">
                            <label for="search-name">Nom de l'entreprise :</label><br>
                            <input id="search-name" name="search_name" type="text" placeholder="Entrez le nom de l'entreprise" />
                        </div>
                        <div class="form-row">
                            <label for="search-stages">Nombre d'offres de stage :</label><br>
                            <input id="search-stages" name="search_stages" type="number" placeholder="Entrez le nombre d'offres" />
                        </div>
                        <div class="form-row">
                            <label for="search-ville">Ville d'entreprise :</label><br>
                            <input id="search-ville" name="search_ville" type="text" placeholder="Entrez le lieu" />
                        </div>
                        <div class="form-row">
                            <label for="search-numero-rue">Numero-Rue d'entreprise :</label><br>
                            <input id="search-numero-rue" name="search_numero-rue" type="text" placeholder="Entrez le lieu" />
                        </div>
                        <div class="form-row">
                            <label for="search-nom-rue">Nom-Rue d'entreprise :</label><br>
                            <input id="search-nom-rue" name="search_nom-rue" type="text" placeholder="Entrez le lieu" />
                        </div>
                        <div class="form-row">
                            <label for="search-sector">Secteur d'activité :</label><br>
                            <select id="create-sector" name="secteur" onchange="showOtherSectorInput(this.value);">
                                <option value="">--Choisir--</option>
                                <?php foreach ($secteurs as $secteur): ?>
                                    <option value="<?= htmlspecialchars($secteur['ID_secteur']) ?>"><?= htmlspecialchars($secteur['nom_secteur']) ?></option>
                                <?php endforeach; ?>
                                <option value="Autre">Autre</option>
                            </select>
                            <input type="text" id="autre-secteur" name="autre_secteur" placeholder="Entrez le nouveau secteur" style="display: none;">
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
                        // Display no results message if set
                        if (isset($noResultsMessage)) {
                            echo '<div class="no-results-message">' . htmlspecialchars($noResultsMessage) . '</div>';
                        } else {
                            // Iterate over $entreprises to display them, since there's no "no results" message set
                            foreach ($entreprises as $entreprise) {
                                ?>
                                <div class="recherche_fiche_entreprise">
                                    <img width="80px" src="path/to/logo/<?php echo htmlspecialchars($entreprise['logo']); ?>" alt="img entreprise">
                                    <h3><?php echo htmlspecialchars($entreprise['nom']); ?></h3>
                                    <p><?php echo htmlspecialchars($entreprise['description']); ?></p>
                                    <!-- Additional details here -->
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>



                <div id="overlay"></div>
                        <div id="message">Veuillez sélectionner une entreprise</div>
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
                <p><strong>Nombre d'étudiants actuellement en stage :</strong< /p>
                        <div class="rating">
                            <span><strong>Moyenne de l'entreprise :</strong></span>
                            <div class="stars">★★★☆☆</div>
                        </div>
            </fieldset>

        </section>

        <section class="bloc_gestion police_texte">
            <h2>Créer une entreprise</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <label for="create-name">Nom de l'entreprise :</label><br>
                    <input id="create-name" name="nom" type="text" placeholder="Entrez le nom de l'entreprise" required />
                </div>
                <div class="form-row">
                    <label for="description_entreprise">Description de l'entreprise</label><br>
                    <textarea class="police_texte" id="description_entreprise" name="description" placeholder="Décrivez l'entreprise ici" required></textarea>
                </div>
                <div class="form-row">
                    <label for="create-location"> Numéro Rue :</label><br>
                    <input id="create-location" name="numero_rue" type="text" placeholder="Entrez le numeéro de la rue" required />
                </div>
                <div class="form-row">
                    <label for="create-location">Rue :</label><br>
                    <input id="create-location" name="nom_rue" type="text" placeholder="Entrez la Rue" required />
                </div>
                <div class="form-row">
                    <label for="create-location">Ville :</label><br>
                    <input id="create-location" name="ville" type="text" placeholder="Entrez la ville" required />
                </div>

                <div class="form-row">
                    <label for="create-sector">Secteur d'activité :</label><br>
                    <select id="create-sector" name="secteur" required onchange="showOtherSectorInput(this.value);">
                        <option value="">--Choisir--</option>
                        <?php foreach ($secteurs as $secteur): ?>
                            <option value="<?= htmlspecialchars($secteur['ID_secteur']) ?>"><?= htmlspecialchars($secteur['nom_secteur']) ?></option>
                        <?php endforeach; ?>
                        <option value="Autre">Autre</option>
                    </select>
                    <input type="text" id="autre-secteur" name="autre_secteur" placeholder="Entrez le nouveau secteur" style="display: none;">

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


