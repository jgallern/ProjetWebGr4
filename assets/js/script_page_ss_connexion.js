document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        var titre_page_connexion = document.getElementById("titre_accueil");
        titre_page_connexion.style.backgroundSize = "100% 100%";
        setTimeout(function () {
            titre_page_connexion.innerText += '.';
        }, 1100);
    }, 1000);
})

