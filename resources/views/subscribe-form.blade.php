<graphql-mutation v-if="user?.email" v-cloak query="@include('rapidez-product-alert::graphql.product-alert-subscribe')" :variables='{product_id: {{ $product_id }}, email: user.email}' :callback="() => {
    window.app.$emit('alerts-updated')
}" :notify="{message: '@lang('We will let you know once this product is back in stock')', type: 'success'}">
    <div slot-scope="{ mutate }">
        @include('rapidez-product-alert::partials.alert-subscribe')
    </div>
</graphql-mutation>
<div v-else class="inline-block">
    @include('rapidez-product-alert::partials.alert-login')
</div>
