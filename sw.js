self.addEventListener('install', function(event){
	console.log('[Service Worker] Installing Service Worker..', event);
	event.waitUntil(
			caches.open('static')
				.then(function(cache){
					console.log('[service Worker] precaching App Shell');
					cache.addAll({
						'',
						'home.php',
						'sw.js'
					});
					console.log('[service worker] Done');
				})
		)
});
self.addEventListener('activate', function(event){
	console.log('[service worker] Activating Service Worker..', event);
	return self.clients.claim();
});
self.addEventListener('fetch', function(event){
	console.log(event.request);
	event.respondWith(
			caches.match(event.request)
			.then(function[])
		);
});

