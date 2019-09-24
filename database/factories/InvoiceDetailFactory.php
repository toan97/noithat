<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Invoice_detail;
use Faker\Generator as Faker;

$factory->define(Invoice_detail::class, function (Faker $faker) {
	$invoice_id = App\Invoice::all()->pluck('id')->toArray();
	$quantity = $faker->numberBetween(1,10);
	$sell_price = $faker->numberBetween(500,2000);
	$total_price = $quantity*$sell_price;
    return [
        'invoice_id' => $faker->randomElement($invoice_id),
        'quantity' => $quantity,
        'total_price' => $total_price,
        'sell_price' => $sell_price,
        'name' => $faker->name,
        'image' => $faker->imageUrl(500,500),
        'short_desc' => $faker->text(400),
        'color' => $faker->hexcolor,
        'material' => $faker->randomElement(['vải','da','nỉ','gỗ']),
        'manufacturer' => $faker->name
    ];
});
