<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Child_subject;
use Faker\Generator as Faker;

$factory->define(Child_subject::class, function (Faker $faker) {
    return [
        'child_id'=>$faker->randomDigit,
        'subject_id'=>$faker->randomDigit,
    ];
});
