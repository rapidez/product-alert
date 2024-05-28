@props(['product_id'])
@slots(['subscribe', 'login'])

<check-alerts v-slot="checkAlerts" v-if="user?.email">
    <graphql-mutation
            v-cloak
            query="@include('rapidez-product-alert::graphql.product-alert-subscribe')"
            :variables='{product_id: {{ $product_id }}, email: user.email}'
            :callback="() => { window.app.$emit('alerts-updated') }"
            :notify="{message: !checkAlerts.alerts?.includes({{ $product_id }}) ? '@lang('We will let you know once this product is back in stock')' : '@lang('You have succesfully unsubscribed from this product')', type: 'success'}"
    >
        <div slot-scope="{ mutate }">
            @if($subscribe->isNotEmpty())
                {{ $subscribe }}
            @else
                @include('rapidez-product-alert::partials.subscribe')
            @endif
        </div>
    </graphql-mutation>
</check-alerts>
<div v-else>
    @if($login->isNotEmpty())
        {{ $login }}
    @else
        @include('rapidez-product-alert::partials.login')
    @endif
</div>
