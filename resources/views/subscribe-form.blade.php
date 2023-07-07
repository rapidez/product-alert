<graphql-mutation v-if="user?.email" v-cloak query="@include('rapidez-product-alert::graphql.product-alert-subscribe')" :variables='{product_id: {{ $product_id }}, email: user.email}' :callback="() => {
    window.app.$emit('alerts-updated')
}" :notify="{message: '@lang('We will let you know once this product is back in stock')', type: 'success'}">
    <div slot-scope="{ mutate }">
        <x-rapidez::button v-on:click="mutate" class="flex items-center" dusk="product-alert-subscribe">
            <span class="mr-2">@lang('Notify me when this product is in stock')</span><x-heroicon-o-bell class="h-5 w-5 ml-auto"/>
        </x-rapidez::button>
    </div>
</graphql-mutation>
<div v-else class="inline-block">
    <x-rapidez::button :href="route('account.login')" class="flex items-center" dusk="product-alert-login">
        <span>@lang('Log in to be notified when this product is in stock')</span>
    </x-rapidez::button>
</div>
