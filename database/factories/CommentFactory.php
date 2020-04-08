<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment'=>$faker->text($maxNbChars = 200),
        'post_id'=>$faker->randomDigit,
        'user_id'=>$faker->randomDigit,
    ];
});
