<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#ffeddf">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="../../assets/manifest.json">
    <style>
        /* Styles précédents conservés */
    </style>
    <title>Mentions Légales</title>
</head>
<body>
    <h1>Mentions Légales</h1>
    <h2>Informations sur l'entreprise</h2>
    <p>Nom de l'entreprise : <strong>Stage en Bref</strong></p>
    <p>Numéro SIRET : <strong>12345678901234</strong></p>
    <p>Forme juridique : <strong>Société à Responsabilité Limitée (SARL)</strong></p>
    <p>Capital social : <strong>6 000 000 €</strong></p>
    <p>Adresse du siège social : <strong>102 Avenue DMC, 68200 Mulhouse</strong></p>

    <h2>Informations sur l'hébergeur</h2>
    <p>Nom de l'hébergeur : <strong>Stage en Bref</strong></p>
    <p>Adresse de l'hébergeur : <strong>102 Avenue DMC, Mulhouse, 68200</strong></p>
    <p>Numéro de téléphone de l'hébergeur : <strong>+33 7 66 08 66 79</strong></p>
    <p>Adresse e-mail de l'hébergeur : <a href="mailto:stageenbref@gmail.com" aria-label="Envoyer un e-mail à Stage en Bref"><strong>stageenbref@gmail.com</strong></a></p>
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('../../assets/service-worker.js')
                .then(function(registration) {
                    console.log('Service Worker registered with scope:', registration.scope);
                })
                .catch(function(error) {
                    console.log('Service Worker registration failed:', error);
                });
        }
    </script>
</body>
</html>
