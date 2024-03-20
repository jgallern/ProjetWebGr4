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








// PAGE GESTION ENTREPRISES ETUDIANTS

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





    var filter_button = document.getElementById("btn_filtre");
    var formulaire_filtre = document.getElementById("form_filtre");
    var les_filtres = document.querySelectorAll(".un_filtre");
    var submit = document.getElementById("submit_button");
    var deplier_ou_pas = false
    filter_button.addEventListener('click', function () {
        filter_button.style.borderBottomLeftRadius = '0px';
        filter_button.style.borderBottomRightRadius = '0px';

        if (deplier_ou_pas == false) {
            les_filtres.forEach(function (filtre) {
                filtre.style.opacity = '1';
                filtre.style.transitionDelay = "0.4s";
            });
            submit.style.opacity = '1';
            submit.style.transitionDelay = "0.4s";
            filter_button.innerHTML = 'Fermer';
            formulaire_filtre.style.maxHeight = formulaire_filtre.scrollHeight + 'px';

            deplier_ou_pas = true;
        }
        else {
            filter_button.style.borderBottomLeftRadius = '8px';
            filter_button.style.borderBottomRightRadius = '8px';
            les_filtres.forEach(function (filtre) {
                filtre.style.opacity = '0';
                filtre.style.transitionDelay = "0s";
            });
            submit.style.opacity = '0';
            submit.style.transitionDelay = "0s";
            filter_button.innerHTML = 'Filtrer';
            formulaire_filtre.style.maxHeight = null;

            deplier_ou_pas = false;
        }

    })
})




/*   PAGE ENTREPRISES PILOTE ADMIN  */

document.addEventListener('DOMContentLoaded', function () {

    /*
    document.getElementById('btn_modif').addEventListener('click', function () {
        if (!btn_modif_click) {
            const div_voir = document.createElement("div");
            div_voir.innerHTML = "voir l'entreprise";
            div_voir.style.backgroundColor = 'green';
            btn_modif_click = true;
            var section_apres = document.querySelector('.creation_entreprise');
            section_apres.parentNode.insertBefore(div_voir, section_apres);
        }
    });
    document.getElementById('btn_voir').addEventListener('click', function () {
        const div_voir = document.createElement("div");
        div_voir.innerHTML = "voir l'entreprise";
        div_voir.style.backgroundColor = 'blue';
        var section_apres = document.querySelector('.creation_entreprise');
        section_apres.parentNode.insertBefore(div_voir, section_apres);
    });
    document.getElementById('btn_stats').addEventListener('click', function () {
        const div_voir = document.createElement("div");
        div_voir.innerHTML = "voir l'entreprise";
        div_voir.style.backgroundColor = 'red';
        var section_apres = document.querySelector('.creation_entreprise');
        section_apres.parentNode.insertBefore(div_voir, section_apres);
    });
    */

    var result_all = document.getElementById("result_all");
    var result_modif = document.getElementById("result_modif");
    var result_stats = document.getElementById("result_stats");
    var boutonSupprimer = document.getElementById("supprimer_entreprise");

    var overlay_suppression = document.getElementById('overlay_suppression');
    var confirmationSuppression = document.getElementById('confirmationSuppression');
    var btnOui = document.getElementById('btnOui');
    var btnNon = document.getElementById('btnNon');



    var divs = document.querySelectorAll('.recherche_fiche_entreprise');

    function no_click_icones() {
        imageContainers.forEach(container => {
            container.classList.remove('clicked');
        });
    }

    function afficherOverlay() {
        const overlay = document.getElementById('overlay');
        const message = document.getElementById('message');

        overlay.style.display = 'block';
        message.style.display = 'block';

        setTimeout(function () {
            overlay.style.backgroundColor = 'rgba(0, 0, 0, 0)';
            message.style.opacity = '0';
        }, 3000);

        setTimeout(function () {
            overlay.style.display = 'none';
            message.style.display = 'none';
            overlay.style.backgroundColor = 'rgba(255, 255, 255, 0.715)';
            message.style.opacity = '1';
        }, 3400);
    }

    divs.forEach(function (div) {
        div.addEventListener('click', function () {
            // Retirer la classe "selected" de toutes les divs
            divs.forEach(function (item) {
                item.classList.remove('selected');
                item.addEventListener('mouseenter', function () {
                    this.classList.add('hover');
                });
                item.addEventListener('mouseleave', function () {
                    this.classList.remove('hover');
                });

            });

            no_click_icones();
            result_modif.classList.remove("visible");
            result_stats.classList.remove("visible");

            this.classList.add('selected');
        });
    });


    document.getElementById('btn_modif').addEventListener('click', function () {
        var isSelected = false;
        divs.forEach(div => {
            if (div.classList.contains('selected')) {
                isSelected = true;
            }
        });
        if (!isSelected) {
            afficherOverlay();
        }
        else {
            result_stats.classList.remove("visible");

            result_modif.classList.add("visible");

            const position = document.getElementById('result_all').getBoundingClientRect().top + window.pageYOffset - document.getElementById('navbar').offsetHeight;
            window.scrollTo({ top: position, behavior: 'smooth' });
        }
    });

    boutonSupprimer.addEventListener('click', function(event) {
        event.preventDefault();
        overlay_suppression.classList.add("visible");
        confirmationSuppression.classList.add("visible");
    });

    btnOui.addEventListener('click', function () {
        // Insérez ici votre logique pour supprimer l'entreprise
        console.log("Entreprise supprimée !");
        // Cachez l'overlay et la confirmation après la suppression
        overlay_suppression.classList.remove("visible");

        confirmationSuppression.classList.remove("visible");

    });

    btnNon.addEventListener('click', function () {
        // Cachez l'overlay et la confirmation si l'utilisateur clique sur "Non"
        overlay_suppression.classList.remove("visible");

        confirmationSuppression.classList.remove("visible");

    });

    document.getElementById('btn_voir').addEventListener('click', function () {
        var isSelected = false;
        divs.forEach(div => {
            if (div.classList.contains('selected')) {
                isSelected = true;
            }
        });
        if (!isSelected) {
            afficherOverlay();
        }
        else {
            result_modif.classList.remove("visible");
            result_stats.classList.remove("visible");

            window.open("https://www.google.com/", "_blank");

        }
    });

    document.getElementById('btn_stats').addEventListener('click', function () {
        var isSelected = false;
        divs.forEach(div => {
            if (div.classList.contains('selected')) {
                isSelected = true;
            }
        });
        if (!isSelected) {
            afficherOverlay();
        }
        else {
            result_modif.classList.remove("visible");

            result_stats.classList.add("visible");

            const position = document.getElementById('result_all').getBoundingClientRect().top + window.pageYOffset - document.getElementById('navbar').offsetHeight;
            window.scrollTo({ top: position, behavior: 'smooth' });
        }
    });

    const imageContainers = document.querySelectorAll('.image-container');

    imageContainers.forEach(container => {
        container.addEventListener('click', function () {

            no_click_icones();
            container.classList.add('clicked');
        });
    });



    /*   PERMETTRE DE TAPER PLUSIEURS ADRESSES  */

    const ajouterAdresseBtn = document.getElementById('ajouterAdresse');
    const adressesContainer = document.getElementById('adresses');

    ajouterAdresseBtn.addEventListener('click', function () {
        const nouvelleAdresse = document.createElement('div');
        nouvelleAdresse.classList.add('adresse');
        nouvelleAdresse.innerHTML = `
                <input type="text" name="nouv_lieu" placeholder="Nouvelle localité">
                <button id='bouton_supprimer' type="button" class="supprimer">❌</button>
            `;

        adressesContainer.appendChild(nouvelleAdresse);
    });

    // Gestion des boutons "Supprimer cette adresse" de manière dynamique
    adressesContainer.addEventListener('click', function (event) {
        if (event.target.classList.contains('supprimer')) {
            const adresseASupprimer = event.target.parentElement;
            adressesContainer.removeChild(adresseASupprimer);
        }
    });

})


document.addEventListener('DOMContentLoaded', function(){
    var fiches_offres = document.querySelectorAll('#fiches_offres');
    var overlay_offres = document.querySelectorAll("overlay_fiche_offres");
    fiches_offres.forEach(article => {

    });
})