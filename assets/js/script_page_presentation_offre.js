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

   
    document.getElementById('fileInput1').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file.type === 'application/pdf') {
            const reader = new FileReader();
            reader.onload = function() {
                const arrayBuffer = reader.result;
                const blob = new Blob([new Uint8Array(arrayBuffer)], { type: 'application/pdf' });
                const objectUrl = URL.createObjectURL(blob);
                document.getElementById('pdf_viewer_cv').setAttribute('src', objectUrl);
            };
            reader.readAsArrayBuffer(file);
        } else {
            alert('Veuillez sélectionner un fichier PDF.');
        }
    });

    document.getElementById('fileInput2').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file.type === 'application/pdf') {
            const reader = new FileReader();
            reader.onload = function() {
                const arrayBuffer = reader.result;
                const blob = new Blob([new Uint8Array(arrayBuffer)], { type: 'application/pdf' });
                const objectUrl = URL.createObjectURL(blob);
                document.getElementById('pdf_viewer_lm').setAttribute('src', objectUrl);
            };
            reader.readAsArrayBuffer(file);
        } else {
            alert('Veuillez sélectionner un fichier PDF.');
        }
    });


    document.querySelector('.star').addEventListener('click', function() {
        if (this.classList.contains('clicked')) {
            this.classList.remove('clicked'); // Supprime la classe si elle est présente
        } else {
            this.classList.add('clicked'); // Ajoute la classe si elle est absente
        }
    });

})


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
