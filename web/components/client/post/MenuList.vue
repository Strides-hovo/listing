<template>

    <div class="flex s:flex-col md:flex-row">
      <div class="first" v-if="templates">
        <div v-for="category in templates" :key="category.id" >
          <span class="cursor-pointer" @click="getNext(category.id)"> {{ category.name }}</span>
          <span class="mdi mdi-chevron-right w-4 h-4 ml-1"></span>
        </div>
      </div>

      <div class="second ml-10 border-l-2 border-dotted pl-4" v-if="next.length">
        <div v-for="n in next" class="flex items-center mb-3">
          <span class="cursor-pointer text-sm" @click="getLast(n.id)"> {{ n.name }}</span>
          <span class="mdi mdi-chevron-right w-4 h-4 ml-1"></span>
        </div>
      </div>
      <div class="last ml-10 border-l-2 border-dotted pl-4" v-if="last.length">
        <div v-for="n in last">

          <div>
            <div v-for="group in n.group" class=" grouping flex flex-col mt-3">
              <div class="font-bold">{{ group.name }}</div>
              <div class="mt-4">
                <div v-for="template in group.templates" class="ml-4">
                  <div class="text-sm cursor-pointer" @click="setTemplate(template.fid )">{{ template.name}}</div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>

</template>

<script  setup lang="ts">

import {onMounted} from "vue";

import {templatesStore, templates, next,last, setTemplate } from '~/hooks/posts'


onMounted(async() => {
  templates.value = templatesStore.getByParentId()
  if ( !templates.value.length ){
    await templatesStore.set()
    templates.value = templatesStore.getByParentId()
  }
})





const getNext =  (parent_id: Number) => {
  next.value =  templatesStore.getByParentId(Number(parent_id) );
}

const getLast = (parent_id: Number) => {
  last.value = templatesStore.getByParentId(Number(parent_id) );
}

</script>

<style >
.grouping:first-child{
  margin-top: 0;
}
</style>









