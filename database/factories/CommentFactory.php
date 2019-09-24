<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
	$user_id = App\User::all()->pluck('id')->toArray();
	$pro_id = App\Product::all()->pluck('id')->toArray();
    return [
		'content' => $faker->text,
		'star'    => $faker->numberBetween(0,5),
		'user_id' => $faker->randomElement($user_id),
		'pro_id'  => $faker->randomElement($pro_id)
    ];
});
