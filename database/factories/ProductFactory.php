<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	$cate_id = App\Categorie::all()->pluck('id')->toArray();
	$ori_price = $faker->numberBetween(1000,3000);
	$selling = $faker->numberBetween(300,500);
	$sell_price = $ori_price-$selling;
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'cate_id' => $faker->randomElement($cate_id),
        'image' => $faker->imageUrl(500,500),
        'short_desc' => $faker->text(200),
        'detail' => $faker->text(500),
        'views' => $faker->numberBetween(100,40000),
        'star' => $faker->randomFloat(1,1,5),
        'ori_price' => $ori_price,
        'sell_price' => $sell_price,
        'sold' => $faker->numberBetween(1,20),
        'color' => $faker->hexcolor,
        'material' => $faker->randomElement(['vải','da','nỉ','gỗ']),
        'manufacturer' => $faker->name
    ];
});
