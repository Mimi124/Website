import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/img/favicon.ico',
                'resources/assets/lib/animate/animate.min.css',
                'resources/assets/lib/owlcarousel/assets/owl.carousel.min.css',
                'resources/assets/lib/lightbox/css/lightbox.min.css',
                'resources/assets/css/bootstrap.min.css',
                'resources/assets/css/style.css',
                'resources/assets/css/themify-icons.css',

                // 'resources/assets/css/fontawesome-all.min.css',
                // 'resources/assets/css/hamburgers.min.css',
                // 'resources/assets/css/magnific-popup.css',
                // 'resources/assets/css/nice-select.css',
                // 'resources/assets/css/slick.css',
                // 'resources/assets/css/main.css',
                // 'resources/assets/js/vendor/swiper/swiper-bundle.min.css',
                // 'resources/assets/js/vendor/glightbox/css/glightbox.min.css',
                // 'resources/assets/js/vendor/aos/aos.css',

                ////////////////JS////////////////////
                'resources/assets/lib/wow/wow.min.js',
                'resources/assets/lib/easing/easing.min.js',
                'resources/assets/lib/waypoints/waypoints.min.js',
                'resources/assets/lib/owlcarousel/owl.carousel.min.js',
                'resources/assets/lib/counterup/counterup.min.js',
                'resources/assets/lib/parallax/parallax.min.js',
                'resources/assets/lib/isotope/isotope.pkgd.min.js',
                'resources/assets/lib/lightbox/js/lightbox.min.js',
                'resources/assets/js/main.js',


                // 'resources/assets/js/popper.min.js',
                // 'resources/assets/js/gijgo.min.js',
                // 'resources/assets/js/animated.headline.js',
                // 'resources/assets/js/jquery.magnific-popup.js',
                // 'resources/assets/js/jquery.slicknav.min.js',
                // 'resources/assets/js/slick.min.js',
                // 'resources/assets/js/jquery.nice-select.min.js',
                // 'resources/assets/js/jquery.sticky.js',
                // 'resources/assets/js/plugins.js',
                // 'resources/assets/js/popper.min.js',

                // 'resources/assets/js/vendor/aos/aos.js',
                // 'resources/assets/js/vendor/glightbox/js/glightbox.min.js',
                // // 'resources/vendor/isotope-layout/isotope.pkgd.min.js',
                // 'resources/assets/js/vendor/swiper/swiper-bundle.min.js',






                // 'resources/css/app.css',
                //  'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // '$': 'jQuery',
            // '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        },
    },
});
