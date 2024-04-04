const stage_search_cache = "stage-search-site-v1"
const assets = [
    "/",
    // A complèter avec les autres chemins de ressources
]


self.addEventListener("install", installEvent => {
    installEvent.waitUntil(
        caches.open(stage_search_cache).then(cache => {
            cache.addAll(assets)
        })
    )
})


self.addEventListener("fetch", fetchEvent => {
    fetchEvent.respondWith(
        caches.match(fetchEvent.request).then(response => {
            // Si la ressource est en cache, la renvoyer
            if (response) {
                return response;
            }

            // Sinon, récupérer la ressource depuis le réseau
            return fetch(fetchEvent.request).then(networkResponse => {
                // Si la ressource est récupérée avec succès, l'ajouter au cache
                if (networkResponse.ok) {
                    const clonedResponse = networkResponse.clone();
                    caches.open(stage_search_cache).then(cache => {
                        cache.put(fetchEvent.request, clonedResponse);
                    });
                }

                // Renvoyer la réponse récupérée depuis le réseau
                return networkResponse;
            }).catch(error => {
                // Si une erreur survient pendant la récupération, renvoyer une réponse par défaut
                return new Response(null, { status: 404, statusText: "Not Found" });
            });
        })
    );
});


        
if ("serviceWorker" in navigator) {
    window.addEventListener("load", function() {
        navigator.serviceWorker
        .register("/serviceWorker.js")
        .then(res => console.log("service worker resgistered"))
        .catch(err => console.log("service worker not registered", err))
    })
}
