<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category_post;
use Faker\Generator as Faker;

$factory->define(Category_post::class, function (Faker $faker) {
    return [
        'post_id'=>$faker->randomDigit,
        'category_id'=>$faker->randomDigit,
    ];
});
