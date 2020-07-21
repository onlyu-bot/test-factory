## Use the route to create:
`/factory/{product_number}/{info_number}`

- First it shows the output of `Tests\Factories\ProductFactory::create();`
- Then it shows the output of `Product::with('info')->get();`, but the products data have twice amount of which the ProductFactory had generated.

## Use the route to refresh database:
`/refresh`

## Files modified after installing laravel and composer
- .env
- app/Models/*
- config/database.php
- config/factories-reloaded.php
- database/factories/*
- database/migrations/*
- database/sqlites/*
- resources/views/factory.blade.php
- routes/web.php
- tests/Factories/*

## About the app

> Laravel 7.20.0

> sqlite
- files store in the `/database/sqlites` folder
> [coderello/laravel-populated-factory](https://github.com/coderello/laravel-populated-factory) 
- use it to generate `/database/factories/ProductFactories.php` from `/database/migrations/create_products_table.php`
- with a modified generator [PR #17](https://github.com/coderello/laravel-populated-factory/pull/17)
- command: `php artisan make:populated-factory Models\\Product`
> [christophrumpel/laravel-factories-reloaded](https://github.com/christophrumpel/laravel-factories-reloaded)
- use it to generate `/tests/Factories/ProductFactory.php` from `/database/factories/ProductFactories.php`
- command `php artisan make:factory-reloaded`