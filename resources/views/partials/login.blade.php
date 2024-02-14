<x-rapidez::button
    :attributes="$login->attributes->merge([
        'class' => 'flex items-center justify-center w-full',
        'dusk' => 'product-alert-login',
        'href' => route('account.login'),
    ])"
>
    <x-heroicon-o-bell class="h-5 w-5 mr-1"/>
    <span>@lang('Notify me')</span>
</x-rapidez::button>