## Use the route to create:
`/factory/{product_number}/{info_number}`

- First it shows the output of `Tests\Factories\ProductFactory::create();`
- Then it shows the output of `Product::with('info')->get();`, but the products data have twice amount of which the ProductFactory had generated.

## Use the route to refresh database:
`/refresh`

## About the app

> Laravel 7.20.0

> sqlite
- files are in the `/database/sqlites` folder
> [coderello/laravel-populated-factory](https://github.com/coderello/laravel-populated-factory) 
- use it to generate `/database/factories/ProductFactories.php` from `/database/migrations/create_products_table.php`
- with a modified generator [PR #17](https://github.com/coderello/laravel-populated-factory/pull/17)
> [christophrumpel/laravel-factories-reloaded](https://github.com/christophrumpel/laravel-factories-reloaded)
- use it to generate `/tests/Factories/ProductFactory.php` from `/database/factories/ProductFactories.php`