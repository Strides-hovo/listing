<template>
  <div class="flex flex-col ">
      <h4 class="text-xl font-bold">Հայտարարության տեսակը</h4>
    <div class="flex items-center ml-4 my-4">
      <div class="flex items-center mr-4" v-for="(announcement, i) in announcements" :key="i">
        <input
            :id="announcement.value"
            :checked="i === 0"
            @change="$.emit('statement', $event.target.value)"
            type="radio"
            :value="announcement.value"
            name="announcement"
            class="hidden peer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600">
        <label :for="announcement.value" class="ml-2 pb-2 text-sm font-medium content-color peer-checked:text-blue-600 peer-checked:border-blue-600 border-transparent border-b-2 cursor-pointer ease-in duration-300">{{ announcement.title }}</label>
      </div>
    </div>

  </div>
</template>

<script setup lang="ts">

import {ref} from "vue";

defineProps<{
  announcements: [],

}>()

</script>

<style scoped>

</style>