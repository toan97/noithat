<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {
    return [
        'logo_url' => $faker->url,
        'address' => $faker->address,
        'banner' => $faker->imageUrl(1000,300),
        'hotline' => $faker->e164PhoneNumber,
        'maps' => $faker->address,
        'email' => $faker->email
    ];
});
