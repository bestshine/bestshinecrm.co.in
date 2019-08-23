let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('resources/assets/js/app.js', 'public/js').sass('resources/assets/sass/app.scss', 'public/css');

// robust js
mix.js('resources/assets/app-assets/js/core/libraries/jquery.min.js', 'public/js/app-assets/jquery.min.js');
mix.js('resources/assets/app-assets/vendors/js/ui/tether.min.js', 'public/js/app-assets/tether.min.js');
mix.js('resources/assets/app-assets/js/core/libraries/bootstrap.min.js', 'public/js/app-assets/bootstrap.min.js');
// mix.js('resources/assets/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js', 'public/js/app-assets/perfect-scrollbar.jquery.min.js');
mix.js('resources/assets/app-assets/vendors/js/ui/perfect-scrollbar.jquery.js', 'public/js/app-assets/perfect-scrollbar.jquery.js');
mix.js('resources/assets/app-assets/vendors/js/ui/unison.min.js', 'public/js/app-assets/unison.min.js');
mix.js('resources/assets/app-assets/vendors/js/ui/blockUI.min.js', 'public/js/app-assets/blockUI.min.js');
mix.js('resources/assets/app-assets/vendors/js/ui/jquery.matchHeight-min.js', 'public/js/app-assets/jquery.matchHeight-min.js');
mix.js('resources/assets/app-assets/vendors/js/ui/screenfull.min.js', 'public/js/app-assets/screenfull.min.js');
mix.js('resources/assets/app-assets/vendors/js/extensions/pace.min.js', 'public/js/app-assets/pace.min.js');
mix.js('resources/assets/app-assets/vendors/js/charts/chart.min.js', 'public/js/app-assets/chart.min.js');
mix.js('resources/assets/app-assets/js/core/app-menu.js', 'public/js/app-assets/app-menu.js');
mix.js('resources/assets/app-assets/js/core/app.js', 'public/js/app-assets/app.js');
mix.js('resources/assets/app-assets/js/scripts/pages/dashboard-lite.js', 'public/js/app-assets/dashboard-lite.js');

// robust css
mix.styles('resources/assets/app-assets/css/bootstrap.css','public/css/app-assets/bootstrap.css');
mix.styles('resources/assets/app-assets/fonts/icomoon.css','public/css/app-assets/icomoon.css');
mix.styles('resources/assets/app-assets/fonts/flag-icon-css/css/flag-icon.min.css','public/css/app-assets/fonts/flag-icon.min.css');
mix.styles('resources/assets/app-assets/vendors/css/extensions/pace.css','public/css/app-assets/pace.css');
mix.styles('resources/assets/app-assets/css/bootstrap-extended.css','public/css/app-assets/bootstrap-extended.css');
mix.styles('resources/assets/app-assets/css/app.css','public/css/app-assets/app.css');
mix.styles('resources/assets/app-assets/css/colors.css','public/css/app-assets/colors.css');
mix.styles('resources/assets/app-assets/css/core/menu/menu-types/vertical-menu.css','public/css/app-assets/vertical-menu.css');
mix.styles('resources/assets/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css','public/css/app-assets/vertical-overlay-menu.css');
mix.styles('resources/assets/app-assets/css/core/colors/palette-gradient.css','public/css/app-assets/palette-gradient.css');

// image 
mix.copy('resources/assets/app-assets/images/ico','public/app-assets/images/ico');

// common css
mix.styles('resources/assets/css/common.css', 'public/css/common.css');

// datatables custom css
mix.styles('resources/assets/css/datatables-custom.css', 'public/css/datatables-custom.css');

// sweetalert scripts
mix.js('resources/assets/js/sweetalert/sweetalert2.min.js', 'public/js/sweetalert/sweetalert.js');
mix.styles('resources/assets/css/sweetalert/sweetalert2.css', 'public/css/sweetalert/sweetalert.css');

// force numeric 
mix.js('resources/assets/js/forceNumeric.js', 'public/js/forceNumeric.js');