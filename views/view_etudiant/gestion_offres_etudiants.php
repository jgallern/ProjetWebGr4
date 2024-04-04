<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Gestion entreprise
    </title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script_gestion_offres_etudiant.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">

<body>
    <nav id="navbar">
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <img id="logo_seb" src="../../assets/images/logo_blanc.png" alt="logo" width="60px" />
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


    <h1 class="titre police_texte">Un stage en poche en un rien de temps
    </h1>
    <section id="partie_filtre" class="police_texte">
        <button id="btn_filtre">Filtrer</button>
        <form>
            <div id="form_filtre">
                <div id="filtres_wrapper">
                    <div class="un_filtre">
                        <label for="search-name">Nom de l'entreprise</label><br>
                        <input id="search-name" type="text" placeholder="Entrez le nom de l'entreprise" />
                    </div>
                    <div class="un_filtre">
                        <label for="search-location">Lieu d'entreprise</label><br>
                        <input id="search-location" type="text" placeholder="Entrez le lieu" />
                    </div>
                    <div class="un_filtre">
                        <label for="search-stages">Promotion</label><br>
                        <select name="select_promo">
                            <option>--Choisir--</option>
                            <option>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option>A4</option>
                            <option>A5</option>
                        </select>
                    </div>
                    <div class="un_filtre">
                        <label for="search-sector">Secteur d'activité</label><br>
                        <select name="select_secteur">
                            <option>--Choisir--</option>
                            <option>Informatique</option>
                            <option>BTP</option>
                            <option>S3E</option>
                            <option>Généraliste</option>
                        </select>
                    </div>
                    <div class="un_filtre">
                        <label for="search-sector">Durée du stage (en semaines)</label><br>
                        <input type="number" placeholder="Durée du stage" id="search-sector" name="duree" min="1" max="26" step="1">
                    </div>
                    <div class="un_filtre">
                        <label for="search-sector">Date de l'offre</label><br>
                        <input id="search-sector" type="date" placeholder="Date de mise en ligne" />
                    </div>
                    <div class="un_filtre">
                        <label for="search-sector">Nombre de place</label><br>
                        <input id="search-sector" type="number" placeholder="Entrez le nombre de place" />
                    </div>
                    <div class="un_filtre">
                        <label for="search-sector">Nombre de demandes</label><br>
                        <input id="search-sector" type="number" placeholder="Entrez le nombre de demandes" />
                    </div>
                </div>
                <button id="submit_button" type="submit">Filtrer</button>
            </div>

        </form>
    </section>

    </section>
    <h2 class="titre police_texte" id="titre_entreprises_populaire">Les plus populaires</h2>
    <div class="listeentreprises">
        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>

        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>


        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>

        <a href="#" class="carte_entreprise police_texte carte_voir_plus">
            <h3>Voir plus d'offres</h3>
        </a>


    </div>
    <h2 class="titre police_texte">Proche de toi</h2>
    <div class="listeentreprises">

        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>

        <a href="#" class="carte_entreprise police_texte carte_voir_plus">
            <h3>Voir plus d'offres</h3>
        </a>

    </div>



    </div>
    <h2 class="titre police_texte">Les plus actifs</h2>
    <div class="listeentreprises">

        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a target="_blank" href="../view_etudiant/page_presentation_offre.php" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>

        <a href="#" class="carte_entreprise police_texte carte_voir_plus">
            <h3>Voir plus d'offres</h3>
        </a>

    </div>


</body>
<footer class="police_texte">
    &copy; Stage En Bref. <br> Tous droits réservés <br>
    <a href="mentions_legales.php">Mentions Légales</a>
</footer>