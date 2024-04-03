/*   PAGE ENTREPRISES PILOTE ADMIN  */

document.addEventListener('DOMContentLoaded', function () {


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



function afficherOverlay() {
    const overlay = document.getElementById('overlay');
    const message = document.getElementById('message');

    overlay.style.display = 'block';
    message.style.display = 'block';

    setTimeout(function () {
        overlay.style.backgroundColor = 'rgba(0, 0, 0, 0)';
        message.style.opacity = '0';
    }, 2000);

    setTimeout(function () {
        overlay.style.display = 'none';
        message.style.display = 'none';
        overlay.style.backgroundColor = 'rgba(255, 255, 255, 0.715)';
        message.style.opacity = '1';
    }, 2400);
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
    var isSelect = false;


    btn_modif_offre.addEventListener('click', function () {
        fichesOffres.forEach(div => {
            if (div.classList.contains('select')) {
                isSelect = true;
            }
        });

        if (isSelect == true) {
            result_stats.classList.remove('visible');
            result_modif.classList.add("visible");
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