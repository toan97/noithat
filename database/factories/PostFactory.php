<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
	$user_id = User::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'image' => $faker->imageUrl(500,500),
        'short_desc' => $faker->text(300),
        'content' => $faker->text(1000),
        'date_posted' => $faker->dateTime('now'),
        'user_id' => $faker->randomElement($user_id)
    ];
});
