

import { defineStore } from 'pinia'
const apiBase = process.env && process.env.API_BASE_URL ? process.env.API_BASE_URL : useRuntimeConfig().public.apiBase



interface ICity {
    id: number
    name: string,
    region_id: number
}
interface IRegion {
    id: number,
    name: string,
    cities: ICity[]
}

type State = {
    regions: IRegion[],
    city: string
}

export const useRegionStore  = defineStore('regions',{
    state: () :State => ({
        regions: [],
        city: ''
    }),
    actions: {
        async set() {
            if (!this.regions.length){
                this.regions = await $fetch(`${apiBase}/regions`)
            }
        }
    }
})

