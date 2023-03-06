// https://v3.nuxtjs.org/api/configuration/nuxt.config

export default defineNuxtConfig({
  modules: [
      "@nuxtjs/tailwindcss",
      "@pinia/nuxt",
      // '@pinia-plugin-persistedstate/nuxt',
  ],


  css: ["~/assets/css/tailwind.css", "@mdi/font/css/materialdesignicons.min.css"],
  sourcemap: {
    server: true,
    client: true,
  },

  app: {
    head: {
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1.0', 
      title: 'My App',
      meta: [
        { name: 'description', content: 'My amazing site.' }
      ],
      bodyAttrs: {
        class: 'white'
      },
    }
  },
  runtimeConfig: {
    public:{
      apiBase: 'http://listing.loc.api/api'
    }
  }
});
