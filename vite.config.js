import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve:{
        alias:{
            '~bootstrap':path.resolve(__dirname,'node_modules/bootstrap'),
            'node_modules/flag-icon-css/css/flag-icons.css':path.resolve(__dirname,'node_modules/flag-icon-css'),
            'node_modules/bootstrap-icons/fonts': path.resolve(__dirname, 'node_modules/bootstrap-icons'),
        }
    }
});
