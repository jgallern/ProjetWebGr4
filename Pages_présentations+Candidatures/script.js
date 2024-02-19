// Fonction pour mettre à jour l'affichage des étoiles
  function updateStars(stars, selectedIndex) {
    stars.forEach((star, index) => {
      if(index <= selectedIndex) {
        star.classList.add('selected');
      } else {
        star.classList.remove('selected');
      }
    });
  }

  // Ajoutez un écouteur d'événements à toutes les étoiles
  const stars = document.querySelectorAll('.star');
  stars.forEach((star, index) => {
    star.addEventListener('click', () => {
      updateStars(stars, index);
      // Ici, vous pouvez également envoyer la note à un serveur ou la sauvegarder
      console.log(`L'offre a été notée ${index + 1} étoiles.`);
    });
  });
