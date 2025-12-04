import { defineConfig } from 'vite'

export default defineConfig({
  build: {
    outDir: 'dist',
    assetsDir: 'assets',
    // Copy all non-code assets to dist
    rollupOptions: {
      input: {
        main: './index.html'
      }
    }
  }
})
