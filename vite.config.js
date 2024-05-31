import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  build: {
    outDir: 'public/build', // Output directory for build files
    rollupOptions: {
      input: {
        main: 'resources/js/app.js', // Entry point for your application
      },
    },
  },
});

