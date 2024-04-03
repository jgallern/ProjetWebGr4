<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Nom Offre</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="script.js"></script>
    <link rel="icon" href="" type="image/png">
</head>

<body>
    <nav id="navbar">
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

        <h1 class="police_texte">Intitulé Entreprise</h1>

        <div class="bloc_gestion police_texte">
            <div id="icone_favori"
                style="clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%); background-color: coral;">
            </div>
            <img width="150px" id="img_offre_page_presentation"
                href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.andrh.fr%2Fprestataires%2Fonlineformapro&psig=AOvVaw1QLVdktc6MNcY0vXlTb4j3&ust=1711034985290000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCIj-jZWUg4UDFQAAAAAdAAAAABAI">
            <h2>Nom entreprise</h2>
            <p>Ce texte contiendra les détails de l'offre en question</p>
            <h3>Lieu du stage</h3>
            <p>Strasbourg</p>
            <h3>Date du stage :</h3>
            <p>Du 08 avril 2024 au 28 juillet 2024</p>
            <h3>Promotions :</h3>
            <p>A2 informatique, A2 Généraliste</p>
            <h3>Nombre de place :</h3>
            <p>14</p>
            <h3>Nombre de demandes :</h3>
            <p>120</p>
            <h3>Rémunération :</h3>
            <p>4.50 euros/heure</p>

            <p>Annonce mise en ligne le : 09/04/2023</p>


            <button>Candidater</button>
        </div>

        <div class="bloc_gestion police_texte">
            <form>
                <h1>Tu y es presque !</h1><br>
                <label>Ton CV :</label>
                <input type="file" accept=".pdf"><br>
                <label>Ta lettre de motivation :</label><br>
                <input type="file">

                <button type="submit">ENVOYER</button>
            </form>
        </div>

    </main>

    <footer class="police_texte">&copy; Stage En Bref. <br> Tous droits réservés</footer>


</body>

</html>
