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

function initMap(lat, lon) {
    var macarte = null;
    // Fonction d'initialisation de la carte

    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
    macarte = L.map('map').setView([lat, lon], 11);
    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a target="_blank" href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a target="_blank" href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);
    var marker = L.marker([lat, lon]).addTo(macarte);
    marker.bindPopup('Paris');

}



/*   PAGE ENTREPRISES PILOTE ADMIN  */

document.addEventListener('DOMContentLoaded', function () {

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

    initMap(48.852969,2.349903);
});