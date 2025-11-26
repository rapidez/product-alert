<script>
import { alerts } from '../stores/useAlerts'

export default {
    render() {
        return this?.$slots?.default?.(this) ?? null
    },

    computed:{
        alerts() {
            return alerts.value
        }
    }
}
</script>
