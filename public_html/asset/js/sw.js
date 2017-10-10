self.addEventListener('install', function(e) {
    e.waitUntil(
        caches.open('v0.1').then(function(cache) {
            return cache.addAll([
                '/',
                '/index.html'
            ]);
        })
    );
});
