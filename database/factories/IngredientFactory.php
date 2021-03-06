<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ingredient;
use Faker\Generator as Faker;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'slug' => $slug = 'ingredient-' . $faker->unique()->randomNumber(),
    ];
});
