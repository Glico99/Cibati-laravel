import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/shared.css',
                    'resources/css/menuStyle.css',
                    'resources/css/homeStyle.css',
                    'resources/css/freccia.css',
                    'resources/css/locationStyle.css',
                    'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
