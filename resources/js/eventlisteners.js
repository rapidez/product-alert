import { useLocalStorage } from '@vueuse/core'

document.addEventListener('turbo:load', () => {
    window.app.$on('logged-in', getAlerts);
    window.app.$on('alerts-updated', getAlerts);
    window.app.$on('logout', () => useLocalStorage('alerts', []).value = null);


    async function getAlerts() {
        useLocalStorage('alerts', []).value = await window.rapidezAPI(
            'post',
            'product-alerts'
        )
    }
});
