<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Nom Offre</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="script_page_presentation_offre.js"></script>
    <link rel="icon" href="" type="image/png">
</head>

<body>
    <nav id="navbar">
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <img id="logo_seb" src="./logo_png.png" alt="logo" width="150px" />
        <div id="lien_navbar">
            <a class="lien_nav police_texte" href="gestion_entreprise_pilote_admin.html"
                id="lien_entreprises_etudiants">Entreprises</a>
            <a class="lien_nav police_texte" href="gestion_offres_pilote_admin.html"
                id="lien_offres_etudiants">Offres</a>
            <a class="lien_nav police_texte" href="gestion_entreprise_pilote_admin.html"
                id="lien_offres_etudiants">Pilotes</a>
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

        <h1 class="police_texte titre">Intitulé Offre</h1>

        <div class="bloc_gestion police_texte">
            <div id="entete_presentation_offre">

                <img width="150px" id="img_offre_page_presentation" alt="photo entreprise"
                    src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png">

                <div id="nom_description">
                    <h2>Nom entreprise</h2>
                    <p>Ce texte contiendra les détails de l'offre en question.Ce texte contiendra les détails de l'offre
                        en question. Ce texte contiendra les détails de l'offre en question. Ce texte contiendra les
                        détails de l'offre en question</p>
                </div>
                <svg id="icone_favori" class="star" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <polygon
                        points="12 2 14.15 8.26 22 9.27 16 14.14 18.18 21.02 12 17.77 5.82 21.02 8 14.14 2 9.27 9.85 8.26 12 2" />
                </svg>
            </div>
            <div id="details_offre">
                <div id="partie_1_offre">
                    <h3>Lieu du stage</h3>
                    <p>Strasbourg</p>
                    <h3>Date du stage :</h3>
                    <p>Du 08 avril 2024 au 28 juillet 2024</p>
                    <h3>Promotions :</h3>
                    <p>A2 informatique, A2 Généraliste</p>
                </div>
                <div id="partie_2_offre">
                    <h3>Nombre de place :</h3>
                    <p>14</p>
                    <h3>Nombre de demandes :</h3>
                    <p>120</p>
                    <h3>Rémunération :</h3>
                    <p>4.50 euros/heure</p>
                </div>
            </div>

            <p>Annonce mise en ligne le : 09/04/2023</p>
            <a href="#btn_candidater" id="btn_candidater">Candidater</a>
        </div>

        <div id="upload_cv" class="bloc_gestion police_texte">
            <div style="display: flex;">
                <form>
                    <h1>Tu y es presque !</h1><br>
                    <label>Ton CV :</label><br>
                    <input id="fileInput1" type="file" accept=".pdf"><br>
                    <label>Ta lettre de motivation :</label><br>
                    <input id="fileInput2" type="file" accept=".pdf"><br>
                    <button id="submit_cv" type="submit">Envoyer</button>
                </form>
                <div id="previews">
                    <iframe id="pdf_viewer_cv" title="Aperçu PDF cv"></iframe>
                    <iframe id="pdf_viewer_lm" title="Aperçu PDF lm"></iframe>
                </div>
            </div>
        </div>

    </main>

    <footer class="police_texte">&copy; Stage En Bref. <br> Tous droits réservés</footer>


</body>

</html>
