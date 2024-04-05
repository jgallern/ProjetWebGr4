<?php
session_start()
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Gestion Entreprises
    </title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/script_gestion_entreprise_etudiant.js"></script>
    <link rel="icon" href="../../assets/images/logo_noir.png" type="image/png">

</head>

<body>
<nav id="navbar">
    <div class="menu-icon" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar_2"></div>
    </div>
    <a href="../view_etudiant/page_accueil_etudiant.php"><img id="logo_seb" src="../../assets/images/logo_blanc.png"
                                                              alt="logo" width="60px"/></a>
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
            <a style="text-decoration: none;" href="../../controllers/deconnection_controller.php">
                <button
                        id="bouton_deconnexion">Se déconnecter
                </button>
            </a>
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


<h1 class="titre police_texte">
    Ton prochain employeur est tout près
</h1>
<section id="partie_filtre" class="police_texte">
    <button id="btn_filtre">Filtrer</button>
    <!-- Ajustement de l'attribut action pour pointer vers le contrôleur et ajout de la méthode POST -->
    <form action="../../controllers/Controller_Rechercher_Entreprise_Etudiant.php" method="POST">
        <div id="form_filtre">
            <div id="filtres_wrapper">
                <div class="un_filtre">
                    <label for="search-name">Nom de l'entreprise</label><br>
                    <!-- Ajout de l'attribut name pour s'assurer que les données soient correctement envoyées -->
                    <input id="search-name" name="search_name" type="text" placeholder="Entrez le nom de l'entreprise"/>
                </div>
                <div class="un_filtre">
                    <label for="search-ville">Ville d'entreprise</label><br>
                    <!-- Correction de l'id et ajout du nom pour correspondre avec le contrôleur -->
                    <input id="search-ville" name="search_ville" type="text" placeholder="Entrez le lieu"/>
                </div>
                <!-- Suppression du filtre 'Nombre d'offres de stage' s'il n'est pas géré par le contrôleur -->
                <div class="un_filtre">
                    <label for="search-sector">Secteur d'activité</label><br>
                    <!-- Correction du name pour correspondre au contrôleur -->
                    <select id="search-sector" name="search_sector">
                        <option value="">--Choisir--</option>

                    </select>
                </div>
            </div>
            <!-- Ajout de l'attribut name au bouton pour s'assurer que la soumission soit reconnue par le contrôleur -->
            <button id="submit_button" type="submit" name="submit-search">Filtrer</button>
        </div>
    </form>
</section>

<h2 class="titre police_texte" id="titre_entreprises_populaire">Les plus populaires</h2>
<div class="listeentreprises">
    <?php
    $maxVisible = 5; // Number of items to show initially
    $count = 0; // Counter to keep track of how many items have been shown
    if (isset($_SESSION['searchResults']) && !empty($_SESSION['searchResults'])) {
        foreach ($_SESSION['searchResults'] as $entreprise) {
            $isHidden = $count >= $maxVisible ? "style='display:none;'" : ""; // Hide if beyond max visible
            echo "<a href='../view_etudiant/page_presentation_entreprise.php?id=" . htmlspecialchars($entreprise['ID_Entreprise']) . "' class='carte_entreprise police_texte' {$isHidden}>";
            echo "<img src='" . htmlspecialchars($entreprise['logo']) . "' alt='logo entreprise'>";
            echo "<h3>" . htmlspecialchars($entreprise['nom']) . "</h3>";
            echo "<p>" . htmlspecialchars($entreprise['description']) . "</p>";
            echo "</a>";
            $count++; // Increment counter
        }
    } elseif (isset($_SESSION['noResultsMessage'])) {
        echo "<p>" . $_SESSION['noResultsMessage'] . "</p>";
    }
    ?>
</div>
<a href="javascript:void(0);" class="carte_entreprise police_texte carte_voir_plus"
   onclick="toggleEntreprisesVisibility();">
    <img class='img_voir_plus' src="../../assets/images/voir_plus.png">
</a>


</div>
<h2 class="titre police_texte">Proche de toi</h2>
<div class="listeentreprises">
    <?php
    $maxVisible = 5; // Number of items to show initially
    $count = 0; // Counter to keep track of how many items have been shown
    if (isset($_SESSION['searchResults']) && !empty($_SESSION['searchResults'])) {
        foreach ($_SESSION['searchResults'] as $entreprise) {
            $isHidden = $count >= $maxVisible ? "style='display:none;'" : ""; // Hide if beyond max visible
            echo "<a href='../view_etudiant/page_presentation_entreprise.php?id=" . htmlspecialchars($entreprise['ID_Entreprise']) . "' class='carte_entreprise police_texte' {$isHidden}>";
            echo "<img src='" . htmlspecialchars($entreprise['logo']) . "' alt='logo entreprise'>";
            echo "<h3>" . htmlspecialchars($entreprise['nom']) . "</h3>";
            echo "<p>" . htmlspecialchars($entreprise['description']) . "</p>";
            echo "</a>";
            $count++; // Increment counter
        }
    } elseif (isset($_SESSION['noResultsMessage'])) {
        echo "<p>" . $_SESSION['noResultsMessage'] . "</p>";
    }
    ?>
</div>
<a href="javascript:void(0);" class="carte_entreprise police_texte carte_voir_pluss"
   onclick="toggleEntreprisesVisibility();">
    <img class='img_voir_plus' src="../../assets/images/voir_plus.png">
</a>


</div>

<h2 class="titre police_texte">Les plus actifs</h2>
<div class="listeentreprises">
    <?php
    $maxVisible = 5; // Number of items to show initially
    $count = 0; // Counter to keep track of how many items have been shown
    if (isset($_SESSION['searchResults']) && !empty($_SESSION['searchResults'])) {
        foreach ($_SESSION['searchResults'] as $entreprise) {
            $isHidden = $count >= $maxVisible ? "style='display:none;'" : ""; // Hide if beyond max visible
            echo "<a href='../view_etudiant/page_presentation_entreprise.php?id=" . htmlspecialchars($entreprise['ID_Entreprise']) . "' class='carte_entreprise police_texte' {$isHidden}>";
            echo "<img src='" . htmlspecialchars($entreprise['logo']) . "' alt='logo entreprise'>";
            echo "<h3>" . htmlspecialchars($entreprise['nom']) . "</h3>";
            echo "<p>" . htmlspecialchars($entreprise['description']) . "</p>";
            echo "</a>";
            $count++; // Increment counter
        }
    } elseif (isset($_SESSION['noResultsMessage'])) {
        echo "<p>" . $_SESSION['noResultsMessage'] . "</p>";
    }
    ?>
</div>
<a href="javascript:void(0);" class="carte_entreprise police_texte carte_voir_plusss"
   onclick="toggleEntreprisesVisibility();">
    <img class='img_voir_plus' src="../../assets/images/voir_plus.png">
</a>


</div>

</body>

<footer class="police_texte">
    &copy; Stage En Bref. <br> Tous droits réservés <br>
    <a target="_blank" href="../mentions_legales.php">Mentions Légales</a>
</footer>

</html>