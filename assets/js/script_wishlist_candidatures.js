function toggleMenu() {
    var menuIcon = document.querySelector('.menu-icon');
    var navbar = document.getElementById("navbar");
    var lien_navbar = document.getElementById("lien_navbar_expand");

    menuIcon.classList.toggle('cross');
    if(navbar.classList.contains("expand")) {
        navbar.classList.remove("expand");
        document.body.classList.remove('disable-scroll');
        lien_navbar.classList.remove('visible');

    } else {
        document.body.classList.add('disable-scroll');
        navbar.classList.add("expand");
        lien_navbar.classList.add('visible');
    }  
}



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
        setTimeout(function () {
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
        setTimeout(function () {
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
        setTimeout(function () {
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
        setTimeout(function () {
            articlesCandidatures.forEach(articleCandidatures => {
                articleCandidatures.style.transform = "scale(1)"; // Rétablir l'échelle normale de chaque article
            });
        }, 150);
    });
});



document.addEventListener('DOMContentLoaded', function () {
    const searchBar = document.getElementById('recherche_wishlist');
    const articles = document.querySelectorAll('#wishlist_container .offre_wishlist');
    var boutons_nav = document.getElementById('defilement_droite_wishlist');
    var boutons_nav2 = document.getElementById('defilement_gauche_wishlist');
    var message = document.getElementById('aucune_offre');



    searchBar.addEventListener('input', function () {
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
        if (nbArticles == 0) {
            boutons_nav.style.display = 'none';
            boutons_nav2.style.display = 'none';
            message.style.display = 'block';
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const searchBarCandidatures = document.getElementById('recherche_candidatures');
    const articles_candidatures = document.querySelectorAll('#candidatures_container .offre_candidatures');
    var boutons_nav_candidatures = document.getElementById('defilement_droite_candidatures');
    var boutons_nav_candidatures2 = document.getElementById('defilement_gauche_candidatures');
    var message_candidatures = document.getElementById('aucune_offre_candidatures');



    searchBarCandidatures.addEventListener('input', function () {
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
        if (nbarticles_candidatures == 0) {
            boutons_nav_candidatures.style.display = 'none';
            boutons_nav_candidatures2.style.display = 'none';
            message_candidatures.style.display = 'block';
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var profil_photo = document.getElementById("photo_profil");
    var detail_profil = document.getElementById("detail_profil");
    var nom_prenom = document.getElementById("nom_prenom_etudiant");
    var bouton_voir_profil = document.getElementById("bouton_voir_profil");
    var bouton_deconnexion = document.getElementById("bouton_deconnexion");

    profil_photo.addEventListener('click', function (event) {
        if (detail_profil.offsetWidth === 0 && detail_profil.offsetHeight === 0) {
            detail_profil.style.height = '20em';
            detail_profil.style.width = '20em';
            profil_photo.style.position = 'absolute';
            profil_photo.style.right = '7.5em';
            profil_photo.style.top = '2em';
            profil_photo.style.width = '5em';
            profil_photo.style.cursor = 'default';
            nom_prenom.style.display = 'block';
            bouton_voir_profil.style.display = 'block';
            bouton_deconnexion.style.display = 'block';
        }
    });

    window.addEventListener('click', function (event) {
        if (detail_profil.offsetWidth > 0 && detail_profil.offsetHeight > 0) {
            if (!detail_profil.contains(event.target) && event.target !== profil_photo) {
                detail_profil.style.height = '0px';
                detail_profil.style.width = '0px';
                profil_photo.style.position = 'inherit';
                profil_photo.style.right = '0em';
                profil_photo.style.top = '0em';
                profil_photo.style.width = '3em';
                profil_photo.style.cursor = 'pointer';
                nom_prenom.style.display = 'none';
                bouton_voir_profil.style.display = 'none';
                bouton_deconnexion.style.display = 'none';
            }
        }
    });

});
