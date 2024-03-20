<?php
require_once "header1.php"; // Make sure this file path is correct
global$bdd;

// Assurez-vous d'avoir une connexion à la base de données disponible ($pdo)
$secteurs = [];
try {
    $stmt = $bdd->query("SELECT ID_secteur, nom_secteur FROM secteuractivite");
    $secteurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Gestion d'erreur
    echo "Erreur lors de la récupération des centres : " . $e->getMessage();
    exit;
}

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
                    <form>
                        <div class="form-row">
                            <label for="search-name">Nom de l'entreprise :</label><br>
                            <input id="search-name" type="text" placeholder="Entrez le nom de l'entreprise" />
                        </div>
                        <div class="form-row">
                            <label for="search-stages">Nombre d'offres de stage :</label><br>
                            <input id="search-stages" type="number" placeholder="Entrez le nombre d'offres" />
                        </div>
                        <div class="form-row">
                            <label for="search-location">Lieu d'entreprise :</label><br>
                            <input id="search-location" type="text" placeholder="Entrez le lieu" />
                        </div>
                        <div class="form-row">
                            <label for="search-sector">Secteur d'activité :</label><br>
                            <select id="create-sector" name="secteur" required onchange="showOtherSectorInput(this.value);">
                                <option value="">--Choisir--</option>
                                <?php foreach ($secteurs as $secteur): ?>
                                    <option value="<?= htmlspecialchars($secteur['ID_secteur']) ?>"><?= htmlspecialchars($secteur['nom_secteur']) ?></option>
                                <?php endforeach; ?>
                                <option value="Autre">Autre</option>
                            </select>
                            <input type="text" id="autre-secteur" name="autre_secteur" placeholder="Entrez le nouveau secteur" style="display: none;">
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
                            <h3>Intitulé 1</h3>
                            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des
                                chocolats</p>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                                alt="img entreprise">
                            <h3>Intitulé 2</h3>
                            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des
                                chocolats</p>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                                alt="img entreprise">
                            <h3>Intitulé 3</h3>
                            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des
                                chocolats</p>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                                alt="img entreprise">
                            <h3>Intitulé 3</h3>
                            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des
                                chocolats</p>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                                alt="img entreprise">
                            <h3>Intitulé 3</h3>
                            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des
                                chocolats</p>
                        </div>
                        <div class="recherche_fiche_entreprise">
                            <img width="80px"
                                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                                alt="img entreprise">
                            <h3>Intitulé 3</h3>
                            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des
                                chocolats</p>
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

<?php
require_once "header1.php"; // Make sure this file path is correct

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if 'Other' was selected and 'other_sector' field is set
    if (isset($_POST['secteur']) && $_POST['secteur'] === 'Autre' && !empty($_POST['autre_secteur'])) {
        $Nouveau_secteur = $_POST['autre_secteur'];

        // Insert new sector into database
        $stmt = $bdd->prepare("INSERT INTO secteuractivite (nom_secteur) VALUES (?)");
        $stmt->execute([$Nouveau_secteur]);
        $Id_Nouveau_secteur = $bdd->lastInsertId(); // Get the ID of the newly inserted sector

        // Use $newSectorId for linking to the enterprise or any further operations
    }

    // Proceed with other form handling like saving enterprise details
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $secteur = $_POST['secteur'];
    // Assuming a single address for simplicity. Adjust if multiple addresses are needed.
    $numeroRue = $_POST['numero_rue'];
    $nomRue = $_POST['nom_rue'];
    $ville = $_POST['ville'];



    // Proceed only if the logo upload was successful
    if ($logoPath !== ''){
        $entreprise = new Entreprise();
        $entreprise->set_bddconnection($bdd); // Assuming $bdd is your PDO instance from header1.php
        $entreprise->Creer_Entreprise($nom, $description, $secteur, $logoPath, $numeroRue, $nomRue, $ville);

    }
}
?>
