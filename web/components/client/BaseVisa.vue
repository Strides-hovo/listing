<template>
    <div>
        <h3 class="font-bold text-center tablet:text-md md:text-lg lg:text-xl content-color">Վճարում Visa/MasterCard քարտի միջոցով</h3>
        <form class="flex items-center mt-7 border-b-2 border-dotted border-b-gray-200 pb-6" @submit.prevent="submit">
            <input type="text" pattern="\d*" class="border-2 p-1 border-gray-300 rounded-md w-28 px-2 focus:outline-none invalid:border-red-500 valid:border-green-500 drop-shadow-sm" required>
            <span class="mx-2 ">Դ</span>
          <button class="drop-shadow-md  button-color px-6 py-2 rounded-md ">Վճարել</button>
        </form>
        <div class="flex flex-wrap tablet:items-start lg:items-center border-b-2 border-dotted border-b-gray-200 py-6">

         
            <div class="lg:ml-auto tablet:mt-6 content-color ">
               <h5 class="text-lg">Դրամապանակում</h5> 
               <p class="text-2xl font-bold my-3">300 ֏</p>
               <p>Դրամապանակի համարը 043024</p> 
            </div>
        </div>
        
    </div>
</template>

<script setup lang="ts">
 
    const submit = () => {

    }

</script>
