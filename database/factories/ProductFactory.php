<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'img' => 'uploads/product/card1.png',
        'price' => 100,
        'details' => $faker->paragraph(10),
    ];
});
