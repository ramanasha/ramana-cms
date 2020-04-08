<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post_tag;
use Faker\Generator as Faker;

$factory->define(Post_tag::class, function (Faker $faker) {
    return [
        'post_id'=>$faker->randomDigit,
        'tag_id'=>$faker->randomDigit,
    ];
});
