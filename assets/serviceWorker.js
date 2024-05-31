const CACHE_NAME = 'NomDuCache';
const assets = [
    // Ajoutez ici les ressources que vous souhaitez mettre en cache
    '../views/page_accueil_ss_connexion.php',
    '../assets/css/style.css',
    '../assets/js/script_wishlist_candidatures.js',
    '../assets/images/logo_noir.png',
    // Ajoutez d'autres fichiers nécessaires
];

self.addEventListener('install', evt => {
    evt.waitUntil(
        caches.open(CACHE_NAME).then(cache => {
            return cache.addAll(assets);
        })
    );
});

self.addEventListener('activate', evt => {
    console.log('Le Service Worker a été installé');
});

self.addEventListener('fetch', event => {
    event.respondWith(
        caches.open(CACHE_NAME).then(cache => {
            return cache.match(event.request).then(response => {
                return response || fetch(event.request).then(response => {
                    cache.put(event.request, response.clone());
                    return response;
                });
            });
        })
    );
});
