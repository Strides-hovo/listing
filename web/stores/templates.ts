

import {defineStore, acceptHMRUpdate  } from "pinia";
import {useLocalStorage} from '@vueuse/core'
import {  ITemplates } from '~~/interfaces/post';
const apiBase =
    process.env && process.env.API_BASE_URL
    ? process.env.API_BASE_URL
    : useRuntimeConfig().public.apiBase
    //http://listing.loc.api/api


// export interface IPostGroupTemplate {
//     fid: string,
//     name: string
// }
//
// export interface IPostTemplateGroup {
//     name: string,
//     templates3: Array<string>,
//     templates: [IPostGroupTemplate]
// }
//
// export interface IPostTemplate {
//     id: Number,
//     name: string,
//     parent_id: Number,
//     group: IPostTemplateGroup[]
// }
//
// export interface IPostTemplates {
//     templates: IPostTemplate[] | undefined[]
// }
interface State {
    templates: ITemplates[]
    template: string | ''
}

export const useTemplates = defineStore('temp', {
    state: (): State => ({
        templates: [],
        template: ''
    }),
    getters: {
        getByParentId: (state) => (parent_id: Number = 0) :ITemplates[] => {
            return state.templates.filter(item => item.parent_id === parent_id)
        },
        getTemplate: (state) => (fid: string) => {
            return state.templates.find((template) => {
                if (template.group){
                    return template.group.find((gr) => {
                        if (gr.templates){
                            return gr.templates.find(tmp => tmp.fid == fid)
                        }
                    })
                }
            })
        },
        getTemp: (state: State) => () => {
            return state.template
        }
    },
    actions:{
        async set(){
            if ( !this.templates.length){
                this.templates = await $fetch(`${apiBase}/post-templates`)
            }
        },
        setTemplate: function (fid: string) {
            this.templates.forEach((template) => {
                if (template.group){
                    template.group.forEach((gr) => {
                        if (gr.templates){
                            gr.templates.forEach(tmp => {
                                if (tmp.fid == fid){
                                    this.template = fid
                                }
                            })
                        }
                    })
                }
            })
        },
    }
})

// export const useTemplatesStore = defineStore( {
//     id: 'templates',
//     state: () => ({
//         templates:  [] ,
//         template: <string> ''
//     }),
//     getters : {
//         byParentId:(state: IPostTemplates) => (parent_id: Number = 0) :IPostTemplates => {
//             // @ts-ignore
//             return state.templates.filter((item: IPostTemplate) => item.parent_id === parent_id)
//         },
//         getTemplate: (state: IPostTemplates) => (fid: string) => {
//             //@ts-ignore
//             return state.templates.find((template : IPostTemplate) => {
//                 if (template.group){
//                     return template.group.find((gr: IPostTemplateGroup) => {
//                         if (gr.templates){
//                             return gr.templates.find(tmp => tmp.fid == fid)
//                         }
//                     })
//                 }
//             })
//         }
//     },
//     actions: {
//         async set(){
//             if ( !this.templates.length){
//                 this.templates = await $fetch(`${apiBase}/post-templates`)
//             }
//         },
//         setTemplate: function (fid: string) {
//             this.templates.forEach((template : IPostTemplate) => {
//                 if (template.group){
//                     template.group.forEach((gr: IPostTemplateGroup) => {
//                         if (gr.templates){
//                             gr.templates.forEach(tmp => {
//                                 if (tmp.fid == fid){
//                                     this.template = fid
//                                 }
//                             })
//                         }
//                     })
//                 }
//             })
//         },
//
//     },
//
// })

// if (import.meta.hot) {
//     import.meta.hot.accept(acceptHMRUpdate(useTemplatesStore, import.meta.hot))
// }


