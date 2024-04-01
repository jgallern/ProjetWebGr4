document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.star');
    stars.forEach(star => {
        star.addEventListener('click', function () {
            removeSelection();
            this.classList.add('selected');
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

        fetch(document.location.href, {
            method: 'POST',
            body: formData
        }).then(response => response.text())
            .then(data => console.log(data))
            .catch(error => console.error('Error:', error));
    });
});
