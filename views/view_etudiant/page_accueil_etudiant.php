<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#ffeddf">
    <title>Acceuil</title>
    <link rel="stylesheet" href="../../assets/css/style.css">    
    <script src="../../assets/js/script_page_acceuil_etudiant.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">
    <link rel="manifest" href="../../assets/manifest.json">

</head>

<body>
    <nav id="navbar">
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <a href="../view_etudiant/page_accueil_etudiant.php"><img id="logo_seb" src="../../assets/images/logo_blanc_60.png" alt="logo" /></a>
        <div id="lien_navbar">
            <a class="lien_nav police_texte" href="../view_etudiant/gestion_entreprise_etudiants.php" id="lien_entreprises_etudiants">Entreprises</a>
            <a class="lien_nav police_texte" href="../view_etudiant/gestion_offres_etudiants.php" id="lien_offres_etudiants">Offres</a>
            <a class="lien_nav police_texte" href="../view_etudiant/page_wishlist_candidatures.php" id="lien_candidatures">Wishlist et Candidatures</a>
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
        <a class="lien_nav police_texte linking-animation delay-0" href="../view_etudiant/page_accueil_etudiant.php"
            id="lien_entreprises_etudiants">Accueil</a>
        <a class="lien_nav police_texte linking-animation delay-1" href="../view_etudiant/gestion_offres_etudiants.php"
            id="lien_entreprises_etudiants">Entreprises</a>
        <a class="lien_nav police_texte linking-animation delay-2" href="../view_etudiant/gestion_entreprise_etudiants.php"
            id="lien_offres_etudiants">Offres</a>
        <a class="lien_nav police_texte linking-animation delay-5" href="../view_etudiant/page_wishlist_candidatures.php"
            id="lien_candidatures">Wishlist et Candidatures</a>
    </div>

    <main>

        <h1 id="titre_bonjour" class="police_texte">Bonjour <?=$_COOKIE["prenom"]?></h1>

        <h2 id="titre_actus" class="police_texte">Dernières actualités</h2>

        <div class="actus police_texte">

            <article class="offre_stage">
                <img class="imgs_offre" src="" alt="image offre stage">
                <div class="offre-details police_texte">
                    <h3 class="titre_poste">Intitulé du stage</h3>
                    <h4 class="entreprise_offre">CESI Corporation</h4>
                    <p class="description_stage">Cesi recherche actuellement un stagiaire en développement web afin d'assurer la mise en place de son nouvel espace numérique de travail accessible pour les étudiants. Vous contribuerez à son développement et son implémentation au sein du système déjà présent.</p>
                    <a href="../view_etudiant/page_presentation_offre.php"><button class="bouton_candidater">Candidater</button></a>
                </div>
            </article>
            
            <article class="offre_stage">
                <img class="imgs_offre" src="" alt="image offre stage">
                <div class="offre-details police_texte">
                    <h3 class="titre_poste">Intitulé du stage</h3>
                    <h4 class="entreprise_offre">CESI Corporation</h4>
                    <p class="description_stage">Cesi recherche actuellement un stagiaire en développement web afin d'assurer la mise en place de son nouvel espace numérique de travail accessible pour les étudiants. Vous contribuerez à son développement et son implémentation au sein du système déjà présent.</p>
                    <a href="../view_etudiant/page_presentation_offre.php"><button class="bouton_candidater">Candidater</button></a>
                </div>
            </article>
    
        </div>

    </main>

</body>

<footer class="police_texte">
        &copy; Stage En Bref. <br> Tous droits réservés <br>
        <a target="_blank" href="../mentions_legales.php">Mentions Légales</a>
</footer>

</html>
