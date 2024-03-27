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
