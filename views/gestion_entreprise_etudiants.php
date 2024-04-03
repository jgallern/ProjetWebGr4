<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Gestion Entreprises
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="script_gestion_entreprise_etudiant.js"></script>
    <link rel="icon" href="" type="image/png">

<body>
    <nav id="navbar">
        <img id="logo_seb" src="./logo_png.png" alt="logo" width="150px" />
        <div id="lien_navbar">
            <a class="lien_nav police_texte" href="gestion_entreprise_etudiants.html" id="lien_entreprises_etudiants">Entreprises</a>
            <a class="lien_nav police_texte" href="gestion_offres_etudiants.html" id="lien_offres_etudiants">Offres</a>
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



    <h1 class="titre police_texte">
        Ton prochain employeur est tout près
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
                        <label for="search-stages">Nombre d'offres de stage</label><br>
                        <input id="search-stages" type="text" placeholder="Entrez le nombre d'offres" />
                    </div>
                    <div class="un_filtre">
                        <label for="search-sector">Secteur d'activité</label><br>
                        <input id="search-sector" type="text" placeholder="Entrez le secteur d'activité" />
                    </div>
                </div>
                <button id="submit_button" type="submit">Filtrer</button>
            </div>

        </form>
    </section>

    </section>
    <h2 class="titre police_texte" id="titre_entreprises_populaire">Les plus populaires</h2>
    <div class="listeentreprises">
        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>

        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>


        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>

        <a href="#" class="carte_entreprise police_texte carte_voir_plus">
            <h3>Voir plus d'entreprise</h3>
        </a>


    </div>
    <h2 class="titre police_texte">Proche de toi</h2>
    <div class="listeentreprises">

        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>

        <a href="#" class="carte_entreprise police_texte carte_voir_plus">
            <h3>Voir plus d'entreprise</h3>
        </a>

    </div>



    </div>
    <h2 class="titre police_texte">Les plus actifs</h2>
    <div class="listeentreprises">

        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>
        <a href="#" class="carte_entreprise police_texte">
            <img src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="img entreprise">
            <h3>Intitulé 2</h3>
            <p>lorem ipsum target sagesse et tirtlipon. Le mauvais ordre est passé chez moi avec des chocolats</p>
        </a>

        <a href="#" class="carte_entreprise police_texte carte_voir_plus">
            <h3>Voir plus d'entreprise</h3>
        </a>

    </div>


</body>
<footer class="police_texte">&copy; Stage En Bref. <br> Tous droits réservés</footer>