<?php

namespace Tests\Factories;

use App\Models\Product;
use Christophrumpel\LaravelFactoriesReloaded\BaseFactory;
use Faker\Generator as Faker;

class ProductFactory extends BaseFactory
{
    protected string $modelClass = Product::class;

    public function create(array $extra = []): Product
    {
        return $this->build($extra);
    }

    public function make(array $extra = []): Product
    {
        return $this->build($extra, 'make');
    }

    public function getDefaults(Faker $faker): array
    {
        return [
            'name' => $faker->name,
            'price' => $faker->numberBetween(1, 100),
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ];

    }

}
