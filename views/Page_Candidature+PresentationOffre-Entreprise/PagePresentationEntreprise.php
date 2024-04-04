<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_3.css">
    <script src="../../assets/js/script_Page_Presentation_Entreprise-Offre.js" ></script>
    <title>Page Présentation Offre</title>
</head>

<body>
<header>
    <img src="../../assets/images/logo_png.png" alt="Logo de l'entreprise" id="logo">
    <button id="deconnexion" onclick="window.location.href='/logout.php';">Déconnexion</button>
</header>

<main>
    <article id="offre">
        <img src="../../assets/images/2560px-Logo_Pôle_Emploi_2008.svg.png" alt="Logo Entreprise" id="logo_entreprise">
        <div id="details-offre">
            <h1>Travailler à France Travail</h1>
            <p>France Travail est spécialisée dans le recrutement de personnel. Nous cherchons un(e) développeur(se) web pour une entreprise de développement informatique.</p>

        </div>
    </article>

    <form id="evaluation" action="../../controllers/Controller_Evaluer_Entreprise.php" method="POST">
        <fieldset>
            <legend>Évaluer l'offre:</legend>
            <div class="rating-container">
                <div class="rating">
                    <span class="star" data-value="5">&#9733;</span>
                    <span class="star" data-value="4">&#9733;</span>
                    <span class="star" data-value="3">&#9733;</span>
                    <span class="star" data-value="2">&#9733;</span>
                    <span class="star" data-value="1">&#9733;</span>
                </div>
            </div>
            <label for="commentaire">Commentaires :</label>
            <textarea id="commentaire" name="commentaire" rows="4"></textarea>
            <input type="hidden" name="rating" id="rating" value="">
            <button type="submit" id="envoyerCommentaire">Envoyer</button>
        </fieldset>
    </form>
</main>
</body>
</html>
