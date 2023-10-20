document.addEventListener('turbo:load', () => {
    window.app.$on('logged-in', getAlerts);
    window.app.$on('alerts-updated', getAlerts);
    window.app.$on('logout', () => localStorage.removeItem('alerts'));

    async function getAlerts() {
        if (!localStorage.token) {
            return;
        }

        await window.axios.post(window.url('/api/product-alerts'), {}, { headers: { Authorization: window.magentoUser.defaults.headers.common['Authorization'] }}).then((res) => localStorage.alerts = res.data)
    }
});
