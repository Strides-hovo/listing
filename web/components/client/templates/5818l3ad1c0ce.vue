<template>
    <div class="container ">
      <ClientFieldsAnnouncementType :announcements="announcement" @statement="getStatement" />
      <ClientFieldsYourStatus @status="getYourStatus" />
      <ClientFieldsCity  @getCity="getCity" />
    </div>
</template>

<script setup lang="ts">

import {reactive, ref, } from "vue";
import {Ref, UnwrapRef} from "@vue/runtime-core";
// const statement: Ref<UnwrapRef<(null|number)>> = ref(null)
// const yourStatus: Ref<UnwrapRef<(null|string)>> = ref(null)
// const city: Ref<UnwrapRef<(null|string)>> = ref('')

  const announcement = [
    {title: 'Վաճառք', value: 1},
    {title: 'Փոխանակում', value: 2},
    {title: 'Փնտրում եմ', value: 3}
  ]
 const reactive1 = reactive({
    form: {
      statement: 0,
      yourStatus: '',
      city: '',
    }
  })

const getCity = (city_value: string) => {
  reactive1.form.city = city_value
}

const getStatement = ( val: string|number )=> {
  reactive1.form.statement = Number(val)
}
const getYourStatus = (val: string) => {
  reactive1.form.yourStatus = val
}

</script>

