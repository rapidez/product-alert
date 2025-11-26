import { defineAsyncComponent } from 'vue'

document.addEventListener('vue:loaded', function (event) {
    const vue = event.detail.vue
    vue.component('check-alerts', defineAsyncComponent(() => import('./components/CheckAlerts.vue')))
})