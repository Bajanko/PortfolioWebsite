import { defineConfig } from 'vite';
import { resolve } from 'path';
import { templatePlugin } from './compile-templates.js';

export default defineConfig({
    publicDir: 'public',
    plugins: [templatePlugin()],
    server: {
        watch: {
            ignored: ['**/dist/**'],
        },
    },
    build: {
        outDir: 'dist',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'index.html'),
                about: resolve(__dirname, 'about.html'),
                projects: resolve(__dirname, 'projects.html'),
                contact: resolve(__dirname, 'contact.html'),
            },
        },
    },
});
