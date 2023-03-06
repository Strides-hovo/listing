<template>
  <Head >
    <Title >Posts </Title>
  </Head>
    <div class="py-4">
        <div >
            <h4 class="text-gray-700 dark-text-200">Այս պահին Դուք չունեք գործող հայտարարություններ:</h4>
            <button
                @click="$router.push('/client/post/create')"
                class="mt-5 drop-shadow-md button-color px-6 py-2 rounded-md ">
                Տեղադրել հայտարարություն</button>
        </div>
    </div>
</template>

<script setup lang="ts">

definePageMeta({
    layout: 'client'
})

</script>

