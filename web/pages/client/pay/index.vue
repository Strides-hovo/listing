<template>

    <div class="py-4">
        <div class="flex items-center flex-wrap">
            <div class="block tablet:px-2 px-4 py-2 uppercase " v-for="tab in tabs" :key="tab.id" :class="borderStyle(tab.component == activeTab)">
                <button type="button" class=" border-cyan-700 border-2 focus:border-blue-700 tablet:w-24 md:w-36 lg:w-52
                rounded-lg  px-5 py-2.5 text-center dark:bg-white  dark:focus:ring-blue-800"
                :title="tab.label" @click="toggleTab(tab.id)">
                    <img :src="tab.icon" :alt="tab.label">
                </button>
            </div>
        </div>
        <component :is="activeTab" class="p-4" />
    </div>

</template>

<script setup lang="ts">

import { shallowRef } from 'vue'

definePageMeta({
    layout: 'client'
})



const ClientBaseTelsel = resolveComponent('ClientBaseTelsel')
const ClientBaseIdram = resolveComponent('ClientBaseIdram')
const ClientBaseVisa = resolveComponent('ClientBaseVisa')

let activeTab = shallowRef(ClientBaseTelsel)

const tabs = [
    { label: 'Telsell', component: ClientBaseTelsel, id: 1, icon: '/img/icons/telsell.webp' },
    { label: 'Idram', component: ClientBaseIdram, id: 2, icon: '/img/icons/idram.webp' },
    { label: 'Card', component: ClientBaseVisa, id: 3, icon: '/img/icons/visa.webp' },
]

const toggleTab = (id: number) => {
    const index = tabs.findIndex(item => item.id === id)
    activeTab.value = tabs[index].component
}

const borderStyle = (show: boolean) => {
    return show ? 'border-b-2 border-cyan-700' : 'border-transparent'
}

</script>

