<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Slider;
use Faker\Generator as Faker;

$factory->define(Slider::class, function (Faker $faker) {
    return [
        'url' => $faker->url,
        'sort_order' => $faker->numberBetween(0,4),
        'image_url' => $faker->imageUrl(1000,400),
        'title' => $faker->text(15),
        'short_desc' => $faker->text(255)
    ];
});
