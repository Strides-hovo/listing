<template>
  <div class="flex flex-col space-y-2">
    <h4 class="text-xl font-bold">Գտնվելու վայրը</h4>
    <div class="ml-4 my-4">
      <button type="button"
              @click="toggleMenu"
              class="w-52 button-color focus:outline-none font-medium rounded-t-lg border text-sm px-4 py-2.5 text-center inline-flex items-center " >
              Տարածաշրջան
        <span class="ml-2 mdi mdi-arrow-down-drop-circle-outline text-xl"></span>
      </button>
      <!-- Dropdown menu -->
      <div v-show="menu && regions.length"  class="w-52  bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200 max-h-[22rem] overflow-y-scroll" >
          <li v-for="region in regions" :key="region.name"
          >
            <button
                    type="button"
                    v-if="region.cities.length"
                    ref="reg_items"
                    @click="toggleSubMenu($event.target, region.id)"
                    class="drop drop-close ease-in duration-300 flex justify-between items-center py-2 px-4 w-full ">
                    <span>{{ region.name }}</span>
            </button>
              <span v-else class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
              {{ region.name }}
            </span>
            <div v-if="region.id === regionId" class="flex justify-between items-center pl-4 w-full ease-in duration-300 z-10 w-44 bg-white rounded divide-y divide-gray-100  dark:bg-gray-700">

                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" >
                  <li v-for="city in region.cities" :key="city.name"
                      class="cursor-pointer py-1 pl-2 hover:text-blue-600 dark:hover:text-white mdi flex"
                      :class="{'mdi-check text-cyan-700': city.status}"
                      @click="setCity(city.name)"
                  >
                    <span class=" block "
                    >{{ city.name }} </span>
                  </li>
                </ul>

            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">

import {reactive, ref, onMounted} from "vue";
import {storeToRefs} from "pinia";
import { useRegionStore } from '~/stores/client/region'
const useRegion = useRegionStore()
const { regions } = storeToRefs(useRegion)
const reg_items = ref([])
const menu = ref(false)
const regionId = ref(0)
const emit = defineEmits(['getCity'])

onMounted(async () => {
   if (!regions.value.length){
     await useRegion.set()
     regions.value = useRegion.regions
   }
 })


const toggleMenu = () => {
    menu.value = !menu.value
}

const toggleSubMenu = (element: HTMLElement, region_id: number) => {
  regionId.value = region_id
  const elem = element.closest('.drop')
  const open = elem?.classList.contains('drop-open')

  reg_items.value.map((el: HTMLElement) => {
      if( el === elem ){
        if (open){
            el.classList.replace('drop-open', 'drop-close')
            regionId.value = 0
        }
        else{
          el.classList.replace('drop-close', 'drop-open')
        }
      }
      else {
        el.classList.replace('drop-open', 'drop-close')
      }
    })

}

function setCity(name: string){
    emit('getCity', name)
  regions.value.map(region => {
    region.cities?.map(city => {

      city.status = city.name === name ? true : false
    })
  })
  console.log(regions)
}


</script>

<style>
  .drop:after{
    width: 5px;
    height: 5px;
    content: "";
    border-top: 1px solid #999;
    border-right: 1px solid #999;
    transition: all .2s;

  }
  .drop-close:after{
    transform: rotate(135deg);
  }
  .drop-open:after{
    transform: rotate(-45deg);
  }

</style>