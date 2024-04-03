document.addEventListener('DOMContentLoaded', function () {
    var txt_bienvenue = document.getElementById("titre_bienvenue");
    var phrase = ["Te revoilà enfin !", "Tu nous avais manqué", "On est attachants hein ?", "Nous voilà en bonne compagnie", "Que c'est chouette de te revoir", "On t'attendais !", "Tout ce temps sans nous, comment as tu fais ?", "Dis nous tout"];
    var indiceAleatoire = Math.floor(Math.random() * phrase.length);
    txt_bienvenue.textContent = phrase[indiceAleatoire];

});


document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        var titre_page_connexion = document.getElementById("titre_accueil");
        titre_page_connexion.style.backgroundSize = "100% 100%";
        setTimeout(function () {
            titre_page_connexion.innerText += '.';
        }, 1100);
    }, 1000); 
})


document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('wishlist_container');
    const scrollRightButton = document.getElementById('defilement_droite_wishlist');
    const scrollLeftButton = document.getElementById('defilement_gauche_wishlist');
    const scrollAmount = container.offsetWidth; // Largeur de défilement (100% de la largeur visible)
    const articles = document.querySelectorAll('#wishlist_container .offre');

    scrollRightButton.addEventListener('click', function () {
        articles.forEach(article => {
            article.style.transform = "scale(0.6)"; // Appliquer une échelle de 0.7 à chaque article
        });

        container.scrollTo({
            left: container.scrollLeft + scrollAmount,
            behavior: 'smooth'
        });

        // Attendre que le défilement soit terminé pour rétablir l'échelle normale
        setTimeout(function(){
            articles.forEach(article => {
                article.style.transform = "scale(1)"; // Rétablir l'échelle normale de chaque article
            });
        }, 150);
    });


    scrollLeftButton.addEventListener('click', function () {
        articles.forEach(article => {
            article.style.transform = "scale(0.6)"; // Appliquer une échelle de 0.7 à chaque article
        });

        container.scrollTo({
            left: container.scrollLeft - scrollAmount,
            behavior: 'smooth'
        });

        // Attendre que le défilement soit terminé pour rétablir l'échelle normale
        setTimeout(function(){
            articles.forEach(article => {
                article.style.transform = "scale(1)"; // Rétablir l'échelle normale de chaque article
            });
        }, 150);
    });

});




document.addEventListener('DOMContentLoaded', function () {
    const container_candidatures = document.getElementById('candidatures_container');
    const scrollRightButtonCandidatures = document.getElementById('defilement_droite_candidatures');
    const scrollLeftButtonCandidatures = document.getElementById('defilement_gauche_candidatures');
    const scrollAmountCandidatures = container_candidatures.offsetWidth; // Largeur de défilement (100% de la largeur visible)
    const articlesCandidatures = document.querySelectorAll('#candidatures_container .offre_candidatures');

    scrollRightButtonCandidatures.addEventListener('click', function () {
        articlesCandidatures.forEach(articleCandidatures => {
            articleCandidatures.style.transform = "scale(0.6)"; // Appliquer une échelle de 0.7 à chaque article
        });

        container_candidatures.scrollTo({
            left: container_candidatures.scrollLeft + scrollAmountCandidatures,
            behavior: 'smooth'
        });

        // Attendre que le défilement soit terminé pour rétablir l'échelle normale
        setTimeout(function(){
            articlesCandidatures.forEach(articleCandidatures => {
                articleCandidatures.style.transform = "scale(1)"; // Rétablir l'échelle normale de chaque article
            });
        }, 150);
    });

    scrollLeftButtonCandidatures.addEventListener('click', function () {
        articlesCandidatures.forEach(articleCandidatures => {
            articleCandidatures.style.transform = "scale(0.6)"; // Appliquer une échelle de 0.7 à chaque article
        });

        container_candidatures.scrollTo({
            left: container_candidatures.scrollLeft - scrollAmountCandidatures,
            behavior: 'smooth'
        });

        // Attendre que le défilement soit terminé pour rétablir l'échelle normale
        setTimeout(function(){
            articlesCandidatures.forEach(articleCandidatures => {
                articleCandidatures.style.transform = "scale(1)"; // Rétablir l'échelle normale de chaque article
            });
        }, 150);
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const searchBar = document.getElementById('recherche_wishlist');
    const articles = document.querySelectorAll('#wishlist_container .offre_wishlist');
    var boutons_nav = document.getElementById('defilement_droite_wishlist');
    var boutons_nav2 = document.getElementById('defilement_gauche_wishlist');
    var message = document.getElementById('aucune_offre');



    searchBar.addEventListener('input', function() {
        const searchValue = searchBar.value.trim().toLowerCase(); // Récupérer la valeur de la recherche et la convertir en minuscules
        boutons_nav.style.display = 'block';
        boutons_nav2.style.display = 'block';
        message.style.display = 'none'

        let nbArticles = 0;

        articles.forEach(article => {
            const title = article.querySelector('h3').textContent.toLowerCase(); // Récupérer le texte du titre et le convertir en minuscules
            if (title.includes(searchValue)) {
                article.style.display = 'block';
                nbArticles++;
            } else {
                article.style.display = 'none';
            }
        });
        console.log(nbArticles);
        if(nbArticles == 0){
            boutons_nav.style.display = 'none';
            boutons_nav2.style.display = 'none';
            message.style.display = 'block';
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const searchBarCandidatures = document.getElementById('recherche_candidatures');
    const articles_candidatures = document.querySelectorAll('#candidatures_container .offre_candidatures');
    var boutons_nav_candidatures = document.getElementById('defilement_droite_candidatures');
    var boutons_nav_candidatures2 = document.getElementById('defilement_gauche_candidatures');
    var message_candidatures = document.getElementById('aucune_offre_candidatures');



    searchBarCandidatures.addEventListener('input', function() {
        const searchValueCandidatures = searchBarCandidatures.value.trim().toLowerCase(); // Récupérer la valeur de la recherche et la convertir en minuscules
        boutons_nav_candidatures.style.display = 'block';
        boutons_nav_candidatures2.style.display = 'block';
        message_candidatures.style.display = 'none'

        let nbarticles_candidatures = 0;

        articles_candidatures.forEach(articleCandidatures => {
            const titleCandidatures = articleCandidatures.querySelector('h3').textContent.toLowerCase(); // Récupérer le texte du titre et le convertir en minuscules
            if (titleCandidatures.includes(searchValueCandidatures)) {
                articleCandidatures.style.display = 'block';
                nbarticles_candidatures++;
            } else {
                articleCandidatures.style.display = 'none';
            }
        });
        console.log(nbarticles_candidatures);
        if(nbarticles_candidatures == 0){
            boutons_nav_candidatures.style.display = 'none';
            boutons_nav_candidatures2.style.display = 'none';
            message_candidatures.style.display = 'block';
        }
    });
});

