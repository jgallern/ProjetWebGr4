<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#ffeddf">
    <title>Accueil</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script_wishlist_candidatures.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">
    <link rel="manifest" href="../../assets/manifest.json">
</head>

<body>
    <nav id="navbar">
        <div class="menu-icon" onclick="toggleMenu()" aria-label="Menu">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <a href="../view_admin/page_accueil_admin.php">
            <img id="logo_seb" src="../../assets/images/logo_blanc_60.png" alt="logo" />
        </a>
        <div id="lien_navbar">
            <a class="lien_nav police_texte" href="../view_admin/gestion_entreprise_admin.php"
                id="lien_entreprises_etudiants_1">Entreprises</a>
            <a class="lien_nav police_texte" href="../view_admin/gestion_offre_admin.php"
                id="lien_offres_etudiants_1">Offres</a>
            <a class="lien_nav police_texte" href="../view_admin/gestion_pilotes_admin.php"
                id="lien_offres_etudiants_2">Pilotes</a>
            <a class="lien_nav police_texte" href="../view_admin/gestion_etudiants_admin.php"
                id="lien_offres_etudiants_3">Etudiants</a>
            <a class="lien_nav police_texte" href="../view_admin/page_wishlist_candidatures_admin.php"
                id="lien_candidatures_1">Wishlist et Candidatures</a>
        </div>
        <div id="profil">
            <div id="detail_profil" class="police_texte">
                <h3 id="nom_prenom_etudiant">
                    <?php if (isset($_COOKIE['$prenom'])) { echo $_COOKIE['$prenom']; } ?>
                </h3>
                <a style="text-decoration: none;" href="../controllers/deconnection_controller.php">
                    <button id="bouton_deconnexion">Se déconnecter</button>
                </a>
            </div>
            <img id="photo_profil" src="../../assets/images/photo_profil.png" alt="photo de profil">
        </div>
    </nav>

    <div id="lien_navbar_expand">
        <a class="lien_nav police_texte linking-animation delay-0" href="../view_admin/page_accueil_admin.php"
            id="lien_entreprises_etudiants_2" aria-label="Accueil">Accueil</a>
        <a class="lien_nav police_texte linking-animation delay-1" href="../view_admin/gestion_entreprise_admin.php"
            id="lien_entreprises_etudiants_3" aria-label="Entreprises">Entreprises</a>
        <a class="lien_nav police_texte linking-animation delay-2" href="../view_admin/gestion_offre_admin.php"
            id="lien_offres_etudiants_4" aria-label="Offres">Offres</a>
        <a class="lien_nav police_texte linking-animation delay-3" href="../view_admin/gestion_etudiants_admin.php"
            id="lien_offres_etudiants_5" aria-label="Etudiants">Etudiants</a>
        <a class="lien_nav police_texte linking-animation delay-4" href="../view_admin/gestion_pilotes_admin.php"
            id="lien_offres_etudiants_6" aria-label="Pilotes">Pilotes</a>
        <a class="lien_nav police_texte linking-animation delay-5" href="../view_admin/page_wishlist_candidatures.php"
            id="lien_candidatures_2" aria-label="Wishlist et Candidatures">Wishlist et Candidatures</a>
    </div>

    <main>
        <h1 class="police_texte">Bonjour <?= $_COOKIE["prenom"] ?></h1>
        <h2 class="police_texte">Dernières actualités</h2>
        <div class="actus police_texte">
            <article class="offre_stage">
                <img class="imgs_offre" src="" alt="image offre stage">
                <div class="offre-details police_texte">
                    <h3 class="titre_poste">Intitulé du stage</h3>
                    <h4 class="entreprise_offre">CESI Corporation</h4>
                    <p class="description_stage">Cesi recherche actuellement un stagiaire en développement web afin
                        d'assurer la mise en place de son nouvel espace numérique de travail accessible pour les
                        étudiants. Vous contribuerez à son développement et son implémentation au sein du système déjà
                        présent.</p>
                    <button class="bouton_candidater">Candidater</button>
                </div>
            </article>

            <article class="offre_stage">
                <img class="imgs_offre" src="" alt="image offre stage">
                <div class="offre-details police_texte">
                    <h3 class="titre_poste">Intitulé du stage</h3>
                    <h4 class="entreprise_offre">CESI Corporation</h4>
                    <p class="description_stage">Cesi recherche actuellement un stagiaire en développement web afin
                        d'assurer la mise en place de son nouvel espace numérique de travail accessible pour les
                        étudiants. Vous contribuerez à son développement et son implémentation au sein du système déjà
                        présent.</p>
                    <button class="bouton_candidater">Candidater</button>
                </div>
            </article>
        </div>
    </main>
    
    <footer class="police_texte">
        &copy; Stage En Bref. <br> Tous droits réservés <br>
        <a target="_blank" href="../mentions_legales.php" aria-label="Mentions Légales">Mentions Légales</a>
    </footer>

</body>

</html>
