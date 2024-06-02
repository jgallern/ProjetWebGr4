const CACHE_NAME = 'NomDuCache-v1'; // Versionnez le cache
const assets = [
    '../views/page_accueil_ss_connexion.php',
    '../assets/css/style.css',
    '../assets/js/script_wishlist_candidatures.js',
    '../assets/images/logo_noir.png',
    '../assets/images/logo_blanc_60.png',
    '../assets/images/ico_modifier.png',
    '../assets/images/photo_profil.png',
    '../assets/images/voir_plus.png',
    '../assets/images/screenshot_wide.png',
    '../assets/images/screen_mobile.png',
    '../assets/images/fond5.png'
];

// Installation du service worker et mise en cache des assets
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME).then(cache => {
            return cache.addAll(assets);
        })
    );
});

// Activation du service worker et nettoyage des anciens caches
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.map(cache => {
                    if (cache !== CACHE_NAME) {
                        return caches.delete(cache);
                    }
                })
            );
        })
    );
    console.log('Le Service Worker a été activé');
});

// Interception des requêtes réseau et gestion du cache
self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request).then(response => {
            return response || fetch(event.request).then(fetchResponse => {
                return caches.open(CACHE_NAME).then(cache => {
                    cache.put(event.request, fetchResponse.clone());
                    return fetchResponse;
                });
            });
        })
    );
});
