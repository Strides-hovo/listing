<template>
    <div>
        
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <div class="flex flex-col mt-3 sm:flex-row">
     
        <div class="relative block mt-2 sm:mt-0">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
            <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-500 fill-current">
                <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"></path></svg>
            </span>
            <input placeholder="Search" class="block w-full py-2 pl-8 pr-6 text-sm text-gray-700 placeholder-gray-400 bg-white border border-b
                border-gray-400 rounded-l rounded-r appearance-none sm:rounded-l-none focus:bg-white focus:placeholder-gray-600
                focus:text-gray-700 focus:outline-none" v-model="productName">
        </div>
        <div class="relative block mt-2 ml-2 sm:mt-0 text-center" v-if="react.searchCount"> Result search {{ react.searchCount }} </div>
    </div>
    
    <!-- <div v-if="pending">
        <span class="mdi mdi-dots-circle mdi-spin text-4xl"></span>
    </div> -->
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400"  >
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6 w-1/4">
                    <div class="flex items-center justify-center">
                        Name
                        <span class="cursor-pointer mdi mdi-menu-swap text-lg"  @click="toggleSorting('title')"></span>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6 w-1/4">
                    <div class="flex items-center justify-center">
                        Image
                    </div>
                </th>
                <th scope="col" class="py-3 px-6 w-1/4">
                    <div class="flex items-center justify-center">
                        Count
                        <span class="cursor-pointer mdi mdi-menu-swap text-lg"  @click="toggleSorting('rating')"></span>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6 w-1/4">
                    <div class="flex items-center justify-center">
                        Brand
                        <span class="cursor-pointer mdi mdi-menu-swap text-lg"  @click="toggleSorting('brand')"></span>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6 w-1/4">
                    <div class="flex items-center justify-center">
                        Category
                        <span class="cursor-pointer mdi mdi-menu-swap text-lg"  @click="toggleSorting('category')"></span>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6 w-1/4">
                    <div class="flex items-center justify-center">
                        Actions
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
           
            <tr class="border border-gray-100" 
            v-for="product in custs"
            :key="product.id"
             >
                <th scope="col" class="py-3 px-6  w-1/4 text-center">
                    {{ product.title }}
                </th>
                <td scope="col" class="py-3 px-6 w-1/4 text-center">
                    <img :src="product.thumbnail" class="w-10 h-10 rounded-full inline-block" alt="user1">
                </td>
                <td scope="col" class="py-3 px-6 w-1/4 text-center">
                    <p class="text-lg text-secondary font-bold mb-0">{{product.rating}}</p>
                </td>
                <td scope="col" class="py-3 px-6 w-1/4 text-center">
                    <p class="text-lg text-secondary font-bold mb-0">{{product.brand}}</p>
                </td>
                <td scope="col" class="py-3 px-6 w-1/4 text-center">
                    <p class="text-lg text-secondary font-bold mb-0">{{product.category}}</p>
                </td>
                <td scope="col" class="py-3 px-6 w-1/4 text-center">
                    <div class="flex justify-around">
                        <span class="flex justify-center text-2xl">
                            <a href="#" class="mx-2 px-2 rounded-md">
                                <span class="mdi mdi-circle-edit-outline"></span>
                            </a>
                            <form method="POST">
                                <button class="mx-2 px-2 rounded-md"><span class="mdi mdi-trash-can-outline text-red-900 "></span></button>
                            </form>
                        </span>
                    </div>
                </td>
            </tr>
            
        </tbody>
    </table>
    
</div>

    </div>
</template>

<script setup >

    import {getProducts,getProduct} from "~/hooks/products"
    import {ref, watch, reactive } from 'vue'

    const productName = ref('')
    let orderBy = ref('asc')
    let react = reactive({
        searchCount: 0
    })

     
    const {products:productsData} = await getProducts()
    const products = ref(productsData ) 

    // console.log(products);
    const custs =  ref([...products.value])
    
    
    function toggleSorting( sorting ){
        orderBy = orderBy === 'asc' ? 'desc' : 'asc'
        custs.value = custs.value.sort((a, b) => {
            return !isNaN(a[sorting])
            ? ( orderBy === 'asc' ? a[sorting] - b[sorting]: b[sorting] - a[sorting] ) 
            : ( orderBy === 'asc' ? a[sorting].localeCompare(b[sorting]) : b[sorting].localeCompare(a[sorting]) )
        })
    }
   

    watch(productName, (name) => {
        if(name){
            custs.value = products.value.filter(item => item.title.toLowerCase().includes(name))
            react.searchCount = custs.value.length
        }
        else {
            custs.value = products.value
            react.searchCount = 0
        }
    })

    
</script>

