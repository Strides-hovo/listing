

import { defineStore } from 'pinia'

type Step = {
    tab_sleep: number,
    tabs: { step: number, title: string }[]
}

export const useTabsStepStore  = defineStore('tab_sleep',{
    state : () :Step => ({
        tab_sleep: 1,
        tabs: [
            {step: 1, title: 'Բաժին'},
            {step: 2, title: 'Հայտարարություն'},
            {step: 3, title: 'Դիտում'},
            {step: 4, title: 'Տեղադրել'},
        ]
    }),
    actions:{
        setSleep: function (sleep: number)  {
            this.tab_sleep = sleep
        }
    }
})