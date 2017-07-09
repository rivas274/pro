const { mix } = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js').version()
    .sass('resources/assets/sass/app.scss', 'public/css').version()
    .copy('node_modules/font-awesome/fonts/*', 'public/fonts/')
    .browserSync('pro.app');
/* para integrar estylos de una plantilla
mix.styles([
    'public/css/vendor/normalize.css',
    'public/css/vendor/videojs.css'
], 'public/css/all.css');
*/
/* para integrar js de una plantilla
mix.scripts([
    'public/js/admin.js',
    'public/js/dashboard.js'
], 'public/js/all.js');
*/
/* 
mix.copy('node_modules/foo/bar.css', 'public/css/bar.css');
mix.copyDirectory('assets/img', 'public/img'); 
mix.disableNotifications();
*/