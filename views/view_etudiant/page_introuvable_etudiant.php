<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Nom Offre</title>
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

        <h1 id="titre_404" class="titre police_texte">Oops... Tu es perdu ?</h1>

        <img id="img_404" src="../../assets/images/error_404.png" alt="illustration aucune page">

    </main>

    <footer class="police_texte">
    &copy; Stage En Bref. <br> Tous droits réservés <br>
    <a href="mentions_legales.php">Mentions Légales</a>
</footer>
</body>

</html>