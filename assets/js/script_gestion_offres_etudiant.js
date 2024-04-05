function toggleMenu() {
    var menuIcon = document.querySelector('.menu-icon');
    var navbar = document.getElementById("navbar");
    var lien_navbar = document.getElementById("lien_navbar_expand");

    menuIcon.classList.toggle('cross');
    if (navbar.classList.contains("expand")) {
        navbar.classList.remove("expand");
        document.body.classList.remove('disable-scroll');
        lien_navbar.classList.remove('visible');

    } else {
        document.body.classList.add('disable-scroll');
        navbar.classList.add("expand");
        lien_navbar.classList.add('visible');
    }
}


document.addEventListener("DOMContentLoaded", function () {
    var profil_photo = document.getElementById("photo_profil");
    var detail_profil = document.getElementById("detail_profil");
    var nom_prenom = document.getElementById("nom_prenom_etudiant");
    var bouton_deconnexion = document.getElementById("bouton_deconnexion");

    profil_photo.addEventListener('click', function (event) {
        if (!detail_profil.classList.contains('visible')) {
            detail_profil.classList.add('visible');
            profil_photo.classList.add('visible');
            nom_prenom.classList.add('visible');
            bouton_deconnexion.classList.add('visible');
        }
    });

    window.addEventListener('click', function (event) {
        if (detail_profil.classList.contains('visible')) {
            if (!detail_profil.contains(event.target) && event.target !== profil_photo) {
                detail_profil.classList.remove('visible');
                profil_photo.classList.remove('visible');
                nom_prenom.classList.remove('visible');
                bouton_deconnexion.classList.remove('visible');
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
                filtre.style.transitionDelay = "0.6s";
            });
            submit.style.opacity = '1';
            submit.style.transitionProperty = "opacity"; // Spécifie la propriété à laquelle s'applique la transition
            submit.style.transitionDelay = "0.6s";

            filter_button.innerHTML = 'Fermer';
            formulaire_filtre.style.maxHeight = formulaire_filtre.scrollHeight + 'px';

            deplier_ou_pas = true;

        }
        else {
            setTimeout(function () {
                filter_button.style.borderBottomLeftRadius = '8px';
                filter_button.style.borderBottomRightRadius = '8px';
            }, 750);

            les_filtres.forEach(function (filtre) {
                filtre.style.opacity = '0';
                filtre.style.transitionDelay = "0s";
            });
            submit.style.opacity = '0';
            submit.style.transitionProperty = "opacity";
            submit.style.transitionDelay = "0s";
            filter_button.innerHTML = 'Filtrer';
            formulaire_filtre.style.maxHeight = null;

            deplier_ou_pas = false;

        }

    })


    




})