<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact_form;
use Faker\Generator as Faker;

$factory->define(Contact_form::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'name' => $faker->name,
        'content' => $faker->text(500),
        'phone_number' => $faker->e164PhoneNumber
    ];
});
