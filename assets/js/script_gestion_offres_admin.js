function afficherOverlay() {
    const overlay = document.getElementById('overlay');
    const message = document.getElementById('message');
    var bloc_offres = document.getElementById('result_recherche_offres');

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
    const fichesOffres = document.querySelectorAll('.recherche_fiche_offres');

    fichesOffres.forEach(ficheOffre => {

        ficheOffre.addEventListener('mouseenter', function () {
            ficheOffre.classList.add("hover");
        });

        ficheOffre.addEventListener('mouseleave', function () {
            ficheOffre.classList.remove("hover");
        });

        ficheOffre.addEventListener('click', function () {
            fichesOffres.forEach(function (item) {
                item.classList.remove('select');
            });
            ficheOffre.classList.add('select');
            result_stats.classList.remove('visible');
            result_modif.classList.remove("visible");
        });
    });



    const btn_voir_offre = document.getElementById('btn_voir_offre');
    const btn_modif_offre = document.getElementById('btn_modif_offre');
    var btnOui = document.getElementById('btnOui');
    var btnNon = document.getElementById('btnNon');
    var overlay_suppression = document.getElementById('overlay_suppression');
    var isSelect = false;

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


    btn_modif_offre.addEventListener('click', function () {
        fichesOffres.forEach(div => {
            if (div.classList.contains('select')) {
                isSelect = true;
            }
        });

        if (isSelect == true) {
            result_stats.classList.remove('visible');
            result_modif.classList.add("visible");

            const position = document.getElementById('result_all').getBoundingClientRect().top + window.pageYOffset - document.getElementById('navbar').offsetHeight;
            window.scrollTo({ top: position, behavior: 'smooth' });
        }
        else {
            afficherOverlay();
        }


    });

    btn_voir_offre.addEventListener('click', function () {
        fichesOffres.forEach(div => {
            if (div.classList.contains('select')) {
                isSelect = true;
            }
        });

        if (isSelect == true) {
            result_stats.classList.add('visible');
            result_modif.classList.remove("visible");

            const position = document.getElementById('result_all').getBoundingClientRect().top + window.pageYOffset - document.getElementById('navbar').offsetHeight;
            window.scrollTo({ top: position, behavior: 'smooth' });
        }
        else {
            afficherOverlay();
        }
    });

    var boutonSupprimerOffre = document.getElementById("supprimer_offre");
    boutonSupprimerOffre.addEventListener('click', function (event) {
        event.preventDefault();
        document.getElementById('overlay_suppression').classList.add("visible");
        document.getElementById('confirmationSuppression')  .classList.add("visible");
    });


});