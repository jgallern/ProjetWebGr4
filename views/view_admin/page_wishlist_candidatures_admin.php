<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#ffeddf">
    <title>Stage En Bref</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script_wishlist_candidatures.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">
    <link rel="manifest" href="../../assets/manifest.json">

</head>

<body id="body_whislist_candidatures">
    <nav id="navbar">
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <a href="../view_admin/page_accueil_admin.php"><img id="logo_seb" src="../../assets/images/logo_blanc_60.png" alt="logo" /></a>
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
                <h3 id="nom_prenom_etudiant">
                    <?php
                    if (isset($_COOKIE['$prenom'])){
                     echo $_COOKIE['$prenom'];
                    }
                    ?>
                </h3>
                <a style="text-decoration: none;" href="../controllers/deconnection_controller.php">Se déconnecter</a>
            </div>
            <img id="photo_profil" src="../../assets/images/photo_profil.png" alt="photo_profil">
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

    <h1 class="police_texte titre">Wishlist et candidatures</h1>

    <section class="wish_cand apple_style">
        <div class="offres_header">
            <h2 id="titre_ta_wishlist" class="police_texte">Ta Wishlist</h2>
            <form method="POST" action="">
                <input class="police_texte recherche_offres" type="text" id="recherche_wishlist" placeholder="Rechercher...">
                <button name="recherche_wishlist" type='submit'>rechercher</button>
            </form>
        </div>
        <div class="les_offres">

            <div class="offres_container" id="wishlist_container">

                <a href="#" class="offre offre_wishlist police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <form method="POST" action="">
                        <button name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </a><a href="#" class="offre offre_wishlist police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <form method="POST" action="">
                        <button name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <form method="POST" action="">
                        <button name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <form method="POST" action="">
                        <button name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <form method="POST" action="">
                        <button name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <form method="POST" action="">
                        <button name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <form method="POST" action="">
                        <button name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <form method="POST" action="">
                        <button name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <form method="POST" action="">
                        <button name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <form method="POST" action="">
                        <button name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <form method="POST" action="">
                        <button name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </a>

            </div>

        </div>


    </section>

    <br><br><br>


    <section class="wish_cand apple_style">
        <div class="offres_header">
            <h2 class="police_texte" id="titre_tes_candidatures">Tes candidatures</h2>
            <form method="POST" action="">
                <input class="police_texte recherche_offres" type="text" id="recherche_wishlist" placeholder="Rechercher...">
                <button name="recherche_candidatures" type='submit'>rechercher</button>
            </form>
        </div>
        <div class="les_offres">

            <div class="offres_container" id="candidatures_container">

                <a href="#" class="offre offre_candidatures police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src=""
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                </a>

            </div>
        </div>


    </section>

</body>

<footer class="police_texte">
    &copy; Stage En Bref. <br> Tous droits réservés <br>
    <a target="_blank" href="../mentions_legales.php">Mentions Légales</a>
</footer>


</html>