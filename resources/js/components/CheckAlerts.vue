<script>
import { alerts } from '../stores/useAlerts'

export default {
    render() {
        return this.$scopedSlots.default(this)
    },

    computed:{
        alerts: () => {
            return alerts.value
        }
    }
}
</script>
