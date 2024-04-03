document.addEventListener('DOMContentLoaded', function () {

    // Select all star elements
    const stars = document.querySelectorAll('.star');
    console.log("Stars found: ", stars.length);

    // Reference to the hidden input element for storing the rating value
    const ratingInput = document.getElementById('rating');
    console.log("Rating input element: ", ratingInput);

    function removeSelection() {
        stars.forEach(star => {
            star.classList.remove('selected');
        });
        console.log("Selection removed from all stars.");
    }


    stars.forEach(star => {
        star.addEventListener('click', function () {
            console.log("Star clicked: ", this.getAttribute('data-value'));

            // Remove selection from all stars
            removeSelection();

            // Mark the clicked star as selected
            this.classList.add('selected');
            console.log("Star marked as selected.");

            // Update the hidden input's value to reflect the selected star's rating
            ratingInput.value = this.getAttribute('data-value');
            console.log("Hidden input value updated: ", ratingInput.value);
        });
    });


    document.getElementById('evaluation').addEventListener('submit', function() {
        console.log("Form submitted. Rating: ", ratingInput.value);
    });
});
