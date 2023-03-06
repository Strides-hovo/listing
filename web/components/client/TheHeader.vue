<template>

  <nav
    class=" z-50 border-gray-200 border-b-2 sticky top-0 ">
    <div class="container flex flex-wrap justify-between items-center mx-auto ">
      <a href="#" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
      </a>
      <div class="flex items-center md:order-2 relative">
        <div class="flex items-center md:order-2">
          <div
            class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
            <img class="w-8 h-8 rounded-full" src="/img/avatar.jpg" alt="user photo">
          </div>
        </div>

        <button @click="toggleLang" type="button"
          class="inline-flex justify-center items-center p-2 text-sm text-gray-500 rounded cursor-pointer hover:text-gray-900">
          <img src="/img/icons/en.png" alt="" class="mr-2 w-7 h-7 rounded-full">
        </button>

        <ClientTheLangList :react="react" />

        <button @click="toggleMenu()" type="button"
          class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden focus:outline-none tablet:order-3">
          <span class="sr-only">Open main menu</span>
          <span class="mdi mdi-menu text-3xl text-gray-700 dark:text-gray-400"></span>
        </button>

        <button class="tablet:order-2 px-2 py-1 ml-2 rounded-full border-t-2 border-b-2 drop-shadow-md"
          @click="toggleTheme">
          <span class="mdi mdi-moon-waxing-crescent text-md dark:text-gray-200"></span>
        </button>
      </div>

    </div>
  </nav>

</template>

<script setup lang="ts">

import { reactive, computed } from 'vue'
import { toggleMenu } from '~~/hooks'


const react = reactive({
  isOpenLang: false,
  theme: 'white'
})

const theme = computed(() => {
  return react.theme
})

useHead({
  bodyAttrs: {
    class: theme
  },
})





const toggleLang = () => {
  react.isOpenLang = !react.isOpenLang
}

const toggleTheme = () => {
  react.theme = react.theme === 'dark' ? 'white' : 'dark'
}


</script>

