function toggleEntreprisesVisibility() {
    // Select all entreprise items
    const entreprises = document.querySelectorAll('.listeentreprises a');
    // Define max visible items
    const maxVisible = 5;
    let hiddenItemsExist = false;

    // Loop through entreprise items to check if any hidden items exist
    entreprises.forEach((entreprise, index) => {
        if (index >= maxVisible && entreprise.style.display === 'none') {
            hiddenItemsExist = true; // Indicate that there are items to show
        }
    });

    // Based on hiddenItemsExist, either show or hide the items
    entreprises.forEach((entreprise, index) => {
        if (index >= maxVisible) {
            entreprise.style.display = hiddenItemsExist ? 'block' : 'none';
        }
    });

    // Update the visibility of the 'voir plus' button accordingly
    const voirPlusBtn = document.querySelector('.carte_voir_plus img');
    if (hiddenItemsExist) {
        // Optional: Change the image or text of voirPlusBtn to indicate a state of showing less
        voirPlusBtn.src = '../../assets/images/voir_moins.png'; // Assuming you have an image for 'show less'
    } else {
        voirPlusBtn.src = '../../assets/images/voir_plus.png'; // Back to 'show more' state
    }




}

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