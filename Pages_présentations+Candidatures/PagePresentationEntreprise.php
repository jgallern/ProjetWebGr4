
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_3.css">
    <script src="script.js"></script>
</head>

<body>

    <header>
        <img src="logo_png.png" alt="Logo" id="logo">
        <button id="deconnexion">Déconnexion</button>
    </header>

    <main>
        <section id="offre">
            <img src="2560px-Logo_Pôle_Emploi_2008.svg.png" alt="Logo" id="logo_entreprise">
            <div id="details-offre">
                <!-- Contenu des détails de l'offre ici -->
                <h1>Travailler à France Travail </h1>
                <p>France Travail est une entreprise spécialisée dans le recrutement de personnel pour les entreprises.
                    Nous
                    sommes à la recherche d'un(e) développeur(se) web pour notre client, une entreprise de développement
                    informatique. </p>
                <button id="postuler">Candidater</button>
            </div>
        </section>
        <div id="evaluation">
            <div class="rating-container">
                <p class="rating-label">Évaluer l'offre: </p>
                <div class="rating">
                    <span class="star" data-value="5">&#9733;</span>
                    <span class="star" data-value="4">&#9733;</span>
                    <span class="star" data-value="3">&#9733;</span>
                    <span class="star" data-value="2">&#9733;</span>
                    <span class="star" data-value="1">&#9733;</span>
                </div>
            </div>
            <label for="commentaires">Commentaires :</label>
            <textarea id="commentaire"></textarea>
            <button id="envoyerCommentaire">Envoyer</button>
        </div>

    </main>





</body>

</html>

<?php
require_once "traiterDonnees.php";
?>