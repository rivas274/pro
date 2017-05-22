const { mix } = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    //.extract(['vue','axios','jquery']).version()
   .js('resources/assets/js/app-landing.js', 'public/js/app-landing.js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .less('node_modules/bootstrap-less/bootstrap/bootstrap.less', 'public/css/bootstrap.css')
   .less('resources/assets/less/adminlte-app.less','public/css/adminlte-app.css')
   .less('node_modules/toastr/toastr.less','public/css/toastr.css')
   .combine([
       'public/css/app.css',
       'node_modules/admin-lte/dist/css/skins/_all-skins.css',
       'public/css/adminlte-app.css',
       'node_modules/icheck/skins/square/blue.css',
       'public/css/toastr.css'
   ], 'public/css/all.css')
   .combine([
       'public/css/bootstrap.css',
       'resources/assets/css/main.css'
   ], 'public/css/all-landing.css')
   //APP RESOURCES
   .copy('resources/assets/img/*.*','public/img')
   //VENDOR RESOURCES
   .copy('node_modules/font-awesome/fonts/*.*','public/fonts/')
   .copy('node_modules/ionicons/dist/fonts/*.*','public/fonts/')
   .copy('node_modules/admin-lte/bootstrap/fonts/*.*','public/fonts/bootstrap')
   .copy('node_modules/admin-lte/dist/css/skins/*.*','public/css/skins')
   .copy('node_modules/admin-lte/dist/img','public/img')
   .copy('node_modules/admin-lte/plugins','public/plugins')
   .copy('node_modules/icheck/skins/square/blue.png','public/css')
   .copy('node_modules/icheck/skins/square/blue@2x.png','public/css')
   .browserSync('pro.app');
if (mix.config.inProduction) {
  mix.version();
}