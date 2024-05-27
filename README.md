# Rapidez Product Alert

Allow customers to be notified when a product comes back in stock.

## Requirements

You need to have the [Magento 2 Product Alert GraphQl module](https://github.com/niranjan-gondaliya/magento-2-product-alert-graphql).

## Installation

```bash
composer require rapidez/product-alert
```

And include the blade file where needed (`addtocart.blade.php`):
```blade
@include('rapidez-product-alert::subscribe-form', ['product_id' => $product->entity_id])
```

### Views

You can publish the views with:
```bash
php artisan vendor:publish --provider="Rapidez\ProductAlert\ProductAlertServiceProvider" --tag=views
```

## License

GNU General Public License v3. Please see [License File](LICENSE) for more information.
