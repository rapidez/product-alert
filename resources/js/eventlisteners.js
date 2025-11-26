import { clear, refresh } from './stores/useAlerts'

document.addEventListener('vue:loaded', () => {
    window.$on('logged-in', refresh);
    window.$on('alerts-updated', refresh);
    window.$on('logout', clear);
});
