import { useLocalStorage } from '@vueuse/core'

export const alerts = useLocalStorage('alerts', [])

export const refresh = async function() {
    try {
        alerts.value = await window.rapidezAPI(
            'post',
            'product-alerts'
        )
    } catch (error) {
        console.error(error)
    }
}

export const clear = async function() {
    alerts.value = null
}