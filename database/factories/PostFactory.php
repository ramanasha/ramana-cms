<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->text($maxNbChars = 200),
        'description'=>$faker->text($maxNbChars = 500),
        'user_id'=>$faker->randomDigit,
    ];
});
