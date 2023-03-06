<template>
  <Head >
    <Title >Setting </Title>
  </Head>

    
    <form class="py-4">
        <div class="grid md:grid-cols-1 lg:grid-cols-4 md:gap-6 ">
            <div class="relative z-0 mb-6 w-full group">
                <input type="email" name="email" id="email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    required placeholder=" ">
                <label for="email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Email</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="name" id="name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    required placeholder=" ">
                <label for="name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Name</label>
            </div>

            <div class="relative z-0 mb-6 w-full group">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select
                    your country</label>
                <select id="countries"
                    class="bg-color text-color border border-gray-300 text-sm rounded-t-lg focus:outline-none  focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Germany</option>
                </select>
            </div>
            <div class="relative z-0 mb-6 w-full group flex items-center">
                <input type="file" name="avatar" id="avatar" class="hidden">
                <span class="dark:text-gray-400">Avatar</span>
                <label for="avatar" class="ml-3 text-sm text-gray-500  scale-75 top-3 -z-10  ">
                    <img src="/img/avatar.jpg" alt=""
                        class="w-16 h-16 rounded-full p-2.5 bg-transparent border-2 border-gray-100" />
                </label>

                <button type="button" class="ml-3">
                    <span class="mdi mdi-trash-can-outline text-2xl text-red-700 dark:text-gray-400"></span>
                </button>
            </div>


        </div>
        <div class="grid md:grid-cols-1 lg:grid-cols-4 md:gap-6 ">
            <div class="relative z-0 mb-6 w-full group">
                <input type="tel" name="phone" id="phone"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    required placeholder=" ">
                <label for="phone"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                    number</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="skype" id="skype"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    required placeholder=" ">
                <label for="skype"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                    Skype</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="whatsapp" id="whatsapp"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    required placeholder=" ">
                <label for="whatsapp"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                    Whatsapp</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="tel" name="telegramm" id="telegramm"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    required placeholder=" " >
                <label for="telegramm"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                    Telegramm</label>
                <span class="absolute top-0 right-0 text-sm text-gray-500 dark:text-gray-400 cursor-pointer"
                    v-if="false">Delete</span>
            </div>
        </div>

        <button type="submit"
            class="button-color hover:bg-blue-800  focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center
              dark:hover:bg-blue-700 ">
             Submit</button>
    </form>

</template>

<script setup lang="ts">


    definePageMeta({
        layout: 'client'
    })




</script>

