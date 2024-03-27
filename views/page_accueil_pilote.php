<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Acceuil</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="icon" href="" type="image/png">
</head>

<body>
    <nav id="navbar">
        <img id="logo_seb" src="./logo_png.png" alt="logo" width="150px" />
        <div id="lien_navbar">
            <a class="lien_nav police_texte" href="gestion_entreprise_pilote_admin.html"
                id="lien_entreprises_etudiants">Entreprises</a>
            <a class="lien_nav police_texte" href="gestion_offres_pilote_admin.html"
                id="lien_offres_etudiants">Offres</a>
            <a class="lien_nav police_texte" href="gestion_etudiants_pilote_admin.html"
                id="lien_offres_etudiants">Etudiants</a>
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

    <main>

        <h1 class="police_texte">Bonjour Alice</h1>

        <h2 class="police_texte">Dernières actualités</h2>

        <div class="actus police_texte">

            <article class="offre_stage">
                <img class="imgs_offre" src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png" alt="image offre stage">
                <div class="offre-details police_texte">
                    <h3 class="titre_poste">Intitulé du stage</h3>
                    <h4 class="entreprise_offre">CESI Corporation</h4>
                    <p class="description_stage">Cesi recherche actuellement un stagiaire en développement web afin d'assurer la mise en place de son nouvel espace numérique de travail accessible pour les étudiants. Vous contribuerez à son développement et son implémentation au sein du système déjà présent.</p>
                    <button class="bouton_candidater">Candidater</button>
                </div>
            </article>
            
            <article class="offre_stage">
                <img class="imgs_offre" src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png" alt="image offre stage">
                <div class="offre-details police_texte">
                    <h3 class="titre_poste">Intitulé du stage</h3>
                    <h4 class="entreprise_offre">CESI Corporation</h4>
                    <p class="description_stage">Cesi recherche actuellement un stagiaire en développement web afin d'assurer la mise en place de son nouvel espace numérique de travail accessible pour les étudiants. Vous contribuerez à son développement et son implémentation au sein du système déjà présent.</p>
                    <button class="bouton_candidater">Candidater</button>
                </div>
            </article>
    
        </div>

    </main>

    <footer class="police_texte">&copy; Stage En Bref. <br> Tous droits réservés</footer>


</body>

</html>