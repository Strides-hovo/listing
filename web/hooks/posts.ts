
import {storeToRefs} from "pinia";
import {useTemplates} from "~/stores/templates";
import {ref, Ref, UnwrapRef} from "vue";
import {ITemplates} from "~/interfaces/post";
import {useTabsStepStore} from "~/stores/client/tabs";


export const templatesStore =  useTemplates();
export const next: Ref<UnwrapRef<ITemplates[]>> = ref([])
export const last: Ref<UnwrapRef<ITemplates[]>> = ref([])
export const templates: Ref<UnwrapRef<ITemplates[]>> = ref([])
export const {template} = storeToRefs(templatesStore)



export const tabs = useTabsStepStore()
export const { tab_sleep } = storeToRefs(tabs)


export const setTemplate = (fid: string) => {
    templatesStore.setTemplate(fid)
    tabs.setSleep(2)
}



