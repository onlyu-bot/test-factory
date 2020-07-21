<?php

use App\Models\Product;
use Illuminate\Support\Facades\Artisan;
use Tests\Factories\InfoFactory;
use Tests\Factories\ProductFactory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/factory/{product_number}/{info_number}', function ($product_number, $info_number) {
    $src = "ProductFactory::new()->withFactory(InfoFactory::new(),'info',$info_number)->times($product_number)->create()";
    $return = json_encode(
        ProductFactory::new()->withFactory(InfoFactory::new(), 'info', $info_number)->times($product_number)->create(),
        JSON_PRETTY_PRINT
    );
    $products = json_encode(
        Product::with('info')->get(),
        JSON_PRETTY_PRINT
    );
    return view('factory', compact('return', 'products', 'src'));
});

Route::get('/refresh', function () {
    return Artisan::call('migrate:refresh');
});
