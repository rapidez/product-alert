import { clear, refresh } from './stores/useAlerts'

document.addEventListener('vue:loaded', () => {
    window.app.$on('logged-in', refresh);
    window.app.$on('alerts-updated', refresh);
    window.app.$on('logout', clear);
});
