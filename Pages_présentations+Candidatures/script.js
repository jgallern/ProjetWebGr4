document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.star');
    stars.forEach(star => {
        star.addEventListener('click', function () {
            removeSelection();
            this.classList.add('selected');
            // Optionally, automatically submit the form here or wait for a button click

        });
    });

    function removeSelection() {
        stars.forEach(star => {
            star.classList.remove('selected');
        });
    }

    document.getElementById('envoyerCommentaire').addEventListener('click', function () {
        const selectedRating = document.querySelector('.rating .selected');
        const ratingValue = selectedRating ? selectedRating.getAttribute('data-value') : null;
        const commentaire = document.getElementById('commentaire').value;

        if (!ratingValue) {
            console.error('No rating selected');
            return; // Exit the function if no rating is selected
        }

        let formData = new FormData();
        formData.append('rating', ratingValue);
        formData.append('commentaire', commentaire);

        fetch('traiterDonnees.php', {
            method: 'POST',
            body: formData
        })

    });
});
