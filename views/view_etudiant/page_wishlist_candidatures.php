<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Stage En Bref</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script_wishlist_candidatures.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">
</head>

<body id="body_whislist_candidatures">
    <nav id="navbar">
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar_2"></div>
        </div>
        <a href="../view_etudiant/page_accueil_etudiant.php"><img id="logo_seb" src="../../assets/images/logo_blanc.png" alt="logo" width="60px" /></a>
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
            <img id="photo_profil" src="../../assets/images/photo_profil.png" alt="photo_profil">
        </div>
    </nav>

    <div id="lien_navbar_expand">
        <a class="lien_nav police_texte linking-animation delay-0" href="../view_etudiant/page_accueil_etudiant.php" id="lien_entreprises_etudiants">Accueil</a>
        <a class="lien_nav police_texte linking-animation delay-1" href="../view_etudiant/gestion_offres_etudiants.php" id="lien_entreprises_etudiants">Entreprises</a>
        <a class="lien_nav police_texte linking-animation delay-2" href="../view_etudiant/gestion_entreprise_etudiants.php" id="lien_offres_etudiants">Offres</a>
        <a class="lien_nav police_texte linking-animation delay-5" href="../view_etudiant/page_wishlist_candidatures.php" id="lien_candidatures">Wishlist et Candidatures</a>
    </div>

    <h1 class="police_texte titre">Wishlist et candidatures</h1>

    <section class="wish_cand apple_style">
        <div class="offres_header">
            <h2 id="titre_ta_wishlist" class="police_texte">Ta Wishlist</h2>
            <form method="POST" action="wishlist.php?action=rechercherDansWishlist"> <!-- Assurez-vous que cette action correspond à votre contrôleur MVC -->
                <input class="police_texte recherche_offres" type="text" name="recherche_wishlist" placeholder="Rechercher...">
                <button type="submit">Rechercher</button>
            </form>
        </div>
        <?php $offresDetails = $offresDetails ?? []; ?>
        <div class="les_offres">
            <div class="offres_container" id="wishlist_container">
                <!-- Début de la section dynamique pour les offres dans la wishlist -->
                <?php foreach ($offresDetails as $offre): ?>
                <div class="offre offre_wishlist police_texte">
                    <img src="../../assets/images/logo_entreprise.png" alt="img entreprise"> <!-- Ajustez selon les données réelles -->
                    <h3><?= htmlspecialchars($offre['titre']) ?></h3>
                    <p><?= htmlspecialchars($offre['description']) ?></p>
                    <form method="POST" action="wishlist.php?action=supprimerDeWishlist">
                        <input type="hidden" name="idWishlist" value="<?= $offre['ID_Wishlist'] ?>">
                        <button type="submit" name="btn_supprimer_wishlist" class='btn_suppr'>SUPPRIMER</button>
                    </form>
                </div>
                <?php endforeach; ?>
                <!-- Fin de la section dynamique -->
            </div>
        </div>
    </section>

    <br><br><br>


    <section class="wish_cand apple_style">
    <div class="offres_header">
        <h2 class="police_texte" id="titre_tes_candidatures">Tes candidatures</h2>
        <form method="POST" action="candidatures.php?action=rechercherDansCandidatures"> <!-- Assurez-vous que cette action correspond à votre contrôleur MVC -->
            <input class="police_texte recherche_offres" type="text" name="recherche_candidatures" placeholder="Rechercher dans tes candidatures...">
            <button type="submit">Rechercher</button>
        </form>
    </div>
    <?php $candidaturesDetails = $candidaturesDetails ?? []; ?>
    <div class="les_offres">
        <div class="offres_container" id="candidatures_container">
            <!-- Début de la section dynamique pour les candidatures -->
            <?php foreach ($candidaturesDetails as $candidature): ?>
            <div class="offre offre_candidatures police_texte">
                <img src="../../assets/images/logo_entreprise.png" alt="Logo entreprise"> <!-- Ajustez selon les données réelles -->
                <h3><?= htmlspecialchars($candidature['titre']) ?></h3>
                <p><?= htmlspecialchars($candidature['description']) ?></p>
                <!-- Vous pouvez ajouter ici des boutons ou des actions spécifiques à la candidature, comme annuler la candidature -->
            </div>
            <?php endforeach; ?>
            <!-- Fin de la section dynamique -->
        </div>
    </div>
</section>


</body>

<footer class="police_texte">
    &copy; Stage En Bref. <br> Tous droits réservés <br>
    <a target="_blank" href="../mentions_legales.php">Mentions Légales</a>
</footer>

</html>