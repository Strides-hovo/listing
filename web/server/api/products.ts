const products = [
    {id: 1, name: 'Product palpi 1', cost: 120, count: 12},
    {id: 2, name: 'Product 2', cost: 200, count: 4},
    {id: 3, name: 'Product 3', cost: 160, count: 52},
    {id: 4, name: 'Product 4', cost: 800, count: 1},
]

// export default (req, res) => {
//     res.end('Legacy handler')
//   }

export default defineEventHandler( (req:any) => {
  
    return products
})