import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/js/app.js',
                    'public/css/principal.css',
                    'public/js/hide.js',
                    'public/js/Scroll.js',
                    'public/js/modal.js',
                    'public/js/multipaso.js',
                    'public/js/evaluacionInputs.js',],
            refresh: true,
        }),
    ],
});
