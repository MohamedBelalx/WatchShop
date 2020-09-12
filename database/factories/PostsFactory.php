<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'body' => Str::random(600),
        'img' => 'uploads/posts/blog-img1.jpg'
    ];
});
