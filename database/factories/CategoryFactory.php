<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(500),
    ];
});
