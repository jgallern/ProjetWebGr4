//Installation du service worker
const CACHE_NAME = 'NomDuCache'
self.addEventListener('install', evt => {
    evt.waitUntil(caches.open(NomDuCache).then(cache => {
        cache.addAll(assets);
    })
    )
});

self.addEventListener('activate', evt => {
    console.log('le Service Worker a été installé ');
})

self.addEventListener('fetch', function (event) {
    event.respondWith(
        caches.open('NomDuCache').then(function (cache) {
            return cache.match(event.request).then(function (response) {
                return response || fetch(event.request).then(function (response) {
                    cache.put(event.request, response.clone());
                    return response;
                });
            });
        })
    );
});