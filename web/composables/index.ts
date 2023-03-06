import { IPost,IPostTemplates } from '~~/interfaces/post';

export const useCounter = () => useState<number>('counter', () => 0)

export const usePosts = () => useState<[IPostTemplates]>('postTemplates')

export const useIsOpenMenu = () => useState<Boolean>('isOpenMenu', () => true)

export const useWindowWidth = () => useState<Object>('windowWith')

