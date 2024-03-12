document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("candidature-form");
    form.onsubmit = async function(e) {
        e.preventDefault();
        const formData = new FormData(form);

        const response = await fetch('traiterDonnees_Candidatures.php', {
            method: 'POST',
            body: formData,
        });

        const result = await response.text();
        console.log(result); // Traitez la réponse de votre script PHP ici
    };
});
