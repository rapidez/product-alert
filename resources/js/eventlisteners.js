document.addEventListener('turbo:load', () => {
    window.app.$on('logged-in', getAlerts);
    window.app.$on('alerts-updated', getAlerts);
    window.app.$on('logout', () => localStorage.removeItem('alerts'));

    async function getAlerts() {
        if (!localStorage.token) {
            return;
        }

        window.axios.defaults.headers.common['Authorization'] = `Bearer ${localStorage.token}`;
        await window.axios.post(window.url('/api/product-alerts')).then((res) => localStorage.alerts = res.data)
    }
});
