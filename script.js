document.addEventListener('DOMContentLoaded', function() {
    var txt_bienvenue = document.getElementById("titre_bienvenue");
    var phrase = ["Te revoilà enfin !", "Tu nous avais manqué", "Que c'est chouette de te revoir", "On t'attendais !", "On a un petit goût de reviens y non ?", "Tout ce temps sans nous, comment as tu pu ?", "Dis nous tout"];
    var indiceAleatoire = Math.floor(Math.random() * phrase.length);
    txt_bienvenue.textContent = phrase[indiceAleatoire];

});
