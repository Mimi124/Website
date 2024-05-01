import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/img/favicon.ico',

                'resources/lib/animate/animate.min.css',
                'resources/lib/owlcarousel/assets/owl.carousel.min.css',
                'resources/lib/lightbox/css/lightbox.min.css',
                'resources/css/bootstrap.min.css',
                'resources/css/fontawesome-all.min.css',
                'resources/css/hamburgers.min.css',
                'resources/css/magnific-popup.css',
                'resources/css/nice-select.css',
                'resources/css/slick.css',
                'resources/css/style.css',
                'resources/css/themify-icons.css',
                'resources/css/main.css',
                
                ////////////////JS////////////////////
                'resources/lib/wow/wow.min.js',
                'resources/lib/easing/easing.min.js',
                'resources/lib/waypoints/waypoints.min.js',
                'resources/lib/owlcarousel/owl.carousel.min.js',
                'resources/lib/counterup/counterup.min.js',
                'resources/lib/parallax/parallax.min.js',
                'resources/lib/isotope/isotope.pkgd.min.js',
                'resources/lib/lightbox/js/lightbox.min.js',


                // 'resources/js/popper.min.js',
                'resources/js/gijgo.min.js',
                'resources/js/animated.headline.js',
                'resources/js/jquery.magnific-popup.js',
                'resources/js/jquery.slicknav.min.js',
                'resources/js/slick.min.js',
                'resources/js/jquery.nice-select.min.js',
                'resources/js/jquery.sticky.js',
                'resources/js/plugins.js',
                'resources/js/main.js',






                // 'resources/css/app.css',
                // 'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '$': 'jQuery',
            // '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        },
    },
});
