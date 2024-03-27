document.addEventListener('DOMContentLoaded', function () {
    var txt_bienvenue = document.getElementById("titre_bienvenue");
    var phrase = ["Te revoilà enfin !", "Tu nous avais manqué", "On est attachants hein ?", "Nous voilà en bonne compagnie", "Que c'est chouette de te revoir", "On t'attendais !", "Tout ce temps sans nous, comment as tu fais ?", "Dis nous tout"];
    var indiceAleatoire = Math.floor(Math.random() * phrase.length);
    txt_bienvenue.textContent = phrase[indiceAleatoire];

});