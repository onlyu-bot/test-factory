<?php

namespace Tests\Factories;

use App\Models\Info;
use Christophrumpel\LaravelFactoriesReloaded\BaseFactory;
use Faker\Generator as Faker;

class InfoFactory extends BaseFactory
{
    protected string $modelClass = Info::class;

    public function create(array $extra = []): Info
    {
        return $this->build($extra);
    }

    public function make(array $extra = []): Info
    {
        return $this->build($extra, 'make');
    }

    public function getDefaults(Faker $faker): array
    {
        return [
            'product_id' => ProductFactory::new(),
            'description' => $faker->text(15),
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ];

    }

}
