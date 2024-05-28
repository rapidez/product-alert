<script>
import { alerts } from '../stores/useAlerts'

export default {
    render() {
        return this.$scopedSlots.default(this)
    },

    data: () => ({
        alerts: alerts.value
    })
}
</script>