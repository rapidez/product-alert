<x-rapidez::button :href="route('account.login')" dusk="product-alert-login" :attributes="$login->attributes->class('flex items-center justify-center w-full')">
    <x-heroicon-o-bell class="h-5 w-5 mr-1"/>
    <span>@lang('Notify me')</span>
</x-rapidez::button>