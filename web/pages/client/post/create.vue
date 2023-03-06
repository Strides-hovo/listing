<template>
  <Head >
    <Title >Create </Title>
  </Head>
      <div class="head ">
          <ClientPostMenu  />
      </div>
      <div class="content drop-shadow-md  mt-12 content-color py-6 ">

          <ClientPostMenuList v-if="tab_sleep === 1 " />
          <component :is="activeFields" v-else />

    </div>

</template>

<script setup lang="ts">
import {ConcreteComponent, shallowRef, ref, resolveComponent, watch} from 'vue'

import { template, tabs, tab_sleep } from '~/hooks/posts'

definePageMeta({layout: 'client'})

const activeFields = shallowRef()
const templates :ConcreteComponent = {
  ClientTemplates5818l3ad1c0ce: resolveComponent('ClientTemplates5818l3ad1c0ce'),
  ClientTemplates5819f3ad1c0ce: resolveComponent('ClientTemplates5819f3ad1c0ce')
}



watch(template, (newFid, oldFid) => {
  const tmp = newFid ?? oldFid
  activeFields.value = templates[`ClientTemplates${tmp}`]
  tabs.setSleep(2)

})

console.log(tab_sleep)









</script>

