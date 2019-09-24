<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Gallerie;
use Faker\Generator as Faker;

$factory->define(Gallerie::class, function (Faker $faker) {
	$pro_id = App\Product::all()->pluck('id')->toArray();
    return [
        'pro_id' => $faker->randomElement($pro_id),
        'url' => $faker->url,
        'alt' => $faker->text(10)
    ];
});
