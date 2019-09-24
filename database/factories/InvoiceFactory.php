<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Invoice;
use Faker\Generator as Faker;

$factory->define(Invoice::class, function (Faker $faker) {
	$user_id = App\User::all()->pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'user_id' => $faker->randomElement($user_id),
        'email' => $faker->email,
        'phone_number' => $faker->e164PhoneNumber,
        'address' => $faker->address,  
        'total_price' => $faker->numberBetween(2000,6000),
        'status' => $faker->randomElement(['Chờ xác nhận','Đã xác nhận','Đã hoàn thành','Đã hủy','Đang vận chuyển']),  
    ];
});
