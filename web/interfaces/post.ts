
interface ITemplate {
    fid: string,
    name: string
}

interface ITemplateGroup {
    name: string,
    templates: ITemplate[]
}

export interface ITemplates {
    group: (ITemplateGroup[] | [])
    id: number
    name: string
    parent_id: number
}




