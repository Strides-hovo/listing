

export const  getProducts = async() => {
    const { data:products , refresh, pending } = await useAsyncData('https://dummyjson.com/products', ()=> $fetch('https://dummyjson.com/products') )
   return {products:products.value.products, pending}
}



export const getProduct = async (name) => {
    const product = await $fetch('https://dummyjson.com/products/search?q='+ name)
    return product
}



export const searchPr = () => {

}