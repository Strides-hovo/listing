<template>
    <SlideUp>
        <div v-if="isOpenMenu" class=" justify-between items-center w-full md:flex md:order-1 ml-auto">
            <ul class="flex flex-col w-full  py-4 rounded-b-lg border-bottom border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0
                text-color bg-color ">
                <li v-for="list in lists" :key="list.id"
                    class=" drop-shadow-lg  py-2 transition duration-300 ease-in "
                    :class="borderStyle(list.to)">
                    <NuxtLink :to="list.to"
                          class="block py-2 pr-4 pl-3 text-color rounded hover:bg-gray-100
                                md:hover:bg-transparent md:hover:text-blue-700 md:p-0 uppercase ">
                          {{ list.label }}
                    </NuxtLink>
                </li>
            </ul>
        </div>
  </SlideUp>
</template>

<script setup lang="ts">
    import {  getWindowWith, openMenu, closeMenu } from '~~/hooks'
    const isOpenMenu = useIsOpenMenu()
    const width = getWindowWith()
    let activeClass = ref('');
    const router = useRoute()

    const lists = [
        {label: 'setting', to: '/client/setting',id: 1},
        {label: 'posts', to: '/client/post', id: 2},
        {label: 'pay', to: '/client/pay', id: 3},
    ]

    const borderStyle = (path: string) => {
        return path === router.fullPath ? 'border-b-2 border-emerald-500' : 'border-transparent'
    }

    onMounted(() => {activeClass.value = 'absalute'})


    watch(width, (new_value) => {
        new_value > 767 ? openMenu() : closeMenu()
    })

</script>
