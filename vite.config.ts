import { defineConfig } from 'vite';
import eslint from 'vite-plugin-eslint';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    resolve: {
        alias: {
            '@': '/resources/js',
            '~': '/resources/js/Components',
        },
    },
    plugins: [
        eslint(),
        laravel({
            input: ['resources/js/app.ts', 'resources/css/app.css'],
            refresh: ['resources/views/**'],
        }),
    ],
});
