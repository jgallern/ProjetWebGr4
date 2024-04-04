<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Stage En Bref</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script_page_ss_connexion.js"></script>
    <link rel="icon" href="../assets/images/logo_noir.png" type="image/png">
    <link rel="manifest" href="../assets/manifest.json">

</head>

<body>
    <section id="top_acceuil">
        <div id="header_page_ss_connexion">
            <a href="../views/page_accueil_ss_connexion.php"><img id="logo_accueil" alt="logo SEB"
                    src="../assets/images/logo_noir.png"></a>
            
                    <?php
        if (isset($_COOKIE["connected"]) && $_COOKIE["connected"] == "1") {
            ?>
            <a id="lien_connexion_header" href="../controllers/deconnection_controller.php" class="police_texte">Se déconnecter</a>
            <?php
        } else {
            ?>
            <a id="lien_connexion_header" href="./auth/login.php" class="police_texte">Se connecter</a>
        <?php } ?>

            <?php
            if (isset($_COOKIE["prenom"])) {
                echo "<a style='color:white' href='page_accueil_admin.php'>" . $_COOKIE["prenom"] . "<a>";
            }
            ?>

        </div>

        <h1 class="police_texte" id="titre_accueil">Tu cherches, <br> SEB trouve, <br> et c'est tout</h1><br>
        <?php
        if (isset($_COOKIE["connected"]) && $_COOKIE["connected"] == "1") {
            ?>
            <a style="text-decoration: none;" href="../controllers/deconnection_controller.php"><button
                    class="acentrer police_texte" id="bouton_connexion_accueil">Se déconnecter</button></a>
            <?php
        } else {
            ?>
            <a style="text-decoration: none;" href="./auth/login.php"><button class="acentrer police_texte"
                    id="bouton_connexion_accueil">Se connecter</button></a>
        <?php } ?>
    </section>


    <section id="offres" class="offres-container">
        <article class="offre_stage">
            <img class="imgs_offre"
                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="image offre stage">
            <div class="offre-details police_texte">
                <h3 class="titre_poste">Intitulé du stage</h3>
                <h4 class="entreprise_offre">CESI Corporation</h4>
                <p class="description_stage">Cesi recherche actuellement un stagiaire en développement web afin
                    d'assurer la mise en place de son nouvel espace numérique de travail accessible pour les étudiants.
                    Vous contribuerez à son développement et son implémentation au sein du système déjà présent.</p>
                <button class="bouton_candidater">Candidater</button>
            </div>
        </article>

        <article class="offre_stage">
            <img class="imgs_offre"
                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="image offre stage">
            <div class="offre-details police_texte">
                <h3 class="titre_poste">Intitulé du stage</h3>
                <h4 class="entreprise_offre">CESI Corporation</h4>
                <p class="description_stage">Cesi recherche actuellement un stagiaire en développement web afin
                    d'assurer la mise en place de son nouvel espace numérique de travail accessible pour les étudiants.
                    Vous contribuerez à son développement et son implémentation au sein du système déjà présent.</p>
                <button class="bouton_candidater">Candidater</button>
            </div>
        </article>

        <article class="offre_stage">
            <img class="imgs_offre"
                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="image offre stage">
            <div class="offre-details police_texte">
                <h3 class="titre_poste">Intitulé du stage</h3>
                <h4 class="entreprise_offre">CESI Corporation</h4>
                <p class="description_stage">Cesi recherche actuellement un stagiaire en développement web afin
                    d'assurer la mise en place de son nouvel espace numérique de travail accessible pour les étudiants.
                    Vous contribuerez à son développement et son implémentation au sein du système déjà présent.</p>
                <button class="bouton_candidater">Candidater</button>
            </div>
        </article>

        <article class="offre_stage">
            <img class="imgs_offre"
                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="image offre stage">
            <div class="offre-details police_texte">
                <h3 class="titre_poste">Intitulé du stage</h3>
                <h4 class="entreprise_offre">CESI Corporation</h4>
                <p class="description_stage">Cesi recherche actuellement un stagiaire en développement web afin
                    d'assurer la mise en place de son nouvel espace numérique de travail accessible pour les étudiants.
                    Vous contribuerez à son développement et son implémentation au sein du système déjà présent.</p>
                <button class="bouton_candidater">Candidater</button>
            </div>
        </article>

        <article class="offre_stage">
            <img class="imgs_offre"
                src="C:/Users/quent/OneDrive - Association Cesi Viacesi mail/A2/04_web/Projet/images/logo_png.png"
                alt="image offre stage">
            <div class="offre-details police_texte">
                <h3 class="titre_poste">Intitulé du stage</h3>
                <h4 class="entreprise_offre">CESI Corporation</h4>
                <p class="description_stage">Cesi recherche actuellement un stagiaire en développement web afin
                    d'assurer la mise en place de son nouvel espace numérique de travail accessible pour les étudiants.
                    Vous contribuerez à son développement et son implémentation au sein du système déjà présent.</p>
                <button class="bouton_candidater">Candidater</button>
            </div>
        </article>
        <!-- Ajoutez ici d'autres articles similaires pour d'autres offres -->
    </section>

</body>

<footer class="police_texte">
    &copy; Stage En Bref. <br> Tous droits réservés <br>
    <a href="mentions_legales.php">Mentions Légales</a>
</footer>

</html>