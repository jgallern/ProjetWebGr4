<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Présentation entreprise</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
        integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
        crossorigin="" />
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
        crossorigin=""></script>
    <script src="../../assets/js/script_page_presentation_entreprise.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">
</head>

<body>
    <nav id="navbar">
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <a href="../view_etudiant/page_acceuil_etudiants.php"><img id="logo_seb"
                src="../../assets/images/logo_blanc.png" alt="logo" width="60px" /></a>
        <div id="lien_navbar">
            <a class="lien_nav police_texte" href="../view_etudiant/gestion_entreprise_etudiants.php"
                id="lien_entreprises_etudiants">Entreprises</a>
            <a class="lien_nav police_texte" href="../view_etudiant/gestion_offres_etudiants.php"
                id="lien_offres_etudiants">Offres</a>
            <a class="lien_nav police_texte" href="../view_etudiant/page_wishlist_candidatures.php"
                id="lien_candidatures">Wishlist et Candidatures</a>
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
        <a class="lien_nav police_texte linking-animation delay-0" href="../view_etudiant/page_accueil_etudiant.php"
            id="lien_entreprises_etudiants">Accueil</a>
        <a class="lien_nav police_texte linking-animation delay-1" href="../view_etudiant/gestion_offres_etudiants.php"
            id="lien_entreprises_etudiants">Entreprises</a>
        <a class="lien_nav police_texte linking-animation delay-2"
            href="../view_etudiant/gestion_entreprise_etudiants.php" id="lien_offres_etudiants">Offres</a>
        <a class="lien_nav police_texte linking-animation delay-5"
            href="../view_etudiant/page_wishlist_candidatures.php" id="lien_candidatures">Wishlist et Candidatures</a>
    </div>

    <main>

        <h1 class="titre police_texte">Intitulé Entreprise</h1>

        <div id="bloc_presentation_entreprise" class="bloc_gestion police_texte">
            <div id="infos_et_carte">
                <div id="infos_entreprise">
                    <img width="150px" id="img_offre_page_presentation"
                        href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.andrh.fr%2Fprestataires%2Fonlineformapro&psig=AOvVaw1QLVdktc6MNcY0vXlTb4j3&ust=1711034985290000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCIj-jZWUg4UDFQAAAAAdAAAAABAI">
                    <h2>Nom entreprise</h2>
                    <p>Ce texte contiendra les détails de l'entreprise en question</p>
                    <h3>Localité de l'entreprise</h3>
                    <ul>
                        <li>Lieu 1</li>
                        <li>Lieu 2</li>
                        <li>Lieu 3</li>
                    </ul>

                    <p>Entreprise mise en ligne le : 09/04/2023</p>
                </div>

                <div id="map">
                </div>
            </div>

        </div>

    </main>

</body>

<footer class="police_texte">
    &copy; Stage En Bref. <br> Tous droits réservés <br>
    <a target="_blank" href="../mentions_legales.php">Mentions Légales</a>
</footer>

</html>