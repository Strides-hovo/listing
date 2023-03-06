<template>
    <div class="w-min bg-slate-700 text-white rounded-r-md min-h-screen ">
        <ul class="flex flex-col py-6 pr-12 pl-4">
            <li class=""
            v-for="link in sidebar_links"
            :key="link.to"
             >
             <NuxtLink :to="link.to" class="flex items-center py-2 hover:text-green-400">
                <span :class="link.class" class="text-2xl mr-2"></span>
                {{ link.label }}
             </NuxtLink>
            </li>
        </ul>
    </div>
</template>

<script setup lang="ts">
    import sidebar_links from '~~/assets/sidebar';


</script>

<style scoped>

</style>