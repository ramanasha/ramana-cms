<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Child;
use Faker\Generator as Faker;

$factory->define(Child::class, function (Faker $faker) {
    return [
        'first_name'=>$faker->firstNameFemale,
        'last_name'=>$faker->lastName  ,
        'user_id'=>$faker->randomDigit,
        'grade_id'=>$faker->randomDigitNot(0),
    ];
});
