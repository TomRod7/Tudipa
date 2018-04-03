<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->word), // Con ucfirts aplicamos letra mayusculas para la primera letra.
        'description' => $faker->sentence(10)
    ];
});
