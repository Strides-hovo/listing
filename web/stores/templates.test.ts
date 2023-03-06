//
// import {describe, test, expect, beforeAll, beforeEach,afterEach } from 'vitest'
// import { setActivePinia, createPinia } from 'pinia'
// import { useTemplatesStore } from './templates'
//
// // describe('run', () => {
// //     test('its work',() => {
// //         expect(true).toBe(true)
// //     })
// // })
// beforeAll( () => {
//     setActivePinia(createPinia())
// })
//
//
// describe('useTemplates', () => {
//     let store: ReturnType<typeof useTemplatesStore>
//
//     beforeEach(() => {
//         store = useTemplatesStore();
//     })
//
//     afterEach(() => {
//         store.$reset()
//     })
//
//     test('init', () => {
//         expect(store).toBeDefined()
//     })
//
//     test('initializes with empty templates', () => {
//         expect(store.templates).toStrictEqual([])
//     })
//
//     test('setAll', async () => {
//        await store.set()
//         expect(store.templates).length
//     })
//
// })