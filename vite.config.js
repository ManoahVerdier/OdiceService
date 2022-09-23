import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.min.css',
                'resources/js/app.js',
                'resources/js/lib/jquery.nice-select.min.js',
                'resources/js/lib/jquery.min.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '$': 'jQuery',
        },
    },
    
});
