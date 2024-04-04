document.addEventListener('DOMContentLoaded', function () {
    var menu_burger = document.querySelector(".menu-icon");
    menu_burger.addEventListener('click', function () {
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
    })
})

function remplacerEspacesParPlus(chaine) {
    return chaine.replace(/ /g, '+');
}

document.addEventListener('DOMContentLoaded', function () {


    ex_reg_cp = /^\d{5}$/;
    var select_code_postal = document.getElementById("code_postal_entreprise_creer");
    var adresse_entreprise = document.getElementById("adresse_entreprise_creer");
    //adresse_entreprise.style.display='none';
    var select_adresse = document.getElementById("ul_adresse");
    adresse_entreprise.addEventListener("input", async function () {
        if (select_code_postal.value === "") {
            select_code_postal.setCustomValidity("Veuillez remplir le code postal");
        }

        else if (ex_reg_cp.test(select_code_postal.value)) {
            var xhr = new XMLHttpRequest();
            var value_code_postal = select_code_postal.value;
            var value_adresse = remplacerEspacesParPlus(adresse_entreprise.value);
            select_code_postal.setCustomValidity("");
            //console.log('https://api-adresse.data.gouv.fr/search/?q=' + value_adresse + '&postcode=' + value_code_postal);

            xhr.open("GET", 'https://api-adresse.data.gouv.fr/search/?q=' + value_adresse + '&postcode=' + value_code_postal);
            xhr.onload = function () {
                var html = "";
                if (xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.features.length > 0) {
                        response.features.forEach(function (feature) {
                            html += '<li>' + feature.properties.label + '</li>';
                        });
                        select_adresse.innerHTML = html;

                        var listItems = document.querySelectorAll("#ul_adresse li");
                        listItems.forEach(function (item) {
                            item.addEventListener("click", function () {
                                // Remplir l'input adresse_entreprise avec le label sélectionné
                                adresse_entreprise.value = item.textContent;
                                select_adresse.innerHTML = "";
                            });
                        });
                    } else {
                        html = '<li style="list-style: none;">Aucun résultat trouvé.</li>';
                        select_adresse.innerHTML = html;
                    }
                }
                else {
                    console.log("Erreur lors de la récupération des données.");
                }
            }
            xhr.send();
        }

        else {
            select_code_postal.setCustomValidity("Le code postal doit contenir 5 chiffres");
        }
        select_code_postal.reportValidity();
    });

})


/*   PAGE ENTREPRISES PILOTE ADMIN  */

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
        <input class='code_postal_modif' type="text" name="code_postal" placeholder="Entrez le code postal">
        <input class='adresse_entreprise_modif' type="text" name="nouv_lieu" placeholder="Nouvelle localité">
        <ul class='ul_adresse_modif'></ul> <!-- Utilise ul au lieu de ul_adresse_modif -->
        <button type="button" class="supprimer">❌</button> <!-- Utilisez un bouton sans id -->
    `;

        adressesContainer.appendChild(nouvelleAdresse);
    });

    // Gestion des boutons "Supprimer cette adresse" de manière dynamique
    adressesContainer.addEventListener('click', function (event) {
        if (event.target.classList.contains('supprimer')) {
            const adresseASupprimer = event.target.closest('.adresse');
            adressesContainer.removeChild(adresseASupprimer);
        }
    });

    // Gestion de la recherche d'adresses pour toutes les adresses ajoutées
    adressesContainer.addEventListener('input', async function (event) {
        const codePostalInput = event.target.closest('.adresse').querySelector('.code_postal_modif');
        const adresseInput = event.target.closest('.adresse').querySelector('.adresse_entreprise_modif');

        const ex_reg_cp = /^\d{5}$/;
        if (ex_reg_cp.test(codePostalInput.value)) {
            const xhr = new XMLHttpRequest();
            const value_code_postal = codePostalInput.value;
            const value_adresse = encodeURIComponent(adresseInput.value.trim());

            xhr.open("GET", 'https://api-adresse.data.gouv.fr/search/?q=' + value_adresse + '&postcode=' + value_code_postal);
            xhr.onload = function () {
                if (xhr.status == 200) {
                    const response = JSON.parse(xhr.responseText);
                    const ulAdresse = event.target.closest('.adresse').querySelector('.ul_adresse_modif');
                    let html = "";
                    if (response.features.length > 0) {
                        response.features.forEach(function (feature) {
                            html += '<li>' + feature.properties.label + '</li>';
                        });
                        ulAdresse.innerHTML = html;

                        const listItems = ulAdresse.querySelectorAll("li");
                        listItems.forEach(function (item) {
                            item.addEventListener("click", function () {
                                // Remplir l'input adresse_entreprise avec le label sélectionné
                                adresseInput.value = item.textContent;
                                ulAdresse.innerHTML = "";
                            });
                        });
                    } else {
                        html = '<li style="list-style: none;">Aucun résultat trouvé.</li>';
                        ulAdresse.innerHTML = html;
                    }
                } else {
                    console.log("Erreur lors de la récupération des données.");
                }
            };
            xhr.send();
        }
    });








})


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