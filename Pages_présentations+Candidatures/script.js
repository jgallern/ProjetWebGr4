document.querySelectorAll('.rating .star').forEach(star => {
    star.addEventListener('click', function(e) {
        let ratingValue = this.getAttribute('data-value');

        let formData = new FormData();
        formData.append('rating', ratingValue);

        fetch('chemin/vers/votre/script/serveur', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('Erreur:', error);
        });

        // Mise à jour de la sélection des étoiles
        let currentStar = e.target;
        currentStar.classList.add('selected');
        let previousStar = currentStar.previousElementSibling;
        while(previousStar) {
            previousStar.classList.add('selected');
            previousStar = previousStar.previousElementSibling;
        }
        let nextStar = currentStar.nextElementSibling;
        while(nextStar) {
            nextStar.classList.remove('selected');
            nextStar = nextStar.nextElementSibling;
        }
    });
});
