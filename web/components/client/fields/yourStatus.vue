<template>
  <div class="flex flex-col ">
    <h4 class="text-xl font-bold">Ձեր կարգավիճակը</h4>
    <div class="flex flex-col ml-4 my-4">
      <div class="mr-4 my-2" v-for="(status, i) in statuses" :key="i">
        <input
            :id="`status_${status.value}`"
            :checked="i === 0"
            @change="$.emit('status', $event.target.value)"
            type="radio"
            :value="status.value"
            name="your-status"
            class="hidden peer">
        <label
            :for="`status_${status.value}`"
            class="ml-2 pb-2 text-sm font-medium content-color peer-checked:text-blue-600 peer-checked:border-blue-600 border-transparent border-b-2 cursor-pointer ease-in duration-300">
          {{ status.title }}
        </label>
        <div class="text-sm ml-2 my-3">{{ status.placeholder }}</div>

      </div>
    </div>

  </div>
</template>

<script setup lang="ts">
    const statuses = [
      {title: 'Սեփականատեր', placeholder: 'Եթե դուք վաճառում եք ձեր սեփական անշարժ գույքը` սեփականատեր', value: 1 },
      {title: 'Գործակալություն', placeholder: 'Եթե դուք միջնորդ եք, բրոքեր կամ անշարժ գույքի գործակալության ներկայացուցիչ', value: 2 },
    ]
</script>

