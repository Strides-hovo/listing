import {defineConfig} from 'vitest/config'


export default defineConfig({
    test: {
        include: ["./stores/*.test.ts"]
    },
    server: {
        hmr: {
            overlay: false
        }
    }
})