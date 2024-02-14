<x-rapidez::button
    :attributes="$subscribe->attributes->merge([
        'class' => 'flex items-center justify-center w-full',
        'dusk' => 'product-alert-subscribe',
        'v-on:click' => 'mutate',
    ])"
>
    <x-heroicon-o-bell class="h-5 w-5 mr-1"/>
    <span>@lang('Notify me')</span>
</x-rapidez::button>        