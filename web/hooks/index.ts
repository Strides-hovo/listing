
import { useWindowSize } from '@vueuse/core'

export const toggleMenu = () => {
    const m_enu = useState('isOpenMenu', () => false)
    m_enu.value = !m_enu.value
}

const menuButton = () => {
    return useState('isOpenMenu', () => true)
}


export const closeMenu = () => {
    menuButton().value = false
}

export const openMenu = () => {
    menuButton().value = true
}



export const getWindowWith = () =>   {
    let windowWith = useState('windowWith',() => 0)
    const {width} = useWindowSize()
    windowWith = width
    return windowWith
}

