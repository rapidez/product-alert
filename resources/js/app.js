document.addEventListener('turbolinks:load', () => {
    window.app.$on('logged-in', async () => {
        window.axios.defaults.headers.common['Authorization'] = `Bearer ${localStorage.token}`;
        await window.axios.post('/api/alerts').then((res) => localStorage.alerts = res.data)
    });
});
