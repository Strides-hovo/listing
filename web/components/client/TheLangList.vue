<template>
    <div v-if="react.isOpenLang"
        class="z-50 my-4 text-base list-none bg-color rounded divide-y divide-gray-100 shadow  absolute top-12 tablet:right-16 md:right-0">
        <ul class="py-1" role="none">
            <li>
                <a href="#"
                    class="block py-2 px-4 text-sm text-color hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                    role="menuitem">
                    <div class="inline-flex items-center">
                        <img src="/img/icons/en.png" alt="" class="h-3.5 w-3.5 rounded-full mr-2">
                        English
                    </div>
                </a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 px-4 text-sm text-color hover:bg-gray-100  dark:hover:bg-gray-600 dark:hover:text-white"
                    role="menuitem">
                    <div class="inline-flex items-center">
                        <img src="/img/icons/ru.jpg" alt="" class="h-3.5 w-3.5 rounded-full mr-2">
                        Русскии
                    </div>
                </a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 px-4 text-sm text-color hover:bg-gray-100  dark:hover:bg-gray-600 dark:hover:text-white"
                    role="menuitem">
                    <div class="inline-flex items-center">
                        <img src="/img/icons/arm.png" alt="" class="h-3.5 w-3.5 rounded-full mr-2">
                        Հայերեն
                    </div>
                </a>
            </li>

        </ul>
    </div>
</template>

<script setup lang="ts">
    defineProps({
        react: {
            type: Object,
            required: true
        }
    })
</script>

<style scoped>

</style>