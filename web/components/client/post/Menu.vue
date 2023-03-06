<template>

        <div class="flex s:justify-center md:justify-between items-center flex-wrap ">
            <h5 class="s:my-6 md:my-0">Ընտրել հայտարարության բաժինը</h5>
            <ul class="s:w-full md:w-auto flex items-center justify-between">
                <li
                    class="cursor-pointer flex items-center s:flex-col ml-3"

                    v-for="tab in tabs"
                    :key="tab.step"
                    @click="setTab(tab.step)"
                >
                  <span class="border-2 border-gray-300 rounded-full px-3 py-2 text-xs from-neutral-700 hover:bg-cyan-700 hover:text-white"
                        :class="{'bg-cyan-700 text-white' : tab_sleep === tab.step}"
                  >{{tab.step}}</span>
                  <span  class="text-sm">{{tab.title}}</span>

                </li>

            </ul>
        </div>

</template>

<script setup lang="ts">

  import {storeToRefs} from "pinia";
  import { useTabsStepStore } from '~/stores/client/tabs'
  const tabStore = useTabsStepStore()
  const { tab_sleep } = storeToRefs(tabStore)
  const { tabs } = storeToRefs(tabStore)

  const setTab = (sleep: number | string ) => {
      if (sleep < tab_sleep.value){
        tabStore.setSleep(Number(sleep))
      }
  }




</script>

