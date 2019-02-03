self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open('site-store').then(function(cache) {
      return cache.addAll([
        '/',
        '/js/app.js',
        '/css/app.css'
      ]);
    })
  );
 });
 
 self.addEventListener('fetch', function(e) {
   console.log(e.request.url);
   e.respondWith(
     caches.match(e.request).then(function(response) {
       return response || fetch(e.request);
     })
   );
 });
 