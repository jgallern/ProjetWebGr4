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



function afficherOverlay() {
    const overlay = document.getElementById('overlay');
    const message = document.getElementById('message');
    var bloc_offres = document.getElementById('result_recherche_entreprise');

    bloc_offres.scrollTo(0, 0);
    bloc_offres.style.overflowX = 'hidden';
    overlay.style.display = 'block';
    message.style.display = 'block';
    
    setTimeout(function () {
        overlay.style.backgroundColor = 'rgba(0, 0, 0, 0)';
        message.style.opacity = '0';
    }, 2000);

    setTimeout(function () {
        bloc_offres.scrollTo(0, 0);
        bloc_offres.style.overflowX = 'scroll';
        overlay.style.display = 'none';
        message.style.display = 'none';
        overlay.style.backgroundColor = 'rgba(255, 255, 255, 0.715)';
        message.style.opacity = '1';
    }, 2400);
}

function no_click_icones() {
    imageContainers.forEach(container => {
        container.classList.remove('clicked');
    });
}

var imageContainers = document.querySelectorAll('.image-container');


document.addEventListener('DOMContentLoaded', function () {

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


    var result_all = document.getElementById("result_all");
    var result_modif = document.getElementById("result_modif");
    var boutonSupprimer = document.getElementById("supprimer_entreprise");

    var overlay_suppression = document.getElementById('overlay_suppression');
    var confirmationSuppression = document.getElementById('confirmationSuppression');
    var btnOui = document.getElementById('btnOui');
    var btnNon = document.getElementById('btnNon');

    var divs = document.querySelectorAll('.recherche_fiche_entreprise');


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

            result_modif.classList.add("visible");

            const position = document.getElementById('result_all').getBoundingClientRect().top + window.pageYOffset - document.getElementById('navbar').offsetHeight;
            window.scrollTo({ top: position, behavior: 'smooth' });
        }
    });


    boutonSupprimer.addEventListener('click', function (event) {
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


    imageContainers.forEach(container => {
        container.addEventListener('click', function () {

            no_click_icones();
            container.classList.add('clicked');
        });
    });

});


