<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Stage En Bref</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="script_wishlist_candidatures.js"></script>
    <link rel="icon" href="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
        type="image/png">

</head>

<body id="body_whislist_candidatures">
    <nav id="navbar">
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <img id="logo_seb" src="./logo_png.png" alt="logo" width="150px" />
        <div id="lien_navbar">
            <a class="lien_nav police_texte" href="../view_etudiant/gestion_entreprise_etudiants.php" id="lien_entreprises_etudiants">Entreprises</a>
            <a class="lien_nav police_texte" href="../view_etudiant/gestion_offres_etudiants.php" id="lien_offres_etudiants">Offres</a>
            <a class="lien_nav police_texte" href="../view_etudiant/page_wishlist_candidatures.php" id="lien_candidatures">Wishlist et Candidatures</a>
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

    <h1 class="police_texte" id="titre_page">Wishlist et candidatures</h1>

    <section class="wish_cand apple_style">
        <div class="offres_header">
            <h2 id="titre_ta_wishlist" class="police_texte">Ta Wishlist</h2>
            <input class="police_texte recherche_offres" type="text" id="recherche_wishlist"
                placeholder="Rechercher...">
        </div>
        <div class="les_offres">
            <img id="defilement_gauche_wishlist" class="scroll_buttons"
                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/fleche_gauche.png">
            <h3 id="aucune_offre" class="aucune_offre police_texte" style="display: none;">Aucune offre ne correspond à
                votre recherche</h3>

            <div class="offres_container" id="wishlist_container">

                <a href="#" class="offre offre_wishlist police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                    <button class='btn_suppr'>SUPPRIMER</button>
                </a><a href="#" class="offre offre_wishlist police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                    <button class='btn_suppr'>SUPPRIMER</button>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                    <button class='btn_suppr'>SUPPRIMER</button>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                    <button class='btn_suppr'>SUPPRIMER</button>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                    <button class='btn_suppr'>SUPPRIMER</button>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                    <button class='btn_suppr'>SUPPRIMER</button>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                    <button class='btn_suppr'>SUPPRIMER</button>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                    <button class='btn_suppr'>SUPPRIMER</button>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                    <button class='btn_suppr'>SUPPRIMER</button>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                    <button class='btn_suppr'>SUPPRIMER</button>
                </a>
                <a href="#" class="offre offre_wishlist police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                    <button class='btn_suppr'>SUPPRIMER</button>
                </a>

            </div>
            <img id="defilement_droite_wishlist" class="scroll_buttons"
                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/fleche_droite.png">

        </div>


    </section>

    <br><br><br>


    <section class="wish_cand apple_style">
        <div class="offres_header">
            <h2 class="police_texte" id="titre_tes_candidatures">Tes candidatures</h2>
            <input class="police_texte recherche_offres" type="text" id="recherche_candidatures"
                placeholder="Rechercher...">
        </div>
        <div class="les_offres">
            <img id="defilement_gauche_candidatures" class="scroll_buttons"
                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/fleche_gauche.png">
            <h3 id="aucune_offre_candidatures" class="police_texte aucune_offre" style="display: none;">Aucune offre ne
                correspond à votre recherche</h3>

            <div class="offres_container" id="candidatures_container">

                <a href="#" class="offre offre_candidatures police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                </a>
                <a href="#" class="offre offre_candidatures police_texte">
                    <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                        alt="img entreprise">
                    <h3>Intitulé 2</h3>
                    <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats
                    </p>
                </a>

            </div>
            <img id="defilement_droite_candidatures" class="scroll_buttons"
                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/fleche_droite.png">

        </div>


    </section>

</body>

<footer class="police_texte">&copy; Stage En Bref. <br> Tous droits réservés</footer>


</html>
