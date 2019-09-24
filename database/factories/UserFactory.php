<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'password' => Hash::make('123456'),
        'address' => $faker->address,
        'phone' => $faker->e164PhoneNumber,
        'age' => $faker->numberBetween(18,100),
        'gender' => $faker->numberBetween(0,1),
        'role' => $faker->numberBetween(1,4)
    ];
});
