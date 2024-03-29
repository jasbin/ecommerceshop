<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(5),
        'description' => $faker->sentence(10),
        'price' => $faker->numberBetween(10,50),
        'shop_id' => $faker->numberBetween(1,3)
    ];
});
