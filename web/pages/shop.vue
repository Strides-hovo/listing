<template>
    <Head>
      <Title> Shp </Title>
      <Meta name="description" content="shop title" />
    </Head>

    <div class="w-full container mx-auto mt-4">
    <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select your country</label>
        <select id="tabs"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Profile</option>
            <option>Canada</option>
            <option>France</option>
            <option>Germany</option>
        </select>
    </div>
    <ul
        class="hidden text-sm font-medium text-center text-gray-500 rounded-lg divide-x divide-gray-200 shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
        <li class="w-full">
            <a href="#"
                @click.prevent="tab = 'CategoryAll'"
                
                class="inline-block p-4 w-full text-gray-900 hover:text-white hover:bg-slate-700 rounded-l-lg "
                :class="{'bg-green-600 text-blue-900': tab === 'CategoryAll'}"
                >All Categories</a>
        </li>
        <li class="w-full">
            <a href="#"
                @click.prevent="tab ='CategoryCreate'"
                class="inline-block p-4 w-full text-gray-900 hover:text-white hover:bg-slate-700"
                :class="{'bg-green-600 text-blue-900': tab === 'CategoryCreate'}"
                >Create new Category</a>
        </li>
        <li class="w-full">
            <a href="#"
                @click="count++"
                class="inline-block p-4 w-full text-gray-900 hover:text-white hover:bg-slate-700 rounded-r-lg">Settings</a>
        </li>
       
    </ul>
  
    <div class="mt-5 dark">
        <component :is="tab === 'CategoryAll' ? CategoryAll : CategoryCreate" />
    </div>
    

</div>
</template>

<script setup lang="ts">

import {ref, computed, reactive, resolveComponent} from 'vue'

definePageMeta({
    layout: 'admin',
})



const tabs = reactive(
        ['Category','product-all']
)
let count =  ref(0)
let tab = ref('CategoryAll')

const CategoryAll = resolveComponent('CategoryAll')
const CategoryCreate = resolveComponent('CategoryCreate')



</script>

