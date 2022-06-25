import { defineConfig } from "vite";
import eslint from "vite-plugin-eslint";
import laravel from "vite-plugin-laravel";

export default defineConfig({
    plugins: [
        eslint(),
        laravel({
            postcss: [],
        }),
    ],
});
