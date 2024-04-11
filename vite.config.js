
import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/assets/css/app.css', 'resources/assets/js/app.js', 'resources/assets/css/reset.css', 'resources/assets/css/media.css', 'resources/assets/css/bootstrap.min.css'],
            refresh: true,
        }),
    ],
});
