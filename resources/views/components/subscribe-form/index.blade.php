@props(['product_id'])
@slots(['subscribe', 'login'])

<graphql-mutation v-if="user?.email" v-cloak query="@include('rapidez-product-alert::graphql.product-alert-subscribe')" :variables='{product_id: {{ $product_id }}, email: user.email}' :callback="() => {
    window.app.$emit('alerts-updated')
}" :notify="{message: '@lang('We will let you know once this product is back in stock')', type: 'success'}">
    <div slot-scope="{ mutate }">
        @if($subscribe->isNotEmpty())
            {{ $subscribe }}
        @else
            <x-rapidez::button v-on:click="mutate" dusk="product-alert-subscribe" :attributes="$subscribe->attributes->class('flex items-center justify-center w-full')">
                <x-heroicon-o-bell class="h-5 w-5 mr-1"/>
                <span>@lang('Notify me')</span>
            </x-rapidez::button>        
        @endif
    </div>
</graphql-mutation>
<div v-else>
    @if($login->isNotEmpty())
        {{ $login }}
    @else
        <x-rapidez::button :href="route('account.login')" dusk="product-alert-login" :attributes="$login->attributes->class('flex items-center justify-center w-full')">
            <x-heroicon-o-bell class="h-5 w-5 mr-1"/>
            <span>@lang('Notify me')</span>
        </x-rapidez::button>
    @endif
</div>
